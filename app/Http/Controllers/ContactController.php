<?php

namespace App\Http\Controllers;

use App\Message;
use App\User;

class ContactController extends Controller
{
    public function get()
    {
        $users = User::all();

        return response()->json($users);
    }

    public function getMessageFor($id)
    {
        $messages = Message::where('from', $id)->orWhere('to', $id)->get();

        return response()->json($messages);
    }
}
