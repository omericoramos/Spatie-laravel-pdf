            <x-app-layout>
                <div class="py-12">
                    
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div class="bg-white overflow-hidden rounded-sm shadow-sm">
                            <div class="w-1/2 p-4 mb-4 bg-green-200 text-green-900 rounded-sm">
                                <h2>O pdf foi criado e salvo na pasta storage/app/public</h2>
                            </div>
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
