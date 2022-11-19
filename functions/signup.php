<?php 
session_start();
/******************************************USERNAME VALIDATION ***********************************************************/
if(empty($_POST["uname"])) {
    die("Username is required");
}
/******************************************EMAIL VALIDATION ***********************************************************/
if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    die("Valid Email is required");
}
/******************************************PASSWORD VALIDATION ***********************************************************/
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
/******************************************FIRST NAME VALIDATION ***********************************************************/
if( ! preg_match('/[a-z]/i', $_POST["fname"])){
    die("First name is invalid");
};
/******************************************LAST NAME VALIDATION ***********************************************************/
if( ! preg_match('/[a-z]/i', $_POST["lname"])){
    die("Last name is invalid");
};

$fullname = $_POST['fname']. ' ' .$_POST['lname'];
$username = $_POST['uname'];
$email = $_POST['email'];
$profile = $_SERVER['DOCUMENT_ROOT'].'/AppLibra/uploads/images/';
$temp_file = $_FILES['profileImage']['tmp_name'];
$newfilepath = $profile.$_FILES['profileImage']['name'];
$profile_image = $_FILES['profileImage']['name'];
move_uploaded_file($temp_file, $newfilepath);

$hashed_password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$mysqli = require __DIR__ . "/conn.php";

$sql = "INSERT INTO tblaccounts (accountFullName, accountUserName, accountPassWord, categoryID, accountEmail, accountContactInfo, accountProfileImage, accountRole)
        Values (?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $mysqli->stmt_init();

if(!$stmt->prepare($sql)){
    die("SQL error: " .$mysqli->error);
}

$stmt->bind_param("sssisisi",
                  $fullname,
                  $_POST['uname'],
                  $hashed_password,
                  $_POST['interest'],
                  $_POST['email'],
                  $_POST['contactInfo'],
                  $profile_image,
                  $_POST['role']);

if($stmt->execute()){
    $query = "select * from tblaccounts where accountUserName='$username'";
    $result = mysqli_query($mysqli, $query);
    $row = mysqli_fetch_assoc($result);
    $_SESSION['logged_in'] = 1;
    $_SESSION['userID'] = $row['accountID'];
    $_SESSION['accountUserName'] = $username;
    $_SESSION['email'] = $email;
    $_SESSION['FullName'] = $fullname;
    $_SESSION['accountRole'] = $_POST['role'];
    $_SESSION['profile_image'] = $row['accountProfileImage'];
    if($_POST['role'] == 1){
        header("Location: http://".$_SERVER['HTTP_HOST']."/AppLibra/app/pro/library.php");
        //echo $_SERVER['HTTP_HOST'].'/AppLibra/uploads/images/'.$_FILES['profileImage']['name'];
    }
    else
    {
        header("Location: http://".$_SERVER['HTTP_HOST']."/AppLibra/app/student/library.php");
    }
}
else
{
    die($mysqli->error . " " . $mysqli->errno);
}

?>