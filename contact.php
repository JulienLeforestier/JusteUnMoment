<?php

$title = 'Contact';

require_once('inc/header.php');

// corps de la page
?>
<div class="container-fluid justify-content-center manual-center my-5">
    <div class="col-md-10 offset-1">
        <form method="post">
            <div class="row">
                <div class="form-group col-md-6">
                    <input type="text" class="form-control" id="nameContact" name="nameContact" placeholder="Nom" required>
                </div>
                <div class="form-group col-md-6">
                    <input type="email" class="form-control" id="emailContact" name="emailContact" placeholder="Adresse e-mail" pattern="^[^\W][a-zA-Z0-9]+(.[a-zA-Z0-9]+)@[a-zA-Z0-9]+(.[a-zA-Z0-9]+).[a-zA-Z]{2,4}$" required>
                </div>
            </div>
            <div class="form-group">
                <textarea class="form-control" id="messageContact" name="messageContact" placeholder="Message" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn btn-outline-info">Envoyer</button>
        </form>
    </div>
</div>
<div class="container-fluid justify-content-center manual-center">
    <p>Toutes les séances ont lieu à mon domicile situé à La Vieux Rue (à 20 mn de Rouen).</p>
    <p>Les séances ont lieu les lundi, mardi, jeudi et vendredi à 10h30 ou 14h/14h30.</p>
    <p>N’hésitez pas à suivre mon actualité sur <a href="https://www.facebook.com/profile.php?id=100063601297728" target="_blank">Facebook</a> ou <a href="https://www.instagram.com/justeunmomentphotographie/" target="_blank">Instagram</a>.</p>
</div>

<?php
require_once('inc/footer.php');


// <?php 
// ini_set( 'display_errors', 1 );
// error_reporting( E_ALL );
// $from = "nuxit@jleforestier.fr";
// $to = "aladin.dahra@nuxit.com";
// $subject = "PHP Mail Test script";
// $message = "This is a test to check the PHP Mail functionality";
// $headers = "From:" . $from;
// mail($to,$subject,$message, $headers);
// echo "Test email sent";

// justeunmomentphotographie@gmail.com