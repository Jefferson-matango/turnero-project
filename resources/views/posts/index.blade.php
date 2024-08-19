<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Posts
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1 class="text-center text-2xl">Aqui se muestran todos los posts</h1>
                    <x-primary-button class="mt-5">
                        <a href="{{route('posts.create')}}">Nuevo Post</a>
                    </x-primary-button>
                </div>
                <ul class="-mt-8 p-6 font-medium text-blue-600 dark:text-blue-500">
                    @foreach ($posts as $post)
                        <div class="flex flex-row justify-between">
                            <li class=" hover:underline text-lg">
                                <a href="{{ route('posts.show', $post) }}"> {{$post->title}} </a> 
                            </li>
                            <form action="{{route('posts.destroy', $post)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <x-danger-button class="mt-2 mx-12">
                                    Eliminar
                                </x-danger-button>
                            </form>
                        </div>
                    @endforeach
                </ul>
                <div class="-mt-6 p-5 font-medium">
                    {{$posts->links()}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
