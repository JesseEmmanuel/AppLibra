<?php 
session_start();
/******************************************USERNAME VALIDATION***********************************************************/
if(empty($_POST["uname"])) {
    die("Username is required");
}
/******************************************EMAIL VALIDATION***********************************************************/
if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    die("Valid Email is required");
}
/******************************************PASSWORD VALIDATION***********************************************************/
if(strlen($_POST['password']) < 8) {
    die("Password must be atleast 8 characters");
}

if( ! preg_match('/[a-z]/i', $_POST["password"])){
    die("Password must contain at least one letter");
};

if(!preg_match("/[0-9]/", $_POST["password"])){
    die("Password must contain at least one number");
};


if($_POST["password"] !== $_POST["re_password"]){
    die("Password does not match");
}
/******************************************FIRST NAME VALIDATION***********************************************************/
if( ! preg_match('/[a-z]/i', $_POST["fname"])){
    die("First name is invalid");
};
/******************************************LAST NAME VALIDATION***********************************************************/
if( ! preg_match('/[a-z]/i', $_POST["lname"])){
    die("Last name is invalid");
};
/******************************************Initiate Inputs to Variables***********************************************************/
$first_name = $_POST['fname'];
$last_name = $_POST['lname'];
$username = $_POST['uname'];
$email = $_POST['email'];
$contactInfo = $_POST['contactInfo'];
$account_role = $_POST['role'];
$field_of_interest = $_POST['interest'];
$profile = $_SERVER['DOCUMENT_ROOT'].'/AppLibra/uploads/images/';
$temp_file = $_FILES['profileImage']['tmp_name'];
$newfilepath = $profile.$_FILES['profileImage']['name'];
$profile_image = $_FILES['profileImage']['name'];
if(empty($profile_image)){
    $profile_image = 'profile.png';
}
else{
    return $profile_image;
}
move_uploaded_file($temp_file, $newfilepath);
$hashed_password = password_hash($_POST['password'], PASSWORD_DEFAULT);

/******************************************Include Database Connections***********************************************************/
$mysqli = require __DIR__ . "/conn.php";



/******************************************Initiate Database Queries***********************************************************/
$account = "INSERT INTO tblaccounts (accountUserName, accountPassWord, accountRole)
        Values (?, ?, ?)";

$profile = "INSERT INTO tblprofile (accountID, firstName, lastName, contactInfo, emailAddress, profileImage)
        Values (?, ?, ?, ?, ?, ?)";

$author = "INSERT INTO tblauthor (profile_ID, field_of_interest)
           Values (?, ?)";

$reader = "INSERT INTO tblreader (profile_ID, field_of_interest)
          Values (?, ?)";

$stmt = $mysqli->stmt_init();

if(!$stmt->prepare($account)){
    die("SQL error: " .$mysqli->error);
}

$stmt->bind_param("sss",
                  $username,
                  $hashed_password,
                  $account_role);

if($stmt->execute())
{
    $accID = "select * from tblaccounts where accountUserName='$username'";
    $result_acc_ID = mysqli_query($mysqli, $accID);
    $acc_row = mysqli_fetch_assoc($result_acc_ID);
    $stmt->prepare($profile);
    $stmt->bind_param("ississ",
                        $acc_row['accountID'],
                        $first_name,
                        $last_name,
                        $contactInfo,
                        $email,
                        $profile_image);
    $stmt->execute();
    $profileID = "select * from tblprofile where emailAddress='$email'";
    $result_profile_ID = mysqli_query($mysqli, $profileID);
    $profile_row = mysqli_fetch_assoc($result_profile_ID);
    $profileID = $profile_row['profile_ID'];
    if($account_role == 'Author')
    {
        $stmt->prepare($author);
        $stmt->bind_param("is", $profile_row['profile_ID'], $field_of_interest);
        $stmt->execute();
        $authorQuery = "select * from tblauthor where profile_ID='$profileID'";
        $author_result = mysqli_query($mysqli, $authorQuery);
        $author_row = mysqli_fetch_assoc($author_result);
        $_SESSION['logged_in'] = 1;
        $_SESSION['accountID'] = $acc_row['accountID'];
        $_SESSION['authorID'] = $author_row['authorID'];
        $_SESSION['profile_image'] = $profile_row['profileImage'];
        header("Location: http://".$_SERVER['HTTP_HOST']."/AppLibra/app/author/library.php");
    }
    elseif($account_role == 'Reader')
    {
        $stmt->prepare($reader);
        $stmt->bind_param("is", $profile_row['profile_ID'], $field_of_interest);
        $stmt->execute();
        $readerQuery = "select * from tblreader where profile_ID='$profileID'";
        $reader_result = mysqli_query($mysqli, $readerQuery);
        $reader_row = mysqli_fetch_assoc($reader_result);
        $_SESSION['logged_in'] = 1;
        $_SESSION['accountID'] = $acc_row['accountID'];
        $_SESSION['readerID'] = $author_row['readerID'];
        $_SESSION['profile_image'] = $profile_row['profileImage'];
        header("Location: http://".$_SERVER['HTTP_HOST']."/AppLibra/app/reader/library.php");
    }
}
else
{
    die($mysqli->error . " " . $mysqli->errno);
}

?>