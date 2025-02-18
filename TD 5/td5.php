<?php
    function genererListe() {
        $list = "<ul>";
    for ($i = 1; $i <= 20; $i++) {
        $list .= "<li>Hello numéro $i</li>";
    }

    $list .= "</ul>";
    return $list;
    }

    function exo3(){
        $hex1 = "41";
        $decimal1 = hexdec($hex1);
        $char1 = chr($decimal1);

        echo "<p>Hexadécimal : 0x$hex1 = Décimal : $decimal1 = Caractère : '$char1'</p>";

        $hex2 = "2B";
        $decimal2 = hexdec($hex2);
        $char2 = chr($decimal2);

        echo "<p>Hexadécimal : 0x$hex2 = Décimal : $decimal2 = Caractère : '$char2'</p>";

        $char3 = 'A';
        $decimal3 = ord($char3); 
        $hex3 = dechex($decimal3);

        echo "<p>Caractère : '$char3' = Décimal : $decimal3 = Hexadécimal : 0x$hex3</p>";

        $char4 = '+';
        $decimal4 = ord($char4);
        $hex4 = dechex($decimal4);

        echo "<p>Caractère : '$char4' = Décimal : $decimal4 = Hexadécimal : 0x$hex4</p>";
    }

    function genererHexa() {
        $liste = "<ul style='display: flex; gap: 10px; list-style: none;'>";
    
        for ($i = 0; $i <= 15; $i++) {
            $liste .= "<li style='padding: 10px; border: 1px solid black;'>" . strtoupper(dechex($i)) . "</li>";
        }
    
        $liste .= "</ul>";
        return $liste;
    }

    function generateTable() {
        $html = "<table>";
        $html .= "<thead>
                    <tr style='background-color:rgb(236, 0, 0); font-weight: bold;'>
                        <th>binaire</th>
                        <th>octal</th>
                        <th>décimal</th>
                        <th>hexadécimal</th>
                    </tr>
                  </thead>
                  <tbody>";
    
        for ($i = 0; $i <= 17; $i++) {
            $binary = sprintf("%08b", $i); 
            $octal = sprintf("%02o", $i);  
            $decimal = sprintf("%02d", $i); 
            $hexadecimal = sprintf("%02X", $i); 
    
            $html .= "<tr>
                        <td>$binary</td>
                        <td>$octal</td>
                        <td>$decimal</td>
                        <td>$hexadecimal</td>
                      </tr>";
        }
    
        $html .= "</tbody></table>";
    
        return $html;
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Dev Web - Herminet Teo</title>
    <meta charset="UTF-8"/>
    <meta name="Author" content="Herminet Teo"/>
    <meta name="Date" content="12/02/2025"/>
    <link rel="icon" type="image/png" href="./images/Globe.png"/>
    <link rel="stylesheet" href="styles.css"/>
</head>

<body>
    <div class="bandeauH">
        <div class="cases">
            <h1>TD 5</h1>
            <h2>PHP - introduction aux pages dynamiques</h2>
        </div>
    </div>

    <header>
        <a>
            <img src="./images/CY_Cergy_Paris_Universite_-_Logo.png" alt="LogoCY"/>
        </a>
    </header>

    <section class="principale">
        <div class="exercices">
            <h2>Exercice 1 - fonction prédéfinie</h2>
            <?php echo "L'heure actuelle du serveur est : " . date("H:i:s"); ?>
        </div>
    </section>

    <section class="principale">
        <div class="exercices">
            <h2>Exercice 2 - fonction et boucles</h2>
            <div class="exception">
                <?php echo genererListe(); ?>
            </div>
        </div>
    </section>

    <section class="principale">
        <div class="exercices">
            <h2>Exercice 3 - conversions ASCII</h2>
            <?php echo exo3(); ?>
        </div>
    </section>
    
    <section class="principale">
        <div class="exercices">
            <div class="exception2">
                <h2>Exercice 4 - fonctions prédéfinies et boucles</h2>
                <?php echo genererHexa(); ?>
            </div>
        </div>
    </section>

    <section class="principale">
        <div class="exercices">
            <div class="exception2">
                <h2>Exercice 5 - boucles PHP</h2>
                <?php echo generateTable(); ?>        
            </div>
        </div>
    </section>

    <footer>
        <section class="boutonRemonter">
            <nav>
                <ul class="boutonRemonter">
                    <li><a href="#top">Remonter</a></li>
                </ul>
            </nav>
        </section>
        <div class="cases">
            <cite>Herminet Téo</cite>
            <cite>- <span id="Chrono"></span> -</cite>
            <cite>- 2025 -</cite>
        </div>
    </footer>
</body>
</html>