<?php

function getAllBiere(PDO $db): array {
   $sql = "SELECT id_biere, nom, prix, image FROM biere";
   $stmt = $db->query($sql);
   return $stmt->fetchAll();
}

function getSpeBiere(PDO $db, $id_biere): array {
   $sql = "SELECT * FROM biere WHERE id_biere = :id_biere";
   $stmt = $db->prepare($sql);
   $stmt->bindParam(':id_biere', $id_biere);
   $stmt->execute();
   return $stmt->fetchAll();
}
