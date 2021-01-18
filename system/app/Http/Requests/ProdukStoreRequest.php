<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdukStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true ;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nama' => 'required',
            'harga' => 'required',
            'stock' => 'required',
            'berat' => 'required',
            'foto' => 'required',
            'deskripsi' => 'required',
        ];
    }
    function messages(){
        return[
            'nama.required' => 'Tabel Nama Wajib Diisi',
            'harga.required' => 'Tabel Harga Wajib Diisi',
            'stock.required' => 'Tabel Stock Wajib Diisi',
            'berat.required' => 'Tabel Berat Wajib Diisi',
            'foto.required' => 'Tabel Foto Wajib Diisi',
            'deskripsi.required' => 'Tabel Deskripsi Wajib Diisi',
        ];
    }
}
