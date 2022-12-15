<!-- Head Template -->
<?php include($_SERVER['DOCUMENT_ROOT'].'/AppLibra/app/admin/template/head.php') ?>
<!--End of Head -->

<!-- Sidebar Template -->
<?php include($_SERVER['DOCUMENT_ROOT'].'/AppLibra/app/admin/template/sidebar.php') ?>
<!--End of Sidebar -->
<?php
    include($_SERVER['DOCUMENT_ROOT'].'/AppLibra/functions/conn.php');
    $author = "SELECT tblaccounts.accountID, tblprofile.profile_ID, tblaccounts.accountUserName, tblprofile.firstName, tblprofile.lastName, 
                      tblprofile.contactInfo, tblprofile.emailAddress, tblprofile.created_at, tblaccounts.accountRole, tblprofile.profileImage
                FROM tblaccounts INNER JOIN tblprofile ON tblaccounts.accountID = tblprofile.accountID
                WHERE (((tblaccounts.accountRole)='Author'))";
    $reader = "SELECT tblaccounts.accountID, tblprofile.profile_ID, tblaccounts.accountUserName, tblprofile.firstName, tblprofile.lastName, 
                      tblprofile.contactInfo, tblprofile.emailAddress, tblprofile.created_at, tblaccounts.accountRole, tblprofile.profileImage
                FROM tblaccounts INNER JOIN tblprofile ON tblaccounts.accountID = tblprofile.accountID
                WHERE (((tblaccounts.accountRole)='Reader'))";
    $author_list = mysqli_query($mysqli, $author);
    $reader_list = mysqli_query($mysqli, $reader);
?>
<main>
    <div class="container-fluid site-width">
        <div class="col-12 mt-3">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="nav nav-pills flex-column flex-sm-row justify-content-center ">
                                <li class="nav-item">
                                    <a class="nav-link body-color p mb-0 active" data-toggle="tab" href="#Author">
                                       <i class="icofont-pen-alt-4"></i> Authors </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link body-color p mb-0" data-toggle="tab" href="#Reader">
                                       <i class="icofont-eye-alt"></i> Readers </a>
                                </li>
                            </ul>
                            <div class="tab-content mt-5" id="myTabContent">
                                <div class="tab-pane fade show active" id="Author" role="tabpanel"
                                    aria-labelledby="Author">
                                    <div class="row">
                                        <div class="col-12 mt-1">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="table-responsive">
                                                        <table id="example"
                                                            class="display table dataTable table-striped table-bordered">
                                                            <thead>
                                                                <tr>
                                                                    <th>Profile</th>
                                                                    <th>Username</th>
                                                                    <th>Fullname</th>
                                                                    <th>Contact Info</th>
                                                                    <th>Email</th>
                                                                    <th>Date Create</th>
                                                                    <th>Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php foreach($author_list as $row) { ?>
                                                                <tr>
                                                                    <td>
                                                                        <img src="<?php $_SERVER['HTTP_HOST']; ?>/AppLibra/uploads/images/<?php echo $row['profileImage'] ?>"
                                                                            class="d-flex img-fluid rounded-circle"
                                                                            width="29">
                                                                    </td>
                                                                    <td><?php echo $row['accountUserName'] ?></td>
                                                                    <td><?php echo $row['firstName'].' '.$row['lastName'] ?>
                                                                    </td>
                                                                    <td><?php echo $row['contactInfo'] ?></td>
                                                                    <td><?php echo $row['emailAddress'] ?></td>
                                                                    <td><?php echo $row['created_at'] ?></td>
                                                                    <td>
                                                                        <button class="btn btn-info"><i
                                                                                class="far fa-eye"></i></button>
                                                                        <button class="btn btn-danger"><i
                                                                                class="fa fa-trash"></i></button>
                                                                    </td>
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
                                <div class="tab-pane fade" id="Reader" role="tabpanel" aria-labelledby="Reader">
                                    <div class="row">
                                        <div class="col-12 mt-1">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="table-responsive">
                                                        <table id="example"
                                                            class="display table dataTable table-striped table-bordered">
                                                            <thead>
                                                                <tr>
                                                                    <th>Profile</th>
                                                                    <th>Username</th>
                                                                    <th>Fullname</th>
                                                                    <th>Contact Info</th>
                                                                    <th>Email</th>
                                                                    <th>Date Create</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php foreach($reader_list as $row) { ?>
                                                                <tr>
                                                                    <td>
                                                                        <img src="<?php $_SERVER['HTTP_HOST']; ?>/AppLibra/uploads/images/<?php echo $row['profileImage'] ?>"
                                                                            class="d-flex img-fluid rounded-circle"
                                                                            width="29">
                                                                    </td>
                                                                    <td><?php echo $row['accountUserName'] ?></td>
                                                                    <td><?php echo $row['firstName'].' '.$row['lastName'] ?>
                                                                    </td>
                                                                    <td><?php echo $row['contactInfo'] ?></td>
                                                                    <td><?php echo $row['emailAddress'] ?></td>
                                                                    <td><?php echo $row['created_at'] ?></td>
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