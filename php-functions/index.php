<?php
   function hello($name = 'computron') {
      echo "Hello $name\n";
   }
   hello('Owain');
   hello();

   function greet($name = 'friend', $timeOfDay = Null) {
      if($timeOfDay) {
         echo "Hello $name, good $timeOfDay\n";
      } else {
         echo "Hello $name, good day\n";
      }
   }
   greet('Angie', 'Morrow');
   greet();

   function isArray($arr) {
      if(is_array($arr)) {
         foreach ($arr as $name) {
            echo "Hello there, $name! How are you doing old chap!\n";
         }
      } else {
         echo "Hello Stranger!";
      }
   }

   $names = [
      'Owain',
      'Angie',
      'Karin',
      'Kimmo'
   ];
   isArray($names);

   $currentUser = 'noob';

   function isUser() {
      global $currentUser;
      if($currentUser == 'admin') {
         echo "You own this place $admin!\n";
      } else {
         echo "Get promoted! $currentUser!\n";
      }
   }
   // isUser();

   $func = 'hello';
   $func();
   $func('James');

?>
