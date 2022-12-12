<!-- Head Template -->
<?php include($_SERVER['DOCUMENT_ROOT'].'/AppLibra/app/admin/template/head.php') ?>
<!--End of Head -->

<!-- Sidebar Template -->
<?php include($_SERVER['DOCUMENT_ROOT'].'/AppLibra/app/admin/template/sidebar.php') ?>
<!--End of Sidebar -->
<?php
include($_SERVER['DOCUMENT_ROOT'].'/AppLibra/functions/conn.php');
$books = "SELECT tblbooks.bookID AS bookID, tblbooks.bookTitle AS bookTitle, tblbooks.bookDesc, tblbooks.bookCover AS bookCover,
                 tblbooks.bookPdf AS bookPdf, tblbooks.bookOverview, tblbooks.bookStatus AS bookStatus, tblbooks.bookType AS bookType, 
                 tblbooks.bookPrice AS bookPrice, tblbooks.upload_timestamp AS upload_timestamp
                 FROM tblbooks WHERE (((tblbooks.bookStatus)=1))";
$books_result = mysqli_query($mysqli, $books);
?>
<main>
    <div class="container-fluid site-width">
        <div class="row mx-1 pt-2">
            <div class="col-12 mt-3">
                <div class="card">
                    <div class="card-header  justify-content-between align-items-center">
                        <h4 class="card-title">Approved Uploads</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="display table dataTable table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Cover</th>
                                        <th>Title</th>
                                        <th>Categories</th>
                                        <th>Authors</th>
                                        <th>Type</th>
                                        <th>Price</th>
                                        <th>Preview</th>
                                        <th>Status</th>
                                        <th>Date Upload</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php while($rows=mysqli_fetch_assoc($books_result)) { ?>
                                    <tr>
                                        <td>
                                            <img src="<?php $_SERVER['HTTP_HOST']; ?>/AppLibra/uploads/images/<?php echo $rows['bookCover']; ?>"
                                                alt="avatar" class="img-fluid" height="50px" width="50px">
                                        </td>
                                        <td><?php echo $rows['bookTitle']; ?></td>
                                        <td>
                                            <?php
                                            $bookID = $rows['bookID'];
                                            $categories = "SELECT tblbook_categories.book_categoryID, tblbooks.bookID,
                                            tblcategories.categoryID, tblcategories.categoryThemeColor,
                                            tblcategories.categoryName AS categoryName
                                            FROM (tblbook_categories INNER JOIN tblbooks ON tblbook_categories.bookID =
                                            tblbooks.bookID)
                                            INNER JOIN tblcategories ON tblbook_categories.categoryID =
                                            tblcategories.categoryID
                                            WHERE (((tblbooks.bookID)='$bookID'))";
                                            $categories_result = mysqli_query($mysqli, $categories);
                                            ?>
                                            <?php while($categories_rows=mysqli_fetch_assoc($categories_result)) { ?>
                                            <span class="badge badge-pill badge-success mb-1" style="background:<?php echo $categories_rows['categoryThemeColor'] ?>!important;"><small><?php echo $categories_rows['categoryName']; ?></small></span>
                                            <?php } ?>
                                        </td>
                                        <td>
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
                                                class="badge badge-pill badge-secondary mb-1"><small><?php echo$authors_rows['fname']." ".$authors_rows['lname']; ?></small></span>
                                            <?php } ?>
                                        </td>
                                        <td><?php 
                                            if($rows['bookType'] == 0){
                                                echo "Free";
                                            }
                                            else{
                                                echo "Premium";
                                            }
                                            ?>
                                        </td>
                                        <td><?php echo $rows['bookPrice']; ?></td>
                                        <td><a href="preview.php?bookID=<?php echo $rows['bookID']; ?>"
                                                class="badge p-2 badge-info mb-1">Preview</a><br /></td>
                                        <td>
                                            <button type="button" class="btn btn-success btn-sm dropdown-toggle"
                                                data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">Approved</button>
                                            <div class="dropdown-menu p-0">
                                                <a class="dropdown-item" href="admin_deny.php?id=<?php echo $rows['bookID']; ?>">Deny</a>
                                            </div>
                                        </td>
                                        <td><?php echo $rows['upload_timestamp']; ?></td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- End of Content -->

<?php include($_SERVER['DOCUMENT_ROOT'].'/AppLibra/app/admin/template/footer.php') ?>