<?php
session_start();

if(!isset($_SESSION['user_id']))

{
    header('Location: ../Auth/login.php'); 
    exit;
}
include "../Auth/config.php";
$project_id= ($_GET['ID']); // Ensure the TECHNOLOGY ID is an integer

if (isset($_POST['submit'])) {
    $staff_id = $_POST['staff_id'];
    $staff_name = $_POST['staff_name'];
    $regis_comp = $_POST['regis_comp'];
    $comp_name = $_POST['comp_name'];
    $date_corp = $_POST['date_corp'];
    $equity = $_POST['equity'];
    $desc_research = $_POST['desc_research'];
    $link = $_POST['link'];
    $remarks = $_POST['remarks'];

    $stmt = $conn->prepare("UPDATE spinn_off SET staff_id=?, staff_name=?, regis_comp=?, comp_name=?, date_corp=?, equity=?, desc_research=?, link=?, remarks=? WHERE project_id=?");
    $stmt->bind_param("ssssssssss", $staff_id, $staff_name, $regis_comp, $comp_name, $date_corp, $equity, $desc_research, $link, $remarks, $project_id);
    
    if ($stmt->execute()) {
        echo "<script>alert('New record successfully updated');</script>";
        echo "<script>document.location='Startup.php';</script>";
    } else {
        echo "<script>alert('Something went wrong');</script>";
    }
    
    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>EDIT Spinn Off</title>
<style>
    body {
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
    }
</style>
<link rel="stylesheet" href="../../../bootstrap/css/bootstrap.min.css">
<script src="../../../bootstrap/js/jquery.min.js"></script>
<script src="../../../bootstrap/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../../../css/navbar.css">
<link rel="shortcut icon" href="../../images/Logo2.png" type="image/x-icon">
</head>
<body>
<div class="container">
       <div class="text-center mb-5"><br><br><br><br>
        <b><p>Click Update After Finish Changing Information</p></b>
    </div>
    <?php 
        $project_id = mysqli_real_escape_string($conn, $project_id); // Sanitize the input to prevent SQL injection
        $stmt = $conn->prepare("SELECT * FROM spinn_off WHERE project_id = ? LIMIT 1");
        $stmt->bind_param("s", $project_id);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result && $result->num_rows > 0) {
            $row = $result->fetch_assoc();
        } else {
            echo "<script>alert('No record found');</script>";
            echo "<script>document.location='Startup.php';</script>";
            exit();
        }
        $stmt->close();
    ?>
    <div class="container d-flex justify-content-center">
        <form action="" method="post" style="width:50vw; min-width:300px;">
            <div class="row">

                <!--PROJECT ID / NO.-->
                 <div class="col-md-6 mb-3">
                    <label class="form-label">PROJECT ID / NO.:</label>
                    <input type="text" class="form-control" name="project_id" value="<?php echo $row['project_id']?>" readonly>
                </div>

                <!-- Staff ID -->
                <div class="col-md-6 mb-3">
                    <label class="form-label">STAFF ID:</label>
                    <input type="text" class="form-control" name="staff_id" value="<?php echo $row['staff_id']?>" readonly>
                </div>    

               <!--COMPANY REGISTRATION NO-->
                <div class="col-md-6 mb-3">
                    <label class="form-label">COMPANY REGISTRATION NO:</label>
                    <input type="text" class="form-control" name="regis_comp" value="<?php echo $row['regis_comp']?>" readonly>
                </div>
  
                <!-- Staff Name -->
                <div class="col-md-6 mb-3">
                    <label class="form-label">STAFF NAME:</label>
                    <input type="text" class="form-control" name="staff_name" value="<?php echo $row['staff_name']?>" readonly>
                </div>

          <!--COMPANY REGISTRATION NO-->
          <div class="col-md-6 mb-3">
            <label class="form-label">COMPANY REGISTRATION NO:</label>
            <input type="text" class="form-control" name="regis_comp"  value="<?php echo $row['regis_comp']?>" readonly>
          </div>

          <!--NAME COMPANY-->
          <div class="col-md-6 mb-3">
            <label class="form-label">NAME OF COMPANY:</label>
            <input type="text" class="form-control" name="comp_name" value="<?php echo $row['comp_name']?>" readonly>
          </div>

          <!--Date Incorporated-->
          <div class="col-md-6 mb-3">
            <label class="form-label">DATE INCORPORATED:</label>
            <input type="date" class="form-control" name="date_corp"  value="<?php echo $row['date_corp']?>"required>
          </div>

          <!--EQUITY (%)-->
          <div class="col-md-6 mb-3">
            <label class="form-label">EQUITY (%):</label>
            <input type="number" class="form-control" name="equity" value="<?php echo $row['equity']?>"required>
          </div>

         <!--DESCRIPTION OF RESEARCH INNOVATION-->
          <div class="col-md-6 mb-3">
            <label class="form-label">DESCRIPTION OF RESEARCH INNOVATION:</label>
            <input type="text" class="form-control" name="desc_research" value="<?php echo $row['desc_research']?>"required>
          </div>
               <!-- Link-->
               <div class="col-md-6 mb-3">
                    <label class="form-label">LINK TO EVIDENCE:</label>
                    <input type="text" class="form-control" name="link" value="<?php echo $row['link']?>">
                </div>
                <!-- Remarks -->
                <div class="col-md-6 mb-3">
                    <label class="form-label">REMARKS:</label>
                    <textarea class="form-control" name="remarks"><?php echo $row['remarks']?></textarea>
                </div>
            </div>

            <!-- Button -->
            <div class="text-center">
                <button type="submit" class="btn btn-success" name="submit">UPDATE</button>
                <a href="Startup.php" class="btn btn-danger">Cancel</a>
            </div>
        </form>
    </div>
</div>
<!-- Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<!-- Bootstrap -->
</body>
</html>
