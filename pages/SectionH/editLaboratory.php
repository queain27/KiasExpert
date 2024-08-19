<?php
session_start();

if(!isset($_SESSION['user_id']))

{
    header('Location: ../examples/login.php'); 
    exit;
}
include "../examples/config.php";
$regis_no = $_GET['ID'];

if (isset($_POST['submit'])) {
    $facility = $_POST['facility'];
    $faculty = $_POST['faculty'];
    $type = $_POST['type'];
    $awarding = $_POST['awarding'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    $link = $_POST['link'];
    $remarks = $_POST['remarks'];

    $stmt = $conn->prepare("UPDATE laboratory SET facility=?, faculty=?, type=?, awarding=?, start_date=?, end_date=?, link=?, remarks=? WHERE regis_no=?");
    $stmt->bind_param("sssssssss", $facility, $faculty, $type, $awarding, $start_date, $end_date, $link, $remarks, $regis_no);

    if ($stmt->execute()) {
        echo "<script>alert('New record successfully updated');</script>";
        echo "<script>document.location='Laboratory.php';</script>";
    } else {
        echo "<script>alert('Something went wrong or Register Number already exists');</script>";
    }

    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Laboratory Facilities</title>
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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
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
            $regis_no = mysqli_real_escape_string($conn, $regis_no); // Sanitize the input to prevent SQL injection
            $stmt = $conn->prepare("SELECT * FROM laboratory WHERE regis_no = ? LIMIT 1");
            $stmt->bind_param("s", $regis_no);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result) {
                $row = $result->fetch_assoc();
            } else {
                echo "Error: " . mysqli_error($conn);
            }
            $stmt->close();
        ?>
        <div class="container d-flex justify-content-center">
            <form action="" method="post" style="width:50vw; min-width:300px;">
                <div class="row">

                    <!-- REGISTER NUMBER -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">REGISTER NUMBER:</label>
                        <input type="text" class="form-control" name="regis_no" value="<?php echo $row['regis_no']; ?>">
                    </div>

                    <!-- RESEARCH FACILITY -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">RESEARCH FACILITY:</label>
                        <input type="text" class="form-control" name="facility" value="<?php echo $row['facility']; ?>">
                    </div>

                    <!-- FACULTY -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">FACULTY:</label>
                        <select class="form-control" name="faculty">
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

                    <!-- TYPE OF ACCREDITATION -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">TYPE OF ACCREDITATION:</label>
                        <input type="text" class="form-control" name="type" value="<?php echo $row['type']; ?>">
                    </div>

                    <!-- AWARDING BODY -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">AWARDING BODY:</label>
                        <input type="text" class="form-control" name="awarding" value="<?php echo $row['awarding']; ?>">
                    </div>

                    <!-- START DATE -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">START DATE:</label>
                        <input type="date" class="form-control" name="start_date" value="<?php echo $row['start_date']; ?>">
                    </div>

                    <!-- END DATE -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">END DATE:</label>
                        <input type="date" class="form-control" name="end_date" value="<?php echo $row['end_date']; ?>">
                    </div>

                    <!-- LINK -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">LINK:</label>
                        <input type="text" class="form-control" name="link" value="<?php echo $row['link']; ?>">
                    </div>

                    <!-- REMARKS -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">REMARKS:</label>
                        <textarea class="form-control" name="remarks"><?php echo $row['remarks']; ?></textarea>
                    </div>
                </div>

                <!-- BUTTON -->
                <div class="text-center">
                    <button type="submit" class="btn btn-success" name="submit">UPDATE</button>
                    <a href="Laboratory.php" class="btn btn-danger">Cancel</a>
                </div>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0sG1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
