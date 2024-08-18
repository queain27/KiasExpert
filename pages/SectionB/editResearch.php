<?php
session_start();

if(!isset($_SESSION['user_id']))

{
    header('Location: login.php'); 
    exit;
}
include "../examples/config.php";
$project_id =$_GET['ID'];

if(isset($_POST ['submit']))
{ 
    $staff_id = $_POST['staff_id']; 
  $staff_name = $_POST['staff_name']; 
  $research_title = $_POST['research_title'];
  $start_date = $_POST['start_date'];
  $end_date= $_POST['end_date'];
  $sponsor = $_POST['sponsor'];
  $sponsor_cat = $_POST['sponsor_cat'];
  $grant_name = $_POST['grant_name'];
  $amtpled_act = $_POST['amtpled_act'];
  $amtpled_new = $_POST['amtpled_new'];
  $amt_rec = $_POST['amt_rec'];
  $remarks= $_POST['remarks'];

 
    // Use prepared statements to avoid SQL injection
    $stmt = $conn->prepare("UPDATE research SET staff_id = ?, staff_name = ?, research_title = ?, start_date = ?, end_date = ?, sponsor = ?, sponsor_cat = ?, grant_name = ?, amtpled_act = ?, amtpled_new = ?, amt_rec = ?, remarks = ? WHERE project_id = ?");
    $stmt->bind_param("isssssssssssi", $staff_id, $staff_name, $research_title, $start_date, $end_date, $sponsor, $sponsor_cat, $grant_name, $amtpled_act, $amtpled_new, $amt_rec, $remarks, $project_id);

    if($stmt->execute()) {
        echo "<script>alert('New record successfully updated');</script>";
        echo "<script>document.location='CriticalMass.php';</script>";
    } else {
        echo "<script>alert('Something went wrong');</script>";
    }

    $stmt->close();
    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Research Information</title>
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
        $sql = "SELECT * FROM `research` WHERE project_id = $project_id LIMIT 1";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        ?>

        <div class="container d-flex justify-content-center">
            <form action="" method="post" style="width:50vw; min-width:300px;">
                <div class="row">
                      <!-- Staff ID -->
                      <div class="col-md-6 mb-3">
                        <label class="form-label">PROJECT ID:</label>
                        <input type="text" class="form-control" name="project_id" value="<?php echo $row['project_id']?>" readonly>
                    </div>
                    <!-- Staff ID -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">STAFF ID:</label>
                        <input type="text" class="form-control" name="staff_id" value="<?php echo $row['staff_id']?>" readonly>
                    </div>

                    <!-- Name -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">STAFF NAME:</label>
                        <input type="text" class="form-control" name="staff_name" value="<?php echo $row['staff_name']?>" readonly>
                    </div>

                 <!-- Name -->
                 <div class="col-md-6 mb-3">
                        <label class="form-label">RESEARCH TITLE:</label>
                        <input type="text" class="form-control" name="research_title" value="<?php echo $row['research_title']?>">
                    </div>


                    <!-- First Appointment -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">START DATE:</label>
                        <input type="date" class="form-control" name="start_date" value="<?php echo $row['start_date']?>">
                    </div>
                  <!-- First Appointment -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">END DATE:</label>
                        <input type="date" class="form-control" name="end_date" value="<?php echo $row['end_date']?>">
                    </div>
                     <!-- First Appointment -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">SPONSOR:</label>
                        <input type="text" class="form-control" name="sponsor" value="<?php echo $row['sponsor']?>">
                    </div>



                    <!-- Cohort -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">SPONSOR CATEGORY :</label>
                        <select class="form-control" name="sponsor_cat" required>
                            <option value="" disabled selected>Choose</option>
                            <option value="University" <?php if ($row['sponsor_cat'] == 'University') echo 'selected'; ?>>University</option>
                            <option value="National" <?php if ($row['sponsor_cat'] == 'National') echo 'selected'; ?>>National</option>
                            <option value="International" <?php if ($row['sponsor_cat'] == 'International') echo 'selected'; ?>>International</option>
                        </select>
                    </div>

                    <!-- Academic Qualification -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">GRANT NAME:</label>
                        <input type="text" class="form-control" name="grant_name" value="<?php echo $row['grant_name']?>">
                    </div>

                    <!-- Name of Professional Qualification/Awarding Body -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">AMOUNT PLEDGED (APPROVED)ACTIVE THIS YEAR:</label>
                        <input type="text" class="form-control" name="amtpled_act" value="<?php echo $row['amtpled_act']?>">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">AMOUNT PLEDGED (APPROVED)NEW PROJECT THIS YEAR:</label>
                        <input type="text" class="form-control" name="amtpled_new" value="<?php echo $row['amtpled_new']?>">
                    </div>

                    <!-- Registration Number for Professional Membership -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">AMOUNT RECEIVED :</label>
                        <input type="text" class="form-control" name="amt_rec" value="<?php echo $row['amt_rec']?>">
                    </div>

                    <!-- Remarks -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">REMARKS:</label>
                        <input type="text" class="form-control" name="remarks" value="<?php echo $row['remarks']?>">
                    </div>         
               <div>
                  <center>
                       <button type ="submit" class="btn btn-success" name="submit">UPDATE</button>
                       <a href="CriticalMass.php" class="btn btn-danger">Cancel</a>
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


