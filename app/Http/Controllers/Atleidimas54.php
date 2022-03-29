<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Atleidimas54 extends Controller
{
    public function render()
    {
        return view('54');
    }

    public function generate(Atleidimas54Request $request)
    {
        $request->generate();

        return back()->with('success', 'Pavyko');
    }
}
