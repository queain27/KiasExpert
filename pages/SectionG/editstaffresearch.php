<?php
include "../examples/config.php"; // Ensure this file connects to your database and creates $conn

// Ensure $staff_id is properly sanitized and validated
$staff_id = isset($_GET['ID']) ? mysqli_real_escape_string($conn, $_GET['ID']) : '';

if (isset($_POST['submit'])) {
    // Collect and sanitize POST data
    $staff_id = mysqli_real_escape_string($conn, $_POST['staff_id']);
    $staff_name = mysqli_real_escape_string($conn, $_POST['staff_name']);
    $faculty = mysqli_real_escape_string($conn, $_POST['faculty']);
    $programme_title = mysqli_real_escape_string($conn, $_POST['programme_title']);
    $type = mysqli_real_escape_string($conn, $_POST['type']);
    $organisation_name = mysqli_real_escape_string($conn, $_POST['organisation_name']);
    $start_date = mysqli_real_escape_string($conn, $_POST['start_date']);
    $end_date = mysqli_real_escape_string($conn, $_POST['end_date']);
    $link_evidence = mysqli_real_escape_string($conn, $_POST['link_evidence']);
    $remarks = mysqli_real_escape_string($conn, $_POST['remarks']);

    // Prepare the SQL statement
    $stmt = $conn->prepare("UPDATE `staffnational` 
                            SET `staff_name` = ?, 
                                `programme_title` = ?, 
                                `faculty` = ?, 
                                `type` = ?, 
                                `organisation_name` = ?, 
                                `start_date` = ?, 
                                 `end_date` = ?, 
                                `link_evidence` = ?, 
                                `remarks` = ? 
                            WHERE `staff_id` = ?");
    
    // Bind parameters
    $stmt->bind_param('sssssssssi', 
                       $staff_name, 
                       $programme_title, 
                       $faculty, 
                       $type,
                       $organisation_name,
                       $start_date,
                       $end_date,
                       $link_evidence, 
                       $remarks, 
                       $staff_id
    );

    // Execute the prepared statement
    if ($stmt->execute()) {
        echo "<script>alert('Record successfully updated');</script>";
        echo "<script>window.location.href='Staff_Research.php';</script>";
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
    <title>Update Staff National MoA</title>
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
include "../examples/config.php";
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and execute the query to fetch staff details
$stmt = $conn->prepare("SELECT * FROM `staffnational` WHERE staff_id = ? LIMIT 1");
$stmt->bind_param("i", $staff_id);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
$stmt->close();

// Fetch programme titles and organisation names for dropdowns
$programme_titles = [];
$organisations = [];

$prog_stmt = $conn->prepare("SELECT programme_title FROM nationalorganisation");
$prog_stmt->execute();
$prog_result = $prog_stmt->get_result();
while ($prog_row = $prog_result->fetch_assoc()) {
    $programme_titles[] = $prog_row['programme_title'];
}
$prog_stmt->close();

$org_stmt = $conn->prepare("SELECT organisation_name FROM nationalorganisation");
$org_stmt->execute();
$org_result = $org_stmt->get_result();
while ($org_row = $org_result->fetch_assoc()) {
    $organisations[] = $org_row['organisation_name'];
}
$org_stmt->close();

$conn->close();
?>

<div class="container d-flex justify-content-center">
    <form action="" method="post" style="width:50vw; min-width:300px;">
        <div class="row">
            <!-- Staff ID -->
            <div class="col-md-6 mb-3">
                <label class="form-label">STAFF ID:</label>
                <input type="text" class="form-control" name="staff_id" value="<?php echo htmlspecialchars($row['staff_id']); ?>" readonly>
            </div>

            <!-- Name -->
            <div class="col-md-6 mb-3">
                <label class="form-label">STAFF NAME:</label>
                <input type="text" class="form-control" name="staff_name" value="<?php echo htmlspecialchars($row['staff_name']); ?>" readonly>
            </div>

            <div class="col-md-6 mb-3">
                <label class="form-label">FACULTY :</label>
                <input type="text" class="form-control" name="faculty" value="<?php echo htmlspecialchars($row['faculty']); ?>">
            </div>

            <div class="col-md-6 mb-3">
                <label class="form-label">PROGRAMME TITLE:</label>
                <select class="form-control" name="programme_title" required>
                    <?php foreach ($programme_titles as $title): ?>
                        <option value="<?php echo htmlspecialchars($title); ?>" <?php if ($title == $row['programme_title']) echo 'selected'; ?>>
                            <?php echo htmlspecialchars($title); ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="col-md-6 mb-3">
                <label class="form-label">TYPE:</label>
                <select class="form-control" name="type" required>
                    <option value="" disabled <?php if (empty($row['type'])) echo 'selected'; ?>>Choose Type</option>
                    <option value="Project Leader" <?php if ($row['type'] == 'Project Leader') echo 'selected'; ?>>Project Leader</option>
                    <option value="Member" <?php if ($row['type'] == 'Member') echo 'selected'; ?>>Member</option>
                </select>
            </div>

            <!-- Collaborator -->
            <div class="col-md-6 mb-3">
                <label class="form-label">COLLABORATOR:</label>
                <select class="form-control" name="organisation_name" required>
                    <?php foreach ($organisations as $org): ?>
                        <option value="<?php echo htmlspecialchars($org); ?>" <?php if ($org == $row['organisation_name']) echo 'selected'; ?>>
                            <?php echo htmlspecialchars($org); ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="col-md-6 mb-3">
                <label class="form-label">START DATE:</label>
                <input type="date" class="form-control" name="start_date" value="<?php echo htmlspecialchars($row['start_date']); ?>">
            </div>
            
            <div class="col-md-6 mb-3">
                <label class="form-label">END DATE:</label>
                <input type="date" class="form-control" name="end_date" value="<?php echo htmlspecialchars($row['end_date']); ?>">
            </div>

            <div class="col-md-6 mb-3">
                <label class="form-label">LINK EVIDENCE:</label>
                <input type="text" class="form-control" name="link_evidence" value="<?php echo htmlspecialchars($row['link_evidence']); ?>">
            </div>

            <!-- Remarks -->
            <div class="col-md-6 mb-3">
                <label class="form-label">REMARKS:</label>
                <input type="text" class="form-control" name="remarks" value="<?php echo htmlspecialchars($row['remarks']); ?>">
            </div>

            <div class="col-12 text-center">
                <button type="submit" class="btn btn-success" name="submit">UPDATE</button>
                <a href="Staff_Research.php" class="btn btn-danger">Cancel</a>
            </div>
        </div>
    </form>
</div>
</div>
 <!--Boostrap-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
 <!--Boostrap-->
</body>
</html>


