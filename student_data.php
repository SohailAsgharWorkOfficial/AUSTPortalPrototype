<?php
$mysqli = mysqli_connect('localhost', 'root', '', 'schoolmanagementsystem');

$RGNo_ = $_POST['RGNo'];
$password__ = $_POST['password'];

// Check for connection errors
if ($mysqli->connect_error) {
    die('Connection failed: ' . $mysqli->connect_error);
}

$query = "SELECT username,fathername,RGNo,subject,dateofbirth,gender,email,mobile,password FROM student WHERE RGNo = ? AND password = ?";
$stmt = $mysqli->prepare($query);

$stmt->bind_param('ss', $RGNo_,$password__);

// Execute the query
$stmt->execute();

// Bind the result to variables
$stmt->bind_result($username,$fathername,$RGNo,$subject,$dateofbirth,$gender,$email,$mobile,$password);

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
    <title>Student Data</title>
    <link rel="stylesheet" href="CSS/student.css">
</head>

<body>
<div class="box">
    <span class="borderline"></span>
    <form method="post">
        <h2>Student Registeration Form</h2>
        <div class="inputbox">
            <input type="text" required="required" name="username" value = "' .$username . '" readonly>
            <span>Student Name</span>
            <i></i>
        </div>


        <div class="inputbox">
            <input type="text" required="required" name="fathername" value = "' .$fathername . '" readonly>
            <span>Father Name</span>
            <i></i>
        </div>


        <div class="inputbox">
            <input type="number" required="required" name="RGNo" value = "' .$RGNo . '" readonly >
            <span>Registeration No</span>
            <i></i>
        </div>

        <div class="inputbox">
            <select class="select-box" name="subject" value = "" readonly>
                <option value="">' .$subject . '</option>
            </select>
            <i></i>
        </div>


        <div class="inputbox">
            <input type="date" required="required" name="dateofbirth" value = "' .$dateofbirth . '" readonly>
            <span>Date Of Birth</span>
            <i></i>
        </div>

        <div class="inputbox">
            <select class="select-box" name="gender" readonly>
                    <option value = ""> ' .$gender . '</option> 
            </select>
            <i></i>
        </div>

        <div class="inputbox">
            <input type="email" required="required" name="email" value = "' .$email . '" readonly>
            <span>Email</span>
            <i></i>
        </div>

        <div class="inputbox">
            <input type="number" required="required" name="mobile" value = "' .$mobile . '" readonly>
            <span>Mobile No</span>
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
  
        header("Location: Error.html");
}

// Close the database connection
$mysqli->close();
