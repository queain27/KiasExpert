<?php

include 'config.php';
session_start();
$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
};

if(isset($_GET['logout'])){
   unset($user_id);
   session_destroy();
   header('location:login.php');
}

if(isset($_POST['update_profile'])){

   $update_name = mysqli_real_escape_string($conn, $_POST['update_name']);
   $update_adminid = mysqli_real_escape_string($conn, $_POST['update_adminid']);

   mysqli_query($conn, "UPDATE `admin_form` SET name = '$update_name', adminid = '$update_adminid' WHERE id = '$user_id'") or die('query failed');

   $old_pass = $_POST['old_pass'];
   $update_pass = mysqli_real_escape_string($conn, ($_POST['update_pass']));
   $new_pass = mysqli_real_escape_string($conn, ($_POST['new_pass']));
   $confirm_pass = mysqli_real_escape_string($conn, ($_POST['confirm_pass'])); 

   if(!empty($update_pass) || !empty($new_pass) || !empty($confirm_pass)){
      if($update_pass != $old_pass){
         $message[] = 'old password not matched!';
      }elseif($new_pass != $confirm_pass){
         $message[] = 'confirm password not matched!';
      }else{
         mysqli_query($conn, "UPDATE `admin_form` SET password = '$confirm_pass' WHERE id = '$user_id'") or die('query failed');
         $message[] = 'password updated successfully!';
      }
   }

   $update_image = $_FILES['update_image']['name'];
   $update_image_size = $_FILES['update_image']['size'];
   $update_image_tmp_name = $_FILES['update_image']['tmp_name'];
   $update_image_folder = '../../images/'.$update_image;

   if(!empty($update_image)){
      if($update_image_size > 2000000){
         $message[] = 'image is too large';
      }else{
         $image_update_query = mysqli_query($conn, "UPDATE `admin_form` SET image = '$update_image' WHERE id = '$user_id'") or die('query failed');
         if($image_update_query){
            move_uploaded_file($update_image_tmp_name, $update_image_folder);
         }
         $message[] = 'image updated succssfully!';
      }
   }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Profile</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <link rel="shortcut icon" href="../../images/Logo2.png" type="image/x-icon">
  <link rel="stylesheet" href="css/style.css">


</head>
<!-- Paste the content of sidebar.php here -->
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
  <div class="preloader flex-column justify-content-center align-items-center">
  </div> 
  <?php
     
     include '../../header.php';
     include '../../SideBarAdmin.php';
     ?>
<body>
<!--Main Content-->
  <div class="content-wrapper">
  <!-- Main content -->
  <div class="update-profile">
<?php
   $select = mysqli_query($conn, "SELECT * FROM `admin_form` WHERE id = '$user_id'") or die('query failed');
   
   if(mysqli_num_rows($select) > 0){
      $fetch = mysqli_fetch_assoc($select);
   }
?>

<form action="" method="post" enctype="multipart/form-data">
   <?php
      if($fetch['image'] == ''){
         echo '<img src="images/default-avatar.png">';
      }else{
         echo '<img src="../../images/'.$fetch['image'].'">';
      }
      if(isset($message)){
         foreach($message as $message){
            echo '<div class="message">'.$message.'</div>';
         }
      }
   ?>
   <div class="flex">
      <div class="inputBox">
         <span>username :</span>
         <input type="text" name="update_name" value="<?php echo $fetch['name']; ?>" class="box">
         <span>your adminid :</span>
         <input type="text" name="update_adminid" value="<?php echo $fetch['adminid']; ?>" class="box">
         <span>update your pic :</span>
         <input type="file" name="update_image" accept="image/jpg, image/jpeg, image/png" class="box">
      </div>
      <div class="inputBox">
         <input type="hidden" name="old_pass" value="<?php echo $fetch['password']; ?>">
         <span>old password :</span>
         <input type="password" name="update_pass" placeholder="enter previous password" class="box">
         <span>new password :</span>
         <input type="password" name="new_pass" placeholder="enter new password" class="box">
         <span>confirm password :</span>
         <input type="password" name="confirm_pass" placeholder="confirm new password" class="box">
      </div>
   </div>
   <input type="submit" value="update profile" name="update_profile" class="btn">
   <a href="profile.php" class="delete-btn">go back</a>
</form>
</div>
  <aside class="control-sidebar control-sidebar-dark">
  </aside>
</div>

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- Summernote -->
<script src="../../plugins/summernote/summernote-bs4.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
</body>
</html>