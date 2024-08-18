<?php
session_start();

if(!isset($_SESSION['user_id']))

{
    header('Location: ../examples/login.php'); 
    exit;
}
include "../examples/config.php";

$staff_id =$_GET['ID'];

if(isset($_POST ['submit']))
{

  $staff_name = $_POST['staff_name']; 
  $grade = $_POST['grade'];
  $position = $_POST['position'];
  $first_appointment = $_POST['first_appointment'];
  $current_appointment = $_POST['current_appointment']; 
  $serve_date = $_POST['serve_date'];
  $dob= $_POST['dob'];
  $age = $_POST['age'];
  $cohort = $_POST['cohort'];
  $aca_qua = $_POST['aca_qua'];
  $name_prof = $_POST['name_prof'];
  $prof_qual = $_POST['prof_qual'];
  $regis_prof = $_POST['regis_prof'];
  $faculty = $_POST['faculty'];
  $st = $_POST['st'];
  $status = $_POST['status'];
  $status_contract= $_POST['status_contract'];
  $status_time = $_POST['status_time'];
  $citizen = $_POST['citizen'];
  $country = $_POST['country'];
  $link_evidence = $_POST['link_evidence'];
  $remarks = $_POST['remarks'];

   $sql = mysqli_query($conn, "UPDATE `staff` SET `staff_name`='$staff_name',`grade`='$grade',`position`='$position',
   `first_appointment`='$first_appointment' ,`current_appointment`='$current_appointment',`serve_date`='$serve_date',`dob`='$dob',`age`='$age',`cohort`='$cohort',`aca_qua`='$aca_qua',`name_prof`='$name_prof',`prof_qual`='$prof_qual',`regis_prof`='$regis_prof',`faculty`='$faculty',`st`='$st',`status`='$status',`status_contract`='$status_contract',
   `status_time`='$status_time',`citizen`='$citizen',`country`='$country',`link_evidence`='$link_evidence',`remarks`='$remarks' WHERE staff_id=$staff_id");

      
   if($sql){
    echo "<script>alert('New record successsfully update');</script>";
    echo "<script>document.location='Staff.php';</script>";
 }

 else
 { echo "<script>alert('Something Wrong');</script>";


 }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Staff Information</title>
    <style>
        body {
            background-repeat:            no-repeat;
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
    <div class="container">
        <div class="text-center mb-4">
            <b><p>Click Update After Finish Changing Information</p></b>
        </div>

        <?php 
        $sql = "SELECT * FROM `staff` WHERE staff_id = $staff_id LIMIT 1";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        ?>

        <div class="container d-flex justify-content-center">
            <form action="" method="post" style="width:50vw; min-width:300px;">
                <div class="row">
                    <!-- Staff ID -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">STAFF ID:</label>
                        <input type="text" class="form-control" name="staff_id" value="<?php echo $row['staff_id']?>" readonly>
                    </div>

                    <!-- Name -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">STAFF NAME:</label>
                        <input type="text" class="form-control" name="staff_name" value="<?php echo $row['staff_name']?>">
                    </div>

                    <!-- Grade -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">GRADE:</label>
                        <input type="text" class="form-control" name="grade" value="<?php echo $row['grade']?>">
                    </div>

                    <!-- Position Staff -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">POSITION STAFF:</label>
                        <select class="form-control" name="position">
                            <option value="" disabled selected>Choose Position</option>
                            <option value="Professor" <?php if ($row['position'] == 'Professor') echo 'selected'; ?>>Professor</option>
                            <option value="Assoc.Prof" <?php if ($row['position'] == 'Assoc.Prof') echo 'selected'; ?>>Assoc.Prof</option>
                            <option value="Senior Lecturer" <?php if ($row['position'] == 'Senior Lecturer') echo 'selected'; ?>>Senior Lecturer</option>
                            <option value="Lecturer" <?php if ($row['position'] == 'Lecturer') echo 'selected'; ?>>Lecturer</option>
                            <option value="Research Fellow" <?php if ($row['position'] == 'Research Fellow') echo 'selected'; ?>>Research Fellow</option>
                        </select>
                    </div>

                    <!-- First Appointment -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">FIRST APPOINTMENT:</label>
                        <input type="date" class="form-control" name="first_appointment" value="<?php echo $row['first_appointment']?>">
                    </div>

                    <!-- Current Appointment -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">CURRENT APPOINTMENT:</label>
                        <input type="date" class="form-control" name="current_appointment" value="<?php echo $row['current_appointment']?>">
                    </div>

                    <!-- Service End Date -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">SERVICE END DATE:</label>
                        <input type="date" class="form-control" name="serve_date" value="<?php echo $row['serve_date']?>">
                    </div>

                    <!-- Date of Birth -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">DATE OF BIRTH:</label>
                        <input type="date" class="form-control" name="dob" value="<?php echo $row['dob']?>">
                    </div>

                    <!-- Age -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">AGE:</label>
                        <input type="text" class="form-control" name="age" value="<?php echo $row['age']?>">
                    </div>

                    <!-- Cohort -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">COHORT (A = More 50, B = 40-50, C = Less 40):</label>
                        <select class="form-control" name="cohort" required>
                            <option value="" disabled selected>Choose</option>
                            <option value="A" <?php if ($row['cohort'] == 'A') echo 'selected'; ?>>A</option>
                            <option value="B" <?php if ($row['cohort'] == 'B') echo 'selected'; ?>>B</option>
                            <option value="C" <?php if ($row['cohort'] == 'C') echo 'selected'; ?>>C</option>
                        </select>
                    </div>

                    <!-- Academic Qualification -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">ACADEMIC QUALIFICATION:</label>
                        <input type="text" class="form-control" name="aca_qua" value="<?php echo $row['aca_qua']?>">
                    </div>

                    <!-- Name of Professional Qualification/Awarding Body -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">NAME OF PROFESSIONAL QUALIFICATION/AWARDING BODY:</label>
                        <input type="text" class="form-control" name="name_prof" value="<?php echo $row['name_prof']?>">
                    </div>

                    <!-- Professional Qualification -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">PROFESSIONAL QUALIFICATION:</label>
                        <select class="form-control" name="prof_qual" required>
                            <option value="" disabled selected>Choose</option>
                            <option value="IR" <?php if ($row['prof_qual'] == 'IR') echo 'selected'; ?>>IR</option>
                            <option value="AR" <?php if ($row['prof_qual'] == 'AR') echo 'selected'; ?>>AR</option>
                            <option value="FRCP" <?php if ($row['prof_qual'] == 'FRCP') echo 'selected'; ?>>FRCP</option>
                            <option value="SR" <?php if ($row['prof_qual'] == 'SR') echo 'selected'; ?>>SR</option>
                            <option value="ACCA" <?php if ($row['prof_qual'] == 'ACCA') echo 'selected'; ?>>ACCA</option>
                            <option value="MMED" <?php if ($row['prof_qual'] == 'MMED') echo 'selected'; ?>>MMED</option>
                            <option value="ETC" <?php if ($row['prof_qual'] == 'ETC') echo 'selected'; ?>>ETC</option>
                        </select>
                    </div>

                    <!-- Registration Number for Professional Membership -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">REGISTRATION NUMBER FOR PROFESSIONAL MEMBERSHIP:</label>
                        <input type="text" class="form-control" name="regis_prof" value="<?php echo $row['regis_prof']?>">
                    </div>

                    <!-- Faculty -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">FACULTY:</label>
                        <select class="form-control" name="faculty">
                            <option value="" disabled selected>Faculty</option>
                            <option value="Al-Quran & Hadis" <?php if ($row['faculty'] == 'Al-Quran & Hadis') echo 'selected'; ?>>Al-Quran & Hadis</option>
                            <option value="Dakwah & Pembangunan Insan" <?php if ($row['faculty'] == 'Dakwah & Pembangunan Insan') echo 'selected'; ?>>Dakwah & Pembangunan Insan</option>
                            <option value="Pengurusan Al-Syariah" <?php if ($row['faculty'] == 'Pengurusan Al-Syariah') echo 'selected'; ?>>Pengurusan Al-Syariah</option>
                            <option value="Pengajian Bahasa Arab" <?php if ($row['faculty'] == 'Pengajian Bahasa Arab') echo 'selected'; ?>>Pengajian Bahasa Arab</option>
                            <option value="Pengajian Muamalat" <?php if ($row['faculty'] == 'Pengajian Muamalat') echo 'selected'; ?>>Pengajian Muamalat</option>
                            <option value="Pengajian Pendidikan Islam" <?php if ($row['faculty'] == 'Pengajian Pendidikan Islam') echo 'selected'; ?>>Pengajian Pendidikan Islam</option>
                            <option value="Pusat Pengajian Teras" <?php if ($row['faculty'] == 'Pusat Pengajian Teras') echo 'selected'; ?>>Pusat Pengajian Teras</option>
                            <option value="Pengurusan Usuluddin" <?php if ($row['faculty'] == 'Pengurusan Usuluddin') echo 'selected'; ?>>Pengurusan Usuluddin</option>
                            <option value="Teknologi Maklumat & Multimedia" <?php if ($row['faculty'] == 'Teknologi Maklumat & Multimedia') echo 'selected'; ?>>Teknologi Maklumat & Multimedia</option>
                        </select>
                    </div>

                    <!-- S&T/ NO S&T -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">S&T/ NO S&T:</label>
                        <select class="form-control" name="st" required>
                            <option value="" disabled selected>Choose</option>
                            <option value="S&T" <?php if ($row['st'] == 'S&T') echo 'selected'; ?>>S&T</option>
                            <option value="NON S&T" <?php if ($row['st'] == 'NON S&T') echo 'selected'; ?>>NON S&T</option>
                        </select>
                    </div>

                    <!-- Status -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">STATUS:</label>
                        <select class="form-control" name="status" required>
                            <option value="" disabled selected>Choose Status</option>
                            <option value="Active" <?php if ($row['status'] == 'Active') echo 'selected'; ?>>Active</option>
                            <option value="Study" <?php if ($row['status'] == 'Study') echo 'selected'; ?>>Study</option>
                            <option value="Leaves" <?php if ($row['status'] == 'Leaves') echo 'selected'; ?>>Leaves</option>
                            <option value="Sabbatical" <?php if ($row['status'] == 'Sabbatical') echo 'selected'; ?>>Sabbatical</option>
                            <option value="Training" <?php if ($row['status'] == 'Training') echo 'selected'; ?>>Training</option>
                            <option value="Attachment" <?php if ($row['status'] == 'Attachment') echo 'selected'; ?>>Attachment</option>
                            <option value="Seconded" <?php if ($row['status'] == 'Seconded') echo 'selected'; ?>>Seconded</option>
                        </select>
                    </div>

                    <!-- Status Contract -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">STATUS CONTRACT:</label>
                        <select class="form-control" name="status_contract" required>
                            <option value="" disabled selected>Choose Status contract</option>
                            <option value="Permanent" <?php if ($row['status_contract'] == 'Permanent') echo 'selected'; ?>>Permanent</option>
                            <option value="Contract" <?php if ($row['status_contract'] == 'Contract') echo 'selected'; ?>>Contract</option>
                        </select>
                    </div>

                    <!-- Status Time -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">STATUS TIME:</label>
                        <select class="form-control" name="status_time" required>
                            <option value="" disabled selected>Choose Status time</option>
                            <option value="Full-Time" <?php if ($row['status_time'] == 'Full-Time') echo 'selected'; ?>>Full-Time</option>
                            <option value="Part-Time" <?php if ($row['status_time'] == 'Part-Time') echo 'selected'; ?>>Part-Time</option>
                        </select>
                    </div>

                    <!-- Citizenship -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">CITIZENSHIP:</label>
                        <select class="form-control" name="citizen" required>
                            <option value="" disabled selected>Choose Citizenship</option>
                            <option value="Local" <?php if ($row['citizen'] == 'Local') echo 'selected'; ?>>Local</option>
                            <option value="Foreign" <?php if ($row['citizen'] == 'Foreign') echo 'selected'; ?>>Foreign</option>
                        </select>
                    </div>

                    <!-- Country -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">COUNTRY:</label>
                        <input type="text" class="form-control" name="country" value="<?php echo $row['country']?>">
                    </div>

                    <!-- Link Evidence -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">LINK EVIDENCE:</label>
                        <input type="text" class="form-control" name="link_evidence" value="<?php echo $row['link_evidence']?>">
                    </div>

                    <!-- Remarks -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">REMARKS:</label>
                        <input type="text" class="form-control" name="remarks" value="<?php echo $row['remarks']?>">
                    </div>         
               <div>
                  <center>
                       <button type ="submit" class="btn btn-success" name="submit">UPDATE</button>
                       <a href="staff.php" class="btn btn-danger">Cancel</a>
              </div>
                 </center>
          </form>
     </div>
</div>
 <!--Boostrap-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
 <!--Boostrap-->
</body>
</html>


