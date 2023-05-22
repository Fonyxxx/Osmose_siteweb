<!DOCTYPE html>
<html>
<head>
	<title>Titre de la page</title>
	<link rel="stylesheet" href="public/css/style.css">
    <?php if (isset($css)): ?>
        <link rel="stylesheet" href="<?= $css ?>">
    <?php endif ?>

</head>
<body>
	<header>
		<div class="logo">
			<img src="../img/osmose.svg" alt="Logo de l'entreprise">
		</div>
		<nav>
			<ul>
				<li><a href="#">Accueil</a></li>
				<li><a href="#">À propos</a></li>
				<li><a href="#">Services</a></li>
				<li><a href="#">Blog</a></li>
				<li><a href="#">Contact</a></li>
			</ul>
		</nav>
	</header>

	<main>
	
	</main>
</body>
</html>
