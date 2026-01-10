@extends('layouts.app')

@section('title', 'Order Now - 3Sayap')

@section('content')

<!-- Page Header -->
<section class="bg-gradient-to-br from-orange-600 to-red-600 py-20 relative overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-10 right-10 w-64 h-64 bg-yellow-400 rounded-full blur-3xl"></div>
    </div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
        <h1 class="heading-font text-6xl md:text-7xl font-bold text-white mb-6 animate-fadeInUp">
            ORDER NOW
        </h1>
        <p class="text-xl text-orange-100 max-w-2xl mx-auto animate-fadeInUp" style="animation-delay: 0.1s;">
            Get your favorite fried chicken delivered hot and fresh!
        </p>
    </div>
</section>

<!-- Order Options -->
<section class="py-20 bg-white">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 animate-on-scroll">
            <h2 class="heading-font text-5xl font-bold text-gray-900 mb-4">
                Choose How to Order
            </h2>
            <p class="text-xl text-gray-600">
                Multiple convenient ways to enjoy 3Sayap
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Delivery Apps -->
            <div class="bg-gradient-to-br from-orange-50 to-white p-8 rounded-2xl shadow-lg text-center transform hover:scale-105 transition-all animate-on-scroll">
                <div class="w-24 h-24 bg-gradient-to-br from-orange-500 to-red-600 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-motorcycle text-white text-4xl"></i>
                </div>
                <h3 class="heading-font text-3xl font-bold text-gray-900 mb-4">Delivery Apps</h3>
                <p class="text-gray-600 mb-6">
                    Order through your favorite delivery platforms
                </p>
                <div class="space-y-3">
                    <a href="#" class="block bg-pink-600 text-white px-6 py-3 rounded-full font-semibold hover:bg-pink-700 transition">
                        <i class="fas fa-utensils mr-2"></i> Order on FoodPanda
                    </a>
                    <a href="#" class="block bg-green-600 text-white px-6 py-3 rounded-full font-semibold hover:bg-green-700 transition">
                        <i class="fas fa-motorcycle mr-2"></i> Order on GrabFood
                    </a>
                    <a href="#" class="block bg-blue-600 text-white px-6 py-3 rounded-full font-semibold hover:bg-blue-700 transition">
                        <i class="fas fa-shopping-bag mr-2"></i> Order on Shopee Food
                    </a>
                </div>
            </div>
            
            <!-- Phone Order -->
            <div class="bg-gradient-to-br from-yellow-50 to-white p-8 rounded-2xl shadow-lg text-center transform hover:scale-105 transition-all animate-on-scroll" style="animation-delay: 0.1s;">
                <div class="w-24 h-24 bg-gradient-to-br from-yellow-500 to-orange-600 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-phone text-white text-4xl"></i>
                </div>
                <h3 class="heading-font text-3xl font-bold text-gray-900 mb-4">Call to Order</h3>
                <p class="text-gray-600 mb-6">
                    Speak directly with our team for your order
                </p>
                <div class="space-y-3">
                    <a href="tel:+60123456789" class="block bg-orange-500 text-white px-6 py-3 rounded-full font-semibold hover:bg-orange-600 transition text-xl">
                        <i class="fas fa-phone mr-2"></i> +60 12-345 6789
                    </a>
                    <p class="text-sm text-gray-600">Available Daily: 10AM - 10PM</p>
                </div>
            </div>
            
            <!-- Walk-in -->
            <div class="bg-gradient-to-br from-red-50 to-white p-8 rounded-2xl shadow-lg text-center transform hover:scale-105 transition-all animate-on-scroll" style="animation-delay: 0.2s;">
                <div class="w-24 h-24 bg-gradient-to-br from-red-500 to-orange-600 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-store text-white text-4xl"></i>
                </div>
                <h3 class="heading-font text-3xl font-bold text-gray-900 mb-4">Visit Us</h3>
                <p class="text-gray-600 mb-6">
                    Walk in to any of our 50+ locations
                </p>
                <div class="space-y-3">
                    <a href="{{ route('locations') }}" class="block bg-red-500 text-white px-6 py-3 rounded-full font-semibold hover:bg-red-600 transition">
                        <i class="fas fa-map-marked-alt mr-2"></i> Find Nearest Location
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Promo Section -->
<section class="py-20 bg-gradient-to-b from-white to-orange-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 animate-on-scroll">
            <h2 class="heading-font text-5xl font-bold text-gray-900 mb-4">
                Current Promotions
            </h2>
            <p class="text-xl text-gray-600">
                Don't miss out on these amazing deals!
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Promo 1 -->
            <div class="bg-gradient-to-br from-orange-500 to-red-600 p-8 rounded-2xl shadow-xl text-white relative overflow-hidden animate-on-scroll">
                <div class="absolute top-0 right-0 w-32 h-32 bg-yellow-400 rounded-full opacity-20 -mr-16 -mt-16"></div>
                <div class="relative z-10">
                    <div class="inline-block bg-yellow-400 text-orange-900 px-4 py-2 rounded-full font-bold mb-4">
                        LIMITED TIME
                    </div>
                    <h3 class="heading-font text-4xl font-bold mb-4">Family Meal Deal</h3>
                    <p class="text-xl mb-6">12 pieces + 2 large sides + 4 drinks</p>
                    <div class="flex items-baseline mb-6">
                        <span class="text-5xl font-bold">RM 49.90</span>
                        <span class="text-2xl line-through ml-4 opacity-75">RM 65.90</span>
                    </div>
                    <a href="#" class="inline-block bg-white text-orange-600 px-8 py-3 rounded-full font-bold hover:bg-orange-50 transition">
                        Order Now
                    </a>
                </div>
            </div>
            
            <!-- Promo 2 -->
            <div class="bg-gradient-to-br from-yellow-500 to-orange-600 p-8 rounded-2xl shadow-xl text-white relative overflow-hidden animate-on-scroll" style="animation-delay: 0.1s;">
                <div class="absolute top-0 right-0 w-32 h-32 bg-red-400 rounded-full opacity-20 -mr-16 -mt-16"></div>
                <div class="relative z-10">
                    <div class="inline-block bg-red-500 text-white px-4 py-2 rounded-full font-bold mb-4">
                        WEEKDAY SPECIAL
                    </div>
                    <h3 class="heading-font text-4xl font-bold mb-4">Lunch Combo</h3>
                    <p class="text-xl mb-6">2 pieces chicken + fries + drink</p>
                    <div class="flex items-baseline mb-6">
                        <span class="text-5xl font-bold">RM 19.90</span>
                        <span class="text-lg ml-4 opacity-90">Mon-Fri 11AM-3PM</span>
                    </div>
                    <a href="#" class="inline-block bg-white text-orange-600 px-8 py-3 rounded-full font-bold hover:bg-orange-50 transition">
                        Order Now
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- How It Works -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 animate-on-scroll">
            <h2 class="heading-font text-5xl font-bold text-gray-900 mb-4">
                How Ordering Works
            </h2>
            <p class="text-xl text-gray-600">
                Simple, fast, and convenient
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <div class="text-center animate-on-scroll">
                <div class="w-20 h-20 bg-gradient-to-br from-orange-500 to-red-600 rounded-full flex items-center justify-center mx-auto mb-6 text-white text-3xl font-bold">
                    1
                </div>
                <h3 class="heading-font text-2xl font-bold text-gray-900 mb-3">Choose Your Method</h3>
                <p class="text-gray-600">Select delivery, pickup, or dine-in</p>
            </div>
            
            <div class="text-center animate-on-scroll" style="animation-delay: 0.1s;">
                <div class="w-20 h-20 bg-gradient-to-br from-yellow-500 to-orange-600 rounded-full flex items-center justify-center mx-auto mb-6 text-white text-3xl font-bold">
                    2
                </div>
                <h3 class="heading-font text-2xl font-bold text-gray-900 mb-3">Select Your Items</h3>
                <p class="text-gray-600">Browse our delicious menu</p>
            </div>
            
            <div class="text-center animate-on-scroll" style="animation-delay: 0.2s;">
                <div class="w-20 h-20 bg-gradient-to-br from-red-500 to-orange-600 rounded-full flex items-center justify-center mx-auto mb-6 text-white text-3xl font-bold">
                    3
                </div>
                <h3 class="heading-font text-2xl font-bold text-gray-900 mb-3">Complete Payment</h3>
                <p class="text-gray-600">Secure and easy checkout</p>
            </div>
            
            <div class="text-center animate-on-scroll" style="animation-delay: 0.3s;">
                <div class="w-20 h-20 bg-gradient-to-br from-green-500 to-orange-600 rounded-full flex items-center justify-center mx-auto mb-6 text-white text-3xl font-bold">
                    4
                </div>
                <h3 class="heading-font text-2xl font-bold text-gray-900 mb-3">Enjoy Your Meal</h3>
                <p class="text-gray-600">Hot, fresh, and delicious!</p>
            </div>
        </div>
    </div>
</section>

@endsection

