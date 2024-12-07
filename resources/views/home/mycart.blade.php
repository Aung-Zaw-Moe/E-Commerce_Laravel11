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

        <!-- Cart section start -->
        <div class="row">
            <div class="col-md-4" style="display: flex; justify-content: center;">
                <div class="card mt-3 mb-3 border border-secondary">
                    <h5 class="card-header bg-secondary ">Orders Form</h5>
                    <div class="card-body">
                        <form action="{{ url('comfirm_order') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="">Receiver Name</label>
                                <input type="text" name="name" class="form-control" value="{{ Auth::user()->name }}">
                            </div>
                            <div class="form-group">
                                <label for="">Receiver Address</label>
                                <input type="text" name="address" class="form-control" value="{{ Auth::user()->address }}">
                            </div>
                            <div class="form-group">
                                <label for="">Receiver Phone</label>
                                <input type="text" name="phone" class="form-control" value="{{ Auth::user()->phone }}">
                            </div>
                            <div class="form-group">
                                <input class="btn btn-outline-primary justify-content-center" type="submit" value="Cash On Delivery">
                                <a class="btn btn-outline-danger justify-content-center" href="{{ url('stripe/{value}') }}">Pay Using Card</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-8" style="display: flex; justify-content: end;">
                <table class="table table-bordered mt-3 mb-3 text-center" style="width: 50rem;">
                    <thead class="bg-secondary">
                        <tr>
                            <th>No</th>
                            <th>Product Table</th>
                            <th>Price</th>
                            <th>Image</th>
                            <th>Remove</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $value = 0; ?>
                        @foreach ($cart as $cartItem)
                            <tr>
                                <td>{{ $cartItem->id }}</td>
                                <td>{{ $cartItem->product->title }}</td>
                                <td>{{ $cartItem->product->price }} MMK</td>
                                <td>
                                    <img src="productimage/{{ $cartItem->product->image }}" alt="" width="100px" height="100px">
                                </td>
                                <td>
                                    <a href="{{ url('removecart', $cartItem->id) }}" class="btn btn-outline-danger mt-4">Remove</a>
                                </td>
                            </tr>
                            <?php $value += $cartItem->product->price; ?>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
         <!-- Add pagination links here -->
                <div class="pagination-links float-right">
                    {{ $cart->links() }}
                </div>

        <div class="m-3" style="display: flex; justify-content: center;">
            <h3 class="">Total Value of Cart is : {{$value}} MMK</h3>
        </div>

        <!--Cart section end-->
        <!-- info section -->
    </div>
    @include('home.info')
    <!-- end info section -->
</body>
</html>
