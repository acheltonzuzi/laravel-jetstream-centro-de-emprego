<div>

    @livewire('menu')
    <div class="jumbotron jumbotron-fluid mb-5">
        <div class="container text-center py-5">
            <h1 class="text-white display-3">Cadastrar</h1>
        </div>
    </div>
    <div class="md:p-10">
        <div class="md:m-5 rounded-lg border p-5">

            <form enctype="multipart/form-data" wire:submit.prevent='cadastrar'>
                <div class="mb-6">
                    <label for="nome" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                        Nome</label>
                    <input wire:model="nome" type="text" id="nome"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                        placeholder="escreva seu nome aqui" required="">
                </div>
                <div class="md:flex gap-2">
                    <div class="mb-6 w-full">
                        <label for="sexo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                            Sexo</label>
                        <select wire:model="sexo" type="text" id="sexo"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                            required="">
                            <option value="">Selecione o gênero</option>
                            <option value="Masculino">Masculino</option>
                            <option value="Femenino">Femenino</option>
                        </select>
                    </div>
                    <div class="mb-6 w-full">
                        <label for="nacionalidade"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                            Nacionalidade</label>
                        <input wire:model="nacionalidade" type="text" id="nacionalidade"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                            required="">
                    </div>
                    <div class="mb-6 w-full">
                        <label for="nascimento" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                            Data de Nascimento</label>
                        <input wire:model="nascimento" type="date" id="nascimento"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                            required="">
                    </div>

                </div>
                <div class="md:flex gap-2">
                    <div class="mb-6 w-full">
                        <label for="bi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                            Número do BI / Passaporte</label>
                        <input wire:model="bi" type="text" id="bi"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                            required="">
                    </div>
                    <div class="mb-6 w-full">
                        <label for="provincia" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                            Província</label>

                        <select wire:model="provincia" id="provincia" name=""
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light">
                            <option value="">Selecione a sua província</option>
                            @foreach ($provincias as $item)
                                <option value="{{ $item }}" wire:change=''>{{ ucfirst($item) }}</option>
                            @endforeach
                        </select>

                    </div>
                </div>
                <div class="md:flex gap-2">
                    <div class="mb-6 w-full">
                        <label for="cidade" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                            Cidade</label>
                        <input wire:model="cidade" type="text" id="cidade"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                            required="">
                    </div>
                    <div class="mb-6 w-full">
                        <label for="bairro" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                            Bairro</label>
                        <input wire:model="bairro" type="text" id="bairro"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                            required="">
                    </div>

                </div>
                <div class="md:flex gap-2">
                    <div class="mb-6 w-full">
                        <label for="telefone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                            Telefone</label>
                        <input wire:model="telefone" type="text" id="telefone"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                            required="">
                    </div>
                    <div class="mb-6 w-full">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                            Email</label>
                        <input wire:model="email" type="text" id="email"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                            required="">
                    </div>

                </div>
                <div class="mb-6">

                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                        for="file_input">Carrega o seu CV</label>
                    <input wire:model="cvpdf"
                        class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        aria-describedby="file_input_help" id="file_input" type="file" required>
                    @if (Session()->has('extensao'))
                        <p class="mt-1 text-sm text-red-500 dark:text-gray-300" id="file_input_help">
                            {{Session("extensao")}}
                        </p>
                    @endif

                </div>


                <button type="submit"
                    class="text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Cadastrar
                </button>
            </form>

        </div>

    </div>

</div>
