<?php
include "../examples/config.php";
$matric_no =$_GET['ID'];

if(isset($_POST ['submit']))
{
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
  $entry_date = $_POST['entry_date'];
  $senate = $_POST['senate'];
  $duration = $_POST['duration'];
  $got = $_POST['got'];
  $status_active = $_POST['status_active'];
  $link = $_POST['link'];
  $remarks = $_POST['remarks'];

  $sql = mysqli_query($conn, "UPDATE `pg_student` SET `student_name`='$student_name',`cgpa_deg_actual`='$cgpa_deg_actual',
`cgpa_degree`='$cgpa_degree',`cgpa`='$cgpa',`cgpa_master`='$cgpa_master',`cgpa_phd`='$cgpa_phd',`university_degree`='$university_degree',
`university_master`='$university_master',`degree_registered`='$degree_registered',`student_time`='$student_time',`study_mode`='$study_mode',
`mixedmode_ratio`='$mixedmode_ratio',`faculty`='$faculty',`st`='$st',`area`='$area',`sponsor`='$sponsor',`intake_year`='$intake_year',`aca_year`='$aca_year',`numsem`='$numsem',
`citizen`='$citizen',`country`='$country',`entry_date`='$entry_date',`senate`='$senate',`duration`='$duration',`got`='$got',`status_active`='$status_active',`link`='$link',`remarks`='$remarks' WHERE matric_no=$matric_no");
  
  if($sql)
  
  {
    echo "<script>alert('New record successsfully update');</script>";
    echo "<script>document.location='PostgraduateStud.php';</script>";
 }

 else
 { echo "<script>alert('Something Wrong');</script>";


 }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title> Edit Postgraduated Student</title>
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

</head>

<div class="container">

       <div class ="text-center mb-4">
       <b><p>Click Update After Finish Changing Information</p></b>
        </div>

        <?php 
        $sql = "SELECT * FROM `pg_student` WHERE matric_no = $matric_no LIMIT 1";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        ?>

    <div class ="container d-flex justify-contetnt-">
        <form action =" " method="post" style="width:50vw; min-width:300px;">
        <div class ="row">
           
           <!--NO MATRCI-->
             <div class="col">
               <label class ="form-label">NO MATRIC:</label>
               <input type="text" class="form-control" name="matric_no" value="<?php echo $row['matric_no']?>"> 
            </div>

             <!--Name-->
             <div class="col-md-6 mb-3">
               <label class="form-label text-end">STUDENT NAME:</label>
               <input type="text" class="form-control" name="student_name"value="<?php echo $row['student_name']?>">
            </div>
            
            <!--CGPA at Bachelor-->
              <div class="col-md-6 mb-3">
                <label class="form-label">CGPA at Bachelor (Actual):</label>
                <input type="text" class="form-control" name="cgpa_deg_actual" value="<?php echo $row['cgpa_deg_actual']?>"> 
           </div>

           <!--CGPA Degree-->
              <div class="col-md-6 mb-3">
                <label class="form-label">CGPA Bachelor Level (Equivalent = 4.00):</label>
                <input type="text" class="form-control" name="cgpa_degree" value="<?php echo $row['cgpa_degree']?>"> 
              </div>

            <!--CGPA  > 3.00-->
            <div class="col-md-6 mb-3">
              <label class="form-label text-end">CGPA  > 3.00</label>
              <select class="form-control" name="cgpa">
                  <option value="" disabled>Choose</option>
                  <option value="Yes" <?php if ($row['cgpa'] == 'Yes') echo 'selected'; ?>>Yes</option>
                  <option value="No" <?php if ($row['cgpa'] == 'No') echo 'selected'; ?>>No</option>
             </select>
            </div>

           <!--UNIVERSITY MASTER-->
           <div class="col">
               <label class ="form-label">UNIVERSITY BACHELOR:</label>
               <input type="text" class="form-control" name="university_degree" value="<?php echo $row['university_degree']?>"> 
            </div>
            <!--UNIVERSITY MASTER-->
            <div class="col">
               <label class ="form-label">UNIVERSITY MASTER:</label>
               <input type="text" class="form-control" name="university_master" value="<?php echo $row['university_master']?>"> 
            </div>

            <!--DEGREE REGISTERED-->
            <div class="col">
               <label class ="form-label">DEGREE REGISTERED:</label>
               <input type="text" class="form-control" name="degree_registered" value="<?php echo $row['degree_registered']?>"> 
            </div>

            <!--CGPA MASTER > 3.00-->
            <div class="col-md-6 mb-3">
              <label class="form-label text-end">CGPA MASTER > 3.00</label>
              <select class="form-control" name="cgpa_master">
                  <option value="" disabled>Choose Citizenship</option>
                  <option value="Yes" <?php if ($row['cgpa_master'] == 'Yes') echo 'selected'; ?>>Yes</option>
                  <option value="No" <?php if ($row['cgpa_master'] == 'No') echo 'selected'; ?>>No</option>
             </select>
            </div>

            <!--CGPA MASTER > 3.00-->
            <div class="col-md-6 mb-3">
              <label class="form-label text-end">CGPA PHD > 3.00</label>
              <select class="form-control" name="cgpa_phd">
                  <option value="" disabled>Choose</option>
                  <option value="Yes" <?php if ($row['cgpa_phd'] == 'Yes') echo 'selected'; ?>>Yes</option>
                  <option value="No" <?php if ($row['cgpa_phd'] == 'No') echo 'selected'; ?>>No</option>
             </select>
            </div>

            <!--Status Time-->
            <div class="col-md-6 mb-3">
                        <label class="form-label">STATUS TIME:</label>
                        <select class="form-control" name="student_time" required>
                            <option value="" disabled selected>Choose Status time</option>
                            <option value="Full-Time" <?php if ($row['student_time'] == 'Full-Time') echo 'selected'; ?>>Full-Time</option>
                            <option value="Part-Time" <?php if ($row['student_time'] == 'Part-Time') echo 'selected'; ?>>Part-Time</option>
                        </select>
                    </div>
            <!--study_mode-->
            <div class="col-md-6 mb-3">
              <label class="form-label text-end">STUDY MODE:</label>
              <select class="form-control" name="study_mode">
                  <option value="" disabled>Choose </option>
                  <option value="Research" <?php if ($row['study_mode'] == 'Research') echo 'selected'; ?>>Research</option>
                  <option value="Mix Mode" <?php if ($row['study_mode'] == 'Mix Mode') echo 'selected'; ?>>Mix Mode</option>
                  <option value="Course Work" <?php if ($row['study_mode'] == 'Course Work') echo 'selected'; ?>>Course Work</option>           
                </select>
            </div>

            <!--Mixmode Ratio-->
              <div class="col-md-6 mb-3">
                <label class="form-label">MIXED MODE RATIO (RESEARCH : COURSEWORK): </label>
                <input type="text" class="form-control" name="mixedmode_ratio" value="<?php echo $row['mixedmode_ratio']?>"> 
                </div>

          <!--S&T / NO S&T-->
            <div class="col-md-6 mb-3">
              <label class="form-label">S&T / NO S&T:</label>
                 <select class="form-control" name="st" required>
                    <option value="" disabled selected>Choose</option>
                       <option value="S&T" <?php if ($row['st'] == 'S&T') echo 'selected'; ?>>S&T</option>
                       <option value="NON S&T" <?php if ($row['st'] == 'NON S&T') echo 'selected'; ?>>NON S&T</option>
               </select>
           </div>

            <!--Faculty Staff-->
            <div class="col-md-6 mb-3">
                  <label class="form-label text-end">FACULTY :</label>
                <select class="form-control" name="faculty">
                   <option value=" " disabled>Choose Status</option>
                   <option value='Al-Quran & Hadis' <?php if ($row['faculty'] == 'Al-Quran & Hadis') echo 'selected'; ?>>Al-Quran & Hadis</option>
                   <option value='Dakwah & Pembangunan Insan' <?php if ($row['faculty'] == 'Dakwah & Pembangunan Insan') echo 'selected'; ?>>Dakwah & Pembangunan Insan</option>
                   <option value='Pengurusan Al-Syariah' <?php if ($row['faculty'] == 'Pengurusan Al-Syariah') echo 'selected'; ?>>Pengurusan Al-Syariah</option>
                   <option value='Pengajian Bahasa Arab' <?php if ($row['faculty'] == 'Pengajian Bahasa Arab') echo 'selected'; ?>>Pengajian Bahasa Arab</option>
                   <option value='Pengajian Muamalat' <?php if ($row['faculty'] == 'Pengajian Muamalat') echo 'selected'; ?>>Pengajian Muamalat</option>
                   <option value='Pengajian Pendidikan Islam' <?php if ($row['faculty'] == 'Pengajian Pendidikan Islam') echo 'selected'; ?>>Pengajian Pendidikan Islam</option>
                   <option value='Pusat Pengajian Teras' <?php if ($row['faculty'] == 'Pusat Pengajian Teras') echo 'selected'; ?>>Pusat Pengajian Teras</option>
                   <option value='Pengurusan Usuluddin' <?php if ($row['faculty'] == 'Pengurusan Usuluddin') echo 'selected'; ?>>Pengurusan Usuluddin</option>
                   <option value='Teknologi Maklumat & Multimedia' <?php if ($row['faculty'] == 'Teknologi Maklumat & Multimedia') echo 'selected'; ?>>Teknologi Maklumat & Multimedia</option>
                </select>
          </div>

       <!--Area Field-->
      <div class="col-md-6 mb-3">
             <label class="form-label">Area Field:</label>
             <input type="text" class="form-control" name="area" value="<?php echo $row['area']?>"> 
       </di>

      <!--Sponsorship-->
     <div class="col-md-6 mb-3">
          <label class="form-label">Sponsorship:</label>
          <input type="text" class="form-control" name="sponsor" value="<?php echo $row['sponsor']?>">
      </div>

        <!--Intake Year-->
          <div class="col-md-6 mb-3">
             <label class="form-label">Intake Year:</label>
             <input type="text" class="form-control" name="intake_year" value="<?php echo $row['intake_year']?>"> 
        </div>

          <!--Academic Year-->
            <div class="col-md-6 mb-3">
              <label class="form-label">Academic Year:</label>
              <input type="text" class="form-control" name="aca_year" value="<?php echo $row['aca_year']?>"> 

           </div>

         <!--Number of Semesters-->
            <div class="col-md-6 mb-3">
             <label class="form-label">Number of Semesters:</label>
             <input type="text" class="form-control" name="numsem" value="<?php echo $row['numsem']?>"> 

         </div>
    
      <!--citizenship-->
            <div class="col-md-6 mb-3">
              <label class="form-label text-end">CITIZENSHIP</label>
              <select class="form-control" name="citizen">
                  <option value="" disabled>Choose Citizenship</option>
                  <option value="Local" <?php if ($row['citizen'] == 'Local') echo 'selected'; ?>>Local</option>
                  <option value="Foreign" <?php if ($row['citizen'] == 'Foreign') echo 'selected'; ?>>Foreign</option>
             </select>
            </div>

            <!--country-->
             <div class="col-md-6 mb-3">
             <label class="form-label text-end">COUNTRY:</label>
             <input type="text" class="form-control" name="country" value="<?php echo $row['country']?>">
            </div>   
     
            <!--Entry Date-->
     <div class="col-md-6 mb-3">
           <label class="form-label">Entry Date:</label>
         <input type="date" class="form-control" name="entry_date" value="<?php echo $row['entry_date']?>"> 
      </div>

   <!--Senate-->
    <div class="col-md-6 mb-3">
      <label class="form-label">Senate:</label>
       <input type="date" class="form-control" name="senate" value="<?php echo $row['senate']?>"> 

    </div>

     <!--Duration-->
    <div class="col-md-6 mb-3">
      <label class="form-label">Duration:</label>
      <input type="text" class="form-control" name="duration" value="<?php echo $row['duration']?>"> 
   </div>

     <!--GOT-->
     <div class="col-md-6 mb-3">
      <label class="form-label">GOT:</label>
         <select class="form-control" name="got" required>
           <option value="" disabled selected>Choose</option>
           <option value="Yes" <?php if ($row['cgpa_phd'] == 'Yes') echo 'selected'; ?>>Yes</option>
           <option value="No" <?php if ($row['cgpa_phd'] == 'No') echo 'selected'; ?>>No</option>
      </select>
  
      <!--Status Active-->
            <div class="col-md-6 mb-3">
              <label class="form-label text-end">STATUS:</label>
               <select class="form-control" name="status_active">
                  <option value="" disabled>Choose Status</option>
                  <option value="Active" <?php if ($row['status_active'] == 'Active') echo 'selected'; ?>>Active</option>
                  <option value="Thesis" <?php if ($row['status_active'] == 'Thesis') echo 'selected'; ?>>Thesis</option>
                  <option value="Graduate" <?php if ($row['status_active'] == 'Graduate') echo 'selected'; ?>>Graduate</option>
                  <option value="Complete" <?php if ($row['status_active'] == 'Complete') echo 'selected'; ?>>Complete</option>
                  <option value="Probation" <?php if ($row['status_active'] == 'Probation') echo 'selected'; ?>>Probation</option>
                  <option value="Deferred" <?php if ($row['status_active'] == 'Deferred') echo 'selected'; ?>>Deferred</option>
                  <option value="Dropped" <?php if ($row['status_active'] == 'Dropped') echo 'selected'; ?>>Dropped</option>
                  <option value="Terminated" <?php if ($row['status_active'] == 'Terminated') echo 'selected'; ?>>Terminated</option>
             </select>
          </div>     
            <!--Status Active-->  
          
            <!-- Link Evidence -->
                 <div class="col-md-6 mb-3">
                        <label class="form-label">LINK EVIDENCE:</label>
                        <input type="text" class="form-control" name="link" value="<?php echo $row['link']?>">
                    </div>

           <!-- Remarks -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">REMARKS:</label>
                        <input type="text" class="form-control" name="remarks" value="<?php echo $row['remarks']?>">
                    </div>    
         <!--Button-->
      <div> 
       <center>
            <button type ="submit" class="btn btn-success" name="submit">UPDATE</button>
            <a href="PostgraduateStud.php" class="btn btn-danger">Cancel</a>
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