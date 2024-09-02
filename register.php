<?php
include("conn.php");
include("header.php");
?>

<main class="main">
    <!-- Internal CSS for Responsive Iframe -->
    <style>
        .iframe-container {
            position: relative;
            width: 100%;
            padding-bottom: 56.25%; /* 16:9 aspect ratio */
            height: 0;
            overflow: hidden;
        }

        .iframe-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: 0;
        }
    </style>

    <!-- Page Title -->
    <div
        class="page-title"
        data-aos="fade"
        style="background-image: url(assets/img/page-title-bg.webp); text-align: center;"
    >
        <div class="container position-relative">
            <h1 style="color:white">Register As Attendee</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="index.php">Home</a></li>
                    <li class="current">Register As Attendee</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- End Page Title -->

    <!-- Responsive Iframe -->
    <div class="iframe-container">
        <iframe 
            src="https://docs.google.com/forms/d/e/1FAIpQLSetlF8HUjlPhFhzk28EtSIoxLd47y407wZACmZn0bdeiOAqTA/viewform?embedded=true" 
            frameborder="0" 
            marginheight="0" 
            marginwidth="0">Loading…
        </iframe>
    </div>
    <!-- End Responsive Iframe -->

</main>

<?php
include("footer.php");
?>
