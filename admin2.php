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
<link rel="stylesheet" type="text/css" href="css/admin2.css">
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
    <div class="dropdown">
      <button onclick="myFunction()" class="dropbtn"><i class="fa fa-fw fa-user" style="color: black;"></i></button>
      <div id="myDropdown" class="dropdown-content">
       <a href="A_logout.php" title="Logout">Logout </a>
      </div>
    </div>
    
   

    </div>



</nav>
<h2 style="color: orange; text-align: center; padding: 20px;">Admin Panel <br>
    <?php
if($_SESSION["admin_name"]) {
?>
Welcome <?php echo $_SESSION["admin_name"]; ?>
<?php
}else echo "<h1>Please login first </h1>";
?>
</h2>

<div class="admin-view">

    <div class="admin-nav">
        <div class="sidenav">
            <h2><a href="#">Admin Dashboard</a></h2>
            <a href="#about">Add Business</a>
            <a href="#services">Remove Business</a>
            <a href="#clients">Add Customer</a>
            <a href="#contact">Remove Customer</a>
            <a href="careers.php">Careers</a>
            <a href="team.php">Team</a>
            <a href="A_logout.php">Logout</a>
          </div>
    </div>
    <div class="admin-container">
        <div class="row">
            <div class="column" style="background-color:#B3D000;">
              <h2>Messages</h2>
              <p>40 new messages</p>
              <div class="top-right"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
            </div>
            <div class="column" style="background-color:#5BF435;">
              <h2>Earnings</h2>
              <p>Today's: $700</p>
              <p>Last 7 days: $2950</p>
              <div class="top-right"><i class="fa fa-usd" aria-hidden="true"></i></div>
            </div>
            <div class="column" style="background-color:#48C6EE;">
              <h2>Page Views</h2>
              <p>18 people visit today</p>
              <div class="top-right"><i class="fa fa-eye" aria-hidden="true"></i></div>
            </div>
            <div class="column" style="background-color:#EE4D4D;">
                <h2>Sales</h2>
                <p>Today's: $700</p>
              <p>Last 7 days: $2950</p>
              <div class="top-right"><i class="fa fa-usd" aria-hidden="true"></i></div>
              </div>
          </div>
          <div class="rate">

            <span class="heading">User Rating</span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <p>4.1 average based on 254 reviews.</p>
            <hr style="border:3px solid #f1f1f1">

        <div class="row">
            <div class="side">
                <div>5 star</div>
            </div>
            <div class="middle">
                <div class="bar-container">
                <div class="bar-5"></div>
                </div>
            </div>
            <div class="side right">
                <div>150</div>
            </div>
            <div class="side">
                <div>4 star</div>
            </div>
            <div class="middle">
                <div class="bar-container">
                <div class="bar-4"></div>
                </div>
            </div>
            <div class="side right">
                <div>63</div>
            </div>
            <div class="side">
                <div>3 star</div>
            </div>
            <div class="middle">
                <div class="bar-container">
                <div class="bar-3"></div>
                </div>
            </div>
            <div class="side right">
                <div>15</div>
            </div>
            <div class="side">
                <div>2 star</div>
            </div>
            <div class="middle">
                <div class="bar-container">
                <div class="bar-2"></div>
                </div>
            </div>
            <div class="side right">
                <div>6</div>
            </div>
            <div class="side">
                <div>1 star</div>
            </div>
            <div class="middle">
                <div class="bar-container">
                <div class="bar-1"></div>
                </div>
            </div>
            <div class="side right">
                <div>20</div>
            </div>
            </div>


    </div>

</div>
</div>
<!--
<h3 style="padding: 15px; color: orange;">Current Orders</h3>
<div style="overflow-x:auto;">
  <table>
    <tr>
      <th>Invoice No.</th>
      <th>User</th>
      <th>Resturent</th>
      <th>Status</th>
      <th>Delivery/Pick up</th>
      
    </tr>
    <tr>
      <td>Order #1234</td>
      <td>Smith</td>
      <th>La Porchetta</th>
      <td style="background-color: #5BF435;">Preparing</td>
      <td>Delivery</td>
      
    </tr>
    <tr>
      <td>Order #2345</td>
      <td>Will</td>
      <th>La Porchetta</th>
      <td style="background-color: #5BF435;">Prepared</td>
      <td>Picked up</td>
    </tr>
    <tr>
      <td>Order #3456</td>
      <td>Andrew</td>
      <th>Saforno Pizzeria</th>
      <td style="background-color: #5BF435;">Prepared</td>
      <td>On the Way</td>
     
    </tr>
    <tr>
      <td>Order #4567</td>
      <td>Peter</td>
      <th>Saforno Pizzeria</th>
      <td style="background-color: #f44336;">Order Canceled</td>
      <td>Canceled</td>
     
    </tr>
    <tr>
      <td>Order #5678</td>
      <td>Victoria</td>
      <th>Taksim Square</th>
      <td style="background-color: #5BF435;">Preparing</td>
      <td>Delivery</td>
     
    </tr>
    <tr>
      <td>Order #6789</td>
      <td>Yousha</td>
      <th>Safforno Pizzeria</th>
      <td style="background-color: #5BF435;">prepared</td>
      <td>Picked Up</td>
     
    </tr>
  </table>
</div>

<h3 style="padding: 15px; color: orange;">Previous Orders</h3>
<div style="overflow-x:auto;">
  <table>
    <tr>
      <th>Invoice No.</th>
      <th>User</th>
      <th>Order Date</th>
      <th>Amount</th>
      <th>Status</th>
      <th>Tracking Number</th>
      
    </tr>
    <tr>
      <td>Order #2345</td>
      <td>Smith</td>
      <td>17/05/2021</td>
      <td>$48</td>
      <td style="background-color: #5BF435;">Paid</td>
      <td>TMFB500346</td>
      
    </tr>
    <tr>
      <td>Order #2356</td>
      <td>Will</td>
      <td>1/405/2021</td>
      <td>$25</td>
      <td style="background-color: #f44336;">Unpaid</td>
      <td>TMFB537648</td>
    </tr>
    <tr>
      <td>Order #2347</td>
      <td>Anisha</td>
      <td>04/05/2021</td>
      <td>$20</td>
      <td style="background-color: #5BF435;">Paid</td>
      <td>TMFB278624</td>
     
    </tr>
    <tr>
      <td>Order #2348</td>
      <td>Alina</td>
      <td>05/05/2021</td>
      <td>$25</td>
      <td style="background-color: #5BF435;">Paid</td>
      <td>TMFB548788</td>
     
    </tr>
    <tr>
      <td>Order #2349</td>
      <td>Victoria</td>
      <td>03/05/2021</td>
      <td>$23</td>
      <td style="background-color: #5BF435;">Paid</td>
      <td>TMFB38896</td>
     
    </tr>
    <tr>
      <td>Order #2350</td>
      <td>Yousha</td>
      <td>04/04/2021</td>
      <td>$12</td>
      <td style="background-color: #f44336">Unpaid</td>
      <td>TMFB53656</td>
     
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
