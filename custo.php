<?php 

session_start();

$email = "";

  $errors = array();

 $conn = mysqli_connect("localhost","root","","db") or die("die");

//Register 

$fname = mysqli_real_escape_string($conn, $_POST['fname']);
$lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
$address = mysqli_real_escape_string($conn, $_POST['address']);
$adr = mysqli_real_escape_string($conn, $_POST['adr']);
$city = mysqli_real_escape_string($conn, $_POST['city']);
$code = mysqli_real_escape_string($conn, $_POST['code']);
$state = mysqli_real_escape_string($conn, $_POST['state']);
$ctry = mysqli_real_escape_string($conn, $_POST['ctry']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$psw = mysqli_real_escape_string($conn, $_POST['psw']);
//$psw = md5($psw);

// Validation
   if(empty($fname)){array_push($errors, "First Name is required");}
   if(empty($lastname)) {array_push($errors, "Last Name is required");}
   if(empty($address)) {array_push($errors, "Apartment or House number is required");}
   if(empty($adr)) {array_push($errors, "Street Name is required");}
   if(empty($city)) {array_push($errors, "City is required");}
   if(empty($code)) {array_push($errors, "Code is required");}
   if(empty($state)) {array_push($errors, "State is required");}
   if(empty($ctry)) {array_push($errors, "Country is required");}
   if(empty($email)) {array_push($errors, "Email is required");}
   if(empty($psw)) {array_push($errors, "Password is required");}



//check db for existing usere with some username

      $user_check_query = "SELECT * FROM customer WHERE email = '$email' LIMIT 1";


      $results = mysqli_query($conn, $user_check_query);
      $customer = mysqli_fetch_assoc($results);

      if($customer) {
        if($customer['email'] === $email) {array_push($errors, "Email already exists");}

      }

      // Register the user if no error

      if(count($errors) == 0){

        $psw5 = md5($psw); // encrypt the password
        $query = "INSERT INTO customer VALUES ('$fname', '$address','$lastname', '$adr', '$city', '$code', '$state', '$ctry', '$email', '$psw5')";
        echo $query;

        mysqli_query($conn, $query);
        mysqli_commit($conn);
        mysqli_close($conn);
        echo "Your account has been created";
        $_SESSION['email'] = $email;
        $_SESSION['fname'] = $fname;
        $_SESSION['success'] = "You are now logged in";

     
        header('location: C_panel.php');
      }
      else{

		foreach($errors as $error) {
			//echo $error;
		}


      }
?>

