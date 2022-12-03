<!-- Head Template -->
<?php include($_SERVER['DOCUMENT_ROOT'].'/AppLibra/app/admin/template/head.php') ?>
<!--End of Head -->

<!-- Sidebar Template -->
<?php include($_SERVER['DOCUMENT_ROOT'].'/AppLibra/app/admin/template/sidebar.php') ?>
<!--End of Sidebar -->
<?php
include($_SERVER['DOCUMENT_ROOT'].'/AppLibra/functions/conn.php');

?>
<main>
    <div class="container-fluid site-width">
        <div class="row">
            <div class="col-12 mt-3">
                <div class="card">
                    <div class="card-header  justify-content-between align-items-center">
                        <h4 class="card-title"><i class="icofont-users-alt-2"></i>Users</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="display table dataTable table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Role</th>
                                        <th>Field Of Interest</th>
                                        <th>Contact Info</th>
                                        <th>Email Address</th>
                                        <th>Date Signup</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>Author</td>
                                        <td>Engineering</td>
                                        <td>09978366415</td>
                                        <td>tigerN@gmail.com</td>
                                        <td>2011/04/25</td>
                                    </tr>
                                    <tr>
                                        <td>Garrett Winters</td>
                                        <td>Author</td>
                                        <td>Literature & Arts</td>
                                        <td>09351549418</td>
                                        <td>garretW@gmail.com</td>
                                        <td>2011/07/25</td>
                                    </tr>
                                    <tr>
                                        <td>Ashton Cox</td>
                                        <td>Author</td>
                                        <td>Psychology</td>
                                        <td>09350274226</td>
                                        <td>ashtonC@gmail.com</td>
                                        <td>2009/01/12</td>
                                    </tr>
                                    <tr>
                                        <td>Cedric Kelly</td>
                                        <td>Reader</td>
                                        <td>Technology</td>
                                        <td>09268811786</td>
                                        <td>cedricK@gmail.com</td>
                                        <td>2012/03/29</td>
                                    </tr>
                                    <tr>
                                        <td>Airi Satou</td>
                                        <td>Reader</td>
                                        <td>Novel/Manga/Series</td>
                                        <td>09978366415</td>
                                        <td>airiS@gmail.com</td>
                                        <td>2008/11/28</td>
                                    </tr>
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