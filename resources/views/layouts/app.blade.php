<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', '3Sayap - Finger-Lickin\' Good Halal Fried Chicken')</title>
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Google Fonts - Bebas Neue for headers, Poppins for body -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        :root {
            --primary-orange: #FF6B35;
            --secondary-gold: #FFB627;
            --dark-brown: #2C1810;
            --cream: #FFF8F0;
            --red-accent: #D32F2F;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--cream);
            color: var(--dark-brown);
            overflow-x: hidden;
        }
        
        h1, h2, h3, h4, h5, h6, .heading-font {
            font-family: 'Bebas Neue', cursive;
            letter-spacing: 2px;
        }
        
        /* Navbar Styles */
        .navbar {
            background: linear-gradient(135deg, var(--dark-brown) 0%, #1a0f0a 100%);
            backdrop-filter: blur(10px);
            transition: all 0.3s ease;
        }
        
        .navbar.scrolled {
            box-shadow: 0 4px 20px rgba(255, 107, 53, 0.3);
        }
        
        .nav-link {
            position: relative;
            color: var(--cream);
            transition: all 0.3s ease;
            padding: 8px 16px;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-weight: 600;
            font-size: 14px;
        }
        
        .nav-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            width: 0;
            height: 3px;
            background: linear-gradient(90deg, var(--primary-orange), var(--secondary-gold));
            transition: all 0.3s ease;
            transform: translateX(-50%);
        }
        
        .nav-link:hover::after,
        .nav-link.active::after {
            width: 80%;
        }
        
        .nav-link:hover {
            color: var(--secondary-gold);
            transform: translateY(-2px);
        }
        
        .nav-link.active {
            color: var(--primary-orange);
        }
        
        /* Mobile Menu Styles */
        .mobile-menu {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease;
        }
        
        .mobile-menu.open {
            max-height: 500px;
        }
        
        /* Button Styles */
        .btn-primary {
            background: linear-gradient(135deg, var(--primary-orange), var(--red-accent));
            color: white;
            padding: 12px 32px;
            border-radius: 50px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
            box-shadow: 0 4px 15px rgba(255, 107, 53, 0.4);
        }
        
        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(255, 107, 53, 0.6);
        }
        
        .btn-secondary {
            background: transparent;
            color: var(--primary-orange);
            padding: 12px 32px;
            border-radius: 50px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s ease;
            border: 2px solid var(--primary-orange);
            cursor: pointer;
        }
        
        .btn-secondary:hover {
            background: var(--primary-orange);
            color: white;
            transform: translateY(-3px);
        }
        
        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @keyframes slideInLeft {
            from {
                opacity: 0;
                transform: translateX(-50px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
        
        @keyframes slideInRight {
            from {
                opacity: 0;
                transform: translateX(50px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }
        
        .animate-fadeInUp {
            animation: fadeInUp 0.8s ease-out forwards;
        }
        
        .animate-slideInLeft {
            animation: slideInLeft 0.8s ease-out forwards;
        }
        
        .animate-slideInRight {
            animation: slideInRight 0.8s ease-out forwards;
        }
        
        .animate-float {
            animation: float 3s ease-in-out infinite;
        }
        
        /* Background Pattern */
        .bg-pattern {
            background-image: 
                repeating-linear-gradient(45deg, transparent, transparent 10px, rgba(255, 107, 53, 0.03) 10px, rgba(255, 107, 53, 0.03) 20px);
        }
        
        /* Footer Styles */
        footer {
            background: linear-gradient(135deg, var(--dark-brown) 0%, #1a0f0a 100%);
            color: var(--cream);
        }
        
        .footer-link {
            color: var(--cream);
            transition: all 0.3s ease;
        }
        
        .footer-link:hover {
            color: var(--secondary-gold);
            transform: translateX(5px);
        }
        
        .social-icon {
            width: 45px;
            height: 45px;
            background: rgba(255, 107, 53, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
            color: var(--cream);
        }
        
        .social-icon:hover {
            background: var(--primary-orange);
            transform: translateY(-5px) rotate(360deg);
            box-shadow: 0 8px 20px rgba(255, 107, 53, 0.4);
        }

        /* Toast Notification */
        .toast {
            position: fixed;
            bottom: 1rem;
            right: 1rem;
            background-color: #10b981;
            color: white;
            padding: 1rem 1.5rem;
            border-radius: 0.5rem;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
            z-index: 9999;
            animation: slideInRight 0.3s ease-out;
        }

        @keyframes slideInRight {
            from {
                transform: translateX(100%);
                opacity: 0;
            }
            to {
                transform: translateX(0);
                opacity: 1;
            }
        }
    </style>
    
    @stack('styles')
</head>
<body>
    <!-- Navigation -->
    @include('partials.navbar')
    
    <!-- Main Content -->
    <main>
        @yield('content')
    </main>
    
    <!-- Footer -->
    @include('partials.footer')

    <!-- Cart Sidebar -->
    <div id="cartSidebar" class="fixed inset-y-0 right-0 w-full sm:w-96 bg-gray-900 shadow-2xl transform translate-x-full transition-transform duration-300 z-50">
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
                    <span id="cartTotal" class="text-2xl font-bold text-orange-500">RM 0.00</span>
                </div>
                <a href="{{ route('orders') }}" class="btn-primary w-full text-center block">
                    Proceed to Checkout
                </a>
            </div>
        </div>
    </div>

    <!-- Cart Overlay -->
    <div id="cartOverlay" class="fixed inset-0 bg-black bg-opacity-50 hidden z-40" onclick="toggleCart()"></div>
    
    <!-- Scripts -->
    <script>
        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
        
        // Mobile menu toggle
        function toggleMobileMenu() {
            const menu = document.getElementById('mobileMenu');
            menu.classList.toggle('open');
        }
        
        // Active link highlighting
        const currentPath = window.location.pathname;
        const navLinks = document.querySelectorAll('.nav-link');
        
        navLinks.forEach(link => {
            if (link.getAttribute('href') === currentPath) {
                link.classList.add('active');
            }
        });
        
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
        
        // Intersection Observer for scroll animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -100px 0px'
        };
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);
        
        document.addEventListener('DOMContentLoaded', () => {
            const animatedElements = document.querySelectorAll('.animate-on-scroll');
            animatedElements.forEach(el => {
                el.style.opacity = '0';
                el.style.transform = 'translateY(30px)';
                el.style.transition = 'all 0.6s ease-out';
                observer.observe(el);
            });
        });

        // ============================================
        // CART FUNCTIONALITY
        // ============================================
        
        // Toggle Cart Sidebar
        function toggleCart() {
            const sidebar = document.getElementById('cartSidebar');
            const overlay = document.getElementById('cartOverlay');
            
            sidebar.classList.toggle('translate-x-full');
            overlay.classList.toggle('hidden');
            
            // Update cart display when opening
            if (!sidebar.classList.contains('translate-x-full')) {
                displayCartItems();
            }
        }
        
        // Add item to cart
        function handleAddToCart(button) {
            const productName = button.getAttribute('data-product-name');
            const productPrice = parseFloat(button.getAttribute('data-product-price'));
            const productId = button.getAttribute('data-product-id');
            
            // Get cart from localStorage
            let cart = JSON.parse(localStorage.getItem('cart') || '[]');
            
            // Check if item already exists
            const existingItem = cart.find(item => item.id === productId);
            
            if (existingItem) {
                existingItem.quantity += 1;
            } else {
                cart.push({
                    id: productId,
                    name: productName,
                    price: productPrice,
                    quantity: 1
                });
            }
            
            // Save to localStorage
            localStorage.setItem('cart', JSON.stringify(cart));
            
            // Update cart count badge
            updateCartCount(cart.reduce((sum, item) => sum + item.quantity, 0));
            
            // Show success toast
            showToast('Added to cart!');
            
            // Add button animation
            button.innerHTML = '<i class="fas fa-check mr-2"></i>Added!';
            button.classList.add('bg-green-500');
            
            setTimeout(() => {
                button.innerHTML = '<i class="fas fa-cart-plus mr-2"></i>Add to Cart';
                button.classList.remove('bg-green-500');
            }, 1500);
        }
        
        // Update cart count badge
        function updateCartCount(count) {
            const cartCount = document.getElementById('cartCount');
            const cartCountMobile = document.getElementById('cartCountMobile');
            
            if (count > 0) {
                if (cartCount) {
                    cartCount.textContent = count;
                    cartCount.classList.remove('hidden');
                }
                if (cartCountMobile) {
                    cartCountMobile.textContent = count;
                    cartCountMobile.classList.remove('hidden');
                }
            } else {
                if (cartCount) cartCount.classList.add('hidden');
                if (cartCountMobile) cartCountMobile.classList.add('hidden');
            }
        }
        
        // Display cart items in sidebar
        function displayCartItems() {
            const cart = JSON.parse(localStorage.getItem('cart') || '[]');
            const cartItemsContainer = document.getElementById('cartItems');
            const cartTotal = document.getElementById('cartTotal');
            
            if (cart.length === 0) {
                cartItemsContainer.innerHTML = '<p class="text-gray-400 text-center py-8">Your cart is empty</p>';
                cartTotal.textContent = 'RM 0.00';
                return;
            }
            
            let total = 0;
            let html = '';
            
            cart.forEach(item => {
                const itemTotal = item.price * item.quantity;
                total += itemTotal;
                
                html += `
                    <div class="flex items-center gap-4 mb-4 pb-4 border-b border-gray-700">
                        <div class="flex-1">
                            <h4 class="text-white font-semibold">${item.name}</h4>
                            <p class="text-gray-400 text-sm">RM ${item.price.toFixed(2)} each</p>
                        </div>
                        <div class="flex items-center gap-2">
                            <button onclick="updateCartQuantity('${item.id}', -1)" class="w-8 h-8 bg-gray-700 text-white rounded hover:bg-gray-600">
                                <i class="fas fa-minus text-xs"></i>
                            </button>
                            <span class="text-white w-8 text-center">${item.quantity}</span>
                            <button onclick="updateCartQuantity('${item.id}', 1)" class="w-8 h-8 bg-gray-700 text-white rounded hover:bg-gray-600">
                                <i class="fas fa-plus text-xs"></i>
                            </button>
                        </div>
                        <div class="text-right">
                            <p class="text-orange-500 font-bold">RM ${itemTotal.toFixed(2)}</p>
                            <button onclick="removeFromCart('${item.id}')" class="text-red-500 text-sm hover:text-red-400">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </div>
                `;
            });
            
            cartItemsContainer.innerHTML = html;
            cartTotal.textContent = `RM ${total.toFixed(2)}`;
        }
        
        // Update item quantity
        function updateCartQuantity(productId, change) {
            let cart = JSON.parse(localStorage.getItem('cart') || '[]');
            const item = cart.find(item => item.id === productId);
            
            if (item) {
                item.quantity += change;
                
                if (item.quantity <= 0) {
                    cart = cart.filter(item => item.id !== productId);
                }
                
                localStorage.setItem('cart', JSON.stringify(cart));
                updateCartCount(cart.reduce((sum, item) => sum + item.quantity, 0));
                displayCartItems();
            }
        }
        
        // Remove item from cart
        function removeFromCart(productId) {
            let cart = JSON.parse(localStorage.getItem('cart') || '[]');
            cart = cart.filter(item => item.id !== productId);
            
            localStorage.setItem('cart', JSON.stringify(cart));
            updateCartCount(cart.reduce((sum, item) => sum + item.quantity, 0));
            displayCartItems();
            showToast('Item removed from cart');
        }
        
        // Show toast notification
        function showToast(message) {
            const toast = document.createElement('div');
            toast.className = 'toast';
            toast.innerHTML = '<i class="fas fa-check-circle mr-2"></i>' + message;
            document.body.appendChild(toast);
            
            setTimeout(() => {
                toast.style.transition = 'all 0.3s ease-out';
                toast.style.transform = 'translateX(120%)';
                toast.style.opacity = '0';
                setTimeout(() => toast.remove(), 300);
            }, 2000);
        }
        
        // Load cart count on page load
        document.addEventListener('DOMContentLoaded', function() {
            const cart = JSON.parse(localStorage.getItem('cart') || '[]');
            const totalItems = cart.reduce((sum, item) => sum + item.quantity, 0);
            updateCartCount(totalItems);
        });
    </script>
    
    @stack('scripts')
</body>
</html>