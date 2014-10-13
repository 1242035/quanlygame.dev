@include('block.header')

    <div class="row">
        <div class="col-md-12 center login-header">
            <h2>Welcome to {{ Config::get('define.site_domain') }}</h2>
        </div>
        <!--/span-->
    </div><!--/row-->

    <div class="row">
        <div class="well col-md-5 center login-box">
            <div class="alert alert-info">
                Please login with your Username and Password.
            </div>
            @yield('form')
        </div>
        <!--/span-->
    </div><!--/row-->
@include('block.footer')