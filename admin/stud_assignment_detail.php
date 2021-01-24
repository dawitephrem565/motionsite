<?php
 session_start();
 include("nav.php");
 include("head_nav.php");
 include("db/connect.php");
 if($_SESSION["user"]=='teacher')
 {
 $document = isset($_POST['document_submit']); 
 $video = isset($_POST['video_click']);
 $file_btn = isset($_POST['file_btn']);
 $file_upload_btn = isset($_POST['file_upload_btn']);
$id= $_REQUEST['id'];
 $display_docu_table ="";
 $result=mysqli_query($con,"SELECT * from assign_resubmit where post_id=$id ");
 
 while($row=mysqli_fetch_assoc($result))
 {
     
    
         $document_course_name_update= $row["course_name"];
        $document_course_dep_update=$row["course_department"];
         $document_course_year_update=$row["course_year"];
        $document_course_doc_update=$row["course_doc"];
         $document_program_update=$row["program"];
         $document_level_update=$row["level"];
      $document_course_user_update = $row["email"];
 

 }
 

if($document)
{
    $course_name = $_POST['document_course_name'];
    $course_dep = $_POST['document_course_dep'];
    $course_year = $_POST['document_course_year'];
    $course_title = $_POST['document_course_title'];
    $course_doc = $_POST['editor1'];
    $level=$_POST['level'];
    $program=$_POST['program'];
    mysqli_query($con,"UPDATE document set Course_dep='$course_dep',Course_name='$course_name',Course_year='$course_year',Course_title='$course_title',Course_doc='$course_doc',level='$level',program='$program' where id=$id") or die(mysqli_error());
    header("location: textdocument.php");
    exit;
}
if($video)
{
    $video_course_name = $_POST['video_course_name'];
    $video_course_dep = $_POST['video_course_dep'];
    $video_course_year = $_POST['video_course_year'];
    $video_link = $_POST['video_link'];
    mysqli_query($con,"INSERT into video_conference(course_dep,course_name,course_year,video_link,Date) values('$video_course_dep','$video_course_name','$video_course_year','$video_link',now())") or die(mysqli_error());
    header("location: dashboard.php");
    exit;
}
if($file_btn)
{
    $assignment_course_name = $_POST['assignment_course_name'];
    $assignment_course_dep = $_POST['assignment_course_dep'];
    $assignment_course_year = $_POST['assignment_course_year'];
    
    $assignment=$_FILES['assigment_file']['name'];
    move_uploaded_file($_FILES['assigment_file']['tmp_name'] , "assignment/$assignment");
    $assignment_image="assignment/$assignment";
    $sql =mysqli_query($con,"insert into assignment (course_name,course_dep,course_year,assignment_file,Date) value('$assignment_course_name','$assignment_course_dep','$assignment_course_year','$assignment_image',now())") or die(mysqli_error());
    header("location: dashboard.php");
    exit;
}
if($file_btn)
{
    $assignment_course_name = $_POST['assignment_course_name'];
    $assignment_course_dep = $_POST['assignment_course_dep'];
    $assignment_course_year = $_POST['assignment_course_year'];
    
    $assignment=$_FILES['assigment_file']['name'];
    move_uploaded_file($_FILES['assigment_file']['tmp_name'] , "assignment/$assignment");
    $assignment_image="assignment/$assignment";
    $sql =mysqli_query($con,"insert into assignment (course_name,course_dep,course_year,assignment_file,Date) value('$assignment_course_name','$assignment_course_dep','$assignment_course_year','$assignment_image',now())") or die(mysqli_error());
    header("location: dashboard.php");
    exit;
}
if($file_upload_btn)
{
    $file_course_name = $_POST['file_course_name'];
    $file_course_dep = $_POST['file_course_dep'];
    $file_course_year = $_POST['file_course_year'];
    
    $file_name=$_FILES['file_name']['name'];
    move_uploaded_file($_FILES['file_name']['tmp_name'] , "File/$file_name");
    $file_path="File/$file_name";
    $sql =mysqli_query($con,"insert into file (course_name,course_dep,course_year,file_path,Date) value('$file_course_name','$file_course_dep','$file_course_year','$file_path',now())") or die(mysqli_error());
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

  <title>SB Admin 2 - Blank</title>

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
          <h1 class="h3 mb-4 text-gray-800">Update</h1>
          <form action="" method="POST" >
            <div class="row">
              <div class="col">
                <label for="staticEmail" class="col-lg-12 col-form-label">Course Name</label>
                <div class="col-sm-10">
                   <input readonly type="text" class="form-control" value="<?php echo $document_course_name_update ?>">
                 </div>
               </div>
              <div class="col">
                <label for="inputPassword" class="col-lg-12 col-form-label">Course Department</label>
                <div class="col-sm-10">
                  <input readonly type="text" name="" class="form-control" value="<?php echo $document_course_dep_update;?>" id="">
                  
                </div> </div>
            </div>

            <div class="row">
              <div class="col">
                <label for="staticEmail" class="col-lg-12 col-form-label">Course Year</label>
                <div class="col-sm-10">
                 <input readonly type="text" class="form-control" name="" value="<?php echo $document_course_year_update?>">
               
                </div>
               </div>
               <div class="col">
                <label for="staticEmail" class="col-lg-12 col-form-label">Studnet email</label>
                <div class="col-sm-10">
             <input type="text" class="form-control" readonly value="<?php echo $document_course_user_update ?>">
                </div>
               </div>
              
            </div>
            <div class="row">
              <div class="col">
                <label for="staticEmail" class="col-lg-12 col-form-label">Level</label>
                <div class="col-sm-10">
                 <input type="text" class="form-control" name="" readonly value="<?php echo $document_level_update ?>" id="">
               
                </div>
               </div>
               <div class="col">
                <label for="staticEmail" class="col-lg-12 col-form-label">Program</label>
                <div class="col-sm-10">
                 <input readonly type="text" name="" class="form-control" value="<?php echo $document_program_update?>" id="">
               
                </div>
               </div>
               <br>
              
            </div>
            <hr>
           
            <div class="form-group row">
              <div class="col-lg-12">
                <div class="box box-info">
                  <div class="box-header">
                   
                    <!-- tools box -->
                   
                    <!-- /. tools -->
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body pad">
                
                          <textarea readonly id="editor1" name="editor1" rows="10" cols="80">
                                                  <?php echo $document_course_doc_update ;?>
                          </textarea>
                  
                  </div>
                  <br>
                  <input hidden type="submit" class="btn btn-success col-lg-12" value="Submit" name="document_submit"/>
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
