<?php 
$page_titre = "age";
$css = "public/css/style_age.css";
ob_start();

include "view/age.view.php"; 
$content = ob_get_clean();
include "view/common/layout.php";