<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Lezione 11 - Passiamo i dati tra pagine con PHP</title>
</head>
<body>
  <?php if( $_GET['invio'] ) : ?>
    <h1>I dati sono stati passati alla stessa pagina</h1>
    <p>
      Adesso posso mostrare tutto ci&oacute; che &egrave; stato passato in una lista:
      <ul>
        <?php foreach( $_GET as $key => $value ) : ?>
          <li><strong><?php echo $key; ?> - </strong><?php echo $value; ?></li>
        <?php endforeach; ?>
      </ul>
    </p>
  <?php else : ?>
    <h1>Passiamo dati tra pagina con PHP</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <input type="text" name="nome" id="nome">
      <input type="text" name="cognome" id="cognome">
      <input type="submit" value="Invia Dati" name="invio" id="invio">
    </form>
  <?php endif; ?>
</body>
</html>
