<?php
include "../examples/config.php";
$ip_id= ($_GET['ID']); // Ensure the TECHNOLOGY ID is an integer

if (isset($_POST['submit'])) {
  $staff_id = $_POST['staff_id'];
  $staff_name = $_POST['staff_name'];
  $ip_name = $_POST['ip_name'];
  $type = $_POST['type'];
  $link = $_POST['link'];
  $remarks = $_POST['remarks'];

    $stmt = $conn->prepare("UPDATE iprs SET staff_id=?, staff_name=?, ip_name=?, type=?, link=?, remarks=? WHERE ip_id=?");
    $stmt->bind_param("sssssss", $staff_id, $staff_name, $ip_name, $type,$link, $remarks, $ip_id);
    
    if ($stmt->execute()) {
        echo "<script>alert('New record successfully updated');</script>";
        echo "<script>document.location='IPRs.php';</script>";
    } else {
        echo "<script>alert('Something went wrong');</script>";
    }
    
    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>EDIT OTHER IPRs</title>
<style>
    body {
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
    }
</style>
<link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
<script src="../../bootstrap/js/jquery.min.js"></script>
<script src="../../bootstrap/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" crossorigin="anonymous">
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
        $ip_id = mysqli_real_escape_string($conn, $ip_id); // Sanitize the input to prevent SQL injection
        $stmt = $conn->prepare("SELECT * FROM iprs WHERE ip_id = ? LIMIT 1");
        $stmt->bind_param("s", $ip_id);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result && $result->num_rows > 0) {
            $row = $result->fetch_assoc();
        } else {
            echo "<script>alert('No record found');</script>";
            echo "<script>document.location='IPRs.php';</script>";
            exit();
        }
        $stmt->close();
    ?>
    <div class="container d-flex justify-content-center">
        <form action="" method="post" style="width:50vw; min-width:300px;">
            <div class="row">

                <!-- ISBN OR IP ID / NO -->
                <div class="col-md-6 mb-3">
                    <label class="form-label">ISBN OR IP ID / NO.:</label>
                    <input type="text" class="form-control" name="ip_id" value="<?php echo $row['ip_id']?>" readonly>
                </div>

                <!-- Staff ID -->
                <div class="col-md-6 mb-3">
                    <label class="form-label">STAFF ID:</label>
                    <input type="text" class="form-control" name="staff_id" value="<?php echo $row['staff_id']?>" readonly>
                </div>    

                <!-- NAME OF IP -->
                <div class="col-md-6 mb-3">
                    <label class="form-label">NAME OF IP:</label>
                    <input type="text" class="form-control" name="ip_name" value="<?php echo $row['ip_name']?>">
                </div>
  
                <!-- Staff Name -->
                <div class="col-md-6 mb-3">
                    <label class="form-label">STAFF NAME:</label>
                    <input type="text" class="form-control" name="staff_name" value="<?php echo $row['staff_name']?>" readonly>
                </div>

                <!--TYPE -->
                <div class="col-md-6 mb-3">
                    <label class="form-label">TYPE (COPYRIGHT, TRADEMARK, INDUSTRIAL DESIGN, ETC):</label>
                    <select class="form-control" name="type" required>
                            <option value="" disabled selected>Choose</option>
                            <option value="Copyright" <?php if ($row['type'] == 'Copyright') echo 'selected'; ?>>COPYRIGHT</option>
                            <option value="Trademark" <?php if ($row['type'] == 'Trademark') echo 'selected'; ?>>TRADEMARK</option>
                            <option value="Industrial Design" <?php if ($row['type'] == 'Industrial Design') echo 'selected'; ?>> INDUSTRIAL DESIGN</option>
                            <option value="Etc" <?php if ($row['type'] == 'Etc') echo 'selected'; ?>>ETC</option>
                        </select>
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
                <a href="IPRs.php" class="btn btn-danger">Cancel</a>
            </div>
        </form>
    </div>
</div>
<!-- Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<!-- Bootstrap -->
</body>
</html>
