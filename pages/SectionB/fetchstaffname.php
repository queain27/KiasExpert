<?php
// fetchstaffname.php

// Include your database connection configuration
include "../examples/config.php";

// Check if staff_id is set in POST request
if (isset($_POST['staff_id'])) {
    $staff_id = $_POST['staff_id'];

    // Prepare SQL query to check if staff_id is active
    $check_staff_sql = "SELECT * FROM `staff` WHERE `staff_id` = '$staff_id' AND `status` = 'active'";
    $result = mysqli_query($conn, $check_staff_sql);

    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            // Staff ID is active, fetch staff name and faculty
            $staff = mysqli_fetch_assoc($result);
            echo json_encode([
                'status' => 'Active',
                'staff_name' => $staff['staff_name'],
                'faculty' => $staff['faculty']
            ]);
        } else {
            // Staff ID not active or does not exist
            echo json_encode(['status' => 'Not Active']);
        }
    } else {
        // Query execution failed
        echo json_encode(['status' => 'Query failed']);
    }
    // Free result set
    mysqli_free_result($result);
}

// Close database connection
mysqli_close($conn);
?>
