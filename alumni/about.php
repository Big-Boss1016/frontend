<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@600&family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
   
    <title>Almuni Portal</title>


    <!-- ========= AOS CSS ========= -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- ========= Font Awesome CDN ========= -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- ========= Custom CSS ========= -->
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="style.css">
 

</head>
<body>

    <!-- ================== HEADER ================== -->
    <header class="header" id="header">
        <div class="container">
          <nav class="nav" id="nav">
            <div class="logo">
            <a href="index.php"> <img src="img/logo.png" alt=""></a>  
            </div>
            <ul class="nav-list">
              <li class="nav-item"><a href="index.php">Home</a></li>
              <li class="nav-item"><a href="about.php">About</a></li>
              <li class="nav-item"><a href="">Service</a></li>
              <li class="nav-item"><a href="">Contact</a></li>
              <li class="nav-item ctn"><a href="vendor/members.php">Request A Member's Data</a></li>
            </ul>
            <div class="toggle"><i class="fa fa-bars"></i></div>
          </nav>

        <sectio class="title" id="title">
            <h1>Kyungdong University</h1>
            <div class="abt">
                
                <h2>KDU at a Glance</h2>
                <p> Founded in 1981, Kyungdong University (KDU) has emerged as one of the leading universities nurturing professionals in demand both in Korea and abroad. Currently over eight thousand students are enrolled at KDU’s three campuses throughout the country – Global Campus in Goseong-gun (Gangwon-do), Metropole Campus in Yangju-si (Gyeonggi-do), and Medical Campus in Wonju-si (Gangwon-do).</p>

                <h2>Global Campus</h2>
                <p>Competent Professionals and Global Leaders
                KDU Global offers various unssdergraduate degree programs in English and Korean as well as language and vocational training courses for international students. All undergraduate curriculums incorporate five concurrent major-specialization tracks and liberal education courses aimed at enhancing language, intrapersonal and interpersonal skills of students. The ultimate mission of KDU Global is to guarantee professional and personal success of its graduates by equipping them with the competencies sought after in industries and communities of the 21st century.
                </p>
                <h2>Metropole Campus</h2>
                <p>
                Skills for Urban Industries
                Undergraduate degree programs at KDU Metropole are designed to accommodate the needs of students who wish to build their careers in public sectors and urban industries. All courses are taught in Korean.
                </p>
                <h2>
                Medical Campus
                </h2>
                <p>
                Talents in Healthcare
                KDU Medical offers numerous undergraduate degree programs in healthcare services and medical technologies. The Medical Campus is a prominent intensive training site for medical sector professions in the country. All courses are taught in Korean.
                </p>
                <div class="loc">
                <h2>
                     Three Campuses, Three Frontiers, One Vision!
                </h2>
                <img src="img/glance_img.jpg" alt="">
             </div>
            </div>
          </sectio>
        </div>
    </header> 



<footer>
  <div class="container">
    <div class="col">
        <div class="logo">
          <img src="./img/img/logo.png" alt="">
        </div>
        <p>ajskdgfasjgdfasdf </p>
        <ul class="social-icons">
          <li><div class="fa fa-facebook"></div></li>
          <li><div class="fa fa-twitter"></div></li>
          <li><div class="fa fa-gmail"></div></li>
          <li><div class="fa fa-youtube"></div></li>
        </ul>
      </div>

      <div class="col">
        <h3>Company</h3>
        <ul class="footer-links">
          <li>Home</li>
          <li>About</li>
          <li>Services</li>
          <li>Contact</li>
        </ul>
      </div>

      <div class="col">
        <h3>Business</h3>
        <ul class="footer-links">
          <li>Poject</li>
          <li>Customers</li>
          <li>Services</li>
          <li>Contact</li>
        </ul>
      </div>
      <div class="col">
        <h3>In Touch</h3>
        <ul class="footer-links">
          <li>info@mail.com</li>
          <li>01082872</li>
          <li>address</li>
        </ul>
      </div>
  </div>
  <hr>
</footer>



    <!-- ================== AOS ================== -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script> 
      AOS.init({
        
      });

    </script>
    

    <script>
      let menuBtn = document.querySelector('.toggle')
      let navList = document.querySelector('.nav-list')

      menuBtn.addEventListener('click',()=>{
        navList.classList.toggle('active')
      });
    </script>

  
</body>
</html>