<?php
session_start();

date_default_timezone_set('Europe/Paris');
include_once('classes/PdoDb.php');
include_once('functions/functions.php');
include_once "functions/auto_loader.php";


$title = 'Home page';

include('includes/header.php');
?>


    <div class="clear"></div>

    <section class="page-slider">
        <div class="page-flexslider flexslider">
            <ul class="slides">
                <li><img class="sliderz" src="assets/img/1 (1).jpg" alt="slide1"></li>
                <li><img class="sliderz" src="assets/img/1 (2).jpg" alt="slide2"></li>
                <li><img class="sliderz" src="assets/img/1 (3).jpg" alt="slide3"></li>
            </ul>
        </div>
    </section>

    <div class="clear"></div>
    <div class="wrap">
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
            <h3 class="title2">Insérer un titre</h3>
            <p class="para">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br>
                Accusantium alias autem eum laudantium numquam praesentium<br>
                quisquam, veniam voluptatem. Ducimus eligendi fuga id illo<br>
                llum itaque labore maxime perferendis quos sapiente! <br>
                Lorem ipsum dolor sit amet, consectetur adipising elit.
            </p>
            <a href="" class="more">More...</a>
        </section>


        <section class="sectionY">
            <div class="titre2"></div>
            <h3 class="title3">Insérer un titre</h3>
            <p class="para">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br>
                Accusantium alias autem eum laudantium numquam praesentium<br>
                quisquam, veniam voluptatem. Ducimus eligendi fuga id illo<br>
                llum itaque labore maxime perferendis quos sapiente! <br>
                Lorem ipsum dolor sit amet, consectetur adipising elit.
            </p>
            <a href="" class="more2">More...</a>
        </section>


        <section class="sectionZ">
            <div class="titre2"></div>
            <h3 class="title4">Insérer un titre</h3>
            <p class="para">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br>
                Accusantium alias autem eum laudantium numquam praesentium<br>
                quisquam, veniam voluptatem. Ducimus eligendi fuga id illo<br>
                llum itaque labore maxime perferendis quos sapiente! <br>
                Lorem ipsum dolor sit amet, consectetur adipising elit.
            </p>
            <a href="" class="more2">More...</a>
        </section>
    </div>
<?php include('includes/footer.php');
