<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg" alt="User Image">
        <div>
          <p class="app-sidebar__user-name">User Name</p>
          <p class="app-sidebar__user-designation">Money Exchange</p>
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item active" href="{!! route('dsadmin') !!}"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
        
        <li><a class="app-menu__item" href="{{ route('currency') }}"><i class="app-menu__icon fa fa-shopping-cart"></i><span class="app-menu__label">Currency</span></a></li>
        <li><a class="app-menu__item" href="{{ route('paymentMethod') }}"><i class="app-menu__icon fa fa-shopping-cart"></i><span class="app-menu__label">Payment Method</span></a></li>
        <li><a class="app-menu__item" href="{{ route('trnRequest') }}"><i class="app-menu__icon fa fa-briefcase"></i><span class="app-menu__label">Transaction Request</span></a></li>
        <li><a class="app-menu__item" href="{{ route('userlist') }}"><i class="app-menu__icon fa fa-exchange"></i><span class="app-menu__label">User Settings</span></a></li>
        <li><a class="app-menu__item" href="{{ route('adminlist') }}"><i class="app-menu__icon fa fa-exchange"></i><span class="app-menu__label">Admin Setting</span></a></li>
        <li><a class="app-menu__item" href="{{ route('adminProfile') }}"><i class="app-menu__icon fa fa-exchange"></i><span class="app-menu__label">profile</span></a></li>
        <li><a class="app-menu__item" href="{{ route('notice') }}"><i class="app-menu__icon fa fa-exchange"></i><span class="app-menu__label">Notice</span></a></li>
      </ul>
    </aside>