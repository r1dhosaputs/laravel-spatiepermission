<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-red-300 leading-tight">
            {{ __('Errors') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-red-300 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-white text-2xl font-bold text-center">
                    {{ $exception }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
