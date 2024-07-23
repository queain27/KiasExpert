<?php
include "../examples/config.php";

if(isset($_POST['staff_id'])) {
  $staff_id = $_POST['staff_id'];
  $result = mysqli_query($conn, "SELECT `staff_name` FROM `staff` WHERE `staff_id` = '$staff_id' AND `status` = 'active'");
  
  if(mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    echo $row['staff_name'];
  } else {
    echo "Not Active";
  }
}
?>
