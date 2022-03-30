<?php

namespace App\Http\Controllers;

use App\Http\Requests\Atleidimas54Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;

class Atleidimas54 extends Controller
{
    public function render()
    {
        return view('54');
    }

    public function generate(Atleidimas54Request $request)
    {
        $response = $request->generate();

        // return Storage::disk('public')->download($response['file']);

        return redirect()->route('atleidimas.54.thanks');
    }
}
