@extends('layouts.app')

@section('title', 'Our Locations - 3Sayap')

@section('content')

<!-- Page Header -->
<section class="bg-gradient-to-br from-orange-600 to-red-600 py-20 relative overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-10 right-10 w-64 h-64 bg-yellow-400 rounded-full blur-3xl"></div>
    </div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
        <h1 class="heading-font text-6xl md:text-7xl font-bold text-white mb-6 animate-fadeInUp">
            OUR LOCATIONS
        </h1>
        <p class="text-xl text-orange-100 max-w-2xl mx-auto animate-fadeInUp" style="animation-delay: 0.1s;">
            Find your nearest 3Sayap outlet for delicious halal fried chicken
        </p>
    </div>
</section>

<!-- Search Section -->
<section class="py-12 bg-white border-b">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-2xl mx-auto animate-on-scroll">
            <div class="relative">
                <input type="text" placeholder="Search by city or area..." 
                    class="w-full px-6 py-4 pr-12 border-2 border-gray-300 rounded-full focus:border-orange-500 focus:outline-none text-lg">
                <button class="absolute right-2 top-1/2 transform -translate-y-1/2 bg-orange-500 text-white w-10 h-10 rounded-full flex items-center justify-center hover:bg-orange-600 transition">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </div>
</section>

<!-- Locations Grid -->
<section class="py-20 bg-gradient-to-b from-white to-orange-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 animate-on-scroll">
            <h2 class="heading-font text-5xl font-bold text-gray-900 mb-4">
                50+ Locations Nationwide
            </h2>
            <p class="text-xl text-gray-600">
                Fresh, crispy chicken near you!
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Location 1 -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden transform hover:scale-105 transition-all duration-300 animate-on-scroll">
                <div class="h-48 bg-gradient-to-br from-orange-200 to-red-200 flex items-center justify-center">
                    <i class="fas fa-store text-6xl text-orange-500"></i>
                </div>
                <div class="p-6">
                    <h3 class="heading-font text-2xl font-bold text-gray-900 mb-3">KLCC</h3>
                    <div class="space-y-3 text-gray-700">
                        <p class="flex items-start">
                            <i class="fas fa-map-marker-alt text-orange-500 mt-1 mr-3"></i>
                            <span>Lot G-23, Suria KLCC, Kuala Lumpur City Centre</span>
                        </p>
                        <p class="flex items-center">
                            <i class="fas fa-phone text-orange-500 mr-3"></i>
                            <a href="tel:+60321234567" class="hover:text-orange-600">+603-2123 4567</a>
                        </p>
                        <p class="flex items-center">
                            <i class="fas fa-clock text-orange-500 mr-3"></i>
                            <span>10:00 AM - 10:00 PM</span>
                        </p>
                    </div>
                    <div class="mt-6 flex gap-3">
                        <a href="#" class="flex-1 btn-primary text-center py-2 text-sm">
                            <i class="fas fa-directions mr-1"></i> Directions
                        </a>
                        <a href="tel:+60321234567" class="flex-1 btn-secondary text-center py-2 text-sm">
                            <i class="fas fa-phone mr-1"></i> Call
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Location 2 -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden transform hover:scale-105 transition-all duration-300 animate-on-scroll" style="animation-delay: 0.1s;">
                <div class="h-48 bg-gradient-to-br from-yellow-200 to-orange-200 flex items-center justify-center">
                    <i class="fas fa-store text-6xl text-yellow-600"></i>
                </div>
                <div class="p-6">
                    <h3 class="heading-font text-2xl font-bold text-gray-900 mb-3">Pavilion KL</h3>
                    <div class="space-y-3 text-gray-700">
                        <p class="flex items-start">
                            <i class="fas fa-map-marker-alt text-orange-500 mt-1 mr-3"></i>
                            <span>Level 4, Pavilion Kuala Lumpur, Bukit Bintang</span>
                        </p>
                        <p class="flex items-center">
                            <i class="fas fa-phone text-orange-500 mr-3"></i>
                            <a href="tel:+60321234568" class="hover:text-orange-600">+603-2123 4568</a>
                        </p>
                        <p class="flex items-center">
                            <i class="fas fa-clock text-orange-500 mr-3"></i>
                            <span>10:00 AM - 10:00 PM</span>
                        </p>
                    </div>
                    <div class="mt-6 flex gap-3">
                        <a href="#" class="flex-1 btn-primary text-center py-2 text-sm">
                            <i class="fas fa-directions mr-1"></i> Directions
                        </a>
                        <a href="tel:+60321234568" class="flex-1 btn-secondary text-center py-2 text-sm">
                            <i class="fas fa-phone mr-1"></i> Call
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Location 3 -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden transform hover:scale-105 transition-all duration-300 animate-on-scroll" style="animation-delay: 0.2s;">
                <div class="h-48 bg-gradient-to-br from-red-200 to-orange-200 flex items-center justify-center">
                    <i class="fas fa-store text-6xl text-red-500"></i>
                </div>
                <div class="p-6">
                    <h3 class="heading-font text-2xl font-bold text-gray-900 mb-3">Mid Valley</h3>
                    <div class="space-y-3 text-gray-700">
                        <p class="flex items-start">
                            <i class="fas fa-map-marker-alt text-orange-500 mt-1 mr-3"></i>
                            <span>LG-032, Mid Valley Megamall, Kuala Lumpur</span>
                        </p>
                        <p class="flex items-center">
                            <i class="fas fa-phone text-orange-500 mr-3"></i>
                            <a href="tel:+60321234569" class="hover:text-orange-600">+603-2123 4569</a>
                        </p>
                        <p class="flex items-center">
                            <i class="fas fa-clock text-orange-500 mr-3"></i>
                            <span>10:00 AM - 10:00 PM</span>
                        </p>
                    </div>
                    <div class="mt-6 flex gap-3">
                        <a href="#" class="flex-1 btn-primary text-center py-2 text-sm">
                            <i class="fas fa-directions mr-1"></i> Directions
                        </a>
                        <a href="tel:+60321234569" class="flex-1 btn-secondary text-center py-2 text-sm">
                            <i class="fas fa-phone mr-1"></i> Call
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Location 4 -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden transform hover:scale-105 transition-all duration-300 animate-on-scroll">
                <div class="h-48 bg-gradient-to-br from-green-200 to-yellow-200 flex items-center justify-center">
                    <i class="fas fa-store text-6xl text-green-600"></i>
                </div>
                <div class="p-6">
                    <h3 class="heading-font text-2xl font-bold text-gray-900 mb-3">Sunway Pyramid</h3>
                    <div class="space-y-3 text-gray-700">
                        <p class="flex items-start">
                            <i class="fas fa-map-marker-alt text-orange-500 mt-1 mr-3"></i>
                            <span>LG2.126, Sunway Pyramid, Petaling Jaya</span>
                        </p>
                        <p class="flex items-center">
                            <i class="fas fa-phone text-orange-500 mr-3"></i>
                            <a href="tel:+60356341234" class="hover:text-orange-600">+603-5634 1234</a>
                        </p>
                        <p class="flex items-center">
                            <i class="fas fa-clock text-orange-500 mr-3"></i>
                            <span>10:00 AM - 10:00 PM</span>
                        </p>
                    </div>
                    <div class="mt-6 flex gap-3">
                        <a href="#" class="flex-1 btn-primary text-center py-2 text-sm">
                            <i class="fas fa-directions mr-1"></i> Directions
                        </a>
                        <a href="tel:+60356341234" class="flex-1 btn-secondary text-center py-2 text-sm">
                            <i class="fas fa-phone mr-1"></i> Call
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Location 5 -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden transform hover:scale-105 transition-all duration-300 animate-on-scroll" style="animation-delay: 0.1s;">
                <div class="h-48 bg-gradient-to-br from-blue-200 to-purple-200 flex items-center justify-center">
                    <i class="fas fa-store text-6xl text-blue-600"></i>
                </div>
                <div class="p-6">
                    <h3 class="heading-font text-2xl font-bold text-gray-900 mb-3">1 Utama</h3>
                    <div class="space-y-3 text-gray-700">
                        <p class="flex items-start">
                            <i class="fas fa-map-marker-alt text-orange-500 mt-1 mr-3"></i>
                            <span>S321, 1 Utama Shopping Centre, Petaling Jaya</span>
                        </p>
                        <p class="flex items-center">
                            <i class="fas fa-phone text-orange-500 mr-3"></i>
                            <a href="tel:+60377251234" class="hover:text-orange-600">+603-7725 1234</a>
                        </p>
                        <p class="flex items-center">
                            <i class="fas fa-clock text-orange-500 mr-3"></i>
                            <span>10:00 AM - 10:00 PM</span>
                        </p>
                    </div>
                    <div class="mt-6 flex gap-3">
                        <a href="#" class="flex-1 btn-primary text-center py-2 text-sm">
                            <i class="fas fa-directions mr-1"></i> Directions
                        </a>
                        <a href="tel:+60377251234" class="flex-1 btn-secondary text-center py-2 text-sm">
                            <i class="fas fa-phone mr-1"></i> Call
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Location 6 -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden transform hover:scale-105 transition-all duration-300 animate-on-scroll" style="animation-delay: 0.2s;">
                <div class="h-48 bg-gradient-to-br from-purple-200 to-pink-200 flex items-center justify-center">
                    <i class="fas fa-store text-6xl text-purple-600"></i>
                </div>
                <div class="p-6">
                    <h3 class="heading-font text-2xl font-bold text-gray-900 mb-3">Gurney Plaza</h3>
                    <div class="space-y-3 text-gray-700">
                        <p class="flex items-start">
                            <i class="fas fa-map-marker-alt text-orange-500 mt-1 mr-3"></i>
                            <span>170-01-55, Gurney Plaza, Penang</span>
                        </p>
                        <p class="flex items-center">
                            <i class="fas fa-phone text-orange-500 mr-3"></i>
                            <a href="tel:+60422264567" class="hover:text-orange-600">+604-2226 4567</a>
                        </p>
                        <p class="flex items-center">
                            <i class="fas fa-clock text-orange-500 mr-3"></i>
                            <span>10:00 AM - 10:00 PM</span>
                        </p>
                    </div>
                    <div class="mt-6 flex gap-3">
                        <a href="#" class="flex-1 btn-primary text-center py-2 text-sm">
                            <i class="fas fa-directions mr-1"></i> Directions
                        </a>
                        <a href="tel:+60422264567" class="flex-1 btn-secondary text-center py-2 text-sm">
                            <i class="fas fa-phone mr-1"></i> Call
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-16 animate-on-scroll">
            <p class="text-gray-600 mb-6">Can't find a location near you?</p>
            <a href="{{ route('contact') }}" class="btn-primary inline-flex items-center">
                <i class="fas fa-envelope mr-2"></i>
                Contact Us for More Info
            </a>
        </div>
    </div>
</section>

@endsection
