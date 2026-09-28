<?php
// header.php
if (!isset($theme_uri)) {
    $theme_uri = function_exists('get_stylesheet_directory_uri') ? get_stylesheet_directory_uri() : '';
}
$asset_base = !empty($theme_uri) ? rtrim($theme_uri, '/') . '/' : '';
?>
<!-- Header Component -->
<header class="w-full bg-[#F7F4F2] select-none transition-all">
    <div class="max-w-[1400px] mx-auto px-6 sm:px-8 lg:px-12 h-20 sm:h-22 flex items-center justify-between">

        <!-- Left: Brand Logo & Title -->
        <div class="flex items-center gap-3.5 sm:gap-4 flex-shrink-0">
            <!-- Squircle Logo Icon Card -->
            <a href="/" class="flex-shrink-0 block group" aria-label="Saurabh Sharma Home">
                <div class="w-[50px] h-[50px] sm:w-[54px] sm:h-[54px] rounded-2xl bg-white flex items-center justify-center shadow-[0_4px_16px_rgba(0,0,0,0.06),0_1px_3px_rgba(0,0,0,0.04)] border border-black/[0.04] group-hover:shadow-[0_6px_22px_rgba(0,0,0,0.09)] group-hover:scale-[1.02] transition-all duration-200">
                    <img src="<?= $asset_base ?>assets/icons/logo.png" alt="Logo" class="w-6 h-6 sm:w-7 sm:h-7 object-contain" onerror="this.outerHTML='<span class=\'font-bold text-xl\'>S</span>'">
                </div>
            </a>

            <!-- Brand Name & The Adsurgeon Tag -->
            <div class="flex items-center gap-3 sm:gap-3.5">
                <a href="/" class="text-[19px] sm:text-[21px] font-bold text-neutral-900 tracking-tight hover:text-black transition-colors whitespace-nowrap">
                    Saurabh Sharma
                </a>
                <span class="text-[12px] sm:text-[13px] font-bold tracking-[0.24em] text-[#941f1f] uppercase whitespace-nowrap font-['Roboto_Condensed',sans-serif]">
                    THE&nbsp;ADSURGEON
                </span>
            </div>
        </div>

        <!-- Center: Navigation Links -->
        <nav class="hidden lg:flex items-center gap-9 xl:gap-11">
            <a href="#about" class="text-[15px] xl:text-[15.5px] font-normal text-neutral-800 hover:text-black transition-colors duration-150">
                About
            </a>
            <a href="#work" class="text-[15px] xl:text-[15.5px] font-normal text-neutral-800 hover:text-black transition-colors duration-150">
                Work
            </a>
            <a href="#process" class="text-[15px] xl:text-[15.5px] font-normal text-neutral-800 hover:text-black transition-colors duration-150">
                Process
            </a>
            <a href="#experiments" class="text-[15px] xl:text-[15.5px] font-normal text-neutral-800 hover:text-black transition-colors duration-150">
                Experiments
            </a>
        </nav>

        <!-- Right: CTA Capsule Pill Button & Mobile Toggle -->
        <div class="flex items-center gap-3">
            <a href="#contact" class="hidden sm:inline-flex items-center bg-black hover:bg-neutral-900 text-white rounded-full p-1 pl-1 pr-1.5 shadow-[0_4px_14px_rgba(0,0,0,0.18)] transition-all duration-200 hover:scale-[1.015] active:scale-[0.985] group">
                <!-- Circular Avatar with subtle light backing -->
                <div class="w-9 h-9 sm:w-10 sm:h-10 rounded-full overflow-hidden flex-shrink-0 bg-[#ebe7e1] ring-1 ring-white/10">
                    <img src="<?= $asset_base ?>assets/images/avatar.jpg" alt="Saurabh Sharma" class="w-full h-full object-cover object-[center_20%]" onerror="this.src='<?= $asset_base ?>assets/images/avatar.png'">
                </div>

                <!-- CTA Text -->
                <span class="text-[14px] sm:text-[14.5px] font-normal text-white pl-3 pr-3.5 sm:px-4 tracking-normal whitespace-nowrap select-none">
                    Book a call with me
                </span>

                <!-- "+ You" Badge -->
                <span class="text-[12px] sm:text-[12.5px] font-medium text-neutral-100 bg-[#1F1F1F] group-hover:bg-[#282828] transition-colors px-3 py-1 sm:px-3.5 sm:py-1 rounded-full border border-white/20 select-none whitespace-nowrap">
                    + You
                </span>
            </a>

            <!-- Mobile menu button -->
            <button id="mobile-menu-btn" class="lg:hidden p-2 rounded-xl text-neutral-700 hover:text-neutral-950 hover:bg-neutral-200/50 focus:outline-none transition-colors" aria-label="Toggle Menu">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>
        </div>

    </div>

    <!-- Mobile Navigation Drawer -->
    <div id="mobile-menu" class="hidden lg:hidden w-full px-6 pt-3 pb-6 bg-[#F7F4F2] border-b border-neutral-300/60 text-neutral-800 flex flex-col gap-4">
        <a href="#about" class="text-base font-medium py-1 hover:text-black transition-colors">About</a>
        <a href="#work" class="text-base font-medium py-1 hover:text-black transition-colors">Work</a>
        <a href="#process" class="text-base font-medium py-1 hover:text-black transition-colors">Process</a>
        <a href="#experiments" class="text-base font-medium py-1 hover:text-black transition-colors">Experiments</a>

        <div class="pt-2">
            <a href="#contact" class="flex sm:hidden items-center justify-between bg-black text-white rounded-full p-1 pl-1 pr-1.5 shadow-md">
                <div class="flex items-center">
                    <div class="w-9 h-9 rounded-full overflow-hidden flex-shrink-0 bg-[#ebe7e1] ring-1 ring-white/10">
                        <img src="<?= $asset_base ?>assets/images/avatar.jpg" alt="Saurabh Sharma" class="w-full h-full object-cover object-[center_20%]" onerror="this.src='<?= $asset_base ?>assets/images/avatar.png'">
                    </div>
                    <span class="text-[14px] font-normal text-white px-3">Book a call with me</span>
                </div>
                <span class="text-[12px] font-medium text-neutral-100 bg-[#1F1F1F] px-3 py-1 rounded-full border border-white/20">+ You</span>
            </a>
        </div>
    </div>
</header>