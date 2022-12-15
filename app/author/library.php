<!-- Head Template -->
<?php include($_SERVER['DOCUMENT_ROOT'].'/AppLibra/app/author/template/head.php') ?>
<!--End of Head -->

<!-- Sidebar Template -->
<?php include($_SERVER['DOCUMENT_ROOT'].'/AppLibra/app/author/template/sidebar.php') ?>
<!--End of Sidebar -->
<?php
include($_SERVER['DOCUMENT_ROOT'].'/AppLibra/functions/conn.php');
$categories = "select * from tblcategories";
$books = "SELECT tblbooks.bookID, tblbooks.bookTitle, tblbooks.bookCover, tblbooks.bookPdf, tblbooks.bookType, tblbooks.bookPrice, 
                 tblcategories.categoryID, tblcategories.categoryName, tblcategories.categoryThemeColor, tblbooks.bookDesc FROM (tblbook_categories INNER JOIN tblbooks ON 
                 tblbook_categories.bookID = tblbooks.bookID) INNER JOIN tblcategories ON tblbook_categories.categoryID = tblcategories.categoryID";
$allBooks = "SELECT tblbooks.bookID AS bookID, tblbooks.bookTitle AS bookTitle, tblbooks.bookDesc, tblbooks.bookCover AS bookCover,
                tblbooks.bookPdf AS bookPdf, tblbooks.bookOverview, tblbooks.bookStatus AS bookStatus, tblbooks.bookType AS bookType, 
                tblbooks.bookPrice AS bookPrice, tblbooks.upload_timestamp AS upload_timestamp
                FROM tblbooks WHERE (((tblbooks.bookStatus)=1))";
$allBooks_result = mysqli_query($mysqli, $allBooks);
$books_result = mysqli_query($mysqli, $books);
$categories_result = mysqli_query($mysqli, $categories);
?>
<!-- Start of Content -->
<main>
    <div class="row mx-1 pt-2">
        <div class="col-md-12">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="Approved" role="tabpanel" aria-labelledby="Description">
                    <div class="row">
                        <div class="col-12 col-lg-2 mt-2 todo-menu-bar flip-menu pr-lg-0">
                            <a href="#" class="d-inline-block d-lg-none mt-1 flip-menu-close"><i
                                    class="icon-close"></i></a>
                            <div class="card border h-100 contact-menu-section"
                                style="position:left:0 !important; sticky !important;">
                                <ul class="nav flex-column contact-menu">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#" data-contacttype="all-books">
                                            All Books
                                        </a>
                                    </li>
                                    <?php while($rows=mysqli_fetch_assoc($categories_result)) { ?>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"
                                            data-contacttype="<?php echo $rows['categoryID']; ?>">
                                            <?php echo $rows['categoryName']; ?>
                                        </a>
                                    </li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-lg-10 mt-2 pl-lg-0">
                            <div class="card border h-100 contact-list-section">
                                <div class="card-header border-bottom p-1 d-flex">
                                    <a href="#" class="d-inline-block d-lg-none flip-menu-toggle"><i
                                            class="icon-menu"></i></a>
                                    <i class="icofont-search-document fa-2x text-secondary"></i>
                                    <input type="text" class="form-control border-0 p-2 w-100 h-100 contact-search"
                                        placeholder="Search by Author, Free/Premium, Title ...">
                                    <!--<a href="#" class="grid-style search-bar-menu"><i class="icon-grid"></i></a>-->
                                </div>
                                <div class="card-body p-0 overflow-auto" style="height:80vh !important;">
                                    <div class="contacts grid">
                                        <?php while($rows=mysqli_fetch_assoc($allBooks_result)) { ?>
                                        <div class="contact all-books">
                                            <div class="contact-content">
                                                <div class="contact-profile">
                                                    <img src="<?php $_SERVER['HTTP_HOST']; ?>/AppLibra/uploads/images/<?php echo $rows['bookCover']; ?>"
                                                        alt="avatar" class="user-image img-fluid">
                                                    <div class="contact-info">
                                                        <p class="contact-name mb-0"><?php echo $rows['bookTitle']; ?>
                                                        </p>
                                                        <p class="contact-position mb-0 small text-muted">
                                                            (<?php echo $rows['bookDesc']; ?>)</p>
                                                    </div>
                                                </div>
                                                <div class="contact-email">
                                                    <p class="mb-0 small">Author/s </p>
                                                    <?php
                                                            $bookID = $rows['bookID'];
                                                            $authors = "SELECT tblbook_author.book_authorID, tblbooks.bookID, tblauthor.authorID, 
                                                                tblprofile.firstName AS fname, tblprofile.lastName AS lname, tblauthor.profile_ID
                                                                FROM ((tblbook_author INNER JOIN tblbooks ON tblbook_author.bookID = tblbooks.bookID) INNER JOIN 
                                                                tblauthor ON tblbook_author.authorID = tblauthor.authorID) INNER JOIN tblprofile ON 
                                                                tblauthor.profile_ID = tblprofile.profile_ID
                                                                WHERE (((tblbooks.bookID)='$bookID'))";
                                                                $authors_result = mysqli_query($mysqli, $authors);
                                                            ?>
                                                    <?php while($authors_rows=mysqli_fetch_assoc($authors_result)) { ?>
                                                    <span
                                                        class="badge badge-pill badge-secondary mb-1"><small><?php echo $authors_rows['fname']." ".$authors_rows['lname']; ?></small></span><br />
                                                    <?php } ?>
                                                </div>
                                                <div class="contact-email">
                                                    <p class="mb-0 small">Categories </p>
                                                    <?php
                                                            $bookID = $rows['bookID'];
                                                            $categories = "SELECT tblbook_categories.book_categoryID, tblbooks.bookID,
                                                                            tblcategories.categoryID,
                                                                            tblcategories.categoryName AS categoryName, tblcategories.categoryThemeColor
                                                                            FROM (tblbook_categories INNER JOIN tblbooks ON tblbook_categories.bookID =
                                                                            tblbooks.bookID)
                                                                            INNER JOIN tblcategories ON tblbook_categories.categoryID =
                                                                            tblcategories.categoryID
                                                                            WHERE (((tblbooks.bookID)='$bookID'))";
                                                                            $categories_result = mysqli_query($mysqli, $categories);
                                                            ?>
                                                    <?php while($categories_rows=mysqli_fetch_assoc($categories_result)) { ?>
                                                    <span class="badge badge badge-success mb-1"
                                                        style="background:<?php echo $categories_rows['categoryThemeColor'] ?> !important;"><small><?php echo $categories_rows['categoryName']; ?></small>
                                                    </span>
                                                    <?php } ?>
                                                </div>
                                                <div class="contact-email">
                                                    <p class="mb-0 small">
                                                        <?php
                                                            if($rows['bookType'] == 0)
                                                            {
                                                                echo '<p class="user-email">Free</p>';
                                                            }
                                                            else{
                                                                echo '<p class="user-email">Premium</p>';
                                                            }
                                                        ?>
                                                    </p>
                                                    <p class="user-email">₱<?php echo $rows['bookPrice'] ?>.00</p>
                                                </div>
                                                <div class="line-h-1 h5">
                                                    <a class="text-success" href="#"><i
                                                            class="icon-cloud-download"></i></a>
                                                    <a class="text-info" href="#"><i class="icon-eye"></i></a>
                                                    <a class="text-danger" href="#"><i class="icon-heart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <?php } ?>
                                        <?php while($rows=mysqli_fetch_assoc($books_result)) { ?>
                                        <div class="contact <?php echo $rows['categoryID'] ?>">
                                            <div class="contact-content">
                                                <div class="contact-profile">
                                                    <img src="<?php $_SERVER['HTTP_HOST']; ?>/AppLibra/uploads/images/<?php echo $rows['bookCover']; ?>"
                                                        alt="avatar" class="user-image img-fluid">
                                                    <div class="contact-info">
                                                        <p class="contact-name mb-0 small">
                                                            <?php echo $rows['bookTitle']; ?>
                                                        </p>
                                                        <p class="contact-position mb-0 small text-muted">
                                                            <?php echo $rows['bookDesc']; ?></p>
                                                    </div>
                                                </div>
                                                <div class="contact-email">
                                                    <p class="mb-0 small">Author/s </p>
                                                    <?php
                                                            $bookID = $rows['bookID'];
                                                            $authors = "SELECT tblbook_author.book_authorID, tblbooks.bookID, tblauthor.authorID, 
                                                                tblprofile.firstName AS fname, tblprofile.lastName AS lname, tblauthor.profile_ID
                                                                FROM ((tblbook_author INNER JOIN tblbooks ON tblbook_author.bookID = tblbooks.bookID) INNER JOIN 
                                                                tblauthor ON tblbook_author.authorID = tblauthor.authorID) INNER JOIN tblprofile ON 
                                                                tblauthor.profile_ID = tblprofile.profile_ID
                                                                WHERE (((tblbooks.bookID)='$bookID'))";
                                                                $authors_result = mysqli_query($mysqli, $authors);
                                                            ?>
                                                    <?php while($authors_rows=mysqli_fetch_assoc($authors_result)) { ?>
                                                    <span
                                                        class="badge badge-pill badge-secondary mb-1"><small><?php echo $authors_rows['fname']." ".$authors_rows['lname']; ?></small></span><br />
                                                    <?php } ?>
                                                </div>
                                                <!--<div class="contact-location">
                                                    <p class="mb-0 small">Categories </p>
                                                    <span class="badge badge badge-success mb-1"
                                                        style="background:<?php echo $rows['categoryThemeColor'] ?> !important;"><small><?php echo $rows['categoryName']; ?></small>
                                                    </span>
                                                </div>-->
                                                <div class="contact-email">
                                                    <p class="mb-0 small">
                                                        <?php
                                                            if($rows['bookType'] == 0)
                                                            {
                                                                echo '<p class="user-email">Free</p>';
                                                            }
                                                            else{
                                                                echo '<p class="user-email">Premium</p>';
                                                            }
                                                        ?>
                                                    </p>
                                                    <p class="user-email">₱<?php echo $rows['bookPrice'] ?>.00</p>
                                                </div>
                                                <div class="line-h-1 h5">
                                                    <a class="text-success" href="#"><i
                                                            class="icon-cloud-download"></i></a>
                                                    <a class="text-info" href="#"><i class="icon-eye"></i></a>
                                                    <a class="text-danger" href="#"><i class="icon-heart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- End of Content -->
<?php include($_SERVER['DOCUMENT_ROOT'].'/AppLibra/app/author/template/footer.php') ?>