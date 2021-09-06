<?php

$title = 'Tarifs';

require_once('inc/header.php');

// corps de la page
?>

<div class="container-fluid justify-content-center manual-center">
    <div class="row my-3">
        <div class="col-md-6">
            <h4>Séance Nouveaux-nés</h4>
            <p>(entre 5 et 12 jours) 240€ TTC</p>
            <p>(ce tarif comprend des photos avec vos ainés, dans la limite de deux enfants par séance).</p>
            <p>La séance dure environ 3-4h . 10 photographies retravaillées (couleur et leur conversion en noir et blanc soit 20 fichiers numériques au total) 
            à choisir sur votre galerie privée. Les photos choisies vous seront envoyées via un lien de téléchargement.</p>
        </div>
        <div class="col-md-6">
            <img src="photos/nouveau_ne/Elise16_p.jpg" alt="Elise16_p" class="w-50">
        </div>
    </div>
    <hr>
    <div class="row my-3">
        <div class="col-md-6">
            <img src="photos/bebe/Malo18_p.jpg" alt="Malo18_p" class="w-50">
        </div>
        <div class="col-md-6">
            <h4>Séance Bébés</h4>
            <p>(à partir de 3 mois et jusqu'à 12 mois) 140€ TTC</p>
            <p>(ce tarif comprend des photos avec Papa et Maman et avec vos ainés dans la limite de deux enfants supplémentaires par séance).</p>
            <p>La séance dure environ 1h . 10 photographies retravaillées (couleur et leur conversion en noir et blanc soit 20 fichiers numériques au total) 
            à choisir sur votre galerie privée. Les photos choisies vous seront envoyées via un lien de téléchargement.</p>
        </div>
    </div>
    <hr>
    <div class="row my-3">
        <div class="col-md-6">
            <h4>Séance Maternité</h4>
            <p>160€ TTC</p>
            <p>(ce tarif comprend des photos avec vos ainés, dans la limite de deux enfants par séance).</p>
            <p>La séance dure environ 1h30. Ce tarif comprend 10 photographies (couleur et leur conversion en noir et blanc soit 20 fichiers numériques au total) 
            retravaillées à choisir sur votre galerie privée. Les photos choisies vous seront envoyées via un lien de téléchargement.</p>
        </div>
        <div class="col-md-6">
            <img src="photos/maternite/Lena33.jpg" alt="Lena33" class="w-50">
        </div>
    </div>
    <hr>
    <div class="row my-3">
        <div class="col-md-6">
            <img src="photos/nouveau_ne/Raphael38.jpg" alt="Raphael38" class="w-50">
        </div>
        <div class="col-md-6">
            <h4>Pack 2 séances Maternité/Nouveaux-nés</h4>
            <p>380€ TTC</p>
            <p>(ce tarif comprend des photos avec vos ainés, dans la limite de deux enfants par séance).</p>
            <p>La séance maternité dure environ 1h-1h30. La séance nouveau-né dure entre 3 et 4 heures. 20 photographies retravaillées 
            (couleur et leur conversion en noir et blanc soit 40 fichiers numériques au total) à choisir sur votre galerie privée 
            (10 photos pour la séance maternité et 10 pour la séance nouveau-né). Les photos choisies vous seront envoyées via un lien de téléchargement.</p>
        </div>
    </div>
    <hr>
    <div class="row my-3">
        <div class="col-md-6">
            <h4>Mini séance Maternité</h4>
            <p>90€ TTC</p>
            <p>(ce tarif comprend uniquement des photos de la future maman seule et en couple sur mon fond noir).</p>
            <p>La séance dure environ 30 minutes. Ce tarif comprend 5 photographies (couleur et leur conversion en noir et blanc soit 10 fichiers numériques au total) 
            retravaillées à choisir sur votre galerie privée. Les photos choisies vous seront envoyées via un lien de téléchargement.</p>
        </div>
        <div class="col-md-6">
            <img src="photos/maternite/19_p.jpg" alt="maternite_19_p" class="w-50">
        </div>
    </div>
    <hr>
    <p>Option : La totalité des photos présentées sur votre galerie (en couleur et noir et blanc) ..... 100€ TTC (minimum 25photos)</p>
    <p>Tarif photo supplémentaire (fichier numérique) : 12€ TTC l'unité.</p>
</div>
<hr>
<div class="col text-center">
    <h4>Réservez votre séance!</h4>
    <a href="<?php echo URL ?>contact.php" class="btn btn-outline-info mb-2">Réservation</a>
</div>

<?php
require_once('inc/footer.php');
