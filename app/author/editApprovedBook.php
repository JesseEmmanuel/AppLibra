<!-- Head Template -->
<?php include($_SERVER['DOCUMENT_ROOT'].'/AppLibra/app/author/template/head.php') ?>
<!--End of Head -->

<!-- Sidebar Template -->
<?php include($_SERVER['DOCUMENT_ROOT'].'/AppLibra/app/author/template/sidebar.php') ?>
<!--End of Sidebar -->
<?php
include($_SERVER['DOCUMENT_ROOT'].'/AppLibra/functions/conn.php');
$bookID = $_GET['bookID'];
$bookQuery = "SELECT tblbooks.bookID, tblbooks.bookTitle, tblbooks.bookDesc, tblbook_categories.book_categoryID, tblcategories.categoryID, 
                tblcategories.categoryName, tblbook_author.book_authorID, tblauthor.authorID, tblprofile.firstName, tblprofile.lastName, 
                tblbooks.bookType, tblbooks.bookPrice, tblbooks.bookOverview
              FROM tblcategories INNER JOIN (tblprofile INNER JOIN (tblauthor INNER JOIN (tblbook_categories INNER JOIN 
              (tblbook_author INNER JOIN tblbooks ON tblbook_author.bookID = tblbooks.bookID) ON tblbook_categories.bookID = tblbooks.bookID) 
              ON tblauthor.authorID = tblbook_author.authorID) ON tblprofile.profile_ID = tblauthor.profile_ID) ON tblcategories.categoryID = 
              tblbook_categories.categoryID
              WHERE (((tblbooks.bookID)='$bookID'))";
$bookQueryResult = mysqli_query($mysqli, $bookQuery);
$bookQueryRow = mysqli_fetch_assoc($bookQueryResult);
$bookCategories = [];
foreach($bookQueryResult as $categoryRow)
{
    $bookCategories[] = $categoryRow['categoryID'];
}
?>
<main>
    <div class="container-fluid site-width">
        <div class="row">
            <div class="col-12 pt-3">
                <div class="card">
                    <div class="card-header">
                        <h5 class="modal-title" id="myLargeModalLabel10"><i class="icofont-info-circle"></i>
                            Book Details</h5>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <form action="<?php $_SERVER['DOCUMENT_ROOT']; ?>/AppLibra/functions/updatebook.php?bookID=<?php echo $bookID?>" method="POST" enctype="multipart/form-data">
                                        <div class="form-row">
                                            <div class="col-6 mb-3">
                                                <label for="username">Book Title</label>
                                                <input type="text" name="book-title"
                                                    value="<?php echo $bookQueryRow['bookTitle'] ?>"
                                                    class="form-control" placeholder="Title of the book">
                                            </div>
                                            <div class="col-6 mb-3">
                                                <label>Description</label>
                                                <input type="text" name="book-desc"
                                                    value="<?php echo $bookQueryRow['bookDesc'] ?>" class="form-control"
                                                    placeholder="short description for the book">
                                            </div>
                                            <div class="col-6 mb-3">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">Categories</span>
                                                    </div>
                                                    <select multiple name="book-category[]">
                                                        <option label="Choose on thing">Choose a
                                                            category</option>
                                                        <?php
                                                            $categories = "select * from tblcategories";
                                                            $categoriesResult = mysqli_query($mysqli, $categories);
                                                            foreach($categoriesResult as $row) { 
                                                            ?>
                                                        <option value="<?php echo $row['categoryID'] ?>" <?php 
                                                                if(in_array($row['categoryID'], $bookCategories))
                                                                {
                                                                    echo 'selected';
                                                                }
                                                                else{
                                                                    echo '';
                                                                }
                                                            ?>>

                                                            <?php echo $row['categoryName'] ?>
                                                            <?php } ?>
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">Book Author/s</span>
                                                    </div>
                                                    <select multiple name="book-author[]">
                                                        <option label="Choose on thing">Choose authors</option>
                                                        <?php
                                                            $bookAuthors = "SELECT tblbooks.bookID, tblauthor.authorID, tblprofile.firstName, tblprofile.lastName
                                                            FROM ((tblbook_author INNER JOIN tblbooks ON tblbook_author.bookID = tblbooks.bookID) INNER JOIN tblauthor ON tblbook_author.authorID = tblauthor.authorID) INNER JOIN tblprofile ON tblauthor.profile_ID = tblprofile.profile_ID
                                                            WHERE (((tblbooks.bookID)='$bookID'))";
                                                            $bookAuthorsResult = mysqli_query($mysqli, $bookAuthors);
                                                            foreach($bookAuthorsResult as $row) { 
                                                        ?>
                                                        <option selected="selected" value="<?php $row['authorID'] ?>">
                                                            <?php echo $row['firstName']." ".$row['lastName'] ?>
                                                        </option>
                                                        <?php } ?>

                                                        <?php
                                                            $authors = "SELECT tblauthor.authorID, tblprofile.firstName, tblprofile.lastName
                                                            FROM tblauthor INNER JOIN tblprofile ON tblauthor.profile_ID = tblprofile.profile_ID";
                                                            $authorsResult = mysqli_query($mysqli, $authors);
                                                            foreach($authorsResult as $row) {  
                                                        ?>
                                                        <option value="<?php echo $row['authorID'] ?>">
                                                            <?php echo $row['firstName']." ".$row['lastName'] ?>
                                                        </option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <label for="username">Book Type</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">Free/Premium</span>
                                                    </div>
                                                    <select name="book-type" id="book_type">
                                                        <option value="0" <?= ($bookQueryRow['bookType'] == 0) ? 'selected':''; ?>> Free</option>
                                                        <option value="1" <?= ($bookQueryRow['bookType'] == 1) ? 'selected':''; ?>> Premium</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-6 mb-3 align-self-center">
                                                <label for="username">Book Price</label>
                                                <input type="number" name="book-price"
                                                    value="<?php echo $bookQueryRow['bookPrice'] ?>.00" id="book_price"
                                                    readonly class="form-control" placeholder="0.00">
                                            </div>
                                            <div class="col-12 mb-3">
                                                <div class="card">
                                                    <div
                                                        class="card-header d-flex justify-content-between align-items-center">
                                                        <h4 class="card-title">Book Overview</h4>
                                                    </div>
                                                    <div class="card-body">
                                                        <textarea name="overview"
                                                            class="summernote"><p><?php echo $bookQueryRow['bookOverview'] ?></p></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col" style="display:flex !important; justify-content:center !important;">
                                                <button type="submit" class="btn btn-success btn-block mb-2">Update</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<script language="javascript">
    const select = document.querySelector('#book_type')
    if (select.value == '0') {
            document.getElementById('book_price').setAttribute("readonly", '');
            document.getElementById('book_price').setAttribute("value", '0.00');
        }

        if (select.value == '1') {
            document.getElementById('book_price').removeAttribute("readonly");
        }
    select.onchange = () => {
        if (select.value == '0') {
            document.getElementById('book_price').setAttribute("readonly", '');
            document.getElementById('book_price').setAttribute("value", '0.00');
        }

        if (select.value == '1') {
            document.getElementById('book_price').removeAttribute("readonly");
        }
    }
</script>
<!-- End of Content -->

<?php include($_SERVER['DOCUMENT_ROOT'].'/AppLibra/app/author/template/footer.php') ?>