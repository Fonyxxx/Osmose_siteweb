<?php 
$page_titre = "bieres";
$css = "";
ob_start();

include "view/bieres.view.php"; 
$content = ob_get_clean();
include "view/common/layout.php";