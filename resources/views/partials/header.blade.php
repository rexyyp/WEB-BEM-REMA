<header class="fixed top-0 w-full z-50 bg-white/95 backdrop-blur-sm border-b border-gray-200">
    <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <a href="/" class="flex items-center gap-2">
                <div class="w-8 h-8 bg-primary rounded-lg flex items-center justify-center">
                    <span class="text-white font-bold text-sm">BR</span>
                </div>
                <span class="font-bold text-primary hidden sm:inline">BEM REMA UPI</span>
            </a>

            <div class="hidden md:flex items-center gap-8">
                <a href="#about" class="text-gray-600 hover:text-primary transition-colors text-sm">
                    Tentang
                </a>
                <a href="#news" class="text-gray-600 hover:text-primary transition-colors text-sm">
                    Berita
                </a>
                <a href="#vision" class="text-gray-600 hover:text-primary transition-colors text-sm">
                    Visi & Misi
                </a>
            </div>

            <button class="md:hidden" onclick="toggleMobileMenu()">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>

        <div id="mobile-menu" class="hidden md:hidden pb-4 space-y-2">
            <a href="#about" class="block text-gray-600 hover:text-primary py-2">Tentang</a>
            <a href="#news" class="block text-gray-600 hover:text-primary py-2">Berita</a>
            <a href="#vision" class="block text-gray-600 hover:text-primary py-2">Visi & Misi</a>
        </div>
    </nav>
</header>
