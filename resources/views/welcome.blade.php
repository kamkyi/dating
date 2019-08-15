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
        <!-- style -->
        <style>  
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 800;
            height: 100vh;
            margin: 0;
            background-image: linear-gradient(white,#fff,#DCC7AA);
        }
        #heart{
            width: 18vw;
        }
        #dev{
            position: absolute;
            bottom:2px;
            height: 10px;
            width: 100%;
            text-align:center;
        }
        .btn-near-by-mate-hided{
            display: none;
            width: 75%;

        }

        /* Smartphones ----------- */
        @media only screen and (max-width: 510px) {
                .btn-near-by-mate{
                    display: none;
                }
                .btn-near-by-mate-hided{
                    display: block;
                }
        }
            
        </style>
        <!-- style end -->
    </head>
    <body>
        <!-- container -->
        <div class="container-fluid">
           <!-- navbar -->
            @if (Route::has('login'))
                <ul class="nav justify-content-end">
                   @auth
                        <li class="nav-item">
                           <a class="nav-link" href="{{ url('/home') }}">Home</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/redirect')}}" ><i class="fab fa-facebook-f fa-xs"></i>&nbsp; Login</a>
                        </li>
                        
                    @endauth
                </ul>
            @endif
            <!-- navbar end -->
            <!-- flex arranger -->
            <center>
            <div class="d-flex justify-content-center flex-column" style="height:80vh;width:100%;">
            <div class="p-2">
                    <!-- feature img -->
                    <center>
                    <img src="{{asset('img/heart-rain.gif')}}" alt="Burmese dating" id="heart">
                    </center>
                    <!-- feature img end -->
            </div>
            <div class="p-2">
                           <!-- dedication -->
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
                           <!-- dedication end -->
            </div>
            <div class="p-2">
                              <!-- buttons -->
                                <center>
                                                    @auth
                                                    <div class="btn-group">
                                                    <a href="{{ url('/home') }}" class="btn btn-secondary">Fun Place&nbsp;<i class="fas fa-gamepad fa-xs"></i></a>
                                                    <a href="{{ url('/home') }}" class="btn btn-secondary">Love Astrologer&nbsp;<i class="fas fa-feather-alt"></i></a>
                                                    </div>
                                                    <a href="{{ url('/home') }}" class="btn btn-success btn-near-by-mate">NearBy Mate&nbsp;<i class="fas fa-search-location fa-xs"></i></a>
                                                    <br>
                                                    <br>
                                                    <br>
                                                    <a href="{{ url('/home') }}" class="btn btn-success btn-near-by-mate-hided">NearBy Mate&nbsp;<i class="fas fa-search-location fa-xs"></i></a>
                                                    @else
                                                    <div class="btn-group">
                                                    <button type="button" class="btn" data-toggle="modal" data-target="#exampleModalCenter">Fun Place&nbsp;<i class="fas fa-gamepad fa-xs"></i></button>
                                                    <button type="button" class="btn" data-toggle="modal" data-target="#exampleModalCenter">Love Astrologer&nbsp;<i class="fas fa-feather-alt"></i></button>
                                                    </div>
                                                    <button type="button"  class="btn btn-success btn-near-by-mate" data-toggle="modal" data-target="#exampleModalCenter">NearBy Mate&nbsp;<i class="fas fa-search-location fa-xs"></i></button>
                                                    <br>
                                                    <br>
                                                    <br>
                                                    <button type="button"  class="btn btn-success btn-near-by-mate-hided btn-block" data-toggle="modal" data-target="#exampleModalCenter">NearBy Mate&nbsp;<i class="fas fa-search-location fa-xs"></i></button>
                                                    @endauth
                                        
                                </center>    
                                <!-- buttons end -->
            </div>
            </div>
            </center>
            <!-- flex arranger end -->

        </div>
        <!-- container end -->
          
    </body>
</html>

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
<!-- copy right -->
<p id="dev">
     Copyright &copy; Dev. Wai 2019 AUG
</p>
<!-- copy right end -->