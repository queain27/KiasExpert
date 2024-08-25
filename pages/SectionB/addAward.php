<?php
include "../examples/config.php";

if(isset($_POST['submit'])) {
  $staff_id = $_POST['staff_id'];
  $staff_name = $_POST['staff_name'];
  $faculty= $_POST['faculty'];
  $name_awd = $_POST['name_awd'];
  $type = $_POST['type'];
  $level = $_POST['level'];
  $conferring = $_POST['conferring'];
  $title_invention = $_POST['title_invention'];
  $event = $_POST['event'];
  $date = $_POST['date'];
  $link_award = $_POST['link_award'];

  // Check if staff_id is active
  $check_staff_sql = mysqli_query($conn, "SELECT * FROM `staff` WHERE `staff_id` = '$staff_id' AND `status` = 'active'");
  
  if(mysqli_num_rows($check_staff_sql) > 0) {
    // Staff is active, check for duplicates
    $check_duplicate_sql = mysqli_query($conn, "SELECT * FROM `awarding` WHERE `staff_id` = '$staff_id'");
    
      if(mysqli_num_rows($check_duplicate_sql) == 0) {
    
 // No duplicates, proceed with the insertion
 $sql = mysqli_query($conn, "INSERT INTO `awarding` (`staff_id`, `staff_name`, `faculty`, `name_awd`, `type`, `level`, `conferring`, `title_invention`, `event`, `date`, `link_award`) VALUES ('$staff_id', '$staff_name', '$faculty', '$name_awd', '$type', '$level', '$conferring', '$title_invention', '$event', '$date', '$link_award')");
        if($sql) {
        echo "<script>alert('New record successfully added');</script>";
        echo "<script>document.location='Award.php';</script>";
        } else {
        echo "<script>alert('Failed to add new record');</script>";
        }
       } else {
      // Duplicate entry found
      echo "<script>alert('Duplicate entry found for the given Staff ID and Project ID');</script>";
     }
  } else {
    // Staff is not active
    echo "<script>alert('Staff ID is not active or does not exist');</script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Add New Award</title>
  <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
  <script src="../../bootstrap/js/jquery.min.js"></script>
  <script src="../../bootstrap/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../../css/navbar.css">
  <link rel="shortcut icon" href="../../images/Logo2.png" type="image/x-icon">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  
  <script>
$(document).ready(function() {
    $('input[name="staff_id"]').on('change', function() {
        var staff_id = $(this).val();
        if (staff_id) {
            $.ajax({
                type: 'POST',
                url: '../SectionB/fetchstaffname.php',
                data: { staff_id: staff_id },
                success: function(response) {
                    try {
                        var data = JSON.parse(response);
                        if (data.status === "Active") {
                            $('input[name="staff_name"]').val(data.staff_name);
                            $('input[name="faculty"]').val(data.faculty);
                            $('#staff-id-error').hide();
                            $('button[name="submit"]').prop('disabled', false);
                        } else {
                            $('#staff-id-error').text("Staff ID is not active or does not exist").show();
                            $('input[name="staff_name"]').val('');
                            $('input[name="faculty"]').val('');
                            $('button[name="submit"]').prop('disabled', true);
                        }
                    } catch (e) {
                        console.error("Parsing error:", e);
                        $('#staff-id-error').text("An error occurred while fetching staff information").show();
                    }
                },
                error: function(xhr, status, error) {
                    console.error("AJAX Error:", status, error);
                }
            });
        } else {
            $('input[name="staff_name"]').val('');
            $('input[name="faculty"]').val('');
            $('#staff-id-error').hide();
            $('button[name="submit"]').prop('disabled', false);
        }
    });

    // Optionally, you can also disable the submit button initially if staff_id is empty
    if (!$('input[name="staff_id"]').val()) {
        $('button[name="submit"]').prop('disabled', true);
    }
});
</script>






</head>
<body>
<div class="container-fluid">
  <div class="container">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h1 class="border-bottom text-center pb-3 mb-4">Add New Award</h1>
        </div>
      </div>
      <form action="" method="post">
        <div class="row">
       
          <!--Staff ID-->
          <div class="col-md-6 mb-3">
            <label class="form-label">STAFF ID:</label>
            <input type="text" class="form-control" name="staff_id" placeholder="Staff ID" required>
            <div id="staff-id-error" class="text-danger mt-1" style="display:none;"></div>
          </div>
          <!--Staff Name-->
          <div class="col-md-6 mb-3">
            <label class="form-label">STAFF NAME:</label>
            <input type="text" class="form-control" name="staff_name" placeholder="Staff Name" readonly required>
          </div>
          <!--Research Title-->
          <div class="col-md-6 mb-3">
            <label class="form-label">FACULTY:</label>
            <input type="text" class="form-control" name="faculty" placeholder="Faculty"  readonly required>
          </div>
          <!--Start Date-->
          <div class="col-md-6 mb-3">
            <label class="form-label">NAME OF AWARD:</label>
            <input type="text" class="form-control" name="name_awd" required>
          </div>
   
         <!--Start Date-->
         <div class="col-md-6 mb-3">
            <label class="form-label">TYPE:</label>
            <input type="text" class="form-control" name="type" placeholder="Type" required>
          </div>
   
          <!--Sponsor Category-->
          <div class="col-md-6 mb-3">
            <label class="form-label">LEVEL:</label>
            <select class="form-control" name="level" required>
              <option value="" disabled selected>Choose</option>
              <option value="University">University</option>
              <option value="National">National</option>
              <option value="International">International</option>
            </select>
          </div>
          <!--Grant Name-->
          <div class="col-md-6 mb-3">
            <label class="form-label">CONFERRING BODY:</label>
            <input type="text" class="form-control" name="conferring" placeholder="Conferring Body" required>
          </div>
          <!--Title Of Invention-->
          <div class="col-md-6 mb-3">
            <label class="form-label">TITLE OF INVENTION:</label>
            <input type="text" class="form-control" name="title_invention" placeholder="Title of Invention" >
          </div>
          <!--Amount Pledged (Approved) For New Project In The Year-->
          <div class="col-md-6 mb-3">
            <label class="form-label">EVENT:</label>
            <input type="text" class="form-control" name="event" placeholder="Event" >
          </div>
          <!--Amount Received-->
          <div class="col-md-6 mb-3">
            <label class="form-label">DATE:</label>
            <input type="date" class="form-control" name="date" placeholder="Date" required>
          </div>
          <!--Remarks-->
          <div class="col-md-6 mb-3">
            <label class="form-label">LINK:</label>
            <input type="text" class="form-control" name="link_award" placeholder="Link Award" required>
          </div>
          <!--Button-->
          <div class="col-md-12 mb-3 text-center">
            <button type="submit" class="btn btn-primary" name="submit">ADD</button>
            <a href="Award.php" class="btn btn-success">View Award</a>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
</body>
</html>
