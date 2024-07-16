<?php
include "../examples/config.php";
if(isset($_POST ['submit']))
{
   $matric_no = $_POST['matric_no'];
   $student_name = $_POST['student_name'];
   $faculty = $_POST['faculty'];
   $cgpa_degree= $_POST['cgpa_degree']; 
   $cgpa_master= $_POST['cgpa_master']; 
   $cgpa_phd= $_POST['cgpa_phd']; 
   $cgpa = $_POST['cgpa']; 
   $university_degree= $_POST['university_degree']; 
   $university_master= $_POST['university_master']; 
   $degree_registered	= $_POST['degree_registered']; 
   $student_time= $_POST['student_time']; 
   $study_mode= $_POST['study_mode'];  
   $citizen = $_POST['citizen'];
   $country = $_POST['country'];
   $status_active = $_POST['status_active'];

 $sql = mysqli_query($conn, "INSERT INTO pg_student (matric_no, student_name, faculty, cgpa_degree,cgpa_master, cgpa_phd,cgpa,university_degree,university_master,degree_registered,student_time,study_mode, citizen, country, status_active)
        VALUES ('$matric_no', '$student_name', '$faculty', '$cgpa_degree', '$cgpa_master','$cgpa_phd','$cgpa','$university_degree','$university_master','$degree_registered'	,'$student_time','$study_mode', '$citizen', '$country', '$status_active')");
    
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
  <title>Add New Undergraduate Student</title>
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

        <form action=" " method="post">
          <div class="row">
            <!--No Matric-->
            <div class="col-md-6 mb-3">
              <label class="form-label">NO MATRIC:</label>
              <input type="text" class="form-control" name="matric_no" id="matric_no" placeholder="No Matric" required>
            </div>

            <!--Name-->
            <div class="col-md-6 mb-3">
              <label class="form-label">STUDENT NAME:</label>
              <input type="text" class="form-control" name="student_name" placeholder="Student Name" required>
            </div>

            <!--Faculty-->
            <div class="col-md-6 mb-3">
              <label class="form-label">FACULTY:</label>
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

            <!--CGPA Degree-->
            <div class="col-md-6 mb-3">
              <label class="form-label">CGPA DEGREE:</label>
              <input type="text" class="form-control" name="cgpa_degree" placeholder="CGPA Degree" required>
            </div>

            <!--CGPA Master-->
            <div class="col-md-6 mb-3">
              <label class="form-label">CGPA MASTER > 3.00:</label>
              <select class="form-control" name="cgpa_master" required>
                <option value="" disabled selected>Choose</option>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
              </select>
            </div>

            <!--CGPA PhD-->
            <div class="col-md-6 mb-3">
              <label class="form-label">CGPA PHD > 3.00:</label>
              <select class="form-control" name="cgpa_phd" required>
                <option value="" disabled selected>Choose</option>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
              </select>
            </div>

            <!--CGPA-->
            <div class="col-md-6 mb-3">
              <label class="form-label">CGPA  > 3.00:</label>
              <select class="form-control" name="cgpa" required>
                <option value="" disabled selected>Choose</option>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
              </select>
            </div>
            
            <!--University Degree-->
            <div class="col-md-6 mb-3">
              <label class="form-label">UNIVERSITY BACHELOR:</label>
              <input type="text" class="form-control" name="university_degree" placeholder="University Degree" required>
            </div>

            <!--University Master-->
            <div class="col-md-6 mb-3">
              <label class="form-label">UNIVERSITY MASTER:</label>
              <input type="text" class="form-control" name="university_master" placeholder="University Master" required>
            </div>

            <!--Degree Registered-->
            <div class="col-md-6 mb-3">
              <label class="form-label">DEGREE REGISTERED:</label>
              <select class="form-control" name="degree_registered" required>
                <option value="" disabled selected>Choose Degree</option>
                <option value="PhD">PhD</option>
                <option value="Master">Master</option>
                <option value="Doctoral">Doctoral</option>
              </select>
            </div>

            <!--Status Time-->
            <div class="col-md-6 mb-3">
              <label class="form-label">STATUS TIME:</label>
              <select class="form-control" name="student_time" required>
                <option value="" disabled selected>Choose Status Time</option>
                <option value="Full-Time">Full-Time</option>
                <option value="Part-Time">Part-Time</option>
              </select>
            </div>

            <!--Status Mode-->
            <div class="col-md-6 mb-3">
              <label class="form-label">STATUS MODE:</label>
              <select class="form-control" name="study_mode" required>
                <option value="" disabled selected>Choose Status Mode</option>
                <option value="Research">Research</option>
                <option value="Mix Mode">Mix Mode</option>
                <option value="Course Work">Course Work</option>
              </select>
            </div>

            <!--Status Active-->
            <div class="col-md-6 mb-3">
              <label class="form-label">STATUS:</label>
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
