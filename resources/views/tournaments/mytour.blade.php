
            @extends('layouts.app')
            @section('content')
 	<div class="container">
 		
<div class="row justify-content-center" style="margin-top: 80px; margin-bottom: 70px">
    <table class="table">

        <thead>

            <tr>
            <th>Tournament Name</th>   
            <th>Registration Last Date</th>   
              
            
            <th colspan="2">Action</th>

            </tr>
        
        </thead>

        <tbody>
    @foreach($tournaments as $tournament)
    <tr class="table-active ">
      <td>{{$tournament->name}}</td>
      <td>{{$tournament->regenddate}}</td>
     
      
      <td>   
      
        
        <a href="{{route('team.view', $tournament)}}"class="btn btn-info">View</a>
        <a href="{{route('tournament.edit', $tournament)}}"class="btn btn-info">Edit</a>
        <a href="{{route('tournament.delete', $tournament)}}"class="btn btn-danger">Delete</a>



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

 