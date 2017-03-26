<?php

class Render {

   public function __toString() {
      $output .= "The following methods are available for" . __CLASS__ . "objects: \n";
      $output .= implode("\n", get_class_methods(__CLASS__));
      $output .= "\n\n";

      return $output;
   }

   public static function listShopping($ingredientList) {
      ksort($ingredientList);
      return implode("\n", array_keys($ingredientList));
   }

   public static function listRecipes($titles) {
      asort($titles);
      return implode("\n", $titles);
   }

   public static function listIngredients($ingredients) {

      $output = "";

      foreach ($ingredients as $ing) {
         $output .= $ing["amount"] . $ing["measure"] . " " . $ing["item"] . "\n";
      }

      return $output;

   }

   public static function displayRecipe($recipe) {

      $output = "";
      $output .= "\n";

      $output .=  $recipe->getTitle() . " by " . $recipe->getSource();
      $output .= "\n";

      $output .= self::listIngredients($recipe->getIngredients());
      $output .= "\n";

      $output .= "Yield: " . $recipe->getYield();
      $output .= "\n";

      foreach ($recipe->getInstructions() as $inst) {
         $output .= $inst . "\n";
      }
      $output .= "\n";

      foreach ($recipe->getTags() as $tag) {
         $output .= $tag . "\n";
      }
      $output .= "\n";

      return $output;

   }

}
?>
