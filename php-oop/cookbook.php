<?php
include "classes/recipe.php";
include "classes/render.php";
include "classes/recipe-collection.php";
include "inc/recipes.php";


// $recipeOne = new Recipe("halloumi salad");
//
// $recipeOne->addIngredient("halloumi", 0.5, "kg");
// $recipeOne->addIngredient("Lettuce", 1, "kg");
// $recipeOne->addIngredient("Wine", 240, "l");
// $recipeOne->addIngredient("Tomato", 250, "g");
//
// $recipeOne->addInstructions("Grill the halloumi for 10mins");
// $recipeOne->addInstructions("Remove from heat once brown and put aside");
//
// $recipeOne->setYield("Loads of tasty salad\n");
//
// $recipeOne->setSource("Angie 'Bulldog' Hart\n");
//
// $recipeOne->addTags("Dinner");
// $recipeOne->addTags("Starter");
// $recipeOne->addTags("Main Course");
// $recipeOne->addTags("Lunch");

$cookbook = new RecipeCollection("Treehouse Recipes");
$cookbook->addRecipe($lemon_chicken);
$cookbook->addRecipe($granola_muffins);
$cookbook->addRecipe($belgian_waffles);
$cookbook->addRecipe($pepper_casserole);
$cookbook->addRecipe($lasagna);
$cookbook->addRecipe($dried_mushroom_ragout);
$cookbook->addRecipe($rabbit_catalan);
$cookbook->addRecipe($grilled_salmon_with_fennel);
$cookbook->addRecipe($pistachio_duck);
$cookbook->addRecipe($chili_pork);
$cookbook->addRecipe($crab_cakes);
$cookbook->addRecipe($granola);



// echo Render::listRecipes($cookbook->getRecipeTitles());

$dinner = new RecipeCollection("Favourite Breakfasts");
foreach ($cookbook->filterByTag("dinner") as $recipe) {
   $dinner->addRecipe($recipe);
}
echo "\n\n Shopping List \n\n";
echo Render::listShopping($dinner->getCombinedIngredients());

// echo Render::displayRecipe($granola_muffins);













?>
