
<?php
include('admin/function/function.php'); 
$motion = new Motion();
$train_btn = isset($_POST['train_btn']);
$vol_btn = isset($_POST['vol_btn']);
$con_btn = isset($_POST['con_btn']);
if($con_btn)
{
    
$con_fname=$_POST['con_fname'];
$con_email =$_POST['con_email'];
$con_tele =$_POST['con_tele'];
$con_mobile=$_POST['con_mobile'];
$con_services=$_POST['con_service'];
$con_detail=$_POST['con_detail'];
$date= date('Y-m-d');
$motion->add_new_con($con_fname,$con_email,$con_tele,$con_mobile,$con_services,$con_detail,$date);
}
if($train_btn)
{

    $train_fname=$_POST['train_fname'];
    $train_email =$_POST['train_email'];
    $train_tele =$_POST['train_tele'];
    $train_mobile=$_POST['train_mobile'];
    $train_type=$_POST['train_type'];
    $train_explain=$_POST['train_explain'];
    $train_payment_type=$_POST['train_payment_type'];
    $train_location=$_POST['train_location'];
    $file_name=$_FILES['train_file']['name'];
    move_uploaded_file($_FILES['train_file']['tmp_name'] , "admin/File/$file_name");
    $file_path="File/$file_name";
    $date = date('Y-m-d');
  $motion->add_new_train($train_fname,$train_email,$train_tele,$train_mobile,$train_type,$train_payment_type,$train_location,$file_path,$train_explain,$date);
  
}
if($vol_btn)
{

    $vol_fname=$_POST['vol_fname'];
    $vol_email =$_POST['vol_email'];
    $vol_tele =$_POST['vol_tele'];
    $vol_mobile=$_POST['vol_mobile'];
    $vol_type=$_POST['vol_type'];
    $vol_explain=$_POST['vol_explain'];
    $date = date('Y-m-d');
    $motion->add_new_vol($vol_fname,$vol_email,$vol_tele,$vol_mobile,$vol_type,$vol_explain,$date);
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
              <h2>Services</h2>
              <ol>
                <li><a href="index.html">Home</a></li>
                <li>Services</li>
              </ol>
            </div>
      
          </div>
        </section>
  
      <!-- ======= Why Us Section ======= -->
      <!-- End Why Us Section -->
      <section id="services" class="services section-bg">
          <div class="container" data-aos="fade-up">
      
            <div class="content">
              <h3>CONSULTANCY</h3>
              </div>
      
           <p>Motion pulled fertile brains from diverse disciplines and profound life experience to meet the dynamic
                world with competent professionalism in the area of consultancy service on Water Resource, 
                Environmental, and Agriculture sectors.
      
              As part of its Consultancy Services, Motion conducts Baseline Studies, Prefeasibility and Feasibility Studies, 
              Detail Engineering Design, Monitoring, Evaluation and 
              contract administration and Project progress evaluation. If you need our 
              consultancy service <a  class="click-here" data-toggle="modal" data-target="#exampleModal1">click here </a>
                  
             </p>
                
                <!-- Modal -->
                <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title text-success" id="exampleModalLabel">Consultancy Service Inquiry</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                          <form action="" method="POST">
                              <div class="form-row">
                                <div class="form-group col-md-10"> 
                                  
                                  <input type="text" name="con_fname" class="form-control border-success" placeholder="Name of Company/Individual">
                                </div>
                                
                              </div>
                              
                              <div class="form-row"> 
                              <div class="form-group col-md-6">
                               
                                <input type="text" name="con_email" class="form-control border-success" id="inputAddress" placeholder="Email">
                              </div>
                          </div>
                          <div class="form-row">
                              
                              <div class="form-group col-md-6 " >
                              
                                <input type="text" name="con_tele" class="form-control border-success" id="inputAddress2" placeholder="Telephone">
                              </div>
                          </div>
                          <div class="form-row">
                              <div class="form-group col-md-6">
                                  
                                  <input type="text" name="con_mobile" class="form-control border-success" id="inputAddress2" placeholder="Mobile">
                                </div>
                          </div>
                                <div class="form-group">
                                  <label for="exampleFormControlTextarea1">Description of Required Consultancy/service</label>
                                  <textarea name="con_service" class="form-control border-success" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                                <div class="form-group">
                                  <label for="exampleFormControlTextarea1">Other detail</label>
                                  <textarea name="con_detail" class="form-control border-success" id="exampleFormControlTextarea1" rows="2"></textarea>
                                </div>
                              
                            
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button name="con_btn" type="submit" class="btn btn-primary color">Request</button>
                      </div>
                      </form>
                    </div>
                  </div>
                </div> 
                <!--end Modal -->
                
              <div class="content">
                  <h3>TRAINING </h3>
                  </div>
          
               <p>Motion regularly identifies contemporary and emerging thematic issues that have direct relevance to Personal, Organizational, and Societal development and provides quality Short, Mid and Long-term training for those who want to make a difference in their area of endeavors. 
      
                  Duration of the training ranges from one day to 12 months. Motion offers discounts based on various criteria. 
                      
                  To visit the training catalogue <a  class="click-here" data-toggle="modal" data-target="#exampleModal2">click here </a>
                 
                  <div class="content">
                      <h3>RESEARCH AND DEVELOPMENT</h3>
                      </div>
              
                   <p>Motion is committed to devote its resources on inquisitive and triggering Researches and Studies that contributes to the progress and advancement of the company and its services. To this end Motion regularly identifies Constraints and Limitations of Development and Business affairs.
                      Motion conducts and/or coordinate Research on issues of strategic advantage also provides financial support in priority areas. It also works on, Consolidating and Disseminating essential knowledge on the increasing number of ways in which research findings can be applied to Societal Development, Poverty Reduction and Natural Resource and Environmental Management.
                      
                      To bridge Time, Technical and Financial limitations Motion also promote volunteerism and collaboration among academic and research institutions. 
                      
                      Motion undertook Research and development, which are triggered by prevailing societal, environmental and consultancy and training service constraints. The major thematic areas Include, <br> <br>
                      •	Constraints of Consultancy &Training Services  <br>
                      •	Water Resources Management and Development <br>
                      •	Irrigation Water Management <br>
                      •	Agricultural Production and Productivity <br>
                      •	Environmental protection & Management <br>
                      •	Climate Change Impacts <br>
                      Some of the research projects initiated/undertaken so far includes, <br>
                      •	Assessment of Consultancy &Training services Constraints, <br>
                      •	Evaluation of consultancy &Training service Standards, methodology and approaches, <br>
                      •	Improving irrigation efficiency and Filing Yield gap <br>
                      •	Assessment of irrigation water losses <br>
                      
                  </p>
                      
                  <div class="content">
                      <h3>VOLUNTEERISM</h3>
                      </div>
              
                   <p>
                      One of the peculiarities of motion is its commitment to synchronize business activities with social development. 
                      It opts to synergize business motives with customer satisfaction and preservation 
                      of nature in a number of ways. To this effect, Motion Organizes Trainings, conduct Studies and Research’s. 
                      It Generates and Manages data on issues of priority interest. 
                      
                      Due to Time, Space and Capacity limitation to handle such issues to sufficient level, Motion 
                      facilitates Volunteerism on two broad categories, Training and Research.  Volunteering can be 
                      made both online and in presence. We value devotions and provide various certificates based on
                       the extent of the Voluntary service provided. To register for volunteer service,  <a  class="click-here" data-toggle="modal" data-target="#volunteerism">click here </a> 
                      
                  </p>
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
  
      <!-- ======= Appointment Section ======= -
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
              <li><i class="bx bx-chevron-right"></i> <a href="index.php">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="about.php">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="services.php">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="projects.php">Projects</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="news.php">News</a></li>
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
              <form action="" method="POST">
                  <div class="form-row">
                    <div class="form-group col-md-6"> 
                      
                      <input type="text" name="train_fname" class="form-control" placeholder="Name">
                    </div>
                    
                  </div>
                  
                  <div class="form-row"> 
                  <div class="form-group col-md-6">
                   
                    <input type="text" name="train_email" class="form-control " id="inputAddress" placeholder="Email">
                  </div>
              </div>
              <div class="form-row">
                  
                  <div class="form-group col-md-6 " >
                  
                    <input type="text" class="form-control "  name="train_tele"  id="inputAddress2" placeholder="Telephone">
                  </div>
              </div>
              <div class="form-row">
                  <div class="form-group col-md-6">
                      
                      <input type="text" class="form-control"  name="train_mobile" id="inputAddress2" placeholder="Mobile">
                    </div>
              </div>
                    <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Title of the training Package</label>
                    <select  name="train_type" class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
               
<option value="Basic LPR (BLPR)">Basic LPR (BLPR)</option>
                      <option value="Intermediate LPR (ILPR)">Intermediate LPR (ILPR)</option>
                      <option value="Advanced LPR (ALPR)">Advanced LPR (ALPR)</option>
                      <option value="Master LPR (MLPR)">Master LPR (MLPR)</option>
                      <option value="Kaizen">Kaizen</option>
                      <option value="Leadership Pill (LP)">Leadership Pill (LP)</option>
                      <option value="Relationship Antibiotics (RA">Relationship Antibiotics (RA)</option>
                      <option value="Parenting class (PC)">Parenting class (PC)</option>
                      <option value="The second home (workplace & Occupational Satisfaction) (WPOS)">The second home (workplace & Occupational Satisfaction) (WPOS)</option>
                      <option value="Anger management">Anger management</option>
                      <option value="Marketing and Sales Psychology">Marketing and Sales Psychology</option>
                      <option value="Employee Recruitment system">Employee Recruitment system</option>
                      <option value="Occupational safety AND health (OSH)">Occupational safety AND health (OSH)</option>
                      <option value="Occupational satisfaction">Occupational satisfaction </option>
                      <option value="Color psychology (CS)">Color psychology (CS)</option>
                      <option value="Atmospherics">Atmospherics</option>
                      <option value="Music & Laughter therapy (MLT) ">Music & Laughter therapy (MLT) </option>
                      <option value="Human Account  (HA">Human Account  (HA)</option>
                      <option value="Painting Consciousness">Painting Consciousness</option>
                      <option value="The unwritten law">The unwritten law</option>
                      <option value="Your Happy SELF version (HSV)">Your Happy SELF version (HSV)</option>
                      <option value="Wisdom profit PATH (WP)">Wisdom profit PATH (WP)</option>
                      <option value="Animal wisdom (AW)">Animal wisdom (AW)</option>
                      <option value="Entrepreneurship skills">Entrepreneurship skills</option>
                      <option value="Ethiopian multicultural class series  (culture class) (CC)">Ethiopian multicultural class series  (culture class) (CC)</option>
                      <option value="Money And Financial Management Skills ">Money And Financial Management Skills </option>
                      <option value="Laughter Therapy class">Laughter Therapy class</option>
                      <option value="Anti-Fear Vaccine (AFV)">Anti-Fear Vaccine (AFV)</option>
                      <option value="Social media management (SM)">Social media management (SM)</option>
                      <option value="Healthy life (HL)">Healthy life (HL)</option>
                      <option value="Organic success ">Organic success </option>
                      <option value="Customer satisfaction Gauge (CSG)">Customer satisfaction Gauge (CSG)</option>
                      <option value="Relaxation techniques class">Relaxation techniques class</option>
                      <option value="Your Online Office">Your Online Office </option>
                      <option value="Habit Check">Habit Check  </option>
                      <option value="Motivating The Unmotivated">Motivating The Unmotivated</option>
                      <option value="Public Speech And Interview Skills">Public Speech And Interview Skills </option>
                      <option value="Driving Psychology (DP)">Driving Psychology (DP)</option>
                      <option value="Mental Akido Managing Difficult Situations And Peoples ">Mental Akido Managing Difficult Situations And Peoples </option>
                      <option value="Move on From break up">Move on From break up</option>
                      <option value="Life Skill Series ">Life Skill Series </option>

<option value="Project management skill">Project management skill</option>
                      <option value="Research method  And Report Writing">Research method  And Report Writing</option>
                      <option value="Pre And Post Marital Coaching">Pre And Post Marital Coaching</option>
                      <option value="Human  Resources  Management">Human  Resources  Management</option>
                      <option value="Creativity And innovation at workplace">Creativity And innovation at workplace</option>
                      <option value="Change management system">Change management system</option>
                      <option value="Repair Yourself">Repair Yourself </option>
                      <option value="Natural Resources Management">Natural Resources Management</option>
                      <option value="Water Resources">Water Resources</option>
                      <option value="Agriculture">Agriculture</option>
                      <option value="Environment / Socio-Economy">Environment / Socio-Economy</option>
                      <option value="GIS">GIS</option>  </select>
                    <div class="form-group">
                    <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Preferred location of Training</label>
                    <select  name="train_location" class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                      <option selected>online</option>
                      <option value="1">In class/At Motion Venue</option>
                      <option value="2">In class/At your Venue</option>
                    </select>
                    </div>
                    <div class="form-row">
                  
                      <div class="form-group col-md-12 " >
                      
                        <input  name="train_payment_type" type="text" class="form-control" id="inputAddress2" placeholder="Method of Payment">
                      </div>
                    </div>
                      <div class="custom-file">
                          <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Bank</label>
                          <input type="file" name="train_file" class="custom-file-input" id="customFile">
                          <label class="custom-file-label" for="customFile">Upload bank advice</label>
                        </div>
                        <div class="form-group">
                          <label for="exampleFormControlTextarea1">Any opinion/explanation</label>
                          <textarea name="train_explain" class="form-control " id="exampleFormControlTextarea1" rows="2"></textarea>
                        </div>
               
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="train_btn" class="btn btn-primary color">Train</button>
          </div>
          </form>
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
              <form action="" method="POST">
                  <div class="form-row">
                    <div class="form-group col-md-6"> 
                      
                      <input type="text" name="vol_fname" class="form-control" placeholder="Name">
                    </div>
                    
                  </div>
                  
                  <div class="form-row"> 
                  <div class="form-group col-md-6">
                   
                    <input type="text" name="vol_email" class="form-control " id="inputAddress" placeholder="Email">
                  </div>
              </div>
              <div class="form-row">
                  
                  <div class="form-group col-md-6 " >
                  
                    <input type="text" name="vol_tele" class="form-control " id="inputAddress2" placeholder="Telephone">
                  </div>
              </div>
              <div class="form-row">
                  <div class="form-group col-md-6">
                      
                      <input type="text" name="vol_mobile" class="form-control" id="inputAddress2" placeholder="Mobile">
                    </div>
              </div>
                    
                    <div class="form-group">
                      <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Interested Area of volunteering </label>
                      <select name="vol_type" class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
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
                          <textarea name="vol_explain" class="form-control " id="exampleFormControlTextarea1" rows="2"></textarea>
                        </div>
                
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="vol_btn" class="btn btn-primary color6">volunteer</button>
          </div>
          </form>
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