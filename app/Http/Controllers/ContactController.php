<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Contact;

class ContactController extends Controller
{
    
    public function index(){
        return view('contact');
    }
         
        public function save(Request $request){
            $data = [
                
    
                
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'message' => $request->input('message'),
              
                
                
                
    
            ];
            $contact = Contact::create($data);
            return redirect()->route('home');
           
            
        }
    
      
        
    }
    

