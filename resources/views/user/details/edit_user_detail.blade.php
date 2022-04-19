@extends('inc.user.usersidenav')

@section('content')
<div class="container-fluid">
    <link rel="stylesheet" href="{{asset('form/form.css')}}">
	<script src="{{asset('form/jquery.js')}}"></script>

   <div class="container-fluid">
        <div class="row"><br>
            <div class="col-md-12">
                <a href="{{route('userHome')}}">Home </a> / <a href="{{route('userDetails')}}"> Profile</a>
                <hr>
                {{-- <h3 class="offset-4">Update Your Details</h3><br> --}}
                <div class="link-1 mb-3" style="border: 1px solid gray; padding-left:7px">
                    <br>
                        {{-- <img src="{{asset('image/sangay.jpg')}}" style="border: 3px solid gray;" class="rounded-circle mx-auto mb-2" alt="" width="90px" height="100px"> --}}
                        @if( !empty($data->profile_image))
                                {{-- <img src="{{ asset('storage/profile_images/' . $data->profile_image)}}" style="border: 3px solid gray;" class="rounded-circle mx-auto mb-2" alt="" width="110px" height="130px" alt="cover image"> --}}
                                <img src="{{ asset('storage/profile_images/' . $data->profile_image)}}" style="border: 3px solid gray;" class="rounded-circle mx-auto mb-2 d-block" alt="" width="110px" height="130px" alt="cover image">
                                @else
                                <img src="{{ asset('image/defaultprofile.png')}}" style="border: 3px solid gray;" class="rounded-circle mx-auto mb-2 d-block" alt="" width="110px" height="130px" alt="cover image">
                        @endif
                        <h5 class="ml-auto text-center" style="text-transform: uppercase;padding-le">{{$data->name}}</h5>
                    <br>
                </div>
            </div>
        </div>
       <div class="row">
           <div class="col-md-12 mt-2">
                <form data-parsley-validate="" id="validate_form" style="font-size: 15px;padding-left:15px; padding-right:15px; border: 1px solid rgb(132, 136, 138)" action="{{route('updateUser',$data->id)}}" method="POST" enctype="multipart/form-data">
                    <br>
                    <b style="text-transform: uppercase">{{$data->name}}</b>
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="name">Name: </label>
                        <input type="text" class="form-control" id="name" value="{{$data->name}}" name="name"  required data-parsley-pattern="[a-zA-Z ]+$" minlength="3">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" value="{{$data->email}}" name="email" required data-parsley-pattern="[a-zA-Z0-9@.]+$" minlength="3">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <hr>
                        <label class="form-label" for="profile_image">Profile Image</label>
                        @if( !empty($data->profile_image))
                        <img src="{{ asset('storage/profile_images/' . $data->profile_image)}}" style="border: 3px solid gray;" class="rounded-circle mx-auto mb-2" alt="" width="50px" height="60px" alt="cover image">
                                @else
                                <img src="{{ asset('image/defaultprofile.png')}}" style="border: 3px solid gray;" class="rounded-circle mx-auto mb-2" alt="" width="50px" height="60px" alt="cover image">
                        @endif
                        
                        <input type="file" class="form-control" id="profile_image" value="{{$data->cover_image}}" name="profile_image"/>
                   </div>
                    
                    <button type="submit" class="btn btn-primary form-control text-center">Submit</button><br><br>
                </form>
           </div>
       </div>
   </div>
</div>
@endsection