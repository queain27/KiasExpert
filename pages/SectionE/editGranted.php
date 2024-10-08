<?php
session_start();

if(!isset($_SESSION['user_id']))

{
    header('Location: ../examples/login.php'); 
    exit;
}
include "../examples/config.php";
$patent_id= ($_GET['ID']); // Ensure the patent ID is an integer

if (isset($_POST['submit'])) {
    $staff_id = $_POST['staff_id'];
    $staff_name = $_POST['staff_name'];
    $patent_name = $_POST['patent_name'];
    $date_filed = $_POST['date_filed'];
    $date_granted = $_POST['date_granted'];
    $country = $_POST['country'];
    $faculty = $_POST['faculty'];
    $expiry_date = $_POST['expiry_date'];
    $link = $_POST['link'];
    $remarks = $_POST['remarks'];

    $stmt = $conn->prepare("UPDATE patent SET staff_id=?, staff_name=?, patent_name=?, date_filed=?, date_granted=?, country=?, faculty=?, expiry_date=?, link=?, remarks=? WHERE patent_id=?");
    $stmt->bind_param("sssssssssss", $staff_id, $staff_name, $patent_name, $date_filed, $date_granted, $country, $faculty, $expiry_date, $link, $remarks, $patent_id);
    
    if ($stmt->execute()) {
        echo "<script>alert('New record successfully updated');</script>";
        echo "<script>document.location='patent.php';</script>";
    } else {
        echo "<script>alert('Something went wrong');</script>";
    }
    
    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Edit Patent Student</title>
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
        $patent_id = mysqli_real_escape_string($conn, $patent_id); // Sanitize the input to prevent SQL injection
        $stmt = $conn->prepare("SELECT * FROM patent WHERE patent_id = ? LIMIT 1");
        $stmt->bind_param("s", $patent_id);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result && $result->num_rows > 0) {
            $row = $result->fetch_assoc();
        } else {
            echo "<script>alert('No record found');</script>";
            echo "<script>document.location='patent.php';</script>";
            exit();
        }
        $stmt->close();
    ?>
    <div class="container d-flex justify-content-center">
        <form action="" method="post" style="width:50vw; min-width:300px;">
            <div class="row">

                <!-- Patent ID -->
                <div class="col-md-6 mb-3">
                    <label class="form-label">PATENT ID:</label>
                    <input type="text" class="form-control" name="patent_id" value="<?php echo $row['patent_id']?>" readonly>
                </div>

                <!-- Staff ID -->
                <div class="col-md-6 mb-3">
                    <label class="form-label">STAFF ID:</label>
                    <input type="text" class="form-control" name="staff_id" value="<?php echo $row['staff_id']?>" readonly>
                </div>    

                <!-- Patent Name -->
                <div class="col-md-6 mb-3">
                    <label class="form-label">PATENT NAME:</label>
                    <input type="text" class="form-control" name="patent_name" value="<?php echo $row['patent_name']?>">
                </div>
  
                <!-- Staff Name -->
                <div class="col-md-6 mb-3">
                    <label class="form-label">STAFF NAME:</label>
                    <input type="text" class="form-control" name="staff_name" value="<?php echo $row['staff_name']?>" readonly>
                </div>

                <!-- Date Filed -->
                <div class="col-md-6 mb-3">
                    <label class="form-label">DATE FILED:</label>
                    <input type="date" class="form-control" name="date_filed" value="<?php echo $row['date_filed']?>">
                </div>

                <!-- Date Granted -->
                <div class="col-md-6 mb-3">
                    <label class="form-label">DATE GRANTED:</label>
                    <input type="date" class="form-control" name="date_granted" value="<?php echo $row['date_granted']?>">
                </div>

                <!-- Country -->
                <div class="col-md-6 mb-3">
                    <label class="form-label">COUNTRY:</label>
                    <input type="text" class="form-control" name="country" value="<?php echo $row['country']?>" readonly>
                </div> 

                <!-- Faculty -->
                <div class="col-md-6 mb-3">
                    <label class="form-label">FACULTY:</label>
                    <select class="form-control" name="faculty" readonly>
                        <option value="" disabled selected>Faculty</option>
                        <option value="Al-Quran & Hadis" <?php if ($row['faculty'] == 'Al-Quran & Hadis') echo 'selected'; ?>>Al-Quran & Hadis</option>
                        <option value="Dakwah & Pembangunan Insan" <?php if ($row['faculty'] == 'Dakwah & Pembangunan Insan') echo 'selected'; ?>>Dakwah & Pembangunan Insan</option>
                        <option value="Pengurusan Al-Syariah" <?php if ($row['faculty'] == 'Pengurusan Al-Syariah') echo 'selected'; ?>>Pengurusan Al-Syariah</option>
                        <option value="Pengajian Bahasa Arab" <?php if ($row['faculty'] == 'Pengajian Bahasa Arab') echo 'selected'; ?>>Pengajian Bahasa Arab</option>
                        <option value="Pengajian Muamalat" <?php if ($row['faculty'] == 'Pengajian Muamalat') echo 'selected'; ?>>Pengajian Muamalat</option>
                        <option value="Pengajian Pendidikan Islam" <?php if ($row['faculty'] == 'Pengajian Pendidikan Islam') echo 'selected'; ?>>Pengajian Pendidikan Islam</option>
                        <option value="Pusat Pengajian Teras" <?php if ($row['faculty'] == 'Pusat Pengajian Teras') echo 'selected'; ?>>Pusat Pengajian Teras</option>
                        <option value="Pengurusan Usuluddin" <?php if ($row['faculty'] == 'Pengurusan Usuluddin') echo 'selected'; ?>>Pengurusan Usuluddin</option>
                        <option value="Teknologi Maklumat & Multimedia" <?php if ($row['faculty'] == 'Teknologi Maklumat & Multimedia') echo 'selected'; ?>>Teknologi Maklumat & Multimedia</option>
                    </select>
                </div>

                <!-- Expiry Date -->
                <div class="col-md-6 mb-3">
                    <label class="form-label">EXPIRY DATE:</label>
                    <input type="date" class="form-control" name="expiry_date" value="<?php echo $row['expiry_date']?>">
                </div>

                <!-- Link -->
                <div class="col-md-6 mb-3">
                    <label class="form-label">HYPERLINK:</label>
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
                <a href="patent.php" class="btn btn-danger">Cancel</a>
            </div>
        </form>
    </div>
</div>
<!-- Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<!-- Bootstrap -->
</body>
</html>
