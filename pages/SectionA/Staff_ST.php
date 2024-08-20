<?php
require_once "../examples/config.php";

if(isset($_GET['delid']))
{
  $staff_id =intval($_GET['delid']);
  $sql =mysqli_query($conn,"DELETE FROM staff WHERE staff_id='$staff_id'");
  echo"<script>alert('Record has been succesfully Deleted!!');</script>";
  echo"<script>window.location='Staff.php?';</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head> 
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Staff S&T</title>
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
<h3><center><font color="" face="Cambria Math">Staff S&T<font><br></center></h3>
<!--TableStart-->  
  <div class="container pt-50">
   <div class="row">
    <div class="table-responsive">
        <table id="example" class="table table-striped" style="width:200%">
            <thead>
                <tr>
                <th style="text-align: center">No.</th>
                    <th style="text-align: center">Staff ID</th>
                    <th style="text-align: center">Staff Name</th>
                    <th style="text-align: center">Grade</th>
                    <th style="text-align: center">Position</th>
                    <th style="text-align: center">First Appointment Date</th>
                    <th style="text-align: center">Appointment Date <br>Current Position</th>
                    <th style="text-align: center">Service End Date</th>
                    <th style="text-align: center">Date of Birth</th>
                    <th style="text-align: center">Age</th>
                    <th style="text-align: center">Cohort</th>
                    <th style="text-align: center">Academic Qualification</th>
                    <th style="text-align: center">Name Of Professional qualification/Awarding Body</th>
                    <th style="text-align: center">Professional Qualification <br> (IR,AR,FRCP,SR,ACCA,MMED)</th>
                    <th style="text-align: center">Registration Number For Professional Membership</th>
                    <th style="text-align: center">Department/Faculty </th>
                    <th style="text-align: center">S&T/Non S&T</th>
                    <th style="text-align: center">Status Active</th>
                    <th style="text-align: center">Status Contract</th>
                    <th style="text-align: center">Status Time</th>
                    <th style="text-align: center">Citizenship</th>
                    <th style="text-align: center">Country</th>
                    <th style="text-align: center">Link To Evidence</th>
                    <th style="text-align: center">Remarks</th>
                    <th style="text-align: center">Action</th>
                </tr>
            </thead>

            <tbody id="myTable">
    <?php
    require_once "../examples/config.php";
    $query = "SELECT * FROM staff where st ='S&T'";
    $count =1;
    $result = mysqli_query($conn, $query);

    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
    ?>
            <tr>
                <td style="text-align: center"><?php echo $count;?></td>
                <td style="text-align: center"><?php echo $row['staff_id']; ?></td>
                <td style="text-align: center"><?php echo $row['staff_name']; ?></td>
                <td style="text-align: center"><?php echo $row['grade']; ?></td>
                <td style="text-align: center"><?php echo $row['position']; ?></td>
                <td style="text-align: center"><?php echo $row['first_appointment']; ?></td>
                <td style="text-align: center"><?php echo $row['current_appointment']; ?></td>
                <td style="text-align: center"><?php echo $row['serve_date']; ?></td>
                <td style="text-align: center"><?php echo $row['dob']; ?></td>
                <td style="text-align: center"><?php echo $row['age']; ?></td>
                <td style="text-align: center"><?php echo $row['cohort']; ?></td>
                <td style="text-align: center"><?php echo $row['aca_qua']; ?></td>
                <td style="text-align: center"><?php echo $row['name_prof']; ?></td>
                <td style="text-align: center"><?php echo $row['prof_qual']; ?></td>
                <td style="text-align: center"><?php echo $row['regis_prof']; ?></td>
                <td style="text-align: center"><?php echo $row['faculty']; ?></td>
                <td style="text-align: center"><?php echo $row['st']; ?></td>
                <td style="text-align: center"><?php echo $row['status']; ?></td>
                <td style="text-align: center"><?php echo $row['status_contract']; ?></td>
                <td style="text-align: center"><?php echo $row['status_time']; ?></td>
                <td style="text-align: center"><?php echo $row['citizen']; ?></td>
                <td style="text-align: center"><?php echo $row['country']; ?></td>
                <td style="text-align: center"><a href="<?php echo $row['link_evidence']; ?>" target="_blank"><?php echo $row['link_evidence']; ?>
    </a>
</td>
                <td style="text-align: center"><?php echo $row['remarks']; ?></td>
              
                <td style="text-align: center;">
                    <a href="editstaff.php?ID=<?php echo $row['staff_id']; ?>" class="btn btn-primary btn-sm">
                        <i class="fa-solid fa-pen-to-square fs-5 me-3"></i>
                    </a>
                    <a href="Staff.php?delid=<?php echo htmlentities($row['staff_id']); ?>" 
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
                    <th style="text-align: center">No.</th>
                    <th style="text-align: center">Staff ID</th>
                    <th style="text-align: center">Staff Name</th>
                    <th style="text-align: center">Grade</th>
                    <th style="text-align: center">Position</th>
                    <th style="text-align: center">First Appointment Date</th>
                    <th style="text-align: center">Appointment Date <br>Current Position</th>
                    <th style="text-align: center">Service End Date</th>
                    <th style="text-align: center">Date of Birth</th>
                    <th style="text-align: center">Age</th>
                    <th style="text-align: center">Cohort</th>
                    <th style="text-align: center">Academic Qualification</th>
                    <th style="text-align: center">Name Of Professional qualification/Awarding Body</th>
                    <th style="text-align: center">Professional Qualification <br> (IR,AR,FRCP,SR,ACCA,MMED)</th>
                    <th style="text-align: center">Registration Number For Professional Membership</th>
                    <th style="text-align: center">Department/Faculty </th>
                    <th style="text-align: center">S&T/Non S&T</th>
                    <th style="text-align: center">Status Active</th>
                    <th style="text-align: center">Status Contract</th>
                    <th style="text-align: center">Status Time</th>
                    <th style="text-align: center">Citizenship</th>
                    <th style="text-align: center">Country</th>
                    <th style="text-align: center">Link To Evidence</th>
                    <th style="text-align: center">Remarks</th>
                    <th style="text-align: center">Action</th>
                </tr>
            </tfoot>
        </table>
      </div>
    </div>
</div>
<!--Main Content-->
<footer class="main-footer">
    <center>Copyright &copy; 2024 <a href="https://www.kias.edu.my/">KiasExperts</a>.All rights reserved.</center>
    <div class="float-right d-none d-sm-inline-block"><b>Version</b> 1.0</div>
</footer>
<aside class="control-sidebar control-sidebar-dark">
</aside>
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