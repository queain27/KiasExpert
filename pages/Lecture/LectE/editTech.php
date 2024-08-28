<?php
session_start();

if(!isset($_SESSION['user_id']))

{
    header('Location: ../Auth/login.php'); 
    exit;
}
include "../Auth/config.php";
$tech_id= ($_GET['ID']); // Ensure the TECHNOLOGY ID is an integer

if (isset($_POST['submit'])) {
  $staff_id = $_POST['staff_id'];
  $staff_name = $_POST['staff_name'];
  $tech_name = $_POST['tech_name'];
  $type = $_POST['type'];
  $start_date = $_POST['start_date'];
  $end_date = $_POST['end_date'];
  $date_achv = $_POST['date_achv'];
  $licensing = $_POST['licensing'];
  $gross_incom = $_POST['gross_incom'];
  $link = $_POST['link'];
  $remarks = $_POST['remarks'];

    $stmt = $conn->prepare("UPDATE know_licen SET staff_id=?, staff_name=?, tech_name=?, type=?, start_date=?, end_date=?, date_achv=?, licensing=?, gross_incom=?, link=?, remarks=? WHERE tech_id=?");
    $stmt->bind_param("ssssssssssss", $staff_id, $staff_name, $tech_name, $type, $start_date, $end_date, $date_achv, $licensing, $gross_incom, $link, $remarks, $tech_id);
    
    if ($stmt->execute()) {
        echo "<script>alert('New record successfully updated');</script>";
        echo "<script>document.location='Technology.php';</script>";
    } else {
        echo "<script>alert('Something went wrong');</script>";
    }
    
    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Edit TECHNOLOGY Student</title>
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
<link rel="shortcut icon" href="../../../images/Logo2.png" type="image/x-icon">
</head>
<body>
<div class="container">
       <div class="text-center mb-5"><br><br><br><br>
        <b><p>Click Update After Finish Changing Information</p></b>
    </div>
    <?php 
        $tech_id = mysqli_real_escape_string($conn, $tech_id); // Sanitize the input to prevent SQL injection
        $stmt = $conn->prepare("SELECT * FROM know_licen WHERE tech_id = ? LIMIT 1");
        $stmt->bind_param("s", $tech_id);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result && $result->num_rows > 0) {
            $row = $result->fetch_assoc();
        } else {
            echo "<script>alert('No record found');</script>";
            echo "<script>document.location='Technology.php';</script>";
            exit();
        }
        $stmt->close();
    ?>
    <div class="container d-flex justify-content-center">
        <form action="" method="post" style="width:50vw; min-width:300px;">
            <div class="row">

                <!-- TECHNOLOGY ID -->
                <div class="col-md-6 mb-3">
                    <label class="form-label">TECHNOLOGY ID:</label>
                    <input type="text" class="form-control" name="tech_id" value="<?php echo $row['tech_id']?>" readonly>
                </div>

                <!-- Staff ID -->
                <div class="col-md-6 mb-3">
                    <label class="form-label">STAFF ID:</label>
                    <input type="text" class="form-control" name="staff_id" value="<?php echo $row['staff_id']?>" readonly>
                </div>    

                <!-- TECHNOLOGY Name -->
                <div class="col-md-6 mb-3">
                    <label class="form-label">TECHNOLOGY NAME:</label>
                    <input type="text" class="form-control" name="tech_name" value="<?php echo $row['tech_name']?>">
                </div>
  
                <!-- Staff Name -->
                <div class="col-md-6 mb-3">
                    <label class="form-label">STAFF NAME:</label>
                    <input type="text" class="form-control" name="staff_name" value="<?php echo $row['staff_name']?>" readonly>
                </div>

                <!--TYPE -->
                <div class="col-md-6 mb-3">
                    <label class="form-label">TYPE (LICENSED /OUTRIGHT ):</label>
                    <select class="form-control" name="type" required>
                            <option value="" disabled selected>Choose</option>
                            <option value="Licensed" <?php if ($row['type'] == 'Licensed') echo 'selected'; ?>>LICENSED</option>
                            <option value="Outright" <?php if ($row['type'] == 'Outright') echo 'selected'; ?>>OUTRIGHT</option>
                        </select>
                </div>

                <!-- START DATE -->
                <div class="col-md-6 mb-3">
                    <label class="form-label">START DATE:</label>
                    <input type="date" class="form-control" name="start_date" value="<?php echo $row['start_date']?>">
                </div>

                <!-- END DATE -->
                <div class="col-md-6 mb-3">
                    <label class="form-label">END DATE:</label>
                    <input type="date" class="form-control" name="end_date" value="<?php echo $row['end_date']?>">
                </div> 

                <!-- DATE THRESHOLD ACHIEVED (RM 10 000) -->
                <div class="col-md-6 mb-3">
                    <label class="form-label">DATE THRESHOLD ACHIEVED (RM 10 000):</label>
                    <input type="date" class="form-control" name="date_achv" value="<?php echo $row['date_achv']?>">
                </div>

                <!-- LICENSEE -->
                <div class="col-md-6 mb-3">
                    <label class="form-label">LICENSEE:</label>
                    <input type="text" class="form-control" name="licensing" value="<?php echo $row['licensing']?>">
                </div>

                <!-- gross_incom -->
                <div class="col-md-6 mb-3">
                    <label class="form-label">GROSS INCOME (RM):</label>
                    <input type="number" class="form-control" name="gross_incom" value="<?php echo $row['gross_incom']?>">
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
                <a href="Technology.php" class="btn btn-danger">Cancel</a>
            </div>
        </form>
    </div>
</div>
<!-- Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<!-- Bootstrap -->
</body>
</html>
