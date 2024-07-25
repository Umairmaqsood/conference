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
    <header id="header" style="background-color:#000820;" class="header d-flex align-items-center fixed-top">
      <div
        class="container-fluid container-xl position-relative d-flex align-items-center"
      >
        <a href="index.php" class="logo d-flex align-items-center me-auto">
          <img src="assets/img/ficselogo.png" alt="ficse" />

          <!-- <h1 class="sitename">TheEvent</h1>  -->
        </a>

        <nav id="navmenu" class="navmenu">
          <ul>
            <li>
              <a href="index.php">Home<br /></a>
            </li>

            <li class="dropdown">
              <a href="#"
                ><span>Authors/Presenters</span>
                <i class="bi bi-chevron-down toggle-dropdown"></i
              ></a>
              <ul>
                <li><a href="#speakers">Speakers</a></li>
                <li><a href="call-for-paper.php">Call for Papers</a></li>
                <li><a href="guidelines.php">Submission Guidelines</a></li>
              </ul>
            </li>
            <li><a href="event-schedule.php">Schedule</a></li>
            <!-- <li class="dropdown">
              <a href="patron.php"
                ><span>Patrons</span>
                <i class="bi bi-chevron-down toggle-dropdown"></i
              ></a>
              <ul>
              <li><a href="patron-chief.php">Patrons In Chief</a></li>
              </ul>
</li> -->
            <li class="dropdown">
              <a href="#"
                ><span>Committees</span>
                <i class="bi bi-chevron-down toggle-dropdown"></i
              ></a>
              <ul>
              <li>
                  <a href="executive-committee.php">Executive Committee</a>
                </li>
                <li><a href="organizing-committee.php">Organizing Committee</a></li>
                <li><a href="technical-committee.php">Technical Committee</a></li>
                <!-- <li><a href="chief-organizer.php">Chief Organizer</a></li> -->
                <!-- <li><a href="reviewer-committee.php">Reviewers Committee</a></li>
                <li><a href="awareness-committee.php">Awareness/Outreach Committee</a></li>
                <li><a href="support-service-committee.php">Support Services Committee</a></li>
                <li><a href="finance-committee.php">Finance Committee</a></li>
                <li><a href="operation-committee.php">Operations Committee</a></li> -->
              </ul>
            
            </li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="about.php">About Us</a></li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
        <a class="cta-btn d-none d-sm-block" href="https://easychair.org/">Submit Paper</a>
      </div>
    </header>
</body>
</html>

