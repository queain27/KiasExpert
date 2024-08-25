<?php
session_start();

if(!isset($_SESSION['user_id']))

{
    header('Location: ../examples/login.php'); 
    exit;
}
include "../examples/config.php";
$staff_id =$_GET['ID'];

if(isset($_POST ['submit']))
{

  $staff_name = $_POST['staff_name']; 
  $prod_name = $_POST['prod_name'];
  $comp_name = $_POST['comp_name'];
  $faculty = $_POST['faculty'];
  $Type= $_POST['Type'];
  $year= $_POST['year'];
  $reference_no = $_POST['reference_no'];
  $gross_income = $_POST['gross_income'];
  $link = $_POST['link'];
  $remarks = $_POST['remarks'];

   $sql = mysqli_query($conn, "UPDATE `prod_tech` SET `staff_name`='$staff_name',`prod_name`='$prod_name',`comp_name`='$comp_name',`faculty`='$faculty',`Type`='$Type',`year`='$year',`reference_no`='$reference_no',`gross_income`='$gross_income',`link`='$link',`remarks`='$remarks' WHERE staff_id=$staff_id");

      
   if($sql){
    echo "<script>alert('New record successsfully update');</script>";
    echo "<script>document.location='Product.php';</script>";
 }

 else
 { 
    echo "<script>alert('Something Wrong or Reference Number Already Exists );</script>";

 }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Product Information</title>
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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
        integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../css/navbar.css">
    <link rel="shortcut icon" href="../../imcomp_names/Logo2.png" type="imcomp_name/x-icon">
</head>
<body>
    <div class="container">
        <div class="text-center mb-4">
            <b><p>Click Update After Finish Changing Information</p></b>
        </div>

        <?php 
        $sql = "SELECT * FROM `prod_tech` WHERE staff_id = $staff_id LIMIT 1";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        ?>

        <div class="container d-flex justify-content-center">
            <form action="" method="post" style="width:50vw; min-width:300px;">
                <div class="row">

                    <!-- Staff ID -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">STAFF ID:</label>
                        <input type="text" class="form-control" name="staff_id" value="<?php echo $row['staff_id']?>" >
                    </div>

                    <!-- Name -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">STAFF NAME:</label>
                        <input type="text" class="form-control" name="staff_name" value="<?php echo $row['staff_name']?>">
                    </div>

                    <!-- PRODUCT NAME-->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">PRODUCT NAME:</label>
                        <input type="text" class="form-control" name="prod_name" value="<?php echo $row['prod_name']?>">
                    </div>

                    <!--COMPANY / PUBLISHER NAME-->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">COMPANY / PUBLISHER NAME:</label>
                        <input type="text" class="form-control" name="comp_name" value="<?php echo $row['comp_name']?>">
                    </div>

                    <!-- TYPE-->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">PRODUCT COMMERCIALIZATION [3A] OR TECHNOLOGY KNOW-HOW LICENSING/OUTRIGHT SALE[3B]:</label>
                        <select class="form-control" name="Type" required>
                            <option value="" disabled selected>Choose Status sold outright</option>
                            <option value="product commercial" <?php if ($row['Type'] == 'product commercial') echo 'selected'; ?>>Product Commercial</option>
                            <option value="licensing" <?php if ($row['Type'] == 'licensing') echo 'selected'; ?>>Licensing</option>
                            <option value="sold outright" <?php if ($row['Type'] == 'sold outright') echo 'selected'; ?>>Sold Outright</option>
                        </select>
                    </div>

                    <!-- Faculty -->
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

                    <!--YEAR-->
                   <div class="col-md-6 mb-3">
                       <label class="form-label">YEAR COMMERCIALIZED: </label>
                       <input type="text" class="form-control" name="year" value="<?php echo $row['year']?>">
                    </div>

                    <!-- REFERENCE-->
                    <div class="col-md-6 mb-3">
                       <label class="form-label">REFERENCE NO.:</label>
                       <input type="text" class="form-control" name="reference_no" value="<?php echo $row['reference_no']?>">
                    </div>

                    <!-- Gross Income-->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">GROSS INCOME GENERATE (RM):</label>
                        <input type="text" class="form-control" name="gross_income" value="<?php echo $row['gross_income']?>">
                    </div>

                    <!-- Link Evidence -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">LINK TO EVIDENCE:</label>
                        <input type="text" class="form-control" name="link" value="<?php echo $row['link']?>">
                    </div>

                    <!-- Remarks -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">REMARKS:</label>
                        <input type="text" class="form-control" name="remarks" value="<?php echo $row['remarks']?>">
                    </div>         
               <div>
                  <center>
                       <button type ="submit" class="btn btn-success" name="submit">UPDATE</button>
                       <a href="Product.php" class="btn btn-danger">Cancel</a>
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


