@extends('layouts.main')

@section('title', 'Create New Event - OnlyCars')
@section('description', 'Create and share your automotive event with the OnlyCars premium community.')

@section('content')

<div class="min-h-screen pt-20 bg-dark-900">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        
        <!-- Header -->
        <div class="text-center mb-12 animate-fade-in">
            <div class="inline-block px-4 py-2 bg-neon-blue/20 border border-neon-blue/30 text-neon-blue rounded-full text-sm font-medium mb-4">
                🎯 Create Event
            </div>
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">
                Create New <span class="gradient-text">Event</span>
            </h1>
            <p class="text-xl text-gray-400">Share your automotive event with the community</p>
        </div>

        <!-- Form Card -->
        <div class="glass-morphism rounded-3xl p-8 md:p-12 border border-white/10 animate-slide-up">
            <form action="{{ route('events.store') }}" method="POST" enctype="multipart/form-data" class="space-y-8" id="eventForm">
                @csrf
                
                <!-- Event Title -->
                <div class="space-y-3">
                    <label for="title" class="block text-lg font-semibold text-white">
                        <i class="fas fa-tag text-neon-blue mr-2"></i>
                        Event Title
                    </label>
                    <input type="text" 
                           name="title" 
                           id="title" 
                           required
                           placeholder="e.g., Night Car Meet Jakarta"
                           class="w-full px-6 py-4 bg-dark-800 border border-white/20 rounded-2xl focus:ring-2 focus:ring-neon-blue focus:border-transparent transition-all duration-300 text-white placeholder-gray-400" />
                    <div class="text-red-400 text-sm hidden" id="title-error"></div>
                </div>

                <!-- Event Description -->
                <div class="space-y-3">
                    <label for="description" class="block text-lg font-semibold text-white">
                        <i class="fas fa-align-left text-neon-purple mr-2"></i>
                        Description
                    </label>
                    <textarea name="description" 
                              id="description" 
                              rows="4"
                              required
                              placeholder="Describe your event, what makes it special..."
                              class="w-full px-6 py-4 bg-dark-800 border border-white/20 rounded-2xl focus:ring-2 focus:ring-neon-purple focus:border-transparent transition-all duration-300 text-white placeholder-gray-400 resize-none"></textarea>
                    <div class="text-gray-400 text-sm">
                        <span id="desc-count">0</span>/500 characters
                    </div>
                    <div class="text-red-400 text-sm hidden" id="description-error"></div>
                </div>

                <!-- Date and Location Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Event Date -->
                    <div class="space-y-3">
                        <label for="date" class="block text-lg font-semibold text-white">
                            <i class="fas fa-calendar-alt text-neon-green mr-2"></i>
                            Event Date
                        </label>
                        <input type="date" 
                               name="date" 
                               id="date" 
                               required
                               min="{{ date('Y-m-d') }}"      
                               class="w-full px-6 py-4 bg-dark-800 border border-white/20 rounded-2xl focus:ring-2 focus:ring-neon-green focus:border-transparent transition-all duration-300 text-white" />
                        <div class="text-red-400 text-sm hidden" id="date-error"></div>
                    </div>

                    <!-- Location -->
                    <div class="space-y-3">
                        <label for="location" class="block text-lg font-semibold text-white">
                            <i class="fas fa-map-marker-alt text-neon-pink mr-2"></i>
                            Location
                        </label>
                        <input type="text" 
                               name="location" 
                               id="location" 
                               required
                               placeholder="e.g., Jakarta, Indonesia"
                               class="w-full px-6 py-4 bg-dark-800 border border-white/20 rounded-2xl focus:ring-2 focus:ring-neon-pink focus:border-transparent transition-all duration-300 text-white placeholder-gray-400" />
                        <div class="text-red-400 text-sm hidden" id="location-error"></div>
                    </div>
                </div>

                <!-- Event Cover Image -->
                <div class="space-y-3">
                    <label for="cover_image" class="block text-lg font-semibold text-white">
                        <i class="fas fa-image text-neon-blue mr-2"></i>
                        Event Cover Image
                    </label>
                    <div class="relative">
                        <input type="file" 
                               name="cover_image" 
                               id="cover_image"
                               accept="image/*"
                               required
                               class="w-full px-6 py-4 bg-dark-800 border border-white/20 rounded-2xl focus:ring-2 focus:ring-neon-blue focus:border-transparent transition-all duration-300 text-white file:mr-4 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-sm file:font-semibold file:bg-neon-blue/20 file:text-neon-blue hover:file:bg-neon-blue/30"/>
                        <p class="text-sm text-gray-400 mt-2">
                            <i class="fas fa-info-circle mr-1"></i>
                            Upload high-quality image (JPG, PNG, JPEG - Max: 5MB)
                        </p>
                    </div>
                    <div class="text-red-400 text-sm hidden" id="image-error"></div>
                    
                    <!-- Image Preview -->
                    <div id="imagePreview" class="hidden mt-4">
                        <div class="relative rounded-2xl overflow-hidden border border-white/20">
                            <img id="previewImg" src="/placeholder.svg" alt="Preview" class="w-full h-64 object-cover">
                            <div class="absolute top-2 right-2">
                                <button type="button" onclick="removeImage()" class="w-8 h-8 bg-red-500/80 text-white rounded-full hover:bg-red-500 transition-colors">
                                    <i class="fas fa-times text-xs"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="flex flex-col sm:flex-row gap-4 pt-8">
                    <button type="submit" 
                            class="flex-1 inline-flex items-center justify-center px-8 py-4 bg-gradient-to-r from-neon-blue to-neon-purple text-white font-semibold rounded-2xl hover:shadow-2xl hover:shadow-neon-blue/25 transition-all duration-300 transform hover:scale-105"
                            id="submitBtn">
                        <i class="fas fa-save mr-3"></i>
                        Create Event
                    </button>
                    
                    <a href="/" 
                       class="flex-1 inline-flex items-center justify-center px-8 py-4 glass-morphism border border-white/20 text-white font-semibold rounded-2xl hover:bg-white/10 transition-all duration-300">
                        <i class="fas fa-times mr-3"></i>
                        Cancel
                    </a>
                </div>
            </form>
        </div>

        <!-- Tips Card -->
        <div class="mt-12 glass-morphism rounded-2xl p-8 border border-neon-blue/20 animate-fade-in">
            <h3 class="text-xl font-semibold text-white mb-4 flex items-center">
                <i class="fas fa-lightbulb text-neon-blue mr-3"></i>
                Event Creation Tips
            </h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <ul class="text-gray-300 space-y-2 text-sm">
                    <li class="flex items-start">
                        <i class="fas fa-check text-neon-green mr-2 mt-1"></i>
                        Use high-quality, eye-catching cover images
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check text-neon-green mr-2 mt-1"></i>
                        Write detailed descriptions to attract participants
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check text-neon-green mr-2 mt-1"></i>
                        Include specific location and timing details
                    </li>
                </ul>
                <ul class="text-gray-300 space-y-2 text-sm">
                    <li class="flex items-start">
                        <i class="fas fa-check text-neon-green mr-2 mt-1"></i>
                        Mention any special requirements or themes
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check text-neon-green mr-2 mt-1"></i>
                        Add contact information for inquiries
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check text-neon-green mr-2 mt-1"></i>
                        Promote safety and community guidelines
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
// Character counter for description
document.getElementById('description').addEventListener('input', function() {
    const count = this.value.length;
    document.getElementById('desc-count').textContent = count;
    
    if (count > 500) {
        this.classList.add('border-red-500');
        document.getElementById('description-error').classList.remove('hidden');
        document.getElementById('description-error').textContent = 'Description cannot exceed 500 characters';
    } else {
        this.classList.remove('border-red-500');
        document.getElementById('description-error').classList.add('hidden');
    }
});

// Image preview functionality
document.getElementById('cover_image').addEventListener('change', function(e) {
    const file = e.target.files[0];
    if (file) {
        // Validate file size (5MB)
        if (file.size > 5 * 1024 * 1024) {
            document.getElementById('image-error').classList.remove('hidden');
            document.getElementById('image-error').textContent = 'File size cannot exceed 5MB';
            this.value = '';
            return;
        }
        
        // Validate file type
        if (!file.type.startsWith('image/')) {
            document.getElementById('image-error').classList.remove('hidden');
            document.getElementById('image-error').textContent = 'Please select a valid image file';
            this.value = '';
            return;
        }
        
        document.getElementById('image-error').classList.add('hidden');
        
        const reader = new FileReader();
        reader.onload = function(e) {
            document.getElementById('previewImg').src = e.target.result;
            document.getElementById('imagePreview').classList.remove('hidden');
        };
        reader.readAsDataURL(file);
    }
});

function removeImage() {
    document.getElementById('cover_image').value = '';
    document.getElementById('imagePreview').classList.add('hidden');
}

// Form validation
document.getElementById('eventForm').addEventListener('submit', function(e) {
    let isValid = true;
    
    // Clear previous errors
    document.querySelectorAll('.text-red-400').forEach(el => el.classList.add('hidden'));
    document.querySelectorAll('input, textarea').forEach(el => el.classList.remove('border-red-500'));
    
    // Validate title
    const title = document.getElementById('title').value.trim();
    if (title.length < 5) {
        document.getElementById('title-error').classList.remove('hidden');
        document.getElementById('title-error').textContent = 'Title must be at least 5 characters long';
        document.getElementById('title').classList.add('border-red-500');
        isValid = false;
    }
    
    // Validate description
    const description = document.getElementById('description').value.trim();
    if (description.length < 20) {
        document.getElementById('description-error').classList.remove('hidden');
        document.getElementById('description-error').textContent = 'Description must be at least 20 characters long';
        document.getElementById('description').classList.add('border-red-500');
        isValid = false;
    }
    
    // Validate date
    const date = document.getElementById('date').value;
    const today = new Date().toISOString().split('T')[0];
    if (date < today) {
        document.getElementById('date-error').classList.remove('hidden');
        document.getElementById('date-error').textContent = 'Event date cannot be in the past';
        document.getElementById('date').classList.add('border-red-500');
        isValid = false;
    }
    
    if (!isValid) {
        e.preventDefault();
        // Scroll to first error
        document.querySelector('.border-red-500').scrollIntoView({ behavior: 'smooth', block: 'center' });
    } else {
        // Show loading state
        document.getElementById('submitBtn').innerHTML = '<i class="fas fa-spinner fa-spin mr-3"></i>Creating Event...';
        document.getElementById('submitBtn').disabled = true;
    }
});
</script>

@endsection
