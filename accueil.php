<?php 
$page_titre = "accueil";
$css = "public/css/style_accueil.css";
ob_start();

include "view/accueil.view.php"; 
$content = ob_get_clean();
include "view/common/layout.php";