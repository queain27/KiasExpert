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
   $id = $_POST['id'];
   $name_contributor = $_POST['name_contributor'];
   $detail = $_POST['detail'];
   $type = $_POST['type'];
   $inc_dividen = $_POST['inc_dividen'];
   $year = $_POST['year'];
   $amount = $_POST['amount'];
   $dividen = $_POST['dividen'];
   $link = $_POST['link'];
   $remark = $_POST['remark'];

   $sql = mysqli_query($conn, "INSERT INTO `endownment` (`id`, `name_contributor`, `detail`, `type`, `inc_dividen`, `year`,`amount`, `dividen`, `link`, `remark`) VALUES ('$id', '$name_contributor', '$detail', '$type','$inc_dividen','$year','$amount', '$dividen','$link', '$remark')");

   if($sql) {
       echo "<script>alert('New record successfully added');</script>";
       echo "<script>document.location='Endowment.php';</script>";
   } else {
       echo "<script>alert('Something wrong data');</script>";
   }
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Add New </title>
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
        require "../../crudheader.php";
    createHeader('fa fa-briefcase', 'Add New Endownment', 'Add Oragniser Seminar');
    ?>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h1 class="border-bottom text-center pb-3 mb-4">Add Endowment</h1>
        </div>
      </div>
      <form action="" method="post">
        <div class="row">
        <!-- Name -->
               <div class="col-md-6 mb-3">
                  <label class="form-label">CONTRIBUTOR:</label>
                  <input type="text" class="form-control" name="name_contributor" placeholder="Contributor" required>
                </div>

                    <!-- detail -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">CONTRIBUTION DETAILS:</label>
                        <input type="text" class="form-control" name="detail" placeholder="Name Detail" required>
                    </div>

            <!-- Type-->
             <div class="col-md-6 mb-3">
                    <label class="form-label">TYPE (Cash/ASSET/CROWD FUNDING):</label>
                    <select class="form-control" name="type" required>
                        <option value="" disabled selected>Choose type</option>
                        <option value="Cash">Cash</option>
                        <option value="Asset">Asset</option>
                        <option value="Crowd Funding">Crowd Funding</option>
                    </select>
                </div>

                <!-- Type-->
                <div class="col-md-6 mb-3">
                    <label class="form-label">INCLUDE DIVIDEN:</label>
                    <select class="form-control" name="inc_dividen" required>
                        <option value="" disabled selected>Choose type</option>
                        <option value="yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                </div>

                   <!-- Year -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">YEAR ENDOWNMENT:</label>
                        <input type="text" class="form-control" name="year">
                    </div> 

            <!-- PRINCIPAL AMOUNT ENDOWED (RM) -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">PRINCIPAL AMOUNT ENDOWED (RM):</label>
                        <input type="text" class="form-control" name="amount" placeholder="Gros Income" required>
                    </div>

               <!--Dividen-->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">DIVIDEN:</label>
                        <input type="text" class="form-control" name="dividen">
                    </div> 

          <!--Link Evidence-->
          <div class="col-md-6 mb-3">
            <label class="form-label">LINK EVIDENCE:</label>
            <input type="text" class="form-control" name="link" placeholder="Attach Link" required>
          </div>

          <!--remark-->
          <div class="col-md-6 mb-3">
            <label class="form-label">REMARK:</label>
            <input type="text" class="form-control" name="remark" placeholder="remark" required>
          </div>

          <!--Button-->
          <div class="col-md-12 mb-3 text-center">
            <button type="submit" class="btn btn-primary" name="submit">ADD</button>
            <a href="Endowment.php" class="btn btn-success">View Endowment</a>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

</body>
</html>
