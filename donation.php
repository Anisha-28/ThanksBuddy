
<?php

$conn = mysqli_connect("localhost","root","","db");
if (!$conn) {
  die("Connection failed: " 
    . mysqli_connect_error());
}

  $title = $_POST['title'];
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $country = $_POST['country'];
  $adrress = $_POST['adrress'];
  $other_amount = $_POST['other_amount'];
  $subject = $_POST['subject'];


$sql = "INSERT INTO donation VALUES ('$title', '$fname', '$lname', '$email', '$country', '$address', '$other_amount', '$subject')";




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
<link rel="stylesheet" type="text/css" href="css/donation.css">
<link rel="stylesheet" type="text/css" href="css/topnav2.css">
<link rel="stylesheet" type="text/css" href="css/cu.css">
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

<h1 style="color: orange; padding: 20px; text-align: center; font-size: 45px;">Thanks Man Food Bank!</h1>
<h1 style="color: orange; padding: 25px; text-align: center; font-size: 40px;">Donation Form</h1>


<center>
  <form name="marquee1">
  <input name="text" size=40 style="width:50%; border: none; height: 45px; background-color:orange; color:white; font-size:20px;" 
  Value="Make a Difference,  Donate Now!! Make a Difference, Donate Now!! Make a Difference, Donate Now!! Make a Difference, Donate Now!! Make a Difference,  Donate Now!! Make a Difference,  Donate Now!! ">
  
</form>
</center>

  <script >

  ScrollSpeed = 120
  ScrollChars = 1
  function ScrollMarquee() {
    window.setTimeout('ScrollMarquee()',ScrollSpeed);


  var msg = document.marquee1.text.value;
  document.marquee1.text.value = 
  msg.substring(ScrollChars) +
  msg.substring(0,ScrollChars);
}
   ScrollMarquee()
</script>


   

 </form>

<div class="main">
 <div class="container">
  <form action="donation.php" method="post" onSubmit="alert('Thanks for your donation, we appreciate your efforts');">


        <h2> <center> Contact Information </center> </h2>
        <label for="title">Title</label>
         <input type="text" id="title" name="title">

        </select>  
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="fname" required>

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lname" required>

    <label for="email">Email</label>
    <input type="email" id="email" name="email" required>

      <h2> <center> Billing Address </center> </h2>

       <label for="country">Country</label>
 <input type="text" id="country" name="country" required>

    <label for="address">Address</label>
         <textarea id="subject" name="address" style='height: 50px'> </textarea>
        </select>  

    <div>
        
     

        <div>
          <label for="otheramount"><br>Amount</label><br>
          <input type="number" id="amount1" name="other_amount" required>        
        </div>


    </div>
     
         <label for="subject"><br>Donated Towards : </label>
         <textarea id="subject" name="subject" placeholder="Write something.." style='height: 50px'> </textarea>
        </select>

         
<p>
  <input type="submit" value="Submit">
  <input type="reset" value="Reset">
</p>
</form>

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
  