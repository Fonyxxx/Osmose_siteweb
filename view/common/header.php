<!DOCTYPE html>
<html>
<head>

	<title><?= $page_titre ?></title>
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="public/css/style.css">
    <?php if (isset($css)): ?>
        <link rel="stylesheet" href="<?= $css ?>">
    <?php endif ?>

</head>
<body>
	<header>
		
	<div class="logo">
			<a href="../../accueil.php"><img src="../../public/images/osmose.svg" ></a>
		</div>
	
		<nav>
			<ul>
				
				<li><a href="../../bieres.php">Boutique</a></li>
				<li><a href="../../brasserie.php">Brasserie</a></li>
				<li><a href="../../evenements.php">EVENEMENT</a></li>
				<li><a href="../../contact.php">Contact</a></li>
                <li><a href="../../panier.php"><i class='bx bx-shopping-bag bx-sm' ></i></a></li>
				
			</div>

			</ul>
		</nav>
		</header>
