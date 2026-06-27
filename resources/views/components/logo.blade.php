@props(['size' => 'md'])

@php
$heights = ['sm' => 'h-8', 'md' => 'h-10', 'lg' => 'h-14'];
$h = $heights[$size] ?? $heights['md'];
@endphp

<a href="/" class="flex items-center group">
    <img src="/logo.png"
         alt="Carvora Charcoal"
         class="{{ $h }} w-auto object-contain transition-opacity group-hover:opacity-85">
</a>
