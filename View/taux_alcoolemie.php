<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <meta name="author" content="Jib LG" />
        <title>Taux d'alcoolémie</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <link rel="icon" type="image/png" href="../Model/img/fav-icon-pinte.png" />
        <link rel="stylesheet" href="css/style.css" />
    </head>

    <body>
        <h1>Calculez votre taux d'alcoolémie</h1>
        <div id="infos_calcul">
            <p>La formule pour calculer son taux d'alcoolémie est: (V * t * 0.8) / (coef * m)<br>
                où
            </p>
            <ul>
                <li>V est le volume de boisson ingérée en <b>ml</b></li>
                <li>t est le degré d'alcool en pourcentage, un verre de vin à 12°=0.12%</li>
                <li>0.8 est la densité de l'alcool (l'éthanol), c'est une constante</li>
                <li>coef est le coefficient de diffusion, 0.7 pour un homme et 0.6 pour une femme</li>
                <li>m est la masse de la personne en <b>kg</b></li>
            </ul>
        </div>

        <form method="post" action="../Controller/controller.php?lib=form_taux">
            <div>
                Degré d'alcool (°) <input type="number" size="3" name="degre" required />
                Volume (cl) <input type="number" size="3" name="volume" required />
                Nombre de contenant <input type="number" size="3" name="nb_contenant" value="1" required />
                Masse (kg) <input type="number" size="3" name="masse" value="70" required />
            </div>
            <div>
                <input type="radio" name="sexe" value="Homme"/>Homme
                <input type="radio" name="sexe" value="Femme"/>Femme
            </div>
            <input id="submit" type="submit" value="Calculer mon taux" />
        </form>

        <?php
        if(isset($_GET['taux']))
        {
            $taux = $_GET['taux'];
        ?>
        <p>Votre taux d'alcoolémie est <b><?php echo $taux ?></b> g/L</p>
        <?php
        }
        ?>

        <h1>Calculez la vitesse d'élimination de l'alcool</h1>
        <p><br>
            A jeun, une fois le verre ingéré, il faut <b>30 min</b> pour que le taux d'alcool dans le sang atteigne son maximum<br>
            Lors d'un repas, il faut <b>1h</b>
        </p>
        <li>Homme : <b>0,10</b>g/L à <b>0,15</b>g/L par heure</li>
        <li>Femme : <b>0,085</b>g/L à <b>0,10</b>g/L par heure</li>

        <div id="infos_calcul">
            <p>
                La formule pour calculer le temps d'élimination des verres d'alcool est: FAUX
                où 
            </p>
            <ul>
                <li><b></b></li>
                <li></li>
                <li><b></b></li>
            </ul>
        </div>

        <form method="post" action="../Controller/controller.php?lib=form_elimination">
            <div>
                Quantité d'alcool (g) <input type="number" size="3" name="quantite" required />
                Masse (kg) <input type="number" size="3" name="masse" value="70" required />
            </div>
            <div>
                <input type="radio" name="sexe" value="Homme"/>Homme
                <input type="radio" name="sexe" value="Femme"/>Femme
            </div>
            <input id="submit" type="submit" value="Calculer le temps d'élimination" />
        </form>
        
        <?php
        if(isset($_GET['elimination']))
        {
            $elimination = $_GET['elimination'];
        ?>
        <p>Votre élimination est <b><?php echo $elimination ?></b>h</p>
        <?php
        }
        ?>
    </body>
</html>