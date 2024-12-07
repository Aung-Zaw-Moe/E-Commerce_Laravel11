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
                    <form action="{{ url('upload_product') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div>
                            <label for="">Product Title</label>
                            <input type="text" name="title" class="form-control" required>
                        </div>
                        <div class="form-floating">
                            <label for="">Description</label><br>
                            <textarea class="form-control mt-4" name="description" required placeholder="Leave a comment here"></textarea>
                        </div>
                         <div>
                            <label for="">Price</label>
                            <input type="text" name="price" class="form-control" required >
                        </div>
                        <div>
                            <label for="">Quantity</label>
                            <input type="number" name="qty" class="form-control" required >
                        </div>
                        <div class="">
                            <label for="" class="form-label">Product Image</label>
                            <input class="form-control" type="file" name="image">
                        </div>
                         <div>
                            <label >Product Category</label><br>
                            <select name="category"  required>
                                    <option selected>Select Category</option>
                                    @foreach ($category as $category)
                                        <option value="{{$category->category_name}}">{{$category->category_name}}</option>
                                    @endforeach
                            </select>
                        </div>
                        <div>
                            <input type="submit" value="Add Product" class="btn btn-primary mt-2 float-right">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
 </div>
@endsection

