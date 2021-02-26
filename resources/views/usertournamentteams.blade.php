
            @extends('layouts.app')
            @section('content')
 	<div class="container">
 		
<div class="row justify-content-center" style="margin-top: 80px; margin-bottom: 70px">
    <table class="table">

        <thead>

            <tr>
            <th>Team Name</th>   
            <th>Team Leader</th>   
              
            
            <th colspan="2">Action</th>

            </tr>
        
        </thead>

        <tbody>
    @foreach($teams as $team)
    <tr class="table-active ">
      <td>{{$team->team_name}}</td>
      <td>{{$team->player1_name}}</td>
     
      
      <td>   
      
        <a href="{{route('admin.teamdelete', $team)}}"class="btn btn-success">Delete</a>
    
      
                  


      </td>

    </tr>
    @endforeach      

    
    
  </tbody>

         

    </table>
        
        </div>
    
    </div>


    
<footer class="site-footer" style="bottom:0;">
     
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
          <li><a class="twitter" href="https://twitter.com"><i class="fa fa-twitter"></i></a></li>
          <li><a class="dribbble" href="https://dribbble.com"><i class="fa fa-dribbble"></i></a></li>
          <li><a class="linkedin" href="https://pk.linkedin.com"><i class="fa fa-linkedin"></i></a></li>   
        </ul>
      </div>
    </div>
  </div>
</footer>



  @endsection

 