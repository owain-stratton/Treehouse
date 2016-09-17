<?php

$currentYear = date('Y');

for($year = $currentYear - 100; $year <= $currentYear; $year++) {
   echo $year . "\n";
}

// OR //

for($currentYear = date('Y'), $year = $currentYear - 100; $year <= $currentYear; $year++) {
   echo $year . "\n";
}

// OR //

for($year = date('Y') - 100; $year <= date('Y'); $year++) {
   echo $year . "\n";
}
?>
