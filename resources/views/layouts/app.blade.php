<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Carvora Charcoal Indonesia – Premium Coconut Shell Charcoal')</title>
    <meta name="description" content="@yield('description', 'Produsen briket arang tempurung kelapa premium Indonesia. 100% alami, bebas kimia, ekspor ke 30+ negara.')">

    {{-- Favicon --}}
    <link rel="icon" type="image/png" href="/logo.png">
    <link rel="shortcut icon" type="image/png" href="/logo.png">
    <link rel="apple-touch-icon" href="/logo.png">

    {{-- Open Graph / Social Share --}}
    <meta property="og:type"        content="website">
    <meta property="og:url"         content="https://carvoracharcoal.my.id/">
    <meta property="og:title"       content="Carvora Charcoal – Premium Coconut Shell Charcoal Indonesia">
    <meta property="og:description" content="Produsen briket arang tempurung kelapa premium dari Indonesia. 100% natural, ISO certified, ekspor ke 30+ negara.">
    <meta property="og:image"       content="https://carvoracharcoal.my.id/og.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height"content="630">
    <meta property="og:locale"      content="id_ID">
    <meta name="twitter:card"       content="summary_large_image">
    <meta name="twitter:title"      content="Carvora Charcoal – Premium Coconut Shell Charcoal">
    <meta name="twitter:description"content="Produsen briket arang tempurung kelapa premium dari Indonesia.">
    <meta name="twitter:image"      content="https://carvoracharcoal.my.id/og.png">

    {{-- SEO --}}
    <meta name="keywords" content="briket arang, charcoal briquette, coconut shell charcoal, arang tempurung kelapa, charcoal exporter indonesia, BBQ charcoal, shisha charcoal">
    <meta name="author"   content="Carvora Charcoal Indonesia">
    <link rel="canonical" href="https://carvoracharcoal.my.id/">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700;800;900&family=Inter:wght@300;400;500;600;700&family=Space+Grotesk:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        gold:     '#D4AF37',
                        'gold-l': '#F5C842',
                        'gold-d': '#A07820',
                        void:     '#080808',
                        'void-2': '#0F0F0F',
                        'void-3': '#161616',
                        'glass':  'rgba(255,255,255,0.04)',
                    },
                    fontFamily: {
                        playfair: ['"Playfair Display"','serif'],
                        inter:    ['Inter','sans-serif'],
                        grotesk:  ['"Space Grotesk"','sans-serif'],
                    },
                }
            }
        }
    </script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

    <style>
        *, *::before, *::after { box-sizing: border-box; }
        html { scroll-behavior: smooth; overflow-x: hidden; max-width: 100vw; }
        body { overflow-x: hidden; max-width: 100vw; position: relative; }
        section, footer, nav { max-width: 100vw; overflow-x: hidden; }
        [data-aos] { overflow-x: hidden; }

        /* ── Hide Google Translate default UI ───────── */
        .goog-te-banner-frame, .goog-te-balloon-frame { display:none !important; }
        .goog-te-gadget { display:none !important; }
        body { top: 0 !important; }
        .VIpgJd-ZVi9od-ORHb-OEVmcd { display:none !important; }
        .goog-te-spinner-pos { display:none !important; }
        .skiptranslate { display:none !important; }

        /* ── Lang toggle button ─────────────────────── */
        .lang-btn {
            font-family: 'Space Grotesk', sans-serif;
            font-size: 11px;
            font-weight: 600;
            letter-spacing: .08em;
            padding: 4px 10px;
            border-radius: 999px;
            cursor: pointer;
            transition: all .25s ease;
            border: none;
            background: transparent;
            color: #666;
        }
        .lang-btn.active {
            background: linear-gradient(135deg, #D4AF37, #F5C842);
            color: #080808;
        }

        body {
            background: #080808;
            color: #fff;
            font-family: 'Inter', sans-serif;
            overflow-x: hidden;
        }

        /* ── Scrollbar ───────────────────────────────── */
        ::-webkit-scrollbar       { width: 4px; }
        ::-webkit-scrollbar-track { background: #080808; }
        ::-webkit-scrollbar-thumb { background: #D4AF37; border-radius: 2px; }

        /* ── Gold helpers ────────────────────────────── */
        .gold-text {
            background: linear-gradient(135deg, #A07820 0%, #D4AF37 40%, #F5C842 60%, #D4AF37 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        .gold-stroke {
            -webkit-text-stroke: 1.5px #D4AF37;
            color: transparent;
        }
        @keyframes shimmer {
            0%   { background-position: -300% center; }
            100% { background-position:  300% center; }
        }
        .shimmer {
            background: linear-gradient(90deg,#A07820 0%,#D4AF37 30%,#F5C842 50%,#D4AF37 70%,#A07820 100%);
            background-size: 300% auto;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            animation: shimmer 4s linear infinite;
        }
        .gold-line {
            height: 1px;
            background: linear-gradient(90deg, transparent, #D4AF37, transparent);
        }

        /* ── Glow ────────────────────────────────────── */
        .glow-gold {
            filter: blur(90px);
            border-radius: 50%;
            background: #D4AF37;
            opacity: .12;
            pointer-events: none;
        }
        .btn-glow:hover {
            box-shadow: 0 0 30px rgba(212,175,55,.5), 0 0 60px rgba(212,175,55,.2);
        }

        /* ── Glassmorphism ───────────────────────────── */
        .glass {
            background: rgba(255,255,255,.04);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(212,175,55,.12);
        }
        .glass:hover {
            background: rgba(255,255,255,.07);
            border-color: rgba(212,175,55,.35);
        }

        /* ── Buttons ─────────────────────────────────── */
        .btn-primary {
            background: linear-gradient(135deg, #D4AF37, #F5C842);
            color: #080808;
            font-weight: 700;
            font-family: 'Space Grotesk', sans-serif;
            letter-spacing: .04em;
            transition: all .3s ease;
        }
        .btn-primary:hover {
            background: linear-gradient(135deg, #F5C842, #D4AF37);
            transform: translateY(-2px);
            box-shadow: 0 8px 30px rgba(212,175,55,.4);
        }
        .btn-ghost {
            border: 1px solid rgba(212,175,55,.4);
            color: #D4AF37;
            background: transparent;
            font-family: 'Space Grotesk', sans-serif;
            letter-spacing: .04em;
            transition: all .3s ease;
        }
        .btn-ghost:hover {
            border-color: #D4AF37;
            background: rgba(212,175,55,.08);
            transform: translateY(-2px);
        }

        /* ── Hexagon ─────────────────────────────────── */
        .hex {
            clip-path: polygon(50% 0%,100% 25%,100% 75%,50% 100%,0% 75%,0% 25%);
            background: linear-gradient(135deg,#D4AF37,#F5C842);
        }

        /* ── Marquee ─────────────────────────────────── */
        @keyframes marquee { from { transform: translateX(0); } to { transform: translateX(-50%); } }
        .marquee-track { animation: marquee 24s linear infinite; display: flex; width: max-content; }
        .marquee-track:hover { animation-play-state: paused; }

        /* ── Navbar ──────────────────────────────────── */
        .nav-blur {
            background: rgba(8,8,8,.8);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border-bottom: 1px solid rgba(212,175,55,.1);
        }

        /* ── Card hover ──────────────────────────────── */
        .card-lift {
            transition: transform .35s ease, border-color .35s ease, box-shadow .35s ease;
        }
        .card-lift:hover {
            transform: translateY(-8px);
            border-color: rgba(212,175,55,.4) !important;
            box-shadow: 0 20px 60px rgba(212,175,55,.1);
        }

        /* ── Img zoom ────────────────────────────────── */
        .img-zoom { overflow: hidden; }
        .img-zoom img { transition: transform .6s ease; }
        .img-zoom:hover img { transform: scale(1.06); }

        /* ── Oversized display type ──────────────────── */
        .display-xl {
            font-size: clamp(2.2rem, 8vw, 8.5rem);
            font-family: 'Space Grotesk', sans-serif;
            font-weight: 700;
            line-height: .95;
            letter-spacing: -.03em;
        }
        .display-lg {
            font-size: clamp(1.8rem, 5vw, 5.5rem);
            font-family: 'Space Grotesk', sans-serif;
            font-weight: 700;
            line-height: 1;
            letter-spacing: -.025em;
        }
        .display-md {
            font-size: clamp(1.4rem, 3.5vw, 3.5rem);
            font-family: 'Space Grotesk', sans-serif;
            font-weight: 600;
            line-height: 1.1;
            letter-spacing: -.02em;
        }

        /* ── Section label ───────────────────────────── */
        .section-tag {
            font-family: 'Space Grotesk', sans-serif;
            font-size: .7rem;
            font-weight: 500;
            letter-spacing: .25em;
            text-transform: uppercase;
            color: #D4AF37;
        }

        /* ── Stat number ─────────────────────────────── */
        .stat-num {
            font-family: 'Space Grotesk', sans-serif;
            font-size: clamp(3rem, 7vw, 6rem);
            font-weight: 700;
            line-height: 1;
            letter-spacing: -.03em;
        }

        /* ── WA float ────────────────────────────────── */
        @keyframes wa-pulse {
            0%,100% { box-shadow: 0 0 0 0 rgba(37,211,102,.45); }
            60%      { box-shadow: 0 0 0 14px rgba(37,211,102,0); }
        }
        .wa-float {
            position: fixed; bottom: 28px; right: 28px; z-index: 999;
            animation: wa-pulse 2.5s infinite;
        }

        /* ── Sticky Mobile CTA ──────────────────────── */
        .sticky-cta {
            position: fixed; bottom: 0; left: 0; right: 0;
            z-index: 990;
            padding: 12px 14px calc(16px + env(safe-area-inset-bottom, 0px));
            background: rgba(8,8,8,.97);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border-top: 1px solid rgba(212,175,55,.2);
            box-shadow: 0 -8px 32px rgba(0,0,0,.6);
        }
        @media (min-width: 1024px) { .sticky-cta { display: none !important; } }
        @media (max-width: 1023px) {
            body { padding-bottom: calc(76px + env(safe-area-inset-bottom, 0px)); }
        }

        /* ── Scroll to Top ───────────────────────────── */
        #scroll-top {
            position: fixed; bottom: 90px; right: 22px; z-index: 990;
            width: 40px; height: 40px; border-radius: 50%;
            background: linear-gradient(135deg,#D4AF37,#F5C842);
            display: flex; align-items: center; justify-content: center;
            cursor: pointer; border: none;
            transition: all .3s ease;
            opacity: 0; transform: translateY(12px);
            pointer-events: none;
        }
        #scroll-top.show { opacity: 1; transform: translateY(0); pointer-events: auto; }
        #scroll-top:hover { box-shadow: 0 0 20px rgba(212,175,55,.5); transform: translateY(-2px); }
        @media (max-width: 1023px) {
            #scroll-top { bottom: calc(90px + env(safe-area-inset-bottom, 0px)); right: 16px; }
        }

        /* ── WA Float — mobile position above sticky bar ── */
        @media (max-width: 1023px) {
            .wa-float { bottom: calc(106px + env(safe-area-inset-bottom, 0px)) !important; right: 16px !important; transition: opacity .3s ease !important; }
            #wa-popup { bottom: calc(184px + env(safe-area-inset-bottom, 0px)) !important; right: 16px !important; width: 260px !important; }
            #scroll-top { bottom: calc(108px + env(safe-area-inset-bottom, 0px)) !important; right: 64px !important; }
        }

        /* ── Hero mobile background ──────────────────── */
        @media (max-width: 1023px) {
            #home-mobile-bg {
                position: absolute; inset: 0; z-index: 0;
                background: url('https://loremflickr.com/800/1200/charcoal,fire,coal?lock=55') center/cover no-repeat;
                opacity: .12;
            }
        }
        @media (min-width: 1024px) { #home-mobile-bg { display: none; } }

        /* ── Product Carousel — mobile swipe ─────────── */
        .product-track {
            display: flex;
            overflow-x: auto;
            scroll-snap-type: x mandatory;
            -webkit-overflow-scrolling: touch;
            gap: 1rem;
            padding-bottom: .5rem;
            margin: 0 -1.25rem;
            padding-left: 1.25rem;
            padding-right: 1.25rem;
            scrollbar-width: none;
        }
        .product-track::-webkit-scrollbar { display: none; }
        .product-slide {
            flex-shrink: 0;
            width: 82vw;
            max-width: 320px;
            scroll-snap-align: start;
        }
        @media (min-width: 1024px) {
            .product-track {
                display: grid !important;
                grid-template-columns: repeat(3,1fr);
                gap: 1.5rem;
                overflow-x: visible;
                margin: 0;
                padding: 0;
                scroll-snap-type: none;
            }
            .product-slide { width: auto; max-width: none; flex-shrink: 1; }
        }

        /* ── Carousel dots ───────────────────────────── */
        .carousel-dots { display: flex; justify-content: center; gap: 6px; margin-top: 16px; }
        .carousel-dots span {
            width: 6px; height: 6px; border-radius: 50%;
            background: rgba(212,175,55,.25); transition: all .3s;
        }
        .carousel-dots span.active { background: #D4AF37; width: 18px; border-radius: 3px; }
        @media (min-width: 1024px) { .carousel-dots { display: none; } }

        /* ── Loading Screen ──────────────────────────── */
        #loading-screen {
            position: fixed; inset: 0; z-index: 99999;
            background: #080808;
            display: flex; flex-direction: column;
            align-items: center; justify-content: center;
            transition: opacity .6s ease;
        }
        #loading-screen.fade-out { opacity: 0; pointer-events: none; }
        #load-progress {
            width: 0; height: 100%;
            background: linear-gradient(90deg, #A07820, #D4AF37, #F5C842);
            transition: width 1.4s cubic-bezier(.4,0,.2,1);
            border-radius: 9px;
        }

        /* ── WA Popup ────────────────────────────────── */
        #wa-popup {
            position: fixed; bottom: 100px; right: 22px; z-index: 998;
            width: 280px;
            transform: translateY(20px);
            opacity: 0;
            transition: all .4s cubic-bezier(.4,0,.2,1);
            pointer-events: none;
        }
        #wa-popup.show {
            transform: translateY(0);
            opacity: 1;
            pointer-events: auto;
        }
        @keyframes fadeIn { from{opacity:0;transform:translateY(16px)} to{opacity:1;transform:translateY(0)} }

        /* ── Noise overlay ───────────────────────────── */
        .noise::after {
            content: '';
            position: absolute; inset: 0;
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.03'/%3E%3C/svg%3E");
            opacity: .4;
            pointer-events: none;
        }
    </style>

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @stack('head')
</head>
<body x-data="{ nav: false, scrolled: false }" @scroll.window="scrolled = window.scrollY > 40">

{{-- ══ LOADING SCREEN ══ --}}
<div id="loading-screen">
    <img src="/logo.png" alt="Carvora" class="h-20 w-auto mb-8" style="animation:pulse 1.5s ease-in-out infinite">
    <div class="w-52 h-1 bg-white/5 rounded-full overflow-hidden">
        <div id="load-progress"></div>
    </div>
    <p class="text-gray-700 text-xs tracking-widest mt-4 font-grotesk uppercase">Loading...</p>
</div>

{{-- ══ WA POPUP ══ --}}
<div id="wa-popup">
    <div class="glass border border-gold/20 rounded-2xl p-5 shadow-2xl relative">
        <button onclick="closeWaPopup()"
                class="absolute top-3 right-3 text-gray-600 hover:text-gold transition-colors text-lg leading-none">✕</button>
        <div class="flex items-center gap-3 mb-3">
            <div class="w-10 h-10 rounded-full bg-green-500 flex items-center justify-center flex-shrink-0">
                <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                </svg>
            </div>
            <div>
                <div class="text-white text-sm font-semibold font-grotesk">Carvora Charcoal</div>
                <div class="flex items-center gap-1.5 mt-0.5">
                    <span class="w-2 h-2 rounded-full bg-green-400 animate-pulse"></span>
                    <span class="text-green-400 text-xs">Online</span>
                </div>
            </div>
        </div>
        <p class="text-gray-400 text-sm leading-relaxed mb-4">
            👋 Hi! Need a <span class="text-gold">quote</span> or <span class="text-gold">free sample</span>?<br>
            Chat us now — we reply fast!
        </p>
        <a href="https://wa.me/6282125573419?text=Hello%20Carvora%20Charcoal%2C%0A%0AI%20found%20your%20website%20and%20I%27m%20interested%20in%20your%20coconut%20charcoal%20briquettes.%20Could%20you%20please%20share%20your%20product%20catalog%2C%20specifications%2C%20MOQ%2C%20and%20price%20quotation%3F%0A%0AThank%20you."
           target="_blank" rel="noopener"
           class="btn-gold w-full py-2.5 rounded-full text-sm text-center block font-semibold">
            Chat Now →
        </a>
    </div>
</div>

{{-- ═══════ NAVBAR ═══════ --}}
{{-- ══ NAVBAR ══ --}}
<nav class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 py-4 px-5 lg:px-14"
     :class="(scrolled || nav) ? 'nav-blur py-3' : 'bg-transparent'">
    <div class="max-w-7xl mx-auto flex items-center justify-between">

        {{-- Logo --}}
        <x-logo size="md" uid="nav"/>

        {{-- Desktop nav --}}
        <div class="hidden lg:flex items-center gap-10 text-[13px] font-medium font-grotesk">
            @foreach([['#products','Produk'],['#about','Tentang'],['#process','Proses'],['#export','Ekspor'],['#blog','Blog']] as [$h,$l])
            <a href="{{ $h }}" class="text-gray-500 hover:text-gold transition-colors tracking-wide">{{ $l }}</a>
            @endforeach
        </div>

        {{-- Language Toggle desktop --}}
        <div class="hidden lg:flex items-center gap-1 border border-gold/20 rounded-full p-1">
            <button class="lang-btn active" id="btn-id" onclick="setLang('id')">ID</button>
            <button class="lang-btn" id="btn-en" onclick="setLang('en')">EN</button>
        </div>

        {{-- CTA desktop --}}
        <div class="hidden lg:flex items-center gap-3">
            <a href="#contact" class="btn-ghost px-5 py-2 rounded-full text-sm">Kontak</a>
            <a href="#contact" class="btn-primary px-5 py-2 rounded-full text-sm">Minta Sample</a>
        </div>

        {{-- Burger --}}
        <button @click="nav=!nav" class="lg:hidden p-2 text-gold relative z-[60]">
            <svg x-show="!nav" class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/></svg>
            <svg x-show="nav"  class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg>
        </button>
    </div>
</nav>

{{-- ══ MOBILE FULL-SCREEN DRAWER ══ --}}
<div x-show="nav"
     x-transition:enter="transition ease-out duration-300"
     x-transition:enter-start="opacity-0 -translate-y-3"
     x-transition:enter-end="opacity-100 translate-y-0"
     x-transition:leave="transition ease-in duration-200"
     x-transition:leave-start="opacity-100 translate-y-0"
     x-transition:leave-end="opacity-0 -translate-y-3"
     class="fixed inset-0 z-40 lg:hidden flex flex-col"
     style="background: #090909; padding-top: 72px; padding-bottom: calc(88px + env(safe-area-inset-bottom, 0px));">

    {{-- Gold top accent --}}
    <div style="height:2px; background:linear-gradient(90deg,transparent,#D4AF37 40%,#F5C842 60%,transparent)"></div>

    {{-- Nav links --}}
    <div class="flex flex-col px-7 py-8 gap-1 flex-1 overflow-y-auto">
        <p class="section-tag mb-6">Navigasi</p>

        @foreach([
            ['#products','Produk','M20.25 7.5l-.625 10.632a2.25 2.25 0 01-2.247 2.118H6.622a2.25 2.25 0 01-2.247-2.118L3.75 7.5m8.25 3v6.75m0 0l-3-3m3 3l3-3M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z'],
            ['#about','Tentang Kami','M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25'],
            ['#process','Proses Produksi','M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z M15 12a3 3 0 11-6 0 3 3 0 016 0z'],
            ['#export','Ekspor','M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253'],
            ['#blog','Blog & Info','M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z'],
            ['#contact','Kontak','M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z'],
        ] as [$h,$l,$icon])
        <a href="{{ $h }}" @click="nav=false"
           class="flex items-center gap-4 py-4 border-b border-white/5 group">
            <div class="w-9 h-9 rounded-xl bg-gold/8 border border-gold/15 flex items-center justify-center flex-shrink-0 group-hover:bg-gold/15 group-hover:border-gold/30 transition-all">
                <svg class="w-4 h-4 text-gold/70 group-hover:text-gold transition-colors" fill="none" stroke="currentColor" stroke-width="1.6" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="{{ $icon }}"/>
                </svg>
            </div>
            <span class="font-grotesk font-medium text-gray-400 group-hover:text-white transition-colors text-base">{{ $l }}</span>
            <svg class="w-4 h-4 text-gray-700 ml-auto group-hover:text-gold/50 transition-colors" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"/>
            </svg>
        </a>
        @endforeach
    </div>

    {{-- Bottom: lang + CTA --}}
    <div class="px-7 pb-4 space-y-3 border-t border-white/5 pt-5">
        <div class="flex items-center gap-2 mb-2">
            <span class="text-gray-600 text-xs font-grotesk">Bahasa:</span>
            <div class="flex items-center gap-1 border border-gold/20 rounded-full p-1">
                <button class="lang-btn active" id="btn-id-m" onclick="setLang('id')">ID</button>
                <button class="lang-btn" id="btn-en-m" onclick="setLang('en')">EN</button>
            </div>
        </div>
        <a href="https://wa.me/6282125573419?text=Hello%20Carvora%20Charcoal%2C%0A%0AI%20found%20your%20website%20and%20I%27m%20interested%20in%20your%20coconut%20charcoal%20briquettes.%20Could%20you%20please%20share%20your%20product%20catalog%2C%20specifications%2C%20MOQ%2C%20and%20price%20quotation%3F%0A%0AThank%20you."
           target="_blank" @click="nav=false"
           class="flex items-center justify-center gap-2 py-3.5 rounded-2xl font-grotesk font-semibold text-sm text-white w-full"
           style="background:linear-gradient(135deg,#25D366,#128C7E); box-shadow:0 4px 20px rgba(37,211,102,.3)">
            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
            Chat WhatsApp
        </a>
        <a href="#contact" @click="nav=false"
           class="flex items-center justify-center py-3 rounded-2xl font-grotesk font-semibold text-sm w-full btn-ghost">
            Minta Sample Gratis →
        </a>
    </div>

    {{-- Decorative gold hex watermark --}}
    <div class="absolute right-6 top-1/3 opacity-[.03] pointer-events-none">
        <svg width="200" height="200" viewBox="0 0 52 52" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M43 4H19L6 15V37L19 48H43V40H22L16 34V18L22 12H43V4Z" fill="#D4AF37"/><path fill-rule="evenodd" clip-rule="evenodd" d="M43 12H27L20 19V33L27 40H43V32H30L28 30V22L30 20H43V12Z" fill="#D4AF37"/><path d="M30 20H43V32H30L28 30V22Z" fill="#090909"/></svg>
    </div>
</div>

@yield('content')

{{-- ═══════ FOOTER ═══════ --}}
<footer class="bg-void-2 border-t border-white/5">
    <div class="max-w-7xl mx-auto px-6 lg:px-14 py-16 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">

        <div class="lg:col-span-1">
            <div class="mb-5">
                <x-logo size="md" uid="footer"/>
            </div>
            <p class="text-gray-600 text-sm leading-relaxed mb-6">
                Produsen briket arang tempurung kelapa premium dari Indonesia. Ramah lingkungan, berkualitas ekspor, dipercaya oleh importir dunia. — <span class="text-gold/60">Carvora Charcoal</span>
            </p>
            <div class="flex gap-3">
                @foreach(['M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z','M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z','M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z'] as $path)
                <a href="#" class="w-8 h-8 rounded-full border border-white/10 flex items-center justify-center text-gray-600 hover:text-gold hover:border-gold/40 transition-all">
                    <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24"><path d="{{ $path }}"/></svg>
                </a>
                @endforeach
            </div>
        </div>

        <div>
            <h4 class="font-grotesk font-semibold text-white mb-5 text-sm tracking-wide">Produk</h4>
            <ul class="space-y-3 text-gray-600 text-sm">
                @foreach(['BBQ Charcoal','Shisha Charcoal','Hexagonal Charcoal','Finger Charcoal','Cube Charcoal','Custom Shape'] as $p)
                <li><a href="#products" class="hover:text-gold transition-colors">{{ $p }}</a></li>
                @endforeach
            </ul>
        </div>

        <div>
            <h4 class="font-grotesk font-semibold text-white mb-5 text-sm tracking-wide">Perusahaan</h4>
            <ul class="space-y-3 text-gray-600 text-sm">
                @foreach(['Tentang Kami'=>'#about','Pabrik'=>'#process','Ekspor'=>'#export','Blog'=>'#blog','Kontak'=>'#contact'] as $l=>$h)
                <li><a href="{{ $h }}" class="hover:text-gold transition-colors">{{ $l }}</a></li>
                @endforeach
            </ul>
        </div>

        <div>
            <h4 class="font-grotesk font-semibold text-white mb-5 text-sm tracking-wide">Kontak</h4>
            <ul class="space-y-4 text-gray-600 text-sm">
                <li class="flex items-start gap-3">
                    <svg class="w-4 h-4 text-gold mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                    <span>Bekasi, Jawa Barat<br>Indonesia</span>
                </li>
                <li class="flex items-center gap-3">
                    <svg class="w-4 h-4 text-gold flex-shrink-0" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                    <span>+62 821 2557 3419</span>
                </li>
                <li class="flex items-center gap-3">
                    <svg class="w-4 h-4 text-gold flex-shrink-0" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                    <span>charvoracharcoal@gmail.com</span>
                </li>
            </ul>
        </div>
    </div>
    <div class="gold-line"></div>
    <div class="max-w-7xl mx-auto px-6 lg:px-14 py-5 flex flex-col sm:flex-row justify-between items-center gap-3 text-xs text-gray-700 font-grotesk">
        <span>© {{ date('Y') }} Carvora Charcoal Indonesia. All rights reserved.</span>
        <div class="flex gap-5">
            <a href="#" class="hover:text-gold transition-colors">Privacy</a>
            <a href="#" class="hover:text-gold transition-colors">Terms</a>
        </div>
    </div>
</footer>

{{-- ══ STICKY MOBILE CTA ══ --}}
<div class="sticky-cta">
    {{-- Top micro label --}}
    <p class="text-center text-gray-600 text-[10px] tracking-widest uppercase font-grotesk mb-2.5">
        <span class="inline-block w-6 h-px bg-gold/40 align-middle mr-2"></span>
        Hubungi Kami Sekarang
        <span class="inline-block w-6 h-px bg-gold/40 align-middle ml-2"></span>
    </p>

    <div class="flex gap-2.5">
        {{-- WhatsApp Button --}}
        <a href="https://wa.me/6282125573419?text=Hello%20Carvora%20Charcoal%2C%0A%0AI%20found%20your%20website%20and%20I%27m%20interested%20in%20your%20coconut%20charcoal%20briquettes.%20Could%20you%20please%20share%20your%20product%20catalog%2C%20specifications%2C%20MOQ%2C%20and%20price%20quotation%3F%0A%0AThank%20you."
           target="_blank" rel="noopener"
           class="flex-1 flex items-center justify-center gap-2 py-3 rounded-2xl font-grotesk font-semibold text-sm text-void transition-all active:scale-95"
           style="background: linear-gradient(135deg, #25D366 0%, #128C7E 100%); box-shadow: 0 4px 20px rgba(37,211,102,.35);">
            <svg class="w-4 h-4 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24">
                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
            </svg>
            <div class="text-left leading-none">
                <div class="text-[10px] opacity-80 font-normal">Chat via</div>
                <div class="text-sm font-bold">WhatsApp</div>
            </div>
        </a>

        {{-- Sample Button --}}
        <a href="#contact"
           class="flex-1 flex items-center justify-center gap-2 py-3 rounded-2xl font-grotesk font-semibold text-sm transition-all active:scale-95"
           style="background: linear-gradient(135deg, #D4AF37 0%, #F5C842 50%, #A07820 100%); box-shadow: 0 4px 20px rgba(212,175,55,.35); color: #080808;">
            <svg class="w-4 h-4 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 7.5l-.625 10.632a2.25 2.25 0 01-2.247 2.118H6.622a2.25 2.25 0 01-2.247-2.118L3.75 7.5m8.25 3v6.75m0 0l-3-3m3 3l3-3M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z"/>
            </svg>
            <div class="text-left leading-none">
                <div class="text-[10px] opacity-70 font-normal">Gratis</div>
                <div class="text-sm font-bold">Minta Sample</div>
            </div>
        </a>
    </div>
</div>

{{-- ══ SCROLL TO TOP ══ --}}
<button id="scroll-top" onclick="window.scrollTo({top:0,behavior:'smooth'})" aria-label="Scroll to top">
    <svg class="w-4 h-4 text-void" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7"/>
    </svg>
</button>
<script>
window.addEventListener('scroll', function() {
    const btn = document.getElementById('scroll-top');
    if (btn) btn.classList.toggle('show', window.scrollY > 400);
});
</script>

{{-- WA Float — hidden when mobile menu open --}}
<a href="https://wa.me/6282125573419?text=Hello%20Carvora%20Charcoal%2C%0A%0AI%20found%20your%20website%20and%20I%27m%20interested%20in%20your%20coconut%20charcoal%20briquettes.%20Could%20you%20please%20share%20your%20product%20catalog%2C%20specifications%2C%20MOQ%2C%20and%20price%20quotation%3F%0A%0AThank%20you."
   target="_blank" rel="noopener" class="wa-float"
   x-bind:style="nav ? 'opacity:0;pointer-events:none;' : ''">
    <div class="w-14 h-14 rounded-full bg-green-500 hover:bg-green-600 transition-colors flex items-center justify-center shadow-xl">
        <svg class="w-7 h-7 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
    </div>
</a>

<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
    AOS.init({ duration: 800, once: true, offset: 60 });

    document.querySelectorAll('[data-count]').forEach(el => {
        const target = +el.dataset.count;
        const obs = new IntersectionObserver(entries => {
            if (!entries[0].isIntersecting) return;
            obs.disconnect();
            let val = 0;
            const step = target / 70;
            const tick = () => {
                val = Math.min(val + step, target);
                el.textContent = Math.floor(val);
                if (val < target) requestAnimationFrame(tick);
            };
            requestAnimationFrame(tick);
        }, { threshold: .5 });
        obs.observe(el);
    });
</script>
{{-- ════ Loading Screen JS ════ --}}
<script>
(function(){
    const s = document.getElementById('loading-screen');
    const p = document.getElementById('load-progress');
    if (!s) return;
    // Only show once per session
    if (sessionStorage.getItem('loaded')) { s.remove(); return; }
    setTimeout(() => { p.style.width = '100%'; }, 50);
    window.addEventListener('load', () => {
        setTimeout(() => {
            s.classList.add('fade-out');
            setTimeout(() => { s.remove(); sessionStorage.setItem('loaded','1'); }, 650);
        }, 600);
    });
})();
</script>

{{-- ════ WA Popup JS ════ --}}
<script>
(function(){
    function showWaPopup() {
        const dismissed = localStorage.getItem('wa-popup-time');
        if (dismissed && Date.now() - dismissed < 86400000) return; // 24h
        setTimeout(() => {
            const el = document.getElementById('wa-popup');
            if (el) el.classList.add('show');
        }, 5000);
    }
    document.addEventListener('DOMContentLoaded', showWaPopup);
})();

function closeWaPopup() {
    const el = document.getElementById('wa-popup');
    if (el) { el.classList.remove('show'); }
    localStorage.setItem('wa-popup-time', Date.now());
}
</script>

{{-- ════ Google Translate (hidden) + Lang Toggle ════ --}}
<div id="google_translate_element" style="display:none;visibility:hidden;"></div>

<script>
function googleTranslateElementInit() {
    new google.translate.TranslateElement({
        pageLanguage: 'id',
        includedLanguages: 'en,id',
        autoDisplay: false,
    }, 'google_translate_element');
}

function setLang(lang) {
    const combo = document.querySelector('.goog-te-combo');
    if (combo) {
        combo.value = lang;
        combo.dispatchEvent(new Event('change'));
    }
    localStorage.setItem('siteLang', lang);
    // Update all toggle buttons
    document.querySelectorAll('[id^="btn-"]').forEach(b => b.classList.remove('active'));
    document.querySelectorAll('#btn-' + lang).forEach(b => b.classList.add('active'));
}

// On load: restore saved language
document.addEventListener('DOMContentLoaded', function () {
    const saved = localStorage.getItem('siteLang') || 'id';
    if (saved === 'en') {
        setTimeout(() => setLang('en'), 1200);
    }
});
</script>
<script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit" async></script>

@stack('scripts')
</body>
</html>
