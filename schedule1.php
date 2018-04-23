
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
 <li><a href="rf.php">Home</a></li> 
  <li><a href="sms.php?n=<?php echo $_GET['n']; ?>" color="blue">Quick SMS</a></li> 
  <li><a href="schedulen?=<?php echo $_GET['n']; ?>">Schedule A Message</a></li>
   <li><a href="outbox.php?n=<?php echo $_GET['n']; ?>">Your Outbox List</a></li>
  <li><a href="skedule.php?n=<?php echo $_GET['n']; ?>">Your Schedules List</a></li>
  <li><a href="form1.php">logout</a></li>
  
</ul>

 <div class="register">
<form  method="post" action="dump.php">
  <select name="ccode">
  <option value=91>india+91</option> 
  <option value=1>US+1</option>
  </select><br><br>
  <input type=text name="mobile" placeholder="Mobile"> <br>
    <input type=text name="sender" placeholder="sender"><br>
	<label style="color:white">DATE</label><br>
    <input type=date name="date"> <br>
	<label style="color:white">TIME</time><br>
	<input type=time name="time"><br>
  <textarea rows=4 cols=38 name="msg" placeholder="message" ></textarea> <br>
   <button type="submit" name=send class="btn">send</button>
  </form>
  </div>
  </body>
  </html>
  