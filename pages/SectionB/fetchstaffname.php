<?php
include "../examples/config.php";

if(isset($_POST['staff_id'])) {
  $staff_id = $_POST['staff_id'];

  // Check if staff_id is active
  $check_staff_sql = mysqli_query($conn, "SELECT * FROM `staff` WHERE `staff_id` = '$staff_id' AND `status` = 'active'");
  
  if(mysqli_num_rows($check_staff_sql) > 0) {
    // Fetch staff name
    $staff = mysqli_fetch_assoc($check_staff_sql);
    echo $staff['staff_name'];
  } else {
    echo "Not Active";
  }
}
?>
