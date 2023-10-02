<!-- process.php -->
<?php
// Assuming you have the correct database credentials
// $hostname = 'localhost';
// $username = 'root';
// $password = '';
// $database = 'practice';

// Retrieve user ID and password from the form submission

// Connect to the database
$mysqli = mysqli_connect('localhost', 'root', '', 'schoolmanagementsystem');

$RGno = $_POST['RGN0'];
$password = $_POST['password'];

// Check for connection errors
if ($mysqli->connect_error) {
    die('Connection failed: ' . $mysqli->connect_error);
}

// Prepare the query to fetch hashed password for the given user
$query = "SELECT password_hash, data FROM users WHERE user_id = ?";
$stmt = $mysqli->prepare($query);
$stmt->bind_param('s', $user_id);

// Execute the query
$stmt->execute();

// Bind the result to variables
$stmt->bind_result($password_hash, $data);

// Fetch the result
$stmt->fetch();

// Close the statement

$stmt->close();
// Verify the password
if ($password = $password_hash)
{
  // Password is correct, display the data on the HTML form
  echo '<form>
  User ID: <input type="text" name="user_id" value="' . $user_id . '" readonly><br>
  Data: <input type="text" name="data" value="' . $data . '" readonly><br>
  </form>';
} 
else {
  // Password is incorrect, display an error message or redirect to a login failure page
  echo "Invalid user ID or password";
}

// Close the database connection
$mysqli->close();
?>
