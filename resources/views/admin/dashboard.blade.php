@extends('inc.admin.sidebar')

@section('content')

    {{-- <div class="container"> --}}
           
            {{-- <div class="row">
                <div class="col-md-12">
                    
                </div> --}}
                {{-- <div class="col-md-4" style="background-color: gray"><br>
                    <h4 class="mb-3" style="color: white">Comment from user</h4>
                    <div class="container">
                        <div class="row">
                            @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                         @endif
                                {{-- @foreach($dashs as $dash)
                                <div class="col-md-12 mb-4 bg-white">
                                   <p>{{$dash->message}}</p>
                                   <small><a href="{{url('show_comment',$dash->id)}}" style="font-size: 10px" class="btn btn-info">view</a><br><br></small> 
                                </div>                                 
                                @endforeach --}}
                        {{-- </div>
                    </div>
                </div> --}} 
            {{-- </div>     
           
    </div> --}}
   <div class="container-fluid">
       <div class="row">
           <div class="col-md-12" id="containers">
            <img id="user_img" width="100%" height="400px" src="{{asset('image/person-at-laptop.jpg')}}" alt="First slide">
            <div id="centered"> <h1 style="font-size: 30px">Welcome To E-Review</h1></div>
           </div>
       </div>
       <div class="row"><br>
           <div class="col-md-12"><br>
               <div class="link-1 mb-3" style="border: 1px solid gray; padding-left:7px">
                    <br>
                    <a href="{{route('userdetails')}}" class="non_active">
                        
                        <h5>Click Here To View Registered User</h5></a>
                    <br>
               </div>
               <div class="link-1 mb-3" style="border: 1px solid gray; padding-left:7px">
                    <br>
                    <a href="{{route('postbook.index')}}" class="non_active">
						<h5>Click Here To Show all The Available</h5>
					</a>
                    <br>
               </div>
               <div class="link-1 mb-3" style="border: 1px solid gray; padding-left:7px">
                    <br>
                    <a href="{{route('postbook.create')}}" class="non_active">
                        <h5>Click Here To Post Books</h5>
                    </a>
                    <br>
               </div>
               <div class="link-1 mb-3" style="border: 1px solid gray; padding-left:7px">
                <br>
                   <a href="{{route('approve')}}" class="non_active">
                    <h5>Click Here To Approve Review</h5>
                    </a>
                </a>
                <br>
           </div>
           <div class="link-1 mb-3" style="border: 1px solid gray; padding-left:7px">
                <br>
                <a href="{{route('returnBook')}}" class="non_active">
                    <h5>Click Here To Remark</h5>
                </a>
                <br>
         </div>
           </div>
           <div class="col-md-4"><br>
            
        </div>
       </div>
   </div>
@endsection