<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\ContactEmail as ContactEmail;


class PageController extends Controller {
    public function getContact()
    {
        return view('contact');
    }
    public function postContact(Request $request)
    {    
         $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'message'=>'required'
        ]);
      ContactEmail::create($request->all());
      
       $notification = array(
            'message' => 'Thanks! We shall get back to you soon.', 
            'alert-type' => 'success'
        );
       return redirect()->back()->with($notification);
    }
}