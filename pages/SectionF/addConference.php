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
   $name_organizer = $_POST['name_organizer']; 
   $name_title = $_POST['name_title'];
   $start_date = $_POST['start_date'];
   $end_date = $_POST['end_date']; 
   $gross_income = $_POST['gross_income'];
   $link = $_POST['link'];
   $remark = $_POST['remark'];

   $sql = mysqli_query($conn, "INSERT INTO `conference` (`id`, `name_organizer`, `name_title`, `start_date`, `end_date`, `gross_income`,  `link`, `remark`) VALUES ('$id', '$name_organizer', '$name_title', '$start_date', '$end_date', '$gross_income', '$link', '$remark')");

   if($sql) {
       echo "<script>alert('New record successfully added');</script>";
       echo "<script>document.location='Orga_Seminar.php';</script>";
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
    createHeader('fa fa-briefcase', 'Add New conference', 'Add Oragniser Seminar');
    ?>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h1 class="border-bottom text-center pb-3 mb-4">Add Oragniser Seminar</h1>
        </div>
      </div>
      <form action="" method="post">
        <div class="row">
                            <!-- Name -->
                            <div class="col-md-6 mb-3">
                        <label class="form-label">NAME OF COORDINATOR:</label>
                        <input type="text" class="form-control" name="name_organizer" placeholder="Name Coordinator" required>

                    </div>

                    <!-- name_title -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">NAME OF CONFERENCE/ SEMNIAR/KNOWLEDGE-SHARING PROGRAM:</label>
                        <input type="text" class="form-control" name="name_title" placeholder="Name Tittle" required>
                    </div>

                    <!--START DATE -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">FIRST APPOINTMENT:</label>
                        <input type="date" class="form-control" name="start_date"required>
                    </div>

                    <!-- ENDDATE -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">END DATE:</label>
                        <input type="date" class="form-control" name="end_date"required>
                    </div>

                    
                    <!-- GROSS INCOME GENERATE (RM) -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">GROSS INCOME GENERATE (RM):</label>
                        <input type="text" class="form-control" name="gross_income" placeholder="Gros Income" required>
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
            <a href="Orga_Seminar.php" class="btn btn-success">View Organiser</a>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

</body>
</html>
