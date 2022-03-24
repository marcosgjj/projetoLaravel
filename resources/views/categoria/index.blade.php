<x-app-layout>
    <x-slot name="header">
        Todas as categorias
    </x-slot>

       @if(isset($categoria))
        @foreach($categoria as $c)
            <div>

                {{$c->descricao}}
            </div>
        @endforeach
       @endif

</x-app-layout>
