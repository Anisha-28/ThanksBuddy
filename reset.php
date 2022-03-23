<?php

$conn = mysqli_connect("localhost","root","","db");
if (!$conn) {
  die("Connection failed: " 
    . mysqli_connect_error());
}

  //forgot
  $eail = $_POST['email'];

  //echo $eail
$sql = "INSERT INTO reset VALUES ('$eail')";

if(mysqli_query($conn, $sql)){
            echo "Done"; 
  
          
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
<link rel="stylesheet" type="text/css" href="css/styles.css">
<link rel="stylesheet" type="text/css" href="css/topnav.css">
<link rel="stylesheet" type="text/css" href="css/A_login.css">
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
      <a href="#"><i class="fa fa-fw fa-search"></i> </a>
      <a href="login.php"><i class="fa fa-fw fa-user"></i></a>
      
      <div class="cart"><a href="cart.php"><i class="fa fa-shopping-cart"></i><span>0</span></a></div>
    </div>


</nav>
    <div class="login-1">
        <h1 style="padding: 20px;">Thanks Man Food Bank!</h1>

        

        <div class="login-box">
            <h1 style="padding: 20px;">Reset Password</h1>
            <form action="reset.php" method="post" onSubmit="alert('Your request has been received, we'll email soon!');">

            <label for="email"></label> <br> 
            <input type="email" placeholder="Enter Email" name="email" required> <br> <br>


            <input type="submit" value="Reset Password"> <br> <br>


            </form>
            <div class="reset-psw">
                <a href="login.php">Back to login </a>
                </div><br>
                <div class="signup-links">
                  <a href="restaurant.php">  Be a partner </a>
                  <a href = "customer.php"> Create an Account </a> 
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

</body>
</html>