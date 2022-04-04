<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use mikehaertl\pdftk\Pdf;

class IdarbinimasRequest extends FormRequest
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
            'email' => 'required|email',
            'phone' => 'required|tel',
            'asmenskodas' => 'required',
            'miestas' => 'required',
            'adresas' => 'required',
            'saskr' => 'required',
            'pavadinimas' => 'required',
            'pareigosKil' => 'required',
            'pasirinkti' => 'required',
            'uzmokestis' => 'required',
            'day' => 'required',
            'month' => 'required',
            'year' => 'required',
        ];
    }
    public function generate()
    {

        session()->forget('idarbinimai.download');

        $atributes= $this->validated();


        $data = [
            'name_field' => $atributes['fname'] . ' ' . $atributes['lname'],
            'email_field' => $atributes['email'],
            'phone_field' => $atributes['phone'],
            'asmenskodas_field' => $atributes['asmenskodas'],
            'meistas_field' => $atributes['miestas'],
            'adresas_field' => $atributes['adresas'],
            'sasknr_field' => $atributes['sasknr'],
            'pavadinimas_field' => $atributes['pavadinimas'],
            'pareigosKil_field' => $atributes['pareigosKil'],
            'pasirinkti_field' => $atributes['pasirinkti'],
            'uzmokestis_field' => $atributes['uzmokestis'],
            'day_field' => $atributes['day'],
            'month_field' => $atributes['month'],
            'year_field' => $atributes['year'],
        ];

        $filename = 'pdf_' . uniqid(time()) . '.pdf';
        $saveAs = 'idarbinimai' . $filename;

        $pdf = new Pdf(base_path(test.pdf), [
            'useExec' => true,
        ]);

        $response = $pdf->fillForm($data)
            //->flatten()
            ->needAppearances()
            ->execute();

        $file = file_get_contents((string)$pdf->getTmpFile());

        Storage::disk('public')->put($saveAs, $file, 'public');

        session()->put('idarbinimai.download', asset(Storage::url($saveAs)));

        return [
            'success' => $response,
            'url' => asset(Storage::url($saveAs)),
            'file' => $saveAs,
        ];
    }
}
