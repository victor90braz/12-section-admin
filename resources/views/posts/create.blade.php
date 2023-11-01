<x-layout>
    <section class="mt-8 max-w-md mx-auto">
        <h1 class="text-left p-2 font-bold text-xl">
            Publish New Post
        </h1>

        <x-panel class="bg-gray-200">
            <form action="/admin/posts" method="POST" enctype="multipart/form-data">
                @csrf

                <label  class="block mb-2 uppercase font-bold text-xs text-gray-700" for="title">
                    title
                </label>

                <input  class="border border-gray-400 p-2 w-full"
                        type="text"
                        name="title"
                        id="title"
                        required
                        value="{{ old('title') }}"
                />

                @error('title')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror

                <label  class="block mb-2 uppercase font-bold text-xs text-gray-700 mt-3" for="title">
                    slug
                </label>

                <input  class="border border-gray-400 p-2 w-full"
                        type="text"
                        name="slug"
                        id="slug"
                        required
                        value="{{ old('slug') }}"
                />

                @error('slug')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror

                <div class="mb-6">
                    <label  class="block mb-2 uppercase font-bold text-xs text-gray-700 mt-3" for="excerpt">
                        thumbnail
                    </label>

                    <input  class="border border-gray-400 p-2 w-full"
                            type="file"
                            name="thumbnail"
                            id="thumbnail"
                            required
                            value="{{ old('thumbnail') }}"
                    />

                    @error('thumbnail')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

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

                <textarea class="border border-gray-400 p-2 w-full" name="body" id="body" required>
                    {{ old('body') }}
                </textarea>

                @error('body')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror

                <section class="px-6 py-8">
                    <label for="category_id" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        category
                    </label>

                    <select name="category_id" id="category_id">
                        @foreach (App\Models\Category::all() as $category)
                            <option value="{{ $category->id }}" {{ strval(old('category_id')) === strval($category->id) ? 'selected' : '' }}>
                                {{ ucwords($category->name) }}
                            </option>
                        @endforeach
                    </select>

                    @error('category_id')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </section>

                <x-submit-button class="mt-3"> publish </x-submit-button>
            </form>
        </x-panel>
    </section>
</x-layout>
