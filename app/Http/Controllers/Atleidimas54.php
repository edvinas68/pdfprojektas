<?php

namespace App\Http\Controllers;

use App\Http\Requests\Atleidimas54Request;


use Illuminate\Http\Request;

class Atleidimas54 extends Controller
{
    public function render()
    {
        return view('54');
    }

    public function generate(Atleidimas54Request $request)
    {
        
       $response = $request->generate();
        dd($response);
        return back()->with('success', 'Pavyko');
    }
}
