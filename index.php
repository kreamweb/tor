<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package torrefornello
 */

get_header(); ?>

<section id="slider" class="swiper_wrapper full-screen clearfix">

    <div class="swiper-container swiper-parent">
        <div class="swiper-wrapper">
            <div class="swiper-slide dark" style="background-image: url('<?php echo get_template_directory_uri() ?>/images/slider/swiper/1.jpg');">
                <div class="container clearfix">
                    <div class="slider-caption slider-caption-center">
                        <h4>UN'AZIENDA FATTA DI</h4>
                        <h3 data-caption-animate="fadeInUp">TRADIZIONE E INNOVAZIONE</h3>

                        <a href="#" class="btn btn-ghost" data-scrollto="#home-posts">Vieni e scopri</a>
                    </div>
                </div>
            </div>
            <div class="swiper-slide dark" style="background-image: url('<?php echo get_template_directory_uri() ?>/images/slider/swiper/1.jpg');">
                <div class="container clearfix">
                    <div class="slider-caption slider-caption-center">
                        <h4>UN'AZIENDA FATTA DI</h4>
                        <h3 data-caption-animate="fadeInUp">TRADIZIONE E INNOVAZIONE</h3>

                        <a href="#" class="btn btn-ghost" data-scrollto="#home-posts">Vieni e scopri</a>
                    </div>
                </div>
            </div>
        </div>
        <div id="slider-arrow-left"><i class="icon-angle-left"></i></div>
        <div id="slider-arrow-right"><i class="icon-angle-right"></i></div>
        <div id="slide-number">
            <div id="slide-number-current"></div>
            <span>/</span>

            <div id="slide-number-total"></div>
        </div>
    </div>


</section>

<section id="content">
    <div class="content-wrap nopadding">
        <div id="home-posts" class="row clearfix  nobottommargin">
            <div class="col-md-6  col-padding" style="background: url('<?php echo get_template_directory_uri() ?>/images/blog1.jpg') center center no-repeat; background-size: cover;">
                <div class="home-post full-screen">
                    <div class="post-category">Vigna delle Arti</div>
                    <h2>Terre Animate:Mostra personale di Lorenza Morandotti</h2>

                    <p>Negli spazi espositivi di Torre Fornello, Lorenza Morandotti esporrà una serie di incisioni e una sequenza di sculture che spaziano dagli Annaspatori, alle Anime ai Cosmi, nelle due varianti di Cosmi aperti e Cosmi chiusi: tutte opere che, scrive Roberto Borghi nel catalogo, «delineano un’antropologia, una visione ben precisa dell’uomo, che più che rovesciarsi nel suo contrario, in una concezione dell’universo, vale a dire in una cosmologia»</p>
                    <a href="#" class="btn btn-ghost">Visita</a>
                </div>
            </div>

            <div class="col-md-6  col-padding " style="background: url('<?php echo get_template_directory_uri() ?>/images/blog2.jpg') center center no-repeat; background-size: cover;">
                <div class="home-post full-screen">
                    <div class="post-category">News</div>
                    <h2>Italia in Rosa 2014</h2>

                    <p>Sabato 8 e dovper la prima volta parteciperà alla VI edizione della degustazione di Italia in Rosa con Pinot Roset. Classico 2008 e Ottavo Giorno 2010.
                        Vi aspettiamo al nostro tavolo di degustazione.
                        Allego il programma dell'evento.</p>
                    <a href="#" class="btn btn-ghost">Leggi</a>
                </div>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>
