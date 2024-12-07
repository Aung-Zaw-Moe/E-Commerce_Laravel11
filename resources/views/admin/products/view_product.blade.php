@extends('admin.main')
@section('content')
 <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-warning">Prouct Details list</h4>
                </div>
                <div class="card-body">
                    <form action="{{ url('product_search') }}" class="m-2" method="GET">
                        @csrf
                        <input type="search" name="search">
                        <input type="submit" class="btn btn-secondary btn-sm" value="search">
                    </form>
                    <table class="table table-bordered table-striped pyidaungsu">
                        <thead class="text-center">
                            <tr>
                                <th class="text-warning">No</th>
                                <th class="text-warning">Product Title</th>
                                <th class="text-warning">Description</th>
                                <th class="text-warning">Category</th>
                                <th class="text-warning">Price</th>
                                <th class="text-warning">Qty</th>
                                <th class="text-warning">Image</th>
                                <th class="text-warning">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @foreach ($product as $data )
                                <tr>
                                    <td>{{ $data->id }}</td>
                                    <td>{{ $data->title }}</td>
                                    <td>{!!Str::limit($data->description,30)!!}</td>
                                    <td>{{ $data->category }}</td>
                                    <td>{{ $data->price }}</td>
                                    <td>{{ $data->qty }}</td>
                                    <td><img src="productimage/{{ $data->image }}" alt="" width="100px" height="100px"> </td>
                                    <td>
                                        <a href="{{ url('update_product',$data->id) }}" style="font-size: 17px" class="text-success pyidaungsu text-center"><i class="fa-solid fa-pen-to-square"></i></a>
                                        <a class="btn btn-link text-danger text-center" href="{{ url('delete_product',$data->id) }}" onclick="confirmation(event)"  ><i class="fa-regular fa-trash-can"></i></a>

                                        {{-- <form action="{{ url('delete_product',$data->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                            <button type="submit" class="btn btn-link text-danger pyidaungsu text-center" onclick="confirmation(event)"  style="font-size: 17px;"><i class="fa-regular fa-trash-can"></i></button>
                                        </form> --}}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                 <div class="mt-2 float-right">
                       {{ $product->links() }}
                 </div>
                </div>
            </div>
        </div>
    </div>
 </div>
 <script type="text/javascript  ">
     function confirmation(ev)
     {
         ev.preventDefault();
         var urlToRedirect = ev.currentTarget.getAttribute('href');
         console.log(urlToRedirect);
         swal({
             title:"Are You Sure to Delete This",
             text:"This delete will be parmanent",
             icon:"warning",
             buttons:true,
             dangerMode:true,
         })
         .then((willCancel)=>{
             if(willCancel){
                  window.location.href=urlToRedirect;
             }
         });
     }

 </script>
 {{-- Sweetalert --}}
 <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


@endsection




