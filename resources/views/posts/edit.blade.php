<x-app-layout>
    @csrf
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <h1 class="text-center text-2xl">Editar un Post</h1>

                    <form class="max-w-md mx-auto mt-6" autocomplete="off" action="{{route('posts.update', $post)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="relative z-0 w-full mb-5 group">
                            <input type="text" name="title" id="title"
                                class="block py-2.5 px-0 w-full text-lg text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none 
                                dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                value="{{$post->title}}" required />
                            <label for="title"
                                class=" peer-focus:font-medium absolute text-lg text-gray-500 dark:text-gray-400 duration-300 transform 
                                -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto 
                                peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                peer-focus:scale-75 peer-focus:-translate-y-6">
                                Titulo
                            </label>
                        </div>
                        <div class="relative z-0 w-full mb-5 group">
                            <input type="text" name="slug" id="slug" value="{{$post->slug}}"
                                class="block py-2.5 px-0 w-full text-lg text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none 
                                dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " required />
                            <label for="slug"
                                class=" peer-focus:font-medium absolute text-lg text-gray-500 dark:text-gray-400 duration-300 transform 
                                -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto 
                                peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                peer-focus:scale-75 peer-focus:-translate-y-6">
                                Slug
                            </label>
                        </div>
                        <div class="relative z-0 w-full mb-5 group">
                            <input type="text" name="category" id="category"
                                class="block py-2.5 px-0 w-full text-lg text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none 
                                dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                value="{{$post->category}}" required />
                            <label for="category"
                                class="peer-focus:font-medium absolute text-lg text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 
                                top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                Categoria
                            </label>
                        </div>
                        <div class="relative z-0 w-full mb-5 group">
                            <label class="block mb-2 text-lg font-medium text-gray-500 dark:text-gray-400">
                                Descripción
                                <textarea name="content" rows="6" class="mt-2 block p-2.5 w-full text-lg text-gray-900 bg-gray-50 rounded-lg border 
                                    border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 
                                    dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
                                    placeholder="Describe tu post">{{$post->content}}</textarea>
                            </label>
                        </div>
                        <x-primary-button class="mt-3">
                            Editar
                        </x-primary-button>
                    </form>                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

