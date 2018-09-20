<?php session_start(); ?>
<?php 
// remove all session variables
session_unset("userid"); 

// destroy the session 
session_destroy(); 
header("Location:index.php");

?>

