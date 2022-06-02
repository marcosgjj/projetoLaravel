<x-app-layout>
    <x-slot name="header">
        <h1>
            Todas os Fornecedores
        </h1>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-300 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-gray-100 border-b">
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Nome Fantasia
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    CNPJ
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Telefone
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Cidade
                                </th>
                                <th scope="col" class="px-6 py-3">

                                </th>

                            </tr>
                            </thead>
                            @foreach($fornecedores as $f)
                                <tbody>
                                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-500 dark:text-white whitespace-nowrap">
                                        {{$f->nomeFantasia}}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{$f->cnpj}}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{$f->telefone}}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{$f->cidade}}
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500 text-sm leading-5 text-right ">
                                        <form action="{{route('fornecedor.destroy', $f->id)}}" method="POST">
                                            <a class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-700 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 ml-3"
                                               href="{{ route('fornecedor.edit', $f->id)}}">
                                                Alterar
                                            </a>
                                            @csrf
                                            @method("DELETE")
                                            <button
                                                class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-700 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 ml-3">
                                                Excluir
                                            </button>
                                        </form>

                                </tr>
                                </tbody>
                            @endforeach

                        </table>
                        <div class="flex items-center mt-4 mb-10">
                            <a class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-700 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 ml-3"
                               href="{{ route('fornecedor.create')}}">Novo Registro</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
