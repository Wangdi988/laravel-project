@extends('admin.dashboard')

@section('content')
<div class="container-fluid">
    <div class="row"><br>
        <div class="col-md-12">
            <div class="link-1 mb-3" style="border: 1px solid gray; padding-left:7px">
                 <br>
                 
                 @foreach($data as $data)
                    {{-- <img src="{{asset('image/sangay.jpg')}}" style="border: 3px solid gray;" class="rounded-circle mx-auto mb-2" alt="" width="90px" height="100px"> --}}
                    @if( !empty($data->profile_image))
                         <img src="{{ asset('storage/profile_images/' . $data->profile_image)}}" style="border: 3px solid gray;" class="rounded-circle mx-auto mb-2" alt="" width="110px" height="130px" alt="cover image">
                            @else
                            <img src="{{ asset('image/defaultprofile.png')}}" style="border: 3px solid gray;" class="rounded-circle mx-auto mb-2" alt="" width="110px" height="130px" alt="cover image">
                    @endif

                    <h5 class="ml-auto" style="text-transform: uppercase;padding-le">{{$data->name}}</h5>
                    <a href="{{url('adminDashboard')}}">Home </a> / <a href="{{route('adminDetails')}}"> Profile</a>
                    
                 @endforeach
                 <br>
            </div>
        </div>
    </div>
    <div class="row"><br>
        <div class="col-md-8">
            <div class="link-1 mb-3" style="border: 1px solid gray; padding-left:7px">
                 <br>
                 <h4>User Details</h4><br>
                 @if(session('succ'))
                    <div class="alert alert-success mt-2">
                        <button type="button" class="close" data-dismiss="alert">x</button>
                        {{session('succ')}}
                    </div>
                @endif
                 @foreach($datas as $data)
                     <b>Name:</b><br>
                    <p>{{$data->name}}</p>
                    <b>Email:</b><br>
                    <a href="#">{{$data->email}}</a> <br><br>
                    <b>Create Account At:</b>
                    <p>{{$data->created_at}}</p>
                    <div class="profile_edit">
                        <a href="{{route('adminEdits',$data->id)}}">Edit profile</a><br>
                    </div>
                 @endforeach
                 <br>
            </div>
        </div>
        <div class="col-md-4">
                 <div class="link-1 mb-3" style="border: 1px solid gray; padding-left:7px">
                    <iframe src="https://calendar.google.com/calendar/embed?src=en.bt%23holiday%40group.v.calendar.google.com&ctz=Asia%2FDhaka" style="border: 0" width="300" height="250" frameborder="0" scrolling="no"></iframe>
                </div>
        </div>
    </div>
</div>
@endsection