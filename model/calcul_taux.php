<?php
$degre = $_GET['degre'] / 100;
$volume = $_GET['volume'] * 10;
$nb = $_GET['nb'];
$masse = $_GET['masse'];
$coeff = $_GET['coeff'];

function calcul_taux($nb, $V, $t, $coef, $m){
    $taux = ($nb * $V * $t * 0.8) / ($coef * $m);
    return $taux;
}

$taux = calcul_taux($nb, $volume, $degre, $coeff, $masse);
$taux = number_format($taux, 2);

header('Location: ../Controller/controller.php?lib=calcul_taux&taux=' . $taux);