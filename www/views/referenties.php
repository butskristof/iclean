<?php $this->layout('template', ['title' => 'Referenties - iClean', 'id' => 'referenties']) ?>


<div class="container" id="referenties">
	<h1>Referenties</h1>

	<p class="lead">Klik op een foto voor een grotere versie.</p>

	<?php
	$files = scandir("static/img/refs/", 0);
	$files = glob('static/img/refs/*.{jpg,JPG,jpeg,JPEG,png,PNG,gif,GIF}', GLOB_BRACE);

	$noOfFiles = sizeof($files);

	for ($i = 0; $i < $noOfFiles; $i += 4) {
		?>

		<div class="row"><?php

			for ($j = 0; $j < 4; ++$j) {

				if ($i + $j < ($noOfFiles)) {
					?>

					<div class="col-3">
						<a href="<?= $files[$i + $j] ?>" class="mfp-link">
							<img src="<?= $files[$i + $j] ?>" alt="<?= $files[$i+$j] ?>" class="img-fluid">
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

