<?php
$mysqli = mysqli_connect('localhost', 'root', '', 'schoolmanagementsystem');

$ID = $_POST['adminId'];
$password__ = $_POST['password'];

// Check for connection errors
if ($mysqli->connect_error) {
    die('Connection failed: ' . $mysqli->connect_error);
}

$query = "SELECT adminId,password,adminName FROM adminBlock WHERE adminId = ? AND password = ?";
$stmt = $mysqli->prepare($query);

$stmt->bind_param('ss', $ID,$password__);

// // Execute the query
$stmt->execute();

// // Bind the result to variables
$stmt->bind_result($adminIdID,$password,$adminName);

// // Fetch the result
$stmt->fetch();

// // Close the statement

$stmt->close();

// Verify the password
if ($password__ = $password)
{  
  header("Location: http://localhost/phpmyadmin/index.php?route=/database/structure&db=schoolmanagementsystem");
  
} 
else {
  // Password is incorrect, display an error message or redirect to a login failure page
  header("Location: error3.html");
}

// Close the database connection
$mysqli->close();
?>
