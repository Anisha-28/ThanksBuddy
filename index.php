<!DOCTYPE html>
<html>
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/styles2.css">
<link rel="stylesheet" type="text/css" href="css/topnav2.css">
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

<div class="intro">
  <br>
  <h1 style="color: orange;">Thanks Man Food Bank!</h1>
  <p style="color: #ffa500;"> The eco-friendly subscription service Delivering <br>
      boxes of delicious & localy-source <br>
      produce, protiens and dairy products right to your door!  </p>

      <br>

      <a href="box.php"><button class="btn btn1">Our Boxes Range</button></a>
</div>

<div class="banner">
  <img src="images/banner.jpg" width="100%" height="500">
  </div>

  <div class="food-waste">
    <h1 style="color: orange; font-size: 70px;"> Food Waste In Australia</h1>

    <div class="row">
      <div class="column">
        <img src="images/5.gif" width="40%" height="65%">
        
        <h3>1 of every 5 meals is thrown out</h3>
        <p>Yet, 1 in every 6 Australians <br>
          experiences food insecurity. So we’re <br>
          making this food more accessible and <br>
          affordable to more people.</p>

      </div>
      <div class="column">
        <img src="images/6.gif" width="40%" height="65%">
        
        <h3>"Business as usual"</h3>
        <p>On average, food businesses bin over<br>
          100 kgs of food every week1, over half <br>
          of which could have been prevented </p>

      </div>
      <div class="column">
        <img src="images/7.gif" width="40%" height="65%">
        
        <h3>Getting 70,000 cars off the road</h3>
        <p>Food waste from Australian <br>
          restaurants and cafes produces the <br>
          equivalent of almost half a million <br>
          tonnes of CO2 every year.</p>

      </div>

      <img class="banner2" src="images/banner2.png" width="100%" height="220">
    </div>
       
  </div>


  <div class="food-waste1">
    <br>
    <div class="heading">
    <p> Food Waste In a Nutshell </p>
    </div>
    <br>
    <div class="row1">
      <div class="column1">
        <br>
        <img src="images/8.png" width="60%" height="80%">
      </div>
      <div class="column1">

        <p style="font-size: 25px; color: white;">When we waste food, we're also <br>
          wasting all the resources that <br>
          went into getting it on our plate. Land, <br> 
         water, energy, labour and <br>
         more are what is needed to provide for our <br>
          communities5. In addition, <br>
         the food production process comes with <br>
          a heavy carbon footprint.</p>
      </div>
    </div>
  </div>
 


<div class="donation">
  <br>
  <h1 style="color: orange;"> Donate to make a differance! </h1>
  <p style="color: orange;">Giving is not just about make a donation <br>
    it’s about <br>
    “Making a difference”. </p>

    <br>

    <a href="donation.php"><button class="btn btn1">Click to Donate</button></a>

    
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
