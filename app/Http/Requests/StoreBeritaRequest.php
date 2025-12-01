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
        // Only allow if admin is logged in
        return session()->has('admin_logged_in');
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
            'thumbnail' => 'nullable|image|mimes:jpeg,jpg,png,webp|max:2048|dimensions:min_width=300,min_height=300,max_width=4000,max_height=4000',
            'konten' => 'required|string',
            'waktu_baca' => 'nullable|integer|min:1|max:60',
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
            'thumbnail.dimensions' => 'Dimensi gambar minimal 300x300px dan maksimal 4000x4000px.',
        ];
    }
}
