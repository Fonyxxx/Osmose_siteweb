
    <div class="container_presentation"> 

        <div class="page_precedente">
            <a href="#" onclick="goBack()" ><i class='bx bx-chevron-left'></i></a>
            <a href="#" onclick="goBack()" ><h1>Retournez sur la page précédente</h3></a>
        </div>

        <?php 
        foreach ($SpebiereArray as $row) {
        ?> 

        <div class="bordure_presentation">
            <h1><?php echo $row['nom'];?></h1>
        <div class="presentation">

            <div class="image_fond">
                <div>
                    <img class="image_biere" src="public/images/bieres_seules/<?php echo $row['image'];?>" alt="image de la bière">
                </div>
            </div>
            
            <div class="elements_biere">

                <div class="element" id="aromes">
                    <h2 class="titre_element">Arôme</h2>
                    <p class="texte_element"><?php echo $row['aromes'];?></p>
                </div>
                <div class="element" id="type">
                    <h2 class="titre_element">Type</h2>
                    <p class="texte_element"><?php echo $row['type'];?></p>
                </div>
                <div class="element" id="prix">
                    <h2 class="titre_element">Prix</h2>
                    <p class="texte_element"><?php echo $row['prix'];?>€</p>
                </div>
                <div class="" id="description">
                    <h2 class="titre_element">Description</h2>
                    <p class="texte_element"><?php echo $row['description'];?></p>
                </div>

            </div>
        </div>
        </div>
        <?php } ?>

        <div class="decouvrez_plus">
            <div class="text_decouvrez_plus">
                <h1>Découvrez-en plus</h1>
            </div>
            <div class="bieres">
            <?php
            foreach ($biereArray as $row) {
            if ($count >= 4) {
            break; // Sortir de la boucle après avoir affiché 4 bières
            }
            ?>
            <a href="presentation.php?edit=<?php echo $row['id_biere']?>">
            <div class="bloc_biere">
                <img src="public/images/bieres/<?php echo $row['image']; ?>">
                <div class="text_bieres">
                    <h3><?php echo $row['nom']; ?></h3>
                    <h5><?php echo $row['prix']; ?>€</h5>
                </div>
            </div>
            </a>
            <?php 
            $count++;
            } 
            ?>
            </div>
        </div>

    </div>


<script>
function goBack() {
  history.back();
}
</script>