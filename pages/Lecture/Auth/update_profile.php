<?php

include 'config.php';
session_start();

// Check if staff_id is set in the session
if (!isset($_SESSION['staff_id'])) {
  header('Location: login.php');
  exit();
}

$staff_id = $_SESSION['staff_id'];

// Handle logout
if (isset($_GET['logout'])) {
  // Unset session variables
  session_unset();
  session_destroy();
  header('Location: login.php');
  exit();
}
if(isset($_POST ['updatedetails']))
{
    $currentImage = $_POST["currentImage"]; // Retrieve the current image filename from the hidden field
  $staff_name = $_POST['staff_name']; 
  $icnumber = $_POST['icnumber'];
  $grade = $_POST['grade'];
  $position = $_POST['position'];
  $first_appointment = $_POST['first_appointment'];
  $current_appointment = $_POST['current_appointment']; 
  $serve_date = $_POST['serve_date'];
  $dob= $_POST['dob'];
  $age = $_POST['age'];
  $cohort = $_POST['cohort'];
  $aca_qua = $_POST['aca_qua'];
  $name_prof = $_POST['name_prof'];
  $prof_qual = $_POST['prof_qual'];
  $regis_prof = $_POST['regis_prof'];
  $faculty = $_POST['faculty'];
  $st = $_POST['st'];
  $status = $_POST['status'];
  $status_contract= $_POST['status_contract'];
  $status_time = $_POST['status_time'];
  $citizen = $_POST['citizen'];
  $country = $_POST['country'];
  $link_evidence = $_POST['link_evidence'];
  $remarks = $_POST['remarks'];
    
   // Default image to current image
   $image = $currentImage;

   // Check if a new image is uploaded
   if (isset($_FILES["image"]) && $_FILES["image"]["error"] === UPLOAD_ERR_OK) {
       $uploadedImage = basename($_FILES["image"]["name"]);
       $target_dir = "uploads/";
       $target_file = $target_dir . $uploadedImage;
       
       // Ensure the target directory exists
       if (!file_exists($target_dir)) {
           mkdir($target_dir, 0755, true);
       }
       // Move the uploaded file to the target directory
       if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
           // Only delete the old image if a new one was successfully uploaded
           if ($currentImage !== 'default.jpg' && file_exists($target_dir . $currentImage)) {
               unlink($target_dir . $currentImage);
           }
           // Update image to new file
           $image = $uploadedImage;
       } else {
           echo "<script>alert('Image upload failed');</script>";
           exit;
       }
   }
// Update the database with the image path and other fields
$sql = mysqli_query($conn, "UPDATE `staff` SET `image`='$image',`staff_name`='$staff_name',`icnumber`='$icnumber',`grade`='$grade',`position`='$position',
  `first_appointment`='$first_appointment', `current_appointment`='$current_appointment', `serve_date`='$serve_date', `dob`='$dob', `age`='$age', `cohort`='$cohort', `aca_qua`='$aca_qua', `name_prof`='$name_prof', `prof_qual`='$prof_qual', `regis_prof`='$regis_prof', `faculty`='$faculty', `st`='$st', `status`='$status', `status_contract`='$status_contract',
  `status_time`='$status_time', `citizen`='$citizen', `country`='$country', `link_evidence`='$link_evidence', `remarks`='$remarks' WHERE staff_id=$staff_id");

if ($sql) {
    echo "<script>alert('New record successfully updated');</script>";
    echo "<script>document.location='profile.php';</script>";
} else {
    echo "<script>alert('Something went wrong');</script>";
}
}
?>