<!-- Stampare una stringa verde se la variabile password passata in Get è uguale a 'Boolean'.
Altrimenti stampare una stringa rossa. -->

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Esercizio-1-slide39</title>
  </head>
  <body>
    <?php
      $messaggio;
      $class;
      $stringa = $_GET['password'];

      if (!empty($stringa) && $stringa === 'boolean') {
        $messaggio = 'Correct';
        $class = 'green';
      }else {
        $messaggio = 'Wrong';
        $class = 'red';
      }
    ?>
    <h1 class="<?php echo $class; ?>" style="color:<?php echo $class; ?>" > <?php echo $messaggio ?> </h1>

  </body>
</html>
