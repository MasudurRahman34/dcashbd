<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg" alt="User Image">
        <div>
          <p class="app-sidebar__user-name">User Name</p>
          <p class="app-sidebar__user-designation">Money Exchange</p>
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item active" href="{!! route('user') !!}"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
        
        <li><a class="app-menu__item" href="{{ route('buy') }}"><i class="app-menu__icon fa fa-shopping-cart"></i><span class="app-menu__label">Buy</span></a></li>
        <li><a class="app-menu__item" href="{{ route('sell') }}"><i class="app-menu__icon fa fa-briefcase"></i><span class="app-menu__label">Sell</span></a></li>
        <li><a class="app-menu__item" href="{{ route('exchange') }}"><i class="app-menu__icon fa fa-exchange"></i><span class="app-menu__label">Exchange</span></a></li>
        <li><a class="app-menu__item" href="{{ route('transaction') }}"><i class="app-menu__icon fa fa-exchange"></i><span class="app-menu__label">Transaction history</span></a></li>
        <li><a class="app-menu__item" href="{{ route('profile') }}"><i class="app-menu__icon fa fa-exchange"></i><span class="app-menu__label">profile</span></a></li>
      </ul>
    </aside>