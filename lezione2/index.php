//1. Controlliamo il funzionamento del PHP
<?php
  phpinfo();
?>

//2. Apro e chiudo PHP
<?php

  //Inserisco codice PHP

?>

//3. Apri e chiudi PHP molteplici volte
<?php

  //Prima porzione codice PHP

?>

<?php

  //Seconda porzione codice PHP

?>

//4. Mancata interpretazione PHP
<?php

  //Blocco PHP vuoto

?>

phpinfo();

//5. Pagina HTML generata in PHP
<?php
  echo "<html>";

  echo "<head>";
  echo "<title>La mia prima pagina PHP</title>";
  echo "</head>";

  echo "<body>";
  echo "<p>Tutto il codice HTML &egrave; stato inserito con il PHP.</p>";
  echo "</body>";

  echo "</html>";
?>

//6. Mescoliamo il codice HTML e quello PHP
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php echo "La mia prima pagina PHP"; ?></title>
  </head>
  <body>
    <p>
      <?php echo "Tutto il codice HTML &egrave; stato inserito con il PHP."; ?>
    </p>
  </body>
</html>

//7. Apici, virgolette e stringhe
<?php
  //Corrette
  echo "Ciao sono una stringa";
  echo 'Anche io sono una stringa';
  echo "Qui vengono usate le \"virgolette\" con un escape";
  echo 'Mentre qui l\'escape serve per il singolo apice';
  echo "Volendo pero posso 'mischiare' virgolette e apici";
  echo 'E anche "fare" il contrario';

  //Sbagliate
  echo "Pero se inizio con le virgolette';
  echo 'non posso finire con un singolo apice";
  echo "Devo anche stare "attento";
  echo a come equilibrare il tutto";
?>
