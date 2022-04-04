<?php

namespace App\Http\Controllers;

use App\Http\Requests\IdarbinimasRequest;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;

class Idarbinimas extends Controller
{
    public function render()
    {
        return view('idarbinimas');
    }

    public function generate(IdarbinimasRequest $request)
    {
        $response = $request->generate();

        return Storage::disk('public')->download($response['file']);

        return redirect()->route('idarbinimas.thanks');
    }
}
