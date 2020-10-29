<?php

namespace App\Http\Controllers;

use App\Indox;
use Illuminate\Http\Request;

class IndoxController extends Controller
{
    public function store (){
        $message = request()->validate([
            'name'  => "required",
            'email' => "required|email",
            'message' => "required"
        ]);

        $name = \request('name');


       Indox::create($message);

       return back()->with('session_message', "Thank You $name for Reaching Out, I'll Respond to your Email shortly");
    }
}
