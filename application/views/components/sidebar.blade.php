<ul data-spy="affix" class="nav nav-list affix">

  <li{{ URI::is('/') ? ' class="active"' : '' }}><a href="{{ URL::to('/') }}"><i class="icon icon-white icon-th-large"></i> Dashboard</a></li>
  
  <li{{ URI::is('feed') ? ' class="active"' : '' }}><a href="{{ URL::to('/feed') }}"><i class="icon icon-white icon-th-list"></i> Feed</a></li>
  
  <li{{ URI::is('products') ? ' class="active"' : '' }}><a href="{{ URL::to('/products') }}"><i class="icon icon-white icon-tags"></i> Products</a></li>

  <li{{ URI::is('branches') ? ' class="active"' : '' }}><a href="{{ URL::to('/branches') }}"><i class="icon icon-white icon-map-marker"></i> Branches</a></li>

  <li{{ URI::is('employees') ? ' class="active"' : '' }}><a href="{{ URL::to('/employees') }}"><i class="icon icon-white icon-group"></i> Employees</a></li>

  <li{{ URI::is('users') ? ' class="active"' : '' }}><a href="{{ route('users') }}"><i class="icon icon-white icon-user"></i> Users</a></li>  
  
  <li{{ URI::is('reports') ? ' class="active"' : '' }}><a href="{{ route('reports') }}"><i class="icon icon-white icon-bar-chart"></i> Reports</a></li>  
  
  <li{{ URI::is('settings') ? ' class="active"' : '' }}><a href="{{ route('settings') }}"><i class="icon icon-white icon-cog"></i> Settings</a></li>  

</ul>