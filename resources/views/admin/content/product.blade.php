@extends('admin.layout.adminlayout')
@section('title','Products')
    
@section('body')
<div class="mx-5">
<form action="{{route('add.product')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Product name</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="inputEmail3" name="productname" id="productname" placeholder="Product Name">
        <span class="ml-5 text-danger">@error('productname'){{$message}}@enderror</span>
      </div>
    </div>
    <div class="form-group row">
      <label for="inputPassword3" class="col-sm-2 col-form-label">Description</label>
      <div class="md-form px-5">
        <i class="fas fa-pencil-alt prefix"></i>
        <textarea id="quote" class="md-textarea form-control" rows="5" name="description" id="description"></textarea>
        <span class="ml-5 text-danger">@error('description'){{$message}}@enderror</span>
    </div>
    </div>
        <div class="row mb-5 mt-3">
            <input type='file' name="img" id="img" required>
        </div>
       
    <div class="form-group row">
      <div class="col-sm-10">
        <button type="submit" class="btn btn-primary">Add</button>
      </div>
    </div>
  </form>


  <div class="my-5 mx-5"> 
    <table class="table table-sm">
        <thead>
          <tr>
            
            <th scope="col">Product Name</th>
            <th scope="col">Description</th>
            <th scope="col">Image</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($data as $values)
            
          <tr>
            
            <td >{{$values->productname}}</td>
            <td >{{$values->description}}</td>
            <td><img src="{{url('/product/'.$values->image.'')}}" width="70px"></td>
            <td><a href="{{route ('edit.product',$values)}}"><button type="button" class="btn btn-success">Edit</button></a></td>
            <td><a href="{{route ('delete.product',$values->id)}}"><button type="button" class="btn btn-danger">Delete</button><a></td>
            
          </tr>
          @endforeach 
        </tbody>
      </table>
</div>

</div>
@endsection