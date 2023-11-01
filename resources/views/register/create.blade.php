<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 bg-gray-100 border border-gray-300 p-6 rounded-xl">
            <h1 class="text-center font-bold text-xl">Register</h1>

            <form action="/register" method="POST" class="mt-10">
                @csrf

                    <x-form.input name="name"/>
                    <x-form.input name="username"/>
                    <x-form.input name="email" type="email"/>
                    <x-form.input name="password" type="password"/>

                    <x-submit-button class="mt-3">Submit</x-submit-button>

                @if ($errors->any())
                    <ul class="mb-6">
                        @foreach ($errors->all() as $error)
                            <li class="text-red-500 text-xs">{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif

            </form>
        </main>
    </section>
</x-layout>
