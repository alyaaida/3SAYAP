<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Tailwind CSS -->
<script src="https://cdn.tailwindcss.com"></script>

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">

<!-- Your CSS -->
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>@yield('title', 'Home')</title>
</head>

<body>
<nav class="fixed top-0 w-full z-50 bg-gradient-to-r from-[#2b1208] to-[#120806] shadow-lg">
    <div class="max-w-7xl mx-auto px-6">
        <div class="flex items-center justify-between h-20">

            <!-- Logo -->
            <a href="{{ route('home') }}" class="flex items-center space-x-3">
                <div class="w-10 h-10 bg-orange-500 rounded-full flex items-center justify-center">
                    <i class="fas fa-drumstick-bite text-white text-lg"></i>
                </div>
                <span class="text-white text-2xl font-bold">
                    3<span class="text-orange-500">SAYAP</span>
                </span>
            </a>

        
<!-- Navigation -->
<div class="nav-page">
    <div class="{{ request()->routeIs('home') ? 'active' : '' }}">
        <a href="{{ route('home') }}"><span>Home</span></a>
    </div>

    <div class="{{ request()->routeIs(['menu', 'search']) ? 'active' : '' }}">
        <a href="{{ route('menu') }}"><span>Menu</span></a>
    </div>

    <div class="{{ request()->routeIs('promotion') ? 'active' : '' }}">
        <a href="{{ route('promotion') }}"><span>Promotions</span></a>
    </div>
</div>

           
            </div>

        </div>
    </div>
</nav>


   

    @yield('content')

    <!-- Footer -->
    <footer class="mt-20">
    <!-- Main Footer -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">
            <!-- Brand Column -->
            <div class="space-y-4">
                <div class="flex items-center space-x-3">
                    <div class="w-12 h-12 bg-gradient-to-br from-orange-500 to-red-600 rounded-full flex items-center justify-center">
                        <i class="fas fa-drumstick-bite text-white text-2xl"></i>
                    </div>
                    <span class="heading-font text-3xl font-bold text-white">
                        3<span class="text-orange-500">Sayap</span>
                    </span>
                </div>
                <p class="text-gray-300 text-sm leading-relaxed">
                    Malaysia's favorite halal fried chicken. Crispy, juicy, and finger-lickin' good since 2020.
                </p>
                <div class="flex space-x-3">
                    <a href="#" class="social-icon">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-tiktok"></i>
                    </a>
                </div>
            </div>
            
            <!-- Quick Links -->
            <div>
                <h3 class="heading-font text-xl text-white mb-6">Quick Links</h3>
                <ul class="space-y-3">
                    <li><a href="{{ route('home') }}" class="footer-link flex items-center"><i class="fas fa-chevron-right text-orange-500 mr-2 text-xs"></i> Home</a></li>
                    <li><a href="{{ route('menu') }}" class="footer-link flex items-center"><i class="fas fa-chevron-right text-orange-500 mr-2 text-xs"></i> Our Menu</a></li>
                    <li><a href="{{ route('about') }}" class="footer-link flex items-center"><i class="fas fa-chevron-right text-orange-500 mr-2 text-xs"></i> About Us</a></li>
                    <li><a href="{{ route('locations') }}" class="footer-link flex items-center"><i class="fas fa-chevron-right text-orange-500 mr-2 text-xs"></i> Locations</a></li>
                    <li><a href="{{ route('orders') }}" class="footer-link flex items-center"><i class="fas fa-chevron-right text-orange-500 mr-2 text-xs"></i> Order Online</a></li>
                </ul>
            </div>
            
            <!-- Customer Service -->
            <div>
                <h3 class="heading-font text-xl text-white mb-6">Customer Service</h3>
                <ul class="space-y-3">
                    <li><a href="{{ route('contact') }}" class="footer-link flex items-center"><i class="fas fa-chevron-right text-orange-500 mr-2 text-xs"></i> Contact Us</a></li>
                    <li><a href="#" class="footer-link flex items-center"><i class="fas fa-chevron-right text-orange-500 mr-2 text-xs"></i> FAQs</a></li>
                    <li><a href="#" class="footer-link flex items-center"><i class="fas fa-chevron-right text-orange-500 mr-2 text-xs"></i> Delivery Policy</a></li>
                    <li><a href="#" class="footer-link flex items-center"><i class="fas fa-chevron-right text-orange-500 mr-2 text-xs"></i> Terms & Conditions</a></li>
                    <li><a href="#" class="footer-link flex items-center"><i class="fas fa-chevron-right text-orange-500 mr-2 text-xs"></i> Privacy Policy</a></li>
                </ul>
            </div>
            
            <!-- Contact Info -->
            <div>
                <h3 class="heading-font text-xl text-white mb-6">Get In Touch</h3>
                <ul class="space-y-4">
                    <li class="flex items-start space-x-3">
                        <i class="fas fa-map-marker-alt text-orange-500 mt-1"></i>
                        <span class="text-gray-300 text-sm">
                            Jalan Genting Kelang,<br>
                            53300 Kuala Lumpur,<br>
                            Malaysia
                        </span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <i class="fas fa-phone text-orange-500"></i>
                        <a href="tel:+60123456789" class="text-gray-300 text-sm hover:text-orange-500 transition">
                            +60 12-345 6789
                        </a>
                    </li>
                    <li class="flex items-center space-x-3">
                        <i class="fas fa-envelope text-orange-500"></i>
                        <a href="mailto:info@3sayap.com" class="text-gray-300 text-sm hover:text-orange-500 transition">
                            info@3sayap.com
                        </a>
                    </li>
                    <li class="flex items-center space-x-3">
                        <i class="fas fa-clock text-orange-500"></i>
                        <span class="text-gray-300 text-sm">
                            Daily: 10:00 AM - 10:00 PM
                        </span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    
    <!-- Bottom Bar -->
    <div class="border-t border-gray-700">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
            <div class="flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
                <p class="text-gray-400 text-sm text-center md:text-left">
                    &copy; {{ date('Y') }} 3Sayap. All rights reserved. | 100% Halal Certified
                </p>
                <div class="flex items-center space-x-6">
                    <img src="/images/halal-logo.png" alt="Halal Certified" class="h-8 opacity-75 hover:opacity-100 transition" onerror="this.style.display='none'">
                    <span class="text-gray-400 text-sm">Made with <i class="fas fa-heart text-red-500"></i> in Malaysia</span>
                </div>
            </div>
        </div>
    </div>
</footer>

    <script src="{{ asset('js/public.js') }}"></script>
</body>

</html>

