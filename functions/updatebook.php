<?php
session_start();
$mysqli = require __DIR__ . "/conn.php";
$bookID = $_GET['bookID'];
$newCategories = $_POST['book-category'];
$fetchCategoryID = "SELECT * from tblbook_categories where bookID='$bookID'";
$bookCategoryIDresult = mysqli_query($mysqli, $fetchCategoryID);
$bookCategories = [];
foreach($bookCategoryIDresult as $row)
{
    $bookCategories[] = $row['categoryID'];
}
$bookTitle = $_POST['book-title'];
$bookDesc = $_POST['book-desc'];
$bookType = $_POST['book-type'];
$bookPrice = $_POST['book-price'];
$bookOverview = $_POST['overview'];

//Insert New Categories
foreach($newCategories as $inputCategories)
{
    if(!in_array($inputCategories, $bookCategories))
    {
        $insert_category = "INSERT INTO tblbook_categories (bookID,categoryID) VALUES ('$bookID','$inputCategories')";
        $inser_categoryRun = mysqli_query($mysqli, $insert_category);
    }
}

//Delete Existing Category
foreach($bookCategories as $row)
{
    if(!in_array($row, $newCategories))
    {
        $delete_category = "DELETE FROM tblbook_categories WHERE bookID='$bookID' AND categoryID='$row'";
        $delete_categoryRun = mysqli_query($mysqli, $delete_category);
    }
}

$updateBook = "UPDATE tblbooks SET bookTitle='$bookTitle',bookDesc='$bookDesc',bookType='$bookType',
               bookPrice='$bookPrice',bookOverview='$bookOverview' WHERE bookID='$bookID'";
$updateBookRun = mysqli_query($mysqli, $updateBook);

header("Location: http://".$_SERVER['HTTP_HOST']."/AppLibra/app/author/uploadview.php");
?>