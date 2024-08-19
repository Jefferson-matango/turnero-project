<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1 class="text-center text-3xl"> {{$post->title}} </h1>
                    <hr class="w-48 h-1 mx-auto my-4 bg-gray-100 border-0 rounded md:my-10 dark:bg-gray-700">
                    <h1 class=" text-justify text-lg"> {{$post->content}} </h1>
                    <x-secondary-button class="mt-5">
                        <a href="{{route('posts.index')}}">Volver a posts</a>
                    </x-secondary-button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
