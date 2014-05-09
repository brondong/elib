<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="elib, library, perpustakaan, indonesia">
    <meta name="description" content="aplikasi perpustakaan indonesia">
    <meta name="author" content="Heru Rusdianto">
    <title>Login</title>

    <!-- Bootstrap -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
      <div class="row row-centered">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-centered">
          <div class="panel">
            <!-- .offer-info -->
            <span class="offer-info">
              <span class="shape">
                <div class="shape-text">
                  <span class="glyphicon glyphicon-lock"></span>
                </div>
              </span>
            </span>
            <!-- /.offer-info -->

            <!-- .panel-heading -->
            <div class="panel-heading">
              <h3 class="panel-title">Login</h3>
            </div>
            <!-- /.panel-heading -->
            
            <!-- .panel-body -->
            <div class="panel-body">
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Ketikkan email anda...">
              </div>

              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Ketikkan password anda...">
              </div>

              <div class="checkbox">
                <input type="checkbox" name="ingat" id="ingat"> Ingat saya
              </div>
            </div>
            <!-- /.panel-body -->

            <!-- .panel-footer -->
            <div class="panel-footer">
              <div class="text-right">
                <button type="submit" class="btn btn-info">Masuk</button>
              </div>
            </div>
            <!-- /.panel-footer -->
          </div>
        </div>        
      </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  </body>
</html>