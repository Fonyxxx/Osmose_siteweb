<section class="nos_bieres">
    <div class="text_nos_bieres">
        <h1>Nos bières</h1>
    </div>
    <div class="bieres">
        <?php 
        foreach ($biereArray as $row) {
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
        <?php } ?>
    </div>
</section>


<section class="prochaines_bieres">
    <div class="text_prochainement">
        <h1>Prochainement</h1>
    </div>
    <div class="bieres_mystere">
        <div class="bloc_prochainement">
            <img src="public/images/prochainement/biere_mystere_1.png">
            <div class="text_prochainement">
                <h3>La Bourgogne Franche-Comté</h3>
                <h5>4,90 €</h5>
            </div>
        </div>
        <div class="bloc_prochainement">
            <img src="public/images/prochainement/biere_mystere_2.png">
            <div class="text_prochainement">
                <h3>La Centre-Val-de-Loire</h3>
                <h5>4,90 €</h5>
            </div>
        </div>
        <div class="bloc_prochainement">
            <img src="public/images/prochainement/biere_mystere_3.png">
            <div class="text_prochainement">
                <h3>La Bretagne</h3>
                <h5>4,90 €</h5>
            </div>
        </div>
        <div class="bloc_prochainement">
            <img src="public/images/prochainement/biere_mystere_4.png">
            <div class="text_prochainement">
                <h3>La Nouvelle-Aquitaine</h3>
                <h5>4,90 €</h5>
            </div>
        </div>
        <div class="bloc_prochainement">
            <img src="public/images/prochainement/biere_mystere_5.png">
            <div class="text_prochainement">
                <h3>L'Auvergne Rhône-Alpes</h3>
                <h5>4,90 €</h5>
            </div>
        </div>
        <div class="bloc_prochainement">
            <img src="public/images/prochainement/biere_mystere_6.png">
            <div class="text_prochainement">
                <h3>L'Ile-de-France</h3>
                <h5>4,90 €</h5>
            </div>
        </div>
    </div>
</section>