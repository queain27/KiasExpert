<?php
session_start();

if(!isset($_SESSION['user_id']))

{
    header('Location: ../Auth/login.php'); 
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>OTHER IPRs</title>
 <!-- Google Font: Source Sans Pro -->
 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
 <!-- Font Awesome -->
 <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
<!-- Icon Font-->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../../dist/css/adminlte.min.css">
  <link rel="shortcut icon" href="../../../images/Logo2.png" type="image/x-icon">
  <link rel="stylesheet" href="css/style.css">
<!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

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
  <link rel="shortcut icon" href="../../../images/Logo2.png" type="image/x-icon">
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
     include '../header.php';
     include '../SideBarLect.php';
    ?>
<body>
<!--Main Content-->
<!--TableStart-->  
<h3><center><font color="" face="Cambria Math">Other IPRs (Other Than Patents, Commercialized Products,<br> Technology Know-how & Books Declared Section C)<font><br></center></h3>
<br><br>
<div class="container pt-50">
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
           require_once "../Auth/config.php";
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
                <td style="text-align: center;"><a href="editIPRs.php?ID=<?php echo $row['ip_id']; ?>" class="btn btn-primary btn-sm"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
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
<!-- jQuery -->
<script src="../../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../../dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    //Add text editor
    $('#compose-textarea').summernote()
  })
</script>
</body>
</html>