<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;   //using Message model

class MessagesController extends Controller
{
    public function submit(Request $request){
      //var_dump($request->input());
      $this->validate($request, [
        'name' => 'required',
        'email' => 'required'
      ]);

      //Create a new message
      $message = new Message;
      //asssign values to message fields
      $message->name = $request->input('name');
      $message->email = $request->input('email');
      $message->message = $request->input('message');
      //Save Message
      $message->save();

      //Redirect to Home page
      //success we will use in mesage blade with session to show success message
      return redirect('/')->with('success', 'Message Sent');
    }

    public function getMessages(){
        $messages = Message::all();
        return view('messages')->with('messages', $messages);
    }
}
