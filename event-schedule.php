








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
</main>

<?php
include("footer.php");
?>



