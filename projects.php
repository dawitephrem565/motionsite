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
    <a href="index.html" class="logo mr-auto"><img src="assets/img/logo-03.png" alt="" class="img-fluid">Motion</a>
        <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.html">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="services.html">Services</a></li>
          <li><a href="projects.php">Projects</a></li>
        
          
          <li><a href="news.php">News</a></li>

        </ul>
        </nav><!-- .nav-menu -->
  
        <a href="#" class="appointment-btn scrollto">Registration Now</a>
        
  
      </div>
    </header><!-- End Header -->
  
   <!-- End Breadcrumbs Section -->
  
  
    <main id="main">
      <section class="breadcrumbs">
          <div class="container">
      
            <div class="d-flex justify-content-between align-items-center">
              <h2>Project</h2>
              <ol>
                <li><a href="index.html">Home</a></li>
                <li>project</li>
              </ol>
            </div>
      
          </div>
        </section>
  
      <!-- ======= Why Us Section ======= -->
      <!-- End Why Us Section -->
      <section id="services" class="services ">
          <div class="container" data-aos="fade-up">
   <?php echo $motion->projects_page();?>
                
                
  
</div>
        </section>
     
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
     <!-- Modal2 -->
     <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Application for Training </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
              <form>
                  <div class="form-row">
                    <div class="form-group col-md-6"> 
                      
                      <input type="text" class="form-control" placeholder="Name">
                    </div>
                    
                  </div>
                  
                  <div class="form-row"> 
                  <div class="form-group col-md-6">
                   
                    <input type="text" class="form-control " id="inputAddress" placeholder="Email">
                  </div>
              </div>
              <div class="form-row">
                  
                  <div class="form-group col-md-6 " >
                  
                    <input type="text" class="form-control " id="inputAddress2" placeholder="Telephone">
                  </div>
              </div>
              <div class="form-row">
                  <div class="form-group col-md-6">
                      
                      <input type="text" class="form-control" id="inputAddress2" placeholder="Mobile">
                    </div>
              </div>
                    <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Title of the training Package</label>
                    <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                      <option selected>Choose...</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                    <div class="form-group">
                    <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Preferred location of Training</label>
                    <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                      <option selected>online</option>
                      <option value="1">In class/At Motion Venue</option>
                      <option value="2">In class/At your Venue</option>
                    </select>
                    </div>
                    <div class="form-row">
                  
                      <div class="form-group col-md-12 " >
                      
                        <input type="text" class="form-control" id="inputAddress2" placeholder="Method of Payment">
                      </div>
                    </div>
                      <div class="custom-file">
                          <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Bank</label>
                          <input type="file" class="custom-file-input" id="customFile">
                          <label class="custom-file-label" for="customFile">Upload bank advice</label>
                        </div>
                        <div class="form-group">
                          <label for="exampleFormControlTextarea1">Any opinion/explanation</label>
                          <textarea class="form-control " id="exampleFormControlTextarea1" rows="2"></textarea>
                        </div>
                </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Train</button>
          </div>
        </div>
      </div>
    </div> 
    <!--end Modal2 --> 
  
  
     <!--volunteerism Modal -->
     <div class="modal fade" id="volunteerism" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Application for Voluntary service </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
              <form>
                  <div class="form-row">
                    <div class="form-group col-md-6"> 
                      
                      <input type="text" class="form-control" placeholder="Name">
                    </div>
                    
                  </div>
                  
                  <div class="form-row"> 
                  <div class="form-group col-md-6">
                   
                    <input type="text" class="form-control " id="inputAddress" placeholder="Email">
                  </div>
              </div>
              <div class="form-row">
                  
                  <div class="form-group col-md-6 " >
                  
                    <input type="text" class="form-control " id="inputAddress2" placeholder="Telephone">
                  </div>
              </div>
              <div class="form-row">
                  <div class="form-group col-md-6">
                      
                      <input type="text" class="form-control" id="inputAddress2" placeholder="Mobile">
                    </div>
              </div>
                    
                    <div class="form-group">
                      <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Interested Area of volunteering </label>
                      <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                        <option selected>Training</option>
                        <option value="1">Module development</option>
                        <option value="2">Data collection</option>
                        <option value="3">Data Analysis</option>
                        <option value="4">Online survey</option>
                        <option value="5">Other</option>
                      </select>
                    </div>
                    
                        <div class="form-group">
                          <label for="exampleFormControlTextarea1">Any opinion/explanation</label>
                          <textarea class="form-control " id="exampleFormControlTextarea1" rows="2"></textarea>
                        </div>
                </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">volunteer</button>
          </div>
        </div>
      </div>
    </div> 
    <!--end volunteerism Modal --> 
  
  
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