<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <title>Document</title>
</head>
<body>
   
    
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-custom  navbar-dark " >
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
        
    
     




                

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create Tournament') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('tournament.save') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control " name="name" value="" required  >

                               
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Game Name') }}</label>

                            <div class="col-md-6">
                                <select id="cars" name="game_id" class="form-control">
                                    @foreach($games as $game)
                                        <option value="{{$game->_id}}">{{$game->game_name}}</option>
                                    @endforeach
                                </select>
                                

                               
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                            <div class="col-md-6">
                                <textarea class="form-control " name="description" id="" cols="30" rows="10" required></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Regsitration Start Date') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="date" class="form-control " name="regstartdate"  required>

                               
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Registration end Date') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="date" class="form-control " name="regenddate"  required >

                               
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Tournament Start Date') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="date" class="form-control " name="tourstartdate"  required >

                               
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Tournament End Date') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="date" class="form-control " name="tourenddate"  required >

                               
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Prize') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="number" class="form-control " name="prize" required >

                               
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Number Of Player per Team') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="number" class="form-control " name="totalplayers"  required >

                               
                            </div>
                        </div>

                        

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Platforms') }}</label>

                            <div class="col-md-6">
                                <select id="cars" name="platforms">
                                    <option value="Pc">Pc</option>
                                    <option value="Mobile">Mobile</option>
                                    
                                  </select>
                                

                               
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Rules') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control " name="rules"  required >

                               
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Bans') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control " name="bans"  required >

                               
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary btn-ghost">
                                    {{ __('Create') }}
                                </button>

                               
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>







    
<footer class="site-footer" style="margin-bottom: -25px">
     
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