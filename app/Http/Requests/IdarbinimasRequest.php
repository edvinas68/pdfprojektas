<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Classes\GeneratePDF;

class IdarbinimasRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
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
            'mail' => 'required|email',

        ];
    }
    public function generate()
    {
        $atributes= $this->validated();


        $data = [
            'name_field' => $atributes['fname'] . ' ' . $atributes['lname'],
            'email_field' => $atributes['email'],
            'phone_field' => $atributes['phone'],
        ];

        $pdf = new GeneratePDF;
        $response = $pdf->generate($data);

        return $response;
    }
}
