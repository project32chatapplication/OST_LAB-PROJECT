<?php
 date_default_timezone_set("Asia/Calcutta");
$db=mysqli_connect('localhost','root','','registration');
$sql="select * from schedule3";
$result=mysqli_query($db,$sql);
while($row=mysqli_fetch_array($result))
 {
   if($row[1]=="0" and ($row[5]<=date("H:i:s")))
   {
   $sql2=" UPDATE schedule3 SET status='1' where id=$row[0] ";
   mysqli_query($db,$sql2);
    $sql1="INSERT INTO temp1(status,sender,ccode,mobile,date,time,msg) values('1','$row[7]','$row[2]','$row[3]','$row[4]','$row[5]','$row[6]')";
    mysqli_query($db,$sql1);
	  
	// Authorisation details.
	$username ="abhilashabhivirat@gmail.com";
	$hash ="5e2e0e00d5a445c10d8c2e6bc5bc9da2128c22b6b1d56aacdb207d723d63245e";

	// Config variables. Consult http://api.textlocal.in/docs for more info.
	$test = false;

	// Data for text message. This is the text message data.
	$sender = "TXTLCL"; // This is who the message appears to be from.
	$numbers = $row[2].''.$row[3]; // A single number or a comma-seperated list of numbers
	$message = $row[6];
	// 612 chars or less
	// A single number or a comma-seperated list of numbers
	$message = urlencode($message);
	$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
	$ch = curl_init('http://api.textlocal.in/send/?');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch); // This is the result from the API
	print_r($result);
	
	curl_close($ch);
   }
 }
  





?>