<?php

$title = 'Accueil';

require_once('inc/header.php');

// corps de la page
?>

<div class="container-fluid justify-content-center">
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

<?php
require_once('inc/footer.php');
