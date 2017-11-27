<?php
$quantite = $_GET['quantite'];
if($_GET['sexe'] === 'Homme')
{
    $coef_min = 0.10;
    $coef_max = 0.15;   
}
else
{
    $coef_min = 0.085;
    $coef_max = 0.10;    
}

//MAUVAISE FORMULE !
function calcul_elimination_min($qte, $coef){
    $temps = ($qte * $coef) * 60;
    return $temps;
}

function calcul_elimination_max($qte, $coef){
    $temps = ($qte * $coef) * 60;
    return $temps;
}

$elimination = calcul_elimination_min($quantite, $coef_min);
$elimination = number_format($elimination, 2);

header('Location: ../Controller/controller.php?lib=calcul_elimination&elimination=' . $elimination);