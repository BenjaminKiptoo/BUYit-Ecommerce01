<!-- <?php
// if (isset($_GET['edit_account'])) {
//     $user_session_name=$_SESSION['username'];
//     $select_query="select * from `user_table` where username=$user_session_name";
//     $result_query=mysqli_query($con,$select_query);
//     $row_fetch=mysqli_fetch_assoc($result_query);
//     $user_id=$row_fetch['user_id'];
//     $username=$row_fetch['username'];
//     $user_email=$row_fetch['user_email'];
//     $user_address=$row_fetch['user_address'];
//     $user_mobile=$row_fetch['user_mobile'];

// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit account</title>
</head>
<body>
    <h3 class="text-center text-success mb-4">Edit Account</h3>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-outline mb-4">
            <input type="text" name="user_username" id="" class="form-control w-50 m-auto" placeholder="Enter name update" value="<? echo $username  ?>">
        </div>
        <div class="form-outline mb-4">
            <input type="email" name="user_email" id="" class="form-control w-50 m-auto" placeholder="Enter email update">
        </div>
        <div class="form-outline mb-4">
            <input type="file" name="user_image" id="" class="form-control w-50 m-auto">
        </div>
        <div class="form-outline mb-4">
            <input type="text" name="user_address" id="" class="form-control w-50 m-auto" placeholder="Enter city update">
        </div>
        <div class="form-outline mb-4">
            <input type="text" name="user_mobile" id="" class="form-control w-50 m-auto" placeholder="Enter mobile update">
        </div>
        <input type="Submit" value="update" name="user_update" id="" class="bg-info py-2 my-3 px-3 border-0">

    </form>
</body>
</html> -->