<?php
session_start();

if(!isset($_SESSION['user_id']))

{
    header('Location: ../examples/login.php'); 
    exit;
}
include "../examples/config.php";
$project_id = $_GET['ID'];

if (isset($_POST['submit'])) { 
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

  // Prepare the SQL statement
  $stmt = $conn->prepare("UPDATE research_grant SET 
    staff_id = ?, 
    staff_name = ?, 
    faculty = ?, 
    st = ?, 
    staff_status = ?, 
    research_title = ?, 
    start_date = ?, 
    end_date = ?, 
    duration_project = ?, 
    status_project = ?, 
    project_extension = ?, 
    project_extend = ?, 
    sponsor_cat = ?, 
    sponsor = ?, 
    grant_name = ?, 
    amt_pledge = ?, 
    amt_rec = ?, 
    amt_spent = ?, 
    link_evidence = ?, 
    remarks = ? 
    WHERE project_id = ?");

  // Bind the parameters
  $stmt->bind_param("issssssssssssssiiissi",
    $staff_id,
    $staff_name,
    $faculty,
    $st,
    $staff_status,
     $research_title,
     $start_date,
     $end_date,
     $duration_project,
     $status_project, 
     $project_extension,
     $project_extend,
     $sponsor_cat, 
    $sponsor, 
    $grant_name, 
    $amt_pledge, 
    $amt_rec, 
    $amt_spent, 
    $link_evidence, 
    $remarks, 
    $project_id);

  // Execute the statement
  if ($stmt->execute()) {
    echo "<script>alert('New record successfully updated');</script>";
    echo "<script>document.location='Research_Grant.php';</script>";
  } else {
    echo "<script>alert('Something went wrong');</script>";
  }

  $stmt->close();
  $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Research Grant Information</title>
    <style>
        body {
            background-repeat:            no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }

      
        .hidden {
            display: none;
        }
   
    </style>
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
    <script src="../../bootstrap/js/jquery.min.js"></script>
    <script src="../../bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
        integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../css/navbar.css">
    <link rel="shortcut icon" href="../../images/Logo2.png" type="image/x-icon">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
    $(document).ready(function() {
        
    /// Function to manage visibility and clear data of project extend field based on statusDropdown value
    function manageProjectExtendFieldVisibility() {
        var statusDropdownValue = $('#statusDropdown').val();
        if (statusDropdownValue === 'YES') {
            $('#projectextendField').removeClass('hidden');
        } else {
            $('#projectextendField').addClass('hidden');
            $('input[name="project_extend"]').val(''); // Clear the input field
        }
    }

    // Initial check to set visibility and clear data based on the current value of statusDropdown
    manageProjectExtendFieldVisibility();

    // Listen for changes to the status dropdown to update visibility and clear data dynamically
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
    <div class="container">
        <div class="text-center mb-4">
            <b><p>Click Update After Finish Changing Information</p></b>
        </div>

       
        <?php 
        $sql = "SELECT * FROM `research_grant` WHERE project_id= $project_id LIMIT 1";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        ?>

        <div class="container d-flex justify-content-center">
            <form action="" method="post" style="width:50vw; min-width:300px;">
                <div class="row">
                        <!-- Staff ID -->
                        <div class="col-md-6 mb-3">
                        <label class="form-label">PROJECT ID:</label>
                        <input type="text" class="form-control" name="project_id" value="<?php echo $row['project_id']?>" >
                       </div>
                  
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
                        <label class="form-label">FACULTY:</label>
                        <input type="text" class="form-control" name="faculty" value="<?php echo $row['faculty']?>">
                    </div>


                    <div class="col-md-6 mb-3">
                    <label class="form-label">S&T:</label>
                    <select class="form-control" name="st" required>
                            <option value="" disabled selected>Choose</option>
                            <option value="S&T" <?php if ($row['st'] == 'S&T') echo 'selected'; ?>>S&T</option>
                            <option value="NON S&T" <?php if ($row['st'] == 'NON S&T') echo 'selected'; ?>>NON S&T</option>
                    </select>
                    </div>

                 
                    <div class="col-md-6 mb-3">
                    <label class="form-label">STAFF STATUS:</label>
                    <select class="form-control" name="staff_status" required>
                            <option value="" disabled selected>Choose</option>
                            <option value="FULL TIME" <?php if ($row['staff_status'] == 'FULL TIME') echo 'selected'; ?>>FULL TIME</option>
                            <option value="PART TIME" <?php if ($row['staff_status'] == 'PART TIME') echo 'selected'; ?>>PART TIME</option>
                    </select>
                    </div>

    
                    <div class="col-md-6 mb-3">
                        <label class="form-label">RESEARCH TITLE:</label>
                        <input type="text" class="form-control" name="research_title" value="<?php echo $row['research_title']?>">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label"> START DATE :</label>
                        <input type="date" class="form-control" id="start_date" name="start_date" value="<?php echo $row['start_date']?>">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">END DATE:</label>
                        <input type="date" class="form-control"  id="end_date" name="end_date" value="<?php echo $row['end_date']?>">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">DURATION PROJECT:</label>
                        <input type="text" class="form-control" id="duration_project" name="duration_project" value="<?php echo $row['duration_project']?>">
                    </div>

                    <div class="col-md-6 mb-3">
                    <label class="form-label">STATUS PROJECT:</label>
                    <select class="form-control" name="status_project" required>
                            <option value="" disabled selected>Choose</option>
                            <option value="COMPLETE" <?php if ($row['status_project'] == 'COMPLETE') echo 'selected'; ?>>COMPLETE</option>
                            <option value="ONGOING" <?php if ($row['status_project'] == 'ONGOING') echo 'selected'; ?>>ONGOING</option>
                    </select>
                    </div>
                        <div class="col-md-6 mb-3">
                        <label class="form-label">PROJECT WITH EXTENSION:</label>
                        <select class="form-control" id="statusDropdown" name="project_extension" required>
                            <option value="" disabled selected>Choose</option>
                            <option value="YES" <?php if ($row['project_extension'] == 'YES') echo 'selected'; ?>>YES</option>
                            <option value="NO" <?php if ($row['project_extension'] == 'NO') echo 'selected'; ?>>NO</option>
                        </select>
                         </div>

                        <div class="col-md-6 mb-3 hidden" id="projectextendField">
                        <label class="form-label">IF PROJECT EXTENDED INSERT COMPLETE:</label>
                        <input type="text" class="form-control" name="project_extend" value="<?php echo htmlspecialchars($row['project_extend']); ?>">
                         </div>

 
                    <div class="col-md-6 mb-3">
                    <label class="form-label">SPONSOR CATEGORY:</label>
                    <select class="form-control" name="sponsor_cat" required>
                            <option value="" disabled selected>Choose</option>
                            <option value="UNIVERSITY" <?php if ($row['sponsor_cat'] == 'UNIVERSITY') echo 'selected'; ?>>UNIVERSITY</option>
                            <option value="NATIONAL" <?php if ($row['sponsor_cat'] == 'NATIONAL') echo 'selected'; ?>>NATIONAL</option>
                            <option value="PRIVATE" <?php if ($row['sponsor_cat'] == 'PRIVATE') echo 'selected'; ?>>PRIVATE</option>
                    </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">SPONSOR:</label>
                        <input type="text" class="form-control" name="sponsor" value="<?php echo $row['sponsor']?>">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">GRANT NAME:</label>
                        <input type="text" class="form-control" name="grant_name" value="<?php echo $row['grant_name']?>">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">AMOUNT PLEDGE (APPROVED):</label>
                        <input type="text" class="form-control" name="amt_pledge" value="<?php echo $row['amt_pledge']?>">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">AMOUNT RECEIVE IN THE YEAR :</label>
                        <input type="text" class="form-control" name="amt_rec" value="<?php echo $row['amt_rec']?>">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">AMOUNT SPENT IN THE YEAR:</label>
                        <input type="text" class="form-control" name="amt_spent" value="<?php echo $row['amt_spent']?>">
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
                       <a href="Research_Grant.php" class="btn btn-danger">Cancel</a>
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


