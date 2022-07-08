<?php global $Wcms; ?>
<!DOCTYPE HTML>
<html>
<head>
	<title><?= $Wcms->get('config', 'siteTitle') ?></title>
	<meta name="description" content="<?= $Wcms->page('description') ?>">
	<meta name="keywords" content="<?= $Wcms->page('keywords') ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="<?= $Wcms->asset('css/user-style.css') ?>">
	<?php if ($Wcms->loggedIn) { ?>
		<link rel="stylesheet" href="<?= $Wcms->asset('css/style.css') ?>">
	<?php } ?>
	</head>
	<body>
		<?= $Wcms->alerts() ?>
		<?= $Wcms->settings() ?>
		<nav><ul><?= $Wcms->menu() ?></ul></nav>
		<section><?= $Wcms->page('content') ?></section>
		<footer><?= $Wcms->footer() ?></footer>
		<?= $Wcms->js() ?>
</body>
</html>