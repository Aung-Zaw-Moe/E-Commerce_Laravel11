@extends('admin.main')
@section('content')
 <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-warning">Order list</h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered justify-center border border-info text-center">
                        <tr>
                            <th class="text-warning">No</th>
                            <th class="text-warning">Customer Name</th>
                            <th class="text-warning">Address</th>
                            <th class="text-warning">Phone</th>
                            <th class="text-warning">Product Title</th>
                            <th class="text-warning">Price</th>
                            <th class="text-warning">Image</th>
                            <th class="text-warning">Status</th>
                            <th class="text-warning">Actions </th>
                            <th class="text-warning">Get PDF </th>
                        </tr>
                        @foreach ($data as $data )
                            <tr>
                                <td>{{ $data->id }}</td>
                                <td>{{ $data->name }}</td>
                                <td>{{ $data->rec_address }}</td>
                                <td>{{ $data->phone }}</td>
                                <td>{{ $data->product->title }}</td>
                                <td>{{ $data->product->price }}</td>
                                <td>
                                    <img src="productimage/{{ ($data->product->image) }}" alt="" width="50px" height="50px">
                                </td>
                                <td>
                                    @if($data->status == 'in progress')
                                    <span class="badge badge-danger">{{ $data->status }}</span>
                                    @elseif($data->status == 'on the way')
                                    <span class="badge badge-info">{{ $data->status }}</span>
                                    @else
                                    <span class="badge badge-warning">{{ $data->status }}</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ url('on_way', $data->id) }}" class="btn btn-outline-primary btn-sm" onclick="confirmation(event)" >On the Way</a>
                                    <a href="{{ url('delivered', $data->id) }}" class="btn btn-outline-success btn-sm" onclick="confirmation(event)" >Delivered</a>
                                </td>
                                <td >
                                    <a class="btn btn-outline-secondary btn-sm text-center" href="{{ url('print_pdf', $data->id) }}">Print PDF</a>
                                </td>
                            </tr>

                        @endforeach
                    </table>
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
             title:"Are You Sure to Action This",
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
