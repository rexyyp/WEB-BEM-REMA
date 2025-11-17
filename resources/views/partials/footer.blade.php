<footer class="bg-primary text-white py-20 px-4 md:px-8">
    <div class="max-w-7xl mx-auto">
        {{-- Main Footer Content --}}
        <div class="grid md:grid-cols-4 gap-12 mb-12 pb-12 border-b border-white/10">
            {{-- Brand --}}
            <div>
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-10 h-10 bg-accent rounded-lg flex items-center justify-center">
                        <span class="text-primary font-black text-lg">BR</span>
                    </div>
                    <span class="font-black text-xl">BEM REMA UPI</span>
                </div>
                <p class="text-gray-300 text-sm leading-relaxed font-light">
                    Organisasi mahasiswa yang berkomitmen untuk pemberdayaan dan pengembangan potensi mahasiswa melalui program inovatif berkelanjutan.
                </p>
            </div>

            {{-- Navigation --}}
            <div>
                <h4 class="text-lg font-black mb-6 text-accent">Navigasi</h4>
                <ul class="space-y-3 text-sm text-gray-300">
                    <li><a href="#" class="hover:text-accent transition-colors font-light">Beranda</a></li>
                    <li><a href="#about" class="hover:text-accent transition-colors font-light">Tentang Kami</a></li>
                    <li><a href="#leadership" class="hover:text-accent transition-colors font-light">Kepemimpinan</a></li>
                    <li><a href="#news" class="hover:text-accent transition-colors font-light">Berita</a></li>
                    <li><a href="#vision" class="hover:text-accent transition-colors font-light">Visi & Misi</a></li>
                </ul>
            </div>

            {{-- Programs --}}
            <div>
                <h4 class="text-lg font-black mb-6 text-accent">Program</h4>
                <ul class="space-y-3 text-sm text-gray-300">
                    <li><a href="#" class="hover:text-accent transition-colors font-light">Pengembangan Kepemimpinan</a></li>
                    <li><a href="#" class="hover:text-accent transition-colors font-light">Bakti Sosial</a></li>
                    <li><a href="#" class="hover:text-accent transition-colors font-light">Festival & Acara</a></li>
                    <li><a href="#" class="hover:text-accent transition-colors font-light">Workshop</a></li>
                </ul>
            </div>

            {{-- Social Media --}}
            <div>
                <h4 class="text-lg font-black mb-6 text-accent">Ikuti Kami</h4>
                <div class="flex flex-wrap gap-3">
                    @php
                        $socials = [
                            ['icon' => '📘', 'label' => 'Facebook'],
                            ['icon' => '📷', 'label' => 'Instagram'],
                            ['icon' => '𝕏', 'label' => 'Twitter'],
                            ['icon' => '🔗', 'label' => 'LinkedIn'],
                        ];
                    @endphp
                    @foreach($socials as $social)
                        <a
                            href="#"
                            class="w-12 h-12 rounded-lg bg-white/10 hover:bg-accent hover:text-primary flex items-center justify-center transition-all duration-300 transform hover:scale-110 text-lg"
                            title="{{ $social['label'] }}"
                        >
                            {{ $social['icon'] }}
                        </a>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- Bottom Footer --}}
        <div class="flex flex-col md:flex-row justify-between items-center gap-4 text-sm text-gray-400 font-light">
            <p>© 2025 BEM REMA UPI - All rights reserved.</p>
            <div class="flex gap-6">
                <a href="#" class="hover:text-white transition-colors">Privacy Policy</a>
                <a href="#" class="hover:text-white transition-colors">Terms of Service</a>
            </div>
        </div>
    </div>
</footer>
