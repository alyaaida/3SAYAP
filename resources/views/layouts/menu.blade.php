@extends('layouts.app')

@section('title', 'Our Menu - 3Sayap')

@section('content')


<!-- Page Header -->
<section class="bg-gradient-to-br from-orange-600 to-red-600 py-20 relative overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-10 right-10 w-64 h-64 bg-yellow-400 rounded-full blur-3xl"></div>
    </div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
        <h1 class="heading-font text-6xl md:text-7xl font-bold text-white mb-6 animate-fadeInUp">
            OUR MENU
        </h1>
        <p class="text-xl text-orange-100 max-w-2xl mx-auto animate-fadeInUp" style="animation-delay: 0.1s;">
            Discover our delicious selection of halal fried chicken and sides
        </p>
    </div>
</section>

<!-- Menu Categories -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Category Tabs -->
        <div class="flex flex-wrap justify-center gap-4 mb-16 animate-on-scroll">
            <button class="category-tab active px-6 py-3 bg-orange-500 text-white rounded-full font-semibold hover:bg-orange-600 transition" data-category="all">
                All Items
            </button>
            <button class="category-tab px-6 py-3 bg-gray-200 text-gray-700 rounded-full font-semibold hover:bg-gray-300 transition" data-category="chicken">
                Fried Chicken
            </button>
            <button class="category-tab px-6 py-3 bg-gray-200 text-gray-700 rounded-full font-semibold hover:bg-gray-300 transition" data-category="burgers">
                Burgers
            </button>
            <button class="category-tab px-6 py-3 bg-gray-200 text-gray-700 rounded-full font-semibold hover:bg-gray-300 transition" data-category="sides">
                Sides
            </button>
            <button class="category-tab px-6 py-3 bg-gray-200 text-gray-700 rounded-full font-semibold hover:bg-gray-300 transition" data-category="drinks">
                Drinks
            </button>
        </div>
        
        <!-- Menu Items Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <!-- Item 1 - Original Recipe Chicken -->
            <div class="menu-item chicken bg-white rounded-2xl shadow-lg overflow-hidden transform hover:scale-105 transition-all duration-300 animate-on-scroll">
                <div class="aspect-square bg-gradient-to-br from-orange-200 to-red-200 flex items-center justify-center relative group">
                    <i class="fas fa-drumstick-bite text-7xl text-orange-500"></i>
                    <div class="absolute top-4 right-4 bg-red-500 text-white px-3 py-1 rounded-full text-sm font-bold">
                        BESTSELLER
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="heading-font text-2xl font-bold text-gray-900 mb-2">Original Recipe Chicken</h3>
                    <p class="text-gray-600 mb-4">Classic crispy chicken with our secret 11 herbs & spices blend</p>
                    <div class="flex justify-between items-center mb-4">
                        <div>
                            <span class="text-2xl font-bold text-orange-600">RM 12.90</span>
                            <span class="text-sm text-gray-500 ml-2">per piece</span>
                        </div>
                    </div>
                    <button onclick="handleAddToCart(this)"
                            data-product-name="Original Recipe Chicken"
                            data-product-price="12.90"
                            data-product-id="1"
                            class="w-full bg-orange-500 text-white py-3 rounded-full font-semibold hover:bg-orange-600 transition flex items-center justify-center">
                        <i class="fas fa-cart-plus mr-2"></i>
                        Add to Cart
                    </button>
                </div>
            </div>
            
            <!-- Item 2 - Spicy Crispy Wings -->
            <div class="menu-item chicken bg-white rounded-2xl shadow-lg overflow-hidden transform hover:scale-105 transition-all duration-300 animate-on-scroll" style="animation-delay: 0.1s;">
                <div class="aspect-square bg-gradient-to-br from-red-300 to-orange-300 flex items-center justify-center relative">
                    <i class="fas fa-fire text-7xl text-red-600"></i>
                    <div class="absolute top-4 right-4 bg-red-600 text-white px-3 py-1 rounded-full text-sm font-bold">
                        🔥 SPICY
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="heading-font text-2xl font-bold text-gray-900 mb-2">Spicy Crispy Wings</h3>
                    <p class="text-gray-600 mb-4">Extra crispy wings with our signature spicy coating</p>
                    <div class="flex justify-between items-center mb-4">
                        <div>
                            <span class="text-2xl font-bold text-orange-600">RM 15.90</span>
                            <span class="text-sm text-gray-500 ml-2">6 pieces</span>
                        </div>
                    </div>
                    <button onclick="handleAddToCart(this)"
                            data-product-name="Spicy Crispy Wings"
                            data-product-price="15.90"
                            data-product-id="2"
                            class="w-full bg-orange-500 text-white py-3 rounded-full font-semibold hover:bg-orange-600 transition flex items-center justify-center">
                        <i class="fas fa-cart-plus mr-2"></i>
                        Add to Cart
                    </button>
                </div>
            </div>
            
            <!-- Item 3 - Family Bucket -->
            <div class="menu-item chicken bg-white rounded-2xl shadow-lg overflow-hidden transform hover:scale-105 transition-all duration-300 animate-on-scroll" style="animation-delay: 0.2s;">
                <div class="aspect-square bg-gradient-to-br from-yellow-200 to-orange-200 flex items-center justify-center relative">
                    <i class="fas fa-box text-7xl text-yellow-600"></i>
                    <div class="absolute top-4 right-4 bg-green-500 text-white px-3 py-1 rounded-full text-sm font-bold">
                        FAMILY SIZE
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="heading-font text-2xl font-bold text-gray-900 mb-2">Family Bucket</h3>
                    <p class="text-gray-600 mb-4">12 pieces of mixed chicken parts perfect for sharing</p>
                    <div class="flex justify-between items-center mb-4">
                        <div>
                            <span class="text-2xl font-bold text-orange-600">RM 45.90</span>
                            <span class="text-sm text-gray-500 ml-2">12 pieces</span>
                        </div>
                    </div>
                    <button onclick="handleAddToCart(this)"
                            data-product-name="Family Bucket"
                            data-product-price="45.90"
                            data-product-id="3"
                            class="w-full bg-orange-500 text-white py-3 rounded-full font-semibold hover:bg-orange-600 transition flex items-center justify-center">
                        <i class="fas fa-cart-plus mr-2"></i>
                        Add to Cart
                    </button>
                </div>
            </div>
            
            <!-- Item 4 - Crispy Chicken Burger -->
            <div class="menu-item burgers bg-white rounded-2xl shadow-lg overflow-hidden transform hover:scale-105 transition-all duration-300 animate-on-scroll">
                <div class="aspect-square bg-gradient-to-br from-orange-200 to-yellow-200 flex items-center justify-center">
                    <i class="fas fa-burger text-7xl text-orange-600"></i>
                </div>
                <div class="p-6">
                    <h3 class="heading-font text-2xl font-bold text-gray-900 mb-2">Crispy Chicken Burger</h3>
                    <p class="text-gray-600 mb-4">Juicy crispy chicken breast in a toasted bun with special sauce</p>
                    <div class="flex justify-between items-center mb-4">
                        <div>
                            <span class="text-2xl font-bold text-orange-600">RM 13.90</span>
                        </div>
                    </div>
                    <button onclick="handleAddToCart(this)"
                            data-product-name="Crispy Chicken Burger"
                            data-product-price="13.90"
                            data-product-id="4"
                            class="w-full bg-orange-500 text-white py-3 rounded-full font-semibold hover:bg-orange-600 transition flex items-center justify-center">
                        <i class="fas fa-cart-plus mr-2"></i>
                        Add to Cart
                    </button>
                </div>
            </div>
            
            <!-- Item 5 - Spicy Chicken Burger -->
            <div class="menu-item burgers bg-white rounded-2xl shadow-lg overflow-hidden transform hover:scale-105 transition-all duration-300 animate-on-scroll" style="animation-delay: 0.1s;">
                <div class="aspect-square bg-gradient-to-br from-red-200 to-orange-200 flex items-center justify-center relative">
                    <i class="fas fa-burger text-7xl text-red-600"></i>
                    <div class="absolute top-4 right-4 bg-red-600 text-white px-3 py-1 rounded-full text-sm font-bold">
                        🔥 SPICY
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="heading-font text-2xl font-bold text-gray-900 mb-2">Spicy Chicken Burger</h3>
                    <p class="text-gray-600 mb-4">For those who like it hot! Extra spicy chicken patty</p>
                    <div class="flex justify-between items-center mb-4">
                        <div>
                            <span class="text-2xl font-bold text-orange-600">RM 14.90</span>
                        </div>
                    </div>
                    <button onclick="handleAddToCart(this)"
                            data-product-name="Spicy Chicken Burger"
                            data-product-price="14.90"
                            data-product-id="5"
                            class="w-full bg-orange-500 text-white py-3 rounded-full font-semibold hover:bg-orange-600 transition flex items-center justify-center">
                        <i class="fas fa-cart-plus mr-2"></i>
                        Add to Cart
                    </button>
                </div>
            </div>
            
            <!-- Item 6 - Golden Fries -->
            <div class="menu-item sides bg-white rounded-2xl shadow-lg overflow-hidden transform hover:scale-105 transition-all duration-300 animate-on-scroll" style="animation-delay: 0.2s;">
                <div class="aspect-square bg-gradient-to-br from-yellow-300 to-orange-200 flex items-center justify-center">
                    <i class="fas fa-potato text-7xl text-yellow-700"></i>
                </div>
                <div class="p-6">
                    <h3 class="heading-font text-2xl font-bold text-gray-900 mb-2">Golden Fries</h3>
                    <p class="text-gray-600 mb-4">Crispy golden fries seasoned to perfection</p>
                    <div class="flex justify-between items-center mb-4">
                        <div>
                            <span class="text-2xl font-bold text-orange-600">RM 6.90</span>
                            <span class="text-sm text-gray-500 ml-2">Regular</span>
                        </div>
                    </div>
                    <button onclick="handleAddToCart(this)"
                            data-product-name="Golden Fries"
                            data-product-price="6.90"
                            data-product-id="6"
                            class="w-full bg-orange-500 text-white py-3 rounded-full font-semibold hover:bg-orange-600 transition flex items-center justify-center">
                        <i class="fas fa-cart-plus mr-2"></i>
                        Add to Cart
                    </button>
                </div>
            </div>
            
            <!-- Item 7 - Coleslaw -->
            <div class="menu-item sides bg-white rounded-2xl shadow-lg overflow-hidden transform hover:scale-105 transition-all duration-300 animate-on-scroll">
                <div class="aspect-square bg-gradient-to-br from-green-200 to-yellow-200 flex items-center justify-center">
                    <i class="fas fa-salad text-7xl text-green-600"></i>
                </div>
                <div class="p-6">
                    <h3 class="heading-font text-2xl font-bold text-gray-900 mb-2">Coleslaw</h3>
                    <p class="text-gray-600 mb-4">Fresh and creamy coleslaw salad</p>
                    <div class="flex justify-between items-center mb-4">
                        <div>
                            <span class="text-2xl font-bold text-orange-600">RM 5.90</span>
                        </div>
                    </div>
                    <button onclick="handleAddToCart(this)"
                            data-product-name="Coleslaw"
                            data-product-price="5.90"
                            data-product-id="7"
                            class="w-full bg-orange-500 text-white py-3 rounded-full font-semibold hover:bg-orange-600 transition flex items-center justify-center">
                        <i class="fas fa-cart-plus mr-2"></i>
                        Add to Cart
                    </button>
                </div>
            </div>
            
            <!-- Item 8 - Soft Drinks -->
            <div class="menu-item drinks bg-white rounded-2xl shadow-lg overflow-hidden transform hover:scale-105 transition-all duration-300 animate-on-scroll" style="animation-delay: 0.1s;">
                <div class="aspect-square bg-gradient-to-br from-blue-200 to-purple-200 flex items-center justify-center">
                    <i class="fas fa-glass-water text-7xl text-blue-600"></i>
                </div>
                <div class="p-6">
                    <h3 class="heading-font text-2xl font-bold text-gray-900 mb-2">Soft Drinks</h3>
                    <p class="text-gray-600 mb-4">Choice of Coca-Cola, Sprite, or Fanta</p>
                    <div class="flex justify-between items-center mb-4">
                        <div>
                            <span class="text-2xl font-bold text-orange-600">RM 3.90</span>
                        </div>
                    </div>
                    <button onclick="handleAddToCart(this)"
                            data-product-name="Soft Drinks"
                            data-product-price="3.90"
                            data-product-id="8"
                            class="w-full bg-orange-500 text-white py-3 rounded-full font-semibold hover:bg-orange-600 transition flex items-center justify-center">
                        <i class="fas fa-cart-plus mr-2"></i>
                        Add to Cart
                    </button>
                </div>
            </div>
            
            <!-- Item 9 - Iced Tea -->
            <div class="menu-item drinks bg-white rounded-2xl shadow-lg overflow-hidden transform hover:scale-105 transition-all duration-300 animate-on-scroll" style="animation-delay: 0.2s;">
                <div class="aspect-square bg-gradient-to-br from-orange-200 to-yellow-300 flex items-center justify-center">
                    <i class="fas fa-mug-hot text-7xl text-orange-700"></i>
                </div>
                <div class="p-6">
                    <h3 class="heading-font text-2xl font-bold text-gray-900 mb-2">Iced Tea</h3>
                    <p class="text-gray-600 mb-4">Refreshing lemon iced tea</p>
                    <div class="flex justify-between items-center mb-4">
                        <div>
                            <span class="text-2xl font-bold text-orange-600">RM 4.90</span>
                        </div>
                    </div>
                    <button onclick="handleAddToCart(this)"
                            data-product-name="Iced Tea"
                            data-product-price="4.90"
                            data-product-id="9"
                            class="w-full bg-orange-500 text-white py-3 rounded-full font-semibold hover:bg-orange-600 transition flex items-center justify-center">
                        <i class="fas fa-cart-plus mr-2"></i>
                        Add to Cart
                    </button>
                </div>
            </div>
            
        </div>
    </div>
</section>

@push('scripts')
<script>
    // Category filtering
    const tabs = document.querySelectorAll('.category-tab');
    const items = document.querySelectorAll('.menu-item');
    
    tabs.forEach(tab => {
        tab.addEventListener('click', () => {
            const category = tab.dataset.category;
            
            // Update active tab
            tabs.forEach(t => {
                t.classList.remove('active', 'bg-orange-500', 'text-white');
                t.classList.add('bg-gray-200', 'text-gray-700');
            });
            tab.classList.add('active', 'bg-orange-500', 'text-white');
            tab.classList.remove('bg-gray-200', 'text-gray-700');
            
            // Filter items
            items.forEach(item => {
                if (category === 'all' || item.classList.contains(category)) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });
</script>
@endpush

@endsection