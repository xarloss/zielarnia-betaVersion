<?php include("a_config.php"); ?>

<!DOCTYPE html>
<html lang="pl">
    <head>
     <?php include('pages/head-tag-content.php'); ?>
    </head>
    <body>

    <header class="navigation">

<nav>
    <div class="logo-box">
        <img src="img/logo2/logo3/białe.png" alt="Logo" class="logo">
        <img src="img/logo2/logo3/zielone.png" alt="Logo" class="logo-green">
    </div>
    <ul class="main-nav main-nav-2 js--main-nav">
        <li><a href="index.php">Strona główna</a></li>
        <li><a href="oferta.php">Oferta</a></li> 
        <li><a href="kontakt.php">Kontakt</a></li>   
    </ul>
    <a class="mobile-nav-icon js--nav-icon"><i class="ion-md-menu"></i></a>     
</nav>

    </header>

    <section class="section-offer">
                <div class="row u-center-text">
                    <h2 class="heading-secondary">Oferta</h2>
                </div>

                <div class="row">
                       <h3 class="heading-tertiary u-margin-bottom-small u-center-text">Oferujemy najwyższej jakości naturalne produkty</h3>
                       <p class="paragraph u-center-text">Nasza zielarnia oferuje produkty jak: <br />  </p>
                        <ul class="list">
                           <li class="list__item"><a href="pages/ziola.php" class="list__item-link">Zioła</a></li>
                           <li class="list__item"><a href="pages/kosmetyki.php" class="list__item-link">Naturalne kosmetyki</a></li>
                           <li class="list__item"><a href="pages/soki.php" class="list__item-link">Naturalne soki</a></li>
                           <li class="list__item"><a href="pages/oleje.php" class="list__item-link">Naturalne oleje</a></li>
                           <li class="list__item"><a href="pages/suplementy.php" class="list__item-link">Suplementy diety</a></li>
                           <li class="list__item"><a href="pages/produkty.php" class="list__item-link">Ekologiczne artykuły spożywcze</a></li>
                        </ul>

                       </div>

</section>

 
            <footer class="footer">
            <div class="footer__logo-box">
                <picture class="footer__logo">
                    <img srcset="img/prawidlowelogo zielone.png" alt="Full logo" src="img/logo2/logo3/zielone.png" class="footer__logo">
                </picture>
            </div>
            <div class="row">
                <div class="col-1-of-2">
                    <div class="footer__navigation">
                        <ul class="footer__list">
                            <li class="footer__item"><a href="index.php" class="footer__link">Strona główna</a></li>
                            <li class="footer__item"><a href="pages/oferta.php" class="footer__link">Oferta</a></li>
                            <li class="footer__item"><a href="pages/kontakt.php" class="footer__link">Kontakt</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-1-of-2">
                    <p class="footer__copyright">
                        Strona zbudowana przez: &copy; 2019 <a href="#" class="footer__link">Daniel Weber</a>
                    </p>
                </div>
            </div>
        </footer>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/html5shiv@3.7.3/dist/html5shiv.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/html5shiv@3.7.3/dist/html5shiv.min.js"></script>
        <script src="node_modules/lightbox2/dist/js/lightbox-plus-jquery.min.js"></script>
        <script src="js/jquery.waypoints.min.js"></script>
        <script src="https://unpkg.com/ionicons@4.5.5/dist/ionicons.js"></script>
        <script src="js/sticky.js"></script>
        <script src="css/slick/slick.min.js"></script>
        <script src="js/carousel.js"></script>


    </body>
</html>