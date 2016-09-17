<?php
   $currentYear = date('Y');
   $year = $currentYear - 100;


   while(++$year <= $currentYear) {
      echo $year . "\n";
   }

   do {
      echo $year . "\n";
   } while(++$year <= $currentYear);

?>
