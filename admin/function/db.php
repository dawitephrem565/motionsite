<?php
 
 
 
 class DBH{
 private $servername; 
 private $username;
 private $password;


function connect(){
  $this->servername ="localhost";
  $this->username = "root";
  $this->password = "";
  try {
    $conn = new PDO("mysql:host=".$this->servername.";dbname=motion", $this->username, $this->password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   return $conn;
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }


}
 }


?>