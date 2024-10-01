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
            <h1 style="color:white">Panel Discussion</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="index.php">Home</a></li>
                    <li class="current">Panel Discussion</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- End Page Title -->


    
    

    <!-- Events Section -->
    <!-- <section id="events" class="events section">
        <div class="container" data-aos="fade-up" data-aos-delay="100">   
            <div class="row gy-4">
                <div class="col-xl-3 col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100" style="text-align:center">
                    <div class="member">
                    <img src="assets/img/speakers/prorector.png" class="img-fluid rounded-circle" alt="" style="width: 320px; height: 320px; object-fit: cover;" />
                    <div class="member-info">
                            <div class="member-info-content">
                                <h4>
                                Professor Dr. Abdul Ghafoor
                                </h4>
                                <h5>
                                Pro Rector/Director, FUSST
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-xl-3 col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100" style="text-align:center">
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
            </div>
        </div>
    </section> -->
    <!-- /Events Section -->


      <!-- Events Section -->
      <section id="events" class="events section">
        <div class="container" data-aos="fade-up" data-aos-delay="100">  
            
        <style>
    @keyframes textHighlight {
      0% { color: #fff; }
      50% { color: #ffeb3b; }
      100% { color: #fff; }
    }

    @keyframes textShadowGlow {
      0% { text-shadow: 0 0 5px rgba(255, 255, 255, 0.5); }
      50% { text-shadow: 0 0 20px rgba(255, 255, 255, 1); }
      100% { text-shadow: 0 0 5px rgba(255, 255, 255, 0.5); }
    }
  </style>
</head>
<body>
  <div style="display: flex; flex-wrap: wrap; gap: 20px; margin: 20px 0; justify-content: center;">
    <div class="col-xl-3 col-lg-3 col-md-12" data-aos="fade-up" data-aos-delay="100">
      <div class="section-title" style="background-color: #f82249; padding: 20px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">
        <h2 style="color: #fff; font-size: 24px; margin: 0; animation: textHighlight 3s ease-in-out infinite;">Panel Discussion 1</h2>
        <p style="color: #fff; font-weight: bold; font-size: 18px; margin: 10px 0 0;">OBE in Engineering Education: Pros and Cons.</p>
      </div>
    </div>
    
    <div class="col-xl-3 col-lg-3 col-md-12" data-aos="fade-up" data-aos-delay="100">
      <div class="section-title" style="background-color: #f82249; padding: 20px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">
        <h2 style="color: #fff; font-size: 24px; margin: 0; animation: textHighlight 3s ease-in-out infinite;">Panel Discussion 2</h2>
        <p style="color: #fff; font-weight: bold; font-size: 18px; margin: 10px 0 0;">Artificial Intelligence & Future of Humanity.</p>
      </div>
    </div>
  </div><br></br>
            <div class="row gy-4">



            <div class="col-xl-4 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100" style="text-align:center">
               <div class="member">
           
                   
                   <img src="assets/img/speakers/prorector.png" class="img-fluid rounded-circle" alt="" style=" width:230px; height: 230px; object-fit: cover;" />
                   <div class="member-info">
                       <div class="member-info-content">
                       <h6>
                                Professor Dr. Abdul Ghafoor
                                </h6>
                                <h6>
                                Pro Rector/Director, FUSST
                                </h6>
                       </div>
                   </div>
               </div>
           </div>


           <div class="col-xl-4 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100" style="text-align:center">
               <div class="member">         
               <img src="assets/img/speakers/shoaib.jpg" class="img-fluid rounded-circle" alt="" style=" width:230px; height: 230px; object-fit: cover;" />
                   <div class="member-info">
                       <div class="member-info-content">
                           <h6>
                           Dr. Shoab A. Khan
                           </h6>
                           <h6>
                           Chairman Engineering Education Trust, Chancellor
                           </h6>
                       </div>
                   </div>
               </div>
           </div>


            <div class="col-xl-4 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100" style="text-align:center">
               <div class="member">
           
                   
                   <img src="assets/img/speakers/ahsan.jpg" class="img-fluid rounded-circle" alt="" style=" width:230px; height: 230px; object-fit: cover;" />
                   <div class="member-info">
                       <div class="member-info-content">
                           <h6>
                           Prof Dr. Ali Ahsan
                           </h6>
                           <h6>
                           Torrens University Australia
                           </h6>
                       </div>
                   </div>
               </div>
           </div>


           <div class="col-xl-4 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100" style="text-align:center">
               <div class="member">         
                   <img src="assets/img/speakers/shaheen.jpg" class="img-fluid rounded-circle" alt="" style=" width:230px; height: 230px; object-fit: cover;" />
                   <div class="member-info">
                       <div class="member-info-content">
                           <h6>
                           Prof Dr. Muhammad Shaheen
                           </h6>
                           <h6>
                           DEAN FEIT, FUSST
                           </h6>
                       </div>
                   </div>
               </div>
           </div>



           <div class="col-xl-4 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100" style="text-align:center">
               <div class="member">
           
                   
                   <img src="assets/img/speakers/tanveer.jpeg" class="img-fluid rounded-circle" alt="" style=" width:230px; height: 230px; object-fit: cover;" />
                   <div class="member-info">
                       <div class="member-info-content">
                           <h6>
                           Prof Dr. Tanvir Afzal
                           </h6>
                           <h6>
                           Shifa Tameer-e-Millat University, Islamabad.
                           </h6>
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
