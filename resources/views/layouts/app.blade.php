<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Carvora Charcoal Indonesia – Premium Coconut Shell Charcoal')</title>
    <meta name="description" content="@yield('description', 'Produsen briket arang tempurung kelapa premium Indonesia. 100% alami, bebas kimia, ekspor ke 30+ negara.')">

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

{{-- ═══════ NAVBAR ═══════ --}}
<nav class="fixed top-0 left-0 right-0 z-50 transition-all duration-500 py-5 px-6 lg:px-14"
     :class="scrolled ? 'nav-blur py-3' : 'bg-transparent'">
    <div class="max-w-7xl mx-auto flex items-center justify-between">

        {{-- Logo --}}
        <x-logo size="md" uid="nav"/>

        {{-- Desktop nav --}}
        <div class="hidden lg:flex items-center gap-10 text-[13px] font-medium font-grotesk">
            @foreach([['#products','Produk'],['#about','Tentang'],['#process','Proses'],['#export','Ekspor'],['#blog','Blog']] as [$h,$l])
            <a href="{{ $h }}" class="text-gray-500 hover:text-gold transition-colors tracking-wide">{{ $l }}</a>
            @endforeach
        </div>

        {{-- CTA --}}
        <div class="hidden lg:flex items-center gap-3">
            <a href="#contact" class="btn-ghost px-5 py-2 rounded-full text-sm">Kontak</a>
            <a href="#contact" class="btn-primary px-5 py-2 rounded-full text-sm">Minta Sample</a>
        </div>

        {{-- Burger --}}
        <button @click="nav=!nav" class="lg:hidden p-1 text-gold">
            <svg x-show="!nav" class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/></svg>
            <svg x-show="nav"  class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg>
        </button>
    </div>

    {{-- Mobile menu --}}
    <div x-show="nav" x-transition class="lg:hidden mt-3 pb-5 border-t border-gold/10">
        <div class="flex flex-col gap-4 pt-5 px-2 text-sm font-grotesk">
            @foreach([['#products','Produk'],['#about','Tentang Kami'],['#process','Proses'],['#export','Ekspor'],['#blog','Blog'],['#contact','Kontak']] as [$h,$l])
            <a href="{{ $h }}" @click="nav=false" class="text-gray-400 hover:text-gold transition-colors">{{ $l }}</a>
            @endforeach
            <a href="#contact" class="btn-primary px-6 py-2.5 rounded-full text-center mt-2">Minta Sample Gratis</a>
        </div>
    </div>
</nav>

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

{{-- WA Float --}}
<a href="https://wa.me/6282125573419" target="_blank" rel="noopener" class="wa-float">
    <div class="w-13 h-13 w-14 h-14 rounded-full bg-green-500 hover:bg-green-600 transition-colors flex items-center justify-center shadow-xl">
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
@stack('scripts')
</body>
</html>
