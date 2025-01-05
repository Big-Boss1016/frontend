<?php
  if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

?>
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
    <link rel="stylesheet" href="./style.css">

</head>
<body>

    <!-- ================== HEADER ================== -->
    <header class="header" id="header">
        <div  class="container">
          <nav class="nav" id="nav">
            <div class="logo">
           <a href="index.php"> <img src="img/logo.png" alt=""></a>  
            </div>
            <ul class="nav-list">
              <li class="nav-item"><a href="index.php">Home</a></li>
              <li class="nav-item"><a href="about.php">About</a></li>
              <li class="nav-item"><a href="#">Service</a></li>
              <li class="nav-item"><a href="#">Contact</a></li>
              <li class="nav-item ctn"><a href="vendor/members.php">Request A Member's Data</a></li>
            </ul>
            <div class="toggle"><i class="fa fa-bars"></i></div>
          </nav>
          <div class="header-content">
            <h3>Well come To Almuni Portal</h3>
            <h1>Kyungdong University</h1>
            <p class="quote">“The success of any school can be measured by the contribution the alumni make to our national life.” - John F. Kennedy</p>
            <p>Stay connected with fellow alumni, explore career opportunities, and participate in community events.</p>
            <button class="ctn"><a href="about.php">Learn More</a></button>
          </div>
          <div class="buttons">
            <a href="vendor/login.php"><button type="button">Log In</button></a>
            <a href="vendor/signup.php"><button type="button">Sign Up</button></a>
        </div>
        </div>
    </header> 

<section class="services" id="services">
  <div data-aos="fade-down" class="container">
    <div class="title">
      <h1>How can I help you?</h1>
      <h2>Student Services</h2>
      <p>KDU Global stands out as an exceptional international educational institution with an extensive array of student care and support services. The services include, but not limited to, airport pick-up on arrival, dormitory settlement and adaptation, comprehensive counselling and supervision, part-time job assistance, academic engagement and cultural integration programs, career guidance, 'one-stop' immigration solutions, special language and communication classes, transportation and facilities support, health and safety, financial management guidance and human rights as well as customized support services for the needs of individual students. KDU Global strives to provide competitive education and best international student care in the country!</p>
    </div>

    <div class="service-wrapper grid">
      <div class="service">
        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
        <h1>Airport Pick-up on Arrival</h1>
        <p>asdfasdfasdf</p>
      </div>
      <div class="service">
        <i class="fa fa-object-ungroup" aria-hidden="true"></i>
        <h1>Development</h1>
        <p>asdfasdfasdf</p>
      </div>
      <div class="service">
        <i class="fa fa-paper-plane-o" aria-hidden="true"></i>
        <h1>Marketing</h1>
        <p>asdfasdfasdf</p>
      </div>
      <div class="service">
        <i class="fa fa-lightbulb-o" aria-hidden="true"></i>
        <h1>Social Media</h1>
        <p>asdfasdfasdf</p>
      </div>
      <div class="service">
        <i class="fa fa-credit-card-alt" aria-hidden="true"></i>
        <h1>E-Commerce</h1>
        <p>asdfasdfasdf</p>
      </div>
      <div class="service">
        <i class="fa fa-user-circle-o" aria-hidden="true"></i>
        <h1>Help & Support</h1>
        <p>asdfasdfasdf</p>
      </div>
    </div>
  </div>
</section>

<!--=====Portfolio======-->
<section class="portfolio" id="portfolio">
  <div data-aos="zoom-down"  class="container">
    <div class="title">
      <h1>Portfolio</h1>
      <p>ajksdgfaosufdgajshgfjahshgdfljasfd</p>

   </div>

   <div class="portfolio-wrapper grid">
      <img src="img/team1.jpg" alt="">
      <img src="img/team2.jpg" alt="">
      <img src="img/team3.jpg" alt="">
      <img src="img/team4.jpg" alt="">
   </div>

   <div class="button-wrapper">
      <button class="ctn">Explore More</button>
   </div>
   

  </div>
</section>

<!--======Members=====-->
<section class="customers" id="customers">
  <div class="container">
    <div class="title">
      <h1>Our Members</h1>
      <p>asdkujgasdkufgasdfgaslkjdf</p>
    </div>

    <div class="customers-wrapper grid">
      <img src="img/customer1.png" alt="">
      <img src="img/customer2.png" alt="">
      <img src="img/customer3.png" alt="">
      <img src="img/customer4.png" alt="">
    </div>

  </div>
</section>

<!--=====Testionial=====-->
<section class="testimonial" id="testimonial">
  <div class="container">
    <div class="title">
      <h1>Go KDU GO GLOBAL</h1>
      <p>"Jump- Start Your Career!<br>We have more than 40 yeares<br> </p>
    </div>
    <div class="review">
      <img src="img/Capture.JPG" alt="">
      <h2>Dean John Lee</h2>
      <h4>Founder, President, KDU</h4>
    </div>
  </div>
</section>

<!--Get Started-->
<section class="getstarted">
  <div class="ctn-wrapper">
    <div class="text">
    <h2>Terms and Conditions</h2>
        <p>Welcome to KDU Connect. By accessing or using our website, you agree to comply with and be bound by the following terms and conditions, which, in conjunction with our privacy policy, govern the relationship between KDU Connect and users of this platform.</p>

        <h3>Usage Policy</h3>
        <p>You agree to use the KDU Connect platform solely for lawful purposes. Any use of this platform that may infringe upon the rights of others, restrict or inhibit the use of the platform by others, or engage in any activities that are defamatory, offensive, or illegal is strictly prohibited.</p>

        <h3>Content Disclaimer</h3>
        <p>The information and materials provided on this website are intended for general information purposes only. KDU Connect reserves the right to modify or remove content at any time without prior notice. While we strive to provide accurate and up-to-date information, we make no guarantees regarding the accuracy, completeness, or reliability of the information on this website.</p>

        <h3>Governing Law</h3>
        <p>These terms and conditions shall be governed by and construed in accordance with the laws of the country where KDU University is based. By using this platform, you consent to the exclusive jurisdiction of the local courts.</p>
    </div>
  </div>
</section>
<footer>
  <div class="container">
    <div class="col">
        <div class="logo">
          <img src="img/logo.png" alt="">
        </div>
        <ul class="social-icons">
          <li><div class="fa fa-facebook"><a href="https://www.facebook.com/KDUGlobalCampus"></a> </div></li>
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