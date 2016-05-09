<?php

    //Stringhe
    $nome = "Andrea";
    $cognome = "Barghigiani";
    $_via = "Giovanni Giolitti";

    //Numeri
    $int = 3;
    $negint = -1;
    $bigint = 1234567;
    $vir = 3.14159265358979323846;
    $negvir = -1.234;

    //Booleani
    $vero1 = true;
    $vero2 = True;
    $vero3 = TRUE;

    $falso1 = false;
    $falso2 = False;
    $falso3 = FALSE;

    //Array
    //Sintassi standard
    $frutta = array(
        "mela",
        "pera",
        "banana",
        "kiwi"
    );

    //Sintassi abbreviata (da PHP 5.4)
    $bibite = [
        "aranciata",
        "cola",
        "chinotto",
        "birra",
        "vino"
    ];

    $arr = array(
        $nome,
        true,
        "Pippo",
        3.14
    );

    //Operazioni Aritmetiche
    $somma = 1 + 1; //2
    $sottrazione = 2 - 1; //1
    $moltiplicazione = 2 * 2; //4
    $divisione = 4 / 2; //2
    $modulo = 5 % 2; //1
    $potenza = 2 ** 3; //8

    $calc = ( 9 + 2 ) * 4;
    $multi = ( ( 9 - 2 ) - 5 ) * ( 12 / 3 );

    //Operazioni Stringhe
    $nuova_stringa = $nome . " " . $cognome;
    //echo $nuova_stringa;

    //Operatori di confronto
    $uguale = 3 == 3;
    $identico = 3 === 3;
    $diverso1 = 1 != 3;
    $diverso2 = 1 <> 3;
    $minore = 1 < 3;
    $maggiore = 3 > 1;
    $minore_uguale = 3 <= 3;
    $maggiore_uguale = 3 >= 3;
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Lezione 3</title>
    </head>
    <body>
        <h1><?php echo $nome; ?></h1>
        <?php
        echo "<p>Ciao, mi chiamo $nome $cognome, \n Perch&egrave; non ti presenti?</p>";
        echo "<p>Con i doppi apici posso anche \r inserire altri \t caratteri di escape</p>";
        ?>

        <pre>
        <?php
            print_r( $arr );
        ?>
        </pre>
    </body>
</html>
