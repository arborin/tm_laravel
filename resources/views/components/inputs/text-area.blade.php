@props(['id', 'name', 'label' => null, 'type' => 'text', 'value' => '', 'placeholder' => ''])


<div class="mb-4">
    @if ($label)
        <label class="block text-gray-700" for="description">{{ $label }}</label>
    @endif
    <textarea cols="30" rows="7" id="{{ $id }}" name="{{ $name }}"
        class="w-full px-4 py-2 border rounded focus:outline-none" placeholder="{{ $placeholder }}">{{ $value }}</textarea>
</div>
