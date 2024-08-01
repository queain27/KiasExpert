<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
  <link rel="shortcut icon" href="images/Logo2.png" type="image/x-icon">

   <!-- including side navigations -->
   <!--bg image -->
   <!-- <style>
    body {
      background-image: url('images/logiin.png');
      background-repeat: no-repeat;
      background-size: cover;
    }
  </style> -->
   <!--bg image -->

</head>

<!-- Paste the content of sidebar.php here -->
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
 
 <body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <!-- <img class="animation__shake" src="images/Logo2.pn" alt="Logo" height="60" width="60"> -->
    </div>
  
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="contactus.php" class="nav-link">Contact</a>
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
        <a class="nav-link" data-widget="logout" href="index.php" role="button">
          <i class="fas fa-power-off"></i>
        </a>
      </li>
    </ul>
    </nav>
    <!-- /.navbar -->
  
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="home.php" class="brand-link">
        <img src="images/Logo1.png" alt=" Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">KiasExperts</span>
      </a>
  
      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="images/Logo2.png" img-circle elevation-2 alt="User Image">
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
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item menu-open">
              <a href="./home.php" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>Main Menu</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pages/examples/profile.php" class="nav-link">
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
           <a href="pages/sectionA/Staff.php" class="nav-link">
             <i class="far fa-circle nav-icon"></i>
             <p>(a) Staff</p>
           </a>
         </li>
         <li class="nav-item">
         <a href="pages/sectionA/Staff_Active.php" class="nav-link">
             <i class="far fa-circle nav-icon"></i>
             <p>(b) Staff Active</p>
           </a>
         </li>
         <li class="nav-item">
         <a href="pages/sectionA/Staff_Foreign.php" class="nav-link">
             <i class="far fa-circle nav-icon"></i>
             <p>(c) Staff Foreign</p>
           </a>
         </li>
         <li class="nav-item">
         <a href="pages/sectionA/Staff_ST.php" class="nav-link">
             <i class="far fa-circle nav-icon"></i>
             <p>(d) Staff S&T</p>
           </a>
         </li>
         <li class="nav-item">
         <a href="pages/sectionA/Staff_NONST.php" class="nav-link">
             <i class="far fa-circle nav-icon"></i>
             <p>(e) Staff Non S&T</p>
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
           <a href="pages/sectionA/UndergraduateStud.php" class="nav-link">
             <i class="far fa-circle nav-icon"></i>
             <p>Student Undergraduate</p>
           </a>
         </li>
         <li class="nav-item">
         <a href="pages/sectionA/PostgraduateStud.php" class="nav-link">
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
      <a href="pages/sectionB/CriticalMass.php" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p> B1  Critical Mass</p>
        </a> 
      </li>
  
      <li class="nav-item">
        <a href="pages/sectionB/PhDsPQ.php" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p> B2 Total Number Staff Phd or Professional</p>
        </a> 
      </li>
  
      <li class="nav-item">
      <a href="pages/sectionB/ResearchCohort.php" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p> B3 Research Experience <br>3 Cohorts</p>
        </a> 
      </li>
  
      <li class="nav-item">
      <a href="pages/sectionB/Award.php" class="nav-link">
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
            <a href="pages/sectionC/IndexJournalArticel.php" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>(a) Total Number Publication Indexed Journal</p>
            </a>
          </li>
     <!--Impact Journal-->
          <li class="nav-item">
            <a href="pages/sectionC/ImpactJournal.php" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>(b) Total Number Impact Journal</p>
            </a>
          </li>
  <!--Publication other Journal MyCite-->
         <li class="nav-item">
           <a href="pages/sectionC/PublicationOtherJournal.php" class="nav-link">
             <i class="far fa-circle nav-icon"></i>
           <p>(C) Total Publication Other Journal</p>
          </a>
        </li>
  <!--Research Books-->
  <li class="nav-item">
    <a href="#" class="nav-link">
      <i class="far fa-circle nav-icon"></i>
    <p>(d)Research Books</p><i class="fas fa-angle-left right"></i>
   </a>
         <ul class="nav nav-treeview">
        <!--i-->
                <li class="nav-item">
                  <a href="pages/sectionC/ResearchBookIndex.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>(i) Index Book</p>
                  </a>
                </li>
           <!--ii-->
                <li class="nav-item">
                  <a href="pages/sectionC/ResearchBookNoIndex.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>(ii) No Index Book</p>
                  </a>
                </li>
          </ul>
  </li>
  
  <!--Policy Paper-->
  <li class="nav-item">
    <a href="pages/sectionC/Policy.php" class="nav-link">
      <i class="far fa-circle nav-icon"></i>
    <p>(e) Policy Paper</p>
   </a>
  </li>
  <!--Other Publications-->
      <li class="nav-item">
        <a href="pages/sectionC/OtherPub.php" class="nav-link">
         <i class="far fa-circle nav-icon"></i>
         <p>(f) Other Publications</p>
       </a>
      </li>
    </ul>
  </li>
  <!--C2-->
     <li class="nav-item">
          <a href="pages/sectionC/Research_Grant.php" class="nav-link">
             <i class="far fa-circle nav-icon"></i>
               <p>C2 Research Grants
                 
              </p>
          </a>  
      </li>
    <!--C3-->
    <li class="nav-item">
      <a href="pages/sectionC/Research_Project.php" class="nav-link">
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
        <a href="pages/sectionD/PhDs_Graduated.php" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>D1 PhDs Graduate
            
          </p>
        </a>
  </li>
  <!--D2-->
     <li class="nav-item">
          <a href="pages/sectionD/Master_Graduated.php" class="nav-link">
             <i class="far fa-circle nav-icon"></i>
               <p>D2 Master Graduated
                 
              </p>
          </a>  
      </li>
  <!--D3-->
        <li class="nav-item">
      <a href="pages/sectionD/PhDs_Enrollment.php" class="nav-link">
         <i class="far fa-circle nav-icon"></i>
           <p>D3 PhDs Enrollment</br>
             
          </p>
      </a>  
  </li>
    <!--D5-->
    <li class="nav-item">
      <a href="pages/sectionD/Internal_PhDs.php" class="nav-link">
         <i class="far fa-circle nav-icon"></i>
           <p>D4 International Postgraduate</br>
             
          </p>
      </a>  
  </li>
  <!--D6-->
  <li class="nav-item">
    <a href="pages/sectionD/Qualification_Postgraduate.php" class="nav-link">
       <i class="far fa-circle nav-icon"></i>
         <p>D5 Qualitification Level Postgraduate </br>
           
        </p>
    </a>  
  </li>
  <!--D7-->
  <li class="nav-item">
    <a href="pages/sectionD/Felllowship_Grant.php" class="nav-link">
       <i class="far fa-circle nav-icon"></i>
         <p>D6 Total Fellowship <br>Grant Awards</br>
           
        </p>
    </a>  
  </li>
  <!--D8-->
  <li class="nav-item">
    <a href="pages/sectionD/Post_Doctoral.php" class="nav-link">
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
           <a href="pages/sectionE/Patent.php" class="nav-link">
             <i class="far fa-circle nav-icon"></i>
             <p>(a) patent Granted</p>
           </a>
         </li>
         <li class="nav-item">
         <a href="pages/sectionE/Patent_Filled.php" class="nav-link">
             <i class="far fa-circle nav-icon"></i>
             <p>(b) Patent Filed</p>
           </a>
         </li>
         <li class="nav-item">
         <a href="pages/sectionE/Patent_InvGrant.php" class="nav-link">
             <i class="far fa-circle nav-icon"></i>
             <p>(c) Invention Granted</p>
           </a>
         </li>
         <li class="nav-item">
         <a href="pages/sectionE/Patent_InvFil.php" class="nav-link">
             <i class="far fa-circle nav-icon"></i>
             <p>(d) Invention Filed</p>
           </a>
         </li>
       </ul>
     </li>
 <!--E2-->
    <li class="nav-item">
         <a href="pages/sectionE/Commercial.php" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
              <p>E2 Commercial</p>
         </a>  
     </li>
   <!--E3-->
   <li class="nav-item">
     <a href="pages/sectionE/Technology.php" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
          <p>E3 Technology</br></p>
     </a>  
 </li>
 <!--E4-->
 <li class="nav-item">
   <a href="pages/sectionE/IPRs.php" class="nav-link">
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
           <a href="pages/sectionE/Startup.php" class="nav-link">
             <i class="far fa-circle nav-icon"></i>
             <p>(a) Spinn off Companies</p>
           </a>
         </li>
         <li class="nav-item">
         <a href="pages/sectionE/StartupNew.php" class="nav-link">
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
                  <a href="pages/sectionF/Training_Course.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>(a) Training Course</p>
                  </a>
                </li>
           <!--b-->
                <li class="nav-item">
                  <a href="pages/sectionF/Post_Fees.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>(b) Postgraduate Fee</p>
                  </a>
                </li>
          </ul>
  </li>
  <!--F2-->
     <li class="nav-item">
          <a href="pages/sectionF/Orga_Seminar.php" class="nav-link">
             <i class="far fa-circle nav-icon"></i>
               <p>F2 Gross Organising, Seminar & Knowledge Program</p>
          </a>  
      </li>
<!--F3-->
<li class="nav-item">
     <a href="#" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
          <p>F3 Gross products commercialization/technology know-how licensing/outright
            <i class="fas fa-angle-left right"></i>
         </p>
     </a>  
     <ul class="nav nav-treeview">
       <!--a-->
               <li class="nav-item">
                 <a href="pages/sectionF/Product.php" class="nav-link">
                   <i class="far fa-circle nav-icon"></i>
                   <p>(a) Product Commercial</p>
                 </a>
               </li>
          <!--b-->
               <li class="nav-item">
                 <a href="pages/sectionF/Technology.php" class="nav-link">
                   <i class="far fa-circle nav-icon"></i>
                   <p>(b) Technology Know-How Licensing/Sold outright Sale </p>
                 </a>
               </li>
         </ul>
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
                  <a href="pages/sectionF/Consultancies.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>(a) Consultancies</p>
                  </a>
                </li>
           <!--b-->
                <li class="nav-item">
                  <a href="pages/sectionF/Hospital.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>(b) Hospitality</p>
                  </a>
                </li>
  
            <!--c-->
            <li class="nav-item">
              <a href="pages/sectionF/Lab_Service.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>(c) Lab Services Fee</p>
              </a>
            </li>
          </ul>
      </li>
       <!--F6-->
       <li class="nav-item">
        <a href="pages/sectionF/Gift_Donation.php" class="nav-link">
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
        <a href="" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>G1 Participation international inter-Institution
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
  
        <ul class="nav nav-treeview">
          <!--Indexed (Articel)-->
                  <li class="nav-item">
                    <a href="pages/sectionG/InternationalMoa.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>(a) Total International MoA Signed & Stamped</p>
                    </a>
                  </li>
             <!--Impact Journal-->
                  <li class="nav-item">
                    <a href="pages/sectionG/Staff_International.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>(b) Total Staff Involved In Joint Research Project Under International MoA</p>
                    </a>
                  </li>
            </ul>
       </li>
  <!--G2-->
     <li class="nav-item">
          <a href="pages/sectionG/Abroad.php" class="nav-link">
             <i class="far fa-circle nav-icon"></i>
               <p>G2 Staff Sent Abroad For Research Activities
                 
              </p>
          </a>  
      </li>
    <!--G3-->
    <li class="nav-item">
      <a href="pages/sectionG/International.php" class="nav-link">
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
                <a href="pages/sectionG/National.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>(a) Total Number National MoAs Signed & Stamped</p>
                </a>
              </li>
         <!--b-->
              <li class="nav-item">
                <a href="pages/sectionG/Staff_Research.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>(b) Total Number Staff Involved Joint Research Project Under MoA</p>
                </a>
              </li>
           </ul>
       </li>
  
  <!--G5-->
  <li class="nav-item">
    <a href="pages/sectionG/Membership.php" class="nav-link">
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
        <a href="pages/sectionH/Laboratory.php" class="nav-link">
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
                      <a href="pages/sectionH/TittleBook.php" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>(a) Titles of Book</p>
                      </a>
                    </li>
               <!--b-->
                    <li class="nav-item">
                      <a href="pages/sectionH/OnlineBook.php" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>(b)  Online Titles of Books</p>
                      </a>
                    </li>
              <!--c-->
              <li class="nav-item">
                <a href="pages/sectionH/Journal_Subscribe.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>(c)Journal Subscribe</p>
                </a>
              </li>
              </ul>
            </li> 
          </ul>
        </li>
  <!--Seksyen H End-->
  <!--Extra Compactment Start-->
            <!-- <li class="nav-header">Extra Informatin</li>
            <li class="nav-item">
              <a href="pages/calendar.php" class="nav-link">
                <i class="nav-icon far fa-calendar-alt"></i>
                <p>
                  Calendar
                </p>
              </a>
            </li>
           
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon far fa-envelope"></i>
                <p>
                  Mailbox
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/mailbox/mailbox.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Inbox</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/mailbox/compose.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Compose</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/mailbox/read-mail.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Read</p>
                  </a>
                </li>
              </ul>
            </li> -->
           
            <!-- <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon far fa-plus-square"></i>
                <p>
                  Extras
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>
                      Login & Register
                      <i class="fas fa-angle-left right"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="pages/examples/login.php" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Login</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="pages/examples/register.php" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Register</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="pages/examples/forgot-password.php" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Forgot Password</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="pages/examples/recover-password.php" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Recover Password</p>
                      </a>
                    </li>
                  </ul>
                </li> -->
  
            <!-- <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-search"></i>
                <p>
                  Search
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/search/simple.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Simple Search</p>
                  </a>
                </li>
                
              </ul>
            </li> -->
          </li>         
          </ul>
        </nav>
  <!-- /.sidebar-menu -->
      </div>
   <!-- /.sidebar -->
    </aside>
  </div>
  <!-- ./wrapper -->
  <!--Extra Compactment End-->
  <!-- Paste the content of sidebar.php here -->
  
  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="Logo2.png" alt="Logo" height="60" width="60">
  </div>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home.php">Home</a></li>
              <li class="breadcrumb-item active">Main Menu</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
  <!--DS Page -->
  <style>
    body {
        font-family: Arial, sans-serif;
    }
    .stepper {
        display: flex;
        justify-content: space-between;
        margin-bottom: 20px;
    }
    .step {
        width: calc(100% / 6);
        text-align: center;
        position: relative;
    }
    .step::before {
        content: '';
        width: 30px;
        height: 30px;
        border-radius: 50%;
        border: 2px solid #ccc;
        display: block;
        margin: 0 auto 10px;
        background-color: white;
        position: relative;
    }
    .step::after {
        content: '';
        width: calc(100% + 10px);
        height: 2px;
        background-color: #ccc;
        display: block;
        position: absolute;
        top: 15px;
        left: -5px;
        z-index: -1;
    }
    .step.active::before {
        background-color: #007bff;
        border-color: #007bff;
    }
    .step.active + .step::after {
        background-color: #007bff;
    }
    .step.active::after {
        background-color: #007bff;
    }
    .step span {
        display: block;
        font-size: 14px;
        color: #666;
    }
</style>
</head>
<div class="stepper" data-mdb-stepper-vertical-breakpoint="md" data-mdb-stepper-mobile-breakpoint="xs">
    <div class="step active">
    <a href="#"><span>Page Seksyen A</span></a>
    <!-- <a href="pages/sectionA/Staff.php"><span>Page Seksyen A</span></a> -->
    </div>
    <div class="step">
        <span>Page Seksyen B</span>
        <!-- <a href=""><span>Page Seksyen</span></a> -->
    </div>
    <div class="step">
        <span>Page Seksyen C</span>
        <!-- <a href=""><span>Page Seksyen</span></a> -->
    </div>
    <div class="step">
        <span>Page Seksyen D</span>
        <!-- <a href=""><span>Page Seksyen</span></a> -->
    </div>
    <div class="step">
        <span>Page Seksyen E</span>
        <!-- <a href=""><span>Page Seksyen</span></a> -->
    </div>
    <div class="step">
        <span>Page Seksyen F</span>
        <!-- <a href=""><span>Page Seksyen</span></a> -->
    </div>
    <div class="step">
        <span>Page Seksyen G</span>
        <!-- <a href=""><span>Page Seksyen</span></a> -->
    </div>
    <div class="step">
        <span>Page Seksyen F</span>
        <!-- <a href=""><span>Page Seksyen</span></a> -->
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"></script>
              </div>
          </section>
  </div>

  <footer class="main-footer">
    <strong>Copyright &copy; 2024 <a href="https://www.kias.edu.my/">KiasExperts</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b>1.0
    </div>
  </footer>

  <aside class="control-sidebar control-sidebar-dark">
  </aside>
</div>
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
</body>
  </html>

