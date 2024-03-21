<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePemesananRequest extends FormRequest
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
            'tanggal_pemesanan' => 'required',
            'jam_mulai' => 'required',
            'jam_selesai' => 'required',
            'nama_pemesanan' => 'required',
            'jumlah_pelanggan' => 'required',
        ];
    }
    public function message()
    {
        return [
            'tanggal_pemesanan.required' => 'Tanggal Pemesanan belum diisi!',
            'jam_mulai.required' => 'Jam Mulai belum diisi!',
            'jam_selesai.required' => 'Jam Selesai belum diisi!',
            'nama_pemesanan.required' => 'Nama Pemesan belum diisi!',
            'jumlah_pelanggan.required' => 'Jumlah Pelanggan belum diisi!',
        ];
    }
}
