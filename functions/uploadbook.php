<?php 
session_start();


$book_overview = $_POST['overview'];


//var_dump($_FILES['book-file']['tmp_name']);
//var_dump($_FILES['book-cover']['tmp_name'])
echo $book_overview;

?>