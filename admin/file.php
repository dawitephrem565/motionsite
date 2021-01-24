<?php

session_start();
if($_SESSION["user"]=="teacher")
{
 include("nav.php");
 include("head_nav.php");
 include("db/connect.php");
 $document = isset($_POST['document_submit']); 
 $video = isset($_POST['video_click']);
 $file_btn = isset($_POST['file_btn']);
 $teacher_email=$_SESSION['email'];
 $file_upload_btn = isset($_POST['file_upload_btn']);
 
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

  <title> MWU VC</title>
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
            <h1 class="h3 mb-0 text-gray-800">File Uploded</h1>
            </div>

<div class="container">
           <br>

         <!-- Modal Existance -->
         <div class="table-responsive">
          <!-- Content Row -->
          <table id="dataTables" class="table table-bordered" style="width:100%">
            <thead>
                <tr>
                <td>Id</td>
                
                <td>Course Name</td>
                <td>Course Department</td>
                
                <td>Batch</td>
                <td>File Path</td>
                <td>Post Date</td>
                <td>Update</td>
                <td>Delete</td>
                </tr>
            </thead>
            <?php
            $no = 1;
            $display_docu_table ="";
            $result=mysqli_query($con,"SELECT * from file where teacher_email='$teacher_email' ");
            
            while($row=mysqli_fetch_assoc($result))
            {
                $display_docu_table .='
                <tr>
                    <td>'. $no.'</td>
                    <td>'. $row["course_name"].'</td>
                    <td>'. $row["course_dep"].'</td>
                    <td>'. $row["course_year"].'</td>
                    <td>'. $row["file_path"].'</td>
                    <td>'. $row["Date"].'</td>
                    <td><a class="btn btn-primary btn-xs" href="file_update.php?id='. $row["id"].'">Update</a></td>
                    <td><a class="btn btn-danger btn-xs" href="file_delete.php?id='. $row["id"].'">Delete</a></td>
                   
                   
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
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <nav>
          <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <a class="nav-item nav-link active" id="nav-document-tab" data-toggle="tab" href="#nav-document" role="tab" aria-controls="nav-document" aria-selected="true">Document</a>
            <a class="nav-item nav-link" id="nav-video-tab" data-toggle="tab" href="#nav-video_con" role="tab" aria-controls="nav-video_con" aria-selected="false">Video Conference</a>
            <a class="nav-item nav-link" id="nav-assignment-tab" data-toggle="tab" href="#nav-assignment" role="tab" aria-controls="nav-assignment" aria-selected="false">Assignment</a>
            <a class="nav-item nav-link" id="nav-file-tab" data-toggle="tab" href="#nav-file" role="tab" aria-controls="nav-file" aria-selected="false">File Upload </a>
         
          </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
          <div class="tab-pane fade show active" id="nav-document" role="tabpanel" aria-labelledby="nav-document-tab">
 <form action="" method="POST" >
            <div class="row">
              <div class="col">
                <label for="staticEmail" class="col-lg-12 col-form-label">Course Name</label>
                <div class="col-sm-10">
                  <select  id="document_course_name" name="document_course_name" class="form-control"  >
                   <option value="Basic Mathematics for Natural Sciences"> Basic Mathematics for Natural Sciences                          </option>
                   <option value="General Psychology and Life skills"> General Psychology and Life skills</option>
                   <option value=" Introduction to International Relations and Global Issues"> Introduction to International Relations and Global Issues</option>
                   <option value=" Physical Fitness and Conditioning"> Physical Fitness and Conditioning</option>
                   <option value=" Geograhpy of Ethiopia and The Horn"> Geograhpy of Ethiopia and The Horn</option>
                   <option value="Communicative Enlglish Skill I"> Communicative Enlglish Skill I</option>
                   <option value="Logic and Critical Thinking"> Logic and Critical Thinking</option>
                   <option value="Antropology of Ethiopian Societies and Cultures"> Antropology of Ethiopian Societies and Cultures</option>
                   <option value="Enteperineurship & Business Development"> Enteperineurship & Business Development</option>
                   <option value=" Introduction to Emerging Technologies"> Introduction to Emerging Technologies</option>
                   <option value=" History of Ethiopia and the Horn"> History of Ethiopia and the Horn</option>
                   <option value=" Ethics and Moral Education"> Ethics and Moral Education</option>
                   <option value=" Introduction to Economics"> Introduction to Economics</option>
                   <option value="Communicative English II"> Communicative English II</option>
                   <option value="Fundamentals of Programming"> Fundamentals of Programming</option>
                   <option value="Linear Algebra"> Linear Algebra</option>
                   <option value="Fundamentals of Electricity and Electronic Devices"> Fundamentals of Electricity and Electronic Devices</option>
                   <option value="Fundamentals of Database"> Fundamentals of Database</option>
                   <option value=" Probability and Statistics"> Probability and Statistics</option>
                   <option value="Computer organization and architecture"> Computer organization and architecture</option>
                   <option value="Digital Electronics" > Digital Electronics</option>
                   <option value=" Applied Mathematics"> Applied Mathematics</option>
                   <option value="Object Oriented Programming"> Object Oriented Programming</option>
                   <option value="Discrete Mathematics and Combinatorics"> Discrete Mathematics and Combinatorics</option>
                   <option value=" Data Structures and Algorithms"> Data Structures and Algorithms</option>
                   <option value=" Microprocessor and Assembly Language Programming"> Microprocessor and Assembly Language Programming</option>
                   <option value=" Operating System"> Operating System</option>
                   <option value=" Data Communication & Computer Networking"> Data Communication & Computer Networking</option>
                   <option value="Advanced Database System"> Advanced Database System</option>
                   <option value=" Advanced Programming"> Advanced Programming</option>
                   <option value="Numerical Analysis"> Numerical Analysis</option>
                   <option value=" Wireless Communication and Mobile Computing"> Wireless Communication and Mobile Computing</option>
                   <option value="Analysis of Algorithms"> Analysis of Algorithms</option>
                   <option value="Internet Programming"> Internet Programming</option>
                   <option value=" Formal Language and Automata Theory"> Formal Language and Automata Theory</option>
                   <option value="Object Oriented Software Engineering"> Object Oriented Software Engineering</option>
                   <option value=" Computer Graphics"> Computer Graphics</option>
                   <option value="Compiler Design"> Compiler Design</option>
                   <option value="Technical Report Writing in Computer Science"> Technical Report Writing in Computer Science</option>
                   <option value="Logic in Computer Science"> Logic in Computer Science</option>
                   <option value="Complexity Theory"> Complexity Theory</option>
                   <option value=" Elective I (one course)"> Elective I (one course)</option>
                   <option value="Final Project I"> Final Project I</option>
                   <option value="Industrial Practice (Internship)"> Industrial Practice (Internship)</option>
                   <option value="Introduction to Distributed Systems"> Introduction to Distributed Systems</option>
                   <option value="Introduction to Artificial Intelligence"> Introduction to Artificial Intelligence</option>
                   <option value=" Computer Security"> Computer Security</option>
                   <option value=" Elective II (one course)"> Elective II (one course)</option>
                   <option value="Final Project II"> Final Project II</option>
                   <option value="Selected topics in Computer Science (Seminar)"> Selected topics in Computer Science (Seminar)</option>
                  </select value="">
                </div>
               </div>
              <div class="col">
                <label for="inputPassword" class="col-lg-12 col-form-label">Course Department</label>
                <div class="col-sm-10">
                  <select  id="document_course_dep" name="document_course_dep" class="form-control">
                    <option value="Computer Science"> Computer Science</option>
                    <option value="Information Science"> Information Science</option>
                    <option value="Information System"> Information System</option>
                  </select>
                </div> </div>
            </div>

            <div class="row">
              <div class="col">
                <label for="staticEmail" class="col-lg-12 col-form-label">Course Year</label>
                <div class="col-sm-10">
                  <select  id="document_course_year" name="document_course_year" class="form-control col-lg-4" >
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                   
                  </select>
                </div>
               </div>
               <br>
              
            </div>
            <hr>
            <div class="form-group row">
            

              <label for="inputPassword" class="col-sm-2 col-form-label">Course Title</label>
             <br>
              <div class="col-sm-10">
                <input type="text" id="document_course_title" name="document_course_title" class="form-control" >
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
                                                  This is my textarea to be replaced with CKEditor.
                          </textarea>
                  
                  </div>
                  <input type="submit" class="btn btn-success" value="Submit" name="document_submit"/>
                </div></div>
            </div>
            <div class="form-group row">
              <div class="col-sm-10">
               </div>
            </div>

            </form>
          </div>
  
          <div class="tab-pane fade" id="nav-video_con" role="tabpanel" aria-labelledby="nav-video-tab">
          
              <form action="" method="POST">
              <div class="row">
                <div class="col">
                  <label for="staticEmail" class="col-lg-12 col-form-label">Course Name</label>
                  <div class="col-sm-10">
                    <select  id="video_course_name" name="video_course_name" class="form-control" >
                     <option value="Basic Mathematics for Natural Sciences"> Basic Mathematics for Natural Sciences                          </option>
                     <option value="General Psychology and Life skills"> General Psychology and Life skills</option>
                     <option value=" Introduction to International Relations and Global Issues"> Introduction to International Relations and Global Issues</option>
                     <option value=" Physical Fitness and Conditioning"> Physical Fitness and Conditioning</option>
                     <option value=" Geograhpy of Ethiopia and The Horn"> Geograhpy of Ethiopia and The Horn</option>
                     <option value="Communicative Enlglish Skill I"> Communicative Enlglish Skill I</option>
                     <option value="Logic and Critical Thinking"> Logic and Critical Thinking</option>
                     <option value="Antropology of Ethiopian Societies and Cultures"> Antropology of Ethiopian Societies and Cultures</option>
                     <option value="Enteperineurship & Business Development"> Enteperineurship & Business Development</option>
                     <option value=" Introduction to Emerging Technologies"> Introduction to Emerging Technologies</option>
                     <option value=" History of Ethiopia and the Horn"> History of Ethiopia and the Horn</option>
                     <option value=" Ethics and Moral Education"> Ethics and Moral Education</option>
                     <option value=" Introduction to Economics"> Introduction to Economics</option>
                     <option value="Communicative English II"> Communicative English II</option>
                     <option value="Fundamentals of Programming"> Fundamentals of Programming</option>
                     <option value="Linear Algebra"> Linear Algebra</option>
                     <option value="Fundamentals of Electricity and Electronic Devices"> Fundamentals of Electricity and Electronic Devices</option>
                     <option value="Fundamentals of Database"> Fundamentals of Database</option>
                     <option value=" Probability and Statistics"> Probability and Statistics</option>
                     <option value="Computer organization and architecture"> Computer organization and architecture</option>
                     <option value="Digital Electronics" > Digital Electronics</option>
                     <option value=" Applied Mathematics"> Applied Mathematics</option>
                     <option value="Object Oriented Programming"> Object Oriented Programming</option>
                     <option value="Discrete Mathematics and Combinatorics"> Discrete Mathematics and Combinatorics</option>
                     <option value=" Data Structures and Algorithms"> Data Structures and Algorithms</option>
                     <option value=" Microprocessor and Assembly Language Programming"> Microprocessor and Assembly Language Programming</option>
                     <option value=" Operating System"> Operating System</option>
                     <option value=" Data Communication & Computer Networking"> Data Communication & Computer Networking</option>
                     <option value="Advanced Database System"> Advanced Database System</option>
                     <option value=" Advanced Programming"> Advanced Programming</option>
                     <option value="Numerical Analysis"> Numerical Analysis</option>
                     <option value=" Wireless Communication and Mobile Computing"> Wireless Communication and Mobile Computing</option>
                     <option value="Analysis of Algorithms"> Analysis of Algorithms</option>
                     <option value="Internet Programming"> Internet Programming</option>
                     <option value=" Formal Language and Automata Theory"> Formal Language and Automata Theory</option>
                     <option value="Object Oriented Software Engineering"> Object Oriented Software Engineering</option>
                     <option value=" Computer Graphics"> Computer Graphics</option>
                     <option value="Compiler Design"> Compiler Design</option>
                     <option value="Technical Report Writing in Computer Science"> Technical Report Writing in Computer Science</option>
                     <option value="Logic in Computer Science"> Logic in Computer Science</option>
                     <option value="Complexity Theory"> Complexity Theory</option>
                     <option value=" Elective I (one course)"> Elective I (one course)</option>
                     <option value="Final Project I"> Final Project I</option>
                     <option value="Industrial Practice (Internship)"> Industrial Practice (Internship)</option>
                     <option value="Introduction to Distributed Systems"> Introduction to Distributed Systems</option>
                     <option value="Introduction to Artificial Intelligence"> Introduction to Artificial Intelligence</option>
                     <option value=" Computer Security"> Computer Security</option>
                     <option value=" Elective II (one course)"> Elective II (one course)</option>
                     <option value="Final Project II"> Final Project II</option>
                     <option value="Selected topics in Computer Science (Seminar)"> Selected topics in Computer Science (Seminar)</option>
                    </select value="">
                  </div>
                 </div>
                <div class="col">
                  <label for="inputPassword" class="col-lg-12 col-form-label">Course Department</label>
                  <div class="col-sm-10">
                    <select  id="video_course_dep" name="video_course_dep" class="form-control" >
                      <option value="Computer Science"> Computer Science</option>
                      <option value="Information Science"> Information Science</option>
                      <option value="Information System"> Information System</option>
                    </select>
                  </div> </div>
              </div>
              <div class="row">
                <div class="col">
                  <label for="staticEmail" class="col-lg-12 col-form-label">Course Year</label>
                  <div class="col-sm-10">
                    <select id="video_course_year" name="video_course_year" class="form-control col-lg-4"  >
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                     
                    </select>
                  </div>
                 </div>
                 <br>
                
              </div>
              <hr>
              <div class="form-group row">
              

                <label for="video_link" class="col-sm-2 col-form-label">Video  Conference Link </label>
               <br>
                <div class="col-sm-10">
                  <input  id="video_link" name="video_link" class="form-control">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-lg-12">
                  <div class="box box-info">
                    <div class="box-header">
                     
                      <!-- tools box -->
                      
                      <!-- /. tools -->
                    </div>
                  
                  </div></div>
              </div>
              <div class="form-group row">
                <div class="col-sm-10">
                  <input type="submit" class="btn btn-primary" name="video_click"  id="video_click">
                </div>
              </div>
              </form>
          </div>
          <div class="tab-pane fade" id="nav-assignment" role="tabpanel" aria-labelledby="nav-assignment-tab">
           <form action="" method="POST" enctype="multipart/form-data">
              <div class="form-group row">
               
              </div>
              <div class="row">
                <div class="col">
                  <label for="staticEmail" class="col-lg-12 col-form-label">Course Name</label>
                  <div class="col-sm-10">
                    <select  id="assignment_course_name" name="assignment_course_name" class="form-control" >
                     <option value="Basic Mathematics for Natural Sciences"> Basic Mathematics for Natural Sciences                          </option>
                     <option value="General Psychology and Life skills"> General Psychology and Life skills</option>
                     <option value=" Introduction to International Relations and Global Issues"> Introduction to International Relations and Global Issues</option>
                     <option value=" Physical Fitness and Conditioning"> Physical Fitness and Conditioning</option>
                     <option value=" Geograhpy of Ethiopia and The Horn"> Geograhpy of Ethiopia and The Horn</option>
                     <option value="Communicative Enlglish Skill I"> Communicative Enlglish Skill I</option>
                     <option value="Logic and Critical Thinking"> Logic and Critical Thinking</option>
                     <option value="Antropology of Ethiopian Societies and Cultures"> Antropology of Ethiopian Societies and Cultures</option>
                     <option value="Enteperineurship & Business Development"> Enteperineurship & Business Development</option>
                     <option value=" Introduction to Emerging Technologies"> Introduction to Emerging Technologies</option>
                     <option value=" History of Ethiopia and the Horn"> History of Ethiopia and the Horn</option>
                     <option value=" Ethics and Moral Education"> Ethics and Moral Education</option>
                     <option value=" Introduction to Economics"> Introduction to Economics</option>
                     <option value="Communicative English II"> Communicative English II</option>
                     <option value="Fundamentals of Programming"> Fundamentals of Programming</option>
                     <option value="Linear Algebra"> Linear Algebra</option>
                     <option value="Fundamentals of Electricity and Electronic Devices"> Fundamentals of Electricity and Electronic Devices</option>
                     <option value="Fundamentals of Database"> Fundamentals of Database</option>
                     <option value=" Probability and Statistics"> Probability and Statistics</option>
                     <option value="Computer organization and architecture"> Computer organization and architecture</option>
                     <option value="Digital Electronics" > Digital Electronics</option>
                     <option value=" Applied Mathematics"> Applied Mathematics</option>
                     <option value="Object Oriented Programming"> Object Oriented Programming</option>
                     <option value="Discrete Mathematics and Combinatorics"> Discrete Mathematics and Combinatorics</option>
                     <option value=" Data Structures and Algorithms"> Data Structures and Algorithms</option>
                     <option value=" Microprocessor and Assembly Language Programming"> Microprocessor and Assembly Language Programming</option>
                     <option value=" Operating System"> Operating System</option>
                     <option value=" Data Communication & Computer Networking"> Data Communication & Computer Networking</option>
                     <option value="Advanced Database System"> Advanced Database System</option>
                     <option value=" Advanced Programming"> Advanced Programming</option>
                     <option value="Numerical Analysis"> Numerical Analysis</option>
                     <option value=" Wireless Communication and Mobile Computing"> Wireless Communication and Mobile Computing</option>
                     <option value="Analysis of Algorithms"> Analysis of Algorithms</option>
                     <option value="Internet Programming"> Internet Programming</option>
                     <option value=" Formal Language and Automata Theory"> Formal Language and Automata Theory</option>
                     <option value="Object Oriented Software Engineering"> Object Oriented Software Engineering</option>
                     <option value=" Computer Graphics"> Computer Graphics</option>
                     <option value="Compiler Design"> Compiler Design</option>
                     <option value="Technical Report Writing in Computer Science"> Technical Report Writing in Computer Science</option>
                     <option value="Logic in Computer Science"> Logic in Computer Science</option>
                     <option value="Complexity Theory"> Complexity Theory</option>
                     <option value=" Elective I (one course)"> Elective I (one course)</option>
                     <option value="Final Project I"> Final Project I</option>
                     <option value="Industrial Practice (Internship)"> Industrial Practice (Internship)</option>
                     <option value="Introduction to Distributed Systems"> Introduction to Distributed Systems</option>
                     <option value="Introduction to Artificial Intelligence"> Introduction to Artificial Intelligence</option>
                     <option value=" Computer Security"> Computer Security</option>
                     <option value=" Elective II (one course)"> Elective II (one course)</option>
                     <option value="Final Project II"> Final Project II</option>
                     <option value="Selected topics in Computer Science (Seminar)"> Selected topics in Computer Science (Seminar)</option>
                    </select value="">
                  </div>
                 </div>
                <div class="col">
                  <label for="inputPassword" class="col-lg-12 col-form-label">Course Department</label>
                  <div class="col-sm-10">
                    <select  id="assignment_course_dep" name="assignment_course_dep" class="form-control" >
                      <option value="Computer Science"> Computer Science</option>
                      <option value="Information Science"> Information Science</option>
                      <option value="Information System"> Information System</option>
                    </select>
                  </div> </div>
              </div>
              <div class="row">
                <div class="col">
                  <label for="staticEmail" class="col-lg-12 col-form-label">Course Year</label>
                  <div class="col-sm-10">
                    <select  id="assignment_course_year" name="assignment_course_year" class="form-control col-lg-4"  >
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                     
                    </select>
                  </div>
                 </div>
                 <br>
                
              </div>
              <hr>
              <div class="form-group row">
              
                <div class="container">
                 
                     <progress value="0"   id="assigment_uploader" style="-webkit-appearance: none; background-color: #5f46ee; width: 100%; height: 20px; border: 1px solid #ccc;color: #5f46ee;"  max="100">0%</progress>
                  
                  </div>
                <input type="file" class="btn btn-success col-lg-12" name="assigment_file" >
                <div class="col-sm-10">
                  <input type="submit" class="btn btn-primary" value="Submit" name="file_btn"  id="">
                </div>
              
               </div>
              
           </form>
              </div>
            
              
          
          <div class="tab-pane fade" id="nav-file" role="tabpanel" aria-labelledby="nav-file-tab">
            
             <form action="" method="POST" enctype="multipart/form-data">
              <div class="row">
                <div class="col">
                  <label for="staticEmail" class="col-lg-12 col-form-label">Course Name</label>
                  <div class="col-sm-10">
                    <select  id="file_course_name" name="file_course_name" class="form-control" >
                     <option value="Basic Mathematics for Natural Sciences"> Basic Mathematics for Natural Sciences                          </option>
                     <option value="General Psychology and Life skills"> General Psychology and Life skills</option>
                     <option value=" Introduction to International Relations and Global Issues"> Introduction to International Relations and Global Issues</option>
                     <option value=" Physical Fitness and Conditioning"> Physical Fitness and Conditioning</option>
                     <option value=" Geograhpy of Ethiopia and The Horn"> Geograhpy of Ethiopia and The Horn</option>
                     <option value="Communicative Enlglish Skill I"> Communicative Enlglish Skill I</option>
                     <option value="Logic and Critical Thinking"> Logic and Critical Thinking</option>
                     <option value="Antropology of Ethiopian Societies and Cultures"> Antropology of Ethiopian Societies and Cultures</option>
                     <option value="Enteperineurship & Business Development"> Enteperineurship & Business Development</option>
                     <option value=" Introduction to Emerging Technologies"> Introduction to Emerging Technologies</option>
                     <option value=" History of Ethiopia and the Horn"> History of Ethiopia and the Horn</option>
                     <option value=" Ethics and Moral Education"> Ethics and Moral Education</option>
                     <option value=" Introduction to Economics"> Introduction to Economics</option>
                     <option value="Communicative English II"> Communicative English II</option>
                     <option value="Fundamentals of Programming"> Fundamentals of Programming</option>
                     <option value="Linear Algebra"> Linear Algebra</option>
                     <option value="Fundamentals of Electricity and Electronic Devices"> Fundamentals of Electricity and Electronic Devices</option>
                     <option value="Fundamentals of Database"> Fundamentals of Database</option>
                     <option value=" Probability and Statistics"> Probability and Statistics</option>
                     <option value="Computer organization and architecture"> Computer organization and architecture</option>
                     <option value="Digital Electronics" > Digital Electronics</option>
                     <option value=" Applied Mathematics"> Applied Mathematics</option>
                     <option value="Object Oriented Programming"> Object Oriented Programming</option>
                     <option value="Discrete Mathematics and Combinatorics"> Discrete Mathematics and Combinatorics</option>
                     <option value=" Data Structures and Algorithms"> Data Structures and Algorithms</option>
                     <option value=" Microprocessor and Assembly Language Programming"> Microprocessor and Assembly Language Programming</option>
                     <option value=" Operating System"> Operating System</option>
                     <option value=" Data Communication & Computer Networking"> Data Communication & Computer Networking</option>
                     <option value="Advanced Database System"> Advanced Database System</option>
                     <option value=" Advanced Programming"> Advanced Programming</option>
                     <option value="Numerical Analysis"> Numerical Analysis</option>
                     <option value=" Wireless Communication and Mobile Computing"> Wireless Communication and Mobile Computing</option>
                     <option value="Analysis of Algorithms"> Analysis of Algorithms</option>
                     <option value="Internet Programming"> Internet Programming</option>
                     <option value=" Formal Language and Automata Theory"> Formal Language and Automata Theory</option>
                     <option value="Object Oriented Software Engineering"> Object Oriented Software Engineering</option>
                     <option value=" Computer Graphics"> Computer Graphics</option>
                     <option value="Compiler Design"> Compiler Design</option>
                     <option value="Technical Report Writing in Computer Science"> Technical Report Writing in Computer Science</option>
                     <option value="Logic in Computer Science"> Logic in Computer Science</option>
                     <option value="Complexity Theory"> Complexity Theory</option>
                     <option value=" Elective I (one course)"> Elective I (one course)</option>
                     <option value="Final Project I"> Final Project I</option>
                     <option value="Industrial Practice (Internship)"> Industrial Practice (Internship)</option>
                     <option value="Introduction to Distributed Systems"> Introduction to Distributed Systems</option>
                     <option value="Introduction to Artificial Intelligence"> Introduction to Artificial Intelligence</option>
                     <option value=" Computer Security"> Computer Security</option>
                     <option value=" Elective II (one course)"> Elective II (one course)</option>
                     <option value="Final Project II"> Final Project II</option>
                     <option value="Selected topics in Computer Science (Seminar)"> Selected topics in Computer Science (Seminar)</option>
                    </select value="">
                  </div>
                 </div>
                <div class="col">
                  <label for="inputPassword" class="col-lg-12 col-form-label">Course Department</label>
                  <div class="col-sm-10">
                    <select  id="file_course_dep" name="file_course_dep" class="form-control" >
                      <option value="Computer Science"> Computer Science</option>
                      <option value="Information Science"> Information Science</option>
                      <option value="Information System"> Information System</option>
                    </select>
                  </div> </div>
              </div>
              <div class="row">
                <div class="col">
                  <label for="staticEmail" class="col-lg-12 col-form-label">Course Year</label>
                  <div class="col-sm-10">
                    <select  id="file_course_year" name="file_course_year" class="form-control col-lg-4"  >
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                     
                    </select>
                  </div>
                 </div>
                 <br>
                
              </div>
              <hr>
              
              <div class="form-group row">
              
                <div class="container">
                 
                     <progress value="0"   id="file_uploader" style="-webkit-appearance: none; background-color: #5f46ee; width: 100%; height: 20px; border: 1px solid #ccc;color: #5f46ee;"  max="100">0%</progress>
                  
                  </div>
                <input type="file" class="btn btn-success col-lg-12" name="file_name" >
                <div class="col-sm-10">
                  <input type="submit" class="btn btn-primary" value="Submit" name="file_upload_btn"  id="">
                </div>
              
               </div>
             </form>
             
            
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button>
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
