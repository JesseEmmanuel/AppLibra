<!-- Head Template -->
<?php include($_SERVER['DOCUMENT_ROOT'].'/AppLibra/app/author/template/head.php') ?>
<!--End of Head -->

<!-- Sidebar Template -->
<?php include($_SERVER['DOCUMENT_ROOT'].'/AppLibra/app/author/template/sidebar.php') ?>
<!--End of Sidebar -->
<main>
    <div class="container-fluid site-width">
        <div class="row">
            <div class="col-12 mt-3">
                <div class="card outline-badge-success">
                    <div class="card-content">
                        <div class="card-body p-4">
                            <div class="d-md-flex">
                                <div class="content px-md-3 my-3 my-md-0">
                                    <span class="mb-0 font-w-400 h5"><i class="icofont-info-circle"></i> Book Uploads
                                        Status</span><br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 mt-3">
                <div class="card border-bottom-0">
                    <div class="card-content border-bottom border-primary border-w-5">
                        <div class="card-body p-4">
                            <div class="d-flex">
                                <div class="circle-50 outline-badge-primary"> <span
                                        class="icofont-check-circled fa-2x"></span></div>
                                <div class="media-body align-self-center pl-3">
                                    <span class="mb-0 h6 font-w-600">Approved</span><br>
                                    <p class="mb-0 font-w-500 h6">10 Books</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 mt-3">
                <div class="card border-bottom-0">
                    <div class="card-content border-bottom border-warning border-w-5">
                        <div class="card-body p-4">
                            <div class="d-flex">
                                <div class="circle-50 outline-badge-warning"> <span
                                        class="icofont-ui-timer fa-2x"></span></div>
                                <div class="media-body align-self-center pl-3">
                                    <span class="mb-0 h6 font-w-600">Pending</span><br>
                                    <p class="mb-0 font-w-500 h6">5 books</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 mt-3">
                <div class="card border-bottom-0">
                    <div class="card-content border-bottom border-danger border-w-5">
                        <div class="card-body p-4">
                            <div class="d-flex">
                                <div class="circle-50 outline-badge-danger"> <span
                                        class="icofont-thumbs-down fa-2x"></span></div>
                                <div class="media-body align-self-center pl-3">
                                    <span class="mb-0 h6 font-w-600">Denied</span><br>
                                    <p class="mb-0 font-w-500 h6">3 books</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12  mt-3">
                <div class="card outline-badge-success">
                    <div class="card-content">
                        <div class="card-body p-4">
                            <div class="d-md-flex">
                                <div class="content px-md-3 my-3 my-md-0">
                                    <span class="mb-0 font-w-400 h5"><i class="icofont-info-circle"></i> Book
                                        Types</span><br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-xl-6 mt-3">
                <div class="card">
                    <div class="card-body text-info border-bottom border-info border-w-5">
                        <h2 class="text-center">6</h2>
                        <h6 class="text-center">Free Books Uploaded</h6>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-xl-6 mt-3">
                <div class="card">
                    <div class="card-body text-success border-bottom border-success border-w-5">
                        <h2 class="text-center">4</h2>
                        <h6 class="text-center">Premium Books Uploaded</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- End of Content -->

<?php include($_SERVER['DOCUMENT_ROOT'].'/AppLibra/app/author/template/footer.php') ?>