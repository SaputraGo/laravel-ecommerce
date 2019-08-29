<nav class="sidebar position-fixed bg" id="sidebar">
	<ul class="nav">
		<li class="nav-profile text-center">
			<img src="{{asset('img/default.jpg')}}" class="img-profile img-round"><br/>
			<span><small class="text-white">admin</small></span>
			<h4 class="text-white">Admin Ku</h4>
		</li>
		<li class="nav-item {{ request()->is('dashboard*') ? 'active' : '' }}">
			<a href="/dashboard" class="nav-link"><span>Dashboard</span></a>
		</li>
		<li class="nav-item {{ request()->is('product*') ? 'active' : '' }}">
			<a href="/product" class="nav-link"><span>Product</span></a>
		</li>
		<li class="nav-item {{ request()->is('order*') ? 'active' : '' }}">
			<a href="/order" class="nav-link"><span>Order</span></a>
		</li>
		<li class="nav-item {{ request()->is('user*') ? 'active' : '' }}">
			<a href="/user" class="nav-link"><span>User</span></a>
		</li>
		<li class="nav-item {{ request()->is('profile*') ? 'active' : '' }}">
			<a href="/profile" class="nav-link"><span>Profile</span></a>
		</li>
	</ul>
</nav>