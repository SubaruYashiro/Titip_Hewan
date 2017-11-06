<div class="navbar-fixed">
	<nav class="pink lighten-2">
		<div class="nav-wrapper">
			<a href="{{ route('index') }}" class="brand-logo center">{{ config('app.name', 'Laravel') }}</a>
			<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
			
			<ul id="nav-mobile" class="right hide-on-med-and-down">
				<li><a href="{{ route('index') }}">Home</a></li>
				<li><a href="{{ route('about') }}">About</a></li>
				<li><a href="{{ route('about') }}">Blog</a></li>
				<li><a href="{{ route('about') }}">Contacts</a></li>
				@if(Auth::guard('admin')->check())
					<li><a href="{{ route('admin.logout') }}" class="waves-effect waves-light btn blue darken-1">Logout</a></li>
				@elseif(Auth::guard('web')->check())
					<li><a href="{{ route('logout') }}" class="waves-effect waves-light btn blue darken-1">Logout</a></li>
				@else
					@if(Request::is('admin/*'))
						<li><a href="{{ route('admin.login') }}" class="waves-effect waves-light btn blue darken-1">Login</a></li>
					@else
						<li><a href="{{ route('login') }}" class="waves-effect waves-light btn blue darken-1">Login</a></li>
					@endif
				@endif
			</ul>
			<ul class="side-nav" id="mobile-demo">
				<li><a href="{{ route('index') }}">Home</a></li>
				<li><a href="{{ route('about') }}">About</a></li>
				<li><a href="{{ route('about') }}">Blog</a></li>
				<li><a href="{{ route('about') }}">Contacts</a></li>
				@if(Auth::guard('admin')->check())
					<li><a href="{{ route('admin.logout') }}" class="waves-effect waves-light btn blue darken-1">Logout</a></li>
				@elseif(Auth::guard('web')->check())
					<li><a href="{{ route('logout') }}" class="waves-effect waves-light btn blue darken-1">Logout</a></li>
				@else
					@if(Request::is('admin/*'))
						<li><a href="{{ route('admin.login') }}" class="waves-effect waves-light btn blue darken-1">Login</a></li>
					@else
						<li><a href="{{ route('login') }}" class="waves-effect waves-light btn blue darken-1">Login</a></li>
					@endif
				@endif
			</ul>
		</div>        
	</nav>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		$(".button-collapse").sideNav();
	});
</script>