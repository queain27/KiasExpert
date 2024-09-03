
<?php

include 'config.php';
session_start();

if(isset($_POST['submit'])){

   $staff_id = mysqli_real_escape_string($conn,($_POST['staff_id']));
   $icnumber = mysqli_real_escape_string($conn, ($_POST['icnumber']));

   $select = mysqli_query($conn, "SELECT * FROM staff WHERE staff_id = '$staff_id' AND icnumber = '$icnumber'") or die('query failed');

   if(mysqli_num_rows($select) > 0){
      $row = mysqli_fetch_assoc($select);
      $_SESSION['staff_id'] = $row['staff_id'];
      header('location:../homelect.php');
   }else{
      $message[] = 'incorrect staffid or password!';
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
   <link rel="shortcut icon" href="../../../images/Logo2.png" type="image/x-icon">
   <link rel="stylesheet" href="css/style.css">
</head>
<body>
   
<div class="form-container">
   <form action="" method="post">
      <h3>Login Now</h3>
      <div class="img-container">
         <img src="../../../images/Logo2.png" alt="" width="150" height="150">
      </div>
      <?php
      if(!empty($message)){
         foreach($message as $msg){
            echo '<div class="message">'.$msg.'</div>';
         }
      }
      ?>
      <input type="text" name="staff_id" placeholder="Enter staffid" class="box" required>
      <input type="password" name="icnumber" placeholder="Enter password (Ic Number)" class="box" required>
      <input type="submit" name="submit" value="Login Now" class="btn">
      <p>Don't have an account? <a href="register.php">Register Now</a></p>
   </form>
</div>

</body>
</html>
