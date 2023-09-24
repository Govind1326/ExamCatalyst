<?php  

include("config.php");

session_start();
if (!isset($_SESSION['uname'])) {
    header("location:s_login.php");
}
$uname = $_SESSION['uname'];
$a = mysqli_query($al, "SELECT * FROM s_regis WHERE sname='$uname'");
$b = mysqli_fetch_array($a);
$seat = $b['seatno'];
$name = $b['sname'];
$course = $b['ename'];



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
  <!--<link href="assets/vendor/bootstrap-3.4.1-dist/css/bootstrap.min.css" rel="stylesheet">-->

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
  <!-- Template Main JS File -->
  <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
  <!--<script src="assets/vendor/bootstrap-3.4.1-dist/js/bootstrap.min.js"></script>-->
  <script src="assets/js/main.js"></script>
  <!--jQuery-->
  <script src="assets/js/code.jquery.com_jquery-3.7.0.min.js"></script>

</head>

<body class="blog-page" data-bs-spy="scroll" data-bs-target="#navmenu">

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <a href="home.php" class="logo d-flex align-items-center me-auto me-xl-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="assets/img/logo.png" alt="">
        <h1>Exam Catalyst</h1>
        <span>.</span>
      </a>

      <!-- Nav Menu -->
      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Home</a></li>
          <li><a href="#footer">About</a></li>
          <li><a href="#footer">Contact</a></li>
        </ul>

        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav><!-- End Nav Menu -->

      <a class="btn-getstarted" href="s_logout.php">Logout</a>

    </div>
  </header>
  <!-- End Header -->
  
  

  <main id="main">

    <!-- Blog Page Title & Breadcrumbs -->
    <div data-aos="fade" class="page-title">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <br>
              <h1>Student Dashboard</h1>
              <p class="mb-0">Hello <?php echo $uname; ?>.</p>
<!--               <p class="mb-0">Seat No: <?php echo $seat; ?></p>
               <p class="mb-0">Course: <?php echo $course; ?></p>-->

            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="home.php">Home</a></li>
            <li class="current">Seat No: <?php echo $seat; ?></li>
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
                <img src="assets/img/blog/profile.jpg" alt="" class="img-fluid">
              </div>

              <p class="post-category">Profile details</p>

              <h2 class="title">
                  <a href="Sprofile.php">Click here to see</a>
              </h2>


            </article>
          </div><!-- End post list item -->

          <div class="col-xl-4 col-lg-6">
            <article>

              <div class="post-img">
                <img src="assets/img/blog/result.jpg" alt="" class="img-fluid">
              </div>

              <p class="post-category">Result</p>

              <h2 class="title">
                <a href="Sresult.php">Click here to see</a>
              </h2>


            </article>
          </div><!-- End post list item -->

          <div class="col-xl-4 col-lg-6">
            <article>

              <div class="post-img">
                <img src="assets/img/blog/blog-3.jpg" alt="" class="img-fluid">
              </div>

              <p class="post-category">Hall Ticket</p>

              <h2 class="title">
                  <a href="SHallTicket.php">Click here to see</a>
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
            <a href=""><img src="assets/img/twitter.png" style="height: 23px;" /></a>
            <a href=""><img src="assets/img/insta.png" style="height: 20px;" /></a>
            <a href=""><img src="assets/img/github.png" style="height: 20px;" /></a>
            <a href=""><img src="assets/img/linked.png" style="height: 20px;" /></a>
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
            <li><a href="#">SIDE MAP</a></li>
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
                Designed by <a href="">GARGI-GOVIND</a>
      </div>
    </div>

  </footer><!-- End Footer -->


</body>

</html>