@extends('admin.main')
@section('content')
 <div class="container">
    <div class="row">
        <div class="col-md-12">
                @if (session('status'))
                    <div class="alert alert-success">{{ session('status') }}
                        <a href="{{ url('upload_product') }}" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    </div>
                @endif
            <div class="card">
                <div class="card-header">
                    <h4>Add Product</h4>
                </div>
                <div class="card-body">
                    <form action="{{ url('edit_product', $data->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div>
                            <label for="">Product Title</label>
                            <input type="text" name="title" class="form-control" value="{{ $data->title }}" required>
                        </div>
                        <div class="form-floating">
                            <label for="">Description</label><br>
                            <textarea class="form-control mt-4" name="description" value="{{ $data->description }}">{{ $data->description }}</textarea>
                        </div>
                         <div>
                            <label for="">Price</label>
                            <input type="text" name="price" class="form-control" value="{{ $data->price}}" required >
                        </div>
                        <div>
                            <label for="">Quantity</label>
                            <input type="number" name="qty" class="form-control" value="{{ $data->qty}}" required >
                        </div>
                        <div class="m-2">
                            <label for="" class="form-label">Old Image</label><br>
                            <img src="/productimage/{{ $data->image }}" width="150" alt="">
                        </div>
                         <div class="m-2">
                            <label for="" class="form-label">New Image</label><br>
                            <input type="file" name="image" >
                        </div>
                         <div>
                            <label >Product Category</label><br>
                            <select name="category"  required>                              
                                <option value="{{ $data->category}}">{{ $data->category}}</option>  
                                @foreach ($category as $category)
                                    <option value="{{$category->category_name}}">{{$category->category_name}}</option> 
                                @endforeach                           
                            </select>
                        </div>
                        <div>
                            <input type="submit" value="Update Product" class="btn btn-primary mt-2 float-right">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
 </div>
@endsection

