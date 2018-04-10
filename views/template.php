<!DOCTYPE html>
<html lang="nl">
<head>
	<?php
		$this->insert('partials/head', ['title' => $this->e($title), 'extracss' => $this->e($extracss)]);
	?>
</head>
<body>

<?php
	$this->insert('partials/nav', ['id' => $this->e($id)]);
?>

<main role="main">

	<?=$this->section('content')?>

</main>

<?php $this->insert('partials/footer'); ?>

</body>
</html>
