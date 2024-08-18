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
    $reference_no = $_POST['reference_no'];
    $faculty = $_POST['faculty'];
    $gift = $_POST['gift'];
    $donor = $_POST['donor'];
    $type = $_POST['type'];
    $date_receive = $_POST['date_receive'];
    $value = $_POST['value'];
    $link = $_POST['link'];
    $remarks = $_POST['remarks'];
    
    $sql = mysqli_query($conn, "INSERT INTO gift (reference_no, faculty, gift, donor, type, date_receive, value, link, remarks)
                                VALUES ('$reference_no', '$faculty', '$gift', '$donor', '$type', '$date_receive', '$value', '$link', '$remarks')");
    
    if ($sql) {
        echo "<script>alert('New record successfully added');</script>";
        echo "<script>document.location='Gift_Donation.php';</script>";
    } else {
        echo "<script>alert('Something Wrong or Reference Number Already Exists );</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Add New Gift Or Donation</title>
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
        createHeader('fa fa-briefcase', 'Add New Gift Or Donation', 'Add Gift Or Donation');
      ?>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h1 class="border-bottom center pb-3 mb-4" style="text-align: center;">Add Gift Or Donation</h1>
          </div>
        </div>

        <form action=" " method="post">
        <div class="row">

<!--REFERENCE NO.-->
<div class="col-md-6 mb-3">
  <label class="form-label">REFERENCE NO.:</label>
  <input type="text" class="form-control" name="reference_no" id="reference_no" placeholder="REFERENCE NO." required>
</div>

<!--GIFTS / DONATION-->
<div class="col-md-6 mb-3">
  <label class="form-label">GIFTS / DONATION:</label>
  <input type="text" class="form-control" name="gift" id="gift" placeholder="GIFTS / DONATION" required>
</div>

   <!--Faculty-->
    <div class="col-md-6 mb-3">
      <label class="form-label">FACULTY:</label>
        <select class="form-control" name="faculty">
              <option value="" disabled selected>Faculty</option>
              <option value='Al-Quran & Hadis'>Al-Quran & Hadis</option>
              <option value='Dakwah & Pembangunan Insan'>Dakwah & Pembangunan Insan</option>
              <option value='Pengurusan Al-Syariah'>Pengurusan Al-Syariah</option>
              <option value='Pengajian Bahasa Arab'>Pengajian Bahasa Arab</option>
              <option value='Pengajian Muamalat'>Pengajian Muamalat</option>
              <option value='Pengajian Pendidikan Islam'>Pengajian Pendidikan Islam</option>
              <option value='Pusat Pengajian Teras'>Pusat Pengajian Teras</option>
              <option value='Pengurusan Usuluddin'>Pengurusan Usuluddin</option>
              <option value='Teknologi Maklumat & Multimedia'>Teknologi Maklumat & Multimedia</option>
       </select>
   </div>

   <!--DONOR-->
      <div class="col-md-6 mb-3">
        <label class="form-label">DONOR:</label>
       <input type="text" class="form-control" name="donor" id="donor" placeholder="DONOR" required>
   </div>

   <!--type-->
     <div class="col-md-6 mb-3">
     <label class="form-label">TYPE ( MONEY, EQUIPMENT, RESEARCH MATERIALS, ETC.)</label>
      <select class="form-control" name="type">
            <option value="" disabled selected>Choose type</option>
            <option value="Money">MONEY</option>
            <option value="Equipment"> EQUIPMENT</option>
            <option value="Research Materials">RESEARCH MATERIALS</option>
            <option value="Etc">ETC.</option>
      </select>
     </div> 

   <!--DATE RECEIVED-->
   <div class="col-md-6 mb-3">
        <label class="form-label">DATE RECEIVED:</label>
       <input type="date" class="form-control" name="date_receive" required>
   </div>

      <!--VALUE-->
      <div class="col-md-6 mb-3">
        <label class="form-label">VALUE (RM):</label>
       <input type="text" class="form-control" name="value" id="value" placeholder="Value" required>
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
            <a href="Gift_Donation.php" class="btn btn-success">View  Gift Or Donation</a>
          </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

</body>
</html>
