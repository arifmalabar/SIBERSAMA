<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreGuruRequest extends FormRequest
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
            'NIP' => 'required',
            'nama' => 'required',
            'username' => 'required|unique:tb_guru',
            'password' => 'required',
            'kd_jabatan' => 'required',
            'kode_pangkat' => 'required'
        ];
    }
}
