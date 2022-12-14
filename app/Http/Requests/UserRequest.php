<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
        if(!$this->method() == 'PATCH'){
            $email_rules = 'required|email|unique:users,email,' . $this->get('id');
        }else{
            $email_rules = 'required|email';
        }
        return [
            'name'      => 'required|string|max:200',
            'email'     => $email_rules,
            'password'  => 'required|min:6',
            'konfirmasi_password'  => 'same:password',
            'role'      => 'required|in:admin,operator',
        ];
    }
}
