<?php
 session_start();
 include("nav.php");
 include("head_nav.php");
 include("db/connect.php");
 if($_SESSION["user"]=='admin')
 {
 $document = isset($_POST['Save']); 
 $video = isset($_POST['video_click']);
 $file_btn = isset($_POST['file_btn']);
 $file_upload_btn = isset($_POST['file_upload_btn']);
$id= $_REQUEST['id'];
 $display_docu_table ="";
 $result=mysqli_query($con,"SELECT * from awesome where id=$id ");
 
 while($row=mysqli_fetch_assoc($result))
 {
     
    
         $title= $row["title"];
        $descr=$row["descr"];
        

        
 

 }
 

if($document)
{
    $update_text = $_POST['title'];
    $update_price = $_POST['descr'];
    
    
    mysqli_query($con,"UPDATE awesome set title='$update_text',descr='$update_price' where id=$id") or die(mysqli_error());
    header("location: awsome.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">
  <?php echo $nav; ?>
    <!-- Sidebar -->
    
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">
      <?php echo $head_nav;?>
        <!-- Topbar -->
    
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Update Awsome</h1>
          <form action="" method="POST" >
            <div class="row">
              <div class="col">
                <label for="staticEmail" class="col-lg-12 col-form-label">title</label>
                <div class="col-sm-10">
                   
                  <input type="text" class="form-control" name="title" value="<?php echo $title?>" id="">
               </div>
              <div class="col">
                <label for="inputPassword" class="col-lg-12 col-form-label">Description</label>
                <div class="col-sm-10">
                 <input type="text" class="form-control" name="descr" value="<?php echo $descr?>" id="">
                </div> </div>
                <div class="col">
                  <hr>
                <div class="col-sm-10">
                 <input type="submit" class="btn btn-success col-lg-12" name="Save" value="Update" id="">
                </div> </div>
            </div>

           
            <hr>
          
           
            <div class="form-group row">
              <div class="col-sm-10">
               </div>
            </div>

            </form>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Hello Erf Website 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <script>
    CKEDITOR.replace( 'editor1' );
</script>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>
  <?php 
}
else {
  header("location: index.php");
}
?> 
</body>

</html>
