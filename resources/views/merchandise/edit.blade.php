@extends('layouts.main')

@section('title', 'Edit - ' . $merchandise->name)

@section('content')

<div class="min-h-screen pt-20 bg-dark-900">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        
        <!-- Header -->
        <div class="text-center mb-12 animate-fade-in">
            <div class="inline-block px-4 py-2 bg-yellow-500/20 border border-yellow-500/30 text-yellow-400 rounded-full text-sm font-medium mb-4">
                ✏️ Edit Merchandise
            </div>
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">
                Edit <span class="gradient-text">{{ $merchandise->name }}</span>
            </h1>
            <p class="text-xl text-gray-400">Update your merchandise information</p>
        </div>

        <!-- Main Content -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            
            <!-- Current Product Image -->
            <div class="animate-fade-in">
                <div class="glass-morphism rounded-3xl p-6 border border-white/10">
                    <h3 class="text-xl font-semibold text-white mb-4 flex items-center">
                        <i class="fas fa-image text-neon-green mr-3"></i>
                        Current Product Image
                    </h3>
                    <div class="relative rounded-2xl overflow-hidden neon-glow">
                        <img src="{{ asset('storage/' . $merchandise->image_merch) }}" 
                             alt="{{ $merchandise->name }}" 
                             class="w-full h-64 lg:h-80 object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
                        <div class="absolute bottom-4 left-4 glass-morphism rounded-lg px-3 py-2">
                            <span class="text-sm font-medium text-white">Current Image</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Edit Form -->
            <div class="animate-slide-up">
                <div class="glass-morphism rounded-3xl p-8 border border-white/10">
                    <form action="{{ route('merchandises.update', $merchandise->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                        @csrf
                        @method('PUT')

                        <!-- Product Name -->
                        <div class="space-y-3">
                            <label for="name" class="block text-lg font-semibold text-white">
                                <i class="fas fa-tag text-neon-green mr-2"></i>
                                Product Name
                            </label>
                            <input type="text" 
                                   name="name" 
                                   id="name" 
                                   value="{{ $merchandise->name }}"
                                   required
                                   class="w-full px-4 py-3 bg-dark-800 border border-white/20 rounded-xl focus:ring-2 focus:ring-neon-green focus:border-transparent transition-all duration-300 text-white">
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
                                      class="w-full px-4 py-3 bg-dark-800 border border-white/20 rounded-xl focus:ring-2 focus:ring-neon-blue focus:border-transparent transition-all duration-300 text-white resize-none">{{ $merchandise->description }}</textarea>
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
                                   value="{{ $merchandise->price }}"
                                   required
                                   min="0"
                                   class="w-full px-4 py-3 bg-dark-800 border border-white/20 rounded-xl focus:ring-2 focus:ring-neon-purple focus:border-transparent transition-all duration-300 text-white">
                        </div>

                        <!-- Update Image (Optional) -->
                        <div class="space-y-3">
                            <label for="image_merch" class="block text-lg font-semibold text-white">
                                <i class="fas fa-image text-neon-pink mr-2"></i>
                                Update Image (Optional)
                            </label>
                            <div class="relative">
                                <input type="file" 
                                       name="image_merch" 
                                       id="image_merch"
                                       accept="image/*"
                                       class="w-full px-4 py-3 bg-dark-800 border border-white/20 rounded-xl focus:ring-2 focus:ring-neon-pink focus:border-transparent transition-all duration-300 text-white file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-neon-pink/20 file:text-neon-pink hover:file:bg-neon-pink/30">
                                <p class="text-sm text-gray-400 mt-2">
                                    <i class="fas fa-info-circle mr-1"></i>
                                    Leave empty to keep current image
                                </p>
                            </div>
                        </div>

                        <!-- Action Buttons -->
                        <div class="flex flex-col sm:flex-row gap-4 pt-6">
                            <button type="submit" 
                                    class="flex-1 inline-flex items-center justify-center px-6 py-4 bg-gradient-to-r from-yellow-500 to-orange-500 text-white font-semibold rounded-2xl hover:shadow-2xl hover:shadow-yellow-500/25 transition-all duration-300 transform hover:scale-105">
                                <i class="fas fa-save mr-3"></i>
                                Update Merchandise
                            </button>
                            
                            <a href="{{ route('merchandises.show', $merchandise->id) }}" 
                               class="flex-1 inline-flex items-center justify-center px-6 py-4 glass-morphism border border-white/20 text-white font-semibold rounded-2xl hover:bg-white/10 transition-all duration-300">
                                <i class="fas fa-times mr-3"></i>
                                Cancel
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
