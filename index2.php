<!DOCTYPE html>
<html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>PHP Snack 2</title>
 </head>
 <body>
     <!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi che non
     conosciamo nella documentazione) che:
     1. name sia più lungo di 3 caratteri,
     2. mail contenga un punto e una chiocciola
     3. age sia un numero.
     Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

     <?php
      $name = $_GET["name"];
      $mail = $_GET["mail"];
      $age = $_GET["age"];
      
      if (strlen($name) <= 3) {
        echo 'Accesso negato';
      }
      elseif (!strpos($mail, '@') || !strpos($mail, '.')) {
        echo 'Accesso negato';
      }
      elseif (!is_numeric($age)) {
        echo 'Accesso negato';
      }
      else {
        echo 'Accesso riuscito';
      }
     ?>
 </body>
</html>