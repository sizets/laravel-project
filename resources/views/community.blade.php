<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Chango&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sigmar+One&display=swap" rel="stylesheet">
    <title>Document</title>
    <style>
        body{
          position: relative;
  margin: 0;
  padding-bottom: 4rem;
  min-height: 100%;
  background-attachment: fixed !important;
        background: linear-gradient(rgb(54, 34, 77), rgba(128, 42, 12, 0.50)), url("./images/tifa_lockhart_ff7-wallpaper-3840x2160.jpg");
  
  background-size: cover;
  

        }


h1 {
    
     color:#fff; 
     text-align:center; 
     font-weight:900; 
     font-family: sans-serif;
     margin-top: 150px;
     padding: 24px;
     line-height: 1.9;
}



.link-2 {
  position: relative;
  text-decoration: none;
  display: inline-block;
  color: black;
  padding: 0 1px;
  -webkit-transition: color ease 0.3s;
  transition: color ease 0.3s;
  
}



.link-2::before, .link-2::after {
    content: '';
    position: absolute;
    background-color: #B62E31;
    z-index: -1;
    height: 9%;
    
  }



.link-2::before {
    width: 0%;
    left: 0;
    bottom: 0;
    -webkit-transition: width ease 0.4s;
    transition: width ease 0.4s;
    
  }



.link-2::after {
    width: 100%;
    left: 0;
    bottom: 0;
    -webkit-transition: all ease 0.6s;
    transition: all ease 0.6s;
    
  }



.link-2:hover::before {
      width: 100%;
    }



.link-2:hover::after {
      left: 100%;
      width: 0%;
      -webkit-transition: all ease 0.2s;
      transition: all ease 0.2s;
      
    }







    </style>
</head>
 <body>
 <div id="app">
        <nav class="navbar navbar-expand-lg navbar-custom navbar-dark navbar-default fixed-top " >
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
        
        
         
     
        <div >

           
            <h1>
   <a class="link-2">Reviews</a>
</h1>

        </div>
           
        


  <main class="page-content" style="margin-bottom:20px;">

    
    @foreach($posts as $post)
  <div class="card">
    <h2>{{$post->name}}</h2>
    <hr/>
    <p>{{$post->message}}
    </p>
    
  </div>
  
  

    @endforeach  
  

  </main>
    

  
<footer class="footer">
  
</footer>
  
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