<?php
include "../examples/config.php";

if(isset($_POST['submit'])) {
  $reference_no = $_POST['reference_no'];
  $matric_no = $_POST['matric_no'];
  $student_name = $_POST['student_name'];
  $prog_code = $_POST['prog_code'];
  $study_mode = $_POST['study_mode'];
  $aca_year = $_POST['aca_year'];
  $payment_date = $_POST['payment_date'];
  $faculty = $_POST['faculty'];
  $gross_income = $_POST['gross_income'];
  $link = $_POST['link'];
  $remarks = $_POST['remarks'];

  // Check if matric_no is research
  $check_student_sql = mysqli_query($conn, "SELECT * FROM `pg_student` WHERE `matric_no` = '$matric_no' AND `study_mode` = 'research'");
  
  if(mysqli_num_rows($check_student_sql) > 0) {
    // Student is research, check for duplicates
    $check_duplicate_sql = mysqli_query($conn, "SELECT * FROM `post_fee` WHERE `reference_no` = '$reference_no' AND `matric_no` = '$matric_no'");
    
    if(mysqli_num_rows($check_duplicate_sql) == 0) {
      // No duplicates, proceed with the insertion
      $sql = mysqli_query($conn, "INSERT INTO `post_fee` (`reference_no`, `matric_no`, `student_name`, `prog_code`, `study_mode`, `aca_year`, `payment_date`, `faculty`, `gross_income`, `link`,`remarks`) 
      VALUES ('$reference_no', '$matric_no', '$student_name', '$prog_code', '$study_mode', '$aca_year', '$payment_date', '$faculty', '$gross_income', '$link', '$remarks')");

      if($sql) {
        echo "<script>alert('New record successfully added');</script>";
        echo "<script>document.location='Post_Fees.php';</script>";
      } else {
        echo "<script>alert('Failed to add new record');</script>";
      }
    } else {
      // Duplicate entry found
      echo "<script>alert('Duplicate entry found for the given Matric No and Reference Number');</script>";
    }
  } else {
    // Matric Not Research Mode
    echo "<script>alert('Matric Number is not research mode or does not exist');</script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Add New Postgraduate Fees</title>
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
    $('input[name="matric_no"]').on('change', function() {
        var matric_no = $(this).val();
        if (matric_no) {
            $.ajax({
                type: 'POST',
                url: 'fetchstud.php',
                data: { matric_no: matric_no },
                dataType: 'json',
                success: function(response) {
                    if (response.error) {
                        $('#matric-no-error').text(response.error).show();
                        $('input[name="student_name"]').val('');
                        $('input[name="aca_year"]').val('');
                        $('input[name="prog_code"]').val('');
                        $('select[name="study_mode"]').val('');
                        $('select[name="faculty"]').val('');
                        $('button[name="submit"]').prop('disabled', true);
                    } else {
                        $('#matric-no-error').hide();
                        $('input[name="student_name"]').val(response.student_name);
                        $('input[name="aca_year"]').val(response.aca_year);
                        $('input[name="prog_code"]').val(response.prog_code);
                        $('select[name="study_mode"]').val(response.study_mode);
                        $('select[name="faculty"]').val(response.faculty);
                        $('button[name="submit"]').prop('disabled', false);
                    }
                },
                error: function(xhr, status, error) {
                    console.error("AJAX Error:", status, error);
                }
            });
        } else {
            $('input[name="student_name"]').val('');
            $('input[name="aca_year"]').val('');
            $('input[name="prog_code"]').val('');
            $('select[name="study_mode"]').val('');
            $('select[name="faculty"]').val('');
            $('#matric-no-error').hide();
            $('button[name="submit"]').prop('disabled', false);
        }
    });

    // Optionally, you can also disable the submit button initially if matric_no is empty
    if (!$('input[name="matric_no"]').val()) {
        $('button[name="submit"]').prop('disabled', true);
    }
});
</script>
</head>
<body>  <div class="container-fluid">
    <div class="container">
      <?php
        require "../header.php";
        createHeader('fa fa-briefcase', 'Add New Postgraduate Fees', 'Add Postgraduate Fees');
      ?>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h1 class="border-bottom center pb-3 mb-4" style="text-align: center;">Add Postgraduate Fees</h1>
          </div>
        </div>

        <form action=" " method="post">
        <div class="row">
          <!--REFERENCE NO-->
          <div class="col-md-6 mb-3">
            <label class="form-label">REFERENCE NO:</label>
            <input type="text" class="form-control" name="reference_no" placeholder="REFERENCE NO" required>
          </div>
          <!--MATRIC NUMBER-->
          <div class="col-md-6 mb-3">
            <label class="form-label">MATRIC NUMBER:</label>
            <input type="text" class="form-control" name="matric_no" placeholder="MATRIC NUMBER" required>
            <div id="matric-no-error" class="text-danger mt-1" style="display:none;"></div>
          </div>
          <!--STUDENT NAME-->
          <div class="col-md-6 mb-3">
            <label class="form-label">STUDENT NAME:</label>
            <input type="text" class="form-control" name="student_name" placeholder="STUDENT NAME" readonly>
          </div>
          <!--PROGRAM CODE-->
          <div class="col-md-6 mb-3">
            <label class="form-label">PROGRAM CODE:</label>
            <input type="text" class="form-control" name="prog_code" placeholder="PROGRAM CODE" readonly>
          </div>
          
          <!--MODE-->
          <div class="col-md-6 mb-3">
            <label class="form-label">STUDY MODE:</label>
              <select class="form-control" name="study_mode"  readonly>                
              <option value="" disabled selected>Choose Status Mode</option>
                <option value="Research">Research</option>
                <option value="Mix Mode">Mix Mode</option>
                <option value="Course Work">Course Work</option>
          </select>
          </div>

          <!--ACADEMIC YEAR-->
          <div class="col-md-6 mb-3">
            <label class="form-label">ACADEMIC YEAR:</label>
            <input type="text" class="form-control" name="aca_year"readonly>
          </div>

          <!--PAYMENT DATE-->
          <div class="col-md-6 mb-3">
            <label class="form-label">PAYMENT DATE:</label>
            <input type="date" class="form-control" name="payment_date" placeholder="PAYMENT DATE"required>
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

          <!--GROSS INCOME GENERATE (RM)-->
          <div class="col-md-6 mb-3">
            <label class="form-label">GROSS INCOME GENERATE (RM):</label>
            <input type="text" class="form-control" name="gross_income" placeholder="GROSS INCOME GENERATE (RM)" required>
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
            <a href="Post_Fees.php" class="btn btn-success">View Postgraduate Fees</a>
            </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

</body>
</html>
