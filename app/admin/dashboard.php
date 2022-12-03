<!-- Head Template -->
<?php include($_SERVER['DOCUMENT_ROOT'].'/AppLibra/app/admin/template/head.php') ?>
<!--End of Head -->

<!-- Sidebar Template -->
<?php include($_SERVER['DOCUMENT_ROOT'].'/AppLibra/app/admin/template/sidebar.php') ?>
<!--End of Sidebar -->
<main>
    <div class="container-fluid site-width">
        <div class="row">
            <div class="col-12 mt-3">
                <div class="row">
                    <div class="col-12  align-self-center">
                        <div class="sub-header mt-3 align-self-center d-sm-flex w-100 rounded">
                            <div class="w-sm-100 mr-auto">
                                <h4 class="mb-0">Users</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 mt-3">
                <div class="card border-bottom-0">
                    <div class="card-content border-bottom border-info border-w-5">
                        <div class="card-body p-4">
                            <div class="d-flex">
                                <div class="circle-50 outline-badge-info"> <span
                                        class="icofont-man-in-glasses fa-2x"></span></div>
                                <div class="media-body align-self-center pl-3">
                                    <span class="mb-0 h6 font-w-600">Readers</span><br>
                                    <p class="mb-0 font-w-500 h3">2</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 mt-3">
                <div class="card border-bottom-0">
                    <div class="card-content border-bottom border-success border-w-5">
                        <div class="card-body p-4">
                            <div class="d-flex">
                                <div class="circle-50 outline-badge-success"> <span
                                        class="icofont-business-man fa-2x"></span></div>
                                <div class="media-body align-self-center pl-3">
                                    <span class="mb-0 h6 font-w-600">Authors</span><br>
                                    <p class="mb-0 font-w-500 h3">3</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 mt-3">
            <div class="row">
                    <div class="col-12  align-self-center">
                        <div class="sub-header mt-3 align-self-center d-sm-flex w-100 rounded">
                            <div class="w-sm-100 mr-auto">
                                <h4 class="mb-0">Book Uploads</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 mt-3">
                <div class="card border-bottom-0">
                    <div class="card-content border-bottom border-primary border-w-5">
                        <div class="card-body p-4">
                            <div class="d-flex">
                                <div class="circle-50 outline-badge-primary"> <span
                                        class="icofont-check-circled fa-2x"></span></div>
                                <div class="media-body align-self-center pl-3">
                                    <span class="mb-0 h6 font-w-600">Approved</span><br>
                                    <p class="mb-0 font-w-500 h6">50 Books</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 mt-3">
                <div class="card border-bottom-0">
                    <div class="card-content border-bottom border-warning border-w-5">
                        <div class="card-body p-4">
                            <div class="d-flex">
                                <div class="circle-50 outline-badge-warning"> <span
                                        class="icofont-ui-timer fa-2x"></span></div>
                                <div class="media-body align-self-center pl-3">
                                    <span class="mb-0 h6 font-w-600">Pending</span><br>
                                    <p class="mb-0 font-w-500 h6">20 books</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 mt-3">
                <div class="card border-bottom-0">
                    <div class="card-content border-bottom border-danger border-w-5">
                        <div class="card-body p-4">
                            <div class="d-flex">
                                <div class="circle-50 outline-badge-danger"> <span
                                        class="icofont-thumbs-down fa-2x"></span></div>
                                <div class="media-body align-self-center pl-3">
                                    <span class="mb-0 h6 font-w-600">Denied</span><br>
                                    <p class="mb-0 font-w-500 h6">8 books</p>
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

<?php include($_SERVER['DOCUMENT_ROOT'].'/AppLibra/app/admin/template/footer.php') ?>