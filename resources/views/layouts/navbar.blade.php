<nav class="navbar fixed w-full top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
            <!-- Logo -->
            <div class="flex-shrink-0">
                <a href="{{ route('home') }}" class="flex items-center space-x-3 group">
                    <div class="w-12 h-12 bg-gradient-to-br from-orange-500 to-red-600 rounded-full flex items-center justify-center transform group-hover:rotate-12 transition-transform duration-300">
                        <i class="fas fa-drumstick-bite text-white text-2xl"></i>
                    </div>
                    <span class="heading-font text-3xl font-bold text-white">
                        3<span class="text-orange-500">Sayap</span>
                    </span>
                </a>
            </div>
            
            <!-- Desktop Navigation -->
            <div class="hidden md:flex items-center space-x-1">
                <a href="{{ route('home') }}" class="nav-link">Home</a>
                <a href="{{ route('menu') }}" class="nav-link">Menu</a>
                <a href="{{ route('about') }}" class="nav-link">About Us</a>
                <a href="{{ route('locations') }}" class="nav-link">Locations</a>
                <a href="{{ route('contact') }}" class="nav-link">Contact</a>
            </div>
            
            <!-- Order Button -->
            <div class="hidden md:flex items-center space-x-4">
                <a href="{{ route('orders') }}" class="btn-primary inline-flex items-center">
                    <i class="fas fa-shopping-cart mr-2"></i>
                    Order Now
                </a>
            </div>
            
            <!-- Mobile menu button -->
            <div class="md:hidden">
                <button onclick="toggleMobileMenu()" class="text-white focus:outline-none">
                    <i class="fas fa-bars text-2xl"></i>
                </button>
            </div>
        </div>
        
        <!-- Mobile Navigation -->
        <div id="mobileMenu" class="mobile-menu md:hidden bg-gradient-to-b from-gray-900 to-gray-800 rounded-lg mt-2 overflow-hidden">
            <div class="px-4 py-3 space-y-3">
                <a href="{{ route('home') }}" class="block nav-link text-center">Home</a>
                <a href="{{ route('menu') }}" class="block nav-link text-center">Menu</a>
                <a href="{{ route('about') }}" class="block nav-link text-center">About Us</a>
                <a href="{{ route('locations') }}" class="block nav-link text-center">Locations</a>
                <a href="{{ route('contact') }}" class="block nav-link text-center">Contact</a>
                <a href="{{ route('orders') }}" class="block btn-primary text-center mt-4">
                    <i class="fas fa-shopping-cart mr-2"></i>
                    Order Now
                </a>
            </div>
        </div>
    </div>
</nav>

<!-- Spacer to prevent content from going under fixed navbar -->
<div class="h-20"></div>
