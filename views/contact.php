<?php $this->layout('template', ['title' => 'iClean - Contact', 'id' => 'contact', 'extracss' => '/css/pages.css']) ?>

<div class="container">
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
		</div><!-- /col-md-4 -->
		<div class="col-md-8">
			<h2>Contactformulier</h2>
			<form action="#">
				<div class="form-group">
					<label for="name">Naam</label>
					<input type="text" class="form-control" id="name" aria-describedby="Naam" placeholder="Naam">
				</div>
				<div class="form-group">
					<label for="email">E-mailadres</label>
					<input type="email" class="form-control" id="email" aria-describedby="E-mailadres" placeholder="E-mailadres">
				</div>
				<div class="form-group">
					<label for="content">Uw bericht</label>
					<textarea class="form-control" id="content" aria-describedby="Uw bericht" placeholder="Uw bericht"></textarea>
				</div>
				<button type="submit" class="btn btn-secondary">Versturen</button>
			</form>
		</div><!-- /col-md-8 -->
	</div><!-- /row -->
</div><!-- /container -->