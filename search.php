


<?php

session_start();

include 'koneksi.php';

$q = $_GET['q'];
$posts = mysqli_query($conn, "SELECT * FROM post WHERE judul LIKE '%{$q}%' OR konten LIKE '%{$q}%'");

?>
<!DOCTYPE html>
<html lang="en">

<?php include"head.php";?>
<body>

<?php include"header.php";?>
  <main id="main">

    
	
 <section id="contact" class="row justify-content-md-center">
      <div class="container" data-aos="fade-up">

        <div class="section-title col-md-auto">
          <h2>Hayo mau ngapain hayo, gaada yang bisa di apa-apain hayooo</h2>
          <p>Nyari apa bang</p>
        </div>

        <div class="row">
<form action="search.php" method="get">
		Cariin aku dong mas:
		<input type="text" name="q">
		<input type="submit" value="Cari">
	
<hr>
		
	<h3>Hasil pencarian untuk "<?php echo $q; ?>"</h3>
	
	<?php echo mysqli_num_rows($posts); ?> hasil
		
	<hr>
		
	<?php
	
	while($row = mysqli_fetch_array($posts)) {
	
		echo "<a href='post.php?id={$row['id']}'><h2>{$row['judul']}</h2></a>";
		echo "<small>Tanggal {$row['tanggal']}</small>";
		echo "<hr>";
		
	}
	
	?>


	</div>

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


