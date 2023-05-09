<?php 
$page_titre = "goodies";
$css = "public/css/style_goodies.css";
ob_start();

include "view/evenements.view.php"; 
$content = ob_get_clean();
include "view/common/layout.php";