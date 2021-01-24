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
 $teacher_email=$_SESSION['email'];
 $file_upload_btn = isset($_POST['file_upload_btn']);
 $result=mysqli_query($con,"SELECT * from users where email='$teacher_email' ");
 
 while($row=mysqli_fetch_assoc($result))
 {
     
    
         $fname_display= $row["fname"];
        $lname_display=$row["lname"];
         $email_display=$row["email"];
         $password1_display=$row["password1"];
         
         $password2_display=$row["password2"];
         
         $id_number_display=$row["id_number"];
         $college_display=$row["college"];
         $department_display=$row["department"];
         $program_display=$row["program"];
         $level_display=$row["level"];
         $class_year_display=$row["class_year"];
         $semister_display=$row["semister"];
         $section_display=$row["section"];
        

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
            <h1 class="h3 mb-0 text-gray-800">Update  Profile</h1>
            </div>

<div class="container">

<form action="" method="POST" class="user">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input  required type="text" value="<?php echo $fname_display?>" name="fname" class="form-control " id="exampleFirstName" placeholder="First Name">
                  </div>
                  <div class="col-sm-6">
                    <input required type="text" name="lname" value="<?php echo $lname_display?>"" class="form-control " id="exampleLastName" placeholder="Last Name">
                  </div>
                </div>
                <div class="form-group">
                  <input required type="email" name="email"value="<?php echo $email_display?>" class="form-control " id="exampleInputEmail" placeholder="Email Address">
                </div>

                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input required type="text" name="password1" value="<?php echo $password1_display?>" class="form-control " id="exampleInputPassword" placeholder="Password">
                  </div>
                  <div class="col-sm-6">
                    <input required type="text" name="password2"value="<?php echo $password2_display?>" class="form-control " id="exampleRepeatPassword" placeholder="Repeat Password">
                  </div>
                </div>
                 <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input required type="text" name="idnumber" value="<?php echo $id_number_display?>" class="form-control " id="exampleInputPassword" placeholder="Id Number">
                  </div>
                  <div class="col-sm-6">
                     <select  type="text" name="college"   class="form-control " id="college" required >
                      <option><?php echo $college_display?></option>
                    <option data-value="1" value="Agriculture"class="form-control">Agriculture</option>
                    <option value="Engineering" class="form-control">Engineering</option>
                    <option value="Health_Science" class="form-control">Health_science</option>
                    <option value="Computing" class="form-control">Computing</option>       
                    <option value="Natural_And_computational_Science" class="form-control">Natural_And_computational_Science</option>
                    </select>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6">
                    <select  type="text" name="department" class="form-control " id="department" required >
                      <option><?php echo $department_display?></option>
                     <option data-value="Agriculture">Agriculturecul econimics</option>
    <option data-value="Agriculture">Plant scinece </option>
    <option data-value="Agriculture">Agro economics</option>
    <option data-value="Agriculture">Narm</option>
    <option data-value="Engineering">Civil</option>
    <option data-value="Engineering">COTM</option>      
<option data-value="Engineering">Electrical</option>   
<option data-value="Engineering">Mechanical </option>   
<option data-value="Engineering">Servey </option> 
<option data-value="Engineering">Water resorce</option>    
<option data-value="Engineering">COTM</option> 
<option data-value="Computing">Computer science</option>     
<option data-value="Computing">Information science</option>    
<option data-value="Computing">Information systems</option>
<option data-value="Computing">Midwiferry</option>      
<option data-value="Health_Science">COTM</option>          
<option data-value="Health_Science">Nursing</option>   
<option data-value="Health_Science">Health Officer </option> 
<option data-value="Natural_And_computational_Science">Physics</option>
<option data-value="Natural_And_computational_Science">Mathematics</option>
<option data-value="Natural_And_computational_Science">Chemistry</option>
<option data-value="Natural_And_computational_Science">Biology</option>
<option data-value="Natural_And_computational_Science">Statistics</option>
                    </select>
                  </div>
                  <hr>
                  <div class="col-sm-6">
                    <select  type="text" name="program" class="form-control " id="exampleRepeatPassword" required >
                    <option value=""><?php echo $program_display?></option>
                    <option value="Regular">Regular</option>   
                    <option value="extension">Extension</option>
                    <option value="summer">Summer</option> 
                    </select>  
                </div>
                </div>
                <hr>
                <div class="form-group row">
                  <div class="col-sm-6">
                    <select  type="text" name="Level" class="form-control" id="exampleRepeatPassword" required >
                   <option><?php echo $level_display?></option>
                    <option value="undergraduate(firstdegree)">Undergraduate</option>   
                    <option value="Graduate(masters)">Graduate</option> 
                    </select>
                  </div>
                  <hr>
                  <div class="col-sm-6">
                     <select  type="text" name="Class_year" class="form-control " id="exampleRepeatPassword" required >
                      <option><?php echo $class_year_display?></option>
                    <option value="1">1</option>   
                    <option value="2">2</option>
                    <option value="3">3</option> 
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                     <option value="7">7</option>
                    </select>
                  
                </div>
                </div>
                <hr>
                <div class="form-group row">
                  <div class="col-sm-6">
                    <select  type="text" name="Semister" class="form-control " id="exampleRepeatPassword" required >
                      <option><?php echo $semister_display?></option>
                    <option value="1">1</option>   
                    <option value="2">2</option>
                    <option value="3">3</option>
                    
                    </select>
                  </div>
                  <div class="col-sm-6">
                    <input required type="text" value="<?php echo $section_display?>" name="Section" class="form-control" id="exampleRepeatPassword" placeholder="Section">
                  </div>
                </div>
                <input type="submit" name="register_submit" value="Register Account" class="btn btn-primary btn-user btn-block">
                  
                
                <hr>
               
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

    