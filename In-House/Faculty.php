<?php
include("config.php");

session_start();
if (!isset($_SESSION['email'])) {
    header("location:./login-page/login.php");
}
$email = $_SESSION['email'];
$a = mysqli_query($al, "SELECT * FROM f_login WHERE email='$email'");
$b = mysqli_fetch_array($a);
$name = $b['username'];
$sem = $b['sem'];
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <title>Dashboard</title>
        <meta content="" name="description">
        <meta content="" name="keywords">

        <!-- Favicons -->
        <link href="assets/img/favicon.png" rel="icon">
        <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
        <!-- Vendor CSS Files -->
        <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- Template Main CSS File -->
        <link href="assets/css/main.css" rel="stylesheet">

    </head>

    <body class="blog-page" data-bs-spy="scroll" data-bs-target="#navmenu">

        <!-- ======= Header ======= -->
        <header id="header" class="header fixed-top d-flex align-items-center">
            <div class="container-fluid d-flex align-items-center justify-content-between">

                <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
                    <!-- Uncomment the line below if you also wish to use an image logo -->
                    <img src="assets/img/logo.png" alt="">
                    <h1>Exam Catalyst</h1>
                    <span>.</span>
                </a>

                <!-- Nav Menu -->
                <nav id="navmenu" class="navmenu">
                    <ul>
                        <li><a href="home.php" class="active">Home</a></li>
                        <li><a href="#footer">About</a></li>
                        <li><a href="Student.php">Student Corner</a></li>
                        
                        <li class="dropdown has-dropdown"><a href=""><span>Services</span> <i class="bi bi-chevron-down"></i></a>
                            <ul class="dd-box-shadow">
                                <li><a href="f_add.php">Add Faculty</a></li>
                                <li><a href="change_p.php">Change Password</a></li> 
                                <li><a href="">Add Student</a></li>

                            </ul>
                        </li>
                    </ul>

                    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
                </nav><!-- End Nav Menu -->
                <a class="btn-getstarted" href="logout.php">Logout</a>

            </div>
        </header><!-- End Header -->


        <main id="main">

            <!-- Blog Page Title & Breadcrumbs -->
            <div data-aos="fade" class="page-title">
                <div class="heading">
                    <div class="container">
                        <div class="row d-flex justify-content-center text-center">
                            <div class="col-lg-8">
                                <br>
                                <h1>Faculty Dasboard</h1>
                                <p class="mb-0">Hello <?php echo $name; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <nav class="breadcrumbs">
                    <div class="container">
                        <ol>
                            <li><a href="home.php">Home</a></li>
                            <li class="current">Faculty Dasboard</li>
                        </ol>
                    </div>
                </nav>
            </div><!-- End Page Title -->

            <!-- Blog Section - Blog Page -->
            <section id="blog" class="blog">

                <div class="container" data-aos="fade-up" data-aos-delay="100">

                    <div class="row gy-4 posts-list">

                        <div class="col-xl-4 col-lg-6">
                            <article>

                                <div class="post-img">
                                    <img src="assets/img/result.png" alt="" class="img-fluid">
                                </div>

                                <p class="post-category">Student Profile</p>

                                <h2 class="title">
                                    <a href="blog-details.html">Submit Marks</a>
                                </h2>


                            </article>
                        </div><!-- End post list item -->

                        <div class="col-xl-4 col-lg-6">
                            <article>

                                <div class="post-img">
                                    <img src="assets/img/blog/result.jpg" alt="" class="img-fluid">
                                </div>

                                <p class="post-category">Sem : <?php echo $sem; ?></p>

                                <h2 class="title">
                                    <a href="viewuser.php">View Students</a>
                                </h2>


                            </article>
                        </div><!-- End post list item -->


                        <div class="col-xl-4 col-lg-6">
                            <article>

                                <div class="post-img">
                                    <img src="assets/img/blog/blog-3.jpg" alt="" class="img-fluid">
                                </div>

                                <p class="post-category">Exam Hall Ticket</p>

                                <h2 class="title">
                                    <a href="student/s_add.php">Create here</a>
                                </h2>


                            </article>
                        </div><!-- End post list item -->


                    </div><!-- End blog posts list -->


                </div>

            </section><!-- End Blog Section -->


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

        <!-- Scroll Top Button -->
        <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short">Top</i></a>

        <!-- Preloader -->


        <!-- Template Main JS File -->
        <script src="assets/js/main.js"></script>
    </body>

</html>