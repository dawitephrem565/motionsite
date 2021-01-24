<?php 
 include("db/connect.php");
 $document = isset($_POST['register_submit']); 
 
if($document)
{
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password1 = $_POST['password1'];
    $password2 = $_POST['password2'];
    $department=$_POST['department'];

    $program = $_POST['program'];
    $level = $_POST['Level'];
    $semister=$_POST['Semister'];
    $section=$_POST['Section'];
    $class_year=$_POST['Class_year'];

    //new
$college = $_POST['college'];
$idnumber = $_POST['idnumber'];
    //new
    if($password1==$password2)
    {
        
    $data_check = mysqli_query($con,"SELECT * From user where email='$email'");
    if($data_check)
    {
        echo "<script>alert('Email Existed  in Our Db')</script>";
    }
    else{
      mysqli_query($con,"INSERT into users(fname,lname,email,password1,password2,department,program,level,semister,section,class_year,Date,id_number,college) 
      values('$fname','$lname','$email','$password1','$password2','$department','$program','$level','$semister','$section','$class_year',now(),'$idnumber','$college')") or die(mysqli_error());
    header("location: index.php");
    exit;
    }
}
else
{
    echo "<script>alert('You Password Must Be The Same ')</script>";
   
}
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

  <title>MWU VC</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
              </div>
              <form action="" method="POST" class="user">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input  required type="text" name="fname" class="form-control " id="exampleFirstName" placeholder="First Name">
                  </div>
                  <div class="col-sm-6">
                    <input required type="text" name="lname" class="form-control " id="exampleLastName" placeholder="Last Name">
                  </div>
                </div>
                <div class="form-group">
                  <input required type="email" name="email" class="form-control " id="exampleInputEmail" placeholder="Email Address">
                </div>

                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input required type="password" name="password1" class="form-control " id="exampleInputPassword" placeholder="Password">
                  </div>
                  <div class="col-sm-6">
                    <input required type="password" name="password2" class="form-control " id="exampleRepeatPassword" placeholder="Repeat Password">
                  </div>
                </div>
                 <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input required type="text" name="idnumber" class="form-control " id="exampleInputPassword" placeholder="Id Number">
                  </div>
                  <div class="col-sm-6">
                     <select  type="text" name="college" class="form-control " id="college" required >
                      <option>College</option>
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
                      <option>Department</option>
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
                    <option value="undergraduate(firstdegree)">Undergraduate</option>   
                    <option value="Graduate(masters)">Graduate</option> 
                    </select>
                  </div>
                  <hr>
                  <div class="col-sm-6">
                     <select  type="text" name="Class_year" class="form-control " id="exampleRepeatPassword" required >
                      <option>Class year</option>
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
                      <option>Semister</option>
                    <option value="1">1</option>   
                    <option value="2">2</option>
                    <option value="3">3</option>
                    
                    </select>
                  </div>
                  <div class="col-sm-6">
                    <input required type="text" name="Section" class="form-control" id="exampleRepeatPassword" placeholder="Section">
                  </div>
                </div>
                <input type="submit" name="register_submit" value="Register Account" class="btn btn-primary btn-user btn-block">
                  
                
                <hr>
               
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="forgot-password.html">Forgot Password?</a>
              </div>
              <div class="text-center">
                <a class="small" href="login.html">Already have an account? Login!</a>
              </div>
            </div>
          </div>
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
<script type="text/javascript">
  $(document).ready(function() {
  var selectors = ['college', 'department','exampleRepeatPassword','exampleRepeatPassword','exampleRepeatPassword','exampleRepeatPassword']

  $('select').on('change', function() {
    var index = selectors.indexOf(this.id)
    var value = this.value

    // check if is the last one or not
    if (index < selectors.length - 1) {
      var next = $('#' + selectors[index + 1])

      // Show all the options in next select
      $(next).find('option').show()
      if (value != "") {
        // if this select's value is not empty
        // hide some of the options 
        $(next).find('option[data-value!=' + value + ']').hide()
      }
      else
      {

      }
      
      // set next select's value to be the first option's value 
      // and trigger change()
      $(next).val($(next).find("option:first").val()).change()
    }
  })
});


</script>
</body>

</html>
