<?php

include 'config.php';
session_start();

if(isset($_POST['submit'])){

   $adminid = mysqli_real_escape_string($conn, $_POST['adminid']);
   $pass = mysqli_real_escape_string($conn, $_POST['password']);

   $select = mysqli_query($conn, "SELECT * FROM `admin_form` WHERE adminid = '$adminid' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select) > 0){
      $row = mysqli_fetch_assoc($select);
      $_SESSION['user_id'] = $row['adminid']; // Set sesi user_id
      header('Location: ../../home.php'); // Arahkan ke halaman home.php
      exit;
   }else{
      $message[] = 'Incorrect admin ID or password!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login</title>
   <link rel="shortcut icon" href="../../images/Logo2.png" type="image/x-icon">
   <link rel="stylesheet" href="css/style.css">
</head>
<body>
   
<div class="form-container">

   <form action="" method="post" enctype="multipart/form-data">
      <h3>Login Now</h3>
      <div class="img-container">
         <img src="../../images/Logo2.png" alt=" " width="150" height="150">
      </div>
      <?php
      if(isset($message)){
         foreach($message as $message){
            echo '<div class="message">'.$message.'</div>';
         }
      }
      ?>
      <input type="text" name="adminid" placeholder="Enter Admin ID" class="box" required>
      <input type="password" name="password" placeholder="Enter Password" class="box" required>
      <input type="submit" name="submit" value="Login Now" class="btn">
   </form>

</div>

</body>
</html>
