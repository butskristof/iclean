	<hr>

	<footer class="container">
			<div class="float-left">
				<div class="icons">
	<!--			FB-->
<!--				<a href="https://facebook.com/kljwiekevorst" target="_blank">-->
<!--					<span class="icon-facebook-square"></span>-->
<!--				</a>-->
				<!--			INSTA-->
				<a href="https://www.instagram.com/iclean1/" target="_blank">
					<span class="icon-instagram"></span>
				</a>
				<!--			EMAIL-->
				<a href="#" data-toggle="modal" data-target="#contactModal">
					<span class="icon-envelope-o"></span>
				</a>
				<!--			WHATSAPP -->
				<a href="https://api.whatsapp.com/send?phone=32486617213" target="_blank">
					<span class="icon-whatsapp"></span>
				</a>
				</div>
<!--				<div>-->
<!--					<a href="/static/files/Privacybeleid.pdf" target="_blank">Privacybeleid</a>-->
<!--				</div>-->
			</div>
		<div class="float-right">
				<p>&copy; <?= date('Y'); ?> iClean <br> <a href="/static/files/Privacybeleid.pdf" target="_blank">Privacybeleid</a> <br>
				webdesign by <a href="http://kristofbuts.be" target="_blank">Kristof Buts</a></p>
		</div>
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
							<input type="text" class="form-control" id="name" name="name" aria-describedby="Naam" placeholder="Naam" required autocomplete="on">
						</div>
						<div class="form-group">
							<label for="email">E-mailadres</label>
							<input type="email" class="form-control" id="email" name="email" aria-describedby="E-mailadres" placeholder="E-mailadres" required autocomplete="on">
						</div>
						<div class="form-group">
							<label for="content">Uw bericht</label>
							<textarea class="form-control" rows="5" id="content" name="msgcontent" aria-describedby="Uw bericht" placeholder="Uw bericht" required autocomplete="off"></textarea>
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
	<script src="/static/js/vendor/jquery-3.2.1.min.js"></script>
	<script src="/static/js/vendor/bootstrap.bundle.min.js"></script>
	<script src="/static/js/plugins.js"></script>
	<script src="/static/js/jquery.magnific-popup.min.js"></script>
	<script>
		$(document).ready(function () {
			$('.mfp-link').magnificPopup({
				type: 'image',
				gallery: {
					enabled: true,
					navigateByImgClick: true,
					preload: [0,1] // Will preload 0 - before current, and 1 after the current image
				}
			})
		});
	</script>
	<script>
		// load css files deferred
		let cssarray = [
			"/static/css/normalize.min.css",
			"https://fonts.googleapis.com/css?family=Open+Sans|Quicksand",
			"/static/css/main.min.css",
			"/static/css/magnific-popup.min.css",
			"/static/css/icomoon.min.css"
		];

		cssarray.forEach(csslink => {
			let css = document.createElement("link");
			css.rel = "stylesheet";
			css.href = csslink;
			css.type = "text/css";
			let cssdefer = document.getElementsByTagName("link")[0];
			cssdefer.parentNode.insertBefore(css, cssdefer);
		});


	</script>

</body>
</html>
