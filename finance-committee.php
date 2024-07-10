<?php

include("conn.php");

include ("header.php");

?>

<main class="main">
      <!-- Page Title -->
      <div
        class="page-title"
        data-aos="fade"
        style="background-image: url(assets/img/page-title-bg.webp)"
      >
        <div class="container position-relative">
          <h1 style="color:white">Finance Committee</h1>
          
          <nav class="breadcrumbs">
            <ol>
              <li><a href="index.php">Home</a></li>
              <li class="current">Finance Committee</li>
            </ol>
          </nav>
        </div>
      </div>
      <!-- End Page Title -->

      <!-- Events Section -->
      <section id="events" class="events section">
        <div class="container" data-aos="fade-up" data-aos-delay="100">   
            <div class="row gy-4">
                <div class="col-xl-6 col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="100" style="text-align:center">
                    <div class="member">
                        <img src="assets/img/speakers/shariq.jpeg" class="img-fluid rounded-circle" alt="" />
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4>
                                   Dr. Shariq Hussain
                                </h4>
                                <h5>
                                   Associate Professor, FUSST
                                </h5>
                            </div>
                           
                        </div>
                    </div>
                </div>


                
                <div class="col-xl-6 col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="100" style="text-align:center">
                    <div class="member">
                        <img src="assets/img/speakers/tehmina.jpeg" class="img-fluid rounded-circle" alt="" />
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4>
                            Mr. Sohail Anjum 
                                </h4>
                                <h5>
                                   Coordinator, FUSST
                                </h5>
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
