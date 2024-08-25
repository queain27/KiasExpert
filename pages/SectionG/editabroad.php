<?php
session_start();

if(!isset($_SESSION['user_id']))

{
    header('Location: ../examples/login.php'); 
    exit;
}
include "../examples/config.php";
// Ensure $staff_id is properly sanitized and validated
$staff_id = isset($_GET['ID']) ? mysqli_real_escape_string($conn, $_GET['ID']) : '';

if (isset($_POST['submit'])) {
    $staff_id = mysqli_real_escape_string($conn, $_POST['staff_id']);
    $staff_name = mysqli_real_escape_string($conn, $_POST['staff_name']);
    $faculty = mysqli_real_escape_string($conn, $_POST['faculty']);
    $organisation = mysqli_real_escape_string($conn, $_POST['organisation']);
    $country = mysqli_real_escape_string($conn, $_POST['country']);
    $type = mysqli_real_escape_string($conn, $_POST['type']);
    $sponsor = mysqli_real_escape_string($conn, $_POST['sponsor']);
    $start_date = mysqli_real_escape_string($conn, $_POST['start_date']);
    $end_date = mysqli_real_escape_string($conn, $_POST['end_date']);
    $no_days = mysqli_real_escape_string($conn, $_POST['no_days']);
    $link_evidence = mysqli_real_escape_string($conn, $_POST['link_evidence']);
    $remarks = mysqli_real_escape_string($conn, $_POST['remarks']);

    $stmt = $conn->prepare("UPDATE `abroad` 
                            SET `staff_name` = ?, 
                                `faculty` = ?, 
                                `organisation` = ?, 
                                `country` = ?, 
                                `type` = ?, 
                                `sponsor` = ?, 
                                `start_date` = ?, 
                                `end_date` = ?, 
                                `no_days` = ?, 
                                `link_evidence` = ?, 
                                `remarks` = ? 
                            WHERE `staff_id` = ?");

    // Check if the statement was prepared successfully
    if ($stmt === false) {
        die('Prepare failed: ' . htmlspecialchars($conn->error));
    }

    // Bind parameters
    $stmt->bind_param('sssssssssssi', 
                       $staff_name, 
                       $faculty, 
                       $organisation, 
                       $country, 
                       $type, 
                       $sponsor, 
                       $start_date, 
                       $end_date, 
                       $no_days, 
                       $link_evidence, 
                       $remarks, 
                       $staff_id);

    // Execute the statement
    if ($stmt->execute()) {
        echo "<script>alert('Record updated successfully');</script>";
        echo "<script>window.location.href='Abroad.php';</script>"; // Redirect to avoid resubmission
    } else {
        echo "<script>alert('Error updating record: " . htmlspecialchars($stmt->error) . "');</script>";
    }

    // Close the prepared statement and the database connection
    $stmt->close();
    $conn->close();
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
    <script src="../../bootstrap/js/jquery.min.js"></script>
    <script src="../../bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
        integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../css/navbar.css">
    <link rel="shortcut icon" href="../../images/Logo2.png" type="image/x-icon">
    <title>Update Staff Abroad</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
        body {
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }
        .hidden {
            display: none;
        }
      
    </style>
  <script>
$(document).ready(function() {
    // Date Period Calculation
    const startDateInput = $('#start_date');
    const endDateInput = $('#end_date');
    const nodaysInput = $('#nodays');

    function calculatePeriod() {
        const startDate = new Date(startDateInput.val());
        const endDate = new Date(endDateInput.val());

        if (startDate && endDate && startDate <= endDate) {
            const timeDiff = endDate - startDate;
            const daysDiff = Math.floor(timeDiff / (1000 * 60 * 60 * 24));
           nodaysInput.val(`${daysDiff} days`);
        } else {
            nodaysInput.val('');
        }
    }

    startDateInput.on('change', calculatePeriod);
    endDateInput.on('change', calculatePeriod);
});
</script>




</head>
<body>
    <div class="container">
        <div class="text-center mb-4">
            <b><p>Click Update After Finish Changing Information</p></b>
        </div>

       
        <?php 
        $sql = "SELECT * FROM `abroad` WHERE staff_id= $staff_id LIMIT 1";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        ?>

        <div class="container d-flex justify-content-center">
            <form action="" method="post" style="width:50vw; min-width:300px;">
                <div class="row">
                      
                    <!-- Staff ID -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">STAFF ID:</label>
                        <input type="text" class="form-control" name="staff_id" value="<?php echo $row['staff_id']?>" readonly>
                    </div>

                    <!-- Name -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">STAFF NAME:</label>
                        <input type="text" class="form-control" name="staff_name" value="<?php echo $row['staff_name']?>" readonly>
                    </div>
  
                    <div class="col-md-6 mb-3">
                        <label class="form-label">FACULTY :</label>
                        <input type="text" class="form-control" name="faculty" value="<?php echo $row['faculty']?>">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">ORGANISATION :</label>
                        <input type="text" class="form-control" name="organisation" value="<?php echo $row['organisation']?>">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">COUNTRY :</label>
                        <input type="text" class="form-control" name="country" value="<?php echo $row['country']?>">
                    </div>
                    <div class="col-md-6 mb-3">
                    <label class="form-label">TYPE:</label>
                    <select class="form-control" name="type" required>
                        <option value="" disabled <?php if (empty($row['type'])) echo 'selected'; ?>>Choose Type</option>
                        <option value="Attachment" <?php if ($row['type'] == 'Attachment') echo 'selected'; ?>>Attachment</option>
                        <option value="Research" <?php if ($row['type'] == 'Research') echo 'selected'; ?>>Research</option>
                        <option value="Training" <?php if ($row['type'] == 'Training') echo 'selected'; ?>>Training</option>
                        <option value="Sabbatical" <?php if ($row['type'] == 'Sabbatical') echo 'selected'; ?>>Sabbatical</option>
                        <option value="Leaves" <?php if ($row['type'] == 'Leaves') echo 'selected'; ?>>Leaves</option>
                        <option value="Etc" <?php if ($row['type'] == 'Etc') echo 'selected'; ?>>Etc</option>
                    </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">SPONSOR :</label>
                        <input type="text" class="form-control" name="sponsor" value="<?php echo $row['sponsor']?>">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">START DATE :</label>
                        <input type="date" class="form-control" id="start_date" name="start_date" value="<?php echo $row['start_date']?>">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">END DATE :</label>
                        <input type="date" class="form-control" id="end_date" name="end_date" value="<?php echo $row['end_date']?>">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">NO. DAYS :</label>
                        <input type="text" class="form-control"  id="nodays" name="no_days" value="<?php echo $row['no_days']?>">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">LINK EVIDENCE:</label>
                        <input type="text" class="form-control" name="link_evidence" value="<?php echo $row['link_evidence']?>">
                    </div>
                    <!-- Remarks -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">REMARKS:</label>
                        <input type="text" class="form-control" name="remarks" value="<?php echo $row['remarks']?>">
                    </div>         
               <div>
               <center>
                       <button type ="submit" class="btn btn-success" name="submit">UPDATE</button>
                       <a href="Abroad.php" class="btn btn-danger">Cancel</a>
              </div>
                 </center>
          </form>
     </div>
</div>

 <!--Boostrap-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
 <!--Boostrap-->
</body>
</html>


