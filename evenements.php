<?php 
$page_titre = "Evenements";
$css = "public/css/style_evenements.css";
ob_start();

include "view/evenements.view.php"; 
$content = ob_get_clean();
include "view/common/layout.php";