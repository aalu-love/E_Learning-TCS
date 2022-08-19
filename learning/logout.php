<?php
session_start();
unset($_SESSION["id"]);
unset($_SESSION["name"]);
// remove all session variables
session_unset();

// destroy the session
session_destroy();
header("Location:home.php");
?>