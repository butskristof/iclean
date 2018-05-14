<?php $this->layout('template', ['title' => 'iClean - Contact', 'id' => 'contact', 'extracss' => '/css/diensten.css']) ?>

<div class="container">

	<?php include "partials/contactform.php"; ?>

	<h1>Contact</h1>

	<div class="row">
		<div class="col-md-4">
			<h2>Contactgegevens</h2>
			<dl>
				<dt>Bedrijfsnaam</dt>
				<dd>iClean</dd>
				<dt>Zaakvoerder</dt>
				<dd>Mitch Falchou</dd>
				<dt>Telefoonnummer</dt>
				<dd>+32 12 34 56 78</dd>
				<dt>BTW-nummer</dt>
				<dd>BE0</dd>
			</dl>
		</div>
		<div class="col-md-8">
			<h2>Contactformulier</h2>
			<form action="contact.php" role="form" method="post">
				<div class="form-group">
					<label for="name">Naam</label>
					<input type="text" class="form-control" id="name" name="name" aria-describedby="Naam" placeholder="Naam" value="<?php echo htmlspecialchars($_POST['name']); ?>" required>
				</div>
				<div class="form-group">
					<label for="email">E-mailadres</label>
					<input type="email" class="form-control" id="email" name="email" aria-describedby="E-mailadres" placeholder="E-mailadres" value="<?php echo htmlspecialchars($_POST['email']); ?>" required>
				</div>
				<div class="form-group">
					<label for="content">Uw bericht</label>
					<textarea class="form-control" id="content" name="msgcontent" aria-describedby="Uw bericht" placeholder="Uw bericht" required><?php echo htmlspecialchars($_POST['msgcontent']); ?></textarea>
				</div>
				<button type="submit" class="btn btn-secondary">Versturen</button>
			</form>
		</div>
	</div>


</div>

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
