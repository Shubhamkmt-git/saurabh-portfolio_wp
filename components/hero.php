<?php
// hero.php
if (!isset($theme_uri)) {
    $theme_uri = function_exists('get_stylesheet_directory_uri') ? get_stylesheet_directory_uri() : '';
}
$asset_base = !empty($theme_uri) ? rtrim($theme_uri, '/') . '/' : '';
?>
<!-- Hero Component -->
<section id="hero" class="relative pt-6 sm:pt-10 pb-16 w-[96%] max-w-7xl mx-auto">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-8 items-center">
        
        <!-- Left Column: Copy & Actions -->
        <div class="lg:col-span-6 xl:col-span-6 flex flex-col justify-center text-left">
            
            <!-- Top Availability Pill Badge -->
            <div class="inline-flex items-center gap-3 px-5 py-2 rounded-full bg-white shadow-[0_4px_16px_rgba(0,0,0,0.08),0_2px_5px_rgba(0,0,0,0.04),inset_0_1px_0_rgba(255,255,255,0.9)] mb-7 self-start">
                <span class="inline-block h-2 w-2 rounded-full bg-[#8e1515] flex-shrink-0 shadow-[0_1px_2px_rgba(142,21,21,0.3)]"></span>
                <span class="text-[11px] sm:text-[11.5px] font-semibold tracking-[0.22em] text-[#8e1515] uppercase font-secondary leading-none">
                    AVAILABLE FOR NEW DISCOVERY CALLS
                </span>
            </div>

            <!-- Main Editorial Headline -->
            <h1 class="font-serif text-5xl sm:text-6xl xl:text-[70px] leading-[1.08] tracking-[-0.02em] text-neutral-950 font-bold mb-6">
                Turning Ad Spend<br class="hidden sm:inline">
                Into 
                <span class="inline-flex items-center align-middle mx-1 sm:mx-2 px-5 sm:px-6 py-1.5 sm:py-2 rounded-full bg-gradient-to-r from-[#6e0d0d] via-[#7d1212] to-[#8d1616] text-white font-sans font-bold text-2xl sm:text-3xl lg:text-[34px] shadow-[0_8px_24px_rgba(110,13,13,0.32)] select-none">
                    ₹250Cr+
                </span>
                <span class="inline-flex items-center justify-center align-middle w-10 h-10 sm:w-11 sm:h-11 rounded-full bg-white shadow-[0_4px_16px_rgba(0,0,0,0.08)] text-[#8e1515] hover:scale-105 transition-transform">
                    <svg class="w-4 h-4 sm:w-5 sm:h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M17 7H9M17 7V15"></path>
                    </svg>
                </span>
                <br>
                In <span class="text-[#831717]">Measurable Revenue.</span>
            </h1>

            <!-- Narrative Subheading -->
            <p class="text-neutral-600 text-base sm:text-[17px] leading-relaxed max-w-lg mb-10 font-normal">
                I build performance marketing systems that drive real business growth for real estate, hospitality, healthcare and high-growth brands.
            </p>

            <!-- Action Row: CTA Pill + Happy Clients Social Proof -->
            <div class="flex flex-wrap items-center gap-4 sm:gap-5">
                
                <!-- Primary CTA Capsule -->
                <a href="#contact" class="inline-flex items-center bg-[#111111] hover:bg-neutral-900 text-white rounded-full p-1 pl-1 pr-1.5 shadow-[0_8px_25px_rgba(0,0,0,0.35)] transition-all duration-200 hover:scale-[1.02] active:scale-[0.98] group">
                    <div class="w-10 h-10 rounded-full overflow-hidden flex-shrink-0 bg-[#ebe7e1] ring-1 ring-white/10">
                        <img src="<?= $asset_base ?>assets/images/avatar.jpg" alt="Saurabh Sharma" class="w-full h-full object-cover object-[center_20%]" onerror="this.onerror=null;this.src='<?= $asset_base ?>assets/images/avatar.png'">
                    </div>
                    <span class="text-[14.5px] sm:text-[15px] font-medium text-white px-3.5 tracking-normal select-none">
                        Book a call with me
                    </span>
                    <span class="text-[12px] font-semibold text-neutral-300 bg-[#242424] group-hover:bg-[#2e2e2e] transition-colors px-3 py-1.5 rounded-full border border-neutral-700/50 font-secondary select-none">
                        + You
                    </span>
                </a>

                <!-- Happy Clients Soft 3D Capsule -->
                <div class="inline-flex items-center gap-3.5 bg-white rounded-full py-2 px-3.5 sm:px-4 shadow-[0_6px_22px_rgba(0,0,0,0.06),0_2px_6px_rgba(0,0,0,0.03)] select-none">
                    <div class="flex items-center -space-x-2">
                        <img src="<?= $asset_base ?>assets/images/client-1.jpg" alt="Client" class="w-8 h-8 rounded-full object-cover ring-2 ring-white">
                        <img src="<?= $asset_base ?>assets/images/client-2.jpg" alt="Client" class="w-8 h-8 rounded-full object-cover ring-2 ring-white">
                        <img src="<?= $asset_base ?>assets/images/client-3.jpg" alt="Client" class="w-8 h-8 rounded-full object-cover ring-2 ring-white">
                        <span class="w-8 h-8 rounded-full bg-[#181818] text-white text-[11px] font-bold flex items-center justify-center ring-2 ring-white">+95</span>
                    </div>
                    <div class="text-left pr-1.5">
                        <div class="text-sm font-bold text-neutral-900 leading-tight">100+</div>
                        <div class="text-[11px] text-neutral-500 font-medium leading-tight">Happy clients</div>
                    </div>
                </div>

            </div>

        </div>

        <!-- Right Column: Hero Visual with Orbital Ring & Floating 3D Stat Cards -->
        <div class="lg:col-span-6 xl:col-span-6 relative flex items-center justify-center mt-8 lg:mt-0 min-h-[460px] sm:min-h-[520px]">
            
            <!-- Technical Circular Orbit Rings in Background -->
            <div class="absolute inset-0 flex items-center justify-center pointer-events-none -z-0">
                <svg class="w-[520px] h-[520px] max-w-none text-[#d9cfc4]" viewBox="0 0 500 500" fill="none">
                    <!-- Outer orbit circle -->
                    <circle cx="250" cy="250" r="215" stroke="currentColor" stroke-width="1.2" stroke-dasharray="3 4" stroke-opacity="0.6" />
                    <!-- Inner delicate orbit -->
                    <circle cx="250" cy="250" r="160" stroke="currentColor" stroke-width="1" stroke-dasharray="2 4" stroke-opacity="0.35" />
                    
                    <!-- Orbital crosshair node: Top -->
                    <circle cx="250" cy="35" r="7" fill="#F8F6F2" stroke="#cfc3b5" stroke-width="1" />
                    <path d="M250 31V39M246 35H254" stroke="#8c7b6b" stroke-width="1.1" stroke-linecap="round" />
                    
                    <!-- Orbital crosshair node: Center Left -->
                    <circle cx="90" cy="250" r="7" fill="#F8F6F2" stroke="#cfc3b5" stroke-width="1" />
                    <path d="M90 246V254M86 250H94" stroke="#8c7b6b" stroke-width="1.1" stroke-linecap="round" />
                    
                    <!-- Orbital crosshair node: Lower Left -->
                    <circle cx="120" cy="360" r="6" fill="#F8F6F2" stroke="#cfc3b5" stroke-width="1" />
                    <path d="M120 357V363M117 360H123" stroke="#8c7b6b" stroke-width="1" stroke-linecap="round" />
                </svg>
            </div>

            <!-- Central Hero Portrait -->
            <div class="relative w-full max-w-[430px] sm:max-w-[480px] z-10 flex justify-center">
                <img src="<?= $asset_base ?>assets/images/saurabh-hero.png" 
                     alt="Saurabh Sharma — Performance Marketer & Adsurgeon" 
                     class="w-full h-auto object-contain select-none transition-transform duration-500 hover:scale-[1.01]"
                     loading="eager"
                     onerror="this.onerror=null;this.src='<?= $asset_base ?>assets/images/hero-person.png'">
            </div>

            <!-- Floating Card 1: Ad Spend Managed (Top Left) -->
            <div class="absolute top-[3%] left-[-1%] sm:left-[2%] lg:left-[-3%] xl:left-[2%] z-20 bg-white rounded-2xl p-3 sm:p-3.5 shadow-[0_10px_28px_rgba(0,0,0,0.07),0_2px_6px_rgba(0,0,0,0.03)] select-none">
                <div class="mb-1.5">
                    <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none">
                        <rect x="3" y="11" width="3.5" height="9" rx="1.75" fill="#c8baa8" />
                        <rect x="9.5" y="6" width="3.5" height="14" rx="1.75" fill="#c8baa8" />
                        <rect x="16" y="2" width="3.5" height="18" rx="1.75" fill="#c8baa8" />
                    </svg>
                </div>
                <div class="text-[16px] sm:text-[17.5px] font-bold text-neutral-900 leading-tight">₹50Cr+</div>
                <div class="text-[10.5px] sm:text-[11px] text-neutral-500 font-medium leading-tight mt-0.5">Ad Spend<br>Managed</div>
            </div>

            <!-- Floating Card 2: Tracked Client Revenue (Bottom Left) -->
            <div class="absolute bottom-[20%] left-[0%] sm:left-[4%] lg:left-[-2%] xl:left-[3%] z-20 bg-white rounded-2xl p-3 sm:p-3.5 shadow-[0_10px_28px_rgba(0,0,0,0.07),0_2px_6px_rgba(0,0,0,0.03)] select-none">
                <div class="mb-1.5">
                    <svg class="w-6 h-6" viewBox="0 0 32 32">
                        <circle cx="16" cy="16" r="11" fill="none" stroke="#ebe4dc" stroke-width="5" />
                        <circle cx="16" cy="16" r="11" fill="none" stroke="#8e1515" stroke-width="5" stroke-dasharray="18 70" stroke-dashoffset="14" stroke-linecap="round" />
                    </svg>
                </div>
                <div class="text-[16px] sm:text-[17.5px] font-bold text-neutral-900 leading-tight">₹6Cr+</div>
                <div class="text-[10.5px] sm:text-[11px] text-neutral-500 font-medium leading-tight mt-0.5">Tracked Client<br>Revenue</div>
            </div>

            <!-- Floating Card 3: Peak ROAS Delivered (Top Right) -->
            <div class="absolute top-[2%] right-[0%] sm:right-[3%] lg:right-[-2%] xl:right-[3%] z-20 bg-white rounded-2xl p-3 sm:p-3.5 shadow-[0_10px_28px_rgba(0,0,0,0.07),0_2px_6px_rgba(0,0,0,0.03)] select-none">
                <div class="mb-1.5">
                    <svg class="w-6 h-6" viewBox="0 0 32 32">
                        <circle cx="16" cy="16" r="11" fill="none" stroke="#ebe4dc" stroke-width="5" />
                        <circle cx="16" cy="16" r="11" fill="none" stroke="#8e1515" stroke-width="5" stroke-dasharray="22 70" stroke-dashoffset="6" stroke-linecap="round" />
                    </svg>
                </div>
                <div class="text-[16px] sm:text-[17.5px] font-bold text-neutral-900 leading-tight">20x</div>
                <div class="text-[10.5px] sm:text-[11px] text-neutral-500 font-medium leading-tight mt-0.5">Peak ROAS<br>Delivered</div>
            </div>

            <!-- Floating Card 4: Brands & Businesses (Middle Right) -->
            <div class="absolute top-[34%] right-[-1%] sm:right-[1%] lg:right-[-3%] xl:right-[0%] z-20 bg-white rounded-2xl p-3 sm:p-3.5 shadow-[0_10px_28px_rgba(0,0,0,0.07),0_2px_6px_rgba(0,0,0,0.03)] select-none">
                <div class="mb-1.5">
                    <svg class="w-6 h-6 text-[#c8baa8]" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 12c2.7 0 4.5-2 4.5-4.5S14.7 3 12 3 7.5 5 7.5 7.5 9.3 12 12 12zm0 2.25c-3.1 0-9.25 1.55-9.25 4.65V21h18.5v-2.1c0-3.1-6.15-4.65-9.25-4.65z" />
                    </svg>
                </div>
                <div class="text-[16px] sm:text-[17.5px] font-bold text-neutral-900 leading-tight">100+</div>
                <div class="text-[10.5px] sm:text-[11px] text-neutral-500 font-medium leading-tight mt-0.5">Brands &amp;<br>Businesses</div>
            </div>

            <!-- Floating Card 5: Qualified Leads Generated (Bottom Right) -->
            <div class="absolute bottom-[10%] right-[1%] sm:right-[4%] lg:right-[0%] xl:right-[4%] z-20 bg-white rounded-2xl p-3.5 sm:p-4 shadow-[0_12px_32px_rgba(0,0,0,0.08),0_2px_8px_rgba(0,0,0,0.03)] select-none">
                <div class="mb-1.5">
                    <svg class="w-6 h-6 text-[#8e1515]" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                    </svg>
                </div>
                <div class="text-[18px] sm:text-[20px] font-bold text-neutral-900 leading-tight">20,000+</div>
                <div class="text-[10.5px] sm:text-[11.5px] text-neutral-500 font-medium leading-tight mt-0.5">Qualified Leads<br>Generated</div>
            </div>

        </div>

    </div>

    <!-- Bottom Metrics Dock Bar -->
    <div class="mt-14 sm:mt-16 w-full bg-white rounded-[26px] sm:rounded-full py-5 px-6 sm:px-10 shadow-[0_12px_40px_rgba(0,0,0,0.06),0_2px_8px_rgba(0,0,0,0.02)] flex flex-col md:flex-row items-center justify-between gap-6 md:gap-4 select-none">
        
        <!-- Metric 1: Industries Served -->
        <div class="flex items-center gap-3.5 sm:gap-4 flex-1 justify-center sm:justify-start w-full md:w-auto">
            <div class="w-12 h-12 sm:w-13 sm:h-13 rounded-full bg-[#f8f5f0] shadow-[inset_0_2px_4px_rgba(0,0,0,0.04),0_1px_2px_rgba(255,255,255,0.8)] flex items-center justify-center flex-shrink-0">
                <svg class="w-5 h-5 sm:w-6 sm:h-6 text-[#726252]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 3L4 7v6c0 5 3.5 9.5 8 11 4.5-1.5 8-6 8-11V7l-8-4z" />
                    <path fill="currentColor" stroke="none" d="M12 9.5l1 2.2 2.4.3-1.8 1.6.5 2.4-2.1-1.2-2.1 1.2.5-2.4-1.8-1.6 2.4-.3 1-2.2z" />
                </svg>
            </div>
            <div>
                <div class="text-2xl sm:text-3xl font-bold text-neutral-900 leading-tight">20+</div>
                <div class="text-xs sm:text-[13px] text-neutral-500 font-medium">Industries Served</div>
            </div>
        </div>

        <div class="hidden md:block w-px h-10 bg-neutral-200/80"></div>

        <!-- Metric 2: Client Retention -->
        <div class="flex items-center gap-3.5 sm:gap-4 flex-1 justify-center sm:justify-start w-full md:w-auto">
            <div class="w-12 h-12 sm:w-13 sm:h-13 rounded-full bg-[#f8f5f0] shadow-[inset_0_2px_4px_rgba(0,0,0,0.04),0_1px_2px_rgba(255,255,255,0.8)] flex items-center justify-center flex-shrink-0">
                <svg class="w-5 h-5 sm:w-6 sm:h-6 text-[#726252]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                </svg>
            </div>
            <div>
                <div class="text-2xl sm:text-3xl font-bold text-neutral-900 leading-tight">92%</div>
                <div class="text-xs sm:text-[13px] text-neutral-500 font-medium">Client Retention</div>
            </div>
        </div>

        <div class="hidden md:block w-px h-10 bg-neutral-200/80"></div>

        <!-- Metric 3: Successful Campaigns -->
        <div class="flex items-center gap-3.5 sm:gap-4 flex-1 justify-center sm:justify-start w-full md:w-auto">
            <div class="w-12 h-12 sm:w-13 sm:h-13 rounded-full bg-[#f8f5f0] shadow-[inset_0_2px_4px_rgba(0,0,0,0.04),0_1px_2px_rgba(255,255,255,0.8)] flex items-center justify-center flex-shrink-0">
                <svg class="w-5 h-5 sm:w-6 sm:h-6 text-[#726252]" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 11H5m14 0a7 7 0 01-7 7m7-7V6a2 2 0 00-2-2H5a2 2 0 00-2 2v5a7 7 0 007 7m0 0v4m-4 0h8"></path>
                </svg>
            </div>
            <div>
                <div class="text-2xl sm:text-3xl font-bold text-neutral-900 leading-tight">50+</div>
                <div class="text-xs sm:text-[13px] text-neutral-500 font-medium">Successful Campaigns</div>
            </div>
        </div>

        <div class="hidden md:block w-px h-10 bg-neutral-200/80"></div>

        <!-- Metric 4: Countries Served -->
        <div class="flex items-center gap-3.5 sm:gap-4 flex-1 justify-center sm:justify-start w-full md:w-auto">
            <div class="w-12 h-12 sm:w-13 sm:h-13 rounded-full bg-[#f8f5f0] shadow-[inset_0_2px_4px_rgba(0,0,0,0.04),0_1px_2px_rgba(255,255,255,0.8)] flex items-center justify-center flex-shrink-0">
                <svg class="w-5 h-5 sm:w-6 sm:h-6 text-[#726252]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                    <circle cx="12" cy="12" r="9" />
                    <path d="M3.6 9h16.8M3.6 15h16.8M12 3a15 15 0 010 18M12 3a15 15 0 000 18" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
            <div>
                <div class="text-2xl sm:text-3xl font-bold text-neutral-900 leading-tight">8+</div>
                <div class="text-xs sm:text-[13px] text-neutral-500 font-medium">Countries Served</div>
            </div>
        </div>

    </div>
</section>
