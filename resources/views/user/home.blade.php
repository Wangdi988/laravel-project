@extends('inc.user.usersidenav')

@section('content')
<div class="container-fluid bg-white">
    {{-- <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                        <div class="post_list" style="padding-left: 10px">
                            <a href="#" class="logo"><span class="lite"><img style="width: 100%" src="{{asset('image/logo11.jpg')}}" alt="First slide"></span></a>
                            <div id="centered"> <h1 style="font-size: 30px">Welcome To E-Review</h1></div>
                        </div>
                </div>
            </div>
        </div>
    </div><br> --}}
    <div class="row">
        <div class="col-md-12" id="containers">
            <img id="user_img" class="d-block w-100" style="height: 90%" src="{{asset('image/keyboard-typing.jpg')}}" alt="First slide">
            <div id="centered"> <h1 style="font-size: 30px">Welcome To E-Review</h1></div>
        </div>
    </div>

<div class="row">
     <div class="col-md-8 mt-5">
        <div class="card">
            <div class="card-body">
                    <div class="post_list" style="padding-left: 10px">
                        <a href="{{route('postReviews.create')}}" class="">
                            {{-- <span>Post Review</span> --}}
                            <h3>Click Here To Post Reviews</h3><br>
                        </a>
                    </div>
            </div>
        </div>

    <div class="mt-3">
        <div class="card">
            <div class="card-body">
                    <div class="post_list" style="padding-left: 10px">
                        <a class="" href="{{route('postReviews.index')}}">
                            {{-- <span>Post Review</span> --}}
                            <h3>Click Here To View Review</h3><br>
                        </a>
                    </div>
            </div>
        </div>
    </div>


        <div class="mt-3">
            <div class="card">
                <div class="card-body">
                        <div class="post_list" style="padding-left: 10px">
                            <a class="" href="{{route('post_own_review')}}">
                            <h3>Edit Your Post Form Here</h3>
                            </a>
                        </div><br>
                </div>
            </div>
        </div>

    
        <div class="mt-3">
            <div class="card">
                <div class="card-body">
                        <div class="post_list" style="padding-left: 10px">
                            <a class="" href="{{route('submit_status')}}">
                                <h3>Click Here To View Submission Date</h3>
                            </a>
                        </div><br>
                </div>
            </div>
        </div>
    
    </div>

    <div class="col-md-4 mt-5">
        <p style="text-align: justify;">Book review give books greater visibility and a greater chance of getting found by more readers. On some websites, books that have more book reviews are more likey to be shown to prospectiv readers are and buyers as compared to books with few or no book reviews.</p>
    </div>

  </div>
</div>
@endsection