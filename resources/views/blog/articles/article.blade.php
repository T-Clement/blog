<x-app-layout>

    <x-slot name="header">
        <div class="flex gap-10">

            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                <a href="{{ route("articles.index") }}">{{ __('Articles') }}</a>
            </h2>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                <a href="{{ route('dashboard') }}">{{ __('Write Article') }}</a>
            </h2>
        </div>
    </x-slot>



    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex flex-col gap-10 px-4">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
            
            
            <article class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mx-auto w-full max-w-2xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert px-10 py-10">
    
                <header class="mb-4 lg:mb-6 not-format">
                    <address class="flex items-center mb-6 not-italic">
                        <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                            <img class="mr-4 w-16 h-16 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="{{ $article->user->name }}">
                            <div>
                                <a href="#" rel="author" class="text-xl font-bold text-gray-900 dark:text-white"></a>
                                <p class="text-base text-gray-500 dark:text-gray-400"><span class='italic'>Placer la description de l'auteur ici</span></p>
                                <p class="text-base text-gray-500 dark:text-gray-400"><time pubdate datetime="2022-02-08" title="February 8th, 2022">Créé le : {{ $article->created_at }}</time></p>
                            </div>
                        </div>
                    </address>
                    <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">{{ $article->title }}</h1>
                </header>


                <div>
                    <p class='text-gray-900 dark:text-white'>{{ $article->content  }}</p>
                </div>

                

            
            </article>
        
        <div class=''>
            @if(auth()->user() == $article->user)
            <form>
                @csrf
                @method('delete')
                <button type='submit' class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Delete</button>
            </form>
            @endif
        </div>
        </div>
    
    
    </div>



</x-app-layout>