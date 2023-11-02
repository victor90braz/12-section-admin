<x-layout>
    <x-setting heading="Publish New Post">
        <form action="/admin/posts" method="POST" enctype="multipart/form-data">
            @csrf

            <x-form.input name="title"/>
            <x-form.input name="slug"/>
            <x-form.input name="thumbnail" type="file"/>
            <x-form.textarea name="excerpt"/>
            <x-form.textarea name="body"/>

            <x-form.field>
                <x-form.label name="category"/>

                    <select name="category_id" id="category_id">
                        @foreach (App\Models\Category::all() as $category)
                            <option value="{{ $category->id }}" {{ strval(old('category_id')) === strval($category->id) ? 'selected' : '' }}>
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
