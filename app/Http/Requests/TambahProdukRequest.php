<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TambahProdukRequest extends FormRequest
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
            'nama_produk' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'harga' => 'required|numeric',
            'link_tokped' => 'nullable|string',
            'link_shopee' => 'nullable|string',
            'gambar_utama' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:400',
            'gambar_pendamping1' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:400',
            'gambar_pendamping2' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:400',
            'gambar_pendamping3' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:400',
        ];
    }

    public function messages(): array{
        return [
            'nama_produk.required' => 'Nama produk harus diisi.',
            'deskripsi.required' => 'Deskripsi produk harus diisi.',
            'harga.required' => 'Harga produk harus diisi.',
            'harga.numeric' => 'Harga produk harus berupa angka.',
            'gambar_utama.required' => 'Gambar utama harus diunggah.',
            'gambar_utama.image' => 'Gambar utama harus berupa file gambar.',
            'gambar_utama.mimes' => 'Gambar utama harus berformat jpeg, png, jpg, gif, atau svg.',
            'gambar_utama.max' => 'Ukuran gambar utama maksimal 400KB.',
            'gambar_pendamping1.image' => 'Gambar pendamping 1 harus berupa file gambar.',
            'gambar_pendamping1.mimes' => 'Gambar pendamping 1 harus berformat jpeg, png, jpg, gif, atau svg.',
            'gambar_pendamping1.max' => 'Ukuran gambar pendamping 1 maksimal 400KB.',
            'gambar_pendamping2.image' => 'Gambar pendamping 2 harus berupa file gambar.',
            'gambar_pendamping2.mimes' => 'Gambar pendamping 2 harus berformat jpeg, png, jpg, gif, atau svg.',
            'gambar_pendamping2.max' => 'Ukuran gambar pendamping 2 maksimal 400KB.',
            'gambar_pendamping3.image' => 'Gambar pendamping 3 harus berupa file gambar.',
            'gambar_pendamping3.mimes' => 'Gambar pendamping 3 harus berformat jpeg, png, jpg, gif, atau svg.',
            'gambar_pendamping3.max' => 'Ukuran gambar pendamping 3 maksimal 400KB.',
        ];
    }
}
