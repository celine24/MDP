<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ma Douce Parenthèse - administration</title>

	<link href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/back/bootstrap/bootstrap.css') }}" rel="stylesheet">
	<link href="{{ asset('css/back/style.css') }}" rel="stylesheet">

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="/admin">MDP Panneau d'administration</a>
			</div>

			<div class="collapse navbar-collapse" id="navbar">
				<ul class="nav navbar-nav">
					<li class="{{ Request::is('admin') ? 'active' : '' }}"><a href="{{ url('/admin') }}">Accueil</a></li>
					<li class="{{ Request::is('admin/actu') ? 'active' : '' }}"><a href="{{ url('/admin/actu') }}">Actualités</a></li>
					<li class="{{ Request::is('admin/offres') ? 'active' : '' }}"><a href="{{ url('/admin/offres') }}">Promotions</a></li>
					<li class="{{ Request::is('admin/conseils') ? 'active' : '' }}"><a href="{{ url('/admin/conseils') }}">Conseils</a></li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					@if(auth()->guest())
						@if(!Request::is('auth/login'))
							<li><a href="{{ url('admin/auth/login') }}">Se connecter</a></li>
						@endif
						@if(!Request::is('auth/register'))
							<li><a href="{{ url('admin/auth/register') }}">Créer un compte</a></li>
						@endif
					@else
						<li>
							<a href="{{ url('/') }}"  target="_blank">Voir le site</a>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ auth()->user()->name }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{ url('admin/auth/logout') }}">Déconnexion</a></li>
							</ul>
						</li>
					@endif
				</ul>
			</div>
		</div>
	</nav>

	@yield('content')

	<!-- Scripts -->
	<script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('js/jquery.confirm.js') }}" type="text/javascript"></script>
	<script src="{{ asset('js/tooltip.js') }}" type="text/javascript"></script>
	<script src="{{ asset('ckeditor/ckeditor.js') }}" type="text/javascript"></script>
	<script src="{{ asset('js/ckeditor.js') }}" type="text/javascript"></script>
</body>
</html>
