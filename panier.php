<?php
$page_titre = "Panier";
$css = "public/css/style_panier.css";
require_once 'config.php';
require_once 'app/model/dataConnection.php';
require_once 'app/model/bieres.model.php';
require_once 'app/model/box.model.php';
require_once 'app/model/panier.model.php';

$db = getDatabaseConnection();
$biereArray = getAllBiere($db);
$boxArray = getAllBox($db);

/*
// Vérifier si le formulaire a été soumis
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $adresse = $_POST['adresse'];
    $ville = $_POST['ville'];
    $code_postal = $_POST['code_postal'];

    // Appel de la fonction createClient pour créer le compte client
    $clientId = createClient($db, $prenom, $nom, $email, $adresse, $ville, $code_postal);
*/

ob_start();
include "view/panier.view.php";
$content = ob_get_clean();
include "view/common/layout.php";
?>