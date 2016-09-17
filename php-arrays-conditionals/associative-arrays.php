<?php
   $filmArray = array(
      'LOTR' => 'Fantasy',
      'Matrix' => 'Sci-Fi',
      'Love Actually' => 'Chick Flick',
      'X-Men' => 'Action',
      'Hannibal' => 'Thriller',
      'The Hangover' => 'Comedy'
   );

   // while(list($key, $val) = each($filmArray)) {
   //    echo "$key => $val\n";
   // }

   foreach ($filmArray as $film => $genre) {
      echo $genre . ': ' . $film . "\n";
   }
?>
