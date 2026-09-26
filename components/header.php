<!-- Header Component -->
<header class="top-0 w-[96%] mx-auto bg-[#F7F4F2] transition-all">
    <div class="w-full h-24 flex items-center justify-between">

        <!-- Left: Brand Logo & Title -->
        <div class="flex items-center gap-4">
            <!-- Squircle Logo Icon Card -->
            <a href="/" class="flex-shrink-0" aria-label="Home">
                <div class="w-13 h-13 sm:w-14 sm:h-14 rounded-2xl bg-white flex items-center justify-center shadow-[0_4px_16px_rgba(0,0,0,0.06),0_1px_3px_rgba(0,0,0,0.04)] hover:shadow-[0_6px_22px_rgba(0,0,0,0.09)] transition-shadow">
                    <img src="assets/icons/logo.png" alt="Logo" class="w-7 h-7 sm:w-8 sm:h-8 object-contain" onerror="this.outerHTML='<span class=\'font-bold text-xl font-serif\'>§</span>'">
                </div>
            </a>

            <!-- Brand Name & The Adsurgeon Tag -->
            <div class="flex items-baseline gap-3 select-none">
                <a href="/" class="text-[20px] sm:text-[22px] font-bold text-neutral-900 tracking-tight hover:text-black transition-colors">
                    Saurabh Sharma
                </a>
                <span class="text-[16px] font-semibold tracking-[0.25em] text-[#8e1515] uppercase font-secondary">
                    THE&nbsp;ADSURGEON
                </span>
            </div>
        </div>

        <!-- Center: Navigation Links -->
        <nav class="hidden lg:flex items-center gap-11 xl:gap-12">
            <a href="#about" class="text-[16px] xl:text-[16.5px] font-medium text-neutral-700 hover:text-neutral-950 transition-colors duration-150">
                About
            </a>
            <a href="#work" class="text-[16px] xl:text-[16.5px] font-medium text-neutral-700 hover:text-neutral-950 transition-colors duration-150">
                Work
            </a>
            <a href="#process" class="text-[16px] xl:text-[16.5px] font-medium text-neutral-700 hover:text-neutral-950 transition-colors duration-150">
                Process
            </a>
            <a href="#experiments" class="text-[16px] xl:text-[16.5px] font-medium text-neutral-700 hover:text-neutral-950 transition-colors duration-150">
                Experiments
            </a>
        </nav>

        <!-- Right: CTA Capsule Pill Button & Mobile Toggle -->
        <div class="flex items-center gap-3.5">
            <a href="#contact" class="hidden sm:inline-flex items-center bg-black hover:bg-neutral-900 text-white rounded-full p-2 pl-2 pr-3.5 shadow-[0_3px_10px_rgba(0,0,0,0.2)] transition-all duration-200 hover:scale-[1.02] active:scale-[0.98] group">
                <!-- Circular Avatar -->
                <img src="assets/images/avatar.png" alt="Saurabh Sharma" class="w-10 h-10 rounded-full object-cover ring-1 ring-white/10" onerror="this.src='https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=120&h=120&fit=crop&crop=faces'">

                <!-- CTA Text -->
                <span class="text-[15px] xl:text-[15.5px] font-medium text-white px-4 tracking-normal select-none">
                    Book a call with me
                </span>

                <!-- "+ You" Badge -->
                <span class="text-[12.5px] font-semibold text-neutral-300 bg-[#262626] group-hover:bg-[#303030] transition-colors px-3 py-1.5 rounded-full border border-neutral-700/60 font-secondary select-none">
                    + You
                </span>
            </a>

            <!-- Mobile menu button -->
            <button id="mobile-menu-btn" class="lg:hidden p-2.5 rounded-xl text-neutral-700 hover:text-neutral-950 hover:bg-neutral-150/70 focus:outline-none transition-colors" aria-label="Toggle Menu">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>
        </div>

    </div>

    <!-- Mobile Navigation Drawer -->
    <div id="mobile-menu" class="hidden lg:hidden w-full pt-4 pb-7 bg-[#F7F4F2] border-b border-neutral-300/60 text-neutral-800 flex flex-col gap-5">
        <a href="#about" class="text-lg font-medium py-1 hover:text-black transition-colors">About</a>
        <a href="#work" class="text-lg font-medium py-1 hover:text-black transition-colors">Work</a>
        <a href="#process" class="text-lg font-medium py-1 hover:text-black transition-colors">Process</a>
        <a href="#experiments" class="text-lg font-medium py-1 hover:text-black transition-colors">Experiments</a>

        <div class="pt-2">
            <a href="#contact" class="flex sm:hidden items-center justify-between bg-black text-white rounded-full p-2 pl-2 pr-3.5 shadow-md">
                <div class="flex items-center gap-3">
                    <img src="assets/images/avatar.png" alt="Saurabh Sharma" class="w-10 h-10 rounded-full object-cover" onerror="this.src='https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=120&h=120&fit=crop&crop=faces'">
                    <span class="text-[15px] font-medium">Book a call with me</span>
                </div>
                <span class="text-xs font-semibold text-neutral-300 bg-[#262626] px-3 py-1.5 rounded-full border border-neutral-700/60 font-secondary">+ You</span>
            </a>
        </div>
    </div>
</header>