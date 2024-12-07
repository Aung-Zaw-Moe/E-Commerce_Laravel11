@extends('admin.main')
@section('content')
 <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-warning">Category</h4>
                </div>
                <div class="card-body">
                    <form action="{{ url('add_category') }}" method="POST">
                        @csrf
                        <div>
                            <input type="text" name="category" class="form-control mb-2" required>

                            <input type="submit" value="Add Category" class="btn btn-primary float-end">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-warning">Category Name</h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered justify-center border border-info">
                        <tr>
                            <th class="text-center text-warning">CatagoryName</th>
                            <th class=" text-center text-warning">Actions </th>
                        </tr>
                        @foreach ($data as $data )
                            <tr >
                                <td>{{ $data->category_name }}</td>
                                <td class="text-center">
                                    <a href="{{ url('edit_category/'.$data->id) }}" class="btn btn-outline-success">Edit</a>
                                    <a onclick="confirmation(event)" href="{{ url('delete_category/'. $data->id)  }}" class="btn  btn-outline-danger">Delete</a>
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
