<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SenjataRequest extends FormRequest
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
        ];
        if ($this->isMethod('post')) {
            $rules[] = ['gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'];
        }
        return $rules;
    }
}
