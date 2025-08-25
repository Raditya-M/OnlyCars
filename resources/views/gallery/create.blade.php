@extends('layouts.main')

@section('title', 'Add New Gallery - OnlyCars')

@section('content')

<div class="min-h-screen pt-20 bg-dark-900">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        
        <!-- Header -->
        <div class="text-center mb-12 animate-fade-in">
            <div class="inline-block px-4 py-2 bg-neon-purple/20 border border-neon-purple/30 text-neon-purple rounded-full text-sm font-medium mb-4">
                📸 Add Gallery
            </div>
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">
                Add New <span class="gradient-text">Gallery</span>
            </h1>
            <p class="text-xl text-gray-400">Share your automotive photography with the community</p>
        </div>

        <!-- Form Card -->
        <div class="glass-morphism rounded-3xl p-8 md:p-12 border border-white/10 animate-slide-up">
            <form action="{{ route('galleries.store') }}" method="POST" enctype="multipart/form-data" class="space-y-8">
                @csrf
                
                <!-- Gallery Title -->
                <div class="space-y-3">
                    <label for="title" class="block text-lg font-semibold text-white">
                        <i class="fas fa-heading text-neon-purple mr-2"></i>
                        Gallery Title
                    </label>
                    <input type="text" 
                           name="title" 
                           id="title" 
                           required
                           placeholder="e.g., Night Photography Session"
                           class="w-full px-6 py-4 bg-dark-800 border border-white/20 rounded-2xl focus:ring-2 focus:ring-neon-purple focus:border-transparent transition-all duration-300 text-white placeholder-gray-400" />
                </div>

                <!-- Gallery Image -->
                <div class="space-y-3">
                    <label for="image_dokumentasi" class="block text-lg font-semibold text-white">
                        <i class="fas fa-camera text-neon-blue mr-2"></i>
                        Gallery Image
                    </label>
                    <div class="relative">
                        <input type="file" 
                               name="image_dokumentasi" 
                               id="image_dokumentasi"
                               accept="image/*"
                               required
                               class="w-full px-6 py-4 bg-dark-800 border border-white/20 rounded-2xl focus:ring-2 focus:ring-neon-blue focus:border-transparent transition-all duration-300 text-white file:mr-4 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-sm file:font-semibold file:bg-neon-blue/20 file:text-neon-blue hover:file:bg-neon-blue/30"/>
                        <p class="text-sm text-gray-400 mt-2">
                            <i class="fas fa-info-circle mr-1"></i>
                            Upload high-quality image (JPG, PNG, JPEG - Max: 5MB)
                        </p>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="flex flex-col sm:flex-row gap-4 pt-8">
                    <button type="submit" 
                            class="flex-1 inline-flex items-center justify-center px-8 py-4 bg-gradient-to-r from-neon-purple to-neon-pink text-white font-semibold rounded-2xl hover:shadow-2xl hover:shadow-neon-purple/25 transition-all duration-300 transform hover:scale-105">
                        <i class="fas fa-save mr-3"></i>
                        Add to Gallery
                    </button>
                    
                    <a href="/-" 
                       class="flex-1 inline-flex items-center justify-center px-8 py-4 glass-morphism border border-white/20 text-white font-semibold rounded-2xl hover:bg-white/10 transition-all duration-300">
                        <i class="fas fa-times mr-3"></i>
                        Cancel
                    </a>
                </div>
            </form>
        </div>

        <!-- Tips Card -->
        <div class="mt-12 glass-morphism rounded-2xl p-8 border border-neon-purple/20 animate-fade-in">
            <h3 class="text-xl font-semibold text-white mb-4 flex items-center">
                <i class="fas fa-camera-retro text-neon-purple mr-3"></i>
                Photography Tips
            </h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <ul class="text-gray-300 space-y-2 text-sm">
                    <li class="flex items-start">
                        <i class="fas fa-check text-neon-green mr-2 mt-1"></i>
                        Capture multiple angles of your vehicle
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check text-neon-green mr-2 mt-1"></i>
                        Use proper lighting for best results
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check text-neon-green mr-2 mt-1"></i>
                        Clean your car before photography
                    </li>
                </ul>
                <ul class="text-gray-300 space-y-2 text-sm">
                    <li class="flex items-start">
                        <i class="fas fa-check text-neon-green mr-2 mt-1"></i>
                        Choose interesting backgrounds
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check text-neon-green mr-2 mt-1"></i>
                        Avoid cluttered environments
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check text-neon-green mr-2 mt-1"></i>
                        Show unique features and modifications
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

@endsection
