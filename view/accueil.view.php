<section class="group_top">
    <section class="top">
        <div class="presentation_top">
            <h1>La Grand-Est</h1>
            <p>Découvrez les saveurs du miel et du sapin à travers cette bière.</p>
            <p>Pour plus de plaisir, associez cette bière à un beau morceau de Munster venu tout droit du Grand Est !</p>
        </div>
        <div class="photo_top">
            <img src="public/images/biere_accueil.png">
        </div>  
    </section>
    <div class="bouton_place">
        <a href="#" id="bouton_decouvrir">Découvrir</a>
    </div>
</section>


<section class="publicite">
    <h2>Trouvez la parfaite osmose entre nos bières aux arômes surprenants et vos fromages régionaux de qualité supérieure !</h2>
    <video class="publicite_osmose" src="public/video/publicite_osmose.mp4" controls="" data-sr-id="38" style="visibility: visible; opacity: 1; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transition: opacity 2s cubic-bezier(0.5, 0, 0, 1) 0.2s, transform 2s cubic-bezier(0.5, 0, 0, 1) 0.2s;">La vidéo ne peut pas être lu</video>
</section>

<section class="plus_vendues">
    <div class="text_plus_vendues">
        <h1>Les Plus Vendues</h1>
    </div>
    <div class="bieres">
    <?php 
    $db = getDatabaseConnection();
    $biereArray = getAllBiere($db);
    shuffle($biereArray);
    $count = 0;

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
</section>


<section class="nos_box">
    <div class="text_nos_box">
        <h1>Les Box</h1>
    </div>
    <div class="box">
    <?php 
    $db = getDatabaseConnection();
    $boxArray = getAllBox($db);
    shuffle($boxArray);
    $count = 0;

    foreach ($boxArray as $row) {
        if ($count >= 4) {
            break; // Sortir de la boucle après avoir affiché 4 bières
        }
    ?>
        <div class="bloc_box">
            <img src="public/images/box/<?php echo $row['image']; ?>">
            <div class="text_box">
                <h3><?php echo $row['nom']; ?></h3>
                <h5><?php echo $row['prix']; ?>€</h5>
            </div>
        </div>
        <?php 
        $count++;
    } 
    ?>
    </div>
</section>