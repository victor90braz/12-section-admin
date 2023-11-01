### Getting Started

#### Step 1: Clone the Repository

```shell
git clone https://github.com/victor90braz/12-section-admin.git
```

<section class="px-6 py-8">
    <label for="category" class="block mb-2 uppercase font-bold text-xs text-gray-700">
        category
    </label>

    <select name="category" id="category">
        @php $categories = App\Models\Category::all() @endphp

        @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select>

    @error('category')
        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
    @enderror

</section>
