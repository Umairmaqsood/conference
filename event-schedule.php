








<?php
include("conn.php");
include("header.php");
?>

<main class="main">
    <!-- Page Title -->
    <div
        class="page-title"
        data-aos="fade"
        style="background-image: url(assets/img/page-title-bg.webp); text-align: center;"
    >
        <div class="container position-relative">
            <h1 style="color:white">Event Schedule</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="index.php">Home</a></li>
                    <li class="current">Event Schedule</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- End Page Title -->

    <!-- Events Section -->
    



    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .schedule-header {
            background-color: #0e1b4d;
            color: #ffffff;
            padding: 15px 0;
            border-radius: 5px;
        }
        .schedule-header h5 {
            margin: 0;
            font-weight: bold;
            color:white;
        }
        .schedule-item {
            background-color: #ffffff;
            border: 1px solid #dee2e6;
            border-radius: 5px;
            padding: 15px;
            margin-bottom: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .speaker-img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid #6c757d;
        }
    </style>



<!-- Schedule Section -->
<section id="schedule" class="schedule section">
    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Event Schedule<br /></h2>
        <p style="color:black;">September 26-27, 2024</p>
    </div>
    <!-- End Section Title -->

    <div class="container">
        <ul class="nav nav-tabs" role="tablist" data-aos="fade-up" data-aos-delay="100">
            <li class="nav-item">
                <a class="nav-link active" href="#day-1" role="tab" data-bs-toggle="tab">Day 1</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#day-2" role="tab" data-bs-toggle="tab">Day 2</a>
            </li>
        </ul>

        <div class="tab-content row justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <!-- Day 1 Schedule -->
            <div class="tab-pane fade show active container my-5" id="day-1" role="tabpanel">
             
                
                <!-- Schedule Header -->
                <div class="row text-center schedule-header">
                    <div class="col-md-2">
                        <h5>Time Slot</h5>
                    </div>
                    <div class="col-md-2">
                        <!-- <h5>Speaker Image</h5> -->
                    </div>
                    <div class="col-md-6">
                        <h5>Details</h5>
                    </div>
                    <div class="col-md-2">
                        <h5>Venue</h5>
                    </div>
                </div>
                
               
                  <!-- Schedule Item -->
                  <div class="row schedule-item align-items-center">
                    <div class="col-md-2 text-center">
                        <strong>09:00 - 10:00 am</strong>
                    </div>
                    <div class="col-md-3 text-center">
                        <img src="assets/img/speakers/paperppt.jpg" alt="Paper Presentation 1" class="speaker-img">
                    </div>
                    <div class="col-md-4">
                        <h5>Paper Presentation Session 1</h5>
                        <!-- <p>Dr. John Doe, Professor at XYZ University</p> -->
                    </div>
                    <div class="col-md-3 text-center">
                        <p>Seminar Hall, Foundation University School of Science and
                        Technology Rawalpindi, Pakistan.</p>
                    </div>
                </div>


                  <!-- Schedule Item -->
                  <div class="row schedule-item align-items-center">
                    <div class="col-md-2 text-center">
                        <strong>10:20 - 10:50 am</strong>
                    </div>
                    <div class="col-md-3 text-center">
                        <img src="assets/img/speakers/teabreak.jpg" alt="Tea Break" class="speaker-img">
                    </div>
                    <div class="col-md-4">
                        <h5>Tea Break</h5>
                        <!-- <p>Dr. John Doe, Professor at XYZ University</p> -->
                    </div>
                    <div class="col-md-3 text-center">
                        <p>Lobby, Seminar Hall, Foundation University School of Science and
                        Technology Rawalpindi, Pakistan.</p>
                    </div>
                </div>


                  <!-- Schedule Item -->
                  <div class="row schedule-item align-items-center">
                    <div class="col-md-2 text-center">
                        <strong>10:50 - 11:20 am</strong>
                    </div>
                    <div class="col-md-3 text-center">
                        <img src="assets/img/speakers/ahsan.jpg" alt="Speaker 1" class="speaker-img">
                    </div>
                    <div class="col-md-4">
                        <h5>Keynote: Catalysing Evolution: Harnessing Generative AI for Next-Generation Higher Education</h5>
                        <p>Prof Dr. Ali Ahsan, Torrens University Australia</p>
                    </div>
                    <div class="col-md-3 text-center">
                        <p>Seminar Hall, Foundation University School of Science and
                        Technology Rawalpindi, Pakistan.</p>
                    </div>
                </div>

                  <!-- Schedule Item -->
                  <div class="row schedule-item align-items-center">
                    <div class="col-md-2 text-center">
                        <strong>11:20 am - 12:20 pm</strong>
                    </div>
                    <div class="col-md-3 text-center">
                        <img src="assets/img/speakers/paperppt.jpg" alt="Speaker 1" class="speaker-img">
                    </div>
                    <div class="col-md-4">
                        <h5>Paper Presentation Session 2</h5>
                        <!-- <p>Dr. John Doe, Professor at XYZ University</p> -->
                    </div>
                    <div class="col-md-3 text-center">
                        <p>Seminar Hall, Foundation University School of Science and
                        Technology Rawalpindi, Pakistan.</p>
                    </div>
                </div>
                
                  <!-- Schedule Item -->
                  <div class="row schedule-item align-items-center">
                    <div class="col-md-2 text-center">
                        <strong>12:20 - 01:00 pm</strong>
                    </div>
                    <div class="col-md-3 text-center">
                        <img src="assets/img/speakers/shoaib.jpg" alt="Speaker 2" class="speaker-img">
                    </div>
                    <div class="col-md-4">
                        <h5>Keynote: </h5>
                        <p>Dr. Shoab A. Khan, Chairman Engineering Education Trust, Chancellor</p>
                    </div>
                    <div class="col-md-3 text-center">
                        <p>Seminar Hall, Foundation University School of Science and
                        Technology Rawalpindi, Pakistan.</p>
                    </div>
                </div>

                <!-- Schedule Item -->
                <div class="row schedule-item align-items-center">
                    <div class="col-md-2 text-center">
                        <strong>01:00 - 02:00 pm</strong>
                    </div>
                    <div class="col-md-3 text-center">
                        <img src="assets/img/speakers/lunchbreak.png" alt="lunch" class="speaker-img">
                    </div>
                    <div class="col-md-4">
                        <h5>Lunch Break</h5>
                        <!-- <p>Dr. John Doe, Professor at XYZ University</p> -->
                    </div>
                    <div class="col-md-3 text-center">
                        <p>Lobby, Seminar Hall, Foundation University School of Science and
                        Technology Rawalpindi, Pakistan.</p>
                    </div>
                </div>



                  <!-- Schedule Item -->
                  <div class="row schedule-item align-items-center">
                    <div class="col-md-2 text-center">
                        <strong>02:00 - 03:00 pm</strong>
                    </div>
                    <div class="col-md-3 text-center">
                        <img src="assets/img/speakers/paperppt.jpg" alt="Speaker 1" class="speaker-img">
                    </div>
                    <div class="col-md-4">
                        <h5>Paper Presentation Session 3</h5>
                        <!-- <p>Dr. John Doe, Professor at XYZ University</p> -->
                    </div>
                    <div class="col-md-3 text-center">
                        <p>Seminar Hall, Foundation University School of Science and
                        Technology Rawalpindi, Pakistan.</p>
                    </div>
                </div>

                  <!-- Schedule Item -->
                  <div class="row schedule-item align-items-center">
                    <div class="col-md-2 text-center">
                        <strong>03:00 - 03:30 pm</strong>
                    </div>
                    <div class="col-md-3 text-center">
                        <img src="assets/img/speakers/alikashif.webp" alt="Speaker 3" class="speaker-img">
                    </div>
                    <div class="col-md-4">
                        <h5>Keynote: </h5>
                        <p>Prof Dr. Ali Kashif Bashir
                        Manchester Metropolitan University UK</p>
                    </div>
                    <div class="col-md-3 text-center">
                        <p>Seminar Hall, Foundation University School of Science and
                        Technology Rawalpindi, Pakistan.</p>
                    </div>
                </div>
    
                  <!-- Schedule Item -->
                  <div class="row schedule-item align-items-center">
                    <div class="col-md-2 text-center">
                        <strong>03:30 - 04:30 pm</strong>
                    </div>
                    <div class="col-md-3 text-center">
                        <img src="assets/img/speakers/workshop.jpg" alt="Speaker 1" class="speaker-img">
                    </div>
                    <div class="col-md-4">
                        <h5>Workshop</h5>
                        <!-- <p>Dr. John Doe, Professor at XYZ University</p> -->
                    </div>
                    <div class="col-md-3 text-center">
                        <p>Seminar Hall, Foundation University School of Science and
                        Technology Rawalpindi, Pakistan.</p>
                    </div>
                </div>


                 <!-- Schedule Item -->
                 <div class="row schedule-item align-items-center">
                    <div class="col-md-2 text-center">
                        <strong>03:30 - 04:30 pm</strong>
                    </div>
                    <div class="col-md-3 text-center">
                        <img src="assets/img/speakers/paneldiscussion.jpg" alt="Panel Discussion 1" class="speaker-img">
                    </div>
                    <div class="col-md-4">
                        <h5>Panel Discussion 1</h5>
                        <p>OBE in Engineering Education: Pros and Cons.</p>
                    </div>
                    <div class="col-md-3 text-center">
                        <p>Video Conference Room, Foundation University School of Science and
                        Technology Rawalpindi, Pakistan.</p>
                    </div>
                </div>
                
                
                <!-- Additional schedule items can be added here -->
            </div>

            <!-- Day 2 Schedule -->
            <div class="tab-pane fade container my-5" id="day-2" role="tabpanel">
                <!-- <h2 class="text-center mb-4">Event Schedule Day 2</h2> -->
                
                <!-- Schedule Header -->
                <div class="row text-center schedule-header">
                    <div class="col-md-2">
                        <h5>Time Slot</h5>
                    </div>
                    <div class="col-md-2">
                        <!-- <h5>Speaker Image</h5> -->
                    </div>
                    <div class="col-md-6">
                        <h5>Details</h5>
                    </div>
                    <div class="col-md-2">
                        <h5>Venue</h5>
                    </div>
                </div>
                
                <!-- Schedule Item -->
                <div class="row schedule-item align-items-center">
                    <div class="col-md-2 text-center">
                        <strong>09:00 - 10:00 am</strong>
                    </div>
                    <div class="col-md-3 text-center">
                        <img src="assets/img/speakers/paperppt.jpg" alt="Speaker 1" class="speaker-img">
                    </div>
                    <div class="col-md-4">
                        <h5>Paper Presentation Session 1</h5>
                        <!-- <p>Dr. John Doe, Professor at XYZ University</p> -->
                    </div>
                    <div class="col-md-3 text-center">
                        <p>Seminar Hall, Foundation University School of Science and
                        Technology Rawalpindi, Pakistan.</p>
                    </div>
                </div>


                  <!-- Schedule Item -->
                  <div class="row schedule-item align-items-center">
                    <div class="col-md-2 text-center">
                        <strong>10:20 - 10:50 am</strong>
                    </div>
                    <div class="col-md-3 text-center">
                        <img src="assets/img/speakers/teabreak.jpg" alt="Speaker 1" class="speaker-img">
                    </div>
                    <div class="col-md-4">
                        <h5>Tea Break</h5>
                        <!-- <p>Dr. John Doe, Professor at XYZ University</p> -->
                    </div>
                    <div class="col-md-3 text-center">
                        <p>Lobby, Seminar Hall, Foundation University School of Science and
                        Technology Rawalpindi, Pakistan.</p>
                    </div>
                </div>


                  <!-- Schedule Item -->
                  <div class="row schedule-item align-items-center">
                    <div class="col-md-2 text-center">
                        <strong>10:50 - 11:20 am</strong>
                    </div>
                    <div class="col-md-3 text-center">
                        <img src="assets/img/speakers/patric.jfif" alt="Speaker 1" class="speaker-img">
                    </div>
                    <div class="col-md-4">
                        <h5>Keynote: Positive Computing in Healthcare</h5>
                        <p>Prof Dr. Patrick Shearman, University of Technology Sydney Australia, ICMS Sydney Australia
</p>
                    </div>
                    <div class="col-md-3 text-center">
                        <p>Seminar Hall, Foundation University School of Science and
                        Technology Rawalpindi, Pakistan.</p>
                    </div>
                </div>
                
                  <!-- Schedule Item -->
                  <div class="row schedule-item align-items-center">
                    <div class="col-md-2 text-center">
                        <strong>11:20 am - 12:20 pm</strong>
                    </div>
                    <div class="col-md-3 text-center">
                        <img src="assets/img/speakers/paperppt.jpg" alt="Speaker 1" class="speaker-img">
                    </div>
                    <div class="col-md-4">
                        <h5>Paper Presentation Session 2</h5>
                        <!-- <p>Dr. John Doe, Professor at XYZ University</p> -->
                    </div>
                    <div class="col-md-3 text-center">
                        <p>Seminar Hall, Foundation University School of Science and
                        Technology Rawalpindi, Pakistan.</p>
                    </div>
                </div>


                
                  <!-- Schedule Item -->
                  <div class="row schedule-item align-items-center">
                    <div class="col-md-2 text-center">
                        <strong>12:20 - 01:00 pm</strong>
                    </div>
                    <div class="col-md-3 text-center">
                        <img src="assets/img/speakers/shaheen.jpg" alt="Speaker 2" class="speaker-img">
                    </div>
                    <div class="col-md-4">
                        <h5>Keynote: Wisdom Mining: Future of Data Mining </h5>
                        <p>Prof Dr. Muhammad Shaheen, DEAN FEIT, FUSST</p>
                    </div>
                    <div class="col-md-3 text-center">
                        <p>Seminar Hall, Foundation University School of Science and
                        Technology Rawalpindi, Pakistan.</p>
                    </div>
                </div>

                <!-- Schedule Item -->
                <div class="row schedule-item align-items-center">
                    <div class="col-md-2 text-center">
                        <strong>01:00 - 02:00 pm</strong>
                    </div>
                    <div class="col-md-3 text-center">
                        <img src="assets/img/speakers/lunchbreak.png" alt="Speaker 1" class="speaker-img">
                    </div>
                    <div class="col-md-4">
                        <h5>Lunch Break</h5>
                        <!-- <p>Dr. John Doe, Professor at XYZ University</p> -->
                    </div>
                    <div class="col-md-3 text-center">
                        <p>Lobby, Seminar Hall, Foundation University School of Science and
                        Technology Rawalpindi, Pakistan.</p>
                    </div>
                </div>



                  <!-- Schedule Item -->
                  <div class="row schedule-item align-items-center">
                    <div class="col-md-2 text-center">
                        <strong>02:00 - 03:00 pm</strong>
                    </div>
                    <div class="col-md-3 text-center">
                        <img src="assets/img/speakers/paperppt.jpg" alt="Speaker 1" class="speaker-img">
                    </div>
                    <div class="col-md-4">
                        <h5>Paper Presentation Session 3</h5>
                        <!-- <p>Dr. John Doe, Professor at XYZ University</p> -->
                    </div>
                    <div class="col-md-3 text-center">
                        <p>Seminar Hall, Foundation University School of Science and
                        Technology Rawalpindi, Pakistan.</p>
                    </div>
                </div>


                   <!-- Schedule Item -->
                   <div class="row schedule-item align-items-center">
                    <div class="col-md-2 text-center">
                        <strong>03:00 - 03:30 pm</strong>
                    </div>
                    <div class="col-md-3 text-center">
                        <img src="assets/img/speakers/ervin.jpeg" alt="Speaker 3" class="speaker-img">
                    </div>
                    <div class="col-md-4">
                        <h5>Keynote: AI & Medicine</h5>
                        <p>Prof Dr. Ervin Sejdic, University of Toronto Canada</p>
                    </div>
                    <div class="col-md-3 text-center">
                        <p>Seminar Hall, Foundation University School of Science and
                        Technology Rawalpindi, Pakistan.</p>
                    </div>
                </div>

                 
                
                  <!-- Schedule Item -->
                  <div class="row schedule-item align-items-center">
                    <div class="col-md-2 text-center">
                        <strong>03:30 - 04:30 pm</strong>
                    </div>
                    <div class="col-md-3 text-center">
                        <img src="assets/img/speakers/workshop.jpg" alt="Speaker 1" class="speaker-img">
                    </div>
                    <div class="col-md-4">
                        <h5>Workshop</h5>
                        <!-- <p>Dr. John Doe, Professor at XYZ University</p> -->
                    </div>
                    <div class="col-md-3 text-center">
                        <p>Seminar Hall, Foundation University School of Science and
                        Technology Rawalpindi, Pakistan.</p>
                    </div>
                </div>

                 <!-- Schedule Item -->
                 <div class="row schedule-item align-items-center">
                    <div class="col-md-2 text-center">
                    <strong>03:30 - 04:30 pm</strong>
                    </div>
                    <div class="col-md-3 text-center">
                        <img src="assets/img/speakers/paneldiscussion.jpg" alt="Panel Discussion 1" class="speaker-img">
                    </div>
                    <div class="col-md-4">
                        <h5>Panel Discussion 2</h5>
                        <p>Artificial Intelligence & Future of Humanity.</p>
                    </div>
                    <div class="col-md-3 text-center">
                        <p>Video Conference Room, Foundation University School of Science and
                        Technology Rawalpindi, Pakistan.</p>
                    </div>
                </div>

                <!-- Additional schedule items can be added here -->
            </div>
        </div>
    </div>
</section>




</main>

<?php
include("footer.php");
?>



