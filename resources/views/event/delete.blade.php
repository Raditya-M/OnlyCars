@extends('layouts.main')

@section('title', 'Delete Event - OnlyCars')
@section('description', 'Confirm event deletion')

@section('content')

<div class="min-h-screen pt-20 bg-dark-900 flex items-center justify-center">
    <div class="max-w-2xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Delete Confirmation Card -->
        <div class="glass-morphism rounded-3xl p-8 md:p-12 border border-red-500/20 animate-fade-in">
            <div class="text-center">
                <!-- Warning Icon -->
                <div class="w-20 h-20 bg-red-500/20 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-exclamation-triangle text-red-400 text-3xl"></i>
                </div>
                
                <h1 class="text-3xl md:text-4xl font-bold text-white mb-4">
                    Delete <span class="text-red-400">Event</span>
                </h1>
                
                <p class="text-xl text-gray-300 mb-8">
                    Are you sure you want to delete this event? This action cannot be undone.
                </p>

                @if(isset($event))
                <!-- Event Preview -->
                <div class="glass-morphism rounded-2xl p-6 border border-white/10 mb-8">
                    <div class="flex items-center space-x-4">
                        <img src="{{ asset('storage/' . $event->cover_image) }}" 
                             alt="{{ $event->title }}" 
                             class="w-16 h-16 object-cover rounded-xl">
                        <div class="text-left">
                            <h3 class="text-lg font-semibold text-white">{{ $event->title }}</h3>
                            <p class="text-sm text-gray-400">{{ date('F j, Y', strtotime($event->date)) }} • {{ $event->location }}</p>
                        </div>
                    </div>
                </div>

                <!-- Warning Message -->
                <div class="bg-red-500/10 border border-red-500/30 rounded-2xl p-4 mb-8">
                    <div class="flex items-start space-x-3">
                        <i class="fas fa-info-circle text-red-400 mt-1"></i>
                        <div class="text-left">
                            <h4 class="text-red-400 font-semibold mb-1">Warning</h4>
                            <p class="text-sm text-gray-300">
                                Once deleted, all event data including registrations and associated content will be permanently removed from the system.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="flex flex-col sm:flex-row gap-4">
                    <form action="{{ route('events.destroy', $event->id) }}" method="POST" class="flex-1" id="deleteForm">
                        @csrf
                        @method('DELETE')
                        <button type="submit" 
                                class="w-full inline-flex items-center justify-center px-8 py-4 bg-gradient-to-r from-red-500 to-red-600 text-white font-semibold rounded-2xl hover:shadow-2xl hover:shadow-red-500/25 transition-all duration-300 transform hover:scale-105"
                                id="deleteBtn">
                            <i class="fas fa-trash mr-3"></i>
                            Yes, Delete Event
                        </button>
                    </form>
                    
                    <a href="{{ route('events.show', $event->id) }}" 
                       class="flex-1 inline-flex items-center justify-center px-8 py-4 glass-morphism border border-white/20 text-white font-semibold rounded-2xl hover:bg-white/10 transition-all duration-300">
                        <i class="fas fa-arrow-left mr-3"></i>
                        Cancel
                    </a>
                </div>
                @else
                <!-- No Event Found -->
                <div class="text-center py-8">
                    <i class="fas fa-question-circle text-6xl text-gray-400 mb-6"></i>
                    <h3 class="text-2xl font-bold text-white mb-4">Event Not Found</h3>
                    <p class="text-gray-400 mb-8">The event you're trying to delete doesn't exist or has already been removed.</p>
                    <a href="/" 
                       class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-neon-blue to-neon-purple text-white font-semibold rounded-xl hover:shadow-lg hover:shadow-neon-blue/25 transition-all duration-300">
                        <i class="fas fa-home mr-2"></i>
                        Back to Events
                    </a>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>

@if(isset($event))
<script>
document.getElementById('deleteForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    // Double confirmation
    if (confirm('This action is irreversible. Are you absolutely sure you want to delete "{{ $event->title }}"?')) {
        // Show loading state
        document.getElementById('deleteBtn').innerHTML = '<i class="fas fa-spinner fa-spin mr-3"></i>Deleting Event...';
        document.getElementById('deleteBtn').disabled = true;
        
        // Submit form after short delay
        setTimeout(() => {
            this.submit();
        }, 1000);
    }
});
</script>
@endif

@endsection
