@extends('layouts.main')

@section('title', 'OnlyCars - Premium Car Community Gallery')

@section('content')

<!-- Hero Section -->
<section class="relative min-h-screen flex items-center justify-center overflow-hidden">
    <!-- Animated Background -->
    <div class="absolute inset-0">
        <div class="absolute inset-0 bg-gradient-to-br from-dark-900 via-dark-800 to-dark-900"></div>
        <div class="absolute inset-0 opacity-20">
            <img src="/placeholder.svg?height=1080&width=1920&text=Car+Gallery" alt="Car Gallery" class="w-full h-full object-cover">
        </div>
        <!-- Animated particles -->
        <div class="absolute inset-0">
            <div class="absolute top-1/4 left-1/4 w-2 h-2 bg-neon-purple rounded-full animate-float"></div>
            <div class="absolute top-1/3 right-1/3 w-1 h-1 bg-neon-blue rounded-full animate-float" style="animation-delay: 1s;"></div>
            <div class="absolute bottom-1/4 left-1/3 w-1.5 h-1.5 bg-neon-pink rounded-full animate-float" style="animation-delay: 2s;"></div>
        </div>
    </div>

    <!-- Content -->
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="max-w-4xl mx-auto animate-fade-in">
            <div class="mb-8">
                <span class="inline-block px-4 py-2 bg-neon-purple/20 border border-neon-purple/30 text-neon-purple rounded-full text-sm font-medium mb-6">
                    📸 Premium Gallery
                </span>
            </div>
            
            <h1 class="text-5xl md:text-7xl lg:text-8xl font-bold mb-8 leading-tight">
                <span class="block text-white">Automotive</span>
                <span class="block gradient-text animate-glow">Photography</span>
            </h1>

            <p class="text-xl md:text-2xl text-gray-300 mb-12 max-w-3xl mx-auto leading-relaxed">
                Discover stunning automotive photography showcasing the beauty and craftsmanship of premium vehicles from our community.
            </p>

            <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
                <a href="#gallery" class="group inline-flex items-center px-8 py-4 bg-gradient-to-r from-neon-purple to-neon-pink text-white font-semibold rounded-2xl hover:shadow-2xl hover:shadow-neon-purple/25 transition-all duration-300 transform hover:scale-105">
                    <i class="fas fa-images mr-3"></i>
                    Explore Gallery
                    <i class="fas fa-arrow-right ml-3 group-hover:translate-x-1 transition-transform"></i>
                </a>
                
                <a href="https://wa.me/6281385260075" class="group inline-flex items-center px-8 py-4 glass-morphism border border-white/20 text-white font-semibold rounded-2xl hover:bg-white/10 transition-all duration-300">
                    <i class="fas fa-camera mr-3 text-neon-purple"></i>
                    Book Photography
                </a>
            </div>
        </div>
    </div>

    <!-- Scroll indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
        <div class="w-6 h-10 border-2 border-white/30 rounded-full flex justify-center">
            <div class="w-1 h-3 bg-neon-purple rounded-full mt-2 animate-pulse"></div>
        </div>
    </div>
</section>

<!-- Gallery Section -->
<section id="gallery" class="py-20 bg-dark-800 relative">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-5">
        <div class="absolute inset-0" style="background-image: radial-gradient(circle at 1px 1px, rgba(139,92,246,0.3) 1px, transparent 0); background-size: 50px 50px;"></div>
    </div>
    
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="text-center mb-16 animate-slide-up">
            <div class="inline-block px-4 py-2 bg-neon-purple/10 border border-neon-purple/20 text-neon-purple rounded-full text-sm font-medium mb-4">
                📸 Featured Gallery
            </div>
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">
                Automotive <span class="gradient-text">Showcase</span>
            </h2>
            <p class="text-xl text-gray-400 max-w-2xl mx-auto">
                Professional automotive photography capturing the essence of premium vehicles
            </p>
        </div>

        <!-- Gallery Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($gallery as $index => $g)
            <div class="group glass-morphism rounded-3xl overflow-hidden card-hover border border-white/10 animate-fade-in" style="animation-delay: {{ $index * 0.1 }}s;">
                <!-- Gallery Image -->
                <div class="relative overflow-hidden">
                    <img src="{{ asset('storage/' . $g->image_dokumentasi) }}" 
                         alt="{{ $g->title }}" 
                         class="w-full h-80 object-cover group-hover:scale-110 transition-transform duration-700">
                    
                    <!-- Overlay -->
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    
                    <!-- Gallery Badge -->
                    <div class="absolute top-4 left-4">
                        <span class="px-3 py-1 bg-neon-purple/90 text-white text-xs font-semibold rounded-full backdrop-blur-sm">
                            <i class="fas fa-camera mr-1"></i>
                            Gallery
                        </span>
                    </div>
                    
                    <!-- View Button -->
                    <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <a href="{{ route('galleries.show', $g->id) }}" 
                           class="px-6 py-3 bg-white/90 backdrop-blur-sm text-dark-900 font-semibold rounded-xl hover:bg-white transition-colors">
                            <i class="fas fa-eye mr-2"></i>
                            View Details
                        </a>
                    </div>
                </div>

                <!-- Gallery Content -->
                <div class="p-6">
                    <h3 class="text-xl font-bold text-white mb-3 group-hover:text-neon-purple transition-colors">
                        {{ $g->title }}
                    </h3>

                    <p class="text-gray-400 mb-6 text-sm">
                        Professional automotive photography showcasing premium vehicle aesthetics and design details.
                    </p>

                    <!-- Action Buttons -->
                    <div class="flex space-x-3">
                        <a href="{{ route('galleries.show', $g->id) }}" 
                           class="flex-1 text-center px-4 py-3 bg-gradient-to-r from-neon-purple to-neon-pink text-white font-semibold rounded-xl hover:shadow-lg hover:shadow-neon-purple/25 transition-all duration-300">
                            View Gallery
                        </a>
                        <a href="https://wa.me/081385260075?text=Hi,%20I%20love%20the%20{{ urlencode($g->title) }}%20photography!" 
                           class="px-4 py-3 glass-morphism border border-neon-green/30 text-neon-green font-semibold rounded-xl hover:bg-neon-green/10 transition-all duration-300">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Add Gallery CTA -->
         {{-- <div class="text-center mt-16">
            <a href="{{ route('galleries.create') }}" 
               class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-neon-purple to-neon-pink text-white font-semibold rounded-2xl hover:shadow-2xl hover:shadow-neon-purple/25 transition-all duration-300 transform hover:scale-105">
                <i class="fas fa-plus mr-3"></i>
                Add New Gallery
            </a>
        </div>  --}}
    </div>
</section>

<!-- Photography Services Section -->
<section class="py-20 bg-dark-900 relative overflow-hidden">
    <div class="absolute inset-0">
        <div class="absolute inset-0 bg-gradient-to-r from-neon-purple/5 to-neon-pink/5"></div>
    </div>
    
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">
                Photography <span class="gradient-text">Services</span>
            </h2>
            <p class="text-xl text-gray-400 max-w-2xl mx-auto">
                Professional automotive photography for your premium vehicles
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="text-center glass-morphism rounded-2xl p-8 border border-white/10">
                <div class="w-20 h-20 bg-neon-purple/20 rounded-2xl flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-camera text-neon-purple text-3xl"></i>
                </div>
                <h3 class="text-xl font-semibold text-white mb-4">Studio Photography</h3>
                <p class="text-gray-400 mb-6">Professional studio setup with controlled lighting for perfect shots</p>
                <div class="text-2xl font-bold gradient-text mb-4">IDR 500K</div>
                <a href="https://wa.me/081385260075?text=Hi,%20I'm%20interested%20in%20studio%20photography%20service" 
                   class="inline-flex items-center px-6 py-3 bg-neon-purple/20 border border-neon-purple/30 text-neon-purple rounded-xl hover:bg-neon-purple/30 transition-all duration-300">
                    Book Now
                </a>
            </div>

            <div class="text-center glass-morphism rounded-2xl p-8 border border-white/10">
                <div class="w-20 h-20 bg-neon-blue/20 rounded-2xl flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-road text-neon-blue text-3xl"></i>
                </div>
                <h3 class="text-xl font-semibold text-white mb-4">Location Shoot</h3>
                <p class="text-gray-400 mb-6">On-location photography at scenic spots around the city</p>
                <div class="text-2xl font-bold gradient-text mb-4">IDR 750K</div>
                <a href="https://wa.me/081385260075?text=Hi,%20I'm%20interested%20in%20location%20photography%20service" 
                   class="inline-flex items-center px-6 py-3 bg-neon-blue/20 border border-neon-blue/30 text-neon-blue rounded-xl hover:bg-neon-blue/30 transition-all duration-300">
                    Book Now
                </a>
            </div>

            <div class="text-center glass-morphism rounded-2xl p-8 border border-white/10">
                <div class="w-20 h-20 bg-neon-pink/20 rounded-2xl flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-star text-neon-pink text-3xl"></i>
                </div>
                <h3 class="text-xl font-semibold text-white mb-4">Premium Package</h3>
                <p class="text-gray-400 mb-6">Complete package with multiple locations and editing</p>
                <div class="text-2xl font-bold gradient-text mb-4">IDR 1.2M</div>
                <a href="https://wa.me/081385260075?text=Hi,%20I'm%20interested%20in%20premium%20photography%20package" 
                   class="inline-flex items-center px-6 py-3 bg-neon-pink/20 border border-neon-pink/30 text-neon-pink rounded-xl hover:bg-neon-pink/30 transition-all duration-300">
                    Book Now
                </a>
            </div>
        </div>
    </div>
</section>

@endsection
