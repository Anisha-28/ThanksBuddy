<?php
session_start();
unset($_SESSION["b_name"]);
unset($_SESSION["b_abn"]);
unset($_SESSION["address"]);
unset($_SESSION["adr"]);
unset($_SESSION["city"]);
unset($_SESSION["state"]);
unset($_SESSION["ctry"]);
unset($_SESSION["code"]);

header("Location:Restlogin.php");
?>