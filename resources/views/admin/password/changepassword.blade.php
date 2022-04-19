@extends('admin.dashboard')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12"> 
            <a href="{{url('adminDashboard')}}">Home </a> / <a href="{{route('adminDetails')}}"> Profile</a>
            <hr style="height:10px">
        </div>
    </div>
    <div class="row"><br>
        <div class="col-md-12  mb-3" style="border: 1px solid gray; padding-left:7px">
            <div class="link-1 mb-3">
                 <br>
                 @foreach($data as $data)
                    {{-- <img src="{{asset('image/sangay.jpg')}}" style="border: 3px solid gray;" class="rounded-circle mx-auto mb-2" alt="" width="90px" height="100px"> --}}
                    <img src="{{ asset('storage/profile_images/' . $data->profile_image)}}" style="border: 3px solid gray;" class="rounded-circle mx-auto mb-2 d-block" alt="" width="110px" height="130px" alt="cover image">
                    <h5 class="ml-auto text-center" style="text-transform: uppercase;padding-le">{{$data->name}}</h5> 
                 @endforeach
                 <br>
            </div>
        </div>
    </div>
    <div class="row"><br>
        <div class="col-md-12 mb-3" style="border: 1px solid gray; padding-left:7px">
            <div class="link-1">
                 @if(session('succ'))
                    <div class="alert alert-success mt-2">
                        {{session('succ')}}
                    </div>
                @endif
                <form action="{{route('updatepassword')}}" method="POST">
                    <br>
                     <h4>Change password</h4><br>
                     <p style="text-transform: uppercase">Username: {{ Auth::user()->name }}</p>
                     @if(session('success'))
                         <div class="alert alert-success mt-2">
                             {{session('success')}}
                         </div>
                     @endif
                      @csrf 
                      <br>
                      <div class="form-group">
                          <label for="old_password">Old Password: </label>
                          <input style="font-size: 12px" type="password" class="form-control" id="old_password" placeholder="Old Password" name="old_password" required>
                          @if($errors->any('old_password'))
                              <span class="text-danger">{{$errors->first('old_password')}}</span>
                          @endif
         
                          @if(session('error'))
                                 <span class="text-danger">{{session('error')}}</span>
                         @endif
                          {{-- <i class="fa fa-check-circle"></i>
                          <i class="fa fa-exclamation-triangle"></i>
                          <small><p id="user_name">This field is required</p></small> --}}
         
                      </div>
         
                      <div class="form-group">
                          <label for="new_password">New Password</label>
                          <input style="font-size: 12px" type="password" class="form-control" id="new_password" placeholder="New Password" name="new_password" required>
                          @if($errors->any('new_password'))
                             <span class="text-danger">{{$errors->first('new_password')}} Your password should contain a-z, 0-9 and @,#,!,%</span>
                          @endif
                          {{-- <i class="fa fa-check-circle"></i>
                          <i class="fa fa-exclamation-triangle"></i>
                          <small><p id="author_name">This field is required</p></small> --}}
                      </div>
         
                      <div class="form-group">
                          <label for="confirm_password">Confirm Password:</label>
                          <input style="font-size: 12px" type="password" class="form-control" id="confirm_password" placeholder="Confirm Password" name="confirm_password" required>
                          @if($errors->any('confirm_password'))
                               <span class="text-danger">{{$errors->first('confirm_password')}}</span>
                          @endif
                          {{-- <i class="fa fa-check-circle"></i>
                          <i class="fa fa-exclamation-triangle"></i>
                          <small>
                              <p id="isbn">This field is required</p>
                          </small> --}}
                      </div>
         
                      <button type="submit" class="btn btn-primary form-control text-center">Change Password</button><br><br>
                  </form>
                 <br>
            </div>
        </div>
    </div>
</div>
@endsection