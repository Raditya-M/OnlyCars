<nav class="fixed top-0 w-full z-50 glass-morphism border-b border-white/10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
            <!-- Logo -->
            <a href="/" class="flex items-center space-x-3 group">
                <div class="relative">
                    <div class="w-12 h-12 bg-white rounded-xl flex items-center justify-center group-hover:animate-glow transition-all duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60" id="car">
  <g id="Page-1" fill="none" fill-rule="evenodd" stroke="none" stroke-width="1">
    <g id="Fill-175-+-Fill-176-+-Fill-177" fill="#1B1A19">
      <path id="Fill-175" d="M60 38a1 1 0 0 0-1-1h-5.09c-.479-2.833-2.943-5-5.91-5s-5.431 2.167-5.91 5H19.91c-.479-2.833-2.943-5-5.91-5s-5.431 2.167-5.91 5H1a1 1 0 0 0 0 2h2v7c0 2.617 2.477 5 5.198 5h2.958l4.981 8.505a1 1 0 0 0 1.223.428l5.564-2.145 4.661 2.122.014.003.185.044.2.04L28 60l.171-.034.187-.032 5.744-2.2 5.529 2.195a1 1 0 0 0 1.243-.443L45.588 51H54c2.369 0 6-2.24 6-5v-7a.977.977 0 0 0-.153-.5A.977.977 0 0 0 60 38zm-12-4c2.206 0 4 1.794 4 4s-1.794 4-4 4-4-1.794-4-4 1.794-4 4-4zm-34 0c2.206 0 4 1.794 4 4s-1.794 4-4 4-4-1.794-4-4 1.794-4 4-4zm8.597 21.771l-5.163 1.99L13.474 51H27v6.446l-3.629-1.652a1.013 1.013 0 0 0-.774-.023zm16.955 1.976l-5.075-2.016a1.002 1.002 0 0 0-.727-.004L29 57.546V51h14.3l-3.748 6.747zM58 46c0 1.362-2.457 3-4 3H12l-.107.022-.164-.022H8.198C6.614 49 5 47.486 5 46v-7h3.09c.479 2.833 2.943 5 5.91 5s5.431-2.167 5.91-5h22.18c.479 2.833 2.943 5 5.91 5s5.431-2.167 5.91-5H58v7z"></path>
      <path id="Fill-176" d="M29.567 32.302a.998.998 0 0 0 .941-1.765c-6.878-3.668-5.257-7.257-3.204-11.8.881-1.949 1.783-3.948 1.876-5.96C31.258 14.095 33 16.007 33 18a1 1 0 0 0 1.894.447c1.792-3.584 3.802-7.603-.596-15.57 8.223 3.434 12.579 10.493 10.732 17.88a1 1 0 0 0 1.331 1.176c1.482-.574 3.62-2.644 4.512-6.242 1.036 1.979 2.146 4.967 1.867 7.575-.183 1.718-.934 2.995-2.295 3.902a1 1 0 0 0 1.11 1.664c1.859-1.239 2.927-3.04 3.174-5.353.491-4.595-2.519-9.962-3.745-11.228a1.001 1.001 0 0 0-1.716.644c-.143 2.694-.995 4.517-1.869 5.658.569-8.096-5.405-15.618-15.113-18.511a1 1 0 1 0-1.124 1.503c4.423 6.803 4.261 10.467 3.069 13.563-1.209-2.249-3.642-4.021-5.814-5.017a.998.998 0 0 0-1.382 1.172c.546 2.004-.474 4.261-1.554 6.651-1.98 4.383-4.444 9.839 4.086 14.388"></path>
      <path id="Fill-177" d="M40.628 30.071A1.002 1.002 0 0 0 41 32c.124 0 .249-.023.372-.071 1.939-.776 3.035-2.653 3.085-5.284.078-4.161-2.423-9.391-5.051-10.559a1 1 0 0 0-1.343 1.265c1.365 3.638.704 6.145-.655 6.741-1.103.485-2.45-.387-3.35-2.167a1.003 1.003 0 0 0-.971-.546 1.002 1.002 0 0 0-.873.691c-1.247 3.874-1.254 6.305 2.079 9.637a.999.999 0 1 0 1.414-1.414c-2.035-2.035-2.531-3.442-2.132-5.578 1.495 1.567 3.282 1.804 4.637 1.208 1.598-.701 2.768-2.576 2.597-5.45.955 1.76 1.686 4.105 1.647 6.133-.034 1.828-.649 2.994-1.828 3.465"></path>
    </g>
  </g>
</svg>
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
                <a href="/-" class="relative group px-4 py-2 text-white hover:text-neon-purple transition-colors duration-300 {{ request()->is('/-') ? 'text-neon-purple' : '' }}">
                    <i class="fas fa-images mr-2"></i>
                    <span>Gallery</span>
                    <div class="absolute bottom-0 left-0 w-0 h-0.5 bg-neon-purple group-hover:w-full transition-all duration-300 {{ request()->is('/-') ? 'w-full' : '' }}"></div>
                </a>
                <a href="/--" class="relative group px-4 py-2 text-white hover:text-neon-green transition-colors duration-300 {{ request()->is('/--') ? 'text-neon-green' : '' }}">
                    <i class="fas fa-tshirt mr-2"></i>
                    <span>Merchandise</span>
                    <div class="absolute bottom-0 left-0 w-0 h-0.5 bg-neon-green group-hover:w-full transition-all duration-300 {{ request()->is('/--') ? 'w-full' : '' }}"></div>
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
