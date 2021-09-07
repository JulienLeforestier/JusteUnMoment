<?php

$title = 'Accueil';

require_once('inc/header.php');

// corps de la page
?>

<div class="container-fluid justify-content-center mb-5">
    <div id="carouselHeaderIndex" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselHeaderIndex" data-slide-to="0" class="active"></li>
            <li data-target="#carouselHeaderIndex" data-slide-to="1"></li>
            <li data-target="#carouselHeaderIndex" data-slide-to="2"></li>
            <li data-target="#carouselHeaderIndex" data-slide-to="3"></li>
            <li data-target="#carouselHeaderIndex" data-slide-to="4"></li>
            <li data-target="#carouselHeaderIndex" data-slide-to="5"></li>
            <li data-target="#carouselHeaderIndex" data-slide-to="6"></li>
            <li data-target="#carouselHeaderIndex" data-slide-to="7"></li>
            <li data-target="#carouselHeaderIndex" data-slide-to="8"></li>
            <li data-target="#carouselHeaderIndex" data-slide-to="9"></li>
            <li data-target="#carouselHeaderIndex" data-slide-to="10"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active"><img src="photos/accueil/1.jpg" class="d-block w-100" alt="accueil_1"></div>
            <div class="carousel-item"><img src="photos/accueil/2.jpg" class="d-block w-100" alt="accueil_2"></div>
            <div class="carousel-item"><img src="photos/accueil/3.jpg" class="d-block w-100" alt="accueil_3"></div>
            <div class="carousel-item"><img src="photos/accueil/4.jpg" class="d-block w-100" alt="accueil_4"></div>
            <div class="carousel-item"><img src="photos/accueil/5.jpg" class="d-block w-100" alt="accueil_5"></div>
            <div class="carousel-item"><img src="photos/accueil/6.jpg" class="d-block w-100" alt="accueil_6"></div>
            <div class="carousel-item"><img src="photos/accueil/7.jpg" class="d-block w-100" alt="accueil_7"></div>
            <div class="carousel-item"><img src="photos/accueil/8.jpg" class="d-block w-100" alt="accueil_8"></div>
            <div class="carousel-item"><img src="photos/accueil/10.jpg" class="d-block w-100" alt="accueil_10"></div>
            <div class="carousel-item"><img src="photos/accueil/11.jpg" class="d-block w-100" alt="accueil_11"></div>
            <div class="carousel-item"><img src="photos/accueil/12.jpg" class="d-block w-100" alt="accueil_12"></div>
        </div>
        <a class="carousel-control-prev" href="#carouselHeaderIndex" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span> 
            <span class="sr-only">Suivant</span>
        </a>
        <a class="carousel-control-next" href="#carouselHeaderIndex" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span> 
            <span class="sr-only">Précédent</span>
        </a>
    </div>
</div>
<hr>
<div class="container-fluid justify-content-center my-5">
    <div class="row">
        <div class="col-md-2 p-1 manual-center">
            <a href="<?php echo URL ?>maternity.php"><img src="photos/maternite/Alexandra37_p.jpg" alt="Alexandra37_p" class="w-100"></a>
            <h3>Maternité</h3>
            <p>Une séance tout en douceur, juste pour soi, en couple ou en famille pour garder une trace de ce bonheur indéfinissable que l’on ressent en portant la vie…</p>
        </div>
        <div class="col-md-3"></div>
        <div class="col-md-2 p-1 manual-center">
            <a href="<?php echo URL ?>newborns.php"><img src="photos/nouveau_ne/Elise16_p.jpg" alt="Elise16_p" class="w-100"></a>
            <h3>Nouveaux-nés</h3>
            <p>Photographe spécialisée et formée aux spécificités de la photographie de nouveau-né, je vous propose d’ immortaliser la douceur de ses premiers jours de vie…</p>
        </div>
        <div class="col-md-3"></div>
        <div class="col-md-2 p-1 manual-center">
            <a href="<?php echo URL ?>babies.php"><img src="photos/bebe/Robin_et_Milo45_p.jpg" alt="Robin_et_Milo45_p" class="w-100"></a>
            <h3>Bébés</h3>
            <p>La première année de bébé passe si vite. Je vous propose des images épurées et douces afin garder un souvenir de vos enfants tels qu’ils sont: souriants, surpris, grognons, tendres…</p>
        </div>
    </div>
</div>
<hr>
<div class="container-fluid justify-content-center manual-center my-5">
    <div class="col-md-10 offset-md-1">
        <a href="<?php echo URL ?>about.php"><img src="photos/a_propos/0035_ANNE-L-LISE-GARGUIL-PHOTO-035_WEB.jpg" alt="about_me" class="w-50"></a>
        <br><br>
        <h3>À propos de moi</h3>
        <p>Photographe spécialisée dans la photographie de maternité, de nouveau-né et de bébé. Je vous reçois dans mon “home studio” situé à 20 minutes de Rouen.</p>
    </div>
</div>
<hr>
<div class="col text-center my-5">
    <h3>Réservez votre séance!</h3>
    <a href="<?php echo URL ?>contact.php" class="btn btn-outline-info mb-2">Réservation</a>
</div>

<?php
require_once('inc/footer.php');
