<?php
 include("../nav.php");
 include("../head_nav.php");
 include("../db/connect.php");
 session_start();
 if($_SESSION["user"]=='admin')
 {
 $document = isset($_POST['document_submit']); 
 $video = isset($_POST['video_click']);
 $file_btn = isset($_POST['file_btn']);
 $file_upload_btn = isset($_POST['file_btn']);
$id= $_REQUEST['id'];
 $display_docu_table ="";
 $result=mysqli_query($con,"SELECT * from  value where id=$id ");
 
 while($row=mysqli_fetch_assoc($result))
 {
     
    
       
        $title_update=$row["title"];
         $desc_update=$row["descr"];
         
 

 }
 

if($file_upload_btn)
{
    $title = $_POST['title'];
    $descr = $_POST['editor1'];
    
    
    $file_name=$_FILES['file_name']['name'];
    move_uploaded_file($_FILES['file_name']['tmp_name'] , "../File/$file_name");
    $file_path="File/$file_name";
    mysqli_query($con,"UPDATE value set title='$title',descr='$descr' where id=$id") or die(mysqli_error());
    header("location: ../motion_projects.php");
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
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">

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
          <h1 class="h3 mb-4 text-gray-800">Update Projects</h1>
          <form action="" method="POST" enctype="multipart/form-data">
              <div class="form-group row">
               
              </div>
              <div class="row">
                <div class="col">
                  <label for="staticEmail" class="col-lg-12 col-form-label">Title</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="title" value="<?php echo $title_update?>" id="">
                    </div>
                 </div>
               
                  
                 
              </div>
              
              <hr>
              <div class="col">
                  <label for="inputPassword" class="col-lg-12 col-form-label">Description</label>
                  <div class="col-sm-10">
                  <textarea id="editor1" name="editor1" rows="10" cols="80">
                                                  <?php echo $desc_update ;?>
                          </textarea> </div> </div>
              <hr>
              
              <div class="form-group row">
              
                <div class="container">
                 
                     <progress hidden value="0"   id="assigment_uploader" style="-webkit-appearance: none; background-color: #5f46ee; width: 100%; height: 20px; border: 1px solid #ccc;color: #5f46ee;"  max="100">0%</progress>
                  
                  </div>
                  <hr>
                <input hidden type="file" class="btn btn-success col-lg-12" name="file_name"  >
             
                <div class="col-sm-10">
                <hr>
                  <input type="submit" class="btn btn-primary" value="Submit" name="file_btn"  id="">
                </div>
              
               </div>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Motion  Website 2020</span>
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
          <a class="btn btn-primary" href="logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>
  
  <script>
    CKEDITOR.replace( 'editor1' );
</script>

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
