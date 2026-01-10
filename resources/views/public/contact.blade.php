@extends('layouts.app')

@section('title', 'Contact Us - 3Sayap')

@section('content')

<!-- Page Header -->
<section class="bg-gradient-to-br from-orange-600 to-red-600 py-20 relative overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-10 right-10 w-64 h-64 bg-yellow-400 rounded-full blur-3xl"></div>
    </div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
        <h1 class="heading-font text-6xl md:text-7xl font-bold text-white mb-6 animate-fadeInUp">
            GET IN TOUCH
        </h1>
        <p class="text-xl text-orange-100 max-w-2xl mx-auto animate-fadeInUp" style="animation-delay: 0.1s;">
            We'd love to hear from you! Reach out for any questions or feedback
        </p>
    </div>
</section>

<!-- Contact Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
            <!-- Contact Form -->
            <div class="animate-on-scroll">
                <h2 class="heading-font text-4xl font-bold text-gray-900 mb-8">
                    Send Us a Message
                </h2>
                
                <form action="#" method="POST" class="space-y-6">
                    @csrf
                    
                    <div>
                        <label for="name" class="block text-sm font-semibold text-gray-700 mb-2">Your Name</label>
                        <input type="text" id="name" name="name" required
                            class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:border-orange-500 focus:outline-none transition">
                    </div>
                    
                    <div>
                        <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">Email Address</label>
                        <input type="email" id="email" name="email" required
                            class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:border-orange-500 focus:outline-none transition">
                    </div>
                    
                    <div>
                        <label for="phone" class="block text-sm font-semibold text-gray-700 mb-2">Phone Number</label>
                        <input type="tel" id="phone" name="phone"
                            class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:border-orange-500 focus:outline-none transition">
                    </div>
                    
                    <div>
                        <label for="subject" class="block text-sm font-semibold text-gray-700 mb-2">Subject</label>
                        <select id="subject" name="subject" required
                            class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:border-orange-500 focus:outline-none transition">
                            <option value="">Select a subject</option>
                            <option value="general">General Inquiry</option>
                            <option value="feedback">Feedback</option>
                            <option value="complaint">Complaint</option>
                            <option value="franchise">Franchise Opportunity</option>
                            <option value="catering">Catering Services</option>
                        </select>
                    </div>
                    
                    <div>
                        <label for="message" class="block text-sm font-semibold text-gray-700 mb-2">Message</label>
                        <textarea id="message" name="message" rows="6" required
                            class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:border-orange-500 focus:outline-none transition"></textarea>
                    </div>
                    
                    <button type="submit" class="btn-primary w-full flex items-center justify-center">
                        <i class="fas fa-paper-plane mr-2"></i>
                        Send Message
                    </button>
                </form>
            </div>
            
            <!-- Contact Info -->
            <div class="space-y-8 animate-on-scroll">
                <div>
                    <h2 class="heading-font text-4xl font-bold text-gray-900 mb-8">
                        Contact Information
                    </h2>
                </div>
                
                <!-- Address -->
                <div class="flex items-start space-x-4 p-6 bg-gradient-to-br from-orange-50 to-white rounded-2xl shadow-lg">
                    <div class="w-14 h-14 bg-gradient-to-br from-orange-500 to-red-600 rounded-full flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-map-marker-alt text-white text-xl"></i>
                    </div>
                    <div>
                        <h3 class="heading-font text-xl font-bold text-gray-900 mb-2">Head Office</h3>
                        <p class="text-gray-700">
                            Jalan Genting Kelang,<br>
                            53300 Kuala Lumpur,<br>
                            Malaysia
                        </p>
                    </div>
                </div>
                
                <!-- Phone -->
                <div class="flex items-start space-x-4 p-6 bg-gradient-to-br from-yellow-50 to-white rounded-2xl shadow-lg">
                    <div class="w-14 h-14 bg-gradient-to-br from-yellow-500 to-orange-600 rounded-full flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-phone text-white text-xl"></i>
                    </div>
                    <div>
                        <h3 class="heading-font text-xl font-bold text-gray-900 mb-2">Phone</h3>
                        <p class="text-gray-700">
                            <a href="tel:+60123456789" class="hover:text-orange-600 transition">+60 12-345 6789</a><br>
                            <a href="tel:+60398765432" class="hover:text-orange-600 transition">+603-9876 5432</a>
                        </p>
                    </div>
                </div>
                
                <!-- Email -->
                <div class="flex items-start space-x-4 p-6 bg-gradient-to-br from-red-50 to-white rounded-2xl shadow-lg">
                    <div class="w-14 h-14 bg-gradient-to-br from-red-500 to-orange-600 rounded-full flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-envelope text-white text-xl"></i>
                    </div>
                    <div>
                        <h3 class="heading-font text-xl font-bold text-gray-900 mb-2">Email</h3>
                        <p class="text-gray-700">
                            <a href="mailto:info@3sayap.com" class="hover:text-orange-600 transition">info@3sayap.com</a><br>
                            <a href="mailto:support@3sayap.com" class="hover:text-orange-600 transition">support@3sayap.com</a>
                        </p>
                    </div>
                </div>
                
                <!-- Business Hours -->
                <div class="flex items-start space-x-4 p-6 bg-gradient-to-br from-green-50 to-white rounded-2xl shadow-lg">
                    <div class="w-14 h-14 bg-gradient-to-br from-green-500 to-orange-600 rounded-full flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-clock text-white text-xl"></i>
                    </div>
                    <div>
                        <h3 class="heading-font text-xl font-bold text-gray-900 mb-2">Business Hours</h3>
                        <p class="text-gray-700">
                            Monday - Sunday<br>
                            10:00 AM - 10:00 PM
                        </p>
                    </div>
                </div>
                
                <!-- Social Media -->
                <div class="p-6 bg-gradient-to-br from-purple-50 to-white rounded-2xl shadow-lg">
                    <h3 class="heading-font text-xl font-bold text-gray-900 mb-4">Follow Us</h3>
                    <div class="flex space-x-4">
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
            </div>
        </div>
    </div>
</section>

<!-- Map Section -->
<section class="py-20 bg-gradient-to-b from-white to-orange-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12 animate-on-scroll">
            <h2 class="heading-font text-5xl font-bold text-gray-900 mb-4">
                Find Us On The Map
            </h2>
            <p class="text-xl text-gray-600">
                Visit our head office or any of our 50+ locations nationwide
            </p>
        </div>
        
        <div class="aspect-video bg-gray-300 rounded-3xl shadow-2xl overflow-hidden animate-on-scroll">
            <!-- Placeholder for Google Maps embed -->
            <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-orange-200 to-red-200">
                <div class="text-center">
                    <i class="fas fa-map-marked-alt text-6xl text-orange-500 mb-4"></i>
                    <p class="text-gray-700 font-semibold">Google Maps Integration</p>
                    <p class="text-sm text-gray-600 mt-2">Replace with actual Google Maps iframe</p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
