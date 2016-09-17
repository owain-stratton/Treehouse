<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('html_errors', 1);

$errorLevels = [
   "E_ALL",
   "E_NOTICE",
   "E_WARNING",
   "E_ERROR",
   "E_STRICT",
   "E_DEPRECATED",
   "E_PARSE"
];

foreach ($errorLevels as $error) {
   echo $error."\n";
}

?>
