<?php

namespace App\Http\Controllers;

use App\Http\Requests\Atleidimas56Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;

class Atleidimas56 extends Controller
{
    public function render()
    {
        return view('56');
    }

    public function generate(Atleidimas56Request $request)
    {
        $response = $request->generate();

        return Storage::disk('public')->download($response['file']);

        return redirect()->route('atleidimas.56.thanks');
    }
}
