<?php

namespace Database\Seeders;

use App\Models\Berita;
use Illuminate\Database\Seeder;

class BeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Berita 1: Workshop Soft Skills
        Berita::create([
            'judul' => 'BEM REMA UPI Gelar Workshop Pengembangan Soft Skills Mahasiswa',
            'kategori' => 'Workshop',
            'tanggal' => '2025-11-15',
            'author' => 'Admin BEM REMA',
            'thumbnail' => 'beritas/workshop-soft-skills.jpg',
            'waktu_baca' => 7,
            'konten' => '<p>BEM REMA UPI kembali mengadakan workshop pengembangan soft skills yang bertujuan untuk meningkatkan kemampuan mahasiswa dalam menghadapi tantangan dunia kerja. Workshop ini diselenggarakan pada hari Jumat, 15 November 2025 di Gedung Student Center UPI Bandung.</p>

<p>Workshop kali ini menghadirkan berbagai narasumber kompeten dari berbagai perusahaan terkemuka dan praktisi berpengalaman. Materi yang disampaikan meliputi public speaking, leadership, critical thinking, dan teamwork yang sangat dibutuhkan di era modern ini.</p>

<h2>Rangkaian Acara</h2>

<p>Acara dimulai pukul 08.00 WIB dengan registrasi peserta yang diikuti oleh lebih dari 300 mahasiswa dari berbagai fakultas. Antusiasme peserta sangat tinggi, terlihat dari banyaknya pertanyaan yang diajukan kepada narasumber.</p>

<h3>Materi yang Disampaikan</h3>

<ol>
    <li><strong>Public Speaking & Communication</strong> - Teknik berbicara di depan umum dengan percaya diri dan cara berkomunikasi efektif dalam berbagai situasi profesional.</li>
    <li><strong>Leadership & Team Management</strong> - Pengembangan jiwa kepemimpinan dan cara mengelola tim dengan efektif untuk mencapai tujuan bersama.</li>
    <li><strong>Critical Thinking & Problem Solving</strong> - Melatih kemampuan berpikir kritis dan analitis dalam menghadapi berbagai permasalahan kompleks.</li>
    <li><strong>Teamwork & Collaboration</strong> - Membangun kemampuan bekerja sama dalam tim dan berkolaborasi dengan berbagai karakter individu.</li>
</ol>

<p>Selain sesi presentasi, workshop ini juga dilengkapi dengan praktik langsung dan role play yang membuat peserta dapat merasakan langsung penerapan teori yang telah disampaikan. Metode interaktif ini terbukti sangat efektif dalam meningkatkan pemahaman peserta.</p>

<h3>Testimoni Peserta</h3>

<blockquote>"Workshop ini sangat bermanfaat dan aplikatif. Saya mendapat banyak insight baru tentang bagaimana membangun personal branding dan meningkatkan kemampuan komunikasi." - Sarah, Mahasiswa FPIPS</blockquote>

<p>Workshop ini mendapat respon positif dari para peserta. Banyak mahasiswa yang merasa terbantu dengan materi yang disampaikan dan berencana untuk menerapkannya dalam kehidupan sehari-hari maupun persiapan menghadapi dunia kerja.</p>

<p>BEM REMA UPI berkomitmen untuk terus mengadakan kegiatan-kegiatan yang bermanfaat bagi mahasiswa. Pantau terus media sosial dan website kami untuk informasi workshop dan kegiatan menarik lainnya.</p>',
            'views' => 1234,
        ]);

        // Berita 2: Pelantikan Kabinet
        Berita::create([
            'judul' => 'Kabinet Suar Sangga Resmi Dilantik untuk Periode 2025',
            'kategori' => 'Pelantikan',
            'tanggal' => '2025-11-10',
            'author' => 'Tim Redaksi',
            'thumbnail' => 'beritas/pelantikan-kabinet.jpg',
            'waktu_baca' => 5,
            'konten' => '<p>Pelantikan Kabinet Suar Sangga menandai dimulainya periode kepengurusan baru BEM REMA UPI dengan visi dan misi yang inovatif untuk memajukan organisasi kemahasiswaan di lingkungan UPI.</p>

<h2>Upacara Pelantikan</h2>

<p>Acara pelantikan berlangsung khidmat di Aula Universitas Pendidikan Indonesia dengan dihadiri oleh pejabat universitas, dosen pembimbing, serta seluruh civitas akademika REMA UPI. Pelantikan dipimpin langsung oleh Rektor UPI dan disaksikan oleh ratusan mahasiswa.</p>

<p>Kabinet Suar Sangga membawa semangat baru dengan tagline "Bersinar Bersama untuk REMA yang Lebih Baik". Kabinet ini terdiri dari pengurus inti dan berbagai kementerian yang siap melayani mahasiswa.</p>

<h3>Visi dan Misi</h3>

<p>Dalam sambutan pelantikannya, Ketua BEM REMA periode 2025 menyampaikan komitmen untuk:</p>

<ul>
    <li>Meningkatkan kualitas pelayanan kepada mahasiswa REMA UPI</li>
    <li>Mengembangkan program-program inovatif dan berkelanjutan</li>
    <li>Memperkuat sinergi antar fakultas dan organisasi kemahasiswaan</li>
    <li>Menjadi wadah aspirasi dan pengembangan potensi mahasiswa</li>
</ul>

<p>BEM REMA UPI periode 2025 siap menjadi jembatan antara mahasiswa dan pihak universitas dalam mewujudkan kampus yang lebih baik.</p>',
            'views' => 2156,
        ]);

        // Berita 3: Rapat Koordinasi
        Berita::create([
            'judul' => 'Rapat Koordinasi Kementerian BEM REMA UPI 2025',
            'kategori' => 'Kegiatan',
            'tanggal' => '2025-11-08',
            'author' => 'Humas BEM REMA',
            'thumbnail' => 'beritas/rapat-koordinasi.jpg',
            'waktu_baca' => 6,
            'konten' => '<p>Rapat koordinasi kementerian BEM REMA UPI periode 2025 dilaksanakan untuk membahas program kerja semester ini dengan fokus pada peningkatan kualitas layanan kepada mahasiswa dan penguatan koordinasi antar kementerian.</p>

<h2>Agenda Rapat</h2>

<p>Rapat yang berlangsung selama satu hari penuh ini membahas berbagai agenda penting, mulai dari evaluasi program kerja sebelumnya hingga perencanaan program-program baru yang lebih inovatif dan berdampak.</p>

<h3>Pembahasan Program Kerja</h3>

<p>Setiap kementerian mempresentasikan rencana program kerja mereka untuk semester ini:</p>

<ul>
    <li><strong>Kementerian Pendidikan</strong> - Program pelatihan akademik dan peningkatan IPK mahasiswa</li>
    <li><strong>Kementerian Sosial Masyarakat</strong> - Kegiatan bakti sosial dan pengabdian masyarakat</li>
    <li><strong>Kementerian Kewirausahaan</strong> - Workshop bisnis dan pendampingan UMKM mahasiswa</li>
    <li><strong>Kementerian Olahraga</strong> - Turnamen antar fakultas dan pembinaan atlet mahasiswa</li>
</ul>

<p>Rapat diakhiri dengan komitmen bersama untuk saling mendukung dan berkolaborasi dalam setiap program kerja demi kesuksesan BEM REMA UPI periode 2025.</p>',
            'views' => 856,
        ]);

        // Generate 7 berita tambahan menggunakan factory
        Berita::factory()->count(7)->create();
    }
}
