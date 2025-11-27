<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBeritaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; // TODO: Tambahkan authorization sesuai kebutuhan
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'judul' => 'required|string|max:255|unique:beritas,judul',
            'kategori' => 'nullable|string|max:100',
            'tanggal' => 'required|date',
            'author' => 'required|string|max:100',
            'thumbnail' => 'nullable|image|mimes:jpeg,jpg,png,webp|max:2048', // max 2MB
            'konten' => 'required|string',
        ];
    }

    /**
     * Custom error messages
     */
    public function messages(): array
    {
        return [
            'judul.required' => 'Judul berita wajib diisi.',
            'judul.unique' => 'Judul berita sudah digunakan.',
            'tanggal.required' => 'Tanggal berita wajib diisi.',
            'author.required' => 'Nama penulis wajib diisi.',
            'konten.required' => 'Konten berita wajib diisi.',
            'thumbnail.image' => 'File harus berupa gambar.',
            'thumbnail.mimes' => 'Gambar harus berformat: jpeg, jpg, png, atau webp.',
            'thumbnail.max' => 'Ukuran gambar maksimal 2MB.',
        ];
    }
}
