<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessageController extends Controller
{
    public function send(Request $request)
    {
        $this->validate($request, [
          'email' => 'email|required',
          'message' => 'required',
        ]);

        $message = Message::create([
          'email' => $request->email,
          'message' => $request->message
        ]);

        return $message;
    }
}
