<?php
include "../examples/config.php";

if(isset($_POST['submit'])) {
  $tech_id = $_POST['tech_id'];
  $staff_id = $_POST['staff_id'];
  $staff_name = $_POST['staff_name'];
  $tech_name = $_POST['tech_name'];
  $type = $_POST['type'];
  $start_date = $_POST['start_date'];
  $end_date = $_POST['end_date'];
  $date_achv = $_POST['date_achv'];
  $licensing = $_POST['licensing'];
  $gross_incom = $_POST['gross_incom'];
  $link = $_POST['link'];
  $remarks = $_POST['remarks'];

  // Check if staff_id is active
  $check_staff_sql = mysqli_query($conn, "SELECT * FROM `staff` WHERE `staff_id` = '$staff_id' AND `status` = 'active'");
  
  if(mysqli_num_rows($check_staff_sql) > 0) {
    // Staff is active, check for duplicates
    $check_duplicate_sql = mysqli_query($conn, "SELECT * FROM `know_licen` WHERE `tech_id` = '$tech_id' AND `staff_id` = '$staff_id'");
    
    if(mysqli_num_rows($check_duplicate_sql) == 0) {
      // No duplicates, proceed with the insertion
      $sql = mysqli_query($conn, "INSERT INTO `know_licen` (`tech_id`, `staff_id`, `staff_name`, `tech_name`, `type`, `start_date`, `end_date`, `date_achv`, `licensing`, `gross_incom`, `link`,`remarks`) 
      VALUES ('$tech_id', '$staff_id', '$staff_name', '$tech_name', '$type', '$start_date', '$end_date', '$date_achv', '$licensing', '$gross_incom', '$link', '$remarks')");

      if($sql) {
        echo "<script>alert('New record successfully added');</script>";
        echo "<script>document.location='Technology.php';</script>";
      } else {
        echo "<script>alert('Failed to add new record');</script>";
      }
    } else {
      // Duplicate entry found
      echo "<script>alert('Duplicate entry found for the given Staff ID and know_licen ID');</script>";
    }
  } else {
    // Staff is not active
    echo "<script>alert('Staff ID is not active or does not exist');</script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Add New Technology Know</title>
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
                url: 'fetchstaffname.php',
                data: { staff_id: staff_id },
                dataType: 'json',
                success: function(response) {
                    if (response.error) {
                        $('#staff-id-error').text(response.error).show();
                        $('input[name="staff_name"]').val('');
                        $('button[name="submit"]').prop('disabled', true);
                    } else {
                        $('#staff-id-error').hide();
                        $('input[name="staff_name"]').val(response.staff_name);
                        $('button[name="submit"]').prop('disabled', false);
                    }
                },
                error: function(xhr, status, error) {
                    console.error("AJAX Error:", status, error);
                }
            });
        } else {
            $('input[name="staff_name"]').val('');
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
          <h1 class="border-bottom text-center pb-3 mb-4">Add New Technology</h1>
        </div>
      </div>
      <form action="" method="post">
        <div class="row">
          <!--TECHNOLGY ID / NO-->
          <div class="col-md-6 mb-3">
            <label class="form-label">TECHNOLOGY ID / NO:</label>
            <input type="text" class="form-control" name="tech_id" placeholder="TECHNOLOGY ID / NO" required>
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
            <input type="text" class="form-control" name="staff_name" placeholder="Staff Name" readonly required>
          </div>
          <!--NAME OF TECHNOLOGY-->
          <div class="col-md-6 mb-3">
            <label class="form-label">NAME OF TECHNOLOGY:</label>
            <input type="text" class="form-control" name="tech_name" placeholder="Technology Name" required>
          </div>

        <!--type-->
          <div class="col-md-6 mb-3">
            <label class="form-label">TYPE (LICENSED /OUTRIGHT ) :</label>
            <select class="form-control" name="type" required>
              <option value="" disabled selected>Choose Type</option>
              <option value="Licensed">Licensed</option>
              <option value="Outright">Outright</option>
          </select>
          </div>

             <!--START DATE-->
             <div class="col-md-6 mb-3">
            <label class="form-label">START DATE:</label>
            <input type="date" class="form-control" name="start_date" required>
          </div>

          <!--Date Achieved-->
          <div class="col-md-6 mb-3">
            <label class="form-label">END DATE:</label>
            <input type="date" class="form-control" name="end_date" required>
          </div>

          <!--Date Achieved-->
          <div class="col-md-6 mb-3">
            <label class="form-label">DATE THRESHOLD ACHIEVED (RM 10 000):</label>
            <input type="date" class="form-control" name="date_achv" required>
          </div>

          <!--Licen-->
          <div class="col-md-6 mb-3">
            <label class="form-label">LICENSEE:</label>
            <input type="text" class="form-control" name="licensing" placeholder="Licensing" required>
          </div>

          <!--Gross Income-->
          <div class="col-md-6 mb-3">
            <label class="form-label">GROSS INCOME (RM):</label>
            <input type="number" class="form-control" name="gross_incom" placeholder="Gross Income" required>
          </div>

          <!--link-->
          <div class="col-md-6 mb-3">
            <label class="form-label"> LINK TO EVIDENCE:</label>
            <input type="text" class="form-control" name="link" placeholder="link" required>
          </div>

          <!--Remarks-->
          <div class="col-md-6 mb-3">
            <label class="form-label">REMARKS:</label>
            <input type="text" class="form-control" name="remarks" placeholder="Remarks" required>
          </div>

          <!--Button-->
          <div class="col-md-12 mb-3 text-center">
            <button type="submit" class="btn btn-primary" name="submit">ADD</button>
            <a href="Technology.php" class="btn btn-success">View Techology</a>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
</body>
</html>
