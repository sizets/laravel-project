
@extends('layouts.app')

@section('content')
    
<div class="container">
    <div class="row justify-content-center" style="margin-top :200px;">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Game') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('game.save') }}" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Game') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="game_name" value="" required  >
                        

                        
                               
                            </div>
                        </div>


<!-- 
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="file"  name="image"  >
                        

                        
                               
                            </div>
                        </div>
                        
                       
                         -->
                        

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
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











<div class="container">
 		
         <div class="row justify-content-center" style="margin-top: 80px; margin-bottom: 70px">
             <table class="table">
         
                 <thead>
         
                     <tr>
                     <th>User Name</th>   
                     <th>Email</th>   
                     <th>User Type</th>   
                       
                     
                     <th colspan="2">Action</th>
         
                     </tr>
                 
                 </thead>
         
                 <tbody>
             @foreach($users as $user)
             <tr class="table-active ">
               <td>{{$user->name}}</td>
               <td>{{$user->email}}</td>
               <td>{{$user->user_type}}</td>
              
               
               <td>   
               
                 <a href="{{route('user.view', $user)}}"class="btn btn-success">View</a>
             @if($user->email!="lilsamy57@gmail.com" )

                 <a href="{{route('admin.userdelete', $user)}}"class="btn btn-info">Delete</a>
                 @if( Auth::user()->email=="lilsamy57@gmail.com")
                    <a href="{{route('user.makeadmin', $user)}}"class="btn btn-success">make admin</a>
                 
                 @endif
                 

               
                           
         
         
               </td>
         
             </tr>
             @endif
             @endforeach      
         
             
             
           </tbody>
         
                  
         
             </table>
                 
                 </div>
             
             </div>



            
  <main class="page-content" style="margin-bottom:100px;">

@foreach($contacts ?? '' as $contact)
<div class="card2">
<h2>{{$contact->name}}</h2>
<hr/>
<p>{{$contact->message}}
</p>

</div>


@endforeach  


</main>




         
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

