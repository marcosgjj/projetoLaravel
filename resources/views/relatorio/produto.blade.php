<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="crsf-token" content="{{csrf_token()}}"/>

<title>Relatorio de Produtos</title>
    @if(session("resposta"))
        {{session("resposta")}}
    @endif
<style>
    body{
        font-family: 'lato', sans-serif;
    }
    .container{
        max-width:1000px;
        margin-left: auto;
        margin-right: auto;
        padding-left: 10px;
        padding-right: 10px;
    }
    .table-header{
        background-color: #95A5A6;
        font-size: 14px;
        text-transform: uppercase;
        letter-spacing: 0.03em;
    }
    .col{
        text-align: center;
    }
</style>
</head>


<body>
    <table  class="container" width="100%">
        <thead class="table-header">
            <tr>
                <th colspan="5">
                    Lista de Produtos
                </th>
            </tr>
            <tr>
                <th>Nome</th>
                <th>Preço R$</th>
                <th>Local</th>
                <th>Fornecedor</th>
                <th>Categoria</th>

            </tr>

        </thead>
        <tbody>
            @foreach($produtos as $p)
                <tr>
                    <td class="col">{{$p->nome}}</td>
                    <td class="col">{{$p->preco}}</td>
                    <td class="col">{{$p->local}}</td>
                    <td class="col">{{$p->fornecedor->id}}</td>
                    <td class="col">{{$p->categoria->id}}</td>

                </tr>
            @endforeach
        </tbody>


    </table>



</body>
