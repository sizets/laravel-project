

        
    
     

@extends('layouts.app')
  @section('content')

               

<div class="container">
    <div class="row justify-content-center" style="margin-top:80px;">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Update Tournament') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('tournament.update', $tournaments) }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control " name="name" value="{{$tournaments ->name}}" required  >

                               
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
                                <textarea class="form-control " name="description" value=" "  cols="30" rows="10" required>{{$tournaments->description}}
                                </textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Regsitration Start Date') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="date" class="form-control " name="regstartdate"  value="{{$tournaments ->regstartdate}}" required>

                               
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Registration end Date') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="date" class="form-control " name="regenddate" value="{{$tournaments ->regenddate}}" required >

                               
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Tournament Start Date') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="date" class="form-control " name="tourstartdate" value="{{$tournaments ->tourstartdate}}" required >

                               
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Tournament End Date') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="date" class="form-control " name="tourenddate" value="{{$tournaments ->tourenddate}}" required >

                               
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Prize') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="number" class="form-control " name="prize" value="{{$tournaments ->prize}}" required >

                               
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Number Of Player per Team') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="number" class="form-control " name="totalplayers" value="{{$tournaments ->totalplayers}}" required >

                               
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
                                <input id="name" type="text" class="form-control " name="rules" value="{{$tournaments ->rules}}" required >

                               
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Bans') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control " name="bans" value="{{$tournaments ->bans}}" required >

                               
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary btn-ghost">
                                    {{ __('Update') }}
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
  
  





@endsection
