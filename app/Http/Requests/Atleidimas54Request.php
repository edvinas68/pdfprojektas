<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Classes\GeneratePDF;

class Atleidimas54Request extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
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
        $atributes= $this->validated();

        $data = [
            'name_field' => $atributes['fname'] . ' ' . $atributes['lname'],
            'imoneskodas_field' => $atributes['imoneskodas'],
            'buveine_field' => $atributes['buveine'],
            'pavadinimas_field' => $atributes['pavadinimas'],
            'sutartiesnr_field' => $atributes['sutartiesnr'],
            'vardasKil_field' => $atributes['vardasKil'],
            'imoneskodas_field' => $atributes['imoneskodas'],
            'day_field' => $atributes['day'],
            'month_field' => $atributes['month'],
            'year_field' => $atributes['year'],
        ];

        $pdf = new GeneratePDF;
        $response = $pdf->generate($data);

        return $response;
    }
}
