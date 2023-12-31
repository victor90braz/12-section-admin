<x-layout>
    <x-setting :heading="'Edit Post: ' . $post->title">
        <form action="/admin/posts/{{ $post->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            <x-form.input name="title" :value="old('title', $post->title)"/>
            <x-form.input name="slug" :value="old('slug', $post->slug)"/>

            <div class="flex mt-6 gap-2 flex-col space-y-2">
                <div class="flex-1">
                    <x-form.input name="thumbnail" type="file" :value="old('thumbnail', $post->thumbnail)" class="block w-full px-4 py-2 leading-5 text-gray-700 placeholder-gray-400 focus:ring focus:ring-blue-300 focus:ring-opacity-50 border border-gray-300 rounded-md transition duration-150 ease-in-out sm:text-sm sm:leading-5"/>
                </div>
                <div class="w-1/4 flex-1">
                    <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="post created" class="rounded-xl border border-gray-300 w-full max-h-40">
                </div>
            </div>

            <x-form.textarea name="excerpt">{{ old('excerpt', $post->excerpt) }}</x-form.textarea>
            <x-form.textarea name="body">{{ old('body', $post->body) }}</x-form.textarea>

            <x-form.field>
                <x-form.label name="category"/>
                <select name="category_id" id="category_id" class="w-full px-4 py-2 text-gray-700 border border-gray-300 rounded-md">
                    @foreach (App\Models\Category::all() as $category)
                        <option
                                value="{{ $category->id }}"
                                {{ strval(old('category_id', $post->category_id)) === strval($category->id) ? 'selected' : '' }}
                        >
                            {{ ucwords($category->name) }}
                        </option>
                    @endforeach
                </select>
                <x-form.error name='category'/>
            </x-form.field>

            <x-submit-button class="mt-3">Update</x-submit-button>
        </form>
    </x-setting>
</x-layout>
