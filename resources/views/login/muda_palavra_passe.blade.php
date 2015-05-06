@extends('modelo')

@section('content')
    <br>

    <div class="col-md-10 col-md-offset-1">

        <div class="panel panel-default">
            <!-- Default panel contents -->
            <div class="panel-heading">

                <h2>Mudar palavra passe</h2>

            </div>
            <div class="panel-body">

                {!! Form::open(array('url' => '/mudar_palavra_passe', 'method'=>'PATCH','files'=>true))  !!}

                <div class="form-group  {{$errors->has('foto')?'has-error':''}}">
                    {!! Form::label('foto','Palavra passe actual :')!!}
                    <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>
                    {!! $errors->first('foto','<span class="help-block">:message</span>')!!}
                </div>


                <div class="form-group  {{$errors->has('foto')?'has-error':''}}">
                    {!! Form::label('foto','Nova palavra passe :')!!}
                    <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>
                    {!! $errors->first('foto','<span class="help-block">:message</span>')!!}
                </div>

                <div class="form-group  {{$errors->has('foto')?'has-error':''}}">
                    {!! Form::label('foto','Confirme a nova palavra passe :')!!}
                    <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>
                    {!! $errors->first('foto','<span class="help-block">:message</span>')!!}
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