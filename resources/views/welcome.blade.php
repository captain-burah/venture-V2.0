<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script> window.laravel = { csrfToken: '{{ csrf_token() }}' } </script>
        <title>Venture 2021</title>
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="css/app.css">
        <!-- Styles -->
        <style>
            
            a:focus,
            a:hover {
            color: #fff;
            }
    
            /* Custom default button */
            .btn-secondary,
            .btn-secondary:hover,
            .btn-secondary:focus {
            color: #000;
            text-shadow: none; /* Prevent inheritance from `body` */
            background-color: #fff;
            border: .05rem solid rgb(170, 170, 170);
            opacity: .6;
            }
    
    
            /*
            * Base structure
            */
    
            html,
            body {
            height: 100%;
            font-family: 'Raleway', sans-serif;
            color: #636b6f;
            height: 100vh;
            margin: 0;
            font-weight: 100;
            }
            body{
                background-color: #40844e;
            }
         
            .cover-container {
                max-width: 62em;      
            }
    
    
            /*
            * Header
            */
            .masthead {
            margin-bottom: 2rem;
            } 
    
            @font-face {
                font-family: 'playlist';
                src: url('/font/playlist.otf');
                font-style: normal;
                font-weight: 100;
            }
    
            
    
            .nav-masthead .nav-link {
            padding: .25rem 0;
            font-weight: 700;
            color: rgba(255, 255, 255, .5);
            background-color: transparent;
            border-bottom: .25rem solid transparent;
            }
    
            .nav-masthead .nav-link:hover,
            .nav-masthead .nav-link:focus {
            border-bottom-color: rgba(255, 255, 255);
            }
    
            .nav-masthead .nav-link + .nav-link {
            margin-left: 1rem;
            }
    
            .nav-masthead .active {
            color: #fff;
            border-bottom-color: #fff;
            }
    
            @media (min-width: 48em) {
                .masthead-brand {
                    float: left;
                }
                .nav-masthead {
                    float: right;
                }
            }
    
    
            /*
            * Cover
            */
            .cover {
                padding: 0 0rem;
                
                height: 100vh;
                align-items: center;
                padding-bottom: 
                margin-bottom: 0;
                margin-top: 10%;
            }
            .cover .btn-lg {
            padding: .75rem 1.25rem;
            font-weight: 700;
            }
            .cover-heading{
                max-width: 100%;
                font-weight: 400;
                margin-top: 5%;
                margin-bottom: 5%;
                background-color: #e6e6e6;
                opacity: .6;
                border-radius: 0px 0px 50px 50px;
                border: #19341e 3px solid;
            }
    
    
            /*
            * Footer
            */
            
            .mastMenu{
                
                margin-bottom: 0;
                padding-bottom: 0;
                margin-top: 0;
                background-color: #19341e;
                align-items: center;
            }
            .mastMenu-a{
                align-items: center;
                margin: 10%;
                font-weight: 600;
                color: #e6e6e6;
            }
            .headMenu{
                font-weight: 400;
            }
            .mastMenu-item{
                border: #19341e 2px solid;
            }
            .mastMenu-item:hover {
                background-color: #40844e;
                color: #fff !important;
                border: #19341e 2px solid;
                transition: background-color .75s, border .25s;
            }
            .mastfoot{
                color: #19341e;
                font-weight: 700;
                font-size: .7rem;
                position: relative;
                margin-bottom: 0;
                top: 0;
            }
            .footer-a{
                text-decoration: none;
                color: #19341e;
            }

        </style>
    </head>
    <body class="text-center " >
        <div class="cover-container d-flex h-100 p-3 mx-auto flex-container flex-column ">
<!--------------Header Section-------------->
            <header class="container-fluid  mb-auto border-bottom">
                
                
                    <nav class="nav nav-masthead justify-content-center ">
                        @if (Route::has('login'))
                    <div class="headMenu">
                        @auth
                            <a href="{{ url('/home') }}">Home</a>
                        @else
                            <a href="{{ route('login') }}" class="text-white">Login Now &nbsp;</a>
                            <a href="{{ route('register') }}" class="text-white"></a>
                        @endauth
                    </div>
                @endif
                    </nav>
                
            </header>

<!---------------Main Section---------------->
            <main role="main" class="inner cover rounded">

                <div class="row mastMenu text-light my-0 " style="opacity: .9;;">
                    <div class="col-md-3 my-0 py-3 mastMenu-item" >
                        <a href="#Home" class=" mastMenu-a "><i class="fas fa-school text-warning "></i>&nbsp Academy</a>
                    </div>
                    <div class="col-md-3 my-0 py-3 mastMenu-item">
                        <a href="#Venturecast" class=" mastMenu-a "><i class="fas fa-chalkboard-teacher text-info  "></i>&nbsp Tutor Panel</a>
                    </div>
                    <div class="col-md-3  my-0 py-3 mastMenu-item">
                        <a href="#Lecturers" class=" mastMenu-a"><i class="fas fa-hashtag  text-danger"></i>&nbsp Studentcast</a>
                    </div>
                    <div class="col-md-3  my-0 py-3 mastMenu-item">
                        <a href="#Lecturers" class=" mastMenu-a"><i class="fas fa-door-open text-success"></i>&nbsp Join Here</a>
                    </div>
                </div>
                <div class="row mastMenu text-light my-0" style="opacity: .9;">
                    <div class="col-md-6  my-0 py-3 mastMenu-item">
                        <a href="#Lecturers" class=" mastMenu-a"><i class="fas fa-id-card purple"></i>&nbsp Reach Us Here</a>
                    </div>
                    <div class="col-md-6  my-0 py-3 mastMenu-item">
                        <a href="#About_Us" class=" mastMenu-a"><i class="fas fa-user-tie indigo"></i>&nbsp About Us</a>
                    </div>
                </div>

                <h1 class="cover-heading display-5 text-dark font-weight-bold">Venture 2021</h1>
                
            </main>
            
<!---------------Footer Section-------------->
<footer class="mastfoot mt-auto">
    <div class="inner">
        <p>designed & developed | &copy <a href="www.instagram.com/captain_burah" class="footer-a">Captain Burah</a></p>
        </div>
</footer>
<!--------------/Footer Section-------------->
        </div>
        
    </body>
</html>
