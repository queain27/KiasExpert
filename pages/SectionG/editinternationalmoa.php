<?php
include "../examples/config.php"; // Ensure this file connects to your database and creates $conn

$id = $_GET['ID'];

if (isset($_POST['submit'])) {
    // Collect POST data
    $organisation_name = $_POST['organisation_name'];
    $country = $_POST['country'];
    $programme_title = $_POST['programme_title'];
    $type = $_POST['type'];
    $activity = $_POST['activity'];
    $category = $_POST['category'];
    $amount = $_POST['amount'];
    $start_date = $_POST['start_date'];
    $expiry_date = $_POST['expiry_date'];
    $period = $_POST['period'];
    $link_evidence = $_POST['link_evidence'];
    $remarks = $_POST['remarks'];

    // Prepare the SQL statement
    $stmt = $conn->prepare("UPDATE `internationalmoa` 
                            SET `organisation_name` = ?, 
                                `country` = ?, 
                                `programme_title` = ?, 
                                `type` = ?, 
                                `activity` = ?, 
                                `category` = ?, 
                                `amount` = ?, 
                                `start_date` = ?, 
                                `expiry_date` = ?, 
                                `period` = ?, 
                                `link_evidence` = ?, 
                                `remarks` = ? 
                            WHERE `id` = ?");
                            $stmt->bind_param('ssssssisssssi', 
                                $organisation_name, 
                                $country, 
                                $programme_title, 
                                $type, 
                                $activity, 
                                $category, 
                                $amount, 
                                $start_date, 
                                $expiry_date, 
                                $period, 
                                $link_evidence, 
                                $remarks, 
                                $id
                            );

    // Execute the prepared statement
    if ($stmt->execute()) {
        echo "<script>alert('Record successfully updated');</script>";
        echo "<script>window.location.href='InternationalMoa.php';</script>";
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
    <title>Update International MoA</title>
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
        $sql = "SELECT * FROM `internationalmoa` WHERE id= $id LIMIT 1";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        ?>

        <div class="container d-flex justify-content-center">
            <form action="" method="post" style="width:50vw; min-width:300px;">
                <div class="row">
                      
                    <!-- Staff ID -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">ORGANISATION/COLLABORATOR:</label>
                        <input type="text" class="form-control" name="organisation_name" value="<?php echo $row['organisation_name']?>" >
                    </div>

                    <!-- Name -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">COUNTRY:</label>
                        <input type="text" class="form-control" name="country" value="<?php echo $row['country']?>" >
                    </div>

                 <div class="col-md-6 mb-3">
                        <label class="form-label">PROGRAMME TITLE:</label>
                        <input type="text" class="form-control" name="programme_title" value="<?php echo $row['programme_title']?>">
                    </div>

                

                    <div class="col-md-6 mb-3">
                    <label class="form-label">TYPE:</label>
                    <select class="form-control" id="typeDropdown" name="type" required>
                            <option value="" disabled selected>Choose</option>
                            <option value="MoA" <?php if ($row['type'] == 'MoA') echo 'selected'; ?>>MoA</option>
                            <option value="MoU" <?php if ($row['type'] == 'MoU') echo 'selected'; ?>>MoU</option>
                            <option value="LoA" <?php if ($row['type'] == 'LoA') echo 'selected'; ?>>LoA</option>
                            <option value="RA" <?php if ($row['type'] == 'RA') echo 'selected'; ?>>RA</option>
                    </select>
                    </div>
                         
                    <div class="col-md-6 mb-3 <?php echo empty($row['activity']) ? 'hidden' : ''; ?>" id="activityField">
                        <label class="form-label">ACTIVITY:</label>
                        <input type="text" class="form-control" name="activity" value="<?php echo htmlspecialchars($row['activity']); ?>">
                    </div>

                    <div class="col-md-6 mb-3">
                    <label class="form-label">CATEGORY:</label>
                    <select class="form-control" name="category" required>
                            <option value="" disabled selected>Choose</option>
                            <option value="Industry" <?php if ($row['category'] == 'Industry') echo 'selected'; ?>>Industry</option>
                            <option value="Community" <?php if ($row['category'] == 'Community') echo 'selected'; ?>>Community</option>
                            <option value="University" <?php if ($row['category'] == 'University') echo 'selected'; ?>>'University</option>
                            <option value="Agency" <?php if ($row['category'] == 'Agency') echo 'selected'; ?>>Agency</option>
                    </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">AMOUNT:</label>
                        <input type="text" class="form-control" name="amount" value="<?php echo $row['amount']?>">
                    </div>
                    
                    
                    <div class="col-md-6 mb-3">
                        <label class="form-label">START DATE:</label>
                        <input type="date" class="form-control" id="start_date" name="start_date" value="<?php echo $row['start_date']?>">
                    </div>
                    
                    <div class="col-md-6 mb-3">
                        <label class="form-label">EXPIRY DATE:</label>
                        <input type="date" class="form-control" id="expiry_date" name="expiry_date" value="<?php echo $row['expiry_date']?>">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">PERIOD :</label>
                        <input type="text" class="form-control" id="period" name="period" value="<?php echo $row['period']?>">
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
                       <a href="InternationalMoa.php" class="btn btn-danger">Cancel</a>
              </div>
                 </center>
          </form>
     </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const typeDropdown = document.getElementById('typeDropdown');
        const activityField = document.getElementById('activityField');
  
        // Function to update field visibility
        function updateFieldsVisibility() {
            if (typeDropdown.value === 'MoU') {
                activityField.classList.remove('hidden');
          
            } else {
              
                activityField.classList.add('hidden');
            }
        }

        // Initial check on page load
        updateFieldsVisibility();

        // Add event listener to toggle field visibility
        typeDropdown.addEventListener('change', updateFieldsVisibility);
        
            // Date Period Calculation
            const startDateInput = document.getElementById('start_date');
                const expiryDateInput = document.getElementById('expiry_date');
                const periodInput = document.getElementById('period');

                function calculatePeriod() {
                    const startDate = new Date(startDateInput.value);
                    const expiryDate = new Date(expiryDateInput.value);

                    if (startDate && expiryDate && startDate <= expiryDate) {
                        const timeDiff = expiryDate - startDate;
                        const daysDiff = Math.floor(timeDiff / (1000 * 60 * 60 * 24));
                        periodInput.value = `${daysDiff} days`;
                    } else {
                        periodInput.value = '';
                    }
                }

                startDateInput.addEventListener('change', calculatePeriod);
                expiryDateInput.addEventListener('change', calculatePeriod);
    });
</script>
 <!--Boostrap-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
 <!--Boostrap-->
</body>
</html>


