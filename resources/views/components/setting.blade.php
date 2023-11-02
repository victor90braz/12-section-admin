@props(['heading'])

<section class="mt-8 max-w-4xl mx-auto">
    <h1 class="text-left p-2 font-bold text-lg mb-8 pb-2 border-b">
        {{ $heading }}
    </h1>

    <div class="flex">
        <aside class="w-48">
            <h4 class="font-semibold mb-4">Links</h4>
            <ul>
                <li>
                    <a href="/admin/posts/create"
                       class="{{ Str::contains(request()->url(), '/admin/posts/create') ? 'text-blue-500' : '' }}">
                        New Post
                    </a>
                </li>

                <li>
                    <a href="/admin/posts"
                       class="{{ Str::contains(request()->url(), '/admin/posts') && !Str::contains(request()->url(), '/admin/posts/create') ? 'text-blue-500' : '' }}">
                        All Posts
                    </a>
                </li>
            </ul>
        </aside>

        <main class="flex-1">
            <x-panel class="bg-gray-200">
                {{ $slot }}
            </x-panel>
        </main>
    </div>
</section>
