<main>

<div class="intro_form">
    <h1>Panier</h1>
    <h4>Remplissez ces formulaires en choisissant la quantité afin de prendre votre commande !</h4>
</div>
<div class="forms_haut">
    <form class="formulaire_bieres_box" id="form_bieres">
        <h2>Nos Bières</h2>
        <?php 
        foreach ($biereArray as $row) {
        ?>
        <div class="group_produit"> 
            <img src="public/images/bieres/<?php echo $row['image']; ?>">
            <div class="noms_bieres">
                <label for="bieres"><?php echo $row['nom']; ?></label>
                <input type="number" id="<?php echo $row['nom']; ?>" name="<?php echo $row['nom']; ?>" data-id="<?php echo $row['id_biere']; ?>" min="0" max="10" placeholder="0">
            </div>
        </div>
        <?php } ?>
    </form>


    <form class="formulaire_bieres_box" id="form_box">
        <h2>Nos Box</h2>
        <?php
        foreach ($boxArray as $row) {
        ?>
        <div class="group_produit"> 
            <img src="public/images/box/<?php echo $row['image']; ?>">
            <div class="noms_bieres">
                <label for="bieres"><?php echo $row['nom']; ?></label>
                <input type="number" id="<?php echo $row['nom']; ?>" name="<?php echo $row['nom']; ?>" data-id="<?php echo $row['id_box']; ?>" min="0" max="10" placeholder="0">
            </div>
        </div>
        <?php } ?>
    </form> 
</div>

<h6 id="rappel">Rappel : Pour le moment toutes nos bières coûtent 4,50 € et nos box 11,90 €</h6>

<form class="formulaire_info" id="formulaire_info">
    <div id="bloc_prenom">
        <label for="prenom">Prénom</label><br>
        <input type="text" id="prenom" name="prenom" placeholder="Prénom" required><br>
    </div>

    <div id="bloc_nom">
        <label for="nom">Nom</label><br>
        <input type="text" id="nom" name="nom" placeholder="Nom" required><br>
    </div>

    <div id="bloc_email" >
        <label for="email">Email</label><br>
        <input type="email" id="email" name="email" placeholder="xxx.xxxx@xxx.com" required><br>
    </div>

    <div id="bloc_tel">
        <label for="tel">Téléphone</label><br>
        <input type="tel" id="tel" name="tel" placeholder="XX XX XX XX XX" required><br>
    </div>

    <div id="bloc_adresse">
        <label for="adresse">Adresse</label><br>
        <input type="text" id="adresse" name="adresse" placeholder="12 avenue des Lys" required><br>
    </div>

    <div id="bloc_ville">
        <label for="ville">Ville</label><br>
        <input type="text" id="ville" name="ville" placeholder="Maville" required><br>
    </div>
    
    <div id="bloc_code_postal">
        <label for="code_postal">Code Postal</label><br>
        <input type="text" id="code_postal" name="code_postal" placeholder="XX XXX" required><br>
    </div>

    <div id="consent_sub">
        <div id="pol_consent">
            <input type="checkbox" id="consent" name="consent" unchecked required>
            <label for="scales">En cochant cette case, j'affirme avoir lu et accepté la politique de confidentialité</label>
        </div>
        <div>
            <p id="commande_oui"></p>
        </div>
        <input id="bouton_panier" onclick="commande()" type="submit" value="Envoyer">
    </div>
</form> 

</main>


 <!------Lien JS------>
 <script type="text/javascript" src="public/js/panier.js"></script>



