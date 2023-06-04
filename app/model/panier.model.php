<?php
function createClient(PDO $db, $prenom, $nom, $email, $adresse, $ville, $code_postal) {
   $sql = "INSERT INTO client (prenom, nom, email, adresse, ville, code_postal) VALUES (:prenom, :nom, :email, :adresse, :ville, :code_postal)";
   $stmt = $db->prepare($sql);
   $stmt->bindParam(':prenom', $prenom);
   $stmt->bindParam(':nom', $nom);
   $stmt->bindParam(':email', $email);
   $stmt->bindParam(':adresse', $adresse);
   $stmt->bindParam(':ville', $ville);
   $stmt->bindParam(':code_postal', $code_postal);
   $stmt->execute();

   $clientId = $db->lastInsertId();

   return $clientId;
}