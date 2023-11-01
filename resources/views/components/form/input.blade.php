@props(['name'])

<label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="{{ $name }}">
    {{ $name }}
</label>

<input class="border border-gray-400 p-2 w-full"
       type="text"
       name="{{ $name }}"
       id="{{ $name }}"
       required
       value="{{ old($name) }}"
/>

@error($name)
    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
@enderror
