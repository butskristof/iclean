	<hr>

	<footer class="container">
			<span class="float-left icons">
	<!--			FB-->
				<a href="https://facebook.com/sotromusic">
					<i class="fab fa-facebook fa-lg"></i>
				</a>
				<!--			INSTA-->
				<a href="https://www.instagram.com/iclean1/">
					<i class="fab fa-instagram fa-lg"></i>
				</a>
				<!--			EMAIL-->
				<a href="#" data-toggle="modal" data-target="#contactModal">
					<i class="far fa-envelope fa-lg"></i>
					<!--	<button type="button" data-toggle="modal" data-target="#contactModal">Launch modal</button>-->
				</a>
				<!--			WHATSAPP -->
				<a href="https://api.whatsapp.com/send?phone=32477430865">
					<i class="fab fa-whatsapp fa-lg"></i></a>
			</span>
		<span class="float-right">
				<p>&copy; 2018 iClean</p>
			</span>
	</footer>

	<div class="modal fade" tabindex="-1" role="dialog" id="contactModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<form action="/contact" role="form" method="post">
				<div class="modal-header">
					<h5 class="modal-title">Contact</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<!--				MODAL BODY-->
						<div class="form-group">
							<label for="name">Naam</label>
							<input type="text" class="form-control" id="name" name="name" aria-describedby="Naam" placeholder="Naam" required>
						</div>
						<div class="form-group">
							<label for="email">E-mailadres</label>
							<input type="email" class="form-control" id="email" name="email" aria-describedby="E-mailadres" placeholder="E-mailadres" required>
						</div>
						<div class="form-group">
							<label for="content">Uw bericht</label>
							<textarea class="form-control" id="content" name="msgcontent" aria-describedby="Uw bericht" placeholder="Uw bericht" required></textarea>
						</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-secondary">Versturen</button>
				</div>
				</form>
			</div>
		</div>
	</div>

	<script src="/static/js/vendor/modernizr-3.5.0.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
	<script>window.jQuery || document.write('<script src="/static/js/vendor/jquery-3.2.1.min.js"><\/script>')</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	<script src="/static/js/jquery.magnific-popup.min.js"></script>
	<script src="/static/js/plugins.js"></script>
	<script src="/static/js/main.js"></script>

	<!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
	<script>
		window.ga=function(){ga.q.push(arguments)};ga.q=[];ga.l=+new Date;
		ga('create','UA-XXXXX-Y','auto');ga('send','pageview')
	</script>
	<script src="https://www.google-analytics.com/analytics.js" async defer></script>
</body>
</html>
