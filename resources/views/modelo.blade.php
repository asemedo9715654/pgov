<!DOCTYPE html>
<html>
<head>
    <title>  </title>
    <link href="{{ asset('/css/modelo.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link href="{{ asset('/css/bootstrap/bootstrap-lightbox.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/filter.css') }}" rel="stylesheet">

    <link href="{{ asset('/css/costum/navbar.css') }}" rel="stylesheet">

    <!-- Material bigine here

    <link href="{{ asset('/css/material-bootstrap/material.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/material-bootstrap/material-fullpalette.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/material-bootstrap/ripples.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/material-bootstrap/roboto.css') }}" rel="stylesheet">-->

    <!-- Material end here -->

</head>
<body>
<div id="header">
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid col-md-10 col-md-offset-1">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/lista_de_funcionario">PGov</a>
                <!--<img alt="Brand" src="...">-->
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <!--<li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>-->
                    <!--<li><a href="/adicionar">Adicionar</a></li>-->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Funcionario <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">

                            <li><a href="/lista_de_funcionario">Lista de funcinarios</a></li>
                            <li><a href="/adicionar">Adicionar funcionarios</a></li>


                        </ul>
                    </li>
                    <!--New abordagem -->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Entradas <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="/lista_de_entrada_e_saida">Ver entradas e saidas</a></li>
                            <li><a href="#">Ver Relatorios</a></li>


                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Veiculos <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            
                            <li><a href="/adicionar_veiculo">Adicionar veiculos</a></li>
                            <li><a href="/lista_de_veiculos">Ver veiculos</a></li>

                        </ul>
                    </li>

                </ul>
                <form class="navbar-form navbar-left" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="procurar">
                    </div>
                    <button type="submit" class="btn btn-default">Procurar</button>

                </form>
                <ul class="nav navbar-nav navbar-right">
                    <!--<li><a href="#">Link</a></li>-->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Meu Perfil</a></li>
                            <li><a href="/mudar_palavra_passe">Mudar palavra passe</a></li>

                            <li class="divider"></li>
                            <li><a href="/">Sair</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    <!-- ddddddddddddddddddddddddddddddddddddddddddddddddddddddddd -->
</div>
<div id="content">
    <br>
    <br>
    <br>
    <br>
    @yield('content')
</div>
<div id="foot">
    <!--<p>&copy;Zing Developers {{date('Y')}} </p>-->
</div>
<footer class="footer">
    <div class="container" align="center">
        <p class="text-muted">&copy;Zing Developers {{date('Y')}} </p>
    </div>
</footer>
</body>


<!-- Scripts -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"> $.material.init() </script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

<script src="{{ asset('/js/filter.js') }}"></script>

<!-- Material js
<script src="{{ asset('/js/material-bootstrap/material.js') }}"></script>
<script src="{{ asset('/js/material-bootstrap/ripples.js') }}"></script>-->


</html>
