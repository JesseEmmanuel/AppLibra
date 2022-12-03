<?php
include($_SERVER['DOCUMENT_ROOT'].'/AppLibra/functions/conn.php');

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $deny = "UPDATE tblbooks SET bookStatus=2 WHERE bookID='$id'";
    $stmt = $mysqli->stmt_init();
    $stmt->prepare($deny);
    $stmt->execute();
    header("Location: http://".$_SERVER['HTTP_HOST']."/AppLibra/app/admin/denied.php");
}
?>