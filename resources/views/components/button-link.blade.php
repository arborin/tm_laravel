@props([
    'url' => '',
    'icon' => '',
    'hoverClass' => 'hover:bg-yellow-600',
    'bgClass' => 'bg-yellow-600',
    'textClass' => 'text-black',
])


<a href="{{ $url }}"
    class="{{ $bgClass }} {{ $hoverClass }} {{ $textClass }} px-4 py-2 rounded hover:shadow-md transition duration-300">
    @if ($icon)
        <i class="fa {{ $icon }}"></i>
    @endif {{ $slot }}
</a>
