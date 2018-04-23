<?php include('server.php'); ?>
<html>
 <head>
  <title> registration and login</title>
  <link rel="stylesheet" href="style1.css" >
 </head>
  <body>
     <div class="register" align="center" >
	 <form class="register-form" method="post"  action="server.php" >
	 <?php include('error.php'); ?>
	 <div  class="form-input">
	 <br><br>
	   <label style="color:white">REGISTRATION FORM</label><br>
	   <input type="text" placeholder="username" name="username"/>
	   </div>
	   <div  class="form-input">
	   
	   <input type="text" placeholder="password" name="password"/>
	   </div>
	   <div  class="form-input">
	   <input type="text" placeholder="emailid" name="emailid"/>
	   </div>
	   <button type=submit  name=register class="btn">register </button>
	   <p class="message" style="color:white"> Already registed? <a href="#">login</a></p>
	 </form>
	 <form class="login-page" method="post" action="server1.php">
	     <div  class="form-input">
		 <br><br>
		 <label style="color:white">LOGIN FORM</label><br>
	   <input type="text" placeholder="username" name="username1"/>
	   </div>
	   <div  class="form-input">
	   <input type="password" placeholder="password" name="password1"/>
	   </div>
	   	<button type=submit  name=login class="btn">login</button>
		<p class="message" style="color:white"> Not registered? <a href="#">register</a> </p>
	   </form>
	 </div>
	  <script src='https://code.jquery.com/jquery-3.3.1.min.js'></script>
   <script>
    $('.message a').click(function(){
	$('form').animate({height:"toggle", opacity:"toggle"},"slow");
	
	});
   
   </script> 
  </body>
</html>