@props(['active' => false, 'url' => '', 'icon' => ''])
<a {{ $attributes }} href='{{ $url }}'
    class="text-white hover:underline py-2 {{ $active ? 'text-yellow-500 text-bold' : '' }}">
    @if ($icon)
        <i class="mr-1 fa {{ $icon }}"></i>
    @endif
    {{ $slot }}
</a>
