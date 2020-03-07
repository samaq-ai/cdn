<div class="wrapper wrapper-full-page">
    @include('layouts.navbars.navs.global')
        @include('layouts.navbars.sidebar')
      
        
    <div class="page-header login-page header-filter" filter-color="black" style="background-image: url('{{ asset('material') }}/img/login.jpg'); background-size: cover; background-position: top center;align-items: center;" data-color="purple">
        <div class="main-panel">
      
      @yield('content')
      @include('layouts.footers.global')
      </div>
    </div>
</div>
  