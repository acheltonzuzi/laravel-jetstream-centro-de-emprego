<div class="p-10">
    <h1 class="text-4xl">Usuários</h1>
    <hr>
    @livewire('graficos')
    <div>
        <a href="{{route("cadastrar")}}" class="shadow py-2 px-4 bg-blue-500 text-white rounded-lg m-4 hover:bg-blue-400 hover:shadow-lg">Novo
            Usuário</a>

    </div>
    <div id="tabela" class="mt-5">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Nome
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Província
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Telefone
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Sexo
                        </th>


                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">Detalhe</span>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">Deletar</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($usuarios as $usuario)
                        <tr class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                {{ $usuario->nome }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $usuario->provincia }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $usuario->telefone }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $usuario->sexo }}
                            </td>

                            <td class="px-6 py-4 text-right">
                                <a href="#"
                                    class="font-medium text-green-600 dark:text-green-500 hover:underline">Detalhe</a>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <a href="#"
                                    class="font-medium text-red-600 dark:text-red-500 hover:underline">Deletar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $usuarios->links() }}
        </div>

    </div>
</div>
