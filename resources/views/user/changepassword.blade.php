@extends('inc.user.usersidenav')

@section('content')
<div class="row">
    <div class="col-md-12"> 
        <a href="{{route('userHome')}}">Home </a> / <a href="{{route('userDetails')}}"> Profile</a>
        <hr style="height:10px">
    </div>
</div>

<div class="row">
    <div class="col-md-12 mb-4">
        <div style="border: 1px solid gray; padding-left:7px"> 
            @foreach($data as $data)
            {{-- <img id="reading_img" class="d-block rounded-circle mx-auto mb-4 mt-4 d-block" src="{{asset('image/woman-typing.jpg')}}" style="border: 3px solid gray;" width="150px" height="160px" alt="First slide"> --}}
             @if( !empty($data->profile_image))
                    <img id="reading_img" class="d-block rounded-circle mx-auto mb-4 mt-4 d-block" src="{{ asset('storage/profile_images/' . $data->profile_image)}}" style="border: 3px solid gray;" width="150px" height="160px" alt="First slide">
                    @else
                    <img id="reading_img" class="d-block rounded-circle mx-auto mb-4 mt-4 d-block" src="{{ asset('image/defaultprofile.png')}}" style="border: 3px solid gray;" width="150px" height="160px" alt="First slide">
            @endif
            @endforeach
            <div>
                <h4 class="mb-4 text-center" style="text-transform: uppercase">{{ Auth::user()->name }}</h4>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        {{-- @include('inc.message') --}}
         {{-- <form data-parsley-validate="" id="validate_form" style="font-size: 15px;padding-left:15px; padding-right:15px; border: 15px solid rgb(132, 136, 138)" action="{{route('postReviews.store')}}" method="POST" enctype="multipart/form-data"> --}}
        <form style="font-size: 15px;padding-left:15px; padding-right:15px; border: 1px solid rgb(132, 136, 138)" action="{{route('update_password')}}" method="POST">
           <br>
            <h2>Change password</h2><br>
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
    </div>
    {{-- <div class="col-md-4">
        <img id="reading_img" class="d-block w-100" src="{{asset('image/woman-typing.jpg')}}" alt="First slide">
    </div> --}}
</div>
@endsection