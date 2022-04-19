<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<meta http-equiv="refresh" content="1">-->
    <title>E-Review</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

	{{-- for parsley.js --}}
	<link rel="stylesheet" href="{{asset('form/form.css')}}">
	<script src="{{asset('form/jquery.js')}}"></script>

   <script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
    <script src="{{asset('css/script.js')}}"></script> 
    <!--<script
		  src="https://code.jquery.com/jquery-3.4.1.js">
		  	
	</script> -->
    <script>
		$(document).ready(function(){
			$(".menu_bar").click(function(){
				$("#container1").toggleClass("active");
			});
		});
	</script>
	<style>
		 #containers {
            position: relative;
            text-align: center;
            color: rgb(190, 13, 66);
          }

		#centered {
					position: absolute;
					top: 70%;
					left: 50%;
					transform: translate(-50%, -50%);
				}
		#user_img{
					opacity: 0.5;
					border: 3px solid black;
					box-shadow: 5px 10px gray;
				}
		#user_img:hover{
					opacity: 1.0;
				}
	.navbar {
			background-color: #12668A !important;
		}
	.navbar ul li .nav-link{
		color: aliceblue !important;
	}
	/* style of create page */
	.bg-howitworks{
		background-image: url('../image/postbook.jpg');
		background-size: cover;
		background-position: center center;
		background-repeat: no-repeat;
		position: relative;
		background-attachment: fixed;
	}
	.bg-color{
		opacity: 0.9;
	}
	</style>
</head>

<body>
<div id="container1"> 

	   <div class="menu1">
	   	<a href="#"><span><i class="fa fa-bars"></span></i></a>
	   </div>
	   <div class="sidebar1" style="padding-top:">
		   	<nav>
				
		   		<ul>
					<li>
						<a href="#" class="nonactive">
						{{-- <span><i class="fa fa-user"></i></span>
						<span class="lists"> Admin</span> --}}
						<img class="logo_img" src="{{asset('image/logo11.jpg')}}" width="65px" height="55px" alt="">
					</a>
					</li>
		   			<li>
		   				<a href="#" class="active">
		   				<span><i class="fa fa-user"></i></span>
		   				<span class="lists"> Admin</span>
		   			</a>
		   			</li>
		   			<li>
		   				<a href="{{url('adminDashboard')}}" class="non_active">
		   				<span><i class="fa fa-home"></i></span>
		   				<span class="lists"> Home</span>
		   			</a>
		   			</li>
		   			<li>
		   				<a href="{{route('userdetails')}}" class="non_active">
		   				<span><i class="fa fa-users"></i></span>
		   				<span class="lists"> User</span>
		   			</a>
		   			</li>
					{{-- <li>
						<a href="{{url('comment')}}" class="non_active">
						<span><i class="fa fa-users"></i></span>
						<span class="lists">Comment list</span>
					    </a>
					</li> --}}
				    <li>
						<a href="{{route('postbook.index')}}" class="non_active">
						<span><i class="fa fa-list"></i></span>
						<span class="lists">Book Lists</span>
					</a>
					</li>
		   			<li>
		   				<a href="{{route('postbook.create')}}" class="non_active">
		   				<span><i class="fa fa-book"></i></span>
		   				<span class="lists">Post Books</span>
		   			</a>
				    </li>
					<li>
						<a href="{{route('approve')}}" class="non_active">
						<span><i class="fa fa-check-square"></i></span>
						<span class="lists">Approve</span>
					    </a>
					</li>
					<li>
						<a href="{{route('returnBook')}}" class="non_active">
						<span><i class="fa fa-check"></i></i></span>
						<span class="lists">Remark</span>
					    </a>
					</li>
		   			<li>
		   				<!--<a href="#" class="non_active">
		   				<span><i class="fa fa-sign-out"></i></span>
		   				<span class="lists">Log-out</span>-->
						   <a class="non_active" href="{{ route('logout') }}"
						   onclick="event.preventDefault();
										 document.getElementById('logout-form').submit();">
										<span><i class="fa fa-sign-out"></i></span>
										<span class="lists">{{ __('Logout') }}</span>
						</a>

						<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
							@csrf
						</form>
		   			</a>
		   			</li>
		   		</ul>
		   	</nav>
	   </div> 

	   <div class="main_content">
		<nav class="navbar navbar-expand-lg navbar-light">
			<div class="">
				<div class="menu_bar inner_menu" style="margin-left:0px;height: 56Px;width: auto;">
					<a href="#">
						<span class="bars">
							<i class="fa fa-bars"></i>
						</span>
					</a>
						{{-- <img  class="center" style="height: 30px;" src="{{asset('image/logo11.jpg')}}" alt="First slide"> --}}
				</div>
		   </div>
			{{-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			  <span class="navbar-toggler-icon"></span>
			</button> --}}
		  
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
			  <ul class="navbar-nav ml-auto" style="padding-right: 40px">
				{{-- <li class="nav-item active">
				  <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
				  <a class="nav-link" href="#">Link</a>
				</li> --}}
				<li class="nav-item dropdown">
				  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					{{ Auth::user()->name }}
						@if( !empty($str->a))
							<img src="{{ asset('image/defaultprofile.png')}}" style="border: 3px solid gray;" class="rounded-circle mx-auto mb-2" alt="" width="30px" height="40px" alt="cover image">
									@else
									<img src="{{ asset('storage/profile_images/' . Auth::user()->profile_image)}}" style="border: 3px solid gray;" class="rounded-circle mx-auto mb-2" alt="" width="30px" height="40px" alt="cover image"> 
                        @endif
				  </a>
				  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
					<a class="dropdown-item" href="{{route('adminDetails')}}">User Profile</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="{{route('changepassword')}}">Change Password</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="{{ route('logout') }}"
					onclick="event.preventDefault();
								  document.getElementById('logout-form').submit();">
								 <span><i class="fa fa-sign-out"></i></span>
								 <span class="lists">{{ __('Logout') }}</span>
				 </a>

				 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
					 @csrf
				 </form>
				</a>
				  </div>
				</li>
			  </ul>
			</div>
		  </nav>
		   <div class="content1">
		   	  @yield('content')
		   </div>
	  </div>
</div>

{{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

