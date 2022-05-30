
    <section class="box-shadow  " >
      <ul  class="bottomnav ">


        <li>  @if(Auth::check())
            <div class="dropdown" style="float:right;">
                <span><img class="img-fluid" src="{{asset('asset/images/Icon awesome-user-alt.png')}}" style="margin-right: 10px;"></span>
                <span><img class="img-fluid" src="{{asset('asset/images/Polygon 1.png')}}" style=""></span>
                <div class="dropdown-content" style="margin-left:-35px">
                  <div><a href="{{route('user-business')}}">Profile</a></div>
                  {{-- <div> <a href="{{route('opportunity-management')}}">My Tender</a></div>
                  <div> <a href="{{route('bid-management')}}">My Bids</a></div> --}}
                  <div> <a href="{{route('logout')}}">Logout</a></div>

                </div>
              </div>

            @else
            <div class="dropdown" style="float:right;">
                <span><img class="img-fluid" src="{{asset('asset/images/Icon awesome-user-alt.png')}}" style="margin-right: 10px;"></span>
                <span><img class="img-fluid" src="{{asset('asset/images/Polygon 1.png')}}" style=""></span>
                <div class="dropdown-content" style="margin-left:-35px">
                    <a href="{{route('register')}}">Join Us</a><br>
                    <a href="{{route('login')}}">Login</a>

                </div>
              </div>

            @endif</li>







        <div class="logo"><li ><img src="{{asset('asset/images/newlogo.png')}}" class="logo"><a href=""></a></li></div>


        @if(Auth::check())
        <li ><a href="{{route('opportunity-management')}}">My Tender</a></li>
        <li ><a href="{{route('bid-management')}}">My Bids</a></li>
       <!--  <li><a href="{{route('user-business')}}">Profile</a></li> -->
        @endif
        <li><a href="{{route('market-place')}}">MarketPlace</a></li>
        <li><a href="{{route('welcome')}}">Home</a></li>

      </ul>

    </section>

