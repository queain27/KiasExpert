<?php
include "../examples/config.php";
$staff_id =$_GET['ID'];

if(isset($_POST ['submit']))
{

   $staff_name = $_POST['staff_name']; 
   $grade = $_POST['grade'];
   $position = $_POST['position'];
   $first_appointment = $_POST['first_appointment'];
   $current_appointment = $_POST['current_appointment']; 
   $status = $_POST['status'];
   $status_contract= $_POST['status_contract'];
   $status_time = $_POST['status_time'];
   $citizen = $_POST['citizen'];
   $country = $_POST['country'];

   $sql = mysqli_query($conn, "UPDATE `staff` SET `staff_name`='$staff_name',`grade`='$grade',`position`='$position',
   `first_appointment`='$first_appointment' ,`current_appointment`='$current_appointment',`status`='$status',`status_contract`='$status_contract',
   `status_time`='$status_time',`citizen`='$citizen',`country`='$country' WHERE staff_id=$staff_id");

      
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
<title> Edit  Staff Academic</title>
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
        $sql = "SELECT * FROM `staff` WHERE staff_id = $staff_id LIMIT 1";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        ?>

    <div class ="container d-flex justify-contetnt-">
        <form action =" " method="post" style="width:50vw; min-width:300px;">
          
        <div class ="row">
        
         <!--Staff ID-->
             <div class="col">
               <label class ="form-label">STAFF ID:</label>
               <input type="text" class="form-control" name="staff_id" value="<?php echo $row['staff_id']?>"> 
            </div>

             <!--Name-->
             <div class="col-md-6 mb-3">
              <label class="form-label text-end">STAFF NAME:</label>
              <input type="text" class="form-control" name="staff_name"value="<?php echo $row['staff_name']?>">
            </div>

              <!--Grade-->
              <div class="col-md-6 mb-3">
              <label class="form-label text-end">GRADE:</label>
              <input type="text" class="form-control" name="grade" value="<?php echo $row['grade']?>">
            </div>

            <!--Position Staff-->
            <div class="col-md-6 mb-3">
              <label class="form-label text-end">POSITION STAFF:</label>
              <select class="form-control" name="position" value="<?php echo $row['position']?>">

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
              <input type="date" class="form-control" name="first_appointment" value="<?php echo $row['first_appointment']?>">
            </div>

            <!--Current Appointment-->
            <div class="col-md-6 mb-3">
              <label class="form-label text-end">CURRENT APPOINTMENT:</label>
              <input type="date" class="form-control" name="current_appointment" value="<?php echo $row['current_appointment']?>">
            </div>

            <!--Status Active-->
            <div class="col-md-6 mb-3">
              <label class="form-label text-end">STATUS:</label>
              <select class="form-control" name="status" value="<?php echo $row['status']?>">
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
              <select class="form-control" name="status_contract" value="<?php echo $row['status_contract']?>">
                <option value="" disabled selected>Choose Status  contract</option>
                <option value="Permanent">Permenant</option>
                <option value="Contract">Contract</option>
              </select>
            </div>

            <!--Status Time-->
            <div class="col-md-6 mb-3">
              <label class="form-label text-end">STATUS TIME:</label>
              <select class="form-control" name="status_time" value="<?php echo $row['status_time']?>">
                <option value="" disabled selected>Choose Status time</option>
                <option value="Full-Time">Full-Time</option>
                <option value="Part-Time">Part-Time</option>
              </select>
            </div>

            <!--citizenship-->
              <div class="col-md-6 mb-3">
            <div class="col-md-6 mb-3">
              <label class="form-label text-end">CITIZENSHIP</label>
              <select class="form-control" name="citizen" value="<?php echo $row['citizen']?>">
                <option value="" disabled selected>Choose Citizenship</option>
                <option value="Local">Local</option>
                <option value="Foreign">Foreign</option>
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