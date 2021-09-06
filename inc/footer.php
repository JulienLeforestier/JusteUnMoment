<?php
if (preg_match('#^localhost$#', $_SERVER['HTTP_HOST'])) $url = '/workspacevsc/room/';
else $url = 'https://www.jleforestier.fr/Room/';
?>

</main>
<footer class="container-fluid">
    <div class="row">
        <div class="bg-light text-center py-3 w-100">
            &copy; <?php echo date('Y') ?> - Juste Un Moment - Tous droits réservés - <a href="https://www.facebook.com/profile.php?id=100063601297728" class="fab fa-facebook" target="_blank"></a> <a href="https://www.instagram.com/justeunmomentphotographie/" class="fab fa-instagram-square" target="_blank"></a>
        </div>
    </div>
</footer>
<?php if (!isset($_COOKIE["acceptcookies"])) : ?>
    <div id="bandeaucookies" class="bg-primary w-100 text-light d-flex align-items-center justify-content-center py-3">
        Ce site utilise des cookies afin d'améliorer votre confort de navigation sur notre site.
        <a href="" id="confirmcookies" class="btn btn-outline-light ml-3">J'ai compris</a>
    </div>
<?php endif; ?>
</body>

</html>