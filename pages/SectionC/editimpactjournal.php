<?php
session_start();

if(!isset($_SESSION['user_id']))

{
    header('Location: ../examples/login.php'); 
    exit;
}
include "../examples/config.php";
$article_no =$_GET['ID'];

if(isset($_POST ['submit']))
{ 
  $article_no = $_POST['article_no'];
  $staff_id = $_POST['staff_id'];
  $staff_name = $_POST['staff_name'];
  $authors = $_POST['authors'];
  $co_authors = $_POST['co_authors'];
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
  $quartile1 = $_POST['quartile1'];  
  $quartile2 = $_POST['quartile2'];

// Prepare the SQL statement
$stmt = $conn->prepare("UPDATE impact_journal SET 
article_no = ?, 
staff_id = ?, 
staff_name = ?, 
authors = ?,
co_authors = ?,
industrial = ?,  
international = ?, 
national = ?, 
document_title = ?, 
source_title = ?,
document_type = ?,
volume = ?,
issue = ?,
page_start = ?,
page_end = ?,
year = ?, 
issn_isbn = ?, 
link_evidence = ?, 
remarks = ?, 
quartile1 = ?,
quartile2 = ?
WHERE article_no = ?");

// Check if the statement preparation was successful
if (!$stmt) {
die('Prepare failed: ' . htmlspecialchars($conn->error));
}

// Bind the parameters
// Assuming all fields are strings except for the `staff_id` which is an integer
$stmt->bind_param("iisssssssssssiiiissssi", 
$article_no, 
$staff_id , 
$staff_name, 
$authors,
$co_authors,
$industrial,  
$international, 
$national, 
$document_title, 
$source_title,
$document_type,
$volume,
$issue,
$page_start,
$page_end,
$year, 
$issn_isbn, 
$link_evidence, 
$remarks,  
$quartile1,
$quartile2,
$article_no
);



    if($stmt->execute()) {
        echo "<script>alert('New record successfully updated');</script>";
        echo "<script>document.location='ImpactJournal.php';</script>";
    } else {
        echo "<script>alert('Something went wrong');</script>";
    }

    $stmt->close();
    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Impact Journal Information</title>
    <style>
        body {
            background-repeat:            no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }
    </style>
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
    <script src="../../bootstrap/js/jquery.min.js"></script>
    <script src="../../bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
        integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../css/navbar.css">
    <link rel="shortcut icon" href="../../images/Logo2.png" type="image/x-icon">
</head>
<body>
    <div class="container">
        <div class="text-center mb-4">
            <b><p>Click Update After Finish Changing Information</p></b>
        </div>

       
        <?php 
        $sql = "SELECT * FROM `impact_journal` WHERE article_no= $article_no LIMIT 1";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        ?>

        <div class="container d-flex justify-content-center">
            <form action="" method="post" style="width:50vw; min-width:300px;">
                <div class="row">
                        <!-- Staff ID -->
                        <div class="col-md-6 mb-3">
                        <label class="form-label">ARTICLE NO:</label>
                        <input type="text" class="form-control" name="article_no" value="<?php echo $row['article_no']?>" readonly>
                    </div>
                  
                    <!-- Staff ID -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">STAFF ID:</label>
                        <input type="text" class="form-control" name="staff_id" value="<?php echo $row['staff_id']?>" readonly>
                    </div>

                    <!-- Name -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">STAFF NAME:</label>
                        <input type="text" class="form-control" name="staff_name" value="<?php echo $row['staff_name']?>" readonly>
                    </div>

                 <!-- Name -->
                 <div class="col-md-6 mb-3">
                        <label class="form-label">AUTHORS:</label>
                        <input type="text" class="form-control" name="authors" value="<?php echo $row['authors']?>">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">CO-AUTHORS:</label>
                        <input type="text" class="form-control" name="co_authors" value="<?php echo $row['co_authors']?>">
                    </div>


                    <div class="col-md-6 mb-3">
                    <label class="form-label">INDUSTRIAL:</label>
                    <select class="form-control" name="industrial" required>
                            <option value="" disabled selected>Choose</option>
                            <option value="Y" <?php if ($row['industrial'] == 'Y') echo 'selected'; ?>>YES</option>
                            <option value="N" <?php if ($row['industrial'] == 'N') echo 'selected'; ?>>NO</option>
                    </select>
                    </div>

                 
                    <div class="col-md-6 mb-3">
                    <label class="form-label">INTERNATIONAL:</label>
                    <select class="form-control" name="international" required>
                            <option value="" disabled selected>Choose</option>
                            <option value="Y" <?php if ($row['international'] == 'Y') echo 'selected'; ?>>YES</option>
                            <option value="N" <?php if ($row['international'] == 'N') echo 'selected'; ?>>NO</option>
                    </select>
                    </div>
                    <div class="col-md-6 mb-3">
                    <label class="form-label">NATIONAL:</label>
                    <select class="form-control" name="national" required>
                            <option value="" disabled selected>Choose</option>
                            <option value="Y" <?php if ($row['national'] == 'Y') echo 'selected'; ?>>YES</option>
                            <option value="N" <?php if ($row['national'] == 'N') echo 'selected'; ?>>NO</option>
                    </select>
                    </div>

                    <!-- Academic Qualification -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">DOCUMENT TITLE:</label>
                        <input type="text" class="form-control" name="document_title" value="<?php echo $row['document_title']?>">
                    </div>

                    <!-- Name of Professional Qualification/Awarding Body -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">SOURCE TITLE:</label>
                        <input type="text" class="form-control" name="source_title" value="<?php echo $row['source_title']?>">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">DOCUMENT TYPE:</label>
                        <input type="text" class="form-control" name="document_type" value="<?php echo $row['document_type']?>">
                    </div>

                    <!-- Registration Number for Professional Membership -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">VOLUME:</label>
                        <input type="text" class="form-control" name="volume" value="<?php echo $row['volume']?>">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">ISSUE :</label>
                        <input type="text" class="form-control" name="issue" value="<?php echo $row['issue']?>">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">PAGE START:</label>
                        <input type="text" class="form-control" name="page_start" value="<?php echo $row['page_start']?>">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">PAGE END:</label>
                        <input type="text" class="form-control" name="page_end" value="<?php echo $row['page_end']?>">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">YEAR:</label>
                        <input type="text" class="form-control" name="year" value="<?php echo $row['year']?>">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">ISSN/ISBN:</label>
                        <input type="text" class="form-control" name="issn_isbn" value="<?php echo $row['issn_isbn']?>">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">LINK EVIDENCE:</label>
                        <input type="text" class="form-control" name="link_evidence" value="<?php echo $row['link_evidence']?>">
                    </div>
                    <!-- Remarks -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">REMARKS:</label>
                        <input type="text" class="form-control" name="remarks" value="<?php echo $row['remarks']?>">
                    </div>      
                      <!-- Remarks -->
                      <div class="col-md-6 mb-3">
                        <label class="form-label">QUARTILE 1:</label>
                        <input type="text" class="form-control" name="quartile1" value="<?php echo $row['quartile1']?>">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">QUARTILE 2:</label>
                        <input type="text" class="form-control" name="quartile2" value="<?php echo $row['quartile2']?>">
                    </div>                
               <div>
               <center>
                       <button type ="submit" class="btn btn-success" name="submit">UPDATE</button>
                       <a href="ImpactJournal.php" class="btn btn-danger">Cancel</a>
              </div>
                 </center>
          </form>
     </div>
</div>
 <!--Boostrap-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
 <!--Boostrap-->
</body>
</html>


