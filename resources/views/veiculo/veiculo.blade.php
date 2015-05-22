@extends('modelo')

@section('content')
    <br>
    <div class="col-md-10 col-md-offset-1" align="center">
        <!--local for message-->

        <div class="panel panel-default filterable">
            <!-- Default panel contents -->
            <div class="panel-heading"><h2>Lista de Veiculos</h2>
                <div class="pull-left">

                    <button type="button" class="btn btn-default btn-sm">
                        <span class="glyphicon glyphicon-list" aria-hidden="true"></span>
                    </button>

                    <a href="/outro"><button type="button" class="btn btn-default btn-sm">
                            <span class="glyphicon glyphicon-th" aria-hidden="true"></span>
                        </button></a>
                </div>

                <div class="pull-right">
                    <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filtrar resultado</button>
                </div>
            </div>
            <div class="panel-body">
                <table class="table table-striped table-hover" >
                    <thead>
                    <tr class="filters">
                        <th><input type="text" class="form-control" placeholder="Foto" disabled></th>
                        <th data-sortable="true"><input type="text" class="form-control" placeholder="Marca" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Matricula" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Ano de Fabrico" disabled></th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>

                    </thead>
                    <tbody>
                    @foreach($veiculos as $product)
                        <tr>
                            <td>
                                <a href="/editar_veiculo/{{$product->id}}">
                                    <img class="img-thumbnail" src="{{asset('img/veiculos').'/'.$product->foto}}" style="width:100px;height:75px">
                                </a>
                            </td>
                            <td><a href="/editar_veiculo/{{$product->id}}">{{$product->marca}} </a></td>
                            <td>{{$product->matricula}}</td>
                            <td>{{$product->ano_fabrico}}</td>

                            <td><a href="/editar_veiculo/{{$product->id}}" title="Editar os dados do veiculo {{$product->marca}}}!">
                                    <button type="button" class="btn btn-default btn-md">
                                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                    </button>
                                </a>
                            </td>
                            <td>
                                <a href="/remover_funcionario/{{$product->id}}" onclick="if(!confirm('Tens certesa que pretendes remover o funcionario?')){return false;};" title="Remover este funcionario!">
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
                <?php echo $veiculos->render(); ?>
            </div>

        </div>
    </div>
@endsection
