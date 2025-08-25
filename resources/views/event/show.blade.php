@extends('layouts.main')

@section('title', $event->title . ' - OnlyCars Event')
@section('description', $event->description)

@section('content')

<div class="min-h-screen pt-20 bg-dark-900">
    <!-- Hero Section -->
    <section class="relative py-20 overflow-hidden">
        <div class="absolute inset-0">
            <img src="{{ asset('storage/' . $event->cover_image) }}" 
                 alt="{{ $event->title }}" 
                 class="w-full h-full object-cover opacity-20">
            <div class="absolute inset-0 bg-gradient-to-t from-dark-900 via-dark-900/80 to-dark-900/40"></div>
        </div>
        
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Breadcrumb -->
            <nav class="mb-8 animate-fade-in">
                <div class="flex items-center space-x-2 text-sm text-gray-400">
                    <a href="/" class="hover:text-neon-blue transition-colors">Home</a>
                    <i class="fas fa-chevron-right text-xs"></i>
                    <a href="/" class="hover:text-neon-blue transition-colors">Events</a>
                    <i class="fas fa-chevron-right text-xs"></i>
                    <span class="text-white font-medium">{{ $event->title }}</span>
                </div>
            </nav>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <!-- Event Info -->
                <div class="animate-slide-up">
                    <div class="mb-6">
                        <span class="inline-block px-4 py-2 bg-neon-blue/20 border border-neon-blue/30 text-neon-blue rounded-full text-sm font-medium">
                            🎯 Premium Event
                        </span>
                    </div>
                    
                    <h1 class="text-4xl md:text-6xl font-bold text-white mb-6 leading-tight">
                        {{ $event->title }}
                    </h1>

                    <p class="text-xl text-gray-300 mb-8 leading-relaxed">
                        {{ $event->description }}
                    </p>

                    <!-- Event Details -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                        <div class="glass-morphism rounded-2xl p-6 border border-white/10">
                            <div class="flex items-center mb-3">
                                <i class="fas fa-calendar-alt text-neon-blue text-xl mr-3"></i>
                                <span class="text-sm font-medium text-gray-400">Event Date</span>
                            </div>
                            <span class="text-2xl font-bold text-white">{{ date('M j, Y', strtotime($event->date)) }}</span>
                            <p class="text-sm text-gray-400 mt-1">{{ date('l', strtotime($event->date)) }}</p>
                        </div>

                        <div class="glass-morphism rounded-2xl p-6 border border-white/10">
                            <div class="flex items-center mb-3">
                                <i class="fas fa-map-marker-alt text-neon-purple text-xl mr-3"></i>
                                <span class="text-sm font-medium text-gray-400">Location</span>
                            </div>
                            <span class="text-2xl font-bold text-white">{{ $event->location }}</span>
                            <p class="text-sm text-gray-400 mt-1">Venue Details</p>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="https://wa.me/081385260075?text=Hi,%20I%20want%20to%20join%20{{ urlencode($event->title) }}" 
                           class="flex-1 inline-flex items-center justify-center px-8 py-4 bg-gradient-to-r from-neon-green to-emerald-500 text-white font-semibold rounded-2xl hover:shadow-2xl hover:shadow-neon-green/25 transition-all duration-300 transform hover:scale-105">
                            <i class="fab fa-whatsapp mr-3 text-xl"></i>
                            Join Event
                        </a>
                        
                        <div class="flex space-x-3">
                            <a href="{{ route('events.edit', $event->id) }}" 
                               class="px-6 py-4 glass-morphism border border-yellow-500/30 text-yellow-400 font-semibold rounded-2xl hover:bg-yellow-500/10 transition-all duration-300"
                               title="Edit Event">
                                <i class="fas fa-edit"></i>
                            </a>
                            
                            <button onclick="confirmDelete({{ $event->id }})" 
                                    class="px-6 py-4 glass-morphism border border-red-500/30 text-red-400 font-semibold rounded-2xl hover:bg-red-500/10 transition-all duration-300"
                                    title="Delete Event">
                                <i class="fas fa-trash"></i>
                            </button>
                            
                            <form id="delete-form-{{ $event->id }}" action="{{ route('events.destroy', $event->id) }}" method="POST" class="hidden">
                                @csrf
                                @method('DELETE')
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Event Image -->
                <div class="animate-fade-in">
                    <div class="relative rounded-3xl overflow-hidden neon-glow">
                        <img src="{{ asset('storage/' . $event->cover_image) }}" 
                             alt="{{ $event->title }}" 
                             class="w-full h-96 lg:h-[600px] object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Event Features -->
    <section class="py-20 bg-dark-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">
                    Event <span class="gradient-text">Highlights</span>
                </h2>
                <p class="text-xl text-gray-400">What makes this event special</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center glass-morphism rounded-2xl p-6 border border-white/10 animate-fade-in">
                    <div class="w-16 h-16 bg-neon-blue/20 rounded-2xl flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-users text-neon-blue text-2xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-white mb-2">Premium Community</h3>
                    <p class="text-gray-400 text-sm">Connect with elite car enthusiasts</p>
                </div>

                <div class="text-center glass-morphism rounded-2xl p-6 border border-white/10 animate-fade-in" style="animation-delay: 0.1s;">
                    <div class="w-16 h-16 bg-neon-purple/20 rounded-2xl flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-trophy text-neon-purple text-2xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-white mb-2">Exclusive Prizes</h3>
                    <p class="text-gray-400 text-sm">Win amazing automotive prizes</p>
                </div>

                <div class="text-center glass-morphism rounded-2xl p-6 border border-white/10 animate-fade-in" style="animation-delay: 0.2s;">
                    <div class="w-16 h-16 bg-neon-green/20 rounded-2xl flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-camera text-neon-green text-2xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-white mb-2">Professional Photos</h3>
                    <p class="text-gray-400 text-sm">Get your car professionally shot</p>
                </div>

                <div class="text-center glass-morphism rounded-2xl p-6 border border-white/10 animate-fade-in" style="animation-delay: 0.3s;">
                    <div class="w-16 h-16 bg-neon-pink/20 rounded-2xl flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-music text-neon-pink text-2xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-white mb-2">Live Entertainment</h3>
                    <p class="text-gray-400 text-sm">Enjoy music and entertainment</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="py-20 bg-dark-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Contact Info -->
                <div class="glass-morphism rounded-3xl p-8 border border-white/10">
                    <h3 class="text-2xl font-bold text-white mb-6">Event Organizer</h3>
                    <div class="space-y-6">
                        <div class="flex items-center space-x-4">
                            <div class="w-12 h-12 bg-neon-blue/20 rounded-xl flex items-center justify-center">
                                <i class="fas fa-user text-neon-blue"></i>
                            </div>
                            <div>
                                <p class="text-white font-semibold">R. Mahendar</p>
                                <p class="text-gray-400 text-sm">Event Coordinator</p>
                            </div>
                        </div>
                        
                        <div class="flex items-center space-x-4">
                            <div class="w-12 h-12 bg-neon-green/20 rounded-xl flex items-center justify-center">
                                <i class="fas fa-phone text-neon-green"></i>
                            </div>
                            <div>
                                <p class="text-white font-semibold">0813-8526-0075</p>
                                <p class="text-gray-400 text-sm">WhatsApp Available</p>
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

                <!-- Event Registration -->
                <div class="glass-morphism rounded-3xl p-8 border border-white/10">
                    <h3 class="text-2xl font-bold text-white mb-6">Quick Registration</h3>
                    <p class="text-gray-400 mb-6">Join this exclusive event and be part of the premium car community experience.</p>
                    
                    <div class="space-y-4">
                        <a href="https://wa.me/081385260075?text=Hi,%20I%20want%20to%20register%20for%20{{ urlencode($event->title) }}" 
                           class="w-full inline-flex items-center justify-center px-6 py-4 bg-gradient-to-r from-neon-green to-emerald-500 text-white font-semibold rounded-2xl hover:shadow-2xl hover:shadow-neon-green/25 transition-all duration-300">
                            <i class="fab fa-whatsapp mr-3 text-xl"></i>
                            Register via WhatsApp
                        </a>
                        
                        <p class="text-center text-gray-400 text-sm">
                            Registration is free for OnlyCars members
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<script>
function confirmDelete(eventId) {
    if (confirm('Are you sure you want to delete this event? This action cannot be undone.')) {
        document.getElementById('delete-form-' + eventId).submit();
    }
}
</script>

@endsection
