<?php
session_start();

if(!isset($_SESSION['user_id']))

{
    header('Location: ../examples/login.php'); 
    exit;
}
include "../examples/config.php";
$id = $_GET['ID'];

if (isset($_POST['submit'])) {
    $name_contributor = $_POST['name_contributor'];
    $detail = $_POST['detail'];
    $type = $_POST['type'];
    $inc_dividen = $_POST['inc_dividen'];
    $year = $_POST['year'];
    $amount = $_POST['amount'];
    $dividen = $_POST['dividen'];
    $link = $_POST['link'];
    $remark = $_POST['remark'];

    $sql = mysqli_query($conn, "UPDATE `endownment` SET `name_contributor`='$name_contributor',`detail`='$detail',`type`='$type',`inc_dividen`='$inc_dividen',`year`='$year',`amount`='$amount',`dividen`='$dividen',`link`='$link',`remark`='$remark' WHERE id=$id");

    if ($sql) {
        echo "<script>alert('New record successfully updated');</script>";
        echo "<script>document.location='Endowment.php';</script>";
    } else {
        echo "<script>alert('Something Wrong');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title> Edit Endowment</title>
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

<body>
    <div class="container">
    <div class="text-center mb-5"><br><br><br><br>
        <b><p>Click Update After Finish Changing Information</p></b>
    </div>
        <?php 
        $sql = "SELECT * FROM `endownment` WHERE id = $id LIMIT 1";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        ?>

        <div class="form-container">
            <form action="" method="post">
                <div class="row">

                    <!-- Name -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">CONTRIBUTOR:</label>
                        <input type="text" class="form-control" name="name_contributor" value="<?php echo $row['name_contributor'] ?>">
                    </div>

                    <!-- Name Title -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">CONTRIBUTION DETAILS:</label>
                        <input type="text" class="form-control" name="detail" value="<?php echo $row['detail'] ?>">
                    </div>

            <!-- Type-->
                 <div class="col-md-6 mb-3">
                    <label class="form-label">TYPE (Cash/ASSET/CROWD FUNDING):</label>
                    <select class="form-control" name="type" required>
                        <option value="" disabled selected>Choose type</option>
                        <option value="Cash"<?php if ($row['type'] == 'Cash') echo 'selected';?>>Cash</option>
                        <option value="Asset"<?php if ($row['type'] == 'Asset') echo 'selected';?>>Asset</option>
                        <option value="Crowd Funding"<?php if ($row['type'] == 'Crowd Funding') echo 'selected';?>>Crowd Funding</option>
                    </select>
                </div>
   
               <!-- Type-->
               <div class="col-md-6 mb-3">
                    <label class="form-label">INCLUDE DIVIDEN:</label>
                    <select class="form-control" name="inc_dividen" required>
                        <option value="" disabled selected>Choose type</option>
                        <option value="yes"<?php if ($row['inc_dividen'] == 'Yes') echo 'selected';?>>Yes</option>
                        <option value="No"<?php if ($row['inc_dividen'] == 'No') echo 'selected';?>>No</option>
                    </select>
                </div>

                   <!-- Year -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">YEAR ENDOWNMENT:</label>
                        <input type="text" class="form-control" name="year" value="<?php echo $row['year'] ?>">
                    </div> 

                    <!-- Gross Income Generate (RM) -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">PRINCIPAL AMOUNT ENDOWED (RM):</label>
                        <input type="text" class="form-control" name="amount" value="<?php echo $row['amount'] ?>">
                    </div>

                   <!--Dividen-->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">DIVIDEN:</label>
                        <input type="text" class="form-control" name="dividen" value="<?php echo $row['dividen'] ?>">
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

                        <!--Button-->
      <div> 
       <center>
            <button type ="submit" class="btn btn-success" name="submit">UPDATE</button>
            <a href="Endowment.php" class="btn btn-danger">Cancel</a>
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