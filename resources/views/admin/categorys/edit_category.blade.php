@extends('admin.main')
@section('content')
 <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Update Category</h4>
                </div>
                <div class="card-body">
                    <form action="{{ url('update_category', $data->id) }}" method="POST">
                        @csrf
                        <div>
                            <input type="text" name="category" class="form-control mb-2" value="{{ $data->category_name }}">

                            <input type="submit" value="Update Category" class="btn btn-primary float-end">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4>Category Name</h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered justify-center border border-info">
                        <tr>
                            <th>CatagoryName</th>
                            <th>Actions </th>
                        </tr>
                        @foreach ($data as $data )
                            <tr>
                                <td>{{ $data->category_name }}</td>
                                <td>
                                    <a href="{{ url('edit_category/'.$data->id) }}" class="btn btn-outline-success">Edit</a>
                                    <a onclick="confirmation(event)" href="{{ url('delete_category/'. $data->id)  }}" class="btn  btn-outline-danger">Delete</a>
                                </td>
                            </tr>

                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div> --}}
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
