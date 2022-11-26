<?php
session_start();
include "conn.php";

$username = $_POST['uname'];

$query = "select * from tblaccounts where accountUserName='$username'";
$result = mysqli_query($mysqli, $query);
$row = mysqli_fetch_assoc($result);
$accountID = $row['accountID'];
if ($row['accountUserName'] == $username)
{
    if(password_verify($_POST['password'], $row['accountPassWord']))
    {
        if($row['accountRole'] == 'Author'){
            header("Location: http://".$_SERVER['HTTP_HOST']."/AppLibra/app/author/library.php");
        }
        elseif($row['accountRole'] == 'Reader'){
            header("Location: http://".$_SERVER['HTTP_HOST']."/AppLibra/app/reader/library.php");
        }
        else{
            header("Location: http://".$_SERVER['HTTP_HOST']."/AppLibra/app/admin/home.php");
        }
        $profile = "select * from tblprofile where accountID='$accountID'";
        $profile_result = mysqli_query($mysqli, $profile);
        $profile_row = mysqli_fetch_assoc($profile_result);
        $profileID = $profile_row['profile_ID'];
        $author = "select * from tblauthor where profile_ID='$profileID'";
        $author_result = mysqli_query($mysqli, $author);
        $author_row = mysqli_fetch_assoc($author_result);
        $_SESSION['accountID'] = $accountID;
        $_SESSION['authorID'] = $author_row['authorID'];
        $_SESSION['profile_image'] = $profile_row['profileImage'];
        $_SESSION['UserFullName'] = $profile_row['firstName']." ".$profile_row['lastName'];
    }
    else
    {
        header("Location: http://".$_SERVER['HTTP_HOST']."/AppLibra/index.php");
    }
}
else{
    header("Location: http://".$_SERVER['HTTP_HOST']."/AppLibra/index.php");
}
?>