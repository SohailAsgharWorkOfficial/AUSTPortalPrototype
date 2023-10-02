<?php
    $con = mysqli_connect('localhost', 'root', '', 'schoolmanagementsystem');
    //  For Teacher Profile
    $ID = $_POST['teacherID'];
    $fName = $_POST['firstname'];
    $LName = $_POST['lastname'];
    $t_DOB = $_POST['T_DOB'];
    $t_gender = $_POST['t_gender'];
    $t_email = $_POST['t_email'];
    $t_mobile = $_POST['t_mobile'];
    $t_subject = $_POST['t_subject'];
    $password = $_POST['password'];
    $area = $_POST['Discription'];

    $sql = "INSERT INTO teacher (teacherID,firstname,lastname,T_DOB,t_gender,t_email,t_mobile,t_subject,password,Discription) VALUES 
        ($ID,'$fName','$LName','$t_DOB','$t_gender','$t_email','$t_mobile','$t_subject','$password','$area')
        ";
    $teacher = $con->query($sql);

    // if($rs){
    //     echo "Contact Records Inserted";
    // }
    // else{
    //     echo "Contact Records Does't sucessfully inserted";
    // }


    header("Location: final.html");
    $con->close();


?>


