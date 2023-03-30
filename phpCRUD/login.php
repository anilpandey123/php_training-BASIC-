<?php

if(isset($_COOKIE['username'])){
  header('location:dashboard.php');
}
   if(isset($_POST['submit'])){
      if(isset($_POST['username']) && !empty($_POST['username'])){
        $username = $_POST['username'];
      }else{
         $errorUsername = "Enter Username!";
      }

      if(isset($_POST['password']) && !empty($_POST['password'])){
        $password = $_POST['password'];
      }else{
        $errorPassword = "Enter Password!";
      }


      if(isset($username) && isset($password)){
         include('../database/connection.php');
         $sql = "select * from `users` where username='$username' and password='$password'";
         $var = $conn->query($sql);
         if($var->num_rows == 1){
          setcookie('username', $username, time()+24*60*60);
          header('location:dashboard.php');
         }else{
          $error = "Invalid Credentials!";
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
    <title>Login Form</title>
</head>
<body>
    <h3>Login Form</h3>
    <form action="" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username">
        <small style="color:red">
           <?php if(isset($errorUsername)){ 
                echo $errorUsername;
            } 
            ?>   
        </small>
        <small style="color:red">
           <?php if(isset($error)){ 
                echo $error;
            } 
            ?>   
        </small>
        <br><br>
        <label for="password">Password: </label>
        <input type="password" name="password" id="password">
        <small style="color:red">
           <?php if(isset($errorPassword)){ 
                echo $errorPassword;
            } 
            ?>   
        </small>
        <br><br>
        <input type="submit" value="submit" name="submit">
    </form>
</body>
</html>