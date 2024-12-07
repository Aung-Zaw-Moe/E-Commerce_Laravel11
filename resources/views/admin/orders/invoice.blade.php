<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E_Commerce</title>
</head>
<body>
    <center>
            <h1>Curstomer Invoice</h1>
            <h3>Customer name : {{ $data->name }}</h3>
            <h3>Customer Address : {{ $data->rec_address }}</h3>
            <h3>Customer Phone : {{ $data->phone }}</h3>
            <h2>
                Product Title : {{ $data->product->title }}
            </h2>
            <h2>
                Product Price : {{ $data->product->price }} MMK
            </h2>
            <img width="300" height="200" src="productimage/{{ $data->product->image }}" alt="">
    </center>
    {{-- <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <h1>Curstomer Invoices</h1>
            <h3>Customer name : {{ $data->name }}</h3>
            <h3>Customer Address : {{ $data->rec_address }}</h3>
            <h3>Customer Phone : {{ $data->phone }}</h3>
          </div>
        </div>
        <div class="col-md-6">
            <h2>
                Product Title : {{ $data->product->title }}
            </h2>
            <h2>
                Product Price : {{ $data->product->price }} MMK
            </h2>
            <img width="300" height="200" src="productimage/{{ $data->product->image }}" alt="">
        </div>
    </div> --}}
</body>
</html>
