<?php 
$page_titre = "Box";
$css = "public/css/style_box.css";
require_once 'config.php';
require_once 'app/model/dataConnection.php';
require_once 'app/model/box.model.php';


ob_start();
include "view/box.view.php"; 
$content = ob_get_clean();
include "view/common/layout.php";