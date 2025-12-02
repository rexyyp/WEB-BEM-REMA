<footer class="text-white py-12 md:py-20 px-4 sm:px-6 md:px-8" style="background-color: #0d1521;">
    <div class="max-w-7xl mx-auto">
        {{-- Main Footer Content --}}
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 md:gap-12 mb-8 md:mb-12 pb-8 md:pb-12 border-b border-white/10">
            {{-- Brand --}}
            <div>
                <div class="flex items-center gap-3">
                    <img src="{{ asset('build/assets/image/Logo Suar Sangga.png') }}" alt="BEM REMA UPI Logo" class="h-12 w-auto">
                    <div>
                        <h3 class="font-black text-base text-white">BEM Rema UPI</h3>
                        <p class="text-gray-300 text-xs font-light">Kabinet Suar Sangga 2025</p>
                    </div>
                </div>
            </div>

            {{-- Navigation --}}
            <div class="md:mx-auto">
                <h4 class="text-lg font-black mb-6" style="color: #FACC15;">Navigasi</h4>
                <ul class="space-y-3 text-sm text-gray-300">
                    <li><a href="/" class="transition-colors font-light hover:opacity-80" style="color: inherit;" onmouseover="this.style.color='#FACC15'" onmouseout="this.style.color='rgb(209, 213, 219)'">Beranda</a></li>
                    <li><a href="/tentang" class="transition-colors font-light hover:opacity-80" style="color: inherit;" onmouseover="this.style.color='#FACC15'" onmouseout="this.style.color='rgb(209, 213, 219)'">Tentang Kami</a></li>
                    <li><a href="/berita" class="transition-colors font-light hover:opacity-80" style="color: inherit;" onmouseover="this.style.color='#FACC15'" onmouseout="this.style.color='rgb(209, 213, 219)'">Berita</a></li>
                </ul>
            </div>

            {{-- Social Media --}}
            <div class="md:ml-auto">
                <h4 class="text-base md:text-lg font-black mb-4 md:mb-6" style="color: #FACC15;">Ikuti Kami</h4>
                <div class="flex flex-wrap gap-3">
                    @php
                        $socials = [
                            ['icon' => 'icon_instagram.png', 'label' => 'Instagram', 'url' => 'https://www.instagram.com/bem.upi?igsh=amF0eXZsdjdvMWJm'],
                            ['icon' => 'icon_whatsapp.png', 'label' => 'WhatsApp', 'url' => 'http://wa.me/62859148451419'],
                            ['icon' => 'icon_tiktok.png', 'label' => 'Tiktok', 'url' => 'https://www.tiktok.com/@bem.upiofficial?_r=1&_t=ZS-91p4VDR6P0E'],
                            ['icon' => 'icon_linkedin.png', 'label' => 'LinkedIn', 'url' => 'https://www.linkedin.com/in/bem-rema-upi-3029a2388?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app'],
                            ['icon' => 'icon_email.png', 'label' => 'Email', 'url' => 'https://mail.google.com/mail/?view=cm&fs=1&to=suarsangga@gmail.com'],
                        ];
                    @endphp
                    @foreach($socials as $social)
                        <a
                            href="{{ $social['url'] }}"
                            target="{{ $social['url'] !== '#' ? '_blank' : '_self' }}"
                            rel="{{ $social['url'] !== '#' ? 'noopener noreferrer' : '' }}"
                            class="w-10 h-10 sm:w-12 sm:h-12 rounded-lg bg-white/10 hover:text-primary flex items-center justify-center transition-all duration-300 transform hover:scale-110 flex-shrink-0"
                            style="transition: background-color 0.3s;"
                            onmouseover="this.style.backgroundColor='#FACC15'"
                            onmouseout="this.style.backgroundColor='rgba(255, 255, 255, 0.1)'"
                            title="{{ $social['label'] }}"
                        >
                            <img src="{{ asset('build/assets/icon/' . $social['icon']) }}" alt="{{ $social['label'] }}" class="w-5 h-5 sm:w-6 sm:h-6 object-contain">
                        </a>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- Bottom Footer --}}
        <div class="flex flex-col items-center justify-center gap-4 text-sm text-gray-400 font-light text-center">
            <p>© 2025 BEM Rema UPI - All rights reserved.</p>
        </div>
    </div>
</footer>
