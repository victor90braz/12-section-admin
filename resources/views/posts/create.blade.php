<x-layout>
    <section class="px-6 py-8">
        <x-panel class="max-w-sm mx-auto bg-gray-300">
            <h1 class="text-center font-bold text-xl">Create</h1>

            <form action="/admin/posts" method="POST">
                @csrf

                <label  class="block mb-2 uppercase font-bold text-xs text-gray-700" for="name">
                    name
                </label>

                <input  class="border border-gray-400 p-2 w-full"
                        type="text"
                        name="name"
                        id="name"
                        required
                        value="{{ old('name') }}"
                />

                @error('name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror


                <label  class="block mb-2 uppercase font-bold text-xs text-gray-700 mt-3" for="excerpt">
                    excerpt
                </label>

                <input  class="border border-gray-400 p-2 w-full"
                        type="text"
                        name="excerpt"
                        id="excerpt"
                        required
                        value="{{ old('excerpt') }}"
                />

                @error('excerpt')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror


                <label  class="block mb-2 uppercase font-bold text-xs text-gray-700 mt-3" for="name">
                    body
                </label>

                <input  class="border border-gray-400 p-2 w-full"
                        type="text"
                        name="body"
                        id="body"
                        required
                        value="{{ old('body') }}"
                />

                @error('body')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror

                <x-submit-button class="mt-3"> publish </x-submit-button>
            </form>
        </x-panel>
    </section>
</x-layout>
