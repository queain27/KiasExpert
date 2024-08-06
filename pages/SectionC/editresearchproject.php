<?php
include "../examples/config.php";

$project_id = $_GET['ID'] ?? null;

if (isset($_POST['submit'])) {
    $project_id = $_POST['project_id'];
    $staff_id = $_POST['staff_id'];
    $staff_name = $_POST['staff_name'];
    $faculty = $_POST['faculty'];
    $st = $_POST['st'];
    $staff_status = $_POST['staff_status'];
    $research_title = $_POST['research_title'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    $page_end = $_POST['page_end'];
    $duration_project = $_POST['duration_project'];
    $status_project = $_POST['status_project'];
    $project_extension = $_POST['project_extension'];
    $project_extend = $_POST['project_extend'];
    $sponsor_cat = $_POST['sponsor_cat'];
    $sponsor = $_POST['sponsor'];
    $grant_name = $_POST['grant_name'];
    $amt_pledge = $_POST['amt_pledge'];
    $amt_rec = $_POST['amt_rec'];
    $amt_spent = $_POST['amt_spent'];
    $link_evidence = $_POST['link_evidence'];
    $remarks = $_POST['remarks'];

    // Prepare the SQL statement
    $stmt = $conn->prepare("UPDATE research_project SET 
        staff_id = ?, 
        staff_name = ?, 
        faculty = ?, 
        st = ?, 
        staff_status = ?, 
        research_title = ?, 
        start_date = ?, 
        end_date = ?, 
        page_end = ?, 
        duration_project = ?, 
        status_project = ?, 
        project_extension = ?, 
        project_extend = ?, 
        sponsor_cat = ?, 
        sponsor = ?, 
        grant_name = ?, 
        amt_pledge = ?, 
        amt_rec = ?, 
        amt_spent = ?, 
        link_evidence = ?, 
        remarks = ? 
        WHERE project_id = ?");

    if (!$stmt) {
        die('Prepare failed: ' . htmlspecialchars($conn->error));
    }

    // Bind parameters
    if (!$stmt->bind_param("isssssssiissssssiiissi", 
        $staff_id, $staff_name, $faculty, $st, $staff_status, $research_title, 
        $start_date, $end_date, $page_end, $duration_project, $status_project, 
        $project_extension, $project_extend, $sponsor_cat, $sponsor, $grant_name, 
        $amt_pledge, $amt_rec, $amt_spent, $link_evidence, $remarks, $project_id)) {
        die('Bind failed: ' . htmlspecialchars($stmt->error));
    }

    // Execute the statement
    if ($stmt->execute()) {
        echo "<script>alert('Record successfully updated');</script>";
        echo "<script>document.location='Research_Project.php';</script>";
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
        $sql = "SELECT * FROM `research_project` WHERE project_id= $project_id LIMIT 1";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        ?>

        
<div class="container d-flex justify-content-center">
            <form action="" method="post" style="width:50vw; min-width:300px;">
                <div class="row">
                        <!-- Staff ID -->
                        <div class="col-md-6 mb-3">
                        <label class="form-label">PROJECT ID:</label>
                        <input type="text" class="form-control" name="project_id" value="<?php echo $row['project_id']?>" readonly>
                       </div>
                  
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
                        <label class="form-label">FACULTY:</label>
                        <input type="text" class="form-control" name="faculty" value="<?php echo $row['faculty']?>">
                    </div>


                    <div class="col-md-6 mb-3">
                    <label class="form-label">S&T:</label>
                    <select class="form-control" name="st" required>
                            <option value="" disabled selected>Choose</option>
                            <option value="S&T" <?php if ($row['st'] == 'S&T') echo 'selected'; ?>>S&T</option>
                            <option value="NON S&T" <?php if ($row['st'] == 'NON S&T') echo 'selected'; ?>>NON S&T</option>
                    </select>
                    </div>

                 
                    <div class="col-md-6 mb-3">
                    <label class="form-label">STAFF STATUS:</label>
                    <select class="form-control" name="staff_status" required>
                            <option value="" disabled selected>Choose</option>
                            <option value="FULL TIME" <?php if ($row['staff_status'] == 'FULL TIME') echo 'selected'; ?>>FULL TIME</option>
                            <option value="PART TIME" <?php if ($row['staff_status'] == 'PART TIME') echo 'selected'; ?>>PART TIME</option>
                    </select>
                    </div>

    
                    <div class="col-md-6 mb-3">
                        <label class="form-label">RESEARCH TITLE:</label>
                        <input type="text" class="form-control" name="research_title" value="<?php echo $row['research_title']?>">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label"> START DATE :</label>
                        <input type="date" class="form-control" name="start_date" value="<?php echo $row['start_date']?>">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">END DATE:</label>
                        <input type="date" class="form-control" name="end_date" value="<?php echo $row['end_date']?>">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">PAGE END:</label>
                        <input type="text" class="form-control" name="page_end" value="<?php echo $row['page_end']?>">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">DURATION PROJECT:</label>
                        <input type="text" class="form-control" name="duration_project" value="<?php echo $row['duration_project']?>">
                    </div>

                    <div class="col-md-6 mb-3">
                    <label class="form-label">STATUS PROJECT:</label>
                    <select class="form-control" name="status_project" required>
                            <option value="" disabled selected>Choose</option>
                            <option value="COMPLETE" <?php if ($row['status_project'] == 'COMPLETE') echo 'selected'; ?>>COMPLETE</option>
                            <option value="ONGOING" <?php if ($row['status_project'] == 'ONGOING') echo 'selected'; ?>>ONGOING</option>
                    </select>
                    </div>

                    <div class="col-md-6 mb-3">
                    <label class="form-label">PROJECT WITH EXTENSION:</label>
                    <select class="form-control" name="project_extension" required>
                            <option value="" disabled selected>Choose</option>
                            <option value="YES" <?php if ($row['project_extension'] == 'YES') echo 'selected'; ?>>YES</option>
                            <option value="NO" <?php if ($row['project_extension'] == 'NO') echo 'selected'; ?>>NO</option>
                    </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">IF PROJECT EXTEND INSERT COMPLETE:</label>
                        <input type="text" class="form-control" name="project_extend" value="<?php echo $row['project_extend']?>">
                    </div>
 
                    <div class="col-md-6 mb-3">
                    <label class="form-label">SPONSOR CATEGORY:</label>
                    <select class="form-control" name="sponsor_cat" required>
                            <option value="" disabled selected>Choose</option>
                            <option value="UNIVERSITY" <?php if ($row['sponsor_cat'] == 'UNIVERSITY') echo 'selected'; ?>>UNIVERSITY</option>
                            <option value="NATIONAL" <?php if ($row['sponsor_cat'] == 'NATIONAL') echo 'selected'; ?>>NATIONAL</option>
                            <option value="PRIVATE" <?php if ($row['sponsor_cat'] == 'PRIVATE') echo 'selected'; ?>>PRIVATE</option>
                    </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">SPONSOR:</label>
                        <input type="text" class="form-control" name="sponsor" value="<?php echo $row['sponsor']?>">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">GRANT NAME:</label>
                        <input type="text" class="form-control" name="grant_name" value="<?php echo $row['grant_name']?>">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">AMOUNT PLEDGE (APPROVED):</label>
                        <input type="text" class="form-control" name="amt_pledge" value="<?php echo $row['amt_pledge']?>">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">AMOUNT RECEIVE IN THE YEAR :</label>
                        <input type="text" class="form-control" name="amt_rec" value="<?php echo $row['amt_rec']?>">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">AMOUNT SPENT IN THE YEAR:</label>
                        <input type="text" class="form-control" name="amt_spent" value="<?php echo $row['amt_spent']?>">
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
                       <a href="Research_Project.php" class="btn btn-danger">Cancel</a>
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


