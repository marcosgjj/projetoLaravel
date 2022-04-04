<x-app-layout>
    <x-slot name="header">
        Editar Produto
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{route('produto.update', $produto->id)}}" method="post">
                        @csrf
                        @method("PATCH")
                        <div>
                            <x-label>Informe a descrição:</x-label>
                            <x-input name="nome" value="{{$produto->nome}}" class="block mt-1 w-full"/>
                        </div>
                        <div>
                            <x-label>Preço:</x-label>
                            <x-input name="preco" value="{{$produto->preco}}" class="block mt-1 w-full"/>
                        </div>
                        <div>
                            <x-label>Estoque:</x-label>
                            <x-input name="local" value="{{$produto->local}}" class="block mt-1 w-full"/>
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

