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
    <?php
    if(isset($_GET['bookID'])){
        $book_ID = $_GET['bookID'];
        $query = "select * from tblbooks where bookID='$book_ID'";
        $query_result = mysqli_query($mysqli, $query);
        $query_row = mysqli_fetch_assoc($query_result);
        //echo $query_row['bookPdf'];
        //echo $_SERVER['HTTP_HOST']."/Applibra/uploads/docs/".$query_row['bookPdf'];
    }
?>
    <div class="container-fluid site-width">
        <div class="row mx-1 pt-2">
            <iframe
                src="<?php $_SERVER['HTTP_HOST']; ?>/AppLibra/uploads/docs/<?php echo $query_row['bookPdf']; ?>#toolbar=0"
                type="application/pdf" height="600px" width="100%">
            </iframe>
        </div>
    </div>

</main>
<!-- End of Content -->

<?php include($_SERVER['DOCUMENT_ROOT'].'/AppLibra/app/admin/template/footer.php') ?>