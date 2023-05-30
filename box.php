<?php 
$page_titre = "Box";
$css = "public/css/style_box.css";
ob_start();

include "view/box.view.php"; 
$content = ob_get_clean();
include "view/common/layout.php";