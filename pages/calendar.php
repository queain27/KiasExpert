<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Calendar</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- fullCalendar -->
  <link rel="stylesheet" href="../plugins/fullcalendar/main.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <link rel="shortcut icon" href="../images/Logo2.png" type="image/x-icon">

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->  

  <!-- Paste the content of sidebar.php here -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../home.php" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../contactus.php" class="nav-link">Contact</a>
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
        <a class="nav-link" data-widget="logout" href="../index.php" role="button">
          <i class="fas fa-power-off"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../home.php" class="brand-link">
      <img src="../images/Logo1.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">KiasExperts</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../images/Logo2.png" img-circle elevation-2 alt="User Image">
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
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../home.php" class="nav-link active">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>Main Menu</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="examples/profile.php" class="nav-link">
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
       <a href="sectionA/Staff.php" class="nav-link">
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
         <a href="sectionA/UndergraduateStud.php" class="nav-link">
             <i class="far fa-circle nav-icon"></i>
             <p>Student Undergraduate</p>
           </a>
         </li>
         <li class="nav-item">
         <a href="sectionA/PostgraduateStud.php" class="nav-link">
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
     <a href="sectionB/CriticalMass.php" class="nav-link">
         <i class="far fa-circle nav-icon"></i>
         <p> B1  Critical Mass</p>
       </a> 
     </li>
 
     <li class="nav-item">
     <a href="sectionB/PhDsPQ.php" class="nav-link">
         <i class="far fa-circle nav-icon"></i>
         <p> B2 Total Number Staff Phd or Professional</p>
       </a> 
     </li>
 
     <li class="nav-item">
       <a href="sectionB/ResearchCohort.php" class="nav-link">
         <i class="far fa-circle nav-icon"></i>
         <p> B3 Research Experience <br>3 Cohorts</p>
       </a> 
     </li>
 
     <li class="nav-item">
       <a href="sectionB/Award.php" class="nav-link">
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
           <a href="sectionC/IndexJournalArticle.php" class="nav-link">
             <i class="far fa-circle nav-icon"></i>
             <p>(a) Total Number Publication Indexed Journal</p>
           </a>
         </li>
 <!--Impact Journal-->
          <li class="nav-item">
            <a href="sectionC/ImpactJournal.php" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>(b) Total Number Impact Journal</p>
            </a>
          </li>
  <!--Publication other Journal MyCite-->
         <li class="nav-item">
           <a href="sectionC/PublicationOtherJournal.php" class="nav-link">
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
                  <a href="sectionC/ResearchBookIndex.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>(i) Index Book</p>
                  </a>
                </li>
           <!--ii-->
                <li class="nav-item">
                  <a href="sectionC/ResearchBookNoIndex.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>(ii) No Index Book</p>
                  </a>
                </li>
          </ul>
 </li>
 
 <!--Policy Paper-->
 <li class="nav-item">
   <a href="sectionC/Policy.php" class="nav-link">
     <i class="far fa-circle nav-icon"></i>
   <p>(e) Policy Paper</p>
  </a>
 </li>
 <!--Other Publications-->
     <li class="nav-item">
       <a href="sectionC/OtherPub.php" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>(f) Other Publications</p>
      </a>
     </li>
   </ul>
 </li>
 <!--C2-->
    <li class="nav-item">
         <a href="sectionC/Research_Grant.php" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
              <p>C2 Research Grants
                
             </p>
         </a>  
     </li>
   <!--C3-->
   <li class="nav-item">
     <a href="sectionC/Research_Project.php" class="nav-link">
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
       <a href="sectionD/PhDs_Graduated.php" class="nav-link">
         <i class="far fa-circle nav-icon"></i>
         <p>D1 PhDs Graduate
           
         </p>
       </a>
 </li>
 <!--D2-->
    <li class="nav-item">
         <a href="sectionD/Master_Graduated.php" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
              <p>D2 Master Graduated
                
             </p>
         </a>  
     </li>
 <!--D3-->
 <li class="nav-item">
         <a href="sectionD/PhDs_Enrollment.php" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
              <p>D3 Phds Rnrollment
                
             </p>
         </a>  
     </li>
   <!--D5-->
   <li class="nav-item">
     <a href="sectionD/Internal_PhDs.php" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
          <p>D4 International Postgraduate</br>
            
         </p>
     </a>  
 </li>
 <!--D6-->
 <li class="nav-item">
   <a href="sectionD/Qualification_Postgraduate.php" class="nav-link">
      <i class="far fa-circle nav-icon"></i>
        <p>D5 Qualitification Level Postgraduate </br>
          
       </p>
   </a>  
 </li>
 <!--D7-->
 <li class="nav-item">
   <a href="sectionD/Felllowship_Grant.php" class="nav-link">
      <i class="far fa-circle nav-icon"></i>
        <p>D6 Total Fellowship <br>Grant Awards</br>
          
       </p>
   </a>  
 </li>
 <!--D8-->
 <li class="nav-item">
   <a href="sectionD/Post_Doctoral.php" class="nav-link">
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
       <a href="sectionE/Patent.php" class="nav-link">
         <i class="far fa-circle nav-icon"></i>
         <p>E1 Patent
           
         </p>
       </a>
 </li>
 <!--E2-->
    <li class="nav-item">
         <a href="sectionE/Commercial.php" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
              <p>E2 Commercial
                
             </p>
         </a>  
     </li>
   <!--E3-->
   <li class="nav-item">
     <a href="sectionE/Technology.php" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
          <p>E3 Technology</br>
            
         </p>
     </a>  
 </li>
 <!--E4-->
 <li class="nav-item">
   <a href="sectionE/IPRs.php" class="nav-link">
      <i class="far fa-circle nav-icon"></i>
        <p>E4 IPRs</br>
          
       </p>
   </a>  
 </li>
 <!--E5-->
 <li class="nav-item">
   <a href="sectionE/Startup.php" class="nav-link">
      <i class="far fa-circle nav-icon"></i>
        <p>E5 Startup</br>
          
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
                  <a href="sectionF/Training_Course.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>(a) Training Course</p>
                  </a>
                </li>
           <!--b-->
                <li class="nav-item">
                  <a href="sectionF/Post_Fees.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>(b) Postgraduate Fee</p>
                  </a>
                </li>
          </ul>
  </li>
 <!--F2-->
    <li class="nav-item">
         <a href="sectionF/Orga_Seminar.php" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
              <p>F2 Gross Organising, Seminar & Knowledge Program</p>
         </a>  
     </li>
   <!--F3-->
   <li class="nav-item">
     <a href="sectionF/Product_Technology.php" class="nav-link">
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
                 <a href="sectionF/Consultancies.php" class="nav-link">
                   <i class="far fa-circle nav-icon"></i>
                   <p>(a) Consultancies</p>
                 </a>
               </li>
          <!--b-->
               <li class="nav-item">
                 <a href="sectionF/Hospital.php" class="nav-link">
                   <i class="far fa-circle nav-icon"></i>
                   <p>(b) Hospitality</p>
                 </a>
               </li>
 
           <!--c-->
           <li class="nav-item">
             <a href="sectionF/Lab_Service.php" class="nav-link">
               <i class="far fa-circle nav-icon"></i>
               <p>(c) Lab Services Fee</p>
             </a>
           </li>
         </ul>
     </li>
      <!--F6-->
      <li class="nav-item">
       <a href="sectionF/Gift_Donation.php" class="nav-link">
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
                   <a href="sectionG/InternationalMoa.php" class="nav-link">
                     <i class="far fa-circle nav-icon"></i>
                     <p>(a) Total International MoA Signed & Stamped</p>
                   </a>
                 </li>
            <!--Impact Journal-->
                 <li class="nav-item">
                   <a href="sectionG/Staff_International.php" class="nav-link">
                     <i class="far fa-circle nav-icon"></i>
                     <p>(b) Total Staff Involved In Joint Research Project Under International MoA</p>
                   </a>
                 </li>
           </ul>
      </li>
 <!--G2-->
    <li class="nav-item">
         <a href="sectionG/Abroad.php" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
              <p>G2 Staff Sent Abroad For Research Activities
                
             </p>
         </a>  
     </li>
   <!--G3-->
   <li class="nav-item">
     <a href="sectionG/International.php" class="nav-link">
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
               <a href="sectionG/National.php" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p>(a) Total Number National MoAs Signed & Stamped</p>
               </a>
             </li>
        <!--b-->
             <li class="nav-item">
               <a href="sectionG/Staff_Research.php" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p>(b) Total Number Staff Involved Joint Research Project Under MoA</p>
               </a>
             </li>
          </ul>
      </li>
 
 <!--G5-->
 <li class="nav-item">
   <a href="sectionG/Membership.php" class="nav-link">
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
       <a href="sectionH/Laboratory.php" class="nav-link">
         <i class="far fa-circle nav-icon"></i>
         <p>H1 Laboratory/Research facilities
           <i class="fas fa-angle-left right"></i>
         </p>
       </a>
 </li>
 <!--H2-->
    <li class="nav-item">
         <a href="#" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
              <p>H2 Library Facilities
                
             </p>
         </a>  
         <ul class="nav nav-treeview">
           <!--a-->
                   <li class="nav-item">
                     <a href="sectionH/TittleBook.php" class="nav-link">
                       <i class="far fa-circle nav-icon"></i>
                       <p>(a) Titles of Book</p>
                     </a>
                   </li>
              <!--b-->
                   <li class="nav-item">
                     <a href="sectionH/OnlineBook.php" class="nav-link">
                       <i class="far fa-circle nav-icon"></i>
                       <p>(b)  Online Titles of Books</p>
                     </a>
                   </li>
             <!--c-->
             <li class="nav-item">
               <a href="sectionH/Journal_Subscribe.php" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p>(c) Journal Subscribe</p>
               </a>
             </li>
             </ul>
           </li> 
         </ul>
       </li>
 <!--Seksyen H End-->
      <!-- Extra Compactment Start
          <li class="nav-header">Extra Information</li>
          <li class="nav-item">
            <a href="calendar.php" class="nav-link active">
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
                <a href="mailbox/mailbox.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inbox</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="mailbox/compose.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Compose</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="mailbox/read-mail.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Read</p>
                </a>
              </li>
            </ul>

          <li class="nav-item">
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
                    <a href="examples/login.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Login </p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="examples/register.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Register </p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="examples/forgot-password.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Forgot Password </p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="examples/recover-password.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Recover Password </p>
                    </a>
                  </li>
                </ul>
              </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-search"></i>
              <p>
                Search
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="search/simple.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Simple Search</p>
                </a>
              </li>
            </ul> -->
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
 <!-- ./wrapper -->
  <!--Extra Compactment End-->
  <!-- Paste the content of sidebar.php here -->
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Calendar</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../home.php">Home</a></li>
              <li class="breadcrumb-item active">Calendar</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">
            <div class="sticky-top mb-3">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Draggable Events</h4>
                </div>
                <div class="card-body">
                  <!-- the events -->
                  <div id="external-events">
                    <div class="external-event bg-success">Lunch</div>
                    <div class="external-event bg-warning">Go home</div>
                    <div class="external-event bg-info">Do homework</div>
                    <div class="external-event bg-primary">Work on UI design</div>
                    <div class="external-event bg-danger">Sleep tight</div>
                    <div class="checkbox">
                      <label for="drop-remove">
                        <input type="checkbox" id="drop-remove">
                        remove after drop
                      </label>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Create Event</h3>
                </div>
                <div class="card-body">
                  <div class="btn-group" style="width: 100%; margin-bottom: 10px;">
                    <ul class="fc-color-picker" id="color-chooser">
                      <li><a class="text-primary" href="#"><i class="fas fa-square"></i></a></li>
                      <li><a class="text-warning" href="#"><i class="fas fa-square"></i></a></li>
                      <li><a class="text-success" href="#"><i class="fas fa-square"></i></a></li>
                      <li><a class="text-danger" href="#"><i class="fas fa-square"></i></a></li>
                      <li><a class="text-muted" href="#"><i class="fas fa-square"></i></a></li>
                    </ul>
                  </div>
                  <!-- /btn-group -->
                  <div class="input-group">
                    <input id="new-event" type="text" class="form-control" placeholder="Event Title">

                    <div class="input-group-append">
                      <button id="add-new-event" type="button" class="btn btn-primary">Add</button>
                    </div>
                    <!-- /btn-group -->
                  </div>
                  <!-- /input-group -->
                </div>
              </div>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card card-primary">
              <div class="card-body p-0">
                <!-- THE CALENDAR -->
                <div id="calendar"></div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <strong>Copyright &copy; 2024 <a href="https://www.kias.edu.my/">KiasExperts</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b>1.0
    </div>
  </footer>
  
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- jQuery UI -->
<script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- fullCalendar 2.2.5 -->
<script src="../plugins/moment/moment.min.js"></script>
<script src="../plugins/fullcalendar/main.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {

    /* initialize the external events
     -----------------------------------------------------------------*/
    function ini_events(ele) {
      ele.each(function () {

        // create an Event Object (https://fullcalendar.io/docs/event-object)
        // it doesn't need to have a start or end
        var eventObject = {
          title: $.trim($(this).text()) // use the element's text as the event title
        }

        // store the Event Object in the DOM element so we can get to it later
        $(this).data('eventObject', eventObject)

        // make the event draggable using jQuery UI
        $(this).draggable({
          zIndex        : 1070,
          revert        : true, // will cause the event to go back to its
          revertDuration: 0  //  original position after the drag
        })

      })
    }

    ini_events($('#external-events div.external-event'))

    /* initialize the calendar
     -----------------------------------------------------------------*/
    //Date for the calendar events (dummy data)
    var date = new Date()
    var d    = date.getDate(),
        m    = date.getMonth(),
        y    = date.getFullYear()

    var Calendar = FullCalendar.Calendar;
    var Draggable = FullCalendar.Draggable;

    var containerEl = document.getElementById('external-events');
    var checkbox = document.getElementById('drop-remove');
    var calendarEl = document.getElementById('calendar');

    // initialize the external events
    // -----------------------------------------------------------------

    new Draggable(containerEl, {
      itemSelector: '.external-event',
      eventData: function(eventEl) {
        return {
          title: eventEl.innerText,
          backgroundColor: window.getComputedStyle( eventEl ,null).getPropertyValue('background-color'),
          borderColor: window.getComputedStyle( eventEl ,null).getPropertyValue('background-color'),
          textColor: window.getComputedStyle( eventEl ,null).getPropertyValue('color'),
        };
      }
    });

    var calendar = new Calendar(calendarEl, {
      headerToolbar: {
        left  : 'prev,next today',
        center: 'title',
        right : 'dayGridMonth,timeGridWeek,timeGridDay'
      },
      themeSystem: 'bootstrap',
      //Random default events
      events: [
        {
          title          : 'All Day Event',
          start          : new Date(y, m, 1),
          backgroundColor: '#f56954', //red
          borderColor    : '#f56954', //red
          allDay         : true
        },
        {
          title          : 'Long Event',
          start          : new Date(y, m, d - 5),
          end            : new Date(y, m, d - 2),
          backgroundColor: '#f39c12', //yellow
          borderColor    : '#f39c12' //yellow
        },
        {
          title          : 'Meeting',
          start          : new Date(y, m, d, 10, 30),
          allDay         : false,
          backgroundColor: '#0073b7', //Blue
          borderColor    : '#0073b7' //Blue
        },
        {
          title          : 'Lunch',
          start          : new Date(y, m, d, 12, 0),
          end            : new Date(y, m, d, 14, 0),
          allDay         : false,
          backgroundColor: '#00c0ef', //Info (aqua)
          borderColor    : '#00c0ef' //Info (aqua)
        },
        {
          title          : 'Birthday Party',
          start          : new Date(y, m, d + 1, 19, 0),
          end            : new Date(y, m, d + 1, 22, 30),
          allDay         : false,
          backgroundColor: '#00a65a', //Success (green)
          borderColor    : '#00a65a' //Success (green)
        },
        {
          title          : 'Click for Google',
          start          : new Date(y, m, 28),
          end            : new Date(y, m, 29),
          url            : 'https://www.google.com/',
          backgroundColor: '#3c8dbc', //Primary (light-blue)
          borderColor    : '#3c8dbc' //Primary (light-blue)
        }
      ],
      editable  : true,
      droppable : true, // this allows things to be dropped onto the calendar !!!
      drop      : function(info) {
        // is the "remove after drop" checkbox checked?
        if (checkbox.checked) {
          // if so, remove the element from the "Draggable Events" list
          info.draggedEl.parentNode.removeChild(info.draggedEl);
        }
      }
    });

    calendar.render();
    // $('#calendar').fullCalendar()

    /* ADDING EVENTS */
    var currColor = '#3c8dbc' //Red by default
    // Color chooser button
    $('#color-chooser > li > a').click(function (e) {
      e.preventDefault()
      // Save color
      currColor = $(this).css('color')
      // Add color effect to button
      $('#add-new-event').css({
        'background-color': currColor,
        'border-color'    : currColor
      })
    })
    $('#add-new-event').click(function (e) {
      e.preventDefault()
      // Get value and make sure it is not null
      var val = $('#new-event').val()
      if (val.length == 0) {
        return
      }

      // Create events
      var event = $('<div />')
      event.css({
        'background-color': currColor,
        'border-color'    : currColor,
        'color'           : '#fff'
      }).addClass('external-event')
      event.text(val)
      $('#external-events').prepend(event)

      // Add draggable funtionality
      ini_events(event)

      // Remove event from text input
      $('#new-event').val('')
    })
  })
</script>
</body>
</html>
