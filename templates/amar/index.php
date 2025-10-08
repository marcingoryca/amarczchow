<?php
/**
  * Template for amarczchow.pl powered by Joomla
  * Author: Marcin Goryca
  */
use Joomla\CMS\Uri\Uri;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Amar Czchów, Rowery|Kosiarki|Serwis. Sklep rowerowy Czchów.">
    <title>Amar Czchów, Rowery | Kosiarki | Serwis</title>
    <jdoc:include type="head" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="templates/<?php echo $this->template; ?>/css/style.css">
</head>
<body>
    <jdoc:include type="modules" name="header" style="none" />
    <header>
        <section id="main-header">
            <a href="https://amarczchow.pl" title="Amar Czchów, ROWERY | KOSIARKI | SERWIS"><img class="head-logo" src="<?php echo Uri::root(); ?>images/logo_amar.png" alt="Amar Logo"></a>
            <h5>ROWERY | KOSIARKI | SERWIS</h5>
            <section class="contact">
                <div class="head-contact">
                    <img class="old-phone" src="<?php echo Uri::root(); ?>/images/old-typical-phone.png" alt="Old Phone Icon"><span>14 684 35 90</span>
                    <img class="email" src="<?php echo Uri::root(); ?>/images/email.png" alt="Email Icon"><span>amar1@poczta.fm</span>
                <div>
                <div class="head-hours">
                    <img class="welcome-door" src="<?php echo Uri::root(); ?>/images/opened-door-aperture.png" alt="Welcome Door Icon">
                    <span>Pn-Pt: 8:00 - 16:00</span>
                    <span class="space-20">Sob: 8:00 - 13:00</span>
                </div>
            </section>
        </section>    
        <nav>
            <ul class="head-nav a-w700">
                <li class="head-nav-bikes"><a href="rowery" title="Rowery">ROWERY</a>
                    <ul class="head-subnav-bikes">
                        <li><a href="rowery/mtb" title="Rowery MTB (Górskie)">ROWERY MTB (GÓRSKIE)</a></li>
                        <li><a href="rowery/city" title="Rowery City (Miejskie)">ROWERY CITY (MIEJSKIE)</a></li>
                        <li><a href="rowery/trekking" title="Rowery Trekkingowe (Turystyczne)">ROWERY TREKKINGOWE (TURYSTYCZNE)</a></li>
                        <li><a href="rowery/cross" title="Rowery Cross">ROWERY CROSS</a></li>
                        <li><a href="rowery/junior" title="Rowery Junior (Młodzieżowe)">ROWERY JUNIOR (MŁODZIEŻOWE)</a></li>
                        <li><a href="rowery/kids" title="Rowery Kids (Dziecięce)">ROWERY KIDS (DZIECIĘCE)</a></li>
                        <li><a href="rowery/ebike" title="Rowery E-Bike (Elektryczne)">ROWERY E-BIKE (ELEKTRYCZNE)</a></li>
                    </ul>
                </li>
                <li class="head-nav-garden"><a href="/ogrod" title="Ogród">OGRÓD</a>
                    <ul class="head-subnav-garden">
                        <li><a href="ogrod/traktorki" title="Traktorki">TRAKTORKI</a></li>
                        <li><a href="ogrod/kosiarki" title="Kosiarki">KOSIARKI</a></li>
                        <li><a href="ogrod/kosy" title="Kosy">KOSY</a></li>
                        <li><a href="ogrod/wykaszarki" title="Wykaszarki">WYKASZARKI</a></li>
                        <li><a href="ogrod/pilarki" title="Pilarki">PILARKI</a></li>
                        <li><a href="ogrod/nozyce" title="Nożyce">NOŻYCE</a></li>
                        <li><a href="ogrod/dmuchawy" title="Dmuchawy">DMUCHAWY</a></li>
                    </ul>
                </li>
                <li><a href="fajerwerki" title="Fajerwerki">FAJERWERKI</a></li>
                <li><a href="militaria" title="Militaria | Akcesoria">MILITARIA</a></li>
                <li><a href="serwis" title="Serwis">SERWIS</a></li>
                <li><a href="sklep" title="Sklep">SKLEP</a></li>
            </ul>        
        </nav>
    </header>
    <main>
        <section class="top">
            <jdoc:include type="modules" name="top-a" />
            <jdoc:include type="modules" name="banner" /> 
        </section>
        <section class="middle">
            <jdoc:include type="modules" name="breadcrumb" />
            <jdoc:include type="component" />
            <jdoc:include type="modules" name="bottom-b" />
        </section>
        <section class="bottom">
            <div id="jsdom"></div>
        </section>
    </main>

    <jdoc:include type="modules" name="footer" style="none" />
    <footer>
        <h2>ROWERY | KOSIARKI | SERWIS</h2>
        <section id="us">
        <div id="company">
            <h6>FIRMA</h6>
            <ul class="about-list">
            <li><a href="o-nas" title="O nas">O nas</a></li>
            <li><a href="kontakt" title="Kontakt">Kontakt</a></li>
            <li><a href="serwis" title="Serwis">Serwis</a></li>
            <li><a href="sklep" title="Sklep">Sklep</a></li>
            </ul>
        </div>
        <div id="policy">
            <a href="privacy-policy" title="Polityka prywatności">Polityka prywatności</a>
        </div>
        <div id="socialmedia">
            <a href="https://facebook.com/profile.php?id=100091278439261" title="Facebook"><img class="social-icon" src="<?php echo Uri::root(); ?>/images/facebook.png" alt="Facebook"></a>
            <a href="https://youtube.com/@roweryamar" title="YouTube"><img class="social-icon grayscale-1" src="<?php echo Uri::root(); ?>/images/youtube.png" alt="YouTube"></a>
        </div>
        </section>
        <section id="collaboration">
            <a href="https://stiga.pl" title="Stiga"><img class="stiga-logo grayscale-1 opacity-10" src="<?php echo Uri::root(); ?>/images/stiga-logo.png" alt="Stiga"></a>
            <a href="https://smstormbikes.com" title="Storm"><img class="storm-logo grayscale-1 opacity-50" src="<?php echo Uri::root(); ?>/images/storm-logo.png" alt="Storm"></a>
            <a href="https://rozkwit.com.pl" title="Rozkwit"><img class="rozkwit-logo grayscale-1 opacity-50" src="<?php echo Uri::root(); ?>/images/rozkwit-logo.png" alt="Rozkwit"></a>
            <a href="https://cedrus.com.pl" title="Cedrus"><img class="cedrus-logo grayscale-1 opacity-50" src="<?php echo Uri::root(); ?>/images/logo_cedrus.png" alt="Cedrus"></a>
            <a href="https://nrowery.pl" title="Northtec"><img class="northtec-logo grayscale-1 opacity-50" src="<?php echo Uri::root(); ?>/images/northtec-logo.png" alt="Northtec"></a>
            <a href="https://kellysbikes.com/pl/pl" title="Kellys"><img class="kellys-logo grayscale-1 opacity-50" src="<?php echo Uri::root(); ?>/images/kellys-logo.png" alt="Kellys"></a>
            <a href="https://kands.pl" title="Kands"><img class="kands-logo grayscale-1 opacity-50" src="<?php echo Uri::root(); ?>/images/kands.png" alt="Kands"></a>
        </section>
        <a href="https://amarczchow.pl" title="Amar Czchów, ROWERY | KOSIARKI | SERWIS"><img class="foot-logo" src="<?php echo Uri::root(); ?>images/logo_amar.png" alt="Amar Logo"></a>
    </footer>
    <script src="templates/<?php echo $this->template; ?>/js/script.js"></script>
</body>
</html>