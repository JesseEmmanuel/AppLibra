<?php 
session_start();

//$book_cover_imageName = $_FILES['book-cover']['name'];
$book_pdf_file = $_FILES['book-file']['name'];
$book_pdf_filename = preg_replace("/\s+/", "_", $book_pdf_file);
echo $book_pdf_filename;
?>