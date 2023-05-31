<div class="intro_form">
    <h1>Panier</h1>
    <h4>Remplissez ces formulaires en choisissant la quantité afin de prendre votre commande !</h4>
</div>


<div class="forms_haut">
    <form class="formulaire_bieres_box" id="form_bieres">

        <label for="bieres">La Grand-Est</label>
        <input type="number" id="grand-est" name="grand-est" min="0" max="10">

        <label for="bieres">La Normande</label>
        <input type="number" id="normande" name="normande" min="0" max="10">

        <label for="bieres">L'Occitane</label>
        <input type="number" id="occitane" name="occitane" min="0" max="10">

        <label for="bieres">La Corse</label>
        <input type="number" id="corse" name="corse" min="0" max="10">

        <label for="bieres">La Provence Alpes Côte-d'Azur</label>
        <input type="number" id="provence" name="provence" min="0" max="10">

        <label for="bieres">La Pays de la Loire</label>
        <input type="number" id="loire" name="loire" min="0" max="10">

        <label for="bieres">La Hauts-de-France</label>
        <input type="number" id="hauts" name="hauts" min="0" max="10">

    </form>


    <form class="formulaire_bieres_box" id="form_box">

        <label for="bieres">Grand-Est</label>
        <input type="number" id="box_grand-est" name="box_grand-est" min="0" max="10">

        <label for="bieres">Normandie</label>
        <input type="number" id="box_normandie" name="box_normandie" min="0" max="10">

        <label for="bieres">Occitanie</label>
        <input type="number" id="box_occitanie" name="box_occitanie" min="0" max="10">

        <label for="bieres">Corse</label>
        <input type="number" id="box_corse" name="box_corse" min="0" max="10">

        <label for="bieres">Provence Alpes Côte-d'Azur</label>
        <input type="number" id="box_provence" name="box_provence" min="0" max="10">

        <label for="bieres">Pays de la Loire</label>
        <input type="number" id="box_loire" name="box_loire" min="0" max="10">

        <label for="bieres">Hauts-de-France</label>
        <input type="number" id="box_hauts" name="box_hauts" min="0" max="10">
        
    </form>
</div>


<form class="formulaire_info" action="lapage.php">

  <label for="prenom">Prénom</label><br>
  <input type="text" id="prenom" name="prenom" placeholder="Prénom"><br>
  
  <label for="nom">Nom</label><br>
  <input type="text" id="nom" name="nom" placeholder="Nom"><br>
  
  <label for="email">Email</label><br>
  <input type="email" id="email" name="email" placeholder="xxx.xxxx@gmail.com"><br>
  
  <label for="tel">Téléphone</label><br>
  <input type="tel" id="tel" name="tel" placeholder="XX XX XX XX XX"><br>
  
  <label for="adresse">Adresse</label><br>
  <input type="text" id="adresse" name="adresse" placeholder="12 avenue des Lys"><br>
  
  <label for="ville">Ville</label><br>
  <input type="text" id="ville" name="ville" placeholder="Maville"><br>
  
  <label for="code_postal">Code Postal</label><br>
  <input type="text" id="code_postal" name="code_postal" placeholder="XX XXX"><br>
  
  <div>
      <input type="checkbox" id="consent" name="consent" unchecked>
      <label for="scales">En cochant cette case, j'affirme avoir lu et accepté la politique de confidentialité</label>
  </div>

  <input type="submit" value="Submit">
</form> 


</section>





