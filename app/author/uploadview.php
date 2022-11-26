<!-- Head Template -->
<?php include($_SERVER['DOCUMENT_ROOT'].'/AppLibra/app/author/template/head.php') ?>
<!--End of Head -->

<!-- Sidebar Template -->
<?php include($_SERVER['DOCUMENT_ROOT'].'/AppLibra/app/author/template/sidebar.php') ?>
<!--End of Sidebar -->

<!-- Database Query -->
<?php 
session_start();
include_once($_SERVER['DOCUMENT_ROOT'].'/AppLibra/functions/conn.php');
$authID = $_SESSION['authorID'];
$query="select * from tblcategories";
$pending_books_query="SELECT tblauthor.authorID AS author_ID, tblbooks.bookID AS book_ID, tblbooks.bookTitle AS title, 
                             tblbooks.bookDesc AS book_description, tblbooks.bookCover AS cover, tblbooks.bookType AS book_type, 
                             tblbooks.bookStatus AS book_status, tblbooks.bookPrice AS book_price, tblbooks.upload_timestamp AS book_timestamp
                      FROM (tblbook_author INNER JOIN tblauthor ON tblbook_author.authorID = tblauthor.authorID) 
                      INNER JOIN tblbooks ON tblbook_author.bookID = tblbooks.bookID
                      WHERE (((tblauthor.authorID)='$authID') AND ((tblbooks.bookStatus)=0))";
$result=mysqli_query($mysqli ,$query);
$pending_books_result=mysqli_query($mysqli, $pending_books_query);
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
                    <a href="<?php $_SERVER['HTTP_HOST']; ?>/AppLibra/app/author/addbook.php" class="btn btn-outline-success font-w-600 my-auto text-nowrap ml-auto">
                        <i class="icofont-book-alt">
                        </i> Add Book
                    </a>

                    <!-- Modal -->
                    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
                        aria-labelledby="myLargeModalLabel10" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="myLargeModalLabel10"><i class="icofont-info-circle"></i>
                                        Book Details</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body text-start">
                                    <div class="card-content">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-12">
                                                    <form
                                                        action="<?php $_SERVER['DOCUMENT_ROOT']; ?>/AppLibra/functions/uploadbook.php"
                                                        method="POST" enctype="multipart/form-data">
                                                        <div class="form-row">
                                                            <div class="col-6 mb-3">
                                                                <label for="username">Book Title</label>
                                                                <input type="text" name="book-title"
                                                                    class="form-control"
                                                                    placeholder="Title of the book">
                                                            </div>
                                                            <div class="col-6 mb-3">
                                                                <label>Description</label>
                                                                <input type="text" name="book-desc" class="form-control"
                                                                    placeholder="short description for the book">
                                                            </div>
                                                            <div class="col-6 mb-3">
                                                                <label>Book Cover</label>
                                                                <div class="custom-file overflow-hidden">
                                                                    <input id="customFile" name="book-cover" type="file"
                                                                        accept="image/*" class="custom-file-input">
                                                                    <label for="customFile"
                                                                        class="custom-file-label">Upload
                                                                        Image</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-6 mb-3">
                                                                <label>Upload PDF File</label>
                                                                <div class="custom-file overflow-hidden">
                                                                    <input id="customFile" name="book-file" type="file"
                                                                        class="custom-file-input">
                                                                    <label for="customFile"
                                                                        class="custom-file-label">Choose
                                                                        file</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 mb-3">
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text">Categories</span>
                                                                    </div>
                                                                    <select name="book-category">
                                                                        <option label="Choose on thing">Choose a
                                                                            category</option>
                                                                        <?php 
                                                                                while($rows=mysqli_fetch_assoc($result))
                                                                                { 
                                                                            ?>
                                                                        <option
                                                                            value="<?php echo $rows['categoryID']; ?>">
                                                                            <?php echo $rows['categoryName']; ?>
                                                                        </option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-6 mb-3">
                                                                <label for="username">Book Type</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <span
                                                                            class="input-group-text">Free/Premium</span>
                                                                    </div>
                                                                    <select name="book-type" id="book_type">
                                                                        <option value="0">Free</option>
                                                                        <option value="1">Premium</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-6 mb-3 align-self-center">
                                                                <label for="username">Book Price</label>
                                                                <input type="number" name="book-price" id="book_price"
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
                                                                            class="summernote"><p></p></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <button type="submit"
                                                                    class="btn btn-success">Submit</button>
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
                                        <a class="nav-link" href="#" data-contacttype="family-contact">
                                            <i class="far fa-window-close"></i> Free
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#" data-contacttype="friend-contact">
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
                                <div class="card-body p-0 vh-100 overflow-auto">
                                    <div class="contacts grid">
                                        <div class="contact family-contact">
                                            <div class="contact-content">
                                                <div class="contact-profile">
                                                    <img src="dist/images/contact-1.jpg" alt="avatar"
                                                        class="user-image img-fluid">
                                                    <div class="contact-info">
                                                        <p class="contact-name mb-0">Kayla Fail</p>
                                                        <p
                                                            class="contact-position mb-0 small font-weight-bold text-muted">
                                                            Chief Executive Officer</p>
                                                    </div>
                                                </div>
                                                <div class="contact-email">
                                                    <p class="mb-0 small">Email: </p>
                                                    <p class="user-email">kf@mail.com</p>
                                                </div>
                                                <div class="contact-location">
                                                    <p class="mb-0 small">Location: </p>
                                                    <p class="user-location">Washington</p>
                                                </div>
                                                <div class="contact-phone">
                                                    <p class="mb-0 small">Phone: </p>
                                                    <p class="user-phone">+1 (020) 123-4567</p>
                                                </div>
                                                <div class="line-h-1 h5">
                                                    <a class="text-success edit-contact" href="#" data-toggle="modal"
                                                        data-target="#edittask"><i class="icon-pencil"></i></a>
                                                    <a class="text-danger delete-contact" href="#"><i
                                                            class="icon-trash"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="contact friend-contact">
                                            <div class="contact-content">
                                                <div class="contact-profile">
                                                    <img src="dist/images/contact-2.jpg" alt="avatar"
                                                        class="user-image img-fluid">
                                                    <div class="contact-info">
                                                        <p class="contact-name mb-0">Margarita Metts</p>
                                                        <p
                                                            class="contact-position mb-0 small font-weight-bold text-muted">
                                                            Marketing Coordinator</p>
                                                    </div>
                                                </div>
                                                <div class="contact-email">
                                                    <p class="mb-0 small">Email: </p>
                                                    <p class="user-email">mm@mail.com</p>
                                                </div>
                                                <div class="contact-location">
                                                    <p class="mb-0 small">Location: </p>
                                                    <p class="user-location">Franklin</p>
                                                </div>
                                                <div class="contact-phone">
                                                    <p class="mb-0 small">Phone: </p>
                                                    <p class="user-phone">+1 (020) 123-4567</p>
                                                </div>
                                                <div class="line-h-1 h5">
                                                    <a class="text-success edit-contact" href="#" data-toggle="modal"
                                                        data-target="#edittask"><i class="icon-pencil"></i></a>
                                                    <a class="text-danger delete-contact" href="#"><i
                                                            class="icon-trash"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="contact family-contact">
                                            <div class="contact-content">
                                                <div class="contact-profile">
                                                    <img src="dist/images/contact-3.jpg" alt="avatar"
                                                        class="user-image img-fluid">
                                                    <div class="contact-info">
                                                        <p class="contact-name mb-0">Shirley Vu</p>
                                                        <p
                                                            class="contact-position mb-0 small font-weight-bold text-muted">
                                                            Medical Assistant</p>
                                                    </div>
                                                </div>
                                                <div class="contact-email">
                                                    <p class="mb-0 small">Email: </p>
                                                    <p class="user-email">sv@mail.com</p>
                                                </div>
                                                <div class="contact-location">
                                                    <p class="mb-0 small">Location: </p>
                                                    <p class="user-location">Arlington</p>
                                                </div>
                                                <div class="contact-phone">
                                                    <p class="mb-0 small">Phone: </p>
                                                    <p class="user-phone">+1 (020) 123-4567</p>
                                                </div>
                                                <div class="line-h-1 h5">
                                                    <a class="text-success edit-contact" href="#" data-toggle="modal"
                                                        data-target="#edittask"><i class="icon-pencil"></i></a>
                                                    <a class="text-danger delete-contact" href="#"><i
                                                            class="icon-trash"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="contact friend-contact">
                                            <div class="contact-content">
                                                <div class="contact-profile">
                                                    <img src="dist/images/contact-4.jpg" alt="avatar"
                                                        class="user-image img-fluid">
                                                    <div class="contact-info">
                                                        <p class="contact-name mb-0">Josef Mellott</p>
                                                        <p
                                                            class="contact-position mb-0 small font-weight-bold text-muted">
                                                            Web Developer</p>
                                                    </div>
                                                </div>
                                                <div class="contact-email">
                                                    <p class="mb-0 small">Email: </p>
                                                    <p class="user-email">jm@mail.com</p>
                                                </div>
                                                <div class="contact-location">
                                                    <p class="mb-0 small">Location: </p>
                                                    <p class="user-location">Centerville</p>
                                                </div>
                                                <div class="contact-phone">
                                                    <p class="mb-0 small">Phone: </p>
                                                    <p class="user-phone">+1 (020) 123-4567</p>
                                                </div>
                                                <div class="line-h-1 h5">
                                                    <a class="text-success edit-contact" href="#" data-toggle="modal"
                                                        data-target="#edittask"><i class="icon-pencil"></i></a>
                                                    <a class="text-danger delete-contact" href="#"><i
                                                            class="icon-trash"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="contact office-contact">
                                            <div class="contact-content">
                                                <div class="contact-profile">
                                                    <img src="dist/images/contact-5.jpg" alt="avatar"
                                                        class="user-image img-fluid">
                                                    <div class="contact-info">
                                                        <p class="contact-name mb-0">Twanna Lenhart</p>
                                                        <p
                                                            class="contact-position mb-0 small font-weight-bold text-muted">
                                                            Web Designer</p>
                                                    </div>
                                                </div>
                                                <div class="contact-email">
                                                    <p class="mb-0 small">Email: </p>
                                                    <p class="user-email">tl@mail.com</p>
                                                </div>
                                                <div class="contact-location">
                                                    <p class="mb-0 small">Location: </p>
                                                    <p class="user-location">Lebanon</p>
                                                </div>
                                                <div class="contact-phone">
                                                    <p class="mb-0 small">Phone: </p>
                                                    <p class="user-phone">+1 (020) 123-4567</p>
                                                </div>
                                                <div class="line-h-1 h5">
                                                    <a class="text-success edit-contact" href="#" data-toggle="modal"
                                                        data-target="#edittask"><i class="icon-pencil"></i></a>
                                                    <a class="text-danger delete-contact" href="#"><i
                                                            class="icon-trash"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="contact family-contact">
                                            <div class="contact-content">
                                                <div class="contact-profile">
                                                    <img src="dist/images/contact-6.jpg" alt="avatar"
                                                        class="user-image img-fluid">
                                                    <div class="contact-info">
                                                        <p class="contact-name mb-0">Eustolia Ashburn</p>
                                                        <p
                                                            class="contact-position mb-0 small font-weight-bold text-muted">
                                                            President of Sales</p>
                                                    </div>
                                                </div>
                                                <div class="contact-email">
                                                    <p class="mb-0 small">Email: </p>
                                                    <p class="user-email">ea@mail.com</p>
                                                </div>
                                                <div class="contact-location">
                                                    <p class="mb-0 small">Location: </p>
                                                    <p class="user-location">Clinton</p>
                                                </div>
                                                <div class="contact-phone">
                                                    <p class="mb-0 small">Phone: </p>
                                                    <p class="user-phone">+1 (020) 123-4567</p>
                                                </div>
                                                <div class="line-h-1 h5">
                                                    <a class="text-success edit-contact" href="#" data-toggle="modal"
                                                        data-target="#edittask"><i class="icon-pencil"></i></a>
                                                    <a class="text-danger delete-contact" href="#"><i
                                                            class="icon-trash"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="contact business-contact">
                                            <div class="contact-content">
                                                <div class="contact-profile">
                                                    <img src="dist/images/contact-7.jpg" alt="avatar"
                                                        class="user-image img-fluid">
                                                    <div class="contact-info">
                                                        <p class="contact-name mb-0">Rolanda Cusumano</p>
                                                        <p
                                                            class="contact-position mb-0 small font-weight-bold text-muted">
                                                            Project Manager</p>
                                                    </div>
                                                </div>
                                                <div class="contact-email">
                                                    <p class="mb-0 small">Email: </p>
                                                    <p class="user-email">rc@mail.com</p>
                                                </div>
                                                <div class="contact-location">
                                                    <p class="mb-0 small">Location: </p>
                                                    <p class="user-location">Springfield</p>
                                                </div>
                                                <div class="contact-phone">
                                                    <p class="mb-0 small">Phone: </p>
                                                    <p class="user-phone">+1 (020) 123-4567</p>
                                                </div>
                                                <div class="line-h-1 h5">
                                                    <a class="text-success edit-contact" href="#" data-toggle="modal"
                                                        data-target="#edittask"><i class="icon-pencil"></i></a>
                                                    <a class="text-danger delete-contact" href="#"><i
                                                            class="icon-trash"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="contact">
                                            <div class="contact-content">
                                                <div class="contact-profile">
                                                    <img src="dist/images/contact-8.jpg" alt="avatar"
                                                        class="user-image img-fluid">
                                                    <div class="contact-info">
                                                        <p class="contact-name mb-0">Morris Thibeau</p>
                                                        <p
                                                            class="contact-position mb-0 small font-weight-bold text-muted">
                                                            Account Executive</p>
                                                    </div>
                                                </div>
                                                <div class="contact-email">
                                                    <p class="mb-0 small">Email: </p>
                                                    <p class="user-email">mt@mail.com</p>
                                                </div>
                                                <div class="contact-location">
                                                    <p class="mb-0 small">Location: </p>
                                                    <p class="user-location">Georgetown</p>
                                                </div>
                                                <div class="contact-phone">
                                                    <p class="mb-0 small">Phone: </p>
                                                    <p class="user-phone">+1 (020) 123-4567</p>
                                                </div>
                                                <div class="line-h-1 h5">
                                                    <a class="text-success edit-contact" href="#" data-toggle="modal"
                                                        data-target="#edittask"><i class="icon-pencil"></i></a>
                                                    <a class="text-danger delete-contact" href="#"><i
                                                            class="icon-trash"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="contact">
                                            <div class="contact-content">
                                                <div class="contact-profile">
                                                    <img src="dist/images/contact-14.jpg" alt="avatar"
                                                        class="user-image img-fluid">
                                                    <div class="contact-info">
                                                        <p class="contact-name mb-0">Nisha Fraise</p>
                                                        <p
                                                            class="contact-position mb-0 small font-weight-bold text-muted">
                                                            Nursing Assistant</p>
                                                    </div>
                                                </div>
                                                <div class="contact-email">
                                                    <p class="mb-0 small">Email: </p>
                                                    <p class="user-email">nf@mail.com</p>
                                                </div>
                                                <div class="contact-location">
                                                    <p class="mb-0 small">Location: </p>
                                                    <p class="user-location">Fairview</p>
                                                </div>
                                                <div class="contact-phone">
                                                    <p class="mb-0 small">Phone: </p>
                                                    <p class="user-phone">+1 (020) 123-4567</p>
                                                </div>
                                                <div class="line-h-1 h5">
                                                    <a class="text-success edit-contact" href="#" data-toggle="modal"
                                                        data-target="#edittask"><i class="icon-pencil"></i></a>
                                                    <a class="text-danger delete-contact" href="#"><i
                                                            class="icon-trash"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="contact">
                                            <div class="contact-content">
                                                <div class="contact-profile">
                                                    <img src="dist/images/contact-10.jpg" alt="avatar"
                                                        class="user-image img-fluid">
                                                    <div class="contact-info">
                                                        <p class="contact-name mb-0">Brendon Schebler</p>
                                                        <p
                                                            class="contact-position mb-0 small font-weight-bold text-muted">
                                                            Librarian</p>
                                                    </div>
                                                </div>
                                                <div class="contact-email">
                                                    <p class="mb-0 small">Email: </p>
                                                    <p class="user-email">bs@mail.com</p>
                                                </div>
                                                <div class="contact-location">
                                                    <p class="mb-0 small">Location: </p>
                                                    <p class="user-location">Greenville</p>
                                                </div>
                                                <div class="contact-phone">
                                                    <p class="mb-0 small">Phone: </p>
                                                    <p class="user-phone">+1 (020) 123-4567</p>
                                                </div>
                                                <div class="line-h-1 h5">
                                                    <a class="text-success edit-contact" href="#" data-toggle="modal"
                                                        data-target="#edittask"><i class="icon-pencil"></i></a>
                                                    <a class="text-danger delete-contact" href="#"><i
                                                            class="icon-trash"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="contact">
                                            <div class="contact-content">
                                                <div class="contact-profile">
                                                    <img src="dist/images/contact-11.jpg" alt="avatar"
                                                        class="user-image img-fluid">
                                                    <div class="contact-info">
                                                        <p class="contact-name mb-0">John Schebler</p>
                                                        <p
                                                            class="contact-position mb-0 small font-weight-bold text-muted">
                                                            Librarian</p>
                                                    </div>
                                                </div>
                                                <div class="contact-email">
                                                    <p class="mb-0 small">Email: </p>
                                                    <p class="user-email">js@mail.com</p>
                                                </div>
                                                <div class="contact-location">
                                                    <p class="mb-0 small">Location: </p>
                                                    <p class="user-location">London</p>
                                                </div>
                                                <div class="contact-phone">
                                                    <p class="mb-0 small">Phone: </p>
                                                    <p class="user-phone">+1 (020) 123-4567</p>
                                                </div>
                                                <div class="line-h-1 h5">
                                                    <a class="text-success edit-contact" href="#" data-toggle="modal"
                                                        data-target="#edittask"><i class="icon-pencil"></i></a>
                                                    <a class="text-danger delete-contact" href="#"><i
                                                            class="icon-trash"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="contact">
                                            <div class="contact-content">
                                                <div class="contact-profile">
                                                    <img src="dist/images/contact-13.jpg" alt="avatar"
                                                        class="user-image img-fluid">
                                                    <div class="contact-info">
                                                        <p class="contact-name mb-0">Emily Halk</p>
                                                        <p
                                                            class="contact-position mb-0 small font-weight-bold text-muted">
                                                            Librarian</p>
                                                    </div>
                                                </div>
                                                <div class="contact-email">
                                                    <p class="mb-0 small">Email: </p>
                                                    <p class="user-email">eh@mail.com</p>
                                                </div>
                                                <div class="contact-location">
                                                    <p class="mb-0 small">Location: </p>
                                                    <p class="user-location">Missouri</p>
                                                </div>
                                                <div class="contact-phone">
                                                    <p class="mb-0 small">Phone: </p>
                                                    <p class="user-phone">+1 (020) 123-4567</p>
                                                </div>
                                                <div class="line-h-1 h5">
                                                    <a class="text-success edit-contact" href="#" data-toggle="modal"
                                                        data-target="#edittask"><i class="icon-pencil"></i></a>
                                                    <a class="text-danger delete-contact" href="#"><i
                                                            class="icon-trash"></i></a>
                                                </div>
                                            </div>
                                        </div>
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
                                <div class="card-body p-0 vh-100 overflow-auto">
                                    <div class="contacts list">
                                        <div class="contact family-contact">

                                            <?php while($rows=mysqli_fetch_assoc($pending_books_result)) { ?>
                                            <div class="contact-content">
                                                <div class="contact-profile">
                                                    <img src="<?php $_SERVER['HTTP_HOST']; ?>/AppLibra/uploads/images/<?php echo $rows['cover']; ?>"
                                                        alt="avatar" class="user-image img-fluid">
                                                    <div class="contact-info">
                                                        <p class="contact-name mb-0"><?php echo $rows['title']; ?>
                                                        </p>
                                                        <p
                                                            class="contact-position mb-0 small font-weight-bold text-muted">
                                                            <?php echo $rows['book_description']; ?></p>
                                                    </div>
                                                </div>
                                                <div class="contact-email">
                                                    <p class="mb-0 small">Book Type: </p>
                                                    <p class="user-email"><?php 
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
                                                    <p class="user-email"><?php echo $rows['book_price']; ?></p>
                                                </div>
                                                <div class="contact-email">
                                                    <p class="mb-0 small">Date Uploaded: </p>
                                                    <p class="user-email"><?php echo $rows['book_timestamp']; ?></p>
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