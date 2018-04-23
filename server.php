<?php
 $username="";
 $email="";
 $errors=array();
$db=mysqli_connect('localhost','root','','registration');
if(isset($_POST["register"])) {
 $username=$_POST["username"];
 $password=$_POST["password"];
 $emailid=$_POST["emailid"];
 if(empty($username)) {
  array_push($errors,"username re");
  }
 if(empty($password)) {
  array_push($errors,"password re");
  }
  if(empty($emailid)) {
  array_push($errors,"emailid re");
  }

 if( count($errors)==0){
   
    $sql="INSERT INTO users(username,emailid,password) values('$username','$emailid','$password')";
    mysqli_query($db,$sql);
  }
  else{
	  include 'error.php';
}}
  ?>