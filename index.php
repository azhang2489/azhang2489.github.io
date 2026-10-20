<?php
// Forzar HSTS incluyendo subdominios y opcionalmente habilitar preload
header("Strict-Transport-Security: max-age=31536000; includeSubDomains; preload");
?>

<?php
// Previene que tu sitio sea embebido en iFrames de otros sitios (Clickjacking)
header("X-Frame-Options: SAMEORIGIN");

// Previene la interpretación incorrecta de tipos MIME (MIME-sniffing)
header("X-Content-Type-Options: nosniff");

// Controla cuánta información de referencia se envía al hacer clic en enlaces externos
header("Referrer-Policy: strict-origin-when-cross-origin");
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Glacier Pure Alaska | Glacial Purity, Untamed Wilderness</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Cinzel:wght@600;700;800&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        arctic: {
                            50: '#f0f9ff',
                            100: '#e0f2fe',
                            200: '#bae6fd',
                            300: '#7dd3fc',
                            400: '#38bdf8',
                            500: '#0284c7',
                            600: '#0369a1',
                            700: '#075985',
                            800: '#0c4a6e',
                            900: '#0b2545',
                            950: '#051329',
                        },
                        aurora: {
                            teal: '#10b981',
                            emerald: '#059669',
                            gold: '#f59e0b',
                            purple: '#8b5cf6',
                        }
                    },
                    fontFamily: {
                        sans: ['Plus Jakarta Sans', 'sans-serif'],
                        cinzel: ['Cinzel', 'serif'],
                    }
                }
            }
        }
    </script>
    <style>
        .glass-panel {
            background: rgba(11, 37, 69, 0.45);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border: 1px solid rgba(255, 255, 255, 0.12);
        }
        .glass-card {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        .glass-card-light {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.5);
        }
        .text-glow {
            text-shadow: 0 0 20px rgba(56, 189, 248, 0.5);
        }
        .aurora-bg {
            background: linear-gradient(135deg, rgba(5,19,41,0.95) 0%, rgba(11,37,69,0.9) 50%, rgba(3,105,161,0.8) 100%);
        }
        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-track {
            background: #051329;
        }
        ::-webkit-scrollbar-thumb {
            background: #0369a1;
            border-radius: 4px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #38bdf8;
        }
    </style>
</head>
<body class="bg-arctic-950 text-slate-100 font-sans antialiased overflow-x-hidden selection:bg-arctic-400 selection:text-arctic-950">

    <header class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 glass-panel border-b border-white/10" id="navbar">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between">
            <!-- Brand Logo -->
            <a href="#" class="flex items-center gap-3 group">
                <div class="w-10 h-10 rounded-xl bg-gradient-to-tr from-arctic-500 to-arctic-300 flex items-center justify-center shadow-lg shadow-arctic-500/30 group-hover:scale-105 transition-transform">
                    <i class="fa-solid font-bold fa-mountain-sun text-arctic-950 text-xl"></i>
                </div>
                <div class="flex flex-col">
                    <span class="font-cinzel text-xl font-bold tracking-wider text-white">GLACIER PURE</span>
                    <span class="text-[10px] tracking-[0.3em] text-arctic-300 uppercase font-semibold">Alaska • Est. 64°N</span>
                </div>
            </a>

            <!-- Desktop Navigation -->
            <nav class="hidden md:flex items-center gap-8 text-sm font-medium text-slate-200">
                <a href="#story" class="hover:text-arctic-300 transition-colors">Our Story</a>
                <a href="#shop" class="hover:text-arctic-300 transition-colors">The Bottle</a>
                <a href="#features" class="hover:text-arctic-300 transition-colors">Tech Specs</a>
                <a href="#impact" class="hover:text-arctic-300 transition-colors">Wild Conservation</a>
                <a href="#reviews" class="hover:text-arctic-300 transition-colors">Reviews</a>
            </nav>

            <!-- Action Buttons -->
            <div class="hidden md:flex items-center gap-4">
                <a href="#shop" class="px-5 py-2.5 rounded-full bg-gradient-to-r from-arctic-400 to-arctic-600 text-arctic-950 font-bold text-sm hover:brightness-110 transition-all shadow-lg shadow-arctic-500/20 active:scale-95 flex items-center gap-2">
                    <i class="fa-solid fa-cart-shopping"></i>
                    <span>Shop Now</span>
                </a>
            </div>

            <!-- Mobile Hamburger Button -->
            <button id="mobile-menu-btn" class="md:hidden text-2xl text-slate-200 hover:text-arctic-300 focus:outline-none" aria-label="Toggle Navigation Menu">
                <i class="fa-solid fa-bars"></i>
            </button>
        </div>

        <!-- Mobile Menu dropdown -->
        <div id="mobile-menu" class="hidden md:hidden glass-panel border-t border-white/10 px-6 py-6 space-y-4">
            <a href="#story" class="block text-slate-200 hover:text-arctic-300 text-lg font-medium">Our Story</a>
            <a href="#shop" class="block text-slate-200 hover:text-arctic-300 text-lg font-medium">The Bottle</a>
            <a href="#features" class="block text-slate-200 hover:text-arctic-300 text-lg font-medium">Tech Specs</a>
            <a href="#impact" class="block text-slate-200 hover:text-arctic-300 text-lg font-medium">Wild Conservation</a>
            <a href="#reviews" class="block text-slate-200 hover:text-arctic-300 text-lg font-medium">Reviews</a>
            <a href="#shop" class="w-full text-center px-5 py-3 rounded-full bg-gradient-to-r from-arctic-400 to-arctic-600 text-arctic-950 font-bold text-sm block">Shop Now</a>
        </div>
    </header>

    <section class="relative min-h-screen pt-24 flex items-center justify-center overflow-hidden aurora-bg">
        <!-- High-res Arctic Background Image Overlay -->
        <div class="absolute inset-0 z-0 opacity-40 mix-blend-overlay bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1517411032315-54ef2cb783bb?auto=format&fit=crop&w=2000&q=80');"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-arctic-950 via-transparent to-arctic-950/80 z-0"></div>

        <!-- Floating Particles Effect BG -->
        <div class="absolute inset-0 z-0 opacity-30 pointer-events-none" id="particles-container"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 relative z-10 w-full">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                
                <!-- Left Hero Content -->
                <div class="lg:col-span-6 space-y-6 text-center lg:text-left">
                    <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full glass-card text-arctic-300 text-xs font-semibold uppercase tracking-widest border border-arctic-400/30">
                        <i class="fa-solid fa-snowflake text-arctic-400 animate-spin" style="animation-duration: 8s;"></i>
                        Forged in Denali • Engineered for Eternity
                    </div>
                    
                    <h1 class="font-cinzel text-4xl sm:text-6xl font-extrabold text-white leading-tight">
                        Glacial Purity,<br>
                        <span class="bg-gradient-to-r from-arctic-200 via-arctic-300 to-cyan-400 bg-clip-text text-transparent text-glow">Untamed Wilderness</span>
                    </h1>

                    <p class="text-slate-300 text-lg sm:text-xl font-light max-w-2xl leading-relaxed mx-auto lg:mx-0">
                        Experience ultra-durable, vacuum-insulated vessel technology crafted with Alaskan aerospace steel. Keeps your liquid sub-zero for 24 hours or steaming hot through rugged blizzards.
                    </p>

                    <div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-4 pt-4">
                        <a href="#shop" class="w-full sm:w-auto px-8 py-4 rounded-full bg-gradient-to-r from-arctic-400 via-arctic-300 to-cyan-400 text-arctic-950 font-extrabold text-base hover:shadow-xl hover:shadow-arctic-400/30 hover:scale-105 transition-all text-center flex items-center justify-center gap-2">
                            <span>Customize Your Bottle</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                        <a href="#story" class="w-full sm:w-auto px-8 py-4 rounded-full glass-card text-white font-semibold text-base hover:bg-white/10 transition-all text-center border border-white/20">
                            Explore Our Mission
                        </a>
                    </div>

                    <!-- Key stats badges -->
                    <div class="pt-8 grid grid-cols-3 gap-4 border-t border-white/10 max-w-lg mx-auto lg:mx-0">
                        <div>
                            <p class="font-cinzel text-2xl sm:text-3xl font-bold text-arctic-200">24 HRS</p>
                            <p class="text-xs text-slate-400 uppercase tracking-wider">Sub-Zero Cold</p>
                        </div>
                        <div>
                            <p class="font-cinzel text-2xl sm:text-3xl font-bold text-arctic-200">100%</p>
                            <p class="text-xs text-slate-400 uppercase tracking-wider">Recycled Steel</p>
                        </div>
                        <div>
                            <p class="font-cinzel text-2xl sm:text-3xl font-bold text-arctic-200">LIFETIME</p>
                            <p class="text-xs text-slate-400 uppercase tracking-wider">Alaskan Warranty</p>
                        </div>
                    </div>
                </div>

                <!-- Right Interactive 3D Canvas Showcase -->
                <div class="lg:col-span-6 relative flex flex-col items-center justify-center">
                    <div class="relative w-full aspect-square max-w-[480px] rounded-3xl glass-card p-4 overflow-hidden border border-arctic-400/20 shadow-2xl shadow-arctic-900/80">
                        <div class="absolute top-4 left-4 z-10 glass-panel px-3 py-1 rounded-full text-xs text-arctic-300 font-medium flex items-center gap-1.5">
                            <span class="w-2 h-2 rounded-full bg-emerald-400 animate-ping"></span>
                            3D Interactive View (Drag to rotate)
                        </div>

                        <!-- Three.js Canvas Container -->
                        <div id="hero-3d-canvas" class="w-full h-full cursor-grab active:cursor-grabbing"></div>

                        <div class="absolute bottom-4 left-0 right-0 z-10 text-center text-xs text-slate-400 pointer-events-none">
                            <i class="fa-solid fa-arrows-rotate mr-1"></i> Interactive 3D Model
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="story" class="py-24 relative bg-arctic-900/50 border-y border-white/5">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                
                <!-- Story Image Collage -->
                <div class="relative">
                    <div class="relative z-10 rounded-3xl overflow-hidden shadow-2xl border border-white/10 group">
                        <img src="https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?auto=format&fit=crop&w=1200&q=80" alt="Alaskan Glacier Mountain" class="w-full h-[450px] object-cover group-hover:scale-105 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-arctic-950 via-transparent to-transparent"></div>
                        <div class="absolute bottom-6 left-6 right-6 p-6 glass-panel rounded-2xl">
                            <p class="font-cinzel text-lg font-bold text-white">Chugach Mountain Range, Alaska</p>
                            <p class="text-xs text-slate-300 mt-1">Sourcing inspiration from untouched glacial streams flowing at sub-zero temperatures.</p>
                        </div>
                    </div>

                    <!-- Decorative Floating Card -->
                    <div class="hidden sm:block absolute -bottom-8 -right-8 z-20 w-64 glass-panel p-5 rounded-2xl border border-arctic-400/30 shadow-xl">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full bg-arctic-500/20 flex items-center justify-center text-arctic-300 text-lg">
                                <i class="fa-solid fa-shield-halved"></i>
                            </div>
                            <div>
                                <p class="text-xs font-bold text-white">Zero Plastic Footprint</p>
                                <p class="text-[10px] text-slate-300">Every bottle helps protect 100 sq.ft of Alaskan habitat.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Mission Text -->
                <div class="space-y-6">
                    <div class="inline-flex items-center gap-2 text-arctic-400 font-semibold text-sm uppercase tracking-widest">
                        <i class="fa-solid fa-compass"></i>
                        Our Heritage & Mission
                    </div>
                    <h2 class="font-cinzel text-3xl sm:text-4xl font-bold text-white leading-tight">
                        Built for the Elements. Crafting a Plastic-Free Arctic Future.
                    </h2>
                    <p class="text-slate-300 text-base leading-relaxed">
                        Born high in the Alaskan backcountry, Glacier Pure was created out of necessity. Standard bottles freeze, dent, or fail when temperatures plummet. We set out to design the most resilient vacuum vessel on Earth while honoring the serene wilderness that inspired us.
                    </p>
                    <p class="text-slate-300 text-base leading-relaxed">
                        Every Glacier Pure bottle is crafted from 90% recycled food-grade 18/8 stainless steel, sealed with toxic-free, BPA-free silicone lids, and coated in our signature non-slip ArcticGrip™ powder layer.
                    </p>

                    <div class="grid grid-cols-2 gap-6 pt-4">
                        <div class="flex items-start gap-3">
                            <div class="p-2.5 rounded-xl bg-arctic-800 border border-arctic-700 text-arctic-300 mt-1">
                                <i class="fa-solid fa-leaf"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-white text-sm">100% Eco-Material</h4>
                                <p class="text-xs text-slate-400 mt-1">Non-toxic, phthalate-free premium steel.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <div class="p-2.5 rounded-xl bg-arctic-800 border border-arctic-700 text-arctic-300 mt-1">
                                <i class="fa-solid fa-temperature-arrow-down"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-white text-sm">Thermal Locking</h4>
                                <p class="text-xs text-slate-400 mt-1">Triple-layer copper vacuum insulation.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="shop" class="py-24 relative aurora-bg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16 space-y-4">
                <span class="text-arctic-400 font-semibold text-sm uppercase tracking-widest">Custom Vessel Studio</span>
                <h2 class="font-cinzel text-3xl sm:text-5xl font-extrabold text-white">Select Your Alaskan Vessel</h2>
                <p class="text-slate-300 text-base">Configure your size, custom arctic finish, and lid accessories. Built for rugged trails and urban commutes alike.</p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center glass-panel rounded-3xl p-6 sm:p-10 border border-arctic-400/20">
                
                <!-- Bottle Dynamic Preview Display -->
                <div class="lg:col-span-6 flex flex-col items-center justify-center relative min-h-[420px] bg-arctic-950/60 rounded-2xl p-8 border border-white/10">
                    <div class="absolute top-4 right-4 bg-arctic-500/20 text-arctic-300 border border-arctic-400/30 px-3 py-1 rounded-full text-xs font-semibold uppercase tracking-wider">
                        In Stock & Ready To Ship
                    </div>

                    <!-- Visual Bottle Container -->
                    <div class="relative w-full max-w-[240px] h-[340px] flex items-center justify-center my-4">
                        <!-- Bottle Cap -->
                        <div id="preview-bottle-cap" class="absolute top-2 w-16 h-12 bg-slate-800 rounded-t-lg border-b-4 border-slate-900 shadow-md transition-colors duration-500 z-10 flex items-center justify-center">
                            <div class="w-6 h-3 border-2 border-slate-600 rounded-full"></div>
                        </div>
                        <!-- Bottle Neck -->
                        <div class="absolute top-12 w-20 h-8 bg-slate-700/80 rounded-t-sm z-0"></div>
                        <!-- Bottle Body -->
                        <div id="preview-bottle-body" class="absolute top-18 bottom-0 w-36 bg-gradient-to-r from-arctic-500 via-arctic-400 to-arctic-600 rounded-b-3xl rounded-t-xl shadow-2xl transition-all duration-500 flex flex-col items-center justify-between py-8">
                            <!-- Laser etched brand logo -->
                            <div class="text-white/80 font-cinzel text-xs font-bold tracking-widest text-center px-2 border-y border-white/20 py-2">
                                GLACIER PURE
                                <div class="text-[8px] tracking-normal font-sans text-white/60">ALASKA</div>
                            </div>
                            <div class="text-white/40 text-[10px] uppercase font-mono tracking-widest" id="preview-size-label">32 OZ</div>
                        </div>
                    </div>

                    <!-- Selected Specs Summary -->
                    <div class="flex items-center gap-4 mt-2 text-xs text-slate-300">
                        <span id="preview-color-name" class="font-semibold text-arctic-300">Glacier Blue</span>
                        <span>•</span>
                        <span id="preview-size-spec">32 oz (946 ml)</span>
                        <span>•</span>
                        <span>Triple-Insulated</span>
                    </div>
                </div>

                <!-- Customizer Controls -->
                <div class="lg:col-span-6 space-y-8">
                    
                    <!-- 1. Color Selector -->
                    <div>
                        <label class="block text-sm font-semibold text-slate-200 mb-3 uppercase tracking-wider">
                            1. Select Arctic Finish: <span id="selected-color-title" class="text-arctic-300">Glacier Blue</span>
                        </label>
                        <div class="grid grid-cols-2 sm:grid-cols-4 gap-3">
                            <button onclick="updateColor('Glacier Blue', '#0284c7', '#0369a1', '#38bdf8')" class="color-btn active border-2 border-white p-3 rounded-xl glass-card flex flex-col items-center gap-2 hover:bg-white/10 transition-all text-left">
                                <span class="w-8 h-8 rounded-full bg-gradient-to-tr from-sky-600 to-cyan-400 shadow-md"></span>
                                <span class="text-xs font-medium text-white">Glacier Blue</span>
                            </button>
                            <button onclick="updateColor('Aurora Teal', '#059669', '#047857', '#34d399')" class="color-btn border-2 border-transparent p-3 rounded-xl glass-card flex flex-col items-center gap-2 hover:bg-white/10 transition-all text-left">
                                <span class="w-8 h-8 rounded-full bg-gradient-to-tr from-emerald-600 to-teal-300 shadow-md"></span>
                                <span class="text-xs font-medium text-white">Aurora Teal</span>
                            </button>
                            <button onclick="updateColor('Midnight Gold', '#d97706', '#b45309', '#fbbf24')" class="color-btn border-2 border-transparent p-3 rounded-xl glass-card flex flex-col items-center gap-2 hover:bg-white/10 transition-all text-left">
                                <span class="w-8 h-8 rounded-full bg-gradient-to-tr from-amber-600 to-yellow-300 shadow-md"></span>
                                <span class="text-xs font-medium text-white">Midnight Gold</span>
                            </button>
                            <button onclick="updateColor('Volcanic Obsidian', '#1e293b', '#0f172a', '#475569')" class="color-btn border-2 border-transparent p-3 rounded-xl glass-card flex flex-col items-center gap-2 hover:bg-white/10 transition-all text-left">
                                <span class="w-8 h-8 rounded-full bg-gradient-to-tr from-slate-900 to-slate-700 shadow-md"></span>
                                <span class="text-xs font-medium text-white">Obsidian</span>
                            </button>
                        </div>
                    </div>

                    <!-- 2. Size Selector -->
                    <div>
                        <label class="block text-sm font-semibold text-slate-200 mb-3 uppercase tracking-wider">
                            2. Choose Capacity:
                        </label>
                        <div class="grid grid-cols-3 gap-3">
                            <button onclick="updateSize('20oz', 44.99, '20 OZ')" class="size-btn border-2 border-transparent p-3 rounded-xl glass-card text-center hover:bg-white/10 transition-all">
                                <span class="block text-base font-bold text-white">20 oz</span>
                                <span class="text-[11px] text-slate-400">Day Hikes</span>
                            </button>
                            <button onclick="updateSize('32oz', 49.99, '32 OZ')" class="size-btn active border-2 border-white p-3 rounded-xl glass-card text-center hover:bg-white/10 transition-all">
                                <span class="block text-base font-bold text-white">32 oz</span>
                                <span class="text-[11px] text-arctic-300 font-semibold">Most Popular</span>
                            </button>
                            <button onclick="updateSize('40oz', 54.99, '40 OZ')" class="size-btn border-2 border-transparent p-3 rounded-xl glass-card text-center hover:bg-white/10 transition-all">
                                <span class="block text-base font-bold text-white">40 oz</span>
                                <span class="text-[11px] text-slate-400">Expeditions</span>
                            </button>
                        </div>
                    </div>

                    <!-- Price & Add To Cart Button -->
                    <div class="pt-4 border-t border-white/10 flex flex-col sm:flex-row items-center justify-between gap-4">
                        <div>
                            <span class="text-xs text-slate-400 uppercase tracking-wider block">Total Investment</span>
                            <span id="bottle-price" class="font-cinzel text-3xl font-extrabold text-white">$49.99</span>
                            <span class="text-xs text-emerald-400 font-medium ml-2">Free US Shipping</span>
                        </div>

                        <button id="add-to-cart-btn" onclick="handleAddToCart()" class="w-full sm:w-auto px-8 py-4 rounded-full bg-gradient-to-r from-arctic-400 to-arctic-600 text-arctic-950 font-bold text-base hover:brightness-110 active:scale-95 transition-all shadow-xl shadow-arctic-500/30 flex items-center justify-center gap-3">
                            <i class="fa-solid fa-cart-arrow-down"></i>
                            <span>Add To Cart</span>
                        </button>
                    </div>

                    <!-- Cart feedback alert container -->
                    <div id="cart-notification" class="hidden p-4 rounded-xl bg-emerald-500/20 border border-emerald-500/40 text-emerald-200 text-sm flex items-center gap-3 animate-bounce">
                        <i class="fa-solid fa-circle-check text-emerald-400 text-lg"></i>
                        <span>Added to your pack! Complimentary Alaskan sticker included.</span>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <section id="features" class="py-24 relative bg-arctic-950">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16 space-y-4">
                <span class="text-arctic-400 font-semibold text-sm uppercase tracking-widest">Engineered Superiority</span>
                <h2 class="font-cinzel text-3xl sm:text-5xl font-bold text-white">Tested in Extreme Sub-Zero Climates</h2>
                <p class="text-slate-300 text-base">Every element is precision crafted to withstand drops on glacial rock and insulate against brutal arctic winds.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                
                <!-- Feature 1 -->
                <div class="glass-card p-8 rounded-2xl border border-white/10 hover:border-arctic-400/50 transition-all hover:-translate-y-1">
                    <div class="w-12 h-12 rounded-xl bg-arctic-500/20 border border-arctic-400/30 flex items-center justify-center text-arctic-300 text-2xl mb-6">
                        <i class="fa-solid fa-snowflake"></i>
                    </div>
                    <h3 class="font-cinzel text-xl font-bold text-white mb-2">24hr Cold / 12hr Hot</h3>
                    <p class="text-slate-300 text-sm leading-relaxed">
                        Triple-wall vacuum insulation with an internal copper lining prevents ambient heat transfer even in direct sunlight or arctic storms.
                    </p>
                </div>

                <!-- Feature 2 -->
                <div class="glass-card p-8 rounded-2xl border border-white/10 hover:border-arctic-400/50 transition-all hover:-translate-y-1">
                    <div class="w-12 h-12 rounded-xl bg-arctic-500/20 border border-arctic-400/30 flex items-center justify-center text-arctic-300 text-2xl mb-6">
                        <i class="fa-solid fa-shield-virus"></i>
                    </div>
                    <h3 class="font-cinzel text-xl font-bold text-white mb-2">Pro-Grade 18/8 Steel</h3>
                    <p class="text-slate-300 text-sm leading-relaxed">
                        Non-porous culinary grade stainless steel leaves zero metallic taste and ensures pure hydration with every single sip.
                    </p>
                </div>

                <!-- Feature 3 -->
                <div class="glass-card p-8 rounded-2xl border border-white/10 hover:border-arctic-400/50 transition-all hover:-translate-y-1">
                    <div class="w-12 h-12 rounded-xl bg-arctic-500/20 border border-arctic-400/30 flex items-center justify-center text-arctic-300 text-2xl mb-6">
                        <i class="fa-solid fa-droplet-slash"></i>
                    </div>
                    <h3 class="font-cinzel text-xl font-bold text-white mb-2">ArcticGrip™ Coating</h3>
                    <p class="text-slate-300 text-sm leading-relaxed">
                        Proprietary textured powder coat that resists condensation, sweats zero moisture, and provides a firm grip even with winter gloves.
                    </p>
                </div>

                <!-- Feature 4 -->
                <div class="glass-card p-8 rounded-2xl border border-white/10 hover:border-arctic-400/50 transition-all hover:-translate-y-1">
                    <div class="w-12 h-12 rounded-xl bg-arctic-500/20 border border-arctic-400/30 flex items-center justify-center text-arctic-300 text-2xl mb-6">
                        <i class="fa-solid fa-lock"></i>
                    </div>
                    <h3 class="font-cinzel text-xl font-bold text-white mb-2">Leak-Proof Summit Lid</h3>
                    <p class="text-slate-300 text-sm leading-relaxed">
                        Heavy-duty silicone seal ensures 100% leak protection whether stuffed inside your pack or strapped to a kayak.
                    </p>
                </div>

                <!-- Feature 5 -->
                <div class="glass-card p-8 rounded-2xl border border-white/10 hover:border-arctic-400/50 transition-all hover:-translate-y-1">
                    <div class="w-12 h-12 rounded-xl bg-arctic-500/20 border border-arctic-400/30 flex items-center justify-center text-arctic-300 text-2xl mb-6">
                        <i class="fa-solid fa-ban"></i>
                    </div>
                    <h3 class="font-cinzel text-xl font-bold text-white mb-2">BPA & Toxin Free</h3>
                    <p class="text-slate-300 text-sm leading-relaxed">
                        Completely free of BPA, phthalates, microplastics, and harmful chemical coatings. 100% recyclable and eco-aligned.
                    </p>
                </div>

                <!-- Feature 6 -->
                <div class="glass-card p-8 rounded-2xl border border-white/10 hover:border-arctic-400/50 transition-all hover:-translate-y-1">
                    <div class="w-12 h-12 rounded-xl bg-arctic-500/20 border border-arctic-400/30 flex items-center justify-center text-arctic-300 text-2xl mb-6">
                        <i class="fa-solid fa-hammer"></i>
                    </div>
                    <h3 class="font-cinzel text-xl font-bold text-white mb-2">Impact Armor Shell</h3>
                    <p class="text-slate-300 text-sm leading-relaxed">
                        Reinforced thick gauge base plate withstands heavy drops onto ice, rocks, and hard wilderness trails without denting.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <section id="impact" class="py-20 relative bg-gradient-to-b from-arctic-900 to-arctic-950 border-t border-white/10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <span class="text-arctic-400 font-semibold text-sm uppercase tracking-widest">Our Environmental Footprint</span>
            <h2 class="font-cinzel text-3xl sm:text-4xl font-bold text-white mt-2 mb-12">Wild Alaskan Conservation Impact</h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                
                <!-- Counter 1 -->
                <div class="glass-panel p-8 rounded-2xl border border-arctic-400/20">
                    <div class="text-arctic-400 text-3xl mb-3"><i class="fa-solid fa-bottle-water"></i></div>
                    <div class="font-cinzel text-4xl sm:text-5xl font-extrabold text-white mb-2" id="stat-bottles">1,482,910</div>
                    <p class="text-slate-300 font-medium text-sm">Single-Use Plastic Bottles Prevented</p>
                </div>

                <!-- Counter 2 -->
                <div class="glass-panel p-8 rounded-2xl border border-arctic-400/20">
                    <div class="text-arctic-400 text-3xl mb-3"><i class="fa-solid fa-fish font-bold"></i></div>
                    <div class="font-cinzel text-4xl sm:text-5xl font-extrabold text-white mb-2" id="stat-cleanup">45,000 lbs</div>
                    <p class="text-slate-300 font-medium text-sm">Ocean & River Plastic Removed</p>
                </div>

                <!-- Counter 3 -->
                <div class="glass-panel p-8 rounded-2xl border border-arctic-400/20">
                    <div class="text-arctic-400 text-3xl mb-3"><i class="fa-solid fa-tree"></i></div>
                    <div class="font-cinzel text-4xl sm:text-5xl font-extrabold text-white mb-2" id="stat-funds">$250,000+</div>
                    <p class="text-slate-300 font-medium text-sm">Donated to Alaskan Wildlife Parks</p>
                </div>

            </div>
            <p class="text-xs text-slate-400 mt-8">1% of every single purchase is pledged directly to the Arctic Wilderness Defense Fund.</p>
        </div>
    </section>

    <section id="reviews" class="py-24 relative aurora-bg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-12">
                <span class="text-arctic-400 font-semibold text-sm uppercase tracking-widest">Backcountry Reviews</span>
                <h2 class="font-cinzel text-3xl sm:text-4xl font-bold text-white mt-2">Trusted by Explorers</h2>
            </div>

            <!-- Testimonials Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                
                <div class="glass-card p-6 rounded-2xl border border-white/10 flex flex-col justify-between">
                    <div>
                        <div class="flex text-amber-400 gap-1 text-sm mb-4">
                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                        </div>
                        <p class="text-slate-200 text-sm italic leading-relaxed">
                            "Took the 32oz Glacier Blue bottle on a 5-day trek near Fairbanks in sub-zero weather. Coffee stayed hot through the freezing nights. Absolute game changer!"
                        </p>
                    </div>
                    <div class="mt-6 flex items-center gap-3 border-t border-white/10 pt-4">
                        <div class="w-10 h-10 rounded-full bg-arctic-700 flex items-center justify-center text-white font-bold text-sm">
                            ER
                        </div>
                        <div>
                            <p class="text-sm font-bold text-white">Erik Rasmussen</p>
                            <p class="text-xs text-arctic-300">Arctic Expedition Guide</p>
                        </div>
                    </div>
                </div>

                <div class="glass-card p-6 rounded-2xl border border-white/10 flex flex-col justify-between">
                    <div>
                        <div class="flex text-amber-400 gap-1 text-sm mb-4">
                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                        </div>
                        <p class="text-slate-200 text-sm italic leading-relaxed">
                            "The powder coat finish is unbelievable. No sweat in hot yoga, and when dropped on rocky trails it barely leaves a mark. Plus it looks gorgeous."
                        </p>
                    </div>
                    <div class="mt-6 flex items-center gap-3 border-t border-white/10 pt-4">
                        <div class="w-10 h-10 rounded-full bg-emerald-700 flex items-center justify-center text-white font-bold text-sm">
                            SL
                        </div>
                        <div>
                            <p class="text-sm font-bold text-white">Sarah Lindqvist</p>
                            <p class="text-xs text-arctic-300">Verified Buyer • Anchorage, AK</p>
                        </div>
                    </div>
                </div>

                <div class="glass-card p-6 rounded-2xl border border-white/10 flex flex-col justify-between">
                    <div>
                        <div class="flex text-amber-400 gap-1 text-sm mb-4">
                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                        </div>
                        <p class="text-slate-200 text-sm italic leading-relaxed">
                            "I'm super picky about water taste. This bottle leaves zero metallic aftertaste. Water tastes clean and cold like fresh mountain spring stream."
                        </p>
                    </div>
                    <div class="mt-6 flex items-center gap-3 border-t border-white/10 pt-4">
                        <div class="w-10 h-10 rounded-full bg-amber-700 flex items-center justify-center text-white font-bold text-sm">
                            MD
                        </div>
                        <div>
                            <p class="text-sm font-bold text-white">Marcus Davies</p>
                            <p class="text-xs text-arctic-300">Outdoor Photographer</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="py-20 relative bg-arctic-950 border-t border-white/10">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="glass-panel rounded-3xl p-8 sm:p-12 text-center border border-arctic-400/30 relative overflow-hidden">
                <!-- Background ambient highlight -->
                <div class="absolute -top-24 -left-24 w-48 h-48 bg-arctic-400/20 rounded-full blur-3xl pointer-events-none"></div>

                <i class="fa-solid fa-snowflake text-arctic-400 text-3xl mb-4"></i>
                <h2 class="font-cinzel text-3xl sm:text-4xl font-extrabold text-white mb-3">Join the Arctic Expedition</h2>
                <p class="text-slate-300 text-sm sm:text-base mb-8 max-w-lg mx-auto">
                    Subscribe to receive wild Alaskan expedition stories, eco-updates, and an instant **15% discount code** for your first order.
                </p>

                <form id="newsletter-form" onsubmit="handleNewsletter(event)" class="flex flex-col sm:flex-row gap-3 max-w-md mx-auto">
                    <input type="email" id="newsletter-email" required placeholder="Enter your email address..." class="w-full px-5 py-3.5 rounded-full bg-slate-900/80 border border-white/20 text-white placeholder-slate-400 text-sm focus:outline-none focus:border-arctic-400">
                    <button type="submit" class="px-8 py-3.5 rounded-full bg-gradient-to-r from-arctic-400 to-arctic-600 text-arctic-950 font-bold text-sm hover:brightness-110 transition-all shrink-0">
                        Claim 15% Off
                    </button>
                </form>

                <div id="newsletter-modal" class="hidden mt-6 p-4 rounded-xl bg-emerald-500/20 border border-emerald-400/40 text-emerald-200 text-sm">
                    🎉 Welcome to the pack! Use promo code <strong class="text-white underline">GLACIER15</strong> at checkout for 15% off.
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-arctic-950 border-t border-white/10 py-12 text-slate-400 text-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-12">
                <div class="space-y-4">
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 rounded-lg bg-arctic-500 flex items-center justify-center text-arctic-950 font-bold">
                            <i class="fa-solid fa-mountain-sun"></i>
                        </div>
                        <span class="font-cinzel text-lg font-bold text-white">GLACIER PURE</span>
                    </div>
                    <p class="text-xs text-slate-400 leading-relaxed">
                        Handcrafted for extreme conditions. Dedicated to protecting pristine northern ecosystems and providing lifelong hydration vessels.
                    </p>
                </div>

                <div>
                    <h4 class="font-bold text-white text-sm mb-4">Navigation</h4>
                    <ul class="space-y-2 text-xs">
                        <li><a href="#story" class="hover:text-arctic-300">Our Story</a></li>
                        <li><a href="#shop" class="hover:text-arctic-300">Customizer Studio</a></li>
                        <li><a href="#features" class="hover:text-arctic-300">Technical Specs</a></li>
                        <li><a href="#impact" class="hover:text-arctic-300">Wild Conservation</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-bold text-white text-sm mb-4">Customer Care</h4>
                    <ul class="space-y-2 text-xs">
                        <li><a href="#" class="hover:text-arctic-300">Lifetime Warranty</a></li>
                        <li><a href="#" class="hover:text-arctic-300">Shipping & Returns</a></li>
                        <li><a href="#" class="hover:text-arctic-300">Care & Maintenance</a></li>
                        <li><a href="#" class="hover:text-arctic-300">Contact Backcountry Support</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-bold text-white text-sm mb-4">Connect With Us</h4>
                    <div class="flex gap-4 text-slate-300 text-lg mb-4">
                        <a href="#" class="hover:text-arctic-300"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#" class="hover:text-arctic-300"><i class="fa-brands fa-facebook"></i></a>
                        <a href="#" class="hover:text-arctic-300"><i class="fa-brands fa-youtube"></i></a>
                        <a href="#" class="hover:text-arctic-300"><i class="fa-brands fa-x-twitter"></i></a>
                    </div>
                    <p class="text-xs text-slate-400">Headquarters: Anchorage, Alaska 99501</p>
                </div>
            </div>

            <div class="pt-8 border-t border-white/5 flex flex-col sm:flex-row items-center justify-between text-xs text-slate-500 gap-4">
                <p>&copy; 2026 Glacier Pure Alaska Inc. All rights reserved.</p>
                <div class="flex gap-6">
                    <a href="#" class="hover:underline">Privacy Policy</a>
                    <a href="#" class="hover:underline">Terms of Service</a>
                    <a href="#" class="hover:underline">Patents Pending</a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // --- 1. Mobile Menu Toggle ---
        const mobileBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        mobileBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // --- 2. Interactive Product Customizer Logic ---
        let currentSize = '32oz';
        let currentPrice = 49.99;

        function updateColor(name, hexStart, hexMid, hexEnd) {
            document.getElementById('selected-color-title').innerText = name;
            document.getElementById('preview-color-name').innerText = name;
            
            // Update Preview Bottle DOM Gradient
            const bottleBody = document.getElementById('preview-bottle-body');
            bottleBody.style.background = `linear-gradient(to right, ${hexStart}, ${hexMid}, ${hexEnd})`;

            // Active button state
            document.querySelectorAll('.color-btn').forEach(btn => {
                btn.classList.remove('border-white', 'active');
                btn.classList.add('border-transparent');
            });
            event.currentTarget.classList.remove('border-transparent');
            event.currentTarget.classList.add('border-white', 'active');

            // If 3D mesh is available, update 3D material color
            if (threeBottleMesh) {
                threeBottleMesh.material.color.set(hexStart);
            }
        }

        function updateSize(size, price, label) {
            currentSize = size;
            currentPrice = price;

            document.getElementById('preview-size-label').innerText = label;
            document.getElementById('preview-size-spec').innerText = size + ' capacity';
            document.getElementById('bottle-price').innerText = `$${price.toFixed(2)}`;

            document.querySelectorAll('.size-btn').forEach(btn => {
                btn.classList.remove('border-white', 'active');
                btn.classList.add('border-transparent');
            });
            event.currentTarget.classList.remove('border-transparent');
            event.currentTarget.classList.add('border-white', 'active');
        }

        function handleAddToCart() {
            const notif = document.getElementById('cart-notification');
            notif.classList.remove('hidden');
            setTimeout(() => {
                notif.classList.add('hidden');
            }, 4000);
        }

        function handleNewsletter(e) {
            e.preventDefault();
            const modal = document.getElementById('newsletter-modal');
            modal.classList.remove('hidden');
            document.getElementById('newsletter-email').value = '';
        }

        // --- 3. Three.js 3D Bottle Renderer ---
        let threeBottleMesh;
        function init3DBottle() {
            const container = document.getElementById('hero-3d-canvas');
            if (!container) return;

            const width = container.clientWidth;
            const height = container.clientHeight;

            // Scene, Camera, Renderer
            const scene = new THREE.Scene();
            const camera = new THREE.PerspectiveCamera(45, width / height, 0.1, 1000);
            camera.position.set(0, 0, 7);

            const renderer = new THREE.WebGLRenderer({ alpha: true, antialias: true });
            renderer.setSize(width, height);
            renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
            container.appendChild(renderer.domElement);

            // Lights
            const ambientLight = new THREE.AmbientLight(0xffffff, 0.8);
            scene.add(ambientLight);

            const dirLight1 = new THREE.DirectionalLight(0x7dd3fc, 1.2);
            dirLight1.position.set(5, 10, 7);
            scene.add(dirLight1);

            const dirLight2 = new THREE.DirectionalLight(0xffffff, 0.5);
            dirLight2.position.set(-5, -5, -5);
            scene.add(dirLight2);

            // Create 3D Bottle Group
            const bottleGroup = new THREE.Group();

            // Bottle Cylinder Body
            const bodyGeo = new THREE.CylinderGeometry(0.8, 0.8, 2.6, 32);
            const bodyMat = new THREE.MeshStandardMaterial({
                color: 0x0284c7,
                roughness: 0.3,
                metalness: 0.6,
            });
            threeBottleMesh = new THREE.Mesh(bodyGeo, bodyMat);
            threeBottleMesh.position.y = -0.2;
            bottleGroup.add(threeBottleMesh);

            // Bottle Neck
            const neckGeo = new THREE.CylinderGeometry(0.4, 0.75, 0.5, 32);
            const neckMat = new THREE.MeshStandardMaterial({
                color: 0x0369a1,
                roughness: 0.2,
                metalness: 0.8
            });
            const neckMesh = new THREE.Mesh(neckGeo, neckMat);
            neckMesh.position.y = 1.35;
            bottleGroup.add(neckMesh);

            // Bottle Cap
            const capGeo = new THREE.CylinderGeometry(0.45, 0.45, 0.4, 32);
            const capMat = new THREE.MeshStandardMaterial({
                color: 0x0f172a,
                roughness: 0.5,
                metalness: 0.2
            });
            const capMesh = new THREE.Mesh(capGeo, capMat);
            capMesh.position.y = 1.75;
            bottleGroup.add(capMesh);

            // Handle Ring on Cap
            const ringGeo = new THREE.TorusGeometry(0.25, 0.05, 16, 32);
            const ringMesh = new THREE.Mesh(ringGeo, capMat);
            ringMesh.position.set(0, 2.0, 0);
            ringMesh.rotation.x = Math.PI / 2;
            bottleGroup.add(ringMesh);

            scene.add(bottleGroup);

            // Mouse Drag Rotation Controls
            let isDragging = false;
            let previousMousePosition = { x: 0, y: 0 };

            const domElem = renderer.domElement;

            domElem.addEventListener('mousedown', (e) => {
                isDragging = true;
            });

            domElem.addEventListener('mousemove', (e) => {
                if (isDragging) {
                    const deltaMove = {
                        x: e.clientX - previousMousePosition.x,
                        y: e.clientY - previousMousePosition.y
                    };
                    bottleGroup.rotation.y += deltaMove.x * 0.01;
                    bottleGroup.rotation.x += deltaMove.y * 0.01;
                }
                previousMousePosition = { x: e.clientX, y: e.clientY };
            });

            window.addEventListener('mouseup', () => { isDragging = false; });

            // Touch events for mobile
            domElem.addEventListener('touchstart', (e) => {
                isDragging = true;
                if(e.touches.length > 0) {
                    previousMousePosition = { x: e.touches[0].clientX, y: e.touches[0].clientY };
                }
            });

            domElem.addEventListener('touchmove', (e) => {
                if (isDragging && e.touches.length > 0) {
                    const deltaMove = {
                        x: e.touches[0].clientX - previousMousePosition.x,
                        y: e.touches[0].clientY - previousMousePosition.y
                    };
                    bottleGroup.rotation.y += deltaMove.x * 0.01;
                    bottleGroup.rotation.x += deltaMove.y * 0.01;
                    previousMousePosition = { x: e.touches[0].clientX, y: e.touches[0].clientY };
                }
            });

            window.addEventListener('touchend', () => { isDragging = false; });

            // Animation Loop
            function animate() {
                requestAnimationFrame(animate);
                if (!isDragging) {
                    bottleGroup.rotation.y += 0.005; // Auto slow rotate
                }
                renderer.render(scene, camera);
            }

            animate();

            // Responsive Canvas Resize
            window.addEventListener('resize', () => {
                const newWidth = container.clientWidth;
                const newHeight = container.clientHeight;
                camera.aspect = newWidth / newHeight;
                camera.updateProjectionMatrix();
                renderer.setSize(newWidth, newHeight);
            });
        }

        // Initialize 3D Scene on Window Load
        window.onload = function() {
            init3DBottle();
        };
    </script>
</body>
</html>
