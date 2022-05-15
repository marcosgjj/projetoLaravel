<x-app-layout>
    <x-slot name="header">
        <h1>Fornecedores</h1>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{route('fornecedor.store')}}" method="post">
                        @csrf
                        <div>
                            <x-label>Nome Fantasia:</x-label>
                            <x-input name="nomeFantasia" class="block mt-1 w-full"/>
                        </div>
                        <div>
                            <x-label>Razão Social:</x-label>
                            <x-input name="razao_social" class="block mt-1 w-full"/>
                        </div>
                        <div>
                            <x-label>CNPJ:</x-label>
                            <x-input name="cnpj" class="block mt-1 w-full"/>
                        </div>
                        <div>
                            <x-label>Telefone:</x-label>
                            <x-input name="telefone" class="block mt-1 w-full"/>
                        </div>
                        <div>
                            <x-label>Nome do contato:</x-label>
                            <x-input name="contato" class="block mt-1 w-full"/>
                        </div>
                        <div>
                            <x-label>Endereço:</x-label>
                            <x-input name="endereco" class="block mt-1 w-full"/>
                        </div>
                        <div>
                            <x-label>Bairro:</x-label>
                            <x-input name="bairro" class="block mt-1 w-full"/>
                        </div>
                        <div>
                            <x-label>Cidade:</x-label>
                            <x-input name="cidade" class="block mt-1 w-full"/>
                        </div>
                        <div>
                            <x-label>CEP:</x-label>
                            <x-input name="cep" class="block mt-1 w-full"/>
                        </div>
                        <div class="mt-5">
                            <x-button>Salvar</x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


</x-app-layout>
