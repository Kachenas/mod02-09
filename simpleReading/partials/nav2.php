<nav class="navbar navbar-default">
	<!-- Brand and toggle get grouped for better mobile display -->

	<div class="navbar-header">
		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="index.php">Simple Reading</a>
	</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
					<a href="index.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Account<span class="glyphicon glyphicon-user" aria-hidden="true"></span></a>
					<ul class="dropdown-menu">
						 <?php 
					      	if (isset($_SESSION['username']) && $_SESSION['username'] == 'admin') {
			 					echo '<li><a href="logout.php">Log-Out</a></li>';
			 				}else if (isset($_SESSION['username']) && $_SESSION['username'] !== 'admin') {
			 					echo '<li><a href="editprofile.php">Profile</a></li>';
			 					echo '<li><a href="logout.php">Log-Out</a></li>';
			 				}
			 				 else {
			 					echo '<li><a href="login.php">Log In</a></li>';
			 					echo '<li><a href="register.php">Register</a></li>';
			 				}
					       ?>
					</ul>
					</li>
				</ul>
			</div><!-- /.navbar-collapse -->
</nav>
	