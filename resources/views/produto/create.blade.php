<x-app-layout>
    <x-slot name="header">
        Produtos
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{route('produto.store')}}" method="post">
                        @csrf
                        <div>
                            <x-label>Informe o nome:</x-label>
                            <x-input name="nome" class="block mt-1 w-full"/>
                        </div>
                        <div>
                            <x-label>Preço:</x-label>
                            <x-input name="preco" class="block mt-1 w-full"/>
                        </div>
                        <div>
                            <x-label>Local de estoque:</x-label>
                            <x-input name="local" class="block mt-1 w-full"/>
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
