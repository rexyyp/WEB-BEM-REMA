<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Data Anggota - BEM REMA UPI</title>
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
        
        /* Badge Styles */
        .badge {
            padding: 4px 12px;
            border-radius: 12px;
            font-size: 12px;
            font-weight: 500;
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
                <h1 style="font-size: 20px; font-weight: 700; color: #111827;">Dashboard</h1>
                <div style="display: flex; align-items: center; gap: 16px;">
                    <div style="display: flex; align-items: center; gap: 8px;">
                        <img src="{{ asset('build/assets/image/Logo Suar Sangga.png') }}" alt="Admin" style="width: 32px; height: 32px; border-radius: 50%; object-fit: cover;">
                        <span style="font-size: 14px; font-weight: 500; color: #374151;">Hi, Admin</span>
                    </div>
                </div>
            </div>
        </div>

        {{-- Content Area --}}
        <div style="padding: 32px;">
            
            {{-- Welcome Section with Button --}}
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 32px;">
                <div>
                    <h2 style="font-size: 28px; font-weight: 700; color: #111827; margin-bottom: 8px;">Kelola Data Anggota</h2>
                    <p style="font-size: 15px; color: #6b7280;">Kelola konten dan pantau performa website Kabinet Indonesia</p>
                </div>
            </div>

            {{-- Data Anggota Table --}}
            <div style="background: white; border-radius: 16px; padding: 24px; box-shadow: 0 2px 8px rgba(0,0,0,0.06);">
                <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 24px;">
                    <div>
                        <h3 style="font-size: 18px; font-weight: 700; color: #111827; margin-bottom: 4px;">Daftar Anggota Kabinet</h3>
                        <p style="font-size: 14px; color: #6b7280;">Total anggota aktif dalam kabinet saat ini</p>
                    </div>
                    <button style="display: flex; align-items: center; gap: 8px; padding: 10px 20px; background: #1e3a8a; color: white; font-size: 13px; font-weight: 600; border-radius: 8px; border: none; cursor: pointer;">
                        <svg style="width: 16px; height: 16px;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                        </svg>
                        Tambah Anggota
                    </button>
                </div>
                
                <div style="overflow-x: auto;">
                    <table style="width: 100%; border-collapse: collapse;">
                        <thead>
                            <tr style="border-bottom: 2px solid #e5e7eb;">
                                <th style="text-align: left; padding: 12px 16px; font-size: 13px; font-weight: 600; color: #6b7280;">Foto</th>
                                <th style="text-align: left; padding: 12px 16px; font-size: 13px; font-weight: 600; color: #6b7280;">Nama Lengkap</th>
                                <th style="text-align: left; padding: 12px 16px; font-size: 13px; font-weight: 600; color: #6b7280;">Jabatan</th>
                                <th style="text-align: left; padding: 12px 16px; font-size: 13px; font-weight: 600; color: #6b7280;">Departemen/Kementerian</th>
                                <th style="text-align: center; padding: 12px 16px; font-size: 13px; font-weight: 600; color: #6b7280;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- Row 1: Siti Nurhaliza - Ketua --}}
                            <tr style="border-bottom: 1px solid #f3f4f6;">
                                <td style="padding: 16px;">
                                    <img src="https://i.pravatar.cc/150?img=5" alt="Siti Nurhaliza" style="width: 48px; height: 48px; border-radius: 50%; object-fit: cover;">
                                </td>
                                <td style="padding: 16px;">
                                    <span style="font-size: 14px; font-weight: 600; color: #2563eb;">Siti Nurhaliza</span>
                                </td>
                                <td style="padding: 16px;">
                                    <span class="badge" style="background: #fef3c7; color: #92400e;">Ketua</span>
                                </td>
                                <td style="padding: 16px; font-size: 14px; color: #6b7280;">Kemenkoan Eksternal</td>
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

                            {{-- Row 2: Ahmad Rizki - Wakil Ketua --}}
                            <tr style="border-bottom: 1px solid #f3f4f6;">
                                <td style="padding: 16px;">
                                    <img src="https://i.pravatar.cc/150?img=12" alt="Ahmad Rizki" style="width: 48px; height: 48px; border-radius: 50%; object-fit: cover;">
                                </td>
                                <td style="padding: 16px;">
                                    <span style="font-size: 14px; font-weight: 600; color: #2563eb;">Ahmad Rizki</span>
                                </td>
                                <td style="padding: 16px;">
                                    <span class="badge" style="background: #dbeafe; color: #1e40af;">Wakil Ketua</span>
                                </td>
                                <td style="padding: 16px; font-size: 14px; color: #6b7280;">Kemenkoan PSDM</td>
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

                            {{-- Row 3: Budi Santoso - Menko --}}
                            <tr style="border-bottom: 1px solid #f3f4f6;">
                                <td style="padding: 16px;">
                                    <img src="https://i.pravatar.cc/150?img=13" alt="Budi Santoso" style="width: 48px; height: 48px; border-radius: 50%; object-fit: cover;">
                                </td>
                                <td style="padding: 16px;">
                                    <span style="font-size: 14px; font-weight: 600; color: #2563eb;">Budi Santoso</span>
                                </td>
                                <td style="padding: 16px;">
                                    <span class="badge" style="background: #e9d5ff; color: #6b21a8;">Menko</span>
                                </td>
                                <td style="padding: 16px; font-size: 14px; color: #6b7280;">Kementerian Pendidikan</td>
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

                            {{-- Row 4: Maya Sari - Menteri --}}
                            <tr style="border-bottom: 1px solid #f3f4f6;">
                                <td style="padding: 16px;">
                                    <img src="https://i.pravatar.cc/150?img=9" alt="Maya Sari" style="width: 48px; height: 48px; border-radius: 50%; object-fit: cover;">
                                </td>
                                <td style="padding: 16px;">
                                    <span style="font-size: 14px; font-weight: 600; color: #2563eb;">Maya Sari</span>
                                </td>
                                <td style="padding: 16px;">
                                    <span class="badge" style="background: #d1fae5; color: #065f46;">Menteri</span>
                                </td>
                                <td style="padding: 16px; font-size: 14px; color: #6b7280;">Direktorat Media</td>
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

                            {{-- Row 5: Doni Pratama - Dirjen --}}
                            <tr>
                                <td style="padding: 16px;">
                                    <img src="https://i.pravatar.cc/150?img=14" alt="Doni Pratama" style="width: 48px; height: 48px; border-radius: 50%; object-fit: cover;">
                                </td>
                                <td style="padding: 16px;">
                                    <span style="font-size: 14px; font-weight: 600; color: #2563eb;">Doni Pratama</span>
                                </td>
                                <td style="padding: 16px;">
                                    <span class="badge" style="background: #ddd6fe; color: #5b21b6;">Dirjen</span>
                                </td>
                                <td style="padding: 16px; font-size: 14px; color: #6b7280;">Direktorat Keuangan</td>
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
                    <p style="font-size: 14px; color: #6b7280; margin: 0;">Menampilkan 1 - 5 dari 120 anggota</p>
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

</body>
</html>
