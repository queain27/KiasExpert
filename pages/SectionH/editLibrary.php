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
    $name = $_POST['name'];
    $title = $_POST['title'];
    $type = $_POST['type'];
    $volume = $_POST['volume'];
    $link = $_POST['link'];

    $sql = mysqli_query($conn, "UPDATE `library` SET `type`='$type',`name`='$name',`title`='$title',`volume`='$volume',`link`='$link'WHERE id=$id");

    if ($sql) {
        echo "<script>alert('New record successfully updated');</script>";
        echo "<script>document.location='TittleBook.php';</script>";
    } else {
        echo "<script>alert('Something Wrong');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title> Edit Library </title>
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
        $sql = "SELECT * FROM `library` WHERE id = $id LIMIT 1";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        ?>

        <div class="form-container">
            <form action="" method="post">
                <div class="row">

                     <!-- Type-->
                     <div class="col-md-6 mb-3">
                          <label class="form-label">TYPE (Physical Book/Online Book/Journal Subscribed):</label>
                          <select class="form-control" name="type" required>
                              <option value="" disabled selected>Type</option>
                              <option value="Physical Book"<?php if ($row['type'] == 'Physical Book') echo 'selected';?>>Physical Book</option>
                              <option value="Online Book"<?php if ($row['type'] == 'Online Book') echo 'selected';?>>Online Book</option>
                              <option value="Journal Subscribed"<?php if ($row['type'] == 'Journal Subscribed') echo 'selected';?>>Journal Subscribed</option>
                           </select>
                      </div>

                    <!-- Name -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">COLLECTION NAME:</label>
                        <input type="text" class="form-control" name="name" value="<?php echo $row['name'] ?>">
                    </div>

                    <!-- Name Title -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">TOTAL TITLE:</label>
                        <input type="text" class="form-control" name="title" value="<?php echo $row['title'] ?>">
                    </div>
                   <!-- volume -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">TOTAL VOLUME:</label>
                        <input type="text" class="form-control" name="volume" value="<?php echo $row['volume'] ?>">
                    </div>
                    <!-- Link Evidence -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">LINK TO EVIDENCE:</label>
                        <input type="text" class="form-control" name="link" value="<?php echo $row['link'] ?>">
                    </div>
                </div>
         <!--Button-->
      <div> 
       <center>
            <button type ="submit" class="btn btn-success" name="submit">UPDATE</button>
            <a href="TittleBook.php" class="btn btn-danger">Cancel</a>
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
