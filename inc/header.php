<!DOCTYPE html>
<html lang="fr">

<?php
if (preg_match('#^localhost$#', $_SERVER['HTTP_HOST'])) {
    define('URL', '/workspacevsc/JusteUnMoment/');
} else {
    // define('URL', 'https://www.justeunmoment.com');
    define('URL', 'https://www.jleforestier.fr/JusteUnMoment/');
}
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Juste Un Moment | <?php echo $title ?></title>
    <link rel="stylesheet" href="libraries/jquery-ui-1.12.1/jquery-ui.min.css"/>
    <link rel="stylesheet" href="libraries/bootstrap-4.5.3-dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="libraries/fontawesome-free-5.15.4-web/css/all.min.css"/>
    <link rel="stylesheet" href="inc/css/style.css"/>
    <script src="libraries/jquery-3.5.1.min.js"></script>
    <script src="libraries/popper.min.js"></script>
    <script src="libraries/bootstrap-4.5.3-dist/js/bootstrap.min.js"></script>
    <script src="libraries/jquery-ui-1.12.1/jquery-ui.min.js"></script>
    <script src="inc/js/script.js"></script>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-light">
            <a class="navbar-brand" href="<?php echo URL ?>"><img src="<?php echo URL . 'photos/logo/logo_jump.png' ?>" alt="logo" id="logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto ml-auto">
                    <li class="nav-item <?php echo ($title == 'Accueil') ? 'active' : '' ?>">
                        <a class="nav-link" href="<?php echo URL ?>">Accueil<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item <?php echo ($title == 'À propos de moi') ? 'active' : '' ?>">
                        <a class="nav-link" href="<?php echo URL ?>about.php">À propos</a>
                    </li>
                    <li class="nav-item">
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link" data-toggle="dropdown">Galeries</a>
                            <div class="dropdown-menu">
                                <a href="<?php echo URL ?>maternity.php" class="dropdown-item">Maternités</a>
                                <a href="<?php echo URL ?>newborns.php" class="dropdown-item">Nouveaux-nés</a>
                                <a href="<?php echo URL ?>babies.php" class="dropdown-item">Bébés</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item <?php echo ($title == 'Témoignages') ? 'active' : '' ?>">
                        <a class="nav-link" href="<?php echo URL ?>testimonials.php">Témoignages</a>
                    </li>
                    <li class="nav-item <?php echo ($title == 'Tarifs') ? 'active' : '' ?>">
                        <a class="nav-link" href="<?php echo URL ?>prices.php">Tarifs</a>
                    </li>
                    <li class="nav-item <?php echo ($title == 'Contact') ? 'active' : '' ?>">
                        <a class="nav-link" href="<?php echo URL ?>contact.php">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <main class="container">