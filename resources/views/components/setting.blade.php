@props(['heading'])

<section class="mt-8 max-w-md mx-auto">
    <h1 class="text-left p-2 font-bold text-xl">
       {{ $heading }}
    </h1>

    <x-panel class="bg-gray-200">
        {{ $slot }}
    </x-panel>
</section>
