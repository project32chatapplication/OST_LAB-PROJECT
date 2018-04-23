<?php
 
 $errors=array();
$db=mysqli_connect('localhost','root','','registration');
if(isset($_POST["login"])) {
 $username=$_POST["username1"];
 $password=$_POST["password1"];
 
 if(empty($username)) {
  array_push($errors,"username required");
  }
 if(empty($password)) {
  array_push($errors,"password required");
  }
  

 if( count($errors)==0){
   
    $result= "select * from users where username='".$username."' and password='".$password."'";
	 
	 $row=mysqli_query($db,$result);
	 
	 
	  $p=mysqli_fetch_array($row);
	 if( $p['username']==$username && $p['password']==$password ){
		  include 'rf.php';
	  }
	  else{ 
	  echo "you r not registered";
	       }
  }
  else{
	  include 'error.php';
      }
}
  ?>