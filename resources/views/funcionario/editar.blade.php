@extends('modelo')

@section('content')
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <!-- Default panel contents -->
            <div class="panel-heading">
                <h2>Editar funcionario</h2>
            </div>

            <div class="panel-body">

                {!! Form::model($funcionario,array('url' => '/editar_funcionario/'.$funcionario->id, 'method'=>'PATCH','files'=>true))  !!}
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group {{$errors->has('nome')?'has-error':''}}">
                            {!! Form::label('nome','Nome :')!!}
                            {!! Form::text('nome',null,['class'=>'form-control'])!!}
                            <span class="help-block">{{$errors->first('nome')}}</span>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group {{$errors->has('idade')?'has-error':''}}">
                            {!! Form::label('idade','Idade :')!!}
                            {!! Form::text('idade',null,['class'=>'form-control'])!!}
                            {!! $errors->first('idade','<span class="help-block">:message</span>')!!}
                        </div>
                    </div>
                </div>
                <div class="form-group  {{$errors->has('foto')?'has-error':''}}">
                    {!! Form::label('foto','Foto :')!!}
                    {!! Form::file('foto',['class'=>'form-control']) !!}
                    {!! $errors->first('foto','<span class="help-block">:message</span>')!!}
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group {{$errors->has('morada')?'has-error':''}}">
                            {!! Form::label('morada','Morada :')!!}
                            {!! Form::text('morada',null,['class'=>'form-control'])!!}
                            {!! $errors->first('morada','<span class="help-block">:message</span>')!!}
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group {{$errors->has('bi')?'has-error':''}}">
                            {!! Form::label('bi','Numerdo Bi :')!!}
                            {!! Form::text('bi',null,['class'=>'form-control'])!!}
                            {!! $errors->first('bi','<span class="help-block">:message</span>')!!}
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group {{$errors->has('local_de_trabalho')?'has-error':''}}">
                            {!! Form::label('local_de_trabalho','Local do trabalho :')!!}
                            {!! Form::text('local_de_trabalho',null,['class'=>'form-control'])!!}
                            {!! $errors->first('local_de_trabalho','<span class="help-block">:message</span>')!!}
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group {{$errors->has('matricula')?'has-error':''}}">
                            {!! Form::label('matricula','Matricula do automóvel :')!!}
                            {!! Form::text('matricula',null,['class'=>'form-control'])!!}
                            {!! $errors->first('matricula','<span class="help-block">:message</span>')!!}
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group {{$errors->has('autorizacao')?'has-error':''}}">
                            {!! Form::label('autorizacao','Autorização de entrada :')!!}
                            {!! Form::checkbox('autorizacao',1,null,['class'=>'checkbox'])!!}
                            {!! $errors->first('autorizacao','<span class="help-block">:message</span>')!!}
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
