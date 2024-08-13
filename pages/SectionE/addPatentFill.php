<?php
include "../examples/config.php";

if(isset($_POST['submit'])) {
  $fill_id = $_POST['fill_id'];
  $staff_id = $_POST['staff_id'];
  $staff_name = $_POST['staff_name'];
  $fill_name = $_POST['fill_name'];
  $date_filed = $_POST['date_filed'];
  $country = $_POST['country'];
  $faculty = $_POST['faculty'];
  $link = $_POST['link'];
  $remarks = $_POST['remarks'];

  // Check if staff_id is active
  $check_staff_sql = mysqli_query($conn, "SELECT * FROM `staff` WHERE `staff_id` = '$staff_id' AND `status` = 'active'");
  
  if(mysqli_num_rows($check_staff_sql) > 0) {
    // Staff is active, check for duplicates
    $check_duplicate_sql = mysqli_query($conn, "SELECT * FROM `patent_filed` WHERE `fill_id` = '$fill_id' AND `staff_id` = '$staff_id'");
    
    if(mysqli_num_rows($check_duplicate_sql) == 0) {
      // No duplicates, proceed with the insertion
      $sql = mysqli_query($conn, "INSERT INTO `patent_filed` (`fill_id`, `staff_id`, `staff_name`, `fill_name`, `date_filed`, `country`, `faculty`, `link`,`remarks`) 
      VALUES ('$fill_id', '$staff_id', '$staff_name', '$fill_name', '$date_filed', '$country', '$faculty',  '$link', '$remarks')");

      if($sql) {
        echo "<script>alert('New record successfully added');</script>";
        echo "<script>document.location='Patent_Filled.php';</script>";
      } else {
        echo "<script>alert('Failed to add new record');</script>";
      }
    } else {
      // Duplicate entry found
      echo "<script>alert('Duplicate entry found for the given Staff ID and Filing ID');</script>";
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
  <title>Add New Patent Filled</title>
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
                        $('input[name="country"]').val('');
                        $('select[name="faculty"]').val('');
                        $('button[name="submit"]').prop('disabled', true);
                    } else {
                        $('#staff-id-error').hide();
                        $('input[name="staff_name"]').val(response.staff_name);
                        $('input[name="country"]').val(response.country);
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
            $('input[name="country"]').val('');
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
      <?php
        require "../header.php";
        createHeader('fa fa-briefcase', 'Add New Patent Filled', 'Add Patent Filled');
      ?>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h1 class="border-bottom center pb-3 mb-4" style="text-align: center;">Add Patent Filled</h1>
          </div>
        </div>

        <form action=" " method="post">
        <div class="row">
          <!--patent_filed ID-->
          <div class="col-md-6 mb-3">
            <label class="form-label">FILL ID/NO:</label>
            <input type="text" class="form-control" name="fill_id" placeholder="patent_filed ID" required>
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
          <!--fill_name Name-->
          <div class="col-md-6 mb-3">
            <label class="form-label">FILING NAME:</label>
            <input type="text" class="form-control" name="fill_name" placeholder="Fill Name" required>
          </div>
          <!--Date Filled-->
          <div class="col-md-6 mb-3">
            <label class="form-label">DATE FILLED:</label>
            <input type="date" class="form-control" name="date_filed" required>
          </div>
          <!--Country-->
          <div class="col-md-6 mb-3">
            <label class="form-label">COUNTRY:</label>
            <input type="text" class="form-control" name="country" placeholder="Country"  readonly>
          </div>
        <!--Faculty-->
          <div class="col-md-6 mb-3">
            <label class="form-label">FACULTY:</label>
            <select class="form-control" name="faculty"  readonly>
              <option value="" disabled selected>Faculty</option>
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
            <a href="patent_Filled.php" class="btn btn-success">View patent_filed Filled</a>
            </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

</body>
</html>

