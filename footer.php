 <!-- ======= Footer ======= -->
  <footer id="footer">



    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col">
            <h3>SIBERKOST</h3>
            <img src="./assets/img/siberkost.jpg" alt="">
            </p>
          </div>

          <div class="col">
            <h4>Informasi Kontak</h4>
            <p>SIBER KOSTAN ||  CTF PLAYER </p>
            
          </div>

          <div class="col">
            <h4>Our Social Networks</h4>
            <p>Jangan lupa subscribe dan ikuti social media saya </p>
            <div class="social-links mt-3">
                          <a href="https://www.youtube.com/channel/UCN37ma-wm37D_TWAu0IQJOA/featured" class="youtube"  target="_blank"><i class="bx bxl-youtube"></i></a>
 <a href="https://github.com/chikyukrish" class="github"  target="_blank"><i class="bx bxl-github"></i></a>
              <a href="https://twitter.com/chikyukrish" class="twitter"  target="_blank"><i class="bx bxl-twitter"></i></a>
              <a href="https://www.instagram.com/litlekrishnaa/" class="instagram"  target="_blank"><i class="bx bxl-instagram"></i></a>
              <a href="https://www.linkedin.com/in/chikyukrish-a-s-4b59a61b1/" class="linkedin"  target="_blank"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>SiberKost</span></strong> - <?=date('Y')?>
      </div>
      <div class="credits">
  <!-- =======================================================
  SIBERKOST 
  author : Krisna Ardi Sugiarto || Chikyukrish
  email : krishnaardi66@gmail.com
  ======================================================== -->Powered by <a href="https://www.instagram.com/litlekrishnaa/" target="_blank">Chikyukrish</a> <p id="gfg"></p>
      </div>
    </div>
      <!-- <script>
function getIP(json) {
  alert("Hacking Attemp by nino, Your IP Addresss : " + json.ip);
}
</script>
<script src="https://api.ipify.org?format=jsonp&callback=getIP"></script>

// as seperate script tag
<script type="application/javascript" src="https://api.ipify.org?format=jsonp&callback=getIP"> </script> -->
 <script src=
"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    </script>
  
    <script>
        /* Add "https://api.ipify.org?format=json" statement
           this will communicate with the ipify servers in
           order to retrieve the IP address $.getJSON will
           load JSON-encoded data from the server using a
           GET HTTP request */
  
        $.getJSON("https://api.ipify.org?format=json",
                                          function(data) {
  
            // Setting text of element P with id gfg
            $("#gfg").html(data.ip);
        })
    </script>
  </footer><!-- End Footer -->