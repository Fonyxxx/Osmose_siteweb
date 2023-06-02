<?php
function getAllBox(PDO $db): array {
   $sql = "SELECT id_box, nom, prix, image FROM box";
   $stmt = $db->query($sql);
   return $stmt->fetchAll();
}