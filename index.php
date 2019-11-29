<?php
session_start();

date_default_timezone_set('Europe/Paris');
include_once('functions/functions.php');


$title = 'Home page';
include('includes/header.php');
?>


    <!--<section class="page-slider">
        <div class="page-flexslider flexslider">
            <ul class="slides">
                <li><img src="assets/img/1.jpg" alt="slide1"></li>
                <li><img src="assets/img/2.jpg" alt="slide2"></li>
                <li><img src="assets/img/3.jpg" alt="slide3"></li>
            </ul>
        </div>
    </section>-->

    <div class="clear"></div>
    <div class="wrap">
        <img src="assets/img/1.jpg" alt="">
        <section class="middle">
            <div class="middle-text">
                <h2 class="title-middle">Informations</h2>
                <br>
                <span class="line"></span>
                <br>
            </div>
            <br>
        </section>
    </div>
    <div class="clear"></div>
    <div class="wrap">
        <section class="sectionX">
            <div class="titre"></div>
            <h3 class="title2">La Michelite</h3>
            <p class="para">
                Après des années d'études ,le vaccin contre la michelite est enfin là ! <br>
                Vous pourrez dorénavant vous faire vacciner chez votre médecin traitant.<br>
                Faîtes bien attention , la michelite est bénigne mais très infectieuse ! <br>
                Cette maladie est simplement le fait d'appeler tout le monde Michel, si <br>
                vous en êtes atteint, ne vous en faites pas, allez voir votre médecin.
            </p>
            <a href="" class="more">En savoir plus...</a>
        </section>


        <section class="sectionY">
            <div class="titre2"></div>
            <h3 class="title3">VaccinFactory</h3>
            <p class="para">
                Vous avez perdu votre carnet de santé? <br>
                Grâce aux informations apportées après votre inscription,<br>
                votre médecin traitant aura accès à ces dernières afin de répondre à vos besoins.<br>
                Ne vous en faites pas, vos données sont 100% sécurisées et protégées. <br>
                Vous pouvez faire confiance en notre entreprise 100% Normande.
            </p>
            <a href="" class="more2">En savoir plus...</a>
        </section>


        <section class="sectionZ">
            <div class="titre2"></div>
            <h3 class="title4">Notre vision</h3>
            <p class="para">
                Nous avons étudié le comportement des personnes, <br>
                une interrogation subvient souvent quand aux vaccins à faire.<br>
                Bientot vous saurez même quels vaccins effectuer ! <br>
                Nous intervenons sur la famille et sur toutes maladies soignable. <br>
                Si vous avez un cancer des poumons, désolé, il est déjà trop tard ...
            </p>
        </section>
    </div>
    <div class="clear"></div>
<?php include('includes/footer.php');
