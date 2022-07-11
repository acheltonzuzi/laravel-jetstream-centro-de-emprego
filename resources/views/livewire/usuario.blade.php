<div class="p-10 bg-white">
    @if (Session()->has("apagar"))
    <div class="flex p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800"
        role="alert">
        <svg class="inline flex-shrink-0 mr-3 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                clip-rule="evenodd"></path>
        </svg>
        <div>
            <span class="font-medium">Danger alert!</span> Change a few things up and try submitting again.
        </div>  m
    </div>
    @endif
    <form wire:submit.prevent='cadastrar'>
        <div class="mb-2">
            <label for="nome" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                Nome</label>
            <input type="text" id="nome" wire:model='nome'
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="escreva seu nome" required>
        </div>
        <div class="mb-2">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                Email</label>
            <input type="email" id="email" wire:model='email'
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="name@flowbite.com" required>
        </div>
        <div class="mb-2">
            <label for="senha" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                Senha</label>
            <input type="password" id="senha" wire:model='senha'
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="escreva sua senha" required>
        </div>
        <button href="{{ route('cadastrar') }}"
            class="shadow py-2 px-4 bg-blue-500 text-white rounded-lg  hover:bg-blue-400 hover:shadow-lg">Novo
            Usuário</button>
    </form>
    <div id="tabela" class="mt-5">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Nome
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Email
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
                                {{ $usuario->name }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $usuario->email }}
                            </td>
                            <td class="px-6 py-4 text-right">

                                <a wire:click.prevent='apagar({{ $usuario->id }})' href="#"
                                    class="font-medium text-red-600 dark:text-red-500 hover:underline">Deletar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>

</div>
