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
            <h1 style="color:white">Contact Us</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="index.php">Home</a></li>
                    <li class="current">Contact Us</li>
                </ol>
            </nav>
        </div>
    </div>


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
                <p>+92-51-5151437</p>
                <p>+92-51-5151991</p>

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
                <p>ficse@fui.edu.pk</p>
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

          
          </div>
        </div>
      </section>
   
</main>

<?php
include("footer.php");
?>
