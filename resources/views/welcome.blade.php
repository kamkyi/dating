<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Dating</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <!-- bootstrap cdn -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/80682fba6d.js"></script>
        <!-- bootstrap cdn end -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 800;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 48px;
                text-shadow: 0px 1px black;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            body{
                background-image: linear-gradient(white, grey);
            }
            p{
                margin: 5px;
            }
            #heart{
                width: 20vw;
                margin: 0;
                padding: 0;
            }

            p#dev{
                position: absolute;
                bottom:2px;
                left: 0;
                right: 0;
            }
         
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{url('/redirect')}}" ><i class="fab fa-facebook-f fa-xs"></i>&nbsp; Login</a>
                        <!-- <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif -->
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                     <img src="{{asset('img/heart.png')}}" alt="Burmese dating" id="heart">
                </div>

                <div class="links">
                    
                </div>
                <br>
                <br>
                <center>
                     <p> This site is dedicated for the people who do not have the enough time to find their
                         mate 
                     </p>
                     <p>
                         I strongly grantee this site will help you find the perfect match for your entire life 
                         :D
                     </p>
                     <p>Born Date : 9 August , 2019 FRI , 11:00 pm </p>
                </center>
                <br>
                <br>
                <center>
                                @auth
                                <div class="btn-group">
                                <a href="{{ url('/home') }}" class="btn btn-secondary">Fun Place&nbsp;<i class="fas fa-gamepad fa-xs"></i></a>
                                <a href="{{ url('/home') }}" class="btn btn-secondary">Love Astrologer&nbsp;<i class="fas fa-feather-alt"></i></a>
                                </div>
                                <a href="{{ url('/home') }}" class="btn btn-success hidden-xs-down">NearBy Mate&nbsp;<i class="fas fa-search-location fa-xs"></i></a>
                                @else
                                <div class="btn-group">
                                <button type="button" class="btn" data-toggle="modal" data-target="#exampleModalCenter">Fun Place&nbsp;<i class="fas fa-gamepad fa-xs"></i></button>
                                <button type="button" class="btn" data-toggle="modal" data-target="#exampleModalCenter">Love Astrologer&nbsp;<i class="fas fa-feather-alt"></i></button>
                                </div>
                                <button type="button" class="btn btn-success hidden-xs-down" data-toggle="modal" data-target="#exampleModalCenter">NearBy Mate&nbsp;<i class="fas fa-search-location fa-xs"></i></button>
                                @endauth
                     
                </center>
            
                <center>
                <p id="dev">
                    Copyright &copy; Dev. Wai 2019 AUG
                </p>
                </center>
                
            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-body">
                     <b>Please Login</b>
                </div>
                <div class="modal-body">
                        <center>
                        <b><a href="{{url('/redirect')}}" class="btn btn-secondary" ><i class="fab fa-facebook-f fa-sm"></i>&nbsp; <strong>Login</strong></a></b>
                        </center>
                </div>
                </div>
            </div>
            </div>
                <!-- modal end -->
            </div>
        </div>
        
    </body>
</html>
