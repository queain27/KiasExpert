<?php
session_start();

if(!isset($_SESSION['user_id']))

{
    header('Location: ../examples/login.php'); 
    exit;
}

include "../examples/config.php";

if (isset($_GET['delid'])) {
    $matric_no = $_GET['delid'];
    $stmt = $conn->prepare("DELETE FROM pg_student WHERE matric_no = ?");
    $stmt->bind_param("s", $matric_no);

    if ($stmt->execute()) {
        echo "<script>alert('Record successfully deleted');</script>";
        echo "<script>document.location='PostgraduateStud.php';</script>";
    } else {
        echo "<script>alert('Something went wrong');</script>";
    }

    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Postgraduate Student</title>  <!--Link CSS-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">  
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../../plugins/summernote/summernote-bs4.min.css">
  <!--Data Table-->
  <link rel="stylesheet" href="https://cdn.datatables.net/2.0.3/css/dataTables.bootstrap5.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
  <!--link Javascript Data Table-->
  <script defer src="https://code.jquery.com/jquery-3.7.1.js"></script>
  <script defer src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
  <script defer src="https://cdn.datatables.net/2.0.3/js/dataTables.js"></script>
  <script defer src="https://cdn.datatables.net/2.0.3/js/dataTables.bootstrap5.js"></script>
  <script defer src="script.js"></script>
  <!--Icon Image--> 
  <link rel="shortcut icon" href="../../images/Logo2.png" type="image/x-icon">
  <script defer src="script.js"></script>
  <script>
        $(document).ready(function(){
            $('#example').DataTable();
        });
       </script>
</head>
 <!-- Paste the content of sidebar.php here -->
 <body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
  <div class="preloader flex-column justify-content-center align-items-center">
  </div> 
  <?php
     
     include '../../header.php';
     include '../../SideBarAdmin.php';
     ?>
<body>
<!--Main Content-->
<h3><center><font color="" face="Cambria Math">Postgraduated Student<font><br></center></h3>
<br><br>
<div class="container pt-50">
<div class="text-right mb-3">
        <a href="../sectionA/addPStudent.php" class="btn btn-success">+Add New Student</a>
      </div>
    <div class="table-responsive">
        <table id="example" class="table table-striped" style="width:200%">
            <thead>
            <tr>
            <th style="text-align: center">No.</th>
            <th style="text-align: center">Matric No.</th>
            <th style="text-align: center">Student Name</th>
            <th style="text-align: center">Cgpa At Bachelor Level(Actual)</th>
            <th style="text-align: center">Cgpa At Bachelor Level (Equivalent =4.00)</th>
            <th style="text-align: center">Cgpa >=3.00 (Yes/No)</th>
            <th style="text-align: center">University Bachelor Level</th>
            <th style="text-align: center">University Master Level</th>
            <th style="text-align: center">Master Cgpa >=3.00 (Yes/No)</th>
            <th style="text-align: center">Phd Cgpa >=3.00 (Yes/No)</th>
            <th style="text-align: center">Degree Registered (Phd/Master/Doctoral)</th>
            <th style="text-align: center">Status Time</th>
            <th style="text-align: center">Study Mode (Research/Mix Mode/ Course Work)</th>
            <th style="text-align: center">Mixed Mode Ratio (Research:Coursework)</th>
            <th style="text-align: center">S&T/Non S&T</th>
            <th style="text-align: center">Faculty</th>
            <th style="text-align: center">Area Of Study</th>
            <th style="text-align: center">Sponsorship</th>
            <th style="text-align: center">Intake Year</th>
            <th style="text-align: center">Academic Year</th>
            <th style="text-align: center">No Of Semester</th>
            <th style="text-align: center">Citizenship</th>
            <th style="text-align: center">Country</th>
            <th style="text-align: center">Entry Date</th>
            <th style="text-align: center">Senate Approval</th>
            <th style="text-align: center">Duration Of Study (No Of Semester/Month)</th>
            <th style="text-align: center">GOT (Yes/No)</th>
            <th style="text-align: center">Status Active</th>
            <th style="text-align: center">Link Evidence</th>
            <th style="text-align: center">Remarks</th>
            <th style="text-align: center">Action</th>
        </tr>
    </thead>
    <tbody id="myTable">
    <?php
        require_once "../examples/config.php";
        $query = "SELECT * FROM pg_student";
         $count =1;
         $result = mysqli_query($conn, $query);

    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
    ?>
            <tr>
                <td style="text-align: center"><?php echo $count;?></td>
                <td style="text-align: center"><?php echo $row['matric_no']; ?></td>
                <td style="text-align: center"><?php echo $row['student_name']; ?></td>
                <td style="text-align: center"><?php echo $row['cgpa_deg_actual']; ?></td>
                <td style="text-align: center"><?php echo $row['cgpa_degree']; ?></td>
                <td style="text-align: center"><?php echo $row['cgpa']; ?></td>
                <td style="text-align: center"><?php echo $row['university_degree']; ?></td>
                <td style="text-align: center"><?php echo $row['university_master']; ?></td>
                <td style="text-align: center"><?php echo $row['cgpa_master']; ?></td>
                <td style="text-align: center"><?php echo $row['cgpa_phd']; ?></td>
                <td style="text-align: center"><?php echo $row['degree_registered']; ?></td>
                <td style="text-align: center"><?php echo $row['student_time']; ?></td>
                <td style="text-align: center"><?php echo $row['study_mode']; ?></td>
                <td style="text-align: center"><?php echo $row['mixedmode_ratio']; ?></td>
                <td style="text-align: center"><?php echo $row['st']; ?></td>
                <td style="text-align: center"><?php echo $row['faculty']; ?></td>
                <td style="text-align: center"><?php echo $row['area']; ?></td>
                <td style="text-align: center"><?php echo $row['sponsor']; ?></td>
                <td style="text-align: center"><?php echo $row['intake_year']; ?></td>
                <td style="text-align: center"><?php echo $row['aca_year']; ?></td>
                <td style="text-align: center"><?php echo $row['numsem']; ?></td>
                <td style="text-align: center"><?php echo $row['citizen']; ?></td>
                <td style="text-align: center"><?php echo $row['country']; ?></td>
                <td style="text-align: center"><?php echo $row['entry_date']; ?></td>
                <td style="text-align: center"><?php echo $row['senate']; ?></td>
                <td style="text-align: center"><?php echo $row['duration']; ?></td>
                <td style="text-align: center"><?php echo $row['got']; ?></td>
                <td style="text-align: center"><?php echo $row['status_active']; ?></td>
                <td style="text-align: center"><a href="<?php echo $row['link']; ?>" target="_blank"><?php echo $row['link']; ?></a>
                <td style="text-align: center"><?php echo $row['remarks']; ?></td>
                <td style="text-align: center;">
                    <a href="editPStudent.php?ID=<?php echo $row['matric_no']; ?>" class="btn btn-primary btn-sm"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
                    <a href="PostgraduateStud.php?delid=<?php echo htmlentities($row['matric_no']); ?>" onClick="return confirm('Do you really want to remove this Record?');" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash fs-5 me-3"></i></a>

                  </td>
            </tr>
        <?php
          
          $count = $count+1;
              }
            } 
            else 
            
            {
              echo "Error: " . mysqli_error($conn);
             }
          ?>
</tbody>
    <tfoot>
    <tr>
            <th style="text-align: center">No.</th>
            <th style="text-align: center">Matric No.</th>
            <th style="text-align: center">Student Name</th>
            <th style="text-align: center">Cgpa At Bachelor Level(Actual)</th>
            <th style="text-align: center">Cgpa At Bachelor Level (Equivalent =4.00)</th>
            <th style="text-align: center">Cgpa >=3.00 (Yes/No)</th>
            <th style="text-align: center">University Bachelor Level</th>
            <th style="text-align: center">University Master Level</th>
            <th style="text-align: center">Master Cgpa >=3.00 (Yes/No)</th>
            <th style="text-align: center">Phd Cgpa >=3.00 (Yes/No)</th>
            <th style="text-align: center">Degree Registered (Phd/Master/Doctoral)</th>
            <th style="text-align: center">Status Time</th>
            <th style="text-align: center">Study Mode (Research/Mix Mode/ Course Work)</th>
            <th style="text-align: center">Mixed Mode Ratio (Research:Coursework)</th>
            <th style="text-align: center">S&T/Non S&T</th>
            <th style="text-align: center">Faculty</th>
            <th style="text-align: center">Area Of Study</th>
            <th style="text-align: center">Sponsorship</th>
            <th style="text-align: center">Intake Year</th>
            <th style="text-align: center">Academic Year</th>
            <th style="text-align: center">No Of Semester</th>
            <th style="text-align: center">Citizenship</th>
            <th style="text-align: center">Country</th>
            <th style="text-align: center">Entry Date</th>
            <th style="text-align: center">Senate Approval</th>
            <th style="text-align: center">Duration Of Study (No Of Semester/Month)</th>
            <th style="text-align: center">GOT (Yes/No)</th>
            <th style="text-align: center">Status Active</th>
            <th style="text-align: center">Link Evidence</th>
            <th style="text-align: center">Remarks</th>
            <th style="text-align: center">Action</th>
        </tr>
            </tfoot>
        </table>
    </div>
</div> 
<!--Main Content-->
<!-- Add this script to initialize the DataTable and adjust its properties -->
<script>
    $(document).ready(function() {
        $('#example').DataTable({
            "scrollX": true, // Enable horizontal scrolling
            "scrollY": 200, // Set a fixed height for vertical scrolling
            "paging": false, // Disable pagination
            "searching": true, // Enable searching
            "ordering": true, // Enable sorting
            "info": false, // Disable showing information
            "search": {
                "search": "", // Search box content
                "placeholder": "Search", // Placeholder text for search box
                "className": "form-control mr-sm-2", // Bootstrap class for search box
                "container": "#example_wrapper .col-md-6:eq(0)", // Container to which the search box should be appended
                "position": "append" // Position of search box in the container
            }
        });
    });
</script>

<!--TableEnd --> 
<script src="../../plugins/jquery/jquery.min.js"></script>
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../../dist/js/adminlte.min.js"></script>
<script src="../../plugins/summernote/summernote-bs4.min.js"></script>
<script src="../../dist/js/demo.js"></script>
<script>
  $(function () 
  {
    $('#compose-textarea').summernote()
  })
</script>
</body>
</html>