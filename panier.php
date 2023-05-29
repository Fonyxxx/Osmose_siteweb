<?php 
$page_titre = "Panier";
$css = "public/css/style_panier.css";
ob_start();

include "view/panier.view.php"; 
$content = ob_get_clean();
include "view/common/layout.php";