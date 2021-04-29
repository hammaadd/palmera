@extends('admin.layout.adminlayout')
@section('title', 'Short Quotes')
@section('extraheaderfiles')
 <meta name="csrf-token" content="{{ csrf_token() }}">    
@endsection
@section('body')
   
    <!--Textarea with icon prefix-->
    <form action="{{route('add.quote')}}" method="POST">
      @csrf
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0 ml-5">
            <input type="text" class="form-control form-control-user" id="key"
                placeholder="Key" name="key">
        </div><br>
        <span class="ml-5 text-danger">@error('key'){{$message}}@enderror</span>
    </div>
      
      <div class="md-form px-5">
          <i class="fas fa-pencil-alt prefix"></i>
          <textarea id="quote" class="md-textarea form-control" rows="5" name="quote"></textarea>
          
      </div>
      <span class="ml-5 text-danger">@error('quote'){{$message}}@enderror</span>
  
    <div class="my-5 text-center"> 
        <a href="#" class="btn btn-info btn-icon-split mx-10">
            
            <button type="submit" class="btn btn-success">Add</button>
        </a> 
        
    </div>
   
  </form>
    <div class="my-5 mx-5"> 
        <table class="table table-sm">
            <thead>
              <tr>
                
                <th scope="col">Key</th>
                <th scope="col">Quote</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($data as $values)
                
              <tr>
                
                <td >{{$values->key}}</td>
                <td >{{$values->content}}</td>
                <td><a href="{{route ('edit.quote',$values)}}"><button type="button" class="btn btn-success">Edit</button></a></td>
                <td><a href="{{route ('delete.quote',$values->id)}}"><button type="button" class="btn btn-danger">Delete</button><a></td>
                
              </tr>
              @endforeach 
            </tbody>
          </table>
    </div>

@endsection
@section('extrascript')
<script type="text/javascript">
       
 
</script>

@endsection