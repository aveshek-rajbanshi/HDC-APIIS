<?php
session_start();

// Unset all session variables
$_SESSION = array();
session_destroy();

// Redirect to login page
header("Location: ../Frontend/form/login_form.php");
exit;
?>