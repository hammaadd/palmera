@extends('admin.layout.adminlayout')
@section('title','News later')
    
@section('body')
<div class="my-5 mx-5"> 
    <table class="table table-sm">
        <thead>
          <tr>
            
            <th scope="col">News Later Email</th>
            
          </tr>
        </thead>
        <tbody>
          @foreach ($data as $values)
            
          <tr>
            
            <td >{{$values->mail}}</td>
         
            
          </tr>
          @endforeach 
        </tbody>
      </table>
</div>
@endsection