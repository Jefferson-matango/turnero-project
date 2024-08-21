<x-app-layout>
    @csrf
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <h1 class="text-center text-2xl">Editar un Post</h1>

                    <form class="max-w-lg mx-auto mt-6" autocomplete="off" action="{{route('posts.update', $post)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div>
                            <x-input-label for="title" value="Titulo" >Titulo</x-input-label>
                            <x-text-input id="title" name="title" type="text" class="mt-1 block w-full" value="{{$post->title}}" required/>
                        </div>
                        
                        <div class="mt-3">
                            <x-input-label for="slug" value="Slug" />
                            <x-text-input id="slug" name="slug" type="text" class="mt-1 block w-full" value="{{$post->slug}}" />
                        </div>

                        <div class="mt-3">
                            <x-input-label for="category" value="Categoria" />
                            <x-text-input id="category" name="category" type="text" class="mt-1 block w-full" value="{{$post->category}}" />
                        </div>
                        
                        <div class="mt-3 mb-5">
                            <x-input-label>
                                Descripción
                                <x-text-area name="content" rows="4" placeholder="Describe tu post" class="mt-1">{{$post->content}}</x-text-area>
                            </x-input-label>
                        </div>
                        <x-primary-button>
                            Editar
                        </x-primary-button>

                        <x-secondary-button class="mx-3" >
                            <a href="{{route('posts.show', $post)}}">Cancelar</a>
                        </x-secondary-button>
                    </form>                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

