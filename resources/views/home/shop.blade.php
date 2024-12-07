
  <section class="shop_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Latest Products
        </h2>
      </div>
      <div class="row">

        @foreach ($product as $data)
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="box">
                        <div class="img-box">
                            <img src="productimage/{{ $data->image }}" alt="">
                        </div>
                        <div class="detail-box">
                            <h6>{{ $data->title }}</h6>
                            <h6>
                            Price
                            <span>
                                {{ $data->price }} MMK
                            </span>
                            </h6>
                        </div>
                        <div style="padding: 15px;">
                            <a class="btn btn-primary btn-sm" href="{{ url('product_details', $data->id) }}">Details</a>
                            <a class="btn btn-success btn-sm" href="{{ url('add_cart', $data->id) }}">Add To Cart</a>
                        </div>
                </div>
            </div>
        @endforeach
      </div>
    </div>
  </section>

