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
   $status = $_POST['status'];
   $status_contract= $_POST['status_contract'];
   $status_time = $_POST['status_time'];
   $citizen = $_POST['citizen'];
   $country = $_POST['country'];

 $sql = mysqli_query($conn, "INSERT INTO `staff` (`staff_id`, `staff_name`, `grade`, `position`, `first_appointment`, `current_appointment`, `status`, `status_contract`, `status_time`, `citizen`, `country`)
        VALUES ('$staff_id', '$staff_name', '$grade', '$position', '$first_appointment', '$current_appointment', '$status', '$status_contract', '$status_time', '$citizen', '$country')");
    
    if($sql)
    
    {
       echo "<script>alert('New record successsfully addedd');</script>";
       echo "<script>document.location='Staff.php';</script>";
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