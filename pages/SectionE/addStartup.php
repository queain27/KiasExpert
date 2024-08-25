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
  $regis_comp = $_POST['regis_comp'];
  $comp_name = $_POST['comp_name'];
  $date_corp = $_POST['date_corp'];
  $equity = $_POST['equity'];
  $desc_research = $_POST['desc_research'];
  $link = $_POST['link'];
  $remarks = $_POST['remarks'];

  // Check if staff_id is active
  $check_staff_sql = mysqli_query($conn, "SELECT * FROM `staff` WHERE `staff_id` = '$staff_id' AND `status` = 'active'");
  
  if(mysqli_num_rows($check_staff_sql) > 0) {
    // Staff is active, check for duplicates
    $check_duplicate_sql = mysqli_query($conn, "SELECT * FROM `spinn_off` WHERE `project_id` = '$project_id' AND `staff_id` = '$staff_id'");
    
    if(mysqli_num_rows($check_duplicate_sql) == 0) {
      // No duplicates, proceed with the insertion
      $sql = mysqli_query($conn, "INSERT INTO `spinn_off` (`project_id`, `staff_id`, `staff_name`, `regis_comp`, `comp_name`, `date_corp`, `equity`, `desc_research`, `link`,`remarks`) 
      VALUES ('$project_id', '$staff_id', '$staff_name', '$regis_comp', '$comp_name','$date_corp','$equity','$desc_research', '$link', '$remarks')");

      if($sql) {
        echo "<script>alert('New record successfully added');</script>";
        echo "<script>document.location='Startup.php';</script>";
      } else {
        echo "<script>alert('Failed to add new record');</script>";
      }
    } else {
      // Duplicate entry found
      echo "<script>alert('Duplicate entry found for the given Staff ID and spinn_off ID');</script>";
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
  <title>Add New Startup</title>
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
         <?php
        require "../../crudheader.php";
        createHeader('fa fa-briefcase', 'Add New Startup', 'Add Startup');
      ?>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h1 class="border-bottom center pb-3 mb-4" style="text-align: center;">Add Startup</h1>
          </div>
        </div>

        <form action=" " method="post">
        <div class="row">
          <!--PROJECT ID / NO.-->
          <div class="col-md-6 mb-3">
            <label class="form-label">PROJECT ID / NO.:</label>
            <input type="text" class="form-control" name="project_id" placeholder="PROJECT ID / NO." required>
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

          <!--COMPANY REGISTRATION NO-->
          <div class="col-md-6 mb-3">
            <label class="form-label">COMPANY REGISTRATION NO:</label>
            <input type="text" class="form-control" name="regis_comp" placeholder="Company Regis Number" required>
          </div>

          <!--NAME COMPANY-->
          <div class="col-md-6 mb-3">
            <label class="form-label">NAME OF COMPANY:</label>
            <input type="text" class="form-control" name="comp_name" placeholder="Company Name" required>
          </div>

          <!--Date Incorporated-->
          <div class="col-md-6 mb-3">
            <label class="form-label">DATE INCORPORATED:</label>
            <input type="date" class="form-control" name="date_corp" placeholder="Date Incorporated" required>
          </div>

          <!--EQUITY (%)-->
          <div class="col-md-6 mb-3">
            <label class="form-label">EQUITY (%):</label>
            <input type="number" class="form-control" name="equity" placeholder="Equity" required>
          </div>

         <!--DESCRIPTION OF RESEARCH INNOVATION-->
          <div class="col-md-6 mb-3">
            <label class="form-label">DESCRIPTION OF RESEARCH INNOVATION:</label>
            <input type="text" class="form-control" name="desc_research" placeholder="Desc Innovation" required>
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
            <a href="Startup.php" class="btn btn-success">View Techology</a>
            </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

</body>
</html>
