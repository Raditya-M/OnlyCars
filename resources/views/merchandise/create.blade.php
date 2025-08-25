@extends('layouts.main')

@section('title', 'Add New Merchandise - OnlyCars')

@section('content')

<div class="min-h-screen pt-20 bg-dark-900">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        
        <!-- Header -->
        <div class="text-center mb-12 animate-fade-in">
            <div class="inline-block px-4 py-2 bg-neon-green/20 border border-neon-green/30 text-neon-green rounded-full text-sm font-medium mb-4">
                🛍️ Add Merchandise
            </div>
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">
                Add New <span class="gradient-text">Merchandise</span>
            </h1>
            <p class="text-xl text-gray-400">Share premium automotive merchandise with the community</p>
        </div>

        <!-- Form Card -->
        <div class="glass-morphism rounded-3xl p-8 md:p-12 border border-white/10 animate-slide-up">
            <form action="{{ route('merchandises.store') }}" method="POST" enctype="multipart/form-data" class="space-y-8">
                @csrf
                
                <!-- Product Name -->
                <div class="space-y-3">
                    <label for="name" class="block text-lg font-semibold text-white">
                        <i class="fas fa-tag text-neon-green mr-2"></i>
                        Product Name
                    </label>
                    <input type="text" 
                           name="name" 
                           id="name" 
                           required
                           placeholder="e.g., OnlyCars Premium T-Shirt"
                           class="w-full px-6 py-4 bg-dark-800 border border-white/20 rounded-2xl focus:ring-2 focus:ring-neon-green focus:border-transparent transition-all duration-300 text-white placeholder-gray-400" />
                </div>

                <!-- Product Description -->
                <div class="space-y-3">
                    <label for="description" class="block text-lg font-semibold text-white">
                        <i class="fas fa-align-left text-neon-blue mr-2"></i>
                        Description
                    </label>
                    <textarea name="description" 
                              id="description" 
                              rows="4"
                              required
                              placeholder="Describe the product features, materials, sizes available..."
                              class="w-full px-6 py-4 bg-dark-800 border border-white/20 rounded-2xl focus:ring-2 focus:ring-neon-blue focus:border-transparent transition-all duration-300 text-white placeholder-gray-400 resize-none"></textarea>
                </div>

                <!-- Price -->
                <div class="space-y-3">
                    <label for="price" class="block text-lg font-semibold text-white">
                        <i class="fas fa-dollar-sign text-neon-purple mr-2"></i>
                        Price (IDR)
                    </label>
                    <input type="number" 
                           name="price" 
                           id="price" 
                           required
                           min="0"
                           placeholder="150000"
                           class="w-full px-6 py-4 bg-dark-800 border border-white/20 rounded-2xl focus:ring-2 focus:ring-neon-purple focus:border-transparent transition-all duration-300 text-white placeholder-gray-400" />
                </div>

                <!-- Product Image -->
                <div class="space-y-3">
                    <label for="image_merch" class="block text-lg font-semibold text-white">
                        <i class="fas fa-image text-neon-pink mr-2"></i>
                        Product Image
                    </label>
                    <div class="relative">
                        <input type="file" 
                               name="image_merch" 
                               id="image_merch"
                               accept="image/*"
                               required
                               class="w-full px-6 py-4 bg-dark-800 border border-white/20 rounded-2xl focus:ring-2 focus:ring-neon-pink focus:border-transparent transition-all duration-300 text-white file:mr-4 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-sm file:font-semibold file:bg-neon-pink/20 file:text-neon-pink hover:file:bg-neon-pink/30"/>
                        <p class="text-sm text-gray-400 mt-2">
                            <i class="fas fa-info-circle mr-1"></i>
                            Upload high-quality product image (JPG, PNG, JPEG - Max: 5MB)
                        </p>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="flex flex-col sm:flex-row gap-4 pt-8">
                    <button type="submit" 
                            class="flex-1 inline-flex items-center justify-center px-8 py-4 bg-gradient-to-r from-neon-green to-emerald-500 text-white font-semibold rounded-2xl hover:shadow-2xl hover:shadow-neon-green/25 transition-all duration-300 transform hover:scale-105">
                        <i class="fas fa-save mr-3"></i>
                        Add Merchandise
                    </button>
                    
                    <a href="/--" 
                       class="flex-1 inline-flex items-center justify-center px-8 py-4 glass-morphism border border-white/20 text-white font-semibold rounded-2xl hover:bg-white/10 transition-all duration-300">
                        <i class="fas fa-times mr-3"></i>
                        Cancel
                    </a>
                </div>
            </form>
        </div>

        <!-- Tips Card -->
        <div class="mt-12 glass-morphism rounded-2xl p-8 border border-neon-green/20 animate-fade-in">
            <h3 class="text-xl font-semibold text-white mb-4 flex items-center">
                <i class="fas fa-store text-neon-green mr-3"></i>
                Merchandise Tips
            </h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <ul class="text-gray-300 space-y-2 text-sm">
                    <li class="flex items-start">
                        <i class="fas fa-check text-neon-green mr-2 mt-1"></i>
                        Use high-quality product photography
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check text-neon-green mr-2 mt-1"></i>
                        Write detailed product descriptions
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check text-neon-green mr-2 mt-1"></i>
                        Include size charts and specifications
                    </li>
                </ul>
                <ul class="text-gray-300 space-y-2 text-sm">
                    <li class="flex items-start">
                        <i class="fas fa-check text-neon-green mr-2 mt-1"></i>
                        Set competitive and fair pricing
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check text-neon-green mr-2 mt-1"></i>
                        Highlight unique features and quality
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check text-neon-green mr-2 mt-1"></i>
                        Show multiple product angles
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

@endsection
