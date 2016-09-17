<?php
   // store exercise variable as a string
   $exercise1 = 'Press ups!';
   $exercise2 = 'Sit ups!';
   $exercise3 = 'Jogging!';
   $exercise4 = 'Fishing!';
   $exercise5 = 'Cycling!';
   $exercise6 = 'Napping!';
   $exercise7 = 'Yoga!';

   $day = date('N');

   if($day == 1) {
      echo $exercise1 . "\n";
   } elseif ($day == 2) {
      echo $exercise2 . "\n";
   } elseif ($day == 3) {
      echo $exercise3 . "\n";
   } elseif ($day == 4) {
      echo $exercise4 . "\n";
   } elseif ($day == 5) {
      echo $exercise5 . "\n";
   } elseif ($day == 6) {
      echo $exercise6 . "\n";
   } else {
      echo $exercise7 . "\n";
   }

?>
