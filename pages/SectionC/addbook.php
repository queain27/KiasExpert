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
    $staff_id = $_POST['staff_id'];
    $staff_name = $_POST['staff_name'];
    $authors = $_POST['authors'];
    $industrial = $_POST['industrial'];
    $international = $_POST['international'];
    $national = $_POST['national'];
    $book_title = $_POST['book_title'];
    $book_editor = $_POST['book_editor'];
    $chapter_title = $_POST['chapter_title'];
    $publisher = $_POST['publisher'];
    $isbn = $_POST['isbn'];
    $book_status = $_POST['book_status'];
    $link_evidence = $_POST['link_evidence'];
    $remarks = $_POST['remarks'];



    // Check if staff_id is active
    $check_staff_sql = $conn->prepare("SELECT * FROM `staff` WHERE `staff_id` = ? AND `status` = 'active'");
    $check_staff_sql->bind_param('s', $staff_id);
    $check_staff_sql->execute();
    $check_staff_result = $check_staff_sql->get_result();

    if ($check_staff_result->num_rows > 0) {
        // Staff is active, check for duplicates
        $check_duplicate_sql = $conn->prepare("SELECT * FROM `book` WHERE `staff_id` = ?");
        $check_duplicate_sql->bind_param('s', $staff_id);
        $check_duplicate_sql->execute();
        $check_duplicate_result = $check_duplicate_sql->get_result();

        if ($check_duplicate_result->num_rows == 0) {
            // No duplicates, proceed with the insertion
            $sql = mysqli_query($conn, "INSERT INTO `book` (`staff_id`, `staff_name`, `authors`, `industrial`, `international`, `national`, `book_title`, `book_editor`,`chapter_title`, `publisher`,`isbn`,`book_status`,`link_evidence`,`remarks`) 
      VALUES ('$staff_id', '$staff_name', '$authors', '$industrial', '$international', '$national', '$book_title','$book_editor','$chapter_title','$publisher','$isbn','$book_status','$link_evidence', '$remarks')");
      
            if ($sql) {
                echo "<script>alert('New record successfully added');</script>";
                echo "<script>document.location='ResearchBookIndex.php';</script>";
            } else {
                echo "<script>alert('Failed to add new record');</script>";
            }
        } else {
            // Duplicate entry found
            echo "<script>alert('Duplicate entry found for the given StaffID');</script>";
        }
    } else {
        // Staff is not active
        echo "<script>alert('Staff ID is not active or does not exist');</script>";
    }

    // Close the prepared statements and the database connection
    $check_staff_sql->close();
    $check_duplicate_sql->close();
    $conn->close();
}
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Add New Book</title>
  <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
  <script src="../../bootstrap/js/jquery.min.js"></script>
  <script src="../../bootstrap/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../../css/navbar.css">
  <link rel="shortcut icon" href="../../images/Logo2.png" type="image/x-icon">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <style>
        .hidden {
            display: none;
        }
    </style>
  <script>
$(document).ready(function() {
    // AJAX call to fetch staff data when staff_id changes
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

    // Optionally, disable the submit button initially if staff_id is empty
    if (!$('input[name="staff_id"]').val()) {
        $('button[name="submit"]').prop('disabled', true);
    }

    // Toggle visibility of Book Editor and Chapter Title fields based on Book Status selection
    $('#statusDropdown').on('change', function() {
        var status = $(this).val();
        if (status === 'NO INDEX') {
            $('#bookeditorField').removeClass('hidden');
            $('#chaptertitleField').removeClass('hidden');
            $('#publisherField').addClass('hidden');
        } else {
            $('#bookeditorField').addClass('hidden');
            $('#chaptertitleField').addClass('hidden');
            $('#publisherField').removeClass('hidden');
        }
    });

    // Initial check to set visibility based on the current value of statusDropdown
    var initialStatus = $('#statusDropdown').val();
    if (initialStatus === 'NO INDEX') {
        $('#bookeditorField').removeClass('hidden');
        $('#chaptertitleField').removeClass('hidden');
        $('#publisherField').addClass('hidden');
    } else {
        $('#bookeditorField').addClass('hidden');
        $('#chaptertitleField').addClass('hidden');
        $('#publisherField').removeClass('hidden');
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
          <h1 class="border-bottom text-center pb-3 mb-4">Add New Book</h1>
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
            <input type="text" class="form-control" name="staff_name" placeholder="Staff Name" readonly>
          </div>
          <!--Research Title-->
          <div class="col-md-6 mb-3">
            <label class="form-label">AUTHORS:</label>
            <input type="text" class="form-control" name="authors" placeholder="Authors" required>
          </div>


          <div class="col-md-6 mb-3">
            <label class="form-label">INDUSTRIAL:</label>
            <select class="form-control" name="industrial" required>
              <option value="" disabled selected>Choose</option>
              <option value="Y">YES</option>
              <option value="N">NO</option>
            </select>
          </div>

          <div class="col-md-6 mb-3">
            <label class="form-label">INTERNATIONAL:</label>
            <select class="form-control" name="international" required>
              <option value="" disabled selected>Choose</option>
              <option value="Y">YES</option>
              <option value="N">NO</option>
            </select>
          </div>
          <div class="col-md-6 mb-3">
            <label class="form-label">NATIONAL:</label>
            <select class="form-control" name="national" required>
              <option value="" disabled selected>Choose</option>
              <option value="Y">YES</option>
              <option value="N">NO</option>
            </select>
          </div>
          <div class="col-md-6 mb-3">
            <label class="form-label">BOOK TITLE:</label>
            <input type="text" class="form-control" name="book_title" placeholder="Book Title" required>
          </div>

                       
             <div class="col-md-6 mb-3">
            <label class="form-label">BOOK STATUS</label>
            <select class="form-control"id="statusDropdown" name="book_status" required>
              <option value="" disabled selected>Choose</option>
              <option value="INDEX">INDEX</option>
              <option value="NO INDEX">NO INDEX</option>
            </select>
          </div>
          <div class="col-md-6 mb-3 hidden" id="bookeditorField">
            <label class="form-label">BOOK EDITOR:</label>
            <input type="text" class="form-control" name="book_editor" placeholder="Book Editor">
        </div>
        <div class="col-md-6 mb-3 hidden" id="chaptertitleField">
            <label class="form-label">CHAPTER TITLE:</label>
            <input type="text" class="form-control" name="chapter_title" placeholder="Chapter Title">
        </div>

          <div class="col-md-6 mb-3 hidden" id="publisherField">
            <label class="form-label">PUBLISHER:</label>
            <input type="text" class="form-control" name="publisher" placeholder="Publisher" required>
          </div>
  
          <div class="col-md-6 mb-3">
            <label class="form-label">ISBN:</label>
            <input type="text" class="form-control" name="isbn" placeholder="Isbn" required>
          </div>
        
      
          <div class="col-md-6 mb-3">
            <label class="form-label">LINK EVIDENCE:</label>
            <input type="text" class="form-control" name="link_evidence" placeholder="Link Evidence" required>
          </div>
    
          <!--Remarks-->
          <div class="col-md-6 mb-3">
            <label class="form-label">REMARKS:</label>
            <input type="text" class="form-control" name="remarks" placeholder="Remarks" required>
          </div>
      
          <!--Button-->
          <div class="col-md-12 mb-3 text-center">
            <button type="submit" class="btn btn-primary" name="submit">ADD</button>
            <a href="ResearchBookIndex.php" class="btn btn-success">View Book</a>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

</body>
</html>
