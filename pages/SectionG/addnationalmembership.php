<?php
include "../examples/config.php";

// Check if form is submitted
if (isset($_POST['submit'])) {
    // Fetch and sanitize POST data
    $staff_id = mysqli_real_escape_string($conn, $_POST['staff_id']);
    $staff_name = mysqli_real_escape_string($conn, $_POST['staff_name']);
    $faculty = mysqli_real_escape_string($conn, $_POST['faculty']);
    $organisation_name = mysqli_real_escape_string($conn, $_POST['organisation_name']);
    $type_member = mysqli_real_escape_string($conn, $_POST['type_member']);
    $start_date = mysqli_real_escape_string($conn, $_POST['start_date']);
    $end_date = mysqli_real_escape_string($conn, $_POST['end_date']);
    $link_evidence = mysqli_real_escape_string($conn, $_POST['link_evidence']);
    $remarks = mysqli_real_escape_string($conn, $_POST['remarks']);

    // Check if staff_id is active
    $check_staff_sql = $conn->prepare("SELECT * FROM `staff` WHERE `staff_id` = ? AND `status` = 'active'");
    $check_staff_sql->bind_param('s', $staff_id);
    $check_staff_sql->execute();
    $check_staff_result = $check_staff_sql->get_result();

    if ($check_staff_result->num_rows > 0) {
        // Staff is active, check for duplicates
        $check_duplicate_sql = $conn->prepare("SELECT * FROM `membershipnational` WHERE `staff_id` = ?");
        $check_duplicate_sql->bind_param('s', $staff_id);
        $check_duplicate_sql->execute();
        $check_duplicate_result = $check_duplicate_sql->get_result();

        if ($check_duplicate_result->num_rows == 0) {
            // No duplicates, proceed with the insertion
            $insert_sql = $conn->prepare("INSERT INTO `membershipnational` 
            (`staff_id`, `staff_name`, `faculty`, `organisation_name`, `type_member`, `start_date`, `end_date`, `link_evidence`, `remarks`) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
        
        // Bind parameters
        $insert_sql->bind_param(
            'issssssss',
            $staff_id, $staff_name, $faculty, $organisation_name, $type_member,
            $start_date, $end_date, $link_evidence, $remarks
        );
        

            if ($insert_sql->execute()) {
                echo "<script>alert('New record successfully added');</script>";
                echo "<script>document.location='NationalMembership.php';</script>";
            } else {
                echo "<script>alert('Failed to add new record');</script>";
            }

            $insert_sql->close();
        } else {
            // Duplicate entry found
            echo "<script>alert('Duplicate entry found for the given Staff ID');</script>";
        }
    } else {
        // Staff is not active
        echo "<script>alert('Staff ID is not active or does not exist');</script>";
    }

    // Close the prepared statements and the database connection
    $check_staff_sql->close();
    $check_duplicate_sql->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Add New Membership</title>
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/navbar.css">
    <link rel="shortcut icon" href="../../images/Logo2.png" type="image/x-icon">
    <script src="../../bootstrap/js/jquery.min.js"></script>
    <script src="../../bootstrap/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
    $(document).ready(function() {
        $('input[name="staff_id"]').on('change', function() {
            var staff_id = $(this).val();
            if (staff_id) {
                $.ajax({
                    type: 'POST',
                    url: '../SectionB/fetchstaffname.php',
                    data: { staff_id: staff_id },
                    success: function(response) {
                        try {
                            var data = JSON.parse(response);
                            if (data.status === "Active") {
                                $('input[name="staff_name"]').val(data.staff_name);
                                $('input[name="faculty"]').val(data.faculty);
                                $('#staff-id-error').hide();
                                $('button[name="submit"]').prop('disabled', false);
                            } else {
                                $('#staff-id-error').text("Staff ID is not active or does not exist").show();
                                $('input[name="staff_name"]').val('');
                                $('input[name="faculty"]').val('');
                                $('button[name="submit"]').prop('disabled', true);
                            }
                        } catch (e) {
                            console.error("Parsing error:", e);
                            $('#staff-id-error').text("An error occurred while fetching staff information").show();
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error("AJAX Error:", status, error);
                        $('#staff-id-error').text("An error occurred while fetching staff information").show();
                    }
                });
            } else {
                $('input[name="staff_name"]').val('');
                $('input[name="faculty"]').val('');
                $('#staff-id-error').hide();
                $('button[name="submit"]').prop('disabled', true);
            }
        });

        // Disable the submit button initially if staff_id is empty
        if (!$('input[name="staff_id"]').val()) {
            $('button[name="submit"]').prop('disabled', true);
        }
    });
    </script>
</head>
<body>
    <div class="container-fluid">
        <div class="container">
            <h1 class="border-bottom text-center pb-3 mb-4">Add Staff</h1>
            <form action="" method="post">
                <div class="row">
                    <!-- Staff ID -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">STAFF ID:</label>
                        <input type="text" class="form-control" name="staff_id" placeholder="Staff ID" required>
                        <div id="staff-id-error" class="text-danger" style="display: none;"></div>
                    </div>
                    <!-- Staff Name -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">STAFF NAME:</label>
                        <input type="text" class="form-control" name="staff_name" placeholder="Staff Name" readonly required>
                    </div>
                    <!-- Faculty -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">FACULTY:</label>
                        <input type="text" class="form-control" name="faculty" placeholder="Faculty" readonly required>
                    </div>
                    <!-- Organisation -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Academic/Professional Bodies/Associatons/NGOs:</label>
                        <input type="text" class="form-control" name="organisation_name" placeholder="Academic/Professional Bodies/Associatons/NGOs" required>
                    </div>
                 
                    <!-- Type Dropdown -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">TYPE:</label>
                        <select class="form-control" name="type_member" required>
                            <option value="" disabled selected>Choose Type</option>
                            <option value="Member">Member</option>
                            <option value="Committe">Committe</option>
                        </select>
                    </div>
                 
                    <!-- Start Date -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">START DATE:</label>
                        <input type="date" class="form-control" name="start_date" required>
                    </div>
                    <!-- End Date -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">END DATE:</label>
                        <input type="date" class="form-control" name="end_date" required>
                    </div>
                  
                   
                    <!-- Link Evidence -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">LINK EVIDENCE:</label>
                        <input type="text" class="form-control" name="link_evidence" placeholder="Attach Link" required>
                    </div>
                    <!-- Remarks -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">REMARKS:</label>
                        <input type="text" class="form-control" name="remarks" placeholder="Remarks">
                    </div>
                    <!-- Buttons -->
                    <div class="col-md-12 mb-3 text-center">
                        <button type="submit" class="btn btn-primary" name="submit">ADD</button>
                        <a href="NationalMembership.php" class="btn btn-success">View </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
