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
            <h1 style="color:white">Speakers</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="index.php">Home</a></li>
                    <li class="current">Speakers</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- End Page Title -->

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


   
</main>

<?php
include("footer.php");
?>
