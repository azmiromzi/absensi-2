<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Hash;

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
     * @return array<string, mixed>
     */
    public function rules()
    {
        $rules = [
            'name' => [ 'required', 'string', 'max:255'],
            'email' => [ 'required', 'email'],
            'is_admin' => ['nullable', 'boolean'],
            'password' => ['required'],
            'nik' => ['nullable', 'string'],
            'kelas_id' => ['nullable', 'integer'],
            'absen' => ['nullable', 'integer']
        ];

        // if (request()->routeIs('admin.users.create')) {
        //     $rules['password'] = ['required', 'confirmed', Rules\Password::defaults()];
        // }

        if (request()->routeIs('admin.edit')) {
            $rules['password'] = ['nullable', 'confirmed', Rules\Password::defaults()];
        }

        return $rules;
    }
}
