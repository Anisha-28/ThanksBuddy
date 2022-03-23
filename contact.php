<?php

$conn = mysqli_connect("localhost","root","","db");
if (!$conn) {
  die("Connection failed: " 
    . mysqli_connect_error());
}
//contact
  $fname = $_POST['fname'];
  $emil = $_POST['email'];
  $message = $_POST['message'];

  //echo $fname;
  //echo $emil;
  //echo $message;


$sql = "INSERT INTO contact VALUES ('$fname', '$emil', '$message')";


if(mysqli_query($conn, $sql)){
            //echo "Done"; 
  
          
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
          
        // Close connection
        mysqli_close($conn);
 

?>

<!DOCTYPE html>
<html>
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/styles1.css">
<link rel="stylesheet" type="text/css" href="css/topnav1.css">
<link rel="stylesheet" type="text/css" href="css/topnav2.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<title>Thanks Man!</title>

</head>

<body>
 

  <nav>
    <div class="logo">
      <a href="index.php"><img src="images/logo.png" width="100" height="80"></a>
    </div>
    
    <div class="topnav" id="myTopnav">
      <a href="index.php">Home</a>
      <a href="contact.php">Contact</a>
      <a href="about.php">Our Impact</a>
      <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      Menu
      </a>
    </div>
     <div class="login">
    <div class="dropdown">
      <button onclick="myFunction()" class="dropbtn"><i class="fa fa-fw fa-user" style="color: black;"></i></button>
      <div id="myDropdown" class="dropdown-content">
        <a href="login.php">Customer Login</a>
        <a href="Restlogin.php">Restaurant Login</a>
        <a href="Adminlogin.php">Admin Login</a>
      </div>
    </div>
    </div>



</nav>


<br>


  <center>
  <h1 style="color: orange;">Thanks Man Food Bank!</h1>
</center>

<div class="contra">

<div class = "co"> 

<div class ="con">
  <br>
  <h1 style="color: orange;"> Contact Us </h1> 

  <br>

  <p> Our mailing address <br> 350 Queen Street <br> Melbourne,VIC <br> Phone : 0400 000 000 </p>

</div>


<div class = "cont">
  <br>
  <p> Great vision without great people is irrelevant <br> Let's work together </p>

  <br>


  <div class="container">

  <form action="contact.php" method="post" onSubmit="alert('We will get back to you soon!');">

    <label for="fname">Full Name</label>
    <input type="text" id="fname" name="fname" placeholder="Your name.." required>

    <label for="email">Email</label>
    <input type="text"  name="email" pattern=".+@.+.com" placeholder="Enter a Valid Email" required>

    <label for="message">Enter your Message! </label>
    <textarea id="message" name="message" placeholder="Write something.." style="height:200px" required></textarea>

    <input type="submit" value="Submit">




  </form>
</div>

</div>
</div>
</div>

<div class="social">
  <br>
  <h1 style="color:white;">Have a Lill' Stalk</h1>
  <br>

  <a href="#" class="fa fa-facebook"></a>
<a href="#" class="fa fa-twitter"></a>
<a href="#" class="fa fa-google"></a>
<a href="#" class="fa fa-linkedin"></a>
<a href="#" class="fa fa-youtube"></a>
<a href="#" class="fa fa-instagram"></a>
<a href="#" class="fa fa-pinterest"></a>

</div>

<footer>
  <div class="footer">
    

    <div class="row2">
      <div class="column2">
        <h3> Quick links</h3>
          <div class="row3">
            <div class="column3">
              <a href="restaurant.php">Be a Partner</a><br>
              <a href="about.php">The Food Problem</a><br>
              <a href="careers.php">Careers</a>

            </div>
            <div class="column3">
              <a href="box.php">Produce boxes</a><br>
              <a href="team.php">Team</a><br>
            

            </div>
          </div>

      </div>
      <div class="column2">
        <h3> Got any Question?</h3>
        <br>

        <p>Emial us:</p>
        <a href="contact.php">hello@thanksman.com.au</a>
      </div>
    </div>


  </div>
</footer>




  <script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
 <script>
  /* When the user clicks on the button, 
  toggle between hiding and showing the dropdown content */
  function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
  }
  
  // Close the dropdown if the user clicks outside of it
  window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {
      var dropdowns = document.getElementsByClassName("dropdown-content");
      var i;
      for (i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
        if (openDropdown.classList.contains('show')) {
          openDropdown.classList.remove('show');
        }
      }
    }
  }
  </script>


</body>
</html>
