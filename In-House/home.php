<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <title>EXAM CATALYST</title>
        <script src="assets/js/code.jquery.com_jquery-3.7.0.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <!-- Favicons -->
        <link href="assets/img/logo.png" rel="icon" >
        <!-- <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

        <!-- Vendor CSS Files -->
        <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="assets/css/main.css" rel="stylesheet">
        <style>
            .alert {
                padding: 15px;
                background-color: #ffffff;
                color: rgb(255, 0, 0);
                width:300px;
            }
            .closebtn {
                margin-left: 15px;
                color: rgb(255, 0, 0);
                font-weight: bold;
                float: right;
                font-size: 22px;
                line-height: 20px;
                cursor: pointer;
                transition: 0.3s;
            }

            .closebtn:hover {
                color: black;
            }
        </style>
        <script>
            $(document).ready(function () {
                $("#alert1").hide();

                $(".gov").click(function () {
                    // $("#alert1").show();
                    $("#alert1").animate({
                        height: 'toggle'
                    });
                });
            });

        </script>
    </head>

    <body class="index-page" data-bs-spy="scroll" data-bs-target="#navmenu">


        <!-- ======= Header ======= -->
        <header id="header" class="header fixed-top d-flex align-items-center">
            <div class="container-fluid d-flex align-items-center justify-content-between">

                <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
                    <!-- Uncomment the line below if you also wish to use an image logo -->
                    <img src="assets/img/logo.png" alt="" style="height: 200px;">
                    <h1>Exam Catalyst</h1>
                    <span>.</span>
                </a>

                <!-- Nav Menu -->
                <nav id="navmenu" class="navmenu">
                    <ul>

                        <li><a href="#hero" class="active">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a id="Agradient" href="#hero" class="gov">Notice</a></li>
                        <!-- Small modal -->

                        <!-- <li><a href="index.html#services">Services</a></li> -->

                        <li><a href="#footer">Details</a></li>
                        <li class="dropdown has-dropdown"><a href=""><span>Services</span> <i class="bi bi-chevron-down"></i></a>
                            <ul class="dd-box-shadow">
                                <li><a href="Student.php#portfolio">Student Corner</a></li>
                                <li><a href="Faculty.php">Faculty Corner</a></li>
                            </ul>
                        </li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>

                    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
                </nav><!-- End Nav Menu -->

                <a class="btn-getstarted" href="./login-page/login.php" title="Please Click it">Login</a>

            </div>

        </header><!-- End Header -->

        <main id="main">  

            <!-- Hero Section - Home Page -->
            <section id="hero" class="hero">

                <img src="assets/img/Student.jpg" alt="" data-aos="fade-in">

                <div class="container">
                    <div class="row">
                        <div class="col-lg-10">
                            <h2 data-aos="fade-up" data-aos-delay="100">Welcome to Our Website</h2>
                            <p data-aos="fade-up" data-aos-delay="200">Here You Can Find Information About Your Department</p>
                            <br>
                            <div id="alert1">
                                <div class="alert">
                                  <!-- <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>  -->
                                    <strong>Result!</strong> uploaded in your login.
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

            </section><!-- End Hero Section -->

            <!-- About Section - Home Page -->
            <section id="about" class="about">

                <div class="container" data-aos="fade-up" data-aos-delay="100">
                    <div class="row align-items-xl-center gy-5">

                        <div class="col-xl-5 content">
                            <h3>About SPU</h3>
                            <h2>Establishment :
                                Sardar Patel University was established by an Act of the Legislative Assembly of the then Bombay Province in December 1955 and was recognised under 2f of the UGC Act in October 1968.
                                </p>
                                <a href="#" class="read-more btn-getstarted"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
                        </div>

                        <div class="col-xl-7">
                            <div class="row gy-4 icon-boxes">

                                <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                                    <div class="icon-box">
                                        <i class="bi bi-buildings"></i>
                                        <h3>Over View</h3>
                                        <p>Overview

                                            Sardar Patel University comprises of 27 Postgraduate Departments, a constituent college, and 148 colleges affiliated to it. There are 31 PG courses available in the affiliated colleges/institutions.</p>
                                    </div>
                                </div> <!-- End Icon Box -->

                                <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                                    <div class="icon-box">
                                        <i class="bi bi-clipboard-pulse"></i>
                                        <h3>About The Campus</h3>
                                        <p>
                                            Pollution-free, clean and lush green environs greet you as you arrive in Vallabh Vidyanagar and Sardar Patel University campus.</p>
                                    </div>
                                </div> <!-- End Icon Box -->

                                <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                                    <div class="icon-box">
                                        <i class="bi bi-command"></i>
                                        <h3>Awards</h3>
                                        <p>B School Excellence Award</p>
                                        <br>
                                        <p>International European Science Award</p>
                                        <br>
                                        <p>Manubhai Memorial Award</p>
                                        <br>
                                        <p>ETNow Award</p>

                                    </div>
                                </div> <!-- End Icon Box -->
                                <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
                                    <div class="icon-box">
                                        <i class="bi bi-graph-up-arrow"></i>
                                        <h3>Mission</h3>
                                        <p>
                                            Regeneration of rural Indian life with the application of the study and research in all the disciplines of knowledge in tune with the modern global developments.</p>
                                    </div>
                                </div> <!-- End Icon Box -->
                            </div>
                        </div>
                    </div>
                </div>

            </section><!-- End About Section -->

            <!-- Stats Section - Home Page -->
            <section id="stats" class="stats">

                <img src="assets/img/horizontal.jpg"  alt="" data-aos="fade-in">

                <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">

                    <div class="row gy-4">

                        <div class="col-lg-3 col-md-6">
                            <div class="stats-item text-center w-100 h-100">
                                3 M+<span data-purecounter-start="0" data-purecounter-end="756421" data-purecounter-duration="1" class="purecounter"></span>
                                <p>Students</p>
                            </div>
                        </div><!-- End Stats Item -->

                        <div class="col-lg-3 col-md-6">
                            <div class="stats-item text-center w-100 h-100">
                                298+<span data-purecounter-start="0" data-purecounter-end="198" data-purecounter-duration="1" class="purecounter"></span>
                                <p>Department</p>
                            </div>
                        </div><!-- End Stats Item -->

                        <div class="col-lg-3 col-md-6">
                            <div class="stats-item text-center w-100 h-100">
                                10'000+<span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1" class="purecounter"></span>
                                <p>Faculty Members</p>
                            </div>
                        </div><!-- End Stats Item -->

                        <div class="col-lg-3 col-md-6">
                            <div class="stats-item text-center w-100 h-100">
                                5000+<span data-purecounter-start="0" data-purecounter-end="602" data-purecounter-duration="1" class="purecounter"></span>
                                <p>Staff</p>
                            </div>
                        </div><!-- End Stats Item -->

                    </div>

                </div>

            </section><!-- End Stats Section -->

            <!-- Services Section - Home Page -->
            <section id="services" class="services">

                <!--  Section Title -->
                <div class="container section-title" data-aos="fade-up">
                    <h2>Academics</h2>
                    <!-- <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p> -->
                </div><!-- End Section Title -->

                <div class="container">

                    <div class="row gy-4">

                        <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="100">
                            <div class="service-item d-flex">
                                <div class="icon flex-shrink-0"><i class="bi bi-briefcase"></i></div>
                                <div>
                                    <h4 class="title"><a href="services-details.html" class="stretched-link">Faculties</a></h4>
                                    <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Service Item -->

                        <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="200">
                            <div class="service-item d-flex">
                                <div class="icon flex-shrink-0"><i class="bi bi-card-checklist"></i></div>
                                <div>
                                    <h4 class="title"><a href="services-details.html" class="stretched-link">Department</a></h4>
                                    <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
                                </div>
                            </div>
                        </div><!-- End Service Item -->

                        <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="300">
                            <div class="service-item d-flex">
                                <div class="icon flex-shrink-0"><i class="bi bi-bar-chart"></i></div>
                                <div>
                                    <h4 class="title"><a href="services-details.html" class="stretched-link">Publication</a></h4>
                                    <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
                                </div>
                            </div>
                        </div><!-- End Service Item -->

                        <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="400">
                            <div class="service-item d-flex">
                                <div class="icon flex-shrink-0"><i class="bi bi-binoculars"></i></div>
                                <div>
                                    <h4 class="title"><a href="services-details.html" class="stretched-link">Academic Centres</a></h4>
                                    <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                                </div>
                            </div>
                        </div><!-- End Service Item -->

                        <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="500">
                            <div class="service-item d-flex">
                                <div class="icon flex-shrink-0"><i class="bi bi-brightness-high"></i></div>
                                <div>
                                    <h4 class="title"><a href="services-details.html" class="stretched-link">National Service Scheme</a></h4>
                                    <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
                                </div>
                            </div>
                        </div><!-- End Service Item -->

                        <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="600">
                            <div class="service-item d-flex">
                                <div class="icon flex-shrink-0"><i class="bi bi-calendar4-week"></i></div>
                                <div>
                                    <h4 class="title"><a href="services-details.html" class="stretched-link">International Student Centre</a></h4>
                                    <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
                                </div>
                            </div>
                        </div><!-- End Service Item -->

                    </div>

                </div>

            </section><!-- End Services Section -->

            <!-- Features Section - Home Page -->
            <section id="features" class="features">

                <!--  Section Title -->
                <div class="container section-title" data-aos="fade-up">
                    <h2>IQAC</h2>
                    <p>Educational institutions established by the state and funded from the public exchequer for ‘public good’ are required to lead to improved quality of the services they offer. These academic institutions are increasingly recasting themselves on business models. For, the increased concern for accountability and transparency is virtually leading to their corporatization, resulting in demands for accountability to stakeholders, quality assurance, quality management, and Total Quality Management (TQM).</p>
                </div><!-- End Section Title -->

                <div class="container">

                    <div class="row gy-4 align-items-center features-item">
                        <div class="col-lg-5 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                            <h3>Sardar Vallabh bhai Patel</h3>
                            <p>
                                Vallabhbhai Jhaverbhai Patel, commonly known as Sardar Vallabhai Patel, was an Indian independence nationalist and barrister who served as the first Deputy Prime Minister and Home Minister of India from 1947 to 1950.
                            </p>
                            <a href="#" class="btn btn-get-started">Get Started</a>
                        </div>
                        <div class="col-lg-7 order-1 order-lg-2 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="100">
                            <div class="image-stack">
                                <img src="assets/img/sardar.jpg" alt="" class="stack-front">
                                <img src="assets/img/sardarbg.jpg" alt="" class="stack-back">
                            </div>
                        </div>
                    </div><!-- Features Item -->

                    <div class="row gy-4 align-items-stretch justify-content-between features-item ">
                        <div class="col-lg-6 d-flex align-items-center features-img-bg" data-aos="zoom-out">
                            <img src="assets/img/g20.png" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-5 d-flex justify-content-center flex-column" data-aos="fade-up">
                            <h3>India's G20 Presidency</h3>
                            <p>

                                <a class="btn btn-get-started align-self-start">BHARAT</a>
                        </div>
                    </div><!-- Features Item -->

                </div>

            </section><!-- End Features Section -->

            <!-- Call-to-action Section - Home Page -->
            <section id="call-to-action" class="call-to-action">

                <img src="assets/img/horizontal1.jpg" alt="">

                <div class="container">
                    <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
                        <div class="col-xl-10">
                            <div class="text-center">
                                <h3>Admission</h3>
                                <p>Please visit SPU at Vallabh Vidyanagar </p>
                                <a class="cta-btn" href="#">Raise a request</a>
                            </div>
                        </div>
                    </div>
                </div>

            </section><!-- End Call-to-action Section -->

            <!-- Recent-posts Section - Home Page -->
            <section id="recent-posts" class="recent-posts">

                <!--  Section Title -->
                <div class="container section-title" data-aos="fade-up">
                    <h2>Recent Activity</h2>
                    <p>DECLARE VARIABLE NOT WAR</p>
                </div><!-- End Section Title -->

                <div class="container">

                    <div class="row gy-4">

                        <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                            <article>

                                <div class="post-img">
                                    <img src="assets/img/blog/blog-1.jpg" alt="" class="img-fluid">
                                </div>

                                <p class="post-category">Sports</p>

                                <h2 class="title">
                                    <a href="blog-details.html">The Sports Weeks In SPU</a>
                                </h2>

                            </article>
                        </div><!-- End post list item -->

                        <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                            <article>

                                <div class="post-img">
                                    <img src="assets/img/blog/blog-2.jpg" alt="" class="img-fluid">
                                </div>

                                <p class="post-category">Result Is Available To Students</p>

                                <h2 class="title">
                                    <a href="blog-details.html">Simply Login To Your Account</a>
                                </h2>

                            </article>
                        </div><!-- End post list item -->

                        <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                            <article>

                                <div class="post-img">
                                    <img src="assets/img/blog/blog-3.jpg" alt="" class="img-fluid">
                                </div>

                                <p class="post-category">Canteen</p>

                                <h2 class="title">
                                    <a href="blog-details.html">Canteen Remain Close Till 2-Months</a>
                                </h2>

                            </article>
                        </div><!-- End post list item -->

                    </div><!-- End recent posts list -->

                </div>

            </section><!-- End Recent-posts Section -->

            <!-- Contact Section - Home Page -->
            <section id="contact" class="contact">

                <!--  Section Title -->
                <div class="container section-title" data-aos="fade-up">
                    <h2>Contact</h2>
                    <!-- <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p> -->
                </div><!-- End Section Title -->

                <div class="container" data-aos="fade-up" data-aos-delay="100">

                    <div class="row gy-4">
                        <div class="col-lg-6">
                            <div class="row gy-4">
                                <div class="col-md-6">
                                    <div class="info-item" data-aos="fade" data-aos-delay="200">
                                        <i class="bi bi-geo-alt"></i>
                                        <h3>Address</h3>
                                        <p>VVN (ANAND)</p>
                                        <p>GUJARAT, INDIA</p>
                                    </div>
                                </div><!-- End Info Item -->

                                <div class="col-md-6">
                                    <div class="info-item" data-aos="fade" data-aos-delay="300">
                                        <i class="bi bi-telephone"></i>
                                        <h3>Call Us</h3>
                                        <p>+91 123456789</p>
                                        <p>0265 2541670</p>
                                    </div>
                                </div><!-- End Info Item -->

                                <div class="col-md-6">
                                    <div class="info-item" data-aos="fade" data-aos-delay="400">
                                        <i class="bi bi-envelope"></i>
                                        <h3>Email Us</h3>
                                        <p>REGISTER_SPU@SPUVVN.edu</p>
                                        <p>spu@gmail.com</p>
                                    </div>
                                </div><!-- End Info Item -->

                                <div class="col-md-6">
                                    <div class="info-item" data-aos="fade" data-aos-delay="500">
                                        <i class="bi bi-clock"></i>
                                        <h3>Open Hours</h3>
                                        <p>Monday - Friday</p>
                                        <p>9:00AM - 05:00PM</p>
                                    </div>
                                </div><!-- End Info Item -->
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <form action="" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
                                <div class="row gy-4">
                                    <div class="col-md-6">
                                        <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                                    </div>
                                    <div class="col-md-6 ">
                                        <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                                    </div>
                                    <div class="col-md-12">
                                        <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                                    </div>
                                    <div class="col-md-12">
                                        <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                                    </div>
                                    <div class="col-md-12 text-center">
                                        <div class="loading">Loading</div>
                                        <div class="error-message"></div>
                                        <div class="sent-message">Your message has been sent. Thank you!</div>
                                        <button type="submit" >Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div><!-- End Contact Form -->
                    </div>
                </div>
            </section><!-- End Contact Section -->
        </main>

        <!-- ======= Footer ======= -->
        <footer id="footer" class="footer">

            <div class="container footer-top">
                <div class="row gy-4">
                    <div class="col-lg-5 col-md-12 footer-about">
                        <a href="index.html" class="logo d-flex align-items-center">
                            <span>EXAM CATALYST</span>
                        </a>
                        <p>It is platform where student get their exam information.</p>
                        <div class="social-links d-flex mt-4">
                            <a href=""><img src="assets/img/twitter.png" style="height: 23px;" ></img></a>
                            <a href=""><img src="assets/img/insta.png" style="height: 20px;" ></img></a>
                            <a href=""><img src="assets/img/github.png" style="height: 20px;" ></img></a>
                            <a href=""><img src="assets/img/linked.png" style="height: 20px;" ></img></a>
                        </div>
                    </div>

                    <div class="col-lg-2 col-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Terms of service</a></li>
                            <li><a href="#">Privacy policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><a href="#">Student</a></li>
                            <li><a href="#">Faculty</a></li>
                            <li><a href="#">HOD</a></li>
                            <li><a href="#">SIDE AMAP</a></li>
                            <li><a href="#">INQUIRY</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                        <h4>Contact Us</h4>
                        <p>VVN, ANAND</p>
                        <p>GUJARAT, INDIA</p>
                        <!-- <p>United States</p> -->
                        <p class="mt-4"><strong>Phone:</strong> <span>+91 1234567898</span></p>
                        <p><strong>Email:</strong> <span>spu@gmail.com</span></p>
                    </div>

                </div>
            </div>

            <div class="container copyright text-center mt-4">
                <p>&copy; <span>Copyright</span> <strong class="px-1">EXAM CATALYST</strong> <span>All Rights Reserved</span></p>
                <div class="credits">
                    Designed by <a href="https://bootstrapmade.com/">GARGI-GOVIND</a>
                </div>
            </div>

        </footer><!-- End Footer -->
        <script src="assets/js/main.js"></script>
    </body>

</html>