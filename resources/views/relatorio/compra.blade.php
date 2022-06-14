<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="crsf-token" content="{{csrf_token()}}"/>

<title>Relatorio de Compras</title>
    @if(session("resposta"))
        {{session("resposta")}}
    @endif

</head>
<body>
    <table  class="container" width="100%">
        <thead class="table-header">
            <tr>
                <th colspan="2">
                    Lista de compras
                </th>
            </tr>
            <tr>
                <th>X</th>
                <th>X2</th>
                <th>X3</th>
                <th>X4</th>

            </tr>

        </thead>
        <tbody>
            @foreach($compras as $c)
                <tr>
                    <td class="col">{{$c->user_id}}</td>
                    <td class="col">{{$c->status}}</td>
                    <td class="col">{{$c->produto_id}}</td>
                    <td class="col">{{$c->compra_produto->quantidade}}</td>

                </tr>
            @endforeach
        </tbody>


    </table>



</body>
