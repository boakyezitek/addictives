@extends('layout.app')

@section("content")
<div class="my-slider">
    <div style="background-color: #F4D2BE;" class="base-slider">
        <div class="slide-content">
            <p>Téléchargez notre application ! </p>
            <h1>Écoutez des livres où <br>que vous soyez. </h1>
            <div class="slider_button"><a href="#"><img class="img-fluid" src="img/main/appstore.png"></a><a href="#"><img class="img-fluid" src="img/main/google-play-badge.png"></a></div>
        </div><img class="img-fluid" src="img/main/girl.png">
    </div>
    <div style="background-color: #a7cce4;" class="base-slider"></div>
    <div style="background-color: green;" class="base-slider"></div>
    <div style="background-color: #fa8072;" class="base-slider"></div>

</div>

<section class="add__content__section">
    <div class="add__custom__container mt-5">
        <h2 class="add__page__title mb-3">
            Nouveautés
        </h2>
       <div class="add__content__box">
          <a href="#">
            <img src="img/content/book-1.png"
            srcset="img/content/book-1@2x.png 2x,
                    img/content/book-1@3x.png 3x"
            class="book_1">
          </a>

          <a href="#">
            <img src="img/content/book-1.png"
            srcset="img/content/book-1@2x.png 2x,
                    img/content/book-1@3x.png 3x"
            class="book_1">
          </a>

          <a href="#">
            <img src="img/content/book-1.png"
            srcset="img/content/book-1@2x.png 2x,
                    img/content/book-1@3x.png 3x"
            class="book_1">
          </a>

          <a href="#">
            <img src="img/content/book-1.png"
            srcset="img/content/book-1@2x.png 2x,
                    img/content/book-1@3x.png 3x"
            class="book_1">
          </a>
       </div>

       <div class="add__page__btn mt-5">
        Voir toutes les nouveautés
       </div>
    </div>




    <div class="add__custom__container mt-5">
        <h2 class="add__page__title mb-3">
            À paraître
        </h2>
       <div class="add__content__box">
          <a href="#">
            <img src="img/content/book-1.png"
            srcset="img/content/book-1@2x.png 2x,
                    img/content/book-1@3x.png 3x"
            class="book_1">
          </a>

          <a href="#">
            <img src="img/content/book-1.png"
            srcset="img/content/book-1@2x.png 2x,
                    img/content/book-1@3x.png 3x"
            class="book_1">
          </a>

          <a href="#">
            <img src="img/content/book-1.png"
            srcset="img/content/book-1@2x.png 2x,
                    img/content/book-1@3x.png 3x"
            class="book_1">
          </a>

          <a href="#">
            <img src="img/content/book-1.png"
            srcset="img/content/book-1@2x.png 2x,
                    img/content/book-1@3x.png 3x"
            class="book_1">
          </a>
       </div>

       <div class="add__page__btn mt-5">
        Voir plus de livres
       </div>
    </div>
</section>

<section class="add__banner__box">
    <div class="add__custom__container add__banner__box mt-5 mb-5">
        <img src="img/main/banner.png"
        srcset="img/main/banner@2x.png 2x,
                img/banner@3x.png 3x"
        class="banner">
    </div>
</section>

<section class="add__content__section">
    <div class="add__custom__container  mt-5">
        <h2 class="add__page__title mb-3">
            Vous pourriez aimer…
        </h2>
       <div class="add__content__box">
          <a href="#">
            <img src="img/content/book-1.png"
            srcset="img/content/book-1@2x.png 2x,
                    img/content/book-1@3x.png 3x"
            class="book_1">
          </a>

          <a href="#">
            <img src="img/content/book-1.png"
            srcset="img/content/book-1@2x.png 2x,
                    img/content/book-1@3x.png 3x"
            class="book_1">
          </a>

          <a href="#">
            <img src="img/content/book-1.png"
            srcset="img/content/book-1@2x.png 2x,
                    img/content/book-1@3x.png 3x"
            class="book_1">
          </a>

          <a href="#">
            <img src="img/content/book-1.png"
            srcset="img/content/book-1@2x.png 2x,
                    img/content/book-1@3x.png 3x"
            class="book_1">
          </a>
       </div>
    </div>
</section>

<section class="add__newsletter__section">
    <div class="add__custom__container add__newsletter__box">
        <div class="add__news__letter__main__box">
            <img src="img/main/img-newsletter-web.svg"
     class="imgnewsletter_web">
           <h3>Inscrivez-vous !</h3>
           <span>Restez informé de toutes les actualités.</span>
           <div class="add__newsletter-input-group">
               <div class="add__newsletter__input__box"><input placeholder="Votre adresse mail"/></div>
               <div class="add__white__btn">Je m’inscris !</div>
           </div>
        </div>
    </div>
</section>

@endsection
