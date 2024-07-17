<?php
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
   $dob= $_POST['dob'];
   $age = $_POST['age'];
   $cohort  = $_POST['cohort'];
   $aca_qua  = $_POST['aca_qua'];
   $name_prof = $_POST['name_prof'];
   $prof_qual = $_POST['prof_qual'];
   $regis_prof  = $_POST['regis_prof'];
   $faculty  = $_POST['faculty'];
   $st  = $_POST['st'];
   $status = $_POST['status'];
   $status_contract= $_POST['status_contract'];
   $status_time = $_POST['status_time'];
   $citizen = $_POST['citizen'];
   $country = $_POST['country'];
   $link_evidence = $_POST['link_evidence'];
   $remarks = $_POST['remarks'];

 $sql = mysqli_query($conn, "INSERT INTO `staff` (`staff_id`, `staff_name`, `grade`, `position`, `first_appointment`, `current_appointment`,`serve_date`,`dob`,`age`,`cohort`,`aca_qua`,`name_prof`,`prof_qual`,`regis_prof`,`faculty`,`st`, `status`, `status_contract`, `status_time`, `citizen`, `country`,`link_evidence`,`remarks`)
        VALUES ('$staff_id', '$staff_name', '$grade', '$position', '$first_appointment', '$current_appointment','$serve_date','$dob','$age','$cohort','$aca_qua','$name_prof','$prof_qual','$regis_prof','$faculty','$st', '$status', '$status_contract', '$status_time', '$citizen', '$country','$link_evidence','$remarks')");
    
    if($sql)
    
    {
       echo "<script>alert('New record successsfully addedd');</script>";
       echo "<script>document.location='Staff.php';</script>";
    }

    else
    { echo "<script>alert('Staff ID Already Have');</script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Add New Staff Academic</title>
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
        createHeader('fa fa-briefcase', 'Add New Staff', 'Add Staff Academic');
      ?>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h1 class="border-bottom center pb-3 mb-4" style="text-align: center;">Add Staff Academic</h1>
          </div>
        </div>

          <form action =" " method="post">
          <div class="row">
            <!--Staff ID-->
            <div class="col-md-6 mb-3">
              <label class="form-label text-end">STAFF ID:</label>
              <input type="text" class="form-control" name="staff_id" id="staff_id" placeholder="Staff ID" required>
            </div>

            <!--Name-->
            <div class="col-md-6 mb-3">
              <label class="form-label text-end">STAFF NAME:</label>
              <input type="text" class="form-control" name="staff_name" placeholder="Staff Name" required>
            </div>

              <!--Grade-->
              <div class="col-md-6 mb-3">
              <label class="form-label text-end">GRADE:</label>
              <input type="text" class="form-control" name="grade" placeholder="Grade" required>
            </div>

            <!--Position Staff-->
            <div class="col-md-6 mb-3">
              <label class="form-label text-end">POSITION STAFF:</label>
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
              <label class="form-label text-end">FIRST APPOINTMENT:</label>
              <input type="date" class="form-control" name="first_appointment" required>
            </div>

            <!--Current Appointment-->
            <div class="col-md-6 mb-3">
              <label class="form-label text-end">CURRENT APPOINTMENT:</label>
              <input type="date" class="form-control" name="current_appointment" required>
            </div>

            <!--service date-->
            <div class="col-md-6 mb-3">
              <label class="form-label text-end">SERVICE END DATE:</label>
              <input type="date" class="form-control" name="serve_date" required>
            </div>
            

            <!--dob-->
            <div class="col-md-6 mb-3">
              <label class="form-label text-end">DATE OF BIRTH:</label>
              <input type="date" class="form-control" name="dob" required>
            </div>

             <!--age-->
             <div class="col-md-6 mb-3">
              <label class="form-label text-end">AGE:</label>
              <input type="text" class="form-control" name="age" id="age" placeholder="AGE" required>
            </div>

            <!--cohort-->
            <div class="col-md-6 mb-3">
              <label class="form-label text-end">COHORT (A More 50, B= 40-50, C Less 40) </label>
              <select class="form-control" name="cohort" required>
                <option value="" disabled selected>Choose</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
              </select>
            </div>

            <!--aca_qua-->
            <div class="col-md-6 mb-3">
              <label class="form-label text-end">ACADEMIC QUALIFICATION:</label>
              <input type="text" class="form-control" name="aca_qua" id="aca_qua" placeholder="ACADEMIC QUALIFICATION" required>
            </div>

            <!--name_prof-->
            <div class="col-md-6 mb-3">
              <label class="form-label text-end">NAME OF PROFESSIONAL QUALIFICATION/AWARDING BODY:</label>
              <input type="text" class="form-control" name="name_prof" id="name_prof" placeholder="NAME OF PROFESSIONAL QUALIFICATION" required>
            </div>

            <!--prof_qual-->
            <div class="col-md-6 mb-3">
              <label class="form-label text-end">PROFESSIONAL QUALIFICATION:</label>  
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


            <!--regis_prof-->
            <div class="col-md-6 mb-3">
              <label class="form-label text-end">REGISTRATION NUMBER FOR PROFESSIONAL MEMBERSHIP:</label>
              <input type="text" class="form-control" name="regis_prof" id="regis_prof" placeholder="REGISTRATION NUMBER " required>
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

           <!--st-->
            <div class="col-md-6 mb-3">
              <label class="form-label text-end">S&T/ NO S&T:</label>
              <select class="form-control" name="st" required>
                <option value="" disabled selected>Choose</option>
                <option value="S&T">S&T</option>
                <option value="NON S&T">NO S&T</option>
              </select>
            </div>

            <!--Status Active-->
            <div class="col-md-6 mb-3">
              <label class="form-label text-end">STATUS:</label>
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
            <!--Status Active-->        

            <!--Status Contract-->
            <div class="col-md-6 mb-3">
              <label class="form-label text-end">STATUS CONTRACT:</label>
              <select class="form-control" name="status_contract" required>
                <option value="" disabled selected>Choose Status  contract</option>
                <option value="Permanent">Permenant</option>
                <option value="Contract">Contract</option>
              </select>
            </div>

            <!--Status Time-->
            <div class="col-md-6 mb-3">
              <label class="form-label text-end">STATUS TIME:</label>
              <select class="form-control" name="status_time" required>
                <option value="" disabled selected>Choose Status time</option>
                <option value="Full-Time">Full-Time</option>
                <option value="Part-Time">Part-Time</option>
              </select>
            </div>

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

            <!--link_evidence-->
            <div class="col-md-6 mb-3">
              <label class="form-label text-end">LINK EVIDENCE:</label>
              <input type="text" class="form-control" name="link_evidence" id="link_evidence" placeholder="Attach Link" required>
            </div>

            <!--Remarks-->
            <div class="col-md-6 mb-3">
              <label class="form-label text-end">REMARKS:</label>
              <input type="text" class="form-control" name="remarks" id="remarks" placeholder="REMARKS" required>
            </div>
<!--Button-->
<div class="col-md-12 mb-3">
  <center>
  <button type ="submit" class="btn btn-primary" name="submit">ADD</button>
    <a href="Staff.php" class="btn btn-success">View Staff</a>
  </center>
</div>
<!--Button-->

</div>
</form>
</div>
</div>

</body>
</html>