@extends('admin.layout.adminlayout')
@section('title','Profile Setting')
    
@section('body')
      <div class="col">
        <div class="row">
          <div class="col mb-3">
            <div class="card">
              <div class="card-body">
                <div class="e-profile">
                  <div class="row">
                    <div class="col-12 col-sm-auto mb-3">
                      <div class="mx-auto" style="width: 140px;">
                        <div class="d-flex justify-content-center align-items-center rounded" style="height: 140px; background-color: rgb(233, 236, 239);">
                          <form class="form" novalidate="" method="POST" action="{{route('update.profile')}}" enctype="multipart/form-data">
                            @csrf   
                          <img style="color: rgb(166, 168, 170); font: bold 8pt Arial;" class="img-profile rounded-circle" height="150px" width="150px" id="img" name="img" src="{{ asset('admin/adminprofile/'.Auth::user()->image.'') }}" alt="user profile">
                        <input type="text" id="path" name="path" value="{{Auth::user()->image}}" hidden>
                        </div>
                      </div>
                    </div>
                    <div class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
                      <div class="text-center text-sm-left mb-2 mb-sm-0">
                        <h4 class="pt-sm-2 pb-1 mb-0 text-nowrap">{{Auth::user()->name}}</h4>
                       
                            <input type="file" class="btn btn-primary" id="img" name="img">
                            
                      </div>
                      <div class="text-center text-sm-right">
                        <span class="badge badge-secondary">administrator</span>
                       
                      </div>
                    </div>
                  </div>
                  <ul class="nav nav-tabs">
                    <li class="nav-item"><a href="" class="active nav-link">Settings</a></li>
                  </ul>
                  <div class="tab-content pt-3">
                    <div class="tab-pane active">
                      
                        <div class="row">
                          <div class="col">
                            <div class="row">
                              <div class="col">
                                <div class="form-group">
                                  <label>Name</label>
                                  <input class="form-control" type="text" name="uname"  id="uname" placeholder="{{Auth::user()->name}}" value="{{ Auth::user()->name }}">
                                  <span class="text-danger">@error('name'){{$message}}@enderror</span>
                                </div>
                              </div>
                              {{-- <div class="col">
                                <div class="form-group">
                                  <label>Last Name</label>
                                  <input class="form-control" type="text" name="username" id="username" placeholder="Last Name" value="">
                                  <span class="text-danger">@error('username'){{$message}}@enderror</span>
                                </div>
                              </div> --}}
                            </div>
                            <div class="row">
                              <div class="col">
                                <div class="form-group">
                                  <label>Email</label>
                                  <input class="form-control" type="text" name="mail" id="mail" value="{{Auth::user()->email}}">
                                  <span class="text-danger">@error('mail'){{$message}}@enderror</span>
                                </div>
                              </div>
                            </div>
                           
                          </div>
                        </div>
                        <div class="row">
                          <div class="col d-flex justify-content-end">
                            <button class="btn btn-primary" type="submit">Save Changes</button>
                          </div>
                        </div>
                      </form>
                      <form method="POST" action="{{route('update.password')}}">
                        @csrf
                        <div class="row">
                          <div class="col-12 col-sm-6 mb-3">
                            <div class="mb-2"><b>Change Password</b></div>
                            <div class="row">
                              <div class="col">
                                <div class="form-group">
                                  <label>Current Password</label>
                                  <input class="form-control" type="password" name="currentpassword" id="currentpassword" placeholder="••••••">
                                  <span class="text-danger">@error('currentpassword'){{$message}}@enderror</span>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col">
                                <div class="form-group">
                                  <label>New Password</label>
                                  <input class="form-control" type="password" name="newpassword" id="newpassword" placeholder="••••••">
                                  <span class="text-danger">@error('newpassword'){{$message}}@enderror</span>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col">
                                <div class="form-group">
                                  <label>Confirm <span class="d-none d-xl-inline">Password</span></label>
                                  <input class="form-control" type="password" name="confirmpassword" id="confirmpassword" placeholder="••••••"></div>
                                  <span class="text-danger">@error('confirmpassword'){{$message}}@enderror{{$messages}}</span>
                                </div>
                            </div>
                          </div>
                          
                        </div>
                        <div class="row">
                          <div class="col d-flex justify-content-end">
                            <button class="btn btn-primary" type="submit">Change Password</button>
                          </div>
                        </div>
                      </form>
    
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
        </div>
    
      </div>
    </div>
    </div>
 @endsection   