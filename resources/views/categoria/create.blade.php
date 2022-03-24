<x-app-layout>
    <x-slot name="header">
        Categorias
    </x-slot>
    <div class="sm:ml-10 p-5 bg-green border-gray-300 max-w-7xl">
    <form action="{{route('categoria.store')}}" method="post">
        @csrf
        <div>
            <x-label>Informe a descrição:</x-label>
            <x-input name="descricao" class="block mt-1 w-full"/>
        </div>
        <div class="mt-5">
            <x-button>Salvar</x-button>
        </div>
    </form>
    </div>
</x-app-layout>
