	<!-- META -->
	<meta charset="UTF-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="iClean: uw ruit, onze zorg">
	<meta name="author" content="Kristof Buts">

	<!-- TITLE -->
	<title><?=$this->e($title)?></title>

	<!-- FAVICONS -->
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<link rel="manifest" href="/site.webmanifest">
	<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#2b5797">
	<meta name="msapplication-TileColor" content="#2b5797">
	<meta name="theme-color" content="#ffffff">

	<!-- STYLESHEETS AND LIBRARIES -->
	<link rel="stylesheet" href="/static/css/normalize.min.css">
	<link rel="stylesheet" href="/static/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans|Quicksand" rel="stylesheet">
	<link rel="stylesheet" href="/static/css/main.min.css">
	<link rel="stylesheet" href="/static/css/custom.css">
	<?php
	if ($this->e($extracss)) { ?>
		<link rel="stylesheet" href="<?=$this->e($extracss)?>">
	<?php }
	?>

	<link rel="stylesheet" href="/static/css/magnific-popup.min.css">
	<link rel="stylesheet" href="/static/css/icomoon.css">
