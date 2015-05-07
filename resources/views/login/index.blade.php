<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Welcome to the jungle</title>

    <!-- Bootstrap core CSS -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

    <!-- Custom styles for this template -->
    <link href="{{ asset('/css/login.css') }}" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

      <!-- Material bigine here

      <link href="{{ asset('/css/material-bootstrap/material.css') }}" rel="stylesheet">
      <link href="{{ asset('/css/material-bootstrap/material-fullpalette.css') }}" rel="stylesheet">
      <link href="{{ asset('/css/material-bootstrap/ripples.css') }}" rel="stylesheet">
      <link href="{{ asset('/css/material-bootstrap/roboto.css') }}" rel="stylesheet"> -->


      <!-- Material end here -->
  </head>

  <body>







    <div class="container panel panel-default col-md-4 col-md-offset-4">
      <div class="panel-body">
      {!! Form::open(array('url' => '/makelogin', 'method'=>'POST', 'class'=>'form-signin'))  !!}
      <!--<form class="form-signin">-->
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        {!! Form::email('email',null,['id'=>'inputEmail','class'=>'form-control','placeholder'=>'Email address'])!!}
        <!--<input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="email" value="{{ old('email') }}" required autofocus>-->
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      {!! Form::close() !!}

    </div> <!-- /container -->
</div>


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
