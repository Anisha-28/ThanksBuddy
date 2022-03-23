<!DOCTYPE html>
<html>
  
<head>
    <title>Insert Page page</title>
</head>
  
<body>
<?php

$conn = mysqli_connect("localhost","root","","db");
if (!$conn) {
  die("Connection failed: " 
  	. mysqli_connect_error());
}



if(mysqli_query($conn, $sql)){
            echo "Done"; 
  
          
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
          
        // Close connection
        mysqli_close($conn);
 

?>
</body>
  
</html>