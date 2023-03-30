<?php

 if(isset($_POST['submit'])){
     if($_FILES['image']['error'] == 0){
        print_r($_FILES);
        if($_FILES['image']['type'] == "image/jpeg" 
           || $_FILES['image']['type'] == "image/png" ||  $_FILES['image']['type'] =="application/pdf"){
             if($_FILES['image']['size'] <= 4 * 1024 * 1024){
    if(move_uploaded_file($_FILES['image']['tmp_name'], $_FILES['image']['name'])){
        if($_FILES['image']['type'] =="application/pdf"){
             $pdf = $_FILES['image']['name'];
        }else{
            $img = $_FILES['image']['name'];
        }
        echo "Image Uploaded Successfully!";
    }else{
        echo "Image Upload Failed!";
    }
             }else{
                echo "Error: Maximum Allowed size 1mb";
             }
        }else{
            echo "Invalid File Format!";
        }
     }else{
        echo "File is Not selected!";
     }
 }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Upload</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
      <input type="file" name="image">
      <br><br>
      <input type="submit" name="submit" value="Upload">
    </form>
    <?php if(isset($img)) { ?>
    <img src=<?php echo $img; ?> style="width:300px;height:200px">
    <?php } ?>
</body>
</html>