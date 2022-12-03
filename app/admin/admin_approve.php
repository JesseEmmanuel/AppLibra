<?php
include($_SERVER['DOCUMENT_ROOT'].'/AppLibra/functions/conn.php');

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $approve = "UPDATE tblbooks SET bookStatus=1 WHERE bookID='$id'";
    $stmt = $mysqli->stmt_init();
    $stmt->prepare($approve);
    $stmt->execute();
    header("Location: http://".$_SERVER['HTTP_HOST']."/AppLibra/app/admin/approved.php");
}
?>