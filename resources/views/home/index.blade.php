<!DOCTYPE html>
<html>

<head>
  @include('home.css')
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    @include('home.header')
    <!-- end header section -->
    <!-- slider section -->

   @include('home.slider')

    <!-- end slider section -->
  </div>
  <!-- end hero area -->

  <!-- shop section -->

  @include('home.shop')
     {{-- @yield('content') --}}

  <!-- end shop section -->

  <!-- contact section -->

  {{-- @include('home.contact') --}}

  <!-- end contact section -->



  <!-- info section -->

  @include('home.info')

  <!-- end info section -->



</body>

</html>

