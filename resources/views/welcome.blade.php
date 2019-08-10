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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <script src="https://kit.fontawesome.com/80682fba6d.js"></script>
        <!-- bootstrap cdn end -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
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
                font-size: 50px;
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
                    Burmese Dating
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">This site is maintained by <sup>Dev</sup>.Wai</a>
                </div>
                <br>
                <br>
                <center>
                     <p> This site is dedicated for the people who do not have the enough<br> time to find their
                         mate 
                     </p>
                     <p>
                         I strongly grantee this site will help you find the perfect<br> match for your entire life 
                         :D
                     </p>
                     <p>Born Date : 9 August , 2019 FRI , 11:00 pm </p>
                </center>
                <br>
                <br>
                <center>
                         <div class="btn-group">
                                <button type="button" class="btn" data-toggle="modal" data-target="#exampleModalCenter">NearBy Mate&nbsp;<i class="fas fa-search-location fa-xs"></i></button>
                                <button type="button" class="btn">Fun Place&nbsp;<i class="fas fa-gamepad fa-xs"></i></button>
                                <button type="button" class="btn">Love Astrologer&nbsp;<i class="fas fa-feather-alt"></i></button>
                         </div>
                </center>
            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-body">
                     <b>Are you over 18 ?</b>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning" data-dismiss="modal">No</button>
                    <button type="button" class="btn btn-success">Yes</button>
                </div>
                </div>
            </div>
            </div>
                <!-- modal end -->
            </div>
        </div>
    </body>
</html>
