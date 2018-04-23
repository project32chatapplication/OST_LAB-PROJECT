<html>
<head>
<style>


 ul {
    list-style-type: none;
    margin-top: ;
    margin-right:;
    margin-left: ;
    padding: 0;
    overflow: hidden;
    background-color: white;
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
<body >
<link rel="stylesheet" href="style2.css" >

 <ul>
  <li><a href="#hme"color="blue">Home</a></li> 
  <li><a href="sms.php">Quick SMS</a></li> 
  
  <li><a href="schedule1.php?n=<?php echo $username; ?>">Schedule A Message</a></li>
  <li><a href="outbox.php?n=<?php echo $username; ?>">Your Outbox List</a></li>
  <li><a href="skedule.php?n=<?php echo $username; ?>">Your Schedules List</a></li>
  
  <li><a href="form1.php">logout</a></li>
</ul>


  <div  class="r" style="max-width:1500px" >

  

  <img class="mySlides" src="v.jpg" style="width:100%">
   
  <img class="mySlides" src="back.jpg" style="width:100%">
  <img class="mySlides" src="indx.jpg" style="width:100%">
</div>

<script>

var myIndex = 0;

carousel();
function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");

    for (i = 0; i < x.length; i++) {

       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    

    x[myIndex-1].style.display = "block";  

    setTimeout(carousel, 1200); // Change image every 2 seconds
}
</script>
</body>
</html>
