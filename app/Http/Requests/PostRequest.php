<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class PostRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required|unique:tb_user',
            'pwd' => ['required', 'string', Password::min(8)
                ->mixedCase()
                ->letters()
                ->numbers()],
            'pwd2' => 'required|same:pwd',
        ];
    }
    public function messages()
    {
        return [
            'name.required'    => 'Nama harus diisi.',
            'email.unique'      => 'Email sudah terdaftar.',
            'pwd.min'     => 'Password minimal 8 karakter.',
            'pwd2.same'     => 'Konfirmasi password salah.',
        ];
    }
}
