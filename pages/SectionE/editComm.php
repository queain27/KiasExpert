<?php
session_start();

if(!isset($_SESSION['user_id']))

{
    header('Location: ../examples/login.php'); 
    exit;
}
include "../examples/config.php";
$product_id= ($_GET['ID']); // Ensure the commercial ID is an integer

if (isset($_POST['submit'])) {
    $staff_id = $_POST['staff_id'];
    $staff_name = $_POST['staff_name'];
    $product_name = $_POST['product_name'];
    $date_com = $_POST['date_com'];
    $date_ach = $_POST['date_ach'];
    $comp_name = $_POST['comp_name'];
    $gross_income = $_POST['gross_income'];
    $link_licen = $_POST['link_licen'];
    $link_com = $_POST['link_com'];
    $remarks = $_POST['remarks'];

    $stmt = $conn->prepare("UPDATE commercial SET staff_id=?, staff_name=?, product_name=?, date_com=?, date_ach=?, comp_name=?, gross_income=?, link_licen=?, link_com=?, remarks=? WHERE product_id=?");
    $stmt->bind_param("sssssssssss", $staff_id, $staff_name, $product_name, $date_com, $date_ach, $comp_name, $gross_income, $link_licen, $link_com, $remarks, $product_id);
    
    if ($stmt->execute()) {
        echo "<script>alert('New record successfully updated');</script>";
        echo "<script>document.location='Commercial.php';</script>";
    } else {
        echo "<script>alert('Something went wrong');</script>";
    }
    
    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Edit commercial Student</title>
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
       <div class="text-center mb-5"><br><br><br><br>
        <b><p>Click Update After Finish Changing Information</p></b>
    </div>
    <?php 
        $product_id = mysqli_real_escape_string($conn, $product_id); // Sanitize the input to prevent SQL injection
        $stmt = $conn->prepare("SELECT * FROM commercial WHERE product_id = ? LIMIT 1");
        $stmt->bind_param("s", $product_id);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result && $result->num_rows > 0) {
            $row = $result->fetch_assoc();
        } else {
            echo "<script>alert('No record found');</script>";
            echo "<script>document.location='Commercial.php';</script>";
            exit();
        }
        $stmt->close();
    ?>
    <div class="container d-flex justify-content-center">
        <form action="" method="post" style="width:50vw; min-width:300px;">
            <div class="row">

                <!-- commercial ID -->
                <div class="col-md-6 mb-3">
                    <label class="form-label">COMMERCIAL ID:</label>
                    <input type="text" class="form-control" name="product_id" value="<?php echo $row['product_id']?>" readonly>
                </div>

                <!-- Staff ID -->
                <div class="col-md-6 mb-3">
                    <label class="form-label">STAFF ID:</label>
                    <input type="text" class="form-control" name="staff_id" value="<?php echo $row['staff_id']?>" readonly>
                </div>    

                <!-- commercial Name -->
                <div class="col-md-6 mb-3">
                    <label class="form-label">COMMERCIAL NAME:</label>
                    <input type="text" class="form-control" name="product_name" value="<?php echo $row['product_name']?>">
                </div>
  
                <!-- Staff Name -->
                <div class="col-md-6 mb-3">
                    <label class="form-label">STAFF NAME:</label>
                    <input type="text" class="form-control" name="staff_name" value="<?php echo $row['staff_name']?>" readonly>
                </div>

                <!-- Date Comm -->
                <div class="col-md-6 mb-3">
                    <label class="form-label">DATE COMMERCIALIZED:</label>
                    <input type="date" class="form-control" name="date_com" value="<?php echo $row['date_com']?>">
                </div>

                <!-- Date Achieve -->
                <div class="col-md-6 mb-3">
                    <label class="form-label">DATE THRESHOLD ACHIEVED (RM 20,000):</label>
                    <input type="date" class="form-control" name="date_ach" value="<?php echo $row['date_ach']?>">
                </div>

                <!-- COMPANY NAME -->
                <div class="col-md-6 mb-3">
                    <label class="form-label">COMPANY NAME:</label>
                    <input type="text" class="form-control" name="comp_name" value="<?php echo $row['comp_name']?>">
                </div> 

                <!-- gross_income -->
                <div class="col-md-6 mb-3">
                    <label class="form-label">GROSS INCOME (RM):</label>
                    <input type="number" class="form-control" name="gross_income" value="<?php echo $row['gross_income']?>">
                </div>

                <!-- Expiry Date -->
                <div class="col-md-6 mb-3">
                    <label class="form-label">LINK TO EVIDENCE OF LICENSING AGREEMENT:</label>
                    <input type="text" class="form-control" name="link_licen" value="<?php echo $row['link_licen']?>">
                </div>

                <!-- link_com -->
                <div class="col-md-6 mb-3">
                    <label class="form-label">LINK TO EVIDENCE OF COMMERCIALIZED PRODUCT:</label>
                    <input type="text" class="form-control" name="link_com" value="<?php echo $row['link_com']?>">
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
                <a href="Commercial.php" class="btn btn-danger">Cancel</a>
            </div>
        </form>
    </div>
</div>
<!-- Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<!-- Bootstrap -->
</body>
</html>
