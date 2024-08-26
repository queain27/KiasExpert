<?php
session_start();

if(!isset($_SESSION['user_id']))

{
    header('Location: ../Auth/login.php'); 
    exit;
}
include "../Auth/config.php";
$id = $_GET['ID'];

if (isset($_POST['submit'])) {

    $name_organizer = $_POST['name_organizer'];
    $name_title = $_POST['name_title'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    $gross_income = $_POST['gross_income'];
    $link = $_POST['link'];
    $remark = $_POST['remark'];

    $sql = mysqli_query($conn, "UPDATE `conference` SET `name_organizer`='$name_organizer',`name_title`='$name_title',`start_date`='$start_date' ,`end_date`='$end_date',`gross_income`='$gross_income',`link`='$link',`remark`='$remark' WHERE id=$id");

    if ($sql) {
        echo "<script>alert('New record successfully updated');</script>";
        echo "<script>document.location='Orga_Seminar.php';</script>";
    } else {
        
        echo "<script>alert('Something Wrong');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Organiser Information</title>
    <style>
        body {
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }
        .container {
            margin-top: 50px;
        }
        .form-container {
            width: 50vw;
            min-width: 300px;
            margin: auto;
            padding: 20px;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }
        .form-label {
            font-weight: bold;
        }
        .text-center p {
            font-weight: bold;
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
        <div class="text-center mb-4">
            <p>Click Update After Finish Changing Information</p>
        </div>

        <?php 
        $sql = "SELECT * FROM `conference` WHERE id = $id LIMIT 1";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        ?>

        <div class="form-container">
            <form action="" method="post">
                <div class="row">

                    <!-- Name -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">NAME OF COORDINATOR:</label>
                        <input type="text" class="form-control" name="name_organizer" value="<?php echo $row['name_organizer'] ?>">
                    </div>

                    <!-- Name Title -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">NAME OF CONFERENCE/ SEMINAR/KNOWLEDGE-SHARING PROGRAM:</label>
                        <input type="text" class="form-control" name="name_title" value="<?php echo $row['name_title'] ?>">
                    </div>

                    <!-- Start Date -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">FIRST APPOINTMENT:</label>
                        <input type="date" class="form-control" name="start_date" value="<?php echo $row['start_date'] ?>">
                    </div>

                    <!-- End Date -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">END DATE:</label>
                        <input type="date" class="form-control" name="end_date" value="<?php echo $row['end_date'] ?>">
                    </div>

                    <!-- Gross Income Generate (RM) -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">GROSS INCOME GENERATE (RM):</label>
                        <input type="text" class="form-control" name="gross_income" value="<?php echo $row['gross_income'] ?>">
                    </div>

                    <!-- Link Evidence -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">LINK TO EVIDENCE:</label>
                        <input type="text" class="form-control" name="link" value="<?php echo $row['link'] ?>">
                    </div>

                    <!-- Remark -->
                    <div class="col-md-12 mb-3">
                        <label class="form-label">REMARK:</label>
                        <textarea class="form-control" name="remark"><?php echo $row['remark'] ?></textarea>
                    </div>

                </div>
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-success me-2" name="submit">UPDATE</button>
                    <a href="Orga_Seminar.php" class="btn btn-danger">Cancel</a>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
