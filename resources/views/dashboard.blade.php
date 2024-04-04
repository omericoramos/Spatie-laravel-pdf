<x-app-layout>
    <x-slot name="header">
        <nav>
            <ul class="flex flex-wrap">
                <li><a href="{{ route('generatePdfView') }}" target="_blank">Visualizar pdf</a></li>
                <li><a href="{{ route('generatePdfSaveToStorage') }}">Salvar pdf na pasta storage</a></li>
                <li><a href="{{ route('generatePdfAndDownload') }}">Baixar pdf da lista</a></li>
            </ul>
        </nav>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-auto shadow-sm sm:rounded-lg h-[45rem]">
                <div class="p-6 text-gray-900">
                    <table class="w-full">
                        <thead>
                            <tr class="dark:text-slate-400  text-lg my-2">
                                <th class="text-left pr-8">id</th>
                                <th class="text-left">name</th>
                                <th class="text-left">email</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr class="dark:text-slate-500 text-lg border-b border-solid">
                                    <td class="p-2 py-4">{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
