<?php
include "../examples/config.php";

$reference_no = $_GET['ID'];

if (isset($_POST['submit'])) {
    $coordinator_name = $_POST['coordinator_name'];
    $faculty = $_POST['faculty'];
    $training_course_title = $_POST['training_course_title'];
    $venue= $_POST['venue'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    $gross_income_generated = $_POST['gross_income_generated'];
    $link = $_POST['link'];
    $remarks = $_POST['remarks'];

    $stmt = $conn->prepare("UPDATE training_courses SET coordinator_name=?, venue=?, training_course_title=?, faculty=?,gross_income_generated=?, start_date=?, end_date=?, link=?, remarks=? WHERE reference_no=?");
    $stmt->bind_param("ssssssssss", $coordinator_name, $venue, $training_course_title, $faculty, $gross_income_generated, $start_date, $end_date, $link, $remarks, $reference_no);
    
    if ($stmt->execute())
    
    {
        echo "<script>alert('New record successfully updated');</script>";
        echo "<script>document.location='Training_Course.php';</script>";
    } else {
        echo "<script>alert('Something went wrong');</script>";
    }
    
    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title> Edit Training Course</title>
<style>
    * body 
    {
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

<div class="container">
       <div class="text-center mb-5"><br><br><br><br>
        <b><p>Click Update After Finish Changing Information</p></b>
    </div>
    <?php 
        $reference_no = mysqli_real_escape_string($conn, $reference_no); // Sanitize the input to prevent SQL injection
        $stmt = $conn->prepare("SELECT * FROM training_courses WHERE reference_no = ? LIMIT 1");
        $stmt->bind_param("s", $reference_no);
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

                <!--REFERENCE-->
                <div class="col-md-6 mb-3">
                    <label class="form-label">REFERENCE:</label>
                    <input type="text" class="form-control" name="reference_no" value="<?php echo $row['reference_no']?>" readonly>
                </div>
                
                <!--coordinate-->
                <div class="col-md-6 mb-3">
                    <label class="form-label">COORDINATE NAME:</label>
                    <input type="text" class="form-control" name="coordinator_name" value="<?php echo $row['coordinator_name']?>">
                </div>

                <!--VENUE-->
                <div class="col-md-6 mb-3">
                    <label class="form-label">VENUE:</label>
                    <input type="text" class="form-control" name="venue" value="<?php echo $row['venue']?>">
                </div>

              <!--TRAINING COURSE TITLE-->
                <div class="col-md-6 mb-3">
                    <label class="form-label">TRAINING COURSE TRAINING:</label>
                    <input type="text" class="form-control" name="training_course_title" value="<?php echo $row['training_course_title']?>">
                </div>

                    <!--FACULTY/CENTRE-->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">FACULTY/CENTRE:</label>
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

                <!--GROSS INCOME GENERATE-->
                <div class="col-md-6 mb-3">
                    <label class="form-label">GROSS INCOME GENERATE:</label>
                    <input type="text" class="form-control" name="gross_income_generated" value="<?php echo $row['gross_income_generated']?>">
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

                <!--Link-->
                <div class="col-md-6 mb-3">
                    <label class="form-label">LINK:</label>
                    <input type="text" class="form-control" name="link" value="<?php echo $row['link']?>">
                </div>

                <!--Remarks-->
                <div class="col-md-6 mb-3">
                    <label class="form-label">REMARKS:</label>
                    <textarea class="form-control" name="remarks"><?php echo $row['remarks']?></textarea>
                </div>
            </div>
 
         <!--Button-->
      <div> 
       <center>
            <button type ="submit" class="btn btn-success" name="submit">UPDATE</button>
            <a href="Training_Course.php" class="btn btn-danger">Cancel</a>
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