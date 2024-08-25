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
   $type = $_POST['type'];
   $name = $_POST['name'];
   $title = $_POST['title'];
   $volume = $_POST['volume'];
   $link = $_POST['link'];

   $sql = mysqli_query($conn, "INSERT INTO `library` (`id`, `type`, `name`, `title`, `volume`, `link`) VALUES ('$id','$type', '$name', '$title', '$volume','$link')");

   if($sql) {
       echo "<script>alert('New record successfully added');</script>";
       echo "<script>document.location='TittleBook.php';</script>";
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
    createHeader('fa fa-briefcase', 'Add New Library Book', 'Add Library Book');
    ?>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h1 class="border-bottom text-center pb-3 mb-4">Add Library Book</h1>
        </div>
      </div>
      <form action="" method="post">
        <div class="row">

        <!-- Type-->
                 <div class="col-md-6 mb-3">
                    <label class="form-label">TYPE (Physical Book/ Online Book/ Journal Subscribed):</label>
                    <select class="form-control" name="type" required>
                        <option value="" disabled selected>Choose type</option>
                        <option value="Physical Book">Physical Book</option>
                        <option value="Online Book">Online Book</option>
                        <option value="Journal Subscribed">Journal Subscribed</option>
                    </select>
                </div>

        <!-- Name -->
               <div class="col-md-6 mb-3">
                  <label class="form-label">COLLECTION NAME:</label>
                  <input type="text" class="form-control" name="name" placeholder="Collection Name" required>
                </div>

        <!-- title -->
                <div class="col-md-6 mb-3">
                  <label class="form-label">TOTAL TITLE:</label>
                  <input type="text" class="form-control" name="title" placeholder="Total Title" required>
               </div>

        <!-- Volume -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">TOTAL VOLUME:</label>
                        <input type="text" class="form-control" name="volume" placeholder="Total Volume" required>
                    </div> 

          <!--Link Evidence-->
          <div class="col-md-6 mb-3">
            <label class="form-label">LINK EVIDENCE:</label>
            <input type="text" class="form-control" name="link" placeholder="Attach Link" required>
          </div>

          <!--Button-->
          <div class="col-md-12 mb-3 text-center">
            <button type="submit" class="btn btn-primary" name="submit">ADD</button>
            <a href="TittleBook.php" class="btn btn-success">View Library</a>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

</body>
</html>
