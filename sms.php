
<?php
  if(isset($_POST['ccode'])&& isset($_POST['mobile'])){

	// Authorisation details.
	$username ="abhilashabhivirat@gmail.com";
	$hash = "5e2e0e00d5a445c10d8c2e6bc5bc9da2128c22b6b1d56aacdb207d723d63245e";

	// Config variables. Consult http://api.textlocal.in/docs for more info.
	$test = "0";

	// Data for text message. This is the text message data.
	$sender = "TXTLCL"; // This is who the message appears to be from.
	$numbers = $_POST['ccode'].''.$_POST['mobile']; // A single number or a comma-seperated list of numbers
	$message = $_POST['msg'];
	// 612 chars or less
	// A single number or a comma-seperated list of numbers
	$message = urlencode($message);
	$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
	$ch = curl_init('http://api.textlocal.in/send/?');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch); // This is the result from the API
	echo $result;
	curl_close($ch);
  }
?>  
	
<html>
<head>


<link rel="stylesheet" href="style1.css" >
<style>
ul {
    list-style-type: none;
    margin-top: 50px;
    margin-bottom: 100px;
    margin-right: 150px;
    margin-left: 80px;
    padding: 0;
    overflow: hidden;
    background-color: #ffffff;
}

li {
    float: left;
}

li a {
    display: block;
    color: black;
    text-align: center;
    padding: 16px;
    text-decoration: none;
}

li a:hover {
    background-color:black;
}
</style>
</head>

<h1 align="center" style="font-family:verdana;color:white"><b><i>SMS REMINDER & SCHEDULER</i></b></h1>


<ul>
 <li><a href="rf.php"color="blue">Home</a></li> 
  <li><a href="#quicksms"color="blue">Quick SMS</a></li> 
  
  <li><a href="schedule1.php?n=<?php echo $username; ?>">Schedule A Message</a></li>
  <li><a href="outbox.php?n=<?php echo $username; ?>">Your Outbox List</a></li>
  <li><a href="skedule.php?n=<?php echo $username; ?>">Your Schedules List</a></li>
  
  <li><a href="form1.php">logout</a></li>
</ul>

 <div class="register">
<form action="" method="post">
 
  <select name="ccode">
  <option value=91>india+91</option>
  <option value=1>US+1</option>
  </select><br><br>
  
  <input type=text name="mobile" placeholder="Mobile"> <br><br>
  <textarea rows=3 cols=38 name="msg" placeholder="message"></textarea> <br><br>
   <button type="submit" name=send class="btn">send</button>
  </form>
  </div>
  </body>
  </html>
  