<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1 class="text-center text-3xl"> {{$post->title}} </h1>
                    <div class="-mb-4 mt-3 text-center">
                        <span class="bg-indigo-100 text-indigo-800 text-sm font-medium me-2 px-2.5 
                                        py-0.5 rounded dark:bg-indigo-900 
                                        dark:text-indigo-300">
                            {{$post->category}}
                        </span>
                    </div> 
                    <hr class="w-48 h-1 mx-auto my-4 bg-gray-100 border-0 rounded md:my-10 dark:bg-gray-700">
                    <h1 class=" text-justify text-lg"> {{$post->content}} </h1>
                    <div class="flex flex-row">
                        <x-primary-button class="mt-5">
                            <a href="{{route('posts.edit', $post)}}">Editar post</a>
                        </x-primary-button>
                        <x-secondary-button class="mt-5 mx-10">
                            <a href="{{route('posts.index')}}">Volver a posts</a>
                        </x-secondary-button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
