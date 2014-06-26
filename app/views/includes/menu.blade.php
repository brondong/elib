<!-- .nav-parent -->
<ul class="nav nav-pills nav-stacked nav-parent">

  <!-- akun -->
  <li>
    <a data-toggle="collapse" data-parent="#menu" href="#akun" class="menu">
      <span class="pull-right glyphicon glyphicon-chevron-{{ (Request::segment(1) == 'akun') ? 'down' : 'right' }} arrow-menu"></span>
      <span class="glyphicon glyphicon-tower"></span> Akun
    </a>
  </li>

    <!-- .nav-child -->
    <ul class="nav nav-stacked nav-child collapse {{ (Request::segment(1) == 'akun') ? 'in' : '' }}" id="akun">

      <li class="{{ cek_link('akun', 'profil') }}">
        <a href="{{ route('logout') }}">
          <span class="glyphicon glyphicon-off"></span> Logout
        </a>
      </li>

    </ul>
    <!-- /.nav-child -->
  <!-- /akun -->

</ul>
<!-- /.nav-parent -->