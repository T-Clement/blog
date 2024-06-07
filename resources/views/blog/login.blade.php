<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight bg-white text-white dark:bg-gray-800">
            {{ __('Login') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                   {{__('Connectez vous pour accéder au blog !')}}
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>