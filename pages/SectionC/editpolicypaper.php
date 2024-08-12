<?php
include "../examples/config.php";
$staff_id =$_GET['ID'];


if (isset($_POST['submit'])) {
    // Retrieve POST data
    $staff_name = $_POST['staff_name'];
    $authors = $_POST['authors'];
    $title_paper = $_POST['title_paper'];
    $stake_holder = $_POST['stake_holder'];
    $level = $_POST['level'];
    $year_published = $_POST['year_published'];
    $isbn = $_POST['isbn'];
    $link_evidence = $_POST['link_evidence'];
    $remarks = $_POST['remarks'];

    // Prepare the SQL statement
    $stmt = $conn->prepare("UPDATE policy_paper SET 
         staff_id = ?, 
        staff_name = ?, 
        authors = ?, 
        title_paper = ?, 
        stake_holder = ?, 
        level = ?, 
        year_published = ?, 
        isbn = ?, 
        link_evidence = ?, 
        remarks = ? 
        WHERE staff_id = ?");

    // Check if the statement preparation was successful
    if (!$stmt) {
        die('Prepare failed: ' . htmlspecialchars($conn->error));
    }

    // Bind the parameters
    // Assuming all fields are strings except for the `staff_id` which is an integer
    $stmt->bind_param("isssssiissi", 
        $staff_id, 
        $staff_name, 
        $authors, 
        $title_paper, 
        $stake_holder, 
        $level, 
        $year_published, 
        $isbn, 
        $link_evidence, 
        $remarks, 
        $staff_id
    );

    // Execute the statement
    if ($stmt->execute()) {
        echo "<script>alert('Record successfully updated');</script>";
        echo "<script>document.location='Policy.php';</script>"; // Redirect to a relevant page
    } else {
        echo "<script>alert('Error: " . htmlspecialchars($stmt->error) . "');</script>";
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
        $sql = "SELECT * FROM `policy_paper` WHERE staff_id= $staff_id LIMIT 1";
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
                        <label class="form-label">AUTHORS:</label>
                        <input type="text" class="form-control" name="authors" value="<?php echo $row['authors']?>">
                    </div>


                    <!-- First Appointment -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">TITLE OF POLICY PAPER:</label>
                        <input type="text" class="form-control" name="title_paper" value="<?php echo $row['title_paper']?>">
                    </div>
                  <!-- First Appointment -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">STAKE HOLDER</label>
                        <input type="text" class="form-control" name="stake_holder" value="<?php echo $row['stake_holder']?>">
                    </div>
                     <!-- First Appointment -->
                    
                    <div class="col-md-6 mb-3">
                    <label class="form-label">LEVEL:</label>
                    <select class="form-control" name="level" required>
                            <option value="" disabled selected>Choose</option>
                            <option value="STATE GOVERNMENT" <?php if ($row['level'] == 'STATE GOVERNMENT') echo 'selected'; ?>>STATE GOVERNMENT</option>
                            <option value="FEDERAL GOVERNMENT" <?php if ($row['level'] == 'FEDERAL GOVERNMENT') echo 'selected'; ?>>FEDERAL GOVERNMENT</option>
                            <option value="INTERNATIONAL GOVERNMENT" <?php if ($row['level'] == 'INTERNATIONAL GOVERNMENT') echo 'selected'; ?>>INTERNATIONAL GOVERNMENT</option>
                    </select>
                    </div>

                    <!-- Academic Qualification -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">YEAR PUBLISHED:</label>
                        <input type="text" class="form-control" name="year_published" value="<?php echo $row['year_published']?>">
                    </div>

                    <!-- Name of Professional Qualification/Awarding Body -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">ISBN:</label>
                        <input type="text" class="form-control" name="isbn" value="<?php echo $row['isbn']?>">
                    </div>


                    <!-- Remarks -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">LINK EVIDENCE:</label>
                        <input type="text" class="form-control" name="link_evidence" value="<?php echo $row['link_evidence']?>">
 
                    </div>    
                    <div class="col-md-6 mb-3">
                        <label class="form-label">REMARKS:</label>
                        <input type="text" class="form-control" name="remarks" value="<?php echo $row['remarks']?>">
      
               <div>
                  <center>
                       <button type ="submit" class="btn btn-success" name="submit">UPDATE</button>
                       <a href="Policy.php" class="btn btn-danger">Cancel</a>
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


