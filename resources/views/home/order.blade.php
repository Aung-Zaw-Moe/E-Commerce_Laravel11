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
        <div class="col-md-12" style="display: flex; justify-content: center;">
            <table class="table table-bordered mt-3 mb-3 text-center"  style="width: 60rem;">
                <thead class="bg-secondary">
                    <tr>
                        <th>No</th>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Delivery Status</th>
                        <th>Image</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($order as $orders)
                        <tr>
                            <td>{{ $orders->id }}</td>
                            <td>{{ $orders->product->title }}</td>
                            <td>{{ $orders->product->price }}</td>
                            <td>{{ $orders->status }}</td>
                            <td>
                                <img src="productimage/{{ $orders->product->image }}" alt="" height="150" width="250">
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
     <!-- Pagination Links -->
     <div class="pagination-links float-right">
         {{ $order->links() }}
     </div> <br><br><br>
    <!-- Cart section end -->
    <!-- info section -->
  </div>
  @include('home.info')
  <!-- end info section -->
</body>
</html>
