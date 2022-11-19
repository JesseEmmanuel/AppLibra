<?php
session_start();
include "conn.php";

$username = $_POST['uname'];

$query = "select * from tblaccounts where accountUserName='$username'";
$result = mysqli_query($mysqli, $query);
$row = mysqli_fetch_assoc($result);
if ($row['accountUserName'] == $username)
{
    if(password_verify($_POST['password'], $row['accountPassWord']))
    {
        if($row['accountRole'] == 1){
            header("Location: http://".$_SERVER['HTTP_HOST']."/AppLibra/app/pro/library.php");
        }
        elseif($row['accountRole'] == 2){
            header("Location: http://".$_SERVER['HTTP_HOST']."/AppLibra/app/student/library.php");
        }
        else{
            header("Location: http://".$_SERVER['HTTP_HOST']."/AppLibra/app/admin/home.php");
        }
        $_SESSION['accountID'] = $row['accountID'];
        $_SESSION['accountUserName'] = $row['accountUserName'];
        $_SESSION['profile_image'] = $row['accountProfileImage'];
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