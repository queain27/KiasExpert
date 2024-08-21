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
   $staff_id = $_POST['staff_id'];
   $staff_name = $_POST['staff_name'];
   $grade = $_POST['grade'];
   $position = $_POST['position'];
   $first_appointment = $_POST['first_appointment'];
   $current_appointment = $_POST['current_appointment'];
   $serve_date = $_POST['serve_date'];
   $dob = $_POST['dob'];
   $age = $_POST['age'];
   $cohort = $_POST['cohort'];
   $aca_qua = $_POST['aca_qua'];
   $name_prof = $_POST['name_prof'];
   $prof_qual = $_POST['prof_qual'];
   $regis_prof = $_POST['regis_prof'];
   $faculty = $_POST['faculty'];
   $st = $_POST['st'];
   $status = $_POST['status'];
   $status_contract = $_POST['status_contract'];
   $status_time = $_POST['status_time'];
   $citizen = $_POST['citizen'];
   $country = $_POST['country'];
   $link_evidence = $_POST['link_evidence'];
   $remarks = $_POST['remarks'];

   $sql = mysqli_query($conn, "INSERT INTO `staff` (`staff_id`, `staff_name`, `grade`, `position`, `first_appointment`, `current_appointment`, `serve_date`, `dob`, `age`, `cohort`, `aca_qua`, `name_prof`, `prof_qual`, `regis_prof`, `faculty`, `st`, `status`, `status_contract`, `status_time`, `citizen`, `country`, `link_evidence`, `remarks`) VALUES ('$staff_id', '$staff_name', '$grade', '$position', '$first_appointment', '$current_appointment', '$serve_date', '$dob', '$age', '$cohort', '$aca_qua', '$name_prof', '$prof_qual', '$regis_prof', '$faculty', '$st', '$status', '$status_contract', '$status_time', '$citizen', '$country', '$link_evidence', '$remarks')");

   if($sql) {
       echo "<script>alert('New record successfully added');</script>";
       echo "<script>document.location='Staff.php';</script>";
   } else {
       echo "<script>alert('Staff ID Already Exists');</script>";
   }
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Add New Staff Academic</title>
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
    require "../header.php";
    createHeader('fa fa-briefcase', 'Add New Staff', 'Add Staff Academic');
    ?>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h1 class="border-bottom text-center pb-3 mb-4">Add Staff Academic</h1>
        </div>
      </div>
      <form action="" method="post">
        <div class="row">
          <!--Staff ID-->
          <div class="col-md-6 mb-3">
            <label class="form-label">STAFF ID:</label>
            <input type="text" class="form-control" name="staff_id" placeholder="Staff ID" required>
          </div>
          <!--Name-->
          <div class="col-md-6 mb-3">
            <label class="form-label">STAFF NAME:</label>
            <input type="text" class="form-control" name="staff_name" placeholder="Staff Name" required>
          </div>
          <!--Grade-->
          <div class="col-md-6 mb-3">
            <label class="form-label">GRADE:</label>
            <input type="text" class="form-control" name="grade" placeholder="Grade" required>
          </div>
          <!--Position Staff-->
          <div class="col-md-6 mb-3">
            <label class="form-label">POSITION STAFF:</label>
            <select class="form-control" name="position" required>
              <option value="" disabled selected>Choose Position</option>
              <option value="Professor">Professor</option>
              <option value="Assoc.Prof">Assoc.Prof</option>
              <option value="Senior Lecturer">Senior Lecturer</option>
              <option value="Lecturer">Lecturer</option>
              <option value="Research Fellow">Research Fellow</option>
            </select>
          </div>
          <!--First Appointment-->
          <div class="col-md-6 mb-3">
            <label class="form-label">FIRST APPOINTMENT:</label>
            <input type="date" class="form-control" name="first_appointment" required>
          </div>
          <!--Current Appointment-->
          <div class="col-md-6 mb-3">
            <label class="form-label">CURRENT APPOINTMENT:</label>
            <input type="date" class="form-control" name="current_appointment" required>
          </div>
          <!--Service Date-->
          <div class="col-md-6 mb-3">
            <label class="form-label">SERVICE END DATE:</label>
            <input type="date" class="form-control" name="serve_date" required>
          </div>
          <!--DOB-->
          <div class="col-md-6 mb-3">
            <label class="form-label">DATE OF BIRTH:</label>
            <input type="date" class="form-control" name="dob" required>
          </div>
          <!--Age-->
          <div class="col-md-6 mb-3">
            <label class="form-label">AGE:</label>
            <input type="text" class="form-control" name="age" placeholder="AGE" required>
          </div>
          <!--Cohort-->
          <div class="col-md-6 mb-3">
            <label class="form-label">COHORT:</label>
            <select class="form-control" name="cohort" required>
              <option value="" disabled selected>Choose</option>
              <option value="A">A</option>
              <option value="B">B</option>
              <option value="C">C</option>
            </select>
          </div>
          <!--Academic Qualification-->
          <div class="col-md-6 mb-3">
            <label class="form-label">ACADEMIC QUALIFICATION:</label>
            <input type="text" class="form-control" name="aca_qua" placeholder="ACADEMIC QUALIFICATION" required>
          </div>
          <!--Professional Qualification-->
          <div class="col-md-6 mb-3">
            <label class="form-label">NAME OF PROFESSIONAL QUALIFICATION/AWARDING BODY:</label>
            <input type="text" class="form-control" name="name_prof" placeholder="NAME OF PROFESSIONAL QUALIFICATION" required>
          </div>
          <div class="col-md-6 mb-3">
            <label class="form-label">PROFESSIONAL QUALIFICATION:</label>
            <select class="form-control" name="prof_qual" required>
              <option value="" disabled selected>Choose</option>
              <option value="IR">IR</option>
              <option value="AR">AR</option>
              <option value="FRCP">FRCP</option>
              <option value="SR">SR</option>
              <option value="ACCA">ACCA</option>
              <option value="MMED">MMED</option>
              <option value="ETC">ETC</option>
            </select>
          </div>
          <!--Registration Number-->
          <div class="col-md-6 mb-3">
            <label class="form-label">REGISTRATION NUMBER FOR PROFESSIONAL MEMBERSHIP:</label>
            <input type="text" class="form-control" name="regis_prof" placeholder="REGISTRATION NUMBER" required>
          </div>
          <!--Faculty-->
          <div class="col-md-6 mb-3">
            <label class="form-label">FACULTY:</label>
            <select class="form-control" name="faculty" required>
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
          <!--S&T-->
          <div class="col-md-6 mb-3">
            <label class="form-label">S&T / NO S&T:</label>
            <select class="form-control" name="st" required>
              <option value="" disabled selected>Choose</option>
              <option value="S&T">S&T</option>
              <option value="NON S&T">NO S&T</option>
            </select>
          </div>
          <!--Status-->
          <div class="col-md-6 mb-3">
            <label class="form-label">STATUS:</label>
            <select class="form-control" name="status" required>
              <option value="" disabled selected>Choose Status</option>
              <option value="Active">Active</option>
              <option value="Study">Study</option>
              <option value="Leaves">Leaves</option>
              <option value="Sabbatical">Sabbatical</option>
              <option value="Training">Training</option>
              <option value="Attachment">Attachment</option>
              <option value="Seconded">Seconded</option>
            </select>
          </div>
          <!--Status Contract-->
          <div class="col-md-6 mb-3">
            <label class="form-label">STATUS CONTRACT:</label>
            <select class="form-control" name="status_contract" required>
              <option value="" disabled selected>Choose Status Contract</option>
              <option value="Permanent">Permanent</option>
              <option value="Contract">Contract</option>
            </select>
          </div>
          <!--Status Time-->
          <div class="col-md-6 mb-3">
            <label class="form-label">STATUS TIME:</label>
            <select class="form-control" name="status_time" required>
              <option value="" disabled selected>Choose Status Time</option>
              <option value="Full-Time">Full-Time</option>
              <option value="Part-Time">Part-Time</option>
            </select>
          </div>
          <!--Citizenship-->
          <div class="col-md-6 mb-3">
            <label class="form-label">CITIZENSHIP:</label>
            <select class="form-control" name="citizen" required>
              <option value="" disabled selected>Choose Citizenship</option>
              <option value="Local">Local</option>
              <option value="Foreign">Foreign</option>
            </select>
          </div>
          <!--Country-->
          <div class="col-md-6 mb-3">
            <label class="form-label">COUNTRY:</label>
            <input type="text" class="form-control" name="country" placeholder="Country" required>
          </div>
          <!--Link Evidence-->
          <div class="col-md-6 mb-3">
            <label class="form-label">LINK EVIDENCE:</label>
            <input type="text" class="form-control" name="link_evidence" placeholder="Attach Link" required>
          </div>
          <!--Remarks-->
          <div class="col-md-6 mb-3">
            <label class="form-label">REMARKS:</label>
            <input type="text" class="form-control" name="remarks" placeholder="Remarks" required>
          </div>
          <!--Button-->
          <div class="col-md-12 mb-3 text-center">
            <button type="submit" class="btn btn-primary" name="submit">ADD</button>
            <a href="Staff.php" class="btn btn-success">View Staff</a>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

</body>
</html>
