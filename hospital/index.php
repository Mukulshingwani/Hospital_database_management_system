
<?php
include_once 'hms/include/config.php';
if (isset($_POST['submit'])) {
    $name = $_POST['fullname'];
    $email = $_POST['emailid'];
    $mobileno = $_POST['mobileno'];
    $dscrption = $_POST['description'];
    $query = mysqli_query(
        $con,
        "insert into tblcontactus(fullname,email,contactno,message) value('$name','$email','$mobileno','$dscrption')"
    );
    echo "<script>alert('Your information succesfully submitted');</script>";
    echo "<script>window.location.href ='index.php'</script>";
}
?>

<!--
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Goyal Hospital </title>

    <link rel="shortcut icon" href="assets/images/fav.jpg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
     <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
</head>

    <body>

    ################# Header Starts Here#######################
    
      <header id="menu-jk">
    
        <div id="nav-head" class="header-nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-3  col-sm-12" style="color:#000;font-weight:bold; font-size:42px; margin-top: 1% !important;">Goyal Hospital
                       <a data-toggle="collapse" data-target="#menu" href="#menu" ><i class="fas d-block d-md-none small-menu fa-bars"></i></a>
                    </div>
                    <div id="menu" class="col-lg-8 col-md-9 d-none d-md-block nav-item">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#services">Services</a></li>
                            <li><a href="#about_us">About Us</a></li>
                            <li><a href="#gallery">Gallery</a></li>
                            <li><a href="#contact_us">Contact Us</a></li>
                            <li><a href="#logins">Logins</a></li>  
                        </ul>
                    </div>
                    <div class="col-sm-2 d-none d-lg-block appoint">
                        <a class="btn btn-success" href="hms/user-login.php">Book an Appointment</a>
                    </div>
                </div>

            </div>
        </div>
    </header>
    

    <div class="slider-detail">

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            </ol>


   


            <div class="carousel-inner">
                <div class="carousel-item ">
                    <img class="d-block w-100" src="assets/images/slider/slider_2.jpg" alt="Second slide">
                    <div class="carousel-cover"></div>
                    <div class="carousel-caption vdg-cur d-none d-md-block">
                        <h5 class="animated bounceInDown">Goyal Hospital</h5>
            
                         
                    
                    </div>
                </div>
                
                <div class="carousel-item active">
                    <img class="d-block w-100" src="assets/images/slider/slider_3.jpg" alt="Third slide">
                      <div class="carousel-cover"></div>
                    <div class="carousel-caption vdg-cur d-none d-md-block">
                        <h5 class="animated bounceInDown">Goyal Hospital</h5>
            
                         
                    
                    </div>
              
                </div>
                
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>


    </div>
    
    
    
     <section id="logins" class="our-blog container-fluid">
        <div class="container">
        <div class="inner-title">

                <h2>Logins</h2>
            </div>
            <div class="col-sm-12 blog-cont">
                <div class="row no-margin">
                    <div class="col-sm-4 blog-smk">
                        <div class="blog-single">

                                <img src="assets/images/patient.jpg" alt="">

                            <div class="blog-single-det">
                                <h6>Patient Login</h6>
                                <a href="hms/user-login.php" target="_blank">
                                    <button class="btn btn-success btn-sm">Click Here</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 blog-smk">
                        <div class="blog-single">

                                <img src="assets/images/doctor.jpg" alt="">

                            <div class="blog-single-det">
                                <h6>Doctors login</h6>
                                <a href="hms/doctor" target="_blank">
                                    <button class="btn btn-success btn-sm">Click Here</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-sm-4 blog-smk">
                        <div class="blog-single">

                                <img src="assets/images/admin.jpg" alt="">

                            <div class="blog-single-det">
                                <h6>Admin Login</h6>
                    
                                <a href="hms/admin" target="_blank">
                                    <button class="btn btn-success btn-sm">Click Here</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    
                    

                    
                    
                </div>
            </div>
            
        </div>
    </section>  









    <section id="services" class="key-features department">
        <div class="container">
            <div class="inner-title">

                <h2>Our Key Features</h2>
                <p>Take a look at some of our key features</p>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-key">
                        <i class="fas fa-heartbeat"></i>
                        <h5>Cardiology</h5>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-key">
                        <i class="fas fa-ribbon"></i>
                        <h5>Orthopaedic</h5>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-key">
                       <i class="fab fa-monero"></i>
                        <h5>Neurologist</h5>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-key">
                        <i class="fas fa-capsules"></i>
                        <h5>Pharma Pipeline</h5>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-key">
                        <i class="fas fa-prescription-bottle-alt"></i>
                        <h5>Pharma Team</h5>
                    </div>
                </div>



                <div class="col-lg-4 col-md-6">
                    <div class="single-key">
                        <i class="far fa-thumbs-up"></i>
                        <h5>High Quality treatments</h5>

                    </div>
                </div>
            </div>






        </div>

    </section>
    
    
  
    
        
    <section id="about_us" class="about-us">
        <div class="row no-margin">
            <div class="col-sm-6 image-bg no-padding">
                
            </div>
            <div class="col-sm-6 abut-yoiu">
                <h3>About Our Hospital</h3>
<?php
$ret = mysqli_query($con, "select * from tblpage where PageType='aboutus' ");
while ($row = mysqli_fetch_array($ret)) { ?>

    <p><?php echo $row['PageDescription']; ?>.</p><?php }
?>
            </div>
        </div>
    </section>    
    
    
        <div id="gallery" class="gallery">    
           <div class="container">
              <div class="inner-title">

                <h2>Our Gallery</h2>
                <p>View Our Gallery</p>
            </div>
              <div class="row">
                

        <div class="gallery-filter d-none d-sm-block">
            <button class="btn btn-default filter-button" data-filter="all">All</button>
            <button class="btn btn-default filter-button" data-filter="hdpe">Dental</button>
            <button class="btn btn-default filter-button" data-filter="sprinkle">Cardiology</button>
            <button class="btn btn-default filter-button" data-filter="spray"> Neurology</button>
            <button class="btn btn-default filter-button" data-filter="irrigation">Laboratry</button>
        </div>
        <br/>



            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                <img src="assets/images/gallery/gallery_01.jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter sprinkle">
                <img src="assets/images/gallery/gallery_02.jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                <img src="assets/images/gallery/gallery_03.jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter irrigation">
                <img src="assets/images/gallery/gallery_04.jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter spray">
                <img src="assets/images/gallery/gallery_05.jpg" class="img-responsive">
            </div>

          

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter spray">
                <img src="assets/images/gallery/gallery_06.jpg" class="img-responsive">
            </div>

        </div>
    </div>
       
       
       </div>
    
    
    
    <section id="contact_us" class="contact-us-single">
        <div class="row no-margin">

            <div  class="col-sm-12 cop-ck">
                <form method="post">
                <h2 >Contact Form</h2>
                    <div class="row cf-ro">
                        <div  class="col-sm-3"><label>Enter Name :</label></div>
                        <div class="col-sm-8"><input type="text" placeholder="Enter Name" name="fullname" class="form-control input-sm" required ></div>
                    </div>
                    <div  class="row cf-ro">
                        <div  class="col-sm-3"><label>Email Address :</label></div>
                        <div class="col-sm-8"><input type="text" name="emailid" placeholder="Enter Email Address" class="form-control input-sm"  required></div>
                    </div>
                     <div  class="row cf-ro">
                        <div  class="col-sm-3"><label>Mobile Number:</label></div>
                        <div class="col-sm-8"><input type="text" name="mobileno" placeholder="Enter Mobile Number" class="form-control input-sm" required ></div>
                    </div>
                     <div  class="row cf-ro">
                        <div  class="col-sm-3"><label>Enter  Message:</label></div>
                        <div class="col-sm-8">
                          <textarea rows="5" placeholder="Enter Your Message" class="form-control input-sm" name="description" required></textarea>
                        </div>
                    </div>
                     <div  class="row cf-ro">
                        <div  class="col-sm-3"><label></label></div>
                        <div class="col-sm-8">
                         <button class="btn btn-success btn-sm" type="submit" name="submit">Send Message</button>
                        </div>
                </div>
            </form>
            </div>
     
        </div>
    </section>
    
    
    
    
    


    <footer class="footer">
        <div class="container">
            <div class="row">
       
                <div class="col-md-6 col-sm-12">
                    <h2>Useful Links</h2>
                    <ul class="list-unstyled link-list">
                        <li><a ui-sref="about" href="#about">About us</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="portfolio" href="#services">Services</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="products" href="#logins">Logins</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="gallery" href="#gallery">Gallery</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="contact" href="#contact">Contact us</a><i class="fa fa-angle-right"></i></li>
                    </ul>
                </div>
                <div class="col-md-6 col-sm-12 map-img">
                    <h2>Contact Us</h2>
                    <address class="md-margin-bottom-40">

<?php
$ret = mysqli_query($con, "select * from tblpage where PageType='contactus' ");
while ($row = mysqli_fetch_array($ret)) { ?>


                        <?php echo $row['PageDescription']; ?> <br>
                        Phone: <?php echo $row['MobileNumber']; ?> <br>
                        Email: <a href="mailto:<?php echo $row[
                            'Email'
                        ]; ?>" class=""><?php echo $row['Email']; ?></a><br>
                        Timing: <?php echo $row['OpenningTime']; ?>
                    </address>

        <?php }
?>





                </div>
            </div>
        </div>
        

    </footer>
    <div class="copy">
            <div class="container">
         Goyal Hospital
                
     
            </div>

        </div>
    
    </body>

<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/plugins/scroll-nav/js/jquery.easing.min.js"></script>
<script src="assets/plugins/scroll-nav/js/scrolling-nav.js"></script>
<script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>

<script src="assets/js/script.js"></script>

-->

</html>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Poppins:100,300,400,700,900" rel="stylesheet">
        <link rel="stylesheet" href="./assets/css/style.css"/>
        <link rel="stylesheet" href="./css/styles.css" />
        <link rel="stylesheet" href="./css/responsive.css" />
        <title>
            DBMS Project
        </title>
    </head>

    <style>
        .read_more_button{
            width: 400px !important;
        }

        input[type=text] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
        }

        textarea {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
        }

        .background_image{
            background-image: url(./assets/images/hospital_bg.png) !important;
        }

        button {
        cursor: pointer;
        border: 0;
        border-radius: 4px;
        font-weight: 600;
        margin: 0 10px;
        width: 200px;
        padding: 10px 0;
        /* box-shadow: 0 0 20px rgba(104, 85, 224, 0.2) !important; */
        transition: 0.4s;
        }

        .reg {
        color: white;
        /* background-color: rgba(104, 85, 224, 1) !important; */
        }

        .log {
        /* color: rgb(104, 85, 224) !important; */
        /* background-color: rgba(255, 255, 255, 1) !important; */
        /* border: 1px solid rgba(104, 85, 224, 1) !important; */
        }

        button:hover {
        color: white;
        width:;
        /* box-shadow: 0 0 20px rgba(104, 85, 224, 0.6) !important; */
        /* background-color: rgba(104, 85, 224, 1) !important; */
        }

    </style>
    <body>
        <header class="header">
            <nav class="nav">
                <div class="flex_row align_center">
                    <img class="logo" src="./assets/logo.png" />
                    <span class="logo_label">Goyal Hospital</span>
                </div>
                <button class="menu" onclick="this.classList.toggle('opened');">
                    <svg width="32" height="32" viewBox="0 0 100 100">
                        <path class="line line1" d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058" ></path>
                        <path class="line line2" d="M 20,50 H 80" ></path>
                        <path class="line line3" d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942" ></path>
                    </svg>
                </button>
                <ul class="flex_row menu_list">
                    <li class="nav_item"><a href="#">Home</a></li>
                    <li class="nav_item"><a href="#services">Services</a></li>
                    <li class="nav_item"><a href="#about_us">About Us</a></li>
                    <li class="nav_item"><a href="#contact_us">Contact Us</a></li>
                    <li class="nav_item"><a href="#logins">Logins</a></li>  
                </ul>
            </nav>
        </header>
        <main class="main">
            <section id="home" class="section intro_section background_image">
                <!-- <svg class="intro_shape" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none" style="left: 0; transform: rotate3d(0,1,0,180deg);"><path class="shape-fill shape-fill-contrast" d="M790.5,93.1c-59.3-5.3-116.8-18-192.6-50c-29.6-12.7-76.9-31-100.5-35.9c-23.6-4.9-52.6-7.8-75.5-5.3c-10.2,1.1-22.6,1.4-50.1,7.4c-27.2,6.3-58.2,16.6-79.4,24.7c-41.3,15.9-94.9,21.9-134,22.6C72,58.2,0,25.8,0,25.8V100h1000V65.3c0,0-51.5,19.4-106.2,25.7C839.5,97,814.1,95.2,790.5,93.1z"></path></svg> -->
                <div class="section_inner intro_inner flex_row">
                    <div class="rocket_container">
                        <div class="rocket_background">
                        </div>
                        <img data-intersection-id="rocket_img" data-intersection-threshold="0.3" class="rocket_image start_pos" src="./assets/4.png">
                    </div>
                    <div class="intro_text_block">
                        <h1 class="big_title start_pos">Goyal Hospital, Jodhpur</h1>
                        <h2 class="light_sub_title">You need help ?  We are there ...</h2>
                        <p class="para">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aut quibusdam voluptate, nemo mollitia cum, vitae facere suscipit, perferendis nam quam tempore repellendus! Nisi dolor ullam vel animi iusto non temporibus.
                        </p>
                        <a href="hms/book-appointment.php" class="button read_more_button">Book an Appointment</a>
                    </div>
                </div>
            </section>
            <section id="tech" class="section tech_section">
                <div class="section_inner tech_inner flex_row flex_column_mobile">
                    <div class="flex_column tech_left">
                        <div data-intersection-id="tech_decor_dots" data-intersection-threshold="0.3" class="tech_decor_dots start_pos"></div>
                        <div class="tech_card start_pos paper flex_row flex_column_mobile">
                            <div class="tech_card_left">
                                <h3 class="text_block_main_title">Industry leading</h3>
                                <h3 class="text_block_sub_title">technology stack</h3>
                                <p class="para">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                </p>
                                <div class="tech_card_left_img_wrapper">
                                    <img src="./assets/tech/webpack.svg" />
                                </div>
                            </div>
                            <div data-intersection-id="tech_card_right" data-intersection-threshold="0" class="tech_card_right flex_row_mobile start_pos">
                                <img src="./assets/tech/javascript.svg" />
                                <img src="./assets/tech/es6.svg" />
                                <img src="./assets/tech/node-sass.svg" />
                            </div>
                        </div>
                    </div>
                    <div id="logins" class="flex_column tech_right">
                        <img data-intersection-id="tech_globe_img" data-intersection-threshold="0.3" class="tech_globe_img start_pos" src="./assets/tech-globe.svg" />
                        <h3 class="text_block_main_title">Login</h3>
                        <div class="flex_row tech_details">
                            <div class="flex_column">
                                <div class="tech_detail">
                                    <span data-intersection-id="tech_detail_icon" data-intersection-threshold="0.3" class="tech_detail_icon start_pos">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity stroke-primary" style="stroke: #8ed6fb"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline></svg>
                                    </span>
                                    <div class="flex_column">
                                        <span class="tech_detail_label">Admin</span>
                                        <a href="hms/admin" target="_blank">
                                            <button class="log btn btn-success btn-sm">Click Here</button>
                                        </a>
                                    </div>
                                </div>
                                <div class="tech_detail">
                                    <span data-intersection-id="tech_detail_icon" data-intersection-threshold="0.3" class="tech_detail_icon start_pos">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-zap stroke-primary"  style="stroke: #8ed6fb"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon></svg>
                                    </span>
                                    <div class="flex_column">
                                        <span class="tech_detail_label">Doctor</span>
                                        <a href="hms/doctor" target="_blank">
                                            <button class="log btn btn-success btn-lg">Click Here</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="flex_column">
                                <div class="tech_detail">
                                    <span data-intersection-id="tech_detail_icon" data-intersection-threshold="0.3" class="tech_detail_icon start_pos">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-upload-cloud stroke-primary"  style="stroke: #8ed6fb"><polyline points="16 16 12 12 8 16"></polyline><line x1="12" y1="12" x2="12" y2="21"></line><path d="M20.39 18.39A5 5 0 0 0 18 9h-1.26A8 8 0 1 0 3 16.3"></path><polyline points="16 16 12 12 8 16"></polyline></svg>
                                    </span>
                                    <div class="flex_column">
                                        <span class="tech_detail_label">Patient</span>
                                        <a href="hms/user-login.php" target="_blank">
                                            <button class="log btn btn-success btn-sm">Click Here</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="services" data-intersection-id="services" data-intersection-threshold="0.7" class="section services_section">
                <div class="section_inner">
                    <div data-intersection-id="services_decor_circle" data-intersection-threshold="0.7" class="services_decor_circle start_pos"></div>
                    <div data-intersection-id="services_decor_ring" data-intersection-threshold="0.7" class="services_decor_ring start_pos"></div>
                    <div class="flex_column services_container">
                        <span class="section_title">All you need in one place</span>
                        <div class="flex_row flex_wrap">
                            <div class="service">
                                <img data-intersection-id="service_icon" data-intersection-threshold="0.7" class="service_icon start_pos" src="assets/icons/plan.svg" />
                                <span class="service_title">strategy</span>
                                <p class="para text_center">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.
                                </p>
                            </div>
                            <div class="service">
                                <img data-intersection-id="service_icon" data-intersection-threshold="0.7" class="service_icon start_pos" src="assets/icons/cup.svg" />
                                <span class="service_title">top quality</span>
                                <p class="para text_center">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.
                                </p>
                            </div>
                            <div class="service">
                                <img data-intersection-id="service_icon" data-intersection-threshold="0.7" class="service_icon start_pos" src="assets/icons/target.svg" />
                                <span class="service_title">accuracy</span>
                                <p class="para text_center">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.
                                </p>
                            </div>
                            <div class="service">
                                <img data-intersection-id="service_icon" data-intersection-threshold="0.7" class="service_icon start_pos" src="assets/icons/clock.svg" />
                                <span class="service_title">on time</span>
                                <p class="para text_center">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.
                                </p>
                            </div>
                            <div class="service">
                                <img data-intersection-id="service_icon" data-intersection-threshold="0.7" class="service_icon start_pos" src="assets/icons/growth.svg" />
                                <span class="service_title">scalable</span>
                                <p class="para text_center">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.
                                </p>
                            </div>
                            <div class="service">
                                <img data-intersection-id="service_icon" data-intersection-threshold="0.7" class="service_icon start_pos" src="assets/icons/test.svg" />
                                <span class="service_title">testing</span>
                                <p class="para text_center">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="about_us" class="section contact_section">
                <div class="section_inner contact_inner flex_row">
                    <div class="flex_row flex_column_reverse_mobile">
                        <div class="flex_row contact_left">
                            <div data-intersection-id="sun_shape" data-intersection-threshold="0.75" class="sun_shape start_pos"></div>
                            <div data-intersection-id="contact_decor_dots" data-intersection-threshold="0.75" class="contact_decor_dots start_pos"></div>
                            <div data-intersection-id="contact_card" data-intersection-threshold="0.75" class="flex_column paper start_pos">
                                <div class="contact_form_container">
                                    <span class="contact_label">Name</span> 
                                    <span class="contact_value">Jaimin Sanjay Gajjar (B20AI014)</span> 
                                    <span class="contact_value">Mukul Shingwani (B20AI023)</span> 
                                    <span class="contact_value">Swan Sanjaykumar Patel (B20CS063)</span> 

                                    <span class="contact_label">Role</span> 
                                    <span class="contact_value">Data Engineers</span> 
                                </div>
                            </div>
                        </div>
                        <div id="contact_right" class="flex_row contact_right">
                            <div data-intersection-id="sun_shape" data-intersection-threshold="0.75" class="sun_shape start_pos"></div>
                            <div data-intersection-id="contact_decor_dots" data-intersection-threshold="0.75" class="contact_decor_dots start_pos"></div>
                            <div data-intersection-id="contact_card" data-intersection-threshold="0.75" class="flex_column paper start_pos">
                                <div class="contact_form_container">
                                    <section id="contact_us" class="contact-us-single">
                                    <div class="row no-margin">

                                        <div  class="col-sm-12 cop-ck">
                                            <form method="post">
                                            <h2 >Contact Us</h2>
                                                <div class="row cf-ro">
                                                    <div  class="col-sm-3"><label>Enter Name :</label></div>
                                                    <div class="col-sm-8"><input type="text" placeholder="Enter Name" name="fullname" class="form-control input-sm" required ></div>
                                                </div>
                                                <div  class="row cf-ro">
                                                    <div  class="col-sm-3"><label>Email Address :</label></div>
                                                    <div class="col-sm-8"><input type="text" name="emailid" placeholder="Enter Email Address" class="form-control input-sm"  required></div>
                                                </div>
                                                <div  class="row cf-ro">
                                                    <div  class="col-sm-3"><label>Mobile Number:</label></div>
                                                    <div class="col-sm-8"><input type="text" name="mobileno" placeholder="Enter Mobile Number" class="form-control input-sm" required ></div>
                                                </div>
                                                <div  class="row cf-ro">
                                                    <div  class="col-sm-3"><label>Enter  Message:</label></div>
                                                    <div class="col-sm-8">
                                                    <textarea rows="5" placeholder="Enter Your Message" class="form-control input-sm" name="description" required></textarea>
                                                    </div>
                                                </div>
                                                <div  class="row cf-ro">
                                                    <div  class="col-sm-3"><label></label></div>
                                                    <div class="col-sm-8">
                                                    <button class="btn btn-success btn-sm" type="submit" name="submit">Book</button>
                                                    </div>
                                            </div>
                                        </form>
                                        </div>
                                
                                    </div>
                                </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <footer class="footer">
            <img class="footer_logo start_pos" data-intersection-id="footer_logo" data-intersection-threshold="0.75" src="./assets/footer-logo.png" />
        </footer>
        <script src="js/intersection-observer.js"></script>
        <script src="js/index.js"></script>
    </body>
</html>