<x-app-layout>
    <x-slot name="header">
        Editar Funcionario
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{route('funcionario.update', $funcionario->id)}}" method="post">
                        @csrf
                        @method("PATCH")
                        <div>
                            <x-label>Informe o nome:</x-label>
                            <x-input name="nome" value="{{$funcionario->nome}}" class="block mt-1 w-full"/>
                        </div>
                        <div>
                            <x-label>CPF:</x-label>
                            <x-input name="cpf" value="{{$funcionario->cpf}}" class="block mt-1 w-full"/>
                        </div>
                        <div>
                            <x-label>Telefone:</x-label>
                            <x-input name="telefone" value="{{$funcionario->telefone}}" class="block mt-1 w-full"/>
                        </div>
                        <div>
                            <x-label>Endereço:</x-label>
                            <x-input name="endereco" value="{{$funcionario->endereco}}" class="block mt-1 w-full"/>
                        </div>
                        <div class="mt-5">
                            <x-button>Alterar</x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


</x-app-layout>

