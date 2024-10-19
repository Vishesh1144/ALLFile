<?php
session_start(); // Start the session


if (isset($_SESSION['user'])) {
    // Session is active
    echo "Welcome, " . $_SESSION['user'] . "! You are logged in.";
} else {
  
    echo "You are not logged in. Please sign in.";

    header("Location: login.php");
    exit();
}
?>
