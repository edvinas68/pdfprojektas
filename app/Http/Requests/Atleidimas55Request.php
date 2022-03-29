<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Classes\GeneratePDF;

class Atleidimas55Request extends FormRequest
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
            'asmenskodas' => 'required',
            'adresas' => 'required',
            'vardasGal' => 'required',
            'data' => 'required',
            'day' => 'required',
            'month' => 'required',
            'year' => 'required',
        ];
    }
    public function generate()
    {
        $atributes=$this->validated();

        $data = [
            'name_field' => $atributes['fname'] . ' ' . $atributes['lname'],
            'asmenskodas_field' => $atributes['asmenskodas'],
            'adresas_field' => $atributes['adresas'],
            'vardasGal_field' => $atributes['vardasGal'],
            'data_field' => $atributes['data'],
            'day_field' => $atributes['day'],
            'month_field' => $atributes['month'],
            'year_field' => $atributes['year'],
        ];

        $pdf = new GeneratePDF;
        $response = $pdf->generate($data);

        return $response;
    }
}
