<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>

    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Arvo:ital,wght@0,700;1,700&display=swap" rel="stylesheet">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style1.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <title>Document</title>
</head>
<body>
    
  <nav class="navbar navbar-expand-lg navbar-custom fixed-top  navbar-default navbar-dark" >
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
      
    <div class="navbar-collapse collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto ">

      @if(Auth::check() && (Auth::user()->user_type=="admin"  || Auth::user()->email=="lilsamy57@gmail.com") )            
          <li class="nav-item">
            <a class="nav-link" href="{{url('/creategames')}}">ADMIN</a>
          </li>
         @endif
        <li class="nav-item  ">
        <a class="nav-link" href="{{url('/')}}">HOME <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            
          <a class="nav-link" href="{{url('/createtournaments')}}">ORGANIZE</a>
        </li>

        <li class="nav-item">
        <a class="nav-link" href="{{url('/mytour')}}">MY TOUR</a> 
          </li>

        <li class="nav-item">
        <a class="nav-link" href="{{url('/contact')}}">CONTACT US</a> 
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{url('/community')}}">COMMUNITY</a>
          </li>
         

         
         
      
      
       <!-- Authentication Links -->
       @guest
       <li class="nav-item">
           <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
       </li>
       @if (Route::has('register'))
           <li class="nav-item">
               <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
           </li>
       @endif
   @else
       <li class="nav-item dropdown">
           <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
               {{ Auth::user()->name }} <span class="caret"></span>
           </a>

           <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
               <a class="dropdown-item" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                   {{ __('Logout') }}
               </a>

               <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                   @csrf
               </form>
           </div>
       </li>
   @endguest
</ul>
      
      
      
      
    </div>
  </nav>
     
        
        
      <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel" data-interval="4000">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="./images/rr.jpg" alt="First slide">
            
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="./images/pa.jpg" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="./images/dota.jpg" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="./images/valorant_jett_2-wallpaper-3840x2160.jpg" alt="Third slide">
          </div> 
          <div class="carousel-item">
            <img class="d-block w-100" src="./images/the_witcher_3_wild_hunt_geralt_and_ciri-wallpaper-7680x4320.jpg" alt="Third slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="./images/valorant-viper_1589582348.jpg" alt="Third slide">
          </div>
          
        </div>
        
        
        
        <div class="carousel-caption ">
            <div class="button_cont"><a class="example_a" href="{{url('/showgames')}}"  id="GFG">Play Tournament</a></div>
            
            
          </div>
        </div>






        <!-- live stream background red    -->
          <div class="st"> 
                 
           
<h1 style=" color:#fff !important; 
    text-align:center; 
    font-weight:900; 
    font-family: 'Arvo', serif;
    padding-top:30px;
    padding-bottom:-30px;">
    <span>
 LIVE STREAMS
 </span>
</h1>


                <div class="container">

                  <!-- live stream code -->
<iframe src="https://player.twitch.tv/?channel=sizets&parent=127.0.0.1" frameborder="0" allowfullscreen="true" scrolling="no" height="580" width="100%" position=absolute;></iframe>
 

  </div>
 </div>
 </div>





    

        <!-- feed back form -->

        <div class="bg-contact100" style="background-image: url('images/bg-01.jpg');">
          <div class="container-contact100">
            <div class="wrap-contact100">
              <div class="contact100-pic js-tilt" data-tilt>
                <img src="images/img-01.png" alt="IMG">
              </div>
      
              <form class="contact100-form validate-form" method="POST" action="{{ route('post.save') }}">
              @csrf

                <span class="contact100-form-title " style="font-weight:800;">
                  FeedBack
                </span>
      
                <div class="wrap-input100 validate-input" data-validate = "Name is required">
                  <input class="input100" type="text" name="name" placeholder="Name">
                  <span class="focus-input100"></span>
                  <span class="symbol-input100">
                    <i class="fa fa-user" aria-hidden="true"></i>
                  </span>
                </div>
      
                <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                  <input class="input100" type="text" name="email" placeholder="Email">
                  <span class="focus-input100"></span>
                  <span class="symbol-input100">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                  </span>
                </div>
      
                <div class="wrap-input100 validate-input" data-validate = "Message is required">
                  <textarea class="input100" name="message" placeholder="Message"></textarea>
                  <span class="focus-input100"></span>
                </div>
      
                <div class="container-contact100-form-btn">
                  <button class="contact100-form-btn">
                    Send
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
        


        <footer class="site-footer">
     
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-sm-6 col-xs-12">
                <p class="copyright-text">Copyright &copy; 2020 All Rights Reserved by 
             <a href="#">ABC</a>.
                </p>
              </div>
    
              <div class="col-md-4 col-sm-6 col-xs-12">
                <ul class="social-icons">
                  <li><a class="facebook" href="https://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
                  <li><a class="twitter" href="https://twitter.com"><i class="fa fa-twitter"></i></a></li>
                  <li><a class="dribbble" href="https://dribbble.com"><i class="fa fa-dribbble"></i></a></li>
                  <li><a class="linkedin" href="https://pk.linkedin.com"><i class="fa fa-linkedin"></i></a></li>   
                </ul>
              </div>
            </div>
          </div>
    </footer>
      
      
      <!--===============================================================================================-->
        <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
      <!--===============================================================================================-->
        <script src="vendor/bootstrap/js/popper.js"></script>
        
      <!--===============================================================================================-->
        <script src="vendor/select2/select2.min.js"></script>
      <!--===============================================================================================-->
        <script src="vendor/tilt/tilt.jquery.min.js"></script>

        <script >
          $('.js-tilt').tilt({
            scale: 1.1
          })
        </script>
      <!--===============================================================================================-->
        <script src="js/main.js"></script>
      
      <!-- Global site tag (gtag.js) - Google Analytics -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
      <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
      
        gtag('config', 'UA-23581568-13');
      </script>
      
        
      
      

     
     



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
            
    <script src="./js/js.js"></script>
    <script src="./js/js/jquery.js"></script>
    <script> src="./js/js/bootstrap.min.js"</script>

          
     



</body>
</html>