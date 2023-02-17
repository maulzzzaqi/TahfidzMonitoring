<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TahfidzRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => ['required'],
            'class' => ['required'],
            'surah' => ['required'],
            'tester' => ['required'],
            'status' => ['required']
        ];
    }

    public function messages(){
        return [
            'name.required' => "Please fill the name first!",
            'class.required' => "Please fill the class first!",
            'surah.required' => "Please fill the surah first!",
            'tester.required' => "Please fill the tester first!",
            'status.required' => "Please fill the status first!"
        ];
    }
}
