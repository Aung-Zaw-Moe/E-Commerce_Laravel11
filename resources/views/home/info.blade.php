 <section class="info_section  layout_padding2-top">
    <div class="social_container">
      <div class="social_box">
        <a href="">
          <i class="fa fa-facebook text-warning" aria-hidden="true"></i>
        </a>
        <a href="">
          <i class="fa fa-twitter text-warning" aria-hidden="true"></i>
        </a>
        <a href="">
          <i class="fa fa-instagram text-warning" aria-hidden="true"></i>
        </a>
        <a href="">
          <i class="fa fa-youtube text-warning" aria-hidden="true"></i>
        </a>
      </div>
    </div>
    <div class="info_container ">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-6">
            <h6 class="text-warning">
              ABOUT US
            </h6>
            <p>
              What makes us different from all other providers is that our staff is NEVER compensated by how much they sell and give service they are only judged on the quality of the solutions they provide and the absolute satisfaction of our clients.
            </p>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="info_form ">
              <h5 class="text-warning">
                Newsletter
              </h5>
                <a href="{{ url('/') }}">Home</a><br>
                <a href="{{ route('documents.home') }}">Documentation</a><br>
                <a href="{{ route('home.contact') }}">Contact</a><br>
            </div>
          </div>
          {{-- <div class="col-md-6 col-lg-3"> --}}
            {{-- <h6>
              NEED HELP
            </h6>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet,
            </p> --}}
          {{-- </div> --}}
          <div class="col-md-6 col-lg-3">
            <h6 class="text-warning">
              CONTACT US
            </h6>
            <div class="info_link-box">
              <a href="https://maps.app.goo.gl/WgC6wx16MRoCcJkj7">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span> Hlaing Township, Yangon.</span>
              </a>
              <a href="#">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span> +959 769000788</span>
              </a>
              <a href="#">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>aungzawmoe3199@gmail.com</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- footer section -->
    <footer class=" footer_section">
      <div class="container">
        <p>
          &copy; <span id="displayYear"></span> All Rights Reserved By
          <a href="https://github.com/Aung-Zaw-Moe" class="text-primary"><u> " Aung Zaw Moe "</u></a>
        </p>
      </div>
    </footer>
    <!-- footer section -->

  <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.js') }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <script src="{{ asset('js/custom.js') }}"></script>

  </section>
