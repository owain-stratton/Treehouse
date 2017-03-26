<?php

class Recipe {

   private $title;
   private $ingredients = [];
   private $instructions = [];
   private $yield;
   private $tags = [];
   private $source = "Owain Stratton";

   private $measurements = [
      "tsp",
      "tbsp",
      "cup",
      "l",
      "dl",
      "g",
      "kg",
      'lb',
      'oz',
      'quart'
   ];

   public function __construct($title = null) {
      $this->setTitle($title);
   }

   public function __toString() {
      $output = "You are calling a " . __CLASS__ . " object with a title \"";
      $output .= $this->getTitle() . "\"\n";
      $output .= "It is stored in " . basename(__FILE__) . " at " . __DIR__ . "\n";
      $output .= "This display is from line " . __LINE__ . " in method " . __METHOD__ . "\n";

      $output .= "The following methods are available for objects on this class: \n";
      $output .= implode("\n", get_class_methods(__CLASS__));
      $output .= "\n\n";
      return $output;
   }

   public function setTitle($title) {
      if(empty($title)) {
         $this->title = null;
      } else {
         $this->title = ucwords($title);
      }
   }

   public function getTitle() {
      return $this->title;
   }

   public function addIngredient($item, $amount = null, $measure = null) {
      if($amount != null && !is_float($amount) && !is_int($amount)) {
         exit("The amount must best a float: " . gettype($amount) . " $amount given.\n");
      }
      if($measure != null && !in_array(strtolower($measure), $this->measurements)) {
         exit("You entered $measure. Please enter a valid measurement: " . implode(", ", $this->measurements) . "\n");
      }
      $this->ingredients[] = [
         "item" => ucwords($item),
         "amount" => $amount,
         "measure" => strtolower($measure)
      ];
   }

   public function getIngredients() {
      return $this->ingredients;
   }

   public function addInstructions($string) {
      $this->instructions[] = $string;
   }

   public function getInstructions() {
      return $this->instructions;
   }

   public function addTags($tag) {
      $this->tags[] = strtolower($tag);
   }

   public function getTags() {
      return $this->tags;
   }

   public function setYield($yield) {
      $this->yield = $yield;
   }

   public function getYield() {
      return $this->yield;
   }

   public function setSource($source) {
      $this->source = ucwords($source);
   }

   public function getSource() {
      return $this->source;
   }

}

?>
