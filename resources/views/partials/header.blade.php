<header class="fixed top-0 w-full z-50 glass-card shadow-lg" id="main-header">
    <div class="absolute inset-0 bg-gradient-to-r from-blue-50/30 via-white/30 to-yellow-50/30 opacity-50"></div>
    <nav class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20 py-2">
            <a href="/" class="flex items-center gap-3" style="margin-left: -100px;">
                <img src="{{ asset('build/assets/image/Logo Suar Sangga.png') }}" alt="BEM REMA UPI Logo" class="h-12 w-auto">
                <div>
                    <div class="font-bold text-base leading-tight navbar-logo-text" style="color: #000000;">BEM REMA UPI</div>
                    <div class="text-xs leading-tight mt-0.5 navbar-logo-text" style="color: #000000;">KABINET SUAR SANGGA 2025</div>
                </div>
            </a>

            <div class="hidden md:flex items-center gap-8">
                <a href="/" class="navbar-link relative text-gray-600 hover:text-primary transition-all duration-300 text-sm pb-1 font-medium group magnetic-effect {{ request()->is('/') ? 'text-primary font-semibold' : '' }}">
                    Beranda
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-yellow-400 to-blue-500 group-hover:w-full transition-all duration-300 {{ request()->is('/') ? 'w-full' : '' }}"></span>
                </a>
                <a href="/tentang" class="navbar-link relative text-gray-600 hover:text-primary transition-all duration-300 text-sm pb-1 font-medium group magnetic-effect {{ request()->is('tentang') ? 'text-primary font-semibold' : '' }}">
                    Tentang
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-yellow-400 to-blue-500 group-hover:w-full transition-all duration-300 {{ request()->is('tentang') ? 'w-full' : '' }}"></span>
                </a>
                <a href="/berita" class="navbar-link relative text-gray-600 hover:text-primary transition-all duration-300 text-sm pb-1 font-medium group magnetic-effect {{ request()->is('berita') ? 'text-primary font-semibold' : '' }}">
                    Berita
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-yellow-400 to-blue-500 group-hover:w-full transition-all duration-300 {{ request()->is('berita') ? 'w-full' : '' }}"></span>
                </a>
            </div>

            <button class="md:hidden navbar-mobile-btn" onclick="toggleMobileMenu()">
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

<script>
// Navbar color change on scroll (only on homepage)
if (window.location.pathname === '/') {
    window.addEventListener('scroll', function() {
        const header = document.getElementById('main-header');
        const navbarLinks = document.querySelectorAll('.navbar-link');
        const navbarLogoTexts = document.querySelectorAll('.navbar-logo-text');
        const mobileBtn = document.querySelector('.navbar-mobile-btn');
        
        // Check if we're in hero section (approximately first 100vh)
        const heroHeight = window.innerHeight;
        const scrollPosition = window.scrollY;
        
        if (scrollPosition < heroHeight - 100) {
            // In hero section - white text for ALL links including active
            navbarLinks.forEach(link => {
                link.style.color = '#ffffff';
            });
            navbarLogoTexts.forEach(text => {
                text.style.color = '#ffffff';
            });
            if (mobileBtn) {
                mobileBtn.style.color = '#ffffff';
            }
        } else {
            // Below hero section - restore default colors
            navbarLinks.forEach(link => {
                link.style.color = '';
            });
            navbarLogoTexts.forEach(text => {
                text.style.color = '#000000';
            });
            if (mobileBtn) {
                mobileBtn.style.color = '';
            }
        }
    });
    
    // Trigger on load
    window.dispatchEvent(new Event('scroll'));
}
</script>

