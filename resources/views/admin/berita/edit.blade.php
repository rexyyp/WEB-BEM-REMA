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
        
        /* Main Content - Offset by sidebar width */
        .main-content {
            margin-left: 270px;
            min-height: 100vh;
            background: #f8f9fa;
        }
        
        /* Form Inputs */
        input[type="text"],
        input[type="date"],
        input[type="file"],
        textarea {
            width: 100%;
            padding: 12px 16px;
            border: 1px solid #e5e7eb;
            border-radius: 8px;
            font-size: 14px;
            font-family: inherit;
            transition: all 0.2s ease;
            box-sizing: border-box;
        }
        
        input[type="text"]:focus,
        input[type="date"]:focus,
        textarea:focus {
            outline: none;
            border-color: #3b82f6;
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
        }
        
        input::placeholder {
            color: #9ca3af;
        }
        
        textarea {
            resize: vertical;
            min-height: 350px;
        }
        
        /* Editor Toolbar */
        .editor-toolbar {
            display: flex;
            gap: 4px;
            padding: 8px 12px;
            background: #ffffff;
            border: 1px solid #e5e7eb;
            border-bottom: none;
            border-radius: 8px 8px 0 0;
            margin-bottom: 0;
        }
        
        .editor-toolbar button {
            width: 36px;
            height: 36px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: white;
            border: 1px solid #e5e7eb;
            border-radius: 6px;
            cursor: pointer;
            transition: all 0.2s ease;
            color: #374151;
        }
        
        .editor-toolbar button:hover {
            background: #f3f4f6;
            border-color: #d1d5db;
        }
        
        /* Button Styles */
        .btn {
            padding: 12px 24px;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.2s ease;
            border: none;
        }
        
        .btn-primary {
            background: #2563eb;
            color: white;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        
        .btn-primary:hover {
            background: #1d4ed8;
            transform: translateY(-1px);
        }
        
        .btn-secondary {
            background: #f3f4f6;
            color: #6b7280;
            border: 1px solid #e5e7eb;
        }
        
        .btn-secondary:hover {
            background: #e5e7eb;
        }

        .current-thumbnail {
            max-width: 400px;
            border-radius: 12px;
            margin-top: 12px;
            border: 1px solid #e5e7eb;
        }
    </style>
</head>
<body>
    
    {{-- Include Sidebar --}}
    @include('admin.layouts.sidebar')

    {{-- MAIN CONTENT - Offset by 270px --}}
    <div class="main-content">
        
        {{-- Top Header Bar --}}
        <div style="background: white; border-bottom: 1px solid #e5e7eb; padding: 16px 32px;">
            <div style="display: flex; justify-content: space-between; align-items: center;">
                <h1 style="font-size: 20px; font-weight: 700; color: #111827; margin: 0;">Edit Berita</h1>
                <div style="display: flex; align-items: center; gap: 8px;">
                    <img src="{{ asset('build/assets/image/Logo Suar Sangga.png') }}" alt="Admin" style="width: 32px; height: 32px; border-radius: 50%; object-fit: cover;">
                    <span style="font-size: 14px; font-weight: 500; color: #374151;">Hi, Admin</span>
                </div>
            </div>
        </div>

        {{-- Content Area --}}
        <div style="padding: 32px; max-width: 1400px; margin: 0 auto;">
            
            {{-- Error Messages --}}
            @if ($errors->any())
                <div style="background: #fee2e2; color: #991b1b; border: 1px solid #fecaca; padding: 16px; border-radius: 12px; margin-bottom: 24px;">
                    <strong style="font-weight: 700;">Terdapat kesalahan:</strong>
                    <ul style="margin-top: 8px; margin-left: 20px; list-style: disc;">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            {{-- Form Container Card --}}
            <div style="background: white; border-radius: 16px; padding: 40px; box-shadow: 0 2px 8px rgba(0,0,0,0.06);">
                
                <form action="{{ route('admin.berita.update', $beritum) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    {{-- Two Column Layout for Top Inputs --}}
                    <div style="display: grid; grid-template-columns: 1fr 420px; gap: 32px; margin-bottom: 32px;">
                        
                        {{-- Left Column: Detail Berita --}}
                        <div>
                            {{-- Judul Berita --}}
                            <div style="margin-bottom: 24px;">
                                <label style="display: block; font-size: 14px; font-weight: 600; color: #374151; margin-bottom: 8px;">
                                    Judul Berita <span style="color: #dc2626;">*</span>
                                </label>
                                <input type="text" name="judul" placeholder="Masukkan judul berita..." value="{{ old('judul', $beritum->judul) }}" required>
                                @error('judul')
                                    <p style="color: #dc2626; font-size: 12px; margin-top: 4px;">{{ $message }}</p>
                                @enderror
                            </div>

                            {{-- Kategori --}}
                            <div style="margin-bottom: 24px;">
                                <label style="display: block; font-size: 14px; font-weight: 600; color: #374151; margin-bottom: 8px;">
                                    Kategori
                                </label>
                                <select name="kategori" style="width: 100%; padding: 12px 16px; border: 1px solid #e5e7eb; border-radius: 8px; font-size: 14px; font-family: inherit; transition: all 0.2s ease; box-sizing: border-box; background: white; cursor: pointer;">
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

                            {{-- Tanggal Publikasi --}}
                            <div style="margin-bottom: 24px;">
                                <label style="display: block; font-size: 14px; font-weight: 600; color: #374151; margin-bottom: 8px;">
                                    Tanggal Publikasi <span style="color: #dc2626;">*</span>
                                </label>
                                <input type="date" name="tanggal" value="{{ old('tanggal', $beritum->tanggal->format('Y-m-d')) }}" required>
                                @error('tanggal')
                                    <p style="color: #dc2626; font-size: 12px; margin-top: 4px;">{{ $message }}</p>
                                @enderror
                            </div>

                            {{-- Author --}}
                            <div style="margin-bottom: 24px;">
                                <label style="display: block; font-size: 14px; font-weight: 600; color: #374151; margin-bottom: 8px;">
                                    Author <span style="color: #dc2626;">*</span>
                                </label>
                                <input type="text" name="author" placeholder="Masukkan nama penulis" value="{{ old('author', $beritum->author) }}" required>
                                @error('author')
                                    <p style="color: #dc2626; font-size: 12px; margin-top: 4px;">{{ $message }}</p>
                                @enderror
                            </div>

                            {{-- Waktu Baca --}}
                            <div style="margin-bottom: 24px;">
                                <label style="display: block; font-size: 14px; font-weight: 600; color: #374151; margin-bottom: 8px;">
                                    Waktu Baca (menit) <span style="color: #dc2626;">*</span>
                                </label>
                                <input type="number" name="waktu_baca" placeholder="Estimasi waktu baca" value="{{ old('waktu_baca', $beritum->waktu_baca ?? 5) }}" min="1" max="60" required>
                                @error('waktu_baca')
                                    <p style="color: #dc2626; font-size: 12px; margin-top: 4px;">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        {{-- Right Column: Thumbnail --}}
                        <div>
                            <label style="display: block; font-size: 14px; font-weight: 600; color: #374151; margin-bottom: 8px;">
                                Thumbnail Berita
                            </label>
                            
                            <div style="border: 2px dashed #d1d5db; border-radius: 12px; padding: 24px; text-align: center; background: #fafafa;">
                                <input type="file" id="fileInput" name="thumbnail" accept="image/png,image/jpeg,image/jpg,image/webp" style="display: block; width: 100%; padding: 12px; font-size: 13px;">
                                <p style="font-size: 12px; color: #9ca3af; margin-top: 8px;">
                                    PNG, JPG, WEBP hingga 2MB. Kosongkan jika tidak ingin mengubah.
                                </p>
                            </div>
                            
                            @error('thumbnail')
                                <p style="color: #dc2626; font-size: 12px; margin-top: 8px;">{{ $message }}</p>
                            @enderror

                            {{-- Current Thumbnail --}}
                            @if($beritum->thumbnail)
                                <div style="margin-top: 16px;">
                                    <p style="font-size: 13px; font-weight: 600; color: #374151; margin-bottom: 8px;">Thumbnail Saat Ini:</p>
                                    <img src="{{ $beritum->thumbnail_url }}" alt="Current thumbnail" class="current-thumbnail">
                                </div>
                            @endif
                        </div>
                    </div>

                    {{-- Isi Artikel (Full Width) --}}
                    <div style="margin-bottom: 32px;">
                        <label style="display: block; font-size: 14px; font-weight: 600; color: #374151; margin-bottom: 8px;">
                            Isi Artikel
                        </label>
                        
                        {{-- Editor Toolbar --}}
                        <div class="editor-toolbar">
                            <button type="button" title="Bold" onclick="formatText('bold')">
                                <strong style="font-size: 15px; font-weight: 700;">B</strong>
                            </button>
                            <button type="button" title="Italic" onclick="formatText('italic')">
                                <em style="font-size: 15px; font-style: italic;">I</em>
                            </button>
                            <button type="button" title="Underline" onclick="formatText('underline')">
                                <span style="text-decoration: underline; font-size: 15px;">U</span>
                            </button>
                            <button type="button" title="Heading" onclick="formatText('heading')">
                                <strong style="font-size: 15px; font-weight: 700;">H</strong>
                            </button>
                            <button type="button" title="Bullet List" onclick="formatText('bullet')">
                                <svg style="width: 18px; height: 18px;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                                </svg>
                            </button>
                            <button type="button" title="Numbered List" onclick="formatText('number')">
                                <svg style="width: 18px; height: 18px;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"/>
                                </svg>
                            </button>
                            <button type="button" title="Insert Link" onclick="insertLink()">
                                <svg style="width: 18px; height: 18px;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"/>
                                </svg>
                            </button>
                        </div>
                        
                        {{-- Textarea --}}
                        <textarea id="articleContent" name="konten" placeholder="Mulai menulis artikel berita di sini..." required style="border-radius: 0 0 8px 8px; border-top: none;">{{ old('konten', $beritum->konten) }}</textarea>
                        @error('konten')
                            <p style="color: #dc2626; font-size: 12px; margin-top: 8px;">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Action Buttons --}}
                    <div style="display: flex; justify-content: flex-end; gap: 12px; padding-top: 24px; border-top: 1px solid #e5e7eb;">
                        <a href="{{ route('admin.berita.index') }}" class="btn btn-secondary">
                            Batal
                        </a>
                        <button type="submit" class="btn btn-primary">
                            <svg style="width: 18px; height: 18px;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-3m-1 4l-3 3m0 0l-3-3m3 3V4"/>
                            </svg>
                            <span>Simpan Perubahan</span>
                        </button>
                    </div>

                </form>

            </div>

        </div>
    </div>

    <script>
        // Text formatting functions
        function formatText(command) {
            const textarea = document.getElementById('articleContent');
            const start = textarea.selectionStart;
            const end = textarea.selectionEnd;
            const selectedText = textarea.value.substring(start, end);
            
            if (!selectedText) {
                alert('Please select text first');
                return;
            }
            
            let formattedText = '';
            switch(command) {
                case 'bold':
                    formattedText = `**${selectedText}**`;
                    break;
                case 'italic':
                    formattedText = `*${selectedText}*`;
                    break;
                case 'underline':
                    formattedText = `<u>${selectedText}</u>`;
                    break;
                case 'heading':
                    formattedText = `## ${selectedText}`;
                    break;
                case 'bullet':
                    formattedText = `- ${selectedText}`;
                    break;
                case 'number':
                    formattedText = `1. ${selectedText}`;
                    break;
            }
            
            textarea.value = textarea.value.substring(0, start) + formattedText + textarea.value.substring(end);
            textarea.focus();
        }
        
        function insertLink() {
            const url = prompt('Enter URL:');
            if (url) {
                const textarea = document.getElementById('articleContent');
                const start = textarea.selectionStart;
                const end = textarea.selectionEnd;
                const selectedText = textarea.value.substring(start, end) || 'link text';
                
                const link = `[${selectedText}](${url})`;
                textarea.value = textarea.value.substring(0, start) + link + textarea.value.substring(end);
                textarea.focus();
            }
        }
    </script>

</body>
</html>
