<?php 
$page_titre = "brasserie";
$css = "public/css/style_brasserie.css";
ob_start();

include "view/brasserie.view.php"; 
$content = ob_get_clean();
include "view/common/layout.php";