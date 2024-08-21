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
    $organisation_name = mysqli_real_escape_string($conn, $_POST['organisation_name']);
    $country = mysqli_real_escape_string($conn, $_POST['country']);
    $programme_title = mysqli_real_escape_string($conn, $_POST['programme_title']);
    $type = mysqli_real_escape_string($conn, $_POST['type']);
    $activity = mysqli_real_escape_string($conn, $_POST['activity']);
    $category = mysqli_real_escape_string($conn, $_POST['category']);
    $amount = mysqli_real_escape_string($conn, $_POST['amount']);
    $start_date = mysqli_real_escape_string($conn, $_POST['start_date']);
    $expiry_date = mysqli_real_escape_string($conn, $_POST['expiry_date']);
    $period = mysqli_real_escape_string($conn, $_POST['period']);
    $link_evidence = mysqli_real_escape_string($conn, $_POST['link_evidence']);
    $remarks = mysqli_real_escape_string($conn, $_POST['remarks']);

    // Prepare SQL query
    $sql = "INSERT INTO `internationalmoa` 
        (`organisation_name`,`country`, `programme_title`, `type`, `activity`, `category`, `amount`, `start_date`, `expiry_date`, `period`, `link_evidence`, `remarks`) 
        VALUES 
        ('$organisation_name','$country', '$programme_title', '$type', '$activity', '$category', '$amount', '$start_date', '$expiry_date', '$period', '$link_evidence', '$remarks')";

    // Execute the query and check for success
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('New record successfully added');</script>";
        echo "<script>document.location='InternationalMoa.php';</script>";
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
  <title>Add New Staff Academic</title>
  <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
  <script src="../../bootstrap/js/jquery.min.js"></script>
  <script src="../../bootstrap/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../../css/navbar.css">
  <link rel="shortcut icon" href="../../images/Logo2.png" type="image/x-icon">
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
                        <div class="col-md-6 mb-3">
                            <label class="form-label">COUNTRY:</label>
                            <input type="text" class="form-control" name="country" placeholder="Country" required>
                        </div>
                        <!-- Programme Title -->
                        <div class="col-md-6 mb-3">
                            <label class="form-label">PROGRAMME TITLE:</label>
                            <input type="text" class="form-control" name="programme_title" placeholder="Programme Title" required>
                        </div>

                        <!-- Type Dropdown -->
                        <div class="col-md-6 mb-3">
                            <label class="form-label">TYPE:</label>
                            <select class="form-control" id="typeDropdown" name="type" required>
                                <option value="" disabled selected>Choose Position</option>
                                <option value="MoA">MoA</option>
                                <option value="MoU">MoU</option>
                                <option value="LoA">LoA</option>
                                <option value="RA">RA</option>
                            </select>
                        </div>

                        <!-- Activities Field -->
                        <div class="col-md-6 mb-3 hidden" id="activityField">
                            <label class="form-label">Activities (IF MoU):</label>
                            <input type="text" class="form-control" name="activity">
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
                            <label class="form-label">AMOUNT (If Applicable):</label>
                            <input type="text" class="form-control" name="amount" placeholder="Amount (If Applicable)" >
                        </div>

                        <!-- Start Date -->
                        <div class="col-md-6 mb-3">
                            <label class="form-label">START DATE:</label>
                            <input type="date" class="form-control" id="start_date" name="start_date" required>
                        </div>

                        <!-- Expiry Date -->
                        <div class="col-md-6 mb-3">
                            <label class="form-label">EXPIRY DATE:</label>
                            <input type="date" class="form-control" id="expiry_date" name="expiry_date" required>
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
                            <input type="text" class="form-control" name="remarks" placeholder="Remarks" required>
                        </div>

                        <!-- Button -->
                        <div class="col-md-12 mb-3 text-center">
                            <button type="submit" class="btn btn-primary" name="submit">ADD</button>
                            <a href="InternationalMoa.php" class="btn btn-success">View Organisation</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <script>
        // JavaScript to toggle activity field visibility based on type selection
        document.addEventListener('DOMContentLoaded', function() {
            const typeDropdown = document.getElementById('typeDropdown');
            const activityField = document.getElementById('activityField');

            // Initial check on page load
            if (typeDropdown.value === 'MoU') {
                activityField.classList.remove('hidden');
            } else {
                activityField.classList.add('hidden');
            }

            // Add event listener to toggle field visibility
            typeDropdown.addEventListener('change', function() {
                if (typeDropdown.value === 'MoU') {
                    activityField.classList.remove('hidden');
                } else {
                    activityField.classList.add('hidden');
                }
            });

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
</body>
</html>

