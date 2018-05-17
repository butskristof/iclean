<nav class="navbar navbar-expand-lg navbar-light fixed-top bg-light">
	<div class="container">
		<a class="navbar-brand" href="/">
<!--			<img src="/static/img/logo.svg" alt="iClean logo" width="30" height="30" class="d-inline-block align-top"> iClean-->
			<img src="/static/img/logo/logo.svg" alt="iClean logo"> iClean
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="menu">
			<?php include('menu.php');
			// only display tag phrase in upper right corner if it isn't the home page
//			if ($id != 'home') {
			if (true) {
				?>
				<span class="navbar-text">
				+32 477 43 08 65
			</span>
			<?php }	?>
		</div><!-- /collapse -->
	</div><!-- /container -->
</nav>
