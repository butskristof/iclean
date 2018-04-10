<?php $this->layout('template', ['title' => 'iClean - Referenties', 'id' => 'referenties', 'extracss' => '/css/diensten.css']) ?>

<div class="container">
	<h1>Referenties</h1>
	<div id="photos">
		<div class="row">
			<div class="col-md-3">
				<img src="http://placehold.it/400x400" alt="" class="img-fluid popup">
			</div>
			<div class="col-md-3">
				<img src="http://placehold.it/400x400" alt="" class="img-fluid">
			</div>
			<div class="col-md-3">
				<img src="http://placehold.it/400x400" alt="" class="img-fluid">
			</div>
			<div class="col-md-3">
				<img src="http://placehold.it/400x400" alt="" class="img-fluid">
			</div>
		</div>
		<div class="row">
			<div class="col-md-3">
				<img src="/img/a12.jpg" alt="" class="img-fluid">
			</div>
			<div class="col-md-3">
				<img src="/img/a12.jpg" alt="" class="img-fluid">
			</div>
			<div class="col-md-3">
				<img src="/img/a12.jpg" alt="" class="img-fluid">
			</div>
			<div class="col-md-3">
				<img src="/img/a12.jpg" alt="" class="img-fluid">
			</div>
		</div>
	</div>
</div>

<a class="test-popup-link" href="/img/a12.jpg">Open popup</a>

<script>
	$(document).ready(function() {
		$('.test-popup-link').magnificPopup({
			type: 'image'
			// other options
		});
	}
</script>