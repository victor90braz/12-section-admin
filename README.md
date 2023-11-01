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

# if a file is required include enctype="multipart/form-data"

<form action="/admin/posts" method="POST" enctype="multipart/form-data">
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
</form>


````

# Store Function

The `store` function is part of the application's codebase and is responsible for processing and storing data. This README provides inline comments to explain each step within the function.

```php
public function store()
{
    // Use the ddd function to dump and die, showing the contents of the request
    // This is helpful for debugging and understanding the request data
    ddd(request()->all());

    // Use ddd to dump and die the 'thumbnail' file from the request
    ddd(request()->file('thumbnail'));

    // Store the 'thumbnail' file in the 'thumbnails' directory
    // This function will move the uploaded file to a specific location and return the path
    $path = request()->file('thumbnail')->store('thumbnails');

    // Return the path to the stored file
    // This can be useful for further processing or displaying the uploaded file
    return $path;
}

- add the link avaibible to public folder

php artisan storage:link
```

# create it to migrate to DB

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->foreignId('category_id');
            $table->string('slug')->unique();
            $table->string('title');
            $table->string('thumbnail')->nullable();
            $table->text('excerpt');
            $table->text('body');
            $table->timestamps();
            $table->timestamp('published_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}

# run terminal
php artisan migrate:fresh --seed
