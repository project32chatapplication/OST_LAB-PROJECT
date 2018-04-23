<?php
 $status="0";
 $errors=array();
$db=mysqli_connect('localhost','root','','registration');
if(isset($_POST["send"])) {
 $ccode=$_POST["ccode"];
 $mobile=$_POST["mobile"];
  $date=$_POST["date"];
   $time=$_POST["time"];
    $sender=$_POST["sender"];
	 $msg=$_POST["msg"];
 if(empty($ccode)) {
  array_push($errors,"ccode required");
  }
 if(empty($date)) {
  array_push($errors,"date required");
  }
  if(empty($mobile)) {
  array_push($errors,"mobilenumber required");
  }
  if(empty($time)) {
  array_push($errors,"time required");
  }
  if(empty($msg)) {
  array_push($errors,"message required");
  }
  if(empty($sender)) {
  array_push($errors,"name required");
  }
  
  if( count($errors)==0){

 
   $sql="INSERT INTO schedule3(status,ccode,mobile,date,time,msg,sender) values('$status','$ccode','$mobile','$date','$time','$msg','$sender')";
    mysqli_query($db,$sql);
 

	  }
	  else{ include "error.php";
	  }
}
  ?>