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
                    <div class="flex flex-row justify-between">
                        <h1 class="mx-auto text-2xl">Aqui se muestran todos los posts</h1>
                        <form>
                            <x-search-input></x-search-input>
                        </form>
                    </div>
                    <x-primary-button class="mt-5">
                        <a href="{{route('posts.create')}}">Nuevo Post</a>
                    </x-primary-button>
                </div>
                <ul class="-mt-8 p-6 font-medium text-blue-600 dark:text-blue-500">
                    @foreach ($posts as $post)
                        <div class="flex flex-row justify-between">
                            <li class="hover:underline text-lg">
                                <a href="{{ route('posts.show', $post) }}"> {{$post->title}} </a> 
                            </li>

                            <x-danger-button 
                                class="mt-2 mx-12"
                                x-data
                                x-on:click.prevent="$dispatch('open-modal', { name: 'confirm-post-deletion', postId: {{ $post->id }} })"
                            >
                                Eliminar
                            </x-danger-button>
                        </div>
                    @endforeach
                </ul>
                <div class="-mt-6 p-5 font-medium">
                    {{$posts->links()}}
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <x-modal name="confirm-post-deletion" focusable>
        <form x-data="{ postUrl: '' }" x-init="
            document.addEventListener('open-modal', (event) => {
                if (event.detail.name === 'confirm-post-deletion') {
                    postUrl = `/posts/${event.detail.postId}`;
                    show = true;
                }
            });" 
            :action="postUrl" method="POST" class="p-6">
            @csrf
            @method('DELETE')

            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                ¿Está seguro de querer eliminar este post?
            </h2>

            <div class="mt-6 flex justify-end">
                <x-secondary-button x-on:click.prevent="$dispatch('close-modal', 'confirm-post-deletion')">
                    Cancelar
                </x-secondary-button>

                <x-danger-button class="ms-3">
                    Eliminar
                </x-danger-button>
            </div>
        </form>
    </x-modal>
</x-app-layout>
