<?php 
$page_titre = "contact";
$css = "public/css/style_contact.css";
ob_start();

include "view/contact.view.php"; 
$content = ob_get_clean();
include "view/common/layout.php";