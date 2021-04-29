@extends('admin.layout.adminlayout')
@section('title','ShortQuotes')
    
@section('body')


    <form action="{{ route('update.code') }}" method="POST">
        @csrf

            <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0 ml-5">
                    <input type="text" name='id' id="id" value="{{$shortQ->id}}" hidden>
                    <input type="text" class="form-control form-control-user" id="keys" placeholder="Key" name="keys" value="{{$shortQ->key}}" >
                </div><br>
            <span class="ml-5 text-danger">@error('key'){{ $message }}@enderror</span>
            </div>

            <div class="md-form px-5">
                <i class="fas fa-pencil-alt prefix"></i>
                <textarea id="quote" class="md-textarea form-control" rows="5" name="quote" id="quote">{{$shortQ->content}}</textarea>

            </div>
            <span class="ml-5 text-danger">@error('quote'){{ $message }}@enderror</span>

            <div class="my-5 text-center">
                <a href="#" class="btn btn-info btn-icon-split mx-10">

                    <button type="submit" class="btn btn-success">Update</button>
                </a>

            </div>

        </form>


@endsection
