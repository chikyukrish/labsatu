
<?php

session_start();

include 'koneksi.php';

$pesan = mysqli_query($conn, "SELECT * FROM guestbook ORDER BY tanggal");

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
          <h2>Guestbook</h2>
          <p> TIF RP - 20 CNSB  || SESSION HIJACKING </p>
        </div>

        <div class="row justify-content-md-center">

 		<div class="card">
            <div class="card-header">
                Isi buku tamu
            </div>
            <div class="card-body">
          <form action="gb_post.php" method="post">
            <div class="form-row">
              <div class="form-group col">
                <label for="nik">Nama</label>
                <input  type="text" name="nama" class="form-control" ">
              </div>
              <div class="form-group col">
                <label for="nama">Pesan Anda</label>
                <input  type="text" class="form-control" name="pesan" >
              </div>
              
            </div>
            
            
            
            </div>
          <button type="submit" name="submit" value="Simpan Data" class="btn btn-primary" />  Kirim       
          </form>
              </div>
              </div>
        </div>
      </div>
    </section><!-- End Contact Section -->
	
	<div class="container">
		<h2>Guestbook</h2>
	
	<?php
	
	while($row = mysqli_fetch_array($pesan)) {
	
		echo "<small>Oleh <b>{$row['nama']}</b> pada {$row['tanggal']}</small>";
		echo "<p> {$row['pesan']}</p>";
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

