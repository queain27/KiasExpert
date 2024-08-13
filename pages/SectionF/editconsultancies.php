<?php
include "../examples/config.php";
$reference_no= ($_GET['ID']); // Ensure the REFERENCE NO. is an integer

if (isset($_POST['submit'])) {
    $staff_id = $_POST['staff_id'];
    $staff_name = $_POST['staff_name'];
    $faculty = $_POST['faculty'];
    $tittle = $_POST['tittle'];
    $client_name = $_POST['client_name'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    $gross_income = $_POST['gross_income'];
    $link = $_POST['link'];
    $remarks = $_POST['remarks'];

    $stmt = $conn->prepare("UPDATE consultancies SET staff_id=?, staff_name=?,faculty=?, tittle=?, client_name=?,start_date=?, end_date=?,  gross_income=?, link=?, remarks=? WHERE reference_no=?");
    $stmt->bind_param("sssssssssss", $staff_id, $staff_name,$faculty, $tittle,$client_name, $start_date, $end_date, $gross_income, $link, $remarks, $reference_no);
    
    if ($stmt->execute()) {
        echo "<script>alert('New record successfully updated');</script>";
        echo "<script>document.location='Consultancies.php';</script>";
    } else {
        echo "<script>alert('Something went wrong');</script>";
    }
    
    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Edit consultancies</title>
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
        $reference_no = mysqli_real_escape_string($conn, $reference_no); // Sanitize the input to prevent SQL injection
        $stmt = $conn->prepare("SELECT * FROM consultancies WHERE reference_no = ? LIMIT 1");
        $stmt->bind_param("s", $reference_no);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result && $result->num_rows > 0) {
            $row = $result->fetch_assoc();
        } else {
            echo "<script>alert('No record found');</script>";
            echo "<script>document.location='Consultancies.php';</script>";
            exit();
        }
        $stmt->close();
    ?>
    <div class="container d-flex justify-content-center">
        <form action="" method="post" style="width:50vw; min-width:300px;">
            <div class="row">

                <!-- REFERENCE NO. -->
                <div class="col-md-6 mb-3">
                    <label class="form-label">REFERENCE NO.:</label>
                    <input type="text" class="form-control" name="reference_no" value="<?php echo $row['reference_no']?>" readonly>
                </div>

                <!-- Staff ID -->
                <div class="col-md-6 mb-3">
                    <label class="form-label">STAFF ID:</label>
                    <input type="text" class="form-control" name="staff_id" value="<?php echo $row['staff_id']?>" readonly>
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
                <!-- CONSULTANCY TITLE -->
                <div class="col-md-6 mb-3">
                    <label class="form-label">CONSULTANCY TITLE:</label>
                    <input type="text" class="form-control" name="tittle" value="<?php echo $row['tittle']?>">
                </div>
               <!-- CLIENT / STAKEHOLDER -->
                <div class="col-md-6 mb-3">
                    <label class="form-label">CLIENT / STAKEHOLDER:</label>
                    <input type="text" class="form-control" name="client_name" value="<?php echo $row['client_name']?>">
                </div> 
                <!-- Staff Name -->
                <div class="col-md-6 mb-3">
                    <label class="form-label">STAFF NAME:</label>
                    <input type="text" class="form-control" name="staff_name" value="<?php echo $row['staff_name']?>" readonly>
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
                
                <!-- GROSS INCOME GENERATED (RM) -->
                <div class="col-md-6 mb-3">
                    <label class="form-label">GROSS INCOME GENERATED (RM):</label>
                    <input type="date" class="form-control" name="gross_income" value="<?php echo $row['gross_income']?>">
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
                <a href="Consultancies.php" class="btn btn-danger">Cancel</a>
            </div>
        </form>
    </div>
</div>
<!-- Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<!-- Bootstrap -->
</body>
</html>
