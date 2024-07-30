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

    <!-- Main CSS FILE LINK -->
    <link href="assets/css/main.css" rel="stylesheet" />
  </head>

  <body class="index-page">
    <header id="header" class="header d-flex align-items-center fixed-top">
      <div
        class="container-fluid container-xl position-relative d-flex align-items-center"
      >
        <a href="index.php" class="logo d-flex align-items-center me-auto">
          <img src="assets/img/ficselogo.png" alt="" />

          <!-- <h1 class="sitename">TheEvent</h1>  -->
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
                <li><a href="#speakers">Speakers</a></li>
                <li><a href="#call-for-papers">Call for Papers</a></li>
                <li><a href="guidelines.php">Submission Guidelines</a></li>
              </ul>
            </li>
            <li><a href="#schedule">Schedule</a></li>

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
                <li>
                  <a href="organizing-committee.php">Organizing Committee</a>
                </li>
                <li>
                  <a href="technical-committee.php">Technical Committee</a>
                </li>
                <!-- <li><a href="chief-organizer.php">Chief Organizer</a></li> -->
                <!-- <li>
                  <a href="reviewer-committee.php">Reviewers Committee</a>
                </li>
                <li>
                  <a href="awareness-committee.php"
                    >Awareness/Outreach Committee</a
                  >
                </li>
                <li>
                  <a href="support-service-committee.php"
                    >Support Services Committee</a
                  >
                </li>
                <li><a href="finance-committee.php">Finance Committee</a></li>
                <li>
                  <a href="operation-committee.php">Operations Committee</a>
                </li> -->
              </ul>
            </li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="about.php">About Us</a></li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
        <a class="cta-btn d-none d-sm-block" href="https://easychair.org/conferences/?conf=ficse2024">Submit Paper</a>

      </div>
    </header>

    <main class="main">
      <!-- Hero Section -->
      <section id="hero" class="hero section dark-background">
        <img src="assets/img/speakers/furcbuilding.jpg" alt="" data-aos="fade-in" class="" />

        <div
          class="container d-flex flex-column align-items-center text-center mt-auto"
        >
          <h3
            data-aos="fade-up"
            data-aos-delay="100"
            style="text-align: center; color: white"
          >
            FUSST
          </h3>
          <h3
            data-aos="fade-up"
            data-aos-delay="100"
            style="text-align: center; color: white"
          >
            INTERNATIONAL CONFERENCE ON COMPUTER SCIENCE AND ENGINEERING
          </h3>
          <p
            data-aos="fade-up"
            data-aos-delay="200"
            style="text-align: center; color: white"
          >
            September 26-27, 2024
          </p>
          <p
            data-aos="fade-up"
            data-aos-delay="200"
            style="text-align: center; color: white"
          >
            Foundation University School of Science and Technology, Rawalpindi,
            Pakistan
          </p>
          <div data-aos="fade-up" data-aos-delay="300" class="">
            <a
              href="https://youtu.be/UEE9TzoFlH0"
              class="glightbox pulsating-play-btn mt-3"
            ></a>
          </div>
        </div>

        <div class="about-info mt-auto position-relative">
          <div class="container position-relative" data-aos="fade-up">
            <div class="row">
              <div class="col-lg-5">
                <h2>About The Event</h2>
                <p>
                  Foundation University Islamabad is organizing its first
                  international conference with the name of FUSST International
                  Conference on Computer Science and Engineering (FICSE)” from
                  September 26–27, 2024 at Foundation University Islamabad,
                  School of Science and Technology. The conference will
                  <a href="about.php" style="text-decoration: none"
                    >read more</a
                  >
                </p>
              </div>
              <div class="col-lg-4">
              <h3>Time Left</h3>
              <div id="countdown" style="font-size: 2em; ">
        <div style="display: inline-block; width: 70px;">
            <span id="days"></span>
            <div class="label" style="font-size: 0.5em; color: #D5D3D2 ;">Days</div>
        </div>
        <div style="display: inline-block; width: 70px;">
            <span id="hours"></span>
            <div class="label" style="font-size: 0.5em; color: #D5D3D2 ;">Hours</div>
        </div>
        <div style="display: inline-block; width: 70px;">
            <span id="minutes"></span>
            <div class="label" style="font-size: 0.5em; color:#D5D3D2 ;">Minutes</div>
        </div>
        <div style="display: inline-block; width: 70px;">
            <span id="seconds"></span>
            <div class="label" style="font-size: 0.5em; color: #D5D3D2 ;">Seconds</div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Set the date we're counting down to
            var countDownDate = new Date("September 26, 2024 00:00:00").getTime();

            // Update the count down every 1 second
            var countdownFunction = setInterval(function() {
                // Get today's date and time
                var now = new Date().getTime();

                // Find the distance between now and the count down date
                var distance = countDownDate - now;

                // Time calculations for days, hours, minutes, and seconds
                var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                // Pad numbers with leading zeros
                days = days < 10 ? "0" + days : days;
                hours = hours < 10 ? "0" + hours : hours;
                minutes = minutes < 10 ? "0" + minutes : minutes;
                seconds = seconds < 10 ? "0" + seconds : seconds;

                // Display the result
                document.getElementById("days").innerHTML = days;
                document.getElementById("hours").innerHTML = hours;
                document.getElementById("minutes").innerHTML = minutes;
                document.getElementById("seconds").innerHTML = seconds;

                // If the count down is over, write some text
                if (distance < 0) {
                    clearInterval(countdownFunction);
                    document.getElementById("countdown").innerHTML = "EXPIRED";
                }
            }, 1000);
        });
    </script>
              </div>
              <div class="col-lg-3">
              <h3>Where</h3>
              <p>FUSST, Rawalpindi Pakistan</p>
                <h3>When</h3>
                <p>Saturday-Sunday<br />September 26-27, 2024</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- /Hero Section -->



    
      <section id="speakers" class="events section">
  
   <div class="container" data-aos="fade-up" data-aos-delay="100">   
   <div class="container section-title" data-aos="fade-up">
     <h2>Keynote Speakers<br /></h2>
   </div>
       <div class="row gy-4">
         
       <div class="col-xl-4 col-lg-4 col-md-4" data-aos="fade-up" data-aos-delay="100" style="text-align:center">
               <div class="member">
          
                   <img src="assets/img/speakers/shoaib.jpg" class="img-fluid rounded-circle" alt="" style="width: 320px; height: 320px; object-fit: cover;" />
                   <div class="member-info">
                       <div class="member-info-content">
                           <h4>
                           Dr. Shoab A. Khan
                           </h4>
                           <h5>
                           Chairman Engineering Education Trust, Chancellor
                           </h5>
                       </div>
                   </div>
               </div>
           </div>
           <div class="col-xl-4 col-lg-4 col-md-4" data-aos="fade-up" data-aos-delay="100" style="text-align:center">
               <div class="member">
           
                   
                   <img src="assets/img/speakers/ahsan.jfif" class="img-fluid rounded-circle" alt="" style="width: 320px; height: 320px; object-fit: cover;" />
                   <div class="member-info">
                       <div class="member-info-content">
                           <h4>
                           Prof Dr. Ali Ahsan
                           </h4>
                           <h5>
                           Torrens University Australia
                           </h5>
                       </div>
                   </div>
               </div>
           </div>
           
        
           <div class="col-xl-4 col-lg-4 col-md-4" data-aos="fade-up" data-aos-delay="100" style="text-align:center">
               <div class="member">         
                   <img src="assets/img/speakers/shaheen.png" class="img-fluid rounded-circle" alt="" style="width: 320px; height: 320px; object-fit: cover;" />
                   <div class="member-info">
                       <div class="member-info-content">
                           <h4>
                           Prof Dr. Muhammad Shaheen
                           </h4>
                           <h5>
                           DEAN FEIT, FUSST
                           </h5>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
</section>

     
     
      <!-- Calls for papers -->
      <section
        id="call-for-papers"
        class="buy-tickets section light-background"
      >
        <!-- Section Title -->

        <div class="container section-title" data-aos="fade-up">
          <h2>Call for Papers</h2>
          <p style="color:black;">Submit your Research Papers/Proposals.</p>
          <p style="color:black;"> Extended Version of the accepted papers will be published in <b>"Y"</b> Category Journal <b>Foundation University Journal of Engineering and Applied Sciences</b> (<a  style="text-docration:none; color:black; font-weight:bold;"  href="https://fujeas.fui.edu.pk">https://fujeas.fui.edu.pk</a>). </p>
          </div>

        <div class="container">
          <div
            class="row gy-4 pricing-item featured mt-4"
            data-aos="fade-up"
            data-aos-delay="200"
          >
            <p style="color: white; text-align: center">
              Research Papers/ Proposals for workshop/ Proposal for discussion
              session in the domain of Information Technology, Electrical,
              Instrumentation and Communication Engineering are invited from the
              academicians/ industry resource persons. The sub domains of each
              discipline in which the manuscripts will be accepted are as
              follows:
            </p>
            <div
              class="col-lg-6 d-flex align-items-center justify-content-center"
            >
              <ul>
                <h5 style="color: white">1. Computing Applications</h5>
                <li>&#8226; Artificial Intelligence and Big Data</li>
                <li>&#8226; Information System and Cyber Security</li>
                <li>&#8226; Soft Computing Quantum Computing Grid Computing</li>
                <li>&#8226; Information Theory and Coding</li>
                <li>&#8226; Block Chain Technologies</li>
                <li>&#8226; Data Science and Big Data Analytics</li>
                <li>&#8226; Software Engineering and Development</li>
                <li>&#8226; Biomedical Engineering</li>

                <h5 style="color: white; margin-top: 15px">
                  2. Biomedical & Signal Processing
                </h5>
                <li>&#8226; Bio Informatics</li>
                <li>&#8226; Digital Signal Processing</li>
                <li>&#8226; Machine Learning and Its Application</li>
                <li>&#8226; Biomedical Imaging</li>
                <li>&#8226; Speech and Music Processing</li>
                <li>&#8226; Image Processing</li>
                <li>&#8226; Techniques</li>
                <li>&#8226; Pattern Recognition</li>
              </ul>
            </div>

            <div
              class="col-lg-6 d-flex align-items-center justify-content-center"
            >
              <ul>
                <h5 style="color: white">
                  3. Electronic Devices Circuits and Application
                </h5>
                <li>&#8226; Semiconductor Devices</li>
                <li>&#8226; Power Electronics and Electrical Drives</li>
                <li>&#8226; Advanced Power and Control Systems</li>
                <li>&#8226; Sensor Technology and Virtual Instrumentation</li>
                <li>&#8226; VLSI Technology and Design</li>
                <li>&#8226; Embedded Systems and Robotics</li>
                <li>&#8226; Biomedical Instrumentation</li>

                <h5 style="color: white; margin-top: 15px">
                  4. Telecom Engineering and Application
                </h5>
                <li>&#8226; 5G/6G</li>
                <li>&#8226; Communication Technology</li>
                <li>&#8226; Remote Sensing and Satellite Communication</li>
                <li>&#8226; Wireless Technology and Applications</li>
                <li>&#8226; System Modeling and Simulation</li>
                <li>&#8226; RF and Microwave</li>
                <li>&#8226; Engineering</li>
                <li>&#8226; Optimization Techniques</li>
                <li>&#8226; Internet of Things</li>
                <li>&#8226; Electronic Devices Circuits and Applications</li>
              </ul>
            </div>
          </div>
        </div>
      </section>

      <!-- Schedule Section -->
      <section id="schedule" class="schedule section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>Event Schedule<br /></h2>
          <p style="color:black;">September 26-27, 2024</p>
        </div>
        <!-- End Section Title -->

        <div class="container">
          <ul
            class="nav nav-tabs"
            role="tablist"
            data-aos="fade-up"
            data-aos-delay="100"
          >
            <li class="nav-item">
              <a
                class="nav-link active"
                href="#day-1"
                role="tab"
                data-bs-toggle="tab"
                >Day 1</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#day-2" role="tab" data-bs-toggle="tab"
                >Day 2</a
              >
            </li>
          </ul>

          <div
            class="tab-content row justify-content-center"
            data-aos="fade-up"
            data-aos-delay="200"
          >
            <!-- <h3 class="sub-heading">
              Voluptatem nulla veniam soluta et corrupti consequatur neque
              eveniet officia. Eius necessitatibus voluptatem quis labore
              perspiciatis quia.
            </h3> -->


            <div
              role="tabpanel"
              class="col-lg-9 tab-pane fade show active"
              id="day-1"
            >
            <div class="row schedule-item" style="text-align: center; margin-bottom: 0; color: black;">
    <div class="col-md-12">
        <p style="margin: 0; line-height: 1; font-weight: bold; color: black;">9:00 to 10:20 (Session 1) 4 Papers</p>
    </div>
</div>

<div class="row schedule-item" style="text-align: center; margin-bottom: 0; color: black;">
    <div class="col-md-12">
        <p style="margin: 0; line-height: 1; font-weight: bold; color: black;">10:20 to 10:50 - Tea break</p>
    </div>
</div>

<div class="row schedule-item" style="text-align: center; margin-bottom: 0; color: black;">
    <div class="col-md-12">
        <p style="margin: 0; line-height: 1; font-weight: bold; color: black;">10:50 to 11:20 - Keynote 1</p>
    </div>
</div>

<div class="row schedule-item" style="text-align: center; margin-bottom: 0; color: black;">
    <div class="col-md-12">
        <p style="margin: 0; line-height: 1; font-weight: bold; color: black;">11:20 to 12:20 - Session 2</p>
    </div>
</div>

<div class="row schedule-item" style="text-align: center; margin-bottom: 0; color: black;">
    <div class="col-md-12">
        <p style="margin: 0; line-height: 1; font-weight: bold; color: black;">12:20 - 13:00 - Keynote 2</p>
    </div>
</div>

<div class="row schedule-item" style="text-align: center; margin-bottom: 0; color: black;">
    <div class="col-md-12">
        <p style="margin: 0; line-height: 1; font-weight: bold; color: black;">13:00 to 14:00 - Lunch break</p>
    </div>
</div>

<div class="row schedule-item" style="text-align: center; margin-bottom: 0; color: black;">
    <div class="col-md-12">
        <p style="margin: 0; line-height: 1; font-weight: bold; color: black;">14:00 to 15:00 - Session 3</p>
    </div>
</div>

<div class="row schedule-item" style="text-align: center; margin-bottom: 0; color: black;">
    <div class="col-md-12">
        <p style="margin: 0; line-height: 1; font-weight: bold; color: black;">15:00 to 15:30 - Keynote 3</p>
    </div>
</div>

<div class="row schedule-item" style="text-align: center; margin-bottom: 0; color: black;">
    <div class="col-md-12">
        <p style="margin: 0; line-height: 1; font-weight: bold; color: black;">15:30 to 16:30 - Workshop</p>
    </div>
</div>

            </div>
            <!-- End Schdule Day 1 -->

            <!-- Schdule Day 2 -->
            <div role="tabpanel" class="col-lg-9 tab-pane fade" id="day-2">


            <div class="row schedule-item" style="text-align: center; margin-bottom: 0; color: black;">
    <div class="col-md-12">
        <p style="margin: 0; line-height: 1; font-weight: bold; color: black;">9:00 to 10:20 (Session 1) 4 Papers</p>
    </div>
</div>

<div class="row schedule-item" style="text-align: center; margin-bottom: 0; color: black;">
    <div class="col-md-12">
        <p style="margin: 0; line-height: 1; font-weight: bold; color: black;">10:20 to 10:50 - Tea break</p>
    </div>
</div>

<div class="row schedule-item" style="text-align: center; margin-bottom: 0; color: black;">
    <div class="col-md-12">
        <p style="margin: 0; line-height: 1; font-weight: bold; color: black;">10:50 to 11:20 - Keynote 1</p>
    </div>
</div>

<div class="row schedule-item" style="text-align: center; margin-bottom: 0; color: black;">
    <div class="col-md-12">
        <p style="margin: 0; line-height: 1; font-weight: bold; color: black;">11:20 to 12:20 - Session 2</p>
    </div>
</div>

<div class="row schedule-item" style="text-align: center; margin-bottom: 0; color: black;">
    <div class="col-md-12">
        <p style="margin: 0; line-height: 1; font-weight: bold; color: black;">12:20 - 13:00 - Keynote 2</p>
    </div>
</div>

<div class="row schedule-item" style="text-align: center; margin-bottom: 0; color: black;">
    <div class="col-md-12">
        <p style="margin: 0; line-height: 1; font-weight: bold; color: black;">13:00 to 14:00 - Lunch break</p>
    </div>
</div>

<div class="row schedule-item" style="text-align: center; margin-bottom: 0; color: black;">
    <div class="col-md-12">
        <p style="margin: 0; line-height: 1; font-weight: bold; color: black;">14:00 to 15:00 - Session 3</p>
    </div>
</div>

<div class="row schedule-item" style="text-align: center; margin-bottom: 0; color: black;">
    <div class="col-md-12">
        <p style="margin: 0; line-height: 1; font-weight: bold; color: black;">15:00 to 15:30 - Keynote 3</p>
    </div>
</div>

<div class="row schedule-item" style="text-align: center; margin-bottom: 0; color: black;">
    <div class="col-md-12">
        <p style="margin: 0; line-height: 1; font-weight: bold; color: black;">15:30 to 16:30 - Workshop</p>
    </div>
</div>              
            </div>
          </div>
        </div>
      </section>
      <!-- /Schedule Section -->

      <!-- Buy Tickets Section -->
      <section id="buy-tickets" class="buy-tickets section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>Calendar</h2>
          <p style="color:black;">Stay updated with our upcoming events and important dates.</p>
        </div>

        <div class="container">
          <div
            class="row gy-4 pricing-item featured mt-4"
            data-aos="fade-up"
            data-aos-delay="200"
          >
            <div
              class="col-lg-8 d-flex align-items-center justify-content-center"
            >
              <ul>
                
                <li>
                  <i class="bi bi-calendar-event"></i>&nbsp;
                  <strong
                    >Last Date for Submission of Proposals:&nbsp;August 10,
                    2024</strong
                  >
                </li>
                <li>
                  <i class="bi bi-calendar-event"></i>&nbsp;
                  <strong
                    >Last Date for Submission of Papers:&nbsp;August 15,
                    2024</strong
                  >
                </li>
                <li>
                  <i class="bi bi-calendar-event"></i>&nbsp;
                  <strong
                    >Submission of Camera-ready Papers and
                    Presentations:&nbsp;September 10, 2024</strong
                  >
                </li>
                <li>
                  <i class="bi bi-calendar-event"></i>&nbsp;
                  <strong>Proceedings to be Published :&nbsp;2025</strong>
                </li>
                <li>
                  <i class="bi bi-calendar-event"></i>&nbsp;
                  <strong>Conference Dates:&nbsp;September 26-27, 2024</strong>
                </li>
              </ul>
            </div>
          </div>
          <!-- End Pricing Item -->
        </div>
      </section>
      <!-- /Buy Tickets Section -->

      <!-- Buy Tickets Section -->
      <section id="buy-tickets" class="buy-tickets section light-background">
        <!-- Section Title -->

        <div class="container section-title" data-aos="fade-up">
          <h2>Fee Schedule</h2>
          <p style="color:black;">Check out our attractive and affordable registration options.</p>
        </div>

        <div class="container">
          <div
            class="row gy-4 pricing-item featured mt-4"
            data-aos="fade-up"
            data-aos-delay="200"
          >
            <div
              class="col-lg-6 d-flex align-items-center justify-content-center"
            >
              <ul>
              
                <li>
                  <i class="bi bi-check-circle"></i>&nbsp;
                  <strong id="fee-student">
                    Registration Fee for Student Presenter:&nbsp;3000 PKR (15
                    USD)
                  </strong>
                </li>
                <li>
                  <i class="bi bi-check-circle"></i>&nbsp;
                  <strong id="fee-regular">
                    Registration Fee for Regular Attendee:&nbsp;4000 PKR (20
                    USD)
                  </strong>
                </li>
                <li>
                  <i class="bi bi-check-circle"></i>&nbsp;
                  <strong id="fee-professional">
                    Registration Fee for Professional Presenter:&nbsp;5000 PKR
                    (25 USD)
                  </strong>
                </li>
              </ul>
            </div>
          </div>
          <!-- End Pricing Item -->
        </div>
      </section>
      <!-- /Buy Tickets Section -->

      <!-- Venue Section -->
      <section id="venue" class="venue section">
  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Event Venue<br /></h2>
    <p style="color:black;">
      Faculty of Engineering and Applied Sciences, Foundation University School of Science and
      Technology New Lalazar Rawalpindi, Pakistan.
    </p>
  </div>
  <!-- End Section Title -->

  <div class="container-fluid" data-aos="fade-up">
    <div class="row g-0">
      <div class="col-lg-6 venue-map" style="padding-right: 15px;">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2852.086970124181!2d73.07153891557309!3d33.56111938054432!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38df9324c7c53e6b%3A0xc63a7b443de04c59!2sNew%20Lalazar%2C%20Rawalpindi%2C%20Punjab!5e0!3m2!1sen!2spk!4v1625859166180!5m2!1sen!2s"
          width="600"
          height="450"
          frameborder="0"
          style="border: 0"
          allowfullscreen=""
        ></iframe>
      </div>

      <div class="col-lg-6 venue-info" style="padding-left: 15px;">
        <div class="row justify-content-center">
          <div class="col-11 col-lg-8 position-relative">
            <!-- <h4 style="color:white;">Seminar Hall 4th Floor, FUSST, Rawalpindi Pakistan</h4> -->
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
      <!-- /Venue Section -->

      <!-- Gallery Section -->
      <!-- <section id="gallery" class="gallery section">
    
        <div class="container section-title" data-aos="fade-up">
          <h2>Gallery</h2>
          <p >
            Explore our gallery showcasing memorable moments from our events,
            featuring insightful discussions and presentations.
          </p>
        </div>
      

        <div class="container" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper init-swiper">
            <script type="application/json" class="swiper-config">
              {
                "loop": true,
                "speed": 600,
                "autoplay": {
                  "delay": 5000
                },
                "slidesPerView": "auto",
                "centeredSlides": true,
                "pagination": {
                  "el": ".swiper-pagination",
                  "type": "bullets",
                  "clickable": true
                },
                "breakpoints": {
                  "320": {
                    "slidesPerView": 1,
                    "spaceBetween": 0
                  },
                  "768": {
                    "slidesPerView": 3,
                    "spaceBetween": 20
                  },
                  "1200": {
                    "slidesPerView": 5,
                    "spaceBetween": 20
                  }
                }
              }
            </script>
            <div class="swiper-wrapper align-items-center">
              <div class="swiper-slide">
                <a
                  class="glightbox"
                  data-gallery="images-gallery"
                  href="assets/img/speakers/furcbuilding.jpg"
                  ><img
                    src="assets/img/speakers/furcbuilding.jpg"
                    class="img-fluid"
                    alt=""
                /></a>
              </div>
              <div class="swiper-slide">
                <a
                  class="glightbox"
                  data-gallery="images-gallery"
                  href="assets/img/event-gallery/event-gallery-2.jpg"
                  ><img
                    src="assets/img/event-gallery/event-gallery-2.jpg"
                    class="img-fluid"
                    alt=""
                /></a>
              </div>
              <div class="swiper-slide">
                <a
                  class="glightbox"
                  data-gallery="images-gallery"
                  href="assets/img/event-gallery/event-gallery-3.jpg"
                  ><img
                    src="assets/img/event-gallery/event-gallery-3.jpg"
                    class="img-fluid"
                    alt=""
                /></a>
              </div>
              <div class="swiper-slide">
                <a
                  class="glightbox"
                  data-gallery="images-gallery"
                  href="assets/img/event-gallery/event-gallery-4.jpg"
                  ><img
                    src="assets/img/event-gallery/event-gallery-4.jpg"
                    class="img-fluid"
                    alt=""
                /></a>
              </div>
              <div class="swiper-slide">
                <a
                  class="glightbox"
                  data-gallery="images-gallery"
                  href="assets/img/event-gallery/event-gallery-5.jpg"
                  ><img
                    src="assets/img/event-gallery/event-gallery-5.jpg"
                    class="img-fluid"
                    alt=""
                /></a>
              </div>
              <div class="swiper-slide">
                <a
                  class="glightbox"
                  data-gallery="images-gallery"
                  href="assets/img/event-gallery/event-gallery-6.jpg"
                  ><img
                    src="assets/img/event-gallery/event-gallery-6.jpg"
                    class="img-fluid"
                    alt=""
                /></a>
              </div>
              <div class="swiper-slide">
                <a
                  class="glightbox"
                  data-gallery="images-gallery"
                  href="assets/img/event-gallery/event-gallery-7.jpg"
                  ><img
                    src="assets/img/event-gallery/event-gallery-7.jpg"
                    class="img-fluid"
                    alt=""
                /></a>
              </div>
              <div class="swiper-slide">
                <a
                  class="glightbox"
                  data-gallery="images-gallery"
                  href="assets/img/event-gallery/event-gallery-8.jpg"
                  ><img
                    src="assets/img/event-gallery/event-gallery-8.jpg"
                    class="img-fluid"
                    alt=""
                /></a>
              </div>
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </section> -->

      <!-- Faq Section -->
      <section id="faq" class="faq section light-background">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>Frequently Asked Questions</h2>
          <p style="color:black;">Find answers to common questions about our event below.</p>
        </div>
        <!-- End Section Title -->

        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-10" data-aos="fade-up" data-aos-delay="100">
              <div class="faq-container">
                <div class="faq-item faq-active">
                  <h3>What are the dates and location of the event?</h3>
                  <div class="faq-content">
                    <p style="color:black;">
                      The event will be held on September 26-27, 2024 at
                      Faculty of Engineering and  Applied Sciences, Foundation University School of Science and
            Technology New Lalazar Rawalpindi, Pakistan.
                    </p>
                  </div>
                  <i class="faq-toggle bi bi-chevron-right"></i>
                </div>
                <!-- End Faq item-->

                <div class="faq-item">
                  <h3>How can I register for the event?</h3>
                  <div class="faq-content">
                    <p style="color:black;">
                      Registration can be done through our website or
                      you can contact our registration team at   +92-51-5151437, <br> +92-51-5151991
                    </p>
                  </div>
                  <i class="faq-toggle bi bi-chevron-right"></i>
                </div>
                <!-- End Faq item-->

                <div class="faq-item">
                  <h3>What topics will be covered at the event?</h3>
                  <div class="faq-content">
                    <p style="color:black;">
                      The event will cover topics such as Computing Applications, Electronic Devices Circuits and Application
                      , Biomedical & Signal Processing , Telecom Engineering and Application.
                    </p>
                  </div>
                  <i class="faq-toggle bi bi-chevron-right"></i>
                </div>
                <!-- End Faq item-->

                <!-- <div class="faq-item">
                  <h3>Is there a fee to attend the event?</h3>
                  <div class="faq-content">
                    <p style="color:black;">
                      Yes, there is a registration fee of [amount]. Early bird
                      discounts are available until [date].
                    </p>
                  </div>
                  <i class="faq-toggle bi bi-chevron-right"></i>
                </div> -->
                <!-- End Faq item-->

                <div class="faq-item">
                  <h3>Are there sponsorship opportunities available?</h3>
                  <div class="faq-content">
                    <p style="color:black;">
                      Yes, we offer various packages. Please contact
                      our team at +92-51-5151437, +92-51-5151991 for more
                      information.
                    </p>
                  </div>
                  <i class="faq-toggle bi bi-chevron-right"></i>
                </div>
                <!-- End Faq item-->

                <div class="faq-item">
                  <h3>Will there be networking opportunities at the event?</h3>
                  <div class="faq-content">
                    <p style="color:black;">
                      Yes, the event includes dedicated networking sessions to
                      connect with industry professionals and peers.
                    </p>
                  </div>
                  <i class="faq-toggle bi bi-chevron-right"></i>
                </div>
                <!-- End Faq item-->
              </div>
            </div>
            <!-- End Faq Column-->
          </div>
        </div>
      </section>
      <!-- /Faq Section -->

      <!-- Contact Section -->
      <section id="contact" class="contact section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>Contact</h2>
          <p style="color:black;">
            Get in touch for inquiries, collaborations, or event details—we're
            here to assist you.
          </p>
        </div>
        <!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">
          <div class="row gy-4">
            <div class="col-lg-6">
              <div
                class="info-item d-flex flex-column justify-content-center align-items-center"
                data-aos="fade-up"
                data-aos-delay="200"
              >
                <i class="bi bi-geo-alt"></i>
                <h3>Address</h3>
                <p style="color:black;">
                  Foundation University School of Science and Technology
                  Rawalpindi, Pakistan.
                </p>
              </div>
            </div>
            <!-- End Info Item -->

            <div class="col-lg-3 col-md-6">
              <div
                class="info-item d-flex flex-column justify-content-center align-items-center"
                data-aos="fade-up"
                data-aos-delay="300"
              >
                <i class="bi bi-telephone"></i>
                <h3>Call Us</h3>
                <p style="color:black;">+92-51-5151437</p>
                <p style="color:black;">+92-51-5151991</p>

                   <footer id="footer" class="footer dark-background">
    
              </div>
            </div>
            <!-- End Info Item -->

            <div class="col-lg-3 col-md-6">
              <div
                class="info-item d-flex flex-column justify-content-center align-items-center"
                data-aos="fade-up"
                data-aos-delay="400"
              >
                <i class="bi bi-envelope"></i>
                <h3>Email Us</h3>
                <p style="color:black;">ficse@fui.edu.pk</p>
              </div>
            </div>
            <!-- End Info Item -->
          </div>

          <!-- <div class="row gy-4 mt-1">
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2852.086970124181!2d73.07153891557309!3d33.56111938054432!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38df9324c7c53e6b%3A0xc63a7b443de04c59!2sNew%20Lalazar%2C%20Rawalpindi%2C%20Punjab!5e0!3m2!1sen!2spk!4v1625859166180!5m2!1sen!2s"
                width="600"
                height="450"
                frameborder="0"
                style="border: 0; width: 100%; height: 400px"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
              ></iframe>
            </div>
         

            <div class="col-lg-6">
              <form
                action="forms/contact.php"
                method="post"
                class="php-email-form"
                data-aos="fade-up"
                data-aos-delay="400"
              >
                <div class="row gy-4">
                  <div class="col-md-6">
                    <input
                      type="text"
                      name="name"
                      class="form-control"
                      placeholder="Your Name"
                      required=""
                    />
                  </div>

                  <div class="col-md-6">
                    <input
                      type="email"
                      class="form-control"
                      name="email"
                      placeholder="Your Email"
                      required=""
                    />
                  </div>

                  <div class="col-md-12">
                    <input
                      type="text"
                      class="form-control"
                      name="subject"
                      placeholder="Subject"
                      required=""
                    />
                  </div>

                  <div class="col-md-12">
                    <textarea
                      class="form-control"
                      name="message"
                      rows="6"
                      placeholder="Message"
                      required=""
                    ></textarea>
                  </div>

                  <div class="col-md-12 text-center">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">
                      Your message has been sent. Thank you!
                    </div>

                    <button type="submit">Send Message</button>
                  </div>
                </div>
              </form>
            </div>
          
          </div> -->
        </div>
      </section>
      <!-- /Contact Section -->
    </main>

    <footer id="footer" class="footer dark-background">
      <div class="footer-top">
        <div class="container">
          <div class="row gy-4">
            <div class="col-lg-3 col-md-6 footer-about">
              <a href="index.php" class="logo d-flex align-items-center">
                <img src="assets/img/fuiimage.png" />
              </a>
              <div class="footer-contact pt-1">
                <p>FUSST, Rawalpindi</p>
                <p>Pakistan, 46000</p>
                <p class="mt-2">
                  <strong>Phone:</strong> <span>+92-51-5151437</span>
                  <!-- <strong>Phone:</strong> <span>+92-51-5151991</span> -->
                </p>
                <p><strong>Email:</strong> <span>ficse@fui.edu.pk</span></p>
              </div>
            </div>

            <div class="col-lg-3 col-md-3 footer-links">
              <h4 style="color: white">Useful Links</h4>
              <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#speakers">Speakers</a></li>
                <li><a href="#call-for-papers">Call For Papers</a></li>
              </ul>
            </div>

            <div class="col-lg-3 col-md-3 footer-links">
              <h4 style="color: white">Our Committees</h4>
              <ul>
              <li><a href="executive-committee.php">Executive Committee</a></li>

                <li>
                  <a href="organizing-committee.php">Organizing Committee</a>
                </li>
                <li>
                  <a href="technical-committee.php">Technical Committee</a>
                </li>
                <!-- <li>
                  <a href="awareness-committee.php">Awareness Committee</a>
                </li> -->
                <!-- <li>
                  <a href="operation-committee.php">Operation Committee</a>
                </li> -->
              </ul>
            </div>
            <div class="col-lg-3 col-md-3 footer-links">
              <h4 style="color: white">About Us</h4>
              <ul>
         
                <li><a href="guidelines.php">Submission Guidelines</a></li>

                <li><a href="about.php">Event Details</a></li>
                <li><a href="#contact">Contact</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <div class="copyright text-center">
        <div
          class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center"
        >
          <div
            class="d-flex flex-column align-items-center align-items-lg-start"
          >
            <div>
              © Copyright <strong><span>FUI</span></strong
              >. All Rights Reserved
            </div>
          </div>

          <div class="social-links order-first order-lg-last mb-3 mb-lg-0">
            <!-- <a href=""><i class="bi bi-twitter-x"></i></a> -->
            <a href="https://www.facebook.com/fuislamabad/"
              ><i class="bi bi-facebook"></i
            ></a>
            <a
              href="https://www.instagram.com/foundationuniversityislamabad/?hl=en"
              ><i class="bi bi-instagram"></i
            ></a>
            <a href="https://www.linkedin.com/school/fuislamabad/mycompany/"
              ><i class="bi bi-linkedin"></i
            ></a>
          </div>
        </div>
      </div>
    </footer>

    <!-- Scroll Top -->
    <a
      href="#"
      id="scroll-top"
      class="scroll-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-arrow-up-short"></i
    ></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>
  </body>
</html>
