<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tulis Berita Baru - BEM REMA UPI</title>
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
        
        /* Upload Area */
        .upload-area {
            border: 2px dashed #d1d5db;
            border-radius: 12px;
            padding: 60px 24px;
            text-align: center;
            cursor: pointer;
            transition: all 0.2s ease;
            background: #fafafa;
        }
        
        .upload-area:hover {
            border-color: #3b82f6;
            background: #f0f9ff;
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
                <h1 style="font-size: 20px; font-weight: 700; color: #111827; margin: 0;">Dashboard</h1>
                <div style="display: flex; align-items: center; gap: 8px;">
                    <img src="{{ asset('build/assets/image/Logo Suar Sangga.png') }}" alt="Admin" style="width: 32px; height: 32px; border-radius: 50%; object-fit: cover;">
                    <span style="font-size: 14px; font-weight: 500; color: #374151;">Hi, Admin</span>
                </div>
            </div>
        </div>

        {{-- Content Area --}}
        <div style="padding: 32px; max-width: 1400px; margin: 0 auto;">
            
            {{-- Form Container Card --}}
            <div style="background: white; border-radius: 16px; padding: 40px; box-shadow: 0 2px 8px rgba(0,0,0,0.06);">
                
                <form action="{{ route('admin.berita.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{-- Two Column Layout for Top Inputs --}}
                    <div style="display: grid; grid-template-columns: 1fr 420px; gap: 32px; margin-bottom: 32px;">
                        
                        {{-- Left Column: Detail Berita --}}
                        <div>
                            {{-- Judul Berita --}}
                            <div style="margin-bottom: 24px;">
                                <label style="display: block; font-size: 14px; font-weight: 600; color: #374151; margin-bottom: 8px;">
                                    Judul Berita <span style="color: #dc2626;">*</span>
                                </label>
                                <input type="text" name="judul" placeholder="Masukkan judul berita..." value="{{ old('judul') }}" required>
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
                                    <option value="Program Kerja" {{ old('kategori') == 'Program Kerja' ? 'selected' : '' }}>Program Kerja</option>
                                    <option value="Workshop" {{ old('kategori') == 'Workshop' ? 'selected' : '' }}>Workshop</option>
                                    <option value="Kegiatan" {{ old('kategori') == 'Kegiatan' ? 'selected' : '' }}>Kegiatan</option>
                                    <option value="Pelantikan" {{ old('kategori') == 'Pelantikan' ? 'selected' : '' }}>Pelantikan</option>
                                    <option value="Prestasi" {{ old('kategori') == 'Prestasi' ? 'selected' : '' }}>Prestasi</option>
                                    <option value="Pengumuman" {{ old('kategori') == 'Pengumuman' ? 'selected' : '' }}>Pengumuman</option>
                                    <option value="Rema PERS" {{ old('kategori') == 'Rema PERS' ? 'selected' : '' }}>Rema PERS</option>
                                </select>
                            </div>

                            {{-- Tanggal Publikasi --}}
                            <div style="margin-bottom: 24px;">
                                <label style="display: block; font-size: 14px; font-weight: 600; color: #374151; margin-bottom: 8px;">
                                    Tanggal Publikasi <span style="color: #dc2626;">*</span>
                                </label>
                                <input type="date" name="tanggal" value="{{ old('tanggal', date('Y-m-d')) }}" required>
                                @error('tanggal')
                                    <p style="color: #dc2626; font-size: 12px; margin-top: 4px;">{{ $message }}</p>
                                @enderror
                            </div>

                            {{-- Author --}}
                            <div style="margin-bottom: 24px;">
                                <label style="display: block; font-size: 14px; font-weight: 600; color: #374151; margin-bottom: 8px;">
                                    Author <span style="color: #dc2626;">*</span>
                                </label>
                                <input type="text" name="author" placeholder="Masukkan nama penulis" value="{{ old('author', 'Admin BEM REMA') }}" required>
                                @error('author')
                                    <p style="color: #dc2626; font-size: 12px; margin-top: 4px;">{{ $message }}</p>
                                @enderror
                            </div>

                            {{-- Waktu Baca --}}
                            <div style="margin-bottom: 24px;">
                                <label style="display: block; font-size: 14px; font-weight: 600; color: #374151; margin-bottom: 8px;">
                                    Waktu Baca (menit) <span style="color: #dc2626;">*</span>
                                </label>
                                <input type="number" name="waktu_baca" placeholder="Estimasi waktu baca" value="{{ old('waktu_baca', 5) }}" min="1" max="60" required>
                                @error('waktu_baca')
                                    <p style="color: #dc2626; font-size: 12px; margin-top: 4px;">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        {{-- Right Column: Upload Gambar --}}
                        <div>
                            <label style="display: block; font-size: 14px; font-weight: 600; color: #374151; margin-bottom: 8px;">
                                Upload Thumbnail
                            </label>
                            
                            <div class="upload-area" onclick="document.getElementById('fileInput').click()">
                                <div style="margin-bottom: 16px;">
                                    <svg style="width: 64px; height: 64px; margin: 0 auto; color: #9ca3af;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"/>
                                    </svg>
                                </div>
                                <p style="font-size: 15px; font-weight: 600; color: #6b7280; margin-bottom: 8px;">
                                    + Upload Gambar
                                </p>
                                <p style="font-size: 14px; color: #9ca3af; margin-bottom: 4px;">
                                    Drag & drop atau klik untuk memilih file
                                </p>
                                <p style="font-size: 12px; color: #9ca3af;">
                                    PNG, JPG, WEBP hingga 2MB
                                </p>
                            </div>
                            <input type="file" id="fileInput" name="thumbnail" accept="image/png,image/jpeg,image/jpg,image/webp" style="display: none;">
                            
                            @error('thumbnail')
                                <p style="color: #dc2626; font-size: 12px; margin-top: 8px;">{{ $message }}</p>
                            @enderror

                            {{-- Preview Image --}}
                            <div id="imagePreview" style="margin-top: 16px; display: none;">
                                <img id="previewImg" style="width: 100%; border-radius: 12px; border: 1px solid #e5e7eb;">
                                <button type="button" onclick="removeImage()" style="margin-top: 8px; padding: 8px 16px; background: #fee2e2; color: #dc2626; border: none; border-radius: 6px; font-size: 13px; cursor: pointer;">
                                    Hapus Gambar
                                </button>
                            </div>
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
                        <textarea id="articleContent" name="konten" placeholder="Mulai menulis artikel berita di sini...&#10;&#10;Gunakan HTML untuk formatting:&#10;- <p>Paragraf</p>&#10;- <h2>Heading 2</h2>&#10;- <strong>Tebal</strong>&#10;- <em>Miring</em>&#10;- <ul><li>List</li></ul>" required style="border-radius: 0 0 8px 8px; border-top: none;">{{ old('konten') }}</textarea>
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
                            <span>Simpan Berita</span>
                        </button>
                    </div>

                </form>

            </div>

        </div>
    </div>

    <script>
        // File upload handling with preview
        const fileInput = document.getElementById('fileInput');
        const uploadArea = document.querySelector('.upload-area');
        const imagePreview = document.getElementById('imagePreview');
        const previewImg = document.getElementById('previewImg');
        
        fileInput.addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                // Validate file type
                if (!file.type.match('image.*')) {
                    alert('Please select an image file (PNG, JPG)');
                    return;
                }
                
                // Validate file size (10MB)
                if (file.size > 10 * 1024 * 1024) {
                    alert('File size must be less than 10MB');
                    return;
                }
                
                // Show preview
                const reader = new FileReader();
                reader.onload = function(e) {
                    previewImg.src = e.target.result;
                    imagePreview.style.display = 'block';
                    uploadArea.style.display = 'none';
                };
                reader.readAsDataURL(file);
            }
        });
        
        // Remove image
        function removeImage() {
            fileInput.value = '';
            imagePreview.style.display = 'none';
            uploadArea.style.display = 'block';
        }
        
        // Drag and drop
        uploadArea.addEventListener('dragover', function(e) {
            e.preventDefault();
            this.style.borderColor = '#3b82f6';
            this.style.background = '#f0f9ff';
        });
        
        uploadArea.addEventListener('dragleave', function(e) {
            e.preventDefault();
            this.style.borderColor = '#d1d5db';
            this.style.background = '#fafafa';
        });
        
        uploadArea.addEventListener('drop', function(e) {
            e.preventDefault();
            this.style.borderColor = '#d1d5db';
            this.style.background = '#fafafa';
            
            const files = e.dataTransfer.files;
            if (files.length > 0) {
                fileInput.files = files;
                fileInput.dispatchEvent(new Event('change'));
            }
        });
        
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
