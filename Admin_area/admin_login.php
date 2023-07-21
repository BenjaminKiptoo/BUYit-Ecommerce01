<?php include('../includes/connect.php'); 
include('../functions/common_function.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <!--------Bootstrap CSS link  ------------>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <!----------- Font awesome link------------>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        body{
            overflow: hidden;
        }
    </style>
</head>
<body>
    <div class="container-fluid m-3">
        <h2 class="text-center mb-5">Admin Login</h2>
        <form action="" method="post">
            <div class="form-outline mb-4">
                <label for="admin_name" class="form-label">Username</label>
                <input type="text" id="admin_name" name="admin_name" placeholder="Enter your username" required="required" class="form-control w-50">
            </div>
            <div class="form-outline mb-4">
                <label for="admin_password" class="form-label">Password</label>
                <input type="password" id="admin_password" name="admin_password" placeholder="Password" required="required" class="form-control w-50">
            </div>
            <div>
                <input type="submit" class="bg-info py-2 px-3 border-0" name="admin_login" value="Login">
                <p class="small fw-bold mt-2 pt-1">Don't have an account? <a href="admin_registration.php" class="link-danger">Register</a></p>
            </div>
        </form>
    </div>
</body>
</html>

<?php

if (isset($_POST['admin_login'])) {
    $admin_name=$_POST['admin_name'];
    $admin_password=$_POST['admin_password'];

    $select_query="select * from `admin_table` where admin_name='$admin_name'";
    $result=mysqli_query($con,$select_query);
    $row_count=mysqli_num_rows($result);
    $row_data=mysqli_fetch_assoc($result);

    if ($row_count>0) {
        $_SESSION['admin_name']=$admin_name;
        if (password_verify($admin_password,$row_data['admin_password'])) {
            echo "<script>alert('Login successful')</script>";
            if ($row_count==1) {
                $_SESSION['admin_name']=$admin_name;
                echo "<script>window.open('index.php','_self')</script>";
            }
        }else {
            echo "<script>alert('Invalid Credentials')</script>";
        }
    }else {
        echo "<script>alert('Invalid Credentials')</script>";
    }
}

?>