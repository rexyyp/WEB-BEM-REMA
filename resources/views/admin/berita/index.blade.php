<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Data Berita - BEM REMA UPI</title>
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
        
        /* Table Hover */
        tbody tr:hover {
            background: #f8fafc;
        }
        
        /* Search Input */
        .search-input {
            padding: 10px 16px 10px 40px;
            border: 1px solid #e5e7eb;
            border-radius: 8px;
            font-size: 14px;
            width: 280px;
            transition: all 0.2s ease;
        }
        
        .search-input:focus {
            outline: none;
            border-color: #3b82f6;
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
        }
        
        .search-container {
            position: relative;
        }
        
        .search-icon {
            position: absolute;
            left: 12px;
            top: 50%;
            transform: translateY(-50%);
            color: #9ca3af;
        }
        
        /* Button Hover */
        button:hover, a:hover {
            opacity: 0.9;
            transform: translateY(-1px);
        }
        
        /* Smooth transitions */
        button, a {
            transition: all 0.2s ease;
        }
        
        /* Thumbnail */
        .thumbnail {
            width: 80px;
            height: 60px;
            object-fit: cover;
            border-radius: 8px;
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
        <div style="padding: 32px;">
            
            {{-- Header Section with Button --}}
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 32px;">
                <div>
                    <h2 style="font-size: 28px; font-weight: 700; color: #111827; margin-bottom: 8px;">Kelola Data Berita</h2>
                    <p style="font-size: 15px; color: #6b7280;">Kelola konten dan pantau performa website Kabinet Indonesia</p>
                </div>
                <a href="{{ route('admin.berita.create') }}" style="display: flex; align-items: center; gap: 8px; padding: 12px 24px; background: #1e3a8a; color: white; font-size: 14px; font-weight: 600; border-radius: 10px; border: none; cursor: pointer; box-shadow: 0 2px 8px rgba(30, 58, 138, 0.2); white-space: nowrap; text-decoration: none;">
                    <svg style="width: 18px; height: 18px;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                    </svg>
                    <span>Tulis Berita Baru</span>
                </a>
            </div>

            {{-- Berita Table Card --}}
            <div style="background: white; border-radius: 16px; padding: 24px; box-shadow: 0 2px 8px rgba(0,0,0,0.06);">
                <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 24px;">
                    <div>
                        <h3 style="font-size: 18px; font-weight: 700; color: #111827; margin-bottom: 4px;">Daftar Berita</h3>
                    </div>
                    
                    {{-- Search Input --}}
                    <div class="search-container">
                        <svg class="search-icon" style="width: 18px; height: 18px;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                        </svg>
                        <input type="text" class="search-input" placeholder="Cari berita...">
                    </div>
                </div>
                
                <div style="overflow-x: auto;">
                    <table style="width: 100%; border-collapse: collapse;">
                        <thead>
                            <tr style="border-bottom: 2px solid #e5e7eb;">
                                <th style="text-align: left; padding: 12px 16px; font-size: 13px; font-weight: 600; color: #6b7280; width: 100px;">Foto</th>
                                <th style="text-align: left; padding: 12px 16px; font-size: 13px; font-weight: 600; color: #6b7280; width: 200px;">Judul Berita</th>
                                <th style="text-align: left; padding: 12px 16px; font-size: 13px; font-weight: 600; color: #6b7280; width: 130px;">Kategori</th>
                                <th style="text-align: left; padding: 12px 16px; font-size: 13px; font-weight: 600; color: #6b7280;">Deskripsi</th>
                                <th style="text-align: left; padding: 12px 16px; font-size: 13px; font-weight: 600; color: #6b7280; width: 150px;">Tanggal Terbit</th>
                                <th style="text-align: center; padding: 12px 16px; font-size: 13px; font-weight: 600; color: #6b7280; width: 100px;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- Row 1: Pelantikan Kabinet --}}
                            <tr style="border-bottom: 1px solid #f3f4f6;">
                                <td style="padding: 16px;">
                                    <img src="https://images.unsplash.com/photo-1577415124269-fc1140a69e91?w=400&h=300&fit=crop" alt="Pelantikan Kabinet" class="thumbnail">
                                </td>
                                <td style="padding: 16px;">
                                    <span style="font-size: 14px; font-weight: 600; color: #111827;">Pelantikan Kabinet di ...</span>
                                </td>
                                <td style="padding: 16px;">
                                    <span style="display: inline-block; padding: 4px 12px; background: #dbeafe; color: #1e40af; border-radius: 12px; font-size: 12px; font-weight: 500;">Organisasi</span>
                                </td>
                                <td style="padding: 16px;">
                                    <p style="font-size: 14px; color: #6b7280; margin: 0; line-height: 1.5;">Perusahaan kami dengan bangga mengumumkan pembukaan kantor baru di Jakarta yang akan melayani...</p>
                                </td>
                                <td style="padding: 16px; font-size: 14px; color: #6b7280;">14 November 2025</td>
                                <td style="padding: 16px;">
                                    <div style="display: flex; justify-content: center; gap: 8px;">
                                        <button style="padding: 8px; background: transparent; border: none; color: #2563eb; cursor: pointer; border-radius: 6px;">
                                            <svg style="width: 16px; height: 16px;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/>
                                            </svg>
                                        </button>
                                        <button style="padding: 8px; background: transparent; border: none; color: #dc2626; cursor: pointer; border-radius: 6px;">
                                            <svg style="width: 16px; height: 16px;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                            </svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>

                            {{-- Row 2: Konferensi Teknologi --}}
                            <tr style="border-bottom: 1px solid #f3f4f6;">
                                <td style="padding: 16px;">
                                    <img src="https://images.unsplash.com/photo-1540575467063-178a50c2df87?w=400&h=300&fit=crop" alt="Konferensi Teknologi" class="thumbnail">
                                </td>
                                <td style="padding: 16px;">
                                    <span style="font-size: 14px; font-weight: 600; color: #111827;">Konferensi Teknologi 2025</span>
                                </td>
                                <td style="padding: 16px;">
                                    <span style="display: inline-block; padding: 4px 12px; background: #e9d5ff; color: #6b21a8; border-radius: 12px; font-size: 12px; font-weight: 500;">Teknologi</span>
                                </td>
                                <td style="padding: 16px;">
                                    <p style="font-size: 14px; color: #6b7280; margin: 0; line-height: 1.5;">Acara konferensi teknologi terbesar tahun ini akan diselenggarakan pada bulan Desember...</p>
                                </td>
                                <td style="padding: 16px; font-size: 14px; color: #6b7280;">12 November 2025</td>
                                <td style="padding: 16px;">
                                    <div style="display: flex; justify-content: center; gap: 8px;">
                                        <button style="padding: 8px; background: transparent; border: none; color: #2563eb; cursor: pointer; border-radius: 6px;">
                                            <svg style="width: 16px; height: 16px;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/>
                                            </svg>
                                        </button>
                                        <button style="padding: 8px; background: transparent; border: none; color: #dc2626; cursor: pointer; border-radius: 6px;">
                                            <svg style="width: 16px; height: 16px;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                            </svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>

                            {{-- Row 3: Penghargaan Best Company --}}
                            <tr>
                                <td style="padding: 16px;">
                                    <img src="https://images.unsplash.com/photo-1511578314322-379afb476865?w=400&h=300&fit=crop" alt="Best Company Award" class="thumbnail">
                                </td>
                                <td style="padding: 16px;">
                                    <span style="font-size: 14px; font-weight: 600; color: #111827;">Penghargaan Best Company 2025</span>
                                </td>
                                <td style="padding: 16px;">
                                    <span style="display: inline-block; padding: 4px 12px; background: #fef3c7; color: #92400e; border-radius: 12px; font-size: 12px; font-weight: 500;">Prestasi</span>
                                </td>
                                <td style="padding: 16px;">
                                    <p style="font-size: 14px; color: #6b7280; margin: 0; line-height: 1.5;">Tim kami berhasil meraih penghargaan sebagai perusahaan terbaik dalam kategori inovasi...</p>
                                </td>
                                <td style="padding: 16px; font-size: 14px; color: #6b7280;">10 November 2025</td>
                                <td style="padding: 16px;">
                                    <div style="display: flex; justify-content: center; gap: 8px;">
                                        <button style="padding: 8px; background: transparent; border: none; color: #2563eb; cursor: pointer; border-radius: 6px;">
                                            <svg style="width: 16px; height: 16px;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/>
                                            </svg>
                                        </button>
                                        <button style="padding: 8px; background: transparent; border: none; color: #dc2626; cursor: pointer; border-radius: 6px;">
                                            <svg style="width: 16px; height: 16px;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                            </svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                {{-- Pagination --}}
                <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 24px; padding-top: 24px; border-top: 1px solid #e5e7eb;">
                    <p style="font-size: 14px; color: #6b7280; margin: 0;">Menampilkan 1 - 3 dari 48 berita</p>
                    <div style="display: flex; gap: 8px;">
                        <button style="padding: 8px 12px; background: white; border: 1px solid #e5e7eb; border-radius: 6px; color: #6b7280; font-size: 14px; cursor: pointer;">Previous</button>
                        <button style="padding: 8px 12px; background: #2563eb; border: none; border-radius: 6px; color: white; font-size: 14px; cursor: pointer;">1</button>
                        <button style="padding: 8px 12px; background: white; border: 1px solid #e5e7eb; border-radius: 6px; color: #6b7280; font-size: 14px; cursor: pointer;">2</button>
                        <button style="padding: 8px 12px; background: white; border: 1px solid #e5e7eb; border-radius: 6px; color: #6b7280; font-size: 14px; cursor: pointer;">3</button>
                        <button style="padding: 8px 12px; background: white; border: 1px solid #e5e7eb; border-radius: 6px; color: #6b7280; font-size: 14px; cursor: pointer;">Next</button>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script>
        // Search functionality
        const searchInput = document.querySelector('.search-input');
        searchInput.addEventListener('input', function(e) {
            const searchTerm = e.target.value.toLowerCase();
            console.log('Searching for:', searchTerm);
            // Add your search logic here
        });
    </script>

</body>
</html>
