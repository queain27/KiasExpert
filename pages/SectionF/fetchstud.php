<?php
include "../examples/config.php";

if(isset($_POST['matric_no'])) 

{
    $matric_no = $_POST['matric_no'];
    $student_query = mysqli_query($conn, "SELECT student_name, prog_code, faculty, study_mode, aca_year FROM pg_student WHERE matric_no = '$matric_no' AND study_mode = 'research'");

    if(mysqli_num_rows($student_query) > 0) {
        $student_details = mysqli_fetch_assoc($student_query);
        echo json_encode($student_details);
    } else {
        echo json_encode(["error" => "Not Research"]);
    }
}
?>
