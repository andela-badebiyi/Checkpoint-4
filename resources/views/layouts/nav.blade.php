<!-- Header -->
<header id="header" class="alt" style="background-color:#000;">
	<h1> <img src='{!! asset("img/logo123.png") !!}' width=15 style="margin-top:12px; float:left;" /> <a href="/"> CodeMaven</a> <span style='color:#e89980;'>by Bodunde</span></h1>
	<nav id="nav">
		<ul>
			<li>
				<a href="/" class="icon fa-angle-down">Home</a>
				<ul>
					<li>
						<a href='/request'>
							Make Video Request
						</a>
					</li>
				</ul>
			</li>
			@if(Auth::check())
			<li>
				<a href="#" class="icon fa-angle-down">
					<img src="{!! Auth::user()->avatar !!}" height=20 width=20/>
					{!! Auth::user()->name !!}
				</a>
				<ul>
					<li>
						<a href="/dashboard"><i class="fa fa-dashboard"></i> Dashboard</a>
					</li>
					<li>
						<a href='/logout'><i class="fa fa-sign-out"></i> Logout</a>
					</li>
					<li>
						<a href='/settings'><i class="fa fa-cog"></i> Account Settings</a>
					</li>
				</ul>
			</li>
			@else
				{{ Auth::user() }}
				<li><a href="/login">Sign In</a></li>
				<li><a href="/register" class="button" style="box-shadow: inset 0 0 0 2px #e89980">Sign Up</a></li>
			@endif
		</ul>
	</nav>
</header>
<header id="header-2" class="alt visible-xs-block visible-sm-block" style="background-color:#000;">
	<h1><a href="/">CodeMaven</a> <span style='color:#e89980;'>by Bodunde</span></h1>
</header>
