<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreTrialRequestRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nama' => [
                'required',
                'string',
                'max:255',
            ],

            'email' => [
                'required',
                'email',
                'max:255',
            ],

            'nomor_handphone' => [
                'required',
                'string',
                'max:20',
            ],

            'nama_lembaga' => [
                'required',
                'string',
                'max:255',
            ],

            'client_type_id' => [
                'required',
                'exists:client_types,id',
            ],

            'jenjang' => [
                'required',
                'string',
                'max:100',
            ],

            'jumlah_murid' => [
                'required',
                'integer',
                'min:1',
            ],

            'alamat' => [
                'nullable',
                'string',
            ],
        ];
    }

    public function messages(): array
    {
        return [
            'nama.required' =>
            'Nama PIC wajib diisi.',

            'email.required' =>
            'Email wajib diisi.',

            'email.email' =>
            'Format email tidak valid.',

            'nomor_handphone.required' =>
            'Nomor handphone wajib diisi.',

            'nama_lembaga.required' =>
            'Nama lembaga wajib diisi.',

            'client_type_id.required' =>
            'Tipe lembaga wajib dipilih.',

            'client_type_id.exists' =>
            'Tipe lembaga yang dipilih tidak valid.',

            'jenjang.required' =>
            'Jenjang wajib diisi.',

            'jumlah_murid.required' =>
            'Jumlah murid wajib diisi.',

            'jumlah_murid.integer' =>
            'Jumlah murid harus berupa angka.',

            'jumlah_murid.min' =>
            'Jumlah murid minimal 1.',
        ];
    }
}
