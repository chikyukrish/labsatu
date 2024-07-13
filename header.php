 <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index.php"><img src="./assets/img/logo.png" alt=""></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
		<?php if (isset($_SESSION['admin']) && $_SESSION['admin'] == 1) : ?>
		<li><a href="MFSG22LOBI======.php">Admin</a></li>
		<?php endif; ?>
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="gb.php">Guestbook</a></li>
         

        </ul>
      </nav><!-- .nav-menu -->


    </div>
  </header><!-- End Header -->
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
          data-aos="fade-up" data-aos-delay="200">
          <h1>LAB SATU</h1>
          <h2>Cari apa aja</h2>
          <div class="d-lg-flex">
            <a href="#about" class="btn-get-started scrollto">Get Started</a>
            <a href="https://www.youtube.com/watch?v=H2ce_kMdl1E" class="venobox btn-watch-video" data-vbtype="video"
              data-autoplay="true"> Watch Video <i class="icofont-play-alt-2"></i></a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="assets/img/logo.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->