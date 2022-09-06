<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use Session;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
     // dd("hii");
       $support             =       new Contact;
       $support->name       =       $request->name;
       $support->email      =       $request->email;
       $support->subject    =       $request->subject;
       $support->message    =       $request->message;
       
       
      if (!$support->save()) {
        $response = array(
          'status' => false,
          'message' => 'An error occured...'
        );
      } else {
        $response = array(
          'status' => true,
          'message' => 'Success',
        );
      }

      return $response;

    }
}
