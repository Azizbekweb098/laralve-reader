<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeacherStoreRequest extends FormRequest
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
          'name' => 'required|min:5',
          'surname' => 'required|min:6',
         'email' => 'required|email|unique:teachers,email',
          'age' => 'required|digits:2|max:2', 
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Ism formani to\'ldiring',
            'name.min' => 'Ismingizda kamida 5 ta belgi bo\'lishi kerak',
            'surname.required' => 'Familya formani to\'ldiring',
            'surname.min' => 'Familyangizda kamida 6 ta belgi bo\'lishi kerak',
            'email.required' => 'Emailingizni to\'ldiring',
            'email.unique' => 'Bu email allaqachon mavjud',
            'age.required' => 'Yoshingizni to\'ldiring',
            'age.digits' => 'Yoshingiz 2 ta sondan oshmasligi kerak',
        ];
    }
    

}
