<div class="intro_form">
    <h1>Panier</h1>
    <h4>Remplissez ces formulaires en choisissant la quantité afin de prendre votre commande !</h4>
</div>


<div class="forms_haut">
    <form class="formulaire_bieres_box" id="form_bieres">
        <h2>Nos Bières</h2>

        <div class="group_produit"> 
            <img src="public/images/bieres/grand_est.png">
            <div class="noms_bieres">
                <label for="bieres">La Grand-Est</label>
                <input type="number" id="grand-est" name="grand-est" min="0" max="10">
            </div>
        </div>

        <div class="group_produit">
            <img src="public/images/bieres/normandie.png">
            <div class="noms_bieres">
                <label for="bieres">La Normande</label>
                <input type="number" id="normande" name="normande" min="0" max="10">
            </div>
        </div>

        <div class="group_produit">
            <img src="public/images/bieres/occitanie.png">
            <div class="noms_bieres">
                <label for="bieres">L'Occitane</label>
                <input type="number" id="occitane" name="occitane" min="0" max="10">
            </div>
        </div>

        <div class="group_produit">
            <img src="public/images/bieres/corse.png">
            <div class="noms_bieres">
                <label for="bieres">La Corse</label>
                <input type="number" id="corse" name="corse" min="0" max="10">
            </div>
        </div>

        <div class="group_produit">
            <img src="public/images/bieres/provence.png">
            <div class="noms_bieres">
                <label for="bieres">La Provence Alpes Côte-d'Azur</label>
                <input type="number" id="provence" name="provence" min="0" max="10">
            </div>
        </div>

        <div class="group_produit">
            <img src="public/images/bieres/loire.png"> 
            <div class="noms_bieres">   
                <label for="bieres">La Pays de la Loire</label>
                <input type="number" id="loire" name="loire" min="0" max="10">
            </div>
        </div>

        <div class="group_produit">
            <img src="public/images/bieres/hauts.png">
            <div class="noms_bieres">
                <label for="bieres">La Hauts-de-France</label>
                <input type="number" id="hauts" name="hauts" min="0" max="10">
            </div>
        </div>
    </form>


    <form class="formulaire_bieres_box" id="form_box">
        <h2>Nos Box</h2>

    <div class="group_produit"> 
            <img src="public/images/box/box_grand_est.png">
            <div class="noms_bieres">
                <label for="bieres">Grand-Est</label>
                <input type="number" id="box_grand-est" name="box_grand-est" min="0" max="10">
            </div>
        </div>

        <div class="group_produit">
            <img src="public/images/box/box_normandie.png">
            <div class="noms_bieres">
                <label for="bieres">Normandie</label>
                <input type="number" id="box_normande" name="box_normande" min="0" max="10">
            </div>
        </div>

        <div class="group_produit">
            <img src="public/images/box/box_occitanie.png">
            <div class="noms_bieres">
                <label for="bieres">Occitanie</label>
                <input type="number" id="box_occitane" name="box_occitane" min="0" max="10">
            </div>
        </div>

        <div class="group_produit">
            <img src="public/images/box/box_corse.png">
            <div class="noms_bieres">
                <label for="bieres">Corse</label>
                <input type="number" id="box_corse" name="box_corse" min="0" max="10">
            </div>
        </div>

        <div class="group_produit">
            <img src="public/images/box/box_provence.png">
            <div class="noms_bieres">
                <label for="bieres">Provence Alpes Côte-d'Azur</label>
                <input type="number" id="box_provence" name="box_provence" min="0" max="10">
            </div>
        </div>

        <div class="group_produit">
            <img src="public/images/box/box_pays_loire.png"> 
            <div class="noms_bieres">   
                <label for="bieres">Pays de la Loire</label>
                <input type="number" id="box_loire" name="box_loire" min="0" max="10">
            </div>
        </div>

        <div class="group_produit">
            <img src="public/images/box/box_hauts_france.png">
            <div class="noms_bieres">
                <label for="bieres">Hauts-de-France</label>
                <input type="number" id="box_hauts" name="box_hauts" min="0" max="10">
            </div>
        </div>

    </form> 
</div>

<h6 id="rappel">Rappel : Pour le moment toutes nos bières coûtent 4,50 € et nos box 11,90 €</h6>

<form class="formulaire_info" id="formulaire_info" action="lapage.php">
    <div id="bloc_prenom">
        <label for="prenom">Prénom</label><br>
        <input type="text" id="prenom" name="prenom" placeholder="Prénom"><br>
    </div>

    <div id="bloc_nom">
        <label for="nom">Nom</label><br>
        <input type="text" id="nom" name="nom" placeholder="Nom"><br>
    </div>

    <div id="bloc_email" >
        <label for="email">Email</label><br>
        <input type="email" id="email" name="email" placeholder="xxx.xxxx@gmail.com"><br>
    </div>

    <div id="bloc_tel">
        <label for="tel">Téléphone</label><br>
        <input type="tel" id="tel" name="tel" placeholder="XX XX XX XX XX"><br>
    </div>

    <div id="bloc_adresse">
        <label for="adresse">Adresse</label><br>
        <input type="text" id="adresse" name="adresse" placeholder="12 avenue des Lys"><br>
    </div>

    <div id="bloc_ville">
        <label for="ville">Ville</label><br>
        <input type="text" id="ville" name="ville" placeholder="Maville"><br>
    </div>
    
    <div id="bloc_code_postal">
        <label for="code_postal">Code Postal</label><br>
        <input type="text" id="code_postal" name="code_postal" placeholder="XX XXX"><br>
    </div>

    <div id="consent_sub">
        <div id="pol_consent">
            <input type="checkbox" id="consent" name="consent" unchecked>
            <label for="scales">En cochant cette case, j'affirme avoir lu et accepté la politique de confidentialité</label>
        </div>
        <input id="le_bouton" type="submit" value="Submit">
    </div>
</form> 


</section>





