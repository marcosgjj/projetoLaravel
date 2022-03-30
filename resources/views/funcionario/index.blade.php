<x-app-layout>

    <x-slot name="header">
        Todas as funcionarios
    </x-slot>

    @if(isset($funcionario))

        <form action="{{route("funcionario.create")}}">
            <x-button>
                Criar
            </x-button>
        </form>
        @foreach($funcionario as $f)
            <div>
                {{$f->descricao}}

                <a href="{{route('funcionario.edit', $f->id)}}">
                    Alterar
                </a>
                <form action="{{route('funcionario.destroy', $f->id)}}" method="POST">
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
