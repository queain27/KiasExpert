<?php
include "../examples/config.php";
$staff_id =$_GET['ID'];

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
 // Prepare the SQL statement
$stmt = $conn->prepare("UPDATE book SET 
staff_id = ?, 
staff_name = ?, 
authors = ?, 
industrial = ?, 
international = ?, 
national = ?, 
book_title = ?, 
book_editor= ?, 
chapter_title = ?, 
publisher = ?, 
isbn = ?, 
book_status = ?, 
link_evidence = ?, 
remarks = ? 
WHERE staff_id= ?");

// Bind the parameters
$stmt->bind_param(
"isssssssssssssi", 
$staff_id, 
$staff_name, 
$authors, 
$industrial, 
$international, 
$national, 
$book_title, 
$book_editor, 
$chapter_title, 
$publisher, 
$isbn, 
$book_status, 
$link_evidence, 
$remarks,
$staff_id 
);



    if($stmt->execute()) {
        echo "<script>alert('New record successfully updated');</script>";
        echo "<script>document.location='ResearchBookIndex.php';</script>";
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
        $sql = "SELECT * FROM `book` WHERE staff_id= $staff_id LIMIT 1";
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

                 <div class="col-md-6 mb-3">
                        <label class="form-label">AUTHORS:</label>
                        <input type="text" class="form-control" name="authors" value="<?php echo $row['authors']?>">
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

                  
                    <div class="col-md-6 mb-3">
                        <label class="form-label">BOOK TITLE:</label>
                        <input type="text" class="form-control" name="book_title" value="<?php echo $row['book_title']?>">
                    </div>

                    <!-- Name of Professional Qualification/Awarding Body -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">BOOK EDITOR:</label>
                        <input type="text" class="form-control" name="book_editor" value="<?php echo $row['book_editor']?>">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">CHAPTER TITLE :</label>
                        <input type="text" class="form-control" name="chapter_title" value="<?php echo $row['chapter_title']?>">
                    </div>

                    <!-- Registration Number for Professional Membership -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">PUBLISHER:</label>
                        <input type="text" class="form-control" name="publisher" value="<?php echo $row['publisher']?>">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">ISBN:</label>
                        <input type="text" class="form-control" name="isbn" value="<?php echo $row['isbn']?>">
                    </div>
                    <div class="col-md-6 mb-3">
                    <label class="form-label">NATIONAL:</label>
                    <select class="form-control" name="book_status" required>
                            <option value="" disabled selected>Choose</option>
                            <option value="INDEX" <?php if ($row['book_status'] == 'INDEX') echo 'selected'; ?>>INDEX</option>
                            <option value="NO INDEX" <?php if ($row['book_status'] == 'NO INDEX') echo 'selected'; ?>>NO INDEX</option>
                    </select>
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
                       <a href="ResearchBookIndex.php" class="btn btn-danger">Cancel</a>
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


