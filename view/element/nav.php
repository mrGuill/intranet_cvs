<nav class="navbar navbar-inverse navbar-default">

<div class="container-fluid">

	<ul class="nav navbar-nav">
		<li><a href='index.php?controller=pages&action=home'><span class="glyphicon glyphicon-home"></span> Home</a></li>
		<li><a href='index.php?controller=pages&action=news'><span class="glyphicon glyphicon-bullhorn"></span> News</a></li>
		<li><a href='index.php?controller=pages&action=planning'><span class="glyphicon glyphicon-calendar"></span> Planning</a></li>
		<li><a href='index.php?controller=pages&action=inventaire'><span class="glyphicon glyphicon-list"></span> Inventaire</a></li>
		<li><a href='index.php?controller=pages&action=administratif'><span class="glyphicon glyphicon-paperclip"></span> Administratif</a></li>
		<li><a href='index.php?controller=pages&action=contact'><span class="glyphicon glyphicon-envelope"></span> Contact</a></li>
	</ul>

	<ul class="dropdown nav navbar-nav navbar-right">
		<li class="dropdown">
			<a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span> User
			<span class="caret"></span></a>
			<ul class="dropdown-menu">
				<li><a href='index.php?controller=pages&action=profile'><span class="glyphicon glyphicon-cog"></span> Profile</a></li>
				<li><a href='index.php?controller=user&action=destroySession'><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
			</ul>
		</li>
	</ul>


</div>

</nav>