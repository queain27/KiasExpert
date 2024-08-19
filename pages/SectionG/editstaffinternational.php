<?php
include "../examples/config.php"; // Ensure this file connects to your database and creates $conn

// Ensure $staff_id is properly sanitized and validated
$staff_id = isset($_GET['ID']) ? mysqli_real_escape_string($conn, $_GET['ID']) : '';

if (isset($_POST['submit'])) {
    // Collect and sanitize POST data
    $staff_id = mysqli_real_escape_string($conn, $_POST['staff_id']);
    $staff_name = mysqli_real_escape_string($conn, $_POST['staff_name']);
    $programme_title = mysqli_real_escape_string($conn, $_POST['programme_title']);
    $faculty = mysqli_real_escape_string($conn, $_POST['faculty']);
    $link_evidence = mysqli_real_escape_string($conn, $_POST['link_evidence']);
    $remarks = mysqli_real_escape_string($conn, $_POST['remarks']);

    // Prepare the SQL statement
    $stmt = $conn->prepare("UPDATE `staffinternational` 
                            SET `staff_name` = ?, 
                                `programme_title` = ?, 
                                `faculty` = ?, 
                                `link_evidence` = ?, 
                                `remarks` = ? 
                            WHERE `staff_id` = ?");
    
    // Bind parameters
    $stmt->bind_param('sssssi', 
                       $staff_name, 
                       $programme_title, 
                       $faculty, 
                       $link_evidence, 
                       $remarks, 
                       $staff_id
    );

    // Execute the prepared statement
    if ($stmt->execute()) {
        echo "<script>alert('Record successfully updated');</script>";
        echo "<script>window.location.href='Staff_International.php';</script>";
    } else {
        echo "<script>alert('Error updating record: " . $stmt->error . "');</script>";
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
    <script src="../../bootstrap/js/jquery.min.js"></script>
    <script src="../../bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
        integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../css/navbar.css">
    <link rel="shortcut icon" href="../../images/Logo2.png" type="image/x-icon">
    <title>Update Staff International MoA</title>
    <style>
        body {
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }
        .hidden {
            display: none;
        }
      
    </style>



</head>
<body>
    <div class="container">
        <div class="text-center mb-4">
            <b><p>Click Update After Finish Changing Information</p></b>
        </div>

       
        <?php 
        $sql = "SELECT * FROM `staffinternational` WHERE staff_id= $staff_id LIMIT 1";
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
  
                    <div class="col-md-6 mb-3">
                        <label class="form-label">FACULTY :</label>
                        <input type="text" class="form-control" name="faculty" value="<?php echo $row['faculty']?>">
                    </div>
               
                       <!-- Programme Title -->
                    <div class="col-md-6 mb-3">
                    <label class="form-label">PROGRAMME TITLE:</label>
                    <select class="form-control" name="programme_title" required>
                        <?php
                        // Fetch data from the organisation table
                        $sql = "SELECT programme_title FROM internationalmoa WHERE type = 'MoA'";
                        $optionsResult = $conn->query($sql);

                        if ($optionsResult->num_rows > 0) {
                            // Loop through the results and create option elements
                            while ($option = $optionsResult->fetch_assoc()) {
                                $selected = ($option['programme_title'] == $row['programme_title']) ? 'selected' : '';
                                echo '<option value="' . htmlspecialchars($option['programme_title']) . '" ' . $selected . '>' . htmlspecialchars($option['programme_title']) . '</option>';
                            }
                        } else {
                            echo '<option value="">No options available</option>';
                        }
                        ?>
                    </select>
                 </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">LINK EVIDENCE:</label>
                        <input type="text" class="form-control" name="link_evidence" value="<?php echo $row['link_evidence']?>">
                    </div>
                    <!-- Remarks -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">REMARKS:</label>
                        <input type="text" class="form-control" name="remarks" value="<?php echo $row['remarks']?>">
                    </div>         
               <div>
               <center>
                       <button type ="submit" class="btn btn-success" name="submit">UPDATE</button>
                       <a href="Staff_International.php" class="btn btn-danger">Cancel</a>
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


