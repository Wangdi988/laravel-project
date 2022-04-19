@extends('public-layout.navbar')
@section('content')
    <div class="container bg-white">
        <div id="contactpage" class="justify-content-center">
            <div class="contact-service">
                <h1 class="text-center">Contact Us for Our Service</h1>
            </div>
        </div>
        <br>
        <img src="{{asset('image/lib.jpg')}}" alt="" width="100%" height="350px" class="mb-4">
        <div class="row">
            <div class="col-md-7">

                <div class="row justify-content-center">
                    <div id="contactUs" class="col-lg-8">
                        <p class="shadow-lg p-3 bg-dark" style="color: white">
                            <b id="contact">Contact Us</b>
                           <br> <br>
                           <i class="fa fa-map-marker" aria-hidden="true"> </i>
                            Mongar, Gyalpozhing <br><br>

                            <i class="fa fa-map-marker" aria-hidden="true"> </i>
                            Mongar, Bhutan <br> <br>

                            <i class="fa fa-envelope-o" aria-hidden="true"> </i>
                             bookreview123@gmail.com <br> <br>

                            <i class="fa fa-phone" aria-hidden="true"> </i>
                            77543909
                        </p>
                    </div>
                </div>
                <br>
            </div>
            <div class="col-md-5 bg-white" style="padding-left:4px;">
                <div class="row justify-content-center">
                    <div class="col-lg-10 shadow-lg p-3">
                        <img id="" class="d-block w-100" src="{{asset('image/istockphoto.jpg')}}" alt="First slide">
                        {{-- @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif --}}

                        {{-- <form action="{{route('message')}}" method="POST" onsubmit="return confirm('Are you sure that you want to submit message')"> --}}
                        {{-- <form action="{{route('message')}}" method="POST">
                            @csrf
                            <div class="form-group mb-4">
                              <input id="input" type="text" name="name" class="" placeholder="Name" id="name">
                            </div>
                            <div class="form-group mb-4">
                                <input id="input" type="email" name="email" class="" placeholder="Enter email" id="email">
                              </div>
                            <div class="form-group">
                              <textarea class="form-control" name="message" placeholder="Message" id="message" rows="6"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary form-control">
                               Submit
                            </button>
                          </form> --}}
                    </div>
                </div>
                {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14189.476762857566!2d91.1931498!3d27.2389482!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x281e6e8f6a9cf6ea!2sGyalpozhing%20College%20of%20Information%20Technology!5e0!3m2!1sen!2sbt!4v1613153170039!5m2!1sen!2sbt" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> --}}
            </div>
        </div>
        <br>
    </div>
@endsection