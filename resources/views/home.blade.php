@extends('layouts.app')
@section('title','Briket Charcoal Indonesia – Premium Coconut Shell Charcoal Briquette')
@section('content')

{{-- ══════════════════════════════════════════════════════════════
     §1  HERO — oversized type + split layout
══════════════════════════════════════════════════════════════ --}}
<section id="home" class="relative min-h-screen flex flex-col justify-center overflow-hidden bg-void noise">

    {{-- Mobile-only charcoal background --}}
    <div id="home-mobile-bg"></div>

    {{-- ambient glows --}}
    <div class="glow-gold absolute -top-40 right-[10%]  w-[600px] h-[600px]"></div>
    <div class="glow-gold absolute  bottom-0 left-[5%] w-[400px] h-[400px]" style="opacity:.07"></div>

    {{-- thin vertical grid lines --}}
    <div class="absolute inset-0 pointer-events-none"
         style="background-image: repeating-linear-gradient(90deg, rgba(212,175,55,.04) 0 1px, transparent 1px 120px);">
    </div>

    <div class="relative z-10 max-w-7xl mx-auto px-5 lg:px-14 w-full pt-24 pb-12">

        {{-- top micro label --}}
        <div class="flex items-center gap-3 mb-8" data-aos="fade-down">
            <div class="w-6 h-px bg-gold opacity-60"></div>
            <span class="section-tag text-[10px] lg:text-xs">Premium Coconut Shell Charcoal</span>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-10 items-center">

            {{-- ── Left copy ───────────────────── --}}
            <div class="lg:col-span-7" data-aos="fade-right" data-aos-delay="80">

                {{-- Oversized headline --}}
                <h1 class="mb-2" style="font-family:'Space Grotesk',sans-serif; font-weight:700; line-height:.95; letter-spacing:-.03em; font-size:clamp(2.8rem,11vw,8.5rem);">
                    <span class="text-white block">CARVORA</span>
                    <span class="gold-stroke block">CHARCOAL</span>
                    <span class="block" style="font-size:clamp(.9rem,3.5vw,3rem); font-weight:300; letter-spacing:.05em; font-family:'Inter',sans-serif; color:#555; margin-top:.3em;">
                        INDONESIA
                    </span>
                </h1>

                <p class="text-gray-500 text-sm lg:text-base leading-relaxed mt-6 mb-8 lg:mb-10">
                    Carvora Charcoal adalah produsen briket arang kelapa berkualitas tinggi dari Indonesia.
                    Dibuat dari 100% tempurung kelapa pilihan, diproses dengan standar internasional untuk
                    menghasilkan panas maksimal, abu rendah, dan ramah lingkungan.
                    Kami siap menjadi mitra terpercaya untuk kebutuhan Anda di <span class="text-gold font-medium">pasar global</span>.
                </p>

                <div class="flex flex-wrap gap-3 mb-10">
                    <a href="#contact" class="btn-primary btn-glow px-6 py-3 rounded-full text-sm">
                        Minta Sample Gratis →
                    </a>
                    <a href="#products" class="btn-ghost px-6 py-3 rounded-full text-sm">
                        Lihat Produk
                    </a>
                </div>

                {{-- mini stats — 2x2 on mobile, 4 col on desktop --}}
                <div class="grid grid-cols-2 lg:flex lg:flex-wrap gap-4 border-t border-white/5 pt-6">
                    @foreach([['30+','Negara Ekspor'],['75+','Klien Global'],['100%','Natural'],['3+','Tahun']] as [$v,$l])
                    <div class="lg:pr-8 {{ !$loop->last ? 'lg:border-r lg:border-white/10 lg:mr-8' : '' }}">
                        <div class="font-grotesk font-bold text-xl lg:text-2xl gold-text leading-none">{{ $v }}</div>
                        <div class="text-gray-600 text-xs mt-1 tracking-wide">{{ $l }}</div>
                    </div>
                    @endforeach
                </div>
            </div>

            {{-- ── Right visual — full bleed ke kanan viewport ── --}}
            <div class="hidden lg:block lg:col-span-5 relative -mr-14" data-aos="fade-left" data-aos-delay="160">

                {{-- Full-bleed image — rounded hanya di kiri --}}
                <div class="img-zoom rounded-l-2xl overflow-hidden relative"
                     style="height: calc(100vh - 120px); min-height: 520px; max-height: 750px;">
                    <img src="https://loremflickr.com/800/1000/charcoal,fire,coal?lock=10"
                         alt="Briket Arang Premium"
                         class="w-full h-full object-cover object-center"
                         style="filter: brightness(.6) saturate(.75);">

                    {{-- gradient overlay kiri (blend ke background) --}}
                    <div class="absolute inset-0 pointer-events-none"
                         style="background: linear-gradient(to right, rgba(8,8,8,.7) 0%, rgba(8,8,8,.2) 30%, transparent 60%),
                                            linear-gradient(to top, rgba(8,8,8,.6) 0%, transparent 40%);"></div>

                    {{-- badge top left --}}
                    <div class="absolute top-6 left-6 glass rounded-xl px-4 py-2">
                        <span class="section-tag">Premium Grade</span>
                    </div>

                    {{-- badge bottom right --}}
                    <div class="absolute bottom-6 right-6 glass rounded-xl px-4 py-2.5 flex items-center gap-2">
                        <span class="w-2 h-2 rounded-full bg-green-400 animate-pulse"></span>
                        <span class="section-tag text-green-400">Export Ready</span>
                    </div>
                </div>

                {{-- floating card ISO — kiri bawah --}}
                <div class="glass card-lift absolute bottom-16 -left-4 rounded-2xl p-4 flex items-center gap-3 shadow-2xl z-10">
                    <div class="w-9 h-9 rounded-lg bg-gold/10 flex items-center justify-center flex-shrink-0">
                        <svg class="w-4 h-4 text-gold" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                    </div>
                    <div>
                        <div class="text-white text-sm font-semibold font-grotesk">ISO 9001 Certified</div>
                        <div class="text-gray-500 text-xs">Quality Assured</div>
                    </div>
                </div>

                {{-- floating card Eco — kiri atas --}}
                <div class="glass card-lift absolute top-16 -left-4 rounded-2xl p-4 flex items-center gap-3 shadow-2xl z-10">
                    <div class="w-9 h-9 rounded-lg bg-gold/10 flex items-center justify-center flex-shrink-0">
                        <svg class="w-4 h-4 text-gold" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25"/>
                        </svg>
                    </div>
                    <div>
                        <div class="text-white text-sm font-semibold font-grotesk">Eco-Friendly</div>
                        <div class="text-gray-500 text-xs">Zero Chemicals</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- bottom scroll cue --}}
    <div class="absolute bottom-6 left-1/2 -translate-x-1/2 animate-bounce flex flex-col items-center gap-1">
        <div class="w-px h-8 bg-gradient-to-b from-gold/50 to-transparent"></div>
    </div>
</section>


{{-- ══════════════════════════════════════════════════════════════
     §2  MARQUEE TICKER
══════════════════════════════════════════════════════════════ --}}
<div class="py-4 border-y border-gold/10 overflow-hidden bg-void-2">
    <div class="marquee-track">
        @for($i=0; $i<2; $i++)
        @foreach(['BBQ CHARCOAL','✦','SHISHA CHARCOAL','✦','HEXAGONAL CHARCOAL','✦','FINGER CHARCOAL','✦','CUBE CHARCOAL','✦','EXPORT READY','✦','ISO CERTIFIED','✦','100% NATURAL','✦','30+ COUNTRIES','✦'] as $item)
        <span class="font-grotesk text-xs tracking-[.2em] px-6 {{ str_contains($item,'✦') ? 'text-gold' : 'text-gray-600' }}">
            {{ $item }}
        </span>
        @endforeach
        @endfor
    </div>
</div>


{{-- ══════════════════════════════════════════════════════════════
     §2.5  CERTIFICATION STRIP
══════════════════════════════════════════════════════════════ --}}
<section class="py-10 bg-void-2 border-b border-gold/10 overflow-hidden">
    <div class="max-w-7xl mx-auto px-6 lg:px-14">
        <p class="section-tag text-center mb-8" data-aos="fade-up">Tersertifikasi & Diakui Internasional</p>

        <div class="flex flex-wrap justify-center items-center gap-4 lg:gap-6">
            @php
            $certs = [
                ['path'=>'M16.5 18.75h-9m9 0a3 3 0 013 3h-15a3 3 0 013-3m9 0v-3.375c0-.621-.503-1.125-1.125-1.125h-.871M7.5 18.75v-3.375c0-.621.504-1.125 1.125-1.125h.872m5.007 0H9.497m5.007 0a7.454 7.454 0 01-.982-3.172M9.497 14.25a7.454 7.454 0 00.981-3.172M5.25 4.236c-.982.143-1.954.317-2.916.52A6.003 6.003 0 007.73 9.728M5.25 4.236V4.5c0 2.108.966 3.99 2.48 5.228M5.25 4.236V2.721C7.456 2.25 9.71 2 12 2c2.291 0 4.545.25 6.75.721v1.515m0 0a48.667 48.667 0 01-2.916-.52c.973.642 1.688 1.56 2.048 2.627M18.75 4.236c.982.143 1.954.317 2.916.52a6.003 6.003 0 01-5.395 5.492M18.75 4.236V4.5a6.003 6.003 0 01-2.48 5.228','name'=>'ISO 9001:2015','sub'=>'Quality Management'],
                ['path'=>'M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z','name'=>'Halal Certified','sub'=>'MUI Indonesia'],
                ['path'=>'M9.75 3.104v5.714a2.25 2.25 0 01-.659 1.591L5 14.5M9.75 3.104c-.251.023-.501.05-.75.082m.75-.082a24.301 24.301 0 014.5 0m0 0v5.714c0 .597.237 1.17.659 1.591L19.8 15.3M14.25 3.104c.251.023.501.05.75.082M19.8 15.3l-1.57.393A9.065 9.065 0 0112 15a9.065 9.065 0 00-6.23-.693L5 14.5m14.8.8l1.402 1.402c1 1 .03 2.798-1.442 2.798H4.24c-1.47 0-2.441-1.798-1.441-2.798L4.001 15.3','name'=>'SGS Tested','sub'=>'Lab Analysis'],
                ['path'=>'M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z','name'=>'BPOM','sub'=>'Registered'],
                ['path'=>'M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25','name'=>'Eco-Friendly','sub'=>'Sustainable Process'],
                ['path'=>'M21 7.5l-2.25-1.313M21 7.5v2.25m0-2.25l-2.25 1.313M3 7.5l2.25-1.313M3 7.5l2.25 1.313M3 7.5v2.25m9 3l2.25-1.313M12 12.75l-2.25-1.313M12 12.75V15m0 6.75l2.25-1.313M12 21.75V19.5m0 2.25l-2.25-1.313m0-16.875L12 2.25l2.25 1.313M21 14.25v2.25l-9 5.25-9-5.25v-2.25','name'=>'Export Ready','sub'=>'Phytosanitary Cert'],
            ];
            @endphp

            @foreach($certs as $cert)
            <div class="glass border border-gold/15 hover:border-gold/40 rounded-2xl px-5 py-4 flex items-center gap-3 transition-all hover:-translate-y-1 card-lift"
                 data-aos="zoom-in" data-aos-delay="{{ $loop->index * 60 }}">
                <div class="w-10 h-10 rounded-xl bg-gold/10 border border-gold/20 flex items-center justify-center flex-shrink-0">
                    <svg class="w-5 h-5 text-gold" fill="none" stroke="currentColor" stroke-width="1.6" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="{{ $cert['path'] }}"/>
                    </svg>
                </div>
                <div>
                    <div class="font-grotesk font-semibold text-white text-sm leading-none">{{ $cert['name'] }}</div>
                    <div class="text-gray-600 text-[10px] mt-1 tracking-wide">{{ $cert['sub'] }}</div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>


{{-- ══════════════════════════════════════════════════════════════
     §3  ABOUT — split with big number accent
══════════════════════════════════════════════════════════════ --}}
<section id="about" class="py-14 lg:py-28 bg-void relative overflow-hidden">
    <div class="glow-gold absolute top-0 left-0 w-[500px] h-[500px]" style="opacity:.06"></div>

    <div class="max-w-7xl mx-auto px-6 lg:px-14">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

            {{-- Left: bold copy --}}
            <div data-aos="fade-right">
                <span class="section-tag">Tentang Kami</span>
                <div class="gold-line w-14 my-4"></div>

                <h2 class="display-lg text-white mb-8">
                    Kualitas yang Terlihat.<br><span class="shimmer">Kepercayaan yang Terbangun.</span>
                </h2>

                <p class="text-gray-500 text-base leading-relaxed mb-6">
                    Di Carvora Charcoal, kami percaya bahwa kualitas dimulai dari proses. Menggunakan 100% tempurung kelapa pilihan dari Indonesia, kami memproduksi briket arang yang dirancang untuk memberikan performa pembakaran yang stabil dan konsisten bagi pasar global.
                </p>
                <p class="text-gray-500 text-base leading-relaxed mb-10">
                    Dengan proses produksi yang terkontrol dan komitmen terhadap setiap detail, kami menghadirkan produk yang tidak hanya memenuhi spesifikasi, tetapi juga membangun kepercayaan jangka panjang dengan setiap mitra bisnis.
                </p>

                {{-- feature chips --}}
                <div class="flex flex-wrap gap-3 mb-10">
                    @foreach(['100% Tempurung Kelapa','Bebas Bahan Kimia','Ramah Lingkungan','Kalori 7000+ kcal/kg','Waktu Bakar Panjang','Minim Asap'] as $chip)
                    <span class="glass rounded-full px-4 py-1.5 text-xs font-grotesk text-gray-300 border border-gold/10">
                        {{ $chip }}
                    </span>
                    @endforeach
                </div>

                <a href="#contact" class="btn-primary px-8 py-3.5 rounded-full text-sm inline-block">
                    Konsultasi Gratis →
                </a>
            </div>

            {{-- Right: image + floating glass cards --}}
            <div class="relative" data-aos="fade-left" data-aos-delay="100">

                {{-- background number decoration --}}
                <div class="absolute -top-8 -right-8 font-grotesk font-bold text-[10rem] leading-none text-white/[.03] select-none pointer-events-none">
                    10+
                </div>

                <div class="img-zoom rounded-2xl overflow-hidden">
                    <img src="https://loremflickr.com/700/900/charcoal,briquette,coal?lock=77"
                         alt="Pabrik Briket"
                         class="w-full aspect-[3/4] object-cover"
                         style="filter:brightness(.5) saturate(.6);">
                    <div class="absolute inset-0 bg-gradient-to-t from-void via-transparent to-transparent"></div>
                </div>

                {{-- stats overlay --}}
                <div class="absolute bottom-6 left-4 right-4 grid grid-cols-3 gap-3">
                    @foreach([
                        ['M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008z','1.000T','Produksi/Bln'],
                        ['M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253','30+','Negara'],
                        ['M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z','ISO','Certified'],
                    ] as [$ic,$v,$l])
                    <div class="glass rounded-xl p-3 text-center card-lift">
                        <div class="w-8 h-8 rounded-lg bg-gold/10 flex items-center justify-center mx-auto mb-2">
                            <svg class="w-4 h-4 text-gold" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="{{ $ic }}"/></svg>
                        </div>
                        <div class="font-grotesk font-bold text-gold text-sm leading-none">{{ $v }}</div>
                        <div class="text-gray-600 text-[10px] mt-1">{{ $l }}</div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>


{{-- ══════════════════════════════════════════════════════════════
     §4  STATS — full-width dark with giant numbers
══════════════════════════════════════════════════════════════ --}}
<section class="py-20 bg-void-2 border-y border-white/5">
    <div class="max-w-7xl mx-auto px-6 lg:px-14">
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-0">
            @php
            $stats = [
                ['30','Negara','Ekspor Aktif'],
                ['75','Klien','Di Seluruh Dunia'],
                ['3','Tahun','Pengalaman'],
                ['1000','Ton','Kapasitas/Bulan'],
            ];
            @endphp
            @foreach($stats as [$num,$label,$sub])
            <div class="text-center py-10 {{ !$loop->last ? 'border-r border-white/5' : '' }}"
                 data-aos="fade-up" data-aos-delay="{{ $loop->index * 80 }}">
                <div class="stat-num gold-text mb-2">
                    <span data-count="{{ $num }}">0</span>
                    <span class="text-gold" style="font-size:.6em">+</span>
                </div>
                <div class="font-grotesk font-semibold text-white text-sm tracking-wide">{{ $label }}</div>
                <div class="text-gray-600 text-xs mt-1">{{ $sub }}</div>
            </div>
            @endforeach
        </div>
    </div>
</section>


{{-- ══════════════════════════════════════════════════════════════
     §4.5  KEUNGGULAN PRODUK
══════════════════════════════════════════════════════════════ --}}
<section class="py-14 lg:py-28 bg-void">
    <div class="max-w-6xl mx-auto px-6 lg:px-14">

        {{-- Header --}}
        <div class="text-center mb-14" data-aos="fade-up">
            <span class="section-tag">Keunggulan Kami</span>
            <div class="gold-line w-14 mx-auto my-4"></div>
            <h2 class="font-grotesk font-bold text-white text-3xl lg:text-5xl leading-tight mb-5">
                Lebih dari Sekadar Arang,<br>
                Kami Fokus pada <span class="gold-text">Kinerja.</span>
            </h2>
            <p class="text-gray-500 text-base max-w-2xl mx-auto leading-relaxed">
                Setiap briket yang kami produksi dirancang untuk memberikan performa terbaik
                di setiap pembakaran, dengan kualitas yang konsisten dan terpercaya.
            </p>
        </div>

        {{-- Main card wrapper --}}
        <div class="glass rounded-3xl p-8 lg:p-10 border border-gold/10" data-aos="fade-up" data-aos-delay="100">

            {{-- 4 Feature Cards --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 mb-8">

                @php
                $keunggulan = [
                    [
                        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25"/>',
                        'title' => 'Bahan Baku Pilihan',
                        'desc'  => 'Menggunakan 100% tempurung kelapa berkualitas yang dipilih secara selektif untuk hasil arang yang lebih murni dan stabil.',
                    ],
                    [
                        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M15.362 5.214A8.252 8.252 0 0112 21 8.25 8.25 0 016.038 7.048 8.287 8.287 0 009 9.6a8.983 8.983 0 013.361-6.867 8.21 8.21 0 003 2.48z"/><path stroke-linecap="round" stroke-linejoin="round" d="M12 18a3.75 3.75 0 00.495-7.467 5.99 5.99 0 00-1.925 3.546 5.974 5.974 0 01-2.133-1A3.75 3.75 0 0012 18z"/>',
                        'title' => 'Panas Konsisten',
                        'desc'  => 'Dirancang untuk menghasilkan panas tinggi yang stabil dari awal hingga akhir, cocok untuk berbagai kebutuhan memasak.',
                    ],
                    [
                        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M6.429 9.75L2.25 12l4.179 2.25m0-4.5l5.571 3 5.571-3m-11.142 0L2.25 7.5 12 2.25l9.75 5.25-4.179 2.25m0 0L21.75 12l-4.179 2.25m0 0l4.179 2.25L12 21.75 2.25 16.5l4.179-2.25m11.142 0l-5.571 3-5.571-3"/>',
                        'title' => 'Abu Rendah',
                        'desc'  => 'Kadar abu yang rendah menjaga kebersihan dan efisiensi pembakaran, serta memudahkan proses pembersihan setelah digunakan.',
                    ],
                    [
                        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"/>',
                        'title' => 'Kualitas Terjaga',
                        'desc'  => 'Setiap batch diproduksi dengan kontrol kualitas ketat untuk memastikan standar yang sama konsisten di setiap pengiriman.',
                    ],
                ];
                @endphp

                @foreach($keunggulan as $item)
                <div class="group p-6 rounded-2xl border border-white/5 hover:border-gold/30 hover:bg-white/[.03] transition-all"
                     data-aos="fade-up" data-aos-delay="{{ $loop->index * 80 }}">
                    {{-- Gold line accent top --}}
                    <div class="w-8 h-0.5 bg-gradient-to-r from-gold to-transparent mb-5 group-hover:w-12 transition-all duration-300"></div>
                    {{-- Icon --}}
                    <div class="w-11 h-11 rounded-xl bg-gold/10 border border-gold/20 flex items-center justify-center mb-5">
                        <svg class="w-5 h-5 text-gold" fill="none" stroke="currentColor" stroke-width="1.6" viewBox="0 0 24 24">
                            {!! $item['icon'] !!}
                        </svg>
                    </div>
                    <h4 class="font-grotesk font-semibold text-white text-base mb-3 group-hover:text-gold transition-colors">
                        {{ $item['title'] }}
                    </h4>
                    <p class="text-gray-600 text-sm leading-relaxed">{{ $item['desc'] }}</p>
                </div>
                @endforeach
            </div>

            {{-- Divider --}}
            <div class="gold-line mb-6"></div>

            {{-- 4 Mini Features --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-3 lg:gap-4">
                @php
                $mini = [
                    ['icon'=>'M16.5 18.75h-9m9 0a3 3 0 013 3h-15a3 3 0 013-3m9 0v-3.375c0-.621-.503-1.125-1.125-1.125h-.871M7.5 18.75v-3.375c0-.621.504-1.125 1.125-1.125h.872m5.007 0H9.497m5.007 0a7.454 7.454 0 01-.982-3.172M9.497 14.25a7.454 7.454 0 00.981-3.172M5.25 4.236c-.982.143-1.954.317-2.916.52A6.003 6.003 0 007.73 9.728M5.25 4.236V4.5c0 2.108.966 3.99 2.48 5.228M5.25 4.236V2.721C7.456 2.25 9.71 2 12 2c2.291 0 4.545.25 6.75.721v1.515m0 0a48.667 48.667 0 01-2.916-.52c.973.642 1.688 1.56 2.048 2.627M18.75 4.236c.982.143 1.954.317 2.916.52a6.003 6.003 0 01-5.395 5.492M18.75 4.236V4.5a6.003 6.003 0 01-2.48 5.228',
                     'title'=>'Standar Internasional','sub'=>'Diproduksi sesuai standar mutu global.'],
                    ['icon'=>'M21 7.5l-9-5.25L3 7.5m18 0l-9 5.25m9-5.25v9l-9 5.25M3 7.5l9 5.25M3 7.5v9l9 5.25m0-9v9',
                     'title'=>'Produksi Konsisten','sub'=>'Kapasitas produksi stabil sepanjang tahun.'],
                    ['icon'=>'M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253',
                     'title'=>'Siap Ekspor','sub'=>'Dokumentasi lengkap dan pengiriman ke berbagai negara.'],
                    ['icon'=>'M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z',
                     'title'=>'Mitra Terpercaya','sub'=>'Komitmen jangka panjang untuk kesuksesan bersama.'],
                ];
                @endphp

                @foreach($mini as $m)
                <div class="flex items-start gap-3 p-4 rounded-xl hover:bg-white/[.03] transition-all group"
                     data-aos="fade-up" data-aos-delay="{{ $loop->index * 60 }}">
                    <div class="w-8 h-8 rounded-lg bg-gold/10 flex items-center justify-center flex-shrink-0 mt-0.5">
                        <svg class="w-4 h-4 text-gold" fill="none" stroke="currentColor" stroke-width="1.6" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="{{ $m['icon'] }}"/>
                        </svg>
                    </div>
                    <div>
                        <div class="font-grotesk font-semibold text-white text-sm group-hover:text-gold transition-colors">{{ $m['title'] }}</div>
                        <div class="text-gray-600 text-xs mt-0.5 leading-snug">{{ $m['sub'] }}</div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>


{{-- ══════════════════════════════════════════════════════════════
     §5  PRODUCTS — glassmorphism grid
══════════════════════════════════════════════════════════════ --}}
<section id="products" class="py-14 lg:py-28 bg-void relative overflow-hidden">
    <div class="glow-gold absolute top-1/2 right-0 w-[500px] h-[500px]" style="opacity:.07; transform:translateY(-50%)"></div>

    <div class="max-w-7xl mx-auto px-6 lg:px-14">

        {{-- Section header --}}
        <div class="lg:flex lg:flex-row lg:justify-between lg:items-end gap-6 mb-12 lg:mb-16">
            <div data-aos="fade-up" class="mb-4 lg:mb-0 lg:pr-16">
                <span class="section-tag">Varian Produk</span>
                <div class="gold-line w-14 my-4"></div>
                <h2 class="display-lg text-white">
                    Produk <span class="shimmer">Unggulan</span><br>Kami
                </h2>
            </div>
            <p class="text-gray-500 text-sm max-w-xs leading-relaxed" data-aos="fade-up" data-aos-delay="100">
                Semua varian dibuat dari tempurung kelapa alami pilihan, melalui proses karbonisasi terkontrol.
            </p>
        </div>

        @php
        $products = [
            ['name'=>'BBQ Charcoal',       'img'=>'https://loremflickr.com/600/400/charcoal,bbq,grill?lock=31',       'tag'=>'TERLARIS', 'cal'=>'7800 kcal/kg', 'desc'=>'Kalori tinggi, nyala lama, cocok untuk semua jenis grill outdoor maupun indoor.'],
            ['name'=>'Shisha Charcoal',    'img'=>'https://loremflickr.com/600/400/charcoal,hookah,shisha?lock=42',    'tag'=>'POPULER',  'cal'=>'7200 kcal/kg', 'desc'=>'Pembakaran merata tanpa asap dan aroma, tidak mengganggu cita rasa tembakau.'],
            ['name'=>'Hexagonal Charcoal', 'img'=>'https://loremflickr.com/600/400/charcoal,briquette,fire?lock=53',   'tag'=>'FAVORIT',  'cal'=>'7600 kcal/kg', 'desc'=>'Bentuk segi enam ikonik, mudah disusun di grill, distribusi panas optimal.'],
            ['name'=>'Finger Charcoal',    'img'=>'https://loremflickr.com/600/400/charcoal,coal,black?lock=64',       'tag'=>'BARU',     'cal'=>'7400 kcal/kg', 'desc'=>'Ukuran ramping fleksibel untuk barbecue portable dan kompor arang kecil.'],
            ['name'=>'Cube Charcoal',      'img'=>'https://loremflickr.com/600/400/charcoal,bbq,smoke?lock=75',        'tag'=>null,       'cal'=>'7500 kcal/kg', 'desc'=>'Bentuk kubus presisi, pengapian konsisten, ideal untuk memasak jangka panjang.'],
            ['name'=>'Custom Shape',       'img'=>'https://loremflickr.com/600/400/charcoal,production,factory?lock=86','tag'=>'CUSTOM',  'cal'=>'Custom',       'desc'=>'Bentuk & ukuran sesuai spesifikasi buyer. Konsultasikan kebutuhan Anda.'],
        ];
        @endphp

        {{-- Swipe carousel on mobile, grid on desktop --}}
        <div class="product-track" id="product-carousel">
            @foreach($products as $p)
            <div class="product-slide glass card-lift rounded-2xl overflow-hidden group"
                 data-aos="{{ $loop->index < 3 ? 'fade-up' : '' }}"
                 data-aos-delay="{{ ($loop->index % 3) * 80 }}">

                {{-- image --}}
                <div class="img-zoom relative h-48">
                    <img src="{{ $p['img'] }}"
                         alt="{{ $p['name'] }}"
                         class="w-full h-full object-cover"
                         style="filter:brightness(.45) saturate(.6);">
                    <div class="absolute inset-0 bg-gradient-to-t from-void/80 to-transparent"></div>
                    <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-500"
                         style="background:radial-gradient(circle at 50% 100%, rgba(212,175,55,.15) 0%, transparent 70%)"></div>
                    @if($p['tag'])
                    <div class="absolute top-4 left-4">
                        <span class="font-grotesk text-[10px] font-bold tracking-widest text-void bg-gold px-3 py-1 rounded-full">{{ $p['tag'] }}</span>
                    </div>
                    @endif
                    <div class="absolute bottom-4 right-4">
                        <span class="glass rounded-full px-3 py-1 text-[10px] font-grotesk text-gold border border-gold/20">{{ $p['cal'] }}</span>
                    </div>
                </div>

                {{-- body --}}
                <div class="p-5">
                    <h3 class="font-grotesk font-semibold text-white text-base mb-2 group-hover:text-gold transition-colors">{{ $p['name'] }}</h3>
                    <p class="text-gray-600 text-sm leading-relaxed mb-4">{{ $p['desc'] }}</p>
                    <div class="flex items-center justify-between">
                        <a href="#contact" class="btn-ghost px-4 py-2 rounded-full text-xs">Detail →</a>
                        <div class="w-8 h-8 rounded-full border border-gold/20 flex items-center justify-center text-gold/40 group-hover:text-gold group-hover:border-gold transition-all">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        {{-- Carousel dots (mobile only) --}}
        <div class="carousel-dots mt-4" id="carousel-dots">
            @foreach($products as $p)
            <span class="{{ $loop->first ? 'active' : '' }}"></span>
            @endforeach
        </div>

        <div class="text-center mt-10" data-aos="fade-up">
            <a href="#contact" class="btn-primary btn-glow px-10 py-4 rounded-full text-sm">
                Dapatkan Penawaran Harga →
            </a>
        </div>
    </div>
</section>


{{-- ══════════════════════════════════════════════════════════════
     §6  WHY US — alternating feature rows
══════════════════════════════════════════════════════════════ --}}
<section class="py-14 lg:py-28 bg-void-2">
    <div class="max-w-7xl mx-auto px-6 lg:px-14">

        <div class="text-center mb-20" data-aos="fade-up">
            <span class="section-tag">Keunggulan</span>
            <div class="gold-line w-14 mx-auto my-4"></div>
            <h2 class="display-lg text-white">
                Mengapa Memilih<br><span class="shimmer">Briket Charcoal</span>?
            </h2>
        </div>

        @php
        $features = [
            ['num'=>'01','title'=>'Kualitas Lab-Tested','desc'=>'Setiap batch diuji nilai kalori, kadar air, kekerasan, dan kadar abu di laboratorium internal kami sebelum dikemas dan dikirim.','icon'=>'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4'],
            ['num'=>'02','title'=>'Packaging Profesional','desc'=>'Tersedia dalam carton box, PP bag, karung woven, hingga packaging private label sesuai brand buyer. Desain custom tersedia.','icon'=>'M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4'],
            ['num'=>'03','title'=>'Dokumen Ekspor Lengkap','desc'=>'Kami siapkan semua dokumen: COA, Certificate of Origin, Phytosanitary, Fumigation, B/L, hingga Letter of Credit.','icon'=>'M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z'],
            ['num'=>'04','title'=>'MOQ Fleksibel','desc'=>'Minimum order quantity yang fleksibel memudahkan buyer skala kecil hingga besar. Kami mendukung pertumbuhan bisnis Anda.','icon'=>'M4 6h16M4 10h16M4 14h16M4 18h16'],
        ];
        @endphp

        <div class="space-y-6">
            @foreach($features as $f)
            <div class="glass card-lift rounded-2xl p-8 grid grid-cols-1 lg:grid-cols-12 gap-8 items-center group"
                 data-aos="fade-up" data-aos-delay="{{ $loop->index * 60 }}">

                {{-- number --}}
                <div class="lg:col-span-1">
                    <span class="font-grotesk font-bold text-4xl text-white/10 group-hover:text-gold/30 transition-colors">
                        {{ $f['num'] }}
                    </span>
                </div>

                {{-- icon --}}
                <div class="lg:col-span-1">
                    <div class="w-12 h-12 rounded-xl bg-gold/10 border border-gold/20 flex items-center justify-center">
                        <svg class="w-5 h-5 text-gold" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="{{ $f['icon'] }}"/>
                        </svg>
                    </div>
                </div>

                {{-- title --}}
                <div class="lg:col-span-3">
                    <h3 class="font-grotesk font-semibold text-white text-xl group-hover:text-gold transition-colors">
                        {{ $f['title'] }}
                    </h3>
                </div>

                {{-- divider --}}
                <div class="hidden lg:block lg:col-span-1">
                    <div class="w-px h-12 bg-white/5 mx-auto"></div>
                </div>

                {{-- desc --}}
                <div class="lg:col-span-5">
                    <p class="text-gray-500 text-sm leading-relaxed">{{ $f['desc'] }}</p>
                </div>

                {{-- arrow --}}
                <div class="lg:col-span-1 flex justify-end">
                    <div class="w-8 h-8 rounded-full border border-white/5 flex items-center justify-center text-white/20 group-hover:border-gold/40 group-hover:text-gold transition-all">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>


{{-- ══════════════════════════════════════════════════════════════
     §7  PRODUCTION PROCESS
══════════════════════════════════════════════════════════════ --}}
<section id="process" class="py-14 lg:py-28 bg-void relative overflow-hidden">
    <div class="glow-gold absolute bottom-0 left-1/2 -translate-x-1/2 w-[700px] h-[400px]" style="opacity:.05"></div>

    <div class="max-w-7xl mx-auto px-6 lg:px-14">

        <div class="flex flex-col lg:flex-row gap-20 items-start">

            {{-- Left: sticky heading --}}
            <div class="lg:w-80 flex-shrink-0 lg:sticky lg:top-32" data-aos="fade-right">
                <span class="section-tag">Proses Produksi</span>
                <div class="gold-line w-14 my-4"></div>
                <h2 class="display-md text-white mb-6">
                    Dari Kebun<br><span class="shimmer">ke Dunia</span>
                </h2>
                <p class="text-gray-600 text-sm leading-relaxed">
                    6 tahap produksi ketat memastikan setiap briket yang meninggalkan pabrik kami memenuhi standar kualitas ekspor internasional.
                </p>
            </div>

            {{-- Right: steps --}}
            <div class="flex-1 space-y-0">
                @php
                $steps = [
                    ['01','M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25','Seleksi Bahan Baku','Tempurung kelapa kering dipilih secara manual. Hanya bahan terbaik yang lolos tahap ini.'],
                    ['02','M15.362 5.214A8.252 8.252 0 0112 21 8.25 8.25 0 016.038 7.048 8.287 8.287 0 009 9.6a8.983 8.983 0 013.361-6.867 8.21 8.21 0 003 2.48z M12 18a3.75 3.75 0 00.495-7.467 5.99 5.99 0 00-1.925 3.546 5.974 5.974 0 01-2.133-1A3.75 3.75 0 0012 18z','Karbonisasi','Dibakar dalam kiln tertutup pada suhu 400–700°C untuk menghasilkan arang dengan kandungan karbon optimal.'],
                    ['03','M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z M15 12a3 3 0 11-6 0 3 3 0 016 0z','Penggilingan','Arang digiling menjadi serbuk halus dengan ukuran partikel seragam untuk hasil cetakan yang padat.'],
                    ['04','M6.429 9.75L2.25 12l4.179 2.25m0-4.5l5.571 3 5.571-3m-11.142 0L2.25 7.5 12 2.25l9.75 5.25-4.179 2.25m0 0L21.75 12l-4.179 2.25m0 0l4.179 2.25L12 21.75 2.25 16.5l4.179-2.25m11.142 0l-5.571 3-5.571-3','Pencetakan & Pengeringan','Serbuk dicampur perekat alami, dicetak sesuai bentuk yang diminta, lalu dikeringkan dalam oven.'],
                    ['05','M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z','Quality Control','Setiap batch diuji nilai kalori, kadar air, kekerasan, dan kadar abu di laboratorium internal.'],
                    ['06','M20.25 7.5l-.625 10.632a2.25 2.25 0 01-2.247 2.118H6.622a2.25 2.25 0 01-2.247-2.118L3.75 7.5m8.25 3v6.75m0 0l-3-3m3 3l3-3M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z','Packaging & Pengiriman','Dikemas profesional, dilengkapi dokumen ekspor lengkap, dan dikirim tepat waktu ke seluruh dunia.'],
                ];
                @endphp

                @foreach($steps as [$num,$icon,$title,$desc])
                <div class="flex gap-8 py-8 {{ !$loop->last ? 'border-b border-white/5' : '' }} group"
                     data-aos="fade-left" data-aos-delay="{{ $loop->index * 60 }}">
                    <div class="flex-shrink-0 text-right w-14">
                        <span class="font-grotesk font-bold text-gray-800 text-xl group-hover:text-gold/50 transition-colors">{{ $num }}</span>
                    </div>
                    <div class="w-px bg-white/5 self-stretch group-hover:bg-gold/20 transition-colors"></div>
                    <div class="flex-1">
                        <div class="flex items-center gap-3 mb-2">
                            <div class="w-9 h-9 rounded-xl bg-gold/10 border border-gold/20 flex items-center justify-center flex-shrink-0">
                                <svg class="w-4 h-4 text-gold" fill="none" stroke="currentColor" stroke-width="1.6" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="{{ $icon }}"/>
                                </svg>
                            </div>
                            <h4 class="font-grotesk font-semibold text-white text-base group-hover:text-gold transition-colors">{{ $title }}</h4>
                        </div>
                        <p class="text-gray-600 text-sm leading-relaxed">{{ $desc }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>


{{-- ══════════════════════════════════════════════════════════════
     §8  EXPORT MAP — interactive world map
══════════════════════════════════════════════════════════════ --}}
<section id="export" class="py-14 lg:py-28 bg-void-2">
    <div class="max-w-7xl mx-auto px-6 lg:px-14">

        <div class="lg:flex lg:flex-row lg:justify-between lg:items-end gap-6 mb-12">
            <div data-aos="fade-up" class="mb-4 lg:mb-0 lg:pr-16">
                <span class="section-tag">Jangkauan Global</span>
                <div class="gold-line w-14 my-4"></div>
                <h2 class="display-lg text-white">
                    <span data-count="30" class="gold-text">0</span><span class="gold-text">+</span><br>
                    <span style="font-size:.45em; font-weight:300; color:#666; letter-spacing:.02em">Negara Ekspor Aktif</span>
                </h2>
            </div>
            <p class="text-gray-600 text-sm max-w-xs leading-relaxed" data-aos="fade-left">
                Dari Timur Tengah, Eropa, Amerika, hingga Asia. Produk kami dipercaya importir di seluruh penjuru dunia.
            </p>
        </div>

        {{-- World Map Image — interactive --}}
        <div class="rounded-3xl overflow-hidden border border-gold/10 mb-10 relative" data-aos="fade-up"
             style="height: 420px; background: #000 url('/worldwide.png') center/cover no-repeat;">

            {{-- Overlay: gelap saat negara aktif --}}
            <div class="absolute inset-0 pointer-events-none transition-all duration-500"
                 :style="activeCountry ? 'background:rgba(0,0,0,.4)' : 'background:rgba(0,0,0,0)'"></div>

            {{-- Vignette --}}
            <div class="absolute inset-0 pointer-events-none"
                 style="background: radial-gradient(ellipse at center, transparent 50%, rgba(0,0,0,.5) 100%);"></div>

            {{-- Markers per country (posisi dari koordinat GPS) --}}
            @php
            $markers = [
                // Saudi Arabia  lat=24, lon=45
                'SA' => ['left'=>'62.5%','top'=>'36.7%','name'=>'Saudi Arabia'],
                // UAE            lat=24, lon=54
                'AE' => ['left'=>'65.0%','top'=>'36.7%','name'=>'UAE'],
                // Germany        lat=51, lon=10
                'DE' => ['left'=>'52.8%','top'=>'21.7%','name'=>'Germany'],
                // Netherlands    lat=52, lon=5
                'NL' => ['left'=>'51.4%','top'=>'21.1%','name'=>'Netherlands'],
                // USA            lat=38, lon=-97
                'US' => ['left'=>'23.1%','top'=>'28.9%','name'=>'Amerika'],
                // Australia      lat=-25, lon=133
                'AU' => ['left'=>'86.9%','top'=>'63.9%','name'=>'Australia'],
                // Japan          lat=36, lon=138
                'JP' => ['left'=>'88.3%','top'=>'30.0%','name'=>'Japan'],
                // South Korea    lat=37, lon=128
                'KR' => ['left'=>'85.6%','top'=>'29.4%','name'=>'Korea'],
                // Malaysia       lat=3,  lon=109
                'MY' => ['left'=>'80.3%','top'=>'48.3%','name'=>'Malaysia'],
                // Singapore      lat=1,  lon=104
                'SG' => ['left'=>'78.9%','top'=>'49.4%','name'=>'Singapore'],
                // Turkey         lat=39, lon=35
                'TR' => ['left'=>'59.7%','top'=>'28.3%','name'=>'Turkey'],
                // Egypt          lat=27, lon=30
                'EG' => ['left'=>'58.3%','top'=>'35.0%','name'=>'Egypt'],
            ];
            @endphp

            @foreach($markers as $code => $m)
            <div class="absolute" style="left:{{ $m['left'] }}; top:{{ $m['top'] }}; transform:translate(-50%,-50%); z-index:10;">
                {{-- Resting dot --}}
                <div class="w-2 h-2 rounded-full bg-gold/50 transition-all duration-300"
                     :class="activeCountry === '{{ $code }}' ? 'opacity-0 scale-0' : 'opacity-100 scale-100'"></div>

                {{-- Active glow state --}}
                <div class="absolute inset-0 flex items-center justify-center"
                     :class="activeCountry === '{{ $code }}' ? 'opacity-100' : 'opacity-0 pointer-events-none'"
                     style="transition: opacity .4s ease;">
                    <div class="absolute w-12 h-12 rounded-full border-2 border-gold animate-ping" style="opacity:.5;"></div>
                    <div class="absolute w-8 h-8 rounded-full border border-gold/50 animate-ping" style="opacity:.3; animation-delay:.3s;"></div>
                    <div class="w-4 h-4 rounded-full bg-gold relative z-10"
                         style="box-shadow: 0 0 16px rgba(212,175,55,.9), 0 0 32px rgba(212,175,55,.5);"></div>
                    {{-- Label --}}
                    <div class="absolute -top-8 left-1/2 -translate-x-1/2 whitespace-nowrap glass rounded-lg px-2.5 py-1 border border-gold/40"
                         style="font-size:10px; color:#F5C842; font-family:'Space Grotesk',sans-serif; font-weight:600;">
                        {{ $m['name'] }}
                    </div>
                </div>
            </div>
            @endforeach

            {{-- Badge --}}
            <div class="absolute top-4 right-4 glass rounded-xl px-4 py-2.5 border border-gold/30">
                <div class="font-grotesk font-bold text-gold text-base leading-none">30+</div>
                <div class="text-gray-500 font-grotesk mt-0.5" style="font-size:9px; letter-spacing:.1em">COUNTRIES</div>
            </div>

            {{-- Hint --}}
            <div class="absolute bottom-4 left-0 right-0 flex justify-center">
                <div class="glass rounded-full px-5 py-2 border border-gold/20 flex items-center gap-2 transition-all duration-300"
                     :class="activeCountry ? 'border-gold/40' : ''">
                    <div class="w-1.5 h-1.5 rounded-full bg-gold animate-pulse"></div>
                    <span class="text-gray-400 font-grotesk text-xs tracking-widest uppercase"
                          x-text="activeCountry ? 'Klik negara lain atau klik lagi untuk reset' : 'Klik bendera negara untuk melihat lokasinya'"></span>
                </div>
            </div>
        </div>

        {{-- Country flags grid — clickable --}}
        @php
        $countries = [
            ['SA','🇸🇦','Saudi Arabia'],['AE','🇦🇪','UAE'],
            ['DE','🇩🇪','Jerman'],     ['NL','🇳🇱','Belanda'],
            ['US','🇺🇸','Amerika'],    ['AU','🇦🇺','Australia'],
            ['JP','🇯🇵','Jepang'],     ['KR','🇰🇷','Korea'],
            ['MY','🇲🇾','Malaysia'],   ['SG','🇸🇬','Singapura'],
            ['TR','🇹🇷','Turki'],      ['EG','🇪🇬','Mesir'],
        ];
        @endphp
        <div class="grid grid-cols-3 sm:grid-cols-4 md:grid-cols-6 gap-3">
            @foreach($countries as [$code,$flag,$name])
            <div class="glass card-lift rounded-xl py-4 text-center cursor-pointer select-none transition-all duration-300"
                 data-aos="zoom-in" data-aos-delay="{{ $loop->index * 35 }}"
                 :class="activeCountry === '{{ $code }}'
                    ? 'border border-gold/60 bg-gold/8 shadow-lg'
                    : 'border border-white/5'"
                 @click="activeCountry = activeCountry === '{{ $code }}' ? null : '{{ $code }}'">
                <div class="text-2xl mb-1 transition-transform duration-300"
                     :class="activeCountry === '{{ $code }}' ? 'scale-125' : 'scale-100'">{{ $flag }}</div>
                <div class="text-[10px] font-grotesk tracking-wide transition-colors duration-300"
                     :class="activeCountry === '{{ $code }}' ? 'text-gold font-semibold' : 'text-gray-600'">{{ $name }}</div>
            </div>
            @endforeach
        </div>
    </div>
</section>


{{-- ══════════════════════════════════════════════════════════════
     §8.5  PARTNERSHIP / TRUSTED BY
══════════════════════════════════════════════════════════════ --}}
<section class="py-12 bg-void border-y border-gold/10">
    <div class="max-w-7xl mx-auto px-6 lg:px-14">
        <p class="section-tag text-center mb-10" data-aos="fade-up">Dipercaya Importir dari Seluruh Dunia</p>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-5">
            @php
            $partners = [
                ['🇸🇦','Al-Baraka Trading','Saudi Arabia'],
                ['🇩🇪','EuroGrill GmbH','Germany'],
                ['🇦🇺','AussiBBQ Supplies','Australia'],
                ['🇯🇵','Sakura Import Co.','Japan'],
            ];
            @endphp
            @foreach($partners as [$flag,$company,$country])
            <div class="glass card-lift rounded-2xl p-5 text-center border border-gold/10"
                 data-aos="fade-up" data-aos-delay="{{ $loop->index * 80 }}">
                <div class="text-4xl mb-3">{{ $flag }}</div>
                <div class="font-grotesk font-semibold text-white text-sm mb-1">{{ $company }}</div>
                <div class="text-gray-600 text-xs">{{ $country }}</div>
                <div class="flex justify-center mt-3 gap-0.5">
                    @for($i=0;$i<5;$i++)<span class="text-gold text-xs">★</span>@endfor
                </div>
            </div>
            @endforeach
        </div>

        <p class="text-center text-gray-700 text-xs mt-8 font-grotesk" data-aos="fade-up">
            + 70 importir lainnya dari 30+ negara
        </p>
    </div>
</section>


{{-- ══════════════════════════════════════════════════════════════
     §9  BLOG — editorial grid
══════════════════════════════════════════════════════════════ --}}
<section id="blog" class="py-14 lg:py-28 bg-void">
    <div class="max-w-7xl mx-auto px-6 lg:px-14">

        <div class="lg:flex lg:justify-between lg:items-end mb-10 lg:mb-16">
            <div data-aos="fade-up" class="mb-4 lg:mb-0 lg:pr-16">
                <span class="section-tag">Blog & Info</span>
                <div class="gold-line w-14 my-4"></div>
                <h2 class="display-lg text-white">
                    Update <span class="shimmer">Terbaru</span>
                </h2>
            </div>
            <a href="#" class="btn-ghost px-6 py-2.5 rounded-full text-sm hidden lg:block" data-aos="fade-left">
                Semua Artikel →
            </a>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-5 gap-6">

            {{-- Featured large --}}
            <div class="lg:col-span-3 glass card-lift rounded-2xl overflow-hidden group" data-aos="fade-right">
                <div class="img-zoom h-64 relative">
                    <img src="https://loremflickr.com/800/400/charcoal,barbecue,grill?lock=91"
                         alt="Blog"
                         class="w-full h-full object-cover"
                         style="filter:brightness(.4) saturate(.5);">
                    <div class="absolute inset-0 bg-gradient-to-t from-void-3 to-transparent"></div>
                    <div class="absolute top-5 left-5">
                        <span class="bg-gold text-void text-[10px] font-grotesk font-bold px-3 py-1 rounded-full tracking-widest">BBQ TIPS</span>
                    </div>
                </div>
                <div class="p-8">
                    <p class="text-gray-600 text-xs font-grotesk mb-3">22 Maret 2024</p>
                    <h3 class="font-grotesk font-semibold text-white text-xl mb-3 group-hover:text-gold transition-colors leading-snug">
                        Cara Memilih Briket Arang yang Tepat untuk BBQ Anda
                    </h3>
                    <p class="text-gray-600 text-sm leading-relaxed mb-6">
                        Tidak semua briket diciptakan sama. Pelajari cara memilih berdasarkan kebutuhan, dari nilai kalori, waktu pembakaran, hingga kesesuaian untuk berbagai jenis grill.
                    </p>
                    <a href="#" class="text-gold text-sm font-grotesk hover:underline inline-flex items-center gap-2">
                        Baca Selengkapnya
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                </div>
            </div>

            {{-- 2 smaller posts --}}
            <div class="lg:col-span-2 flex flex-col gap-6">
                @foreach([
                    ['https://loremflickr.com/200/200/charcoal,export,container?lock=95','Industri','10 Maret 2024','Briket Arang Indonesia Tembus Pasar Eropa dengan Rekor Baru'],
                    ['https://loremflickr.com/200/200/charcoal,hookah,smoke?lock=97',    'Tips',    '5 Maret 2024', 'Mengapa Briket Tempurung Kelapa Lebih Baik dari Arang Kayu?'],
                ] as [$imgUrl,$cat,$date,$title])
                <div class="glass card-lift rounded-2xl overflow-hidden flex group"
                     data-aos="fade-left" data-aos-delay="{{ $loop->index * 100 }}">
                    <div class="w-28 flex-shrink-0 img-zoom">
                        <img src="{{ $imgUrl }}"
                             alt="{{ $title }}"
                             class="w-full h-full object-cover"
                             style="filter:brightness(.4) saturate(.5);">
                    </div>
                    <div class="p-5 flex-1">
                        <div class="flex items-center gap-2 mb-2">
                            <span class="bg-gold/10 text-gold text-[9px] font-grotesk font-bold px-2 py-0.5 rounded-full tracking-widest">{{ strtoupper($cat) }}</span>
                            <span class="text-gray-700 text-[10px]">{{ $date }}</span>
                        </div>
                        <h4 class="font-grotesk font-semibold text-white text-sm leading-snug mb-3 group-hover:text-gold transition-colors">{{ $title }}</h4>
                        <a href="#" class="text-gold text-xs hover:underline">Baca →</a>
                    </div>
                </div>
                @endforeach

                <a href="#" class="btn-ghost px-6 py-3 rounded-full text-sm text-center lg:hidden">Semua Artikel →</a>
            </div>
        </div>
    </div>
</section>


{{-- ══════════════════════════════════════════════════════════════
     §9.5  PRODUCT SPECS TABLE
══════════════════════════════════════════════════════════════ --}}
<section class="py-14 lg:py-28 bg-void-2">
    <div class="max-w-7xl mx-auto px-6 lg:px-14">

        <div class="text-center mb-14" data-aos="fade-up">
            <span class="section-tag">Spesifikasi Teknis</span>
            <div class="gold-line mx-auto my-4"></div>
            <h2 class="display-lg text-white">
                Spesifikasi <span class="shimmer">Produk</span>
            </h2>
            <p class="text-gray-500 text-sm mt-4 max-w-xl mx-auto">
                Data teknis sesuai standar ekspor internasional. Tersedia Certificate of Analysis (COA) untuk setiap pengiriman.
            </p>
        </div>

        {{-- Specs Table — desktop only --}}
        <div class="hidden md:block glass rounded-2xl overflow-hidden border border-gold/10" data-aos="fade-up">
            <div class="overflow-x-auto">
                <table class="w-full text-sm">
                    <thead>
                        <tr class="border-b border-gold/20" style="background:rgba(212,175,55,.08)">
                            <th class="text-left px-5 py-4 font-grotesk font-semibold text-gold text-xs tracking-widest uppercase">Parameter</th>
                            <th class="px-4 py-4 font-grotesk font-semibold text-white text-xs tracking-wide">BBQ</th>
                            <th class="px-4 py-4 font-grotesk font-semibold text-white text-xs tracking-wide">Shisha</th>
                            <th class="px-4 py-4 font-grotesk font-semibold text-white text-xs tracking-wide">Hexagonal</th>
                            <th class="px-4 py-4 font-grotesk font-semibold text-white text-xs tracking-wide">Finger</th>
                            <th class="px-4 py-4 font-grotesk font-semibold text-white text-xs tracking-wide">Cube</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $specs = [
                            ['Calorific Value',   '7,800 kcal/kg', '7,200 kcal/kg', '7,600 kcal/kg', '7,400 kcal/kg', '7,500 kcal/kg', true],
                            ['Fixed Carbon',      '≥ 78%',          '≥ 75%',          '≥ 77%',          '≥ 76%',          '≥ 76%',          false],
                            ['Moisture Content',  '≤ 5%',           '≤ 4%',           '≤ 5%',           '≤ 5%',           '≤ 5%',           true],
                            ['Ash Content',       '≤ 3%',           '≤ 2.5%',         '≤ 3%',           '≤ 3%',           '≤ 3%',           false],
                            ['Volatile Matter',   '≤ 15%',          '≤ 18%',          '≤ 15%',          '≤ 16%',          '≤ 15%',          true],
                            ['Burning Time',      '3–4 jam',       '2–3 jam',        '3–4 jam',       '2–3 jam',       '3–4 jam',        false],
                            ['Smoke',             'Minimal',       'Hampir Nol',    'Minimal',       'Minimal',       'Minimal',        true],
                            ['Size/Shape',        'Custom',        '25×25×25 mm',   'Hexagonal',     '35×10×10 mm',   '25×25×25 mm',   false],
                            ['Packing',           '10 kg carton',  '3 kg box',       '10 kg carton',  '10 kg carton',  '10 kg carton',  true],
                        ];
                        @endphp
                        @foreach($specs as [$param, $bbq, $shisha, $hex, $finger, $cube, $alt])
                        <tr class="border-b border-white/5 {{ $alt ? '' : 'bg-white/[.015]' }} hover:bg-gold/5 transition-colors">
                            <td class="px-5 py-3.5 text-gray-400 font-grotesk font-medium">{{ $param }}</td>
                            <td class="px-4 py-3.5 text-center text-white">{{ $bbq }}</td>
                            <td class="px-4 py-3.5 text-center text-white">{{ $shisha }}</td>
                            <td class="px-4 py-3.5 text-center text-white">{{ $hex }}</td>
                            <td class="px-4 py-3.5 text-center text-white">{{ $finger }}</td>
                            <td class="px-4 py-3.5 text-center text-white">{{ $cube }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        {{-- Specs Accordion — mobile only --}}
        @php
        $mobileSpecs = [
            'BBQ Charcoal'       => ['Calorific Value'=>'7,800 kcal/kg','Fixed Carbon'=>'≥ 78%','Moisture'=>'≤ 5%','Ash Content'=>'≤ 3%','Burning Time'=>'3–4 jam','Smoke'=>'Minimal','Size'=>'Custom','Packing'=>'10 kg carton'],
            'Shisha Charcoal'    => ['Calorific Value'=>'7,200 kcal/kg','Fixed Carbon'=>'≥ 75%','Moisture'=>'≤ 4%','Ash Content'=>'≤ 2.5%','Burning Time'=>'2–3 jam','Smoke'=>'Hampir Nol','Size'=>'25×25×25 mm','Packing'=>'3 kg box'],
            'Hexagonal Charcoal' => ['Calorific Value'=>'7,600 kcal/kg','Fixed Carbon'=>'≥ 77%','Moisture'=>'≤ 5%','Ash Content'=>'≤ 3%','Burning Time'=>'3–4 jam','Smoke'=>'Minimal','Size'=>'Hexagonal','Packing'=>'10 kg carton'],
            'Finger Charcoal'    => ['Calorific Value'=>'7,400 kcal/kg','Fixed Carbon'=>'≥ 76%','Moisture'=>'≤ 5%','Ash Content'=>'≤ 3%','Burning Time'=>'2–3 jam','Smoke'=>'Minimal','Size'=>'35×10×10 mm','Packing'=>'10 kg carton'],
            'Cube Charcoal'      => ['Calorific Value'=>'7,500 kcal/kg','Fixed Carbon'=>'≥ 76%','Moisture'=>'≤ 5%','Ash Content'=>'≤ 3%','Burning Time'=>'3–4 jam','Smoke'=>'Minimal','Size'=>'25×25×25 mm','Packing'=>'10 kg carton'],
        ];
        @endphp
        <div class="md:hidden space-y-3 mt-6">
            @foreach($mobileSpecs as $prodName => $prodSpecs)
            <div class="glass border border-gold/10 rounded-2xl overflow-hidden"
                 x-data="{ open: {{ $loop->first ? 'true' : 'false' }} }">
                <button @click="open=!open"
                        class="w-full flex items-center justify-between px-5 py-4 text-left">
                    <span class="font-grotesk font-semibold text-gold text-sm">{{ $prodName }}</span>
                    <svg class="w-4 h-4 text-gold transition-transform duration-300"
                         :class="open ? 'rotate-180' : ''"
                         fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div x-show="open" x-transition class="px-5 pb-4 border-t border-gold/10">
                    @foreach($prodSpecs as $param => $val)
                    <div class="flex justify-between py-2.5 {{ !$loop->last ? 'border-b border-white/5' : '' }}">
                        <span class="text-gray-500 text-xs">{{ $param }}</span>
                        <span class="text-white text-xs font-medium font-grotesk">{{ $val }}</span>
                    </div>
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>

        <p class="text-center text-gray-700 text-xs mt-5 font-grotesk" data-aos="fade-up">
            * Spesifikasi dapat bervariasi. COA tersedia untuk setiap batch pengiriman. Custom spec tersedia sesuai permintaan buyer.
        </p>
    </div>
</section>


{{-- ══════════════════════════════════════════════════════════════
     §9.6  FAQ
══════════════════════════════════════════════════════════════ --}}
<section class="py-14 lg:py-28 bg-void">
    <div class="max-w-4xl mx-auto px-6 lg:px-14">

        <div class="text-center mb-14" data-aos="fade-up">
            <span class="section-tag">FAQ</span>
            <div class="gold-line mx-auto my-4"></div>
            <h2 class="display-lg text-white">
                Pertanyaan yang <span class="shimmer">Sering Ditanya</span>
            </h2>
        </div>

        @php
        $faqs = [
            ['Berapa Minimum Order Quantity (MOQ)?',
             'MOQ kami adalah 1 x 20 FCL (sekitar 18–20 MT) untuk ekspor. Untuk trial order, tersedia dari 1 MT dengan biaya pengiriman yang disesuaikan.'],
            ['Apa saja metode pembayaran yang diterima?',
             'Kami menerima berbagai metode pembayaran: T/T (Bank Transfer), L/C at Sight, Western Union, serta Cryptocurrency:
              <span class="inline-flex flex-wrap gap-3 mt-3 mb-1">
                <span class="inline-flex items-center gap-1.5 bg-[#26A17B]/15 border border-[#26A17B]/40 rounded-full px-3 py-1">
                  <svg width="14" height="14" viewBox="0 0 32 32" fill="none"><circle cx="16" cy="16" r="16" fill="#26A17B"/><path d="M17.922 17.383v-.002c-.11.008-.677.042-1.942.042-1.01 0-1.721-.03-1.971-.042v.003c-3.888-.171-6.79-.848-6.79-1.658 0-.809 2.902-1.486 6.79-1.66v2.644c.254.018.982.061 1.988.061 1.207 0 1.812-.05 1.925-.06v-2.643c3.88.173 6.775.85 6.775 1.658 0 .81-2.895 1.485-6.775 1.657zm0-3.59v-2.366h5.414V8.183H8.59v3.244h5.414v2.365c-4.4.202-7.704 1.074-7.704 2.12 0 1.047 3.304 1.917 7.704 2.12v7.594h3.918v-7.6c4.393-.202 7.688-1.072 7.688-2.114 0-1.042-3.295-1.912-7.688-2.115z" fill="white"/></svg>
                  <span style="color:#26A17B; font-family:\'Space Grotesk\',sans-serif; font-size:12px; font-weight:600;">USDT</span>
                  <span style="color:#888; font-size:11px;">TRC20/ERC20</span>
                </span>
                <span class="inline-flex items-center gap-1.5 bg-[#F7931A]/15 border border-[#F7931A]/40 rounded-full px-3 py-1">
                  <svg width="14" height="14" viewBox="0 0 32 32" fill="none"><circle cx="16" cy="16" r="16" fill="#F7931A"/><path d="M22.608 14.528c.308-2.058-1.26-3.165-3.404-3.905l.696-2.789-1.699-.424-.678 2.717c-.447-.111-.906-.216-1.363-.32l.683-2.738-1.698-.423-.696 2.788c-.37-.085-.733-.168-1.085-.256l.002-.009-2.343-.585-.452 1.815s1.26.289 1.233.307c.688.172.812.627.791 .988l-1.903 7.627c-.085.212-.302.53-.79.409.018.026-1.235-.308-1.235-.308l-.844 1.944 2.211.552c.411.103.815.211 1.212.313l-.703 2.82 1.697.424.696-2.79c.464.126.915.242 1.357.352l-.694 2.776 1.699.424.703-2.812c2.9.549 5.08.327 5.997-2.296.74-2.11-.037-3.328-1.561-4.12 1.111-.256 1.948-1.084 2.172-2.44zm-3.886 5.45c-.526 2.11-4.084.97-5.237.683l.935-3.745c1.153.288 4.851.859 4.302 3.062zm.526-5.482c-.48 1.921-3.44.945-4.401.706l.847-3.397c.961.24 4.056.687 3.554 2.691z" fill="white"/></svg>
                  <span style="color:#F7931A; font-family:\'Space Grotesk\',sans-serif; font-size:12px; font-weight:600;">Bitcoin</span>
                  <span style="color:#888; font-size:11px;">BTC</span>
                </span>
              </span><br>
              Untuk buyer baru, biasanya kami minta 30% DP dan 70% sebelum pengiriman.'],
            ['Berapa lama waktu produksi dan pengiriman?',
             'Lead time produksi 14–21 hari kerja setelah DP diterima. Pengiriman dari Pelabuhan Jakarta/Surabaya ke berbagai negara biasanya 10–30 hari tergantung tujuan.'],
            ['Apakah tersedia sample gratis?',
             'Ya! Kami menyediakan sample gratis (sekitar 2 kg) untuk buyer serius. Biaya pengiriman sample ditanggung buyer. Hubungi kami via WhatsApp untuk request sample.'],
            ['Dokumen apa saja yang tersedia untuk ekspor?',
             'Kami menyediakan: Commercial Invoice, Packing List, Bill of Lading, Certificate of Origin (SKA), Phytosanitary Certificate, Fumigation Certificate, dan Certificate of Analysis (COA).'],
            ['Apakah produk bisa di-custom sesuai kebutuhan?',
             'Tentu! Kami melayani custom shape, custom size, custom packaging, dan private label sesuai kebutuhan buyer. Minimum order untuk custom biasanya 5 MT.'],
            ['Apa bahan baku yang digunakan?',
             '100% tempurung kelapa pilihan dari Indonesia. Tidak menggunakan kayu, batu bara, atau bahan kimia apapun. Proses produksi ramah lingkungan dan berkelanjutan.'],
        ];
        @endphp

        <div class="space-y-3">
            @foreach($faqs as $i => [$q, $a])
            <div class="glass border border-gold/10 rounded-2xl overflow-hidden card-lift"
                 data-aos="fade-up" data-aos-delay="{{ $i * 50 }}"
                 x-data="{ open: {{ $i === 0 ? 'true' : 'false' }} }">
                <button @click="open = !open"
                        class="w-full flex items-center justify-between px-6 py-5 text-left">
                    <span class="font-grotesk font-semibold text-white text-sm lg:text-base pr-4">{{ $q }}</span>
                    <div class="w-7 h-7 rounded-full border border-gold/30 flex items-center justify-center flex-shrink-0 transition-transform duration-300"
                         :class="open ? 'rotate-45 border-gold bg-gold/10' : ''">
                        <svg class="w-3 h-3 text-gold" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/>
                        </svg>
                    </div>
                </button>
                <div x-show="open" x-transition:enter="transition ease-out duration-200"
                     x-transition:enter-start="opacity-0 -translate-y-2"
                     x-transition:enter-end="opacity-100 translate-y-0"
                     x-transition:leave="transition ease-in duration-150"
                     x-transition:leave-start="opacity-100"
                     x-transition:leave-end="opacity-0"
                     class="px-6 pb-5 border-t border-gold/10">
                    <p class="text-gray-500 text-sm leading-relaxed pt-4">{!! $a !!}</p>
                </div>
            </div>
            @endforeach
        </div>

        <div class="text-center mt-10" data-aos="fade-up">
            <p class="text-gray-600 text-sm mb-4">Masih ada pertanyaan lain?</p>
            <a href="https://wa.me/6282125573419?text=Hello%20Carvora%20Charcoal%2C%0A%0AI%20found%20your%20website%20and%20I%27m%20interested%20in%20your%20coconut%20charcoal%20briquettes.%20Could%20you%20please%20share%20your%20product%20catalog%2C%20specifications%2C%20MOQ%2C%20and%20price%20quotation%3F%0A%0AThank%20you."
               target="_blank" rel="noopener"
               class="btn-primary px-8 py-3 rounded-full text-sm inline-flex items-center gap-2">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                Tanya via WhatsApp
            </a>
        </div>
    </div>
</section>


{{-- ══════════════════════════════════════════════════════════════
     §10  CTA — full screen bold
══════════════════════════════════════════════════════════════ --}}
<section id="contact" class="relative min-h-screen flex items-center justify-center overflow-hidden bg-void noise">

    {{-- ambient glow center --}}
    <div class="glow-gold absolute inset-0 m-auto w-[800px] h-[600px]" style="opacity:.1"></div>

    {{-- diagonal lines --}}
    <div class="absolute inset-0 pointer-events-none"
         style="background-image: repeating-linear-gradient(45deg, rgba(212,175,55,.02) 0 1px, transparent 1px 80px);">
    </div>

    <div class="relative z-10 max-w-5xl mx-auto px-6 text-center" data-aos="fade-up">

        <span class="section-tag">Mulai Hari Ini</span>
        <div class="gold-line w-14 mx-auto my-6"></div>

        <h2 class="text-white mb-2" style="font-family:'Space Grotesk',sans-serif; font-weight:700; letter-spacing:-.03em; line-height:.95; font-size:clamp(3rem,14vw,8.5rem);">
            SIAP
        </h2>
        <h2 class="mb-2" style="font-family:'Space Grotesk',sans-serif; font-weight:700; letter-spacing:-.04em; line-height:.95; font-size:clamp(1.6rem,9vw,7rem);">
            <span class="gold-stroke">BERKOLABORASI</span>
        </h2>
        <h2 class="mb-10" style="font-family:'Space Grotesk',sans-serif; font-weight:700; letter-spacing:-.03em; line-height:.95; font-size:clamp(2rem,8vw,5rem); color:#333">
            BERSAMA KAMI?
        </h2>

        <p class="text-gray-500 text-lg max-w-xl mx-auto mb-12 leading-relaxed">
            Hubungi kami sekarang untuk mendapatkan penawaran harga terbaik, sample gratis, dan konsultasi produk briket arang kami.
        </p>

        <div class="flex flex-wrap justify-center gap-4 mb-14">
            <a href="mailto:charvoracharcoal@gmail.com"
               class="btn-primary btn-glow px-10 py-4 rounded-full text-base">
                Kirim Pesan →
            </a>
            <a href="https://wa.me/6282125573419?text=Hello%20Carvora%20Charcoal%2C%0A%0AI%20found%20your%20website%20and%20I%27m%20interested%20in%20your%20coconut%20charcoal%20briquettes.%20Could%20you%20please%20share%20your%20product%20catalog%2C%20specifications%2C%20MOQ%2C%20and%20price%20quotation%3F%0A%0AThank%20you." target="_blank" rel="noopener"
               class="btn-ghost px-10 py-4 rounded-full text-base inline-flex items-center gap-2">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                WhatsApp
            </a>
        </div>

        {{-- contact detail chips --}}
        <div class="flex flex-wrap justify-center gap-4">
            <div class="glass rounded-full px-5 py-2 text-sm text-gray-500 inline-flex items-center gap-2">
                <svg class="w-4 h-4 text-gold" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                +62 821 2557 3419
            </div>
            <div class="glass rounded-full px-5 py-2 text-sm text-gray-500 inline-flex items-center gap-2">
                <svg class="w-4 h-4 text-gold" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                charvoracharcoal@gmail.com
            </div>
            <div class="glass rounded-full px-5 py-2 text-sm text-gray-500 inline-flex items-center gap-2">
                <svg class="w-4 h-4 text-gold" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                Bekasi, Indonesia
            </div>
        </div>
    </div>
</section>

@endsection

@push('head')
@endpush

@push('scripts')
<script>
// Product carousel dots
(function() {
    const track = document.getElementById('product-carousel');
    const dots  = document.querySelectorAll('#carousel-dots span');
    if (!track || !dots.length) return;
    track.addEventListener('scroll', () => {
        const idx = Math.round(track.scrollLeft / track.clientWidth * (dots.length / 2));
        dots.forEach((d, i) => d.classList.toggle('active', i === Math.min(idx, dots.length - 1)));
    }, { passive: true });
})();
</script>
@endpush
