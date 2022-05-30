<section>
      <div class="topnav">
        <div style="float: left;">
          
          <div class="dropdown">
            <span>Language</span>
            <div class="dropdown-content">
              <div><a>English</a></div>
              <div> <a>Arabic</a></div>
              
            </div>
          </div>
        </div>
        
        
        @if(Auth::check())
        <div class="dropdown" style="float:right;">
            <span><i class="fa fa-user" style="margin-right: 10px;"></i>{{Auth::user()->name}}</span>
            <div class="dropdown-content" style="margin-left:-35px">
              <div><a href="{{route('user-business')}}">Profile</a></div>
              <div> <a href="{{route('opportunity-management')}}">My Tender</a></div>
              <div> <a href="{{route('bid-management')}}">My Bids</a></div>
              <div> <a href="{{route('logout')}}">Logout</a></div>
              
            </div>
          </div>
        <a href="#"><i class="fa fa-bell icon" ></i></a>
        @else
        <a href="{{route('register')}}">Join Us</a>
        <a href="{{route('login')}}">Login</a>
        @endif
      </div>
    </section>