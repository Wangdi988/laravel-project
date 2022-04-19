<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link rel="shortcut icon" href="img/favicon.png">

  <title>E-Review</title>
  <!-- Bootstrap CSS -->
  <link href="{{asset('user/css/bootstrap.min.css')}}" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="{{asset('user/css/bootstrap-theme.css')}}" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="{{asset('user/css/elegant-icons-style.css')}}" rel="stylesheet" />
  <link href="{{asset('user/css/font-awesome.min.css')}}" rel="stylesheet" />
  <!-- full calendar css-->
  <link href="{{asset('user/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css')}}" rel="stylesheet" />
  <link href="{{asset('user/assets/fullcalendar/fullcalendar/fullcalendar.css')}}" rel="stylesheet" />
  <!-- easy pie chart-->
  <link href="{{asset('user/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css')}}" rel="stylesheet" type="text/css" media="screen" />
  <!-- owl carousel -->
  <link rel="stylesheet" href="{{asset('user/css/owl.carousel.css')}}" type="text/css">
  <link href="{{asset('user/css/jquery-jvectormap-1.2.2.css')}}" rel="stylesheet">
  <!-- Custom styles -->
  <link rel="stylesheet" href="{{asset('user/css/fullcalendar.css')}}">
  <link href="{{asset('user/css/widgets.css')}}" rel="stylesheet">
  <link href="{{asset('user/css/style.css')}}" rel="stylesheet">
  <link href="{{asset('user/css/style-responsive.css')}}" rel="stylesheet" />
  <link href="{{asset('user/css/xcharts.min.css')}}" rel=" stylesheet">
  <link href="{{asset('user/css/jquery-ui-1.10.4.min.css')}}" rel="stylesheet">

  <!-- Styles -->
  <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
  {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
   --}}
  {{-- fontawesome.css --}}
  {{-- <link href="{{ asset('css/fontawesome.css') }}" rel="stylesheet"> --}}
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  {{-- form validation link --}}
  <link rel="stylesheet" href="{{asset('form/form.css')}}">
   {{-- <!-- Compiled and minified CSS -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

   <!-- Compiled and minified JavaScript -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
            --}}
  <style>
    /* *, *::after, *::before {
      box-sizing: border-box;
    } */
    .modal{
      top: 30%;
      right: 20%;
    }
    .modal .modal-dialog{
      width: 100%;
      max-width: 100%;
    }

    #containers {
            position: relative;
            text-align: center;
            color: rgb(190, 13, 66);
          }

  #centered {
            position: absolute;
            top: 40%;
            left: 50%;
            transform: translate(-50%, -50%);
          }
  #user_img{
            opacity: 0.5;
           }
  #user_img:hover{
            opacity: 1.0;
           }
  body {
    background-color: white !important;
  }

  #user_img{
    border: 1px solid black;
    padding: 10px;
    box-shadow: 5px 10px #888888;
  }

  #reading_img {
    top:70px;
    position: sticky;
    border: 15px solid rgb(34, 32, 32);
  }
  .header{
    background-color: #11498B;
  }
.lite{
  color: white !important;
}
.icon_menu {
  color: white !important;
}
#sidebar {
  background-color: #11498B;
}

.center {
  float: left;
}

  </style>
  {{-- <style>
    *, *::after, *::before {
      box-sizing: border-box;
    }
    .modal{
      position: fixed;
      top: 50%;
      left:50%;
      transform: translate(-50%, -50%) scale(0);
      /* transition: 200ms ease-in-out; */
      border: 1px solid black;
      border-radius: 10px;
      z-index: 10;
      background-color: white;
      width: 700px;
      max-width: 80%;
    }

    .modal.active{
      transform: translate(-50%, -50%) scale(1);
    }

    .modal-header {
      padding: 10px 15px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      border-bottom: 1px solid black;
    }
    .modal-header .title {
      font-size: 1.25rem;
      font-weight: bold;
    }

    .modal-header .close-button {
      cursor: pointer;
      border:none;
      outline:none;
      background:none;
      font-size: 1.25rem;
      font-weight: bold;
    }
    .modal-body{
      padding: 10px 15px;
    }
    #overlay {
      position: fixed;
      opacity: 0;
      /* transition: 200ms ease-in-out; */
      top:0;
      left: 0;
      right: 0;
      bottom: 0;
      background-color: rgba(0, 0, 0, .5);
      pointer-events: none;
    }

    #overlay.active {
      opacity: 1;
      pointer-events: all;
    }
  </style>
   <script>
    const openModalButtons = document.querySelectorAll('[data-modal-target]');
    const closeModalButtons = document.querySelectorAll('[data-close-button]');
    const overlay = document.getElementById('overlay');

    openModalButtons.forEach(button => {
      button.addEventListener('click', ()=> {
        const modal = document.querySelector(button.dataset.modalTarget);
        openModal(modal);
      });
    });

    closeModalButtons.forEach(button => {
      button.addEventListener('click', ()=> {
        const modal = button.closest('.modal')
        closeModal(modal)
      });
    });
    function openModal(modal) {
      if(modal == null) return
      modal.classList.add('active');
      overlay.classList.add('active');
    }

    function closeModal(modal) {
      if(modal == null) return
      modal.classList.remove('active');
      overlay.classList.remove('active');
    }
  </script> --}}

  

</head>

<body>
  <!-- container section start -->
  <section id="container" class="">


    <header class="header">
      <!--logo start-->
      {{-- <a href="#" class="logo"><span class="lite">E-Review</span></a> --}}
      <img  class="center" style="height: 70px;" src="{{asset('image/logo11.jpg')}}" alt="First slide">
      <!--logo end-->

      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>

      {{-- <img  class="center" style="height: 70px;" src="{{asset('image/logo11.jpg')}}" alt="First slide"> --}}

      <div class="nav search-row" id="top_menu">
        <!--  search form start -->
        {{-- <ul class="nav top-menu">
          <li>
            <form class="navbar-form">
              <input class="form-control" placeholder="Search" type="text">
            </form>
          </li>
        </ul> --}}
        <!--  search form end -->
      </div>

      <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
        <ul class="nav pull-right top-menu">

          <!-- user login dropdown start-->
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="username" style="color: white">{{ Auth::user()->name }}</span>
                            <span class="profile-ava">
                              @if( !empty(Auth::user()->profile_image))
                                 <img src="{{ asset('storage/profile_images/' . Auth::user()->profile_image)}}" style="border: 3px solid gray;" class="rounded-circle mx-auto mb-2" alt="" width="27px" height="30px" alt="cover image"> 
                                    @else
                                    <img src="{{ asset('image/defaultprofile.png')}}" style="border: 3px solid gray;" class="rounded-circle mx-auto mb-2" alt="" width="30px" height="40px" alt="cover image">
                              @endif
                            </span>
                        </a>
                        <ul class="dropdown-menu extended logout">
                          <div class="log-arrow-up"></div>
                          {{-- <li class="eborder-top">
                            <a href="#"><i class="icon_profile"></i> My Profile</a>
                          </li>
                          <li>
                            <a href="#"><i class="icon_mail_alt"></i> My Inbox</a>
                          </li>
                          <li>
                            <a href="#"><i class="icon_clock_alt"></i> Timeline</a>
                          </li>
                          <li>
                            <a href="#"><i class="icon_chat_alt"></i> Chats</a>
                          </li> --}}

                          <li>
                            <a href="{{route('userDetails')}}"><i class="icon_profile"></i>Profile</a>
                          </li>

                          <li>
                            <a href="{{route('changepasswords')}}"><i class="icon_key_alt"></i>Change Password</a>
                          </li>

                          <li>
                            {{-- <a href="{{ route('logout') }}"><i class="icon_key_alt"></i>Log Out</a> --}}
                            <a  href="{{ route('logout') }}"
                                  onclick="event.preventDefault();
                                                  document.getElementById('logout-form').submit();">
                                  {{-- <i class="icon_key_alt"> --}}
                                  <i class="fa fa-sign-out"></i>
                                  {{ __('Logout') }}
                              </a>

                              <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                  @csrf
                              </form>
                          </li>
                          {{-- <li>
                            <a href="documentation.html"><i class="icon_key_alt"></i> Documentation</a>
                          </li> --}}
                        </ul>
          </li>
          <!-- user login dropdown end -->
        </ul>
        <!-- notificatoin dropdown end-->
      </div>
    </header>
    <!--header end-->

    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li class="active">
            <a class="" href="{{route('userHome')}}">
                          <i class="icon_house_alt"></i>
                          <span>Home</span>
                      </a>
          </li>
          <li class="sub-menu">
            <a href="{{route('postReviews.create')}}" class="">
                          <i class="icon_document_alt"></i>
                          <span>Post Review</span>
                      </a>
          </li>
          {{-- <li class="sub-menu">
            <a href="" class="">
                          <i class="fa fa-list-ul"></i>
                          <span>Review List</span>
                      </a>
          </li> --}}

          {{-- <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="fa fa-list-ul"></i>
                          <span>Review List</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              {{-- <li><a class="" href="">Review Title</a></li> --}}
              {{-- <li><a class="" href="{{route('postReviews.index')}}">Review Detail</a></li>
            </ul>
          </li> --}} 

          <li class="sub-menu">
            <a class="" href="{{route('postReviews.index')}}">
              <i class="fa fa-list-ul"></i>
              <span>Review Detail</span>
            </a>
          </li>

          <li>
            <a class="" href="{{route('post_own_review')}}">
                          <i class="fa fa-edit"></i>
                          <span>Edit</span>
                      </a>
          </li>

          <li>
            <a class="" href="{{route('submit_status')}}">
                          <i class="fa fa-calendar"></i>
                          <span>Due Date</span>
            </a>
          </li>

          <li>
            {{-- <a class="" href="">
                          <i class="fa fa-sign-out"></i>
                          <span>Logout</span>

                      </a>
                    </a> --}}

                    
                <a  href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                    <i class="fa fa-sign-out"></i>
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>

          </li>
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <!--overview start-->
        {{-- <div class="row">
          <div class="col-lg-12">
            
            <ol class="breadcrumb bg-white">
              <li><i class="fa fa-home"></i><a href="{{route('userHome')}}">Home</a></li>
              <li><i class="fa fa-laptop"></i>Dashboard</li>
            </ol>
          </div>
        </div> --}}
        {{-- Content of body --}}
        @yield('content')
      </section>
      
    </section>
    <!--main content end-->
  </section>
  <!-- container section start -->

  <!-- javascripts -->
  <script src="{{asset('user/js/jquery.js')}}"></script>
  <script src="{{asset('user/js/jquery-ui-1.10.4.min.js')}}"></script>
  <script src="{{asset('user/js/jquery-1.8.3.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('user/js/jquery-ui-1.9.2.custom.min.js')}}"></script>
  <!-- bootstrap -->
  <script src="{{asset('user/js/bootstrap.min.js')}}"></script>
  <!-- nice scroll -->
  <script src="{{asset('user/js/jquery.scrollTo.min.js')}}"></script>
  <script src="{{asset('user/js/jquery.nicescroll.js')}}" type="text/javascript"></script>
  <!-- charts scripts -->
  <script src="{{asset('user/assets/jquery-knob/js/jquery.knob.js')}}"></script>
  <script src="{{asset('user/js/jquery.sparkline.js')}}" type="text/javascript"></script>
  <script src="{{asset('user/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js')}}"></script>
  <script src="{{asset('user/js/owl.carousel.js')}}"></script>
  <!-- jQuery full calendar -->
  <<script src="{{asset('user/js/fullcalendar.min.js')}}"></script>
    <!-- Full Google Calendar - Calendar -->
    <script src="{{asset('user/assets/fullcalendar/fullcalendar/fullcalendar.js')}}"></script>
    <!--script for this page only-->
    <script src="{{asset('user/js/calendar-custom.js')}}"></script>
    <script src="{{asset('user/js/jquery.rateit.min.js')}}"></script>
    <!-- custom select -->
    <script src="{{asset('user/js/jquery.customSelect.min.js')}}"></script>
    <script src="{{asset('user/assets/chart-master/Chart.js')}}"></script>

    <!--custome script for all page-->
    <script src="{{asset('user/js/scripts.js')}}"></script>
    <!-- custom script for this page-->
    <script src="{{asset('user/js/sparkline-chart.js')}}"></script>
    <script src="{{asset('user/js/easy-pie-chart.js')}}"></script>
    <script src="{{asset('user/js/jquery-jvectormap-1.2.2.min.js')}}"></script>
    <script src="{{asset('user/js/jquery-jvectormap-world-mill-en.js')}}"></script>
    {{-- <script src="{{asset(user/js/xcharts.min.js)}}"></script> --}}
    <script src="{{asset('user/js/jquery.autosize.min.js')}}"></script>
    <script src="{{asset('user/js/jquery.placeholder.min.js')}}"></script>
    <script src="{{asset('user/js/gdp-data.js')}}"></script>
    <script src="{{asset('user/js/morris.min.js')}}"></script>
    <script src="{{asset('user/js/sparklines.js')}}"></script>
    <script src="{{asset('user/js/charts.js')}}"></script>
    <script src="{{asset('user/js/jquery.slimscroll.min.js')}}"></script>
    <script>
      //knob
      $(function() {
        $(".knob").knob({
          'draw': function() {
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
        $("#owl-slider").owlCarousel({
          navigation: true,
          slideSpeed: 300,
          paginationSpeed: 400,
          singleItem: true

        });
      });

      //custom select box

      $(function() {
        $('select.styled').customSelect();
      });

      /* ---------- Map ---------- */
      $(function() {
        $('#map').vectorMap({
          map: 'world_mill_en',
          series: {
            regions: [{
              values: gdpData,
              scale: ['#000', '#000'],
              normalizeFunction: 'polynomial'
            }]
          },
          backgroundColor: '#eef3f7',
          onLabelShow: function(e, el, code) {
            el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
          }
        });
      });
    </script>

{{-- this is for the ckeditor --}}
<script src="//cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
{{-- <script src="{{asset('js/ckeditor.js')}}"></script> --}}
<script>
  CKEDITOR.replace( 'ckeditor' );
</script>

{{-- form validation links --}}
{{-- <script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script> --}}
  <script src="{{asset('form/jquery.js')}}"></script>

  <!-- Compiled and minified JavaScript -->
  {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script> --}}

  

</body>

</html>
