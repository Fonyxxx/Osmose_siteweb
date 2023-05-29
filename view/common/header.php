<!DOCTYPE html>
<html>
<head>
	<title><?= $page_titre ?></title>
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="http://www.cdnfonts.com/apollo.font" rel="canonical">
	<link rel="stylesheet" href="../../public/css/style_header.css">
    <?php if (isset($css)): ?>
        <link rel="stylesheet" href="<?= $css ?>">
    <?php endif ?>

</head>
<body>
	<header>
		
	<div class="logo">
			<img src="../../public/images/osmose_vert.png" >
		</div>
	
		<nav>
			<ul class="navlist">
				<li><a href="#">BOUTIQUE</a></li>
				<li><a href="#">BRASSERIE</a></li>
				<li><a href="#">EVENEMENT</a></li>
				<li><a href="#">CONTACT</a></li>
                <li class="icons_header"><a href="#"><i class='bx bx-search'></i></a></li>
                <li class="icons_header"><a href="#"><i class='bx bx-shopping-bag'></i></a></li>
			</ul>
		</nav>
	</header>

	<main>
