
<?php

include 'config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $staffid = mysqli_real_escape_string($conn, $_POST['staffid']);
   $pass = mysqli_real_escape_string($conn, ($_POST['password']));
   $cpass = mysqli_real_escape_string($conn, ($_POST['cpassword']));
   $image = $_FILES['image']['name'];
   $image_size = $_FILES['image']['size'];
   $image_tmp_name = $_FILES['image']['tmp_name'];
   $image_folder = '../../../images/'.$image;

   $select = mysqli_query($conn, "SELECT * FROM `lect_form` WHERE staffid = '$staffid' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select) > 0){
      $message[] = 'user already exist'; 
   }else{
      if($pass != $cpass){
         $message[] = 'confirm password not matched!';
      }elseif($image_size > 2000000){
         $message[] = 'image size is too large!';
      }else{
         $insert = mysqli_query($conn, "INSERT INTO `lect_form`(name, staffid, password, image) VALUES('$name', '$staffid', '$pass', '$image')") or die('query failed');

         if($insert){
            move_uploaded_file($image_tmp_name, $image_folder);
            $message[] = 'registered successfully!';
            header('location:login.php');
         }else{
            $message[] = 'registeration failed!';
         }
      }
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <link rel="shortcut icon" href="../../../images/Logo2.png" type="image/x-icon">
  <link rel="stylesheet" href="css/style.css">
  <style>
     * 
  body 
  h3
    {
      font-size : 40px;
      font-family: "font-family:'Mali'"cursive;
      animation-name:Title;
      animation-duration: 2s;
      animation-iteration-count: infinite;

    }
    
         @keyframes Title
    {
      from {color:#069e87}
      to{color:#f1f520;
      }
    }
</style> 
  <div class="form-container">
    
   <form action="" method="post" enctype="multipart/form-data">
   <h3>register now</h3>
      <?php
      if(isset($message)){
         foreach($message as $message){
            echo '<div class="message">'.$message.'</div>';
         }
      }
      ?>


   <div class="img-container">
      <img src="../../../images/Logo2.png" alt=" " width="150" height="150" >
    </div>

      <input type="text" name="name" placeholder="Enter username" class="box" required>
      <input type="text" name="staffid" placeholder="Enter staffid" class="box" required>
      <input type="password" name="password" placeholder="Enter password" class="box" required>
      <input type="password" name="cpassword" placeholder="Confirm password" class="box" required>
      <input type="file" name="image" class="box" accept="image/jpg, image/jpeg, image/png">
      <input type="submit" name="submit" value="register now" class="btn">
      <p>already have an account? <a href="login.php">login now</a></p>
   
  </form>
</div>

</head>
<body>
  
</body>
</html>