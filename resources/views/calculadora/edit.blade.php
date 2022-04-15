<x-app-layout>
    <x-slot name="header">
        Calculadora
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{route('calculadora.update', $calculadora->id)}}" method="post">
                        @csrf
                        @method("PATCH")
                        <div>
                            <x-label>Informe o primeiro valor:</x-label>
                            <x-input name="v1" value="{{$calculadora->v1}}" class="block mt-1 w-full"/>
                        </div>
                        <div>
                            <x-label>Informe o segundo valor:</x-label>
                            <x-input name="v2" value="{{$calculadora->v2}}" class="block mt-1 w-full"/>
                        </div>
                        <div>
                            <x-label>Informe o operador:</x-label>
                            <x-input name="op" value="{{$calculadora->op}}" class="block mt-1 w-full"/>
                        </div>
                        <div>
                            <x-label>Resultado:</x-label>
                            <x-input name="r" value="{{$calculadora->r}}" value="0" class="block mt-1 w-full"/>
                        </div>
                        <div class="mt-5">
                            <x-button>Calcular</x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


</x-app-layout>

