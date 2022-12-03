<!-- Head Template -->
<?php include($_SERVER['DOCUMENT_ROOT'].'/AppLibra/app/author/template/head.php') ?>
<!--End of Head -->

<!-- Sidebar Template -->
<?php include($_SERVER['DOCUMENT_ROOT'].'/AppLibra/app/author/template/sidebar.php') ?>
<!--End of Sidebar -->

<!-- Start of Content -->
<main>
    <div class="row mx-1 pt-2">
        <div class="col-md-12">
            <!--<div class="card">
                <div class="overflow-auto">
                    <div class="card-body d-md-flex text-center" style="width:150vw;">
                        <ul class="nav nav-pills d-md-flex m-0 pl-0 list-unstyled">
                            <li class="nav-item pill py-1 px-2 mr-md-2 text-center my-1">
                                <a class="nav-link body-color mb-0 fs-5 active" data-toggle="tab" href="#all-books">
                                    <div class="row justify-content-center mx-2">
                                        <i class="icon-list fa-1x"></i>
                                    </div>
                                    <div class="row justify-content-center mx-2">
                                        All Books
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item pill py-1 px-2 mr-md-2 text-center my-1">
                                <a class="nav-link body-color mb-0 fs-5" data-toggle="tab" href="#literature">
                                    <div class="row justify-content-center mx-2">
                                        <i class="fas fa-feather fa-1x"></i>
                                    </div>
                                    <div class="row justify-content-center mx-2">
                                        Literature & Arts
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item pill py-1 px-2 mr-md-2 text-center my-1">
                                <a class="nav-link body-color mb-0 fs-5" data-toggle="tab" href="#engineering">
                                    <div class="row justify-content-center mx-2">
                                        <i class="icofont-gears fa-1x"></i>
                                    </div>
                                    <div class="row justify-content-center mx-2">
                                        Engineering
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item pill py-1 px-2 mr-md-2 text-center my-1">
                                <a class="nav-link body-color mb-0 fs-5" data-toggle="tab" href="#technology">
                                    <div class="row justify-content-center mx-2">
                                        <i class="icofont-connection fa-1x"></i>
                                    </div>
                                    <div class="row justify-content-center mx-2">
                                        Technology
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item pill py-1 px-2 mr-md-2 text-center my-1">
                                <a class="nav-link body-color mb-0 fs-5" data-toggle="tab" href="#economics">
                                    <div class="row justify-content-center mx-2">
                                        <i class="icofont-chart-growth fa-1x"></i>
                                    </div>
                                    <div class="row justify-content-center mx-2">
                                        Economics
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item pill py-1 px-2 mr-md-2 text-center my-1">
                                <a class="nav-link body-color mb-0 fs-5" data-toggle="tab" href="#history">
                                    <div class="row justify-content-center mx-2">
                                        <i class="icofont-quill-pen fa-1x"></i>
                                    </div>
                                    <div class="row justify-content-center mx-2">
                                        History
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item pill py-1 px-2 mr-md-2 text-center my-1">
                                <a class="nav-link body-color mb-0 fs-5" data-toggle="tab" href="#theology">
                                    <div class="row justify-content-center mx-2">
                                        <i class="fas fa-cross fa-1x"></i>
                                    </div>
                                    <div class="row justify-content-center mx-2">
                                        Theology
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item pill py-1 px-2 mr-md-2 text-center my-1">
                                <a class="nav-link body-color mb-0 fs-5" data-toggle="tab" href="#health">
                                    <div class="row justify-content-center mx-2">
                                        <i class="icofont-heart-beat-alt fa-1x"></i>
                                    </div>
                                    <div class="row justify-content-center mx-2">
                                        Health & Fitness
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item pill py-1 px-2 mr-md-2 text-center my-1">
                                <a class="nav-link body-color mb-0 fs-5" data-toggle="tab" href="#psychology">
                                    <div class="row justify-content-center mx-2">
                                        <i class="icofont-brainstorming fa-1x"></i>
                                    </div>
                                    <div class="row justify-content-center mx-2">
                                        Psychology
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item pill py-1 px-2 mr-md-2 text-center my-1">
                                <a class="nav-link body-color mb-0 fs-5" data-toggle="tab" href="#genscie">
                                    <div class="row justify-content-center mx-2">
                                        <i class="icofont-rocket fa-1x"></i>
                                    </div>
                                    <div class="row justify-content-center mx-2">
                                        General Science
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item pill py-1 px-2 mr-md-2 text-center my-1">
                                <a class="nav-link body-color mb-0 fs-5" data-toggle="tab" href="#foods">
                                    <div class="row justify-content-center mx-2">
                                        <i class="icofont-spoon-and-fork fa-1x"></i>
                                    </div>
                                    <div class="row justify-content-center mx-2">
                                        Food & Recipes
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item pill py-1 px-2 mr-md-2 text-center my-1">
                                <a class="nav-link body-color mb-0 fs-5" data-toggle="tab" href="#socscie">
                                    <div class="row justify-content-center mx-2">
                                        <i class="icofont-users-social fa-1x"></i>
                                    </div>
                                    <div class="row justify-content-center mx-2">
                                        Social Science
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item pill py-1 px-2 mr-md-2 text-center my-1">
                                <a class="nav-link body-color mb-0 fs-5" data-toggle="tab" href="#stories">
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
                </div>
            </div>-->
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="Approved" role="tabpanel" aria-labelledby="Description">
                    <div class="row">
                        <div class="col-12 col-lg-2 mt-2 todo-menu-bar flip-menu pr-lg-0">
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
                        <div class="col-12 col-lg-10 mt-2 pl-lg-0">
                            <div class="card border h-100 contact-list-section">
                                <div class="card-header border-bottom p-1 d-flex">
                                    <a href="#" class="d-inline-block d-lg-none flip-menu-toggle"><i
                                            class="icon-menu"></i></a>
                                    <input type="text" class="form-control border-0 p-2 w-100 h-100 contact-search"
                                        placeholder="Search ...">
                                    <!--<a href="#" class="grid-style search-bar-menu"><i class="icon-grid"></i></a>-->
                                </div>
                                <div class="card-body p-0">
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
            </div>
        </div>
    </div>
</main>
<!-- End of Content -->

<?php include($_SERVER['DOCUMENT_ROOT'].'/AppLibra/app/author/template/footer.php') ?>