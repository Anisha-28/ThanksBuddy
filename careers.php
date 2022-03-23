<!DOCTYPE html>
<html>
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/styles2.css">
<link rel="stylesheet" type="text/css" href="css/topnav2.css">
<link rel="stylesheet" type="text/css" href="css/careers.css">
<link href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Courgette&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Indie+Flower&display=swap" rel="stylesheet">
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
        <a href="login.php">Customer Login</a>
        <a href="Restlogin.php">Restaurant Login</a>
        <a href="Adminlogin.php">Admin Login</a>
      </div>
    </div>
    </div>

</nav>

  <h1 style="color: orange; text-align: center; padding: 20px; font-size: 45px;">Thanks Man Food Bank!</h1>
  
      
<div class="banner">
  <img src="images/career.jpg" width="100%" height="500">
  </div>

<div class="main">

<div class="timeline">
  <div class="container right">
    <div class="content">
      <h2>Web Developer</h2>
    <h3><i class="far fa-clock" style="color: red;"></i> Full time </h3><br>
    <h3><i class="fas fa-map-marker-alt" style="color: red;"></i> Location: Keilor, VIC 3036</h3><br>
      <p> Web Developer required for maintaining the website of the company, uploading the events and everything required in website.
    <br><br> Experience of two years as web developer or similar position.</p> 
    </div>
  </div>
  <div class="container right">
    <div class="content">
      <h2>Accountant</h2>
    <h3><i class="far fa-clock" style="color: red;"></i> Full time </h3><br>
    <h3><i class="fas fa-map-marker-alt" style="color: red;"></i>Altona, Victoria 3078</h3><br>
      <p> Accountant required for handling cash and making budgets for the donation we get, making proper accounting books to be revealed to the government on demand. 
    <br><br> Experience of one year of making accounts of government owned company.</p> 
    </div>
  </div>
  <div class="container right">
    <div class="content">
      <h2> Software Engineer</h2>
    <h3><i class="far fa-clock" style="color: red;"></i> Casual </h3><br>
    <h3><i class="fas fa-map-marker-alt" style="color: red;"></i> Head office, VIC 3000</h3><br>
      <p> Software engineer required as casual basis, for an application development 
    <br><br> Even the beginners can apply but terms and conditions apply.</p> 
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
  


