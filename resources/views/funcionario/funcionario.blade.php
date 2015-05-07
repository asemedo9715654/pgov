@extends('modelo')

@section('content')
    <br>
    <div class="col-md-10 col-md-offset-1" align="center">
        <!--local for message-->

        <div class="panel panel-default filterable">
            <!-- Default panel contents -->
            <div class="panel-heading"><h2>Lista de Funcionarios</h2>
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
                         <th data-sortable="true"><input type="text" class="form-control" placeholder="Nome" disabled></th>
                         <th><input type="text" class="form-control" placeholder="Morada" disabled></th>
                         <th><input type="text" class="form-control" placeholder="Idade" disabled></th>
                         <th><input type="text" class="form-control" placeholder="Numero de Bi" disabled></th>
                         <th><input type="text" class="form-control" placeholder="Local de Trabalho" disabled></th>
                         <th><input type="text" class="form-control" placeholder="Matricula" disabled></th>
                         <th>Editar</th>
                         <th>Eliminar</th>
                     </tr>

                     <!--
                    <tr>
                        <th>Foto</th>
                        <th>Nome</th>
                        <th>Morada</th>
                        <th>Idaed</th>
                        <th>Nº de Bi</th>
                        <th>Local de trabalho</th>
                        <th>Matricula</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                    -->
                    </thead>
                    <tbody>
                    @foreach($funcionarios as $product)
                        <tr>
                            <td>
                                <a href="/editar_funcionario/{{$product->id}}">
                                <img class="img-thumbnail" src="{{asset('img/').'/'.$product->foto}}" style="width:100px;height:75px">
                            </a>
                            </td>
                            <td><a href="/editar_funcionario/{{$product->id}}">{{$product->nome}} </a></td>
                            <td>{{$product->morada}}</td>
                            <td>{{$product->idade}}</td>
                            <td>{{$product->bi}}</td>
                            <td>{{$product->local_de_trabalho}}</td>
                            <td>{{$product->matricula}}</td>
                            <td><a href="/editar_funcionario/{{$product->id}}" title="Editar os dados do {{$product->nome}}}!">
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
                <?php echo $funcionarios->render(); ?>
            </div>

        </div>
    </div>
@endsection
