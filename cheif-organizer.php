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
            <h1 style="color:white">Chief Organizer</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="index.php">Home</a></li>
                    <li class="current">Chief Organizer</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- End Page Title -->

    <!-- Events Section -->
    <section id="events" class="events section">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row gy-4">
                <div class="col-xl-6 col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="100" style="text-align: center;">
                    <div class="member" style="text-align: center;">
                        <img src="assets/img/speakers/tehmina.jpeg" class="img-fluid rounded-circle" alt="" style="display: block; margin: 0 auto;" />
                        <div class="member-info" style="text-align: center;">
                            <div class="member-info-content" style="text-align: center;">
                                <h4>Dr. Tehmina Karamat Khan</h4>
                            </div>
                            <div class="social" style="text-align: center;">
                                <a href="" style="margin: 0 10px;"><i class="bi bi-twitter"></i></a>
                                <a href="" style="margin: 0 10px;"><i class="bi bi-facebook"></i></a>
                                <a href="" style="margin: 0 10px;"><i class="bi bi-instagram"></i></a>
                                <a href="" style="margin: 0 10px;"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Events Section -->
</main>

<?php
include("footer.php");
?>