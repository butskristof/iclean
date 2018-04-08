<!DOCTYPE html>
<html lang="nl">
<head>
	<?php $this->insert('partials/header', ['title' => $this->e($title)]); ?>
</head>
<body>

<?php
	//$id="home"; include('nav.php');
	$this->insert('partials/nav', ['id' => 'home']);
?>

<main role="main">

	<?=$this->section('content')?>

</main>

<?php $this->insert('partials/footer'); ?>

</body>
</html>
