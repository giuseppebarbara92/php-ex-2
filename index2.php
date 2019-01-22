<!-- Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario.
Ogni array avrà una squadra di casa e una squadra ospite.
Avremo poi sempre per ogni array i punti fatti dalla squadra di casa e ospite.
Stampiamo a schermo tutte le partite con questo schema, tenendo conto che il punteggio
potrebbe non essere disponibile.
Olimpia - cANTÙ | 55-60 -->

<?php

  $giornataCampionato = [

    [
      'squadra_casa' => 'Lakers',
      'squadra_ospite' => 'Miami Heat',
      'punti_squadra_casa' => 80,
      'punti_squadra_ospite' => 70,
    ],
    [
      'squadra_casa' => 'Warriors',
      'squadra_ospite' => 'Kings',
      'punti_squadra_casa' => null,
      'punti_squadra_ospite' => null,
    ],
    [
      'squadra_casa' => 'Cavaliers',
      'squadra_ospite' => 'Raptors',
      'punti_squadra_casa' => 78,
      'punti_squadra_ospite' => 91,
    ],
  ];
?>

<ul>
  <?php foreach ($giornataCampionato as $singoloEvento) { ?>
    <li>

      <?php echo $singoloEvento['squadra_casa']; ?>
      -
      <?php echo $singoloEvento['squadra_ospite']; ?>
      |
      <?php if (
            !empty($singoloEvento['punti_squadra_casa'])
            && !empty($singoloEvento['punti_squadra_ospite'])
          ) { ?>

            <?php echo $singoloEvento['punti_squadra_casa']; ?>
            -
            <?php echo $singoloEvento['punti_squadra_ospite']; ?>

      <?php } else {
        echo 'partita non ancora disputata';
      }?>

    </li>
  <?php } ?>
</ul>
