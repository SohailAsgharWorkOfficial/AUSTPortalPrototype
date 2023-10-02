<?php
$mysqli = mysqli_connect('localhost', 'root', '', 'schoolmanagementsystem');

$ID = $_POST['teacherID'];
$password__ = $_POST['password'];

// Check for connection errors
if ($mysqli->connect_error) {
    die('Connection failed: ' . $mysqli->connect_error);
}

$query = "SELECT teacherID,firstname,lastname,t_DOB,t_gender,t_email,t_mobile,t_subject,password,Discription FROM teacher WHERE teacherID = ? AND password = ?";
$stmt = $mysqli->prepare($query);

$stmt->bind_param('ss', $ID,$password__);

// Execute the query
$stmt->execute();

// Bind the result to variables
$stmt->bind_result($teacherID,$firstname,$lastname,$t_DOB,$t_gender,$t_email,$t_mobile,$t_subject,$password,$Discription);

// Fetch the result
$stmt->fetch();

// Close the statement

$stmt->close();

// Verify the password
if ($password__ = $password)
{  
  echo '
  <!DOCTYPE html>
  <html lang="en">
  
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Teacher Login From</title>
      <link rel="stylesheet" href="CSS/teacher.css">
  </head>
  
  <body>
      <div class="box">
          <span class="borderline"></span>
          <form method="post">
              <h2>Teacher Registeration Form</h2>
              <div class="inputbox">
                  <input type="text" required="required" name="teacherID" value = "' .$teacherID . '" readonly>
                  <span>Teacher ID</span>
                  <i></i>
              </div>
  
  
              <div class="inputbox">
                  <input type="text" required="required" name="firstname" value = "' .$firstname . '" readonly>
                  <span>First Name</span>
                  <i></i>
              </div>
  
              <div class="inputbox">
                  <input type="text" required="required" name="lastname" value = "' .$lastname . '" readonly>
                  <span>Last Name (SurName) </span>
                  <i></i>
              </div>
  
  
              <div class="inputbox">
                  <input type="date" required="required" name="T_DOB" value = "' .$t_DOB . '" readonly>
                  <span>Date Of Birth</span>
                  <i></i>
              </div>
  
              <div class="inputbox">
                  <select class="select-box" name="t_gender">
                  <option value = ""> ' .$t_gender . '</option>
                      </select>
                  <i></i>
              </div>
  
  
              <div class="inputbox">
                  <input type="email" required="required" name="t_email" value = "' .$t_email . '" readonly>
                  <span>Email</span>
                  <i></i>
              </div>
  
              <div class="inputbox">
                  <input type="number" required="required" name="t_mobile" value = "' .$t_mobile . '" readonly>
                  <span>Mobile No</span>
                  <i></i>
              </div>
  
              <div class="inputbox">
                  <input type="text" required="required" name="t_subject" value = "' .$t_subject . '" readonly>
                  <span>Subject</span>
                  <i></i>
              </div>
              
              <div class="inputbox">
                  <!-- <span>Subject</span> -->
                  <textarea name="Discription" placeholder="Discription" " readonly >'.$Discription . '</textarea>
  
                  <i></i>
              </div>
              
              <input type="submit" value="Submit">
          </form>
      </div>
  </body>
  
  </html>
  '
  ;
} 
else {
  // Password is incorrect, display an error message or redirect to a login failure page
  header("Location: error2.html");
}

// Close the database connection
$mysqli->close();
?>
