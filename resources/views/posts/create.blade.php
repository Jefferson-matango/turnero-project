<x-app-layout>
    @csrf
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <h1 class="text-center text-2xl">Crear Post</h1>

                    <form class="max-w-xl mx-auto mt-6" autocomplete="off" action="{{route('posts.store')}}" method="POST">
                        @csrf
                        <div>
                            <x-input-label for="title" value="Titulo" />
                            <x-text-input id="title" name="title" type="text" class="mt-1 block w-full" required/>
                        </div>
                        
                        <div class="mt-3">
                            <x-input-label for="slug" value="Slug" />
                            <x-text-input id="slug" name="slug" type="text" class="mt-1 block w-full" />
                        </div>

                        <div class="mt-3">
                            <x-input-label for="category" value="Categoria" />
                            <x-text-input id="category" name="category" type="text" class="mt-1 block w-full" />
                        </div>

                        <div class="mt-3 mb-5">
                            <x-input-label for="content">
                                Descripción
                                <x-text-area id="content" name="content" rows="4" class="mt-1"></x-text-area>
                            </x-input-label>
                        </div>

                        <div class="mt-3 mb-3">
                            {{-- <div class="relative group">
                                <x-primary-button
                                    class="relative z-10 middle none center py-3 px-6
                                            transition-all hover:shadow-lg hover:shadow-pink-500/40 
                                            active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 
                                            disabled:shadow-none"
                                >
                                    Top Popover
                                </x-primary-button>
                                <div class="absolute top-0 group-hover:-top-[3rem] transition-all ease-in-out duration-500">
                                    <div
                                        class="z-0 w-max whitespace-normal break-words rounded-lg border border-blue-gray-50 bg-white   text-blue-gray-500 shadow-lg shadow-blue-gray-500/10 focus:outline-none">
                                        <h3 class="font-sans dark:text-gray-900 font-normal text-sm py-2 px-5">Ejemplo de lo que se puede poner en el popOver</h3>
                                    </div>
                                </div>
                            </div> --}}
                        </div>

                        <x-primary-button>
                            Guardar
                        </x-primary-button>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

