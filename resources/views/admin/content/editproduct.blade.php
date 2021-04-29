@extends('admin.layout.adminlayout')
@section('title','Product Edit')
    
@section('body')


<form action="{{ route('update.product',$product->image) }}" method="POST" enctype="multipart/form-data">
    @csrf

        <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0 ml-5">
                <input type="text" name='id' id="id" value="{{$product->id}}" hidden>
                <input type="text" class="form-control form-control-user" id="name" placeholder="Product Name" name="name" value="{{$product->productname}}" >
            </div><br>
        <span class="ml-5 text-danger">@error('name'){{ $message }}@enderror</span>
        </div>

        <div class="md-form px-5">
            <i class="fas fa-pencil-alt prefix"></i>
            <textarea id="quote" class="md-textarea form-control" rows="5" name="description" id="description">{{$product->description}}</textarea>

        </div>
        <span class="ml-5 text-danger">@error('description'){{ $message }}@enderror</span>
        <div class="md-form px-5">
            <i class="fas fa-pencil-alt prefix"></i>
            <img src="{{url('/product/'.$product->image.'')}}" alt="..."  class="img-thumbnail">
            <input type="file" name="img" id="img">
        </div>
        <div class="my-5 text-center">
            <a href="#" class="btn btn-info btn-icon-split mx-10">

                <button type="submit" class="btn btn-success">Update</button>
            </a>

        </div>

    </form>
@endsection