<!DOCTYPE html>
<html lang="en">
<head>
    <!-- <meta charset="UTF-8"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Kias experts</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lugrasimo&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sedan&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet"> -->
  <style>
    .dropdown-menu a {
      color: black; /* Ensuring that the text is visible */
    }
  </style>
    <link rel="shortcut icon" href="images/Logo2.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">

</head>
<body>
<section class="header">
    <nav>
        <a href="landing.html"><img src="images/Logo2.1.png"></a>
        <div class="nav-link" id="navLinks">
           <i class="fa fa-times" aria-hidden="true" onclick="hideMenu()"></i>
         <ul class="nav">
              <li class="nav-item"><a class="nav-link" href="#">HOME</a></li>
              <li class="nav-item dropdown">
                   <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">LOGIN </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                 <a class="dropdown-item" href="pages/examples/login.php">Admin</a><br>
                 <a class="dropdown-item" href="pages/Lecture/Auth/login.php">Lecturer</a>
      </div>
    </li>
  </ul>
            </li>        
            </ul>
        </div>
        <i class="fa fa-bars" aria-hidden="true" onclick="showMenu()"></i>
    </nav> 
    <div class="text-box">
    <h1>Kolej University Islam Antarabangsa Sultan Ismail Petra (KIAS)</h1>
    <h1></h1>
    <p>Kias Experts System is a database developed to record, organize, and analyze data for MyRA and SETARA audits. 
        <br>The literature review analyzes the types of data required by MyRA and SETARA based on the parts that have been defined.
    </p>

    <a href="#" class="hero-btn">Visit Us To Know More</a><br><br>
    <div class="container">
    <!-- <form method="get" target="_blank" class="search-bar" action="expert_search.php" id="searchType">    -->
    <form action="https://www.google.com/search" method="get" class="search-bar">
    <div class="input-group">
        <button type="button" class="btn btn-lg btn-default dropdown-toggle" data-toggle="dropdown">
            <span id="search_concept">Name</span>
            <span class="caret"></span>
        </button>
        <ul class="dropdown-menu dropdown-menu-left" role="menu">
            <li><a href="#" onclick="changeSearchConcept('Name')">Name</a></li>
            <li><a href="#" onclick="changeSearchConcept('Faculty')">Faculty</a></li>
            <li><a href="#" onclick="changeSearchConcept('Expertise')">Expertise</a></li>
        </ul>
    </div>
    <select class="search-bar" name="faculty" id="selfac" aria-label="Choose faculty" style="display:none; font-size: 14px;" id="input_fac">
        <option></option>  
        <option value='QH'>Al-Quran & Hadis</option>
        <option value='DI'>Dakwah & Pembangunan Insan</option>
        <option value='AS'>Pengurusan Al-Syariah</option>
        <option value='BA'>Pengajian Bahasa Arab</option>
        <option value='IK'>Pengajian Muamalat</option>
        <option value='PI'>Pengajian Pendidikan Islam</option>
        <option value='PP'>Pusat Pengajian Teras</option>
        <option value='US'>Pengurusan Usuluddin</option>
        <option value='IT'>Teknologi Maklumat & Multimedia</option>   
    </select>
    <input type="text" name="q" class="search-bar" placeholder="Search Term..." id="input_item">
    <!-- <input type="text" name="search_front" class="search-bar" placeholder="Search Term..." id="input_item"> -->
    <button type="submit"><img src="images/search.png"></button>
   </form>
     </div>
<!-- search -->
</div>
</section>
<!-- fx search -->
<script>
    function changeSearchConcept(concept) {
    document.getElementById('search_concept').innerText = concept;
    if (concept === 'Faculty') {
        document.getElementById('input_item').style.display = 'none';
        document.getElementById('selfac').style.display = 'inline-block';
    } else {
        document.getElementById('input_item').style.display = 'inline-block';
        document.getElementById('selfac').style.display = 'none';
    }
}

document.getElementById("searchForm").addEventListener("submit", function(event){
    event.preventDefault();
    var searchConcept = document.getElementById("search_concept").innerText;
    var searchTerm = document.getElementById("input_item").value;
    var facultyValue = document.getElementById("selfac").value;
    // Here you can perform further actions like submitting the form via AJAX
    console.log("Search Concept:", searchConcept);
    console.log("Search Term:", searchTerm);
    console.log("Faculty Value:", facultyValue);
});

</script>
<!-- Lecture-->
    <section class="lecture">
       <h1>Lecture Information</h1>
       <div class="row">
        <div class="lecture-col"  align="left">
        <center><img src="images/user.jpg"></center>
               <h3>ASSOCIATE PROF. DR. MOHAMMAD NAZRI BIN MOHD NOR</h3>
               <p>Mohammad Nazri is an associate professor in the Department of Management and Marketing, Universiti Malaya. 
                  He obtained his Doctor of Business Administration (DBA) from the University Technology MARA (UiTM), 
                  MBA and BBA from the National University of Malaysia (UKM)</div>
           <div class="lecture-col"  align="left">
           <center><img src="images/user1.jpg"></center>
               <h3>DR. RIZAL BIN MOHD RAZMAN</h3>
               <p>Rizal was part of the very first batch of Sport Science students that graduated from University of Malaya in 1999. 
                In year 2000, he went on to pursue an MSc (Human Movement) 
                at the University of Western Australia, graduated the following year and started to teach in UM in 2001.</p>
            </div>

          <div class="lecture-col"  align="left">
          <center><img src="images/user3.jpg"></center>
               <h3>DR. MOHD FAIRUZ BIN ZAMANI</h3>
               <p>Dr. Mohd Fairuz Zamani (better known as Fairuz Zamani) is currently attached to the Faculty of Creative Arts, Universiti Malaya (UM) as an academic. 
                He had served at various universities around the country, amongst were Akademi Seni Budaya dan Warisan Kebangsaan (ASWARA)</p>
               </div>
      </div>
    </section>
<!-- End lecture-->

<!-- research -->
<section class="research">
       <h1>Research Information</h1>
       <div class="row">
           <div class="research-col" align="left">
               <h3>Recent Publication</h3>
               <p>Afzal, Suhail; Mokhlis, Hazlie; Illias, Hazlee Azil; Bajwa, Abdullah Akram; Mekhilef, Saad; Mubin, Marizan; Muhammad, Munir Azam; Shareef, Hussain (2024).
                  Modelling Spatiotemporal Impact of Flash Floods On Power Distribution System 
                 and Dynamic Service Restoration With Renewable Generators Considering Interdependent Critical Loads. 
                 Iet Generation Transmission & Distribution</p>
              
              <br><p align="left"><b>- Prof. Dr. Saad Mekhilef
              <br>- Professor Ir. Dr. Hazlie Bin Mokhlis
              <br>- Associate Prof. Dr. Marizan Binti Mubin
              <br>- Associate Prof. Ir. Dr. Hazlee Azil Bin Illias</p></b>
           </div>  

           <div class="research-col" align="left">
               <h3>Total Publication As Of Date</h3>
                 <p> - JSCIENTIFIC REPORTS
                 <br>- INORGANIC CHEMISTRY COMMUNICATIONS
                 <br>- ENVIRONMENTAL RESEARCH
                 <br>- EXPERT SYSTEMS WITH APPLICATIONS
                 <br>- JOURNAL OF ENVIRONMENTAL MANAGEMENT
              </p>
           </div>  

           <div class="research-col" align="left">
               <h3>Latest Awarded Grant</h3>
               <center><img src="images/award.jpg"></center>
               <p>Pembangunan Model Sekolah Menengah Agama Negeri (Sman) Sabah Lestari Ke 
                   Arah Merealisasikan Pelan Pembangunan Sabah Maju Jaya</p>
                <p><b> Dr. Abd. Aziz Bin Rekan</p></b>

              <p>Kesenian Melayu Merentas Disiplin Ilmu: Nyanyian, Muzik, Seni Lakon dan Visual</p>
              <p><b>- Dr. Shafa'Atussara Binti Silahudin</p></b>
           </div>  
      </div>
    </section>
<!-- research -->
<!-- contact -->
      <section class="cta">
        <h1>Enroll For Our Various Online Course<br>Anywhere From The World
        </h1>
            <a href="" class="hero-btn">CONTACT US</a>
      </section>

<!-- contact -->

<!-- footer -->
     <section class="footer">
         <h4>About Us</h4>
            <p>Sebuah Institusi Pendidikan Tinggi Rabbani. Bertekad untuk melahirkan graduan yang progresif, berilmu, 
               <br>bertaqwa dan berakhlak mulia yang dapat memberi khidmat kepada ummah dengan penuh dedikasi dan berkesan.      
           </p>
              <div class="icons">
                <a href="https://www.facebook.com/kiasnilampuri/"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
                <i class="fa fa-whatsapp" aria-hidden="true"></i>
                <a href="https://www.kias.edu.my/"><i class="fa fa-chrome" aria-hidden="true"></i></a>
                <a href="https://www.instagram.com/explore/locations/1006686211/kolej-universiti-islam-antarabangsa-sultan-ismail-petra-kias/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
               </div>
             <p>Made with <i class="fa fa-heart-o"></i> By KiasExperts</p>
      </section>
<!-- footer -->
<!-- Javascript for toggle Menu -->
    <script>
        var navLinks=document.getElementById("navLinks");
        function showMenu()
        {
            navLinks.style.right = 0;
        }
        function hideMenu(){
            navLinks.style.right = "-200px";
        }
   </script>
<!-- Javascript for toggle Menu -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

  </body>
</html>