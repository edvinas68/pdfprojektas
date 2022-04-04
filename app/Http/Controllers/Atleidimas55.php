<?php

namespace App\Http\Controllers;

use App\Http\Requests\Atleidimas55Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;


class Atleidimas55 extends Controller
{
    public function render()
    {
        return view('55');
    }

    public function generate(Atleidimas55Request $request)
    {
        $response = $request->generate();

        return Storage::disk('public')->download($response['file']);

        return redirect()->route('atleidimas.55.thanks');
    }
}
