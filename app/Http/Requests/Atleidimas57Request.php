<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use mikehaertl\pdftk\Pdf;

class Atleidimas57Request extends FormRequest
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
            'asmenskodas' => 'required',
            'adresas' => 'required',
            'pavadinimas' => 'required',
            'vardasGal' => 'required',
            'data' => 'required',
            'priezastis' => 'required',
            'day' => 'required',
            'month' => 'required',
            'year' => 'required',
        ];
    }

    public function generate()
    {
        session()->forget('atleidimai.57.download');

        $atributes = $this->validated();

        $data = [
            'name_field' => $atributes['fname'] . ' ' . $atributes['lname'],
            'asmenskodas_field' => $atributes['asmenskodas'],
            'adresas_field' => $atributes['adresas'],
            'pavadinimas_field' => $atributes['pavadinimas'],
            'vardasGal_field' => $atributes['vardasGal'],
            'data_field' => $atributes['data'],
            'priezastis' => $atributes['priezastis'],
            'day_field' => $atributes['day'],
            'month_field' => $atributes['month'],
            'year_field' => $atributes['year'],
        ];

        $filename = 'pdf_' . uniqid(time()) . '.pdf';
        $saveAs = 'atleidimai/57/' . $filename;

        $pdf = new Pdf(base_path('test.pdf'), [
            'useExec' => true,
        ]);

        $response = $pdf->fillForm($data)
            //->flatten()
            ->needAppearances()
            ->execute();

        $file = file_get_contents((string)$pdf->getTmpFile());

        Storage::disk('public')->put($saveAs, $file, 'public');

        session()->put('atleidimai.57.download', asset(Storage::url($saveAs)));

        return [
            'success' => $response,
            'url' => asset(Storage::url($saveAs)),
            'file' => $saveAs,
        ];
    }
}
