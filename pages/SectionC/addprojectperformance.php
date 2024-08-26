<?php
session_start(); // Mulakan sesi

if(!isset($_SESSION['user_id']))

{
    header('Location: pages/examples/login.php'); 
    exit;
}

include "../examples/config.php";
if(isset($_POST ['submit']))

{
    $project_id = $_POST['project_id'];
    $staff_id = $_POST['staff_id'];
    $staff_name = $_POST['staff_name'];
    $faculty = $_POST['faculty'];
    $st = $_POST['st'];
    $staff_status = $_POST['staff_status'];
    $research_title = $_POST['research_title'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    $duration_project = $_POST['duration_project'];
    $status_project = $_POST['status_project'];
    $project_extension = $_POST['project_extension'];
    $project_extend = $_POST['project_extend'];
    $sponsor_cat = $_POST['sponsor_cat'];
    $sponsor = $_POST['sponsor'];
    $grant_name = $_POST['grant_name'];
    $amt_pledge = $_POST['amt_pledge'];
    $amt_rec = $_POST['amt_rec'];
    $amt_spent = $_POST['amt_spent'];
    $link_evidence = $_POST['link_evidence'];
    $remarks = $_POST['remarks'];

    // Check if staff_id is active
    $check_staff_sql = $conn->prepare("SELECT * FROM `staff` WHERE `staff_id` = ? AND `status` = 'active'");
    if ($check_staff_sql === false) {
        die("Prepare failed: " . $conn->error);
    }
    $check_staff_sql->bind_param('s', $staff_id);
    $check_staff_sql->execute();
    $check_staff_result = $check_staff_sql->get_result();

    if ($check_staff_result->num_rows > 0) {
        // Staff is active, check for duplicates
        $check_duplicate_sql = $conn->prepare("SELECT * FROM `research_project` WHERE `project_id` = ?");
        if ($check_duplicate_sql === false) {
            die("Prepare failed: " . $conn->error);
        }
        $check_duplicate_sql->bind_param('i', $project_id);
        $check_duplicate_sql->execute();
        $check_duplicate_result = $check_duplicate_sql->get_result();

        if ($check_duplicate_result->num_rows == 0) {
            // No duplicates, proceed with the insertion
            $insert_sql = $conn->prepare("INSERT INTO `research_project` (`project_id`, `staff_id`, `staff_name`, `faculty`, `st`, `staff_status`, `research_title`, `start_date`, `end_date`, `duration_project`, `status_project`, `project_extension`, `project_extend`, `sponsor_cat`, `sponsor`, `grant_name`, `amt_pledge`, `amt_rec`, `amt_spent`, `link_evidence`, `remarks`) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
            if ($insert_sql === false) {
                die("Prepare failed: " . $conn->error);
            }
            $insert_sql->bind_param('iisssssssissssssiiiss', 
                $project_id, $staff_id, $staff_name, $faculty, $st, $staff_status, $research_title, 
                $start_date, $end_date, $duration_project, $status_project, $project_extension, 
                $project_extend, $sponsor_cat, $sponsor, $grant_name, $amt_pledge, $amt_rec, $amt_spent, 
                $link_evidence, $remarks
            );

            if ($insert_sql->execute()) {
                echo "<script>alert('New record successfully added');</script>";
                echo "<script>document.location='Research_Project.php';</script>";
            } else {
                echo "<script>alert('Failed to add new record: " . $conn->error . "');</script>";
            }
            $insert_sql->close();
        } else {
            // Duplicate entry found
            echo "<script>alert('Duplicate entry found for the given Project ID');</script>";
        }
        $check_duplicate_sql->close();
    } else {
        // Staff is not active
        echo "<script>alert('Staff ID is not active or does not exist');</script>";
    }

    // Close the prepared statements and the database connection
    $check_staff_sql->close();
    $conn->close();
}
?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Add New Research Project</title>
  <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
  <script src="../../bootstrap/js/jquery.min.js"></script>
  <script src="../../bootstrap/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../../css/navbar.css">
  <link rel="shortcut icon" href="../../images/Logo2.png" type="image/x-icon">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <style>
        .hidden {
            display: none;
        }
    </style>
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

    
    // Function to manage visibility of project extend field based on statusDropdown value
    function manageProjectExtendFieldVisibility() {
        var statusDropdownValue = $('#statusDropdown').val();
        if (statusDropdownValue === 'YES') {
            $('#projectextendField').removeClass('hidden');
        } else {
            $('#projectextendField').addClass('hidden');
        }
    }

    // Initial check to set visibility based on the current value of statusDropdown
    manageProjectExtendFieldVisibility();

    // Listen for changes to the status dropdown to update visibility dynamically
    $('#statusDropdown').on('change', manageProjectExtendFieldVisibility);

    // Date Period Calculation
    const startDateInput = document.getElementById('start_date');
    const endDateInput = document.getElementById('end_date');
    const durationProjectInput = document.getElementById('duration_project');

    function calculatePeriod() {
        const startDate = new Date(startDateInput.value);
        const endDate = new Date(endDateInput.value);

        if (startDate && endDate && startDate <= endDate) {
            const startYear = startDate.getFullYear();
            const startMonth = startDate.getMonth();
            const endYear = endDate.getFullYear();
            const endMonth = endDate.getMonth();

            // Calculate the total months difference
            const monthsDiff = (endYear - startYear) * 12 + (endMonth - startMonth);

            // Set the value in the input field
            durationProjectInput.value = `${monthsDiff} months`;
        } else {
            durationProjectInput.value = '';
        }
    }

    startDateInput.addEventListener('change', calculatePeriod);
    endDateInput.addEventListener('change', calculatePeriod);
});
</script>




</head>
<body>
<div class="container-fluid">
  <div class="container">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h1 class="border-bottom text-center pb-3 mb-4">Add New Research Project Performance</h1>
        </div>
      </div>
      <form action="" method="post">
        <div class="row">
        <div class="col-md-6 mb-3">
            <label class="form-label">PROJECT ID:</label>
            <input type="text" class="form-control" name="project_id" placeholder="Project ID" required>
            <div id="staff-id-error" class="text-danger mt-1" style="display:none;"></div>
          </div>
          <!--Staff ID-->
          <div class="col-md-6 mb-3">
            <label class="form-label">STAFF ID:</label>
            <input type="text" class="form-control" name="staff_id" placeholder="Staff ID" required>
            <div id="staff-id-error" class="text-danger mt-1" style="display:none;"></div>
          </div>
          <!--Staff Name-->
          <div class="col-md-6 mb-3">
            <label class="form-label">STAFF NAME:</label>
            <input type="text" class="form-control" name="staff_name" placeholder="Staff Name" readonly>
          </div>
      
          <div class="col-md-6 mb-3">
            <label class="form-label">FACULTY:</label>
            <input type="text" class="form-control" name="faculty" placeholder="Faculty" readonly>
          </div>
       
          <div class="col-md-6 mb-3">
            <label class="form-label">S&T:</label>
            <select class="form-control" name="st" required>
              <option value="" disabled selected>Choose</option>
              <option value="S&T">S&T</option>
              <option value="NON S&T">NON S&T</option>
            </select>
          </div>
          
          <div class="col-md-6 mb-3">
            <label class="form-label">STAFF STATUS:</label>
            <select class="form-control" name="staff_status" required>
              <option value="" disabled selected>Choose</option>
              <option value="FULL TIME">FULL TIME</option>
              <option value="PART TIME">PART TIME</option>
            </select>
          </div>
          <div class="col-md-6 mb-3">
            <label class="form-label">RESEARCH TITLE:</label>
            <input type="text" class="form-control" name="research_title" placeholder="Research Title" required>
          </div>
          <div class="col-md-6 mb-3">
            <label class="form-label">START DATE:</label>
            <input type="date" class="form-control" id="start_date" name="start_date" placeholder="Start Date" required>
          </div>
          <div class="col-md-6 mb-3">
            <label class="form-label">END DATE:</label>
            <input type="date" class="form-control" id="end_date"  name="end_date" placeholder="End Date" required>
          </div>
        
          <div class="col-md-6 mb-3">
            <label class="form-label">DURATION OF PROJECT:</label>
            <input type="text" class="form-control" id="duration_project" name="duration_project" placeholder="Duration Project" readonly required>
          </div>
          <div class="col-md-6 mb-3">
            <label class="form-label">STATUS PROJECT:</label>
            <select class="form-control" name="status_project" required>
              <option value="" disabled selected>Choose</option>
              <option value="COMPLETE">COMPLETE</option>
              <option value="ONGOING">ONGOING</option>
            </select>
          </div>
          <div class="col-md-6 mb-3">
            <label class="form-label">PROJECT WITH EXTENSION:</label>
            <select class="form-control" id="statusDropdown" name="project_extension" required>
              <option value="" disabled selected>Choose</option>
              <option value="YES">YES</option>
              <option value="NO">NO</option>
            </select>
          </div>

          <div class="col-md-6 mb-3"  id="projectextendField">
            <label class="form-label">IF PROJECT EXTENDED INSERT COMPLETE:</label>
            <input type="text" class="form-control" name="project_extend" placeholder="Project Extend">
          </div>
          <div class="col-md-6 mb-3">
            <label class="form-label">SPONSOR CATEGORY:</label>
            <select class="form-control" name="sponsor_cat" required>
              <option value="" disabled selected>Choose</option>
              <option value="UNIVERSITY">UNIVERSITY</option>
              <option value="NATIONAL">NATIONAL</option>
              <option value="PRIVATE">PRIVATE</option>
            </select>
          </div>
          <div class="col-md-6 mb-3">
            <label class="form-label">SPONSOR :</label>
            <input type="text" class="form-control" name="sponsor" placeholder="Sponsor" required>
          </div>
      

          <div class="col-md-6 mb-3">
            <label class="form-label">GRANT NAME:</label>
            <input type="text" class="form-control" name="grant_name" placeholder="Grant Name" required>
          </div>

          <div class="col-md-6 mb-3">
            <label class="form-label">AMOUNT PLEDGE(APPROVED):</label>
            <input type="text" class="form-control" name="amt_pledge" placeholder="Amount Pledge" >
          </div>

          <div class="col-md-6 mb-3">
            <label class="form-label">AMOUNT RECEIVED IN THE YEAR:</label>
            <input type="text" class="form-control" name="amt_rec" placeholder="Amount Received" >
          </div>
          <div class="col-md-6 mb-3">
            <label class="form-label">AMOUNT SPENT IN THE YEAR:</label>
            <input type="text" class="form-control" name="amt_spent" placeholder="Amount Spent" >
          </div>
       
          <div class="col-md-6 mb-3">
            <label class="form-label">LINK TO EVIDENCE:</label>
            <input type="text" class="form-control" name="link_evidence" placeholder="Link Evidence">
          </div>
    
          <!--Remarks-->
          <div class="col-md-6 mb-3">
            <label class="form-label">REMARKS:</label>
            <input type="text" class="form-control" name="remarks" placeholder="Remarks" >
          </div>
      
          <!--Button-->
          <div class="col-md-12 mb-3 text-center">
            <button type="submit" class="btn btn-primary" name="submit">ADD</button>
            <a href="Research_Project.php" class="btn btn-success">View Project Performance</a>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
</body>
</html>
