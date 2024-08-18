<?php
include "../examples/config.php";

if (isset($_POST['submit'])) {
    $staff_id = $_POST['staff_id'];
    $staff_name =$_POST['staff_name'];
    $faculty = $_POST['faculty'];
    $programme_title =$_POST['programme_title'];
    $type = $_POST['type'];
    $organisation_name = $_POST['organisation_name'];
    $start_date = $_POST['start_date'];
    $expiry_date = $_POST['expiry_date'];
    $link_evidence = $_POST['link_evidence'];
    $remarks = $_POST['remarks'];



    // Check if staff_id is active
    $check_staff_sql = $conn->prepare("SELECT * FROM `staff` WHERE `staff_id` = ? AND `status` = 'active'");
    $check_staff_sql->bind_param('s', $staff_id);
    $check_staff_sql->execute();
    $check_staff_result = $check_staff_sql->get_result();

    if ($check_staff_result->num_rows > 0) {
        // Staff is active, check for duplicates
        $check_duplicate_sql = $conn->prepare("SELECT * FROM `staffnational` WHERE `staff_id` = ?");
        $check_duplicate_sql->bind_param('s', $staff_id);
        $check_duplicate_sql->execute();
        $check_duplicate_result = $check_duplicate_sql->get_result();

        if ($check_duplicate_result->num_rows == 0) {
            // No duplicates, proceed with the insertion
            $sql = mysqli_query($conn, "INSERT INTO `staffnational` (`staff_id`,`staff_name`,`faculty`, `programme_title`,`type`,`organisation_name`,`start_date`,`expiry_date`,`link_evidence`,`remarks`) 
      VALUES ('$staff_id', '$staff_name','$faculty','$programme_title','$type','$organisation_name','$start_date','$expiry_date','$link_evidence','$remarks')");
      
            if ($sql) {
                echo "<script>alert('New record successfully added');</script>";
                echo "<script>document.location='Staff_Research.php';</script>";
            } else {
                echo "<script>alert('Failed to add new record');</script>";
            }
        } else {
            // Duplicate entry found
            echo "<script>alert('Duplicate entry found for the given StaffID');</script>";
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
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Add New Staff National</title>
  <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
  <script src="../../bootstrap/js/jquery.min.js"></script>
  <script src="../../bootstrap/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../../css/navbar.css">
  <link rel="shortcut icon" href="../../images/Logo2.png" type="image/x-icon">
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
                }
            });
        } else {
            $('input[name="staff_name"]').val('');
            $('input[name="faculty"]').val('');
            $('#staff-id-error').hide();
            $('button[name="submit"]').prop('disabled', false);
        }
    });

    // Optionally, you can also disable the submit button initially if staff_id is empty
    if (!$('input[name="staff_id"]').val()) {
        $('button[name="submit"]').prop('disabled', true);
    }
});
</script>






</head>
<body>
<div class="container-fluid">
  <div class="container">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h1 class="border-bottom text-center pb-3 mb-4">Add New Staff MoA</h1>
        </div>
      </div>
      <form action="" method="post">
      <div class="container">
    <div class="row">
        <!-- Staff ID -->
        <div class="col-md-6 mb-3">
            <label class="form-label">STAFF ID:</label>
            <input type="text" class="form-control" name="staff_id" placeholder="Staff ID" required>
            <div id="staff-id-error" class="text-danger mt-1" style="display:none;"></div>
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

        <!-- Programme Title -->
        <div class="col-md-6 mb-3">
            <label class="form-label">PROGRAMME TITLE:</label>
            <select class="form-control" name="programme_title" required>
                <?php
                // Database connection
                include "../examples/config.php";

                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // Fetch data from the organisation table
                $sql = "SELECT programme_title FROM nationalorganisation";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // Loop through the results and create option elements
                    while ($row = $result->fetch_assoc()) {
                        echo '<option value="' . htmlspecialchars($row['programme_title']) . '">' . htmlspecialchars($row['programme_title']) . '</option>';
                    }
                } else {
                    echo '<option value="">No options available</option>';
                }

                // Close the database connection
                $conn->close();
                ?>
            </select>
        </div>

        <!-- Type -->
        <div class="col-md-6 mb-3">
            <label class="form-label">TYPE:</label>
            <select class="form-control" name="type" required>
                <option value="" disabled selected>Choose Type</option>
                <option value="Project Leader">Project Leader</option>
                <option value="Member">Member</option>
            </select>
        </div>

        <!-- Collaborator -->
        <div class="col-md-6 mb-3">
            <label class="form-label">COLLABORATOR:</label>
            <select class="form-control" name="organisation_name" required>
                <?php
                // Database connection
                include "../examples/config.php";

                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // Fetch data from the nationalorganisation table
                $sql = "SELECT organisation_name FROM nationalorganisation";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // Loop through the results and create option elements
                    while ($row = $result->fetch_assoc()) {
                        echo '<option value="' . htmlspecialchars($row['organisation_name']) . '">' . htmlspecialchars($row['organisation_name']) . '</option>';
                    }
                } else {
                    echo '<option value="">No options available</option>';
                }

                // Close the database connection
                $conn->close();
                ?>
            </select>
        </div>

        <!-- Start Date -->
        <div class="col-md-6 mb-3">
            <label class="form-label">START DATE:</label>
            <input type="date" id="start_date" class="form-control" name="start_date" required>
        </div>

        <!-- Expiry Date -->
        <div class="col-md-6 mb-3">
            <label class="form-label">EXPIRY DATE:</label>
            <input type="date" id="expiry_date" class="form-control" name="expiry_date" required>
        </div>

        <!-- Link Evidence -->
        <div class="col-md-6 mb-3">
            <label class="form-label">LINK EVIDENCE:</label>
            <input type="text" class="form-control" name="link_evidence" placeholder="Link Evidence" required>
        </div>

        <!-- Remarks -->
        <div class="col-md-6 mb-3">
            <label class="form-label">REMARKS:</label>
            <input type="text" class="form-control" name="remarks" placeholder="Remarks" required>
        </div>

        <!-- Buttons -->
        <div class="col-md-12 mb-3 text-center">
            <button type="submit" class="btn btn-primary" name="submit">ADD</button>
            <a href="Staff_International.php" class="btn btn-success">View Staff</a>
        </div>
    </div>
</div>

      </form>
    </div>
  </div>
</div>

</body>
</html>
/