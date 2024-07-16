<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Staff Academic</title>
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
       <a href="../sectionA/Staff.php" class="nav-link">
         <i class="far fa-circle nav-icon"></i>
         <p>A1 Staff Academic</p>
       </a> 
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
                <!-- <i class="fas fa-angle-left right"></i> -->
             </p>
         </a>  
     </li>
   <!--C3-->
   <li class="nav-item">
     <a href="../sectionC/Research_Project.php" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
          <p>C3 Research Project <br>Performance</br>
            <!-- <i class="fas fa-angle-left right"></i> -->
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
           <!-- <i class="fas fa-angle-left right"></i> -->
         </p>
       </a>
 </li>
 <!--D2-->
    <li class="nav-item">
         <a href="../sectionD/Master_Graduated.php" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
              <p>D2 Master Graduated
                <!-- <i class="fas fa-angle-left right"></i> -->
             </p>
         </a>  
     </li>
 <!--D3-->
 <li class="nav-item">
         <a href="../sectionD/PhDs_Enrollment.php" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
              <p>D3 PhDs Enrollment
                <!-- <i class="fas fa-angle-left right"></i> -->
             </p>
         </a>  
     </li>
   <!--D5-->
   <li class="nav-item">
     <a href="../sectionD/Internal_PhDs.php" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
          <p>D4 International Postgraduate</br>
            <!-- <i class="fas fa-angle-left right"></i> -->
         </p>
     </a>  
 </li>
 <!--D6-->
 <li class="nav-item">
   <a href="../sectionD/Qualification_Postgraduate.php" class="nav-link">
      <i class="far fa-circle nav-icon"></i>
        <p>D5 Qualitification Level Postgraduate </br>
          <!-- <i class="fas fa-angle-left right"></i> -->
       </p>
   </a>  
 </li>
 <!--D7-->
 <li class="nav-item">
   <a href="../sectionD/Felllowship_Grant.php" class="nav-link">
      <i class="far fa-circle nav-icon"></i>
        <p>D6 Total Fellowship <br>Grant Awards</br>
          <!-- <i class="fas fa-angle-left right"></i> -->
       </p>
   </a>  
 </li>
 <!--D8-->
 <li class="nav-item">
   <a href="../sectionD/Post_Doctoral.php" class="nav-link">
      <i class="far fa-circle nav-icon"></i>
        <p>D7 Post-Doctoral Appointments</br>
          <!-- <i class="fas fa-angle-left right"></i> -->
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
       <a href="../sectionE/Patent.php" class="nav-link">
         <i class="far fa-circle nav-icon"></i>
         <p>E1 Patent
           <!-- <i class="fas fa-angle-left right"></i> -->
         </p>
       </a>
 </li>
 <!--E2-->
    <li class="nav-item">
         <a href="../sectionE/Commercial.php" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
              <p>E2 Commercial
                <!-- <i class="fas fa-angle-left right"></i> -->
             </p>
         </a>  
     </li>
   <!--E3-->
   <li class="nav-item">
     <a href="../sectionE/Technology.php" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
          <p>E3 Technology</br>
            <!-- <i class="fas fa-angle-left right"></i> -->
         </p>
     </a>  
 </li>
 <!--E4-->
 <li class="nav-item">
   <a href="../sectionE/IPRs.php" class="nav-link">
      <i class="far fa-circle nav-icon"></i>
        <p>E4 IPRs</br>
          <!-- <i class="fas fa-angle-left right"></i> -->
       </p>
   </a>  
 </li>
 <!--E5-->
 <li class="nav-item">
   <a href="../sectionE/Startup.php" class="nav-link">
      <i class="far fa-circle nav-icon"></i>
        <p>E5 Startup</br>
          <!-- <i class="fas fa-angle-left right"></i> -->
       </p>
   </a>  
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
          <!-- <i class="fas fa-angle-left right"></i> -->
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
                <!-- <i class="fas fa-angle-left right"></i> -->
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
           <!-- <i class="fas fa-angle-left right"></i> -->
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
<h3><center><font color="" face="Cambria Math">Staff Academic<font><br></center></h3>
<!--TableStart-->  
  <div class="container pt-50">
   <div class="row">
    <div class="col col-sm-3">
       <button type="button" id="add_data" class="btn btn-success btn-sm float-end">Add</button>
    </div>
    </div>
 </div>
        <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped table-bordered" id="staff_data">
              <thead>
             <tr>
                    <th style="text-align: center">No.</th>
                    <th style="text-align: center">Staff ID</th>
                    <th style="text-align: center">Staff Name</th>
                    <th style="text-align: center">Grade</th>
                    <th style="text-align: center">Position</th>
                    <th style="text-align: center">First Appointment Date</th>
                    <th style="text-align: center">Appointment Date <br>Current Position</th>
                    <th style="text-align: center">Status Active</th>
                    <th style="text-align: center">Status Contract</th>
                    <th style="text-align: center">Status Time</th>
                    <th style="text-align: center">Citizenship</th>
                    <th style="text-align: center">Country</th>
                    <th style="text-align: center">Action</th>
            </thead>
              <tbody>
                 </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

<div class="modal" tabindex="-1" id="action_modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" id="staff_form">
                <div class="modal-header">
                    <h5 class="modal-title" id="dynamic_modal_title">Add Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!--Staff ID-->
            <div class="col-md-6 mb-3">
              <label class="form-label text-end">STAFF ID:</label>
              <input type="text" class="form-control" name="staff_id" id="staff_id" placeholder="Staff ID" required>
              <span id="staff_id_error" class="text-danger"></span>
            </div>

            <!--Name-->
            <div class="col-md-6 mb-3">
              <label class="form-label text-end">STAFF NAME:</label>
              <input type="text" class="form-control" name="staff_name" placeholder="Staff Name" required>
              <span id="staff_name_error" class="text-danger"></span>
            </div>

              <!--Grade-->
              <div class="col-md-6 mb-3">
              <label class="form-label text-end">GRADE:</label>
              <input type="text" class="form-control" name="grade" placeholder="Grade" required>
              <span id="grade_error" class="text-danger"></span>
            </div>

            <!--Position Staff-->
            <div class="col-md-6 mb-3">
              <label class="form-label text-end">POSITION STAFF:</label>
              <select class="form-control" name="position" required>
                <option value="" disabled selected>Choose Position</option>
                <option value="Professor">Professor</option>
                <option value="Assoc.Prof">Assoc.Prof</option>
                <option value="Senior Lecturer">Senior Lecturer</option>
                <option value="Lecturer">Lecturer</option>
                <option value="Research Fellow">Research Fellow</option>
              </select>
            </div>         

            <!--First Appointment-->
            <div class="col-md-6 mb-3">
              <label class="form-label text-end">FIRST APPOINTMENT:</label>
              <input type="date" class="form-control" name="first_appointment" required>
              <span id="first_appointment_error" class="text-danger"></span>
            </div>

            <!--Current Appointment-->
            <div class="col-md-6 mb-3">
              <label class="form-label text-end">CURRENT APPOINTMENT:</label>
              <input type="date" class="form-control" name="current_appointment" required>
              <span id="current_appointment_error" class="text-danger"></span>
            </div>

            <!--Status Active-->
            <div class="col-md-6 mb-3">
              <label class="form-label text-end">STATUS:</label>
              <select class="form-control" name="status" required>
                <option value="" disabled selected>Choose Status</option>
                <option value="Active">Active</option>
                <option value="Study">Study</option>
                <option value="Leaves">Leaves</option>
                <option value="Sabbatical">Sabbatical</option>
                <option value="Training">Training</option>
                <option value="Attachment">Attachment</option>
                <option value="Seconded">Seconded</option>
              </select>
          </div>
            <!--Status Active-->        

            <!--Status Contract-->
            <div class="col-md-6 mb-3">
              <label class="form-label text-end">STATUS CONTRACT:</label>
              <select class="form-control" name="status_contract" required>
                <option value="" disabled selected>Choose Status  contract</option>
                <option value="Permanent">Permenant</option>
                <option value="Contract">Contract</option>
              </select>
            </div>

            <!--Status Time-->
            <div class="col-md-6 mb-3">
              <label class="form-label text-end">STATUS TIME:</label>
              <select class="form-control" name="status_time" required>
                <option value="" disabled selected>Choose Status time</option>
                <option value="Full-Time">Full-Time</option>
                <option value="Part-Time">Part-Time</option>
              </select>
            </div>

            <!--citizenship-->
              <div class="col-md-6 mb-3">
            <div class="col-md-6 mb-3">
              <label class="form-label text-end">CITIZENSHIP</label>
              <select class="form-control" name="citizen" required>
                <option value="" disabled selected>Choose Citizenship</option>
                <option value="Local">Local</option>
                <option value="Foreign">Foreign</option>
              </select>
            </div>    

            <!--country-->
             <div class="col-md-6 mb-3">
             <label class="form-label text-end">COUNTRY:</label>
             <input type="text" class="form-control" name="country" placeholder="Country" required>
             <span id="country_error" class="text-danger"></span>
            </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="id" id="id" value="" />
                    <input type="hidden" name="action" id="action" value="Add" />
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" id="action_button">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>

$(document).ready(function(){

    load_data();

    function load_data()
    {
        var seconds = new Date() / 1000;

        $.getJSON("data.json?"+seconds+"", function(data){

            data.sort(function (a, b) {
                return b.id - a.id
            });

            var data_arr = [];

            for(var count = 0; count < data.length; count++)
            {
                var sub_arr = 
                {
                  'staff_id': data[count].staff_id,
                    'staff_name': data[count].staff_name,
                    'grade': data[count].grade,
                    'position': data[count].position,
                    'first_appointment': data[count].first_appointment,
                    'current_appointment': data[count].current_appointment,
                    'status': data[count].status,
                    'status_contract': data[count].status_contract,
                    'status_time': data[count].status_time,
                    'citizen': data[count].citizen,
                    'country': data[count].country,
                    'action' : '<button type="button" class="btn btn-warning btn-sm edit" data-id="'+data[count].id+'">Edit</button>&nbsp;<button type="button" class="btn btn-danger btn-sm delete" data-id="'+data[count].id+'">Delete</button>'
                };

                data_arr.push(sub_arr);
            }

            console.log(data_arr);

            $('#staff_data').DataTable({
                data:data_arr,
                order:[],
                columns: [
                    { data: "staff_id" },
                    { data: "staff_name" },
                    { data: "grade" },
                    { data: "position" },
                    { data: "first_appointment" },
                    { data: "current_appointment" },
                    { data: "status" },
                    { data: "status_contract" },
                    { data: "status_time" },
                    { data: "citizen" },
                    { data: "country" },
                    { data: "action" },
                ]
            });

        });       

    }
    $('#add_data').click(function(){

        $('#dynamic_modal_title').text('Add Data');

        $('#staff_form')[0].reset();

        $('#action').val('Add');

        $('#action_button').text('Add');

        $('.text-danger').text('');

        $('#action_modal').modal('show');

    });

    $('#staff_form').on('submit', function(event){

        event.preventDefault();

        $.ajax({
            url:"action.php",
            method:"POST",
            data:$('#staff_form').serialize(),
            dataType:"JSON",
            beforeSend:function(){
                $('#action_button').attr('disabled','disabled');
            },
            success:function(data)
            {
                $('#action_button').attr('disabled',false);
                if(data.error)
                {
                    if(data.error.first_name_error)
                    {
                        $('#first_name_error').text(data.error.first_name_error);
                    }
                    if(data.error.last_name_error)
                    {
                        $('#last_name_error').text(data.error.last_name_error);
                    }

                    if(data.error.age_error)
                    {
                        $('#age_error').text(data.error.age_error);
                    }
                }
                else
                {
                    $('#message').html('<div class="alert alert-success">'+data.success+'</div>');
                    $('#action_modal').modal('hide');

                    $('#staff_data').DataTable().destroy();
                    
                    load_data();

                    setTimeout(function(){
                        $('#message').html('');
                    }, 5000);
                }
            }
        });

    });

    $(document).on('click', '.edit', function(){

        var id = $(this).data('id');

        $('#dynamic_modal_title').text('Edit Data');

        $('#action').val('Edit');

        $('#action_button').text('Edit');

        $('.text-danger').text('');

        $('#action_modal').modal('show');

        $.ajax({
            url:"action.php",
            method:"POST",
            data:{id:id, action:'fetch_single'},
            dataType:"JSON",
            success:function(data)
            {
                $('#staff_id').val(data.staff_id);
                $('#staff_name').val(data.staff_name);
                $('#grade').val(data.grade);
                $('#first_appointment').val(data.first_appointment);
                $('#current_appointment').val(data. current_appointment);
                $('#status').val(data.status );
                $('#status_contract').val(data. status_contract);
                $('#status_time').val(data.status_time );
                $('#citizen').val(data. citizen);
                $('#country').val(data. country);
                $('#id').val(data.id);
            }
        });

    });

    $(document).on('click', '.delete', function(){

        var id = $(this).data('id');

        if(confirm("Are you sure you want to delete this data?"))
        {
            $.ajax({
                url:"action.php",
                method:"POST",
                data:{action:'delete', id:id},
                dataType:"JSON",
                success:function(data)
                {
                    $('#message').html('<div class="alert alert-success">'+data.success+'</div>');

                    $('#staff_data').DataTable().destroy();

                    load_data();

                    setTimeout(function(){
                        $('#message').html('');
                    }, 5000);
                }
            });
        }

    });

});

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