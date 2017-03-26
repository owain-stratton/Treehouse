<?php

   $player1 = 0;
   $player2 = 0;
   $round = 0;

   // var_dump(abs($player1 - $player2)); //display absolute value of difference

   while (abs($player1 - $player2) < 2 || ($player1 < 11 && $player2 < 11)) {
      $round++;
      echo "Round: $round\n";
      if(rand(0,1)) {
         $player1++;
      } else {
         $player2++;
      }
      echo "Player 1 score: $player1\n";
      echo "Player 2 score: $player2\n";

   }
   if($player1 > $player2) {
      echo "Player 1";
   } else {
      echo "Player 2";
   }
   echo " is the winner after $round rounds of play!\n";


?>
