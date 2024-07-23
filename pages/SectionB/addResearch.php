<?php
include "../examples/config.php";
if(isset($_POST['submit'])) {
  $project_id = $_POST['project_id'];
   $staff_id = $_POST['staff_id'];
   $staff_name = $_POST['staff_name'];
   $research_title = $_POST['research_title'];
   $start_date = $_POST['start_date'];
   $end_date = $_POST['end_date'];
   $sponsor = $_POST['sponsor'];
   $sponsor_cat = $_POST['sponsor_cat'];
   $grant_name = $_POST['grant_name'];
   $amtpled_act = $_POST['amtpled_act'];
   $amtpled_new = $_POST['amtpled_new'];
   $amt_rec = $_POST['amt_rec'];
   $remarks = $_POST['remarks'];

   $sql = mysqli_query($conn, "INSERT INTO `research` ('project_id','staff_id','staff_name','research_title','start_date','end_date','sponsor','sponsor_cat','grant_name','amtpled_act','amtpled_new','amt_rec','remarks')");

   if($sql) {
       echo "<script>alert('New record successfully added');</script>";
       echo "<script>document.location='CriticalMass.php';</script>";
   } else {
       echo "<script>alert('Staff ID Already Exists');</script>";
   }
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Add New Research</title>
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
    
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h1 class="border-bottom text-center pb-3 mb-4">Add New Research </h1>
        </div>
      </div>
      <form action="" method="post">
        <div class="row">
          <!--Project ID-->
          <div class="col-md-6 mb-3">
            <label class="form-label">PROJECT ID:</label>
            <input type ="text"  class="form-control" name="project_id" placeholder="Project ID" required>
</div>
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
            <label class="form-label">RESEARCH TITLE:</label>
            <input type="text" class="form-control" name="research_title" placeholder="Research Title" required>
          </div>
          <!--Start Date-->
          <div class="col-md-6 mb-3">
            <label class="form-label">START DATE:</label>
            <input type="date" class="form-control" name="start_date" required>
          </div>
          <!--End Of date -->
          <div class="col-md-6 mb-3">
            <label class="form-label">END OF DATE:</label>
            <input type="date" class="form-control" name="end_date" required>
          </div>
          <!--Sponsor-->
          <div class="col-md-6 mb-3">
            <label class="form-label">SPONSOR:</label>
            <input type="text" class="form-control" name="sponsor" placeholder="Sponsor" required>
          </div>
          <!--Sponsor Category -->
          <div class="col-md-6 mb-3">
            <label class="form-label">SPONSOR CATEGORY:</label>
            <select class="form-control" name="sponsor_cat" required>
              <option value="" disabled selected>Choose</option>
              <option value="University">University</option>
              <option value="National">National</option>
              <option value="International">International</option>
            </select>
          </div>
          <!--Academic Qualification-->
          <div class="col-md-6 mb-3">
            <label class="form-label">GRANT NAME:</label>
            <input type="text" class="form-control" name="grant_name" placeholder="Grant Name" required>
          </div>
          <!--Professional Qualification-->
          <div class="col-md-6 mb-3">
            <label class="form-label">AMOUNT PLEDGED (APPROVED) FOR ACTIVE PROJECT IN THIS YEAR:</label>
            <input type="text" class="form-control" name="amtpled_act" placeholder="Amount Pledged (Approved) For Active Project In This Year" required>
         </div>
          <!--Registratio Number-->
          <div class="col-md-6 mb-3">
            <label class="form-label">AMOUNT PLEDGED (APPROVED) FOR NEW PROJECT IN THE YEAR</label>
            <input type="text" class="form-control" name="amtpled_new" placeholder="Amount Pledged (Approved) For New Project In The Year" required>
          </div>
       
          <!--Amount Received-->
          <div class="col-md-6 mb-3">
            <label class="form-label">AMOUNT RECEIVED:"</label>
            <input type="text" class="form-control" name="amt_rec" placeholder="Amount Received" required>
          </div>
         
          <!--Remarks-->
          <div class="col-md-6 mb-3">
            <label class="form-label">REMARKS:</label>
            <input type="text" class="form-control" name="remarks" placeholder="Remarks" required>
          </div>
          <!--Button-->
          <div class="col-md-12 mb-3 text-center">
            <button type="submit" class="btn btn-primary" name="submit">ADD</button>
            <a href="CriticalMass.php" class="btn btn-success">View Research</a>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

</body>
</html>
