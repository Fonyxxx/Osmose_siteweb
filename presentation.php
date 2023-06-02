<?php 
$page_titre = "Biere";
$css = "public/css/style_presentation.css";

require_once 'config.php';
require_once 'app/model/dataConnection.php';
require_once 'app/model/presentation.model.php';

ob_start();

include "view/presentation.view.php"; 
$content = ob_get_clean();
include "view/common/layout.php";