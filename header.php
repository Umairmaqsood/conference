<?php
include("conn.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>FICSE</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="assets/img/ficselogo.jpg" rel="icon" />
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <!-- Vendor CSS Files -->
    <link
      href="assets/vendor/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="assets/vendor/bootstrap-icons/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
    <link
      href="assets/vendor/glightbox/css/glightbox.min.css"
      rel="stylesheet"
    />
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <!-- Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet" />
  </head>

  <body class="index-page">
  <header id="header" class="header d-flex align-items-center fixed-top">
      <div
        class="container-fluid container-xl position-relative d-flex align-items-center"
      >
        <a href="index.php" class="logo d-flex align-items-center me-auto">
          <img src="assets/img/ficselogo.png" alt="" />

        </a>

        <nav id="navmenu" class="navmenu">
          <ul>
            <li>
              <a href="index.php" class="active">Home<br /></a>
            </li>

            <li class="dropdown">
              <a href="#"
                ><span>Authors/Presenters</span>
                <i class="bi bi-chevron-down toggle-dropdown"></i
              ></a>
              <ul>
                <li><a href="speakers.php">Speakers</a></li>
                <li><a href="panel-discussions.php">Panel Discussion</a></li>

                <li><a href="call-for-paper.php">Call for Papers</a></li>
                <li><a href="guidelines.php">Submission Guidelines</a></li>
              </ul>
            </li>
            <li><a href="event-schedule.php">Schedule</a></li>

           

            <li class="dropdown">
              <a href="#"
                ><span>Committees</span>
                <i class="bi bi-chevron-down toggle-dropdown"></i
              ></a>
              <ul>
              <li>
                  <a href="executive-committee.php">Executive Committee</a>
                </li>
                <li>
                  <a href="organizing-committee.php">Organizing Committee</a>
                </li>
                <li>
                  <a href="technical-committee.php">Technical Committee</a>
                </li>
              </ul>
            </li>
            

            <li class="dropdown">
              <a href="about.php"
                ><span>About Us</span>
                <i class="bi bi-chevron-down toggle-dropdown"></i
              ></a>
          
              <ul>
              <li><a href="contact.php">Contact</a></li>
              <li><a href="sponsors.php">Sponsors</a></li>
              <li><a href="fee-schedule.php">Fee Schedule</a></li>

              </ul>
            </li>
            <li><a href="register.php"><button style="color:white; background-color:red; padding:8px 14px;  border-color:red; border-radius:20px;">Register As Attendee</button></a></li>   
            <li><a href="https://easychair.org/conferences/?conf=ficse2024"><button style="color:white; border-color:red; background-color:red; padding:8px 14px; border-radius:20px;">Submit Paper</button></a></li>   

          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
        <!-- <a class="cta-btn d-none d-sm-block" href="https://easychair.org/conferences/?conf=ficse2024">Submit Paper</a> -->

      </div>
    </header>
</body>
</html>

