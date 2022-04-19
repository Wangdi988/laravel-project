<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">-->

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <style>
          ul li a {
              font-size: 15px;
              padding: 10px;
              color: #fff !important;
              text-transform: uppercase;
              position: relative;
          }
          /* ul li a:hover {
              
            text-decoration:white 4px underline !important;
              
          } */
         ul li a::before {    
                        background: none repeat scroll 0 0 transparent;
                        bottom: 0;
                        content: "";
                        display: block;
                        height: 2px;
                        left: 50%;
                        position: absolute;
                        background: #fff;
                        transition: width 0.3s ease 0s, left 0.3s ease 0s;
                        width: 0;
        }
        ul li a:hover:before { 
        width: 100%; 
        left: 0; 
        }
          .navbar {
              top: -4px;
              position: sticky;
              z-index: 7;
          }
          .row iframe {
              top: 90px;
              position: sticky;
          }
          *{
              margin: 0px;
          }
          .navbar {
              /* background-color: #12588d !important; */
              background-image: linear-gradient(to bottom right, rgb(11, 57, 117), rgb(73, 69, 90)) !important;
          }
          .navbar-toggler {
              background-color: rgb(223, 219, 219);
          }
          #contact{
              font-size: 19px;
          }
          .row #contactUs i{
                font-size: 23px;
                color:rgb(120, 140, 163);
          }

          form .form-group #input {
            width: 100%;
            background: transparent;
            border: none;
            outline: none;
            border-bottom:1px solid gray;
            font-size: 13px;
            margin-bottom: 18px;
        }

        .contact-service {
            background-image: linear-gradient(to bottom right, rgb(35, 36, 88), rgb(105, 100, 124));
            height: 130px;
            width: 100%;
            }
       .contact-service h1{
           color: #fff;
           padding-top: 40px;
       }
       .jumbotron{
           z-index: -5;
       }
       .jumbotron img{
        z-index: -5;
       }
       .jumbotron img p{
        z-index: -5;
       }
       /* public home page css */
       #home_image {
            opacity: 0.5;
            }

        #home_image:hover {
            opacity: 1.0;
            }
       /* #review{
        opacity: 0.5;
       } */

       #review:hover {
            /* opacity: 0.5; */
            box-shadow: 2px 2px 2px gray;
            }
    </style>
    <title>E-Review</title>
  </head>
  <body>

   
       @include('inc.navbar')
       @yield('content')
        <div>
        <br>
        @include('inc.footer')
        </div>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>