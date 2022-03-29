<?php

namespace App\Http\Controllers;

use Classes\GeneratePDF;

use App\Http\Requests\IdarbinimasRequest;

use Illuminate\Http\Request;

class Idarbinimas extends Controller
{
    public function render()
    {
        return view('idarbinimas');
    }

    public function generate(IdarbinimasRequest $request)
    {
        $request->generate();

        return back()->with('success', 'Pavyko');
    }
}
