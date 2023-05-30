<?php 
$page_titre = "Bieres";
$css = "public/css/style_bieres.css";
ob_start();

include "view/bieres.view.php"; 
$content = ob_get_clean();
include "view/common/layout.php";