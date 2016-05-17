<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Ottengo i dati del modulo</title>
</head>
<body>
  <h1>Ottengo i dati del modulo</h1>
  <?php if( $_GET['invio'] ): ?>
    <h2>Benvenuto <?php echo $_GET['nome'] . ' ' . $_GET['cognome']; ?></h2>
    <p>
      Ti trovi sulle pagine di skillsAndMore ed &egrave; un piacere vederti nuovamente al suo interno.
    </p>
<?php else : ?>
    <h2>Non &egrave; stato inviato niente.</h2>
  <?php endif; ?>
</body>
</html>
