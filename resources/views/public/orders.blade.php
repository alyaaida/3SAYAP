@extends('layouts.app')

@section('title', 'Checkout - 3Sayap')

@section('content')

<!-- Checkout Section -->
<section class="py-12 bg-gray-50 min-h-screen">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Back Button -->
        <a href="{{ route('menu') }}" class="inline-flex items-center text-gray-700 hover:text-orange-600 mb-8 transition">
            <i class="fas fa-arrow-left mr-2"></i>
            <span class="font-semibold">Back to Menu</span>
        </a>

        <!-- Page Title -->
        <h1 class="heading-font text-5xl font-bold text-gray-900 mb-12 uppercase tracking-wider">
            CHECKOUT
        </h1>

        <div class="grid lg:grid-cols-3 gap-8">
            
            <!-- Order Summary - Left Side -->
            <div class="lg:col-span-1 order-2 lg:order-1">
                <div class="bg-white rounded-2xl shadow-lg p-6 sticky top-24">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6 uppercase tracking-wide">
                        Order Summary
                    </h2>

                    <!-- Cart Items -->
                    <div id="cartItemsList" class="space-y-4 mb-6 max-h-64 overflow-y-auto">
                        <!-- Cart items will be populated by JavaScript -->
                        <div class="text-center text-gray-500 py-8" id="emptyCartMessage">
                            <i class="fas fa-shopping-cart text-4xl mb-3 opacity-50"></i>
                            <p>Your cart is empty</p>
                        </div>
                    </div>

                    <!-- Pricing Summary -->
                    <div class="border-t border-gray-200 pt-4 space-y-3">
                        <div class="flex justify-between text-gray-700">
                            <span>Subtotal</span>
                            <span id="subtotalAmount" class="font-semibold">RM 0.00</span>
                        </div>
                        <div class="flex justify-between text-gray-700">
                            <span>Delivery Fee</span>
                            <span class="font-semibold">RM 5.00</span>
                        </div>
                        <div class="flex justify-between items-center pt-3 border-t border-gray-200">
                            <span class="text-xl font-bold text-gray-900">Total</span>
                            <span id="totalAmount" class="text-3xl font-bold text-red-600">RM 0.00</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Checkout Form - Right Side -->
            <div class="lg:col-span-2 order-1 lg:order-2">
                
                <!-- Checkout Form -->
                <form id="checkoutForm" class="space-y-6">
                    @csrf

                    <!-- Delivery Details Section -->
                    <div class="bg-white rounded-2xl shadow-lg p-8">
                        <h2 class="text-2xl font-bold text-gray-900 mb-6 flex items-center uppercase tracking-wide">
                            <i class="fas fa-map-marker-alt text-red-600 mr-3"></i>
                            Delivery Details
                        </h2>

                        <div class="grid md:grid-cols-2 gap-6">
                            <!-- Full Name -->
                            <div>
                                <label for="fullName" class="block text-sm font-semibold text-gray-700 mb-2">
                                    Full Name
                                </label>
                                <input 
                                    type="text" 
                                    id="fullName" 
                                    name="full_name"
                                    placeholder="Your name" 
                                    required
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent transition">
                            </div>

                            <!-- Phone Number -->
                            <div>
                                <label for="phoneNumber" class="block text-sm font-semibold text-gray-700 mb-2">
                                    Phone Number
                                </label>
                                <input 
                                    type="tel" 
                                    id="phoneNumber" 
                                    name="phone_number"
                                    placeholder="01x-xxxxxxx" 
                                    required
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent transition">
                            </div>
                        </div>

                        <!-- Delivery Address -->
                        <div class="mt-6">
                            <label for="deliveryAddress" class="block text-sm font-semibold text-gray-700 mb-2">
                                Delivery Address
                            </label>
                            <textarea 
                                id="deliveryAddress" 
                                name="delivery_address"
                                rows="4" 
                                placeholder="Full address with postcode" 
                                required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent transition resize-none"></textarea>
                        </div>

                        <!-- Order Notes -->
                        <div class="mt-6">
                            <label for="orderNotes" class="block text-sm font-semibold text-gray-700 mb-2">
                                Order Notes (Optional)
                            </label>
                            <textarea 
                                id="orderNotes" 
                                name="order_notes"
                                rows="3" 
                                placeholder="Any special instructions?" 
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent transition resize-none"></textarea>
                        </div>
                    </div>

                    <!-- Payment Details Section -->
                    <div class="bg-white rounded-2xl shadow-lg p-8">
                        <h2 class="text-2xl font-bold text-gray-900 mb-6 flex items-center uppercase tracking-wide">
                            <i class="fas fa-credit-card text-red-600 mr-3"></i>
                            Payment Details
                        </h2>

                        <!-- Security Notice -->
                        <div class="bg-gray-50 border border-gray-200 rounded-lg p-4 mb-6 flex items-center">
                            <i class="fas fa-lock text-gray-500 mr-3"></i>
                            <span class="text-sm text-gray-600">Your payment information is secure and encrypted</span>
                        </div>

                        <!-- Card Number -->
                        <div class="mb-6">
                            <label for="cardNumber" class="block text-sm font-semibold text-gray-700 mb-2">
                                Card Number
                            </label>
                            <input 
                                type="text" 
                                id="cardNumber" 
                                name="card_number"
                                placeholder="1234 5678 9012 3456" 
                                maxlength="19"
                                required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent transition">
                        </div>

                        <!-- Card Name -->
                        <div class="mb-6">
                            <label for="cardName" class="block text-sm font-semibold text-gray-700 mb-2">
                                Name on Card
                            </label>
                            <input 
                                type="text" 
                                id="cardName" 
                                name="card_name"
                                placeholder="JOHN DOE" 
                                required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent transition uppercase">
                        </div>

                        <!-- Expiry and CVV -->
                        <div class="grid grid-cols-2 gap-6">
                            <!-- Expiry Date -->
                            <div>
                                <label for="expiryDate" class="block text-sm font-semibold text-gray-700 mb-2">
                                    Expiry Date
                                </label>
                                <input 
                                    type="text" 
                                    id="expiryDate" 
                                    name="expiry_date"
                                    placeholder="MM/YY" 
                                    maxlength="5"
                                    required
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent transition">
                            </div>

                            <!-- CVV -->
                            <div>
                                <label for="cvv" class="block text-sm font-semibold text-gray-700 mb-2">
                                    CVV
                                </label>
                                <input 
                                    type="password" 
                                    id="cvv" 
                                    name="cvv"
                                    placeholder="•••" 
                                    maxlength="4"
                                    required
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent transition">
                            </div>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <button 
                        type="submit" 
                        id="submitBtn"
                        class="w-full bg-gradient-to-r from-orange-500 to-red-600 text-white py-4 px-6 rounded-lg text-lg font-bold hover:from-orange-600 hover:to-red-700 transition-all transform hover:scale-[1.02] shadow-lg disabled:opacity-50 disabled:cursor-not-allowed disabled:hover:scale-100">
                        <i class="fas fa-lock mr-2"></i>
                        <span id="submitBtnText">Place Order - RM 0.00</span>
                    </button>
                </form>
            </div>

        </div>
    </div>
</section>

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const deliveryFee = 5.00;
    let cart = JSON.parse(localStorage.getItem('cart')) || [];

    // Initialize page
    updateCartDisplay();
    updateOrderSummary();

    // Update cart display in sidebar
    function updateCartDisplay() {
        const cartItemsList = document.getElementById('cartItemsList');
        const emptyMessage = document.getElementById('emptyCartMessage');

        if (cart.length === 0) {
            emptyMessage.classList.remove('hidden');
            return;
        }

        emptyMessage.classList.add('hidden');
        cartItemsList.innerHTML = cart.map(item => `
            <div class="flex items-center gap-4 pb-4 border-b border-gray-100">
                <div class="w-16 h-16 bg-gradient-to-br from-orange-200 to-red-200 rounded-lg flex items-center justify-center">
                    <i class="fas fa-drumstick-bite text-2xl text-orange-500"></i>
                </div>
                <div class="flex-1">
                    <h4 class="font-semibold text-gray-900">${item.name}</h4>
                    <p class="text-sm text-gray-500">x${item.quantity}</p>
                </div>
                <div class="text-right">
                    <p class="font-bold text-gray-900">RM ${(item.price * item.quantity).toFixed(2)}</p>
                </div>
            </div>
        `).join('');
    }

    // Update order summary totals
    function updateOrderSummary() {
        const subtotal = cart.reduce((sum, item) => sum + (item.price * item.quantity), 0);
        const total = subtotal + deliveryFee;

        document.getElementById('subtotalAmount').textContent = `RM ${subtotal.toFixed(2)}`;
        document.getElementById('totalAmount').textContent = `RM ${total.toFixed(2)}`;
        document.getElementById('submitBtnText').textContent = `Place Order - RM ${total.toFixed(2)}`;
    }

    // Format card number with spaces
    document.getElementById('cardNumber')?.addEventListener('input', function(e) {
        let value = e.target.value.replace(/\s+/g, '').replace(/[^0-9]/gi, '');
        let formattedValue = value.match(/.{1,4}/g)?.join(' ') || value;
        e.target.value = formattedValue;
    });

    // Format expiry date
    document.getElementById('expiryDate')?.addEventListener('input', function(e) {
        let value = e.target.value.replace(/\s+/g, '').replace(/[^0-9]/gi, '');
        if (value.length >= 2) {
            e.target.value = value.substring(0, 2) + '/' + value.substring(2, 4);
        } else {
            e.target.value = value;
        }
    });

    // Force uppercase for card name
    document.getElementById('cardName')?.addEventListener('input', function(e) {
        e.target.value = e.target.value.toUpperCase();
    });

    // CVV numbers only
    document.getElementById('cvv')?.addEventListener('input', function(e) {
        e.target.value = e.target.value.replace(/\D/g, '').slice(0, 4);
    });

    // Show success modal
    function showSuccessModal() {
        const modal = document.createElement('div');
        modal.className = 'fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50';
        modal.innerHTML = `
            <div class="bg-white rounded-2xl p-8 max-w-md mx-4 text-center animate-fadeInUp">
                <div class="w-20 h-20 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-check text-4xl text-green-500"></i>
                </div>
                <h2 class="text-3xl font-bold text-gray-900 mb-3">Order Completed!</h2>
                <p class="text-lg text-gray-600 mb-6">Please enjoy your meal</p>
                <button onclick="window.location.href='{{ route('home') }}'" 
                        class="bg-orange-500 text-white px-8 py-3 rounded-lg font-semibold hover:bg-orange-600 transition">
                    Back to Home
                </button>
            </div>
        `;
        document.body.appendChild(modal);
    }

    // Handle form submission
    document.getElementById('checkoutForm')?.addEventListener('submit', function(e) {
        e.preventDefault();

        if (cart.length === 0) {
            alert('Your cart is empty!');
            return;
        }

        const submitBtn = document.getElementById('submitBtn');
        const submitBtnText = document.getElementById('submitBtnText');
        
        // Disable button and show loading
        submitBtn.disabled = true;
        submitBtnText.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i>Processing Payment...';

        // Simulate payment processing
        setTimeout(() => {
            // Clear cart
            localStorage.removeItem('cart');
            
            // Update cart count badge
            if (typeof updateCartCount === 'function') {
                updateCartCount(0);
            }
            
            // Show success modal
            showSuccessModal();
            
            // Re-enable button
            submitBtn.disabled = false;
            const subtotal = cart.reduce((sum, item) => sum + (item.price * item.quantity), 0);
            const total = subtotal + deliveryFee;
            submitBtnText.innerHTML = '<i class="fas fa-lock mr-2"></i>Place Order - RM ' + total.toFixed(2);
        }, 2000);
    });
});
</script>
@endpush

@endsection