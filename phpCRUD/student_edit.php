<?php
$id = $_GET['id'];
include("../database/connection.php");
$studentSql = "select * from students where id = '$id'";
$variable = $conn->query($studentSql);
$studentData = $variable->fetch_object();

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

    if(isset($name) && isset($email) && isset($address)){
       
        $sql ="update students set name='$name',
                                   email='$email',
                                   address='$address',
                                   phone='$phone'
                                   where id='$id'";
        $var = $conn->query($sql);
        if($var){
            $message = "Student Updated Successfully!";
            session_start();
            $_SESSION['message'] = $message;
            header('location:dashboard.php');
        }else{
            $message = "Failed To Update     student";
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
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <script>
        // $(document).ready(function(){
        //      $('#createForm').validate();
        // })
    </script>
    <title>Student Edit Form</title>
</head>
<body>
    <div class='container'>
        <h3>Student Edit Form</h3>
        <form action="" method="post" id="createForm" noValidate >
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" value="<?php echo $studentData->name ?? ""; ?>"  required>
            <br><br>
            <label for="email">Email:</label>
            <input type="email" name="email" value="<?php echo $studentData->email ?? ""; ?>" id="email" required>
            <small style="color:red;"><?php if(isset($emailError)) {
                 echo $emailError;
            } ?></small>
            <br><br>
            <label for="address">Address:</label>
            <input type="text" name="address" value="<?php echo $studentData->address ?? ""; ?>" id="address" required>
            <br><br>
            <label for="phone">Phone:</label>
            <input type="number" name="phone" id="phone" value="<?php echo $studentData->phone ?? ""; ?>" minlength="10">
            <br><br>
            <input type="submit" value="Update" name="submit">
        </form>
    </div>
</body>
</html>