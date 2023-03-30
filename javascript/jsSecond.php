<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Javascript Form</title>
    <script>
        function checkLogin(){
             var uname = document.loginForm.username.value;
             if(uname == ""){
                alert("Username field is required!");
             }
             var pass = document.loginForm.password.value;
             if(pass == ""){
                alert("Password field is required!")
             }
        }
    </script> 
</head>
<body>
    <form action="" method="post" name="loginForm" onsubmit=checkLogin()>
        <label for="username">Username:</label>
        <input type="text" name="username" id="username">
        <br><br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password">
        <br><br>
        <input type="submit" value="Submit" name="submit">
    </form>
</body>
</html>