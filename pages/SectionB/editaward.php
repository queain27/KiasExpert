<?php
include "../examples/config.php";
$staff_id =$_GET['ID'];

if(isset($_POST['submit'])) 
{
    $staff_id = $_POST['staff_id'];
    $staff_name = $_POST['staff_name'];
    $faculty= $_POST['faculty'];
    $name_awd = $_POST['name_awd'];
    $type = $_POST['type'];
    $level = $_POST['level'];
    $conferring = $_POST['conferring'];
    $title_invention = $_POST['title_invention'];
    $event = $_POST['event'];
    $date = $_POST['date'];
    $link_award = $_POST['link_award'];

 
    // Use prepared statements to avoid SQL injection
    $stmt = $conn->prepare("UPDATE awarding SET staff_id = ?, staff_name = ?, faculty = ?, name_awd = ?, type = ?, level = ?, conferring  = ?, title_invention = ?, event = ?, date = ?, link_award = ? WHERE staff_id = ?");
    $stmt->bind_param("issssssssssi", $staff_id, $staff_name,   $faculty,  $name_awd,  $type, $level, $conferring, $title_invention, $event,  $date, $link_award, $staff_id);

    if($stmt->execute()) {
        echo "<script>alert('New record successfully updated');</script>";
        echo "<script>document.location='Award.php';</script>";
    } else {
        echo "<script>alert('Something went wrong');</script>";
    }

    $stmt->close();
    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Research Information</title>
    <style>
        body {
            background-repeat:            no-repeat;
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
    <link rel="shortcut icon" href="../../images/Logo2.png" type="image/x-icon">
</head>
<body>
    <div class="container">
        <div class="text-center mb-4">
            <b><p>Click Update After Finish Changing Information</p></b>
        </div>

       
        <?php 
        $sql = "SELECT * FROM `awarding` WHERE staff_id= $staff_id LIMIT 1";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        ?>

        <div class="container d-flex justify-content-center">
            <form action="" method="post" style="width:50vw; min-width:300px;">
                <div class="row">
                    <!-- Staff ID -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">STAFF ID:</label>
                        <input type="text" class="form-control" name="staff_id" value="<?php echo $row['staff_id']?>" readonly>
                    </div>

                    <!-- Name -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">STAFF NAME:</label>
                        <input type="text" class="form-control" name="staff_name" value="<?php echo $row['staff_name']?>" readonly>
                    </div>

                 <!-- Name -->
                 <div class="col-md-6 mb-3">
                        <label class="form-label">FACULTY:</label>
                        <input type="text" class="form-control" name="faculty" value="<?php echo $row['faculty']?>">
                    </div>


                    <!-- First Appointment -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">NAME OF AWARDING:</label>
                        <input type="text" class="form-control" name="name_awd" value="<?php echo $row['name_awd']?>">
                    </div>
                  <!-- First Appointment -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Type</label>
                        <input type="text" class="form-control" name="type" value="<?php echo $row['type']?>">
                    </div>
                     <!-- First Appointment -->
                    
                    <div class="col-md-6 mb-3">
                    <label class="form-label">LEVEL:</label>
                    <select class="form-control" name="level" required>
                            <option value="" disabled selected>Choose</option>
                            <option value="University" <?php if ($row['level'] == 'University') echo 'selected'; ?>>University</option>
                            <option value="National" <?php if ($row['level'] == 'National') echo 'selected'; ?>>National</option>
                            <option value="International" <?php if ($row['level'] == 'International') echo 'selected'; ?>>International</option>
                    </select>
                    </div>

                    <!-- Academic Qualification -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">CONFERRING AWARD:</label>
                        <input type="text" class="form-control" name="conferring" value="<?php echo $row['conferring']?>">
                    </div>

                    <!-- Name of Professional Qualification/Awarding Body -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">TITLE INVENTION:</label>
                        <input type="text" class="form-control" name="title_invention" value="<?php echo $row['title_invention']?>">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">EVENT:</label>
                        <input type="text" class="form-control" name="event" value="<?php echo $row['event']?>">
                    </div>

                    <!-- Registration Number for Professional Membership -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">DATE :</label>
                        <input type="date" class="form-control" name="date" value="<?php echo $row['date']?>">
                    </div>

                    <!-- Remarks -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">LINK:</label>
                        <input type="text" class="form-control" name="link_award" value="<?php echo $row['link_award']?>">
 
                    </div>         
               <div>
                  <center>
                       <button type ="submit" class="btn btn-success" name="submit">UPDATE</button>
                       <a href="Award.php" class="btn btn-danger">Cancel</a>
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


