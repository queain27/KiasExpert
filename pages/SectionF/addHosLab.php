<?php
include "../examples/config.php";
if(isset($_POST ['submit']))
{
   
   $reference_no = $_POST['reference_no'];
   $name = $_POST['name'];
   $type = $_POST['type'];
   $gross_income = $_POST['gross_income'];
   $link = $_POST['link'];
   $remarks = $_POST['remarks'];
   
 $sql = mysqli_query($conn, "INSERT INTO hosp_lab (reference_no, name, type, gross_income, link,remarks)
        VALUES ('$reference_no','$name','$type','$gross_income','$link','$remarks')");
    
    if($sql)
    {
       echo "<script>alert('New record successsfully addedd');</script>";
       echo "<script>document.location=Hospital.php';</script>";
    }

    else
    { echo "<script>alert('Something Wrong');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Add New Hospital and Lab Service</title>
  <style>
    * body {
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

  <div class="container-fluid">
    <div class="container">
      <?php
        require "../header.php";
        createHeader('fa fa-briefcase', 'Add New Hospital and Lab Service', 'Add Hospital and Lab Service');
      ?>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h1 class="border-bottom center pb-3 mb-4" style="text-align: center;">Add Hospital and Lab Service</h1>
          </div>
        </div>

        <form action=" " method="post">
        <div class="row">

<!--REFERENCE NO.-->
<div class="col-md-6 mb-3">
  <label class="form-label">REFERENCE NO.:</label>
  <input type="text" class="form-control" name="reference_no" id="reference_no" placeholder="REFERENCE NO." required>
</div>

<!--NAME OF ORGANIZER-->
<div class="col-md-6 mb-3">
  <label class="form-label">NAME HOSPITAL OR LAB SERVICE:</label>
  <input type="text" class="form-control" name="name" placeholder="NAME OF HASPIATL OR LAB" required>
</div>

<!--type-->
     <div class="col-md-6 mb-3">
     <label class="form-label">TYPE SERVICE:</label>
      <select class="form-control" name="type">
            <option value="" disabled selected>Choose type</option>
            <option value="Hospital">Hospital</option>
            <option value="Lab Service">Lab Service</option>
      </select>
     </div> 

<!--GROSS INCOME GENERATED-->
<div class="col-md-6 mb-3">
  <label class="form-label">GROSS INCOME GENERATED (RM):</label>
  <input type="text" class="form-control" name="gross_income" placeholder="gross_income" required>
</div>

<!--Link Evidence-->
<div class="col-md-6 mb-3">
  <label class="form-label">Link Evidence:</label>
  <input type="text" class="form-control" name="link" id="link" placeholder="Link" required>
</div>

<!--Remarks-->
<div class="col-md-6 mb-3">
  <label class="form-label">Remarks:</label>
  <input type="text" class="form-control" name="remarks" id="remarks" placeholder="Remarks" required>
</div>
            <!--Button-->
          <div class="col-md-12 mb-3 text-center">
            <button type="submit" class="btn btn-primary" name="submit">ADD</button>
            <a href="Hospital.php" class="btn btn-success">View Hospital and Lab Service Course</a>
          </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

</body>
</html>
