<!-- Head Template -->
<?php include($_SERVER['DOCUMENT_ROOT'].'/AppLibra/app/author/template/head.php') ?>
<!--End of Head -->

<!-- Sidebar Template -->
<?php include($_SERVER['DOCUMENT_ROOT'].'/AppLibra/app/author/template/sidebar.php') ?>
<!--End of Sidebar -->
<?php 
session_start();
include_once($_SERVER['DOCUMENT_ROOT'].'/AppLibra/functions/conn.php');
$authID = $_SESSION['authorID'];
$query="select * from tblcategories";
$author_query = "SELECT tblauthor.authorID AS authID, tblprofile.profile_ID AS profID, tblprofile.firstName AS fname, tblprofile.lastName AS lname
                 FROM tblprofile INNER JOIN tblauthor ON tblprofile.profile_ID = tblauthor.profile_ID WHERE (((NOT tblauthor.authorID) = '$authID')) ";
$result=mysqli_query($mysqli ,$query);
$author_query_result = mysqli_query($mysqli, $author_query);
?>
<main>
    <div class="container-fluid site-width">
        <div class="row">
            <div class="col-12 mt-0">
                <div class="card">
                    <div class="card-header">
                        <h5 class="modal-title" id="myLargeModalLabel10"><i class="icofont-info-circle"></i>
                            Book Details</h5>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <form action="<?php $_SERVER['DOCUMENT_ROOT']; ?>/AppLibra/functions/uploadbook.php"
                                        method="POST" enctype="multipart/form-data">
                                        <div class="form-row">
                                            <div class="col-6 mb-3">
                                                <label for="username">Book Title</label>
                                                <input type="text" name="book-title" class="form-control"
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
                                                    <label for="customFile" class="custom-file-label">Upload
                                                        Image</label>
                                                </div>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <label>Upload PDF File</label>
                                                <div class="custom-file overflow-hidden">
                                                    <input id="customFile" name="book-file" type="file"
                                                        class="custom-file-input">
                                                    <label for="customFile" class="custom-file-label">Choose
                                                        file</label>
                                                </div>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">Categories</span>
                                                    </div>
                                                    <select multiple name="book-category[]">
                                                        <option label="Choose on thing">Choose a
                                                            category</option>
                                                        <?php 
                                                                                while($rows=mysqli_fetch_assoc($result))
                                                                                { 
                                                                            ?>
                                                        <option value="<?php echo $rows['categoryID']; ?>">
                                                            <?php echo $rows['categoryName']; ?>
                                                        </option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">Book Author/s</span>
                                                    </div>
                                                    <select multiple name="book-author[]">
                                                        <option label="Choose on thing">Choose authors</option>
                                                        <option selected="selected" value="<?php echo $_SESSION['authorID']; ?>"><?php echo $_SESSION['UserFullName'] ?> (YOU)</option>
                                                        <?php 
                                                                                while($rows=mysqli_fetch_assoc($author_query_result))
                                                                                { 
                                                                            ?>
                                                        <option value="<?php echo $rows['authID']; ?>">
                                                            <?php echo $rows['fname']." ".$rows['lname']; ?>
                                                        </option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <label for="username">Book Type</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">Free/Premium</span>
                                                    </div>
                                                    <select name="book-type" id="book_type">
                                                        <option value="0">Free</option>
                                                        <option value="1">Premium</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-6 mb-3 align-self-center">
                                                <label for="username">Book Price</label>
                                                <input type="number" name="book-price" id="book_price" readonly
                                                    class="form-control" placeholder="0.00">
                                            </div>
                                            <div class="col-12 mb-3">
                                                <div class="card">
                                                    <div
                                                        class="card-header d-flex justify-content-between align-items-center">
                                                        <h4 class="card-title">Book Overview</h4>
                                                    </div>
                                                    <div class="card-body">
                                                        <textarea name="overview" class="summernote"><p></p></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <button type="submit" class="btn btn-success">Submit</button>
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
<?php include($_SERVER['DOCUMENT_ROOT'].'/AppLibra/app/author/template/footer.php') ?>