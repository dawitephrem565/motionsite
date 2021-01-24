<?php 
 
 define('DB_HOST', 'localhost');
 define('DB_USER', 'root');
 define('DB_PASS', '');
 define('DB_NAME', 'mwu');
 
 $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
 
 if (mysqli_connect_errno()) {
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 die();
 }
  
 $stmt = $conn->prepare("SELECT Course_dep, Course_name, Course_title, Course_year,Date FROM Document ") or die(mysqli_errno());


 $stmt->execute();

 $stmt->bind_result($course_dep, $course_name, $course_title, $course_year,$Date);
 
 $products = array(); 
 

 while($stmt->fetch()){
 $temp = array();
 $temp['Course_dep'] = $course_dep;     
 $temp['Course_name'] = $course_name; 
 $temp['Coure_title'] = $course_title; 
 $temp['Course_year'] = $course_year; 
 $temp['Date'] = $Date;
 array_push($products, $temp);
 }
 
 echo json_encode($products);