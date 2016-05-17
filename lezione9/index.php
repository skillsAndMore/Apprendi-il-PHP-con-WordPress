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
            $u1 = new Saluto( "Andrea" );
            $u2 = new Saluto( "Francesco" );

            echo $u1->benvenuto();
            echo $u2->benvenuto();
        ?>
    </body>
</html>
