@include('layouts.navbars.navs.global')

<div class="wrapper wrapper-full-page">
    <div class="page-header login-page header-filter" filter-color="black" style="background-image: url('{{ asset('material') }}/img/login.jpg'); background-size: cover; background-position: top center;align-items: center;" data-color="purple">
  <div class="main-panel">
      
      </div>
      @yield('content')
    @include('layouts.footers.global')
</div>
  