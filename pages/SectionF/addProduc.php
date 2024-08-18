<?php
session_start(); // Mulakan sesi

if(!isset($_SESSION['user_id']))

{
    header('Location: pages/examples/login.php'); 
    exit;
}

include "../examples/config.php";
if(isset($_POST ['submit']))

{
   $staff_id = $_POST['staff_id'];
   $staff_name = $_POST['staff_name']; 
   $prod_name = $_POST['prod_name'];
   $Type= $_POST['Type']; 
   $faculty = $_POST['faculty'];
   $year= $_POST['year'];
   $comp_name = $_POST['comp_name'];
   $reference_no = $_POST['reference_no'];
   $gross_income = $_POST['gross_income'];
   $link = $_POST['link'];
   $remarks = $_POST['remarks'];

   $sql = mysqli_query($conn, "INSERT INTO `prod_tech` (`staff_id`, `staff_name`, `prod_name`, `Type`,`faculty`, `year`,`comp_name`, `reference_no`, `gross_income`, `link`, `remarks`) VALUES ('$staff_id', '$staff_name', '$prod_name',  '$Type','$faculty',  '$year','$comp_name', '$reference_no', '$gross_income',  '$link', '$remarks')");

   if($sql) {
       echo "<script>alert('New record successfully added');</script>";
       echo "<script>document.location='Product.php';</script>";
   } else {
       echo "<script>alert('Staff ID Already Exists');</script>";
   }
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Add New Product/Technology</title>
  <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
  <script src="../../bootstrap/js/jquery.min.js"></script>
  <script src="../../bootstrap/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../../css/navbar.css">
  <link rel="shortcut icon" href="../../images/Logo2.png" type="image/x-icon">
</head>
<body>

<div class="container-fluid">
  <div class="container">
    <?php
    require "../header.php";
    createHeader('fa fa-briefcase', 'Add New Product/Technology', 'Add Product/Technology');
    ?>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h1 class="border-bottom text-center pb-3 mb-4">Add Product/Technology</h1>
        </div>
      </div>
      <form action="" method="post">
        <div class="row">
           <!-- Staff ID -->
           <div class="col-md-6 mb-3">
                        <label class="form-label">STAFF ID:</label>
                        <input type="text" class="form-control" name="staff_id" placeholder="Staff ID" required>
                    </div>

                    <!-- Name -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">STAFF NAME:</label>
                        <input type="text" class="form-control" name="staff_name" placeholder="Staff Name" required>
                    </div>

                    <!-- PRODUCT NAME-->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">PRODUCT NAME:</label>
                        <input type="text" class="form-control" name="prod_name"placeholder="Product Name" required>
                    </div>

                    <!--COMPANY / PUBLISHER NAME-->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">COMPANY / PUBLISHER NAME:</label>
                        <input type="text" class="form-control" name="comp_name" placeholder="company name" required>
                    </div>

                    <!-- TYPE-->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">PRODUCT COMMERCIALIZATION [3A] OR TECHNOLOGY KNOW-HOW LICENSING/OUTRIGHT SALE[3B]:</label>
                        <select class="form-control" name="Type" required>
                            <option value="" disabled selected>Choose Status sold outright</option>
                            <option value="product commercial">Product Commercial</option>
                            <option value="licensing">Licensing</option>
                            <option value="sold outright">Sold Outright</option>
                        </select>
                    </div>

                    <!-- Faculty -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">FACULTY:</label>
                        <select class="form-control" name="faculty">
                            <option value="" disabled selected>Faculty</option>
                            <option value="Al-Quran & Hadis">Al-Quran & Hadis</option>
                            <option value="Dakwah & Pembangunan Insan">Dakwah & Pembangunan Insan</option>
                            <option value="Pengurusan Al-Syariah">Pengurusan Al-Syariah</option>
                            <option value="Pengajian Bahasa Arab">Pengajian Bahasa Arab</option>
                            <option value="Pengajian Muamalat">Pengajian Muamalat</option>
                            <option value="Pengajian Pendidikan Islam">Pengajian Pendidikan Islam</option>
                            <option value="Pusat Pengajian Teras">Pusat Pengajian Teras</option>
                            <option value="Pengurusan Usuluddin">Pengurusan Usuluddin</option>
                            <option value="Teknologi Maklumat & Multimedia">Teknologi Maklumat & Multimedia</option>
                        </select>
                    </div>

                    <!--YEAR-->
                   <div class="col-md-6 mb-3">
                       <label class="form-label">YEAR COMMERCIALIZED: </label>
                       <input type="text" class="form-control" name="year" placeholder="year" required>
                    </div>

                    <!-- REFERENCE-->
                    <div class="col-md-6 mb-3">
                       <label class="form-label">REFERENCE NO.:</label>
                       <input type="text" class="form-control" name="reference_no" placeholder="Reference" required>
                    </div>

                    <!-- Gross Income-->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">GROSS INCOME GENERATE (RM):</label>
                        <input type="text" class="form-control" name="gross_income" placeholder="gross" required>
                    </div>

                    <!-- Link Evidence -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">LINK TO EVIDENCE:</label>
                        <input type="text" class="form-control" name="link" placeholder="Attach Link" required>
                    </div>

                    <!-- Remarks -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">REMARKS:</label>
                        <input type="text" class="form-control" name="remarks" placeholder="Remark" required>
                    </div>         
          <!--Button-->
          <div class="col-md-12 mb-3 text-center">
            <button type="submit" class="btn btn-primary" name="submit">ADD</button>
            <a href="Product.php" class="btn btn-success">View </a>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

</body>
</html>
