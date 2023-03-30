<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax</title>
    <script src="../jquery/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#username').keyup(function(){
                var uname = $('#username').val();
        
                 if(uname.length < 6){
                     $("#errorUsername").text('Minimum 6 character required');
                }else{
                     $.ajax({
                         url:"check_username.php",
                         data:{"username":uname},
                         method:"post",
                         dataType:"text",
                         success:function(res){
                            $("#errorUsername").text(res );
                         }
                     });
                }
            })
        })
    </script>
</head>
<body>
    <form action="">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username">
        <small id='errorUsername' style="color:red;"></small>
    </form>-
</body>
</html>