@extends('layouts.app')

@section('title', '3Sayap - Finger-Lickin\' Good Halal Fried Chicken')

@section('content')

<!-- Hero Section -->
<section class="relative overflow-hidden bg-gradient-to-br from-orange-50 via-cream to-yellow-50 bg-pattern">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-20 left-10 w-64 h-64 bg-orange-400 rounded-full blur-3xl"></div>
        <div class="absolute bottom-20 right-10 w-96 h-96 bg-yellow-400 rounded-full blur-3xl"></div>
    </div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <!-- Left Content -->
            <div class="space-y-8 animate-slideInLeft">
                <div class="inline-block px-4 py-2 bg-orange-100 rounded-full">
                    <span class="text-orange-600 font-semibold text-sm uppercase tracking-wider">
                        🔥 #1 Halal Fried Chicken in Malaysia
                    </span>
                </div>
                
                <h1 class="heading-font text-6xl sm:text-7xl lg:text-8xl font-bold text-gray-900 leading-none">
                    CRISPY.<br>
                    JUICY.<br>
                    <span class="text-orange-600">HALAL.</span>
                </h1>
                
                <p class="text-xl text-gray-700 leading-relaxed">
                    Experience the crunch that Malaysia loves! Our secret blend of 11 herbs and spices makes every bite unforgettable. 100% halal, 100% delicious.
                </p>
                
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="{{ route('orders') }}" class="btn-primary inline-flex items-center justify-center text-center">
                        <i class="fas fa-shopping-cart mr-2"></i>
                        Order Now
                    </a>
                    <a href="{{ route('menu') }}" class="btn-secondary inline-flex items-center justify-center text-center">
                        <i class="fas fa-book-open mr-2"></i>
                        View Menu
                    </a>
                </div>
                
                <!-- Stats -->
                <div class="grid grid-cols-3 gap-6 pt-8 border-t border-orange-200">
                    <div class="text-center">
                        <div class="heading-font text-4xl font-bold text-orange-600">50+</div>
                        <div class="text-sm text-gray-600 uppercase tracking-wide">Locations</div>
                    </div>
                    <div class="text-center">
                        <div class="heading-font text-4xl font-bold text-orange-600">1M+</div>
                        <div class="text-sm text-gray-600 uppercase tracking-wide">Happy Customers</div>
                    </div>
                    <div class="text-center">
                        <div class="heading-font text-4xl font-bold text-orange-600">100%</div>
                        <div class="text-sm text-gray-600 uppercase tracking-wide">Halal</div>
                    </div>
                </div>
            </div>
            
            <!-- Right Image -->
            <div class="relative animate-slideInRight">
                <div class="relative z-10 animate-float">
                    <!-- Placeholder for fried chicken image -->
                    <div class="w-full aspect-square bg-gradient-to-br from-orange-200 to-red-200 rounded-3xl shadow-2xl flex items-center justify-center transform hover:scale-105 transition-transform duration-500 overflow-hidden">
    <img src="{{ asset('images/food-menu/hero-chicken.jpg') }}"  alt="Chicken Drumstick" class="w-full h-full object-cover" />
</div>
                </div>
                <!-- Decorative elements -->
                <div class="absolute -top-8 -right-8 w-32 h-32 bg-yellow-300 rounded-full opacity-50 blur-2xl"></div>
                <div class="absolute -bottom-8 -left-8 w-40 h-40 bg-orange-300 rounded-full opacity-50 blur-2xl"></div>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 animate-on-scroll">
            <h2 class="heading-font text-5xl font-bold text-gray-900 mb-4">
                Why Choose 3Sayap?
            </h2>
            <p class="text-xl text-gray-600">
                More than just fried chicken - it's an experience!
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Feature 1 -->
            <div class="group bg-gradient-to-br from-orange-50 to-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 animate-on-scroll">
                <div class="w-16 h-16 bg-gradient-to-br from-orange-500 to-red-600 rounded-full flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                    <i class="fas fa-certificate text-white text-2xl"></i>
                </div>
                <h3 class="heading-font text-2xl font-bold text-gray-900 mb-4">100% Halal Certified</h3>
                <p class="text-gray-600 leading-relaxed">
                    Certified by JAKIM. Enjoy our delicious chicken with complete peace of mind.
                </p>
            </div>
            
            <!-- Feature 2 -->
            <div class="group bg-gradient-to-br from-yellow-50 to-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 animate-on-scroll" style="animation-delay: 0.1s;">
                <div class="w-16 h-16 bg-gradient-to-br from-yellow-500 to-orange-600 rounded-full flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                    <i class="fas fa-leaf text-white text-2xl"></i>
                </div>
                <h3 class="heading-font text-2xl font-bold text-gray-900 mb-4">Fresh Ingredients</h3>
                <p class="text-gray-600 leading-relaxed">
                    Made fresh daily with locally sourced chicken and premium ingredients.
                </p>
            </div>
            
            <!-- Feature 3 -->
            <div class="group bg-gradient-to-br from-red-50 to-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 animate-on-scroll" style="animation-delay: 0.2s;">
                <div class="w-16 h-16 bg-gradient-to-br from-red-500 to-orange-600 rounded-full flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                    <i class="fas fa-fire text-white text-2xl"></i>
                </div>
                <h3 class="heading-font text-2xl font-bold text-gray-900 mb-4">Secret Recipe</h3>
                <p class="text-gray-600 leading-relaxed">
                    Our unique blend of 11 herbs and spices creates that perfect crispy crunch.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Featured Products Section -->
<section class="py-20 bg-gradient-to-b from-white to-orange-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 animate-on-scroll">
            <h2 class="heading-font text-5xl font-bold text-gray-900 mb-4">
                Our Signature Menu
            </h2>
            <p class="text-xl text-gray-600">
                Finger-lickin' favorites that keep you coming back!
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="group bg-white rounded-2xl shadow-lg overflow-hidden transform hover:scale-105 transition-all duration-300 animate-on-scroll">
    <div class="aspect-square overflow-hidden bg-gray-100">
        <img src="{{ asset('images/food-menu/menu-drumsticks.jpg') }}" alt="Original Recipe" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" />
    </div>
    <div class="p-6">
        <h3 class="heading-font text-2xl font-bold text-gray-900 mb-2">Original Recipe</h3>
        <p class="text-gray-600 mb-4">Classic crispy chicken with our secret blend</p>
        <div class="flex justify-between items-center">
            <span class="text-2xl font-bold text-orange-600">RM 12.90</span>
            <button class="bg-orange-500 text-white px-4 py-2 rounded-full hover:bg-orange-600 transition">
                <i class="fas fa-plus"></i>
            </button>
        </div>
    </div>
</div>

<div class="group bg-white rounded-2xl shadow-lg overflow-hidden transform hover:scale-105 transition-all duration-300 animate-on-scroll" style="animation-delay: 0.1s;">
    <div class="aspect-square overflow-hidden bg-gray-100">
        <img src="{{ asset('images/food-menu/menu-wings.jpg') }}" alt="Spicy Wings" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" />
    </div>
    <div class="p-6">
        <h3 class="heading-font text-2xl font-bold text-gray-900 mb-2">Spicy Wings</h3>
        <p class="text-gray-600 mb-4">Extra crispy with fiery kick</p>
        <div class="flex justify-between items-center">
            <span class="text-2xl font-bold text-orange-600">RM 15.90</span>
            <button class="bg-orange-500 text-white px-4 py-2 rounded-full hover:bg-orange-600 transition">
                <i class="fas fa-plus"></i>
            </button>
        </div>
    </div>
</div>

<div class="group bg-white rounded-2xl shadow-lg overflow-hidden transform hover:scale-105 transition-all duration-300 animate-on-scroll" style="animation-delay: 0.2s;">
    <div class="aspect-square overflow-hidden bg-gray-100">
        <img src="{{ asset('images/food-menu/menu-family-feast.jpg') }}" alt="Family Bucket" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" />
    </div>
    <div class="p-6">
        <h3 class="heading-font text-2xl font-bold text-gray-900 mb-2">Family Bucket</h3>
        <p class="text-gray-600 mb-4">12 pieces perfect for sharing</p>
        <div class="flex justify-between items-center">
            <span class="text-2xl font-bold text-orange-600">RM 45.90</span>
            <button class="bg-orange-500 text-white px-4 py-2 rounded-full hover:bg-orange-600 transition">
                <i class="fas fa-plus"></i>
            </button>
        </div>
    </div>
</div>

<div class="group bg-white rounded-2xl shadow-lg overflow-hidden transform hover:scale-105 transition-all duration-300 animate-on-scroll" style="animation-delay: 0.3s;">
    <div class="aspect-square overflow-hidden bg-gray-100">
        <img src="{{ asset('images/food-menu/menu-burger.jpg') }}" alt="Chicken Burger" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" />
    </div>
    <div class="p-6">
        <h3 class="heading-font text-2xl font-bold text-gray-900 mb-2">Chicken Burger</h3>
        <p class="text-gray-600 mb-4">Juicy crispy chicken in a bun</p>
        <div class="flex justify-between items-center">
            <span class="text-2xl font-bold text-orange-600">RM 13.90</span>
            <button class="bg-orange-500 text-white px-4 py-2 rounded-full hover:bg-orange-600 transition">
                <i class="fas fa-plus"></i>
            </button>
        </div>
    </div>
</div>
        <div class="text-center mt-12 animate-on-scroll">
            <a href="{{ route('menu') }}" class="btn-primary inline-flex items-center">
                View Full Menu
                <i class="fas fa-arrow-right ml-2"></i>
            </a>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 animate-on-scroll">
            <h2 class="heading-font text-5xl font-bold text-gray-900 mb-4">
                What Our Customers Say
            </h2>
            <p class="text-xl text-gray-600">
                Don't just take our word for it!
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Testimonial 1 -->
            <div class="bg-gradient-to-br from-orange-50 to-white p-8 rounded-2xl shadow-lg animate-on-scroll">
                <div class="flex items-center mb-4">
                    <div class="flex text-yellow-500">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                <p class="text-gray-700 mb-6 italic">
                    "Best fried chicken in KL! The crispy coating is absolutely perfect and it's halal too. My family's new favorite!"
                </p>
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-gradient-to-br from-orange-400 to-red-500 rounded-full flex items-center justify-center text-white font-bold">
                        AH
                    </div>
                    <div class="ml-4">
                        <div class="font-bold text-gray-900">Ahmad Hassan</div>
                        <div class="text-sm text-gray-600">Kuala Lumpur</div>
                    </div>
                </div>
            </div>
            
            <!-- Testimonial 2 -->
            <div class="bg-gradient-to-br from-yellow-50 to-white p-8 rounded-2xl shadow-lg animate-on-scroll" style="animation-delay: 0.1s;">
                <div class="flex items-center mb-4">
                    <div class="flex text-yellow-500">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                <p class="text-gray-700 mb-6 italic">
                    "The spicy wings are incredible! Just the right amount of heat. Delivery was fast too. Highly recommended!"
                </p>
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-gradient-to-br from-yellow-400 to-orange-500 rounded-full flex items-center justify-center text-white font-bold">
                        SL
                    </div>
                    <div class="ml-4">
                        <div class="font-bold text-gray-900">Siti Latifah</div>
                        <div class="text-sm text-gray-600">Selangor</div>
                    </div>
                </div>
            </div>
            
            <!-- Testimonial 3 -->
            <div class="bg-gradient-to-br from-red-50 to-white p-8 rounded-2xl shadow-lg animate-on-scroll" style="animation-delay: 0.2s;">
                <div class="flex items-center mb-4">
                    <div class="flex text-yellow-500">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                <p class="text-gray-700 mb-6 italic">
                    "Value for money! The family bucket is perfect for gatherings. Always fresh and delicious. 5 stars!"
                </p>
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-gradient-to-br from-red-400 to-orange-500 rounded-full flex items-center justify-center text-white font-bold">
                        ML
                    </div>
                    <div class="ml-4">
                        <div class="font-bold text-gray-900">Marcus Lee</div>
                        <div class="text-sm text-gray-600">Penang</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-gradient-to-br from-orange-600 via-red-600 to-orange-700 relative overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-0 left-0 w-96 h-96 bg-yellow-400 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-red-400 rounded-full blur-3xl"></div>
    </div>
    
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10 animate-on-scroll">
        <h2 class="heading-font text-5xl md:text-6xl font-bold text-white mb-6">
            Craving Some Crispy Chicken?
        </h2>
        <p class="text-xl text-orange-100 mb-8">
            Order now and get it delivered hot and fresh to your doorstep!
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('orders') }}" class="bg-white text-orange-600 px-8 py-4 rounded-full font-bold text-lg hover:bg-orange-50 transform hover:scale-105 transition-all shadow-xl inline-flex items-center justify-center">
                <i class="fas fa-shopping-cart mr-2"></i>
                Order Now
            </a>
            <a href="tel:+60123456789" class="bg-transparent border-2 border-white text-white px-8 py-4 rounded-full font-bold text-lg hover:bg-white hover:text-orange-600 transform hover:scale-105 transition-all inline-flex items-center justify-center">
                <i class="fas fa-phone mr-2"></i>
                Call to Order
            </a>
        </div>
    </div>
</section>

@endsection
