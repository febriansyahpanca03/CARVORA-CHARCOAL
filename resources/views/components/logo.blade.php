@props(['size' => 'md', 'uid' => 'a'])

@php
$cfg = [
    'sm' => ['w' => 32, 'h' => 32, 'title' => '0.85rem', 'sub' => '0.48rem', 'gap' => '0.5rem'],
    'md' => ['w' => 42, 'h' => 42, 'title' => '1.05rem', 'sub' => '0.55rem', 'gap' => '0.6rem'],
    'lg' => ['w' => 56, 'h' => 56, 'title' => '1.35rem', 'sub' => '0.65rem', 'gap' => '0.75rem'],
];
$c = $cfg[$size] ?? $cfg['md'];
$id = 'cg-' . $uid . '-' . $size;
@endphp

<a href="/" class="flex items-center group" style="gap:{{ $c['gap'] }}; text-decoration:none;">

    {{-- ══ CC Geometric Mark (SVG) ══ --}}
    <svg width="{{ $c['w'] }}" height="{{ $c['h'] }}"
         viewBox="0 0 52 52" fill="none" xmlns="http://www.w3.org/2000/svg"
         style="flex-shrink:0; transition: transform .3s ease;"
         class="group-hover:scale-105">
        <defs>
            <linearGradient id="{{ $id }}" x1="2" y1="2" x2="50" y2="50" gradientUnits="userSpaceOnUse">
                <stop offset="0%"   stop-color="#5C3D08"/>
                <stop offset="30%"  stop-color="#9A7218"/>
                <stop offset="60%"  stop-color="#D4AF37"/>
                <stop offset="85%"  stop-color="#F5C842"/>
                <stop offset="100%" stop-color="#D4AF37"/>
            </linearGradient>
        </defs>

        {{-- Outer large C bracket --}}
        <path fill-rule="evenodd" clip-rule="evenodd"
              d="M43 4H19L6 15V37L19 48H43V40H22L16 34V18L22 12H43V4Z"
              fill="url(#{{ $id }})"/>

        {{-- Inner C bracket — creates the second C of CC --}}
        <path fill-rule="evenodd" clip-rule="evenodd"
              d="M43 12H27L20 19V33L27 40H43V32H30L28 30V22L30 20H43V12Z"
              fill="url(#{{ $id }})"/>

        {{-- Dark cutout so inner CC negative space is visible --}}
        <path d="M30 20H43V32H30L28 30V22Z" fill="#0D0D0D"/>
    </svg>

    {{-- ══ Brand Text ══ --}}
    <div style="display:flex; flex-direction:column; line-height:1; user-select:none;">
        <span style="
            font-family: 'Space Grotesk', sans-serif;
            font-weight: 700;
            font-size: {{ $c['title'] }};
            letter-spacing: 0.06em;
            text-transform: uppercase;
            background: linear-gradient(135deg, #A07820 0%, #D4AF37 45%, #F5C842 70%, #D4AF37 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        ">CARVORA</span>
        <span style="
            font-family: 'Space Grotesk', sans-serif;
            font-size: {{ $c['sub'] }};
            font-weight: 500;
            color: #666;
            letter-spacing: 0.28em;
            text-transform: uppercase;
            margin-top: 3px;
        ">CHARCOAL</span>
    </div>
</a>
