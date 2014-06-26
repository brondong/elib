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

    <!-- css -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!-- /css -->

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
              {{ Form::open(array('route' => 'login')) }}

                <div class="form-group">
                  {{ Form::label('email', 'Email') }}

                  {{ Form::text('email', Input::old('email'), array(
                      'class'       => 'form-control',
                      'placeholder' => 'Ketikkan email anda...'
                  )) }}
                </div>

                <div class="form-group">
                  {{ Form::label('password', 'Password') }}

                  {{ Form::password('password', array(
                      'class'       => 'form-control',
                      'placeholder' => 'Ketikkan password anda...'
                  )) }}
                </div>

                <div class="checkbox">
                  {{ Form::checkbox('ingat', true) }} Ingat saya
                </div>
            </div>
            <!-- /.panel-body -->

            <!-- .panel-footer -->
            <div class="panel-footer">
                <div class="text-right">
                  {{ Form::submit('Masuk', array('class' => 'btn btn-info')) }}
                </div>

              {{ Form::close() }}
            </div>
            <!-- /.panel-footer -->
          </div>
          <!-- /.panel -->
        </div>
        <!-- /.col-centered -->
      </div>
      <!-- /.row-centered -->
    </div>
    <!-- /.container -->

    <!-- javascript -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- /javascript -->
  </body>
</html>