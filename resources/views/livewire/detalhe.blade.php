<div>

    <div class="p-10 rounded-md bg-white m-10 shadow-lg bg-slate-900">
        <div class="flex justify-around items-center">
            <div class="flex flex-col items-center">
                <div class="p-4 bg-gray-700 rounded-full border-8">
                    <svg class="w-32" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
                <h2 class="font-bold text-2xl text-gray-200 uppercase mt-2">{{ $user->nome }}</h2>
            </div>
        </div>
    </div>
    <div class="p-10 rounded-md bg-white m-10 shadow-lg">
        <div class="grid grid-cols-2 md:grid-cols-3  text-center">
            <div class="mb-10">
                <h3 class="font-bold text-slate-700">BI / Passaporte</h3>
                <p>{{ $user->bi }}</p>
            </div>
            <div class="mb-10">
                <h3 class="font-bold text-slate-700">Gênero</h3>
                <p>{{ $user->sexo }}</p>
            </div>
            <div class="mb-10">
                <h3 class="font-bold text-slate-700">Nacionalidade</h3>
                <p>{{ $user->nacionalidade }}</p>
            </div>
            <div class="mb-10">
                <h3 class="font-bold text-slate-700">Data de Nascimento</h3>
                <p>{{ $user->nascimento }}</p>
            </div>
            <div class="mb-10">
                <h3 class="font-bold text-slate-700">Província</h3>
                <p>{{ ucfirst($user->provincia) }}</p>
            </div>
            <div class="mb-10">
                <h3 class="font-bold text-slate-700">Cidade Actual</h3>
                <p>{{ $user->cidade }}</p>
            </div>
            <div class="mb-10">
                <h3 class="font-bold text-slate-700">Bairro</h3>
                <p>{{ $user->bairro }}</p>
            </div>
            <div class="mb-10">
                <h3 class="font-bold text-slate-700">Telefone</h3>
                <p>{{ $user->telefone }}</p>
            </div>
            <div class="mb-10">
                <h3 class="font-bold text-slate-700">Email</h3>
                <p>{{ $user->email }}</p>
            </div>
            <div class="mb-10 ">
                <h3 class="font-bold text-slate-700">Currículo</h3>
                <a href=""wire:click.prevent="download({{ $user->id }})"
                    class="flex flex-col justify-center items-center hover:text-blue-700">
                    <img src="/pdf.jpg" alt="sem imagem" srcset="" class="w-32">
                    <p>{{ $user->cv }}</p>
                </a>

            </div>
        </div>
    </div>
</div>
