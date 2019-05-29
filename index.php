<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="strona, internetowa, prosta, wlasna, zlecenie, www, web, biznes, sklep">
        <meta name="description" content="Pisze strony internetowe, napisz do mnie jesli chcesz miec swoja wlasna strone.">
        <link rel="stylesheet" type="text/css" href="resources/css/style.css">
        <link rel="stylesheet" type="text/css" href="resources/css/queries.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/grid.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/animate.css">
        <link href="https://unpkg.com/ionicons@4.4.6/dist/css/ionicons.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="vendors/css/normalize.css">
        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,300i,400" rel="stylesheet">
        
        <title>Jakub Wojdan</title>
        <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
        
        
        
    </head>
    <body>
        <header>
            <nav>
                <div class="row">
                    <ul class="main-nav js--main-nav">
                        <li><a href="#omnie">O mnie</a></li>
                        <li><a href="#oferta">Oferta</a></li>
                        <li><a href="#kontakt">Kontakt</a></li>
                    </ul>
                    <a class="mobile-nav-icon js--nav-icon"><i class="ion-md-menu"></i></a>
                </div>
                
            </nav>
                <div class="header-title">
                    <h1>Witaj na mojej stronie internetowej</h1>
                    <a href="#" class="btn-one js--scroll-to-form">Napisz od mnie</a>
                    <a href="#" class="btn-one js--scroll-to-about">Dowiedz się więcej</a>
                </div>
        
        
        </header>
        
        <section class="section-aboutme js--section-aboutme" id="omnie">
            <div class="row">
                <h2>O mnie</h2>
            </div>
            <div class="row about">
                <div class="col span-1-of-2">
                    <div class="me-text js--wp--1">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus consequat odio at lacus semper, nec convallis ante commodo. Vivamus malesuada turpis massa. Pellentesque ultricies lorem lacus, ut porttitor neque convallis quis. Vestibulum ac odio sed elit facilisis fringilla at et risus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.Nulla facilisi. Donec porttitor, tellus at convallis malesuada, quam nibh auctor mauris, non eleifend velit risus sed nisi.</p>
                    </div>
                </div>
                <div class="col span-1-of-2">
                        <img class="aboutme-img" src="resources/img/aboutme-section-min.jpg" alt="laptop on the bed">
                </div>
            </div>
        </section>
        
        <section class="oferta-section" id="oferta">
            <div class="row">
                <h2>Oferta</h2>
            </div>
            <div class="row">
                <div class="col span-1-of-3 box">
                    <p>Zakładasz swój biznes?<br>Potrzebujesz strony wizytówki <br>lub otwierasz sklep internetowy?<br>Napiszę dla Ciebie stronę internetową, która będzie prezentowała Twój pomysł <br>i w pełni odda to co chcesz przekazać swoim klientom!</p>
                </div>
                <div class="col span-1-of-3 box">
                    <div class="js--wp--2">
                    <p>Co oferuję?<br></p>
                    <i class="icon ion-md-arrow-round-forward"></i>
                    </div>
                </div>
                <div class="col span-1-of-3 box">
                    <ul>
                        <li>Stronę internetowa z wybraną domeną, w tym:</li>
                        <li>&mdash; responsywna strona www - ten sam wygląd strony na różnych urządzeniach (PC, telefon, tablet itp.)</li>
                        <li>&mdash; połączenie strony z social media</li>
                        <li>&mdash; optymalizcja SEO</li>
                        <li>&mdash; wypozycjonowanie strony</li>
                        <li>&mdash; ten sam wygląd i funkcjonowanie strony na różnych przeglądarkach(Chrome, IE, Mozilla Firefox itd.)</li>
                    </ul>
                </div>
            </div>
        </section>
        
        <section class="form-section js--section-form" id="kontakt">
            
            <div class="row js--wp--3">
                <h2>Napisz do mnie!</h2>
            </div>
            
            <div class="row" id="form">
                <form method="post" action="mailer.php" class="contact-form">
                    
                    <div class="row"> 
                        <?php
                        if($_GET['success'] == 1){
                            echo "<div class=\"form-messages success\">Twoja wiadomość została wysłana!</div>";
                        }
                        
                        if($_GET['success'] == -1){
                            echo "<div class=\"form-messages error\">Coś poszło nie tak. Spróbuj jeszcze raz!</div>";
                        }
                        
                        ?>
                    </div> 
                    
                    <div class="row space">
                        <div class="col span-1-of-3">
                            <label for="name">Imię</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="text" name="name" id="name" placeholder="Twoje imię" required>
                        </div>
                    </div>
                    <div class="row space">
                        <div class="col span-1-of-3">
                            <label for="surname">Nazwisko</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="text" name="surname" id="surname" placeholder="Twoje nazwisko" required>
                        </div>
                    </div>
                    <div class="row space">
                        <div class="col span-1-of-3">
                            <label for="email">E-mail</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="email" name="email" id="email" placeholder="Twój e-mail" required>
                        </div>
                    </div>
                    <div class="row space">
                        <div class="col span-1-of-3">
                            <label>Treść wiadomości</label>
                        </div>
                        <div class="col span-2-of-3">
                            <textarea name="message" placeholder="Treść wiadomości"></textarea>
                        </div>
                    </div>
                    <div class="row space">
                        <div class="col span-1-of-3 ">
                            <label>&nbsp;</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="submit" value="Wyślij!">
                        </div>
                    </div>
                </form>
            </div>
            
        </section>
        
        <footer>
            <div class="row">
                <div class="col span-1-of-2">
                    <ul class="footer-nav">
                       <li><a href="#">O mnie</a></li>
                       <li><a href="#">Oferta</a></li>
                       <li><a href="#">Kontakt</a></li>
                       <li><i class="icon ion-md-mail"></i>kubawojdan4@gmail.com</li>
                    </ul>
                </div>
                <div class="col span-1-of-2">
                    <ul class="telefon">
                        <li>Nr telefonu: +48 123456789</li>
                    </ul>
                </div>
            </div>
                <div class="row">
                    <p>Copyright &copy; Jakub Wojdan. All right reserved</p>
                </div>
        </footer>
        
                        
    
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="vendors/js/jquery.waypoints.min.js"></script>
    <script src="resources/js/script.js"></script>
    
    
    
    
    </body>








</html>