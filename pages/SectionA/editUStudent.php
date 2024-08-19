<?php
session_start();

if(!isset($_SESSION['user_id']))

{
    header('Location: ../examples/login.php'); 
    exit;
}
include "../examples/config.php";
$matric_no =$_GET['ID'];

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
   
   $sql = mysqli_query($conn, "UPDATE `ug_student` SET `student_name`='$student_name',`faculty`='$faculty',
   `year_enroll`='$year_enroll' ,`aca_year`='$aca_year',`status_active`='$status_active',`citizen`='$citizen',`country`='$country' WHERE matric_no=$matric_no");

      
   if($sql){
    echo "<script>alert('New record successsfully update');</script>";
    echo "<script>document.location='UndergraduateStud.php';</script>";
 }

 else
 { echo "<script>alert('Something Wrong');</script>";


 }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title> Edit Undergraduated Student</title>
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
        $sql = "SELECT * FROM `ug_student` WHERE matric_no = $matric_no LIMIT 1";
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
            
            <!--faculty Staff-->
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


            <!--Year Enroll-->
            <div class="col-md-6 mb-3">
              <label class="form-label text-end">YEAR ENROLL:</label>
              <input type="date" class="form-control" name="year_enroll" value="<?php echo $row['year_enroll']?>">
            </div>

            <!--ACADEMIC YEAR-->
            <div class="col-md-6 mb-3">
              <label class="form-label text-end">ACADEMIC YEAR:</label>
              <input type="date" class="form-control" name="aca_year" value="<?php echo $row['aca_year']?>">
            </div>
            
            <!--Status Active-->
            <div class="col-md-6 mb-3">
              <label class="form-label text-end">STATUS:</label>
               <select class="form-control" name="status_active">
                  <option value="" disabled>Choose Status</option>
                  <option value="Active" <?php if ($row['status_active'] == 'Active') echo 'selected'; ?>>Active</option>
                  <option value="Study" <?php if ($row['status_active'] == 'Study') echo 'selected'; ?>>Study</option>
                  <option value="Leaves" <?php if ($row['status_active'] == 'Leaves') echo 'selected'; ?>>Leaves</option>
                  <option value="Sabbatical" <?php if ($row['status_active'] == 'Sabbatical') echo 'selected'; ?>>Sabbatical</option>
                  <option value="Training" <?php if ($row['status_active'] == 'Training') echo 'selected'; ?>>Training</option>
                  <option value="Attachment" <?php if ($row['status_active'] == 'Attachment') echo 'selected'; ?>>Attachment</option>
                  <option value="Seconded" <?php if ($row['status_active'] == 'Seconded') echo 'selected'; ?>>Seconded</option>
             </select>
          </div>     
            <!--Status Active-->      

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
         <!--Button-->
      <div> 
       <center>
            <button type ="submit" class="btn btn-success" name="submit">UPDATE</button>
            <a href="UndergraduateStud.php" class="btn btn-danger">Cancel</a>
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