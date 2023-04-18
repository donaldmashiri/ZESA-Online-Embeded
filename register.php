
<?php include('header.php'); ?>
<?php include('navbar.php'); ?>

  <section id="hero-animated" class="hero-animated d-flex align-items-center">
    <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative" data-aos="zoom-out">
  
      <div class="d-flex flex-row bd-highlight">
        <div class="p-2 bd-highlight">
          <img src="Zesa.png" class="img-fluid animated">
        </div>
        <div class="p-2 bd-highlight"> <h2> ZETDC - Token less Electricity <br>
          <span>Pre-Payment System</span></h2>
        </div>
      </div>

      

    </div>
  </section>


  <section id="contact" class="contact">
      <div class="container">

        <div class="section-header">
          <h2>Register</h2>
        </div>

      </div>

      <div class="container">

        <div class="row gy-5 gx-lg-5">

          <div class="col-lg-4">

            <div class="info">
              <h3>Login</h3>
             
              <!-- <?php echo "<p class='alert alert-danger'>Wrong Credentials</p>" ?> -->
              <div class="info-item d-flex">
              
              <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-12 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Email / Meter Number" required>
                </div>
                <div class="col-md-12 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Password" required>
                </div>  
              </div>
             
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button class="" type="submit">Login</button></div>
            </form>
              </div><!-- End Info Item -->

            </div>

          </div>

          <div class="col-lg-8">
            <?php echo "<p class='alert alert-success'>Sucessfully Registered</p>" ?>
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="First Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Last Name" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Your Email" required>
              </div>
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Password" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Confirm Password" required>
                </div>  
              </div>
             
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Register</button></div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>
    </section>


<?php include("footer.php"); ?>