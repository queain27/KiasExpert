<?php
session_start();

if(!isset($_SESSION['user_id']))

{
    header('Location:pages/examples/login.php'); 
    exit;
}

include "pages/examples/config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us</title>
   
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link rel="shortcut icon" href="images/Logo2.png" type="image/x-icon">

</head>
<body class="hold-transition sidebar-mini">
    <style>
	   *  body        
          {
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            background: linear-gradient(90deg, rgba(79, 75, 90, 0.7) 15%, rgba(151, 143, 173, 0.7) 40%);
          }
    </style> 

    <div class="wrapper">
      <!-- Content Wrapper -->
       <div class="content-wrapper">
      <!-- Content Header -->
          <section class="content-header text-center">
            
                <div class="container-fluid">
                    <div class="row mb-2">
                       <div class="col-sm-12">
                           <h1>Contact us</h1>
                        </div>
                  </div>
                 <div class="row">
                     <div class="col-sm-12">
                         <ol class="breadcrumb justify-content-end">
                            <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                            <li class="breadcrumb-item active">Contact us</li>
                         </ol>
                     </div>
                 </div>
              </div>
         </section>
      </div>

            <!-- Main content -->
            <section class="content">
                <div class="card">
                    <div class="card-body row">
                        <div class="col-5 text-center d-flex align-items-center justify-content-center">
                            <div>
                                <h2>Admin<strong>KiasExpert</strong></h2>
                                <p class="lead mb-5">Kias<br>Phone: 09-712 9386</p>
                            </div>
                        </div>
                        <div class="col-7">
                            <div class="form-group">
                                <label for="inputName">Name</label>
                                <input type="text" id="inputName" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="inputEmail">E-Mail</label>
                                <input type="email" id="inputEmail" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="inputSubject">Subject</label>
                                <input type="text" id="inputSubject" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="inputMessage">Message</label>
                                <textarea id="inputMessage" class="form-control" rows="4"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Send message">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <!-- Main Footer -->
        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
            </div>
            <center>Copyright &copy; 2024 <a href="https://www.kias.edu.my/">KiasExperts</a>.
    All rights reserved.</center>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Content Here -->
        </aside>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>