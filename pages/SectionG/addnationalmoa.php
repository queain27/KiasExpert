<?php
include "../examples/config.php";

// Check if form is submitted
if (isset($_POST['submit'])) {
    // Fetch and sanitize POST data
    $organisation_name = mysqli_real_escape_string($conn, $_POST['organisation_name']);
    $type = mysqli_real_escape_string($conn, $_POST['type']);
    $category = mysqli_real_escape_string($conn, $_POST['category']);
    $amount = mysqli_real_escape_string($conn, $_POST['amount']);
    $start_date = mysqli_real_escape_string($conn, $_POST['start_date']);
    $end_date = mysqli_real_escape_string($conn, $_POST['end_date']);
    $period = mysqli_real_escape_string($conn, $_POST['period']);
    $programme_title = mysqli_real_escape_string($conn, $_POST['programme_title']);
    $link_evidence = mysqli_real_escape_string($conn, $_POST['link_evidence']);
    $remarks = mysqli_real_escape_string($conn, $_POST['remarks']);

    // Prepare SQL query
    $sql = "INSERT INTO `nationalmoa` 
        (`organisation_name`, `type`, `category`, `amount`, `start_date`, `end_date`, `period`,`programme_title`, `link_evidence`, `remarks`) 
        VALUES 
        ('$organisation_name', '$type',  '$category', '$amount', '$start_date', '$end_date', '$period','$programme_title','$link_evidence', '$remarks')";

    // Execute the query and check for success
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('New record successfully added');</script>";
        echo "<script>document.location='Nationalmoa.php';</script>";
    } else {
        echo "<script>alert('Error: " . mysqli_error($conn) . "');</script>";
    }
}

// Close the database connection
mysqli_close($conn);
?>


<!DOCTYPE html>
<html lang="en">
<head><meta charset="utf-8">
  <title>Add New </title>
  <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
  <script src="../../bootstrap/js/jquery.min.js"></script>
  <script src="../../bootstrap/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../../css/navbar.css">
  <link rel="shortcut icon" href="../../images/Logo2.png" type="image/x-icon">
  <script src="../../bootstrap/js/jquery.min.js"></script>
    <script src="../../bootstrap/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
        .hidden {
            display: none;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h1 class="border-bottom text-center pb-3 mb-4">Add Organisation</h1>
                    </div>
                </div>
                <form action="" method="post">
                    <div class="row">
                        <!-- Organisation Name -->
                        <div class="col-md-6 mb-3">
                            <label class="form-label">ORGANISATION/COLLABORATOR NAME:</label>
                            <input type="text" class="form-control" name="organisation_name" placeholder="Organisation/Collaborator Name" required>
                        </div>
                         <!-- Type Dropdown -->
                         <div class="col-md-6 mb-3">
                            <label class="form-label">TYPE:</label>
                            <select class="form-control"  name="type" required>
                                <option value="" disabled selected>Choose Type</option>
                                <option value="MoA">MoA</option>
                                <option value="LoA">LoA</option>
                                <option value="RA">RA</option>
                            </select>
                        </div>
                          <!-- Category -->
                          <div class="col-md-6 mb-3">
                            <label class="form-label">CATEGORY:</label>
                            <select class="form-control" name="category" required>
                                <option value="" disabled selected>Choose Category</option>
                                <option value="Industry">Industry</option>
                                <option value="Community">Community</option>
                                <option value="University">University</option>
                                <option value="Agency">Agency</option>
                            </select>
                        </div>
                           <!-- Amount -->
                           <div class="col-md-6 mb-3">
                            <label class="form-label">AMOUNT:</label>
                            <input type="text" class="form-control" name="amount" placeholder="Amount (If Applicable)" >
                        </div>

                        <!-- Programme Title -->
                        <div class="col-md-6 mb-3">
                            <label class="form-label">PROGRAMME TITLE:</label>
                            <input type="text" class="form-control" name="programme_title" placeholder="Programme Title" required>
                        </div>

                       
                        <!-- Start Date -->
                        <div class="col-md-6 mb-3">
                            <label class="form-label">START DATE:</label>
                            <input type="date" class="form-control" id="start_date" name="start_date" required>
                        </div>

                        <!-- Expiry Date -->
                        <div class="col-md-6 mb-3">
                            <label class="form-label">END DATE:</label>
                            <input type="date" class="form-control" id="end_date" name="end_date" required>
                        </div>

                        <!-- Period -->
                        <div class="col-md-6 mb-3">
                            <label class="form-label">PERIOD:</label>
                            <input type="text" class="form-control" id="period" name="period" placeholder="Period" required>
                        </div>

                        <!-- Link Evidence -->
                        <div class="col-md-6 mb-3">
                            <label class="form-label">LINK EVIDENCE:</label>
                            <input type="text" class="form-control" name="link_evidence" placeholder="Attach Link" required>
                        </div>

                        <!-- Remarks -->
                        <div class="col-md-6 mb-3">
                            <label class="form-label">REMARKS:</label>
                            <input type="text" class="form-control" name="remarks" placeholder="Remarks">
                        </div>

                        <!-- Button -->
                        <div class="col-md-12 mb-3 text-center">
                            <button type="submit" class="btn btn-primary" name="submit">ADD</button>
                            <a href="Nationalmoa.php" class="btn btn-success">View Organisation</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <script>
        $(document).ready(function() {
            // Date Period Calculation
            const startDateInput = $('#start_date');
            const endDateInput = $('#end_date');
            const periodInput = $('#period');

            function calculatePeriod() {
                const startDate = new Date(startDateInput.val());
                const endDate = new Date(endDateInput.val());

                if (startDate && endDate && startDate <= endDate) {
                    const timeDiff = endDate - startDate;
                    const daysDiff = Math.floor(timeDiff / (1000 * 60 * 60 * 24));
                    periodInput.val(`${daysDiff} days`);
                } else {
                    periodInput.val('');
                }
            }

            startDateInput.on('change', calculatePeriod);
            endDateInput.on('change', calculatePeriod);
        });
        </script>

</body>
</html>

