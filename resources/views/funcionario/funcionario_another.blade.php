@extends('modelo')

@section('content')
    <br>
    <div class="col-md-10 col-md-offset-1" >
        <!--local for message-->
        <div class="panel panel-default">
            <!-- Default panel contents -->
            <div class="panel-heading"><h2>Lista de Funcionarios</h2>

                <div class="pull-right">

                    <a href="/lista_de_funcionario"><button type="button" class="btn btn-default btn-sm">
                            <span class="glyphicon glyphicon-list" aria-hidden="true"></span>
                        </button></a>

                    <a href="/outro"><button type="button" class="btn btn-default btn-sm">
                            <span class="glyphicon glyphicon-th" aria-hidden="true"></span>
                        </button></a>
                </div>
            </div>
            <div class="panel-body">
                <!-- work group -->
                <div class="list-group">

                    @foreach($funcionarios as $product)
                        <div class="col-lg-6">

                            <div class="list-group-item">
                                <div class="row-picture">
                                    <img class="circle" src="{{asset('img/').'/'.$product->foto}}" alt="icon">
                                </div>
                                <div class="row-content">
                                    <div class="least-content">Idade: {{$product->idade}}</div>
                                    <h4 class="list-group-item-heading">Nome: {{$product->nome}}</h4>
                                    <p class="list-group-item-text">
                                        Morada :{{$product->morada}}</br>
                                        Istituição : {{$product->local_de_trabalho}}

                                    </p>
                                </div>
                            </div>
                            <div class="list-group-separator"></div>

                        </div>


                    @endforeach
                </div>
                <!-- work group end-->
            </div>
        </div>
    </div>
@endsection