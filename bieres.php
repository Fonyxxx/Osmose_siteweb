<?php 
$page_titre = "Bieres";
$css = "public/css/style_bieres.css";
require_once 'config.php';
require_once 'app/model/dataConnection.php';
require_once 'app/model/bieres.model.php';
ob_start();

include "view/bieres.view.php"; 
$content = ob_get_clean();
include "view/common/layout.php";