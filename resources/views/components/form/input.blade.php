@props(['name'])

<x-form.field>
    <x-form.label name="{{ $name }}"/>
    <input class="border border-gray-400 p-2 w-full"
           name="{{ $name }}"
           id="{{ $name }}"
           required
           {{$attributes(['value' => old("$name")])
}}    />
    <x-form.error name="{{ $name }}" />
</x-form.field>


