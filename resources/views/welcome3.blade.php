@extends('layouts.main')

@section('title', 'OnlyCars - Premium Car Community Merchandise')

@section('content')

<!-- Hero Section -->
<section class="relative min-h-screen flex items-center justify-center overflow-hidden">
    <!-- Animated Background -->
    <div class="absolute inset-0">
        <div class="absolute inset-0 bg-gradient-to-br from-dark-900 via-dark-800 to-dark-900"></div>
        <div class="absolute inset-0 opacity-20">
            <img src="/placeholder.svg?height=1080&width=1920&text=Car+Merchandise" alt="Car Merchandise" class="w-full h-full object-cover">
        </div>
        <!-- Animated particles -->
        <div class="absolute inset-0">
            <div class="absolute top-1/4 left-1/4 w-2 h-2 bg-neon-green rounded-full animate-float"></div>
            <div class="absolute top-1/3 right-1/3 w-1 h-1 bg-neon-blue rounded-full animate-float" style="animation-delay: 1s;"></div>
            <div class="absolute bottom-1/4 left-1/3 w-1.5 h-1.5 bg-neon-pink rounded-full animate-float" style="animation-delay: 2s;"></div>
        </div>
    </div>

    <!-- Content -->
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="max-w-4xl mx-auto animate-fade-in">
            <div class="mb-8">
                <span class="inline-block px-4 py-2 bg-neon-green/20 border border-neon-green/30 text-neon-green rounded-full text-sm font-medium mb-6">
                    🛍️ Premium Merchandise
                </span>
            </div>
            
            <h1 class="text-5xl md:text-7xl lg:text-8xl font-bold mb-8 leading-tight">
                <span class="block text-white">Exclusive</span>
                <span class="block gradient-text animate-glow">Merchandise</span>
            </h1>

            <p class="text-xl md:text-2xl text-gray-300 mb-12 max-w-3xl mx-auto leading-relaxed">
                Get your hands on premium OnlyCars merchandise. From stylish apparel to exclusive accessories for true automotive enthusiasts.
            </p>

            <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
                <a href="#merchandise" class="group inline-flex items-center px-8 py-4 bg-gradient-to-r from-neon-green to-emerald-500 text-white font-semibold rounded-2xl hover:shadow-2xl hover:shadow-neon-green/25 transition-all duration-300 transform hover:scale-105">
                    <i class="fas fa-shopping-bag mr-3"></i>
                    Shop Now
                    <i class="fas fa-arrow-right ml-3 group-hover:translate-x-1 transition-transform"></i>
                </a>
                
                <a href="https://wa.me/6281385260075" class="group inline-flex items-center px-8 py-4 glass-morphism border border-white/20 text-white font-semibold rounded-2xl hover:bg-white/10 transition-all duration-300">
                    <i class="fab fa-whatsapp mr-3 text-neon-green"></i>
                    Custom Order
                </a>
            </div>
        </div>
    </div>

    <!-- Scroll indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
        <div class="w-6 h-10 border-2 border-white/30 rounded-full flex justify-center">
            <div class="w-1 h-3 bg-neon-green rounded-full mt-2 animate-pulse"></div>
        </div>
    </div>
</section>

<!-- Merchandise Section -->
<section id="merchandise" class="py-20 bg-dark-800 relative">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-5">
        <div class="absolute inset-0" style="background-image: radial-gradient(circle at 1px 1px, rgba(16,185,129,0.3) 1px, transparent 0); background-size: 50px 50px;"></div>
    </div>
    
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="text-center mb-16 animate-slide-up">
            <div class="inline-block px-4 py-2 bg-neon-green/10 border border-neon-green/20 text-neon-green rounded-full text-sm font-medium mb-4">
                🛍️ Featured Products
            </div>
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">
                Premium <span class="gradient-text">Merchandise</span>
            </h2>
            <p class="text-xl text-gray-400 max-w-2xl mx-auto">
                Exclusive OnlyCars merchandise for the ultimate automotive lifestyle
            </p>
        </div>

        <!-- Merchandise Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($merchandise as $index => $m)
            <div class="group glass-morphism rounded-3xl overflow-hidden card-hover border border-white/10 animate-fade-in" style="animation-delay: {{ $index * 0.1 }}s;">
                <!-- Product Image -->
                <div class="relative overflow-hidden">
                    <img src="{{ asset('storage/' . $m->image_merch) }}" 
                         alt="{{ $m->name }}" 
                         class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-700">
                    
                    <!-- Overlay -->
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    
                    <!-- Product Badge -->
                    <div class="absolute top-4 left-4">
                        <span class="px-3 py-1 bg-neon-green/90 text-white text-xs font-semibold rounded-full backdrop-blur-sm">
                            <i class="fas fa-star mr-1"></i>
                            Premium
                        </span>
                    </div>
                    
                    <!-- Price Badge -->
                    <div class="absolute top-4 right-4">
                        <div class="bg-white/90 backdrop-blur-sm rounded-xl px-3 py-2 text-dark-900">
                            <div class="text-sm font-bold">IDR {{ number_format($m->price) }}</div>
                        </div>
                    </div>
                </div>

                <!-- Product Content -->
                <div class="p-6">
                    <h3 class="text-xl font-bold text-white mb-3 group-hover:text-neon-green transition-colors">
                        {{ $m->name }}
                    </h3>

                    <p class="text-gray-400 mb-4 line-clamp-2">
                        {{ $m->description }}
                    </p>

                    <!-- Product Details -->
                    <div class="flex items-center justify-between mb-6">
                        <div class="text-2xl font-bold gradient-text">
                            IDR {{ number_format($m->price) }}
                        </div>
                        <div class="flex items-center text-sm text-gray-300">
                            <i class="fas fa-shipping-fast text-neon-blue mr-2"></i>
                            <span>Fast Shipping</span>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="flex space-x-3">
                        <a href="{{ route('merchandises.show', $m->id) }}" 
                           class="flex-1 text-center px-4 py-3 bg-gradient-to-r from-neon-green to-emerald-500 text-white font-semibold rounded-xl hover:shadow-lg hover:shadow-neon-green/25 transition-all duration-300">
                            View Details
                        </a>
                        <a href="https://wa.me/081385260075?text=Hi,%20I%20want%20to%20order%20{{ urlencode($m->name) }}" 
                           class="px-4 py-3 glass-morphism border border-neon-green/30 text-neon-green font-semibold rounded-xl hover:bg-neon-green/10 transition-all duration-300">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Add Merchandise CTA -->
        <!-- <div class="text-center mt-16">
            <a href="{{ route('merchandises.create') }}" 
               class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-neon-green to-emerald-500 text-white font-semibold rounded-2xl hover:shadow-2xl hover:shadow-neon-green/25 transition-all duration-300 transform hover:scale-105">
                <i class="fas fa-plus mr-3"></i>
                Add New Merchandise
            </a>
        </div> -->
    </div>
</section>

<!-- Product Categories Section -->
<section class="py-20 bg-dark-900 relative overflow-hidden">
    <div class="absolute inset-0">
        <div class="absolute inset-0 bg-gradient-to-r from-neon-green/5 to-neon-blue/5"></div>
    </div>
    
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">
                Product <span class="gradient-text">Categories</span>
            </h2>
            <p class="text-xl text-gray-400">Explore our diverse range of automotive merchandise</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="text-center glass-morphism rounded-2xl p-6 border border-white/10">
                <div class="w-16 h-16 bg-neon-green/20 rounded-2xl flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-tshirt text-neon-green text-2xl"></i>
                </div>
                <h3 class="text-lg font-semibold text-white mb-2">Apparel</h3>
                <p class="text-gray-400 text-sm">Premium t-shirts, hoodies, and caps</p>
            </div>

            <div class="text-center glass-morphism rounded-2xl p-6 border border-white/10">
                <div class="w-16 h-16 bg-neon-blue/20 rounded-2xl flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-key text-neon-blue text-2xl"></i>
                </div>
                <h3 class="text-lg font-semibold text-white mb-2">Accessories</h3>
                <p class="text-gray-400 text-sm">Keychains, stickers, and badges</p>
            </div>

            <div class="text-center glass-morphism rounded-2xl p-6 border border-white/10">
                <div class="w-16 h-16 bg-neon-purple/20 rounded-2xl flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-car text-neon-purple text-2xl"></i>
                </div>
                <h3 class="text-lg font-semibold text-white mb-2">Car Accessories</h3>
                <p class="text-gray-400 text-sm">Air fresheners and car decals</p>
            </div>

            <div class="text-center glass-morphism rounded-2xl p-6 border border-white/10">
                <div class="w-16 h-16 bg-neon-pink/20 rounded-2xl flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-gift text-neon-pink text-2xl"></i>
                </div>
                <h3 class="text-lg font-semibold text-white mb-2">Gift Sets</h3>
                <p class="text-gray-400 text-sm">Curated merchandise bundles</p>
            </div>
        </div>
    </div>
</section>

@endsection
