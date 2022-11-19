<!-- Head Template -->
<?php include($_SERVER['DOCUMENT_ROOT'].'/AppLibra/app/pro/template/head.php') ?>
<!--End of Head -->

<!-- Sidebar Template -->
<?php include($_SERVER['DOCUMENT_ROOT'].'/AppLibra/app/pro/template/sidebar.php') ?>
<!--End of Sidebar -->

<!-- Start of Content -->
<main>
    <div class="container-fluid site-width">
        <div class="row row-eq-height">
            <div class="col-12 col-lg-12 mt-2">
                <div class="card border h-100 contact-list-section">
                    <div class="overflow-auto">
                        <ul class="nav flex-row contact-menu mt-1" id="tab-carousel" style="width:150vw;">
                            <li class="nav-item text-center">
                                <a class="nav-link active" href="#" data-contacttype="contact">
                                    <div class="row justify-content-center mx-2">
                                        <i class="icon-list fa-1x"></i>
                                    </div>
                                    <div class="row justify-content-center mx-2">All Books
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item text-center">
                                <a class="nav-link" href="#" data-contacttype="literature" id="literature-menu">
                                    <div class="row justify-content-center mx-2">
                                        <i class="fas fa-feather fa-1x"></i>
                                    </div>
                                    <div class="row justify-content-center mx-2">
                                        Literature & Arts
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item text-center">
                                <a class="nav-link" href="#" data-contacttype="engineering" id="engineering-menu">
                                    <div class="row justify-content-center mx-2">
                                        <i class="icofont-gears fa-1x"></i>
                                    </div>
                                    <div class="row justify-content-center mx-2">
                                        Engineering
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item text-center">
                                <a class="nav-link" href="#" data-contacttype="technology" id="technology-menu">
                                    <div class="row justify-content-center mx-2">
                                        <i class="icofont-connection fa-1x"></i>
                                    </div>
                                    <div class="row justify-content-center mx-2">
                                        Technology
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item text-center">
                                <a class="nav-link" href="#" data-contacttype="economics" id="economics-menu">
                                    <div class="row justify-content-center mx-2">
                                        <i class="icofont-chart-growth fa-1x"></i>
                                    </div>
                                    <div class="row justify-content-center mx-2">
                                        Economics
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item text-center">
                                <a class="nav-link" href="#" data-contacttype="history">
                                    <div class="row justify-content-center mx-2">
                                        <i class="icofont-quill-pen fa-1x"></i>
                                    </div>
                                    <div class="row justify-content-center mx-2">
                                        History
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item text-center">
                                <a class="nav-link" href="#" data-contacttype="theology" id="theology-menu">
                                    <div class="row justify-content-center mx-2">
                                        <i class="fas fa-cross fa-1x"></i>
                                    </div>
                                    <div class="row justify-content-center mx-2">
                                        Theology
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item text-center">
                                <a class="nav-link" href="#" data-contacttype="health" id="health-menu">
                                    <div class="row justify-content-center mx-2">
                                        <i class="icofont-heart-beat-alt fa-1x"></i>
                                    </div>
                                    <div class="row justify-content-center mx-2">
                                        Health & Fitness
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item text-center">
                                <a class="nav-link" href="#" data-contacttype="psychology" id="psychology-menu">
                                    <div class="row justify-content-center mx-2">
                                        <i class="icofont-brainstorming fa-1x"></i>
                                    </div>
                                    <div class="row justify-content-center mx-2">
                                        Psychology
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item text-center">
                                <a class="nav-link" href="#" data-contacttype="gensci" id="gensci-menu">
                                    <div class="row justify-content-center mx-2">
                                        <i class="icofont-rocket fa-1x"></i>
                                    </div>
                                    <div class="row justify-content-center mx-2">
                                        General Science
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item text-center">
                                <a class="nav-link" href="#" data-contacttype="food">
                                    <div class="row justify-content-center mx-2">
                                        <i class="icofont-spoon-and-fork fa-1x"></i>
                                    </div>
                                    <div class="row justify-content-center mx-2">
                                        Food & Recipes
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item text-center">
                                <a class="nav-link" href="#" data-contacttype="socsci" id="socsci-menu">
                                    <div class="row justify-content-center mx-2">
                                        <i class="icofont-users-social fa-1x"></i>
                                    </div>
                                    <div class="row justify-content-center mx-2">
                                        Social Science
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item text-center">
                                <a class="nav-link" href="#" data-contacttype="others" id="others-menu">
                                    <div class="row justify-content-center mx-2">
                                        <i class="fas fa-braille fa-1x"></i>
                                    </div>
                                    <div class="row justify-content-center mx-2">
                                        Novel/Manga/Comics
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-header border-bottom p-1 d-flex">
                        <a href="#" class="d-inline-block d-lg-none flip-menu-toggle"><i class="icon-menu"></i></a>
                        <input type="text" class="form-control border-0 p-2 w-100 h-100 contact-search"
                            placeholder="Search a book....">
                        <a href="#" class="grid-style search-bar-menu border-0 active"><i class="icon-grid"></i></a>
                        <a href="#" class="list-style search-bar-menu"><i class="icon-list"></i></a>
                    </div>
                    <div class="card-body p-0 vh-100 overflow-auto">
                        <div class="contacts grid">
                            <div class="contact literature">
                                <div class="contact-content">
                                    <div class="contact-profile">
                                        <img src="<?php $_SERVER['HTTP_HOST']; ?>/AppLibra/assets/dist/images/book2.jpg" alt="avatar" class="d-block"
                                            height="150px" width="100%">
                                        <div class="contact-info">
                                            <p class="contact-name mb-0">Kayla Fail</p>
                                            <p class="contact-position mb-0 small font-weight-bold text-muted">Chief
                                                Executive Officer</p>
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
                                        <a class="text-danger delete-contact" href="#"><i class="icon-trash"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="contact engineering">
                                <div class="contact-content">
                                    <div class="contact-profile">
                                        <img src="<?php $_SERVER['HTTP_HOST']; ?>/AppLibra/assets/dist/images/book1.png" alt="avatar" class="d-block"
                                            height="150px" width="100%">
                                        <div class="contact-info">
                                            <p class="contact-name mb-0">Margarita Metts</p>
                                            <p class="contact-position mb-0 small font-weight-bold text-muted">Marketing
                                                Coordinator</p>
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
                                        <a class="text-danger delete-contact" href="#"><i class="icon-trash"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="contact technology">
                                <div class="contact-content">
                                    <div class="contact-profile">
                                        <img src="<?php $_SERVER['HTTP_HOST']; ?>/AppLibra/assets/dist/images/book3.jpg" alt="avatar" class="d-block"
                                            height="150px" width="100%">
                                        <div class="contact-info">
                                            <p class="contact-name mb-0">Shirley Vu</p>
                                            <p class="contact-position mb-0 small font-weight-bold text-muted">Medical
                                                Assistant</p>
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
                                        <a class="text-danger delete-contact" href="#"><i class="icon-trash"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="contact economics">
                                <div class="contact-content">
                                    <div class="contact-profile">
                                        <img src="<?php $_SERVER['HTTP_HOST']; ?>/AppLibra/assets/dist/images/book4.jpg" alt="avatar" class="d-block"
                                            height="150px" width="100%">
                                        <div class="contact-info">
                                            <p class="contact-name mb-0">Josef Mellott</p>
                                            <p class="contact-position mb-0 small font-weight-bold text-muted">Web
                                                Developer
                                            </p>
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
                                        <a class="text-danger delete-contact" href="#"><i class="icon-trash"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="contact history">
                                <div class="contact-content">
                                    <div class="contact-profile">
                                        <img src="<?php $_SERVER['HTTP_HOST']; ?>/AppLibra/assets/dist/images/book5.jpg" alt="avatar" class="d-block"
                                            height="150px" width="100%">
                                        <div class="contact-info">
                                            <p class="contact-name mb-0">Twanna Lenhart</p>
                                            <p class="contact-position mb-0 small font-weight-bold text-muted">Web
                                                Designer
                                            </p>
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
                                        <a class="text-danger delete-contact" href="#"><i class="icon-trash"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="contact theology">
                                <div class="contact-content">
                                    <div class="contact-profile">
                                        <img src="<?php $_SERVER['HTTP_HOST']; ?>/AppLibra/assets/dist/images/book6.jpg" alt="avatar" class="d-block"
                                            height="150px" width="100%">
                                        <div class="contact-info">
                                            <p class="contact-name mb-0">Eustolia Ashburn</p>
                                            <p class="contact-position mb-0 small font-weight-bold text-muted">President
                                                of
                                                Sales</p>
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
                                        <a class="text-danger delete-contact" href="#"><i class="icon-trash"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="contact gensci">
                                <div class="contact-content">
                                    <div class="contact-profile">
                                        <img src="<?php $_SERVER['HTTP_HOST']; ?>/AppLibra/assets/dist/images/book7.jpg" alt="avatar" class="d-block"
                                            height="150px" width="100%">
                                        <div class="contact-info">
                                            <p class="contact-name mb-0">Rolanda Cusumano</p>
                                            <p class="contact-position mb-0 small font-weight-bold text-muted">Project
                                                Manager</p>
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
                                        <a class="text-danger delete-contact" href="#"><i class="icon-trash"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="contact">
                                <div class="contact-content">
                                    <div class="contact-profile">
                                        <img src="<?php $_SERVER['HTTP_HOST']; ?>/AppLibra/assets/dist/images/book8.jpg" alt="avatar" class="d-block"
                                            height="150px" width="100%">
                                        <div class="contact-info">
                                            <p class="contact-name mb-0">Morris Thibeau</p>
                                            <p class="contact-position mb-0 small font-weight-bold text-muted">Account
                                                Executive</p>
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
                                        <a class="text-danger delete-contact" href="#"><i class="icon-trash"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="contact">
                                <div class="contact-content">
                                    <div class="contact-profile">
                                        <img src="<?php $_SERVER['HTTP_HOST']; ?>/AppLibra/assets/dist/images/book5.jpg" alt="avatar" class="d-block"
                                            height="150px" width="100%">
                                        <div class="contact-info">
                                            <p class="contact-name mb-0">Nisha Fraise</p>
                                            <p class="contact-position mb-0 small font-weight-bold text-muted">Nursing
                                                Assistant</p>
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
                                        <a class="text-danger delete-contact" href="#"><i class="icon-trash"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="contact">
                                <div class="contact-content">
                                    <div class="contact-profile">
                                        <img src="<?php $_SERVER['HTTP_HOST']; ?>/AppLibra/assets/dist/images/book3.jpg" alt="avatar" class="d-block"
                                            height="150px" width="100%">
                                        <div class="contact-info">
                                            <p class="contact-name mb-0">Brendon Schebler</p>
                                            <p class="contact-position mb-0 small font-weight-bold text-muted">Librarian
                                            </p>
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
                                        <a class="text-danger delete-contact" href="#"><i class="icon-trash"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="contact">
                                <div class="contact-content">
                                    <div class="contact-profile">
                                        <img src="<?php $_SERVER['HTTP_HOST']; ?>/AppLibra/assets/dist/images/book4.jpg" alt="avatar" class="d-block"
                                            height="150px" width="100%">
                                        <div class="contact-info">
                                            <p class="contact-name mb-0">John Schebler</p>
                                            <p class="contact-position mb-0 small font-weight-bold text-muted">Librarian
                                            </p>
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
                                        <a class="text-danger delete-contact" href="#"><i class="icon-trash"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="contact">
                                <div class="contact-content">
                                    <div class="contact-profile">
                                        <img src="<?php $_SERVER['HTTP_HOST']; ?>/AppLibra/assets/dist/images/book8.jpg" alt="avatar" class="d-block"
                                            height="150px" width="100%">
                                        <div class="contact-info">
                                            <p class="contact-name mb-0">Emily Halk</p>
                                            <p class="contact-position mb-0 small font-weight-bold text-muted">Librarian
                                            </p>
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
                                        <a class="text-danger delete-contact" href="#"><i class="icon-trash"></i></a>
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

<?php include($_SERVER['DOCUMENT_ROOT'].'/AppLibra/app/pro/template/footer.php') ?>