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
        <div class="flex flex-wrap justify-center gap-4 mb-8 animate-on-scroll">
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

        <!-- Filter Controls -->
        <div class="bg-gray-50 rounded-2xl p-6 mb-12 animate-on-scroll">
            <div class="flex flex-wrap items-center justify-between gap-6">
                <!-- Price Filter -->
                <div class="flex-1 min-w-[280px]">
                    <label class="block text-sm font-semibold text-gray-700 mb-3">
                        <i class="fas fa-tag text-orange-500 mr-2"></i>Price Range
                    </label>
                    <div class="flex items-center gap-4">
                        <span class="text-sm text-gray-500">RM 0</span>
                        <div class="flex-1 relative">
                            <input type="range" 
                                   id="priceRange" 
                                   min="0" 
                                   max="50" 
                                   value="50" 
                                   class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer accent-orange-500">
                            <div class="absolute -top-8 left-1/2 transform -translate-x-1/2 bg-orange-500 text-white px-3 py-1 rounded-full text-sm font-semibold opacity-0 transition-opacity" id="priceTooltip">
                                RM 50
                            </div>
                        </div>
                        <span class="text-sm text-gray-500">RM 50</span>
                    </div>
                    <div class="text-center mt-2">
                        <span class="text-orange-600 font-semibold">Up to RM <span id="priceValue">50.00</span></span>
                    </div>
                </div>

                <!-- Rating Filter -->
                <div class="flex-1 min-w-[280px]">
                    <label class="block text-sm font-semibold text-gray-700 mb-3">
                        <i class="fas fa-star text-orange-500 mr-2"></i>Minimum Rating
                    </label>
                    <div class="flex items-center gap-2">
                        <button class="rating-filter-btn active px-4 py-2 bg-orange-500 text-white rounded-full text-sm font-semibold hover:bg-orange-600 transition" data-rating="0">
                            All
                        </button>
                        <button class="rating-filter-btn px-4 py-2 bg-gray-200 text-gray-700 rounded-full text-sm font-semibold hover:bg-gray-300 transition flex items-center gap-1" data-rating="3">
                            <span>3+</span>
                            <i class="fas fa-star text-yellow-400 text-xs"></i>
                        </button>
                        <button class="rating-filter-btn px-4 py-2 bg-gray-200 text-gray-700 rounded-full text-sm font-semibold hover:bg-gray-300 transition flex items-center gap-1" data-rating="4">
                            <span>4+</span>
                            <i class="fas fa-star text-yellow-400 text-xs"></i>
                        </button>
                        <button class="rating-filter-btn px-4 py-2 bg-gray-200 text-gray-700 rounded-full text-sm font-semibold hover:bg-gray-300 transition flex items-center gap-1" data-rating="4.5">
                            <span>4.5+</span>
                            <i class="fas fa-star text-yellow-400 text-xs"></i>
                        </button>
                    </div>
                </div>

                <!-- Sort By -->
                <div class="flex-1 min-w-[200px]">
                    <label class="block text-sm font-semibold text-gray-700 mb-3">
                        <i class="fas fa-sort text-orange-500 mr-2"></i>Sort By
                    </label>
                    <select id="sortBy" class="w-full px-4 py-2 bg-white border border-gray-300 rounded-full text-gray-700 font-semibold focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent cursor-pointer">
                        <option value="default">Default</option>
                        <option value="price-low">Price: Low to High</option>
                        <option value="price-high">Price: High to Low</option>
                        <option value="rating-high">Rating: High to Low</option>
                        <option value="name-az">Name: A to Z</option>
                    </select>
                </div>

                <!-- Reset Button -->
                <div class="flex items-end">
                    <button id="resetFilters" class="px-6 py-2 bg-gray-800 text-white rounded-full font-semibold hover:bg-gray-900 transition flex items-center gap-2">
                        <i class="fas fa-undo"></i>
                        Reset
                    </button>
                </div>
            </div>

            <!-- Active Filters Display -->
            <div id="activeFilters" class="mt-4 pt-4 border-t border-gray-200 hidden">
                <span class="text-sm text-gray-600">Active filters:</span>
                <div id="filterTags" class="inline-flex flex-wrap gap-2 ml-2"></div>
            </div>
        </div>

        <!-- Results Count -->
        <div class="flex justify-between items-center mb-8">
            <p class="text-gray-600">
                Showing <span id="resultsCount" class="font-semibold text-orange-600">9</span> items
            </p>
        </div>
        
        <!-- Menu Items Grid -->
        <div id="menuGrid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <!-- Item 1 - Original Recipe Chicken -->
            <div class="menu-item chicken bg-white rounded-2xl shadow-lg overflow-hidden transform hover:scale-105 transition-all duration-300 animate-on-scroll"
                 data-price="12.90"
                 data-rating="4.8"
                 data-name="Original Recipe Chicken">
                <div class="aspect-square relative group overflow-hidden">
                    <img src="{{ asset('images/food-menu/menu-drumsticks.jpg') }}" 
                         alt="Original Recipe Chicken" 
                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                    <div class="absolute top-4 right-4 bg-red-500 text-white px-3 py-1 rounded-full text-sm font-bold z-10">
                        BESTSELLER
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex justify-between items-start mb-2">
                        <h3 class="heading-font text-2xl font-bold text-gray-900">Original Recipe Chicken</h3>
                    </div>
                    <!-- Rating Display -->
                    <div class="flex items-center gap-2 mb-3">
                        <div class="flex items-center">
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="fas fa-star-half-alt text-yellow-400"></i>
                        </div>
                        <span class="text-sm font-semibold text-gray-700">4.8</span>
                        <span class="text-sm text-gray-500">(128 reviews)</span>
                    </div>
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
            <div class="menu-item chicken bg-white rounded-2xl shadow-lg overflow-hidden transform hover:scale-105 transition-all duration-300 animate-on-scroll" 
                 style="animation-delay: 0.1s;"
                 data-price="15.90"
                 data-rating="4.6"
                 data-name="Spicy Crispy Wings">
                <div class="aspect-square relative group overflow-hidden">
                    <img src="{{ asset('images/food-menu/menu-wings.jpg') }}" 
                         alt="Spicy Crispy Wings" 
                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                    <div class="absolute top-4 right-4 bg-red-600 text-white px-3 py-1 rounded-full text-sm font-bold z-10">
                        🔥 SPICY
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="heading-font text-2xl font-bold text-gray-900 mb-2">Spicy Crispy Wings</h3>
                    <!-- Rating Display -->
                    <div class="flex items-center gap-2 mb-3">
                        <div class="flex items-center">
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="fas fa-star-half-alt text-yellow-400"></i>
                        </div>
                        <span class="text-sm font-semibold text-gray-700">4.6</span>
                        <span class="text-sm text-gray-500">(95 reviews)</span>
                    </div>
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
            <div class="menu-item chicken bg-white rounded-2xl shadow-lg overflow-hidden transform hover:scale-105 transition-all duration-300 animate-on-scroll" 
                 style="animation-delay: 0.2s;"
                 data-price="45.90"
                 data-rating="4.9"
                 data-name="Family Bucket">
                <div class="aspect-square relative group overflow-hidden">
                    <img src="{{ asset('images/food-menu/menu-family-feast.jpg') }}" 
                         alt="Family Bucket" 
                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                    <div class="absolute top-4 right-4 bg-green-500 text-white px-3 py-1 rounded-full text-sm font-bold z-10">
                        FAMILY SIZE
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="heading-font text-2xl font-bold text-gray-900 mb-2">Family Bucket</h3>
                    <!-- Rating Display -->
                    <div class="flex items-center gap-2 mb-3">
                        <div class="flex items-center">
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="fas fa-star text-yellow-400"></i>
                        </div>
                        <span class="text-sm font-semibold text-gray-700">4.9</span>
                        <span class="text-sm text-gray-500">(203 reviews)</span>
                    </div>
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
            <div class="menu-item burgers bg-white rounded-2xl shadow-lg overflow-hidden transform hover:scale-105 transition-all duration-300 animate-on-scroll"
                 data-price="13.90"
                 data-rating="4.5"
                 data-name="Crispy Chicken Burger">
                <div class="aspect-square relative group overflow-hidden">
                    <img src="{{ asset('images/food-menu/menu-burger.jpg') }}" 
                         alt="Crispy Chicken Burger" 
                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                </div>
                <div class="p-6">
                    <h3 class="heading-font text-2xl font-bold text-gray-900 mb-2">Crispy Chicken Burger</h3>
                    <!-- Rating Display -->
                    <div class="flex items-center gap-2 mb-3">
                        <div class="flex items-center">
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="fas fa-star-half-alt text-yellow-400"></i>
                        </div>
                        <span class="text-sm font-semibold text-gray-700">4.5</span>
                        <span class="text-sm text-gray-500">(76 reviews)</span>
                    </div>
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
            <div class="menu-item burgers bg-white rounded-2xl shadow-lg overflow-hidden transform hover:scale-105 transition-all duration-300 animate-on-scroll" 
                 style="animation-delay: 0.1s;"
                 data-price="14.90"
                 data-rating="4.4"
                 data-name="Spicy Chicken Burger">
                <div class="aspect-square relative group overflow-hidden">
                    <img src="{{ asset('images/food-menu/menu-burger.jpg') }}" 
                         alt="Spicy Chicken Burger" 
                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                    <div class="absolute top-4 right-4 bg-red-600 text-white px-3 py-1 rounded-full text-sm font-bold z-10">
                        🔥 SPICY
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="heading-font text-2xl font-bold text-gray-900 mb-2">Spicy Chicken Burger</h3>
                    <!-- Rating Display -->
                    <div class="flex items-center gap-2 mb-3">
                        <div class="flex items-center">
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="far fa-star text-yellow-400"></i>
                        </div>
                        <span class="text-sm font-semibold text-gray-700">4.4</span>
                        <span class="text-sm text-gray-500">(62 reviews)</span>
                    </div>
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
            
            <!-- Item 6 - Chicken Tenders -->
            <div class="menu-item chicken bg-white rounded-2xl shadow-lg overflow-hidden transform hover:scale-105 transition-all duration-300 animate-on-scroll" 
                 style="animation-delay: 0.2s;"
                 data-price="16.90"
                 data-rating="4.7"
                 data-name="Chicken Tenders">
                <div class="aspect-square relative group overflow-hidden">
                    <img src="{{ asset('images/food-menu/menu-tenders.jpg') }}" 
                         alt="Chicken Tenders" 
                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                </div>
                <div class="p-6">
                    <h3 class="heading-font text-2xl font-bold text-gray-900 mb-2">Chicken Tenders</h3>
                    <!-- Rating Display -->
                    <div class="flex items-center gap-2 mb-3">
                        <div class="flex items-center">
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="fas fa-star-half-alt text-yellow-400"></i>
                        </div>
                        <span class="text-sm font-semibold text-gray-700">4.7</span>
                        <span class="text-sm text-gray-500">(89 reviews)</span>
                    </div>
                    <p class="text-gray-600 mb-4">Crispy chicken tenders served with golden fries</p>
                    <div class="flex justify-between items-center mb-4">
                        <div>
                            <span class="text-2xl font-bold text-orange-600">RM 16.90</span>
                            <span class="text-sm text-gray-500 ml-2">with fries</span>
                        </div>
                    </div>
                    <button onclick="handleAddToCart(this)"
                            data-product-name="Chicken Tenders"
                            data-product-price="16.90"
                            data-product-id="6"
                            class="w-full bg-orange-500 text-white py-3 rounded-full font-semibold hover:bg-orange-600 transition flex items-center justify-center">
                        <i class="fas fa-cart-plus mr-2"></i>
                        Add to Cart
                    </button>
                </div>
            </div>
            
            <!-- Item 7 - Golden Fries -->
            <div class="menu-item sides bg-white rounded-2xl shadow-lg overflow-hidden transform hover:scale-105 transition-all duration-300 animate-on-scroll"
                 data-price="6.90"
                 data-rating="4.3"
                 data-name="Golden Fries">
                <div class="aspect-square relative group overflow-hidden">
                    <img src="{{ asset('images/food-menu/menu-cheese-fries.jpg') }}" 
                         alt="Golden Fries" 
                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                </div>
                <div class="p-6">
                    <h3 class="heading-font text-2xl font-bold text-gray-900 mb-2">Golden Fries</h3>
                    <!-- Rating Display -->
                    <div class="flex items-center gap-2 mb-3">
                        <div class="flex items-center">
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="far fa-star text-yellow-400"></i>
                        </div>
                        <span class="text-sm font-semibold text-gray-700">4.3</span>
                        <span class="text-sm text-gray-500">(156 reviews)</span>
                    </div>
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
                            data-product-id="7"
                            class="w-full bg-orange-500 text-white py-3 rounded-full font-semibold hover:bg-orange-600 transition flex items-center justify-center">
                        <i class="fas fa-cart-plus mr-2"></i>
                        Add to Cart
                    </button>
                </div>
            </div>

            <!-- Item 8 - Coleslaw -->
            <div class="menu-item sides bg-white rounded-2xl shadow-lg overflow-hidden transform hover:scale-105 transition-all duration-300 animate-on-scroll" 
                 style="animation-delay: 0.1s;"
                 data-price="5.90"
                 data-rating="4.2"
                 data-name="Coleslaw">
                <div class="aspect-square relative group overflow-hidden">
                    <img src="{{ asset('images/food-menu/menu-coleslaw.jpg') }}" 
                         alt="Coleslaw" 
                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                </div>
                <div class="p-6">
                    <h3 class="heading-font text-2xl font-bold text-gray-900 mb-2">Coleslaw</h3>
                    <!-- Rating Display -->
                    <div class="flex items-center gap-2 mb-3">
                        <div class="flex items-center">
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="far fa-star text-yellow-400"></i>
                        </div>
                        <span class="text-sm font-semibold text-gray-700">4.2</span>
                        <span class="text-sm text-gray-500">(98 reviews)</span>
                    </div>
                    <p class="text-gray-600 mb-4">Fresh and creamy coleslaw salad</p>
                    <div class="flex justify-between items-center mb-4">
                        <div>
                            <span class="text-2xl font-bold text-orange-600">RM 5.90</span>
                        </div>
                    </div>
                    <button onclick="handleAddToCart(this)"
                            data-product-name="Coleslaw"
                            data-product-price="5.90"
                            data-product-id="8"
                            class="w-full bg-orange-500 text-white py-3 rounded-full font-semibold hover:bg-orange-600 transition flex items-center justify-center">
                        <i class="fas fa-cart-plus mr-2"></i>
                        Add to Cart
                    </button>
                </div>
            </div>

            <!-- Item 9 - Soft Drinks -->
            <div class="menu-item drinks bg-white rounded-2xl shadow-lg overflow-hidden transform hover:scale-105 transition-all duration-300 animate-on-scroll" 
                 style="animation-delay: 0.2s;"
                 data-price="3.90"
                 data-rating="4.0"
                 data-name="Soft Drinks">
                <div class="aspect-square relative group overflow-hidden">
                    <img src="{{ asset('images/food-menu/menu-milo.jpg') }}" 
                         alt="Soft Drinks" 
                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                </div>
                <div class="p-6">
                    <h3 class="heading-font text-2xl font-bold text-gray-900 mb-2">Soft Drinks</h3>
                    <!-- Rating Display -->
                    <div class="flex items-center gap-2 mb-3">
                        <div class="flex items-center">
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="far fa-star text-yellow-400"></i>
                        </div>
                        <span class="text-sm font-semibold text-gray-700">4.0</span>
                        <span class="text-sm text-gray-500">(245 reviews)</span>
                    </div>
                    <p class="text-gray-600 mb-4">Choice of Coca-Cola, Sprite, or Fanta</p>
                    <div class="flex justify-between items-center mb-4">
                        <div>
                            <span class="text-2xl font-bold text-orange-600">RM 3.90</span>
                        </div>
                    </div>
                    <button onclick="handleAddToCart(this)"
                            data-product-name="Soft Drinks"
                            data-product-price="3.90"
                            data-product-id="9"
                            class="w-full bg-orange-500 text-white py-3 rounded-full font-semibold hover:bg-orange-600 transition flex items-center justify-center">
                        <i class="fas fa-cart-plus mr-2"></i>
                        Add to Cart
                    </button>
                </div>
            </div>
            
        </div>

        <!-- No Results Message -->
        <div id="noResults" class="hidden text-center py-16">
            <div class="text-6xl mb-4">🍗</div>
            <h3 class="text-2xl font-bold text-gray-700 mb-2">No items found</h3>
            <p class="text-gray-500 mb-6">Try adjusting your filters to find what you're looking for.</p>
            <button id="clearFiltersBtn" class="px-6 py-3 bg-orange-500 text-white rounded-full font-semibold hover:bg-orange-600 transition">
                Clear All Filters
            </button>
        </div>
    </div>
</section>

@push('styles')
<style>
    /* Custom range slider styling */
    input[type="range"] {
        -webkit-appearance: none;
        appearance: none;
        background: transparent;
    }

    input[type="range"]::-webkit-slider-runnable-track {
        width: 100%;
        height: 8px;
        background: linear-gradient(to right, #f97316 0%, #f97316 var(--value-percent, 100%), #e5e7eb var(--value-percent, 100%), #e5e7eb 100%);
        border-radius: 4px;
    }

    input[type="range"]::-webkit-slider-thumb {
        -webkit-appearance: none;
        appearance: none;
        width: 24px;
        height: 24px;
        background: #f97316;
        border-radius: 50%;
        cursor: pointer;
        margin-top: -8px;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
        transition: transform 0.2s, box-shadow 0.2s;
    }

    input[type="range"]::-webkit-slider-thumb:hover {
        transform: scale(1.1);
        box-shadow: 0 4px 12px rgba(249, 115, 22, 0.4);
    }

    input[type="range"]::-moz-range-track {
        width: 100%;
        height: 8px;
        background: #e5e7eb;
        border-radius: 4px;
    }

    input[type="range"]::-moz-range-thumb {
        width: 24px;
        height: 24px;
        background: #f97316;
        border-radius: 50%;
        cursor: pointer;
        border: none;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
    }

    input[type="range"]::-moz-range-progress {
        background: #f97316;
        height: 8px;
        border-radius: 4px;
    }

    /* Filter tag styles */
    .filter-tag {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.25rem 0.75rem;
        background: #fed7aa;
        color: #c2410c;
        border-radius: 9999px;
        font-size: 0.875rem;
        font-weight: 500;
    }

    .filter-tag button {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 1.25rem;
        height: 1.25rem;
        background: #c2410c;
        color: white;
        border-radius: 50%;
        font-size: 0.75rem;
        transition: background 0.2s;
    }

    .filter-tag button:hover {
        background: #9a3412;
    }

    /* Fade animation for menu items */
    .menu-item {
        transition: opacity 0.3s ease, transform 0.3s ease;
    }

    .menu-item.hidden {
        display: none !important;
    }

    .menu-item.fade-out {
        opacity: 0;
        transform: scale(0.95);
    }
</style>
@endpush

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Elements
    const categoryTabs = document.querySelectorAll('.category-tab');
    const ratingBtns = document.querySelectorAll('.rating-filter-btn');
    const priceRange = document.getElementById('priceRange');
    const priceValue = document.getElementById('priceValue');
    const sortBy = document.getElementById('sortBy');
    const resetBtn = document.getElementById('resetFilters');
    const clearFiltersBtn = document.getElementById('clearFiltersBtn');
    const menuGrid = document.getElementById('menuGrid');
    const resultsCount = document.getElementById('resultsCount');
    const noResults = document.getElementById('noResults');
    const activeFilters = document.getElementById('activeFilters');
    const filterTags = document.getElementById('filterTags');

    // Filter state
    let filters = {
        category: 'all',
        maxPrice: 50,
        minRating: 0,
        sortBy: 'default'
    };

    // Update price range visual
    function updatePriceRangeVisual() {
        const percent = (priceRange.value / priceRange.max) * 100;
        priceRange.style.setProperty('--value-percent', percent + '%');
        priceValue.textContent = parseFloat(priceRange.value).toFixed(2);
    }

    // Get all menu items
    function getMenuItems() {
        return Array.from(document.querySelectorAll('.menu-item'));
    }

    // Filter and sort items
    function applyFilters() {
        const items = getMenuItems();
        let visibleCount = 0;

        items.forEach(item => {
            const price = parseFloat(item.dataset.price);
            const rating = parseFloat(item.dataset.rating);
            const categories = item.classList;

            // Check category
            const categoryMatch = filters.category === 'all' || categories.contains(filters.category);
            
            // Check price
            const priceMatch = price <= filters.maxPrice;
            
            // Check rating
            const ratingMatch = rating >= filters.minRating;

            // Apply visibility
            if (categoryMatch && priceMatch && ratingMatch) {
                item.classList.remove('hidden');
                item.style.display = 'block';
                visibleCount++;
            } else {
                item.classList.add('hidden');
                item.style.display = 'none';
            }
        });

        // Sort visible items
        sortItems();

        // Update results count
        resultsCount.textContent = visibleCount;

        // Show/hide no results message
        if (visibleCount === 0) {
            noResults.classList.remove('hidden');
            menuGrid.style.display = 'none';
        } else {
            noResults.classList.add('hidden');
            menuGrid.style.display = 'grid';
        }

        // Update active filters display
        updateActiveFilters();
    }

    // Sort items
    function sortItems() {
        const items = getMenuItems().filter(item => !item.classList.contains('hidden'));
        
        items.sort((a, b) => {
            const priceA = parseFloat(a.dataset.price);
            const priceB = parseFloat(b.dataset.price);
            const ratingA = parseFloat(a.dataset.rating);
            const ratingB = parseFloat(b.dataset.rating);
            const nameA = a.dataset.name.toLowerCase();
            const nameB = b.dataset.name.toLowerCase();

            switch (filters.sortBy) {
                case 'price-low':
                    return priceA - priceB;
                case 'price-high':
                    return priceB - priceA;
                case 'rating-high':
                    return ratingB - ratingA;
                case 'name-az':
                    return nameA.localeCompare(nameB);
                default:
                    return 0;
            }
        });

        // Reorder items in DOM
        items.forEach(item => menuGrid.appendChild(item));
    }

    // Update active filters display
    function updateActiveFilters() {
        const tags = [];

        if (filters.category !== 'all') {
            tags.push({ type: 'category', label: filters.category.charAt(0).toUpperCase() + filters.category.slice(1) });
        }

        if (filters.maxPrice < 50) {
            tags.push({ type: 'price', label: `Under RM ${filters.maxPrice}` });
        }

        if (filters.minRating > 0) {
            tags.push({ type: 'rating', label: `${filters.minRating}+ Stars` });
        }

        if (filters.sortBy !== 'default') {
            const sortLabels = {
                'price-low': 'Price: Low to High',
                'price-high': 'Price: High to Low',
                'rating-high': 'Rating: High to Low',
                'name-az': 'Name: A-Z'
            };
            tags.push({ type: 'sort', label: sortLabels[filters.sortBy] });
        }

        if (tags.length > 0) {
            activeFilters.classList.remove('hidden');
            filterTags.innerHTML = tags.map(tag => `
                <span class="filter-tag">
                    ${tag.label}
                    <button onclick="removeFilter('${tag.type}')" title="Remove filter">
                        <i class="fas fa-times"></i>
                    </button>
                </span>
            `).join('');
        } else {
            activeFilters.classList.add('hidden');
            filterTags.innerHTML = '';
        }
    }

    // Remove specific filter
    window.removeFilter = function(type) {
        switch (type) {
            case 'category':
                filters.category = 'all';
                categoryTabs.forEach(tab => {
                    tab.classList.remove('active', 'bg-orange-500', 'text-white');
                    tab.classList.add('bg-gray-200', 'text-gray-700');
                    if (tab.dataset.category === 'all') {
                        tab.classList.add('active', 'bg-orange-500', 'text-white');
                        tab.classList.remove('bg-gray-200', 'text-gray-700');
                    }
                });
                break;
            case 'price':
                filters.maxPrice = 50;
                priceRange.value = 50;
                updatePriceRangeVisual();
                break;
            case 'rating':
                filters.minRating = 0;
                ratingBtns.forEach(btn => {
                    btn.classList.remove('active', 'bg-orange-500', 'text-white');
                    btn.classList.add('bg-gray-200', 'text-gray-700');
                    if (btn.dataset.rating === '0') {
                        btn.classList.add('active', 'bg-orange-500', 'text-white');
                        btn.classList.remove('bg-gray-200', 'text-gray-700');
                    }
                });
                break;
            case 'sort':
                filters.sortBy = 'default';
                sortBy.value = 'default';
                break;
        }
        applyFilters();
    };

    // Reset all filters
    function resetAllFilters() {
        filters = {
            category: 'all',
            maxPrice: 50,
            minRating: 0,
            sortBy: 'default'
        };

        // Reset UI
        categoryTabs.forEach(tab => {
            tab.classList.remove('active', 'bg-orange-500', 'text-white');
            tab.classList.add('bg-gray-200', 'text-gray-700');
            if (tab.dataset.category === 'all') {
                tab.classList.add('active', 'bg-orange-500', 'text-white');
                tab.classList.remove('bg-gray-200', 'text-gray-700');
            }
        });

        ratingBtns.forEach(btn => {
            btn.classList.remove('active', 'bg-orange-500', 'text-white');
            btn.classList.add('bg-gray-200', 'text-gray-700');
            if (btn.dataset.rating === '0') {
                btn.classList.add('active', 'bg-orange-500', 'text-white');
                btn.classList.remove('bg-gray-200', 'text-gray-700');
            }
        });

        priceRange.value = 50;
        updatePriceRangeVisual();
        sortBy.value = 'default';

        applyFilters();
    }

    // Event Listeners

    // Category tabs
    categoryTabs.forEach(tab => {
        tab.addEventListener('click', () => {
            categoryTabs.forEach(t => {
                t.classList.remove('active', 'bg-orange-500', 'text-white');
                t.classList.add('bg-gray-200', 'text-gray-700');
            });
            tab.classList.add('active', 'bg-orange-500', 'text-white');
            tab.classList.remove('bg-gray-200', 'text-gray-700');

            filters.category = tab.dataset.category;
            applyFilters();
        });
    });

    // Rating buttons
    ratingBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            ratingBtns.forEach(b => {
                b.classList.remove('active', 'bg-orange-500', 'text-white');
                b.classList.add('bg-gray-200', 'text-gray-700');
            });
            btn.classList.add('active', 'bg-orange-500', 'text-white');
            btn.classList.remove('bg-gray-200', 'text-gray-700');

            filters.minRating = parseFloat(btn.dataset.rating);
            applyFilters();
        });
    });

    // Price range
    priceRange.addEventListener('input', () => {
        updatePriceRangeVisual();
        filters.maxPrice = parseFloat(priceRange.value);
        applyFilters();
    });

    // Sort dropdown
    sortBy.addEventListener('change', () => {
        filters.sortBy = sortBy.value;
        applyFilters();
    });

    // Reset button
    resetBtn.addEventListener('click', resetAllFilters);
    
    // Clear filters button (in no results message)
    if (clearFiltersBtn) {
        clearFiltersBtn.addEventListener('click', resetAllFilters);
    }

    // Initialize
    updatePriceRangeVisual();
    applyFilters();
});
</script>
@endpush

@endsection
