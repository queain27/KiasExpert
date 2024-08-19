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
   $faculty = $_POST['faculty'];
   $year_enroll = $_POST['year_enroll'];
   $aca_year = $_POST['aca_year']; 
   $status_active = $_POST['status_active'];
   $citizen = $_POST['citizen'];
   $country = $_POST['country'];

 $sql = mysqli_query($conn, "INSERT INTO `ug_student` (`matric_no`, `student_name`, `faculty`, `year_enroll`, `aca_year`, `status_active`, `citizen`, `country`)
        VALUES ('$matric_no', '$student_name', '$faculty', '$year_enroll', '$aca_year', '$status_active', '$citizen', '$country')");
    
    if($sql)
    {
       echo "<script>alert('New record successsfully addedd');</script>";
       echo "<script>document.location='UndergraduateStud.php';</script>";
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
  <title>Add New Undergraduated Student</title>
  <style>
    * body 
    {
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: cover;
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
</head>

<body>

  <div class="container-fluid">
    <div class="container">
    <?php
        require "../header.php";
        createHeader('fa fa-briefcase', 'Add New Student', 'Add Student');
      ?>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h1 class="border-bottom center pb-3 mb-4" style="text-align: center;">Add Student</h1>
          </div>
        </div>

          <form action =" " method="post">
          <div class="row">
          
          <!--No Matric-->
            <div class="col-md-6 mb-3">
              <label class="form-label text-end">NO MATRIC:</label>
              <input type="text" class="form-control" name="matric_no" id="matric_no" placeholder="No Matric" required>
            </div>

            <!--Name-->
            <div class="col-md-6 mb-3">
              <label class="form-label text-end">STUDENT NAME:</label>
              <input type="text" class="form-control" name="student_name" placeholder="Student Name" required>
            </div>

           <!--Faculty-->
              <div class="col-md-6 mb-3">
              <label class="form-label text-end">FACULTY:</label>
              <select class="form-control" name="faculty" required>
                <option value=" " disabled selected>Choose Status</option>
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

            <!--Year Enroll-->
            <div class="col-md-6 mb-3">
              <label class="form-label text-end">YEAR ENROLLMENT:</label>
              <input type="date" class="form-control" name="year_enroll" required>
            </div>

            <!--Academic Year-->
            <div class="col-md-6 mb-3">
              <label class="form-label text-end">Academic Year:</label>
              <input type="date" class="form-control" name="aca_year" required>
            </div>

            <!--Status Active-->
            <div class="col-md-6 mb-3">
              <label class="form-label text-end">STATUS:</label>
              <select class="form-control" name="status_active" required>
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
            <!--Status Active-->        

            <!--citizenship-->
              <div class="col-md-6 mb-3">
            <div class="col-md-6 mb-3">
              <label class="form-label text-end">CITIZENSHIP</label>
              <select class="form-control" name="citizen" required>
                <option value="" disabled selected>Choose Citizenship</option>
                <option value="Local">Local</option>
                <option value="Foreign">Foreign</option>
              </select>
            </div>    

            <!--country-->
             <div class="col-md-6 mb-3">
             <label class="form-label text-end">COUNTRY:</label>
             <input type="text" class="form-control" name="country" placeholder="Country" required>
            </div>
            
<!--Button-->
<div class="col-md-12 mb-3">
  <center>
  <button type ="submit" class="btn btn-primary" name="submit">ADD</button>
    <a href="UndergraduateStud.php" class="btn btn-success">View Student</a>
  </center>
</div>
<!--Button-->

</div>
</form>
</div>
</div>

</body>
</html>