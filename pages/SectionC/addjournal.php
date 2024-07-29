<?php
include "../examples/config.php";

if(isset($_POST['submit'])) {
  $article_no = $_POST['article_no'];
  $staff_id = $_POST['staff_id'];
  $staff_name = $_POST['staff_name'];
  $authors = $_POST['authors'];
  $industrial= $_POST['industrial'];
  $international = $_POST['international'];
  $national = $_POST['national'];
  $document_title = $_POST['document_title'];
  $source_title= $_POST['source_title'];
  $document_type= $_POST['document_type'];
  $volume= $_POST['volume'];
  $issue = $_POST['issue'];
  $page_start = $_POST['page_start'];
  $page_end = $_POST['page_end'];
  $year = $_POST['year'];
  $issn_isbn= $_POST['issn_isbn'];
  $link_evidence = $_POST['link_evidence'];
  $remarks = $_POST['remarks'];

  // Check if staff_id is active
  $check_staff_sql = mysqli_query($conn, "SELECT * FROM `staff` WHERE `staff_id` = '$staff_id' AND `status` = 'active'");
  
  if(mysqli_num_rows($check_staff_sql) > 0) {
    // Staff is active, check for duplicates
    $check_duplicate_sql = mysqli_query($conn, "SELECT * FROM `publication` WHERE `article_no` = $article_no'");
    
      if(mysqli_num_rows($check_duplicate_sql) == 0) {
      // No duplicates, proceed with the insertion
      $sql = mysqli_query($conn, "INSERT INTO `publication` (`article_no`, `staff_id`, `staff_name`, `authors`, `industrial`, `international`, `national`, `document_title`, `source_title`, `document_type`, `volume`, `issue`, `page_start`, `page_end`, `year`, `issn_isbn`, `link_evidence`, `remarks`) 
      VALUES ('$article_no', '$staff_id', '$staff_name', '$authors', '$industrial', '$international', '$national', '$document_title', '$source_title', '$document_type', '$volume', '$issue', '$page_start', '$page_end', '$year', '$issn_isbn', '$link_evidence', '$remarks')");
      

        if($sql) {
        echo "<script>alert('New record successfully added');</script>";
        echo "<script>document.location='IndexJournalArticle.php';</script>";
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
  <title>Add New Journal</title>
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
                    if (response === "Not Active") {
                      $('#staff-id-error').text("Staff ID is not active or does not exist").show();
                        $('input[name="staff_name"]').val('');
                        $('input[name="faculty"]').val('');
                        $('button[name="submit"]').prop('disabled', true);
                    } else {
                      var data = JSON.parse(response);
                        $('input[name="staff_name"]').val(data.staff_name); // Update the staff_name input field
                        $('input[name="faculty"]').val(data.faculty); // Update the faculty input field
                        $('button[name="submit"]').prop('disabled', false);
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
          <h1 class="border-bottom text-center pb-3 mb-4">Add New Journal</h1>
        </div>
      </div>
      <form action="" method="post">
        <div class="row">
          <!--Project ID-->
          <div class="col-md-6 mb-3">
            <label class="form-label">ARTICLE NO:</label>
            <input type="text" class="form-control" name="article_no" placeholder="Article No" required>
          </div>
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
            <label class="form-label">DOCUMENT TITLE:</label>
            <input type="text" class="form-control" name="document_title" placeholder="Document Title" required>
          </div>
          <div class="col-md-6 mb-3">
            <label class="form-label">SOURCE TITLE:</label>
            <input type="text" class="form-control" name="source_title" placeholder="Source Title" required>
          </div>
          <div class="col-md-6 mb-3">
            <label class="form-label">DOCUMENT TYPE:</label>
            <input type="text" class="form-control" name="document_type" placeholder="Document Type" required>
          </div>

          <div class="col-md-6 mb-3">
            <label class="form-label">VOLUME:</label>
            <input type="text" class="form-control" name="volume" placeholder="Volume" required>
          </div>
          <div class="col-md-6 mb-3">
            <label class="form-label">ISSUE:</label>
            <input type="text" class="form-control" name="issue" placeholder="Issue" required>
          </div>

          <!--Start Date-->
          <div class="col-md-6 mb-3">
            <label class="form-label">PAGE START:</label>
            <input type="text" class="form-control" name="page_start" required>
          </div>
          <!--End Of Date-->
          <div class="col-md-6 mb-3">
            <label class="form-label">PAGE END:</label>
            <input type="text" class="form-control" name="page_end" required>
          </div>
         
        
          <!--Grant Name-->
          <div class="col-md-6 mb-3">
            <label class="form-label">YEAR:</label>
            <input type="text" class="form-control" name="year" placeholder="Year" required>
          </div>
          <!--Amount Pledged (Approved) For Active Project In This Year-->
          <div class="col-md-6 mb-3">
            <label class="form-label">ISSN/ISBN:</label>
            <input type="text" class="form-control" name="issn_isbn" placeholder="ISSN/ISBN" required>
          </div>
          <!--Amount Pledged (Approved) For New Project In The Year-->
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
            <a href="IndexJournalArticle.php" class="btn btn-success">View Journal</a>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
</body>
</html>
