<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'OnlyCars - Premium Car Community')</title>
    <meta name="description" content="@yield('description', 'Join the premium car community. Experience exclusive events, gallery, and merchandise for automotive enthusiasts.')">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'sans': ['Inter', 'system-ui', 'sans-serif'],
                    },
                    colors: {
                        'neon': {
                            'blue': '#00D4FF',
                            'purple': '#8B5CF6',
                            'pink': '#F472B6',
                            'green': '#10B981',
                            'orange': '#F59E0B',
                            'red': '#EF4444',
                        },
                        'dark': {
                            '900': '#0A0A0B',
                            '800': '#1A1A1B',
                            '700': '#2A2A2B',
                            '600': '#3A3A3B',
                        }
                    },
                    animation: {
                        'fade-in': 'fadeIn 0.6s ease-out',
                        'slide-up': 'slideUp 0.8s ease-out',
                        'slide-down': 'slideDown 0.8s ease-out',
                        'slide-left': 'slideLeft 0.8s ease-out',
                        'slide-right': 'slideRight 0.8s ease-out',
                        'glow': 'glow 2s ease-in-out infinite alternate',
                        'float': 'float 3s ease-in-out infinite',
                        'pulse-slow': 'pulse 3s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                        'bounce-slow': 'bounce 2s infinite',
                    },
                    backdropBlur: {
                        'xs': '2px',
                    }
                }
            }
        }
    </script>
    
    <style>
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        @keyframes slideUp {
            from { opacity: 0; transform: translateY(40px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        @keyframes slideDown {
            from { opacity: 0; transform: translateY(-40px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        @keyframes slideLeft {
            from { opacity: 0; transform: translateX(40px); }
            to { opacity: 1; transform: translateX(0); }
        }
        
        @keyframes slideRight {
            from { opacity: 0; transform: translateX(-40px); }
            to { opacity: 1; transform: translateX(0); }
        }
        
        @keyframes glow {
            from { box-shadow: 0 0 20px rgba(0, 212, 255, 0.3); }
            to { box-shadow: 0 0 30px rgba(0, 212, 255, 0.6); }
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }
        
        .glass-morphism {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .neon-glow {
            box-shadow: 0 0 20px rgba(0, 212, 255, 0.3);
        }
        
        .card-hover {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .card-hover:hover {
            transform: translateY(-8px) scale(1.02);
        }
        
        .gradient-text {
            background: linear-gradient(135deg, #00D4FF, #8B5CF6);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .line-clamp-2 {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
        
        .line-clamp-3 {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
        
        /* Loading spinner */
        .loading-spinner {
            border: 4px solid rgba(0, 212, 255, 0.3);
            border-radius: 50%;
            border-top: 4px solid #00D4FF;
            width: 40px;
            height: 40px;
            animation: spin 1s linear infinite;
        }
        
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>
</head>
<body class="min-h-screen bg-dark-900 text-white font-sans overflow-x-hidden">
    @include('layouts.navbar')
    
    <main class="relative">
        @yield('content')
    </main>
    
    @include('layouts.footer')
    
    <!-- Scroll to top button -->
    <button id="scrollToTop" class="fixed bottom-8 right-8 w-12 h-12 bg-neon-blue rounded-full flex items-center justify-center opacity-0 transition-all duration-300 hover:scale-110 z-50 shadow-lg shadow-neon-blue/25">
        <i class="fas fa-arrow-up text-dark-900 text-sm"></i>
    </button>
    
    <!-- Loading overlay -->
    <div id="loadingOverlay" class="fixed inset-0 bg-dark-900/80 backdrop-blur-sm flex items-center justify-center z-50 hidden">
        <div class="text-center">
            <div class="loading-spinner mx-auto mb-4"></div>
            <p class="text-white font-medium">Loading...</p>
        </div>
    </div>
    
    <script>
        // Scroll to top functionality
        const scrollToTopBtn = document.getElementById('scrollToTop');
        
        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 300) {
                scrollToTopBtn.style.opacity = '1';
            } else {
                scrollToTopBtn.style.opacity = '0';
            }
        });
        
        scrollToTopBtn.addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
        
        // Loading overlay functions
        function showLoading() {
            document.getElementById('loadingOverlay').classList.remove('hidden');
        }
        
        function hideLoading() {
            document.getElementById('loadingOverlay').classList.add('hidden');
        }
        
        // Image lazy loading
        const images = document.querySelectorAll('img[data-src]');
        const imageObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    img.src = img.dataset.src;
                    img.classList.remove('opacity-0');
                    img.classList.add('opacity-100');
                    observer.unobserve(img);
                }
            });
        });
        
        images.forEach(img => imageObserver.observe(img));
        
        // Smooth animations on scroll
        const animateElements = document.querySelectorAll('.animate-fade-in, .animate-slide-up, .animate-slide-down');
        const animateObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.animationPlayState = 'running';
                }
            });
        });
        
        animateElements.forEach(el => {
            el.style.animationPlayState = 'paused';
            animateObserver.observe(el);
        });
    </script>
</body>
</html>
