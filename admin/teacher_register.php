<?php
session_start();
if($_SESSION["user"]=='admin')
{
 include("register_side_nav.php");
 include("head_nav.php");
 include("db/connect.php");
 $document = isset($_POST['register']); 
 $t_email=$_SESSION['email'];
 $teacher_email=$_SESSION['email'];

if($document)
{
    $academic_program = $_POST['academic_program'];
    $college = $_POST['college'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $lname = $_POST['lname'];
    $fname=$_POST['fname'];
  
    mysqli_query($con,"INSERT into users(fname,lname,email,password1,password2,college,academic_status,role,Date) values('$fname','$lname','$email','$password','$password','$college','$academic_program','teacher',now())") or die(mysqli_error());
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

  <title> MWU VC</title>
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
            <h1 class="h3 mb-0 text-gray-800">Registered Teachers</h1>
                     </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
          
          

            <!-- Earnings (Monthly) Card Example -->
          
       
<div class="container">
          <div class="text-right"><button data-toggle="modal" data-target="#add_course_modal" data-whatever="add_course_modal"  class="btn btn-primary col-lg-6" > Register Techers</button></div>
         <br>

         <!-- Modal Existance -->
         <div class="table-responsive">
          <!-- Content Row -->
          <table id="dataTables" class="table table-bordered" style="width:100%">
            <thead>
                <tr>
                <td>Id</td>
                
                <td>First  Name</td>
                <td>Last Name</td>
                
                <td>Email</td>
                </tr>
            </thead>
            <?php
            $no = 1;
            $display_docu_table ="";
            $result=mysqli_query($con,"SELECT * from users where role='teacher' ");
            
            while($row=mysqli_fetch_assoc($result))
            {
                $display_docu_table .='
                <tr>
                    <td>'. $no.'</td>
                    <td>'. $row["fname"].'</td>
                    <td>'. $row["lname"].'</td>
                    <td>'. $row["email"].'</td>
                   
                </tr>
            ';
            $no++;
            }
            ?>
           <tbody>
           <?php  echo $display_docu_table;?>
          
           </tbody>
            
        </table>
         </div>

  
<div class="modal fade" id="add_course_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Teachers Registeration</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <nav>
          <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <a class="nav-item nav-link active" id="nav-document-tab" data-toggle="tab" href="#nav-document" role="tab" aria-controls="nav-document" aria-selected="true">Account Create</a>
           
          </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
          <div class="tab-pane fade show active" id="nav-document" role="tabpanel" aria-labelledby="nav-document-tab">
 <form action="" method="POST" >
            <div class="row">
              <div class="col">
                <label for="staticEmail" class="col-lg-12 col-form-label">First Name</label>
                <div class="col-sm-10">
                    <input type="text" name="fname" class="form-control" id="">
                  </div>
               </div>
              <div class="col">
                <label for="inputPassword" class="col-lg-12 col-form-label">Last Name</label>
                <div class="col-sm-10">
                 <input type="text" name="lname" class="form-control" id="">
                </div> </div>
            </div>

            <div class="row">
              <div class="col">
                <label for="staticEmail" class="col-lg-12 col-form-label">Email</label>
                <div class="col-sm-10">
                  <input class="form-control" type="email" name="email">
                </div>
               </div>
               <div class="col">
              
                <label for="staticEmail" class="col-lg-12 col-form-label">Password</label>
                <div class="col-sm-10">
                 <input readonly onfocus="generatePassword(this)"  class="form-control" id="passgenerator"  name="password"><br>
                   
                </div>
               </div>
               <br>
              
            </div>
            <hr>
            <div class="row">
              <div class="col">
                <label for="staticEmail" class="col-lg-12 col-form-label">College</label>
                <div class="col-sm-10">
                 
                <select  id="document_course_year" name="college" class="form-control col-lg-4" >
              
                   <option value="Undergraduate (first degree)">Undergraduate (first degree)</option>
                    <option value="Graduate (masters)">Graduate (masters)</option>
                  
                   
                  </select>
                </div>
               </div>
               <div class="col">
                <label for="staticEmail" class="col-lg-12 col-form-label">Acadamic Status</label>
                <div class="col-sm-10">
                 
                <select  id="document_course_year" name="academic_program" class="form-control col-lg-4" >
               
                   <option value="First Degree">First Degree</option>
                    <option value="Masters">Masters</option>
                    <option value="PHD">PHD</option>
                   
                   
                  </select>
                </div>
               </div>
               <br>
              
            </div>
            <hr>
        <input type="submit" value="Create New Account " name="register" class="btn btn-success col-lg-12">
           
           

            </form>
          </div>
  
         
               </div>
              </div>
              <div class="row">
               
               
                 <br>
                
              </div>
              <hr>
              <div class="row">
              
              
               <br>
              
            </div>
            <hr>
             
             
             
              </form>
          </div>
          <div class="tab-pane fade" id="nav-assignment" role="tabpanel" aria-labelledby="nav-assignment-tab">
              </div>
            
              
          
          <div class="tab-pane fade" id="nav-file" role="tabpanel" aria-labelledby="nav-file-tab">
            
             
            
          </div>
        </div>
      </div>
     
    </div>
  </div>
</div>
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
  <script>
      function generatePassword(x) {
    var length = 8,
        charset = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789",
        retVal = "";
    for (var i = 0, n = charset.length; i < length; ++i) {
        retVal += charset.charAt(Math.floor(Math.random() * n));
    }
    document.getElementById("passgenerator").value=retVal ;
}
  </script>
  
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
   
  header("location: t_register.php");
}
?>      
</body>

</html>
