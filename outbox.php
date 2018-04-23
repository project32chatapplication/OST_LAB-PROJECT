
<html>
<head>


<link rel="stylesheet" href="style1.css" >
<style>
table{
	background-color:#ffffff;
}
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
<body>
<h1 align="center" style="font-family:verdana;color:white"><b><i>SMS REMINDER & SCHEDULER</i></b></h1>


<ul>
 <li><a href="rf.php">Home</a></li> 
  <li><a href="sms.php?n=<?php echo $username; ?>"color="blue">Quick SMS</a></li> 
  <li><a href="schedule1.php">Schedule A Message</a></li>
  <li><a href="#outbox">Your Outbox List</a></li>
  <li><a href="skedule.php?n=<?php echo $_GET['n']; ?>">Your Schedules List</a></li>
  <li><a href="form1.php">logout</a></li>
</ul>
<?php
 
$db=mysqli_connect('localhost','root','','registration');
$sql="select * from temp1 where sender='".$_GET['n']."'";
$result=mysqli_query($db,$sql);

echo "<table   border=1>
<tr >
<th>sender</th>
<th>status</th>
<th>ccode</th>
<th>mobile</th>
<th>Date</th>
<th>time</th>
<th>message</th>
</tr>";
while($row=mysqli_fetch_array($result))
 {
   echo "<tr>";
   echo  "<td>". $row[2] ."</td>";
   echo "<td>". $row[1] ."</td>";
   echo "<td>". $row[3] ."</td>";
   echo "<td>". $row[4] ."</td>";
   echo "<td>". $row[5] ."</td>";
   echo "<td>". $row[6] ."</td>";
   echo "<td>". $row[7] ."</td>";
   echo "</tr>";
 }
  
echo "</table>";
 ?>
</body>
  </html>

