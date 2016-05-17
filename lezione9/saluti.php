<?php
 require( 'Saluto.php' );
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
            $u3 = new Saluto( "Ludovica" );
            $u4 = new Saluto( "Paola" );

            echo $u3->benvenuto();
            echo $u4->benvenuto();
        ?>
    </body>
</html>
