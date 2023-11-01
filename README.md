### Getting Started

#### Step 1: Clone the Repository

```shell
git clone https://github.com/victor90braz/12-section-admin.git
```

````

```php
<section class="px-6 py-8">
    <label for="category" class="block mb-2 uppercase font-bold text-xs text-gray-700">
        category
    </label>

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
</section>
```
````
