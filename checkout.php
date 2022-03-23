<?php

$conn = mysqli_connect("localhost","root","","db");
if (!$conn) {
  die("Connection failed: " 
    . mysqli_connect_error());
}

  $f_name = $_POST['f_name'];
  $email = $_POST['email'];
  $address = $_POST['address'];
  $adr = $_POST['adr'];
  $city = $_POST['city'];
  $code = $_POST['code'];
  $state = $_POST['state'];
  $ctry = $_POST['ctry']; 
  $name = $_POST['name'];
  $no = $_POST['no'];
  $date = $_POST['date'];
  $cvv = md5($_POST['cvv']);


$cvv1 = md5($cvv);
$sql = "INSERT INTO checkout VALUES ('$f_name', '$email', '$address', '$adr', '$city', '$code', '$state', '$ctry', '$name', '$no', '$date', '$cvv1')";


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
<link rel="stylesheet" type="text/css" href="css/styles2.css">
<link rel="stylesheet" type="text/css" href="css/topnav2.css">
<link rel="stylesheet" type="text/css" href="css/cust.css">
<link rel="stylesheet" type="text/css" href="css/cu.css">
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
<br>

  <center>
  <h1 style="color: orange;">Thanks Man Food Bank!</h1>
</center>
<br>
<br>
<br>

  <center>
  <h1 style="color: orange;">Checkout</h1>
</center>
<br>
<br>
<br>

<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="checkout.php" method ="post" onSubmit="alert('Your order is getting ready');">
        
        <div class="row">
          <div class="col-50">
          
            <label for="f_name"> Full Name </label>
            <input type="text" id="f_name" name="f_name"required>
            <label for="address"> House, Apartment Number:</label>
            <input type="number" id="b_address" name="address"required>
            
            <label for="city"> City </label>
            <input type="text" id="city" name="city"required>
            <label for="state"> State </label>
            <input type="text" id="state" name="state"required>

            <div class="row">
              
              
            </div>
          </div>

          <div class="col-50">
           
            <label for="email">Email</label>
            <input type="email" id="email" name="email"required>
            <label for="b_adr">Street, Building Name:</label>
            <input type="text" id="b_adr" name="adr"required>
            <label for="code">Postal Code</label>
            <input type="number" id="code" name="code"required>
            <label for="ctry">Country</label>
            <input type="text" id="ctry" name="ctry" required>
          <h1 style="color:orange;"> Payment </h1>
        </div>
      
      
     
        <label for="email">Name on Card</label>
      <input type="text" name="name" required>

      <label for="psw">Credit Card Number</label>
      <input type="number" name="no" required>
        
        <div class="col-50">
        <label for="email">Exp. Date</label>
            <input type="number" id="date" name="date" required>
         </div>
          <div class="col-50">
         <label for="cvv">CVV</label>
            <input type="password" id="cvv" name="cvv" required>
        </div>
        
        </div>
        <input type="submit" value="Continue to Checkout" class="btn" formaction="C_panel.php">
        </a>
      </form>
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
              <a href="#">Be a Partner</a><br>
              <a href="#">The Food Problem</a><br>
              <a href="careers.php">Careers</a>

            </div>
            <div class="column3">
              <a href="#">Produce boxes</a><br>
              <a href="team.php">Team</a><br>
             

            </div>
          </div>

      </div>
      <div class="column2">
        <h3> Got any Question?</h3>
        <br>

        <p>Emial us:</p>
        <a href="#">hello@thanksman.com.au</a>
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