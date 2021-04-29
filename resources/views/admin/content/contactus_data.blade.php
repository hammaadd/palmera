@extends('admin.layout.adminlayout')
@section('title','Profile Setting')
    
@section('body')
<div class="my-5 mx-5"> 
    <table class="table table-sm">
        <thead>
          <tr>
            
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Message</th>
            
          </tr>
        </thead>
        <tbody>
          @foreach ($data as $values)
            
          <tr>
            
            <td >{{$values->name}}</td>
            <td >{{$values->email}}</td>
            <td>{{$values->message}}</td>
            
          </tr>
          @endforeach 
        </tbody>
      </table>
</div>
@endsection