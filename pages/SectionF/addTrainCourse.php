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
   $reference_no = $_POST['reference_no'];
   $coordinator_name = $_POST['coordinator_name'];
   $faculty = $_POST['faculty'];
   $training_course_title = $_POST['training_course_title'];
   $venue= $_POST['venue'];
   $start_date = $_POST['start_date'];
   $end_date = $_POST['end_date'];
   $gross_income_generated = $_POST['gross_income_generated'];
   $link = $_POST['link'];
   $remarks = $_POST['remarks'];
   
 $sql = mysqli_query($conn, "INSERT INTO training_courses (reference_no, coordinator_name, venue, training_course_title, faculty, gross_income_generated, start_date, end_date, link,remarks)
        VALUES ('$reference_no','$coordinator_name','$venue','$training_course_title', '$faculty','$gross_income_generated','$start_date', '$end_date', '$link','$remarks')");
    
    if($sql)
    {
       echo "<script>alert('New record successsfully addedd');</script>";
       echo "<script>document.location=Training_Course.php';</script>";
    }

    else
    { 
      echo "<script>alert('Something Wrong or Reference Number Already Exists );</script>";

    }
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Add New Training Course</title>
  <style>
    * body {
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: cover;
    }
  </style>
  <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
  <script src="../../bootstrap/js/jquery.min.js"></script>
  <script src="../../bootstrap/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../../css/navbar.css">
  <link rel="shortcut icon" href="../../images/Logo2.png" type="image/x-icon">
</head>

<body>

  <div class="container-fluid">
    <div class="container">
         <?php
        require "../../crudheader.php";
        createHeader('fa fa-briefcase', 'Add New Training', 'Add Training');
      ?>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h1 class="border-bottom center pb-3 mb-4" style="text-align: center;">Add Training</h1>
          </div>
        </div>

        <form action=" " method="post">
        <div class="row">

<!--REFERENCE NO.-->
<div class="col-md-6 mb-3">
  <label class="form-label">REFERENCE NO.:</label>
  <input type="text" class="form-control" name="reference_no" id="reference_no" placeholder="REFERENCE NO." required>
</div>

<!--NAME OF ORGANIZER-->
<div class="col-md-6 mb-3">
  <label class="form-label">NAME OF ORGANIZER:</label>
  <input type="text" class="form-control" name="coordinator_name" placeholder="NAME OF ORGANIZER" required>
</div>

<!--FACULTY-->
<div class="col-md-6 mb-3">
  <label class="form-label">FACULTY/CENTRES:</label>
  <select class="form-control" name="faculty" required>
    <option value="" disabled selected>Choose faculty</option>
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

<!--Training Course Title-->
<div class="col-md-6 mb-3">
  <label class="form-label"> TRAINING COURSES TITLE:</label>
  <input type="text" class="form-control" name="training_course_title" placeholder="Tittle" required>
</div>

<!--VENUE-->
<div class="col-md-6 mb-3">
  <label class="form-label">VENUE:</label>
  <input type="text" class="form-control" name="venue" id="venue" placeholder="Venue" required>
</div>

<!--START DATE-->
<div class="col-md-6 mb-3">
    <label class="form-label">START DATE:</label>
    <input type="date" class="form-control" name="start_date" required>
</div>

<!--End Date-->
 <div class="col-md-6 mb-3">
    <label class="form-label">END DATE:</label>
    <input type="date" class="form-control" name="end_date" required>
</div>

<!--GROSS INCOME GENERATED-->
<div class="col-md-6 mb-3">
  <label class="form-label">GROSS INCOME GENERATED (RM):</label>
  <input type="text" class="form-control" name="gross_income_generated" placeholder="gross_income_generated" required>
</div>

<!--Link Evidence-->
<div class="col-md-6 mb-3">
  <label class="form-label">Link Evidence:</label>
  <input type="text" class="form-control" name="link" id="link" placeholder="Link" required>
</div>

<!--Remarks-->
<div class="col-md-6 mb-3">
  <label class="form-label">Remarks:</label>
  <input type="text" class="form-control" name="remarks" id="remarks" placeholder="Remarks" required>
</div>
            <!--Button-->
          <div class="col-md-12 mb-3 text-center">
            <button type="submit" class="btn btn-primary" name="submit">ADD</button>
            <a href="Training_Course.php" class="btn btn-success">View Training Course</a>
          </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

</body>
</html>
