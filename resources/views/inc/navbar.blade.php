<!--Logo-->
<div class="header1">
    <img src="{{asset('image/logo3.jpg')}}" width="100%" height="100px">
</div> 
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow p-3 mb-4">
    <div class="navbar-brand"></div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{url('/')}}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('viewbook')}}">View </span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('contact')}}">Contact Us</a>
              </li>

              <li class="nav-item active">
                <a class="nav-link" href="{{route('about')}}">About Us</a>
              </li>
          </ul>
          
           <!-- Right Side Of Navbar -->
           <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
    
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}" target="">{{ __('Login') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}" target="">{{ __('Register') }}</a>
                </li>
        </ul>
    </div>
  </nav>