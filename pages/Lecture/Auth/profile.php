<?php
include 'config.php';
session_start();

// Check if staff_id exists in the session
if (!isset($_SESSION['staff_id'])) {
    header('Location: login.php');
    exit();
}

$staff_id = $_SESSION['staff_id'];

// Handle logout
if (isset($_GET['logout'])) {
    session_unset(); // Clear all session variables
    session_destroy(); // Destroy the session
    header('Location: login.php');
    exit();
}

// Prepare the SQL query to fetch staff details
$query = "SELECT * FROM staff WHERE staff_id = ?";
$stmt = mysqli_prepare($conn, $query);

if ($stmt) {
    // Bind the staff_id parameter to the query
    mysqli_stmt_bind_param($stmt, 'i', $staff_id);

    // Execute the statement
    mysqli_stmt_execute($stmt);

    // Get the result
    $result = mysqli_stmt_get_result($stmt);

    // Check if the query was successful and data was found
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        // Extract staff details
        $staff_id = $row['staff_id'];
        $image= $row['image'];
        $staff_name = $row['staff_name'];
        $icnumber = $row['icnumber'];
        $grade = $row['grade'];
        $position = $row['position'];
        $first_appointment = $row['first_appointment'];
        $current_appointment = $row['current_appointment'];
        $serve_date = $row['serve_date'];
        $dob = $row['dob'];
        $age = $row['age'];
        $cohort = $row['cohort'];
        $aca_qua = $row['aca_qua'];
        $name_prof = $row['name_prof'];
        $prof_qual = $row['prof_qual'];
        $regis_prof = $row['regis_prof'];
        $faculty = $row['faculty'];
        $st = $row['st'];
        $status = $row['status'];
        $status_contract = $row['status_contract'];
        $status_time = $row['status_time'];
        $citizen = $row['citizen'];
        $country = $row['country'];
        $link_evidence = $row['link_evidence'];
        $remarks = $row['remarks'];
      // $imageSrc = !empty($image) ? 'uploads/' . $image : 'uploads/default.jpg';

    } else {
        // Handle the case when no data is found for the given ID
        echo "Staff member not found!";
        // Optionally, redirect to a 404 page or display a custom error message
    }

    // Close the statement
    mysqli_stmt_close($stmt);
} else {
    echo "Database query failed!";
    // Optionally, handle query preparation error
}

// Close the database connection
mysqli_close($conn);
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Profile</title>
  
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="../../../dist/css/adminlte.min.css">
  <link rel="shortcut icon" href="../../../images/Logo2.png" type="image/x-icon">
  <link rel="stylesheet" href="css/stylelect.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
        .hidden {
            display: none;
        }
    </style>
   
  

</head>
         <?php 
          include '../../../header.php';
         include '../SideBarLect.php';
           ?>  
<body>

<?php
    // Example PHP code to get the image from the database
    // Replace with your actual database fetching code
   // $image = null; // Simulating a null image from the database
    // Display the profile image
    ?>
      

      <main id="main" class="main">



<section class="section profile">
    <div class="row">
    <div class="col-xl-4">
        <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
            <img src="<?php echo empty($image) ? 'uploads/default.jpg' : 'uploads/' . $image; ?>" alt="Profile" id="previewAndUpdateImage()" width="150">

            <h2><?php echo $staff_name; ?></h2>
            <br>
            <h2><?php echo $staff_id; ?></h2>
            </div>
        </div>
    </div>


<div class="col-xl-8">

    <div class="card">
        <div class="card-body pt-3">
            <!-- Bordered Tabs -->
            <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                </li>

                <li class="nav-item">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
                </li>

            </ul>
            <!-- Bordered Tabs -->
            <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  
                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Staff ID</div>
                                    <div class="col-lg-9 col-md-8"><?php echo $staff_id; ?></div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Name</div>
                                    <div class="col-lg-9 col-md-8"><?php echo $staff_name; ?></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Ic Number</div>
                                    <div class="col-lg-9 col-md-8"><?php echo $icnumber; ?></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Grade</div>
                                    <div class="col-lg-9 col-md-8"><?php echo $grade; ?></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Position</div>
                                    <div class="col-lg-9 col-md-8"><?php echo $position; ?></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">First Appointment</div>
                                    <div class="col-lg-9 col-md-8"><?php echo $first_appointment; ?></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Current Appointment</div>
                                    <div class="col-lg-9 col-md-8"><?php echo $current_appointment; ?></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Serve Date</div>
                                    <div class="col-lg-9 col-md-8"><?php echo $serve_date; ?></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Date of Birth</div>
                                    <div class="col-lg-9 col-md-8"><?php echo $dob; ?></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Age</div>
                                    <div class="col-lg-9 col-md-8"><?php echo $age; ?></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Cohort</div>
                                    <div class="col-lg-9 col-md-8"><?php echo $cohort; ?></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Academic Qualification</div>
                                    <div class="col-lg-9 col-md-8"><?php echo $aca_qua; ?></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Name of Professional Qualification</div>
                                    <div class="col-lg-9 col-md-8"><?php echo $name_prof; ?></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Professional Qualification</div>
                                    <div class="col-lg-9 col-md-8"><?php echo $prof_qual; ?></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Registered Professional</div>
                                    <div class="col-lg-9 col-md-8"><?php echo $regis_prof; ?></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Faculty</div>
                                    <div class="col-lg-9 col-md-8"><?php echo $faculty; ?></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">State</div>
                                    <div class="col-lg-9 col-md-8"><?php echo $st; ?></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Status</div>
                                    <div class="col-lg-9 col-md-8"><?php echo $status; ?></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Status Contract</div>
                                    <div class="col-lg-9 col-md-8"><?php echo $status_contract; ?></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Status Time</div>
                                    <div class="col-lg-9 col-md-8"><?php echo $status_time; ?></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Citizenship</div>
                                    <div class="col-lg-9 col-md-8"><?php echo $citizen; ?></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Country</div>
                                    <div class="col-lg-9 col-md-8"><?php echo $country; ?></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Link Evidence</div>
                                    <div class="col-lg-9 col-md-8">
                                        <a href="<?php echo $link_evidence; ?>" target="_blank"><?php echo $link_evidence; ?></a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Remarks</div>
                                    <div class="col-lg-9 col-md-8"><?php echo $remarks; ?></div>
                                </div>
                </div>



                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
                <form  method="post"  action="update_profile.php" enctype="multipart/form-data" style="width:50vw; min-width:300px;">
                <div class="row">
                    <!-- Staff ID -->
                     <br>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">STAFF ID:</label>
                        <input type="text" class="form-control" name="staff_id" value="<?php echo $row['staff_id']?>" readonly>
                    </div>
                                             <div class="row mb-3">
                                            <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Gambar Profile</label>
                                            <div class="col-md-8 col-lg-9">
                                                <img src="<?php echo empty($image) ? 'uploads/default.jpg' : 'uploads/' . $image; ?>" alt="Profile" id="previewImage">
                                                <div class="pt-2">
                                                    <label for="image" class="btn btn-primary btn-sm" title="Upload new profile image">
                                                        <i class="bi bi-upload"></i> Upload
                                                        <input type="file" id="image" name="image" style="display: none;" accept="uploads/*" onchange="previewAndUpdateImage()">
                                                    </label>
                                                    <input type="hidden" name="currentImage" value="<?php echo $image; ?>">
                                                    <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image" onclick="removeProfileImage()">
                                                        <i class="bi bi-trash"></i> Remove
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <script>
                                            function previewAndUpdateImage() {
                                                const input = document.getElementById('image');
                                                const preview = document.getElementById('previewImage');

                                                if (input.files && input.files[0]) {
                                                    const reader = new FileReader();

                                                    reader.onload = function (e) {
                                                        preview.src = e.target.result;
                                                    };

                                                    reader.readAsDataURL(input.files[0]);
                                                }
                                            }

                                            function removeProfileImage() {
                                                const preview = document.getElementById('previewImage');
                                                const currentImage = document.getElementById('currentImage').value;

                                                // Set the 'src' attribute of the image to the current image path
                                                preview.src = currentImage;

                                                // Clear the file input
                                                document.getElementById('image').value = '';
                                            }
                                        </script>

                        
                    <div class="col-md-6 mb-3">
                        <label class="form-label">STAFF NAME:</label>
                        <input type="text" class="form-control" name="staff_name" value="<?php echo $row['staff_name']?>">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">IC NUMBER:</label>
                        <input type="text" class="form-control" name="icnumber" value="<?php echo $row['icnumber']?>">
                    </div>

                    <!-- Grade -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">GRADE:</label>
                        <input type="text" class="form-control" name="grade" value="<?php echo $row['grade']?>">
                    </div>

                    <!-- Position Staff -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">POSITION STAFF:</label>
                        <select class="form-control" name="position">
                            <option value="" disabled selected>Choose Position</option>
                            <option value="Professor" <?php if ($row['position'] == 'Professor') echo 'selected'; ?>>Professor</option>
                            <option value="Assoc.Prof" <?php if ($row['position'] == 'Assoc.Prof') echo 'selected'; ?>>Assoc.Prof</option>
                            <option value="Senior Lecturer" <?php if ($row['position'] == 'Senior Lecturer') echo 'selected'; ?>>Senior Lecturer</option>
                            <option value="Lecturer" <?php if ($row['position'] == 'Lecturer') echo 'selected'; ?>>Lecturer</option>
                            <option value="Research Fellow" <?php if ($row['position'] == 'Research Fellow') echo 'selected'; ?>>Research Fellow</option>
                        </select>
                    </div>

                    <!-- First Appointment -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">FIRST APPOINTMENT:</label>
                        <input type="date" class="form-control" name="first_appointment" value="<?php echo $row['first_appointment']?>">
                    </div>

                    <!-- Current Appointment -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">CURRENT APPOINTMENT:</label>
                        <input type="date" class="form-control" name="current_appointment" value="<?php echo $row['current_appointment']?>">
                    </div>

                    <!-- Service End Date -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">SERVICE END DATE:</label>
                        <input type="date" class="form-control" name="serve_date" value="<?php echo $row['serve_date']?>">
                    </div>

                    <!-- Date of Birth -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">DATE OF BIRTH:</label>
                        <input type="date" class="form-control" name="dob" value="<?php echo $row['dob']?>">
                    </div>

                                    <!--Age-->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">AGE:</label>
                        <input type="text" class="form-control" id="ageInput" name="age" placeholder="AGE" value="<?php echo $row['age']?>" required>
                    </div>
                    
                    <!-- Cohort -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">COHORT:</label>
                        <input type="text" class="form-control" id="cohortInput" name="cohort" value="<?php echo $row['cohort']?>" readonly required>
                    </div>
                    <!-- Academic Qualification -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">ACADEMIC QUALIFICATION:</label>
                        <input type="text" class="form-control" name="aca_qua" value="<?php echo $row['aca_qua']?>">
                    </div>

                    <!-- Name of Professional Qualification/Awarding Body -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">NAME OF PROFESSIONAL QUALIFICATION/AWARDING BODY:</label>
                        <input type="text" class="form-control" name="name_prof" value="<?php echo $row['name_prof']?>">
                    </div>

                    <!-- Professional Qualification -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">PROFESSIONAL QUALIFICATION:</label>
                        <select class="form-control" name="prof_qual" required>
                            <option value="" disabled selected>Choose</option>
                            <option value="IR" <?php if ($row['prof_qual'] == 'IR') echo 'selected'; ?>>IR</option>
                            <option value="AR" <?php if ($row['prof_qual'] == 'AR') echo 'selected'; ?>>AR</option>
                            <option value="FRCP" <?php if ($row['prof_qual'] == 'FRCP') echo 'selected'; ?>>FRCP</option>
                            <option value="SR" <?php if ($row['prof_qual'] == 'SR') echo 'selected'; ?>>SR</option>
                            <option value="ACCA" <?php if ($row['prof_qual'] == 'ACCA') echo 'selected'; ?>>ACCA</option>
                            <option value="MMED" <?php if ($row['prof_qual'] == 'MMED') echo 'selected'; ?>>MMED</option>
                            <option value="ETC" <?php if ($row['prof_qual'] == 'ETC') echo 'selected'; ?>>ETC</option>
                        </select>
                    </div>

                    <!-- Registration Number for Professional Membership -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">REGISTRATION NUMBER FOR PROFESSIONAL MEMBERSHIP:</label>
                        <input type="text" class="form-control" name="regis_prof" value="<?php echo $row['regis_prof']?>">
                    </div>

                    <!-- Faculty -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">FACULTY:</label>
                        <select class="form-control" name="faculty">
                            <option value="" disabled selected>Faculty</option>
                            <option value="Al-Quran & Hadis" <?php if ($row['faculty'] == 'Al-Quran & Hadis') echo 'selected'; ?>>Al-Quran & Hadis</option>
                            <option value="Dakwah & Pembangunan Insan" <?php if ($row['faculty'] == 'Dakwah & Pembangunan Insan') echo 'selected'; ?>>Dakwah & Pembangunan Insan</option>
                            <option value="Pengurusan Al-Syariah" <?php if ($row['faculty'] == 'Pengurusan Al-Syariah') echo 'selected'; ?>>Pengurusan Al-Syariah</option>
                            <option value="Pengajian Bahasa Arab" <?php if ($row['faculty'] == 'Pengajian Bahasa Arab') echo 'selected'; ?>>Pengajian Bahasa Arab</option>
                            <option value="Pengajian Muamalat" <?php if ($row['faculty'] == 'Pengajian Muamalat') echo 'selected'; ?>>Pengajian Muamalat</option>
                            <option value="Pengajian Pendidikan Islam" <?php if ($row['faculty'] == 'Pengajian Pendidikan Islam') echo 'selected'; ?>>Pengajian Pendidikan Islam</option>
                            <option value="Pusat Pengajian Teras" <?php if ($row['faculty'] == 'Pusat Pengajian Teras') echo 'selected'; ?>>Pusat Pengajian Teras</option>
                            <option value="Pengurusan Usuluddin" <?php if ($row['faculty'] == 'Pengurusan Usuluddin') echo 'selected'; ?>>Pengurusan Usuluddin</option>
                            <option value="Teknologi Maklumat & Multimedia" <?php if ($row['faculty'] == 'Teknologi Maklumat & Multimedia') echo 'selected'; ?>>Teknologi Maklumat & Multimedia</option>
                        </select>
                    </div>

                    <!-- S&T/ NO S&T -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">S&T/ NO S&T:</label>
                        <select class="form-control" name="st" required>
                            <option value="" disabled selected>Choose</option>
                            <option value="S&T" <?php if ($row['st'] == 'S&T') echo 'selected'; ?>>S&T</option>
                            <option value="NON S&T" <?php if ($row['st'] == 'NON S&T') echo 'selected'; ?>>NON S&T</option>
                        </select>
                    </div>

                    <!-- Status -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">STATUS:</label>
                        <select class="form-control" name="status" required>
                            <option value="" disabled selected>Choose Status</option>
                            <option value="Active" <?php if ($row['status'] == 'Active') echo 'selected'; ?>>Active</option>
                            <option value="Study" <?php if ($row['status'] == 'Study') echo 'selected'; ?>>Study</option>
                            <option value="Leaves" <?php if ($row['status'] == 'Leaves') echo 'selected'; ?>>Leaves</option>
                            <option value="Sabbatical" <?php if ($row['status'] == 'Sabbatical') echo 'selected'; ?>>Sabbatical</option>
                            <option value="Training" <?php if ($row['status'] == 'Training') echo 'selected'; ?>>Training</option>
                            <option value="Attachment" <?php if ($row['status'] == 'Attachment') echo 'selected'; ?>>Attachment</option>
                            <option value="Seconded" <?php if ($row['status'] == 'Seconded') echo 'selected'; ?>>Seconded</option>
                        </select>
                    </div>

                    <!-- Status Contract -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">STATUS CONTRACT:</label>
                        <select class="form-control" name="status_contract" required>
                            <option value="" disabled selected>Choose Status contract</option>
                            <option value="Permanent" <?php if ($row['status_contract'] == 'Permanent') echo 'selected'; ?>>Permanent</option>
                            <option value="Contract" <?php if ($row['status_contract'] == 'Contract') echo 'selected'; ?>>Contract</option>
                        </select>
                    </div>

                    <!-- Status Time -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">STATUS TIME:</label>
                        <select class="form-control" name="status_time" required>
                            <option value="" disabled selected>Choose Status time</option>
                            <option value="Full-Time" <?php if ($row['status_time'] == 'Full-Time') echo 'selected'; ?>>Full-Time</option>
                            <option value="Part-Time" <?php if ($row['status_time'] == 'Part-Time') echo 'selected'; ?>>Part-Time</option>
                        </select>
                    </div>

                    <!-- Citizenship -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">CITIZENSHIP:</label>
                        <select class="form-control" name="citizen" required>
                            <option value="" disabled selected>Choose Citizenship</option>
                            <option value="Local" <?php if ($row['citizen'] == 'Local') echo 'selected'; ?>>Local</option>
                            <option value="Foreign" <?php if ($row['citizen'] == 'Foreign') echo 'selected'; ?>>Foreign</option>
                        </select>
                    </div>

                    <!-- Country -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">COUNTRY:</label>
                        <input type="text" class="form-control" name="country" value="<?php echo $row['country']?>">
                    </div>

                    <!-- Link Evidence -->
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
                <br>

                <div class="text-center">
                    <button type="submit" name="updatedetails" class="btn btn-primary">Save Changes</button>
                 </div>

          </form>
                   
                    </div>
                    
                    </div>
                    
                   </div>
                   
                        </div>
               
                </div>


            </div>
            <!-- End Bordered Tabs -->
        
        </div>
    </div>

</div>
</div>
</section>

</main>









<!-- Main footer -->
<footer class="main-footer">
<strong>Copyright &copy; 2024 <a href="https://www.kias.edu.my/">KiasExperts</a>.</strong>
All rights reserved.
<div class="float-right d-none d-sm-inline-block">
  <b>Version</b>1.0
</div>
</footer>

</body>
</html>
