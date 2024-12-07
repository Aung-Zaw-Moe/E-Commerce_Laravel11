<!DOCTYPE html>
<html>

<head>
  @include('home.css')
</head>

<body>
  <div class="hero_area">
    <!-- header section starts -->
    @include('home.header')
    <!-- end header section -->
    <!-- slider section -->
{{--
   @include('home.slider')
--}}
    <!-- end slider section -->
  </div>
  <br><br><br>
  <!-- end hero area -->
  <section class="contact_section mt-4">
    <div class="container px-0">
      <div class="heading_container ">
        <h2 class="">
          Contact Us
        </h2>
      </div>
    </div>
    <div class="container container-bg">
      <div class="row">
        <div class="col-lg-7 col-md-6 px-0">
          <div class="map_container">
            <div class="map-responsive">
              <!-- Google Maps iframe with dynamic location -->
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d328.9825730512625!2d96.1583851218344!3d16.77737113896771!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sen!2smm!4v1733117151052!5m2!1sen!2smm" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-5 px-0">
            <form action="{{ route('contact.store') }}" method="POST">
                @csrf
                <div>
                    <input type="text" name="name" placeholder="Name" required />
                </div>
                <div>
                    <input type="email" name="email" placeholder="Email" required />
                </div>
                <div>
                    <input type="text" name="phone" placeholder="Phone" required />
                </div>
                <div>
                    <textarea name="message" placeholder="Message" required></textarea>
                </div>
                <div class="d-flex">
                    <button type="submit">SEND</button>
                </div>
            </form>
        </div>
      </div>
    </div>
  </section>

  <br><br><br>

  <!-- info section -->
  @include('home.info')
  <!-- end info section -->
</body>

</html>
