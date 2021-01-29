<!DOCTYPE html>
<html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>PHP Snack 1</title>
 </head>
 <body>
      <!-- Creiamo un array 'matches' contenente altri array i quali rappresentano
       delle partite di basket di un’ipotetica tappa del calendario. 
       Ogni array della partita avrà una squadra di casa e una squadra ospite, 
       punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
       Stampiamo a schermo tutte le partite con questo schema: Olimpia Milano - Cantù | 55 - 60 -->

     <?php
      $matches = [
         [
          'home_team' => 'Virtus Bologna',
          'away_team' => 'Brescia',
          'home_points' => 89,
          'away_points' => 109
         ],
         [
            'home_team' => 'Olimpia Milano',
            'away_team' => 'Cantù',
            'home_points' => 55,
            'away_points' => 60
         ],
         [
            'home_team' => 'Cremona',
            'away_team' => 'Treviso',
            'home_points' => 119,
            'away_points' => 111
         ],
       ]
     ?>
     <h3>Risultati giornata 14</h3>
     <ul>
         <?php for ($i=0; $i < count($matches); $i++){?>
             <?php $match = $matches[$i];?>
             <li><?php echo $match['home_team'] . ' - ' . $match['away_team'] . ' | ' . $match['home_points'] . ' - ' . $match['away_points'];?></li>
         <?php }?>
     </ul>
 </body>
</html>