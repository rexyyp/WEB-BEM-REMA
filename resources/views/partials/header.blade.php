<header class="fixed top-0 w-full z-50 bg-white/95 backdrop-blur-sm border-b border-gray-200">
    <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20 py-2">
            <a href="/" class="flex items-center gap-3" style="margin-left: -100px;">
                <img src="{{ asset('build/assets/image/Logo Suar Sangga.png') }}" alt="BEM REMA UPI Logo" class="h-12 w-auto">
                <div>
                    <div style="font-weight: 700; color: #000000; font-size: 16px; line-height: 1.2; display: block;">BEM REMA UPI</div>
                    <div style="font-size: 11px; color: #000000; line-height: 1.2; margin-top: 2px; display: block;">KABINET SUAR SANGGA 2025</div>
                </div>
            </a>

            <div class="hidden md:flex items-center gap-8">
                <a href="/" class="text-gray-600 hover:text-primary transition-colors text-sm pb-1 {{ request()->is('/') ? 'border-b-2 border-primary text-primary font-semibold' : '' }}">
                    Beranda
                </a>
                <a href="/tentang" class="text-gray-600 hover:text-primary transition-colors text-sm pb-1 {{ request()->is('tentang') ? 'border-b-2 border-primary text-primary font-semibold' : '' }}">
                    Tentang
                </a>
                <a href="/berita" class="text-gray-600 hover:text-primary transition-colors text-sm pb-1 {{ request()->is('berita') ? 'border-b-2 border-primary text-primary font-semibold' : '' }}">
                    Berita
                </a>
            </div>

            <button class="md:hidden" onclick="toggleMobileMenu()">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>

        <div id="mobile-menu" class="hidden md:hidden pb-4 space-y-2">
            <a href="/" class="block text-gray-600 hover:text-primary py-2 {{ request()->is('/') ? 'text-primary font-semibold border-l-4 border-primary pl-2' : '' }}">Beranda</a>
            <a href="/tentang" class="block text-gray-600 hover:text-primary py-2 {{ request()->is('tentang') ? 'text-primary font-semibold border-l-4 border-primary pl-2' : '' }}">Tentang</a>
            <a href="/berita" class="block text-gray-600 hover:text-primary py-2 {{ request()->is('berita') ? 'text-primary font-semibold border-l-4 border-primary pl-2' : '' }}">Berita</a>
        </div>
    </nav>
</header>
