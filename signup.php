<?php include('./mainTemplate/head.php') ?>

<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/AppLibra/functions/conn.php');
$query="select * from tblcategories";
$result=mysqli_query($mysqli ,$query); 
?>

<body id="main-container" class="default" style="background:white;">
    <!-- START: Main Content-->
    <main style="margin:5vw 2vw 0vw 2vw !important;">
        <div class="container-fluid site-width">
            <!-- START: Card Data-->
            <div class="row" style="justify-content:center;">
                <div class="col-12 col-md-9">
                    <div class="row" style="justify-content:center;">
                        <div class="col-12 col-md-8 mt-3">
                            <div class="card" id="signup-form-box" style="border:none;">
                                <div class="card-header">
                                    <div class="row mb-3" style="justify-content:center;">
                                        <img src="./assets/dist/images/Libra-footer.png" class="img-fluid "
                                            alt="Libra-Logo">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="wizard mb-4">
                                        <div class="connecting-line"></div>
                                        <ul class="nav nav-tabs d-flex mb-3">
                                            <li class="nav-item mr-auto">
                                                <a class="nav-link position-relative round-tab text-left p-0 active border-0"
                                                    data-toggle="tab" href="#id1">
                                                    <i
                                                        class="icofont-business-man position-relative text-white h5 mb-3"></i>
                                                    <small class="d-none d-md-block ">Account</small>
                                                </a>
                                            </li>
                                            <li class="nav-item mx-auto">
                                                <a class="nav-link position-relative round-tab text-sm-center text-left p-0 border-0"
                                                    data-toggle="tab" href="#id2">
                                                    <i
                                                        class="icofont-search-document position-relative text-white h5 mb-3"></i>
                                                    <small class="d-none d-md-block">Personal Info</small>
                                                </a>
                                            </li>
                                            <li class="nav-item ml-auto">
                                                <a class="nav-link position-relative round-tab text-sm-right text-left p-0 border-0"
                                                    data-toggle="tab" href="#id3">
                                                    <i class="icon-user position-relative text-white h5 mb-3"></i>
                                                    <small class="d-none d-md-block">Profile</small>
                                                </a>
                                            </li>
                                        </ul>
                                        <form action="./functions/signup.php" method="POST" id="signup-form"
                                            enctype="multipart/form-data">
                                            <div class="tab-content">
                                                <div class="tab-pane fade active show" id="id1">
                                                    <div class="form">
                                                        <div class="form-group">
                                                            <input type="text" name="uname"
                                                                class="form-control bg-transparent"
                                                                placeholder="Username">
                                                            <span id="uname_error" class="text-danger"></span>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="password" name="password"
                                                                class="form-control bg-transparent"
                                                                placeholder="password">
                                                            <span id="password_error" class="text-danger"></span>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="password" name="re_password"
                                                                class="form-control bg-transparent"
                                                                placeholder="re-type password">
                                                            <span id="re_password_error" class="text-danger"></span>
                                                        </div>
                                                        <button type="button"
                                                            class="btn float-right btn-success nexttab">Next</button>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="id2">
                                                    <div class="form">
                                                        <div class="form-row">
                                                            <div class="col-6 mb-3">
                                                                <select name="interest" id="Group">
                                                                    <option label="Choose on thing">Field of Interest
                                                                    </option>
                                                                    <?php  while($rows=mysqli_fetch_assoc($result))
                                                                        { 
                                                                    ?>
                                                                    <option>
                                                                        <?php echo $rows['categoryName']; ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                                <span id="profession_error" class="text-danger"></span>
                                                            </div>
                                                            <div class="col-6 mb-3">
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text">I'm a/n</span>
                                                                    </div>
                                                                    <select name="role">
                                                                        <option>Author</option>
                                                                        <option>Reader</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-6 mb-3">
                                                                <input type="text" name="fname" class="form-control"
                                                                    placeholder="First Name">
                                                                <span id="fname_error" class="text-danger"></span>
                                                            </div>
                                                            <div class="col-6 mb-3">
                                                                <input type="text" name="lname" class="form-control"
                                                                    placeholder="Last Name">
                                                                <span id="lname_error" class="text-danger"></span>
                                                            </div>
                                                            <div class="col-6 mb-3">
                                                                <input type="email" name="email" class="form-control"
                                                                    placeholder="Email for work">
                                                                <span id="email_error" class="text-danger"></span>
                                                            </div>
                                                            <div class="col-6 mb-3">
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <input type="number" name="contactInfo"
                                                                            class="form-control"
                                                                            placeholder="Contact Number">
                                                                        <span id="contactInfo_error"
                                                                            class="text-danger"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col">
                                                                <button type="button"
                                                                    class="btn btn-success prevtab">Back</button>
                                                                <button type="button"
                                                                    class="btn btn-success nexttab float-right">Next</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="id3">
                                                    <div class="form text-center">
                                                        <div class="col-12 mb-3">
                                                            <div class="row">
                                                                <div class="col">
                                                                    <input type="file" name="profileImage"
                                                                        class="form-control"
                                                                        placeholder="Upload an Image">
                                                                    <span id="contactInfo_error"
                                                                        class="text-danger"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <button type="submit" value="submit"
                                                            class="btn btn-success nexttab" id="signup">Confirm</button>
                                                    </div>
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
        <!-- END: Card DATA-->
        </div>
    </main>
    <!-- END: Content-->
    <?php include('./mainTemplate/footer.php');