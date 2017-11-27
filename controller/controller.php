<?php
//Page principale au calcul du taux (calcul_taux.php)
if($_GET['lib'] === 'form_taux')
{
    if(isset($_POST['degre']) && isset($_POST['volume']) && isset($_POST['nb_contenant']) && isset($_POST['masse']) && isset($_POST['sexe']))
    {
        $degre = $_POST['degre'];
        $volume = $_POST['volume'];
        $nb = $_POST['nb_contenant'];
        $masse = $_POST['masse'];

        if(isset($_POST['sexe']) === 'Homme')
        {
            $coeff = 0.7;
        }
        else
        {
            $coeff = 0.6;
        }
        header('Location: ../Model/calcul_taux.php?degre=' . $degre . '&volume=' . $volume . '&nb=' . $nb . '&masse=' . $masse . '&coeff=' . $coeff);
    } 
    else
    {
        header('Location: ../View/taux_alcoolemie.php');
    }
}
//Redirection du calcul du taux vers la page principale
elseif($_GET['lib'] === 'calcul_taux')
{   
    $taux = $_GET['taux'];
    header('Location: ../View/taux_alcoolemie.php?taux=' . $taux);
}
//Page principale au calcul de l'élimination (calcul_elimination.php)
elseif($_GET['lib'] === 'form_elimination')
{
    if(isset($_POST['quantite']))
    {
        $quantite = $_POST['quantite'];
        header('Location: ../Model/calcul_elimination.php?quantite=' . $quantite . '&sexe=' . $_POST['sexe']);
    }
}
//Redirection du calcul de l'élimination vers la page principale
elseif($_GET['lib'] === 'calcul_elimination')
{   
    $elimination = $_GET['elimination'];
    header('Location: ../View/taux_alcoolemie.php?elimination=' . $elimination);
}