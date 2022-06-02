<x-app-layout>
    <x-slot name="header">
        <h1> Editar Fornecedor </h1>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{route('fornecedor.update', $fornecedor->id)}}" method="post">
                        @csrf
                        @method("PATCH")
                        <div>
                            <x-label>Alterar nome fantasia:</x-label>
                            <x-input name="descricao" value="{{$fornecedor->nomeFantasia}}" class="block mt-1 w-full"/>
                        </div>
                        <div>
                            <x-label>CNPJ:</x-label>
                            <x-input name="cnpj" value="{{$fornecedor->cnpj}}"
                                     class="block mt-1 w-full" disabled/>
                        </div>
                        <div>
                            <x-label>Razão Social:</x-label>
                            <x-input name="nomeEmpresa" value="{{$fornecedor->razao_social}}"
                                     class="block mt-1 w-full" disabled/>
                        </div>
                        <div>
                            <x-label>Cidade:</x-label>
                            <x-input name="cidade" value="{{$fornecedor->cidade}}"
                                     class="block mt-1 w-full"/>
                        </div>
                        <div>
                            <x-label>Telefone:</x-label>
                            <x-input name="telefone" value="{{$fornecedor->telefone}}"
                                     class="block mt-1 w-full"/>
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

