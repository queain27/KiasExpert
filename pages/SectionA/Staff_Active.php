<?php
require_once "../examples/config.php";

if(isset($_GET['delid']))
{
  $staff_id =intval($_GET['delid']);
  $sql =mysqli_query($conn,"DELETE FROM staff WHERE staff_id='$staff_id'");
  echo"<script>alert('Record has been succesfully Deleted!!');</script>";
  echo"<script>window.location='Staff.php?';</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head> 
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Staff Active</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">  
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../../plugins/summernote/summernote-bs4.min.css">
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
  <link rel="shortcut icon" href="../../images/Logo2.png" type="image/x-icon">
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
<!--Navbar-->
 <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../../home.php" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../../contactus.php" class="nav-link">Contact</a>
      </li>
    </ul>
        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>
      <!-- Notifications -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
        </a>   
      </li>
        <!-- fullscreen -->
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
       <!-- logout -->
       <li class="nav-item">
        <a class="nav-link" data-widget="logout" href="../../index.php" role="button">
          <i class="fas fa-power-off"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="../../home.php" class="brand-link">
      <img src="../../images/Logo1.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">KiasExperts</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../images/Logo2.png" img-circle elevation-2 alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">AdminKias</a>
        </div>
      </div>
      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>
      <!-- Sidebar Menu -->
  <!-- Sidebar Menu -->
  <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item menu-open">
              <a href="../../home.php" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>Main Menu</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="../examples/profile.php" class="nav-link">
                <i class="nav-icon 	fas fa-user-circle"></i>
                <p>Profile</p>
              </a>
            </li>
  <!--Seksyen A Start-->
 <li class="nav-header">Section MyRA</li>
 <li class="nav-item">
   <a href="#" class="nav-link">
     <i class="nav-icon fas fa-info-circle icon"></i>
     <p>A. General Information
       <i class="fas fa-angle-left right"></i>
     </p>
   </a>
   <ul class="nav nav-treeview">
   <li class="nav-item">
       <a href="#" class="nav-link">
         <i class="far fa-circle nav-icon"></i>
         <p>A1 Staff Information
           <i class="fas fa-angle-left right"></i>
         </p>
       </a>
       <ul class="nav nav-treeview">
         <li class="nav-item">
           <a href="../sectionA/Staff.php" class="nav-link">
             <i class="far fa-circle nav-icon"></i>
             <p>(a)Staff</p>
           </a>
         </li>
         <li class="nav-item">
         <a href="../sectionA/Staff_Active.php" class="nav-link">
             <i class="far fa-circle nav-icon"></i>
             <p>(b) Staff Active</p>
           </a>
         </li>
         <li class="nav-item">
         <a href="../sectionA/Staff_Foreign.php" class="nav-link">
             <i class="far fa-circle nav-icon"></i>
             <p>(c) Staff Foreign</p>
           </a>
         </li>
         <li class="nav-item">
         <a href="../sectionA/Staff_ST.php" class="nav-link">
             <i class="far fa-circle nav-icon"></i>
             <p>(d) Staff S&T</p>
           </a>
         </li>
         <li class="nav-item">
         <a href="../sectionA/Staff_NONST.php" class="nav-link">
             <i class="far fa-circle nav-icon"></i>
             <p>(e)Staff Non S&T</p>
           </a>
         </li>
       </ul>
     </li>

     <li class="nav-item">
       <a href="#" class="nav-link">
         <i class="far fa-circle nav-icon"></i>
         <p>A2 Student Information
           <i class="fas fa-angle-left right"></i>
         </p>
       </a>
       <ul class="nav nav-treeview">
         <li class="nav-item">
           <a href="../sectionA/UndergraduateStud.php" class="nav-link">
             <i class="far fa-circle nav-icon"></i>
             <p>Student Undergraduate</p>
           </a>
         </li>
         <li class="nav-item">
         <a href="../sectionA/PostgraduateStud.php" class="nav-link">
             <i class="far fa-circle nav-icon"></i>
             <p>Student Postgraduate</p>
           </a>
         </li>
       </ul>
     </li>
   </ul>
 </li>
 <!--Seksyen A End-->
 <!--Seksyen B Start-->
 <!-- <li class="nav-header">Section B</li> -->
 <li class="nav-item">
   <a href="#" class="nav-link">
     <i class="nav-icon fas fa-chart-bar icon"></i>
     <p>B. Quantity & Quality Of Researchs 
       <i class="fas fa-angle-left right"></i>
     </p>
   </a>
   <ul class="nav nav-treeview">
     <li class="nav-item">
     <a href="../sectionB/CriticalMass.php" class="nav-link">
         <i class="far fa-circle nav-icon"></i>
         <p> B1  Critical Mass</p>
       </a> 
     </li>
 
     <li class="nav-item">
       <a href="../sectionB/PhDsPQ.php" class="nav-link">
         <i class="far fa-circle nav-icon"></i>
         <p> B2 Total Number Staff Phd or Professional</p>
       </a> 
     </li>
 
     <li class="nav-item">
       <a href="../sectionB/ResearchCohort.php" class="nav-link">
         <i class="far fa-circle nav-icon"></i>
         <p> B3 Research Experience <br>3 Cohorts</p>
       </a> 
     </li>
 
     <li class="nav-item">
       <a href="../sectionB/Award.php" class="nav-link">
         <i class="far fa-circle nav-icon"></i>
         <p>B4 Awards National & International</p>
       </a> 
     </li>
   </ul>
 </li>
 <!--Seksyen B End-->
 
 <!--Seksyen C Start-->
 <!-- <li class="nav-header">Section C</li> -->
 <li class="nav-item">
   <a href="#" class="nav-link">
     <i class="nav-icon fas fa-graduation-cap icon"></i>
     <p>C. Quantity & Quality Of Researchs 
       <i class="fas fa-angle-left right"></i>
     </p>
   </a>
   <ul class="nav nav-treeview">
     </li>
     <li class="nav-item">
       <a href="#" class="nav-link">
         <i class="far fa-circle nav-icon"></i>
         <p>C1 Publications
           <i class="fas fa-angle-left right"></i>
         </p>
       </a>
       <ul class="nav nav-treeview">
 <!--Indexed (Articel)-->
         <li class="nav-item">
           <a href="../sectionC/IndexJournalArticel.php" class="nav-link">
             <i class="far fa-circle nav-icon"></i>
             <p>(a) Total Number Publication Indexed Journal</p>
           </a>
         </li>
        <!--Impact Journal-->
        <li class="nav-item">
            <a href="../sectionC/ImpactJournal.php" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>(b) Total Number Impact Journal</p>
            </a>
          </li>
  <!--Publication other Journal MyCite-->
         <li class="nav-item">
           <a href="../sectionC/PublicationOtherJournal.php" class="nav-link">
             <i class="far fa-circle nav-icon"></i>
           <p>(C) Total Publication Other Journal</p>
          </a>
        </li>
 <!--Research Books-->
 <li class="nav-item">
   <a href="#" class="nav-link">
     <i class="far fa-circle nav-icon"></i>
   <p>(d)Research Books </p><i class="fas fa-angle-left right"></i>

  </a>
  <ul class="nav nav-treeview">
        <!--i-->
                <li class="nav-item">
                  <a href="../sectionC/ResearchBookIndex.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>(i) Index Book</p>
                  </a>
                </li>
           <!--ii-->
                <li class="nav-item">
                  <a href="../sectionC/ResearchBookNoIndex.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>(ii) No Index Book</p>
                  </a>
                </li>
          </ul>
 </li>
<!--Policy Paper-->
<li class="nav-item">
    <a href="../sectionC/Policy.php" class="nav-link">
      <i class="far fa-circle nav-icon"></i>
    <p>(e) Policy Paper</p>
   </a>
  </li>
    <!--Other Publications-->
    <li class="nav-item">
        <a href="../sectionC/OtherPub.php" class="nav-link">
         <i class="far fa-circle nav-icon"></i>
         <p>(f) Other Publications</p>
       </a>
      </li>
    </ul>
  </li>
 <!--C2-->
    <li class="nav-item">
         <a href="../sectionC/Research_Grant.php" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
              <p>C2 Research Grants
                
             </p>
         </a>  
     </li>
   <!--C3-->
   <li class="nav-item">
     <a href="../sectionC/Research_Project.php" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
          <p>C3 Research Project <br>Performance</br>
            
         </p>
     </a>  
 </li>
    </ul>  
 </li>
 <!--Seksyen C End-->
 <!--Seksyen D Start-->
 <!-- <li class="nav-header">Section D</li> -->
 <li class="nav-item">
   <a href="#" class="nav-link">
     <i class="nav-icon fas fa-lightbulb icon"></i>
     <p>D. Quantity & Quality Postgraduate
       <i class="fas fa-angle-left right"></i>
     </p>
   </a>
   <ul class="nav nav-treeview">
     </li>
     <li class="nav-item">
       <a href="../sectionD/PhDs_Graduated.php" class="nav-link">
         <i class="far fa-circle nav-icon"></i>
         <p>D1 PhDs Graduate
           
         </p>
       </a>
 </li>
 <!--D2-->
    <li class="nav-item">
         <a href="../sectionD/Master_Graduated.php" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
              <p>D2 Master Graduated
                
             </p>
         </a>  
     </li>
 <!--D3-->
 <li class="nav-item">
         <a href="../sectionD/PhDs_Enrollment.php" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
              <p>D3 PhDs Enrollment
                
             </p>
         </a>  
     </li>
   <!--D5-->
   <li class="nav-item">
     <a href="../sectionD/Internal_PhDs.php" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
          <p>D4 International Postgraduate</br>
            
         </p>
     </a>  
 </li>
 <!--D6-->
 <li class="nav-item">
   <a href="../sectionD/Qualification_Postgraduate.php" class="nav-link">
      <i class="far fa-circle nav-icon"></i>
        <p>D5 Qualitification Level Postgraduate </br>
          
       </p>
   </a>  
 </li>
 <!--D7-->
 <li class="nav-item">
   <a href="../sectionD/Felllowship_Grant.php" class="nav-link">
      <i class="far fa-circle nav-icon"></i>
        <p>D6 Total Fellowship <br>Grant Awards</br>
          
       </p>
   </a>  
 </li>
 <!--D8-->
 <li class="nav-item">
   <a href="../sectionD/Post_Doctoral.php" class="nav-link">
      <i class="far fa-circle nav-icon"></i>
        <p>D7 Post-Doctoral Appointments</br>
          
       </p>
   </a>  
 </li>
    </ul>  
 </li>
 <!--Seksyen D End-->
 <!--Seksyen E Start-->
 <!-- <li class="nav-header">Section E</li> -->
 <li class="nav-item">
   <a href="#" class="nav-link">
     <i class="nav-icon fas fa-file-alt icon"></i>
     <p>E. innovation
       <i class="fas fa-angle-left right"></i>
     </p>
   </a>
   <ul class="nav nav-treeview">
     </li>
     <li class="nav-item">
     <a href="#" class="nav-link">
         <i class="far fa-circle nav-icon"></i>
         <p>E1 Patent
           <i class="fas fa-angle-left right"></i>
         </p>
       </a>
       <ul class="nav nav-treeview">
         <li class="nav-item">
           <a href="../sectionE/Patent.php" class="nav-link">
             <i class="far fa-circle nav-icon"></i>
             <p>(a) patent Granted</p>
           </a>
         </li>
         <li class="nav-item">
         <a href="../sectionE/Patent_Filled.php" class="nav-link">
             <i class="far fa-circle nav-icon"></i>
             <p>(b) Patent Filed</p>
           </a>
         </li>
         <li class="nav-item">
         <a href="../sectionE/Patent_InvGrant.php" class="nav-link">
             <i class="far fa-circle nav-icon"></i>
             <p>(c) Invention Granted</p>
           </a>
         </li>
         <li class="nav-item">
         <a href="../sectionE/Patent_InvFil.php" class="nav-link">
             <i class="far fa-circle nav-icon"></i>
             <p>(d) Invention Filed</p>
           </a>
         </li>
       </ul>
     </li>
 <!--E2-->
    <li class="nav-item">
         <a href="../sectionE/Commercial.php" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
              <p>E2 Commercial</p>
         </a>  
     </li>
   <!--E3-->
   <li class="nav-item">
     <a href="../sectionE/Technology.php" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
          <p>E3 Technology</br></p>
     </a>  
 </li>
 <!--E4-->
 <li class="nav-item">
   <a href="../sectionE/IPRs.php" class="nav-link">
      <i class="far fa-circle nav-icon"></i>
        <p>E4 IPRs</br>
          
       </p>
   </a>  
 </li>
 <!--E5-->
 <li class="nav-item">
 <a href="#" class="nav-link">
         <i class="far fa-circle nav-icon"></i>
         <p>E5 Startup
           <i class="fas fa-angle-left right"></i>
         </p>
       </a>
       <ul class="nav nav-treeview">
         <li class="nav-item">
           <a href="../sectionE/Startup.php" class="nav-link">
             <i class="far fa-circle nav-icon"></i>
             <p>(a) Spinn off Companies</p>
           </a>
         </li>
         <li class="nav-item">
         <a href="../sectionE/StartupNew.php" class="nav-link">
             <i class="far fa-circle nav-icon"></i>
             <p>(b) New Spin Off Companies</p>
           </a>
         </li>     
       </ul>
     </li>
    </ul>  
 </li>
 <!--Seksyen E End-->
 <!--Seksyen F Start-->
 <!-- <li class="nav-header">Section F</li> -->
 <li class="nav-item">
   <a href="#" class="nav-link">
     <i class="nav-icon fas fa-handshake icon"></i>
     <p>F. Professional Service & Gifts
       <i class="fas fa-angle-left right"></i>
     </p>
   </a>
   <ul class="nav nav-treeview">
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>F1 Gross Income
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
        <!--a-->
                <li class="nav-item">
                  <a href="../sectionF/Training_Course.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>(a) Training Course</p>
                  </a>
                </li>
           <!--b-->
                <li class="nav-item">
                  <a href="../sectionF/Post_Fees.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>(b) Postgraduate Fee</p>
                  </a>
                </li>
          </ul>
  </li>
 <!--F2-->
    <li class="nav-item">
         <a href="../sectionF/Orga_Seminar.php" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
              <p>F2 Gross Organising, Seminar & Knowledge Program</p>
         </a>  
     </li>
   <!--F3-->
   <li class="nav-item">
     <a href="../sectionF/Product_Technology.php" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
          <p>F3 Gross products commercialization/technology know-how licensing/outright
          
         </p>
     </a>  
 </li>
   <!--F4-->
   <li class="nav-item">
     <a href="#" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
          <p>F4 Financial transaction
            <i class="fas fa-angle-left right"></i>
         </p>
     </a>  
     <ul class="nav nav-treeview">
       <!--a-->
               <li class="nav-item">
                 <a href="../sectionF/Consultancies.php" class="nav-link">
                   <i class="far fa-circle nav-icon"></i>
                   <p>(a) Consultancies</p>
                 </a>
               </li>
          <!--b-->
               <li class="nav-item">
                 <a href="../sectionF/Hospital.php" class="nav-link">
                   <i class="far fa-circle nav-icon"></i>
                   <p>(b) Hospitality</p>
                 </a>
               </li>
 
           <!--c-->
           <li class="nav-item">
             <a href="../sectionF/Lab_Service.php" class="nav-link">
               <i class="far fa-circle nav-icon"></i>
               <p>(c) Lab Services Fee</p>
             </a>
           </li>
         </ul>
     </li>
      <!--F6-->
      <li class="nav-item">
       <a href="../sectionF/Gift_Donation.php" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p> F5 Gifts/Donation</p>
      </a>  
   </li>
    </ul>  
 </li>
 <!--Seksyen F End-->
 <!--Seksyen G Start-->
 <!-- <li class="nav-header">Section G</li> -->
 <li class="nav-item">
   <a href="#" class="nav-link">
     <i class="nav-icon fas fa-network-wired icon"></i>
     <p>G. Networing & Linkages
       <i class="fas fa-angle-left right"></i>
     </p>
   </a>
   <ul class="nav nav-treeview">
     </li>
     <li class="nav-item">
       <a href="#" class="nav-link">
         <i class="far fa-circle nav-icon"></i>
         <p>G1 Participation international inter-Institution
           <i class="fas fa-angle-left right"></i>
         </p>
       </a>
 
       <ul class="nav nav-treeview">
         <!--Indexed (Articel)-->
                 <li class="nav-item">
                   <a href="../sectionG/InternationalMoa.php" class="nav-link">
                     <i class="far fa-circle nav-icon"></i>
                     <p>(a) Total International MoA Signed & Stamped</p>
                   </a>
                 </li>
            <!--Impact Journal-->
                 <li class="nav-item">
                   <a href="../sectionG/Staff_International.php" class="nav-link">
                     <i class="far fa-circle nav-icon"></i>
                     <p>(b) Total Staff Involved In Joint Research Project Under International MoA</p>
                   </a>
                 </li>
           </ul>
      </li>
 <!--G2-->
    <li class="nav-item">
         <a href="../sectionG/Abroad.php" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
              <p>G2 Staff Sent Abroad For Research Activities
                
             </p>
         </a>  
     </li>
   <!--G3-->
   <li class="nav-item">
     <a href="../sectionG/International.php" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
          <p> G3 Membership in International Academic/Professional bodies/Associations/NGOs</br>
         </p>
     </a>  
 </li>
 <!--G4-->
 <li class="nav-item">
   <a href="#" class="nav-link">
      <i class="far fa-circle nav-icon"></i>
        <p>G4 Participation in National Inter-Institution research related activities under MoA</br>
           <i class="fas fa-angle-left right"></i>
       </p>
   </a>  
   <ul class="nav nav-treeview">
     <!--a-->
             <li class="nav-item">
               <a href="../sectionG/National.php" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p>(a) Total Number National MoAs Signed & Stamped</p>
               </a>
             </li>
        <!--b-->
             <li class="nav-item">
               <a href="../sectionG/Staff_Research.php" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p>(b) Total Number Staff Involved Joint Research Project Under MoA</p>
               </a>
             </li>
          </ul>
      </li>
 
 <!--G5-->
 <li class="nav-item">
   <a href="../sectionG/Membership.php" class="nav-link">
      <i class="far fa-circle nav-icon"></i>
      <p> G5 Membership in national Academic/ Professional Bodies/Associations/NGOs</p>
  </a>  
 </li>

    </ul>  
 </li>
 <!--Seksyen G End-->
 <!--Seksyen H Start-->
 <!-- <li class="nav-header">Section H</li> -->
 <li class="nav-item">
   <a href="#" class="nav-link">
     <i class="nav-icon fas fa-tools icon"></i>
     <p>H. Support Facilities
       <i class="fas fa-angle-left right"></i>
     </p>
   </a>
   <ul class="nav nav-treeview">
     </li>
     <li class="nav-item">
       <a href="../sectionH/Laboratory.php" class="nav-link">
         <i class="far fa-circle nav-icon"></i>
         <p>H1 Laboratory/Research facilities
           
         </p>
       </a>
 </li>
 <!--H2-->
    <li class="nav-item">
         <a href="#" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
              <p>H2 Library Facilities
                <i class="fas fa-angle-left right"></i>
             </p>
         </a>  
         <ul class="nav nav-treeview">
           <!--a-->
                   <li class="nav-item">
                     <a href="../sectionH/TittleBook.php" class="nav-link">
                       <i class="far fa-circle nav-icon"></i>
                       <p>(a) Titles of Book</p>
                     </a>
                   </li>
              <!--b-->
                   <li class="nav-item">
                     <a href="../sectionH/OnlineBook.php" class="nav-link">
                       <i class="far fa-circle nav-icon"></i>
                       <p>(b)  Online Titles of Books</p>
                     </a>
                   </li>
             <!--c-->
             <li class="nav-item">
               <a href="../sectionH/Journal_Subscribe.php" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p>(c)Journal Subscribe </p>
               </a>
             </li>
             </ul>
           </li> 
         </ul>
       </li>
  <!--Seksyen H End-->
      </nav>
    </div>
  </aside>
  <!-- Paste the content of sidebar.php here -->
<body>
<!--Main Content-->
<h3><center><font color="" face="Cambria Math">Staff Active<font><br></center></h3>
<!--TableStart-->  
  <div class="container pt-50">
   <div class="row">
    <div class="table-responsive">
        <table id="example" class="table table-striped" style="width:200%">
            <thead>
                <tr>
                <th style="text-align: center">No.</th>
                    <th style="text-align: center">Staff ID</th>
                    <th style="text-align: center">Staff Name</th>
                    <th style="text-align: center">Grade</th>
                    <th style="text-align: center">Position</th>
                    <th style="text-align: center">First Appointment Date</th>
                    <th style="text-align: center">Appointment Date <br>Current Position</th>
                    <th style="text-align: center">Service End Date</th>
                    <th style="text-align: center">Date of Birth</th>
                    <th style="text-align: center">Age</th>
                    <th style="text-align: center">Cohort</th>
                    <th style="text-align: center">Academic Qualification</th>
                    <th style="text-align: center">Name Of Professional qualification/Awarding Body</th>
                    <th style="text-align: center">Professional Qualification <br> (IR,AR,FRCP,SR,ACCA,MMED)</th>
                    <th style="text-align: center">Registration Number For Professional Membership</th>
                    <th style="text-align: center">Department/Faculty </th>
                    <th style="text-align: center">S&T/Non S&T</th>
                    <th style="text-align: center">Status Active</th>
                    <th style="text-align: center">Status Contract</th>
                    <th style="text-align: center">Status Time</th>
                    <th style="text-align: center">Citizenship</th>
                    <th style="text-align: center">Country</th>
                    <th style="text-align: center">Link To Evidence</th>
                    <th style="text-align: center">Remarks</th>
                    <th style="text-align: center">Action</th>
                </tr>
            </thead>

            <tbody id="myTable">
    <?php
    require_once "../examples/config.php";
    $query = "SELECT * FROM staff where status ='active'";
    $count =1;
    $result = mysqli_query($conn, $query);

    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
    ?>
            <tr>
                <td style="text-align: center"><?php echo $count;?></td>
                <td style="text-align: center"><?php echo $row['staff_id']; ?></td>
                <td style="text-align: center"><?php echo $row['staff_name']; ?></td>
                <td style="text-align: center"><?php echo $row['grade']; ?></td>
                <td style="text-align: center"><?php echo $row['position']; ?></td>
                <td style="text-align: center"><?php echo $row['first_appointment']; ?></td>
                <td style="text-align: center"><?php echo $row['current_appointment']; ?></td>
                <td style="text-align: center"><?php echo $row['serve_date']; ?></td>
                <td style="text-align: center"><?php echo $row['dob']; ?></td>
                <td style="text-align: center"><?php echo $row['age']; ?></td>
                <td style="text-align: center"><?php echo $row['cohort']; ?></td>
                <td style="text-align: center"><?php echo $row['aca_qua']; ?></td>
                <td style="text-align: center"><?php echo $row['name_prof']; ?></td>
                <td style="text-align: center"><?php echo $row['prof_qual']; ?></td>
                <td style="text-align: center"><?php echo $row['regis_prof']; ?></td>
                <td style="text-align: center"><?php echo $row['faculty']; ?></td>
                <td style="text-align: center"><?php echo $row['st']; ?></td>
                <td style="text-align: center"><?php echo $row['status']; ?></td>
                <td style="text-align: center"><?php echo $row['status_contract']; ?></td>
                <td style="text-align: center"><?php echo $row['status_time']; ?></td>
                <td style="text-align: center"><?php echo $row['citizen']; ?></td>
                <td style="text-align: center"><?php echo $row['country']; ?></td>
                <td style="text-align: center"><a href="<?php echo $row['link_evidence']; ?>" target="_blank"><?php echo $row['link_evidence']; ?>
    </a>
</td>
                <td style="text-align: center"><?php echo $row['remarks']; ?></td>
              
                <td style="text-align: center;">
                    <a href="editstaff.php?ID=<?php echo $row['staff_id']; ?>" class="btn btn-primary btn-sm">
                        <i class="fa-solid fa-pen-to-square fs-5 me-3"></i>
                    </a>
                    <a href="Staff.php?delid=<?php echo htmlentities($row['staff_id']); ?>" 
                       onClick="return confirm('Do you really want to remove this Record?');" 
                       class="btn btn-danger btn-sm">
                        <i class="fa-solid fa-trash fs-5 me-3"></i>
                    </a>
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
                    <th style="text-align: center">No.</th>
                    <th style="text-align: center">Staff ID</th>
                    <th style="text-align: center">Staff Name</th>
                    <th style="text-align: center">Grade</th>
                    <th style="text-align: center">Position</th>
                    <th style="text-align: center">First Appointment Date</th>
                    <th style="text-align: center">Appointment Date <br>Current Position</th>
                    <th style="text-align: center">Service End Date</th>
                    <th style="text-align: center">Date of Birth</th>
                    <th style="text-align: center">Age</th>
                    <th style="text-align: center">Cohort</th>
                    <th style="text-align: center">Academic Qualification</th>
                    <th style="text-align: center">Name Of Professional qualification/Awarding Body</th>
                    <th style="text-align: center">Professional Qualification <br> (IR,AR,FRCP,SR,ACCA,MMED)</th>
                    <th style="text-align: center">Registration Number For Professional Membership</th>
                    <th style="text-align: center">Department/Faculty </th>
                    <th style="text-align: center">S&T/Non S&T</th>
                    <th style="text-align: center">Status Active</th>
                    <th style="text-align: center">Status Contract</th>
                    <th style="text-align: center">Status Time</th>
                    <th style="text-align: center">Citizenship</th>
                    <th style="text-align: center">Country</th>
                    <th style="text-align: center">Link To Evidence</th>
                    <th style="text-align: center">Remarks</th>
                    <th style="text-align: center">Action</th>
                </tr>
            </tfoot>
        </table>
      </div>
    </div>
</div>
<!--Main Content-->
<footer class="main-footer">
    <center>Copyright &copy; 2024 <a href="https://www.kias.edu.my/">KiasExperts</a>.All rights reserved.</center>
    <div class="float-right d-none d-sm-inline-block"><b>Version</b> 1.0</div>
</footer>
<aside class="control-sidebar control-sidebar-dark">
</aside>
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
<script src="../../plugins/jquery/jquery.min.js"></script>
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../../dist/js/adminlte.min.js"></script>
<script src="../../plugins/summernote/summernote-bs4.min.js"></script>
<script src="../../dist/js/demo.js"></script>
<script>
  $(function () 
  {
    $('#compose-textarea').summernote()
  })
</script>
</body>

</html>