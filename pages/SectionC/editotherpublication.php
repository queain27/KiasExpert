<?php
session_start();

if(!isset($_SESSION['user_id']))

{
    header('Location: ../examples/login.php'); 
    exit;
}
include "../examples/config.php";
$staff_id =$_GET['ID'];

if(isset($_POST ['submit']))
{ 

  $staff_id = $_POST['staff_id'];
  $staff_name = $_POST['staff_name'];
  $authors = $_POST['authors'];
  $document_type= $_POST['document_type'];
  $document_title = $_POST['document_title'];
  $source_title= $_POST['source_title'];
  $volume= $_POST['volume'];
  $issue = $_POST['issue'];
  $page_start = $_POST['page_start'];
  $page_end = $_POST['page_end'];
  $year = $_POST['year'];
  $issn_isbn= $_POST['issn_isbn'];
  $link_evidence = $_POST['link_evidence'];
  $remarks = $_POST['remarks'];
 // Prepare the SQL statement
$stmt = $conn->prepare("UPDATE other_publication SET 
staff_id = ?, 
staff_name = ?, 
authors = ?, 
document_type = ?, 
document_title = ?, 
source_title =?,
volume = ?, 
issue = ?, 
page_start = ?, 
page_end = ?, 
year = ?, 
issn_isbn = ?, 
link_evidence = ?, 
remarks = ? 
WHERE staff_id= ?");

// Bind the parameters
$stmt->bind_param("isssssssiiiissi",
$staff_id,
$staff_name,
$authors,
$document_type,
$document_title,
$source_title,
$volume,
$issue,
$page_start,
$page_end,
$year,
$issn_isbn,
$link_evidence,
$remarks,
$staff_id
);



    if($stmt->execute()) {
        echo "<script>alert('New record successfully updated');</script>";
        echo "<script>document.location='OtherPub.php';</script>";
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
    <title>Update Journal Information</title>
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
        $sql = "SELECT * FROM `other_publication` WHERE staff_id= $staff_id LIMIT 1";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        ?>

        <div class="container d-flex justify-content-center">
            <form action="" method="post" style="width:50vw; min-width:300px;">
                <div class="row">
                   
                  
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
                        <input type="text" class="form-control" name="authors" value="<?php echo $row['authors']?>" >
                    </div>

          <div class="col-md-6 mb-3">
                    <label class="form-label">DOCUMENT TYPE:</label>
                    <select class="form-control" name="document_type" required>
                            <option value="" disabled selected>Choose</option>
                            <option value="OTHER JOURNALS" <?php if ($row['document_type'] == 'OTHER JOURNALS') echo 'selected'; ?>>OTHER JOURNALS</option>
                            <option value="ARTICLES IN MAGAZINES" <?php if ($row['document_type'] == 'ARTICLES IN MAGAZINES') echo 'selected'; ?>>ARTICLES IN MAGAZINES</option>
                            <option value="NEWESLETTERS" <?php if ($row['document_type'] == 'NEWESLETTERS') echo 'selected'; ?>>NEWESLETTERS</option>
                            <option value="ORIGINAL WRITINGS AND PUBLICATION FROM CONFERENCES,DIGITAL OR PRINT MEDIA" <?php if ($row['document_type'] == 'ORIGINAL WRITINGS AND PUBLICATION FROM CONFERENCES,DIGITAL OR PRINT MEDIA') echo 'selected'; ?>>ORIGINAL WRITINGS AND PUBLICATION FROM CONFERENCES,DIGITAL OR PRINT MEDIA</option>
                            
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
               <div>
               <center>
                       <button type ="submit" class="btn btn-success" name="submit">UPDATE</button>
                       <a href="OtherPub.php" class="btn btn-danger">Cancel</a>
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


