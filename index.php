
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
          <img src="assets/img/ficselogo.png" alt="ficse" />

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
          
            <li class="dropdown">
              <a href="patron.php"
                ><span>Patrons</span>
                <i class="bi bi-chevron-down toggle-dropdown"></i
              ></a>
              <ul>
                <li><a href="patron-chief.php">Patrons In Cheif</a></li>
</ul>
</li>

            <li class="dropdown">
              <a href="#"
                ><span>Committees</span>
                <i class="bi bi-chevron-down toggle-dropdown"></i
              ></a>
              <ul>
                <li><a href="organizing-committee.php">Organizing Committee</a></li>
                <li><a href="technical-committee.php">Technical Committee</a></li>
                <li><a href="cheif-organizer.php">Chief Organizer</a></li>
                <li><a href="reviewer-committee.php">Reviewers Committee</a></li>
                <li><a href="awareness-committee.php">Awareness/Outreach Committee</a></li>
                <li><a href="support-service-committee.php">Support Services Committee</a></li>
                <li><a href="finance-committee.php">Finance Committee</a></li>
                <li><a href="operation-committee.php">Operations Committee</a></li>
              </ul>
            </li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="about.php">About Us</a></li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
        <a class="cta-btn d-none d-sm-block" href="#buy-tickets">Login</a>
      </div>
    </header>

    <main class="main">
      <!-- Hero Section -->
      <section id="hero" class="hero section dark-background">
        <img src="assets/img/hero-bg.jpg" alt="" data-aos="fade-in" class="" />

        <div
          class="container d-flex flex-column align-items-center text-center mt-auto"
        >
          <h2 data-aos="fade-up" data-aos-delay="100" style="color: white">
            FUSST INTERNATIONAL<br /><span>CONFERENCE</span> ISLAMABAD
          </h2>
          <p data-aos="fade-up" data-aos-delay="200">
            September 29-30,2024 at Foundation University School of Science and
            Technology, Pakistan
          </p>
          <div data-aos="fade-up" data-aos-delay="300" class="">
            <a
              href="https://www.youtube.com/watch?v=LXb3EKWsInQ"
              class="glightbox pulsating-play-btn mt-3"
            ></a>
          </div>
        </div>

        <div class="about-info mt-auto position-relative">
          <div class="container position-relative" data-aos="fade-up">
            <div class="row">
              <div class="col-lg-6">
                <h2>About The Event</h2>
                <p>
                  Foundation University Islamabad is organizing its first
                  international conference with the name of FUSST International
                  Conference on Computer Science and Engineering (FICSE)” from
                  September 29 – 30, 2024 at Foundation University Islamabad,
                  School of Science and Technology. The conference will
                  <a href="about.php" style="text-decoration: none">read more</a>
                </p>
              </div>
              <div class="col-lg-3">
                <h3>Where</h3>
                <p>FUSST, Rawalpindi Pakistan</p>
              </div>
              <div class="col-lg-3">
                <h3>When</h3>
                <p>Saturday-Sunday<br />September 29-30,2024</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- /Hero Section -->

      <!-- Speakers Section -->
      <section id="speakers" class="speakers section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>Event Speakers<br /></h2>
        </div>
        <!-- End Section Title -->

        <div class="container">
          <div class="row gy-4">
            <div
              class="col-xl-3 col-lg-4 col-md-6"
              data-aos="fade-up"
              data-aos-delay="100"
            >
              <div class="member">
                <img
                  src="assets/img/speakers/shaheen.png"
                  class="img-fluid"
                  alt=""
                />
                <div class="member-info">
                  <div class="member-info-content">
                    <h4>
                      <a href="speaker-details.html"
                        >Prof Dr Muhammad Shaheen</a
                      >
                    </h4>
                    <!-- <span>Dean, FUSST</span> -->
                  </div>
                  <div class="social">
                    <a href=""><i class="bi bi-twitter-x"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Team Member -->

            <div
              class="col-xl-3 col-lg-4 col-md-6"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <div class="member">
                <img
                  src="assets/img/speakers/sajid.jpeg"
                  class="img-fluid"
                  alt=""
                />
                <div class="member-info">
                  <div class="member-info-content">
                    <h4>
                      <a href="speaker-details.html">Dr. Sajid Ali Khan</a>
                    </h4>
                    <!-- <span>HOD,SE FUSST</span> -->
                  </div>
                  <div class="social">
                    <a href=""><i class="bi bi-twitter-x"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Team Member -->

            <div
              class="col-xl-3 col-lg-4 col-md-6"
              data-aos="fade-up"
              data-aos-delay="300"
            >
              <div class="member">
                <img
                  src="assets/img/speakers/shariq.jpeg"
                  class="img-fluid"
                  alt=""
                />
                <div class="member-info">
                  <div class="member-info-content">
                    <h4><a href="speaker-details.html">Dr. Shariq</a></h4>
                    <!-- <span>AP, FUSST</span> -->
                  </div>
                  <div class="social">
                    <a href=""><i class="bi bi-twitter-x"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Team Member -->

            <div
              class="col-xl-3 col-lg-4 col-md-6"
              data-aos="fade-up"
              data-aos-delay="400"
            >
              <div class="member">
                <img
                  src="assets/img/speakers/tehmina.jpeg"
                  class="img-fluid"
                  alt=""
                />
                <div class="member-info">
                  <div class="member-info-content">
                    <h4>
                      <a href="speaker-details.html">Dr. Tehmina Karamat</a>
                    </h4>
                    <!-- <span>AP, FUSST</span> -->
                  </div>
                  <div class="social">
                    <a href=""><i class="bi bi-twitter-x"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Team Member -->
          </div>
        </div>
      </section>
      <!-- /Speakers Section -->

      <!-- Calls for papers -->
      <section
        id="call-for-papers"
        class="buy-tickets section light-background"
      >
        <!-- Section Title -->

        <div class="container section-title" data-aos="fade-up">
          <h2>Call for Papers</h2>
          <p>Submit your Research Papers/Proposals.</p>
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
          <p>September 29-30,2024</p>
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
            <h3 class="sub-heading">
              Voluptatem nulla veniam soluta et corrupti consequatur neque
              eveniet officia. Eius necessitatibus voluptatem quis labore
              perspiciatis quia.
            </h3>

            <!-- Schdule Day 1 -->
            <div
              role="tabpanel"
              class="col-lg-9 tab-pane fade show active"
              id="day-1"
            >
              <div class="row schedule-item">
                <div class="col-md-2"><time>09:30 AM</time></div>
                <div class="col-md-10">
                  <h4>Registration</h4>
                  <p>
                    Fugit voluptas iusto maiores temporibus autem numquam
                    magnam.
                  </p>
                </div>
              </div>

              <div class="row schedule-item">
                <div class="col-md-2"><time>10:00 AM</time></div>
                <div class="col-md-10">
                  <div class="speaker">
                    <img
                      src="assets/img/speakers/speaker-1-2.jpg"
                      alt="Brenden Legros"
                    />
                  </div>
                  <h4>Keynote <span>Brenden Legros</span></h4>
                  <p>Facere provident incidunt quos voluptas.</p>
                </div>
              </div>

              <div class="row schedule-item">
                <div class="col-md-2"><time>11:00 AM</time></div>
                <div class="col-md-10">
                  <div class="speaker">
                    <img
                      src="assets/img/speakers/speaker-2-2.jpg"
                      alt="Hubert Hirthe"
                    />
                  </div>
                  <h4>
                    Et voluptatem iusto dicta nobis. <span>Hubert Hirthe</span>
                  </h4>
                  <p>
                    Maiores dignissimos neque qui cum accusantium ut sit sint
                    inventore.
                  </p>
                </div>
              </div>

              <div class="row schedule-item">
                <div class="col-md-2"><time>12:00 AM</time></div>
                <div class="col-md-10">
                  <div class="speaker">
                    <img
                      src="assets/img/speakers/speaker-3-2.jpg"
                      alt="Cole Emmerich"
                    />
                  </div>
                  <h4>
                    Explicabo et rerum quis et ut ea. <span>Cole Emmerich</span>
                  </h4>
                  <p>
                    Veniam accusantium laborum nihil eos eaque accusantium
                    aspernatur.
                  </p>
                </div>
              </div>

              <div class="row schedule-item">
                <div class="col-md-2"><time>02:00 PM</time></div>
                <div class="col-md-10">
                  <div class="speaker">
                    <img
                      src="assets/img/speakers/speaker-4-2.jpg"
                      alt="Jack Christiansen"
                    />
                  </div>
                  <h4>
                    Qui non qui vel amet culpa sequi.
                    <span>Jack Christiansen</span>
                  </h4>
                  <p>Nam ex distinctio voluptatem doloremque suscipit iusto.</p>
                </div>
              </div>

            
            
            </div>
            <!-- End Schdule Day 1 -->

            <!-- Schdule Day 2 -->
            <div role="tabpanel" class="col-lg-9 tab-pane fade" id="day-2">
              <div class="row schedule-item">
                <div class="col-md-2"><time>10:00 AM</time></div>
                <div class="col-md-10">
                  <div class="speaker">
                    <img
                      src="assets/img/speakers/speaker-1-2.jpg"
                      alt="Brenden Legros"
                    />
                  </div>
                  <h4>
                    Libero corrupti explicabo itaque.
                    <span>Brenden Legros</span>
                  </h4>
                  <p>Facere provident incidunt quos voluptas.</p>
                </div>
              </div>

              <div class="row schedule-item">
                <div class="col-md-2"><time>11:00 AM</time></div>
                <div class="col-md-10">
                  <div class="speaker">
                    <img
                      src="assets/img/speakers/speaker-2-2.jpg"
                      alt="Hubert Hirthe"
                    />
                  </div>
                  <h4>
                    Et voluptatem iusto dicta nobis. <span>Hubert Hirthe</span>
                  </h4>
                  <p>
                    Maiores dignissimos neque qui cum accusantium ut sit sint
                    inventore.
                  </p>
                </div>
              </div>

              <div class="row schedule-item">
                <div class="col-md-2"><time>12:00 AM</time></div>
                <div class="col-md-10">
                  <div class="speaker">
                    <img
                      src="assets/img/speakers/speaker-3-2.jpg"
                      alt="Cole Emmerich"
                    />
                  </div>
                  <h4>
                    Explicabo et rerum quis et ut ea. <span>Cole Emmerich</span>
                  </h4>
                  <p>
                    Veniam accusantium laborum nihil eos eaque accusantium
                    aspernatur.
                  </p>
                </div>
              </div>

              <div class="row schedule-item">
                <div class="col-md-2"><time>02:00 PM</time></div>
                <div class="col-md-10">
                  <div class="speaker">
                    <img
                      src="assets/img/speakers/speaker-4-2.jpg"
                      alt="Jack Christiansen"
                    />
                  </div>
                  <h4>
                    Qui non qui vel amet culpa sequi.
                    <span>Jack Christiansen</span>
                  </h4>
                  <p>Nam ex distinctio voluptatem doloremque suscipit iusto.</p>
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
          <p>Stay updated with our upcoming events and important dates.</p>
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
                  <strong>
                    Advertisement in Paper/Social Media/Web:&nbsp;July 20,
                    2024</strong
                  >
                </li>
                <li>
                  <i class="bi bi-calendar-event"></i>&nbsp;
                  <strong
                    >Last Date for Submission of Proposals:&nbsp;July 24,
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
                  <strong
                    >Proceedings to be Published (if special edition is
                    permitted):&nbsp;2025</strong
                  >
                </li>
                <li>
                  <i class="bi bi-calendar-event"></i>&nbsp;
                  <strong>Conference Dates:&nbsp;September 29-30,2024</strong>
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
          <p>Check out our attractive and affordable registration options.</p>
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
                  <strong
                    >Registration Fee for Regular Attendee:&nbsp;3000
                    PKR</strong
                  >
                </li>
                <li>
                  <i class="bi bi-check-circle"></i>&nbsp;
                  <strong
                    >Registration Fee for Student Presenter:&nbsp;4000
                    PKR</strong
                  >
                </li>
                <li>
                  <i class="bi bi-check-circle"></i>&nbsp;
                  <strong
                    >Registration Fee for Professional Presenter:&nbsp;5000
                    PKR</strong
                  >
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
          <p>
            Seminar Hall, Foundation University Islamabad, School of Science and
            Technology
          </p>
        </div>
        <!-- End Section Title -->

        <div class="container-fluid" data-aos="fade-up">
          <div class="row g-0">
            <div class="col-lg-6 venue-map">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2852.086970124181!2d73.07153891557309!3d33.56111938054432!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38df9324c7c53e6b%3A0xc63a7b443de04c59!2sNew%20Lalazar%2C%20Rawalpindi%2C%20Punjab!5e0!3m2!1sen!2spk!4v1625859166180!5m2!1sen!2s"
                width="600"
                height="450"
                frameborder="0"
                style="border: 0"
                allowfullscreen=""
              ></iframe>
            </div>

            <div class="col-lg-6 venue-info">
              <div class="row justify-content-center">
                <div class="col-11 col-lg-8 position-relative">
                  <h3>Seminar Hall, FUSST, Rawalpindi Pakistan</h3>
                  <!--  <p>Iste nobis eum sapiente sunt enim dolores labore accusantium autem. Cumque beatae ipsam. Est quae sit qui voluptatem corporis velit. Qui maxime accusamus possimus. Consequatur sequi et ea suscipit enim nesciunt quia velit.</p> -->
                </div>
              </div>
            </div>
          </div>
        </div>

     
      </section>
      <!-- /Venue Section -->

      <!-- Gallery Section -->
      <section id="gallery" class="gallery section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>Gallery</h2>
          <p>
            Explore our gallery showcasing memorable moments from our events,
            featuring insightful discussions and presentations.
          </p>
        </div>
        <!-- End Section Title -->

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
                  href="assets/img/event-gallery/event-gallery-1.jpg"
                  ><img
                    src="assets/img/event-gallery/event-gallery-1.jpg"
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
      </section>
    

      <!-- Faq Section -->
      <section id="faq" class="faq section light-background">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>Frequently Asked Questions</h2>
          <p>Find answers to common questions about our event below.</p>
        </div>
        <!-- End Section Title -->

        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-10" data-aos="fade-up" data-aos-delay="100">
              <div class="faq-container">
                <div class="faq-item faq-active">
                  <h3>What are the dates and location of the event?</h3>
                  <div class="faq-content">
                    <p>
                      The event will be held on September 29-30,2024 at
                      Foundation University School of Science and Technology,
                      Rawalpindi.
                    </p>
                  </div>
                  <i class="faq-toggle bi bi-chevron-right"></i>
                </div>
                <!-- End Faq item-->

                <div class="faq-item">
                  <h3>How can I register for the event?</h3>
                  <div class="faq-content">
                    <p>
                      Registration can be done through our website [link], or
                      you can contact our registration team at [email/phone].
                    </p>
                  </div>
                  <i class="faq-toggle bi bi-chevron-right"></i>
                </div>
                <!-- End Faq item-->

                <div class="faq-item">
                  <h3>What topics will be covered at the event?</h3>
                  <div class="faq-content">
                    <p>
                      The event will cover topics such as [list key topics or
                      themes].
                    </p>
                  </div>
                  <i class="faq-toggle bi bi-chevron-right"></i>
                </div>
                <!-- End Faq item-->

                <div class="faq-item">
                  <h3>Is there a fee to attend the event?</h3>
                  <div class="faq-content">
                    <p>
                      Yes, there is a registration fee of [amount]. Early bird
                      discounts are available until [date].
                    </p>
                  </div>
                  <i class="faq-toggle bi bi-chevron-right"></i>
                </div>
                <!-- End Faq item-->

                <div class="faq-item">
                  <h3>Are there sponsorship opportunities available?</h3>
                  <div class="faq-content">
                    <p>
                      Yes, we offer various sponsorship packages. Please contact
                      our sponsorship team at [email/phone] for more
                      information.
                    </p>
                  </div>
                  <i class="faq-toggle bi bi-chevron-right"></i>
                </div>
                <!-- End Faq item-->

                <div class="faq-item">
                  <h3>Will there be networking opportunities at the event?</h3>
                  <div class="faq-content">
                    <p>
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
          <p>
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
                <p>
                  Foundation University School of Science and Technology,
                  Rawalpindi
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
                <p>+92-51-5151437</p>
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
                <p>Ficse@fui.edu.pk</p>
              </div>
            </div>
            <!-- End Info Item -->
          </div>

          <div class="row gy-4 mt-1">
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
            <!-- End Google Maps -->

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
            <!-- End Contact Form -->
          </div>
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
                <p>Pakistan,46000</p>
                <p class="mt-2">
                  <strong>Phone:</strong> <span>+92-51-5151437</span>
                </p>
                <p>
                  <strong>Email:</strong> <span>Ficse@fui.edu.pk</span>
                </p>
              </div>
            </div>

            <div class="col-lg-3 col-md-3 footer-links">
              <h4 style="color: white">Useful Links</h4>
              <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Speakers</a></li>
                <li><a href="#">Venue</a></li>
                <li><a href="#">Contact Us</a></li>
              </ul>
            </div>

            <div class="col-lg-3 col-md-3 footer-links">
              <h4 style="color: white">Our Services</h4>
              <ul>
                <li><a href="#">Web Design</a></li>
                <li><a href="#">Web Development</a></li>
                <li><a href="#">Product Management</a></li>
                <li><a href="#">Marketing</a></li>
              </ul>
            </div>
            <div class="col-lg-3 col-md-3 footer-links">
              <h4 style="color: white">About Us</h4>
              <ul>
                <li><a href="#">Speakers</a></li>
                <li><a href="#">Calendar</a></li>
                <li><a href="#">Fee Schedule</a></li>
                <li><a href="#">Gallery</a></li>
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
