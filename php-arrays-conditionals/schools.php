<?php
//Students class average <70%:
$student = 'Alena Holligan';
$classAvg = 82;
$grade = 11;

if($classAvg < 70) {
   echo "Dear $student,\n We look forward to seeing you at summer school, beginning July 1st!\n";
} else {
   if ($grade == 9) {
      echo "Dear $student,\n Congratulations on completing your freshman year in High School! We’ll see you on September 1st for the start of your sophomore year!\n";
   } elseif ($grade == 10) {
      echo "Dear $student,\n Congratulations on completing your sophomore year in High School! We’ll see you on September 1st for the start of your junior year!\n";
   } elseif ($grade == 11) {
      echo "Dear $student,\n Congratulations on completing your junior year in High School! We’ll see you on September 1st for the start of your senior year!\n";
   } elseif ($grade == 12) {
      echo "Dear $student,\n Congratulations! You’ve graduated High School! Don’t forget to come back and visit.\n";
   }
}

?>
