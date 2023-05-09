<?php 
$page_titre = "goodies";
$css = "";
ob_start();

include "view/goodies.view.php"; 
$content = ob_get_clean();
include "view/common/layout.php";