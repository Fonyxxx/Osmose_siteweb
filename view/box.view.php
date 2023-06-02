<section class="nos_box">
    <div class="text_nos_box">
        <h1>Nos box</h1>
    </div>
    <div class="box">
    <?php 
        $db = getDatabaseConnection();
        $boxArray = getAllBox($db);
        foreach ($boxArray as $row) {
        ?>
        <div class="bloc_box">
            <img src="public/images/box/<?php echo $row['image']; ?>">
            <div class="text_bieres">
                <h3><?php echo $row['nom']; ?></h3>
                <h5><?php echo $row['prix']; ?>€</h5>
            </div>
        </div>
        <?php } ?>
    </div>
</section>


<section class="nos_box">
    <div class="text_nos_box">
        <h1>Prochainement</h1>
    </div>
    <div class="box">
        <div class="bloc_box">
            <img src="">
            <div class="text_box">
                <h3>Bourgogne Franche-Comté</h3>
                <h5>11,90 €</h5>
            </div>
        </div>
        <div class="bloc_box">
            <img src="">
            <div class="text_box">
                <h3>Centre-Val-de-Loire</h3>
                <h5>11,90 €</h5>
            </div>
        </div>
        <div class="bloc_box">
            <img src="">
            <div class="text_box">
                <h3>Bretagne</h3>
                <h5>11,90 €</h5>
            </div>
        </div>
        <div class="bloc_box">
            <img src="">
            <div class="text_box">
                <h3>Nouvelle Aquitaine</h3>
                <h5>11,90 €</h5>
            </div>
        </div>
        <div class="bloc_box">
            <img src="">
            <div class="text_box">
                <h3>Auvergne Rhône-Alpes</h3>
                <h5>11,90 €</h5>
            </div>
        </div>
        <div class="bloc_box">
            <img src="">
            <div class="text_box">
                <h3>Ile-de-France</h3>
                <h5>11,90 €</h5>
            </div>
        </div>
    </div>
</section>