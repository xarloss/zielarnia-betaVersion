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
        <li><a href="pages/kontakt.php">Kontakt</a></li>   
    </ul>
    <a class="mobile-nav-icon js--nav-icon"><i class="ion-md-menu"></i></a>     
</nav>

    </header>
    <section class="kontakt">
    <div class="row u-center-text">
    <h2 class="heading-secondary u-margin-bottom-medium u-margin-top-small">Kontakt, jak dojechać?</h2>
    <div class="col-1-of-2">
    <img src="img/kontakt.png" alt="Lokalizacja" class="gmap">
    </div>
    <div class="col-1-of-2">
        <h3 class="heading-tertiary u-margin-bottom-small">Godziny otwarcia:</h3>
        <div class="paragraph u-margin-bottom-big">
            poniedziałek-piątek 8:00-16:00 </br>
            sobota: 8:00-14:00
        </div>
        <div class="paragraph">
            E-mail: zielarnia.ekobazarek@gmail.com </br>
            Telefon: 643 235 262
        </div>
    </div>
    </div>
    </section>

    <section class="section-form">
            <div class="row u-center-text u-margin-top-small">
                <h2 class="heading-secondary">Skontaktuj się :-)</h2>
            </div>
            <div class="row">
                        <form method="post" action="#" class="contact-form">
                        <div class="row u-margin-bottom-small">
                        <div class="col-1-of-3 u-margin-bottom-small">
                            <label for="name">Imię:</label>
                        </div>
                        <div class="col-2-of-3">
                            <input type="text" name="name" id="name" placeholder="Twoje imię" required>
                        </div>
                        </div>
                        <div class="row u-margin-bottom-medium">
                        <div class="col-1-of-3 u-margin-bottom-small">
                            <label for="found">Skąd o nas usłyszałeś/aś?</label>
                        </div>
                        <div class="col-2-of-3">
                            <select name="found" id="found">
                                <option value="friends">Od znajomych</option>
                                <option value="internet">Przez internet</option>
                                <option value="luck">Przypadkiem</option>
                                <option value="other">Inne</option>
                            </select>
                        </div>
                        </div>
                        <div class="row u-margin-bottom-medium">
                     
                        <div class="col-1-of-3 u-margin-bottom-small">
                            <label>Zostaw wiadomość:</label>
                        </div>
                        <div class="col-2-of-3">
                           <textarea name="message" placeholder="Możesz tu wpisać swoją wiadomość."></textarea>
                        </div>
                        </div>
                        <div class="row u-margin-bottom-small">
                        <div class="col-1-of-3 u-margin-bottom-small">
                            <label>&nbsp;</label>
                        </div>
                        <div class="col-2-of-3">
                        <button class="btn btn--green">Wyślij &rarr;</button>
                        </div>
                        </div>
                </form>
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