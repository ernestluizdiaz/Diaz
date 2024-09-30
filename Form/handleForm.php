<?php 

session_start();

// Check if submitBtn exists
if (isset($_POST['loginBtn'])) {
  // Check if the user is already logged in
  if (isset($_SESSION['firstName'])) {
      // User is already logged in
      $_SESSION['message'] = $_SESSION['firstName'] . " is already logged in. Wait for them to logout first."; // Corrected message
      header('Location: index.php');
      exit(); // Always good to use exit after header redirect
  }

	// Get the first name from index.php
	$firstName = $_POST['firstName'];

	// Get the password from the input field
	$password = md5($_POST['password']);

	// Set the session variables
	$_SESSION['firstName'] = $firstName;
	$_SESSION['password'] = $password;

	// Go back to index.php
	header('Location: index.php');
}

if(isset($_POST['LogoutBtn'])) {
  session_unset();
  session_destroy();
  header('Location: index.php');
}

?>