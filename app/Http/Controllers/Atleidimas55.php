<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\Atleidimas55Request;

class Atleidimas55 extends Controller
{
    public function render()
    {
        return view ('55');
    }

    public function generate(Atleidimas55Request $request)
    {
        $request->generate();

        return back()->with('success', 'Pavyko');
    }
}
