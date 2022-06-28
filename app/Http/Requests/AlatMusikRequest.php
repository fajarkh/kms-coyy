<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AlatMusikRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $rules = [
            'nama' => 'required',
            'deskripsi' => 'required',
            'id_budaya' => 'required'
        ];
        return $rules;
    }
}
