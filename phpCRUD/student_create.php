<?php

if(isset($_POST['submit'])){
    if(isset($_POST['email']) && !empty($_POST['email'])){
        if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
            $email = $_POST['email'];
        }else{
            $emailError = "Invalid Email Format!";
        }
    }else{
        $emailError = "Email Field is required!";
    }

    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    date_default_timezone_set("Asia/Kathmandu");
    $createdDate = date('Y-m-d H:i:s');  

    if(isset($name) && isset($email) && isset($address) && isset($phone)){
        include("../database/connection.php");
        $sql ="insert into students(name, email, address, phone,created_date)
               values('$name', '$email', '$address', '$phone', '$createdDate')";
        $var = $conn->query($sql);
        if($var){
            $message = "Student Created Successfully!";
            session_start();
            $_SESSION['message'] = $message;
            header('location:dashboard.php');
        }else{
            $message = "Failed To create student";
        }
        


    }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        label.error{
            color:red;
        }
    </style>
    <script src="../jquery/jquery.min.js"></script>
    <script src="../jquery/jquery.validate.min.js"></script>
    <script>
        $(document).ready(function(){
             $('#createForm').validate();
        })
    </script>
    <title>Student Create Form</title>
</head>
<body>
    <div>
        <h3>Student Create Form</h3>
        <form action="" method="post" id="createForm" noValidate >
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" required>
            <br><br>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>
            <small style="color:red;"><?php if(isset($emailError)) {
                 echo $emailError;
            } ?></small>
            <br><br>
            <label for="address">Address:</label>
            <input type="text" name="address" id="address" required>
            <br><br>
            <label for="phone">Phone:</label>
            <input type="number" name="phone" id="phone" minlength="10">
            <br><br>
            <input type="submit" value="submit" name="submit">
        </form>
    </div>
</body>
</html>