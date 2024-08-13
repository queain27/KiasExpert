<?php
include "../examples/config.php";

$reference_no = $_GET['ID'];

if (isset($_POST['submit'])) {
    
    $type = $_POST['type'];
    $value = $_POST['value'];
    $link = $_POST['link'];
    $remarks = $_POST['remarks'];

    $stmt = $conn->prepare("UPDATE oe SET type=?,value=?, link=?, remarks=? WHERE reference_no=?");
    $stmt->bind_param("sssss",  $type, $value, $link, $remarks, $reference_no);
    
    if ($stmt->execute())
    
    {
        echo "<script>alert('New record successfully updated');</script>";
        echo "<script>document.location='OE.php';</script>";
    } 
    
       else {
        echo "<script>alert('Something Wrong);</script>";
    }
    
    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title> Edit Operational Expenditure</title>
<style>
    * body 
    {
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: cover;
    }
  </style>
  <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
  <script src="../../bootstrap/js/jquery.min.js"></script>
  <script src="../../bootstrap/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../../css/navbar.css">
  <link rel="shortcut icon" href="../../images/Logo2.png" type="image/x-icon">
</head>

<div class="container">
       <div class="text-center mb-5"><br><br><br><br>
        <b><p>Click Update After Finish Changing Information</p></b>
    </div>
    <?php 
        $reference_no = mysqli_real_escape_string($conn, $reference_no); // Sanitize the input to prevent SQL injection
        $stmt = $conn->prepare("SELECT * FROM oe WHERE reference_no = ? LIMIT 1");
        $stmt->bind_param("s", $reference_no);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result) {
            $row = $result->fetch_assoc();
        } else {
            echo "Error: " . mysqli_error($conn);
        }
        $stmt->close();
    ?>
    <div class="container d-flex justify-content-center">
        <form action="" method="post" style="width:50vw; min-width:300px;">
            <div class="row">

                <!--REFERENCE-->
                <div class="col-md-6 mb-3">
                    <label class="form-label">REFERENCE:</label>
                    <input type="text" class="form-control" name="reference_no" value="<?php echo $row['reference_no']?>">
                </div>
                
                <!--TYPE OF EXPENDITURE-->
                <div class="col-md-6 mb-3">
                    <label class="form-label">TYPE OF EXPENDITURE:</label>
                    <input type="text" class="form-control" name="type" value="<?php echo $row['type']?>">
                </div>

                <!--VALUE-->
                <div class="col-md-6 mb-3">
                    <label class="form-label">VALUE (RM):</label>
                    <input type="text" class="form-control" name="value" value="<?php echo $row['value']?>">
                </div>

                <!--Link-->
                <div class="col-md-6 mb-3">
                    <label class="form-label">LINK:</label>
                    <input type="text" class="form-control" name="link" value="<?php echo $row['link']?>">
                </div>

                <!--Remarks-->
                <div class="col-md-6 mb-3">
                    <label class="form-label">REMARKS:</label>
                    <textarea class="form-control" name="remarks"><?php echo $row['remarks']?></textarea>
                </div>
            </div>
 
         <!--Button-->
      <div> 
       <center>
            <button type ="submit" class="btn btn-success" name="submit">UPDATE</button>
            <a href="OE.php" class="btn btn-danger">Cancel</a>
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