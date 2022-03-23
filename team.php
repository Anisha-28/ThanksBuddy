<!DOCTYPE html>
<html>
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/styles2.css">
<link rel="stylesheet" type="text/css" href="css/topnav2.css">
<link rel="stylesheet" type="text/css" href="css/team.css">
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

<div class="about-section">
    <h1>Our Team</h1>
    <h2>A Project By Cyber Aliens!</h3>
    
  </div>
  
  
  <div class="row">
    <div class="column-a">
      <div class="card">
        <img src="images/boy.png" alt="Yousha" style="width:100%; height: 400px;">
        <div class="container">
          <h2>Yousha Zaidi</h2>
          <p class="title">UI/UX Designer</p>
          <p>I am the creative head of the project.</p>
          <p>K180477@student.kent.edu.au</p>
          <p><button class="button"> <a href="mailto:K180477@student.kent.edu.au"> Contact </a> </button></p>
        </div>
      </div>
    </div>
  
    <div class="column-a">
      <div class="card">
        <img src="images/girl.png" style="width:100%; height: 400px;">
        <div class="container">
          <h2>Anisha Nagpal</h2>
          <p class="title">Project Manager & Developer</p>
          <p>I managed and coded the project </p>
          <p>K190755@student.kent.edu.au</p>
          <p><button class="button"> <a href="mailto:K190755@student.kent.edu.au"> Contact </a></button></p>
        </div>
      </div>
    </div>

    <div class="column-a">
        <div class="card">
          <img src="images/girl.png" style="width:100%; height: 400px;">
          <div class="container">
            <h2>Victoria Oppong</h2>
            <p class="title">Database Designer</p>
            <p>I looked after the database, i designed it.</p>
            <p>K180723@student.kent.edu.au</p>
            <p><button class="button"> <a href="mailto:K180723@student.kent.edu.au"> Contact </a> </button></p>
          </div>
        </div>
      </div>
    
    <div class="column-a">
      <div class="card">
        <img src="images/girl.png" style="width:100%; height: 400px;">
        <div class="container">
          <h2>Alina Kasula</h2>
          <p class="title">System Architect</p>
          <p>I am the system architect,i made reports.</p>
          <p>K181305@student.kent.edu.au</p>
          <p><button class="button"><a href="mailto:K181305@student.kent.edu.au">Contact </a> </button></p>
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
