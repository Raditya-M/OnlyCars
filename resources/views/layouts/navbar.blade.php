<nav class="fixed top-0 w-full z-50 glass-morphism border-b border-white/10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
            <!-- Logo -->
            <a href="/" class="flex items-center space-x-3 group">
                <div class="relative">
                    <div class="w-12 h-12 bg-white rounded-xl flex items-center justify-center group-hover:animate-glow transition-all duration-300">
                        <i class="fas fa-car text-neon-purple text-2xl"></i>
                    </div>
                </div>
                <div class="flex flex-col">
                    <span class="text-2xl font-bold gradient-text">OnlyCars</span>
                    <span class="text-xs text-gray-400 -mt-1">Premium Community</span>
                </div>
            </a>

            <!-- Desktop Navigation -->
            <div class="hidden md:flex items-center space-x-8">
                <a href="/" class="relative group px-4 py-2 text-white hover:text-neon-blue transition-colors duration-300 {{ request()->is('/') ? 'text-neon-blue' : '' }}">
                    <i class="fas fa-calendar mr-2"></i>
                    <span>Events</span>
                    <div class="absolute bottom-0 left-0 w-0 h-0.5 bg-neon-blue group-hover:w-full transition-all duration-300 {{ request()->is('/') ? 'w-full' : '' }}"></div>
                </a>
                <a href="/-" class="relative group px-4 py-2 text-white hover:text-neon-purple transition-colors duration-300 {{ request()->is('-') ? 'text-neon-purple' : '' }}">
                    <i class="fas fa-images mr-2"></i>
                    <span>Gallery</span>
                    <div class="absolute bottom-0 left-0 w-0 h-0.5 bg-neon-purple group-hover:w-full transition-all duration-300 {{ request()->is('-') ? 'w-full' : '' }}"></div>
                </a>
                <a href="/--" class="relative group px-4 py-2 text-white hover:text-neon-green transition-colors duration-300 {{ request()->is('--') ? 'text-neon-green' : '' }}">
                    <i class="fas fa-tshirt mr-2"></i>
                    <span>Merchandise</span>
                    <div class="absolute bottom-0 left-0 w-0 h-0.5 bg-neon-green group-hover:w-full transition-all duration-300 {{ request()->is('--') ? 'w-full' : '' }}"></div>
                </a>
            </div>

            <!-- Contact Info & CTA -->
            <div class="hidden lg:flex items-center space-x-4">
                <div class="flex items-center space-x-3 px-4 py-2 glass-morphism rounded-xl hover:bg-white/5 transition-all duration-300">
                    <div class="w-10 h-10 bg-neon-green/20 rounded-full flex items-center justify-center">
                        <i class="fab fa-whatsapp text-neon-green"></i>
                    </div>
                    <div>
                        <p class="text-sm font-semibold text-white">R. Mahendar</p>
                        <p class="text-xs text-gray-400">0813-8526-0075</p>
                    </div>
                </div>
                
                <a href="https://wa.me/6281385260075" 
                   class="px-6 py-3 bg-gradient-to-r from-neon-green to-emerald-500 text-white font-semibold rounded-xl hover:shadow-lg hover:shadow-neon-green/25 transition-all duration-300 transform hover:scale-105">
                    <i class="fab fa-whatsapp mr-2"></i>
                    Join Community
                </a>
            </div>

            <!-- Mobile menu button -->
            <button class="md:hidden p-2 rounded-lg glass-morphism hover:bg-white/10 transition-colors" onclick="toggleMobileMenu()" id="mobileMenuBtn">
                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" id="menuIcon">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
                <svg class="h-6 w-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24" id="closeIcon">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>

        <!-- Mobile Navigation -->
        <div id="mobile-menu" class="hidden md:hidden pb-6 animate-slide-down">
            <div class="flex flex-col space-y-4">
                <a href="/" class="text-white hover:text-neon-blue font-medium py-3 px-4 rounded-lg hover:bg-white/5 transition-all flex items-center {{ request()->is('/') ? 'text-neon-blue bg-white/5' : '' }}">
                    <i class="fas fa-calendar mr-3"></i>Events
                </a>
                <a href="/-" class="text-white hover:text-neon-purple font-medium py-3 px-4 rounded-lg hover:bg-white/5 transition-all flex items-center {{ request()->is('/-') ? 'text-neon-purple bg-white/5' : '' }}">
                    <i class="fas fa-images mr-3"></i>Gallery
                </a>
                <a href="/--" class="text-white hover:text-neon-green font-medium py-3 px-4 rounded-lg hover:bg-white/5 transition-all flex items-center {{ request()->is('/--') ? 'text-neon-green bg-white/5' : '' }}">
                    <i class="fas fa-tshirt mr-3"></i>Merchandise
                </a>
                
                <div class="pt-4 border-t border-white/10">
                    <a href="https://wa.me/6281385260075" 
                       class="flex items-center space-x-3 text-neon-green font-medium py-3 px-4 rounded-lg hover:bg-neon-green/10 transition-all">
                        <i class="fab fa-whatsapp text-xl"></i>
                        <div>
                            <p class="text-sm">WhatsApp: R. Mahendar</p>
                            <p class="text-xs text-gray-400">0813-8526-0075</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script>
        function toggleMobileMenu() {
            const menu = document.getElementById('mobile-menu');
            const menuIcon = document.getElementById('menuIcon');
            const closeIcon = document.getElementById('closeIcon');
            
            menu.classList.toggle('hidden');
            menuIcon.classList.toggle('hidden');
            closeIcon.classList.toggle('hidden');
        }
        
        // Close mobile menu when clicking outside
        document.addEventListener('click', function(event) {
            const menu = document.getElementById('mobile-menu');
            const menuBtn = document.getElementById('mobileMenuBtn');
            
            if (!menu.contains(event.target) && !menuBtn.contains(event.target)) {
                menu.classList.add('hidden');
                document.getElementById('menuIcon').classList.remove('hidden');
                document.getElementById('closeIcon').classList.add('hidden');
            }
        });
    </script>
</nav>
