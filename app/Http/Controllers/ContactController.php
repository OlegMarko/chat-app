<?php

namespace App\Http\Controllers;

use App\User;

class ContactController extends Controller
{
    public function get()
    {
        $users = User::all();

        return response()->json($users);
    }
}
