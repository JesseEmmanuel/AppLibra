<?php 
session_start();
$authors = $_POST['book-author'];
$categories = $_POST['book-category'];

$bookID = 5;

$mysqli = require __DIR__ . "/conn.php";
$insert_categories = "INSERT INTO tblbook_categories (bookID, categoryID)
                      VALUES (?, ?)";
$insert_authors = "INSERT INTO tblbook_author (authorID, bookID)
                   VALUES (?, ?)";
$stmt = $mysqli->stmt_init();

//echo $categories[0];
//echo $authors[0];

for($x=0;$x<count($categories);$x++)
{
    /*$stmt->prepare($insert_categories);
    $stmt->bind_param("ii",
                      $bookID,
                      $categories[$x]);
    $stmt->execute();*/
    echo $categories[$x]. "</br>";
}

for ($y=0;$y<count($authors);$y++)
{
    /*$stmt->prepare($insert_authors);
    $stmt->bind_param("",
                      $authors[$y],
                      $bookID);
    $stmt->execute();*/
    
    echo $authors[$y]."</br>";
}



?>