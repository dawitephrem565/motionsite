<?php
 session_start();
 include("nav.php");
 include("head_nav.php");
 include("db/connect.php");
 if($_SESSION["user"]=='stud')
 {
 $document = isset($_POST['document_submit']); 
 $video = isset($_POST['video_click']);
 $file_btn = isset($_POST['file_btn']);
 $file_upload_btn = isset($_POST['file_upload_btn']);
$post_id= $_REQUEST['id'];
$course_name_req=$_REQUEST['course_name'];
$course_year_req=$_REQUEST['course_year'];;
$course_dep_req=$_REQUEST['department'];;
$course_level_req=$_REQUEST['level'];;
$course_program_req=$_REQUEST['program'];

$course_file_req=$_REQUEST['file'];
$teacher_email=$_REQUEST['teacher_email'];
$display_docu_table ="";

 

if($document)
{
   
    $course_title = $_POST['document_title'];
    $course_doc = $_POST['editor1'];
    $stud_email=$_SESSION['email'];
    mysqli_query($con,"INSERT INTO assign_resubmit(post_id,course_name,course_department,course_year,level,program,teacher_email,email,file_path,course_doc,Date) values('$post_id','$course_name_req','$course_dep_req','$course_year_req','$course_level_req','$course_program_req','$teacher_email','$stud_email','$course_file_req','$course_doc',now())") or die(mysqli_error());
    header("location: stud_assignment.php");
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
          <h1 class="h3 mb-4 text-gray-800">Submit Assignment</h1> <form action="" method="POST" >
            

           
          
            <hr>
            <div class="form-group row">
            

              <label for="inputPassword" class="col-sm-2 col-form-label"> Title</label>
             <br>
              <div class="col-sm-10">
                <input type="text" id="document_title" name="document_title" class="form-control" value="Subject Title " >
              </div>
            </div>
            <div class="form-group row">
              <div class="col-lg-12">
                <div class="box box-info">
                  <div class="box-header">
                   
                    <!-- tools box -->
                   
                    <!-- /. tools -->
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body pad">
                
                          <textarea id="editor1" name="editor1" rows="10" cols="80">
                        
                        </textarea>
                  
                  </div>
                  <br>
                  <input type="submit" class="btn btn-success col-lg-12" value="Submit" name="document_submit"/>
                </div></div>
            </div>
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
            <span>Copyright &copy; Your Website 2019</span>
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