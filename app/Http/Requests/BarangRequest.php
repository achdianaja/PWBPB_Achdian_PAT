<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BarangRequest extends FormRequest
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
            'nama_barang' => 'required',
            'kode_barang' => 'required|unique:barang',
            // 'kode_barang' => '',
            'status' => 'required',
            'jumlah' => 'required|max:100',
            // 'jumlah' => ''
        ];

    }
    public function messages()
    {
        return [
            'nama_barang.required' => 'harus diisi',
            'kode_barang.required' => 'harus diisi',
            'kode_barang.unique' => 'kode sudah ada', 
            'status.required' => 'harus diisi',
            'jumlah.required' => 'harus diisi',
            'jumlah.max' => 'tidak boleh lebih dari 100'
        ];   
    }
}
