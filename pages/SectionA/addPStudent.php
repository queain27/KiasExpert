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
   $matric_no = $_POST['matric_no'];
   $student_name = $_POST['student_name'];
   $cgpa_deg_actual = $_POST['cgpa_deg_actual'];
   $cgpa_degree= $_POST['cgpa_degree']; 
   $cgpa = $_POST['cgpa']; 
   $cgpa_master= $_POST['cgpa_master']; 
   $cgpa_phd= $_POST['cgpa_phd']; 
   $university_degree= $_POST['university_degree']; 
   $university_master= $_POST['university_master']; 
   $degree_registered	= $_POST['degree_registered']; 
   $student_time= $_POST['student_time']; 
   $study_mode= $_POST['study_mode'];  
   $mixedmode_ratio = $_POST['mixedmode_ratio'];
   $faculty = $_POST['faculty'];
   $st = $_POST['st'];
   $area = $_POST['area'];
   $sponsor = $_POST['sponsor'];
   $intake_year = $_POST['intake_year'];
   $aca_year = $_POST['aca_year'];
   $numsem = $_POST['numsem'];
   $citizen = $_POST['citizen'];
   $country = $_POST['country'];
   $first_appointment = $_POST['first_appointment'];
   $current_appointment = $_POST['current_appointment'];
   $serve_date = $_POST['serve_date'];
   $app_dur = $_POST['app_dur'];
   $awd_inst = $_POST['awd_inst'];
   $year_awd= $_POST['year_awd'];
   $entry_date = $_POST['entry_date'];
   $senate = $_POST['senate'];
   $duration = $_POST['duration'];
   $got = $_POST['got'];
   $link = $_POST['link'];
   $status_active = $_POST['status_active'];
   $remarks = $_POST['remarks'];


 $sql = mysqli_query($conn, "INSERT INTO pg_student (matric_no, student_name, cgpa_deg_actual, cgpa_degree, cgpa, cgpa_master, cgpa_phd, university_degree, university_master, degree_registered, student_time, study_mode, mixedmode_ratio, faculty, st, area, sponsor, intake_year, aca_year, numsem, citizen, country, first_appointment, current_appointment, serve_date, app_dur, awd_inst, year_awd, entry_date, senate, duration, got, link,remarks, status_active)
        VALUES ('$matric_no','$student_name','$cgpa_deg_actual','$cgpa_degree', '$cgpa','$cgpa_master','$cgpa_phd','$university_degree','$university_master','$degree_registered','$student_time','$study_mode','$mixedmode_ratio', '$faculty','$st','$area','$sponsor','$intake_year','$aca_year','$numsem', '$citizen', '$country','$first_appointment', '$current_appointment', '$serve_date', '$app_dur', '$awd_inst', '$year_awd', '$entry_date','$senate','$duration','$got','$link','$remarks', '$status_active')");
    
    if($sql)
    {
       echo "<script>alert('New record successsfully addedd');</script>";
       echo "<script>document.location='PostgraduateStud.php';</script>";
    }

    else
    { echo "<script>alert('Something Wrong');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Add New Postgraduated Student</title>
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
        createHeader('fa fa-briefcase', 'Add New Student', 'Add Student');
      ?>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h1 class="border-bottom center pb-3 mb-4" style="text-align: center;">Add Student</h1>
          </div>
        </div>

        <form action=" " method="post">
        <div class="row">

<!--No Matric-->
<div class="col-md-6 mb-3">
  <label class="form-label">No Matric:</label>
  <input type="text" class="form-control" name="matric_no" id="matric_no" placeholder="No Matric" required>
</div>

<!--Name-->
<div class="col-md-6 mb-3">
  <label class="form-label">Student Name:</label>
  <input type="text" class="form-control" name="student_name" placeholder="Student Name" required>
</div>

<!--CGPA at Bachelor-->
<div class="col-md-6 mb-3">
  <label class="form-label">CGPA at Bachelor (Actual):</label>
  <input type="text" class="form-control" name="cgpa_deg_actual" id="cgpa_deg_actual" placeholder="CGPA Actual" required>
</div>

<!--CGPA Degree-->
<div class="col-md-6 mb-3">
  <label class="form-label">CGPA Bachelor Level (Equivalent = 4.00):</label>
  <input type="text" class="form-control" name="cgpa_degree" placeholder="CGPA Degree" required>
</div>

<!--CGPA > 3.00-->
<div class="col-md-6 mb-3">
  <label class="form-label">CGPA > 3.00:</label>
  <select class="form-control" name="cgpa" required>
    <option value="" disabled selected>Choose</option>
    <option value="Yes">Yes</option>
    <option value="No">No</option>
  </select>
</div>

<!--University Bachelor-->
<div class="col-md-6 mb-3">
  <label class="form-label">University Bachelor:</label>
  <input type="text" class="form-control" name="university_degree" placeholder="University Bachelor" required>
</div>

<!--University Master-->
<div class="col-md-6 mb-3">
  <label class="form-label">University Master:</label>
  <input type="text" class="form-control" name="university_master" placeholder="University Master" required>
</div>

<!--CGPA Master > 3.00-->
<div class="col-md-6 mb-3">
  <label class="form-label">CGPA Master > 3.00:</label>
  <select class="form-control" name="cgpa_master" required>
    <option value="" disabled selected>Choose</option>
    <option value="Yes">Yes</option>
    <option value="No">No</option>
  </select>
</div>

<!--CGPA PhD > 3.00-->
<div class="col-md-6 mb-3">
  <label class="form-label">CGPA PhD > 3.00:</label>
  <select class="form-control" name="cgpa_phd" required>
    <option value="" disabled selected>Choose</option>
    <option value="Yes">Yes</option>
    <option value="No">No</option>
  </select>
</div>

<!--Degree Registered-->
<div class="col-md-6 mb-3">
  <label class="form-label">Degree Registered:</label>
  <select class="form-control" name="degree_registered" required>
    <option value="" disabled selected>Choose Degree</option>
    <option value="PhD">PhD</option>
    <option value="Master">Master</option>
    <option value="Doctoral">Doctoral</option>
  </select>
</div>

<!--Status Time-->
<div class="col-md-6 mb-3">
  <label class="form-label">Status Time:</label>
  <select class="form-control" name="student_time" required>
    <option value="" disabled selected>Choose Status Time</option>
    <option value="Full-Time">Full-Time</option>
    <option value="Part-Time">Part-Time</option>
  </select>
</div>

<!--Status Mode-->
<div class="col-md-6 mb-3">
  <label class="form-label">Status Mode:</label>
  <select class="form-control" name="study_mode" required>
    <option value="" disabled selected>Choose Status Mode</option>
    <option value="Research">Research</option>
    <option value="Mix Mode">Mix Mode</option>
    <option value="Course Work">Course Work</option>
  </select>
</div>

<!--Mixmode Ratio-->
<div class="col-md-6 mb-3">
  <label class="form-label">MIXED MODE RATIO (RESEARCH : COURSEWORK): </label>
  <input type="text" class="form-control" name="mixedmode_ratio" id="mixedmode_ratio" placeholder="Mixmode Ratio" required>
</div>

<!--S&T / NO S&T-->
<div class="col-md-6 mb-3">
  <label class="form-label">S&T / NO S&T:</label>
  <select class="form-control" name="st" required>
    <option value="" disabled selected>Choose</option>
    <option value="S&T">S&T</option>
    <option value="NON S&T">NON S&T</option>
  </select>
</div>

<!--Faculty-->
<div class="col-md-6 mb-3">
  <label class="form-label">Faculty:</label>
  <select class="form-control" name="faculty" required>
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

<!--Area Field-->
<div class="col-md-6 mb-3">
  <label class="form-label">Area Field:</label>
  <input type="text" class="form-control" name="area" id="area" placeholder="Area Field" required>
</div>

<!--Sponsorship-->
<div class="col-md-6 mb-3">
  <label class="form-label">Sponsorship:</label>
  <input type="text" class="form-control" name="sponsor" id="sponsor" placeholder="Sponsorship" required>
</div>

<!--Intake Year-->
<div class="col-md-6 mb-3">
  <label class="form-label">Intake Year:</label>
  <input type="text" class="form-control" name="intake_year" id="intake_year" placeholder="Intake Year" required>
</div>

<!--Academic Year-->
<div class="col-md-6 mb-3">
  <label class="form-label">Academic Year:</label>
  <input type="text" class="form-control" name="aca_year" id="aca_year" placeholder="Academic Year" required>
</div>

<!--Number of Semesters-->
<div class="col-md-6 mb-3">
  <label class="form-label">Number of Semesters:</label>
  <input type="number" class="form-control" name="numsem" id="numsem" placeholder="Number of Semesters" required>
</div>

<!--Citizenship-->
<div class="col-md-6 mb-3">
  <label class="form-label">Citizenship:</label>
  <select class="form-control" name="citizen" required>
    <option value="" disabled selected>Choose Citizenship</option>
    <option value="Local">Local</option>
    <option value="Foreign">Foreign</option>
  </select>
</div>

<!--Country-->
<div class="col-md-6 mb-3">
  <label class="form-label">Country:</label>
  <input type="text" class="form-control" name="country" placeholder="Country" required>
</div>

<!--Entry Date-->
<div class="col-md-6 mb-3">
  <label class="form-label">Entry Date:</label>
  <input type="date" class="form-control" name="entry_date" required>
</div>

<!--Senate-->
<div class="col-md-6 mb-3">
  <label class="form-label">Senate:</label>
  <input type="date" class="form-control" name="senate" required>
</div>

<!--Duration-->
<div class="col-md-6 mb-3">
  <label class="form-label">Duration:</label>
  <input type="number" class="form-control" name="duration" id="duration" placeholder="Duration" required>
</div>

<!--First Appointment-->
<div class="col-md-6 mb-3">
    <label class="form-label">First Appointment:</label>
    <input type="date" class="form-control" name="first_appointment" required>
</div>

<!--Current Appointment-->
  <div class="col-md-6 mb-3">
    <label class="form-label">Current Appointment:</label>
    <input type="date" class="form-control" name="current_appointment" required>
</div>

<!--Service Date-->
 <div class="col-md-6 mb-3">
    <label class="form-label">End Date:</label>
    <input type="date" class="form-control" name="serve_date" required>
</div>

<!--App Duration-->
<div class="col-md-6 mb-3">
  <label class="form-label">Appointment Duration:</label>
  <input type="number" class="form-control" name="app_dur" id="app_dur" placeholder="App Duration" required>
</div>

<!--award inst-->
<div class="col-md-6 mb-3">
    <label class="form-label">PHD AWARDING INSTITUTION:</label>
    <input type="text" class="form-control" name="awd_inst" id="awd_inst" placeholder="Award institustion" required>
</div>

<!--year awr-->
<div class="col-md-6 mb-3">
    <label class="form-label">YEAR PHD AWARDED:</label>
    <input type="text" class="form-control" name="year_awd" id="year_awd" placeholder="Year Award PHD" required>
</div>
<!--GOT-->
<div class="col-md-6 mb-3">
  <label class="form-label">GOT:</label>
  <select class="form-control" name="got" required>
    <option value="" disabled selected>Choose</option>
    <option value="YES">YES</option>
    <option value="NO">NO</option>
  </select>
</div>

<!--Status Active-->
<div class="col-md-6 mb-3">
  <label class="form-label">Status:</label>
  <select class="form-control" name="status_active" required>
    <option value="" disabled selected>Choose Status</option>
    <option value="Active">Active</option>
    <option value="Thesis">Thesis</option>
    <option value="Graduate">Graduate</option>
    <option value="Complete">Complete</option>
    <option value="Probation">Probation</option>
    <option value="Deferred">Deferred</option>
    <option value="Dropped">Dropped</option>
    <option value="Terminated">Terminated</option>
  </select>
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
            <!--Buttons-->
            <div class="col-md-12 mb-3">
              <center>
                <button type="submit" class="btn btn-primary" name="submit">ADD</button>
                <a href="PostgraduateStud.php" class="btn btn-success">View Student</a>
              </center>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

</body>
</html>
