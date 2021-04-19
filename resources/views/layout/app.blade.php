<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Addictives</title>

        <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css"/>
    <link href="http://fonts.cdnfonts.com/css/brandon-grotesque-regular" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" integrity="sha512-6lLUdeQ5uheMFbWm3CP271l14RsX1xtx+J5x2yeIDkkiBpeVTNhTqijME7GgRKKi6hCqovwCoBTlRBEC20M8Mg==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw==" crossorigin="anonymous" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />

    </head>
    <body>
        <div class="add__navbar">
            <div class="add__menu__box">
                <div><img src="img/logo/logo.svg" /></div>
                <div class="add__main__menu">
                    <ul>
                        <li><a href="#">Nos livres</a></li>
                        <li><a href="#">Nouveautés</a> </li>
                        <li> <a href="#">À paraître</a></li>
                        <li> <a href="#">Nos auteures</a> </li>
                    </ul>
                </div>
                <div class="add__outline__btn">
                    Pour les auteurs
                </div>
                <div class="add__social">
                    <a href="#"><img src="img/social/ic-facebook.svg" /></a>
                    <a href="#"><img src="img/social/ic-instagram.svg" /></a>
                    <a href="#"><img src="img/social/ic-twitter.svg" /></a>

                </div>
                <div class="add__search">
                    <img src="img/icons/ic-search.svg" />
                </div>
            </div>
        </div>


        <div class="mobile-nav">
            <div class="menu-icons">
                <div>
                    <img src="img/icons/ic-menu.svg" />
                </div>
                <div><img src="img/logo/logo.svg" /></div>
            </div>

            <div><img src="img/icons/ic-search.svg" /></div>
        </div>
        <main>
            @yield('content')
        </main>

        <footer class="add__footer">
            <div class="add__custom__container footer__container">
                <img src="img/logo/logo-white.svg"
     class="logoaddictives_black" />

     <div class="add__footer__link__box">
         <a href="#">
            Accueil
         </a>
         <span>
            -
         </span>

         <a href="#">
             Nos livres
         </a>
         <span>
            -
         </span>

         <a href="#">
            Nouveautés
         </a>
         <span>
            -
         </span>

         <a href="#">
             À paraître
         </a>
         <span>
            -
         </span>
         <a href="#">
             Nos auteures
         </a>
         <span>
            -
         </span>

         <a href="#">
            Pour les auteurs

         </a>
         <span>
            -
         </span>

         <a href="#">

            Nous contacter
         </a>
         <span>
            -
         </span>

         <a href="#">

             Mentions légales
         </a>
         <span>
            -
         </span>
     </div>
            </div>
        </footer>
        <section class="add__copyright__footer">
            <div class="add__custom__container last_footer__container">
                <span>© <span class="copy_sub_text">Tous droits réservés</span> Éditions Addictives</span>
                <div class="add__footer__social__icon">
                    <a href="#">
                        <img src="img/footer/ic-facebook.svg"
                        class="icfacebook">
                    </a>

                    <a href="#">
                        <img src="img/footer/ic-instagram.svg"
                        class="icinstagram">
                    </a>

                    <a href="#">
                        <img src="img/footer/ic-twitter.svg"
                        class="ictwitter">
                    </a>
                </div>
            </div>
        </section>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('js/script.js') }}" defer></script>
    </body>
    </html>
