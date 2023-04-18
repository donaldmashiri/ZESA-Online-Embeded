
<?php include('header.php'); ?>
<?php include('navbar.php'); ?>

<!-- <div class="d-flex justify-content-center bd-highlight mb-3">
    <div class="p-2 bd-highlight"><img src="Zesa.png" class="img-fluid animated"></div>
    <div class="p-2 bd-highlight"><h1 class="mt-5">ZETDC - Token less Electricity
    <br>
       <b style="color:navy" class="text-info">Pre-Payment System</b>
    </h1></div>
</div> -->


<section id="features" class="features mt-5">
      <h1 class="text-center">Welcome Emanuel Musiri</h1>
      <div class="container" data-aos="fade-up">
        <ul class="nav nav-tabs d-flex">

          <li class="nav-item col-6 col-md-4 col-lg-2">
            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
              <i class="bi bi-binoculars color-cyan"></i>
              <h4>ACTIVE</h4>
            </a>
          </li><!-- End Tab 1 Nav -->

          <li class="nav-item col-6 col-md-4 col-lg-2">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
              <i class="bi bi-box-seam color-indigo"></i>
              <h4><Table>TRANSFER</Table></h4>
            </a>
          </li><!-- End Tab 2 Nav -->

          <li class="nav-item col-6 col-md-4 col-lg-2">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
              <i class="bi bi-brightness-high color-teal"></i>
              <h4>TOPUP</h4>
            </a>
          </li><!-- End Tab 3 Nav -->

          <li class="nav-item col-6 col-md-4 col-lg-2">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
              <i class="bi bi-command color-red"></i>
              <h4>EMERGENCY</h4>
            </a>
          </li><!-- End Tab 4 Nav -->

          <li class="nav-item col-6 col-md-4 col-lg-2">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-5">
              <i class="bi bi-easel color-blue"></i>
              <h4>Set Units</h4>
            </a>
          </li><!-- End Tab 5 Nav -->

          <li class="nav-item col-6 col-md-4 col-lg-2">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-6">
              <i class="bi bi-map color-orange"></i>
              <h4>REPORTS</h4>
            </a>
          </li><!-- End Tab 6 Nav -->

        </ul>

      </div>
    </section>

<!-- ======= Pricing Section ======= -->
<section id="pricing" class="pricing">
      <div class="container" data-aos="fade-up">
      
        <div class="row gy-4">

          <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="200">
           
          </div><!-- End Pricing Item -->

          <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="400">
          <div class="pricing-item featured">

              <div class="pricing-header">
                <h4 class="text-warning fw-bolder">+140823</h4>
                <p class="float-end fw-bold text-danger">Balance : $12.00</p>
              </div>

              <div class="tab-content">
                <div class="tab-pane active show" id="tab-1">
                  <div class="row gy-4">
                    <div class="text-center" data-aos="fade-up" data-aos-delay="100">
                      <h3 class="text-info">Activation</h3>

                      <div class="text-center mt-auto mt-2">
                        <a href="#" class="btn btn-primary btn-lg">Activate</a>
                        <a href="#" class="btn btn-danger btn-lg">De-activate</a>
                        <!-- <a href="#" class="buy-btn">Buy Now</a> -->
                      </div>

                    </div>
                  </div>
                </div>

                <div class="tab-pane show" id="tab-2">
                  <div class="row gy-4">
                    <div class="text-center" data-aos="fade-up" data-aos-delay="100">
                      

                      <div class="card">
                        <div class="card-header"><h6 style="color:purple" class="text">Transfer</h6></div>
                        <div class="card-body">
                          <form action="" method="post">
                            <div class="form-group">
                              <input type="text" class="form-control" placeholder="Meter Number">
                            </div>
                            <div class="form-group mt-3">
                              <input type="text" class="form-control" placeholder="Units">
                            </div>
                          </form>
                        </div>
                        <div class="text-center mt-auto mt-2">
                          <a style="background-color:purple" href="#" class="buy-btn ">Transfer</a>
                        
                          <!-- <a href="#" class="buy-btn">Buy Now</a> -->
                        </div>
                      </div>

                     

                    </div>
                  </div>
                </div>

                <div class="tab-pane show" id="tab-3">
                  <div class="row gy-4">
                    <div class="text-center" data-aos="fade-up" data-aos-delay="100">
                      

                      <div class="card mt-3">
                        <div class="card-header"><h6 style="color:blue" class="text">Top-up</h6></div>
                        <div class="card-body">
                          <form action="" method="post">
                            <div class="form-group">
                              <input type="text" class="form-control" placeholder="Enter Amount">
                            </div>
                            
                          </form>
                        </div>
                        <div class="text-center mt-auto mt-2">
                         <a href="#" class="buy-btn">Buy Now</a>
                        </div>
                      </div>

                     

                    </div>
                  </div>
                </div>

                <div class="tab-pane show" id="tab-4">
                  <div class="row gy-4">
                    <div class="text-center" data-aos="fade-up" data-aos-delay="100">
                      

                      <div class="card mt-3">
                        <div class="card-header"><h6 style="color:red" class="text">Emergency</h6></div>
                        <div class="card-body">
                        <ul class="list-group">
                          <p>Select Amount for Credit</p>
                          <li class="list-group-item">1. $5.00 -  490units </li>
                          <li class="list-group-item">2. $10.00 - 1550units</li>
                          <li class="list-group-item">3. $15.00 - 1870units</li>
                          <form action="" method="post">
                            <div class="form-group mt-3">
                              <input type="text" class="form-control" placeholder="Select Number">
                            </div>
                            
                          </form>
                        </ul>
                        </div>
                        <div class="text-center mt-auto mt-2">
                         <a href="#" class="buy-btn">Submit</a>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div><!-- End Pricing Item -->

          <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="600">
          
          </div><!-- End Pricing Item -->
        </div>

      </div>
    </section><!-- End Pricing Section -->


    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container" data-aos="fade-up">
        <ul class="nav nav-tabs row gy-4 d-flex">

          <li class="nav-item col-6 col-md-4 col-lg-2">
            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
              <i class="bi bi-binoculars color-cyan"></i>
              <h4>Modinest</h4>
            </a>
          </li><!-- End Tab 1 Nav -->

          <li class="nav-item col-6 col-md-4 col-lg-2">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
              <i class="bi bi-box-seam color-indigo"></i>
              <h4>Undaesenti</h4>
            </a>
          </li><!-- End Tab 2 Nav -->

          <li class="nav-item col-6 col-md-4 col-lg-2">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
              <i class="bi bi-brightness-high color-teal"></i>
              <h4>Pariatur</h4>
            </a>
          </li><!-- End Tab 3 Nav -->

          <li class="nav-item col-6 col-md-4 col-lg-2">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
              <i class="bi bi-command color-red"></i>
              <h4>Nostrum</h4>
            </a>
          </li><!-- End Tab 4 Nav -->

          <li class="nav-item col-6 col-md-4 col-lg-2">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-5">
              <i class="bi bi-easel color-blue"></i>
              <h4>Adipiscing</h4>
            </a>
          </li><!-- End Tab 5 Nav -->

          <li class="nav-item col-6 col-md-4 col-lg-2">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-6">
              <i class="bi bi-map color-orange"></i>
              <h4>Reprehit</h4>
            </a>
          </li><!-- End Tab 6 Nav -->

        </ul>

      </div>
    </section><!-- End Features Section -->



  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="footer-legal text-center">
      <div class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">

        <div class="d-flex flex-column align-items-center align-items-lg-start">
          <div class="copyright">
            &copy; Copyright <strong><span>HeroBiz</span></strong>. All Rights Reserved
          </div>
          <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/herobiz-bootstrap-business-template/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
          </div>
        </div>

        <div class="social-links order-first order-lg-last mb-3 mb-lg-0">
          <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
          <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bi bi-skype"></i></a>
          <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>

      </div>
    </div>

  </footer><!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>