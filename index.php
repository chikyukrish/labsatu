





<?php

session_start();

include 'koneksi.php';

$posts = mysqli_query($conn, "SELECT * FROM post");

?>
<!DOCTYPE html>
<html lang="en">

<?php include"head.php";?>
<body>

 <?php include"header.php";?>
  <main id="main">

    <!-- ======= Cliens Section ======= -->


    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Tentang</h2>
        </div>

        <div class="row content">
          <div class="col-sm text-center">
            <p>
              Lorem Ipsum is simply dummy text of the printing and 
              typesetting industry. Lorem Ipsum has been the industry's 
              standard dummy text ever since the 1500s, when an unknown 
              printer took a galley of type and scrambled it to make a type specimen book. 
              It has survived not only five centuries, but also the leap into electronic 
              typesetting, remaining essentially unchanged. It was popularised in the 1960s with 
              the release of Letraset sheets containing Lorem Ipsum passages, and more recently 
              with desktop publishing softre like Aldus PageMaker including versions of Lorem Ipsum.
            </p>
            <p><b>ASD </b></p>
            <p> <b>ASD</b> <br>

              It was popularised in the 1960s with 
              the release of Letraset sheets containing Lorem Ipsum passages, and more recently 
              with desktop publishing softre like Aldus PageMaker including versions of Lorem Ipsum.</p>
            <br>
            <b>ASD</b> <br>

            It was popularised in the 1960s with 
              the release of Letraset sheets containing Lorem Ipsum passages, and more recently 
              with desktop publishing softre like Aldus PageMaker including versions of Lorem Ipsum.


            <!-- <ul>
              <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
              <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li>
              <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
            </ul> -->

          </div>
    </section><!-- End About Us Section -->

    <!-- ======= Services Section ==
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="row justify-content-md-center">
      <div class="container" data-aos="fade-up">

        <div class="section-title col-md-auto">
          <h2>tulisan</h2>
          <p>Cari Tulisan</p>
        </div>

        <div class="row">
<form action="search.php" method="get">
		Cari Tulisan:
		<input type="text" placeholder="jika kamu bisa jadi admin, kamu memang haiker" size="50" name="q">
		<input type="submit" value="Cari">
	
			<hr>
			<?php
	
	while($row = mysqli_fetch_array($posts)) {
	
		echo "<a href='post.php?id={$row['id']}'><h2>{$row['judul']}</h2></a>";
		echo "<small>Tanggal {$row['tanggal']}</small>";
		echo "<hr>";
		
	}
	
	?>


  </main><!-- End #main -->
  <!-- ======= Footer ======= -->
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
