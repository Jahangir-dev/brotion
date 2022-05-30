<style type="text/css">

.dropdown-toggle::after {
    display: inline-block;
    font-size: 20px;
    color: white;
    width: 0;
    height: 0;
    margin-left: 0.255em;
    vertical-align: 0.255em;
    content: "";
    border-top: 0.3em solid;
    border-right: 0.3em solid transparent;
    border-bottom: 0;
    border-left: 0.3em solid transparent;
}

</style>
<section class="box-shadow">

    <div class="m-4" style="margin-top:0px !important">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
          <a href="#" class="navbar-brand"><img src="{{asset('asset/images/newlogo.png')}}" class="logo"></a>
          <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
          <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse "  id="navbarCollapse">
            <div class="navbar-nav  ml-auto ">
              <a href="{{route('welcome')}}" class="nav-item nav-link text-white active">Home</a>
              <a href="{{route('market-place')}}" class="nav-item nav-link text-white">Marketplace</a>
          @if(Auth::check())
              <a href="{{route('bid-management')}}" class="nav-item nav-link text-white">My Bids</a>
              <a href="{{route('opportunity-management')}}" class="nav-item nav-link text-white" tabindex="-1">My Tender</a>
          @endif
            </div>
            <div class="navbar-nav ms-auto" style="margin-left: auto!important;">

             @if(Auth::check())
              <div class="dropdown">
                <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown"><img style="width: 20px;" class="img-fluid" src="{{asset('asset/images/Icon awesome-user-alt.png')}}"></a>
                <div class="dropdown-menu">
                    <a href="{{route('user-business')}}" class="dropdown-item">Profile</a>
                    <a href="{{route('logout')}}" class="dropdown-item">Logout</a>
                </div>
              </div>
            @else

              <div class="dropdown">
                <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown"><img style="width: 20px;" class="img-fluid" src="{{asset('asset/images/Icon awesome-user-alt.png')}}"></a>
                <div class="dropdown-menu">
                    <a href="{{route('register')}}" class="dropdown-item">Join Us</a>
                    <a href="{{route('login')}}" class="dropdown-item">Login</a>
                </div>
              </div>

            @endif

            </div>
          </div>
        </div>
      </nav>
    </div>

</section>
