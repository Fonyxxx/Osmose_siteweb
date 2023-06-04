<main>
    <?php 
    $id_biere = $_GET['edit'];
    $SpebiereArray = getSpeBiere($db, $id_biere);
    ?>
    <div class="container_presentation"> 

        <div class="page_précédente">
            <a href=""><i class='bx bx-chevron-left'></i></a>
            <h1>Retournez sur la page précédente</h3>
        </div>

        <?php 
        foreach ($SpebiereArray as $row) {
        ?> 

        <div class="presentation">
            <h1><?php echo $row['nom'];?></h1>

            <div class="image_fond">
                <img class="image_biere" src="public/images/bieres_seules/<?php echo $row['image'];?>" alt="">
                <img id ="img_background" src="public/images/fonds/fond_grand_est.svg" alt="">
            </div>
            
            <div class="elements_biere">

                <div class="element" id="aromes">
                    <h2 class="titre_element">Arôme</h2>
                    <p><?php echo $row['aromes'];?></p>
                </div>
                <div class="element" id="type">
                    <h2 class="titre_element">Type</h2>
                    <p><?php echo $row['type'];?></p>
                </div>
                <div class="element" id="prix">
                    <h2 class="titre_element">Prix</h2>
                    <p><?php echo $row['prix'];?>€</p>
                </div>
                <div class="element" id="description">
                    <h2 class="titre_element">Description</h2>
                    <p><?php echo $row['description'];?></p>
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
            <div class="bloc_biere">
                <img src="public/images/bieres/<?php echo $row['image']; ?>">
                <div class="text_bieres">
                    <h3><?php echo $row['nom']; ?></h3>
                    <h5><?php echo $row['prix']; ?>€</h5>
                </div>
            </div>
            <?php 
            $count++;
            } 
            ?>
            </div>
        </div>

    </div>


</main>