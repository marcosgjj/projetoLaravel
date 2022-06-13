<x-app-layout>
    <x-slot name="header">
        Editar Categoria
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-400 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-gray-100 border-b">
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">


                    <form action="{{route('categoria.update', $categoria->id)}}" method="post">
                        @csrf
                        @method("PATCH")
                        <div class="p-4 text-2xl">
                            <x-label>Alterar descrição:</x-label>
                            <x-input name="descricao" value="{{$categoria->descricao}}" class="mr-5 mt-1 w-50%"/>
                            <x-button>Salvar</x-button>
                        </div>



                    </form>

                </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>

