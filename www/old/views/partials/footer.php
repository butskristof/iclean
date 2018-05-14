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
<!--			TODO contact form of bot ignore -->
<!--			<a href="/contact">-->
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

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script src="/js/jquery.magnific-popup.min.js"></script>

<div class="modal fade" tabindex="-1" role="dialog" id="contactModal">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Contact</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<!--				MODAL BODY-->
				<form action="#">
					<div class="form-group">
						<label for="email">E-mailadres</label>
						<input type="email" class="form-control" id="email" aria-describedby="E-mailadres" placeholder="E-mailadres">
					</div>
					<div class="form-group">
						<label for="name">Naam</label>
						<input type="text" class="form-control" id="name" aria-describedby="Naam" placeholder="Naam">
					</div>
					<div class="form-group">
						<label for="content">Uw bericht</label>
						<textarea class="form-control" id="content" aria-describedby="Uw bericht" placeholder="Uw bericht"></textarea>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="submit" class="btn btn-secondary">Versturen</button>
			</div>
		</div>
	</div>
</div>
