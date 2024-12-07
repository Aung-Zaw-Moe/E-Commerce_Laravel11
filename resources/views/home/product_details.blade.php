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

  </div>
  <!--Product Detail Start-->
    <section class="shop_section layout_padding">
        <div class="container">
        <div class="heading_container heading_center">
            <h2>
            Latest Products
            </h2>
        </div>
        <div class="row">
                <div class="col-md-12" style="display: flex; justify-content: center;">
                    <div class="card border border-info" style="width: 30rem;">
                    <img src="/productimage/{{ $datas->image }}" class="card-img-top p-2" alt="...">
                    <div class="card-body">
                        <h6 class="card-title mb-2">
                            <div class="row">
                                <div class="col-md-6">
                                    <h6>{{ $datas->title }}</h6>
                                    <h6>
                                    Price
                                    <span>
                                        {{ $datas->price }} MMK
                                    </span>
                                    </h6>
                                </div>
                                <div class="col-md-6">
                                    <h6>Category : {{ $datas->category }}</h6>
                                    <h6>
                                    Available Quantity
                                    <span>
                                        {{ $datas->quantity }}
                                    </span>
                                    </h6>
                                </div>
                            </div>
                        </h6>
                        <hr>
                        <p class="card-text">
                            {{-- <div class="row">
                                <div class="col-md-6">
                                    <h6>{{ $datas->title }}</h6>
                                    <h6>
                                    Price
                                    <span>
                                        {{ $datas->price }} MMK
                                    </span>
                                    </h6>
                                </div>
                                <div class="col-md-6">
                                    <h6>Category : {{ $datas->category }}</h6>
                                    <h6>
                                    Available Quantity
                                    <span>
                                        {{ $datas->quantity }}
                                    </span>
                                    </h6>
                                </div>
                            </div> --}}
                            <p class="fs-6 sm">{{ $datas->description }}</p>
                        </p>
                    </div>

                    </div>
                </div>
        </div>
        </div>
    </section>
  <!--Product Detail End-->










<!-- Start Footer section -->

  @include('home.info')

  <!-- end Footer section -->
</body>
</html>

