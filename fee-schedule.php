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
            <h1 style="color:white">Fee Schedule</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="index.php">Home</a></li>
                    <li class="current">Fee Schedule</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- End Page Title -->




    
      <!-- Buy Tickets Section -->
      <section id="fee-schedule" class="buy-tickets section light-background">
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
              class="col-lg-12 d-flex align-items-center justify-content-center"
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
               
                <br>
                <br>
                <p><b style="color:red;">Note: The last date for fee submission is  <span style="text-decoration: line-through;">September 12, 2024</span>
             <span style="color: green;">Extended Date: September 18, 2024.</span> After this date, a late fee of 1000 PKR (5 USD) will be imposed for all registrations.</b></p>
                <p><strong style="color: red;">For detailed information regarding fee submission, please contact us at <a href="mailto:ficse@fui.edu.pk" style="color: red;">ficse@fui.edu.pk</a>.</strong></p>

              </ul>
            </div>
          </div>
          <!-- End Pricing Item -->
        </div>
      </section>
      <!-- /Buy Tickets Section -->

   
  
</main>

<?php
include("footer.php");
?>

      
      
      
      
      
      
