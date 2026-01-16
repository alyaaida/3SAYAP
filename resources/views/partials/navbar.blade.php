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
            
            <!-- Desktop Actions (Cart, Login/Logout, Order Button) -->
            <div class="hidden md:flex items-center space-x-4">
                <!-- Cart Button -->
                <button onclick="toggleCart()" class="relative text-white hover:text-orange-500 transition-colors p-2">
                    <i class="fas fa-shopping-cart text-xl"></i>
                    <span id="cartCount" class="absolute -top-1 -right-1 bg-orange-500 text-white text-xs font-bold w-5 h-5 rounded-full flex items-center justify-center hidden">
                        0
                    </span>
                </button>

                <!-- Login/Logout Button -->
                @auth
                    <a href="{{ route('logout') }}" 
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                       class="inline-flex items-center px-4 py-2 border border-gray-600 rounded-lg text-white hover:bg-gray-800 transition-colors">
                        <i class="fas fa-sign-out-alt mr-2"></i>
                        Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                        @csrf
                    </form>
                @else
                    <a href="{{ route('login') }}" class="inline-flex items-center px-4 py-2 border border-gray-600 rounded-lg text-white hover:bg-gray-800 transition-colors">
                        <i class="fas fa-user mr-2"></i>
                        Login
                    </a>
                @endauth
                
                <!-- Order Now Button -->
                <a href="{{ route('orders') }}" class="btn-primary inline-flex items-center">
                    <i class="fas fa-shopping-cart mr-2"></i>
                    Order Now
                </a>
            </div>
            
            <!-- Mobile menu button -->
            <div class="md:hidden flex items-center space-x-2">
                <!-- Mobile Cart Button -->
                <button onclick="toggleCart()" class="relative text-white hover:text-orange-500 transition-colors p-2">
                    <i class="fas fa-shopping-cart text-xl"></i>
                    <span id="cartCountMobile" class="absolute -top-1 -right-1 bg-orange-500 text-white text-xs font-bold w-5 h-5 rounded-full flex items-center justify-center hidden">
                        0
                    </span>
                </button>
                
                <!-- Mobile Menu Toggle -->
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
                
                <!-- Mobile Auth Buttons -->
                <div class="flex gap-4 pt-4 border-t border-gray-700">
                    @auth
                        <a href="{{ route('logout') }}" 
                           onclick="event.preventDefault(); document.getElementById('logout-form-mobile').submit();"
                           class="flex-1 inline-flex items-center justify-center px-4 py-2 border border-gray-600 rounded-lg text-white hover:bg-gray-800 transition-colors">
                            <i class="fas fa-sign-out-alt mr-2"></i>
                            Logout
                        </a>
                        <form id="logout-form-mobile" action="{{ route('logout') }}" method="POST" class="hidden">
                            @csrf
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="flex-1 inline-flex items-center justify-center px-4 py-2 border border-gray-600 rounded-lg text-white hover:bg-gray-800 transition-colors">
                            <i class="fas fa-user mr-2"></i>
                            Login
                        </a>
                    @endauth
                    
                    <a href="{{ route('orders') }}" class="flex-1 btn-primary text-center">
                        Order Now
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>

<!-- Cart Sidebar (Add this before closing body tag) -->
<div id="cartSidebar" class="fixed inset-y-0 right-0 w-96 bg-gray-900 shadow-2xl transform translate-x-full transition-transform duration-300 z-50">
    <div class="h-full flex flex-col">
        <!-- Cart Header -->
        <div class="flex items-center justify-between p-6 border-b border-gray-700">
            <h2 class="text-2xl font-bold text-white">Your Cart</h2>
            <button onclick="toggleCart()" class="text-gray-400 hover:text-white transition-colors">
                <i class="fas fa-times text-2xl"></i>
            </button>
        </div>
        
        <!-- Cart Items -->
        <div class="flex-1 overflow-y-auto p-6">
            <div id="cartItems">
                <p class="text-gray-400 text-center py-8">Your cart is empty</p>
            </div>
        </div>
        
        <!-- Cart Footer -->
        <div class="border-t border-gray-700 p-6">
            <div class="flex justify-between items-center mb-4">
                <span class="text-lg text-gray-300">Total:</span>
                <span id="cartTotal" class="text-2xl font-bold text-orange-500">$0.00</span>
            </div>
            <a href="{{ route('orders') }}" class="btn-primary w-full text-center block">
                Proceed to Checkout
            </a>
        </div>
    </div>
</div>

<!-- Cart Overlay -->
<div id="cartOverlay" class="fixed inset-0 bg-black bg-opacity-50 hidden z-40" onclick="toggleCart()"></div>

<!-- Spacer to prevent content from going under fixed navbar -->
<div class="h-20"></div>

<script>
function toggleMobileMenu() {
    const menu = document.getElementById('mobileMenu');
    menu.classList.toggle('active');
}

function toggleCart() {
    const sidebar = document.getElementById('cartSidebar');
    const overlay = document.getElementById('cartOverlay');
    
    sidebar.classList.toggle('translate-x-full');
    overlay.classList.toggle('hidden');
}

// Update cart count (call this function when items are added to cart)
function updateCartCount(count) {
    const cartCount = document.getElementById('cartCount');
    const cartCountMobile = document.getElementById('cartCountMobile');
    
    if (count > 0) {
        cartCount.textContent = count;
        cartCountMobile.textContent = count;
        cartCount.classList.remove('hidden');
        cartCountMobile.classList.remove('hidden');
    } else {
        cartCount.classList.add('hidden');
        cartCountMobile.classList.add('hidden');
    }
}

// Example: updateCartCount(3);
</script>