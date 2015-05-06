@extends('modelo')

@section('content')
    <br>
    <div class="col-md-10 col-md-offset-1" align="center">
        <!--local for message-->
        <div class="table-responsive">
            <div class="panel panel-default filterable">
                <!-- Default panel contents -->
                <div class="panel-heading">Entradas de veiculos
                    <div class="pull-right">
                        <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filtrar resultado</button>
                    </div>
                </div>
                <table class="table " data-sort-name="name" data-sort-order="desc">
                    <thead>
                    <tr class="filters">
                        <th><input type="text" class="form-control" placeholder="Nome" disabled></th>
                        <th data-sortable="true"><input type="text" class="form-control" placeholder="Hora de entrada" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Hora de saida" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Data" disabled></th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($entradas_e_saidas as $product)
                        <tr>

                            <td>{{$product->nome}}</td>
                            <td>{{$product->hora_de_entrada}}</td>
                            <td>{{$product->hora_de_saida}}</td>
                            <td>{{$product->dia_do_registro}}</td>
                            <td><a href="/editar_funcionario/{{$product->id}}" title="Editar este producto!">
                                    <button type="button" class="btn btn-default btn-md">
                                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                    </button>
                                </a>
                            </td>
                            <td>
                                <a href="/remover_funcionario/{{$product->id}}" onclick="if(!confirm('Tens certesa que pretendes remover o produto?')){return false;};" title="Remover este producto!">
                                    <button type="button" class="btn btn-default btn-md">
                                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                    </button>
                                </a>
                            </td>
                        </tr>

                    @endforeach
                    </tbody>
                </table>
                <!-- para mostrar algo de trocar a paginação-->
                <?php echo $entradas_e_saidas->render(); ?>
            </div>
        </div>
    </div>
@endsection