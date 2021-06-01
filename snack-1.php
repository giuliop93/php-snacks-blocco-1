Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario.
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa
e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60

<?php
   $matches = [
      [
         'homeTeam' => 'Olimpia Milano',
         'homeScore' => 55,
         'guestTeam' => 'Cantù',
         'guestScore' => 60
      ],
      [
         'homeTeam' => 'Virtus Roma',
         'homeScore' => rand(60, 100),
         'guestTeam' => 'Snaidero Udine',
         'guestScore' => rand(70, 100)
      ],
      [
         'homeTeam' => 'Fortitudo Bologna',
         'homeScore' => 70,
         'guestTeam' => 'Mens Sana Siena',
         'guestScore' => 84
      ],
   ];
?>

<ul>
      <?php
         for ($i = 0; $i < count($matches); $i++) {
            echo
            "<li>" .
               $matches[$i]["homeTeam"] . " - " . $matches[$i]["guestTeam"] . " | " . $matches[$i]["homeScore"] . "-" .  $matches[$i]["guestScore"] ."<br>" .
            "</li>";
         }
      ?>
</ul>