@extends('modelo')

@section('content')
    <div class="col-md-10 col-md-offset-1">

        <div class="panel panel-default">
            <!-- Default panel contents -->
            <div class="panel-heading">

                <h3>Editar veiculo</h3>

            </div>


            <div class="panel-body">
                {!! Form::model($veiculo,array('url' => '/editar_veiculo_db/'.$veiculo->id, 'method'=>'PATCH','files'=>true))  !!}
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group {{$errors->has('nome')?'has-error':''}}">
                            {!! Form::label('marca','Marca :')!!}
                            {!! Form::text('marca',null,['class'=>'form-control'])!!}
                            <span class="help-block">{{$errors->first('nome')}}</span>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group  {{$errors->has('foto')?'has-error':''}}">
                            {!! Form::label('foto','Foto :')!!}
                            {!! Form::file('foto',['class'=>'form-control']) !!}
                            {!! $errors->first('foto','<span class="help-block">:message</span>')!!}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group {{$errors->has('matricula')?'has-error':''}}">
                            {!! Form::label('matricula','Matricula :')!!}
                            {!! Form::text('matricula',null,['class'=>'form-control'])!!}
                            {!! $errors->first('matricula','<span class="help-block">:message</span>')!!}
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group {{$errors->has('ano_fabrico')?'has-error':''}}">
                            {!! Form::label('ano_fabrico','Ano de Fabrico :')!!}
                            {!! Form::text('ano_fabrico',null,['class'=>'form-control'])!!}
                            {!! $errors->first('ano_fabrico','<span class="help-block">:message</span>')!!}
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::reset('Limpar', ['class' => 'btn btn-primary']) !!}
                    <input type="submit" class="btn btn-primary"  value="Guardar">

                </div>
                {!! Form::close() !!}

            </div>
        </div>
    </div>
@endsection
