<nav class="pink lighten-2">
	<div class="nav-wrapper">
		<a href="{{ route('index') }}" class="brand-logo center">{{ config('app.name', 'Laravel') }}</a>
		<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
		
		<ul id="nav-mobile" class="right hide-on-med-and-down">
			<li><a href="{{ route('index') }}">Home</a></li>
			<li><a href="{{ route('about') }}">About Us</a></li>
			<li><a href="{{ route('about') }}">Contacts</a></li>
			@if(Request::is('admin') || Request::is('admin/*'))
				@if(Auth::guard('admin')->check())
					<li><a href="{{ route('admin.logout') }}">Logout</a></li>
				@else
					<li><a href="{{ route('admin.login') }}">Login</a></li>
				@endif
			@else
				@if(Auth::guard('web')->check())
					<li><a href="{{ route('logout') }}">Logout</a></li>
				@else
					<li><a href="{{ route('login') }}">Login</a></li>
					<li><a href="{{ route('register') }}">Sign Up</a></li>
				@endif
			@endif
		</ul>
		<ul class="side-nav" id="mobile-demo">
			<li><a href="{{ route('index') }}">Home</a></li>
			<li><a href="{{ route('about') }}">About Us</a></li>
			<li><a href="{{ route('about') }}">Contacts</a></li>
			@if(Auth::guard('admin')->check() && (Request::is('admin') || Request::is('admin/*')))
				<li><a href="{{ route('admin.logout') }}">Logout</a></li>
			@elseif(Auth::guard('web')->check())
				<li><a href="{{ route('logout') }}">Logout</a></li>
			@else
				@if(Request::is('admin/*'))
					<li><a href="{{ route('admin.login') }}">Login</a></li>
				@else
					<li><a href="{{ route('login') }}">Login</a></li>
					<li><a href="{{ route('register') }}">Sign Up</a></li>
				@endif
			@endif
		</ul>
	</div>        
</nav>
