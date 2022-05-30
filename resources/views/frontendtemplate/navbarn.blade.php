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
.nav-width{
justify-content: space-evenly;
width: 38%;
margin-left: 80px;
}

@media only screen and (max-width: 1024px) {


.nav-width {
    justify-content: space-evenly!important;
    width: 60%!important;
    margin-left: 15px!important;
}
}


@media only screen and (max-width: 768px) {


.nav-width {
    justify-content: space-evenly!important;
    width: 60%!important;
    margin-left: 15px!important;
}
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
            <div class="navbar-nav nav-width ">
              <a href="{{route('welcome')}}" class="nav-item nav-link text-white active" style="font-size: 1.5rem">Home</a>
              <a href="{{route('market-place')}}" class="nav-item nav-link text-white" style="font-size: 1.5rem">Marketplace</a>
          @if(Auth::check())
              <a href="{{route('bid-management')}}" class="nav-item nav-link text-white" style="font-size: 1.5rem">My Bids</a>
              <a href="{{route('opportunity-management')}}" class="nav-item nav-link text-white" tabindex="-1" style="font-size: 1.5rem">My Tender</a>
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
                    <a href="/new_tender_three" class="dropdown-item">Join Us</a>
                    <a href="{{route('welcome')}}" class="dropdown-item">Login</a>
                </div>
              </div>

            @endif

            </div>
          </div>
        </div>
      </nav>
    </div>

</section>
