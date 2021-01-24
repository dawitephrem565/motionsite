<?php
 include("student_nav.php");
 include("head_nav.php");
 include("db/connect.php");
 session_start();
 if($_SESSION["user"]=="stud")
{
 $dep_session=   $_SESSION["department"];
 $year_session=   $_SESSION["class_year"];
 $level_session=   $_SESSION["level"];
 
 $program_session=   $_SESSION["program"];
 $document = isset($_POST['document_submit']); 
 $video = isset($_POST['video_click']);
 $file_btn = isset($_POST['file_btn']);
 $file_upload_btn = isset($_POST['file_upload_btn']);
 $display_text_documnet="";
 $result=mysqli_query($con,"SELECT * from document where Course_dep='$dep_session'and Course_year='$year_session'and level='$level_session'and program='$program_session'");
 $doc_result=mysqli_query($con,"SELECT COUNT(*) FROM document  where Course_dep='$dep_session'and Course_year='$year_session'and level='$level_session'and program='$program_session'   ");
 $video_result=mysqli_query($con,"SELECT COUNT(*) FROM video_conference where Course_dep='$dep_session'and Course_year='$year_session'and level='$level_session'and program='$program_session'");
 $file_result=mysqli_query($con,"SELECT COUNT(*) FROM file where  Course_dep='$dep_session'and Course_year='$year_session'and level='$level_session'and program='$program_session' ");
 $assignment_result=mysqli_query($con,"SELECT COUNT(*) FROM assignment where Course_dep='$dep_session'and Course_year='$year_session'and level='$level_session'and program='$program_session' ");
 
 while($row=mysqli_fetch_assoc($doc_result))
 {
      $total_doc= $row["COUNT(*)"];
 }
 while($row=mysqli_fetch_assoc($video_result))
 {
      $total_video= $row["COUNT(*)"];
 }
 while($row=mysqli_fetch_assoc($assignment_result))
 {
      $total_assignment= $row["COUNT(*)"];
 }
 while($row=mysqli_fetch_assoc($file_result))
 {
      $total_file= $row["COUNT(*)"];
 }
 while($row=mysqli_fetch_assoc($result))
 {
     
    
        $document_course_name_update= $row["Course_name"];
        $document_course_dep_update=$row["Course_dep"];
        $document_course_year_update=$row["Course_year"];
        $document_course_title_update=$row["Course_title"];
        $document_course_doc_update=$row["Course_doc"];
       
  $display_text_documnet .='<div class="card">
  <div class="card-header">
    '.$document_course_dep_update.'
  </div>
  <div class="card-body">
    <h5 class="card-title">'.$document_course_title_update.'</h5>
    <p class="card-text">'.$document_course_doc_update.'</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>';

 }
 

if($document)
{
    $course_name = $_POST['document_course_name'];
    $course_dep = $_POST['document_course_dep'];
    $course_year = $_POST['document_course_year'];
    $course_title = $_POST['document_course_title'];
    $course_doc = $_POST['editor1'];
    mysqli_query($con,"INSERT into Document(Course_dep,Course_name,Course_title,Course_doc,Course_year,Date) values('$course_dep','$course_name','$course_title','$course_doc','$course_year',now())") or die(mysqli_error());
    header("location: dashboard.php");
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

  <title> Dashboard</title>
  <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <link href="css/sb-admin-2.min.css" rel="stylesheet">
 <script src="https://www.gstatic.com/firebasejs/7.14.4/firebase-app.js"></script>
 <script src="https://www.gstatic.com/firebasejs/7.14.4/firebase-analytics.js"></script>
 <script src="https://www.gstatic.com/firebasejs/7.14.4/firebase-auth.js"></script>
 <script src="https://www.gstatic.com/firebasejs/7.14.4/firebase-firestore.js"></script>


 <script src="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css"></script>
 <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="../src/js/status.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
 <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
 <script src="https://www.gstatic.com/firebasejs/7.14.4/firebase-storage.js"></script>

 <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>


 <script src="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"></script>





  
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php echo $nav; ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
    <?php echo $head_nav;?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                     </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Document Post</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">Document</div>
                    </div>
                    <div class="col-auto">
                      <h4 class="bold"><?echo $doc_result?></h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Assignment Post</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">Assignment Post</div>
                    </div>
                    <div class="col-auto">
                      <h4 class="bold">5</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Video Links</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">Video Link Post</div>
                    </div>
                    <div class="col-auto">
                      <h4 class="bold">5</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">File Post</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">File Post</div>
                    </div>
                    <div class="col-auto">
                      <h5 class="bold">5</h5>
                       </div>
                  </div>
                </div>
              </div>
            </div>
<div class="container">
         <br>

         <!-- Modal Existance -->
        <?php echo $display_text_documnet;?>

  
        </div>
         
          <!-- Content Row -->
          

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

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>


  
<script src="jsmode/app.js"></script>
<script src="js/datatable.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>
  <script src="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css"></script>
  <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <script>
    CKEDITOR.replace( 'editor1' );
</script>

  <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
 <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>

<script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
     
      <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
      <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
      <script src="jsmode/datatables-demo.js"></script>
      <?php 
}
else {
    header("location: index.php");
}
?> 
</body>

</html>
