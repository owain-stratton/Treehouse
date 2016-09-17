<?php
      $nicknames = array('Squed', 'Toastface', 'Chicken Bum');
      var_dump($nicknames);
      $nicknames[] = 'Stratts';

      array_push($nicknames, 'Awning', 'Owl Face', 'Strattsie');
      array_unshift($nicknames, 'O');

      // array_shift($nicknames);
      // array_pop($nicknames);
      echo implode("\n", $nicknames);

      $nicknames = array_values($nicknames);
      var_dump($nicknames);

      for ($i=0; $i < count($nicknames); $i++) {
         echo $nicknames[$i] . "\n";
      }
?>
