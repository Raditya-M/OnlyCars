@extends('layouts.main')

@section('title', 'Edit - ' . $event->title)
@section('description', 'Edit event details for ' . $event->title)

@section('content')

<div class="min-h-screen pt-20 bg-dark-900">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        
        <!-- Header -->
        <div class="text-center mb-12 animate-fade-in">
            <div class="inline-block px-4 py-2 bg-yellow-500/20 border border-yellow-500/30 text-yellow-400 rounded-full text-sm font-medium mb-4">
                ✏️ Edit Event
            </div>
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">
                Edit <span class="gradient-text">{{ $event->title }}</span>
            </h1>
            <p class="text-xl text-gray-400">Update your event information</p>
        </div>

        <!-- Main Content -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            
            <!-- Current Event Image -->
            <div class="animate-fade-in">
                <div class="glass-morphism rounded-3xl p-6 border border-white/10">
                    <h3 class="text-xl font-semibold text-white mb-4 flex items-center">
                        <i class="fas fa-image text-neon-blue mr-3"></i>
                        Current Cover Image
                    </h3>
                    <div class="relative rounded-2xl overflow-hidden neon-glow">
                        <img src="{{ asset('storage/' . $event->cover_image) }}" 
                             alt="{{ $event->title }}" 
                             class="w-full h-64 lg:h-80 object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
                        <div class="absolute bottom-4 left-4 glass-morphism rounded-lg px-3 py-2">
                            <span class="text-sm font-medium text-white">Current Image</span>
                        </div>
                    </div>
                    
                    <!-- Event Stats -->
                    <div class="mt-4 grid grid-cols-2 gap-4">
                        <div class="text-center p-3 bg-dark-800 rounded-xl">
                            <div class="text-lg font-bold text-neon-blue">{{ date('M j', strtotime($event->date)) }}</div>
                            <div class="text-xs text-gray-400">Current Date</div>
                        </div>
                        <div class="text-center p-3 bg-dark-800 rounded-xl">
                            <div class="text-lg font-bold text-neon-purple">{{ strlen($event->location) > 10 ? substr($event->location, 0, 10) . '...' : $event->location }}</div>
                            <div class="text-xs text-gray-400">Location</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Edit Form -->
            <div class="animate-slide-up">
                <div class="glass-morphism rounded-3xl p-8 border border-white/10">
                    <form action="{{ route('events.update', $event->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6" id="editEventForm">
                        @csrf
                        @method('PUT')

                        <!-- Event Title -->
                        <div class="space-y-3">
                            <label for="title" class="block text-lg font-semibold text-white">
                                <i class="fas fa-tag text-neon-blue mr-2"></i>
                                Event Title
                            </label>
                            <input type="text" 
                                   name="title" 
                                   id="title" 
                                   value="{{ $event->title }}"
                                   required
                                   class="w-full px-4 py-3 bg-dark-800 border border-white/20 rounded-xl focus:ring-2 focus:ring-neon-blue focus:border-transparent transition-all duration-300 text-white">
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
                                      class="w-full px-4 py-3 bg-dark-800 border border-white/20 rounded-xl focus:ring-2 focus:ring-neon-purple focus:border-transparent transition-all duration-300 text-white resize-none">{{ $event->description }}</textarea>
                            <div class="text-gray-400 text-sm">
                                <span id="desc-count">{{ strlen($event->description) }}</span>/500 characters
                            </div>
                            <div class="text-red-400 text-sm hidden" id="description-error"></div>
                        </div>

                        <!-- Date and Location Grid -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Event Date -->
                            <div class="space-y-3">
                                <label for="date" class="block text-lg font-semibold text-white">
                                    <i class="fas fa-calendar-alt text-neon-green mr-2"></i>
                                    Event Date
                                </label>
                                <input type="date" 
                                       name="date" 
                                       id="date" 
                                       value="{{ $event->date }}"
                                       required
                                       min="{{ date('Y-m-d') }}"
                                       class="w-full px-4 py-3 bg-dark-800 border border-white/20 rounded-xl focus:ring-2 focus:ring-neon-green focus:border-transparent transition-all duration-300 text-white">
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
                                       value="{{ $event->location }}"
                                       required
                                       class="w-full px-4 py-3 bg-dark-800 border border-white/20 rounded-xl focus:ring-2 focus:ring-neon-pink focus:border-transparent transition-all duration-300 text-white">
                                <div class="text-red-400 text-sm hidden" id="location-error"></div>
                            </div>
                        </div>

                        <!-- Update Cover Image (Optional) -->
                        <div class="space-y-3">
                            <label for="cover_image" class="block text-lg font-semibold text-white">
                                <i class="fas fa-image text-neon-blue mr-2"></i>
                                Update Cover Image (Optional)
                            </label>
                            <div class="relative">
                                <input type="file" 
                                       name="cover_image" 
                                       id="cover_image"
                                       accept="image/*"
                                       class="w-full px-4 py-3 bg-dark-800 border border-white/20 rounded-xl focus:ring-2 focus:ring-neon-blue focus:border-transparent transition-all duration-300 text-white file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-neon-blue/20 file:text-neon-blue hover:file:bg-neon-blue/30">
                                <p class="text-sm text-gray-400 mt-2">
                                    <i class="fas fa-info-circle mr-1"></i>
                                    Leave empty to keep current image (Max: 5MB)
                                </p>
                            </div>
                            <div class="text-red-400 text-sm hidden" id="image-error"></div>
                            
                            <!-- New Image Preview -->
                            <div id="newImagePreview" class="hidden mt-4">
                                <div class="relative rounded-2xl overflow-hidden border border-white/20">
                                    <img id="newPreviewImg" src="/placeholder.svg" alt="New Preview" class="w-full h-48 object-cover">
                                    <div class="absolute top-2 right-2">
                                        <button type="button" onclick="removeNewImage()" class="w-8 h-8 bg-red-500/80 text-white rounded-full hover:bg-red-500 transition-colors">
                                            <i class="fas fa-times text-xs"></i>
                                        </button>
                                    </div>
                                    <div class="absolute bottom-2 left-2 glass-morphism rounded-lg px-2 py-1">
                                        <span class="text-xs font-medium text-white">New Image</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Action Buttons -->
                        <div class="flex flex-col sm:flex-row gap-4 pt-6">
                            <button type="submit" 
                                    class="flex-1 inline-flex items-center justify-center px-6 py-4 bg-gradient-to-r from-yellow-500 to-orange-500 text-white font-semibold rounded-2xl hover:shadow-2xl hover:shadow-yellow-500/25 transition-all duration-300 transform hover:scale-105"
                                    id="updateBtn">
                                <i class="fas fa-save mr-3"></i>
                                Update Event
                            </button>
                            
                            <a href="{{ route('events.show', $event->id) }}" 
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

// New image preview functionality
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
            document.getElementById('newPreviewImg').src = e.target.result;
            document.getElementById('newImagePreview').classList.remove('hidden');
        };
        reader.readAsDataURL(file);
    }
});

function removeNewImage() {
    document.getElementById('cover_image').value = '';
    document.getElementById('newImagePreview').classList.add('hidden');
}

// Form validation
document.getElementById('editEventForm').addEventListener('submit', function(e) {
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
    
    if (!isValid) {
        e.preventDefault();
        // Scroll to first error
        document.querySelector('.border-red-500').scrollIntoView({ behavior: 'smooth', block: 'center' });
    } else {
        // Show loading state
        document.getElementById('updateBtn').innerHTML = '<i class="fas fa-spinner fa-spin mr-3"></i>Updating Event...';
        document.getElementById('updateBtn').disabled = true;
    }
});
</script>

@endsection
