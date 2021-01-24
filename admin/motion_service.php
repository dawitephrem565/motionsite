<?php
 session_start();
 include("nav.php");
 include("head_nav.php");
 include("db/connect.php");
 if($_SESSION["user"]=='admin')
 {
 $document = isset($_POST['file_upload_btn']); 
 $video = isset($_POST['video_click']);
 $file_btn = isset($_POST['file_btn']);
 $teacher_email=$_SESSION['email'];
 $file_upload_btn = isset($_POST['file_upload_btn']);
 $result=mysqli_query($con,"SELECT * from  services ");
 $display_news="";
 while($row=mysqli_fetch_assoc($result))
 {
     
         $id = $row['id'];
         $title= $row["service_title"];
        $descr=$row["service_desc"];
      
       $display_news .=' <div class="col-sm-6">
        <div class="card">
       <div class="card-body">
         <h5 class="card-title">'.$title.'</h5>
          <p class="card-text">'.$descr.'</p>
         <p class="card-text"><small class="text-muted">  </small></p>
         <a href="assign_update.php?id='.$id.'" class="btn btn-success">Update</a>
         </div>
     </div></div>';
        

 }
if($document)
{
    $title_upload = $_POST['title'];
    $member_postion = $_POST['postion'];
    $description = $_POST['editor1'];
    $file_name=$_FILES['file_name']['name'];
    move_uploaded_file($_FILES['file_name']['tmp_name'] , "File/$file_name");
    $file_path="File/$file_name";
    $sql =mysqli_query($con,"insert into  services (service_title,service_desc,Date) value('$title_upload','$description',now())") or die('<script> alert('.mysqli_error().')</script>"');
    header("location: motion_service.php");
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
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js">
 <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
 <script src="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css"></script>
 <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="../src/js/status.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
 <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
 <script src="https://www.gstatic.com/firebasejs/7.14.4/firebase-storage.js"></script>

 <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>








  
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
            <h1 class="h3 mb-0 text-gray-800">Services </h1>
            </div>
            <div class="text-right">
            <button type="button" class="btn btn-primary col-lg-4 " data-target=".bd-example-modal-lg" data-toggle="modal" >
  Add New Services
</button>
            </div>
<div class="container">
<div class="row"><?php echo $display_news?>
</div>
 
</div>
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Member Registration</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="" method="POST" enctype="multipart/form-data" >
        <div class="container">
        <hr>
        
            <div class="row">
              <div class="col">
                <label for="staticEmail" class="col-lg-12 col-form-label">Services name</label>
                <div class="col-sm-10">
                   <input type="text" class="form-control" name="title"  id="">
                
                </div>
               </div>
              
            </div>
            <div hidden class="row">
              <div class="col">
                <label for="staticEmail" class="col-lg-12 col-form-label">Member position</label>
                <div class="col-sm-10">
                   <input type="text" class="form-control" name="postion"  id="">
                
                </div>
               </div>
              
            </div>

            
            <hr>
          
            <div class="form-group row">
              <div class="col-lg-12">
                <div class="box box-info">
                 
                  <!-- /.box-header -->
                 
                  <textarea id="editor1" name="editor1" rows="10" cols="80">
         
                                                  
                          </textarea> 
                          <div class="form-group row">
              
              
              <input hidden type="file" class="btn btn-success col-lg-12" name="file_name" >
              <hr>
              <div class="col-sm-10">
                <input type="submit" class="btn btn-primary" value="Submit" name="file_upload_btn"  id="">
              </div>
            
             </div>
                          <hr>
                  <br>
                  </div></div>
            </div>
            <div class="form-group row">
              <div class="col-sm-10">
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
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Motion Website 2021</span>
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
 <script src="./helloerf/admin/js/moment.js"></script>
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

    
    