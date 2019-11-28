<?php
session_start();
include 'includes/compte.inc.php';
include 'includes/header.php';
include 'includes/pdo.php';
include 'functions/functions.php';
$session = $_SESSION['id'];
$sql = "SELECT * FROM user WHERE id='$session'";
$query = $pdo->query($sql);
$query->execute();
$data = $query->fetchAll(PDO::FETCH_ASSOC);

if (empty($data[0]['usernom'])) {
    header('location:infos.php');
}

$sql = "SELECT *
        FROM uservac
        JOIN user ON user.id = uservac.userid
        JOIN vaccin ON vaccin.id = uservac.idvaccin";
$query = $pdo->prepare($sql);
$query->execute();
$tab = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<section>
    <div class="col-md-9">
        <div class="row">
            <div class="panel panel-default panel-table filterable">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col col-xs-6">
                            <h4><i class=" fa fa-list"></i> Vos vaccins</h4>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <table class="table table-bordered table-hover text-center">

                        <tbody id="user">
                        <?php
                        if(!empty($tab)) {
                            echo  '<thead>';
                        echo'<tr class="filters">';

                          echo  '<th>Id Vaccin</th>';
                         echo   '<th>Nom du Vaccin</th>';
                         echo  '<th>Date du Vaccin</th>';
                         echo   '<th>Numéro du lot</th>';
                         echo   '<th>Editer</th>';

                            echo'</tr>';
                            echo'</thead>';
                            echo '<td>'.$tab[0]['idvaccin'].'</a></td>';
                            echo '<td>'.$tab[0]['uservacname'].'</td>';
                            echo '<td>'.$tab[0]['uservdate'].'</td>';
                            echo '<td>'.$tab[0]['uservaclot'].'</td>';
                            echo '<td>'.$tab[0]['userrenouv'].'</td>';
                            echo '<button><a href="edit.php">Nouveau</a></button>';
                        echo '</tr>';
                          echo  '</tbody>';
                        echo'<tfoot>';
                        echo'<th>Id Vaccin</th>';
                        echo'<th>Nom du Vaccin</th>';
                        echo'<th>Date du Vaccin</th>';
                        echo '<th>Numéro du lot</th>';
                        echo'<th>Editer</th>';
                        echo '</tfoot>';
                        } else {
                            echo '<h2>Vous n\'avez pas de vaccins à votre actif.';
                            echo '<button><a href="vaccin.php">Nouveau Vaccin</a></button>';
                        }
                        ?>

                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<?php

include 'includes/footer.php';
