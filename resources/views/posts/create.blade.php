<x-app-layout>
    @csrf
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <h1 class="text-center text-2xl">Crear Post</h1>

                    <form class="max-w-xl mx-auto mt-6" autocomplete="off" action="{{route('posts.store')}}" method="POST">
                        @csrf

                        <div >
                            <x-input-label for="title" value="{{ __('Titulo') }}" />
                            <x-text-input id="title" name="title" type="text" class="mt-1 block w-full" value="{{old('title')}}"/>
                            <x-input-error :messages="$errors->createPost->get('title')" class="mt-2" />
                        </div>

                        <div class="mt-3 ">
                            <x-input-label for="slug" value="Slug" />
                            <x-text-input id="slug" name="slug" type="text" class="mt-1 block w-full" value="{{old('slug')}}"/>
                            <x-input-error :messages="$errors->createPost->get('slug')" class="mt-2" />
                        </div>

                        <div class="mt-3 ">
                            <x-input-label for="category" value="Categoria" />
                            <x-text-input id="category" name="category" type="text" class="mt-1 block w-full" value="{{old('category')}}"/>
                            <x-input-error :messages="$errors->createPost->get('category')" class="mt-2" />
                        </div>

                        <div class="mt-3 mb-5 ">
                            <x-input-label for="content">
                                Descripción
                                <x-text-area id="content" name="content" rows="4" class="mt-1">{{old('content')}}</x-text-area>
                            </x-input-label>
                            <x-input-error :messages="$errors->createPost->get('content')" class="mt-2" />
                        </div>
                        
                        <x-primary-button data-popover-target="popover-default">
                            Guardar
                        </x-primary-button>
                        <x-popover id="popover-default">
                            <x-slot name="title">Titulo del popover!!</x-slot>
                            Cuerpo del popover!!!
                        </x-popover>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

