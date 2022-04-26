<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HistoryRequest extends FormRequest
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
        $rules = [
            'judul' => 'required',
            'konten' => 'required'
        ];

        if ($this->isMethod('post')) {
            $rules[] = ['gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'];
        }

        return $rules;
    }
}
