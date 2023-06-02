<?php 
$page_titre = "Panier";
$css = "public/css/style_panier.css";
require_once 'config.php';
require_once 'app/model/dataConnection.php';
require_once 'app/model/bieres.model.php';
require_once 'app/model/box.model.php';
ob_start();

include "view/panier.view.php"; 
$content = ob_get_clean();
include "view/common/layout.php";