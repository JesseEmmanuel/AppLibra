<!-- Head Template -->
<?php include($_SERVER['DOCUMENT_ROOT'].'/AppLibra/app/author/template/head.php') ?>
<!--End of Head -->

<!-- Sidebar Template -->
<?php include($_SERVER['DOCUMENT_ROOT'].'/AppLibra/app/author/template/sidebar.php') ?>
<!--End of Sidebar -->

<!-- Database Query -->
<?php 
include($_SERVER['DOCUMENT_ROOT'].'/AppLibra/functions/conn.php');
$authID = $_SESSION['authorID'];
$query="select * from tblcategories";
$pending_books_query="SELECT tblauthor.authorID AS author_ID, tblbooks.bookID AS book_ID, tblbooks.bookTitle AS title, 
                             tblbooks.bookDesc AS book_description, tblbooks.bookCover AS cover, tblbooks.bookType AS book_type, 
                             tblbooks.bookStatus AS book_status, tblbooks.bookPrice AS book_price, tblbooks.upload_timestamp AS book_timestamp
                      FROM (tblbook_author INNER JOIN tblauthor ON tblbook_author.authorID = tblauthor.authorID) 
                      INNER JOIN tblbooks ON tblbook_author.bookID = tblbooks.bookID
                      WHERE (((tblauthor.authorID)='$authID') AND ((tblbooks.bookStatus)=0))";
$approved_books_query="SELECT tblauthor.authorID AS author_ID, tblbooks.bookID AS book_ID, tblbooks.bookTitle AS title, 
                        tblbooks.bookDesc AS book_description, tblbooks.bookCover AS cover, tblbooks.bookType AS book_type, 
                        tblbooks.bookStatus AS book_status, tblbooks.bookPrice AS book_price, tblbooks.upload_timestamp AS book_timestamp
                        FROM (tblbook_author INNER JOIN tblauthor ON tblbook_author.authorID = tblauthor.authorID) 
                        INNER JOIN tblbooks ON tblbook_author.bookID = tblbooks.bookID
                        WHERE (((tblauthor.authorID)='$authID') AND ((tblbooks.bookStatus)=1))";
$result=mysqli_query($mysqli ,$query);
$pending_books_result=mysqli_query($mysqli, $pending_books_query);
$approved_books_result=mysqli_query($mysqli, $approved_books_query);
?>
<!-- End Query -->
<!-- Start of Content -->
<main>
    <div class="row mx-1 pt-1">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body d-md-flex text-center">
                    <ul class="nav nav-pills d-md-flex m-0 pl-0 list-unstyled">
                        <li class="nav-item pill py-1 px-2 mr-md-2 text-center my-1">
                            <a class="nav-link body-color mb-0 fs-5 active" data-toggle="tab" href="#Approved"> Approved
                            </a>
                        </li>
                        <li class="nav-item pill py-1 px-2 mr-md-2 text-center my-1">
                            <a class="nav-link body-color mb-0 fs-5" data-toggle="tab" href="#Pending"> Pending </a>
                        </li>
                    </ul>
                    <!--<a href="#" class="btn btn-outline-success font-w-600 my-auto text-nowrap ml-auto add-event"
                        data-toggle="modal" data-target=".bd-example-modal-lg"><i class="icofont-book-alt"></i> Add Book
                    </a>-->
                    <a href="<?php $_SERVER['HTTP_HOST']; ?>/AppLibra/app/author/addbook.php"
                        class="btn btn-outline-success font-w-600 my-auto text-nowrap ml-auto">
                        <i class="icofont-book-alt">
                        </i> Add Book
                    </a>
                </div>
            </div>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="Approved" role="tabpanel" aria-labelledby="Description">
                    <div class="row">
                        <div class="col-12 col-lg-2 mt-1 todo-menu-bar flip-menu pr-lg-0">
                            <a href="#" class="d-inline-block d-lg-none mt-1 flip-menu-close"><i
                                    class="icon-close"></i></a>
                            <div class="card border h-100 contact-menu-section">
                                <ul class="nav flex-column contact-menu">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#" data-contacttype="contact">
                                            <i class="icon-list"></i> All
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#" data-contacttype="0">
                                            <i class="far fa-window-close"></i> Free
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#" data-contacttype="1">
                                            <i class="fas fa-money-check-alt"></i> Premium
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-lg-10 mt-1 pl-lg-0">
                            <div class="card border h-100 contact-list-section">
                                <div class="card-header border-bottom p-1 d-flex">
                                    <a href="#" class="d-inline-block d-lg-none flip-menu-toggle"><i
                                            class="icon-menu"></i></a>
                                    <input type="text" class="form-control border-0 p-2 w-100 h-100 contact-search"
                                        placeholder="Search ...">
                                    <a href="#" class="grid-style search-bar-menu"><i class="icon-grid"></i></a>
                                </div>
                                <div class="card-body p-0 overflow-auto" style="height:70vh !important;">
                                    <div class="contacts grid">
                                        <?php while($rows=mysqli_fetch_assoc($approved_books_result)) { ?>
                                        <div class="contact <?php echo $rows['book_type'] ?>">
                                            <div class="contact-content">
                                                <div class="contact-profile">
                                                    <img src="<?php $_SERVER['HTTP_HOST']; ?>/AppLibra/uploads/images/<?php echo $rows['cover']; ?>"
                                                        alt="avatar" class="user-image img-fluid">
                                                    <div class="contact-info">
                                                        <p class="contact-name mb-0"><?php echo $rows['title'] ?></p>
                                                        <p
                                                            class="contact-position mb-0 small text-muted">
                                                            <?php echo $rows['book_description'] ?></p>
                                                    </div>
                                                </div>
                                                <div class="contact-email">
                                                    <p class="mb-0 small">Author/s: </p>
                                                    <p class="user-email">
                                                        <?php
                                                        $bookID = $rows['book_ID'];
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
                                                    </p>
                                                </div>
                                                <div class="contact-location">
                                                    <p class="mb-0 small">Categories: </p>
                                                    <p class="user-location">
                                                        <?php
                                                            $bookID = $rows['book_ID'];
                                                            $categories = "SELECT tblbook_categories.book_categoryID, tblbooks.bookID,
                                                            tblcategories.categoryID, tblcategories.categoryName AS categoryName, 
                                                            tblcategories.categoryThemeColor FROM (tblbook_categories INNER JOIN tblbooks ON tblbook_categories.bookID =
                                                            tblbooks.bookID)
                                                            INNER JOIN tblcategories ON tblbook_categories.categoryID =
                                                            tblcategories.categoryID
                                                            WHERE (((tblbooks.bookID)='$bookID'))";
                                                            $categories_result = mysqli_query($mysqli, $categories);
                                                        ?>
                                                        <?php while($categories_rows=mysqli_fetch_assoc($categories_result)) { ?>
                                                        <span class="badge badge badge-success mb-1"
                                                            style="background:<?php echo $categories_rows['categoryThemeColor'] ?>!important;"><small><?php echo $categories_rows['categoryName']; ?></small>
                                                        </span>
                                                        <?php } ?>
                                                    </p>
                                                </div>
                                                <div class="contact-phone">
                                                    <p class="mb-0 small">Price</p>
                                                    <p class="user-phone">₱
                                                        <?php echo $rows['book_price'].'.00' ?>
                                                    </p>
                                                </div>
                                                <div class="line-h-1 h5">
                                                    <a href="">
                                                        <button type="button" class="btn btn-sm btn-secondary"
                                                            data-toggle="tooltip" data-placement="bottom"
                                                            title="Re-upload pdf">
                                                            <i class="icofont-upload"></i>
                                                        </button>
                                                    </a>
                                                    <a href="editApprovedBook.php?bookID=<?php echo $rows['book_ID'] ?>">
                                                        <button type="button" class="btn btn-sm btn-info"
                                                            data-toggle="tooltip" data-placement="bottom"
                                                            title="Edit Book Summary">
                                                            <i class="icofont-ui-edit"></i>
                                                        </button>
                                                    </a>
                                                    <a href="">
                                                        <button type="button" class="btn btn-sm btn-danger"
                                                            data-toggle="tooltip" data-placement="bottom"
                                                            title="Delete this book">
                                                            <i class="icofont-trash"></i>
                                                        </button>
                                                    </a>
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
                <div class="tab-pane fade" id="Pending" role="tabpanel" aria-labelledby="Additional">
                    <div class="row">
                        <div class="col-12 col-md-12 mt-3">
                            <div class="card border h-100 contact-list-section">
                                <div class="card-header border-bottom p-1 d-flex">
                                    <a href="#" class="d-inline-block d-lg-none flip-menu-toggle"><i
                                            class="icon-menu"></i></a>
                                    <input type="text" class="form-control border-0 p-2 w-100 h-100 contact-search"
                                        placeholder="Search ...">
                                    <a href="#" class="list-style search-bar-menu border-0 active"><i
                                            class="icon-list"></i></a>
                                </div>
                                <div class="card-body p-0 vh-100 overflow-auto" style="height:50vh !important;">
                                    <div class="contacts list">
                                        <div class="contact family-contact">

                                            <?php while($rows=mysqli_fetch_assoc($pending_books_result)) { ?>
                                            <div class="contact-content">
                                                <div class="contact-profile">
                                                    <img src="<?php $_SERVER['HTTP_HOST']; ?>/AppLibra/uploads/images/<?php echo $rows['cover']; ?>"
                                                        alt="avatar" class="user-image img-fluid">
                                                    <div class="contact-info">
                                                        <p class="contact-name mb-0 small font-weight-bold">
                                                            <?php echo $rows['title']; ?>
                                                        </p>
                                                        <p class="contact-position mb-0 small text-muted">
                                                            <?php echo $rows['book_description']; ?></p>
                                                    </div>
                                                </div>
                                                <div class="contact-email">
                                                    <p class="mb-0 small">Book Type: </p>
                                                    <p class="mb-0 small"><?php 
                                                        if($rows['book_type'] == '0')
                                                        {
                                                            echo "Free";
                                                        }
                                                        else
                                                        {
                                                            echo "Premium";
                                                        }
                                                    ?></p>
                                                </div>
                                                <div class="contact-email">
                                                    <p class="mb-0 small">Book Price: </p>
                                                    <p class="mb-0 small"><?php echo $rows['book_price']; ?></p>
                                                </div>
                                                <div class="contact-email">
                                                    <p class="mb-0 small">Date Uploaded: </p>
                                                    <p class="mb-0 small"><?php echo $rows['book_timestamp']; ?></p>
                                                </div>
                                                <div class="line-h-1 h5">
                                                    <a class="text-success edit-contact" href="#" data-toggle="modal"
                                                        data-target="#edittask"><i class="icon-pencil"></i></a>
                                                    <a class="text-danger delete-contact" href="#"><i
                                                            class="icon-trash"></i></a>
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
    </div>
</main>

<script language="javascript">
    const select = document.querySelector('#book_type')
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