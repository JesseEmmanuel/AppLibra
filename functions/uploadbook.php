<?php 
session_start();

//Initiate User ID//

$book_author_ID = $_SESSION['userID'];

//Initiate Book Category//
$book_category = $_POST['book-category'];

//Initiate Book Title//
$book_title = $_POST['book-title'];

//Initiate Book Description//
$book_desc = $_POST['book-desc'];

//Initiate Book Cover Image FilePath//
$image_path = $_SERVER['DOCUMENT_ROOT'].'/AppLibra/uploads/images/';
$temp_image_path = $_FILES['book-cover']['tmp_name'];
$book_cover_imageName = $_FILES['book-cover']['name'];
$book_cover_image_path = $image_path.$_FILES['book-cover']['name'];
move_uploaded_file($temp_image_path, $book_cover_image_path);


//Initiate Book File PDF FilePath//
$document_path = $_SERVER['DOCUMENT_ROOT'].'/AppLibra/uploads/docs/';
$temp_pdf_path = $_FILES['book-file']['tmp_name'];
$book_pdf_filename = $_FILES['book-file']['name'];
$book_file_pdf_path = $document_path.$_FILES['book-file']['name'];
move_uploaded_file($temp_pdf_path, $book_file_pdf_path);

//Initiate Book Type//
$book_type = $_POST['book-type'];

//Initiate Book Price//
$book_price = $_POST['book-price'];

//Initiate Book Overview//
$book_overview = $_POST['overview'];

$book_status = 0;

$mysqli = require __DIR__ . "/conn.php";
$sql = "INSERT INTO tblbooks (accountID, categoryID, bookTitle, bookDesc, bookCover, bookPdf, bookType, bookPrice, bookOverview, bookStatus)
        Values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $mysqli->stmt_init();

if(!$stmt->prepare($sql)){
    die("SQL error: " .$mysqli->error);
}

$stmt->bind_param("iissssidsi",
                  $book_author_ID,
                  $book_category,
                  $book_title,
                  $book_desc,
                  $book_cover_imageName,
                  $book_pdf_filename,
                  $book_type,
                  $book_price,
                  $book_overview,
                  $book_status);

if($stmt->execute()){
    header("Location: http://".$_SERVER['HTTP_HOST']."/AppLibra/app/pro/upload.php");
}

//print_r($_POST);

//var_dump($_FILES['book-cover']['tmp_name']);
//var_dump($_FILES['book-cover']['tmp_name'])
//echo $book_cover_image_path;
//echo $book_file_pdf_path;
//echo $book_overview;
//var_dump($_POST);
//echo $_SESSION['userID'];
?>