@extends('layouts.main')

@section('title', 'OnlyCars - Premium Car Community Events')
@section('description', 'Join exclusive car meets, showcase your ride, and connect with fellow automotive enthusiasts in the most premium car community.')

@section('content')

<!-- Hero Section -->
<section class="relative min-h-screen flex items-center justify-center overflow-hidden">
    <!-- Animated Background -->
    <div class="absolute inset-0">
        <div class="absolute inset-0 bg-gradient-to-br from-dark-900 via-dark-800 to-dark-900"></div>
        <div class="absolute inset-0 opacity-20">
            <img src="/placeholder.svg?height=1080&width=1920&text=Night+Car+Meet" alt="Night Car Meet" class="w-full h-full object-cover">
        </div>
        <!-- Animated particles -->
        <div class="absolute inset-0">
            <div class="absolute top-1/4 left-1/4 w-2 h-2 bg-neon-blue rounded-full animate-float"></div>
            <div class="absolute top-1/3 right-1/3 w-1 h-1 bg-neon-purple rounded-full animate-float" style="animation-delay: 1s;"></div>
            <div class="absolute bottom-1/4 left-1/3 w-1.5 h-1.5 bg-neon-pink rounded-full animate-float" style="animation-delay: 2s;"></div>
            <div class="absolute top-1/2 right-1/4 w-1 h-1 bg-neon-green rounded-full animate-float" style="animation-delay: 3s;"></div>
            <div class="absolute bottom-1/3 right-1/2 w-1.5 h-1.5 bg-neon-orange rounded-full animate-float" style="animation-delay: 4s;"></div>
        </div>
    </div>

    <!-- Content -->
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="max-w-4xl mx-auto animate-fade-in">
            <div class="mb-8">
                <span class="inline-block px-4 py-2 bg-neon-blue/20 border border-neon-blue/30 text-neon-blue rounded-full text-sm font-medium mb-6 animate-pulse-slow">
                    🏁 Premium Car Community
                </span>
            </div>
            
            <h1 class="text-5xl md:text-7xl lg:text-8xl font-bold mb-8 leading-tight">
                <span class="block text-white">Experience The</span>
                <span class="block gradient-text animate-glow">Night Drive</span>
            </h1>

            <p class="text-xl md:text-2xl text-gray-300 mb-12 max-w-3xl mx-auto leading-relaxed">
                Join exclusive car meets, showcase your ride, and connect with fellow automotive enthusiasts in the most premium car community.
            </p>

            <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
                <a href="#events" class="group inline-flex items-center px-8 py-4 bg-gradient-to-r from-neon-blue to-neon-purple text-white font-semibold rounded-2xl hover:shadow-2xl hover:shadow-neon-blue/25 transition-all duration-300 transform hover:scale-105">
                    <i class="fas fa-calendar-alt mr-3"></i>
                    Explore Events
                    <i class="fas fa-arrow-right ml-3 group-hover:translate-x-1 transition-transform"></i>
                </a>
                
                <a href="https://wa.me/6281385260075" class="group inline-flex items-center px-8 py-4 glass-morphism border border-white/20 text-white font-semibold rounded-2xl hover:bg-white/10 transition-all duration-300">
                    <i class="fab fa-whatsapp mr-3 text-neon-green"></i>
                    Join Community
                </a>
            </div>
        </div>
    </div>

    <!-- Scroll indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce-slow">
        <div class="w-6 h-10 border-2 border-white/30 rounded-full flex justify-center">
            <div class="w-1 h-3 bg-neon-blue rounded-full mt-2 animate-pulse"></div>
        </div>
    </div>
</section>

<!-- Events Section -->
<section id="events" class="py-20 bg-dark-800 relative">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-5">
        <div class="absolute inset-0" style="background-image: radial-gradient(circle at 1px 1px, rgba(0,212,255,0.3) 1px, transparent 0); background-size: 50px 50px;"></div>
    </div>
    
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="text-center mb-16 animate-slide-up">
            <div class="inline-block px-4 py-2 bg-neon-blue/10 border border-neon-blue/20 text-neon-blue rounded-full text-sm font-medium mb-4">
                🎯 Upcoming Events
            </div>
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">
                Exclusive Car <span class="gradient-text">Events</span>
            </h2>
            <p class="text-xl text-gray-400 max-w-2xl mx-auto">
                Join our premium car meets, track days, and community gatherings
            </p>
        </div>

        <!-- Events Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @if(isset($event) && count($event) > 0)
                @foreach ($event as $index => $e)
                <div class="group glass-morphism rounded-3xl overflow-hidden card-hover border border-white/10 animate-fade-in" style="animation-delay: {{ $index * 0.1 }}s;">
                    <!-- Event Image -->
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('storage/' . $e->cover_image) }}" 
                             alt="{{ $e->title }}" 
                             class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-700">
                        
                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent"></div>
                        
                        <!-- Event Badge -->
                        <div class="absolute top-4 left-4">
                            <span class="px-3 py-1 bg-neon-blue/90 text-white text-xs font-semibold rounded-full backdrop-blur-sm">
                                <i class="fas fa-calendar mr-1"></i>
                                Event
                            </span>
                        </div>
                        
                        <!-- Date Badge -->
                        <div class="absolute top-4 right-4 text-center">
                            <div class="bg-white/90 backdrop-blur-sm rounded-xl p-3 text-dark-900">
                                <div class="text-xs font-medium">{{ date('M', strtotime($e->date)) }}</div>
                                <div class="text-lg font-bold">{{ date('d', strtotime($e->date)) }}</div>
                            </div>
                        </div>
                    </div>

                    <!-- Event Content -->
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-white mb-3 group-hover:text-neon-blue transition-colors line-clamp-2">
                            {{ $e->title }}
                        </h3>

                        <p class="text-gray-400 mb-4 line-clamp-2">
                            {{ $e->description }}
                        </p>

                        <!-- Event Details -->
                        <div class="space-y-3 mb-6">
                            <div class="flex items-center text-sm text-gray-300">
                                <i class="fas fa-calendar-alt text-neon-blue mr-3 w-4"></i>
                                <span>{{ date('F j, Y', strtotime($e->date)) }}</span>
                            </div>
                            <div class="flex items-center text-sm text-gray-300">
                                <i class="fas fa-map-marker-alt text-neon-purple mr-3 w-4"></i>
                                <span>{{ $e->location }}</span>
                            </div>
                        </div>

                        <!-- Action Buttons -->
                        <div class="flex space-x-3">
                            <a href="{{ route('events.show', $e->id) }}" 
                               class="flex-1 text-center px-4 py-3 bg-gradient-to-r from-neon-blue to-neon-purple text-white font-semibold rounded-xl hover:shadow-lg hover:shadow-neon-blue/25 transition-all duration-300">
                                View Details
                            </a>
                            <a href="https://wa.me/081385260075?text=Hi,%20I'm%20interested%20in%20{{ urlencode($e->title) }}" 
                               class="px-4 py-3 glass-morphism border border-neon-green/30 text-neon-green font-semibold rounded-xl hover:bg-neon-green/10 transition-all duration-300">
                                <i class="fab fa-whatsapp"></i>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            @else
                <!-- No Events Message -->
                <div class="col-span-full text-center py-20">
                    <div class="glass-morphism rounded-3xl p-12 border border-white/10 max-w-md mx-auto">
                        <i class="fas fa-calendar-times text-6xl text-gray-400 mb-6"></i>
                        <h3 class="text-2xl font-bold text-white mb-4">No Events Yet</h3>
                        <p class="text-gray-400 mb-8">Be the first to create an exciting event for the community!</p>
                        <a href="{{ route('events.create') }}" 
                           class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-neon-blue to-neon-purple text-white font-semibold rounded-xl hover:shadow-lg hover:shadow-neon-blue/25 transition-all duration-300">
                            <i class="fas fa-plus mr-2"></i>
                            Create First Event
                        </a>
                    </div>
                </div>
            @endif
        </div>

        <!-- Add Event CTA -->
        <!-- <div class="text-center mt-16">
            <a href="{{ route('events.create') }}" 
               class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-neon-purple to-neon-pink text-white font-semibold rounded-2xl hover:shadow-2xl hover:shadow-neon-purple/25 transition-all duration-300 transform hover:scale-105">
                <i class="fas fa-plus mr-3"></i>
                Create New Event
            </a>
        </div> -->
    </div>
</section>

<!-- Stats Section -->
<section class="py-20 bg-dark-900 relative overflow-hidden">
    <div class="absolute inset-0">
        <div class="absolute inset-0 bg-gradient-to-r from-neon-blue/5 to-neon-purple/5"></div>
    </div>
    
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
            <div class="text-center animate-fade-in">
                <div class="text-4xl md:text-5xl font-bold gradient-text mb-2">500+</div>
                <div class="text-gray-400">Community Members</div>
            </div>
            <div class="text-center animate-fade-in" style="animation-delay: 0.1s;">
                <div class="text-4xl md:text-5xl font-bold gradient-text mb-2">50+</div>
                <div class="text-gray-400">Events Hosted</div>
            </div>
            <div class="text-center animate-fade-in" style="animation-delay: 0.2s;">
                <div class="text-4xl md:text-5xl font-bold gradient-text mb-2">25+</div>
                <div class="text-gray-400">Cities Covered</div>
            </div>
            <div class="text-center animate-fade-in" style="animation-delay: 0.3s;">
                <div class="text-4xl md:text-5xl font-bold gradient-text mb-2">100%</div>
                <div class="text-gray-400">Premium Experience</div>
            </div>
        </div>
    </div>
</section>

@endsection
