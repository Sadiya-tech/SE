<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'project');

// REGISTER USER
if (isset($_POST['user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $contact = mysqli_real_escape_string($db, $_POST['contact']);
  $msg = mysqli_real_escape_string($db, $_POST['msg']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($msg)) { array_push($errors, "Please provide your opinion"); }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM feedback WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	
    $query = "INSERT INTO feedback (username, email, contact,msg) 
  			  VALUES('$username', '$email', '$contact','$msg')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "Succesfully recorded";
  	header('location: Home.php');
  }
}


?>