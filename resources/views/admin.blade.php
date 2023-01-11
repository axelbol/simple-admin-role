<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-lime-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-blue-400">
                    {{ __("You're in the admin page! Only admins can see this page.") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
