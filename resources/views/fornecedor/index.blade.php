<x-app-layout>

    <x-slot name="header">
        Todas as fornecedors
    </x-slot>

    @if(isset($fornecedor))

        <form action="{{route("fornecedor.create")}}">
            <x-button>
                Criar
            </x-button>
        </form>
        @foreach($fornecedor as $c)
            <div>
                {{$c->descricao}}

                <a href="{{route('fornecedor.edit', $c->id)}}">
                    Alterar
                </a>
                <form action="{{route('fornecedor.destroy', $c->id)}}" method="POST">
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
