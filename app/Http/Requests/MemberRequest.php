<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MemberRequest extends FormRequest
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
            'no_id' => 'required|unique:members',
            'nama' => 'required',
            'alamat' => 'required',
            'phone' => 'required|unique:members',
        ];
    }

    public function messages()
{
    return [
        'nama.required' => 'Nama harus di isi',
        'alamat.required' => 'Alamat harus di isi',
        'phone.required' => 'Nomor telepon harus di isi',
        'phone.unique' => 'Nomor telepon sudah ada',
    ];
}
}
