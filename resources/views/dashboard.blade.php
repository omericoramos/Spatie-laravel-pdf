<x-app-layout>
    <x-slot name="header">
        <nav>
            <ul class="flex flex-wrap">
                <li><a href="{{ route('generatePdfView') }}" target="_blank">Visualizar pdf</a></li>
                <li><a href="{{ route('generatePdfSaveToStorage') }}">Salvar pdf na pasta storage</a></li>
                <li></li>
                <li></li>
            </ul>
        </nav>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
