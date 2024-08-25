<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Research Books Indexed</title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../../dist/css/adminlte.min.css">
  <link rel="shortcut icon" href="../../../images/Logo2.png" type="image/x-icon">
  <link rel="stylesheet" href="css/style.css">


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
  <link rel="shortcut icon" href="../../../images/Logo2.png" type="image/x-icon">
    <script>
        $(document).ready(function(){
            $('#example').DataTable();
        });
       </script>
</head>
 <!-- Paste the content of sidebar.php here -->
 <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../../Lecture/homelect.php" class="nav-link">Home</a>
      </li>
    </ul>
        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
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
        <a class="nav-link" data-widget="logout" href="../../../index.php" role="button">
          <i class="fas fa-power-off"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../Lecture/homelect.php" class="brand-link">
      <img src="../../../images/Logo1.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">KiasExperts</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../../images/Logo2.png" img-circle elevation-2 alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">Lecture Kias</a>
        </div>
      </div>

      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item menu-open">
              <a href="../homelect.php" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>Main Menu</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="../Auth/profile.php" class="nav-link">
                <i class="nav-icon 	fas fa-user-circle"></i>
                <p>Profile</p>
              </a>
        </li>
<!--Seksyen A Start-->
<li class="nav-header">Section MyRA</li>
 <li class="nav-item">
   <a href="#" class="nav-link">
     <i class="nav-icon fas fa-info-circle icon"></i>
     <p>General Information
       <i class="fas fa-angle-left right"></i>
     </p>
   </a>
   <ul class="nav nav-treeview">
   <li class="nav-item">
       <a href="#" class="nav-link">
         <i class="far fa-circle nav-icon"></i>
         <p>Staff Information
           <i class="fas fa-angle-left right"></i>
         </p>
       </a>
       <ul class="nav nav-treeview">
         <li class="nav-item">
           <a href="../LectA/Staff.php" class="nav-link">
             <i class="far fa-circle nav-icon"></i>
             <p>(a) Staff</p>
           </a>
         </li>
         <li class="nav-item">
         <a href="../LectA/Staff_Active.php" class="nav-link">
             <i class="far fa-circle nav-icon"></i>
             <p>(b) Staff Active</p>
           </a>
         </li>
         <li class="nav-item">
         <a href="../LectA/Staff_Foreign.php" class="nav-link">
             <i class="far fa-circle nav-icon"></i>
             <p>(c) Staff Foreign</p>
           </a>
         </li>
         <li class="nav-item">
         <a href="../LectA/Staff_ST.php" class="nav-link">
             <i class="far fa-circle nav-icon"></i>
             <p>(d) Staff S&T</p>
           </a>
         </li>
         <li class="nav-item">
         <a href="../LectA/Staff_NONST.php" class="nav-link">
             <i class="far fa-circle nav-icon"></i>
             <p>(e) Staff Non S&T</p>
           </a>
         </li>
       </ul>
     </li>
   </ul>
 </li>
 <!--Seksyen A End-->
 <!--Seksyen B Start-->
 <li class="nav-item">
   <a href="#" class="nav-link">
     <i class="nav-icon fas fa-chart-bar icon"></i>
     <p>Quantity & Quality Of Researchs 
       <i class="fas fa-angle-left right"></i>
     </p>
   </a>
   <ul class="nav nav-treeview">
     <li class="nav-item">
     <a href="../LectB/CriticalMass.php"class="nav-link">
         <i class="far fa-circle nav-icon"></i>
         <p>Critical Mass</p>
       </a> 
     </li>
     <li class="nav-item">
       <a href="../LectB/PhDsPQ.php"class="nav-link">
         <i class="far fa-circle nav-icon"></i>
         <p>Total Number Staff Phd or Professional</p>
       </a> 
     </li>
     <li class="nav-item">
       <a href="../LectB/ResearchCohort.php" class="nav-link">
         <i class="far fa-circle nav-icon"></i>
         <p>Research Experience <br>3 Cohorts</p>
       </a> 
     </li>
     <li class="nav-item">
       <a href="../LectB/Award.php" class="nav-link">
         <i class="far fa-circle nav-icon"></i>
         <p>Awards National & International</p>
       </a> 
     </li>
   </ul>
 </li>
<!--Seksyen B End-->
<!--Seksyen C Start-->
<li class="nav-item">
   <a href="#" class="nav-link">
     <i class="nav-icon fas fa-graduation-cap icon"></i>
     <p>Quantity & Quality Of Researchs 
       <i class="fas fa-angle-left right"></i>
     </p>
   </a>
   <ul class="nav nav-treeview">
     </li>
     <li class="nav-item">
       <a href="#" class="nav-link">
         <i class="far fa-circle nav-icon"></i>
         <p>Publications
           <i class="fas fa-angle-left right"></i>
         </p>
       </a>
       <ul class="nav nav-treeview">
 <!--Indexed (Articel)-->
         <li class="nav-item">
           <a href="../LectC/IndexJournalArticle.php" class="nav-link">
             <i class="far fa-circle nav-icon"></i>
             <p>(a) Total Number Publication Indexed Journal</p>
           </a>
         </li>
        <!--Impact Journal-->
        <li class="nav-item">
            <a href="../LectC/ImpactJournal.php" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>(b) Total Number Impact Journal</p>
            </a>
          </li>
  <!--Publication other Journal MyCite-->
         <li class="nav-item">
           <a href="../LectC/PublicationOtherJournal.php" class="nav-link">
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
                  <a href="../LectC/ResearchBookIndex.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>(i) Index Book</p>
                  </a>
                </li>
           <!--ii-->
                <li class="nav-item">
                  <a href="../LectC/ResearchBookNoIndex.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>(ii) No Index Book</p>
                  </a>
                </li>
          </ul>
 </li>
<!--Policy Paper-->
<li class="nav-item">
    <a href="../LectC/Policy.php" class="nav-link">
      <i class="far fa-circle nav-icon"></i>
    <p>(e) Policy Paper</p>
   </a>
  </li>
    <!--Other Publications-->
    <li class="nav-item">
        <a href="../LectC/OtherPub.php" class="nav-link">
         <i class="far fa-circle nav-icon"></i>
         <p>(f) Other Publications</p>
       </a>
      </li>
    </ul>
  </li>
 <!--C2-->
    <li class="nav-item">
         <a href="../LectC/Research_Grant.php" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
              <p>Research Grants
                
             </p>
         </a>  
     </li>
   <!--C3-->
   <li class="nav-item">
     <a href="../LectC/Research_Project.php" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
          <p>Research Project <br>Performance</br>
            
         </p>
     </a>  
 </li>
    </ul>  
 </li>
 <!--Seksyen C End-->
 <!--Seksyen D Start-->
 <!--Seksyen D End-->
  <!--Seksyen E Start-->
 <!-- <li class="nav-header">Section E</li> -->
 <li class="nav-item">
   <a href="#" class="nav-link">
     <i class="nav-icon fas fa-file-alt icon"></i>
     <p>Innovation
       <i class="fas fa-angle-left right"></i>
     </p>
   </a>
   <ul class="nav nav-treeview">
     </li>
     <li class="nav-item">
     <a href="#" class="nav-link">
         <i class="far fa-circle nav-icon"></i>
         <p>Patent
           <i class="fas fa-angle-left right"></i>
         </p>
       </a>
       <ul class="nav nav-treeview">
         <li class="nav-item">
           <a href="../LectE/Patent.php" class="nav-link">
             <i class="far fa-circle nav-icon"></i>
             <p>(a) patent Granted</p>
           </a>
         </li>
         <li class="nav-item">
         <a href="../LectE/Patent_Filled.php" class="nav-link">
             <i class="far fa-circle nav-icon"></i>
             <p>(b) Patent Filed</p>
           </a>
         </li>
         <li class="nav-item">
         <a href="../LectE/Patent_InvGrant.php" class="nav-link">
             <i class="far fa-circle nav-icon"></i>
             <p>(c) Invention Granted</p>
           </a>
         </li>
         <li class="nav-item">
         <a href="../LectE/Patent_InvFil.php" class="nav-link">
             <i class="far fa-circle nav-icon"></i>
             <p>(d) Invention Filed</p>
           </a>
         </li>
       </ul>
     </li>
 <!--E2-->
    <li class="nav-item">
         <a href="../LectE/Commercial.php" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
              <p>Commercial</p>
         </a>  
     </li>
   <!--E3-->
   <li class="nav-item">
     <a href="../LectE/Technology.php" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
          <p>Technology</br></p>
     </a>  
 </li>
 <!--E4-->
 <li class="nav-item">
   <a href="../LectE/IPRs.php" class="nav-link">
      <i class="far fa-circle nav-icon"></i>
        <p>IPRs</br>
          
       </p>
   </a>  
 </li>
 <!--E5-->
 <li class="nav-item">
 <a href="#" class="nav-link">
         <i class="far fa-circle nav-icon"></i>
         <p>Startup
           <i class="fas fa-angle-left right"></i>
         </p>
       </a>
       <ul class="nav nav-treeview">
         <li class="nav-item">
           <a href="../LectE/Startup.php" class="nav-link">
             <i class="far fa-circle nav-icon"></i>
             <p>(a) Spinn off Companies</p>
           </a>
         </li>
         <li class="nav-item">
         <a href="../LectE/StartupNew.php" class="nav-link">
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
     <p>Professional Service & Gifts
       <i class="fas fa-angle-left right"></i>
     </p>
   </a>
   <ul class="nav nav-treeview">
      </li>
   <!--F3-->
   <li class="nav-item">
     <a href="#" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
          <p>Gross products commercialization/technology know-how licensing/outright
            <i class="fas fa-angle-left right"></i>
         </p>
     </a>  
     <ul class="nav nav-treeview">
       <!--a-->
               <li class="nav-item">
                 <a href="../LectF/Product.php" class="nav-link">
                   <i class="far fa-circle nav-icon"></i>
                   <p>(a) Product Commercial</p>
                 </a>
               </li>
          <!--b-->
               <li class="nav-item">
                 <a href="../LectF/Technology.php" class="nav-link">
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
          <p>Financial transaction
            <i class="fas fa-angle-left right"></i>
         </p>
     </a>  
     <ul class="nav nav-treeview">
       <!--a-->
               <li class="nav-item">
                 <a href="../LectF/Consultancies.php" class="nav-link">
                   <i class="far fa-circle nav-icon"></i>
                   <p>(a) Consultancies</p>
                 </a>
               </li>
          <!--b-->
               <li class="nav-item">
                 <a href="../LectF/Hospital.php" class="nav-link">
                   <i class="far fa-circle nav-icon"></i>
                   <p>(b) Hospitality</p>
                 </a>
               </li>
 
           <!--c-->
           <li class="nav-item">
             <a href="../LectF/Lab_Service.php" class="nav-link">
               <i class="far fa-circle nav-icon"></i>
               <p>(c) Lab Services Fee</p>
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
     <p>Networing & Linkages
       <i class="fas fa-angle-left right"></i>
     </p>
   </a>
   <ul class="nav nav-treeview">
     </li>
     <li class="nav-item">
       <a href="#" class="nav-link">
         <i class="far fa-circle nav-icon"></i>
         <p>Participation international inter-Institution
           <i class="fas fa-angle-left right"></i>
         </p>
       </a>
 
       <ul class="nav nav-treeview">
         <!--Indexed (Articel)-->
                 <li class="nav-item">
                   <a href="../LectG/InternationalMoa.php" class="nav-link">
                     <i class="far fa-circle nav-icon"></i>
                     <p>(a) Total International MoA Signed & Stamped</p>
                   </a>
                 </li>
            <!--Impact Journal-->
                 <li class="nav-item">
                   <a href="../LectG/Staff_International.php" class="nav-link">
                     <i class="far fa-circle nav-icon"></i>
                     <p>(b) Total Staff Involved In Joint Research Project Under International MoA</p>
                   </a>
                 </li>
           </ul>
      </li>
 <!--G2-->
    <li class="nav-item">
         <a href="../LectG/Abroad.php" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
              <p>Staff Sent Abroad For Research Activities
                
             </p>
         </a>  
     </li>
   <!--G3-->
   <li class="nav-item">
     <a href="../LectG/International.php" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
          <p>Membership in International Academic/Professional bodies/Associations/NGOs</br>
         </p>
     </a>  
 </li>
 <!--G4-->
 <li class="nav-item">
   <a href="#" class="nav-link">
      <i class="far fa-circle nav-icon"></i>
        <p>Participation in National Inter-Institution research related activities under MoA</br>
           <i class="fas fa-angle-left right"></i>
       </p>
   </a>  
   <ul class="nav nav-treeview">
     <!--a-->
             <li class="nav-item">
               <a href="../LectG/National.php" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p>(a) Total Number National MoAs Signed & Stamped</p>
               </a>
             </li>
        <!--b-->
             <li class="nav-item">
               <a href="../LectG/Staff_Research.php" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p>(b) Total Number Staff Involved Joint Research Project Under MoA</p>
               </a>
             </li>
          </ul>
      </li>
 <!--G5-->
 <li class="nav-item">
   <a href="../LectG/Membership.php" class="nav-link">
      <i class="far fa-circle nav-icon"></i>
      <p>Membership in national Academic/ Professional Bodies/Associations/NGOs</p>
  </a>  
 </li>
    </ul>  
 </li>
 <!--Seksyen G End-->
 <!--Seksyen H Start-->
 <!--Seksyen H End-->
        </ul>
      </nav>
    </div>
  </aside>
  <!-- Paste the content of sidebar.php here -->
<body>
<!--Main Content-->
<!--TableStart-->  
<h3><center><font color="" face="Cambria Math">Research Book Indexed<font><br></center></h3>
<br><br>
<div class="container pt-50">
    <div class="table-responsive">
        <table id="example" class="table table-striped" style="width:250%">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Staff ID</th>
                    <th>Staff Name</th>     
                    <th>Authors</th>              
                    <th>Industrial (Y/N)</th>
                    <th>International (Y/N)</th>
                    <th>National (Y/N)</th>
                    <th>Book Tittle</th>
                    <th>Publisher</th>
                    <th>ISBN</th>
                    <th>Book Status</th>
                    <th>Link Device</th>
                    <th>Remarks</th>    
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>

                </tr>
               
            </tbody>
            <tfoot>
                <tr>
                    <th></th>
                    <th>Staff ID</th>
                    <th>Staff Name</th>     
                    <th>Authors</th>              
                    <th>Industrial (Y/N)</th>
                    <th>International (Y/N)</th>
                    <th>National (Y/N)</th>
                    <th>Book Tittle</th>
                    <th>Publisher</th>
                    <th>ISBN</th>
                    <th>Book Status</th>
                    <th>Link Device</th>
                    <th>Remarks</th>    
                </tr>
            </tfoot>
        </table>
    </div>
</div> 
<!--Main Content-->
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
<script src="../../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../../dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    //Add text editor
    $('#compose-textarea').summernote()
  })
</script>
</body>
</html>