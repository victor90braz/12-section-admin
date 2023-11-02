<x-layout>
    <x-setting heading="Delete Post" class="px-6 py-8">
        <table class="min-w-full divide-y divide-gray-200">
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($posts as $post)
                    <tr>
                        <td class="px-6 py-4 white-space-nowrap">
                            <div class="flex items-center">
                                <div class="text-sm font-medium text-gray-900">
                                    <a href="/posts/{{ $post->slug }}"> {{ $post->title }}</a>
                                </div>
                            </div>
                        </td>

                        <td class="px-6 py-4 white-space-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                    Published
                                </span>
                        </td>

                        <td class="px-6 py-4 white-space-nowrap text-right text-sm font-medium">
                            <a href="/admin/posts/{{ $post->id }}/edit" class="text-blue-500 hover:text-blue-600">
                                Edit
                            </a>
                        </td>

                        <td class="px-6 py-4 white-space-nowrap text-right text-sm font-medium">
                            <form action="/admin/posts/{{ $post->id }}" method="POST">
                                @csrf
                                @method('DELETE')

                                <button class="bg-red-500 text-white uppercase font-semibold text-xs py-2 px-8 rounded-2xl hover:bg-red-600">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </x-setting>
</x-layout>
