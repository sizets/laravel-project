
    
    
  @extends('layouts.app')
  @section('content')

             
  
    
  
  <figure class="tint" style="margin-top: 80px">
    <img src="/images/s.jpg" alt="" width="100%">

    
    
  </figure>


  <div class="icon-bar" style="margin-top: -20px">
    <a class="" href="#"><i class="fa fa-home"></i></a> 
    <a href="#"><i class="fa fa-search"></i></a> 
    <a href="#"><i class="fa fa-envelope"></i></a> 
    <a href="#"><i class="fa fa-globe"></i></a>
    <a href="#"><i class="fa fa-trash"></i></a> 
  </div>


    <div class="bg" >
    <div class="container">
      <div class="justify-content-left" >


        
      <h1 style="padding-top: 40px"  >Tournament Name</h1>
          

          <p style="margin-top: 20px ">
        
              
            {{$tournament ->name}}
        
            
          </p> 
    
    

      <h1 >Teams</h1>
          

          <p style="margin-top: 20px ">
        
              @foreach($teams as $team)
                {{$team ->team_name}}
              @endforeach
          </p> 






          <h1 >Description</h1>
          

      <p style="margin-top: 20px ">
    

        {{$tournament ->description}}
    
        
      </p> 


      <h1 >Platforms</h1>
          

      <p style="margin-top: 20px ">
    

        {{$tournament ->platforms}}
    
        
      </p> 



      <h1 >Bans</h1>
          

      <p style="margin-top: 20px ">
    

        {{$tournament ->bans}}
    
        
      </p> 


      <h1 >Tournament Rules</h1>
          

      <p style="margin-top: 20px ">
    

        {{$tournament ->rules}}
    
        
      </p> 

      <h1 >Conditions</h1>
          

      <p style="margin-top: 20px ">
    

        {{$tournament ->conditions}}
    
        
      </p> 


      <h1 >Number of Players Per Team</h1>
          

      <p style="margin-top: 20px ">
    

        {{$tournament ->totalplayers}}
    
        
      </p> 


      <h1 >Prizes</h1>
          

      <p style="margin-top: 20px ">
    

        {{$tournament ->prize}}
    
        
      </p> 


      




    </div>



  </div> 

</div>

<footer class="site-footer" style="margin-bottom: -35px">
     
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-sm-6 col-xs-12">
        <p class="copyright-text">Copyright &copy; 2020 All Rights Reserved by 
     <a href="#">ABC</a>.
        </p>
      </div>

      <div class="col-md-4 col-sm-6 col-xs-12">
        <ul class="social-icons">
          <li><a class="facebook" href="https://www.facebook.com" ><i class="fa fa-facebook"></i></a></li>
          <li><a class="twitter" href="https://twitter.com"><i class="fa fa-twitter" style="padding-top: 10px"></i></a></li>
          <li><a class="dribbble" href="https://dribbble.com"><i class="fa fa-dribbble" style="padding-top: 10px"></i></a></li>
          <li><a class="linkedin" href="https://pk.linkedin.com"><i class="fa fa-linkedin" style="padding-top: 10px"></i></a></li>   
        </ul>
      </div>
    </div>
  </div>
</footer>



@endsection

 