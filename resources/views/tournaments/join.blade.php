
            @extends('layouts.app')
                     @section('content')
    
                         
        <div class="container  " >
    <div class="row justify-content-center" style="margin-top: 120px" >
        

        <div class="card card-4">
                <div class="card-header">{{ __('Tournament Registration Form') }}</div>

        <div class="card-body" >
            
            <form method="POST" action="{{ route('team.save') }}" >
            @csrf   
                
            
                    <div class="form-group row">
                            <label class="label" >Team name</label>
                            <input class="form-control " type="text" name="team_name" >
                    <input type = "hidden" name="tournament_id" value="{{$tournament->_id}}">
                    
            </div>
                <div class="row row-space">
                    <div class="form-group">
                            <label class="label">Player1 name</label>
                            <input class="form-control" type="text" name="player1_name">
                    </div>
                    <div class="form-group">
                            <label class="label">Email</label>
                            <input class="input--style-4 form-control" type="email" name="player1_email">
                    </div>
                </div>

                <div class="row row-space">
                    <div class="form-group">
                            <label class="label">Player2 name</label>
                            <input class="input--style-4 form-control" type="text" name="player2_name">
                    </div>
                    <div class="form-group">
                            <label class="label">Email</label>
                            <input class="input--style-4 form-control" type="email" name="player2_email">
                    </div>
                </div>

                <div class="row row-space">
                    <div class="form-group">
                            <label class="label">Player3 name</label>
                            <input class="input--style-4 form-control" type="text" name="player3_name">
                    </div>
                    <div class="form-group">
                            <label class="label">Email</label>
                            <input class="input--style-4 form-control" type="email" name="player3_email">
                    </div>
                </div>

                <div class="row row-space">
                    <div class="form-group">
                            <label class="label">Player4 name</label>
                            <input class="input--style-4 form-control" type="text" name="player4_name">
                    </div>
                    <div class="form-group">
                            <label class="label">Email</label>
                            <input class="input--style-4 form-control" type="email" name="player4_email">
                    </div>
                </div>

                <div class="row row-space">
                    <div class="form-group">
                            <label class="label">Player5 name</label>
                            <input class="input--style-4 form-control" type="text" name="player5_name">
                    </div>
                    <div class="form-group">
                            <label class="label">Email</label>
                            <input class="input--style-4 form-control" type="email" name="player5_email">
                    </div>
                </div>

                <div class="p-t-15">
                    <button class="btn btn-info" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
        </div> 
        </div>             
            

                
<footer class="site-footer" style="margin-top: 60px">
     
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

            
                    
            