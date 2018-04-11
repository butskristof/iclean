	<!-- META -->
	<meta charset="UTF-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="iClean: uw ruit, onze zorg">
	<meta name="author" content="Kristof Buts">

	<!-- TITLE -->
	<title><?=$this->e($title)?></title>

	<!-- FAVICONS -->
	<link rel="manifest" href="/site.webmanifest">
	<link rel="apple-touch-icon" href="/icon.png">
	<!-- Place favicon.ico in the root directory -->

	<!-- STYLESHEETS AND LIBRARIES -->
	<link rel="stylesheet" href="/static/css/normalize.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans|Quicksand" rel="stylesheet">
	<link rel="stylesheet" href="/static/css/main.css">
	<link rel="stylesheet" href="/static/css/custom.css">
	<?php
	if ($this->e($extracss)) { ?>
		<link rel="stylesheet" href="<?=$this->e($extracss)?>">
	<?php }
	?>

	<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
	<link rel="stylesheet" href="/static/css/magnific-popup.css">
