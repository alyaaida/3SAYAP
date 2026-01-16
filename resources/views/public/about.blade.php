@extends('layouts.app')

@section('title', 'About Us - 3Sayap')

@section('content')

<!-- Page Header -->
<section class="bg-gradient-to-br from-orange-600 to-red-600 py-20 relative overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-10 right-10 w-64 h-64 bg-yellow-400 rounded-full blur-3xl"></div>
    </div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
        <h1 class="heading-font text-6xl md:text-7xl font-bold text-white mb-6 animate-fadeInUp">
            OUR STORY
        </h1>
        <p class="text-xl text-orange-100 max-w-2xl mx-auto animate-fadeInUp" style="animation-delay: 0.1s;">
            From humble beginnings to Malaysia's favorite fried chicken
        </p>
    </div>
</section>

<!-- Our Story Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div class="animate-on-scroll">
                <div class="aspect-square bg-gray-100 rounded-3xl shadow-2xl overflow-hidden">
            <img src="{{ asset('images/food-menu/hero-chicken.jpg') }}" alt="Our Store" class="w-full h-full object-cover transform hover:scale-105 transition-transform duration-700" />
        </div>
            </div>
            
            <div class="space-y-6 animate-on-scroll">
                <h2 class="heading-font text-5xl font-bold text-gray-900">
                    How It All Started
                </h2>
                <p class="text-lg text-gray-700 leading-relaxed">
                    Founded in 2020, 3Sayap began as a small family restaurant in Kuala Lumpur with a simple mission: to serve the best halal fried chicken in Malaysia. Our founder, inspired by his grandmother's secret recipe of 11 herbs and spices, wanted to create something special that brought families together.
                </p>
                <p class="text-lg text-gray-700 leading-relaxed">
                    What started as a single outlet has now grown to over 50 locations nationwide, serving more than 1 million satisfied customers. But despite our growth, we've never compromised on quality or our commitment to halal excellence.
                </p>
                <p class="text-lg text-gray-700 leading-relaxed">
                    Every piece of chicken is prepared fresh daily using premium locally-sourced ingredients. We believe in supporting local farmers and communities while delivering exceptional taste in every bite.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Values Section -->
<section class="py-20 bg-gradient-to-b from-white to-orange-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 animate-on-scroll">
            <h2 class="heading-font text-5xl font-bold text-gray-900 mb-4">
                Our Core Values
            </h2>
            <p class="text-xl text-gray-600">
                What drives us every single day
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="bg-white p-8 rounded-2xl shadow-lg text-center transform hover:scale-105 transition-all animate-on-scroll">
                <div class="w-20 h-20 bg-gradient-to-br from-orange-500 to-red-600 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-certificate text-white text-3xl"></i>
                </div>
                <h3 class="heading-font text-2xl font-bold text-gray-900 mb-3">Halal Integrity</h3>
                <p class="text-gray-600">
                    100% JAKIM certified with transparent sourcing and preparation
                </p>
            </div>
            
            <div class="bg-white p-8 rounded-2xl shadow-lg text-center transform hover:scale-105 transition-all animate-on-scroll" style="animation-delay: 0.1s;">
                <div class="w-20 h-20 bg-gradient-to-br from-yellow-500 to-orange-600 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-star text-white text-3xl"></i>
                </div>
                <h3 class="heading-font text-2xl font-bold text-gray-900 mb-3">Quality First</h3>
                <p class="text-gray-600">
                    Premium ingredients and fresh preparation every single time
                </p>
            </div>
            
            <div class="bg-white p-8 rounded-2xl shadow-lg text-center transform hover:scale-105 transition-all animate-on-scroll" style="animation-delay: 0.2s;">
                <div class="w-20 h-20 bg-gradient-to-br from-red-500 to-orange-600 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-heart text-white text-3xl"></i>
                </div>
                <h3 class="heading-font text-2xl font-bold text-gray-900 mb-3">Community Love</h3>
                <p class="text-gray-600">
                    Supporting local communities and bringing families together
                </p>
            </div>
            
            <div class="bg-white p-8 rounded-2xl shadow-lg text-center transform hover:scale-105 transition-all animate-on-scroll" style="animation-delay: 0.3s;">
                <div class="w-20 h-20 bg-gradient-to-br from-green-500 to-orange-600 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-leaf text-white text-3xl"></i>
                </div>
                <h3 class="heading-font text-2xl font-bold text-gray-900 mb-3">Sustainability</h3>
                <p class="text-gray-600">
                    Eco-friendly packaging and responsible sourcing practices
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Statistics Section -->
<section class="py-20 bg-gradient-to-br from-orange-600 via-red-600 to-orange-700 relative overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-0 left-0 w-96 h-96 bg-yellow-400 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-red-400 rounded-full blur-3xl"></div>
    </div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-16 animate-on-scroll">
            <h2 class="heading-font text-5xl font-bold text-white mb-4">
                Our Journey in Numbers
            </h2>
        </div>
        
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
            <div class="text-center animate-on-scroll">
                <div class="heading-font text-6xl font-bold text-white mb-2">50+</div>
                <div class="text-orange-100 text-lg uppercase tracking-wider">Locations</div>
            </div>
            <div class="text-center animate-on-scroll" style="animation-delay: 0.1s;">
                <div class="heading-font text-6xl font-bold text-white mb-2">1M+</div>
                <div class="text-orange-100 text-lg uppercase tracking-wider">Happy Customers</div>
            </div>
            <div class="text-center animate-on-scroll" style="animation-delay: 0.2s;">
                <div class="heading-font text-6xl font-bold text-white mb-2">100%</div>
                <div class="text-orange-100 text-lg uppercase tracking-wider">Halal Certified</div>
            </div>
            <div class="text-center animate-on-scroll" style="animation-delay: 0.3s;">
                <div class="heading-font text-6xl font-bold text-white mb-2">4.8</div>
                <div class="text-orange-100 text-lg uppercase tracking-wider">Average Rating</div>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 animate-on-scroll">
            <h2 class="heading-font text-5xl font-bold text-gray-900 mb-4">
                Meet Our Leadership
            </h2>
            <p class="text-xl text-gray-600">
                The team behind Malaysia's favorite fried chicken
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
            <div class="text-center animate-on-scroll">
                <div class="w-48 h-48 rounded-full mx-auto mb-6 overflow-hidden shadow-xl">
                    <img src="{{ asset('images/food-menu/person1.jpg') }}" alt="founder & ceo" class="w-full h-full object-cover transform hover:scale-105 transition-transform duration-700" />
                </div>
                <h3 class="heading-font text-2xl font-bold text-gray-900 mb-2">Alya Aida</h3>
                <p class="text-orange-600 font-semibold mb-3">Founder & CEO</p>
                <p class="text-gray-600">
                    Visionary behind the secret recipe and halal excellence standards
                </p>
            </div>
            
            <div class="text-center animate-on-scroll" style="animation-delay: 0.1s;">
                <div class="w-48 h-48 rounded-full mx-auto mb-6 overflow-hidden shadow-xl">
                    <img src="{{ asset('images/food-menu/person2.jpeg') }}" alt="head chef" class="w-full h-full object-cover transform hover:scale-105 transition-transform duration-700" />
                </div>
                <h3 class="heading-font text-2xl font-bold text-gray-900 mb-2">Shauqina Balqis</h3>
                <p class="text-orange-600 font-semibold mb-3">Head Chef</p>
                <p class="text-gray-600">
                    Master of crispy perfection with 15 years culinary experience
                </p>
            </div>
            
           <div class="text-center animate-on-scroll" style="animation-delay: 0.2s;">
    <div class="w-48 h-48 rounded-full mx-auto mb-6 overflow-hidden shadow-xl">
        <img src="{{ asset('images/food-menu/person3.png') }}" 
             alt="operation director" 
             class="w-full h-full object-cover transform hover:scale-105 transition-transform duration-700" />
    </div>
    <h3 class="heading-font text-2xl font-bold text-gray-900 mb-2">A'dlin Sofea</h3>
    <p class="text-orange-600 font-semibold mb-3">Operations Director</p>
    <p class="text-gray-600">
        Ensuring quality and consistency across all locations
    </p>
</div>
        </div>
    </div>
</section>

@endsection
