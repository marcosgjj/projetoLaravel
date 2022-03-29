<x-app-layout>

    <x-slot name="header">
        Todas as produtos
    </x-slot>

    @if(isset($produto))

        <form action="{{route("produto.create")}}">
            <x-button>
                Criar
            </x-button>
        </form>
        @foreach($produto as $c)
            <div>
                {{$c->descricao}}

                <a href="{{route('produto.edit', $c->id)}}">
                    Alterar
                </a>
                <form action="{{route('produto.destroy', $c->id)}}" method="POST">
                    @csrf
                    @Method("DELETE")
                    <div class="mt-5">
                        <x-button>Excluir</x-button>
                    </div>
                </form>
            </div>
        @endforeach
    @endif

</x-app-layout>
