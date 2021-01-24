<?php
include('admin/function/function.php'); 
$motion = new Motion();
$send_feed_back_btn = isset($_POST['send_feed_back_btn']);

if($send_feed_back_btn)
{
    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $date = date('Y-m-d');
    
$motion->new_feed_back($fname,$email,$phone,$message,$date);
}

?>

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
        <i class="icofont-phone"></i><a href="#"> +251118691799  +251968969696</a>
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
  <a href="index.html" class="logo mr-auto"><img src="assets/img/logo-03.png" alt="" class="img-fluid">Motion</a>
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.html">Home</a></li>
          <li><a href="about.html">About</a></li>
          <li><a href="services.html">Services</a></li>
          <li><a href="projects.html">Projects</a></li>
        
          
          <li><a href="news.html">News</a></li>

        </ul>
      </nav><!-- .nav-menu -->

      <a href="#" class="appointment-btn scrollto">Registration Now</a>
      

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-ride="carousel">

      <div class="carousel-item active">
        <div class="carousel-container">
          <h3 class="animate__animated animate__fadeInDown">Welcome to<br> </h3>
          <h2 class="animate__animated animate__fadeInDown"><strong>Motion Consultancy & Training</strong> </h2> 
          <h4 class="animate__animated animate__fadeInUp color1">Trust Keeps Motion!</h4>
          <div class="d-lg-flex">
            
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox btn-watch-video" data-vbtype="video" data-autoplay="true"> Watch Video <i class="icofont-play-alt-2"></i></a>
          </div>
        </div>
      </div>
      </div>
  </section><!-- End Hero -->

  <main id="main">
    

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content">
              <h3>Why Motion Consultancy & Training?</h3>
              <p>
                
                •	Center, where Consultancy, Research, and Training overlap for higher performance and integrity, <br>
                •	Station, to refill energy and live with passion and full confidence, <br>
                •	Easy route, to find out our true purpose and reason of life, <br>
                •	An abode of wisdom where you can reach to climax of happiness after finish line, <br>
 
              </p>
              <div class="text-center crad1">
                <a href="about.html" class="more-btn">Read More </a>
              </div>
            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="icofont-binoculars"></i>
                    <h4>Vision</h4>
                    <p>To be a company that equate with the best habitable country in the world, and positively influence the profit, the people, and the planet.</p>
                    <div class="text-center crad1">
                      <a href="about.html" class="more-btn">Read More </a>
                    </div>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="icofont-bullseye"></i>
                    <h4>Mision</h4>
                    <p>To live a day as a century, consider a drop as an ocean, an individual as a society, relationship as a pr
                      and vice versa in all thoughts and actions through catalyzing Motion that ultimately leads to Change 
                      and progressive Development of the society.</p>
                    <div class="text-center crad1">
                      <a href="about.html" class="more-btn">Read More </a>
                    </div>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-left ">
                  <div class="icon-box Value mt-4 mt-xl-0">
                    <i class="icofont-law"></i> 
                    <h4>Value</h4>
                    <p>The essence of Motion is rooted around, the following, shared values and principles<br>
                      1.	Trust and Respect <br>
                      2.	Timeliness <br>
                      3.	Originality <br>
                      4.	Win-Win endeavor <br>
                      5.	Action and Impact <br>
                      </p>
                    <div class="text-center crad1">
                      <a href="about.html" class="more-btn">Read More</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>
    <!-- End Why Us Section -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>
<div class="servicess">
        <div class="row">
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon">
              <i class="icofont-dashboard-web"></i></div>
              <h4><a href="">Consultancy</a></h4>
              <p>Motion pulled fertile brains from diverse disciplines and profound life experience to meet the dynamic world with competent  
            </p>
              <div class="text-center text-center1 ">
                <a href="services.html" class="more-btn">Read More <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon">
              <i class="icofont-presentation"></i></div>
              <h4><a href="">Training</a></h4>
              <p>Motion regularly identifies contemporary and emerging thematic issues that have direct 
                relevance to Personal, Organizational, and Societal development and provides </p>
              <div class="text-center text-center1">
                <a href="services.html" class="more-btn">Read More <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon">
              <i class="icofont-handshake-deal"></i></div>
              <h4><a href="">Research and Development</a></h4>
              <p>Motion is committed to devote its resources 
                on inquisitive and triggering Researches and Studies that contributes to the progress and advancement of the company</p>
              <div class="text-center text-center1">
                <a href="services.html" class="more-btn">Read More <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><i class="icofont-id"></i></div>
              <h4><a href="">Corporate Social Responsibility</a></h4>
              <p> One of the peculiarities of motion is its commitment to synchronize business activities with social development. </p>
              <div class="text-center text-center1">
                <a href="services.html" class="more-btn">Read More <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div>

        </div>
      </div>
      </div>
    </section>
    <!-- ======= About Section ======= -->
    
    <section id="about" class="about">
      <div class="container-fluid">

        <div class="row">
           <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
            <img src="assets/img/projects-div-pic-01.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
            <h3>Projects</h3>
            <p class="font-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
           <?php $motion->projects_home();?>

            <div class="text-center text-center1">
              <a href="projects.html" class="more-btn">Other projects <i class="bx bx-chevron-right"></i></a>
            </div>
          </div>


        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container">

        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="icofont-chart-histogram"></i>
              <span data-toggle="counter-up">85</span>
              <p>Projects</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="icofont-certificate-alt-1"></i>
              <span data-toggle="counter-up">18</span>
              <p>Cretificate</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="icofont-ui-user-group"></i>
              <span data-toggle="counter-up">8</span>
              <p>Team Members</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="icofont-business-man"></i>
              <span data-toggle="counter-up">150</span>
              <p>Clients</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Services Section ======= -->
    <!-- End Services Section -->

    <!-- ======= Appointment Section ======= -->
    <section id="appointment" class="appointment section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Feedback</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <form action="" method="post" >
          <div class="form-row">
            <div class="col-md-4 form-group">
              <input type="text" name="fname" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group">
              <input type="tel" class="form-control" name="phone" id="phone" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
          </div>
          

          <div class="form-group">
            <textarea class="form-control" name="message" rows="5" placeholder="Message (Optional)"></textarea>
            <div class="validate"></div>
          </div>
          
          <div class="text-center"><button class="btn btn-success" name="send_feed_back_btn" type="submit">Send Feedback</button></div>
        </form>

      </div>
    </section><!-- End Appointment Section -->

    <!-- ======= Departments Section ======= -->
    <section id="departments" class="departments">
      <div class="container">

        <div class="section-title">
          <h2>Certificates</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-toggle="tab" href="#tab-1">Sample</a>
              </li>
            <?php echo $motion->certificate_title() ?>
            </ul>
          </div>
          <div class="col-lg-9 mt-4 mt-lg-0">
            <div class="tab-content">
      

              <?php echo $motion->certification_descr()?>
           
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Departments Section -->
    <section id="testimonials" class="news">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>news</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="owl-carousel testimonials-carousel">
<?php echo $motion->news();?>

   

        </div>

      </div>
    </section>
    <!-- ======= Doctors Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Team</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">

      <?php echo $motion->team_members(); ?>

        

        

          
         

        </div>

      </div>
    </section>
   <!-- End Doctors Section -->
   <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Frequently Asked Questions</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="faq-list">
          <ul>
          

          <?php echo $motion->faq();?>

          </ul>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->
    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container">

        <div class="section-title">
          <h2>Gallery</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>
      </div>

      <div class="container-fluid">
        <div class="row no-gutters">

<?php echo $motion->gallary(); ?>

        </div>

      </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Contact Section ======= -->
     <!-- ======= Contact Section ======= -->
     <section id="contact" class="contact section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
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
              <strong>Mobile:</strong> +251968969696<br>
              <strong>Email:</strong>abebel@motionethiopia.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.html">Home</a></li>
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