<?php 
$page_titre = "Age";
$css = "public/css/style_index.css";
ob_start();

include "view/index.view.php"; 
$content = ob_get_clean();
include "view/common/layout.php";