 @php
  $setting =  App\Models\Setting::find(1);
@endphp  
<!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <h3>{{$setting->site_name}}</h3>
              <p class="pb-3"><em>{{ucfirst($setting->description)}}</em></p>
              <p>
                {{ucfirst($setting->address)}}<br><br>
                <strong>Phone:</strong> {{ucfirst($setting->phone)}}<br>
                <strong>Email:</strong> {{ucfirst($setting->email)}}<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Paau</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="#">Unicsoft Codes and Research Inst./a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{url('/')}}/frontend_assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="{{url('/')}}/frontend_assets/vendor/aos/aos.js"></script>
  <script src="{{url('/')}}/frontend_assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{url('/')}}/frontend_assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="{{url('/')}}/frontend_assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="{{url('/')}}/frontend_assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="{{url('/')}}/frontend_assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="{{url('/')}}/frontend_assets/js/main.js"></script>
  <script type="text/javascript">
    var quoteArray = ["We are a body to regulate business location and activities within Prince Abubakar Audu University."];
    var textPosition = 0; 
    var speed = 60;

    typewriter = () => {
  document.querySelector("#message").innerHTML = quoteArray[0].substring(0, textPosition) + '<span class="span">\u25AE</span>';

  if(textPosition++ != quoteArray[0].length)
    setTimeout(typewriter, speed);
}

window.addEventListener("load", typewriter)
  </script>
</body>

</html>