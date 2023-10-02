<?php
    
        $con = mysqli_connect('localhost', 'root', '', 'schoolmanagementsystem');
            // for Student Profile
            $name = $_POST['username'];
            $fname = $_POST['fathername'];
            $RGno = $_POST['RGNo'];
            $subject = $_POST['subject'];
            $DOB = $_POST['dateofbirth'];
            $gender = $_POST['gender'];
            $email = $_POST['email'];
            $mobile = $_POST['mobile'];
            $password = $_POST['password'];
            
            
            $sql = "INSERT INTO student (username,fathername,RGNo,subject,dateofbirth,gender,email,mobile,password) VALUES 
            ('$name','$fname','$RGno','$subject','$DOB','$gender','$email','$mobile','$password')
            ";
            $student = $con->query($sql);
    
    
    
    // if($rs){
        //     echo "Contact Records Inserted";
        // }
        // else{
            //     echo "Contact Records Does't sucessfully inserted";
            // }
            
            
            header("Location: final.html");
            $con->close();
            
    ?>


