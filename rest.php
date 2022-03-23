<?php 

session_start();

$email = "";

  $errors = array();

 $conn = mysqli_connect("localhost","root","","db") or die("die");

//Register 


$b_name = mysqli_real_escape_string($conn, $_POST['b_name']);
$b_abn = mysqli_real_escape_string($conn, $_POST['b_abn']);
$address = mysqli_real_escape_string($conn, $_POST['address']);
$adr = mysqli_real_escape_string($conn, $_POST['adr']);
$city = mysqli_real_escape_string($conn, $_POST['city']);
$state = mysqli_real_escape_string($conn, $_POST['state']);
$ctry = mysqli_real_escape_string($conn, $_POST['ctry']);
$code = mysqli_real_escape_string($conn, $_POST['code']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$pswd = mysqli_real_escape_string($conn, $_POST['pswd']);

// Validation
   if(empty($b_name)){array_push($errors, "Business Name is required");}
   if(empty($b_abn)) {array_push($errors, "Business ABN is required");}
   if(empty($address)) {array_push($errors, "Apartment or House number is required");}
   if(empty($adr)) {array_push($errors, "Street Name is required");}
   if(empty($city)) {array_push($errors, "City is required");}
    if(empty($state)) {array_push($errors, "State is required");}
   if(empty($ctry)) {array_push($errors, "Country is required");}
   if(empty($code)) {array_push($errors, "Code is required");}
   if(empty($email)) {array_push($errors, "Email is required");}
   if(empty($pswd)) {array_push($errors, "Password is required");}


//check db for existing usere with some username

      $user_check_query = "SELECT * FROM restaurant WHERE email = '$email' LIMIT 1";


      $results = mysqli_query($conn, $user_check_query);
      $restaurant = mysqli_fetch_assoc($results);

      if($restaurant) {
        if($restaurant['email'] === $email) {array_push($errors, "Email already exists");}

      }

      // Register the user if no error

      if(count($errors) == 0){

        $pswd5 = md5($pswd); // encrypt the password
        $query = "INSERT INTO restaurant VALUES ('$b_name', '$b_abn', '$address', '$adr', '$city', '$code', '$state', '$ctry', '$email', '$pswd5')";

        //echo $query;

        mysqli_query($conn, $query);
        mysqli_commit($conn);
        mysqli_close($conn);
        echo '<script> alert("Your account has been created") </script>';
        $_SESSION['email'] = $email;
        $_SESSION['b_name'] = $b_name;
        $_SESSION['success'] = "You are now logged in";

        //header('location: p.php');
               }
      else{

    foreach($errors as $error) {
      //echo $error;
    }


      }
?>

