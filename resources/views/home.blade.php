@extends('layouts.app')
@section('title','Briket Charcoal Indonesia – Premium Coconut Shell Charcoal Briquette')
@section('content')

{{-- ══════════════════════════════════════════════════════════════
     §1  HERO — oversized type + split layout
══════════════════════════════════════════════════════════════ --}}
<section id="home" class="relative min-h-screen flex flex-col justify-center overflow-hidden bg-void noise">

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

            {{-- ── Right visual — hidden on mobile, shown on lg ── --}}
            <div class="hidden lg:block lg:col-span-5 relative" data-aos="fade-left" data-aos-delay="160">

                {{-- outer ring decoration --}}
                <div class="absolute -inset-4 rounded-3xl border border-gold/10 pointer-events-none"></div>
                <div class="absolute -inset-8 rounded-3xl border border-gold/5  pointer-events-none"></div>

                {{-- main image --}}
                <div class="img-zoom rounded-2xl overflow-hidden relative">
                    <img src="https://loremflickr.com/600/750/charcoal,briquette?lock=10"
                         alt="Briket Arang Premium"
                         class="w-full aspect-[4/5] object-cover"
                         style="filter: brightness(.55) saturate(.7);">
                    <div class="absolute inset-0"
                         style="background: linear-gradient(135deg, rgba(212,175,55,.08) 0%, transparent 60%, rgba(8,8,8,.7) 100%);">
                    </div>
                    <div class="absolute top-5 left-5 glass rounded-xl px-4 py-2">
                        <span class="section-tag">Premium Grade</span>
                    </div>
                </div>

                {{-- floating cards — desktop only --}}
                <div class="glass card-lift absolute -bottom-6 -left-4 rounded-2xl p-4 flex items-center gap-3 shadow-2xl">
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

                <div class="glass card-lift absolute -top-5 right-4 rounded-2xl p-4 flex items-center gap-3 shadow-2xl">
                    <div class="w-9 h-9 rounded-lg bg-gold/10 flex items-center justify-center flex-shrink-0">
                        <span class="text-lg">🌿</span>
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
                    @foreach([['🏭','1.000T','Produksi/Bln'],['🌍','30+','Negara'],['⭐','ISO','Certified']] as [$ic,$v,$l])
                    <div class="glass rounded-xl p-3 text-center card-lift">
                        <div class="text-lg mb-1">{{ $ic }}</div>
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
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-4">
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
        <div class="flex flex-col lg:flex-row justify-between items-start lg:items-end gap-6 mb-16">
            <div data-aos="fade-right">
                <span class="section-tag">Varian Produk</span>
                <div class="gold-line w-14 my-4"></div>
                <h2 class="display-lg text-white">
                    Produk <span class="shimmer">Unggulan</span><br>Kami
                </h2>
            </div>
            <p class="text-gray-500 text-sm max-w-xs leading-relaxed" data-aos="fade-left">
                Semua varian dibuat dari tempurung kelapa alami pilihan, melalui proses karbonisasi terkontrol.
            </p>
        </div>

        @php
        $products = [
            ['name'=>'BBQ Charcoal',       'img'=>'https://loremflickr.com/600/400/charcoal,bbq,grill?lock=31',       'tag'=>'TERLARIS', 'cal'=>'7800 kcal/kg', 'desc'=>'Kalori tinggi, nyala lama, cocok untuk semua jenis grill outdoor maupun indoor.'],
            ['name'=>'Shisha Charcoal',    'img'=>'https://loremflickr.com/600/400/charcoal,hookah,shisha?lock=42',    'tag'=>'POPULER',  'cal'=>'7200 kcal/kg', 'desc'=>'Pembakaran merata tanpa asap dan aroma—tidak mengganggu cita rasa tembakau.'],
            ['name'=>'Hexagonal Charcoal', 'img'=>'https://loremflickr.com/600/400/charcoal,briquette,fire?lock=53',   'tag'=>'FAVORIT',  'cal'=>'7600 kcal/kg', 'desc'=>'Bentuk segi enam ikonik, mudah disusun di grill, distribusi panas optimal.'],
            ['name'=>'Finger Charcoal',    'img'=>'https://loremflickr.com/600/400/charcoal,coal,black?lock=64',       'tag'=>'BARU',     'cal'=>'7400 kcal/kg', 'desc'=>'Ukuran ramping fleksibel untuk barbecue portable dan kompor arang kecil.'],
            ['name'=>'Cube Charcoal',      'img'=>'https://loremflickr.com/600/400/charcoal,bbq,smoke?lock=75',        'tag'=>null,       'cal'=>'7500 kcal/kg', 'desc'=>'Bentuk kubus presisi, pengapian konsisten, ideal untuk memasak jangka panjang.'],
            ['name'=>'Custom Shape',       'img'=>'https://loremflickr.com/600/400/charcoal,production,factory?lock=86','tag'=>'CUSTOM',  'cal'=>'Custom',       'desc'=>'Bentuk & ukuran sesuai spesifikasi buyer. Konsultasikan kebutuhan Anda.'],
        ];
        @endphp

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($products as $p)
            <div class="glass card-lift rounded-2xl overflow-hidden group"
                 data-aos="fade-up" data-aos-delay="{{ ($loop->index % 3) * 80 }}">

                {{-- image --}}
                <div class="img-zoom relative h-48">
                    <img src="{{ $p['img'] }}"
                         alt="{{ $p['name'] }}"
                         class="w-full h-full object-cover"
                         style="filter:brightness(.45) saturate(.6);">
                    <div class="absolute inset-0 bg-gradient-to-t from-void/80 to-transparent"></div>

                    {{-- glow on hover --}}
                    <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-500"
                         style="background:radial-gradient(circle at 50% 100%, rgba(212,175,55,.15) 0%, transparent 70%)">
                    </div>

                    @if($p['tag'])
                    <div class="absolute top-4 left-4">
                        <span class="font-grotesk text-[10px] font-bold tracking-widest text-void bg-gold px-3 py-1 rounded-full">
                            {{ $p['tag'] }}
                        </span>
                    </div>
                    @endif

                    {{-- cal badge --}}
                    <div class="absolute bottom-4 right-4">
                        <span class="glass rounded-full px-3 py-1 text-[10px] font-grotesk text-gold border border-gold/20">
                            {{ $p['cal'] }}
                        </span>
                    </div>
                </div>

                {{-- body --}}
                <div class="p-6">
                    <h3 class="font-grotesk font-semibold text-white text-lg mb-2 group-hover:text-gold transition-colors">
                        {{ $p['name'] }}
                    </h3>
                    <p class="text-gray-600 text-sm leading-relaxed mb-5">{{ $p['desc'] }}</p>

                    <div class="flex items-center justify-between">
                        <a href="#contact" class="btn-ghost px-5 py-2 rounded-full text-xs">Detail →</a>
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

        <div class="text-center mt-14" data-aos="fade-up">
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
                    ['01','🥥','Seleksi Bahan Baku','Tempurung kelapa kering dipilih secara manual. Hanya bahan terbaik yang lolos tahap ini.'],
                    ['02','🔥','Karbonisasi','Dibakar dalam kiln tertutup pada suhu 400–700°C untuk menghasilkan arang dengan kandungan karbon optimal.'],
                    ['03','⚙️','Penggilingan','Arang digiling menjadi serbuk halus dengan ukuran partikel seragam untuk hasil cetakan yang padat.'],
                    ['04','🧱','Pencetakan & Pengeringan','Serbuk dicampur perekat alami, dicetak sesuai bentuk yang diminta, lalu dikeringkan dalam oven.'],
                    ['05','🔬','Quality Control','Setiap batch diuji nilai kalori, kadar air, kekerasan, dan kadar abu di laboratorium internal.'],
                    ['06','📦','Packaging & Pengiriman','Dikemas profesional, dilengkapi dokumen ekspor lengkap, dan dikirim tepat waktu ke seluruh dunia.'],
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
                            <span class="text-2xl">{{ $icon }}</span>
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
     §8  EXPORT MAP — countries grid
══════════════════════════════════════════════════════════════ --}}
<section id="export" class="py-14 lg:py-28 bg-void-2">
    <div class="max-w-7xl mx-auto px-6 lg:px-14">

        <div class="flex flex-col lg:flex-row justify-between items-start lg:items-end gap-8 mb-16">
            <div data-aos="fade-right">
                <span class="section-tag">Jangkauan Global</span>
                <div class="gold-line w-14 my-4"></div>
                <h2 class="display-lg text-white">
                    <span data-count="30" class="gold-text">0</span><span class="gold-text">+</span><br>
                    <span style="font-size:.45em; font-weight:300; color:#666; letter-spacing:.02em">Negara Ekspor Aktif</span>
                </h2>
            </div>
            <p class="text-gray-600 text-sm max-w-xs leading-relaxed" data-aos="fade-left">
                Dari Timur Tengah, Eropa, Amerika, hingga Asia—produk kami telah dipercaya importir di berbagai penjuru dunia.
            </p>
        </div>

        @php
        $countries = [
            ['🇸🇦','Saudi Arabia'],['🇦🇪','UAE'],['🇩🇪','Jerman'],['🇳🇱','Belanda'],
            ['🇺🇸','Amerika'],['🇦🇺','Australia'],['🇯🇵','Jepang'],['🇰🇷','Korea'],
            ['🇲🇾','Malaysia'],['🇸🇬','Singapura'],['🇹🇷','Turki'],['🇪🇬','Mesir'],
        ];
        @endphp

        <div class="grid grid-cols-3 sm:grid-cols-4 md:grid-cols-6 gap-4">
            @foreach($countries as [$flag,$name])
            <div class="glass card-lift rounded-2xl py-5 text-center"
                 data-aos="zoom-in" data-aos-delay="{{ $loop->index * 40 }}">
                <div class="text-3xl mb-2">{{ $flag }}</div>
                <div class="text-gray-600 text-xs font-grotesk tracking-wide">{{ $name }}</div>
            </div>
            @endforeach
        </div>
    </div>
</section>


{{-- ══════════════════════════════════════════════════════════════
     §9  BLOG — editorial grid
══════════════════════════════════════════════════════════════ --}}
<section id="blog" class="py-14 lg:py-28 bg-void">
    <div class="max-w-7xl mx-auto px-6 lg:px-14">

        <div class="flex justify-between items-end mb-16">
            <div data-aos="fade-right">
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
                        Tidak semua briket diciptakan sama. Pelajari cara memilih berdasarkan kebutuhan—dari nilai kalori, waktu pembakaran, hingga kesesuaian untuk berbagai jenis grill…
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

        <h2 class="display-xl text-white mb-4">
            SIAP
        </h2>
        <h2 class="display-xl mb-4" style="font-size:clamp(3rem,8vw,7rem)">
            <span class="gold-stroke">BERKOLABORASI</span>
        </h2>
        <h2 class="display-xl text-white mb-10" style="font-size:clamp(2rem,5vw,5rem); color:#333">
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
