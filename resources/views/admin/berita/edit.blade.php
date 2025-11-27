<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Berita - BEM REMA UPI</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body {
            margin: 0;
            padding: 0;
            background: #f8f9fa;
            font-family: 'Inter', system-ui, -apple-system, sans-serif;
        }
        
        .main-content {
            margin-left: 270px;
            min-height: 100vh;
            background: #f8f9fa;
        }
        
        .form-group {
            margin-bottom: 1.5rem;
        }
        
        .form-label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 600;
            color: #374151;
            font-size: 14px;
        }
        
        .form-input,
        .form-textarea,
        .form-select {
            width: 100%;
            padding: 10px 14px;
            border: 1px solid #e5e7eb;
            border-radius: 8px;
            font-size: 14px;
            transition: all 0.2s;
        }
        
        .form-input:focus,
        .form-textarea:focus,
        .form-select:focus {
            outline: none;
            border-color: #3b82f6;
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
        }
        
        .form-textarea {
            min-height: 400px;
            font-family: inherit;
        }
        
        .btn {
            padding: 10px 20px;
            border-radius: 8px;
            font-weight: 600;
            font-size: 14px;
            cursor: pointer;
            transition: all 0.2s;
            border: none;
        }
        
        .btn-primary {
            background: #3b82f6;
            color: white;
        }
        
        .btn-primary:hover {
            background: #2563eb;
        }
        
        .btn-secondary {
            background: #6b7280;
            color: white;
        }
        
        .btn-secondary:hover {
            background: #4b5563;
        }

        .alert {
            padding: 12px 16px;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .alert-danger {
            background: #fee2e2;
            color: #991b1b;
            border: 1px solid #fecaca;
        }

        .current-thumbnail {
            max-width: 300px;
            border-radius: 8px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    @include('admin.partials.sidebar')
    
    <div class="main-content">
        @include('admin.partials.header')
        
        <div class="p-8">
            <div class="mb-6">
                <h1 class="text-2xl font-bold text-gray-800">Edit Berita</h1>
                <p class="text-gray-600 text-sm mt-1">Perbarui informasi berita</p>
            </div>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Terdapat kesalahan:</strong>
                    <ul class="mt-2 ml-4 list-disc">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="bg-white rounded-xl shadow-sm p-6">
                <form action="{{ route('admin.berita.update', $beritum) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="judul" class="form-label">Judul Berita <span class="text-red-500">*</span></label>
                        <input type="text" id="judul" name="judul" class="form-input" value="{{ old('judul', $beritum->judul) }}" required>
                    </div>

                    <div class="grid grid-cols-2 gap-4">
                        <div class="form-group">
                            <label for="kategori" class="form-label">Kategori</label>
                            <select id="kategori" name="kategori" class="form-select">
                                <option value="">Pilih Kategori</option>
                                <option value="Program Kerja" {{ old('kategori', $beritum->kategori) == 'Program Kerja' ? 'selected' : '' }}>Program Kerja</option>
                                <option value="Workshop" {{ old('kategori', $beritum->kategori) == 'Workshop' ? 'selected' : '' }}>Workshop</option>
                                <option value="Kegiatan" {{ old('kategori', $beritum->kategori) == 'Kegiatan' ? 'selected' : '' }}>Kegiatan</option>
                                <option value="Pelantikan" {{ old('kategori', $beritum->kategori) == 'Pelantikan' ? 'selected' : '' }}>Pelantikan</option>
                                <option value="Prestasi" {{ old('kategori', $beritum->kategori) == 'Prestasi' ? 'selected' : '' }}>Prestasi</option>
                                <option value="Pengumuman" {{ old('kategori', $beritum->kategori) == 'Pengumuman' ? 'selected' : '' }}>Pengumuman</option>
                                <option value="Rema PERS" {{ old('kategori', $beritum->kategori) == 'Rema PERS' ? 'selected' : '' }}>Rema PERS</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="tanggal" class="form-label">Tanggal Berita <span class="text-red-500">*</span></label>
                            <input type="date" id="tanggal" name="tanggal" class="form-input" value="{{ old('tanggal', $beritum->tanggal->format('Y-m-d')) }}" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="author" class="form-label">Penulis <span class="text-red-500">*</span></label>
                        <input type="text" id="author" name="author" class="form-input" value="{{ old('author', $beritum->author) }}" required>
                    </div>

                    <div class="form-group">
                        <label for="thumbnail" class="form-label">Thumbnail Berita</label>
                        <input type="file" id="thumbnail" name="thumbnail" class="form-input" accept="image/*">
                        <p class="text-sm text-gray-500 mt-1">Format: JPEG, JPG, PNG, WEBP. Maksimal 2MB. Kosongkan jika tidak ingin mengubah.</p>
                        
                        @if($beritum->thumbnail)
                            <div class="mt-3">
                                <p class="text-sm font-semibold text-gray-700 mb-2">Thumbnail Saat Ini:</p>
                                <img src="{{ $beritum->thumbnail_url }}" alt="Current thumbnail" class="current-thumbnail">
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="konten" class="form-label">Konten Berita <span class="text-red-500">*</span></label>
                        <textarea id="konten" name="konten" class="form-textarea" required>{{ old('konten', $beritum->konten) }}</textarea>
                        <p class="text-sm text-gray-500 mt-1">Gunakan HTML untuk formatting. Contoh: &lt;p&gt;, &lt;h2&gt;, &lt;strong&gt;, &lt;ul&gt;, &lt;ol&gt;, dll.</p>
                    </div>

                    <div class="flex gap-3 mt-6">
                        <button type="submit" class="btn btn-primary">
                            <span>💾 Simpan Perubahan</span>
                        </button>
                        <a href="{{ route('admin.berita.index') }}" class="btn btn-secondary">
                            <span>← Kembali</span>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
