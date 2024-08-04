<?php
include "../examples/config.php";

if(isset($_POST['submit'])) {
  $reference_no = $_POST['reference_no'];
  $staff_id = $_POST['staff_id'];
  $staff_name = $_POST['staff_name'];
  $faculty = $_POST['faculty'];
  $tittle = $_POST['tittle'];
  $client_name = $_POST['client_name'];
  $start_date = $_POST['start_date'];
  $end_date = $_POST['end_date'];
  $gross_income = $_POST['gross_income'];
  $link = $_POST['link'];
  $remarks = $_POST['remarks'];

  // Check if staff_id is active
  $check_staff_sql = mysqli_query($conn, "SELECT * FROM `staff` WHERE `staff_id` = '$staff_id' AND `status` = 'active'");
  
  if(mysqli_num_rows($check_staff_sql) > 0) {
    // Staff is active, check for duplicates
    $check_duplicate_sql = mysqli_query($conn, "SELECT * FROM `consultancies` WHERE `reference_no` = '$reference_no' AND `staff_id` = '$staff_id'");
    
    if(mysqli_num_rows($check_duplicate_sql) == 0) {
      // No duplicates, proceed with the insertion
      $sql = mysqli_query($conn, "INSERT INTO `consultancies` (`reference_no`, `staff_id`, `staff_name`,`faculty`, `tittle`, `client_name`, `start_date`, `end_date`, `gross_income`, `link`,`remarks`) 
      VALUES ('$reference_no', '$staff_id', '$staff_name','$faculty', '$tittle', '$client_name',  '$start_date', '$end_date', '$gross_income', '$link', '$remarks')");

      if($sql) {
        echo "<script>alert('New record successfully added');</script>";
        echo "<script>document.location='Consultancies.php';</script>";
      } else {
        echo "<script>alert('Failed to add new record');</script>";
      }
    } else {
      // Duplicate entry found
      echo "<script>alert('Duplicate entry found for the given Staff ID and REFERENCE NUMBER');</script>";
    }
  } else {
    // Staff is not active
    echo "<script>alert('Staff ID is does not exist');</script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Add New consultancies</title>
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
                        $('select[name="faculty"]').val('');
                        $('button[name="submit"]').prop('disabled', true);
                    } else {
                        $('#staff-id-error').hide();
                        $('input[name="staff_name"]').val(response.staff_name);
                        $('select[name="faculty"]').val(response.faculty);
                        $('button[name="submit"]').prop('disabled', false);
                    }
                },
                error: function(xhr, status, error) {
                    console.error("AJAX Error:", status, error);
                }
            });
        } else {
            $('input[name="staff_name"]').val('');
            $('select[name="faculty"]').val('');
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
          <h1 class="border-bottom text-center pb-3 mb-4">Add New consultancies</h1>
        </div>
      </div>
      <form action="" method="post">
        <div class="row">
          <!--REFERENCE NUMBER-->
          <div class="col-md-6 mb-3">
            <label class="form-label">REFERENCE NUMBER:</label>
            <input type="text" class="form-control" name="reference_no" placeholder="REFERENCE NUMBER" required>
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

        <!--Faculty-->
          <div class="col-md-6 mb-3">
            <label class="form-label">FACULTY:</label>
            <select class="form-control" name="faculty"  readonly required>
              <option value="" disabled selected>Choose Faculty</option>
              <option value='Al-Quran & Hadis'>Al-Quran & Hadis</option>
              <option value='Dakwah & Pembangunan Insan'>Dakwah & Pembangunan Insan</option>
              <option value='Pengurusan Al-Syariah'>Pengurusan Al-Syariah</option>
              <option value='Pengajian Bahasa Arab'>Pengajian Bahasa Arab</option>
              <option value='Pengajian Muamalat'>Pengajian Muamalat</option>
              <option value='Pengajian Pendidikan Islam'>Pengajian Pendidikan Islam</option>
              <option value='Pusat Pengajian Teras'>Pusat Pengajian Teras</option>
              <option value='Pengurusan Usuluddin'>Pengurusan Usuluddin</option>
              <option value='Teknologi Maklumat & Multimedia'>Teknologi Maklumat & Multimedia</option>
            </select>
          </div>

          <!--CONSULTANCY TITLE-->
          <div class="col-md-6 mb-3">
            <label class="form-label">CONSULTANCY TITLE:</label>
            <input type="text" class="form-control" name="tittle" placeholder="CONSULTANCY TITLE" required>
          </div> 
          
          <!--CLIENT / STAKEHOLDER-->
          <div class="col-md-6 mb-3">
            <label class="form-label">CLIENT / STAKEHOLDER:</label>
            <input type="text" class="form-control" name="client_name" placeholder="CLIENT / STAKEHOLDER" required>
          </div>
          <!--START DATE-->
          <div class="col-md-6 mb-3">
            <label class="form-label">START DATE:</label>
            <input type="date" class="form-control" name="start_date" required>
          </div>
          <!--END DATE-->
          <div class="col-md-6 mb-3">
            <label class="form-label">END DATE:</label>
            <input type="date" class="form-control" name="end_date" required>
          </div>

          <!--GROSS INCOME GENERATED (RM)-->
          <div class="col-md-6 mb-3">
            <label class="form-label">GROSS INCOME GENERATED (RM):</label>
            <input type="text" class="form-control" name="gross_income" placeholder="GROSS INCOME GENERATED (RM)" required>
          </div>

          <!--Link-->
          <div class="col-md-6 mb-3">
            <label class="form-label">HYPERLINK:</label>
            <input type="text" class="form-control" name="link" placeholder="Hyperlink" required>
          </div>
          <!--Remarks-->
          <div class="col-md-6 mb-3">
            <label class="form-label">REMARKS:</label>
            <input type="text" class="form-control" name="remarks" placeholder="Remarks" required>
          </div>
          <!--Button-->
          <div class="col-md-12 mb-3 text-center">
            <button type="submit" class="btn btn-primary" name="submit">ADD</button>
            <a href="Consultancies.php" class="btn btn-success">View consultancies Granted</a>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
</body>
</html>
