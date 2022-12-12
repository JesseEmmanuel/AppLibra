<?php 
session_start();

//Initiate User ID//

$book_author_ID = $_SESSION['authorID'];

//Initiate Book Category//
$book_category = $_POST['book-category'];

//Initiate Book Title//
$book_title = $_POST['book-title'];

//Initiate Book Description//
$book_desc = $_POST['book-desc'];

//Initiate Book Cover Image FilePath//
$image_path = $_SERVER['DOCUMENT_ROOT'].'/AppLibra/uploads/images/';
$temp_image_path = $_FILES['book-cover']['tmp_name'];
$book_cover_image = $_FILES['book-cover']['name'];
$book_cover_imageName = preg_replace("/\s+/", "_", $book_cover_image);
$book_cover_image_path = $image_path.$book_cover_imageName;
move_uploaded_file($temp_image_path, $book_cover_image_path);


//Initiate Book File PDF FilePath//
$document_path = $_SERVER['DOCUMENT_ROOT'].'/AppLibra/uploads/docs/';
$temp_pdf_path = $_FILES['book-file']['tmp_name'];
$book_pdf_file = $_FILES['book-file']['name'];
$book_pdf_filename = preg_replace("/\s+/", "_", $book_pdf_file);
$book_file_pdf_path = $document_path.$book_pdf_filename;
move_uploaded_file($temp_pdf_path, $book_file_pdf_path);

//Initiate Book Type//
$book_type = $_POST['book-type'];

//Initiate Book Price//
$book_price = $_POST['book-price'];

//Initiate Book Overview//
$book_overview = $_POST['overview'];

$book_status = 0;

$book_authors = $_POST['book-author'];
$book_categories = $_POST['book-category'];

$mysqli = require __DIR__ . "/conn.php";
$book = "INSERT INTO tblbooks (bookTitle, bookDesc, bookCover, bookPdf, bookType, bookPrice, bookOverview, bookStatus)
        Values (?, ?, ?, ?, ?, ?, ?, ?)";
$category = "INSERT INTO tblbook_categories (bookID, categoryID)
             Values(?,?)";

$insert_categories = "INSERT INTO tblbook_categories (bookID, categoryID)
                      VALUES (?, ?)";
$insert_authors = "INSERT INTO tblbook_author (authorID, bookID)
                   VALUES (?, ?)";
$stmt = $mysqli->stmt_init();

$stmt->prepare($book);
$stmt->bind_param("sssssdsi",
                $book_title,
                $book_desc,
                $book_cover_imageName,
                $book_pdf_filename,
                $book_type,
                $book_price,
                $book_overview,
                $book_status);
$stmt->execute();
$book_query = "select * from tblbooks where bookTitle='$book_title'";
$book_query_result = mysqli_query($mysqli, $book_query);
$book_query_row = mysqli_fetch_assoc($book_query_result);
$bookID = $book_query_row['bookID'];
for ($x = 0; $x<count($book_categories); $x++){
    //INSERT bookID and Category
    $stmt->prepare($insert_categories);
    $stmt->bind_param("ii",
                        $bookID,
                        $book_categories[$x]);
    $stmt->execute();
}
for ($y=0;$y<count($book_authors);$y++){
    //INSERT authorID and bookID
    $stmt->prepare($insert_authors);
    $stmt->bind_param("ii",
                        $book_authors[$y],
                        $bookID);
    $stmt->execute();
}

header("Location: http://".$_SERVER['HTTP_HOST']."/AppLibra/app/author/uploadview.php");

?>