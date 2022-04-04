<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use mikehaertl\pdftk\Pdf;

class Atleidimas56Request extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'fname' => 'required',
            'lname' => 'required',
            'imoneskodas' => 'required',
            'buveine' => 'required',
            'pavadinimas' => 'required',
            'sutartiesnr' => 'required',
            'vardasKil' => 'required',
            'day' => 'required',
            'month' => 'required',
            'year' => 'required',
        ];
    }

    public function generate()
    {
        session()->forget('atleidimai.56.download');

        $atributes = $this->validated();

        $data = [
            'name_field' => $atributes['fname'] . ' ' . $atributes['lname'],
            'imoneskodas_field' => $atributes['imoneskodas'],
            'buveine_field' => $atributes['buveine'],
            'pavadinimas_field' => $atributes['pavadinimas'],
            'sutartiesnr_field' => $atributes['sutartiesnr'],
            'vardasKil_field' => $atributes['vardasKil'],
            'day_field' => $atributes['day'],
            'month_field' => $atributes['month'],
            'year_field' => $atributes['year'],
        ];

        $filename = 'pdf_'. uniqid(time()) . '.pdf';
        $saveAs = 'atleidimai/56' . $filename;

        $pdf = new Pdf(base_path('test.pdf'),[
            'useExec' => true,
        ]);

        $response = $pdf->fillForm($data)
            //->flatten()
            ->needAppearances()
            ->execute();

        $file = file_get_contents((string)$pdf->getTmpFile());

        Storage::disk('public')->put($saveAs, $file, 'public');

        session()->put('atleidimai.56.download', asset(Storage::url($saveAs)));

        return [
            'success' => $response,
            'url' => asset(Storage::url($saveAs)),
            'file' => $saveAs,
        ];
    }
}
