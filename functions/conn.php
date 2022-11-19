<?php 

$server_name = $_SERVER['SERVER_NAME'];
$server_uname = "root";
$server_password = "pa55";
$db_name = "libra";

$mysqli = new mysqli(hostname: $server_name,
                     username: $server_uname,
                     password: $server_password,
                     database: $db_name);

if($mysqli->connect_errno)
{
    die ("Connect error: " . $mysqli->connect_error);
}

return $mysqli;
?>