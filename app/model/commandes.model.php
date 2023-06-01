<?php
function sendCommande(PDO $db, $id_biere, $id_commande, $quantite) {
   $sql = "INSERT INTO contenir_biere (id_biere, id_commande, quantite) VALUES (:id_biere, :id_commande, :quantite)";
   $stmt = $db->prepare($sql);
   $stmt->execute([
       'id_biere' => $id_biere,
       'id_commande' => $id_commande,
       'quantite' => $quantite
   ]);
}