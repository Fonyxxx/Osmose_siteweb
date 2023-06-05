<?php 
$page_titre = "Biere";
$css = "public/css/style_presentation.css";

require_once 'config.php';
require_once 'app/model/dataConnection.php';
require_once 'app/model/presentation.model.php';

$db = getDatabaseConnection();
$biereArray = getAllBiere($db);
shuffle($biereArray);
$count = 0;



$id_biere = $_GET['edit'];
$SpebiereArray = getSpeBiere($db, $id_biere);



ob_start();

include "view/presentation.view.php"; 
$content = ob_get_clean();
include "view/common/layout.php";