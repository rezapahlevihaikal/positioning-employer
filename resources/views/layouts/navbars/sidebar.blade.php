<div class="sidebar" data-color="orange" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="https://creative-tim.com/" class="simple-text logo-normal">
      {{ __('PUSINTEK') }}
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">dashboard</i>
            <p>{{ __('Dashboard') }}</p>
        </a>
      </li>
<<<<<<< HEAD

      @if(Auth::user()->role_id === 8)
        <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
          <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="true">
            <!-- <i><img style="width:25px" src="{{ asset('material') }}/img/laravel.svg"></i> -->
            <p>{{ __('Admin Management') }}
              <b class="caret"></b>
            </p>
          </a>
          <div class="collapse show" id="laravelExample">
            <ul class="nav">
              <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('profile.edit') }}">
                  <span class="sidebar-mini"> UP </span>
                  <span class="sidebar-normal">{{ __('User profile') }} </span>
                </a>
              </li>

              <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('user.index') }}">
                  <span class="sidebar-mini"> UM </span>
                  <span class="sidebar-normal"> {{ __('User Management') }} </span>
                </a>
              </li>

              <li class="nav-item{{ $activePage == 'role-management' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('role.index') }}">
                  <span class="sidebar-mini"> RM </span>
                  <span class="sidebar-normal"> {{ __('Roles Management') }} </span>
                </a>
              </li>
            </ul>
          </div>
        </li>
      @endif
=======
      <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="true">
          <!-- <i><img style="width:25px" src="{{ asset('material') }}/img/laravel.svg"></i> -->
          <p>{{ __('Management') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="laravelExample">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('profile.edit') }}">
                <span class="sidebar-mini"> UP </span>
                <span class="sidebar-normal">{{ __('User profile') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('user.index') }}">
                <span class="sidebar-mini"> UM </span>
                <span class="sidebar-normal"> {{ __('User Management') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'locations-management' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('locations.index') }}">
                <span class="sidebar-mini"> LM </span>
                <span class="sidebar-normal"> {{ __('Location Management') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
>>>>>>> 7534ec67275cc06adf750117e61f5d25462ba0bc
     
    </ul>
  </div>
</div>