<?php
session_start();

if(!isset($_SESSION['user_id']))

{
    header('Location: ../examples/login.php'); 
    exit;
}

include "../examples/config.php";

if (isset($_GET['delid'])) {
    $ip_id= $_GET['delid'];
    $stmt = $conn->prepare("DELETE FROM iprs WHERE ip_id= ?");
    $stmt->bind_param("s", $ip_id);

    if ($stmt->execute()) {
        echo "<script>alert('Record successfully deleted');</script>";
        echo "<script>document.location='IPRs.php';</script>";
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
    <title>OTHER IPRs</title>
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
<h3><center><font color="" face="Cambria Math">Other IPRs (Other Than Patents, Commercialized Products,<br> Technology Know-how & Books Declared Section C)<font><br></center></h3>
<br><br>
<div class="container pt-50">
    
      <div class="text-right mb-3">
        <a href="../sectionE/addIPRs.php" class="btn btn-success">+Add New IPRs</a>
      </div>
    <div class="table-responsive">
        <table id="example" class="table table-striped" style="width:200%">
            <thead>
            <tr>
            <th tyle="text-align: center">No.</th>
            <th tyle="text-align: center">Staff ID</th>
            <th tyle="text-align: center">Staff Name</th>
            <th tyle="text-align: center">ISBN or IPR</th>
            <th tyle="text-align: center">Name of IP</th>
            <th tyle="text-align: center">Type</th>
            <th tyle="text-align: center">Link Document</th>
            <th tyle="text-align: center">Remarks</th>
            <th tyle="text-align: center">Action</th>
        </tr>
    </thead>
    <tbody id="myTable">

       <?php
           require_once "../examples/config.php";
           $query = "SELECT * FROM iprs";
           $count =1;
           $result = mysqli_query($conn, $query);

         if ($result) 
         {
              while ($row = mysqli_fetch_assoc($result)) 
              {
      ?>
        <tr>
                <td style="text-align: center"><?php echo $count;?></td>
                <td style="text-align: center"><?php echo $row['staff_id']; ?></td>
                <td style="text-align: center"><?php echo $row['staff_name']; ?></td>
                <td style="text-align: center"><?php echo $row['ip_id']; ?></td>
                <td ><?php echo $row['ip_name']; ?></td>
                <td style="text-align: center"><?php echo $row['type']; ?></td>
                <td style="text-align: center"><a href="<?php echo $row['link']; ?>" target="_blank"><?php echo $row['link']; ?></a>
                <td style="text-align: center"><?php echo $row['remarks']; ?></td>
                <td style="text-align: center;"><a href="../sectionE/editIPRs.php?ID=<?php echo $row['ip_id']; ?>" class="btn btn-primary btn-sm"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
                                                <a href="IPRs.php?delid=<?php echo htmlentities($row['ip_id']); ?>" onClick="return confirm('Do you really want to remove this Record?');" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash fs-5 me-3"></i></a>
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
            <th tyle="text-align: center">No.</th>
            <th tyle="text-align: center">Staff ID</th>
            <th tyle="text-align: center">Staff Name</th>
            <th tyle="text-align: center">ISBN or IPR</th>
            <th tyle="text-align: center">Name of IP</th>
            <th tyle="text-align: center">Type</th>
            <th tyle="text-align: center">Link Document</th>
            <th tyle="text-align: center">Remarks</th>
            <th tyle="text-align: center">Action</th>
        </tr>
            </tfoot>
        </table>
    </div>
</div> 
<!--Main Content-->
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