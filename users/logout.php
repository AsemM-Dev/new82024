<?php
session_start();
session_unset(); // Remove all session variables
session_destroy(); // Destroy the session
header("Location: ../indexnew.php"); // Redirect to the homepage
exit;
?>