<?php
include('admin/function/function.php'); 
$motion = new Motion();?>
  <!DOCTYPE html>
  <html lang="en">
  
  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
  
    <title>motion-Ethiopia</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
  
    <!-- Favicons -->
    <link href="assets/img/logo-03.png" rel="icon">
    <link href="assets/img/logo-03.png" rel="apple-touch-icon">
  
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  
    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
  
    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
  
    <!-- =======================================================
    * Template Name: Medilab - v2.1.0
    * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
  </head>
  
  <body>
  
    <!-- ======= Top Bar ======= -->
    <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
      <div class="container d-flex">
        <div class="contact-info mr-auto">
          <i class="icofont-envelope"></i> <a href="mailto:abebel@motionethiopia.com">abebel@motionethiopia.com</a>
          <i class="icofont-phone"></i><a href="#"> +251118691799  +251911475001</a>
          <i class="icofont-google-map"></i><a href="#">P. O. Box 62753, ADDIS ABABA, ETHIOPIA</a> 
        </div>
        <div class="social-links">
  
          <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
  
      
          <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>
        </div>
      </div>
    </div>
  
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
      <div class="container d-flex align-items-center">
          <!--<h1 hidden class="logo mr-auto"><a href="index.html">Motion</a></h1>-->
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="index.php" class="logo mr-auto"><img src="assets/img/logo-03.png" alt="" class="img-fluid">Motion</a>
        <nav class="nav-menu d-none d-lg-block">
        
          <ul>
          <li class="active"><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="projects.php">Projects</a></li>
          
            
            <li><a href="news.php">News</a></li>
  
          </ul>
        </nav><!-- .nav-menu -->
  

      
      </div>
    </header><!-- End Header -->
  
   <!-- End Breadcrumbs Section -->
  
  
    <main id="main">
      <section class="breadcrumbs">
          <div class="container">
      
            <div class="d-flex justify-content-between align-items-center">
              <h2>News</h2>
              <ol>
                <li><a href="index.html">Home</a></li>
                <li>News</li>
              </ol>
            </div>
      
          </div>
        </section>
  
      <!-- ======= Why Us Section ======= -->
      <!-- End Why Us Section -->
      <section id="services" class="services2 ">
          <div class="container" data-aos="fade-up">
      <h1>News</h1>
          <?php echo $motion->news_page();?>
                
                
         
    </div>
        </section>
     
        <!-- ======= Contact Section ======= -->
        <section id="services" class="services section-bg">
            <div class="container" data-aos="fade-up">
      
              <div class="section-title">
                <h2>Download File</h2>
                
              </div>
              <div class="services5">
                <div class="row">
                  
                  <?php echo $motion->downloadable_files(); ?>
               
              
                  </div>
                  </div>
                  
      
                
               
              </div>
      
             
          </section><!-- End Contact Section -->
       <!-- End Contact Section -->
  
  
      
      <!-- ======= Contact Section ======= -->
      <section id="contact" class="contact section-bg">
        <div class="container" data-aos="fade-up">
  
          <div class="section-title">
            <h2>Contact</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga 
                eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo 
                qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
          </div>
  
          <div class="row">
            <div class="col-lg-6">
              <div class="info-box mb-4">
                <i class="bx bx-map"></i>
                <h3>Our Address</h3>
                <p>P. O. Box 62753,  
                 
                  ADDIS ABABA,
                  ETHIOPIA </p>
              </div>
            </div>
  
            <div class="col-lg-3 col-md-6">
              <div class="info-box  mb-4">
                <i class="bx bx-envelope"></i>
                <h3>Email Us</h3>
                <p>abebel@motionethiopia.com</p>
              </div>
            </div>
  
            <div class="col-lg-3 col-md-6">
              <div class="info-box  mb-4">
                <i class="bx bx-phone-call"></i>
                <h3>Call Us</h3>
                <p>+251118691799</p>
              </div>
            </div>
  
          </div>
  
         
      </section><!-- End Contact Section -->
   <!-- End Contact Section -->
  
    </main><!-- End #main -->
  
    <!-- ======= Footer ======= -->
    <footer id="footer">
  
      <div class="footer-top">
        <div class="container">
          <div class="row">
  
            <div class="col-lg-3 col-md-6 footer-contact">
              <h3>Motion conceltancy and Training</h3>
              <p>
                P. O. Box 62753,  <br>
                 
                ADDIS ABABA,<br>
                ETHIOPIA <br><br>
                <strong>Phone:</strong>+251118691799<br>
                <strong>Mobile:</strong> +251911475001<br>
                <strong>Email:</strong>abebel@motionethiopia.com<br>
              </p>
            </div>
  
            <div class="col-lg-2 col-md-6 footer-links">
              <h4>Useful Links</h4>
              <ul>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="about.html">About us</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="services.html">Services</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="projects.html">Projects</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="news.html">News</a></li>
              </ul>
            </div>
  
            <div class="col-lg-3 col-md-6 footer-links">
              <h4>Our Services</h4>
              <ul>
                <li><i class="bx bx-chevron-right"></i> <a href="#">service1</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">service2</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">service3</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">service4</a></li>
                        </ul>
            </div>
  
            
  
      <div class="container d-md-flex py-4">
  
        <div class="mr-md-auto text-center text-md-left">
          <div class="copyright">
            &copy; Copyright <strong><span>Motion</span></strong>. All Rights Reserved
          </div>
          <div class="credits">
            
            Designed by <a href="https://Filenber.com/">Filenber-Technlogys</a>
          </div>
        </div>
        <div class="social-links text-center text-md-right pt-3 pt-md-0">
         
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          
        
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>
    </footer><!-- End Footer -->
    
  
    <div id="preloader"></div>
    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
  
    <!-- Vendor JS Files -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/venobox/venobox.min.js"></script>
    <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="assets/vendor/counterup/counterup.min.js"></script>
    <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
  
    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
  
  </body>
  
  </html>