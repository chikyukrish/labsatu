
<?php

session_start();

include 'koneksi.php';

$id = $_GET['id'];
$q  = mysqli_query($conn, "SELECT * FROM post WHERE id = {$id}") or die(mysqli_error($conn));
$post = mysqli_fetch_array($q);

?>
<!DOCTYPE html>
<html lang="en">

<?php include"head.php";?>
<body>

 <?php include"header.php";?>

  

  <main id="main">

    
	
	<section id="contact" class="row justify-content-md-center">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Tulisan</h2>
        </div>

        <div class="row justify-content-md-center">

	<hr>

	
	<hr>
	<div class="text-center">
	<h2><?php echo $post['judul'] ?></h2>
	
	<?php echo $post['konten'] ?>
	</div>
              </div>
        </div>
      </div>
    </section><!-- End Contact Section -->
	

  </main><!-- End #main -->
 <?php include"footer.php";?>

  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>


