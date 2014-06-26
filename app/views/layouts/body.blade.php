@include('layouts.header')

<body>
  @include('includes.navbar')

  <!-- .container -->
  <div class="container-fluid">

    <!-- .row -->
    <div class="row">

      <!-- #menu -->
      <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3" id="menu">
        @include('includes.menu')
      </div>
      <!-- /#menu -->

      <!-- #konten -->
      <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9" id="konten">
        @yield('konten')
      </div>
      <!-- /#konten -->

    </div>
    <!-- /.row -->

  </div>
  <!-- .container -->

@include('layouts.footer')