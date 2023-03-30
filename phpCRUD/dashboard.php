<?php
if(!isset($_COOKIE['username'])){
    header('location:login.php');
  }

include('../database/connection.php');
$sql = "select * from students";
$var = $conn->query($sql);
$studentList = $var->fetch_all(MYSQLI_ASSOC);

session_start();
if(isset($_SESSION['message']) && !empty($_SESSION['message'])){
    $message = $_SESSION['message'];
    $_SESSION['message']="";
}

// $arr =[];
// while($row=$var->fetch_object()){
//    $arr[]=$row;
// }

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <title>Dashboard</title>
</head>
<body>
    <div class="container">
    <h3>Welcome To Dashboard</h3>
    <a href="student_create.php" class="btn btn-primary">Add Student</a>
    <?php  if(isset($message)) { ?>
        <div class="alert alert-success">
            <h5><?php  echo $message;  ?></h3>
        </div>
    <?php  } ?>
    <div>
        <a href="logout.php" style="float:right;">Logout</a>
    </div>
    <div class="container">
        <table class="table table-boarder">
            <thead>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>email</th>
                    <th>address</th>
                    <th>phone</th>
                    <th>action</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($studentList as $key=>$value) { ?>
                <tr>
                    <td><?php echo $key+1; ?></td>
                    <td><?php echo $value['name']; ?></td>
                    <td><?php echo $value['email'];  ?></td>
                    <td><?php  echo $value['address']; ?></td>
                    <td><?php echo $value['phone']; ?></td>
                    <td>
                        <a href="student_edit.php?id=<?php echo $value['id']; ?>" class="btn btn-primary">Edit</a>
                        <a href="student_delete.php?id=<?php echo $value['id']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure to delete?')">Delete</a>
                    </td>
                </tr>
            <?php  } ?>
            </tbody>
        </table>
    </div>
    </div>
    
    
</body>
</html>