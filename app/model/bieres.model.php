<?php
function getAllBiere(PDO $db): array {
   $sql = "SELECT id_biere, nom, prix, image FROM biere";
   $stmt = $db->query($sql);
   return $stmt->fetchAll();
}