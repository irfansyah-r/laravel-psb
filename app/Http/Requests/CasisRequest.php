<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CasisRequest extends FormRequest
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
        if(!$this->method() == 'PATCH') {
            $nisn_rules     = 'required|numeric|digits_between:8,12|unique:casis,nisn,' . $this->get('id');
            $ayah_telepon_rules  = 'sometimes|numeric|digits_between:10,15';
            $ibu_telepon_rules  = 'sometimes|numeric|digits_between:10,15';
            $wali_telepon_rules  = 'sometimes|numeric|digits_between:10,15';
        }else {
            $nisn_rules     = 'required|numeric|digits_between:8,12';
            $ayah_telepon_rules  = 'sometimes|numeric|digits_between:10,15';
            $ibu_telepon_rules  = 'sometimes|numeric|digits_between:10,15';
            $wali_telepon_rules  = 'sometimes|numeric|digits_between:10,15';
        }

        return [
            'nisn'          => $nisn_rules,
            'nama'          => 'required|string',
            'kota_tl'       => 'required|string',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin '=> 'sometimes|in:L,P',
            'no_kk'         => 'required|numeric',
            'alamat_kk'     => 'required|string|max:256',
            'alamat_dmsl'   => 'sometimes|string|max:256',
            'asal_sekolah'  => 'required|string',
            'no_seri_ijazah'=> 'required|string',
            'no_seri_skhun' => 'required|string',
            'nama_ayah'     => 'required|string',
            'kota_tl_ayah'  => 'required|string',
            'tanggal_lahir_ayah'=> 'required|date',
            'pendidikan_ayah'   => 'required|string|max:8',
            'pekerjaan_ayah'    => 'required|string|max:16',
            'penghasilan_ayah'  => 'sometimes|numeric',
            'no_telp_ayah'      => $ayah_telepon_rules,
            'nama_ibu'          => 'required|string',
            'kota_tl_ibu'       => 'required|string',
            'tanggal_lahir_ibu' => 'required|date',
            'pendidikan_ibu'    => 'required|string|max:8',
            'pekerjaan_ibu'     => 'required|string|max:16',
            'penghasilan_ibu'   => 'sometimes|numeric',
            'no_telp_ibu'       => $ibu_telepon_rules,
            'status_tl'         => 'required|string|max:16',
            'nama_wali'         => 'sometimes',
            'kota_tl_wali'      => 'sometimes',
            'tanggal_lahir_wali'=> 'sometimes',
            'pekerjaan_wali'    => 'sometimes',
            'penghasilan_wali'  => 'sometimes',
            'no_telp_wali'      => $wali_telepon_rules,
            'hubungan_wali'     => 'sometimes|string',
            'validasi'          => 'sometimes|in:Y,N',
            'keterangan'        => 'sometimes|max:512',

        ];
    }
}
