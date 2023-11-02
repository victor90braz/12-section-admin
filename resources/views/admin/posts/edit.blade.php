<x-layout>
    <x-setting :heading=" 'Edit Post: ' . $post->title ">
        <form action="/admin/posts" method="POST" enctype="multipart/form-data">
            @csrf

            <x-form.input name="title" :value="old('title', $post->title)"/>
            <x-form.input name="slug" :value="old('slug', $post->slug)"/>
            <x-form.input name="thumbnail" type="file" :value="old('thumbnail', $post->thumbnail)"/>
            <img src="{{asset('storage/' . $post->thumbnail)}}" alt="post created" class="rounded-xl">
            <x-form.textarea name="excerpt">{{ old('excerpt', $post->excerpt) }}</x-form.textarea>
            <x-form.textarea name="body">{{ old('body', $post->body) }}</x-form.textarea>

            <x-form.field>
                <x-form.label name="category"/>
                <select name="category_id" id="category_id">
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

            <x-submit-button class="mt-3"> publish </x-submit-button>
        </form>
    </x-setting>
</x-layout>
