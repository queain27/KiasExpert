<?php
include "../examples/config.php";

$reference_no = $_GET['ID'];

if (isset($_POST['submit'])) {
    $faculty = $_POST['faculty'];
    $gift = $_POST['gift'];
    $donor = $_POST['donor'];
    $type = $_POST['type'];
    $date_receive = $_POST['date_receive'];
    $value = $_POST['value'];
    $link = $_POST['link'];
    $remarks = $_POST['remarks'];
    
    $stmt = $conn->prepare("UPDATE gift SET faculty=?, gift=?, donor=?, type=?, date_receive=?, value=?, link=?, remarks=? WHERE reference_no=?");
    $stmt->bind_param("sssssssss", $faculty, $gift, $donor, $type, $date_receive, $value, $link, $remarks ,$reference_no);
    
    if ($stmt->execute())
    
    {
        echo "<script>alert('New record successfully updated');</script>";
        echo "<script>document.location='Gift_Donation.php';</script>";
    } else {
        echo "<script>alert('Something went wrong');</script>";
    }
    
    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title> Edit  Gift Or Donation</title>
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
        $stmt = $conn->prepare("SELECT * FROM gift WHERE reference_no = ? LIMIT 1");
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
                    <input type="text" class="form-control" name="reference_no" value="<?php echo $row['reference_no']?>">
                </div>
                
               
<!--GIFTS / DONATION-->
<div class="col-md-6 mb-3">
  <label class="form-label">GIFTS / DONATION:</label>
  <input type="text" class="form-control" name="gift" value="<?php echo $row['gift']?>">
</div>

   <!--Faculty-->
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
       </select>
   </div>

   <!--DONOR-->
      <div class="col-md-6 mb-3">
        <label class="form-label">DONOR:</label>
       <input type="text" class="form-control" name="donor" value="<?php echo $row['donor']?>">
   </div>

   <!--type-->
     <div class="col-md-6 mb-3">
     <label class="form-label">TYPE ( MONEY, EQUIPMENT, RESEARCH MATERIALS, ETC.)</label>
      <select class="form-control" name="type">
            <option value="" disabled selected>Choose type</option>
            <option value="Money" <?php if ($row['type'] == 'Money') echo 'selected'; ?>>MONEY</option>
            <option value="Equipment" <?php if ($row['type'] == 'Equipment') echo 'selected'; ?>>EQUIPMENT</option>
            <option value="Research Materials" <?php if ($row['type'] == 'Research Materials') echo 'selected'; ?>>RESEARCH MATERIALS</option>
            <option value="Etc" <?php if ($row['type'] == 'Etc') echo 'selected'; ?>>ETC.</option>
      </select>
     </div> 

   <!--DATE RECEIVED-->
   <div class="col-md-6 mb-3">
        <label class="form-label">DATE RECEIVED:</label>
       <input type="date" class="form-control" name="date_receive" value="<?php echo $row['date_receive']?>">
   </div>

      <!--VALUE-->
      <div class="col-md-6 mb-3">
        <label class="form-label">VALUE (RM):</label>
       <input type="text" class="form-control" name="value"value="<?php echo $row['value']?>">
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
            <a href="Gift_Donation.php" class="btn btn-danger">Cancel</a>
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