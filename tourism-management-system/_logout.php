<?php
session_start();
unset($_SESSION["loggedin"]);
unset($_SESSION["username"]);
unset($_SESSION["userId"]);
header("location: /tourism-management-system/index.php");
?>