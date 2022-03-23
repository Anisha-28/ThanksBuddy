<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/styles2.css">
<link rel="stylesheet" type="text/css" href="css/topnav2.css">
<link rel="stylesheet" type="text/css" href="css/admin1.css">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">

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
    <a href="#" style="padding-top: 27px;">Welcome <?php echo $_SESSION["fname"]; ?> </a>
    <div class="dropdown">
      <button onclick="myFunction()" class="dropbtn"><i class="fa fa-fw fa-user" style="color: black;"></i></button>
      <div id="myDropdown" class="dropdown-content">
        <a href="C_logout.php" title="Logout">Logout </a>
      </div>
    </div>
    
   

    </div>


</nav>

<h1 style="text-align: center; color: orange; padding:30px;">Customer Panel</h1>

<center> <a href="shop1.php"><button class="btn btn1">Order Now</button></a> </center>
<!--

<h3 style="padding: 15px; color: orange;">Current Orders</h3>
<div style="overflow-x:auto;">
  <table>
    <tr>
      <th>Invoice No.</th>
      <th>Resturent</th>
      <th>Status</th>
      <th>Delivery/Pick up</th>
      
    </tr>
    <tr>
      <td>Order #1234</td>
      <td>La Porchetta</td>
      <td style="background-color: #5BF435;">Preparing</td>
      <td>Delivery</td>
      
    </tr>
    
    <tr>
      <td>Order #4567</td>
      <td>Saforno Pizzeria</td>
      <td style="background-color: #f44336;">Order Canceled</td>
      <td>Canceled</td>
     
    </tr>
  </table>



<h3 style="padding: 15px; color: orange;">Previous Orders</h3>
<div style="overflow-x:auto;">
  <table>
    <tr>
      <th>Item</th>
      <th>Restaurent</th>
      <th>Price</th>
      <th>Category</th>
      
    </tr>
    <tr>
      <td>Pack of 4 Donuts</td>
      <td>La Porchetta</td>
      <td style="background-color: #5BF435;">Preparing</td>
      <td>Delivery</td>
      
    </tr>
    <tr>
      <td>Order #2345</td>
      <td>La Porchetta</td>
      <td style="background-color: #5BF435;">Prepared</td>
      <td>Picked up</td>
    </tr>
    <tr>
      <td>Order #3456</td>
      <td>Saforno Pizzeria</td>
      <td style="background-color: #5BF435;">Prepared</td>
      <td>On the Way</td>
     
    </tr>
    <tr>
      <td>Order #4567</td>
      <td>Saforno Pizzeria</td>
      <td style="background-color: #f44336;">Order Canceled</td>
      <td>Canceled</td>
     
    </tr>
    <tr>
      <td>Order #5678</td>
      <td>Taksim Square</td>
      <td style="background-color: #5BF435;">Preparing</td>
      <td>Delivery</td>
     
    </tr>
    <tr>
      <td>Order #6789</td>
      <td>Safforno Pizzeria</td>
      <td style="background-color: #5BF435;">prepared</td>
      <td>Picked Up</td>
     
    </tr>
  </table>
</div>
-->

<br>
<br>


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

        <p>Email us:</p>
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