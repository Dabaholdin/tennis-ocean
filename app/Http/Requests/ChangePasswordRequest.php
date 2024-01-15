<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChangePasswordRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            
            'last_password'  => ['required','string','max:50','min:6','current_password'],
            'new_password_confirm' =>['required','string','max:60','min:6','same:new_password'],
            
                
                
        ];
    }
    public function messages(){
        return [
            'required'=>'Поле :attribute обязательно к заполнению',
            'string'=>'Поле :attribute строка',
            'max'=>'Поле :attribute дожно содержать не более 50 символов',
            'min'=>'Поле :attribute дожно содержать не менее 6 символов',
            'current_password'=>'Вы ввели не верный пароль',
            'same'=>'Пароли не совпадают'
        ];
    }
}
