<?php
include "../Auth/config.php";

if(isset($_POST['staff_id'])) 

{
    $staff_id = $_POST['staff_id'];
    $staff_query = mysqli_query($conn, "SELECT staff_name, faculty FROM staff WHERE staff_id = '$staff_id'");

    if(mysqli_num_rows($staff_query) > 0) {
        $staff_details = mysqli_fetch_assoc($staff_query);
        echo json_encode($staff_details);
    } else {
        echo json_encode(["error" => "No Staff Detail"]);
    }
}
?>
