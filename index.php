<?php
session_start();

date_default_timezone_set('Europe/Paris');
include_once('classes/PdoDb.php');
include_once('functions/functions.php');
include_once "functions/auto_loader.php";


$title = 'Home page';

include('includes/header.php');
?>
    <h1>Bienvenue sur <span> votre </span> carnet de santé en ligne </h1>

    <div class="clear"></div>
    <div class="wrap">

    <section class="page-slider">
        <div class="page-flexslider flexslider">
            <ul class="slides">
                <li><img src="http://www.ccc-fr.de/wp-content/uploads/2018/08/test-de-langue-pipplet.jpg"
                         alt="slide1">
                </li>
                <li>
                    <img src="https://www.pervers-narcissique.com/wp-content/uploads/2019/05/test-300x199-300x199.jpg"
                         alt="slide2"></li>
                <li><img src="https://miro.medium.com/max/3016/0*i1XbVjul86E_CSyf.jpg" alt="slide3"></li>
            </ul>
        </div>
    </section>
    </div>
    <div class="clear"></div>
    <div class="wrap">
    <section class="middle">
        <div class="middle-text">
            <h2 class="title-middle">Informations</h2>
            <br>
            <span class="line"></span>
            <br>
            <p class="paragraph"> Nous vous rappelons que en ce mois de [insérer mois] , vous devriez pensez à vous
                faire vacciner contre
                telle maladie. Afin de vous procurer le vaccin veuillez vous renseigner à votre medecin traitant</p>
        </div>
        <br>
    </section>
    </div>
    <div class="clear"></div>
    <div class="wrap">
    <section class="sectionX">
        <div class="titre"></div>
        <h3 class="title2">Insérer un titre</h3>
        <p class="para">
            Lorem ipsum dolor sit amet,  <br>
            Lorem ipsum dolor sit amet, consectetur.  <br>
            Lorem ipsum dolor sit amet, con. <br>
            Lorem ipsum dolor sit amet, consece. <br>
            Lorem ipsum dolor sit amet, consecedr. <br>
        </p>
        <a href="" class="more">More...</a>
    </section>
    </div>
    <div class="wrap">
<section class="sectionY">
    <div class="titre2"></div>
    <h3 class="title3">Insérer un titre</h3>
    <p class="para">
        Lorem ipsum dolor sit amet,  <br>
        Lorem ipsum dolor sit amet, consectetur. <br>
        Lorem ipsum dolor sit amet, con. <br>
        Lorem ipsum dolor sit amet, consece. <br>
        Lorem ipsum dolor sit amet, consecedr. <br>
    </p>
    <a href="" class="more2">More...</a>
</section>
    </div>
    <div class="wrap">
        <section class="sectionZ">
            <div class="titre2"></div>
            <h3 class="title4">Insérer un titre</h3>
            <p class="para">
                Lorem ipsum dolor sit amet,  <br>
                Lorem ipsum dolor sit amet, consectetur. <br>
                Lorem ipsum dolor sit amet, con. <br>
                Lorem ipsum dolor sit amet, consece. <br>
                Lorem ipsum dolor sit amet, consecedr. <br>
            </p>
            <a href="" class="more2">More...</a>
        </section>
    </div>
<?php include('includes/footer.php');
