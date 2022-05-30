<div class="main-sidebar sidebar-style-2">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="index.html">
        <img alt="image" src="{{asset('assets/img/logo.png')}}" class="header-logo" />
        <span class="logo-name">Admin Dashboard</span>
      </a>
    </div>
    <ul class="sidebar-menu">
      <li class="dropdown active" style="display: block;">
        <div class="sidebar-profile">
          <div class="siderbar-profile-pic">
            <img src="{{asset('assets/img/users/admin.jpg')}}" class="profile-img-circle box-center" alt="User Image">
          </div>
          <div class="siderbar-profile-details">
            <div class="siderbar-profile-name"> {{Auth::user()->name}} </div>
            
          </div>
          
        </div>
      </li>
      <li class="menu-header">Main</li>
      
      
      <li><a class="nav-link" href="{{route('admin-home')}}"><i class="fas fa-user-lock"></i><span>User List</span></a></li>
      <li><a class="nav-link" href="{{route('user-bidding')}}"><i class="far fa-calendar-alt"></i><span>User Bidding</span></a></li>
      <li><a class="nav-link" href="{{route('opportunity-title-list')}}"><i class="fas fa-user-lock"></i><span>Opportunity Title</span></a></li>
      <li><a class="nav-link" href="{{route('opportunity-category-list')}}"><i class="fas fa-user-lock"></i><span>Opportunity Category</span></a></li>
      
      <li><a class="nav-link" href="{{route('province-list')}}"><i class="fas fa-user-lock"></i><span>Province </span></a></li>
      
      <li><a class="nav-link" href="{{route('city-list')}}"><i class="fas fa-user-lock"></i><span>Cities </span></a></li>
      <li><a class="nav-link" href="{{route('admin-details')}}"><i class="fas fa-user-lock"></i><span>Details </span></a></li>
      <!--            <li><a class="nav-link" href="{{route('sector-list')}}"><i class="fas fa-user-lock"></i><span>Sector </span></a></li>
      -->
      <!--
      <li><a class="nav-link" href="{{route('testing-list')}}"><i class="fas fa-user-lock"></i><span>Testing Form </span></a></li> -->
     <li><a class="nav-link" href="{{route('footer-setting')}}"><i class="fas fa-user-lock"></i><span>Footer Setting</span></a></li>


      <li><a class="nav-link" href="{{route('logout')}}"><i class="fas fa-sign-out-alt"></i><span>Logout</span></a></li>
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
    </ul>
  </aside>
</div>