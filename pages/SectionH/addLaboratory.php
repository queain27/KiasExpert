<?php
include "../examples/config.php";
if(isset($_POST ['submit']))
{
   
   $regis_no = $_POST['regis_no'];
   $facility = $_POST['facility'];
   $faculty = $_POST['faculty'];
   $type = $_POST['type'];
   $awarding = $_POST['awarding'];
   $start_date = $_POST['start_date'];
   $end_date = $_POST['end_date'];
   $link = $_POST['link'];
   $remarks = $_POST['remarks'];
   
 $sql = mysqli_query($conn, "INSERT INTO laboratory (regis_no, facility, faculty, type, awarding,start_date, end_date, link,remarks)
        VALUES ('$regis_no','$facility', '$faculty','$type','$awarding','$start_date','$end_date','$link','$remarks')");
    
    if($sql)
    {
       echo "<script>alert('New record successsfully addedd');</script>";
       echo "<script>document.location=Laboratory.php';</script>";
    }

    else
    {  
      echo "<script>alert('Something Wrong or Reference Number Already Exists );</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Add NewLaboratory Facility</title>
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
        createHeader('fa fa-briefcase', 'Add NewLaboratory Facility', 'AddLaboratory Facility');
      ?>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h1 class="border-bottom center pb-3 mb-4" style="text-align: center;">AddLaboratory Facility</h1>
          </div>
        </div>

        <form action=" " method="post">
        <div class="row">

                    <!-- REGISTER NUMBER -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">REGISTER NUMBER:</label>
                        <input type="text" class="form-control" name="regis_no" id="regis_no" placeholder="REGISTRATION NO." required>
                    </div>

                    <!-- RESEARCH FACILITY -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">RESEARCH FACILITY:</label>
                        <input type="text" class="form-control" name="facility" id="facility" placeholder="FACILITY" required>
                    </div>

                    <!-- FACULTY -->
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

                    <!-- TYPE OF ACCREDITATION -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">TYPE OF ACCREDITATION:</label>
                        <input type="text" class="form-control" name="type" id="type" placeholder="TYPE" required>
                    </div>

                    <!-- AWARDING BODY -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">AWARDING BODY:</label>
                        <input type="text" class="form-control" name="awarding" id="awarding" placeholder="AWARDING." required>
                    </div>

                    <!-- START DATE -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">START DATE:</label>
                        <input type="date" class="form-control" name="start_date" required>
                    </div>

                    <!-- END DATE -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">END DATE:</label>
                        <input type="date" class="form-control" name="end_date" required>
                    </div>

                    <!-- LINK -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">LINK:</label>
                        <input type="text" class="form-control" name="link" id="link" placeholder="Link" required>
                    </div>

                    <!-- REMARKS -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">REMARKS:</label>
                        <input type="text" class="form-control" name="remarks" id="remarks" placeholder="Remarks" required>
                    </div>
                </div>

            <!--Button-->
          <div class="col-md-12 mb-3 text-center">
            <button type="submit" class="btn btn-primary" name="submit">ADD</button>
            <a href="Laboratory.php" class="btn btn-success">ViewLaboratory Facility Course</a>
          </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

</body>
</html>
