<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PhDs</title>  
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
<!--TableStart-->  
<h3><center><font color="" face="Cambria Math">Total Staff Phd or Professional<font><br></center></h3>
<br><br>
<div class="container pt-50">
    <div class="table-responsive">
        <table id="example" class="table table-striped" style="width:250%">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Staff ID</th>
                    <th>Staff Name</th>
                    <th>Position</th>
                    <th>Grade</th>
                    <th>First Appointment</th>
                    <th>Current Appointment</th>
                    <th>Service End Date</th>
                    <th>Date Of Birth</th>
                    <th>Age</th>
                    <th>Cohort</th>
                    <th>Academic Qualification</th>
                    <th>Professional Qualification</th>
                    <th>Registrational Number </th>
                    <th>Faculty</th>
                    <th>Field (S&T/Non S&T)</th>
                    <th>Status Active</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                    <?php
                    require_once "../examples/config.php"; // Ensure this path is correct

                    if (isset($_GET['delid'])) {
                    $id = mysqli_real_escape_string($conn, $_GET['delid']);
                    $query = "DELETE FROM staff WHERE staff_id = '$id'";
                    $result = mysqli_query($conn, $query);

                    if ($result) {
                    echo "<script>alert('Record deleted successfully');</script>";
                    echo "<script>window.location.href='PhDsPQ.php';</script>"; // Redirect to avoid resubmission
                    } else {
                    echo "<script>alert('Error deleting record');</script>";
                    }
                } 
                ?>
               <?php
                require_once "../examples/config.php";
                $query = "SELECT * FROM staff WHERE aca_qua IN ('phd', 'master')";
                $count =1;
               $result = mysqli_query($conn, $query);

                if ($result) {
               while ($row = mysqli_fetch_assoc($result)) {
              ?>
            <tr>
                <td style="text-align: center"><?php echo $count;?></td>
                <td style="text-align: center"><?php echo $row['staff_id']; ?></td>
                <td style="text-align: center"><?php echo $row['staff_name']; ?></td>
                <td style="text-align: center"><?php echo $row['position']; ?></td>
                <td style="text-align: center"><?php echo $row['grade']; ?></td>
                <td style="text-align: center"><?php echo $row['first_appointment']; ?></td>
                <td style="text-align: center"><?php echo $row['current_appointment']; ?></td>
                <td style="text-align: center"><?php echo $row['serve_date']; ?></td>
                <td style="text-align: center"><?php echo $row['dob']; ?></td>
                <td style="text-align: center"><?php echo $row['age']; ?></td>
                <td style="text-align: center"><?php echo $row['cohort']; ?></td>
                <td style="text-align: center"><?php echo $row['aca_qua']; ?></td>
                <td style="text-align: center"><?php echo $row['prof_qual']; ?></td>
                <td style="text-align: center"><?php echo $row['regis_prof']; ?></td>
                <td style="text-align: center"><?php echo $row['faculty']; ?></td>
                <td style="text-align: center"><?php echo $row['st']; ?></td>
                <td style="text-align: center"><?php echo $row['status']; ?></td>
                <td style="text-align: center;">
                    <a href="editstaffphd.php?ID=<?php echo $row['staff_id']; ?>" class="btn btn-primary btn-sm">
                        <i class="fa-solid fa-pen-to-square fs-5 me-3"></i>
                    </a>
                    <a href="PhDsPQ.php?delid=<?php echo htmlentities($row['staff_id']); ?>" 
                       onClick="return confirm('Do you really want to remove this Record?');" 
                       class="btn btn-danger btn-sm">
                        <i class="fa-solid fa-trash fs-5 me-3"></i>
                    </a>
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
                    <th>No.</th>
                    <th>Staff ID</th>
                    <th>Staff Name</th>
                    <th>Position</th>
                    <th>Grade</th>
                    <th>First Appointment</th>
                    <th>Current Appointment</th>
                    <th>Service End Date</th>
                    <th>Date Of Birth</th>
                    <th>Age</th>
                    <th>Cohort</th>
                    <th>Academic Qualification</th>
                    <th>Professional Qualification</th>
                    <th>Registrational Number </th>
                    <th>Faculty</th>
                    <th>Field (S&T/Non S&T)</th>
                    <th>Status Active</th>
                    <th>Action</th>
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