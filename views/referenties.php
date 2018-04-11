<?php $this->layout('template', ['title' => 'iClean - Referenties', 'id' => 'referenties', 'extracss' => '/static/css/pages.css']) ?>


<div class="container" id="referenties">
	<h1>Referenties</h1>

	<?php
	$files = scandir("static/img/refs/");
	$files = glob('static/img/refs/*.{jpg,jpeg,png,gif}', GLOB_BRACE);

	$noOfFiles = sizeof($files);

	for ($i = 0; $i < $noOfFiles; $i += 4) {
		?>

		<div class="row"><?php

			for ($j = 0; $j < 4; ++$j) {

				if ($i + $j < ($noOfFiles)) {
					?>

					<div class="col-md-3">
						<a href="<?= $files[$i + $j] ?>" class="mfp-link">
							<img src="<?= $files[$i + $j] ?>" alt="Test" class="img-fluid">
						</a>
					</div><!-- /col-md-3 -->

					<?php
				}

			}

			?></div>

		<?php
	}
	?>

</div>

