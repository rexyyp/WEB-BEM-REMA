<header class="fixed top-0 w-full z-50 bg-white/95 backdrop-blur-sm border-b border-gray-200 transition-all duration-300" id="navbar">
    <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20 py-2">
            <a href="/" class="flex items-center gap-3 group" style="margin-left: -100px;">
                <img src="{{ asset('build/assets/image/Logo Suar Sangga.png') }}" alt="BEM REMA UPI Logo" class="h-12 w-auto transition-transform duration-300 group-hover:scale-110 group-hover:rotate-3">
                <div>
                    <div style="font-weight: 700; color: #000000; font-size: 16px; line-height: 1.2; display: block; transition: color 0.3s;" class="group-hover:text-yellow-600">BEM REMA UPI</div>
                    <div style="font-size: 11px; color: #000000; line-height: 1.2; margin-top: 2px; display: block;">KABINET SUAR SANGGA 2025</div>
                </div>
            </a>

            <div class="hidden md:flex items-center gap-8">
                <a href="/" class="nav-link relative text-gray-600 hover:text-primary transition-all duration-300 text-sm pb-1 {{ request()->is('/') ? 'border-b-2 border-primary text-primary font-semibold' : '' }}">
                    <span>Beranda</span>
                    <span class="nav-underline"></span>
                </a>
                <a href="/tentang" class="nav-link relative text-gray-600 hover:text-primary transition-all duration-300 text-sm pb-1 {{ request()->is('tentang') ? 'border-b-2 border-primary text-primary font-semibold' : '' }}">
                    <span>Tentang</span>
                    <span class="nav-underline"></span>
                </a>
                <a href="/berita" class="nav-link relative text-gray-600 hover:text-primary transition-all duration-300 text-sm pb-1 {{ request()->is('berita') ? 'border-b-2 border-primary text-primary font-semibold' : '' }}">
                    <span>Berita</span>
                    <span class="nav-underline"></span>
                </a>
            </div>

            <button class="md:hidden transition-transform duration-300 hover:scale-110" onclick="toggleMobileMenu()">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>

        <div id="mobile-menu" class="hidden md:hidden pb-4 space-y-2">
            <a href="/" class="block text-gray-600 hover:text-primary py-2 transition-all duration-300 hover:translate-x-2 {{ request()->is('/') ? 'text-primary font-semibold border-l-4 border-primary pl-2' : '' }}">Beranda</a>
            <a href="/tentang" class="block text-gray-600 hover:text-primary py-2 transition-all duration-300 hover:translate-x-2 {{ request()->is('tentang') ? 'text-primary font-semibold border-l-4 border-primary pl-2' : '' }}">Tentang</a>
            <a href="/berita" class="block text-gray-600 hover:text-primary py-2 transition-all duration-300 hover:translate-x-2 {{ request()->is('berita') ? 'text-primary font-semibold border-l-4 border-primary pl-2' : '' }}">Berita</a>
        </div>
    </nav>
</header>

<style>
/* Navbar scroll effect */
#navbar.scrolled {
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    background: rgba(255, 255, 255, 0.98);
}

/* Nav link hover effect */
.nav-link {
    position: relative;
    overflow: hidden;
}

.nav-underline {
    position: absolute;
    bottom: -2px;
    left: 0;
    width: 0;
    height: 2px;
    background: linear-gradient(to right, #FACC15, #F59E0B);
    transition: width 0.3s ease;
}

.nav-link:hover .nav-underline {
    width: 100%;
}

.nav-link:hover {
    transform: translateY(-2px);
}
</style>

<script>
// Navbar scroll effect
window.addEventListener('scroll', function() {
    const navbar = document.getElementById('navbar');
    if (window.scrollY > 50) {
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }
});
</script>
