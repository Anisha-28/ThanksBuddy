<?php
session_start();
unset($_SESSION["id"]);
unset($_SESSION["admin_name"]);

header("Location:Adminlogin.php");
?>