@props(['id', 'name', 'label' => null, 'value' => '', 'options' => []])



<div class="mb-4">
    @if ($label)
        <label class="block text-gray-700" for="{{ $id }}">{{ $label }}</label>
    @endif
    <select id="{{ $id }}" name="{{ $name }}" class="w-full px-4 py-2 border rounded focus:outline-none">

        @foreach ($options as $optionValue => $optionLabels)
            <option value="{{ $optionValue }}" {{ old($name, $value) == $optionValue ? 'selected' : '' }}>
                {{ $optionLabels }}
            </option>
        @endforeach
    </select>
</div>
