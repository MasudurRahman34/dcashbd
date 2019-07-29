<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <!-- <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg" alt="User Image">
        <div>
          <p class="app-sidebar__user-name"></p>
          <p class="app-sidebar__user-designation">{{Auth::user()->name}}</p>
        </div>
      </div> -->
      <ul class="app-menu">
        <li><a class="app-menu__item {{ Request::is('user*') ? 'active' : '' }}" href="{!! route('user') !!}"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
        
        <li><a class="app-menu__item {{ Request::is('buy*') ? 'active' : '' }}" href="{{ route('buy') }}"><i class="app-menu__icon fa fa-shopping-cart"></i><span class="app-menu__label">Buy</span></a></li>
        <li><a class="app-menu__item {{ Request::is('sell*') ? 'active' : '' }}" href="{{ route('sell') }}"><i class="app-menu__icon fa fa-shopping-bag"></i><span class="app-menu__label">Sell</span></a></li>
        <li><a class="app-menu__item {{ Request::is('exchange*') ? 'active' : '' }}" href="{{ route('exchange') }}"><i class="app-menu__icon fa fa-random"></i><span class="app-menu__label">Exchange</span></a></li>
        <li><a class="app-menu__item {{ Request::is('transaction*') ? 'active' : '' }}" href="{{ route('transaction') }}"><i class="app-menu__icon fa fa-exchange"></i><span class="app-menu__label">Transaction history</span></a></li>
        <li><a class="app-menu__item {{ Request::is('profile*') ? 'active' : '' }}" href="{{ route('profile') }}"><i class="app-menu__icon fa fa-user"></i><span class="app-menu__label">profile</span></a></li>
      </ul>
    </aside>