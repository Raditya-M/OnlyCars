@extends('layouts.main')

@section('title', $merchandise->name . ' - OnlyCars Merchandise')

@section('content')

<div class="min-h-screen pt-20 bg-dark-900">
    <!-- Hero Section -->
    <section class="relative py-20 overflow-hidden">
        <div class="absolute inset-0">
            <img src="{{ asset('storage/' . $merchandise->image_merch) }}" 
                 alt="{{ $merchandise->name }}" 
                 class="w-full h-full object-cover opacity-20">
            <div class="absolute inset-0 bg-gradient-to-t from-dark-900 via-dark-900/80 to-dark-900/40"></div>
        </div>
        
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Breadcrumb -->
            <nav class="mb-8 animate-fade-in">
                <div class="flex items-center space-x-2 text-sm text-gray-400">
                    <a href="/" class="hover:text-neon-blue transition-colors">Home</a>
                    <i class="fas fa-chevron-right text-xs"></i>
                    <a href="/--" class="hover:text-neon-blue transition-colors">Merchandise</a>
                    <i class="fas fa-chevron-right text-xs"></i>
                    <span class="text-white font-medium">{{ $merchandise->name }}</span>
                </div>
            </nav>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <!-- Product Info -->
                <div class="animate-slide-up">
                    <div class="mb-6">
                        <span class="inline-block px-4 py-2 bg-neon-green/20 border border-neon-green/30 text-neon-green rounded-full text-sm font-medium">
                            🛍️ Premium Merchandise
                        </span>
                    </div>
                    
                    <h1 class="text-4xl md:text-6xl font-bold text-white mb-6 leading-tight">
                        {{ $merchandise->name }}
                    </h1>

                    <p class="text-xl text-gray-300 mb-8 leading-relaxed">
                        {{ $merchandise->description }}
                    </p>

                    <!-- Price -->
                    <div class="mb-8">
                        <div class="glass-morphism rounded-2xl p-6 border border-white/10 inline-block">
                            <div class="flex items-center mb-2">
                                <i class="fas fa-tag text-neon-green text-xl mr-3"></i>
                                <span class="text-sm font-medium text-gray-400">Price</span>
                            </div>
                            <span class="text-3xl font-bold gradient-text">IDR {{ number_format($merchandise->price) }}</span>
                        </div>
                    </div>

                    <!-- Product Features -->
                    <div class="grid grid-cols-2 gap-4 mb-8">
                        <div class="glass-morphism rounded-2xl p-4 border border-white/10">
                            <div class="flex items-center mb-2">
                                <i class="fas fa-star text-neon-blue text-lg mr-3"></i>
                                <span class="text-sm font-medium text-gray-400">Quality</span>
                            </div>
                            <span class="text-lg font-bold text-white">Premium</span>
                        </div>

                        <div class="glass-morphism rounded-2xl p-4 border border-white/10">
                            <div class="flex items-center mb-2">
                                <i class="fas fa-shipping-fast text-neon-purple text-lg mr-3"></i>
                                <span class="text-sm font-medium text-gray-400">Shipping</span>
                            </div>
                            <span class="text-lg font-bold text-white">Fast</span>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="https://wa.me/081385260075?text=Hi,%20I%20want%20to%20order%20{{ urlencode($merchandise->name) }}" 
                           class="flex-1 inline-flex items-center justify-center px-8 py-4 bg-gradient-to-r from-neon-green to-emerald-500 text-white font-semibold rounded-2xl hover:shadow-2xl hover:shadow-neon-green/25 transition-all duration-300 transform hover:scale-105">
                            <i class="fab fa-whatsapp mr-3 text-xl"></i>
                            Order Now
                        </a>
                        
                        <div class="flex space-x-3">
                            <a href="{{ route('merchandises.edit', $merchandise->id) }}" 
                               class="px-6 py-4 glass-morphism border border-yellow-500/30 text-yellow-400 font-semibold rounded-2xl hover:bg-yellow-500/10 transition-all duration-300">
                                <i class="fas fa-edit"></i>
                            </a>
                            
                            <form action="{{ route('merchandises.destroy', $merchandise->id) }}" 
                                  method="POST" 
                                  onsubmit="return confirm('Are you sure you want to delete this merchandise?')"
                                  class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" 
                                        class="px-6 py-4 glass-morphism border border-red-500/30 text-red-400 font-semibold rounded-2xl hover:bg-red-500/10 transition-all duration-300">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Product Image -->
                <div class="animate-fade-in">
                    <div class="relative rounded-3xl overflow-hidden neon-glow">
                        <img src="{{ asset('storage/' . $merchandise->image_merch) }}" 
                             alt="{{ $merchandise->name }}" 
                             class="w-full h-96 lg:h-[600px] object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Product Features -->
    <section class="py-20 bg-dark-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">
                    Product <span class="gradient-text">Features</span>
                </h2>
                <p class="text-xl text-gray-400">Why choose our premium merchandise</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center glass-morphism rounded-2xl p-6 border border-white/10">
                    <div class="w-16 h-16 bg-neon-green/20 rounded-2xl flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-medal text-neon-green text-2xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-white mb-2">Premium Quality</h3>
                    <p class="text-gray-400 text-sm">High-quality materials and craftsmanship</p>
                </div>

                <div class="text-center glass-morphism rounded-2xl p-6 border border-white/10">
                    <div class="w-16 h-16 bg-neon-blue/20 rounded-2xl flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-palette text-neon-blue text-2xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-white mb-2">Unique Design</h3>
                    <p class="text-gray-400 text-sm">Exclusive automotive-inspired designs</p>
                </div>

                <div class="text-center glass-morphism rounded-2xl p-6 border border-white/10">
                    <div class="w-16 h-16 bg-neon-purple/20 rounded-2xl flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-shipping-fast text-neon-purple text-2xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-white mb-2">Fast Shipping</h3>
                    <p class="text-gray-400 text-sm">Quick delivery across Indonesia</p>
                </div>

                <div class="text-center glass-morphism rounded-2xl p-6 border border-white/10">
                    <div class="w-16 h-16 bg-neon-pink/20 rounded-2xl flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-heart text-neon-pink text-2xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-white mb-2">Community Love</h3>
                    <p class="text-gray-400 text-sm">Loved by car enthusiasts nationwide</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Order Information -->
    <section class="py-20 bg-dark-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Contact Info -->
                <div class="glass-morphism rounded-3xl p-8 border border-white/10">
                    <h3 class="text-2xl font-bold text-white mb-6">Order Information</h3>
                    <div class="space-y-6">
                        <div class="flex items-center space-x-4">
                            <div class="w-12 h-12 bg-neon-blue/20 rounded-xl flex items-center justify-center">
                                <i class="fas fa-user text-neon-blue"></i>
                            </div>
                            <div>
                                <p class="text-white font-semibold">R. Mahendar</p>
                                <p class="text-gray-400 text-sm">Sales Representative</p>
                            </div>
                        </div>
                        
                        <div class="flex items-center space-x-4">
                            <div class="w-12 h-12 bg-neon-green/20 rounded-xl flex items-center justify-center">
                                <i class="fas fa-phone text-neon-green"></i>
                            </div>
                            <div>
                                <p class="text-white font-semibold">0813-8526-0075</p>
                                <p class="text-gray-400 text-sm">WhatsApp Available 24/7</p>
                            </div>
                        </div>
                        
                        <div class="flex items-center space-x-4">
                            <div class="w-12 h-12 bg-neon-purple/20 rounded-xl flex items-center justify-center">
                                <i class="fas fa-map-marker-alt text-neon-purple"></i>
                            </div>
                            <div>
                                <p class="text-white font-semibold">Perfection Auto Gallery</p>
                                <p class="text-gray-400 text-sm">Jakarta, Indonesia</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Quick Order -->
                <div class="glass-morphism rounded-3xl p-8 border border-white/10">
                    <h3 class="text-2xl font-bold text-white mb-6">Quick Order</h3>
                    <p class="text-gray-400 mb-6">Get your premium OnlyCars merchandise delivered to your doorstep.</p>
                    
                    <div class="space-y-4">
                        <a href="https://wa.me/081385260075?text=Hi,%20I%20want%20to%20order%20{{ urlencode($merchandise->name) }}%20for%20IDR%20{{ number_format($merchandise->price) }}" 
                           class="w-full inline-flex items-center justify-center px-6 py-4 bg-gradient-to-r from-neon-green to-emerald-500 text-white font-semibold rounded-2xl hover:shadow-2xl hover:shadow-neon-green/25 transition-all duration-300">
                            <i class="fab fa-whatsapp mr-3 text-xl"></i>
                            Order via WhatsApp
                        </a>
                        
                        <div class="text-center text-gray-400 text-sm space-y-1">
                            <p>💳 Payment: Bank Transfer, E-Wallet</p>
                            <p>🚚 Free shipping for orders above IDR 500K</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection
