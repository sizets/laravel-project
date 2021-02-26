<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style2.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Chango&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sigmar+One&display=swap" rel="stylesheet">
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
     
        
           
            
          <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel" data-interval="2700">
            <div class="carousel-inner" role="listbox">
              <div class="item active">
                <img src="./images/lap.png" alt="Chania">
              </div>
          
              
            </div>
          </div>
            
          


          
    <div class="container-bg">

         
       <div class="center ">
        <h1>Browse By Games</h1>
     </div>
     
    
      
  
  

  
          

      

        

            
  <main class="page-content">
    @foreach($games as $game)
    <div class="card">
      <div class="content">
        <h2 class="title"> {{$game ->game_name}}</h2>
       
        <button class="btn">
          <a href="{{route('game.tournament', $game)}} " id="GFG">Check </a></button>
      </div>
    </div>
    @endforeach  
   
    </div>
  </main>

      
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
     
     



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
            
    <script src="./js/js.js"></script>
    <script src="./js/js/jquery.js"></script>
    <script> src="./js/js/bootstrap.min.js"</script>
        
</body>
</html>