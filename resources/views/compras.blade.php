<x-app-layout>
    <x-slot name="header">
        Carrinho de Compras
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-700 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-gray-300 border-b border-gray-200">
                    @if($produtos != null)
                        <div class="flex items-center mt-4 mb-10">
                            <a class="text-gray-900 hover:text-white border border-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800"
                               href="{{ route('finalizar')}}">Finalizar Compra</a>
                        </div>
                    @endif
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Produto
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Quantidade
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Local
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Preço
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Fornecedor
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Categoria
                                </th>
                                <th scope="col" class="px-6 py-3">

                                </th>
                            </tr>
                            </thead>
                            <tbody>

                            @if($produtos != null)
{{--                                @for($i = 0; $count >= 0 ;$count++ && $soma+=$produtos->preco)--}}
                                    @foreach($produtos as $p)
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                            {{$p->nome}}
                                        </th>
                                        <td class="px-6 py-4">

                                        </td>
                                        <td class="px-6 py-4">
                                            {{$p->local}}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{$p->preco}}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{$p->fornecedor->razao_social}}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{$p->categoria->descricao}}
                                        </td>
                                        <td class="px-6 py-4 text-right">
                                            <a class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-700 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 ml-3"
                                               href="{{ route('remover', $p->id)}}">Remover</a>
                                        </td>
                                    </tr>
                                    @endforeach
                            @else
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap"
                                        colspan="7">
                                        Carrinho de compras vazio!
                                    </th>

                                </tr>
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
